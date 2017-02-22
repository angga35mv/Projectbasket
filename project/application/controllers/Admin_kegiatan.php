<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_kegiatan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_data');
		$this->load->helper('url'); 
	}

	public function index()
	{
		if(!isset($_SESSION['login'])) redirect(base_url().'admin');
		$data['kegiatan'] = $this->m_data->tampil_kegiatan()->result();
		$this->load->view('templates/header.php');
		$this->load->view('templates/nav.php');
		$this->load->view('admin_kegiatan',$data);
		$this->load->view('templates/footeradmin.php');
	}

	function hapus($id)
	{
		$where = array('id' => $id);
		$this->m_data->hapus_kegiatan($where,'kegiatan');
		redirect('admin_kegiatan');
	}

	function tambah()
	{
	$this->load->view('templates/header.php');
	$this->load->view('templates/nav.php');
	$this->load->view('t_kegiatan');
	$this->load->view('templates/footeradmin.php');
	}

	function tambah_aksi()
	{
		$tanggal = $this->input->post('tanggal');
		$kegiatan = $this->input->post('kegiatan');

		$data = array(
			'tanggal' => $tanggal,
			'kegiatan' => $kegiatan,
			);
		$this->m_data->input_data($data,'kegiatan');
		redirect('admin_kegiatan');
	}

	function edit($id)
	{
	$where = array('id' => $id);
	$data['kegiatan'] = $this->m_data->edit_data($where,'kegiatan')->result();
	$this->load->view('templates/header.php');
	$this->load->view('templates/nav.php');
	$this->load->view('u_kegiatan',$data);
	$this->load->view('templates/footeradmin.php');
	}
	
	function update()
	{
	$id = $this->input->post('id');
	$tanggal = $this->input->post('tanggal');
	$kegiatan = $this->input->post('kegiatan');

	$data = array(
		'tanggal' => $tanggal,
		'kegiatan' => $kegiatan,
	);

	$where = array(
		'id' => $id
	);
	$this->m_data->update_data($where,$data,'kegiatan');
	redirect('admin_kegiatan');
	}


}