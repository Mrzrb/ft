<?php
    /** 
    *Admin model
    *@author zrb
    *@copyright  GPL
    */
    
    class famodel extends CI_Model
    {

        private $is_login = False;

        public function __construct()
        {
            parent::__construct();
        }


        function login()
        {

            $ad_name = $this->security->xss_clean( $this->input->post('ad_name'));
            $ad_pwd =  $this->security->xss_clean( $this->input->post('ad_pwd'));
            $this->db->where('ad_name', $ad_name);
            $name =  $this->db->get('admin')->row_array();
            // var_dump($name);exit;
            if(!$name){
                throw new Exception("Do not exist admin",1);
            }
            if($ad_pwd == $name['ad_pwd']){
                return $ad_name;
            }else{
                throw new Exception("password wrong", 1);
            }

            return true;

        }




        public function catlist()
        {
            return $this->db->get('cat')->result();
        }

        public function catadd(){
            $insert = $this->input->post('cat_name')?$this->input->post('cat_name'):'';

            if(!$insert){
                exit('category name can not be empty!');
            }else{
                $data = array(
                    'cat_name'=>$insert
                );
                $res = $this->db->insert('cat',$data);
                if(!$res){
                    exit('insert failed');
                }else{
                    return true;
                }
            }
        }



/********************************************img************************************************/
        function uploadImg()
        {
            is_dir('./upload')?'./':mkdir('./upload',-777,false);
            $config['upload_path']      = './upload';
            $config['file_name']  = date('Ymd').rand();
            $config['allowed_types']    = 'gif|jpg|png';
            $config['max_size']     = 100000;
            $config['max_width']        = 10240;
            $config['max_height']       = 7680;
            $this->load->library('upload',$config);
            $this->upload->do_upload();
            $imgUrl = strstr($this->upload->data('full_path'),'upload');
            // var_dump($this->upload->data());exit;
            $data['img_src']  = $imgUrl;
            $this->db->insert('mimg',$data);
        }

        public function getImg()
        {
            return $this->db->get('mimg')->result();
        }

        public function imgDel($id)
        {
            $del = array('img_id'=>$id);
            $this->db->where('img_id',$del['img_id']);
            $url = $this->db->get('mimg')->result();
            $file ='./'.$url[0]->img_src;
            return $this->db->delete('mimg',$del)&&unlink($file);
        }


    }
?>