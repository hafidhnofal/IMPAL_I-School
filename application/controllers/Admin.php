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

    function home(){
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='admin'){
			redirect(base_url());
        }
        
        $data['admin']=$this->AdminModel->get_data_user($this->session->userdata('id'));
        $this->load->view('pages/AdminHome', $data);
    }
    function profile(){
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='admin'){
			redirect(base_url());
        }
        
        $data['admin']=$this->AdminModel->get_data_user($this->session->userdata('id'));
        $this->load->view('pages/Admin/profile', $data);
    }
//Subject
    function subject(){
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='admin'){
			redirect(base_url());
        }
        
        $data['admin']=$this->AdminModel->get_data_user($this->session->userdata('id'));
        $data['sub']=$this->AdminModel->get_sub();
        $this->load->view('pages/Admin/subject', $data);
    }
    function input_subject(){
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='admin'){
			redirect(base_url());
        }

        $sub = $this->input->post('subject');

        $data_insert = array (
            'subjectname' => $sub,
        );

        $insert = $this->AdminModel->input_data('subject',$data_insert);

        if($insert){
        $this->session->set_flashdata('alert', 'sukses_insert');
        redirect(site_url('admin/subject'));
        }else{
        echo "<script>alert('Gagal Menambahkan Data');</script>";
        }
    }
    function delete_sub($id){
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='admin'){
			redirect(base_url());
        }

        $del=$this->AdminModel->delete_subject($id);
        if($del){
            $this->session->set_flashdata('alert', 'sukses_insert');
        redirect(site_url('admin/subject'));
        }else{
            echo "<script>alert('Error');</script>";
        }
    }
//--
//--Schedule
    function schedule_show(){
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='admin'){
			redirect(base_url());
        }
    
        $c = $this->input->post('class');
        $data['idcls']=$c;
        $data['sub']=$this->AdminModel->get_sub();
        $data['admin']=$this->AdminModel->get_data_user($this->session->userdata('id'));
        $data['class']=$this->AdminModel->get_class(); 
        $data['sc']=$this->AdminModel->get_schedule_class($c);
        $this->load->view('pages/Admin/schedule_show', $data);
    }
    function schedule_input(){
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='admin'){
			redirect(base_url());
        }
        $c = $this->input->post('class');
        $data['tm']=$c;
        $data['sub']=$this->AdminModel->get_sub();
        $data['admin']=$this->AdminModel->get_data_user($this->session->userdata('id'));
        $data['class']=$this->AdminModel->get_class();
        $data['sc']=$this->AdminModel->get_schedule_class('1');
        $data['idcls']=$c;
        $this->load->view('pages/Admin/schedule_input', $data);
    }

    function get_schedule_from_class(){
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='admin'){
			redirect(base_url());
        }
        $c = $this->input->post('class');
        $data['idcls']=$c;
        $data['tm']=$c;
        $data['sub']=$this->AdminModel->get_sub();
        $data['admin']=$this->AdminModel->get_data_user($this->session->userdata('id'));
        $data['class']=$this->AdminModel->get_class(); 
        $data['sc']=$this->AdminModel->get_schedule_class($c);
        
        $this->load->view('pages/Admin/schedule_input', $data);
    }

    function get_schedule_from_class_keep($clo){
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='admin'){
			redirect(base_url());
        }
        $data['idcls']=$clo;
        $data['tm']=$clo;
        $data['sub']=$this->AdminModel->get_sub();
        $data['admin']=$this->AdminModel->get_data_user($this->session->userdata('id'));
        $data['class']=$this->AdminModel->get_class(); 
        $data['sc']=$this->AdminModel->get_schedule_class($clo);
        
        $this->load->view('pages/Admin/schedule_input', $data);
    }

    function get_schedule_from_class_show(){
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='admin'){
			redirect(base_url());
        }
        $c = $this->input->post('class');
        $data['idcls']=$c;
        $data['sub']=$this->AdminModel->get_sub();
        $data['admin']=$this->AdminModel->get_data_user($this->session->userdata('id'));
        $data['class']=$this->AdminModel->get_class(); 
        $data['sc']=$this->AdminModel->get_schedule_class($c);

        $this->load->view('pages/Admin/schedule_show', $data);
    }

    public $variable = "awesome";
    function input_schedule($time, $cls, $day, $clo){
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='admin'){
			redirect(base_url());
        }
        $sub = $this->input->post('sub');

        $data_insert = array (
            'subjectid' => $sub,
            'times' => $time,
            'day' => $day,
            'classid' => $cls,
        );

        $insert = $this->AdminModel->input_data('t_has_s',$data_insert);

        if($insert){
        $this->session->set_flashdata('alert', 'sukses_insert');
        redirect(site_url('admin/get_schedule_from_class_keep/'.$clo));
        }else{
        echo "<script>alert('Gagal Menambahkan Data');</script>";
        }
    }
    function del_schedule($id, $clo){
		$this->AdminModel->delete_data('id','t_has_s',$id);
		redirect(site_url('admin/get_schedule_from_class_keep/'.$clo));
	}

    //--End Schedule
    //--Student
    function student_show(){
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='admin'){
			redirect(base_url());
        }
    
        $c = $this->input->post('class');
        $data['idcls']=$c;
        $data['admin']=$this->AdminModel->get_data_user($this->session->userdata('id'));
        $data['class']=$this->AdminModel->get_class(); 
        $data['stu']=$this->AdminModel->get_data_student();
        $this->load->view('pages/Admin/student_show', $data);
    }

    function student_input(){
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='admin'){
			redirect(base_url());
        }
    
        $c = $this->input->post('class');
        $data['idcls']=$c;
        $data['admin']=$this->AdminModel->get_data_user($this->session->userdata('id'));
        $data['class']=$this->AdminModel->get_class(); 
        $data['stu']=$this->AdminModel->get_data_student();
        $this->load->view('pages/Admin/student_input', $data);
    }
    function input_student(){
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='admin'){
			redirect(base_url());
        }
        $nis = $this->input->post('nis');
        if($nis<1){
            $this->session->set_flashdata('alert', array('message' => 'Nis Cant Minus!','class' => 'danger'));
            redirect(site_url('admin/student_input'));
        }
        $name = $this->input->post('name');
        $gen = $this->input->post('gender');
        $birth = $this->input->post('bday');
        $phone = $this->input->post('phone');
        if($phone<1){
            $this->session->set_flashdata('alert', array('message' => 'Phone Cant Minus!','class' => 'danger'));
            redirect(site_url('admin/student_input'));
        }
        $class = $this->input->post('class');
        $pass = $this->input->post('pass');

        $data_insert = array (
            'nis' => $nis,
            'name' => $name,
            'gender' => $gen,
            'birthdate' => $birth,
            'phone' => $phone,
            'password' => $pass,
            'class_classid' => $class,
            'admin_adminid' => '123',
        );

        $where = array(
			'nis' => $nis);
        $cek = $this->AdminModel->cek_data('student',$where)->num_rows();

        if($cek>0){
            $this->session->set_flashdata('alert', array('message' => 'Error Added Student Nis is Same','class' => 'danger'));
            redirect(site_url('admin/student_input'));
        }else {
            $insert = $this->AdminModel->input_data('student',$data_insert);

            if($insert){
                $this->session->set_flashdata('alert', array('message' => 'Student Added','class' => 'success'));
                redirect(site_url('admin/student_input'));
            }else{
                $this->session->set_flashdata('alert', array('message' => 'Error Added Student','class' => 'danger'));
                redirect(site_url('admin/student_input'));
            }
        }

        
    }
   //--
   //--Teacher
   function teacher_show(){
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='admin'){
            redirect(base_url());
        }

        $c = $this->input->post('class');
        $data['idcls']=$c;
        $data['admin']=$this->AdminModel->get_data_user($this->session->userdata('id'));
        $data['class']=$this->AdminModel->get_class(); 
        $data['tea']=$this->AdminModel->get_data_teacher();
        $this->load->view('pages/Admin/teacher_show', $data);
    }

    function teacher_input(){
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='admin'){
			redirect(base_url());
        }
    
        $c = $this->input->post('class');
        $data['idcls']=$c;
        $data['admin']=$this->AdminModel->get_data_user($this->session->userdata('id'));
        $data['class']=$this->AdminModel->get_class(); 
        $data['tea']=$this->AdminModel->get_data_teacher();
        $this->load->view('pages/Admin/teacher_input', $data);
    }

    function input_teacher(){
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='admin'){
			redirect(base_url());
        }
        $nis = $this->input->post('nip');
        if($nis<1){
            $this->session->set_flashdata('alert', array('message' => 'Nip Cant Minus!','class' => 'danger'));
            redirect(site_url('admin/teacher_input'));
        }
        $name = $this->input->post('name');
        $gen = $this->input->post('gender');
        $birth = $this->input->post('bday');
        $phone = $this->input->post('phone');
        if($phone<1){
            $this->session->set_flashdata('alert', array('message' => 'Phone Cant Minus!','class' => 'danger'));
            redirect(site_url('admin/teacher_input'));
        }
        $class = $this->input->post('class');
        $pass = $this->input->post('pass');

        $data_insert = array (
            'nip' => $nis,
            'name' => $name,
            'gender' => $gen,
            'birthdate' => $birth,
            'phone' => $phone,
            'password' => $pass,
            'class_classid' => $class,
            'admin_adminid' => '123',
        );

        $where = array(
			'nip' => $nis);
        $cek = $this->AdminModel->cek_data('teacher',$where)->num_rows();
        
        if($cek>0){
            $this->session->set_flashdata('alert', array('message' => 'Error Added Teacher Nip is Same','class' => 'danger'));
            redirect(site_url('admin/teacher_input'));
        }else {
            $insert = $this->AdminModel->input_data('teacher',$data_insert);

            if($insert){
                $this->session->set_flashdata('alert', array('message' => 'Teacher Added!','class' => 'success'));
                redirect(site_url('admin/teacher_input'));
            }else{
                echo "<script>alert('Gagal Menambahkan Data');</script>";
            }
        }
    }

    function parent_show(){
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='admin'){
            redirect(base_url());
        }

        $c = $this->input->post('class');
        $data['idcls']=$c;
        $data['admin']=$this->AdminModel->get_data_user($this->session->userdata('id'));
        $data['class']=$this->AdminModel->get_class(); 
        $data['par']=$this->AdminModel->get_data_parent();
        $this->load->view('pages/Admin/parent_show', $data);
    }

    function get_stu_from_class(){
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='admin'){
			redirect(base_url());
        }

        $c = $this->input->post('class');
        $data['admin']=$this->AdminModel->get_data_user($this->session->userdata('id'));
        $data['class']=$this->AdminModel->get_class(); 
        $data['idcls']=$c;
        $data['stuc']=$this->AdminModel->get_data_student_from_class($c);

        $this->load->view('pages/Admin/parent_input', $data);
    }
    function parent_input(){
        
    
        $c = $this->input->post('class');
        $data['idcls']=$c;
        $data['admin']=$this->AdminModel->get_data_user($this->session->userdata('id'));
        $data['class']=$this->AdminModel->get_class(); 
        $data['par']=$this->AdminModel->get_data_parent();

        $this->load->view('pages/Admin/parent_input', $data);
    }

    function input_parent(){
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='admin'){
			redirect(base_url());
        }

        $nis = $this->input->post('nis');
        if($nis==0){
            $this->session->set_flashdata('alert', array('message' => 'Nis can not be empty!','class' => 'danger'));
            redirect(base_url('admin/parent_input'));
        }
        $name = $this->input->post('name');
        $gen = $this->input->post('gender');
        $birth = $this->input->post('bday');
        $phone = $this->input->post('phone');
        if($phone<1){
            $this->session->set_flashdata('alert', array('message' => 'Phone Cant Minus!','class' => 'danger'));
            redirect(base_url('admin/parent_input'));
        }
        $pass = $this->input->post('pass');

        $data_insert = array (
            'nis' => $nis,
            'name' => $name,
            'gender' => $gen,
            'birthdate' => $birth,
            'phone' => $phone,
            'password' => $pass,
            'admin_adminid' => $this->session->userdata('id'),
        );

        $where = array(
			'phone' => $phone);
        $cek = $this->AdminModel->cek_data('parent',$where)->num_rows();
        
        if($cek>0){
            $this->session->set_flashdata('alert', array('message' => 'Error Added Parent Phone Number Hass been Registered','class' => 'danger'));
            redirect(base_url('admin/parent_input'));
        }else {
            $insert = $this->AdminModel->input_data('parent',$data_insert);

            if($insert){
                $this->session->set_flashdata('alert', array('message' => 'Parent Added!','class' => 'success'));
                redirect(base_url('admin/parent_input'));
            }else{
                echo "<script>alert('Gagal Menambahkan Data');</script>";
            }
        }
    }
    function e_parent($phone){
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='admin'){
			redirect(base_url());
        }
    
        $c = $this->input->post('class');
        $data['idcls']=$c;
        $data['admin']=$this->AdminModel->get_data_user($this->session->userdata('id'));
        $data['class']=$this->AdminModel->get_class(); 
        $data['par']=$this->AdminModel->get_data_parents($phone);
        $this->load->view('pages/Admin/parent_edit', $data);
    }

    function edit_parent($phone){
        if(!$this->session->userdata('id') || $this->session->userdata('status')!='admin'){
			redirect(base_url());
        }


        $name = $this->input->post('name');
        $gen = $this->input->post('gender');
        $birth = $this->input->post('bday');
        $pass = $this->input->post('pass');

        $data_update = array (
            'name' => $name,
            'gender' => $gen,
            'birthdate' => $birth,
            'password' => $pass,
        );

        $update = $this->AdminModel->update_data('phone','parent',$data_update, $phone);

        if($update){
            $this->session->set_flashdata('alert', array('message' => 'Parent Number Phone: '.$phone.' Edited!','class' => 'success'));
            redirect(base_url('admin/parent_show'));
        }else{
            echo "<script>alert('Error Edited Data!');</script>";
        } 
    }
}