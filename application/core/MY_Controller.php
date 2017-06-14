<?php
    /** 
    *public class
    *@author zrb
    *@copyright  GPL
    */
    class MY_Controller extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
        }
    }


    class init extends MY_Controller
    {

        public $admin_url;
        public $staticUrl;
        public $data = array();
        public $is_log = false;


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
            $this->is_log= $this->session->userdata('is_log');
            if(!$this->is_log)
            {
                redirect('Auth');
            }
            
        }

        public function loadLayout()
        {
            $this->load->view('admin/header',$this->data);
            $this->load->view('admin/nav',$this->data);
        }
    }
?>