<?php
class Parentt extends CI_Controller{

    function __construct(){
		parent::__construct();		
		$this->load->model('ParentModel');
	}
    
    function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
    }
    
    function view_schedule(){
        $as=$this->ParentModel->get_data_user($this->session->userdata('id'));
        $data['student']=$this->ParentModel->get_data_student($as['nis']);
        $data['user']=$this->ParentModel->get_data_user($this->session->userdata('id'));
        $this->load->view('pages/Parent/ParentSchedule', $data);
        //$data['view']=$this->StudentModel->get_schedule($id, $tableid, $role);
    }

    function view_grade(){
        $as=$this->ParentModel->get_data_user($this->session->userdata('id'));
        $data['student']=$this->ParentModel->get_data_student($as['nis']);
        $data['user']=$this->ParentModel->get_data_user($this->session->userdata('id'));
        $this->load->view('pages/Parent/ParentGrade', $data);
        //$data['view']=$this->StudentModel->get_grade($id, $tableid, $role);
    }

    function view_attend(){
        $as=$this->ParentModel->get_data_user($this->session->userdata('id'));
        $data['student']=$this->ParentModel->get_data_student($as['nis']);
        $data['user']=$this->ParentModel->get_data_user($this->session->userdata('id'));
        $this->load->view('pages/Parent/ParentAttend', $data);
        //$data['view']=$this->StudentModel->get_attend($id, $tableid, $role);
    }

    function view_profile(){
        $as=$this->ParentModel->get_data_user($this->session->userdata('id'));
        $data['student']=$this->ParentModel->get_data_student($as['nis']);
        $data['user']=$this->ParentModel->get_data_user($this->session->userdata('id'));
        $this->load->view('pages/Parent/ParentProfile', $data);
        //$data['view']=$this->StudentModel->get_attend($id, $tableid, $role);
    }
}