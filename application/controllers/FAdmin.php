<?php
    /** 
    *admin base class
    *@author zrb
    *@copyright  GPL
    */
    class fadmin extends init
    {

        public function __construct()
        {       
            parent::__construct();
           
        }

        public function index(){
            if(!$this->session->userdata('is_log')){
                // redirect('FAdmin/login');
                $this->load->view('admin/signin',$this->data);
            }else{
            // $this->load->view('admin/signin',$this->data);
                $this->load->view('admin/header',$this->data);
                $this->load->view('admin/nav',$this->data);
                $this->load->view('admin/dashboard',$this->data);
            }
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
        


        public function blog()
        {
            $this->load->view('admin/header',$this->data);
            $this->load->view('admin/nav',$this->data);
            $this->load->view('admin/blog',$this->data);
        }


        // public function cat()
        // {
        //     $this->loadLayout();
        //     $this->load->view('ACatController/catlist',$this->data);
        // }


    }
?>