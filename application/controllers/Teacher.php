<?php
class Teacher extends CI_Controller{

    function __construct(){
		parent::__construct();		
		$this->load->model('TeacherModel');
	}
    
    function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
    }

    function input_attend(){
        $data['view']=$this->TeacherModel->get_schedule($id, $tableid, $role);
    }

    function input_materials(){
        $data['view']=$this->TeacherModel->get_schedule($id, $tableid, $role);
    }

    function input_assignment(){
        $data['view']=$this->TeacherModel->get_schedule($id, $tableid, $role);
    }

    function input_grade(){
        $data['view']=$this->TeacherModel->get_schedule($id, $tableid, $role);
    }

    function upload_assignment(){
        $data['view']=$this->TeacherModel->get_schedule($id, $tableid, $role);
    }

    function view_materials(){
        $data['view']=$this->TeacherModel->get_schedule($id, $tableid, $role);
    }

    function view_Grade(){
        $data['view']=$this->TeacherModel->get_grade($id, $tableid, $role);
    }

}