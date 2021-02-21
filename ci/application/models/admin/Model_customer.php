<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_customer extends CI_Model 
{

	function get_auto_increment_id()
    {
        $sql = "SHOW TABLE STATUS LIKE 'tbl_customer'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
	
    function show() {
        $sql = "SELECT * FROM  sign_up  WHERE role='manager' ORDER BY id ASC ";
    $query = $this->db->query($sql);
    return $query->result_array(); 
    
    
        // $sql = "SELECT * FROM sign_up";
        // $query = $this->db->query($sql);
        // return $query->result_array();
    }

    function add($data) {
        $this->db->insert('sign_up',$data);
        return $this->db->insert_id();
    }

    function update($id,$data) {
        $this->db->where('customer_id',$id);
        $this->db->update('tbl_customer',$data);
    }

    function delete($id)
    {
        $this->db->where('customer_id',$id);
        $this->db->delete('tbl_customer');
    }

    function getData($id)
    {
        $sql = 'SELECT * FROM tbl_customer WHERE customer_id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }




function add_customer($data)
    {
		$insert = $this->db->insert('sign_up',$data);
		return $this->db->insert_id();
	}

	function check_email($email) 
	{
        $where = array(
			'email' => $email
		);
		$this->db->select('*');
		$this->db->from('sign_up');
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result_array();
    }

    function partner_check($id)
    {
        $sql = 'SELECT * FROM tbl_customer WHERE customer_id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }
    
}