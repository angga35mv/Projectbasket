<?php 

class M_login extends CI_Model{
	
	public function __construct() {
        parent::__construct();
    }

    // Read data using username and password
    public function login($data) {

        $condition = "username ='" . $data['username'] ."'";
        $this->db->select('*');
        $this->db->from('members');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            $temp = $query->result();
            if (password_verify($data['password'], $temp[0]->password)) {
                return 1;
            } else {
                return 0;
            }
        } else {
            return 0;
        }
    }

    // Read data from database to show data in admin page
    public function read_user_information($username) {
        $condition = "username =" . "'" . $username . "'";
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

}