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
            $this->load->database();
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
                return true;
            }else{
                throw new Exception("password wrong", 1);
            }

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



    }
?>