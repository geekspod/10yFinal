<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pricing extends CI_Model 
{
    public function all_pricing()
    {
        $query = $this->db->query("SELECT * FROM tbl_pricing_table ORDER BY id ASC");
        return $query->result_array();
    }
    
    
    public function single_pricing($data)
    {
        $query = $this->db->get_where('tbl_pricing_table',$data);
        return $query->result_array();
    }
}