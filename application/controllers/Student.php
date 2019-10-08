<?php
class Student extends CI_Controller{

    function __construct(){
		parent::__construct();		
		$this->load->model('StudentModel');
	}
    
    function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
    }

    function view_Schedule(){
        $data['view']=$this->StudentModel->get_schedule($id, $tableid, $role);
    }

    function view_Grade(){
        $data['view']=$this->StudentModel->get_grade($id, $tableid, $role);
    }

    function view_attend(){
        $data['view']=$this->StudentModel->get_attend($id, $tableid, $role);
    }

    function view_materials(){
        $data['view']=$this->StudentModel->get_materials($id, $tableid, $role);
    }
    function view_assignmnet(){
        $data['view']=$this->StudentModel->get_assignment($id, $tableid, $role);
    }
    function upload_assignment(){
        $data['view']=$this->StudentModel->upload($id, $tableid, $role);
    }

}