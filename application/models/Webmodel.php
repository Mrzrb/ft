<?php
    /** 
    *web front
    *@author zrb
    *@copyright  GPL
    */
    
    class webmodel extends CI_Model
    {

        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }


        public function getSlideImg()
        {
            return  $data['imgArr'] = $this->db->get('mimg')->result();
        }


    }
?>