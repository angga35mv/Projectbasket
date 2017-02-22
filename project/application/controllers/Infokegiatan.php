<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class infokegiatan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_data');
		$this->load->helper('url'); 
	}

	public function index()
	{
		$data['kegiatan'] = $this->m_data->tampil_kegiatan()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/nav2');
		$this->load->view('infokegiatan',$data);
		$this->load->view('templates/footer');
	}
}
