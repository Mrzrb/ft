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
        //    redirect('/fadmin/blog');
            $this->load->model('mblog','',TRUE);
            // $$this->data['blogs']
            $totol = $this->mblog->getNum()['num'];
            $per = 3;
            $from = $this->uri->segment(3);
            $this->page($totol,$per);

            $this->data['blogs'] = $this->mblog->getblog($from,$per);
            $this->load->view('admin/header',$this->data);
            $this->load->view('admin/nav',$this->data);
            $this->load->view('admin/blog',$this->data);
            // $this->load->view('admin/header',$this->data);
            // $config['base_url'] .= '/ablog';
            // $this->page(100,10);
            // echo $this->pagination->create_links();
            
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