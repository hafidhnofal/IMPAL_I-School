<?php
class StudentModel extends CI_Model{
    
    function upload($id, $role){
        $this->db->where($tableid, $id);
        $usr=$this->db->get($role);
        return $usr->row_array();
    }

    function get_data_user($id){
        $this->db->where("nis", $id);
        $this->db->join('class', 'class.classid = student.class_classid');
        $usr=$this->db->get("student");
        return $usr->row_array();
    }

    function get_id_by_id($nis){
        $this->db->select('class_classid');
        $this->db->from('student');
        $this->db->where('nis',$nis);
        return $this->db->get()->row()->class_classid;
    }
    function get_schedule_class($cls){
        $this->db->where('classid',$cls);
        $this->db->join('subject', 'subject.subjectid = t_has_s.subjectid');
        $hasil = $this->db->get('t_has_s');
        return $hasil->result_array();
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
        $usr=$this->db->get("s_has_m");
        return $usr->row_array();
    }

    function get_assignment($nis,$cls){
        $this->db->query('SELECT * FROM `assignment` JOIN s_has_a USING(assignmentid) JOIN subject USING(subjectid)');
        $array = array('nis' => $nis, 'for_class' => $cls);
        $this->db->like($array);
        $this->db->join('s_has_a', 'assignmentid'); 
        $this->db->join('subject', 'subjectid');
        return $this->db->get('assignment')->result_array();
    }

    function get_data_assignment($nis,$cls,$id){
        $this->db->where("assignmentid", $id);
        $array = array('nis' => $nis, 'for_class' => $cls);
        $this->db->like($array);
        $this->db->join('s_has_a', 'assignmentid');
        $this->db->join('subject', 'subjectid');
        return $this->db->get('assignment')->row_array();
    }

    function get_grade($nis){
        $this->db->distinct();
        $array = array('nis' => $nis);
        $this->db->like($array);
        $this->db->join('subject', 'subjectid');
        return $this->db->get('stu_has_sub')->result_array();
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

      function get_data_attendace($nis){
        $this->db->where("nis", $nis);
        $this->db->join('student', 'nis');
        return $this->db->get('stu_has_attend')->row_array();
    }
}