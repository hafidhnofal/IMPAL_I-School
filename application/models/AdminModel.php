<?php
class AdminModel extends CI_Model{

    public function input($id){
			$data = array(
				'id' => $id,
				'nama' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'isi' => $this->input->post('body')
            );
            
			return $this->db->insert('admin', $data);
        }
        function get_data_user($id){
			$this->db->where("adminid", $id);
			$usr=$this->db->get("admin");
			return $usr->row_array();
		}
}