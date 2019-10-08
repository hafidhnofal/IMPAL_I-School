<?php
class Admin extends CI_Controller{

    function __construct(){
		parent::__construct();		
		$this->load->model('AdminModel');
	}
    
    function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
    }

    function input_Teacher(){
        $data['view']=$this->AdminModel->input($id);
    }

    function input_Student(){
        $data['view']=$this->AdminModel->input($id);
    }
    
    function input_Parent(){
        $data['view']=$this->AdminModel->input($id);
    }
    
    function input_Schedule(){
        $data['view']=$this->AdminModel->input($id);
    }

}