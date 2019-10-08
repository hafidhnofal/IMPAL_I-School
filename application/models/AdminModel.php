<?php
class AdminModel extends CI_Model{

    public function input($id){
			$data = array(
				'id' => $id,
				'nama' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'isi' => $this->input->post('body')
            );
            
			return $this->db->insert('komen', $data);
        }
        
}