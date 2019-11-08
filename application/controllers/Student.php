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

    function view_schedule(){
        $data['user']=$this->StudentModel->get_data_user($this->session->userdata('id'));
        $this->load->view('pages/Student/StudentSchedule', $data);
        //$data['view']=$this->StudentModel->get_schedule($id, $tableid, $role);
    }

    function view_grade(){
        $data['user']=$this->StudentModel->get_data_user($this->session->userdata('id'));
        $this->load->view('pages/Student/StudentGrade', $data);
        //$data['view']=$this->StudentModel->get_grade($id, $tableid, $role);
    }

    function view_attend(){
        $data['user']=$this->StudentModel->get_data_user($this->session->userdata('id'));
        $this->load->view('pages/Student/StudentAttendance', $data);
        //data['view']=$this->StudentModel->get_attend($id, $tableid, $role);
    }

    function view_materials(){
        $data['user']=$this->StudentModel->get_data_user($this->session->userdata('id'));
        $this->load->view('pages/Student/StudentMaterials', $data);
        //$data['view']=$this->StudentModel->get_materials($id, $tableid, $role);
    }
    function view_profile(){
        $data['user']=$this->StudentModel->get_data_user($this->session->userdata('id'));
        $this->load->view('pages/Student/StudentProfile', $data);
        //$data['view']=$this->StudentModel->get_assignment($id, $tableid, $role);
    }


}