<?php
class ParentModel extends CI_Model{
    function get_schedule($id, $role){
        $this->db->where($tableid, $id);
        $usr=$this->db->get($role);
        return $usr->row_array();
    }

    function get_grade($id, $role){
        $this->db->where($tableid, $id);
        $usr=$this->db->get($role);
        return $usr->row_array();
    }
    function get_attend($id, $role){
        $this->db->where($tableid, $id);
        $usr=$this->db->get($role);
        return $usr->row_array();
    }

    function get_data_user($id){
        $this->db->where("phone", $id);
        $usr=$this->db->get("parent");
        return $usr->row_array();
    }

    function get_data_student($id){
        $this->db->where("nis", $id);
        $usr=$this->db->get("student");
        return $usr->row_array();
    }
}