<?php
class TeacherModel extends CI_Model{


    function get_grade($id, $role){
        $this->db->where($tableid, $id);
        $usr=$this->db->get($role);
        return $usr->row_array();
    }

    function get_materials($id, $role){
        $this->db->where($tableid, $id);
        $usr=$this->db->get($role);
        return $usr->row_array();
    }

    function input($id){
        $data = array(
            'id' => $id,
            'nama' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'isi' => $this->input->post('body')
        );
        
        return $this->db->insert('admin', $data);
    }

    function get_data_user($id){
        $this->db->where("nip", $id);
        $usr=$this->db->get("teacher");
        return $usr->row_array();
    }

}