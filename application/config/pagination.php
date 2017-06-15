<?php
    /** 
    *pagination
    *@author zrb
    *@copyright  GPL
    */
    


    /* * bootstrap 风格的分页样式 * */ 
    $config['base_url'] = '/ablog/index';
    $config['full_tag_open'] = "<ul class='pagination pagination-sm'>";
    $config['full_tag_close'] = "</ul>";
    $config['first_tag_open'] = "<li>";
    $config['first_tag_close'] = "</li>";
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active"><a>';
    $config['cur_tag_close'] = '</a></li>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';
    
    $config['first_link'] = 'First';
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li>';
    
    $config['last_link'] = 'Last';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';



?>