<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

	public function __construct() {
        parent::__construct();

		$this->load->model('m_peserta');
        $this->load->model('m_notifikasi');
    }


    public function cekemail(){
        $temp = $this->input->post('email');
        if(strlen(trim($temp))==0){
            echo "Email harus diisi";
        } else if (!filter_var($temp, FILTER_VALIDATE_EMAIL)) {
            echo "Email tidak valid";
        } else if( $this->m_peserta->emailsudahterdaftar($temp) ){
            echo "Email sudah terdaftar";
        } else {
            echo "Email bisa digunakan";
        }
    }

    public function cekusername(){
        if( $this->m_peserta->namausersudahterdaftar( $this->input->post('namauser') ) ){
          echo "1";
        } else {
           echo "0";
        }
    }

    public function cekjlhnotif(){
        echo json_encode($this->m_notifikasi->countAllUnread());
    }

    /**
    public function ceknotif(){
        echo json_encode($this->m_notifikasi->selectAllUnread());
    }
    */  

    public function ceknotif(){
        $limit = $this->m_notifikasi->countAllUnread();
        if($limit != 0){   
            echo json_encode($this->m_notifikasi->selectAllnotif($limit));
        }else{
            echo json_encode($this->m_notifikasi->selectAllnotif(5));
        }
    }

    public function readnotif(){
        $data = $this->m_notifikasi->selectAllUnread();
        $result=0;
        foreach ($data as $rdata) {
            $temp = array(
                'id' =>  $rdata->id_notif,
                'tipe' => 'r'
            );

            if($this->m_notifikasi->edittipe($temp)==1){
                $result++;
            }
        }
    }        

}
