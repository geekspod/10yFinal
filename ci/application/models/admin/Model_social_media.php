<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_social_media extends CI_Model 
{

    function show() {
        $sql = "SELECT * FROM tbl_social";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function update($social_name,$data) {
        // echo "<pre>";print_r($social_name);echo "<br>";
        // echo "<pre>";print_r($data);exit;
        $this->db->where('social_name',$social_name);
       return $this->db->update('tbl_social',$data);
       
        // $this->db->where('id',1);
        // $this->db->update('tbl_settings',$data);
    }
    
}