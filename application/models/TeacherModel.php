<?php
class TeacherModel extends CI_Model{

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
        $this->db->join('class', 'class.classid = teacher.class_classid');
        $usr=$this->db->get("teacher");
        return $usr->row_array();
    }

    function get_data_student($id){
      $this->db->where("nis", $id);
      $this->db->join('class', 'class.classid = student.class_classid');
      $usr=$this->db->get("student");
      return $usr->row_array();
  }

    function get_data_stu($cls){
      $this->db->where("class_classid", $cls);
      $this->db->join('class', 'class.classid = student.class_classid');
      $usr=$this->db->get("student");
      return $usr->result_array();
  }

    function get_id_by_id($nip){
        $this->db->select('class_classid');
        $this->db->from('teacher');
        $this->db->where('nip',$nip);
        return $this->db->get()->row()->class_classid;
    }

    function get_materials($cls){
        $this->db->where('for_class',$cls);
        $this->db->join('subject', 'subject.subjectid = s_has_m.subject_subjectid');
        $hasil = $this->db->get('s_has_m');
        return $hasil->result_array();
    }

    function get_data_materials($id){
        $this->db->where("id", $id);
        $this->db->join('subject', 'subject.subjectid = s_has_m.subject_subjectid');
        $this->db->join('class', 'class.classid = s_has_m.for_class');
        $usr=$this->db->get("s_has_m");
        return $usr->row_array();
    }

    function input_data($table,$data){
		$insert = $this->db->insert($table, $data);
	
		if ($insert){
		  return TRUE;
		}else{
		  return FALSE;
		}
    }
    function get_sub(){
		$hasil = $this->db->get("subject");
		return $hasil->result_array();
    }
    
    function get_schedule_class($cls){
        $this->db->where('classid',$cls);
        $this->db->join('subject', 'subject.subjectid = t_has_s.subjectid');
        $hasil = $this->db->get('t_has_s');
        return $hasil->result_array();
    }

    function get_assignment($cls){
      $this->db->where('for_class',$cls);
      $this->db->join('subject', 'subjectid');
      return $this->db->get('assignment')->result_array();
  }

  function get_data_assignment($id){
      $this->db->where("assignmentid", $id);
      $this->db->join('subject', 'subjectid');
      return $this->db->get('assignment')->row_array();
  }
  function get_last_id(){
    return $this->db->query('SELECT assignmentid FROM assignment ORDER BY assignmentid DESC LIMIT 1')->row()->assignmentid;
  }

  function get_nis($cls){
    $this->db->where('class_classid',$cls);
    $hasil = $this->db->get('student');
    return $hasil->result_array();
  }

  function get_ass_to_check($cls){
    //return $this->db->query('SELECT * FROM s_has_a JOIN assignment USING(assignmentid) join subject using(subjectid) WHERE for_class='.$cls.' and submint=1')->result_array();
    //$this->db->where("assignmentid", $id);
    $array = array('submint' => '1', 'for_class' => $cls);
    $this->db->like($array);
    $this->db->join('s_has_a', 'assignmentid');
    $this->db->join('subject', 'subjectid');
    $this->db->join('class', 'class.classid = assignment.for_class');
    $this->db->join('student', 'nis');
    return $this->db->get('assignment')->result_array();
  }

  function get_ass_to_check_data($id){
    //return $this->db->query('SELECT * FROM s_has_a JOIN assignment USING(assignmentid) join subject using(subjectid) WHERE for_class='.$cls.' and submint=1')->result_array();
    //$this->db->where("assignmentid", $id);
    $array = array('id' => $id);
    $this->db->like($array);
    $this->db->join('s_has_a', 'assignmentid');
    $this->db->join('subject', 'subjectid');
    $this->db->join('class', 'class.classid = assignment.for_class');
    $this->db->join('student', 'nis');
    return $this->db->get('assignment')->row_array();
  }

  function update_data($tbl,$table,$id,$data){
    $this->db->where($tbl, $id);
    $update = $this->db->update($table,$data);

    if ($update){
      return TRUE;
    }else{
      return FALSE;
    }
  }

  function get_sub_grade($nis){
    $this->db->where("nis", $nis);
    $this->db->join('student', 'nis');
    $this->db->join('subject', 'subjectid');
		$hasil = $this->db->get("stu_has_sub");
		return $hasil->result_array();
    }

    function get_sub_not_in($ex){  
      foreach ($ex as $dat){
          $this->db->where_not_in('subjectid', $dat);
      }
      $hasil = $this->db->get("subject");
      return $hasil->result_array();
      }

      function get_sub_only($nis){
        $this->db->select('subjectid');
        $this->db->where('nis', $nis);
        $hasil = $this->db->get("stu_has_sub");
        return $hasil->result_array();
      }

      function cek_data($table, $where){		
        return $this->db->get_where($table,$where);
      }

      function get_data_attendace($nis){
        $this->db->where("nis", $nis);
        return $this->db->get('stu_has_attend')->row_array();
    }
}