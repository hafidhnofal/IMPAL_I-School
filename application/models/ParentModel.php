<?php
class ParentModel extends CI_Model{
    function get_grade($nis){
        $this->db->distinct();
        $array = array('nis' => $nis);
        $this->db->like($array);
        $this->db->join('subject', 'subjectid');
        return $this->db->get('stu_has_sub')->result_array();
    }
    function get_schedule_class($cls){
        $this->db->where('classid',$cls);
        $this->db->join('subject', 'subject.subjectid = t_has_s.subjectid');
        $hasil = $this->db->get('t_has_s');
        return $hasil->result_array();
    }

    function get_data_user($id){
        $this->db->where("phone", $id);
        $usr=$this->db->get("parent");
        return $usr->row_array();
    }

    function get_data_student($id){
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
}