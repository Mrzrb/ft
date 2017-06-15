<?php
    /** 
    *blog manager
    *@author zrb
    *@copyright  GPL
    */
    class mblog extends CI_Model
    {
        public function __construct(){
        
            parent::__construct();
            $this->load->database();
            $this->load->library('session');
        }

        public function  addblog()
        {
            $blog['title'] = $this->security->xss_clean($this->input->post('title'));
            $blog['article'] = $this->security->xss_clean($this->input->post('article'));
            $blog['cat_id'] = $this->security->xss_clean($this->input->post('cat'));
            $blog['ad_name'] = $this->session->userdata('ad_name');
            $blog['pubtime'] = time();
            $blog['tag_name'] = $this->security->xss_clean($this->input->post('tag_name'));

            $this->db->insert('blog',$blog);
        }

        public function getblog($flag=-1,$per=-1)
        {
            $this->db->select('*,cat_name');
            $this->db->from('blog');
            $this->db->join('cat','blog.cat_id=cat.cat_id','left');
            if($flag!=-1&&$per!=-1){
                $this->db->limit($per,$flag);
            }
            return $this->db->get()->result();
        }

        public function getNum($cat_id=-1)
        {
            $this->db->select('count("*") as num');
            if($cat_id!=-1){
                $this->db->where(['cat_id'=>$cat_id]);
            }
            return $this->db->get('blog')->row_array();
        }
        
    }
?>