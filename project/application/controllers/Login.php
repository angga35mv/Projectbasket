<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();

		// Load database
		$this->load->model('m_login');
	}


	public function index()
	{
		$this->load->view('templates/header.php');
		$this->load->view('templates/nav2.php');
		$this->load->view('login');
		$this->load->view('templates/footer.php');
		
		
	}

	// Check for user login process
	public function proses_login() {
		
		$data = array(
			'username' => trim($this->input->post('user')),
			'password' => trim($this->input->post('pass'))		
		);
		//print_r($data);
		
		$result = $this->m_login->login($data);
		if ($result == 1) {

				$username = $this->input->post('user');
				$result = $this->m_login->read_user_information($username);
				if ($result != false) {
					$session_data = array(
						'id' => $result[0]->id_anggota,
						'username' => $result[0]->username,
						'email' => $result[0]->email,
						'tipe' => $result[0]->tipe_anggota
					);
					//print_r($session_data);
					// Add user data in session
					$this->session->set_userdata('logged_in', $session_data);
					//$this->load->view('admin_page');
					//$this->session->set_flashdata("pesan",  "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Login berhasil!!</div></div>");
               		redirect('home'); 
				}
		} else if ($result == 0){
			$this->session->set_flashdata("pesan",  "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">username atau password salah</div></div>");
           	redirect('login'); 
		}
		
	}

	// Logout from admin page
	public function logout() {

		// Removing session data
		$sess_array = array(
			'username' => ''
		);
		$this->session->unset_userdata('logged_in', $sess_array);
		//$data['message_display'] = 'Successfully Logout';
		redirect('home');
	}
}
