<?php
class Teacher extends CI_Controller{

    function __construct(){
		parent::__construct();		
        $this->load->model('TeacherModel');
        $this->load->helper(array('form', 'url'));
	}
    
    function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
    }

    function home(){
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='teacher'){
			redirect(base_url());
        }
        
        $data['teacher']=$this->TeacherModel->get_data_user($this->session->userdata('id'));
        $this->load->view('pages/TeacherHome', $data);
    }

    function profile(){
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='teacher'){
			redirect(base_url());
        }
        
        $data['teacher']=$this->TeacherModel->get_data_user($this->session->userdata('id'));
        $this->load->view('pages/Teacher/profile', $data);
    }

    function materials(){
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='teacher'){
			redirect(base_url());
        }

        $cls=$this->TeacherModel->get_id_by_id($this->session->userdata('id'));
        $data['teacher']=$this->TeacherModel->get_data_user($this->session->userdata('id'));
        $data['materials']=$this->TeacherModel->get_materials($cls);

        $this->load->view('pages/Teacher/materials_show_all', $data);
    }

    function materials_show($id){
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='teacher'){
			redirect(base_url());
        }

        $cls=$this->TeacherModel->get_id_by_id($this->session->userdata('id'));
        $data['teacher']=$this->TeacherModel->get_data_user($this->session->userdata('id'));
        $data['materials']=$this->TeacherModel->get_data_materials($id);

        $this->load->view('pages/Teacher/materials_show', $data);
    }

    function materials_input(){
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='teacher'){
			redirect(base_url());
        }

        $cls=$this->TeacherModel->get_id_by_id($this->session->userdata('id'));
        $data['teacher']=$this->TeacherModel->get_data_user($this->session->userdata('id'));
        $data['sub']=$this->TeacherModel->get_sub();

        $this->load->view('pages/Teacher/materials_input', $data);
    }

    function materials_input_action($cls){
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='teacher'){
			redirect(base_url());
        }

        $new_name = time().$_FILES["userfiles"]['name'];
		
		// Upload Image
		$config['upload_path'] 		= './img/materials/';
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

        $materials_name = $this->input->post('title');
        $ket_materials = $this->input->post('info');
        $sub = $this->input->post('sub');

        $data_insert = array (
            'materials_name' => $materials_name,
            'ket_materials' => $ket_materials,
            'image' => $post_image,
            'subject_subjectid' => $sub,
            'for_class' => $cls,
        );

        $insert = $this->TeacherModel->input_data('s_has_m',$data_insert);

        if($insert){
        $this->session->set_flashdata('alert', 'sukses_insert');
        redirect(site_url('teacher/materials'));
        }else{
        echo "<script>alert('Gagal Menambahkan Data');</script>";
        }
    }

    function schedule(){
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='teacher'){
			redirect(base_url());
        }
        $cls=$this->TeacherModel->get_id_by_id($this->session->userdata('id'));
        $data['teacher']=$this->TeacherModel->get_data_user($this->session->userdata('id'));
        $data['sc']=$this->TeacherModel->get_schedule_class($cls);
        $this->load->view('pages/Teacher/schedule', $data);
    }

    function assignment(){
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='teacher'){
			redirect(base_url());
        }

        $cls=$this->TeacherModel->get_id_by_id($this->session->userdata('id'));
        $data['teacher']=$this->TeacherModel->get_data_user($this->session->userdata('id'));
        $data['ass']=$this->TeacherModel->get_assignment($cls);
        
        $this->load->view('pages/Teacher/assignment_show_all', $data);
    }

    function assignment_show($id){
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='teacher'){
			redirect(base_url());
        }

        $cls=$this->TeacherModel->get_id_by_id($this->session->userdata('id'));
        $data['teacher']=$this->TeacherModel->get_data_user($this->session->userdata('id'));
        $data['ass']=$this->TeacherModel->get_data_assignment($id);
        
        $this->load->view('pages/Teacher/assignment_show', $data);
    }

    function assignment_input(){
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='teacher'){
			redirect(base_url());
        }

        $cls=$this->TeacherModel->get_id_by_id($this->session->userdata('id'));
        $data['teacher']=$this->TeacherModel->get_data_user($this->session->userdata('id'));
        $data['ass']=$this->TeacherModel->get_assignment($cls);
        $data['sub']=$this->TeacherModel->get_sub();
        
        $this->load->view('pages/Teacher/assignment_input', $data);
    }

    function assignment_input_action($cls, $nip){
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='teacher'){
			redirect(base_url());
        }

        $new_name = time().$_FILES["userfiles"]['name'];
		
		// Upload Image
		$config['upload_path'] 		= './img/assignment/';
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

        $assignment_name = $this->input->post('title');
        $ket_assignment = $this->input->post('info');
        $sub = $this->input->post('sub');

        $data_insert = array (
            'assignmentname' => $assignment_name,
            'ket_assignment' => $ket_assignment,
            'image' => $post_image,
            'subjectid' => $sub,
            'teacher_nip' => $nip,
            'for_class' => $cls,
        );

        $insert = $this->TeacherModel->input_data('assignment',$data_insert);

        $last=$this->TeacherModel->get_last_id();
        $nis=$this->TeacherModel->get_nis($cls);

        foreach ($nis as $row){
            $data_insert_st = array (
                'nis' => $row['nis'],
                'assignmentid' => $last,
                'grade' => '0',
                'submint' => '0',
                'image_s' => '0',
            );

        $insert = $this->TeacherModel->input_data('s_has_a',$data_insert_st);
        }

        

        if($insert){
            $this->session->set_flashdata('alert', array('message' => 'Success Add Assignment','class' => 'success'));
            redirect(site_url('teacher/assignment'));
        }else{
            $this->session->set_flashdata('alert', array('message' => 'Error Add Assignment','class' => 'danger'));
        }
    }

    function assignment_check(){
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='teacher'){
			redirect(base_url());
        }

        $cls=$this->TeacherModel->get_id_by_id($this->session->userdata('id'));
        $data['teacher']=$this->TeacherModel->get_data_user($this->session->userdata('id'));
        $data['ass']=$this->TeacherModel->get_assignment($cls);
        $data['ck']=$this->TeacherModel->get_ass_to_check($cls);
        $this->load->view('pages/Teacher/assignment_check', $data);
    }

    function assignment_check_open($id){
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='teacher'){
			redirect(base_url());
        }

        $cls=$this->TeacherModel->get_id_by_id($this->session->userdata('id'));
        $data['teacher']=$this->TeacherModel->get_data_user($this->session->userdata('id'));
        $data['ass']=$this->TeacherModel->get_ass_to_check_data($id);
        $data['ids']=$id;
        $this->load->view('pages/Teacher/assignment_check_show', $data);
    }

    function assignment_check_open_mark($id){
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='teacher'){
			redirect(base_url());
        }
        $grade=$this->input->post('grade');
        $data_update = array (
            'grade' => $grade,
          );
          $update = $this->TeacherModel->update_data('id','s_has_a',$id,$data_update);

          if($update){
            $this->session->set_flashdata('alert', 'sukses_update');
            redirect(site_url('teacher/assignment_check'));
          }else{
            echo "<script>alert('Gagal mengupdate Data');</script>";
          }
    }

    function grade(){
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='teacher'){
			redirect(base_url());
        }

        $cls=$this->TeacherModel->get_id_by_id($this->session->userdata('id'));
        $data['teacher']=$this->TeacherModel->get_data_user($this->session->userdata('id'));
        $data['stu']=$this->TeacherModel->get_data_stu($cls);
  
        $this->load->view('pages/Teacher/grade', $data);
    }

    function grade_open($nis){
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='teacher'){
			redirect(base_url());
        }

        $cls=$this->TeacherModel->get_id_by_id($this->session->userdata('id'));
        $data['teacher']=$this->TeacherModel->get_data_user($this->session->userdata('id'));
        $data['student']=$this->TeacherModel->get_data_student($nis);
        $data['stu']=$this->TeacherModel->get_data_stu($cls);
        $data['grade']=$this->TeacherModel->get_sub_grade($nis);
        $ex=$this->TeacherModel->get_sub_only($nis);
        $data['sub']=$this->TeacherModel->get_sub_not_in($ex);
        $data['nis']=$nis;
        $this->load->view('pages/Teacher/grade_open', $data);
    }

    function grade_give($nis){
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='teacher'){
			redirect(base_url());
        }

        $nilai = $this->input->post('nilai');
        $sub = $this->input->post('sub');
        if($nilai<1){
            $this->session->set_flashdata('alert', array('message' => 'Grade Cant Minus!','class' => 'danger'));
            redirect(site_url('teacher/grade_open/'.$nis));
        }
        $data_insert = array (
            'nis' => $nis,
            'subjectid' => $sub,
            'nilai_akhir' => $nilai,
        );

        $insert = $this->TeacherModel->input_data('stu_has_sub',$data_insert);     

        if($insert){
            $this->session->set_flashdata('alert', array('message' => 'Success Add Grade','class' => 'success'));
            redirect(site_url('teacher/grade_open/'.$nis));
        }else{
        echo "<script>alert('Gagal Menambahkan Data');</script>";
        }
    }

    function grade_give_edit($nis,$id){
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='teacher'){
			redirect(base_url());
        }
        $nilai = $this->input->post('nilaiedit');
        if($nilai<1){
            $this->session->set_flashdata('alert', array('message' => 'Grade Cant Minus!','class' => 'danger'));
            redirect(site_url('teacher/grade_open/'.$nis));
        }
        $data_update = array (
            'nilai_akhir' => $nilai
          );
          $update = $this->TeacherModel->update_data('id','stu_has_sub',$id,$data_update);

          if($update){
            $this->session->set_flashdata('alert', array('message' => 'Success Edit Grade','class' => 'success'));
            redirect(site_url('teacher/grade_open/'.$nis));
          }else{
            echo "<script>alert('Gagal mengupdate Data');</script>";
          }
    }

    function attendance(){
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='teacher'){
			redirect(base_url());
        }

        $cls=$this->TeacherModel->get_id_by_id($this->session->userdata('id'));
        $data['teacher']=$this->TeacherModel->get_data_user($this->session->userdata('id'));
        $data['stu']=$this->TeacherModel->get_data_stu($cls);
  
        $this->load->view('pages/Teacher/attendance', $data);
    }
}