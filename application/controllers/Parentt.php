<?php
class Parentt extends CI_Controller{

    function __construct(){
		parent::__construct();		
		$this->load->model('ParentModel');
	}

	function home(){
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='parent'){
			    redirect(base_url());
        }
        
        $as=$this->ParentModel->get_data_user($this->session->userdata('id'));
        $data['student']=$this->ParentModel->get_data_student($as['nis']);
        $data['parent']=$this->ParentModel->get_data_user($this->session->userdata('id'));
        $this->load->view('pages/ParentHome', $data);
    }
    
    function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
	
	function grade($nis){
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='parent'){
			redirect(base_url());
        }
        
        $data['student']=$this->ParentModel->get_data_student($nis);
        $data['parent']=$this->ParentModel->get_data_user($this->session->userdata('id'));
        $data['grade']=$this->ParentModel->get_grade($nis);
        $this->load->view('pages/Parent/grade', $data);
    }

    function schedule($nis){
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='parent'){
			redirect(base_url());
        }
        $cls=$this->ParentModel->get_id_by_id($nis);
        $data['student']=$this->ParentModel->get_data_student($nis);
        $data['parent']=$this->ParentModel->get_data_user($this->session->userdata('id'));
        $data['sc']=$this->ParentModel->get_schedule_class($cls);
        $this->load->view('pages/Parent/schedule', $data);
    }

    function attendance($nis){
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='parent'){
			redirect(base_url());
        }

        $data['student']=$this->ParentModel->get_data_student($nis);
        $this->load->view('pages/Parent/attendance', $data);
    }

    function profile($nis){
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='parent'){
			redirect(base_url());
        }
        
        $data['student']=$this->ParentModel->get_data_student($nis);
        $data['parent']=$this->ParentModel->get_data_user($this->session->userdata('id'));
        $this->load->view('pages/Parent/profile', $data);
    }
    
}