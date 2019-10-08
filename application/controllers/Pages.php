<?php
    class pages extends CI_Controller{
        function __construct(){
            parent::__construct();		
            
        }
        public function view($page = 'f_login'){
            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
            }

            echo base_url();
            $this->load->view('pages/'.$page);
            
        }

    }