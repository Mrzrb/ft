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
                $this->load->view('admin/signin',$this->data);
            }else{
                $is_log = $this->session->userdata('is_log');
                $this->load->view('admin/header',$this->data);
                $is_log?$this->load->view('admin/nav',$this->data):0;
                
                $is_log?$this->load->view('admin/dashboard',$this->data):0;
            }
        }
    

        public function logout()
        {
            
            $this->session->sess_destroy();
            // $this->is_log = false;
            redirect('/fadmin/login');
        }

        // public function login(){

        //     $this->is_log = false;
        //     if($this->input->post()){
        //         $this->load->view('admin/signin',$this->data);
        //     }else{

        //         // $this->load->helper('url');
        //         $this->load->model('FAmodel','',TRUE);
        //         if(($ad_name=$this->FAmodel->login()))
        //         {
        //             $udata = array(
        //                 'ad_name' => $ad_name,
        //                 'is_log' => TRUE
        //             );
        //             $this->session->set_userdata($udata);
        //             // $this->is_log = TRUE;
        //             // $this->is_log = true;
        //             redirect('FAdmin/index');
        //         }
        //     }
        // }
        


        public function blog()
        {

            redirect('ablog');
            // $this->load->model('mblog','',TRUE);
            // // $$this->data['blogs']
            // $this->data['blogs'] = $this->mblog->getblog();
            // $this->load->view('admin/header',$this->data);
            // $this->load->view('admin/nav',$this->data);
            // $this->load->view('admin/blog',$this->data);
        }


        
    }
?>