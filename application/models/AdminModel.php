<?php
class AdminModel extends CI_Model{

    function get_data_user($id){
		$this->db->where("adminid", $id);
		$usr=$this->db->get("admin");
		return $usr->row_array();
	}
	
	function get_sub(){
		$hasil = $this->db->get("subject");
		return $hasil->result_array();
	}
	 function input_data($table,$data){
		$insert = $this->db->insert($table, $data);
	
		if ($insert){
		  return TRUE;
		}else{
		  return FALSE;
		}
	  }
	function delete_data($where,$table,$id){
		$this->db->where($where,$id);
		$this->db->delete($table);
	}

	function delete_subject($id){
		$this->db->where('subjectid', $id);
		$delete = $this->db->delete('subject');
	
		if ($delete){
		  return TRUE;
		}else{
		  return FALSE;
		}
	  }
	
	function get_class(){
		$hasil = $this->db->get('class');
		return $hasil->result_array();
	}

	function get_schedule_class($cls){
		$this->db->where('classid',$cls);
		$this->db->join('subject', 'subject.subjectid = t_has_s.subjectid');
		$hasil = $this->db->get('t_has_s');
		return $hasil->result_array();
	}

	function get_data_student(){
		$this->db->join('class', 'class.classid = student.class_classid');
		$usr=$this->db->get("student");
		return $usr->result_array();
	}
	function get_data_teacher(){
		$this->db->join('class', 'class.classid = teacher.class_classid');
		$usr=$this->db->get("teacher");
		return $usr->result_array();
	}

	function cek_data($table, $where){		
		return $this->db->get_where($table,$where);
	}

	function get_data_parents($phone){
		$this->db->where('phone',$phone);
		$usr=$this->db->query("SELECT s.nis, s.name as s_name, p.name as p_name, p.phone, p.gender, p.birthdate, p.password, s.class_classid FROM `parent` as p join student as s on (s.nis = p.nis) where p.phone=$phone");
		
		return $usr->row_array();
	}
	function get_data_parent(){
		$usr=$this->db->query("SELECT s.nis, s.name as s_name, p.name as p_name, p.phone, p.gender, p.birthdate, p.password, s.class_classid FROM `parent` as p join student as s on (s.nis = p.nis)");
		return $usr->result_array();
	}
	
	function get_data_student_from_class($cls){
		$this->db->where('class_classid',$cls);
		$usr=$this->db->get("student");
		return $usr->result_array();
	}

	function update_data($tbl,$table,$data,$id){
        $this->db->where($tbl, $id);
        $update = $this->db->update($table,$data);
    
        if ($update){
          return TRUE;
        }else{
          return FALSE;
        }
      }
}