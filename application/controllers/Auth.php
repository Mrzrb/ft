<?php
    /** 
    *auth
    *@author zrb
    *@copyright  GPL
    */
    class auth extends CI_Controller
    {

        public $admin_url;
        public $staticUrl;
        public $data = array();
        // public $is_log = false;


        public function __construct()
        {
            parent::__construct();
            $this->admin_url = $this->config->item('ad_base_url');
            $this->staticUrl = $this->admin_url . '/application/views/admin/';
            $this->data['base'] = $this->staticUrl;
            $this->load->database();
            $this->load->library('session');
            $this->load->helper('url');
            $this->load->helper('form');
        }

        public function index()
        {
            $this->load->view('admin/header',$this->data);
            // $this->load->view();
            $this->load->view('admin/signin',$this->data);
        }



         public function login(){
            $this->load->helper('url');
            $this->load->model('FAmodel','',TRUE);
            if($this->FAmodel->login())
            {
                // $_SESSION['is_login'] = TRUE;
                // var_dump($this->data);
                $udata = array(
                    'is_log' => TRUE
                );
                $this->session->set_userdata($udata);
                //var_dump($this->session->userdata('is_log'));exit;
                // $this->load->view('admin/header',$this->data);
                // $this->load->view('admin/nav',$this->data);
                // $this->load->view('admin/dashboard',$this->data);
                redirect('FAdmin/index');
            }
        }


         public function logout()
        {
            
            $this->session->sess_destroy();
            // $this->is_log = false;
            redirect('auth/index');
        }


    }
?>