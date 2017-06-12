<?php
    /** 
    *cat controller class 
    *@author zrb
    *@copyright  GPL
    */
    class acatcontroller extends init
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->library('session');
        }

        public function index(){
            // echo "<script> alert('OK');</script>";
            if($this->session->userdata('is_log')){
                $this->load->view('admin/dashboard',$this->data);
            }else{
                redirect('fadmin/index');                
                // echo "<script> alert('You had not login yet,please login');</script>";
            }
        }

        public function catadd()
        {
            $this->loadLayout();
            $this->load->view('admin/catadd');
            if($this->input->post('cat_name')){
                $this->load->model('FAmodel','',TRUE);
                $this->FAmodel->catadd();
                redirect('/FAdmin');                
            }
        }

        public function catlist(){
            $data['cats'] =  $this->db->get('cat')->result();
            // var_dump($data);exit;

            $this->loadLayout();
            $this->load->view('admin/catlist',$data);
        }
    }
?>