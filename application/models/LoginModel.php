<?php
class LoginModel extends CI_Model{
    function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
    }
    function get_data_user($id, $tableid, $role){
        $this->db->where($tableid, $id);
        $usr=$this->db->get($role);
        return $usr->row_array();
    }


}