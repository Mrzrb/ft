<?php
    /** 
    *网站首页基类
    *@author zrb
    *@copyright  GPL
    */
    class fweb extends web
    {
        
        

        function __construct()
        {
            parent::__construct();
        }

        function index()
        {

            $this->load->model('webmodel','',TRUE);
            $this->data['slideimg'] =  $this->webmodel->getSlideImg();
            // var_dump($this->data);
            //$data['base'] = $this->staticUrl;
            $this->loadLayoutF();
            $this->load->view('ftv/index',$this->data);
            // $this->load->view('ftv/blog',$this->data);
        }

        function service()
        {
            $this->loadLayoutF();
            $this->load->view('ftv/service',$this->data);
        }


        function blog()
        {
            $this->loadLayoutF();
            $this->load->view('ftv/blog',$this->data);
        }

        function contact()
        {
            $this->loadLayoutF();
            $this->load->view('ftv/contact',$this->data);
        }

        function search()
        {
            $this->loadLayoutF();
            $this->load->view('ftv/search',$this->data);
        }


        /** 
         *slide img of mainpage
        */
        public function slideImg()
        {
            $this->loadLayout();
            $this->load->model('webmodel','',TRUE);
            $data =  $this->webmodel->getSlideImg();

        }
    }
?>