<?php
    /** 
    *MainPage img upload class
    *@author zrb
    *@copyright  GPL
    */
    class mimg extends init
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function index(){
            //$this->loadLayout();
            $this->load->model('famodel');
            $this->data['imgs'] = $this->famodel->getImg();
            $this->data['admin_url'] = $this->admin_url;
            $this->loadLayout();
            $this->load->view('admin/mainimg',$this->data);
        }


        public function upload(){
            $this->loadLayout();
            $this->load->view('admin/mainimg');
            $this->load->model('famodel','',TRUE);
            $this->famodel->uploadImg();
            redirect('mimg/index');
        }


        function delete()
        {
            $id = $this->uri->segment(3);
            $this->load->model('famodel','',TRUE);
            if(!$this->famodel->imgDel($id))
            {
                throw new Exception("delete failed", 1);
                
            }
            redirect('mimg');
        }

       
    }
?>