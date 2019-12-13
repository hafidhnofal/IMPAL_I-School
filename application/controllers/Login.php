<?php
class Login extends CI_Controller{
    function __construct(){
		parent::__construct();		
        $this->load->model('LoginModel');
        $this->load->model('AdminModel');
        $this->load->model('TeacherModel');
        $this->load->model('ParentModel');
        $this->load->model('StudentModel');
    }
    
    function LoginO(){
        $this->load->view('pages/f_login');
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
                'status' => $role);
            $this->session->set_userdata($data_session);
            //$data['user']=$this->LoginModel->get_data_user($id, $tableid, $role);
            
            if($role=="admin"){
                $data['admin']=$this->AdminModel->get_data_user($this->session->userdata('id'));
                $this->load->view('pages/AdminHome', $data);
    
            }elseif($role=="student"){
                $data['student']=$this->StudentModel->get_data_user($this->session->userdata('id'));
                $this->load->view('pages/StudentHome', $data);
    
            }elseif($role=="parent"){
                $as=$this->LoginModel->get_data_user($id, $tableid, $role);
                $data['student']=$this->LoginModel->get_data_student($as['nis']);
                $this->load->view('pages/ParentHome', $data);
    
            }elseif($role=="teacher"){
                $data['teacher']=$this->TeacherModel->get_data_user($this->session->userdata('id'));
                $this->load->view('pages/TeacherHome', $data);
            }

        }else{
            $this->session->set_flashdata('alert', array('message' => 'ID or Password is Wrong!','class' => 'danger'));
            redirect(base_url('login/LoginO'));
         }
    }

    function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
    }
}