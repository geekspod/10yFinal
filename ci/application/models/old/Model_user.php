<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model 
{

	function check_email($email) 
	{
        $where = array(
			'email' => $email
		);
		$this->db->select('*');
		$this->db->from('sign_up');
		$this->db->where($where);
		$query = $this->db->get();
		return $query;
    }
    
    function check_username($username) 
	{
        $where = array(
			'username' => $username
		);
		$this->db->select('*');
		$this->db->from('sign_up');
		$this->db->where($where);
		$query = $this->db->get();
		return $query;
    }
	
	public function register($table, $value){

		return $this->db->insert($table, $value);
	}

    public function login_form_validate(){
		$email=$this->input->post('email');
		$password=$this->input->post('password');
//  echo "<pre>";print_r($email);
//  echo "<pre>";print_r($password);exit;

// sc.email,sc.password,sc.role, sc.status
		$this->db->select('*');
		$this->db->from('sign_up sc');
		
		$this->db->where(" sc.password = '$password' AND sc.email = '$email'");
		//$this->db->where(" sc.email = '$email' ");
		$result = $this->db->get();
	

		if ( $result->num_rows() > 0 )
		{
			$result = (array) $result->result();
			
			return $result[0];	
		}
else{

	$this->db->select('*');
	$this->db->from('sign_up sc');
	
	$this->db->where(" sc.email = '$email'");
	//$this->db->where(" sc.email = '$email' ");
	$result = $this->db->get();


	if ( $result->num_rows() > 0 )
	{
		$result = (array) $result->result();
		
		$error = 'Kindly enter correct password!';
		$this->session->set_flashdata('error',$error);
			redirect(base_url().'login');

		//return $result[0];	
	}

			$error = 'Kindly enter correct email!';
			$this->session->set_flashdata('error',$error);
				redirect(base_url().'login');
}
		

		



	}
    function check_referal($username) 
	{
        $where = array(
			'username' => $username
		);
		$this->db->select('*');
		$this->db->from('sign_up');
		$this->db->where($where);
		$query = $this->db->get();
		return $query;
    }
    
    
    
    
    function checkstatus($email)
    {
		$where = array(
			'email' 	=> $email,
			'status'	=> 'disable',
		);
		$this->db->select('*');
		$this->db->from('sign_up');
		$this->db->where($where);
		$query = $this->db->get();
		//echo "<pre>";print_r($query);exit;
		return $query;
	}

    function check_password($email,$password)
    {
        $where = array(
            'email' => $email,
            'password' => md5($password)
        );
        $this->db->select('*');
        $this->db->from('sign_up');
        $this->db->where($where);
        $query = $this->db->get();
        return $query;
    }
    
    
    
    function add_customer($data)
    {
		$insert = $this->db->insert('sign_up',$data);
		return $this->db->insert_id();
	}
	
	
	
	public function updatestatus($data,$id)
	{
		
        $update = $this->db->update('sign_up',$data,$id);
        return $update;
	}

}