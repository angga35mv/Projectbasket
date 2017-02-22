<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_Pendaftaran extends CI_Controller {

	public function index()
	{
		$this->load->view('form_pendaftaran');
	}
}
