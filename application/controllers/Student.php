<?php
class Student extends CI_Controller{

  function __construct(){
		parent::__construct();		
    $this->load->model('StudentModel');
    $this->load->helper(array('form', 'url', 'download'));
  }
    
    function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
    }

    function home(){
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='student'){
			    redirect(base_url());
        }
        
        $data['student']=$this->StudentModel->get_data_user($this->session->userdata('id'));
        $this->load->view('pages/StudentHome', $data);
    }

    function profile(){
      if(!$this->session->userdata('id') || $this->session->userdata('status')!='student'){
        redirect(base_url());
      }
      
      $data['student']=$this->StudentModel->get_data_user($this->session->userdata('id'));
      $this->load->view('pages/Student/profile', $data);
  }

    function grade(){
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='student'){
			redirect(base_url());
        }
        
        $data['student']=$this->StudentModel->get_data_user($this->session->userdata('id'));
        $data['grade']=$this->StudentModel->get_grade($this->session->userdata('id'));
        $this->load->view('pages/Student/grade', $data);
    }

    function schedule(){
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='student'){
			redirect(base_url());
        }
        $cls=$this->StudentModel->get_id_by_id($this->session->userdata('id'));
        $data['student']=$this->StudentModel->get_data_user($this->session->userdata('id'));
        $data['sc']=$this->StudentModel->get_schedule_class($cls);
        $this->load->view('pages/Student/schedule', $data);
    }

    function attendance(){
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='student'){
			redirect(base_url());
        }

        $data['student']=$this->StudentModel->get_data_user($this->session->userdata('id'));
        $this->load->view('pages/Student/attendance', $data);
    }

    function materials(){
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='student'){
			redirect(base_url());
        }

        $cls=$this->StudentModel->get_id_by_id($this->session->userdata('id'));
        $data['student']=$this->StudentModel->get_data_user($this->session->userdata('id'));
        $data['materials']=$this->StudentModel->get_materials($cls);

        $this->load->view('pages/Student/materials', $data);
    }

    function materials_show($id){
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='student'){
			redirect(base_url());
        }

        $cls=$this->StudentModel->get_id_by_id($this->session->userdata('id'));
        $data['student']=$this->StudentModel->get_data_user($this->session->userdata('id'));
        $data['materials']=$this->StudentModel->get_data_materials($id);

        $this->load->view('pages/Student/materials_show', $data);
    }
  
    function assignment(){
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='student'){
			redirect(base_url());
        }

        $cls=$this->StudentModel->get_id_by_id($this->session->userdata('id'));
        $data['student']=$this->StudentModel->get_data_user($this->session->userdata('id'));
        $data['ass']=$this->StudentModel->get_assignment($this->session->userdata('id'), $cls);
        $this->load->view('pages/Student/assignment', $data);
    }

    function assignment_show($id, $ids){
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='student'){
			redirect(base_url());
        }

        $cls=$this->StudentModel->get_id_by_id($this->session->userdata('id'));
        $data['student']=$this->StudentModel->get_data_user($this->session->userdata('id'));
        $data['ass']=$this->StudentModel->get_data_assignment($this->session->userdata('id'), $cls,$id);
        $data['ids']=$ids;
        $this->load->view('pages/Student/assignment_show', $data);
    }

    function assignment_submint($id){
      if(!$this->session->userdata('id') || $this->session->userdata('status')!='student'){
			  redirect(base_url());
      }

      $new_name = time().$_FILES["userfiles"]['name'];
		
		// Upload Image
		$config['upload_path'] 		= './img/assignment/assignment_student/';
		$config['allowed_types'] 	= 'gif|jpg|jpeg|png';
		$config['file_name'] 		= $new_name;
		$config['overwrite'] 		= true;
		$config['max_size'] 		= '2048';

		$this->load->library('upload', $config);
		if(!$this->upload->do_upload('userfile')){
			$errors = array('error' => $this->upload->display_errors());
			$post_image = 'noimage.jpg';
		} else {
			$data = array('upload_data' => $this->upload->data());
			$post_image = $new_name.$this->upload->data('file_ext');
		}

        $data_update = array (
            'submint' => '1',
            'image_s' => $post_image,
          );
          $update = $this->StudentModel->update_data('id','s_has_a',$id,$data_update);

          if($update){
            $this->session->set_flashdata('alert', 'sukses_update');
            redirect(site_url('student/assignment'));
          }else{
            echo "<script>alert('Gagal mengupdate Data');</script>";
          }
    }

    function assignment_unsubmint($id){ 
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='student'){
			redirect(base_url());
        }

        $data_update = array (
            'submint' => '0',
            'image_s' => '0',
          );
          $update = $this->StudentModel->update_data('id','s_has_a',$id,$data_update);

          if($update){
            $this->session->set_flashdata('alert', 'sukses_update');
            redirect(site_url('student/assignment'));
          }else{
            echo "<script>alert('Gagal mengupdate Data');</script>";
          }
    }

    function download_materials($id,$ds){
      if(!$this->session->userdata('id') || $this->session->userdata('status')!='student'){
        redirect(base_url());
      }

      $cls=$this->StudentModel->get_id_by_id($this->session->userdata('id'));
      $data['student']=$this->StudentModel->get_data_user($this->session->userdata('id'));
      $data['materials']=$this->StudentModel->get_data_materials($id);
      force_download('img/materials/'.$ds,NULL);

      $this->load->view('pages/Student/materials_show', $data);
  }

    function download_ass($id, $ds, $ids){
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='student'){
          redirect(base_url());
        }

        $cls=$this->StudentModel->get_id_by_id($this->session->userdata('id'));
        $data['student']=$this->StudentModel->get_data_user($this->session->userdata('id'));
        $data['ass']=$this->StudentModel->get_data_assignment($this->session->userdata('id'), $cls,$id);
        $data['ids']=$ids;
        force_download('img/assignment/'.$ds,NULL);
        
        $this->load->view('pages/Student/assignment_show', $data);
    }
}