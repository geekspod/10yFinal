<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_roles extends CI_Model 
{

    public function get_setting_data()
    {
        $query = $this->db->query("SELECT * from tbl_settings WHERE id=1");
        return $query->first_row('array');
    }

 function add_roles_data($data)
    {
        $insert = $this->db->insert('roles',$data);
        return $this->db->insert_id();
    }

public function roles_check($id){
    
    $roles_id=$id;
    
     $sql = 'SELECT * FROM roles WHERE roles_id=?';

    $query = $this->db->query($sql,array($roles_id));

    return $query->first_row('array'); 
    
    
}

function get_edit_roles($id)

    { 

        $roles_id=$id;

        $sql = 'SELECT * FROM roles WHERE roles_id=?';

        $query = $this->db->query($sql,array($roles_id));

        return $query->first_row('array');

    }

// function get_edit_roles($id)

//     { 

//         $sub_categories_id=$id;

//         $sql = 'SELECT * FROM sub_categories WHERE sub_categories_id=?';

//         $query = $this->db->query($sql,array($id));

//         return $query->first_row('array');

//     }

public function roles_update($id,$data) {

        $this->db->where('roles_id',$id);

        $this->db->update('roles',$data);

    }



    function view_all_roles() {

        $sql = "SELECT * FROM roles ORDER BY roles_id ASC";

        $query = $this->db->query($sql);

        return $query->result_array();

    }
    function edit_roles($id)

    { 

        $roles_id=$id;

        $sql = 'SELECT * FROM roles WHERE roles_id=?';

        $query = $this->db->query($sql,array($roles_id));

        return $query->first_row('array');

    }

    public function delete_roles($id){



        $this->db->where('roles_id',$id);
    
        $this->db->delete('roles');
    
    }

	function check_email($email) 
	{
        $where = array(
			'email' => $email
		);
		$this->db->select('*');
		$this->db->from('manager');
		$this->db->where($where);
		$query = $this->db->get();
		return $query->first_row('array');
    }

    function check_password($email,$password)
    {
        $salt = 'b7r4';
       // $code = rand(1000,9999);
        $password =  hash('sha256', $salt . ( hash('sha256',$this->input->post('password'))));
        $confirm_password=$password;
//echo "<pre>";print_r($password);exit;
        $where = array(
            'email' => $email,
            'password' => $password
        );
        $this->db->select('*');
        $this->db->from('manager');
        $this->db->where($where);
        $query = $this->db->get();
        return $query->first_row('array');
    }

//  function delete_roles($id)

//     {
//         $roles_id=$id;

//         $this->db->where('roles_id',$roles_id);

//         $this->db->delete('roles');

//     }

function get_roles($id)

    {
        $roles_id=$id;

        $sql = 'SELECT * FROM roles WHERE roles_id=?';

        $query = $this->db->query($sql,array(roles_id));

        return $query->first_row('array');

    }

    public function get_all_fruits() 
    { 
        return $this->db->get('Fruits')->result(); 
    } 


public function get_charts_data($email){
    //$where = '$email';
    $where = "email='$email'";


    $this->db->where($where);
    return $this->db->get('cultural_scan_score')->result(); exit;
    // $this->db->select('cultural_scan_score1,cultural_scan_score2,cultural_scan_score3,cultural_scan_score4,cultural_scan_score5,cultural_scan_score6');
    // $result = $this->db->get('cultural_scan_score');
    // return $result->result_array();exit;


    $email=$email;

    $sql = "SELECT * FROM cultural_scan_score WHERE email='$email' ORDER BY cultural_scan_score_id ASC ";

    $query = $this->db->query($sql);
  //  echo "<pre>";print_r($sql);exit;
    return $query->result_array(); 

    $query = $this->db->query("SELECT * from  cultural_scan_score WHERE  cultural_scan_score_id=1");
    return $query->first_row('array');

}


public function update_profile(){

    
}

    public function updatestatus($data,$id)
	{
		
        $update = $this->db->update('manager',$data,$id);
        return $update;
	}

}