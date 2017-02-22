<?php 

class M_peserta extends CI_Model{
	
	public function __construct() {
        parent::__construct();
    }

    public function registeruser($fotopath){
        $data = array(
        		'nm_anggota' =>  $this->input->post('inputNama'),
                'email' => $this->input->post('inputEmail'),
                'username' =>  $this->input->post('inputUser'),
                'password' =>  password_hash( $this->input->post('inputPass'), PASSWORD_BCRYPT ),
                'tmp_lhr' =>  $this->input->post('inputTmptLhr'),
                'tgl_lhr' =>  $this->input->post('inputTglLhr'),
                'tgg_bdn' =>  $this->input->post('inputTgg'),
                'almt_anggota' =>  $this->input->post('inputAlamat'),
                'jk_anggota' =>  $this->input->post('inputJK'),
                'jrs_anggota' =>  $this->input->post('inputJrs'),
                'pos_bskt' =>  $this->input->post('inputPos'),
                'foto_anggota' =>  $fotopath,
                'tipe_anggota' =>   $this->input->post('inputTipe')
                );

        $this->db->insert( 'members', $data );
        return $this->db->affected_rows() > 0;
    }

    
    public function namausersudahterdaftar( $namauser ){
        $query = $this->db->get_where( 'members', array( 'username' => $namauser) );
        $result = $query->row_array();
        if( !empty($result) ) {
           return true;
        }
        return false;  
    }

    public function emailsudahterdaftar( $emailaddr ){
        $query = $this->db->get_where( 'members', array( 'email' => $emailaddr) );
        $result = $query->row_array() ;
        if( !empty($result) ) {
            return true;
        }
        return false;
    }
    
    public function selectAllUser() {
        $this->db->from('members');
        $this->db->order_by('nm_anggota', 'asc');
        $query = $this->db->get(); 
        return $query->result();
    }

    public function selectUser($id) {
        $condition = "id_anggota =" . "'" . $id . "'";
        $this->db->select('*');
        $this->db->from('members');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function edituser($id){
        $data = array(
                'nm_anggota' =>  $this->input->post('inputNama'),
                'email' => $this->input->post('inputEmail'),
                'username' =>  $this->input->post('inputUser'),
                'password' =>  password_hash( $this->input->post('inputPass'), PASSWORD_BCRYPT ),
                'tmp_lhr' =>  $this->input->post('inputTmptLhr'),
                'tgl_lhr' =>  $this->input->post('inputTglLhr'),
                'tgg_bdn' =>  $this->input->post('inputTgg'),
                'almt_anggota' =>  $this->input->post('inputAlamat'),
                'jk_anggota' =>  $this->input->post('inputJK'),
                'jrs_anggota' =>  $this->input->post('inputJrs'),
                'pos_bskt' =>  $this->input->post('inputPos'),
                'tipe_anggota' =>  $this->input->post('inputTipe')
                );

        $this->db->where('id_anggota', $id);
        $this->db->update('members', $data);
        return $this->db->affected_rows() > 0;
    }

    public function editfoto($temp){
        //echo $temp['foto']."=====";
        
        $id = $temp['id'];
        $data = array(
                'foto_anggota' =>  $temp['foto']
                );

        $this->db->where('id_anggota', $id);
        $this->db->update('members', $data);
        return $this->db->affected_rows() > 0;
        
    }

    public function hapusdata($id){

        $this->db->where('id_anggota', $id);
        $this->db->delete('members');
        return $this->db->affected_rows() > 0;
        
    }
}