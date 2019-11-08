<?php
class Login extends CI_Controller{
    function __construct(){
		parent::__construct();		
		$this->load->model('LoginModel');
	}
    
    function action_login(){
        $id = $this->input->post('id');
        $password = $this->input->post('password');
        $role = $this->input->post('role');
        if($role=="admin"){
            $tableid = "adminid";

        }elseif($role=="student"){
            $tableid = "nis";
            $pg = "StudentHome";

        }elseif($role=="parent"){
            $tableid = "phone";
            $pg = "ParentHome";

        }elseif($role=="teacher"){
            $tableid = "nip";
            $pg = "TeacherHome";
        }
            
        $where = array(
			$tableid => $id,
            'password' => $password);
        $cek = $this->LoginModel->cek_login($role,$where)->num_rows();

        if($cek > 0){
            //echo "<script>alert('Berhasil');</script>";           
            $data_session = array(
                'id' => $id,
                'status' => "login");
            $this->session->set_userdata($data_session);
            $data['user']=$this->LoginModel->get_data_user($id, $tableid, $role);
            
            if($role=="admin"){
                $this->load->view('pages/AdminHome', $data);
    
            }elseif($role=="student"){
                $this->load->view('pages/StudentHome', $data);
    
            }elseif($role=="parent"){
                $as=$this->LoginModel->get_data_user($id, $tableid, $role);
                $data['student']=$this->LoginModel->get_data_student($as['nis']);
                $this->load->view('pages/ParentHome', $data);
    
            }elseif($role=="teacher"){
                $this->load->view('pages/TeacherHome', $data);
            }

            }else{
                $this->load->view('pages/f_login');
                echo "<script>alert('ID or Password is Wrong, Please try again!');</script>";
            }
    }

    function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
    }
}