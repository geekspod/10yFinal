<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_profile extends CI_Model 
{

    function update($data,$id) {
        $this->db->where('customer_id',$id);
        $this->db->update('tbl_customer',$data);
    }
    
    
     function updatedetails($data,$id) {
        $this->db->where('customer_id',$id);
        $this->db->update('tbl_customer_details',$data);
    }
    
    
    public function get_userdata($id)
    {
    	$this->db->select('tbl_customer.*,tbl_customer_details.*');
    	$this->db->from('tbl_customer');
    	$this->db->join('tbl_customer_details','tbl_customer_details.customer_id=tbl_customer.customer_id','Left');
    	$this->db->where('tbl_customer.customer_id',$id);
    	
		$query = $this->db->get();
		return $query ;
	}
    
}