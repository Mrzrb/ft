<?php
    /** 
    *class FBlog   to manage the blog of web
    *@author zrb
    *@copyright  GPL
    */
    class fblog extends web{
        public function __construct()
        {
            parent::__construct();
        }

        public function index()
        {
            $this->load->model('mblog','',TRUE);
            $this->load->model('famodel','',TRUE);
            $blogs = $this->mblog->getblog();
            // var_dump($blogs);die;
            $this->data['cats'] = $this->famodel->catlist();

            // var_dump($this->data['cats']);die;
            
            $this->data['blogs'] = $blogs;
            $this->loadLayoutF();
            $this->load->view('ftv/blog',$this->data);
        }
    }
?>