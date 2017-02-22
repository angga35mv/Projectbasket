<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi_Anggota extends CI_Controller {

	public function __construct() {
        parent::__construct();
		$this->load->model('m_peserta');
        $this->load->model('m_notifikasi');
    }

	public function index()
	{
        $this->load->view('templates/header');
        $this->load->view('templates/nav2');
		$this->load->view('registrasi_anggota');

	}

	function tampil_data(){
		return $this->db->get('peserta_db');
	}

	public function input_data(){
        $nama_folder = 'assets/uploads/'; //path folder
        $inputnm     = trim($this->input->post('inputNama'));
        $inputemail  = trim($this->input->post('inputEmail'));
        $inputuser   = trim($this->input->post('inputUser'));
        $inputpass   = trim($this->input->post('inputPass'));
        $inputtmp    = trim($this->input->post('inputTmptLhr'));
        $inputtgl    = trim($this->input->post('inputTglLhr'));
        $inputtgg    = trim($this->input->post('inputTgg'));
        $inputAlmt   = trim($this->input->post('inputAlamat'));
        $inputjk     = trim($this->input->post('inputJK'));
        $inputjrs    = trim($this->input->post('inputJrs'));
        $inputpos    = trim($this->input->post('inputPos'));
         
        
        if(empty($inputnm)||empty($inputemail)||empty($inputuser)||empty($inputpass)||empty($inputtmp)||empty($inputtgl)||empty($inputtgg)||empty($inputAlmt)||empty($inputjk)||empty($inputjrs)||empty($inputpos)){
        	$this->session->set_flashdata("pesan",  "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data tidak lengkap!!</div></div>");
            redirect('registrasi_anggota'); 
        }

        if($_FILES['inputFoto']['tmp_name']){
        	if(is_uploaded_file($_FILES['inputFoto']['tmp_name'])){ 
		    	$namefile = "file_".time()."".substr($_FILES['inputFoto']['name'],-4); //nama file saya beri nama langsung dan diikuti fungsi time
		    	$temp =$nama_folder.$namefile;
		    	move_uploaded_file($_FILES["inputFoto"]["tmp_name"],$temp);
             	//echo "File telah dikirim ";			 
             	//echo CI_VERSION;
			  	$result = $this->m_peserta->registeruser($temp);
				if($result ==1){
                    $temp = array(
                            'jdl' =>  'Registrasi Anggota',
                            'isi' => $inputnm." telah mendaftar sebagai anggota",
                            'tipe' => 'u'
                        );
                    $result = $this->m_notifikasi->simpandata($temp);
					$this->session->set_flashdata("pesan",  "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil disimpan!!</div></div>");
               		redirect('registrasi_anggota'); 
				}else{
					$this->session->set_flashdata("pesan",  "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data tidak berhasil disimpan!!</div></div>");
               		redirect('registrasi_anggota'); 
				} 
		 	}else{
				$this->session->set_flashdata("pesan",  "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Foto tidak berhasil diupload!!</div></div>");
               	redirect('registrasi_anggota'); 
		 	}  
        }else{
        	$this->session->set_flashdata("pesan",  "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Foto tidak ditemukan!!</div></div>");
            redirect('registrasi_anggota'); 
        }
        

	}

}
