<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model 
{

    public function get_setting_data()
    {
        $query = $this->db->query("SELECT * from tbl_settings WHERE id=1");
        return $query->first_row('array');
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

 function add_customer($data)
    {
		$insert = $this->db->insert('sign_up',$data);
		return $this->db->insert_id();
	}
	
	
public function update_profile($form_data,$email)
	{
		
        $update = $this->db->update('manager',$form_data,$email);
        return $update;
	}
public function updatestatus($data,$id)
	{
		
        $update = $this->db->update('sign_up',$data,$id);
        return $update;
	}


//  function add_customer($data)
//     {
//         $insert = $this->db->insert('manager',$data);
//         return $this->db->insert_id();
//     }

// 	function check_email($email) 
// 	{
//         $where = array(
// 			'email' => $email
// 		);
// 		$this->db->select('*');
// 		$this->db->from('manager');
// 		$this->db->where($where);
// 		$query = $this->db->get();
// 		return $query->first_row('array');
//     }

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
    
    public function get_email($id){
        $work_score_id=$id;

        $sql = 'SELECT email FROM work_score WHERE work_score_id=?';
//echo "<pre>";print_r($email);exit;
        $query = $this->db->query($sql,array($id));

        return $query->first_row('array'); 
        
    }
   
   public function share_reports($data){
       
     
		$insert = $this->db->insert('share_reports',$data);
		return $this->db->insert_id();
	
   }
    
    public function get_relative_data($email){
        
        $sql = 'SELECT * FROM  sign_up WHERE email=?';

        $query = $this->db->query($sql,array($email));

        return $query->first_row('array');

    }
    
    public function count_fourth_age_comparison_from_employees(){
        
         $sql = "SELECT * FROM sign_up WHERE age>='46' AND age<='75' ";
 $query = $this->db->query($sql);
 return $query->num_rows();
        
    }
    
    
    public function count_third_age_comparison_from_employees(){
        
        $sql = "SELECT * FROM sign_up WHERE age>='36' AND age<='45' ";
 $query = $this->db->query($sql);
 return $query->num_rows();
    }
    public function count_second_age_comparison_from_employees(){
        
$sql = "SELECT * FROM sign_up WHERE age>='26' AND age<='35' ";
 $query = $this->db->query($sql);
 return $query->num_rows();
 
    }
    public function count_first_age_comparison_from_employees(){
       
   $sql = "SELECT * FROM sign_up WHERE age>='15' AND age<='25' ";
 $query = $this->db->query($sql);
 return $query->num_rows();
   }
    
    public function count_other_department_from_employees(){
        
        $department='OTHER';
        $this->db->where('department',$department);
    return  $result = $this->db->get('sign_up')->num_rows();
    }
    
    public function count_engineering_from_employees(){
        
        $department='ENGINEERING';
        $this->db->where('department',$department);
    return  $result = $this->db->get('sign_up')->num_rows();
    }
    
    public function count_management_from_employees(){
        
        $department='MANAGEMENT';
        $this->db->where('department',$department);
    return  $result = $this->db->get('sign_up')->num_rows();
    }
   
    public function count_computer_science_from_employees(){
        
        $department='COMPUTER SCIENCE';
        $this->db->where('department',$department);
    return  $result = $this->db->get('sign_up')->num_rows();
    }
    
    public function count_software_engineering_from_employees(){
        
        $department='SOFTWARE ENGINEERING';
        $this->db->where('department',$department);
    return  $result = $this->db->get('sign_up')->num_rows();
    }
    
    public function count_supply_chain_management_from_employees(){
        
        $department='SUPPLY CHAIN MANAGEMENT';
        $this->db->where('department',$department);
    return  $result = $this->db->get('sign_up')->num_rows();
    }
   
    public function count_hr_production_from_employees(){
        
        $department='HR PRODUCTION';
        $this->db->where('department',$department);
    return  $result = $this->db->get('sign_up')->num_rows();
    }
    
    public function count_finance_department_from_employees(){
        
        $department='FINANCE';
        $this->db->where('department',$department);
    return  $result = $this->db->get('sign_up')->num_rows();
    }
    
    public function count_marketing_department_from_employees(){
        
        $department='MARKETING';
        $this->db->where('department',$department);
    return  $result = $this->db->get('sign_up')->num_rows();
    }
    
    public function count_male_from_employees(){
        $gender='MALE';
        $this->db->where('gender',$gender);
    return  $result = $this->db->get('sign_up')->num_rows();
        
    }
    public function count_female_from_employees(){
        $gender='FEMALE';
        $this->db->where('gender',$gender);
    return  $result = $this->db->get('sign_up')->num_rows();
        
    }
    
    public function count_other_from_employees(){
        
        
         $gender='OTHER';
        $this->db->where('gender',$gender);
    return  $result = $this->db->get('sign_up')->num_rows();
    }
    public function nayatel_completed_test(){
        
         return  $result = $this->db->get('nayatel_value_score')->num_rows();
    }
    
    public function work_completed_test(){
        
        return  $result = $this->db->get('work_score')->num_rows();
    }
    
    public function get_users_count(){
        
        // $this->db->where('categories_id',$id);
    return  $result = $this->db->get('sign_up')->num_rows();
    //$this->db->from('questions_assessment');
 return    $result = $this->db->where('categories_id',$id)->count_all("questions_assessment");
//echo "<pre>";print_r($result);exit;
//$query = $this->db->get();
return $rowcount = $result->num_rows();
    }
   public function get_users(){
       
       $this->db->select("*");
      //$where = "email='$email'";
    $this->db->from("sign_up");
    $this->db->order_by("id", "ASC");
    //$this->db->limit(6);  
    $query = $this->db->get();
   // echo "<pre>";print_r($query);exit;
    return $query->result();exit; 
    
   } 
    public function get_user_charts_data($email){
        
        $this->db->select("*");
      $where = "email='$email'";
    $this->db->from("work_score");
    $this->db->order_by("work_score_id", "ASC");
    //$this->db->limit(6);  
    $query = $this->db->get();
   // echo "<pre>";print_r($query);exit;
    return $query->result();exit; 
    }
    
    public function get_charts_data($email){
    //$where = '$email';
    
     $this->db->select("*");
      $where = "email='$email'";
    $this->db->from("cultural_scan_score");
    $this->db->order_by("cultural_scan_score_id", "desc");
    $this->db->limit(6);  
    $query = $this->db->get();
   // echo "<pre>";print_r($query);exit;
    return $query->result();exit;
    
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

public function get_work_score_attributes(){
   $this->db->select("*");
    //  $where = "email='$email'";
    $this->db->from("work_score_attributes_names");
    $this->db->order_by("work_score_attributes_names_id", "ASC");
   // $this->db->limit(10);  
    $query = $this->db->get();
   // echo "<pre>";print_r($query);exit;
    return $query->result_array();exit; 
    
}

public function get_category_wise_description($email){
     $this->db->select("*");
      $where = "email='$email'";
    $this->db->from("description");
    $this->db->order_by("description_id", "desc");
   // $this->db->limit(10);  
    $query = $this->db->get();
   // echo "<pre>";print_r($query);exit;
    return $query->result_array();exit;
    
}

public function get_nayatel_organization_report($email){
   // $where = "name='Joe' AND status='boss' OR status='active'";
       $limit = $this->db->where('email',$email)->count_all("nayatel_value_score");
//echo "<pre>";print_r($limit);exit;
 $where = "organization='Nayatel'";
$data=$this->db
    ->select_sum('Honesty')
    ->from('nayatel_value_score')
     ->order_by('nayatel_value_score_id desc')
     ->where($where)
    ->limit($limit)
    ->get();
   
$data= $data->result_array();
$data1=($data[0]['Honesty']);
$data1=$data1/$limit;

// 2
$data=$this->db
    ->select_sum('Excellence')
    ->from('nayatel_value_score')
     ->order_by('nayatel_value_score_id desc')
     ->where($where)
    ->limit($limit)
    ->get();
   
$data= $data->result_array();
$data2=($data[0]['Excellence']);
$data2=$data2/$limit;
// 3
$data=$this->db
    ->select_sum('Service')
    ->from('nayatel_value_score')
     ->order_by('nayatel_value_score_id desc')
     ->where($where)
    ->limit($limit)
    ->get();
   
$data= $data->result_array();
$data3=($data[0]['Service']);
$data3=$data3/$limit;
// 4
$data=$this->db
    ->select_sum('Respect')
    ->from('nayatel_value_score')
     ->order_by('nayatel_value_score_id desc')
     ->where($where)
    ->limit($limit)
    ->get();
   
$data= $data->result_array();
$data4=($data[0]['Respect']);
$data4=$data4/$limit;
// 5
$data=$this->db
    ->select_sum('Respect')
    ->from('nayatel_value_score')
     ->order_by('nayatel_value_score_id desc')
     ->where($where)
    ->limit($limit)
    ->get();
   
$data= $data->result_array();
$data5=($data[0]['Respect']);
$data5=$data5/$limit;
// 6

$data=$this->db
    ->select_sum('Respect')
    ->from('nayatel_value_score')
     ->order_by('nayatel_value_score_id desc')
     ->where($where)
    ->limit($limit)
    ->get();
   
$data= $data->result_array();
$data6=($data[0]['Respect']);
$data6=$data6/$limit;

// 7
$data=$this->db
    ->select_sum('Respect')
    ->from('nayatel_value_score')
     ->order_by('nayatel_value_score_id desc')
     ->where($where)
    ->limit($limit)
    ->get();
   
$data= $data->result_array();
$data7=($data[0]['Respect']);
$data7=$data7/$limit;

$data=array(
    'Honesty'=>$data1,
     'Excellence'=>$data2,
      'Service'=>$data3,
       'Respect'=>$data4,
        'Learning'=>$data5,
         'Innovation'=>$data6,
          'Simplicity'=>$data7,
    
    
    );
    //echo "<pre>";print_r($data);echo "<br>";exit;
return $data;
//   echo "<pre>";print_r($data);echo "<br>";
//   echo "<pre>";print_r($data1);echo "<br>";
//   echo "<pre>";print_r($data2);echo "<br>";
//   echo "<pre>";print_r($data3);echo "<br>";
//   echo "<pre>";print_r($data4);echo "<br>";
//     echo "<pre>";print_r($data5);echo "<br>";
//   echo "<pre>";print_r($data6);echo "<br>";
//   echo "<pre>";print_r($data7);echo "<br>";
// exit;
 echo "<pre>";print_r($data[0]['Honesty']);exit;

    $where = "email='$email'";

    $this->db->where($where);

    //$where = "email='$email'";
    // print_r($where);exit;
    
     $this->db->select("Honesty,Excellence,Service,Respect,Learning,Innovation,Simplicity,organization,department");
      
    $this->db->from("nayatel_value_score");
    // $this->db->order_by("work_score_id", "desc");
   
    $this->db->limit(1);  
    $query = $this->db->get();
    //
    return $query->result_array();exit;
    
    echo "<pre>";print_r($query);exit;
    
     $this->db->select("*");
      $where = "email='$email'";
    $this->db->from("nayatel_value_score");
    $this->db->order_by(" nayatel_value_score_id", "desc");
    $this->db->limit(1);  
    $query = $this->db->get();
   // echo "<pre>";print_r($query);exit;
    return $query->result_array();exit;
    
}

public function get_ambition_data($email){
    $this->db->select("Ambition");
      $where = "email='$email'";
    $this->db->from("work_score");
    $this->db->order_by("work_score_id", "desc");
    $this->db->limit(10);  
    $query = $this->db->get();
   // echo "<pre>";print_r($query);exit;
    return $query->result_array();exit;
    
}

public function get_relevant_email($email){
    
    $sql = 'SELECT email FROM  sign_up WHERE email=?';

        $query = $this->db->query($sql,array($email));

        return $query->first_row('array');

}


public function get_user_email($id){
    
    $sql = 'SELECT email FROM  sign_up WHERE id=?';

        $query = $this->db->query($sql,array($id));

        return $query->first_row('array');

}
public function get_description_data1($Energy_and_drive){
   // echo "<pre>";print_r($Energy_and_drive);
 

    //$this->db->where($where);
    if($Energy_and_drive >=0 && $Energy_and_drive <=50){
      $this->db->select("description_test");
    $this->db->from('description');
    $this->db->where("min_value >='0'");
    $this->db->where("max_value <='50'");
     $this->db->where("dimensions_id ='Energy and Drive'");
    $query = $this->db->get();
    return $query->result();exit;
     echo "<pre>";print_r($result);exit; 
        
    }
    else{
        
    $this->db->select("description_test");
    $this->db->from('description');
    $this->db->where("min_value >='51'");
    $this->db->where("max_value <='100'");
     $this->db->where("dimensions_id ='Energy and Drive'");
    $query = $this->db->get();
    return $query->result();exit;
     echo "<pre>";print_r($result);exit;  
          
    }
}

public function Problem_solving_style_data($Problem_solving_style){
    
   if ($Problem_solving_style >=0 && $Problem_solving_style <=50){
       // echo "low";exit;
         $query = $this->db->query("SELECT description_test from  description WHERE  dimensions_id='Problem solving style' AND max_value='50'");
      
    return $query->first_row('array');exit;
     echo "<pre>";print_r($query);exit;
        
    }
    
    else{
    //echo "above 50";exit;
      $query = $this->db->query("SELECT description_test from  description WHERE  dimensions_id='Problem solving style' AND max_value='100'");
      
    return $query->first_row('array');exit;
     echo "<pre>";print_r($query);exit;
    echo "<pre>";print_r($Energy_and_drive);exit;
    
    }   
    
}

public function Dealing_with_pressure_and_stress_data($Dealing_with_pressure_and_stress){
    
    if ($Dealing_with_pressure_and_stress >=0 && $Dealing_with_pressure_and_stress <=50){
       // echo "low";exit;
         $query = $this->db->query("SELECT description_test from  description WHERE  dimensions_id='Dealing with pressure and stress' AND max_value='50'");
      
    return $query->first_row('array');exit;
     echo "<pre>";print_r($query);exit;
        
    }
    
    else{
    //echo "above 50";exit;
      $query = $this->db->query("SELECT description_test from  description WHERE  dimensions_id='Dealing with pressure and stress' AND max_value='100'");
      
    return $query->first_row('array');exit;
     echo "<pre>";print_r($query);exit;
    echo "<pre>";print_r($Energy_and_drive);exit;
    
    }      
}

public function Working_with_others_data($Working_with_others){
    
     if ($Working_with_others >=0 && $Working_with_others <=50){
       // echo "low";exit;
         $query = $this->db->query("SELECT description_test from  description WHERE  dimensions_id='Working with others' AND max_value='50'");
      
    return $query->first_row('array');exit;
     echo "<pre>";print_r($query);exit;
        
    }
    
    else{
    //echo "above 50";exit;
      $query = $this->db->query("SELECT description_test from  description WHERE  dimensions_id='Working with others' AND max_value='100'");
      
    return $query->first_row('array');exit;
     echo "<pre>";print_r($query);exit;
    echo "<pre>";print_r($Energy_and_drive);exit;
    
    }    
    
    
}

public function get_Work_style_data($Work_style){
    
   //echo "<pre>";print_r($Work_style);exit;
    if ($Work_style >=0 && $Work_style <=50){
       // echo "low";exit;
         $query = $this->db->query("SELECT description_test from  description WHERE  dimensions_id='Work Style' AND max_value='50'");
      
    return $query->first_row('array');exit;
     echo "<pre>";print_r($query);exit;
        
    }
    
    else{
    //echo "above 50";exit;
      $query = $this->db->query("SELECT description_test from  description WHERE  dimensions_id='Work Style' AND max_value='100'");
      
    return $query->first_row('array');exit;
     echo "<pre>";print_r($query);exit;
    echo "<pre>";print_r($Energy_and_drive);exit;
    
    }   
    
}

public function get_Energy_and_drive_data($Energy_and_drive){
   // $dimensions_id='Energy and Drive';
    //echo "<pre>";print_r($Energy_and_drive);exit;
    if ($Energy_and_drive >=0 && $Energy_and_drive <=50){
       // echo "low";exit;
         $query = $this->db->query("SELECT description_test from  description WHERE  dimensions_id='Energy and Drive' AND max_value='50'");
      
    return $query->first_row('array');exit;
        
    }
    
    else{
    //echo "above 50";exit;
      $query = $this->db->query("SELECT description_test from  description WHERE  dimensions_id='Energy and Drive' AND max_value='100'");
      
    return $query->first_row('array');exit;
     echo "<pre>";print_r($query);exit;
    echo "<pre>";print_r($Energy_and_drive);exit;
    
    }
}


    public function get_demo_charts_data($email){
   //$where = "email='$email'";
    // $where = array('email' => $email);

    // print_r($where);exit;
    
    $this->db->select('*')->from('work_score')->where('email=',$email)->limit(1);
    $query = $this->db->get();
     return $query->result_array();exit;
     //echo "<pre>";print_r($query);exit;
     $this->db->select("Energy_and_drive,Ambition,Initiative,Flexibility,Energy,Leadership,Multi_tasking,Persuasion,Social_Confidence,Work_style,Persistence,Attention_to_detail,Rule_Following,Dependability,Planning,Working_with_others,Team_Work,Concern_for_others,Outgoing,Democratic,Dealing_with_pressure_and_stress,Self_control,Stress_Tolerance,Problem_solving_style,Innovation,Analytical_Thinking");
      
    $this->db->from("work_score");
    // $this->db->order_by("work_score_id", "desc");
   $this->db->where($where); 
   // $this->db->limit(1);  
    $query = $this->db->get();
   
    return $query->result_array();exit;
     echo "<pre>";print_r($query);exit;
    
    $sql = "SELECT * FROM sign_up ORDER BY id ASC";
    $query = $this->db->query($sql);
    return $query->result_array();
    
    
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
//      public function updatestatus($data,$id)
// 	{
		
//         $update = $this->db->update('manager',$data,$id);
//       // echo "<pre>";print_r($update);exit;
//         return $update;
// 	}

}