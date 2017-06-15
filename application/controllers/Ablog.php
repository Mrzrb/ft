<?php
    /** 
    *Blog manager
    *@author zrb
    *@copyright  GPL
    */
    
    class ablog extends init
    {

        public function __construct()
        {
            parent::__construct();
        }

        public function index()
        {
            
        }


        public function pushblog()
        {
            $this->data['cats'] = $this->db->get('cat')->result();
            $this->load->view('admin/header',$this->data);
            $this->load->view('admin/blogadd',$this->data);
        }

        public function addblog()
        {
           $this->load->model('mblog','',TRUE);
           $this->mblog->addblog(); 
           redirect('fadmin/blog');
        }

    }
?>