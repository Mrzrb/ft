<?php
    /** 
    *Commented-Out
    *@author zrb
    *@copyright  GPL
    */
    class test extends init
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->helper(array('form', 'url'));
        }

        public function rec(){
            is_dir('./ll')?'./':mkdir('./ll',-777,false);
            $config['upload_path']      = './ll';
        $config['allowed_types']    = 'gif|jpg|png';
        $config['max_size']     = 100000;
        $config['max_width']        = 1024000;
        $config['max_height']       = 768000;
            $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
            {
                $error = array('error' => $this->upload->display_errors());

                $this->load->view('admin/info', $error);
            }
            else
            {
                $data = array('upload_data' => $this->upload->data());

                $this->load->view('upload_success', $data);
            };

        }
    }
?>