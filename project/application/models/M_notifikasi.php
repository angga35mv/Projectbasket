<?php 

class M_notifikasi extends CI_Model{
	
	public function __construct() {
        parent::__construct();
    }

    public function countAllUnread() {
        $condition = "tipe_notif = 'u'";
        $this->db->select('*');
        $this->db->from('notifikasi');
        $this->db->where($condition);
        $this->db->limit(0);
        $query = $this->db->get();
        return $query->num_rows();
    }

     public function selectAllnotif($limit) {
        $this->db->select('*');
        $this->db->from('notifikasi');
        $this->db->limit($limit);
        $this->db->order_by('tgl_notif', 'desc');
        $query = $this->db->get();
        return $query->result();
    }
    

    public function selectAllUnread() {
        $condition = "tipe_notif = 'u'";
        $this->db->select('*');
        $this->db->from('notifikasi');
        $this->db->where($condition);
        $this->db->limit(0);
        $query = $this->db->get();
        return $query->result();
    }
    
    public function simpandata($temp){
        $data = array(
        		'judul_notif' =>  $temp['jdl'],
                'isi_notif' => $temp['isi'],
                'tipe_notif' => $temp['tipe'],
                'tgl_notif' => date('Y-m-d H:i:s')
                );

        $this->db->insert( 'notifikasi', $data);
        return $this->db->affected_rows() > 0;
    }

    public function edittipe($temp){
        $data = array(
                'tipe_notif' =>  $temp['tipe']
                );

        $this->db->where('id_notif', $temp['id']);
        $this->db->update('notifikasi', $data);
        return $this->db->affected_rows() > 0;
    }


    public function hapussemuadata(){

        $this->db->where('id_anggota');
        $this->db->delete('members');
        return $this->db->affected_rows() > 0;
        
    }
}