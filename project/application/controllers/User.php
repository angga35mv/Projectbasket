<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('m_peserta');
	}


	public function index()
	{
		$data =  $this->session->userdata('logged_in');
		//echo $data['id'];
		$result  = $this->m_peserta->selectUser($data['id']);
		$data = array(
				'id_anggota' => $result[0]->id_anggota,
        		'nm_anggota' =>  $result[0]->nm_anggota,
                'email' => $result[0]->email,
                'username' =>  $result[0]->username,
                'password' =>  $result[0]->password,
                'tmp_lhr' =>  $result[0]->tmp_lhr,
                'tgl_lhr' =>  $result[0]->tgl_lhr,
                'tgg_bdn' =>  $result[0]->tgg_bdn,
                'almt_anggota' =>  $result[0]->almt_anggota,
                'jk_anggota' =>  $result[0]->jk_anggota,
                'jrs_anggota' =>  $result[0]->jrs_anggota,
                'pos_bskt' =>  $result[0]->pos_bskt,
                'foto_anggota' =>  $result[0]->foto_anggota,
                'tipe_anggota' =>  $result[0]->tipe_anggota
                );
		//print_r($data);
		$this->load->view('templates/header');
        $this->load->view('templates/nav');
		$this->load->view('user/profil',$data);	
	}

	public function showeditprofil($iduser){
		
		//$result  = $this->m_peserta->selectUser(trim($this->input->post('id')));
		$result  = $this->m_peserta->selectUser(trim($iduser));
		$data = array(
				'id_anggota' => $result[0]->id_anggota,
        		'nm_anggota' =>  $result[0]->nm_anggota,
                'email' => $result[0]->email,
                'username' =>  $result[0]->username,
                'password' =>  $result[0]->password,
                'tmp_lhr' =>  $result[0]->tmp_lhr,
                'tgl_lhr' =>  $result[0]->tgl_lhr,
                'tgg_bdn' =>  $result[0]->tgg_bdn,
                'almt_anggota' =>  $result[0]->almt_anggota,
                'jk_anggota' =>  $result[0]->jk_anggota,
                'jrs_anggota' =>  $result[0]->jrs_anggota,
                'pos_bskt' =>  $result[0]->pos_bskt,
                'foto_anggota' =>  $result[0]->foto_anggota,
                'tipe_anggota' =>  $result[0]->tipe_anggota
                );
		
		//print_r($data);
		$this->load->view('templates/header');
        $this->load->view('templates/nav');
		$this->load->view('user/edit_profil',$data);	
	}

	public function edit_data(){
        $nama_folder = 'assets/uploads/'; //path folder
        $inputid     = trim($this->input->post('inputID'));
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
        $inputtipe   = trim($this->input->post('inputTipe'));
        
        //echo $inputnm."===".$inputemail."===".$inputuser."===".$inputpass."===".$inputtmp."===".$inputtgl."===".$inputtgg."===".$inputAlmt."===".$inputjk."===".$inputjrs."===".$inputpos."===".$inputtipe; 
        
        if(empty($inputnm)||empty($inputemail)||empty($inputuser)||empty($inputpass)||empty($inputtmp)||empty($inputtgl)||empty($inputtgg)||empty($inputAlmt)||empty($inputjk)||empty($inputjrs)||empty($inputpos)||(!isset($inputtipe))) {
        	$this->session->set_flashdata("pesan",  "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data tidak lengkap!!</div></div>");
            redirect('user/showeditprofil/'.$inputid); 
        }

        $result = $this->m_peserta->edituser($inputid);
		if($result ==1){
			$this->session->set_flashdata("pesan",  "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil disimpan!!</div></div>");
        	redirect('user/showeditprofil/'.$inputid); 
		}else{
			$this->session->set_flashdata("pesan",  "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data tidak berhasil disimpan!!</div></div>");
        	redirect('user/showeditprofil/'.$inputid); 
		} 
        
	}

	public function showeditfoto($iduser){
		
		//$result  = $this->m_peserta->selectUser(trim($this->input->post('id')));
		$result  = $this->m_peserta->selectUser(trim($iduser));
		$data = array(
				'id_anggota' => $result[0]->id_anggota,
                'foto_anggota' =>  $result[0]->foto_anggota
                );
		
		//print_r($data);
		$this->load->view('templates/header');
        $this->load->view('templates/nav');
		$this->load->view('user/edit_foto',$data);	
	}

	public function edit_foto(){
        $nama_folder = 'assets/uploads/'; //path folder
        $inputid     = trim($this->input->post('inputID')); 
        
        if($_FILES['inputFoto']['tmp_name']){
        	if(is_uploaded_file($_FILES['inputFoto']['tmp_name'])){ 
		    	$namefile = "file_".time()."".substr($_FILES['inputFoto']['name'],-4); //nama file saya beri nama langsung dan diikuti fungsi time
		    	$temp =$nama_folder.$namefile;
		    	move_uploaded_file($_FILES["inputFoto"]["tmp_name"],$temp);
             	//echo "File telah dikirim ";			 
             	//echo CI_VERSION;
             	$data = array(
					'id' => $inputid,
                	'foto' =>  $temp
                );
			  	$result = $this->m_peserta->editfoto($data);
				if($result ==1){
					$this->session->set_flashdata("pesan",  "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil disimpan!!</div></div>");
               		redirect('user/showeditfoto/'.$inputid); 
				}else{
					$this->session->set_flashdata("pesan",  "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data tidak berhasil disimpan!!</div></div>");
               		redirect('user/showeditfoto/'.$inputid); 
				}
		 	}else{
				$this->session->set_flashdata("pesan",  "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Foto tidak berhasil diupload!!</div></div>");
               	redirect('user/showeditfoto/'.$inputid); 
		 	}  
        }else{
        	$this->session->set_flashdata("pesan",  "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Foto tidak ditemukan!!</div></div>");
            redirect('user/showeditfoto/'.$inputid); 
        }
        

	}



}
