<?php
    /** 
    *网站首页基类
    *@author zrb
    *@copyright  GPL
    */
    class fweb extends CI_Controller
    {
        public $base;
        public $staticUrl;
        public $data = array();
        

        function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->base = $this->config->item('s_base_url');
            $this->staticUrl = $this->base."/application/views/ftv/";
            $this->data['base'] = $this->staticUrl;

        }

        function index()
        {
            //$data['base'] = $this->staticUrl;
            $this->load->view('ftv/index',$this->data);
            // $this->load->view('ftv/blog',$this->data);
        }

        function service()
        {
            $this->load->view('ftv/service',$this->data);
        }


        function blog()
        {
            $this->load->view('ftv/blog',$this->data);
        }

        function contact()
        {
            $this->load->view('ftv/contact',$this->data);
        }

        function search()
        {
            $this->load->view('ftv/search',$this->data);
        }
    }
?>