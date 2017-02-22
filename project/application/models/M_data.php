<?php 

class M_data extends CI_Model{
	
	public function insert_user()
	{
		$data =
		[	'namalengkap'		=> $this->input->post('namalengkap'),
			'nim'				=> $this->input->post('nim'),
			'alamat'			=> $this->input->post('alamat'),
			'telepon'			=> $this->input->post('telepon'),
			'email'				=> $this->input->post('email'),
			];

		$this->db->insert('pendaftaran', $data);
	}

	public function insert_user_saran()
	{
		$data =
		[	'saran'		=> $this->input->post('saran'),
			'nama'		=> $this->input->post('nama'),
			];

		$this->db->insert('saran', $data);
	}

	public function insert_user_connect()
	{
		$data =
		[	'nama'		=> $this->input->post('nama'),
			'komunitas'				=> $this->input->post('komunitas'),
			'link'			=> $this->input->post('link'),
			'telp'			=> $this->input->post('telp'),
			];

		$this->db->insert('connect', $data);
	}
//----------------------------------------------------------------

	function tampil_kegiatan(){
		return $this->db->get('kegiatan');
	}

	function tampil_info(){
		return $this->db->get('pendaftaran');
	}

	function tampil_saran(){
		return $this->db->get('saran');
	}

	function tampil_connect(){
		return $this->db->get('connect');
	}
//-----------------------------------------------------------------

	function ambil_data(){
		return $this->db->get('pendaftaran');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
//----------------------------------------------------------------

	function hapus_saran($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function hapus_connect($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function hapus_kegiatan($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function hapus_anggota($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
//----------------------------------------------------------------


	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
	
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}