<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_category extends CI_Model
{
    public function all_news_by_category_id($id)
    {
        $query = $this->db->query("SELECT * FROM tbl_news WHERE category_id=? ORDER BY news_id DESC", array($id));
        return $query->result_array();
    }

    public function category_by_id($id)
    {
        $query = $this->db->query("SELECT * FROM tbl_category WHERE category_id=?", array($id));
        return $query->first_row('array');
    }


public function csrfguard_generate_token($unique_form_name){

		if (function_exists("hash_algos") and in_array("sha512",hash_algos())){
			$token=hash("sha512",mt_rand(0,mt_getrandmax()));
		}
		else{
			$token=' ';
			for ($i=0;$i<128;++$i){
				$r=mt_rand(0,35);
				if ($r<26){
					$c=chr(ord('a')+$r);
				}
				else{
					$c=chr(ord('0')+$r-26);
				}
				$token.=$c;
			}
		}
		$this->session->set_userdata($unique_form_name,$token);
		return $token;
	}

function csrfguard_validate_token($unique_form_name,$token_value){
		if($unique_form_name=='')
			return false;

		if ($this->session->userdata($unique_form_name)!=''){
			$token= $this->session->userdata($unique_form_name);
		}
		else{
			$token=false;
		}


		if ($token===false){
			$result=false;
		}
		elseif ($token===$token_value){
			$result=true;
		}
		else{
			$result=false;
		}
		$this->session->unset_userdata($unique_form_name);
		return $result;
	}



public function get_all_nayatel_save_for_later($email){

    $sql = "SELECT * FROM  nayatel_save_for_later  WHERE email='$email' ORDER BY id ASC ";
    $query = $this->db->query($sql);
    return $query->result_array();
}

public function check_record_personal_values_save_for_later($email){


     $email=$email;
    //questions_id
    $sql = "SELECT * FROM  personal_values_save_for_later  WHERE email='$email' ORDER BY id ASC ";
    $query = $this->db->query($sql);
    return $query->result_array(); exit;
    	echo "<pre>";print_r($query);exit;


}

public function check_record_work_personality_save_for_later($email){

    $email=$email;
    //questions_id
    $sql = "SELECT * FROM  work_personality_save_for_later  WHERE email='$email' ORDER BY id ASC ";
    $query = $this->db->query($sql);
    return $query->result_array(); exit;
    	echo "<pre>";print_r($query);exit;


}

// public function get_all_personality_assessmnets_save_for_later($email){

//  $email=$email;
//     //questions_id
//     $sql = "SELECT * FROM  personality_assessmnets_save_for_later  WHERE email='$email' ORDER BY id ASC ";
//     $query = $this->db->query($sql);
//     return $query->result_array(); exit;
//     	echo "<pre>";print_r($query);exit;


//     // $sql = "SELECT * FROM  work_personality_save_for_later  WHERE email='$email' ORDER BY id ASC ";
//     // $query = $this->db->query($sql);
//     // return $query->result_array();
// }

public function get_all_personal_values_save_for_later($email){

    $email=$email;
    //questions_id
    $sql = "SELECT * FROM  personal_values_save_for_later  WHERE email='$email' ORDER BY id ASC ";
    $query = $this->db->query($sql);
    return $query->result_array(); exit;
    	echo "<pre>";print_r($query);exit;

}


public function get_all_work_personality_save_for_later($email){

 $email=$email;
    //questions_id
    $sql = "SELECT * FROM  work_personality_save_for_later  WHERE email='$email' ORDER BY id ASC ";
    $query = $this->db->query($sql);
    return $query->result_array(); exit;
    	echo "<pre>";print_r($query);exit;


    // $sql = "SELECT * FROM  work_personality_save_for_later  WHERE email='$email' ORDER BY id ASC ";
    // $query = $this->db->query($sql);
    // return $query->result_array();
}

public function check_record_nayatel_save_for_later($email){

    $email=$email;
    //questions_id
    $sql = "SELECT * FROM  nayatel_save_for_later  WHERE email='$email' ORDER BY id ASC ";
    $query = $this->db->query($sql);
    return $query->result_array(); exit;
    	echo "<pre>";print_r($query);exit;

     $where = array(
			'email' => $email
		);

		$this->db->select('*');
		$this->db->from('nayatel_save_for_later');
		$this->db->where($where);
		$query = $this->db->get();

		return $query->first_row('array');exit;
		echo "<pre>";print_r($query);exit;


}

public function remaining_test_time_slot_personal_values($email){

     $where = array(
			'test_name' => 'Personal Values Assessment',
			'email' => $email
		);

		$this->db->select('test_time_slot');
		$this->db->from('remaining_test_time_slot');
		$this->db->where($where);
		$query = $this->db->get();

		return $query->first_row('array');exit;
		echo "<pre>";print_r($query);exit;

}


public function remaining_test_time_slot_work_personality($email){

     $where = array(
			'test_name' => 'Work Personality Index',
			'email' => $email
		);

		$this->db->select('test_time_slot');
		$this->db->from('remaining_test_time_slot');
		$this->db->where($where);
		$query = $this->db->get();

		return $query->first_row('array');exit;
		echo "<pre>";print_r($query);exit;

}

public function remaining_test_time_slot($email){

     $where = array(
			'test_name' => 'Nayatels Value Statements',
			'email' => $email
		);

		$this->db->select('test_time_slot');
		$this->db->from('remaining_test_time_slot');
		$this->db->where($where);
		$query = $this->db->get();

		return $query->first_row('array');exit;
		echo "<pre>";print_r($query);exit;

}

   public function test_time_slot($categories_id){

     $where = array(
			'name' => 'Nayatel’s Value Statements'
		);

		$this->db->select('test_time_slot');
		$this->db->from('categories');
		$this->db->where($where);
		$query = $this->db->get();

		return $query->first_row('array');exit;
		echo "<pre>";print_r($query);exit;

    $categories_id=$categories_id;

        $query = $this->db->query("SELECT test_time_slot FROM categories WHERE category_id=?", array($categories_id));
        return $query->first_row('array');

}

//  public function personal_test_time_slot($categories_id){

//      $where = array(
// 			'categories_id' => $categories_id,
// 		);

// 		$this->db->select('test_time_slot');
// 		$this->db->from('categories');
// 		$this->db->where($where);
// 		$query = $this->db->get();

// 		return $query->first_row('array');exit;
// 		echo "<pre>";print_r($query);exit;

//  }

public function personal_test_time_slot($categories_id){

     $where = array(
			'categories_id' => $categories_id,
		);

		$this->db->select('test_time_slot');
		$this->db->from('categories');
		$this->db->where($where);
		$query = $this->db->get();

		return $query->first_row('array');exit;
		echo "<pre>";print_r($query);exit;

 }

 public function work_test_time_slot($categories_id){

     $where = array(
			'categories_id' => $categories_id,
		);

		$this->db->select('test_time_slot');
		$this->db->from('categories');
		$this->db->where($where);
		$query = $this->db->get();

		return $query->first_row('array');exit;
		echo "<pre>";print_r($query);exit;

 }


    public function category_check($id) {
        $sql = 'SELECT * FROM tbl_category WHERE category_id=?';
        $query = $this->db->query($sql,array($id));
        return $query->num_rows();
    }
public function get_all_personality_assessment_questions($categories_id){

    $sql = "SELECT * FROM  questions_assessment  WHERE categories_id='$categories_id' ORDER BY questions_assessment_id ASC ";
    $query = $this->db->query($sql);
    return $query->result_array();
}

public function update_employee_profile($form_data,$email)
	{

        $update = $this->db->update('sign_up',$form_data,$email);
        return $update;
	}

public function get_employee_record($email){

     $sql = "SELECT * FROM  sign_up  WHERE email='$email' ";
    $query = $this->db->query($sql);
    return $query->result_array();

}

public function get_all_nayatel_value_statements($categories_id){

    $sql = "SELECT * FROM  questions  WHERE categories_id='$categories_id' ORDER BY RAND() ";
    $query = $this->db->query($sql);
    return $query->result_array();
}





public function get_all_personal_values_assessment($categories_id){
    $sql = "SELECT * FROM  questions  WHERE categories_id='$categories_id' ORDER BY questions_id ASC ";
    $query = $this->db->query($sql);
    return $query->result_array();

}

public function get_all_cultural_scan_data($categories_id){

    $sql = "SELECT * FROM  questions  WHERE categories_id='$categories_id' ORDER BY questions_id ASC ";
    $query = $this->db->query($sql);
    return $query->result_array();

}

public function get_all_Work_personality_index($categories_id){

    $sql = "SELECT * FROM  questions_assessment  WHERE categories_id='$categories_id' ORDER BY RAND() ";
    $query = $this->db->query($sql);
    return $query->result_array();
     //echo "<pre>";print_r($query);exit;
}
public function count_active_records($id){

    $this->db->where('categories_id',$id);
    return  $result = $this->db->get('questions')->num_rows();
    //$this->db->from('questions_assessment');
 return    $result = $this->db->where('categories_id',$id)->count_all("questions_assessment");
//echo "<pre>";print_r($result);exit;
//$query = $this->db->get();
return $rowcount = $result->num_rows();
}

public function get_relative_score($id,$data){
   $score=$id;
   $categories_id=$data;
   //echo "<pre>";print_r($score);exit;

//    $query = $this->db->query("SELECT * FROM description WHERE score>='40' AND score<='50' AND categories_id='$categories_id'");
//    return $query->first_row('array');

   $score=$id;
   $sql = "SELECT * FROM description WHERE score>='40' AND score<='50' AND categories_id='$categories_id' ";
  // echo "<pre>";print_r($sql);exit;

   $query = $this->db->query($sql);
   return $query->result_array();


//     $sql = "SELECT * FROM  description  WHERE score>='40' AND score<='50' AND categories_id='$categories_id' ";
//     $query = $this->db->query($sql);
//     //echo "<pre>";print_r($sql);exit;
//    return $query = $query->result_array();
//     echo "<pre>";print_r($query);exit;

}

public function get_last_record(){

    $this->db->select("score");
    $this->db->from("questions_score");
    $this->db->limit(1);
    $this->db->order_by('questions_score_id',"DESC");
    $query = $this->db->get();


   return $result = $query->result_array();
   //echo "<pre>";print_r($result);exit;

//    $query = $this->db->query($sql);
//    return $query->result_array();
//     echo "<pre>";print_r($result);exit;
}


public function get_last_inserted_record($id){


    $query = $this->db->query("SELECT * FROM questions_score WHERE questions_score_id=?", array($id));
    return $query->first_row('array');

//     $this->db->insert('questions_score', $data);

// $id = $this->db->insert_id();
// $sql = $this->db->get_where('questions_score', array('questions_score_id' => $id));
// //return $q->row();
//     $query = $this->db->query($sql);
//      return $query->result_array();


     $sql = "SELECT * FROM  questions_score  WHERE questions_score_id='$id' ORDER BY questions_score_id ASC ";
    $query = $this->db->query($sql);
    return $query->result_array();


}

public function add_incomplete_scenario($data){

     $insert = $this->db->insert('incomplete_scenario',$data);
    return $this->db->insert_id();

}

public function add_department($data){

     $insert = $this->db->insert('department',$data);
    return $this->db->insert_id();

}


public function check_department_name($department){

    $where = array(
			'name' => $department
		);

		$this->db->select('name');
		$this->db->from('department');
		$this->db->where($where);
		$query = $this->db->get();

		return $query->first_row('array');exit;
		echo "<pre>";print_r($query);exit;
}

public function check_record_nayatel($email){

    $where = array(
			'email' => $email
		);
		$this->db->select('email');
		$this->db->from('nayatel_value_score');
		$this->db->where($where);
		$query = $this->db->get();
		return $query->first_row('array');
}

public function check_record_personality_assessment_questions($email){

     $where = array(
			'email' => $email
		);
		$this->db->select('email');
		$this->db->from('personality_assessment_score');
		$this->db->where($where);
		$query = $this->db->get();
		return $query->first_row('array');
}

public function check_record_personal_values_assessment($email){

    $where = array(
			'email' => $email
		);
		$this->db->select('email');
		$this->db->from('personal_values_score');
		$this->db->where($where);
		$query = $this->db->get();
		return $query->first_row('array');
}

public function work_resume_test($email){
    // completed
    $where = array(
			'email' => $email
		);
		$this->db->select('email');
		$this->db->from('work_score');
		$this->db->where($where);
		$query = $this->db->get();
		$query= $query->first_row('array');
    //echo "<pre>";print_r($query);exit;
     if(!empty($query)){

         return 'completed';
     }
    else if(empty($query)){

        $where = array(
            'email' => $email
        );
        $this->db->select('email');
        $this->db->from('work_personality_save_for_later');
        $this->db->where($where);
        $query = $this->db->get();
        $query= $query->first_row('array');
       //echo "<pre>";print_r($where);exit;
		 //echo "<pre>";print_r($query);exit;
		 if(empty($query)){
		     return 'pending';

		 }
		 else{

		     return 'resume';
		 }

    }
}



public function count_nayatel_questions($email){

    $this->db->where('email',$email);
    $this->db->where('value','-2');
    return $result = $this->db->get('nayatel_save_for_later')->num_rows();exit;
     echo "<pre>";print_r($query);exit;
    $where = array(
			'email' => $email,
			'test_name' => 'Work Personality Index',
			'value' => '-2',
		);
		$this->db->where($where);
    //$this->db->where('email',$email);
    $query=  $result = $this->db->get('work_personality_save_for_later')->num_rows();
    echo "<pre>";print_r($query);exit;
    //$this->db->from('questions_assessment');
 return    $result = $this->db->where('categories_id',$id)->count_all("questions_assessment");
//echo "<pre>";print_r($query);exit;
//$query = $this->db->get();
return $rowcount = $result->num_rows();

}

public function count_work_questions($email){

    $this->db->where('email',$email);
    $this->db->where('value','-2');
    return $result = $this->db->get('work_personality_save_for_later')->num_rows();exit;
     echo "<pre>";print_r($query);exit;
    $where = array(
			'email' => $email,
			'test_name' => 'Work Personality Index',
			'value' => '-2',
		);
		$this->db->where($where);
    //$this->db->where('email',$email);
    $query=  $result = $this->db->get('work_personality_save_for_later')->num_rows();
    echo "<pre>";print_r($query);exit;
    //$this->db->from('questions_assessment');
 return    $result = $this->db->where('categories_id',$id)->count_all("questions_assessment");
//echo "<pre>";print_r($query);exit;
//$query = $this->db->get();
return $rowcount = $result->num_rows();

}

public function check_nayatel_incomplete_scenario($email){
    $where = array(
			'email' => $email,
			'test_name' => 'Nayatels Value Statements',
		);
		$this->db->select('email');
		$this->db->from('incomplete_scenario');
		$this->db->where($where);
		$query = $this->db->get();
		$query= $query->first_row('array');
    //echo "<pre>";print_r($query);exit;
     if(!empty($query)){

         return 'incomplete';
     }

}

public function check_incomplete_scenario($email){
    // incomplete
    $where = array(
			'email' => $email,
			'test_name' => 'Work Personality Index',
		);
		$this->db->select('email');
		$this->db->from('incomplete_scenario');
		$this->db->where($where);
		$query = $this->db->get();
		$query= $query->first_row('array');
    //echo "<pre>";print_r($query);exit;
     if(!empty($query)){

         return 'incomplete';
     }
    }


public function nayatel_resume_test($email){

    $where = array(
			'email' => $email
		);
		$this->db->select('email');
		$this->db->from('nayatel_value_score');
		$this->db->where($where);
		$query = $this->db->get();
		$query= $query->first_row('array');
    //echo "<pre>";print_r($query);exit;
     if(!empty($query)){

         return 'completed';
     }
    else if(empty($query)){

        $where = array(
            'email' => $email
        );
        $this->db->select('email');
        $this->db->from('nayatel_save_for_later');
        $this->db->where($where);
        $query = $this->db->get();
        $query= $query->first_row('array');
       //echo "<pre>";print_r($where);exit;
		 //echo "<pre>";print_r($query);exit;
		 if(empty($query)){
		     return 'pending';

		 }
		 else{

		     return 'resume';
		 }

    }
}


public function work_resume_test2($email){
     $where = array(
			'email' => $email,
			'test_name' => 'Work Personality Index',
		);
		$this->db->select('test_time_slot');
		$this->db->from('remaining_test_time_slot');
		$this->db->where($where);
		$query = $this->db->get();
		$query_record= $query->first_row('array');
		$query_record=$query_record['test_time_slot'];
    //echo "<pre>";print_r($query_record);exit;
    if($query_record != 0){
        $where = array(
			'email' => $email
		);
		$this->db->select('email');
		$this->db->from('work_score');
		$this->db->where($where);
		$query = $this->db->get();
		return $query->first_row('array');

    }
     else{

         return $query_record;
     }
}

public function check_record_work_personality_index($email){

    $where = array(
			'email' => $email
		);
		$this->db->select('email');
		$this->db->from('work_score');
		$this->db->where($where);
		$query = $this->db->get();
		return $query->first_row('array');
}

function get_categories()
    {
    //    // $categories_id=$id;
    //     $this->db->select("name");
    //     $this->db->from("categories");
    //     //$this->db->limit(1);
    //     $this->db->order_by('categories_id',"ASC");
    //     $query = $this->db->get();


    //     return $query->result_array();
    //      echo "<pre>";print_r($score);exit;
    //   return $score=$score->score;


        $query = $this->db->query('SELECT name FROM categories')->result_array();
        return   $data = array_column($query, 'name');
	// echo "<pre>";print_r($data);exit;

        $sql = "SELECT * FROM categories ";
        $query = $this->db->query($sql);
        return $query->result_array();

        $query = $this->db->query("SELECT * FROM categories");
        return $query->first_row('array');
        // $sql = 'SELECT * FROM categories ';
        // return $sql->first_row('array');

    }
public function add_personality_assessment_questions_data($checkbox,$email){
    $checkbox = $this->input->post('checkbox[]');
//   4
 $my_values1 = array();
        $my_values2 = array();
         $my_values3 = array();
          $my_values4 = array();
           $my_values5 = array();
            $my_values6 = array();

    // 1
    foreach($checkbox as $key => $value)
{

    for($i=$key;$i<=17;$i++){
    $my_values1[$key] = $value;
    }

}

   $personality_assessment_score1= $my_values1;

    $total1 = array_sum($personality_assessment_score1);
   //  echo "<pre>";print_r($total1);echo "<br>";
//   $total=$total/50;
//   $total=$total*100;
//   $total1=(int) $total;
//   2
 foreach($checkbox as $key => $value)
{

    for($i=$key;$i<=35;$i++){
    $my_values2[$key] = $value;
    }

}

   $personality_assessment_score2= $my_values2;

    $total2 = array_sum($personality_assessment_score2);
    // echo "<pre>";print_r($total2);echo "<br>";
//   3
foreach($checkbox as $key => $value)
{

    for($i=$key;$i<=53;$i++){
    $my_values3[$key] = $value;
    }

}

   $personality_assessment_score3= $my_values3;

    $total3 = array_sum($personality_assessment_score3);
    // echo "<pre>";print_r($total3);echo "<br>";
//   4
foreach($checkbox as $key => $value)
{
    $val4='71';
    for($i=$key;$i<=$val4;$i++){
    $my_values4[$key] = $value;
    }

}

   $personality_assessment_score4= $my_values4;

    $total4 = array_sum($personality_assessment_score4);
// echo "<pre>";print_r($total4);echo "<br>";
// 5
foreach($checkbox as $key => $value)
{

    for($i=$key;$i<=89;$i++){
    $my_values5[$key] = $value;
    }

}
//echo "<pre>";print_r($my_values5);exit;
   $personality_assessment_score5= $my_values5;

    $total5 = array_sum($personality_assessment_score5);
    //echo "<pre>";print_r($total5);echo "<br>";
//   6
foreach($checkbox as $key => $value)
{

    for($i=$key;$i<=107;$i++){
    $my_values6[$key] = $value;
    }

}
 //echo "<pre>";print_r($my_values6);exit;
   $personality_assessment_score6= $my_values6;

    $total6 = array_sum($personality_assessment_score6);
    //echo "<pre>";print_r($total6);
// //   7
// foreach($checkbox as $key => $value)
// {

//     for($i=$key;$i<=69;$i++){
//     $my_values7[$key] = $value;
//     }

// }
//   $personality_assessment_score7= $my_values7;

//     $total7 = array_sum($personality_assessment_score7);
$value1=$total1;
$value2=$total2-$total1;
$value3=$total3-$total2;
$value4=$total4-$total3;
$value5=$total5-$total4;
$value6=$total6-$total5;
//$value7=$total7-$total6;
// echo $total5;echo "<br>";
// echo $total6;exit;

$value1=$value1/90;
$value2=$value2/90;
$value3=$value3/90;
$value4=$value4/90;
$value5=$value5/90;
$value6=$value6/90;
// 1
$value1=$value1*100;
$value1=(int) $value1;
// if($value1=='0' || $value1<='30'){
//   $personality_assessment_score1="Low";

// }
// else if($value1=='31' || $value1<='60'){
//   $personality_assessment_score1="Medium";

// }
// else{
//     $personality_assessment_score1="High";

// }
// 2
$value2=$value2*100;
$value2=(int) $value2;
// if($value2=='0' || $value2<='30'){
//   $personality_assessment_score2="Low";

// }
// else if($value2=='31' || $value2<='60'){
//   $personality_assessment_score2="Medium";

// }
// else{
//     $personality_assessment_score2="High";

// }
// 3
$value3=$value3*100;
$value3=(int) $value3;
// if($value3=='0' || $value3<='30'){
//   $personality_assessment_score3="Low";

// }
// else if($value3=='31' || $value3<='60'){
//   $personality_assessment_score3="Medium";

// }
// else{
//     $personality_assessment_score3="High";

// }
// 4
$value4=$value4*100;
$value4=(int) $value4;
// if($value4=='0' || $value4<='30'){
//   $personality_assessment_score4="Low";

// }
// else if($value4=='31' || $value4<='60'){
//   $personality_assessment_score4="Medium";

// }
// else{
//     $personality_assessment_score4="High";

// }
// 5

$value5=$value5*100;
//echo $value5;echo "<br>";


$value5=(int) $value5;
// if($value5=='0' || $value5<='30'){
//   $personality_assessment_score5="Low";

// }
// else if($value5=='31' || $value5<='60'){
//   $personality_assessment_score5="Medium";

// }
// else{
//     $personality_assessment_score5="High";

// }
// 6
$value6=$value6*100;
//echo $value6;exit;
$value6= (int) $value6;
// if($value6=='0' || $value6<='30'){
//   $personality_assessment_score6="Low";

// }
// else if($value6=='31' || $value6<='60'){
//   $personality_assessment_score6="Medium";

// }
// else{
//     $personality_assessment_score6="High";

// }
// // 7

// $value7=$value7*100;
// if($value7=='0' || $value7<='16'){
//   $nayatel_value_score7="Low";

// }
// else if($value7=='17' || $value7<='32'){
//   $nayatel_value_score7="Medium";

// }
// else{
//     $nayatel_value_score7="High";

// }
// insert
$date_created = date("Y-m-d H:i:s");
        $data = array(
            'personality_assessment_score1' => $value1,
            'personality_assessment_score2' => $value2,
            'personality_assessment_score3' => $value3,
            'personality_assessment_score4' => $value4,
            'personality_assessment_score5' => $value5,
            'personality_assessment_score6' => $value6,

            'email'    => $email,
             'status'    => 'enable',
             'date_created'    => $date_created,

            );

            $sumArray = array();

    //echo "<pre>";print_r($data);exit;
        $this->db->insert('personality_assessment_score',$data);
       return $id= $this->db->insert_id();exit;



    $total = array_sum($checkbox);
   // 108 questions
   $total=$total/540;
   $total=$total*100;
   $total= (int) $total;
   // echo "<pre>";print_r($total);exit;

    $personality_assessment_score = array(
        'personality_assessment_score' => $total,


        );
        $email = array(
            'email' => $email,


            );

            $update = $this->db->update('questions_score_value',$personality_assessment_score,$email);
            //echo "<pre>";print_r($update);exit;
            return $update;

//echo "<pre>";print_r($data);exit;
    $this->db->insert('questions_score',$data);
   return $id= $this->db->insert_id();exit;

}

public function work_save_for_later(){

    if(($this->uri->segment(3)!=0)){
	$data['dashboard_data']=$this->uri->segment(3);

}
else{
	$data['dashboard_data']=$this->session->userdata();
}

//$organization=$data['dashboard_data'];
//$organization=$organization['organization'];


$email=$data['dashboard_data'];
$department=$data['dashboard_data'];
        $department=$department['department'];
        $email=$email['email'];
        $checkbox = $this->input->post('checkbox[]');
    	$dimensions_name = $this->input->post('dimensions_name[]');

    //	$questions_id=  array();
    	$questions_id = $this->input->post('questions_id[]');
    		$length = $this->input->post('length');
    	//	echo "<pre>";print_r($checkbox);exit;

    	// length
        $organization='Nayatel';
    	$name = $this->input->post('name[]');
    	$date_created = date("Y-m-d H:i:s");
    //	echo "<pre>";print_r($_POST['checkbox'][9]));exit;


       //echo "<pre>";print_r($_POST['checkbox'][0]);exit;
   if(!empty($_POST['checkbox'][0]) || empty($_POST['checkbox'][0])){
    if(($_POST['checkbox'][0] == 0 || $_POST['checkbox'][0] ==1 || $_POST['checkbox'][0] ==2 || $_POST['checkbox'][0] ==3 || $_POST['checkbox'][0] ==5  )){
    if(($checkbox[0])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[0],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
            'name' => $name[0],
            'email' => $email,

            );
            //   echo "<pre>";print_r($_POST['checkbox'][0]);
            //   echo "<pre>";print_r($name[0]);
            //  exit;
            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
             // echo "<pre>";print_r($update);exit;
         }}
   }
    if(!empty($_POST['checkbox'][1]) || empty($_POST['checkbox'][1])){
          if(($_POST['checkbox'][1] ==0 || $_POST['checkbox'][1] ==1 || $_POST['checkbox'][1] ==2 || $_POST['checkbox'][1] ==3 || $_POST['checkbox'][1] ==5 )){
    if(($checkbox[1])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[1],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[1],
            'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }
    if(!empty($_POST['checkbox'][2]) || empty($_POST['checkbox'][2])){

          if(($_POST['checkbox'][2] ==0 || $_POST['checkbox'][2] ==1 || $_POST['checkbox'][2] ==2 || $_POST['checkbox'][2] ==3 || $_POST['checkbox'][2] ==5 )){
    if(($checkbox[2])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[2],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[2],
            'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}

    }
    if(!empty($_POST['checkbox'][3]) || empty($_POST['checkbox'][3])){

          if(($_POST['checkbox'][3] ==0 || $_POST['checkbox'][3] ==1 || $_POST['checkbox'][3] ==2 || $_POST['checkbox'][3] ==3 || $_POST['checkbox'][3] ==5 )){
    if(($checkbox[3])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[3],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[3],
            'email' => $email,
            );
            // echo "<pre>";print_r($data);exit;
            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}

    }
    if(!empty($_POST['checkbox'][4]) || empty($_POST['checkbox'][4])){

          if(($_POST['checkbox'][4] ==0 || $_POST['checkbox'][4] ==1 || $_POST['checkbox'][4] ==2 || $_POST['checkbox'][4] ==3 || $_POST['checkbox'][4] ==5 )){
    if(($checkbox[4])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[4],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
            'name' => $name[4],
             'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }
    if(!empty($_POST['checkbox'][5]) || empty($_POST['checkbox'][5])){

          if(($_POST['checkbox'][5] ==0 || $_POST['checkbox'][5] ==1 || $_POST['checkbox'][5] ==2 || $_POST['checkbox'][5] ==3 || $_POST['checkbox'][5] ==5 )){
    if(($checkbox[5])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[5],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
            'name' => $name[5],
             'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}

    }
    if(!empty($_POST['checkbox'][6]) || empty($_POST['checkbox'][6])){

          if(($_POST['checkbox'][6] ==0 || $_POST['checkbox'][6] ==1 || $_POST['checkbox'][6] ==2 || $_POST['checkbox'][6] ==3 || $_POST['checkbox'][6] ==5 )){
    if(($checkbox[6])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[6],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
            'name' => $name[6],
             'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}

    }
    if(!empty($_POST['checkbox'][7]) || empty($_POST['checkbox'][7])){

          if(($_POST['checkbox'][7] ==0 || $_POST['checkbox'][7] ==1 || $_POST['checkbox'][7] ==2 || $_POST['checkbox'][7] ==3 || $_POST['checkbox'][7] ==5 )){
    if(($checkbox[7])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[7],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[7],
            'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}

    }
    if(!empty($_POST['checkbox'][8]) || empty($_POST['checkbox'][8])){

          if(($_POST['checkbox'][8] ==0 || $_POST['checkbox'][8] ==1 || $_POST['checkbox'][8] ==2 || $_POST['checkbox'][8] ==3 || $_POST['checkbox'][8] ==5 )){
    if(($checkbox[8])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[8],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
            'name' => $name[8],
             'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}

    }
    if(!empty($_POST['checkbox'][9]) || empty($_POST['checkbox'][9])){

         if(($_POST['checkbox'][9] ==0 || $_POST['checkbox'][9] ==1 || $_POST['checkbox'][9] ==2 || $_POST['checkbox'][9] ==3 || $_POST['checkbox'][9] ==5 )){
    if(($checkbox[9])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[9],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[9],
            'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
            //  10
    }
    if(!empty($_POST['checkbox'][10]) || empty($_POST['checkbox'][10])){
             if(($_POST['checkbox'][10] ==0 || $_POST['checkbox'][10] ==1 || $_POST['checkbox'][10] ==2 || $_POST['checkbox'][10] ==3 || $_POST['checkbox'][10] ==5 )){
    if(($checkbox[10])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[10],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
            'name' => $name[10],
             'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }

     if(!empty($_POST['checkbox'][11]) || empty($_POST['checkbox'][11])){
             if(($_POST['checkbox'][11] ==0 || $_POST['checkbox'][11] ==1 || $_POST['checkbox'][11] ==2 || $_POST['checkbox'][11] ==3 || $_POST['checkbox'][11] ==5 )){
    if(($checkbox[11])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[11],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
            'name' => $name[11],
             'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }
    // 12

     if(!empty($_POST['checkbox'][12]) || empty($_POST['checkbox'][12])){
             if(($_POST['checkbox'][12] ==0 || $_POST['checkbox'][12] ==1 || $_POST['checkbox'][12] ==2 || $_POST['checkbox'][12] ==3 || $_POST['checkbox'][12] ==5 )){
    if(($checkbox[12])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[12],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[12],
            'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }

     if(!empty($_POST['checkbox'][13]) || empty($_POST['checkbox'][13])){
             if(($_POST['checkbox'][13] ==0 || $_POST['checkbox'][13] ==1 || $_POST['checkbox'][13] ==2 || $_POST['checkbox'][13] ==3 || $_POST['checkbox'][13] ==5 )){
    if(($checkbox[13])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[13],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
            'name' => $name[13],
             'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }

     if(!empty($_POST['checkbox'][14]) || empty($_POST['checkbox'][14])){
             if(($_POST['checkbox'][14] ==0 || $_POST['checkbox'][14] ==1 || $_POST['checkbox'][14] ==2 || $_POST['checkbox'][14] ==3 || $_POST['checkbox'][14] ==5 )){
    if(($checkbox[14])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[14],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
            'name' => $name[14],
             'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }


     if(!empty($_POST['checkbox'][15]) || empty($_POST['checkbox'][15])){
             if(($_POST['checkbox'][15] ==0 || $_POST['checkbox'][15] ==1 || $_POST['checkbox'][15] ==2 || $_POST['checkbox'][15] ==3 || $_POST['checkbox'][15] ==5 )){
    if(($checkbox[15])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[15],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
            'name' => $name[15],
             'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }


     if(!empty($_POST['checkbox'][16]) || empty($_POST['checkbox'][16])){
             if(($_POST['checkbox'][16] ==0 || $_POST['checkbox'][16] ==1 || $_POST['checkbox'][16] ==2 || $_POST['checkbox'][16] ==3 || $_POST['checkbox'][16] ==5 )){
    if(($checkbox[16])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[16],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[16],
            'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }


     if(!empty($_POST['checkbox'][17]) || empty($_POST['checkbox'][17])){
             if(($_POST['checkbox'][17] ==0 || $_POST['checkbox'][17] ==1 || $_POST['checkbox'][17] ==2 || $_POST['checkbox'][17] ==3 || $_POST['checkbox'][17] ==5 )){
    if(($checkbox[17])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[17],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
            'name' => $name[17],
             'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }

     if(!empty($_POST['checkbox'][18]) || empty($_POST['checkbox'][18])){
             if(($_POST['checkbox'][18] ==0 || $_POST['checkbox'][18] ==1 || $_POST['checkbox'][18] ==2 || $_POST['checkbox'][18] ==3 || $_POST['checkbox'][18] ==5 )){
    if(($checkbox[18])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[18],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[18],
            'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }

     if(!empty($_POST['checkbox'][19]) || empty($_POST['checkbox'][19])){
             if(($_POST['checkbox'][19] ==0 || $_POST['checkbox'][19] ==1 || $_POST['checkbox'][19] ==2 || $_POST['checkbox'][19] ==3 || $_POST['checkbox'][19] ==5 )){
    if(($checkbox[19])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[19],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[19],
            'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }



     if(!empty($_POST['checkbox'][20]) || empty($_POST['checkbox'][20])){
             if(($_POST['checkbox'][20] ==0 || $_POST['checkbox'][20] ==1 || $_POST['checkbox'][20] ==2 || $_POST['checkbox'][20] ==3 || $_POST['checkbox'][20] ==5 )){
    if(($checkbox[20])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[20],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
            'name' => $name[20],
             'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }

     if(!empty($_POST['checkbox'][21]) || empty($_POST['checkbox'][21])){
             if(($_POST['checkbox'][21] ==0 || $_POST['checkbox'][21] ==1 || $_POST['checkbox'][21] ==2 || $_POST['checkbox'][21] ==3 || $_POST['checkbox'][21] ==5 )){
    if(($checkbox[21])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[21],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[21],
            'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }

     if(!empty($_POST['checkbox'][22]) || empty($_POST['checkbox'][22])){
             if(($_POST['checkbox'][22] ==0 || $_POST['checkbox'][22] ==1 || $_POST['checkbox'][22] ==2 || $_POST['checkbox'][22] ==3 || $_POST['checkbox'][22] ==5 )){
    if(($checkbox[22])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[22],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[22],
            'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }

     if(!empty($_POST['checkbox'][23]) || empty($_POST['checkbox'][23])){
             if(($_POST['checkbox'][23] ==0 || $_POST['checkbox'][23] ==1 || $_POST['checkbox'][23] ==2 || $_POST['checkbox'][23] ==3 || $_POST['checkbox'][23] ==5 )){
    if(($checkbox[23])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[23],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
            'name' => $name[23],
             'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }

     if(!empty($_POST['checkbox'][24]) || empty($_POST['checkbox'][24])){
             if(($_POST['checkbox'][24] ==0 || $_POST['checkbox'][24] ==1 || $_POST['checkbox'][24] ==2 || $_POST['checkbox'][24] ==3 || $_POST['checkbox'][24] ==5 )){
    if(($checkbox[24])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[24],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[24],
            'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }

     if(!empty($_POST['checkbox'][25]) || empty($_POST['checkbox'][25])){
             if(($_POST['checkbox'][25] ==0 || $_POST['checkbox'][25] ==1 || $_POST['checkbox'][25] ==2 || $_POST['checkbox'][25] ==3 || $_POST['checkbox'][25] ==5 )){
    if(($checkbox[25])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[25],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
            'name' => $name[25],
             'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }


     if(!empty($_POST['checkbox'][26]) || empty($_POST['checkbox'][26])){
             if(($_POST['checkbox'][26] ==0 || $_POST['checkbox'][26] ==1 || $_POST['checkbox'][26] ==2 || $_POST['checkbox'][26] ==3 || $_POST['checkbox'][26] ==5 )){
    if(($checkbox[26])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[26],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[26],
            'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }


     if(!empty($_POST['checkbox'][27]) || empty($_POST['checkbox'][27])){
             if(($_POST['checkbox'][27] ==0 || $_POST['checkbox'][27] ==1 || $_POST['checkbox'][27] ==2 || $_POST['checkbox'][27] ==3 || $_POST['checkbox'][27] ==5 )){
    if(($checkbox[27])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[27],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[27],
            'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }


     if(!empty($_POST['checkbox'][28]) || empty($_POST['checkbox'][28])){
             if(($_POST['checkbox'][28] ==0 || $_POST['checkbox'][28] ==1 || $_POST['checkbox'][28] ==2 || $_POST['checkbox'][28] ==3 || $_POST['checkbox'][28] ==5 )){
    if(($checkbox[28])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[28],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
            'name' => $name[28],
             'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }

     if(!empty($_POST['checkbox'][29]) || empty($_POST['checkbox'][29])){
             if(($_POST['checkbox'][29] ==0 || $_POST['checkbox'][29] ==1 || $_POST['checkbox'][29] ==2 || $_POST['checkbox'][29] ==3 || $_POST['checkbox'][29] ==5 )){
    if(($checkbox[29])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[29],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
            'name' => $name[29],
             'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }

     if(!empty($_POST['checkbox'][30]) || empty($_POST['checkbox'][30])){
             if(($_POST['checkbox'][30] ==0 || $_POST['checkbox'][30] ==1 || $_POST['checkbox'][30] ==2 || $_POST['checkbox'][30] ==3 || $_POST['checkbox'][30] ==5 )){
    if(($checkbox[30])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[30],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[30],
            'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }


     if(!empty($_POST['checkbox'][31]) || empty($_POST['checkbox'][31])){
             if(($_POST['checkbox'][31] ==0 || $_POST['checkbox'][31] ==1 || $_POST['checkbox'][31] ==2 || $_POST['checkbox'][31] ==3 || $_POST['checkbox'][31] ==5 )){
    if(($checkbox[31])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[31],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
            'name' => $name[31],
             'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }


     if(!empty($_POST['checkbox'][32]) || empty($_POST['checkbox'][32])){
             if(($_POST['checkbox'][32] ==0 || $_POST['checkbox'][32] ==1 || $_POST['checkbox'][32] ==2 || $_POST['checkbox'][32] ==3 || $_POST['checkbox'][32] ==5 )){
    if(($checkbox[32])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[32],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[32],
            'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }


     if(!empty($_POST['checkbox'][33]) || empty($_POST['checkbox'][33])){
             if(($_POST['checkbox'][33] ==0 || $_POST['checkbox'][33] ==1 || $_POST['checkbox'][33] ==2 || $_POST['checkbox'][33] ==3 || $_POST['checkbox'][33] ==5 )){
    if(($checkbox[33])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[33],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[33],
            'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }

     if(!empty($_POST['checkbox'][34]) || empty($_POST['checkbox'][34])){
             if(($_POST['checkbox'][34] ==0 || $_POST['checkbox'][34] ==1 || $_POST['checkbox'][34] ==2 || $_POST['checkbox'][34] ==3 || $_POST['checkbox'][34] ==5 )){
    if(($checkbox[34])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[34],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
            'name' => $name[34],
             'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }

    // 35
     if(!empty($_POST['checkbox'][35]) || empty($_POST['checkbox'][35])){
             if(($_POST['checkbox'][35] ==0 || $_POST['checkbox'][35] ==1 || $_POST['checkbox'][35] ==2 || $_POST['checkbox'][35] ==3 || $_POST['checkbox'][35] ==5 )){
    if(($checkbox[35])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[35],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[35],
            'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }


     if(!empty($_POST['checkbox'][36]) || empty($_POST['checkbox'][36])){
             if(($_POST['checkbox'][36] ==0 || $_POST['checkbox'][36] ==1 || $_POST['checkbox'][36] ==2 || $_POST['checkbox'][36] ==3 || $_POST['checkbox'][36] ==5 )){
    if(($checkbox[36])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[36],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[36],
            'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }


     if(!empty($_POST['checkbox'][37]) || empty($_POST['checkbox'][37])){
             if(($_POST['checkbox'][37] ==0 || $_POST['checkbox'][37] ==1 || $_POST['checkbox'][37] ==2 || $_POST['checkbox'][37] ==3 || $_POST['checkbox'][37] ==5 )){
    if(($checkbox[37])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[37],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[37],
            'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }


     if(!empty($_POST['checkbox'][38]) || empty($_POST['checkbox'][38])){
             if(($_POST['checkbox'][38] ==0 || $_POST['checkbox'][38] ==1 || $_POST['checkbox'][38] ==2 || $_POST['checkbox'][38] ==3 || $_POST['checkbox'][38] ==5 )){
    if(($checkbox[38])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[38],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[38],
            'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }


     if(!empty($_POST['checkbox'][39]) || empty($_POST['checkbox'][39])){
             if(($_POST['checkbox'][39] ==0 || $_POST['checkbox'][39] ==1 || $_POST['checkbox'][39] ==2 || $_POST['checkbox'][39] ==3 || $_POST['checkbox'][39] ==5 )){
    if(($checkbox[39])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[39],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[39],
            'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }


     if(!empty($_POST['checkbox'][40]) || empty($_POST['checkbox'][40])){
             if(($_POST['checkbox'][40] ==0 || $_POST['checkbox'][40] ==1 || $_POST['checkbox'][40] ==2 || $_POST['checkbox'][40] ==3 || $_POST['checkbox'][40] ==5 )){
    if(($checkbox[40])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[40],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[40],
            'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }


     if(!empty($_POST['checkbox'][41]) || empty($_POST['checkbox'][41])){
             if(($_POST['checkbox'][41] ==0 || $_POST['checkbox'][41] ==1 || $_POST['checkbox'][41] ==2 || $_POST['checkbox'][41] ==3 || $_POST['checkbox'][41] ==5 )){
    if(($checkbox[41])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[41],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[41],
            'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }


     if(!empty($_POST['checkbox'][42]) || empty($_POST['checkbox'][42])){
             if(($_POST['checkbox'][42] ==0 || $_POST['checkbox'][42] ==1 || $_POST['checkbox'][42] ==2 || $_POST['checkbox'][42] ==3 || $_POST['checkbox'][42] ==5 )){
    if(($checkbox[42])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[42],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[42],
            'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }


     if(!empty($_POST['checkbox'][43]) || empty($_POST['checkbox'][43])){
             if(($_POST['checkbox'][43] ==0 || $_POST['checkbox'][43] ==1 || $_POST['checkbox'][43] ==2 || $_POST['checkbox'][43] ==3 || $_POST['checkbox'][43] ==5 )){
    if(($checkbox[43])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[43],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
            'name' => $name[43],
             'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }


     if(!empty($_POST['checkbox'][44]) || empty($_POST['checkbox'][44])){
             if(($_POST['checkbox'][44] ==0 || $_POST['checkbox'][44] ==1 || $_POST['checkbox'][44] ==2 || $_POST['checkbox'][44] ==3 || $_POST['checkbox'][44] ==5 )){
    if(($checkbox[44])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[44],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
            'name' => $name[44],
             'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }


     if(!empty($_POST['checkbox'][45]) || empty($_POST['checkbox'][45])){
             if(($_POST['checkbox'][45] ==0 || $_POST['checkbox'][45] ==1 || $_POST['checkbox'][45] ==2 || $_POST['checkbox'][45] ==3 || $_POST['checkbox'][45] ==5 )){
    if(($checkbox[45])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[45],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[45],
            'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }

     if(!empty($_POST['checkbox'][46]) || empty($_POST['checkbox'][46])){
             if(($_POST['checkbox'][46] ==0 || $_POST['checkbox'][46] ==1 || $_POST['checkbox'][46] ==2 || $_POST['checkbox'][46] ==3 || $_POST['checkbox'][46] ==5 )){
    if(($checkbox[46])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[46],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
            'name' => $name[46],
             'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }


     if(!empty($_POST['checkbox'][47]) || empty($_POST['checkbox'][47])){
             if(($_POST['checkbox'][47] ==0 || $_POST['checkbox'][47] ==1 || $_POST['checkbox'][47] ==2 || $_POST['checkbox'][47] ==3 || $_POST['checkbox'][47] ==5 )){
    if(($checkbox[47])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[47],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
          'name' => $name[47],
           'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }

     if(!empty($_POST['checkbox'][48]) || empty($_POST['checkbox'][48])){
             if(($_POST['checkbox'][48] ==0 || $_POST['checkbox'][48] ==1 || $_POST['checkbox'][48] ==2 || $_POST['checkbox'][48] ==3 || $_POST['checkbox'][48] ==5 )){
    if(($checkbox[48])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[48],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
            'name' => $name[48],
             'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }

     if(!empty($_POST['checkbox'][49]) || empty($_POST['checkbox'][49])){
             if(($_POST['checkbox'][49] ==0 || $_POST['checkbox'][49] ==1 || $_POST['checkbox'][49] ==2 || $_POST['checkbox'][49] ==3 || $_POST['checkbox'][49] ==5 )){
    if(($checkbox[49])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[49],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[49],
            'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }


     if(!empty($_POST['checkbox'][50]) || empty($_POST['checkbox'][50])){
             if(($_POST['checkbox'][50] ==0 || $_POST['checkbox'][50] ==1 || $_POST['checkbox'][50] ==2 || $_POST['checkbox'][50] ==3 || $_POST['checkbox'][50] ==5 )){
    if(($checkbox[50])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[50],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[50],
            'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }

     if(!empty($_POST['checkbox'][51]) || empty($_POST['checkbox'][51])){
             if(($_POST['checkbox'][51] ==0 || $_POST['checkbox'][51] ==1 || $_POST['checkbox'][51] ==2 || $_POST['checkbox'][51] ==3 || $_POST['checkbox'][51] ==5 )){
    if(($checkbox[51])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[51],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
            'name' => $name[51],
             'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }

     if(!empty($_POST['checkbox'][52]) || empty($_POST['checkbox'][52])){
             if(($_POST['checkbox'][52] ==0 || $_POST['checkbox'][52] ==1 || $_POST['checkbox'][52] ==2 || $_POST['checkbox'][52] ==3 || $_POST['checkbox'][52] ==5 )){
    if(($checkbox[52])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[52],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[52],
            'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }


     if(!empty($_POST['checkbox'][53]) || empty($_POST['checkbox'][53])){
             if(($_POST['checkbox'][53] ==0 || $_POST['checkbox'][53] ==1 || $_POST['checkbox'][53] ==2 || $_POST['checkbox'][53] ==3 || $_POST['checkbox'][53] ==5 )){
    if(($checkbox[53])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[53],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
          'name' => $name[53],
           'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }

     if(!empty($_POST['checkbox'][54]) || empty($_POST['checkbox'][54])){
             if(($_POST['checkbox'][54] ==0 || $_POST['checkbox'][54] ==1 || $_POST['checkbox'][54] ==2 || $_POST['checkbox'][54] ==3 || $_POST['checkbox'][54] ==5 )){
    if(($checkbox[54])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[54],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
            'name' => $name[54],
             'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }


     if(!empty($_POST['checkbox'][55]) || empty($_POST['checkbox'][55])){
             if(($_POST['checkbox'][55] ==0 || $_POST['checkbox'][55] ==1 || $_POST['checkbox'][55] ==2 || $_POST['checkbox'][55] ==3 || $_POST['checkbox'][55] ==5 )){
    if(($checkbox[55])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[55],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
            'name' => $name[55],
             'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }


     if(!empty($_POST['checkbox'][56]) || empty($_POST['checkbox'][56])){
             if(($_POST['checkbox'][56] ==0 || $_POST['checkbox'][56] ==1 || $_POST['checkbox'][56] ==2 || $_POST['checkbox'][56] ==3 || $_POST['checkbox'][56] ==5 )){
    if(($checkbox[56])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[56],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[56],
            'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }


     if(!empty($_POST['checkbox'][57]) || empty($_POST['checkbox'][57])){
             if(($_POST['checkbox'][57] ==0 || $_POST['checkbox'][57] ==1 || $_POST['checkbox'][57] ==2 || $_POST['checkbox'][57] ==3 || $_POST['checkbox'][57] ==5 )){
    if(($checkbox[57])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[57],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
            'name' => $name[57],
             'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }

     if(!empty($_POST['checkbox'][58]) || empty($_POST['checkbox'][58])){
             if(($_POST['checkbox'][58] ==0 || $_POST['checkbox'][58] ==1 || $_POST['checkbox'][58] ==2 || $_POST['checkbox'][58] ==3 || $_POST['checkbox'][58] ==5 )){
    if(($checkbox[58])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[58],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[58],
            'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }

     if(!empty($_POST['checkbox'][59]) || empty($_POST['checkbox'][59])){
             if(($_POST['checkbox'][59] ==0 || $_POST['checkbox'][59] ==1 || $_POST['checkbox'][59] ==2 || $_POST['checkbox'][59] ==3 || $_POST['checkbox'][59] ==5 )){
    if(($checkbox[59])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[59],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[59],
            'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }

     if(!empty($_POST['checkbox'][60]) || empty($_POST['checkbox'][60])){
             if(($_POST['checkbox'][60] ==0 || $_POST['checkbox'][60] ==1 || $_POST['checkbox'][60] ==2 || $_POST['checkbox'][60] ==3 || $_POST['checkbox'][60] ==5 )){
    if(($checkbox[60])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[60],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[60],
            'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }


     if(!empty($_POST['checkbox'][61]) || empty($_POST['checkbox'][61])){
             if(($_POST['checkbox'][61] ==0 || $_POST['checkbox'][61] ==1 || $_POST['checkbox'][61] ==2 || $_POST['checkbox'][61] ==3 || $_POST['checkbox'][61] ==5 )){
    if(($checkbox[61])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[61],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
            'name' => $name[61],
             'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }

     if(!empty($_POST['checkbox'][62]) || empty($_POST['checkbox'][62])){
             if(($_POST['checkbox'][62] ==0 || $_POST['checkbox'][62] ==1 || $_POST['checkbox'][62] ==2 || $_POST['checkbox'][62] ==3 || $_POST['checkbox'][62] ==5 )){
    if(($checkbox[62])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[62],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[62],
            'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }


     if(!empty($_POST['checkbox'][63]) || empty($_POST['checkbox'][63])){
             if(($_POST['checkbox'][63] ==0 || $_POST['checkbox'][63] ==1 || $_POST['checkbox'][63] ==2 || $_POST['checkbox'][63] ==3 || $_POST['checkbox'][63] ==5 )){
    if(($checkbox[63])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[63],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[63],
            'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }


     if(!empty($_POST['checkbox'][64]) || empty($_POST['checkbox'][64])){
             if(($_POST['checkbox'][64] ==0 || $_POST['checkbox'][64] ==1 || $_POST['checkbox'][64] ==2 || $_POST['checkbox'][64] ==3 || $_POST['checkbox'][64] ==5 )){
    if(($checkbox[64])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[64],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
          'name' => $name[64],
           'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }


    if(!empty($_POST['checkbox'][65]) || empty($_POST['checkbox'][65])){
             if(($_POST['checkbox'][65] ==0 || $_POST['checkbox'][65] ==1 || $_POST['checkbox'][65] ==2 || $_POST['checkbox'][65] ==3 || $_POST['checkbox'][65] ==5 )){
    if(($checkbox[65])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[65],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
            'name' => $name[65],
             'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }


    if(!empty($_POST['checkbox'][66]) || empty($_POST['checkbox'][66])){
             if(($_POST['checkbox'][66] ==0 || $_POST['checkbox'][66] ==1 || $_POST['checkbox'][66] ==2 || $_POST['checkbox'][66] ==3 || $_POST['checkbox'][66] ==5 )){
    if(($checkbox[66])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[66],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[66],
            'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }

    if(!empty($_POST['checkbox'][67]) || empty($_POST['checkbox'][67])){
             if(($_POST['checkbox'][67] ==0 || $_POST['checkbox'][67] ==1 || $_POST['checkbox'][67] ==2 || $_POST['checkbox'][67] ==3 || $_POST['checkbox'][67] ==5 )){
    if(($checkbox[67])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[67],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
          'name' => $name[67],
           'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }


    if(!empty($_POST['checkbox'][68]) || empty($_POST['checkbox'][68])){
             if(($_POST['checkbox'][68] ==0 || $_POST['checkbox'][68] ==1 || $_POST['checkbox'][68] ==2 || $_POST['checkbox'][68] ==3 || $_POST['checkbox'][68] ==5 )){
    if(($checkbox[68])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[68],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
          'name' => $name[68],
           'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }


    if(!empty($_POST['checkbox'][69]) || empty($_POST['checkbox'][69])){
             if(($_POST['checkbox'][69] ==0 || $_POST['checkbox'][69] ==1 || $_POST['checkbox'][69] ==2 || $_POST['checkbox'][69] ==3 || $_POST['checkbox'][69] ==5 )){
    if(($checkbox[69])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[69],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[69],
            'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }


    if(!empty($_POST['checkbox'][70]) || empty($_POST['checkbox'][70])){
             if(($_POST['checkbox'][70] ==0 || $_POST['checkbox'][70] ==1 || $_POST['checkbox'][70] ==2 || $_POST['checkbox'][70] ==3 || $_POST['checkbox'][70] ==5 )){
    if(($checkbox[70])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[70],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
            'name' => $name[70],
             'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }



// 71
     if(!empty($_POST['checkbox'][71]) || empty($_POST['checkbox'][71])){
             if(($_POST['checkbox'][71] ==0 || $_POST['checkbox'][71] ==1 || $_POST['checkbox'][71] ==2 || $_POST['checkbox'][71] ==3 || $_POST['checkbox'][71] ==5 )){
    if(($checkbox[71])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[71],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[71],
            'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }


     if(!empty($_POST['checkbox'][72]) || empty($_POST['checkbox'][72])){
             if(($_POST['checkbox'][72] ==0 || $_POST['checkbox'][72] ==1 || $_POST['checkbox'][72] ==2 || $_POST['checkbox'][72] ==3 || $_POST['checkbox'][72] ==5 )){
    if(($checkbox[72])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[72],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[72],
            'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }


     if(!empty($_POST['checkbox'][73]) || empty($_POST['checkbox'][73])){
             if(($_POST['checkbox'][73] ==0 || $_POST['checkbox'][73] ==1 || $_POST['checkbox'][73] ==2 || $_POST['checkbox'][73] ==3 || $_POST['checkbox'][73] ==5 )){
    if(($checkbox[73])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[73],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[73],
            'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }


     if(!empty($_POST['checkbox'][74]) || empty($_POST['checkbox'][74])){
             if(($_POST['checkbox'][74] ==0 || $_POST['checkbox'][74] ==1 || $_POST['checkbox'][74] ==2 || $_POST['checkbox'][74] ==3 || $_POST['checkbox'][74] ==5 )){
    if(($checkbox[74])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[74],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[74],
            'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }


     if(!empty($_POST['checkbox'][75]) || empty($_POST['checkbox'][75])){
             if(($_POST['checkbox'][75] ==0 || $_POST['checkbox'][75] ==1 || $_POST['checkbox'][75] ==2 || $_POST['checkbox'][75] ==3 || $_POST['checkbox'][75] ==5 )){
    if(($checkbox[75])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[75],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[75],
            'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }


     if(!empty($_POST['checkbox'][76]) || empty($_POST['checkbox'][76])){
             if(($_POST['checkbox'][76] ==0 || $_POST['checkbox'][76] ==1 || $_POST['checkbox'][76] ==2 || $_POST['checkbox'][76] ==3 || $_POST['checkbox'][76] ==5 )){
    if(($checkbox[76])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[76],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[76],
            'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }


     if(!empty($_POST['checkbox'][77]) || empty($_POST['checkbox'][77])){
             if(($_POST['checkbox'][77] ==0 || $_POST['checkbox'][77] ==1 || $_POST['checkbox'][77] ==2 || $_POST['checkbox'][77] ==3 || $_POST['checkbox'][77] ==5 )){
    if(($checkbox[77])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[77],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[77],
            'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }


     if(!empty($_POST['checkbox'][78]) || empty($_POST['checkbox'][78])){
             if(($_POST['checkbox'][78] ==0 || $_POST['checkbox'][78] ==1 || $_POST['checkbox'][78] ==2 || $_POST['checkbox'][78] ==3 || $_POST['checkbox'][78] ==5 )){
    if(($checkbox[78])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[78],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[78],
            'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }


     if(!empty($_POST['checkbox'][79]) || empty($_POST['checkbox'][79])){
             if(($_POST['checkbox'][79] ==0 || $_POST['checkbox'][79] ==1 || $_POST['checkbox'][79] ==2 || $_POST['checkbox'][79] ==3 || $_POST['checkbox'][79] ==5 )){
    if(($checkbox[79])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[79],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
            'name' => $name[79],
             'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }


     if(!empty($_POST['checkbox'][80]) || empty($_POST['checkbox'][80])){
             if(($_POST['checkbox'][80] ==0 || $_POST['checkbox'][80] ==1 || $_POST['checkbox'][80] ==2 || $_POST['checkbox'][80] ==3 || $_POST['checkbox'][80] ==5 )){
    if(($checkbox[80])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[80],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
            'name' => $name[80],
             'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }


     if(!empty($_POST['checkbox'][81]) || empty($_POST['checkbox'][81])){
             if(($_POST['checkbox'][81] ==0 || $_POST['checkbox'][81] ==1 || $_POST['checkbox'][81] ==2 || $_POST['checkbox'][81] ==3 || $_POST['checkbox'][81] ==5 )){
    if(($checkbox[81])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[81],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[81],
            'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }

     if(!empty($_POST['checkbox'][82]) || empty($_POST['checkbox'][82])){
             if(($_POST['checkbox'][82] ==0 || $_POST['checkbox'][82] ==1 || $_POST['checkbox'][82] ==2 || $_POST['checkbox'][82] ==3 || $_POST['checkbox'][82] ==5 )){
    if(($checkbox[82])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[82],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
            'name' => $name[82],
             'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }


     if(!empty($_POST['checkbox'][83]) || empty($_POST['checkbox'][83])){
             if(($_POST['checkbox'][83] ==0 || $_POST['checkbox'][83] ==1 || $_POST['checkbox'][83] ==2 || $_POST['checkbox'][83] ==3 || $_POST['checkbox'][83] ==5 )){
    if(($checkbox[83])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[83],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
          'name' => $name[83],
           'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }

     if(!empty($_POST['checkbox'][84]) || empty($_POST['checkbox'][84])){
             if(($_POST['checkbox'][84] ==0 || $_POST['checkbox'][84] ==1 || $_POST['checkbox'][84] ==2 || $_POST['checkbox'][84] ==3 || $_POST['checkbox'][84] ==5 )){
    if(($checkbox[84])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[84],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
            'name' => $name[84],
             'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }

     if(!empty($_POST['checkbox'][85]) || empty($_POST['checkbox'][85])){
             if(($_POST['checkbox'][85] ==0 || $_POST['checkbox'][85] ==1 || $_POST['checkbox'][85] ==2 || $_POST['checkbox'][85] ==3 || $_POST['checkbox'][85] ==5 )){
    if(($checkbox[85])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[85],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[85],
            'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }


     if(!empty($_POST['checkbox'][86]) || empty($_POST['checkbox'][86])){
             if(($_POST['checkbox'][86] ==0 || $_POST['checkbox'][86] ==1 || $_POST['checkbox'][86] ==2 || $_POST['checkbox'][86] ==3 || $_POST['checkbox'][86] ==5 )){
    if(($checkbox[86])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[86],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[86],
            'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }

     if(!empty($_POST['checkbox'][87]) || empty($_POST['checkbox'][87])){
             if(($_POST['checkbox'][87] ==0 || $_POST['checkbox'][87] ==1 || $_POST['checkbox'][87] ==2 || $_POST['checkbox'][87] ==3 || $_POST['checkbox'][87] ==5 )){
    if(($checkbox[87])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[87],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
            'name' => $name[87],
             'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }

     if(!empty($_POST['checkbox'][88]) || empty($_POST['checkbox'][88])){
             if(($_POST['checkbox'][88] ==0 || $_POST['checkbox'][88] ==1 || $_POST['checkbox'][88] ==2 || $_POST['checkbox'][88] ==3 || $_POST['checkbox'][88] ==5 )){
    if(($checkbox[88])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[88],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[88],
            'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }


     if(!empty($_POST['checkbox'][89]) || empty($_POST['checkbox'][89])){
             if(($_POST['checkbox'][89] ==0 || $_POST['checkbox'][89] ==1 || $_POST['checkbox'][89] ==2 || $_POST['checkbox'][89] ==3 || $_POST['checkbox'][89] ==5 )){
    if(($checkbox[89])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[89],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
          'name' => $name[89],
           'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }

     if(!empty($_POST['checkbox'][90]) || empty($_POST['checkbox'][90])){
             if(($_POST['checkbox'][90] ==0 || $_POST['checkbox'][90] ==1 || $_POST['checkbox'][90] ==2 || $_POST['checkbox'][90] ==3 || $_POST['checkbox'][90] ==5 )){
    if(($checkbox[90])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[90],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
            'name' => $name[90],
             'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }


     if(!empty($_POST['checkbox'][91]) || empty($_POST['checkbox'][91])){
             if(($_POST['checkbox'][91] ==0 || $_POST['checkbox'][91] ==1 || $_POST['checkbox'][91] ==2 || $_POST['checkbox'][91] ==3 || $_POST['checkbox'][91] ==5 )){
    if(($checkbox[91])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[91],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
            'name' => $name[91],
             'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }


     if(!empty($_POST['checkbox'][92]) || empty($_POST['checkbox'][92])){
             if(($_POST['checkbox'][92] ==0 || $_POST['checkbox'][92] ==1 || $_POST['checkbox'][92] ==2 || $_POST['checkbox'][92] ==3 || $_POST['checkbox'][92] ==5 )){
    if(($checkbox[92])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[92],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[92],
            'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }


     if(!empty($_POST['checkbox'][93]) || empty($_POST['checkbox'][93])){
             if(($_POST['checkbox'][93] ==0 || $_POST['checkbox'][93] ==1 || $_POST['checkbox'][93] ==2 || $_POST['checkbox'][93] ==3 || $_POST['checkbox'][93] ==5 )){
    if(($checkbox[93])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[93],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
            'name' => $name[93],
             'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }

     if(!empty($_POST['checkbox'][94]) || empty($_POST['checkbox'][94])){
             if(($_POST['checkbox'][94] ==0 || $_POST['checkbox'][94] ==1 || $_POST['checkbox'][94] ==2 || $_POST['checkbox'][94] ==3 || $_POST['checkbox'][94] ==5 )){
    if(($checkbox[94])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[94],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[94],
            'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }

     if(!empty($_POST['checkbox'][95]) || empty($_POST['checkbox'][95])){
             if(($_POST['checkbox'][95] ==0 || $_POST['checkbox'][95] ==1 || $_POST['checkbox'][95] ==2 || $_POST['checkbox'][95] ==3 || $_POST['checkbox'][95] ==5 )){
    if(($checkbox[95])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[95],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[95],
            'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }

     if(!empty($_POST['checkbox'][96]) || empty($_POST['checkbox'][96])){
             if(($_POST['checkbox'][96] ==0 || $_POST['checkbox'][96] ==1 || $_POST['checkbox'][96] ==2 || $_POST['checkbox'][96] ==3 || $_POST['checkbox'][96] ==5 )){
    if(($checkbox[96])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[96],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[96],
            'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }


     if(!empty($_POST['checkbox'][97]) || empty($_POST['checkbox'][97])){
             if(($_POST['checkbox'][97] ==0 || $_POST['checkbox'][97] ==1 || $_POST['checkbox'][97] ==2 || $_POST['checkbox'][97] ==3 || $_POST['checkbox'][97] ==5 )){
    if(($checkbox[97])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[97],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
            'name' => $name[97],
             'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }

     if(!empty($_POST['checkbox'][98]) || empty($_POST['checkbox'][98])){
             if(($_POST['checkbox'][98] ==0 || $_POST['checkbox'][98] ==1 || $_POST['checkbox'][98] ==2 || $_POST['checkbox'][98] ==3 || $_POST['checkbox'][98] ==5 )){
    if(($checkbox[98])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[98],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[98],
            'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }


     if(!empty($_POST['checkbox'][99]) || empty($_POST['checkbox'][99])){
             if(($_POST['checkbox'][99] ==0 || $_POST['checkbox'][99] ==1 || $_POST['checkbox'][99] ==2 || $_POST['checkbox'][99] ==3 || $_POST['checkbox'][99] ==5 )){
    if(($checkbox[99])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[99],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[99],
            'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }


     if(!empty($_POST['checkbox'][100]) || empty($_POST['checkbox'][100])){
             if(($_POST['checkbox'][100] ==0 || $_POST['checkbox'][100] ==1 || $_POST['checkbox'][100] ==2 || $_POST['checkbox'][100] ==3 || $_POST['checkbox'][100] ==5 )){
    if(($checkbox[100])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[100],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
          'name' => $name[100],
           'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }


    if(!empty($_POST['checkbox'][101]) || empty($_POST['checkbox'][101])){
             if(($_POST['checkbox'][101] ==0 || $_POST['checkbox'][101] ==1 || $_POST['checkbox'][101] ==2 || $_POST['checkbox'][101] ==3 || $_POST['checkbox'][101] ==5 )){
    if(($checkbox[101])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[101],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
            'name' => $name[101],
             'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }


    if(!empty($_POST['checkbox'][102]) || empty($_POST['checkbox'][102])){
             if(($_POST['checkbox'][102] ==0 || $_POST['checkbox'][102] ==1 || $_POST['checkbox'][102] ==2 || $_POST['checkbox'][102] ==3 || $_POST['checkbox'][102] ==5 )){
    if(($checkbox[102])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[102],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
           'name' => $name[102],
            'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }

    if(!empty($_POST['checkbox'][103]) || empty($_POST['checkbox'][103])){
             if(($_POST['checkbox'][103] ==0 || $_POST['checkbox'][103] ==1 || $_POST['checkbox'][103] ==2 || $_POST['checkbox'][103] ==3 || $_POST['checkbox'][103] ==5 )){
    if(($checkbox[103])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[103],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
          'name' => $name[103],
           'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }


    if(!empty($_POST['checkbox'][104]) || empty($_POST['checkbox'][104])){
             if(($_POST['checkbox'][104] ==0 || $_POST['checkbox'][104] ==1 || $_POST['checkbox'][104] ==2 || $_POST['checkbox'][104] ==3 || $_POST['checkbox'][104] ==5 )){
    if(($checkbox[104])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[104],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_assessment_id = $this->input->post('questions_assessment_id[]');
             $questions_assessment_id = array(
          'name' => $name[104],
           'email' => $email,
            );

            $update = $this->db->update('work_personality_save_for_later',$data,$questions_assessment_id);
         }}
    }



}
// 12-01-2021 : 3:11 am

public function save_for_later(){
     if(($this->uri->segment(3)!=0)){
	$data['dashboard_data']=$this->uri->segment(3);

}
else{
	$data['dashboard_data']=$this->session->userdata();
}

//$organization=$data['dashboard_data'];
//$organization=$organization['organization'];


$email=$data['dashboard_data'];
$department=$data['dashboard_data'];
        $department=$department['department'];
        $email=$email['email'];
        $checkbox = $this->input->post('checkbox[]');
    	$dimensions_name = $this->input->post('dimensions_name[]');

    //	$questions_id=  array();
    	$questions_id = $this->input->post('questions_id[]');
    		$length = $this->input->post('length');
    		//echo "<pre>";print_r($length);exit;

    	// length
        $organization='Nayatel';
    	$name = $this->input->post('name[]');
    	$date_created = date("Y-m-d H:i:s");
    //	echo "<pre>";print_r($_POST['checkbox'][9]));exit;


    //	 echo "<pre>";print_r($name);exit;
    //

   if(!empty($_POST['checkbox'][0]) || empty($_POST['checkbox'][0])){
    if(($_POST['checkbox'][0] ==0 || $_POST['checkbox'][0] ==1 || $_POST['checkbox'][0] ==2 || $_POST['checkbox'][0] ==3 || $_POST['checkbox'][0] ==5  )){
    if(($checkbox[0])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[0],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
            'name' => $name[0],
             'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
            // echo "<pre>";print_r($update);
            //   //echo "<pre>";print_r($questions_id);
            //  exit;
         }}
   }
    if(!empty($_POST['checkbox'][1]) || empty($_POST['checkbox'][1])){
          if(($_POST['checkbox'][1] ==0 || $_POST['checkbox'][1] ==1 || $_POST['checkbox'][1] ==2 || $_POST['checkbox'][1] ==3 || $_POST['checkbox'][1] ==5 )){
    if(($checkbox[1])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[1],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
           'name' => $name[1],
            'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }
    if(!empty($_POST['checkbox'][2]) || empty($_POST['checkbox'][2])){

          if(($_POST['checkbox'][2] ==0 || $_POST['checkbox'][2] ==1 || $_POST['checkbox'][2] ==2 || $_POST['checkbox'][2] ==3 || $_POST['checkbox'][2] ==5 )){
    if(($checkbox[2])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[2],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
           'name' => $name[2],
            'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}

    }
    if(!empty($_POST['checkbox'][3]) || empty($_POST['checkbox'][3])){

          if(($_POST['checkbox'][3] ==0 || $_POST['checkbox'][3] ==1 || $_POST['checkbox'][3] ==2 || $_POST['checkbox'][3] ==3 || $_POST['checkbox'][3] ==5 )){
    if(($checkbox[3])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[3],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
           'name' => $name[3],
            'email' => $email,
            );
            // echo "<pre>";print_r($data);exit;
            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}

    }
    if(!empty($_POST['checkbox'][4]) || empty($_POST['checkbox'][4])){

          if(($_POST['checkbox'][4] ==0 || $_POST['checkbox'][4] ==1 || $_POST['checkbox'][4] ==2 || $_POST['checkbox'][4] ==3 || $_POST['checkbox'][4] ==5 )){
    if(($checkbox[4])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[4],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
            'name' => $name[4],
             'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }
    if(!empty($_POST['checkbox'][5]) || empty($_POST['checkbox'][5])){

          if(($_POST['checkbox'][5] ==0 || $_POST['checkbox'][5] ==1 || $_POST['checkbox'][5] ==2 || $_POST['checkbox'][5] ==3 || $_POST['checkbox'][5] ==5 )){
    if(($checkbox[5])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[5],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
            'name' => $name[5],
             'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}

    }
    if(!empty($_POST['checkbox'][6]) || empty($_POST['checkbox'][6])){

          if(($_POST['checkbox'][6] ==0 || $_POST['checkbox'][6] ==1 || $_POST['checkbox'][6] ==2 || $_POST['checkbox'][6] ==3 || $_POST['checkbox'][6] ==5 )){
    if(($checkbox[6])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[6],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
            'name' => $name[6],
             'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}

    }
    if(!empty($_POST['checkbox'][7]) || empty($_POST['checkbox'][7])){

          if(($_POST['checkbox'][7] ==0 || $_POST['checkbox'][7] ==1 || $_POST['checkbox'][7] ==2 || $_POST['checkbox'][7] ==3 || $_POST['checkbox'][7] ==5 )){
    if(($checkbox[7])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[7],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
           'name' => $name[7],
            'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}

    }
    if(!empty($_POST['checkbox'][8]) || empty($_POST['checkbox'][8])){

          if(($_POST['checkbox'][8] ==0 || $_POST['checkbox'][8] ==1 || $_POST['checkbox'][8] ==2 || $_POST['checkbox'][8] ==3 || $_POST['checkbox'][8] ==5 )){
    if(($checkbox[8])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[8],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
            'name' => $name[8],
             'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}

    }
    if(!empty($_POST['checkbox'][9]) || empty($_POST['checkbox'][9])){

         if(($_POST['checkbox'][9] ==0 || $_POST['checkbox'][9] ==1 || $_POST['checkbox'][9] ==2 || $_POST['checkbox'][9] ==3 || $_POST['checkbox'][9] ==5 )){
    if(($checkbox[9])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[9],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
           'name' => $name[9],
            'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
            //  10
    }
    if(!empty($_POST['checkbox'][10]) || empty($_POST['checkbox'][10])){
             if(($_POST['checkbox'][10] ==0 || $_POST['checkbox'][10] ==1 || $_POST['checkbox'][10] ==2 || $_POST['checkbox'][10] ==3 || $_POST['checkbox'][10] ==5 )){
    if(($checkbox[10])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[10],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
            'name' => $name[10],
             'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }

     if(!empty($_POST['checkbox'][11]) || empty($_POST['checkbox'][11])){
             if(($_POST['checkbox'][11] ==0 || $_POST['checkbox'][11] ==1 || $_POST['checkbox'][11] ==2 || $_POST['checkbox'][11] ==3 || $_POST['checkbox'][11] ==5 )){
    if(($checkbox[11])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[11],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
            'name' => $name[11],
             'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }
    // 12

     if(!empty($_POST['checkbox'][12]) || empty($_POST['checkbox'][12])){
             if(($_POST['checkbox'][12] ==0 || $_POST['checkbox'][12] ==1 || $_POST['checkbox'][12] ==2 || $_POST['checkbox'][12] ==3 || $_POST['checkbox'][12] ==5 )){
    if(($checkbox[12])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[12],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
           'name' => $name[12],
            'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }

     if(!empty($_POST['checkbox'][13]) || empty($_POST['checkbox'][13])){
             if(($_POST['checkbox'][13] ==0 || $_POST['checkbox'][13] ==1 || $_POST['checkbox'][13] ==2 || $_POST['checkbox'][13] ==3 || $_POST['checkbox'][13] ==5 )){
    if(($checkbox[13])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[13],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
            'name' => $name[13],
             'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }

     if(!empty($_POST['checkbox'][14]) || empty($_POST['checkbox'][14])){
             if(($_POST['checkbox'][14] ==0 || $_POST['checkbox'][14] ==1 || $_POST['checkbox'][14] ==2 || $_POST['checkbox'][14] ==3 || $_POST['checkbox'][14] ==5 )){
    if(($checkbox[14])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[14],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
            'name' => $name[14],
             'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }


     if(!empty($_POST['checkbox'][15]) || empty($_POST['checkbox'][15])){
             if(($_POST['checkbox'][15] ==0 || $_POST['checkbox'][15] ==1 || $_POST['checkbox'][15] ==2 || $_POST['checkbox'][15] ==3 || $_POST['checkbox'][15] ==5 )){
    if(($checkbox[15])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[15],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
            'name' => $name[15],
             'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }


     if(!empty($_POST['checkbox'][16]) || empty($_POST['checkbox'][16])){
             if(($_POST['checkbox'][16] ==0 || $_POST['checkbox'][16] ==1 || $_POST['checkbox'][16] ==2 || $_POST['checkbox'][16] ==3 || $_POST['checkbox'][16] ==5 )){
    if(($checkbox[16])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[16],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
           'name' => $name[16],
            'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }


     if(!empty($_POST['checkbox'][17]) || empty($_POST['checkbox'][17])){
             if(($_POST['checkbox'][17] ==0 || $_POST['checkbox'][17] ==1 || $_POST['checkbox'][17] ==2 || $_POST['checkbox'][17] ==3 || $_POST['checkbox'][17] ==5 )){
    if(($checkbox[17])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[17],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
            'name' => $name[17],
             'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }

     if(!empty($_POST['checkbox'][18]) || empty($_POST['checkbox'][18])){
             if(($_POST['checkbox'][18] ==0 || $_POST['checkbox'][18] ==1 || $_POST['checkbox'][18] ==2 || $_POST['checkbox'][18] ==3 || $_POST['checkbox'][18] ==5 )){
    if(($checkbox[18])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[18],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
           'name' => $name[18],
            'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }

     if(!empty($_POST['checkbox'][19]) || empty($_POST['checkbox'][19])){
             if(($_POST['checkbox'][19] ==0 || $_POST['checkbox'][19] ==1 || $_POST['checkbox'][19] ==2 || $_POST['checkbox'][19] ==3 || $_POST['checkbox'][19] ==5 )){
    if(($checkbox[19])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[19],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
           'name' => $name[19],
            'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }



     if(!empty($_POST['checkbox'][20]) || empty($_POST['checkbox'][20])){
             if(($_POST['checkbox'][20] ==0 || $_POST['checkbox'][20] ==1 || $_POST['checkbox'][20] ==2 || $_POST['checkbox'][20] ==3 || $_POST['checkbox'][20] ==5 )){
    if(($checkbox[20])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[20],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
            'name' => $name[20],
             'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }

     if(!empty($_POST['checkbox'][21]) || empty($_POST['checkbox'][21])){
             if(($_POST['checkbox'][21] ==0 || $_POST['checkbox'][21] ==1 || $_POST['checkbox'][21] ==2 || $_POST['checkbox'][21] ==3 || $_POST['checkbox'][21] ==5 )){
    if(($checkbox[21])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[21],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
           'name' => $name[21],
            'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }

     if(!empty($_POST['checkbox'][22]) || empty($_POST['checkbox'][22])){
             if(($_POST['checkbox'][22] ==0 || $_POST['checkbox'][22] ==1 || $_POST['checkbox'][22] ==2 || $_POST['checkbox'][22] ==3 || $_POST['checkbox'][22] ==5 )){
    if(($checkbox[22])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[22],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
           'name' => $name[22],
            'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }

     if(!empty($_POST['checkbox'][23]) || empty($_POST['checkbox'][23])){
             if(($_POST['checkbox'][23] ==0 || $_POST['checkbox'][23] ==1 || $_POST['checkbox'][23] ==2 || $_POST['checkbox'][23] ==3 || $_POST['checkbox'][23] ==5 )){
    if(($checkbox[23])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[23],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
            'name' => $name[23],
             'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }

     if(!empty($_POST['checkbox'][24]) || empty($_POST['checkbox'][24])){
             if(($_POST['checkbox'][24] ==0 || $_POST['checkbox'][24] ==1 || $_POST['checkbox'][24] ==2 || $_POST['checkbox'][24] ==3 || $_POST['checkbox'][24] ==5 )){
    if(($checkbox[24])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[24],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
           'name' => $name[24],
            'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }

     if(!empty($_POST['checkbox'][25]) || empty($_POST['checkbox'][25])){
             if(($_POST['checkbox'][25] ==0 || $_POST['checkbox'][25] ==1 || $_POST['checkbox'][25] ==2 || $_POST['checkbox'][25] ==3 || $_POST['checkbox'][25] ==5 )){
    if(($checkbox[25])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[25],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
            'name' => $name[25],
             'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }


     if(!empty($_POST['checkbox'][26]) || empty($_POST['checkbox'][26])){
             if(($_POST['checkbox'][26] ==0 || $_POST['checkbox'][26] ==1 || $_POST['checkbox'][26] ==2 || $_POST['checkbox'][26] ==3 || $_POST['checkbox'][26] ==5 )){
    if(($checkbox[26])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[26],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
           'name' => $name[26],
            'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }


     if(!empty($_POST['checkbox'][27]) || empty($_POST['checkbox'][27])){
             if(($_POST['checkbox'][27] ==0 || $_POST['checkbox'][27] ==1 || $_POST['checkbox'][27] ==2 || $_POST['checkbox'][27] ==3 || $_POST['checkbox'][27] ==5 )){
    if(($checkbox[27])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[27],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
           'name' => $name[27],
            'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }


     if(!empty($_POST['checkbox'][28]) || empty($_POST['checkbox'][28])){
             if(($_POST['checkbox'][28] ==0 || $_POST['checkbox'][28] ==1 || $_POST['checkbox'][28] ==2 || $_POST['checkbox'][28] ==3 || $_POST['checkbox'][28] ==5 )){
    if(($checkbox[28])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[28],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
            'name' => $name[28],
             'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }

     if(!empty($_POST['checkbox'][29]) || empty($_POST['checkbox'][29])){
             if(($_POST['checkbox'][29] ==0 || $_POST['checkbox'][29] ==1 || $_POST['checkbox'][29] ==2 || $_POST['checkbox'][29] ==3 || $_POST['checkbox'][29] ==5 )){
    if(($checkbox[29])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[29],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
            'name' => $name[29],
             'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }

     if(!empty($_POST['checkbox'][30]) || empty($_POST['checkbox'][30])){
             if(($_POST['checkbox'][30] ==0 || $_POST['checkbox'][30] ==1 || $_POST['checkbox'][30] ==2 || $_POST['checkbox'][30] ==3 || $_POST['checkbox'][30] ==5 )){
    if(($checkbox[30])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[30],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
           'name' => $name[30],
            'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }


     if(!empty($_POST['checkbox'][31]) || empty($_POST['checkbox'][31])){
             if(($_POST['checkbox'][31] ==0 || $_POST['checkbox'][31] ==1 || $_POST['checkbox'][31] ==2 || $_POST['checkbox'][31] ==3 || $_POST['checkbox'][31] ==5 )){
    if(($checkbox[31])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[31],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
            'name' => $name[31],
             'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }


     if(!empty($_POST['checkbox'][32]) || empty($_POST['checkbox'][32])){
             if(($_POST['checkbox'][32] ==0 || $_POST['checkbox'][32] ==1 || $_POST['checkbox'][32] ==2 || $_POST['checkbox'][32] ==3 || $_POST['checkbox'][32] ==5 )){
    if(($checkbox[32])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[32],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
           'name' => $name[32],
            'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }


     if(!empty($_POST['checkbox'][33]) || empty($_POST['checkbox'][33])){
             if(($_POST['checkbox'][33] ==0 || $_POST['checkbox'][33] ==1 || $_POST['checkbox'][33] ==2 || $_POST['checkbox'][33] ==3 || $_POST['checkbox'][33] ==5 )){
    if(($checkbox[33])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[33],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
           'name' => $name[33],
            'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }

     if(!empty($_POST['checkbox'][34]) || empty($_POST['checkbox'][34])){
             if(($_POST['checkbox'][34] ==0 || $_POST['checkbox'][34] ==1 || $_POST['checkbox'][34] ==2 || $_POST['checkbox'][34] ==3 || $_POST['checkbox'][34] ==5 )){
    if(($checkbox[34])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[34],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
            'name' => $name[34],
             'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }

    // 35
     if(!empty($_POST['checkbox'][35]) || empty($_POST['checkbox'][35])){
             if(($_POST['checkbox'][35] ==0 || $_POST['checkbox'][35] ==1 || $_POST['checkbox'][35] ==2 || $_POST['checkbox'][35] ==3 || $_POST['checkbox'][35] ==5 )){
    if(($checkbox[35])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[35],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
           'name' => $name[35],
            'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }


     if(!empty($_POST['checkbox'][36]) || empty($_POST['checkbox'][36])){
             if(($_POST['checkbox'][36] ==0 || $_POST['checkbox'][36] ==1 || $_POST['checkbox'][36] ==2 || $_POST['checkbox'][36] ==3 || $_POST['checkbox'][36] ==5 )){
    if(($checkbox[36])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[36],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
           'name' => $name[36],
            'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }


     if(!empty($_POST['checkbox'][37]) || empty($_POST['checkbox'][37])){
             if(($_POST['checkbox'][37] ==0 || $_POST['checkbox'][37] ==1 || $_POST['checkbox'][37] ==2 || $_POST['checkbox'][37] ==3 || $_POST['checkbox'][37] ==5 )){
    if(($checkbox[37])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[37],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
           'name' => $name[37],
            'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }


     if(!empty($_POST['checkbox'][38]) || empty($_POST['checkbox'][38])){
             if(($_POST['checkbox'][38] ==0 || $_POST['checkbox'][38] ==1 || $_POST['checkbox'][38] ==2 || $_POST['checkbox'][38] ==3 || $_POST['checkbox'][38] ==5 )){
    if(($checkbox[38])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[38],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
           'name' => $name[38],
            'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }


     if(!empty($_POST['checkbox'][39]) || empty($_POST['checkbox'][39])){
             if(($_POST['checkbox'][39] ==0 || $_POST['checkbox'][39] ==1 || $_POST['checkbox'][39] ==2 || $_POST['checkbox'][39] ==3 || $_POST['checkbox'][39] ==5 )){
    if(($checkbox[39])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[39],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
           'name' => $name[39],
            'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }


     if(!empty($_POST['checkbox'][40]) || empty($_POST['checkbox'][40])){
             if(($_POST['checkbox'][40] ==0 || $_POST['checkbox'][40] ==1 || $_POST['checkbox'][40] ==2 || $_POST['checkbox'][40] ==3 || $_POST['checkbox'][40] ==5 )){
    if(($checkbox[40])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[40],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
           'name' => $name[40],
            'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }


     if(!empty($_POST['checkbox'][41]) || empty($_POST['checkbox'][41])){
             if(($_POST['checkbox'][41] ==0 || $_POST['checkbox'][41] ==1 || $_POST['checkbox'][41] ==2 || $_POST['checkbox'][41] ==3 || $_POST['checkbox'][41] ==5 )){
    if(($checkbox[41])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[41],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
           'name' => $name[41],
            'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }


     if(!empty($_POST['checkbox'][42]) || empty($_POST['checkbox'][42])){
             if(($_POST['checkbox'][42] ==0 || $_POST['checkbox'][42] ==1 || $_POST['checkbox'][42] ==2 || $_POST['checkbox'][42] ==3 || $_POST['checkbox'][42] ==5 )){
    if(($checkbox[42])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[42],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
           'name' => $name[42],
            'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }


     if(!empty($_POST['checkbox'][43]) || empty($_POST['checkbox'][43])){
             if(($_POST['checkbox'][43] ==0 || $_POST['checkbox'][43] ==1 || $_POST['checkbox'][43] ==2 || $_POST['checkbox'][43] ==3 || $_POST['checkbox'][43] ==5 )){
    if(($checkbox[43])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[43],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
            'name' => $name[43],
             'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }


     if(!empty($_POST['checkbox'][44]) || empty($_POST['checkbox'][44])){
             if(($_POST['checkbox'][44] ==0 || $_POST['checkbox'][44] ==1 || $_POST['checkbox'][44] ==2 || $_POST['checkbox'][44] ==3 || $_POST['checkbox'][44] ==5 )){
    if(($checkbox[44])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[44],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
            'name' => $name[44],
             'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }


     if(!empty($_POST['checkbox'][45]) || empty($_POST['checkbox'][45])){
             if(($_POST['checkbox'][45] ==0 || $_POST['checkbox'][45] ==1 || $_POST['checkbox'][45] ==2 || $_POST['checkbox'][45] ==3 || $_POST['checkbox'][45] ==5 )){
    if(($checkbox[45])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[45],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
           'name' => $name[45],
            'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }

     if(!empty($_POST['checkbox'][46]) || empty($_POST['checkbox'][46])){
             if(($_POST['checkbox'][46] ==0 || $_POST['checkbox'][46] ==1 || $_POST['checkbox'][46] ==2 || $_POST['checkbox'][46] ==3 || $_POST['checkbox'][46] ==5 )){
    if(($checkbox[46])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[46],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
            'name' => $name[46],
             'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }


     if(!empty($_POST['checkbox'][47]) || empty($_POST['checkbox'][47])){
             if(($_POST['checkbox'][47] ==0 || $_POST['checkbox'][47] ==1 || $_POST['checkbox'][47] ==2 || $_POST['checkbox'][47] ==3 || $_POST['checkbox'][47] ==5 )){
    if(($checkbox[47])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[47],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
          'name' => $name[47],
           'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }

     if(!empty($_POST['checkbox'][48]) || empty($_POST['checkbox'][48])){
             if(($_POST['checkbox'][48] ==0 || $_POST['checkbox'][48] ==1 || $_POST['checkbox'][48] ==2 || $_POST['checkbox'][48] ==3 || $_POST['checkbox'][48] ==5 )){
    if(($checkbox[48])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[48],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
            'name' => $name[48],
             'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }

     if(!empty($_POST['checkbox'][49]) || empty($_POST['checkbox'][49])){
             if(($_POST['checkbox'][49] ==0 || $_POST['checkbox'][49] ==1 || $_POST['checkbox'][49] ==2 || $_POST['checkbox'][49] ==3 || $_POST['checkbox'][49] ==5 )){
    if(($checkbox[49])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[49],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
           'name' => $name[49],
            'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }


     if(!empty($_POST['checkbox'][50]) || empty($_POST['checkbox'][50])){
             if(($_POST['checkbox'][50] ==0 || $_POST['checkbox'][50] ==1 || $_POST['checkbox'][50] ==2 || $_POST['checkbox'][50] ==3 || $_POST['checkbox'][50] ==5 )){
    if(($checkbox[50])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[50],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
           'name' => $name[50],
            'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }

     if(!empty($_POST['checkbox'][51]) || empty($_POST['checkbox'][51])){
             if(($_POST['checkbox'][51] ==0 || $_POST['checkbox'][51] ==1 || $_POST['checkbox'][51] ==2 || $_POST['checkbox'][51] ==3 || $_POST['checkbox'][51] ==5 )){
    if(($checkbox[51])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[51],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
            'name' => $name[51],
             'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }

     if(!empty($_POST['checkbox'][52]) || empty($_POST['checkbox'][52])){
             if(($_POST['checkbox'][52] ==0 || $_POST['checkbox'][52] ==1 || $_POST['checkbox'][52] ==2 || $_POST['checkbox'][52] ==3 || $_POST['checkbox'][52] ==5 )){
    if(($checkbox[52])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[52],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
           'name' => $name[52],
            'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }


     if(!empty($_POST['checkbox'][53]) || empty($_POST['checkbox'][53])){
             if(($_POST['checkbox'][53] ==0 || $_POST['checkbox'][53] ==1 || $_POST['checkbox'][53] ==2 || $_POST['checkbox'][53] ==3 || $_POST['checkbox'][53] ==5 )){
    if(($checkbox[53])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[53],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
          'name' => $name[53],
           'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }

     if(!empty($_POST['checkbox'][54]) || empty($_POST['checkbox'][54])){
             if(($_POST['checkbox'][54] ==0 || $_POST['checkbox'][54] ==1 || $_POST['checkbox'][54] ==2 || $_POST['checkbox'][54] ==3 || $_POST['checkbox'][54] ==5 )){
    if(($checkbox[54])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[54],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
            'name' => $name[54],
             'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }


     if(!empty($_POST['checkbox'][55]) || empty($_POST['checkbox'][55])){
             if(($_POST['checkbox'][55] ==0 || $_POST['checkbox'][55] ==1 || $_POST['checkbox'][55] ==2 || $_POST['checkbox'][55] ==3 || $_POST['checkbox'][55] ==5 )){
    if(($checkbox[55])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[55],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
            'name' => $name[55],
             'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }


     if(!empty($_POST['checkbox'][56]) || empty($_POST['checkbox'][56])){
             if(($_POST['checkbox'][56] ==0 || $_POST['checkbox'][56] ==1 || $_POST['checkbox'][56] ==2 || $_POST['checkbox'][56] ==3 || $_POST['checkbox'][56] ==5 )){
    if(($checkbox[56])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[56],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
           'name' => $name[56],
            'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }


     if(!empty($_POST['checkbox'][57]) || empty($_POST['checkbox'][57])){
             if(($_POST['checkbox'][57] ==0 || $_POST['checkbox'][57] ==1 || $_POST['checkbox'][57] ==2 || $_POST['checkbox'][57] ==3 || $_POST['checkbox'][57] ==5 )){
    if(($checkbox[57])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[57],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
            'name' => $name[57],
             'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }

     if(!empty($_POST['checkbox'][58]) || empty($_POST['checkbox'][58])){
             if(($_POST['checkbox'][58] ==0 || $_POST['checkbox'][58] ==1 || $_POST['checkbox'][58] ==2 || $_POST['checkbox'][58] ==3 || $_POST['checkbox'][58] ==5 )){
    if(($checkbox[58])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[58],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
           'name' => $name[58],
            'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }

     if(!empty($_POST['checkbox'][59]) || empty($_POST['checkbox'][59])){
             if(($_POST['checkbox'][59] ==0 || $_POST['checkbox'][59] ==1 || $_POST['checkbox'][59] ==2 || $_POST['checkbox'][59] ==3 || $_POST['checkbox'][59] ==5 )){
    if(($checkbox[59])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[59],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
           'name' => $name[59],
            'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }

     if(!empty($_POST['checkbox'][60]) || empty($_POST['checkbox'][60])){
             if(($_POST['checkbox'][60] ==0 || $_POST['checkbox'][60] ==1 || $_POST['checkbox'][60] ==2 || $_POST['checkbox'][60] ==3 || $_POST['checkbox'][60] ==5 )){
    if(($checkbox[60])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[60],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
           'name' => $name[60],
            'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }


     if(!empty($_POST['checkbox'][61]) || empty($_POST['checkbox'][61])){
             if(($_POST['checkbox'][61] ==0 || $_POST['checkbox'][61] ==1 || $_POST['checkbox'][61] ==2 || $_POST['checkbox'][61] ==3 || $_POST['checkbox'][61] ==5 )){
    if(($checkbox[61])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[61],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
            'name' => $name[61],
             'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }

     if(!empty($_POST['checkbox'][62]) || empty($_POST['checkbox'][62])){
             if(($_POST['checkbox'][62] ==0 || $_POST['checkbox'][62] ==1 || $_POST['checkbox'][62] ==2 || $_POST['checkbox'][62] ==3 || $_POST['checkbox'][62] ==5 )){
    if(($checkbox[62])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[62],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
           'name' => $name[62],
            'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }


     if(!empty($_POST['checkbox'][63]) || empty($_POST['checkbox'][63])){
             if(($_POST['checkbox'][63] ==0 || $_POST['checkbox'][63] ==1 || $_POST['checkbox'][63] ==2 || $_POST['checkbox'][63] ==3 || $_POST['checkbox'][63] ==5 )){
    if(($checkbox[63])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[63],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
           'name' => $name[63],
            'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }


     if(!empty($_POST['checkbox'][64]) || empty($_POST['checkbox'][64])){
             if(($_POST['checkbox'][64] ==0 || $_POST['checkbox'][64] ==1 || $_POST['checkbox'][64] ==2 || $_POST['checkbox'][64] ==3 || $_POST['checkbox'][64] ==5 )){
    if(($checkbox[64])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[64],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
          'name' => $name[64],
           'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }


    if(!empty($_POST['checkbox'][65]) || empty($_POST['checkbox'][65])){
             if(($_POST['checkbox'][65] ==0 || $_POST['checkbox'][65] ==1 || $_POST['checkbox'][65] ==2 || $_POST['checkbox'][65] ==3 || $_POST['checkbox'][65] ==5 )){
    if(($checkbox[65])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[65],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
            'name' => $name[65],
             'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }


    if(!empty($_POST['checkbox'][66]) || empty($_POST['checkbox'][66])){
             if(($_POST['checkbox'][66] ==0 || $_POST['checkbox'][66] ==1 || $_POST['checkbox'][66] ==2 || $_POST['checkbox'][66] ==3 || $_POST['checkbox'][66] ==5 )){
    if(($checkbox[66])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[66],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
           'name' => $name[66],
            'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }

    if(!empty($_POST['checkbox'][67]) || empty($_POST['checkbox'][67])){
             if(($_POST['checkbox'][67] ==0 || $_POST['checkbox'][67] ==1 || $_POST['checkbox'][67] ==2 || $_POST['checkbox'][67] ==3 || $_POST['checkbox'][67] ==5 )){
    if(($checkbox[67])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[67],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
          'name' => $name[67],
           'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }


    if(!empty($_POST['checkbox'][68]) || empty($_POST['checkbox'][68])){
             if(($_POST['checkbox'][68] ==0 || $_POST['checkbox'][68] ==1 || $_POST['checkbox'][68] ==2 || $_POST['checkbox'][68] ==3 || $_POST['checkbox'][68] ==5 )){
    if(($checkbox[68])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[68],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
          'name' => $name[68],
           'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }


    if(!empty($_POST['checkbox'][69]) || empty($_POST['checkbox'][69])){
             if(($_POST['checkbox'][69] ==0 || $_POST['checkbox'][69] ==1 || $_POST['checkbox'][69] ==2 || $_POST['checkbox'][69] ==3 || $_POST['checkbox'][69] ==5 )){
    if(($checkbox[69])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[69],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
           'name' => $name[69],
            'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }


    if(!empty($_POST['checkbox'][70]) || empty($_POST['checkbox'][70])){
             if(($_POST['checkbox'][70] ==0 || $_POST['checkbox'][70] ==1 || $_POST['checkbox'][70] ==2 || $_POST['checkbox'][70] ==3 || $_POST['checkbox'][70] ==5 )){
    if(($checkbox[70])!=-1){
     $date_modified=array();
     $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'value' => $checkbox[70],
             'save_for_later_time'    => $date_modified,
            );
            	$questions_id = $this->input->post('questions_id[]');
             $questions_id = array(
            'name' => $name[70],
             'email' => $email,
            );

            $update = $this->db->update('nayatel_save_for_later',$data,$questions_id);
         }}
    }

      redirect(base_url().'login/dashboard');
         exit;

}

public function work_personality_save_for_later_time($test_time_slot){

     if(($this->uri->segment(3)!=0)){
	$data['dashboard_data']=$this->uri->segment(3);

}
else{
	$data['dashboard_data']=$this->session->userdata();
}
$email=$data['dashboard_data'];
$email=$email['email'];
 //echo "<pre>";print_r($email);echo "br";

   $sql = "SELECT * FROM remaining_test_time_slot WHERE email='$email' AND test_name='Work Personality Index'";
   //echo "<pre>";print_r($sql);exit;

   $query = $this->db->query($sql);
     $query= $query->result_array();
  // echo "<pre>";print_r($query);exit;
 if(!empty($query)){
     //update
      $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'email' => $email,
            'test_name' => 'Work Personality Index',
            'test_time_slot' => $test_time_slot,
             'date_modified' => $date_modified,
            );


        $email = array(
            'email' => $email,
           'test_name' => 'Work Personality Index',

            );
             //echo "<pre>";print_r($data);exit;
            return $this->db->update('remaining_test_time_slot',$data,$email);exit;
            //echo "<pre>";print_r($data);exit;
       return    redirect(base_url().'login/dashboard');exit;
 }

   else{
       //insert

       $date_created = date("Y-m-d H:i:s");
        $data = array(
            'email' => $email,
            'test_name' => 'Work Personality Index',
            'test_time_slot' => $test_time_slot,
             'date_created' => $date_created,
            );


    //echo "<pre>";print_r($data);exit;
     return $this->db->insert('remaining_test_time_slot',$data);exit;
    return   redirect(base_url().'login/dashboard');exit;
 }
}

public function nayatel_save_for_later_time($test_time_slot){
     //email,test_name,remaining_time
      if(($this->uri->segment(3)!=0)){
	$data['dashboard_data']=$this->uri->segment(3);

}
else{
	$data['dashboard_data']=$this->session->userdata();
}
$email=$data['dashboard_data'];
$email=$email['email'];
 //echo "<pre>";print_r($email);echo "br";

   $sql = "SELECT * FROM remaining_test_time_slot WHERE email='$email' AND test_name='Nayatels Value Statements'";
   //echo "<pre>";print_r($sql);exit;

   $query = $this->db->query($sql);
     $query= $query->result_array();
  // echo "<pre>";print_r($query);exit;
 if(!empty($query)){
     //update
      $date_modified = date("Y-m-d H:i:s");
        $data = array(
            'email' => $email,
            'test_name' => 'Nayatels Value Statements',
            'test_time_slot' => $test_time_slot,
             'date_modified' => $date_modified,
            );


        $email = array(
            'email' => $email,
           'test_name' => 'Nayatels Value Statements',

            );
             //echo "<pre>";print_r($data);exit;
            return $this->db->update('remaining_test_time_slot',$data,$email);exit;
            //echo "<pre>";print_r($data);exit;
       return    redirect(base_url().'login/dashboard');exit;
 }

   else{
       //insert

       $date_created = date("Y-m-d H:i:s");
        $data = array(
            'email' => $email,
            'test_name' => 'Nayatels Value Statements',
            'test_time_slot' => $test_time_slot,
             'date_created' => $date_created,
            );


    //echo "<pre>";print_r($data);exit;
     return $this->db->insert('remaining_test_time_slot',$data);exit;
    return   redirect(base_url().'login/dashboard');exit;
 }
}

public function add_personal_values_save_for_later_questions($name){
     //echo "<pre>";print_r($name);exit;
    if(($this->uri->segment(3)!=0)){
	$data['dashboard_data']=$this->uri->segment(3);

}
else{
	$data['dashboard_data']=$this->session->userdata();
}
$email=$data['dashboard_data'];
$email=$email['email'];

  $data['time_slot'] = $this->Model_category->personal_test_time_slot(3);

   $test_time_slot=$data['time_slot'];

   $time_slot=$test_time_slot['test_time_slot'];
   // echo "<pre>";print_r($time_slot);exit;
    //$time_slot=15;
     $test_name='Work Personality Index';

       $insert_questions_data = array(
        array(

              'questions_id' => $name[0]['questions_id'] ,
                'name' => $name[0]['name'],
                'dimensions_name' =>$name[0]['dimensions_name'],

                'value'=>$name[0]['value'],
                'categories_id'=>$name[0]['categories_id'],
                 'date_created'    => $name[0]['date_created'],
                  'date_modified'    => $name[0]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',

                'time_slot'=>$time_slot,

            ),

             array(

               'questions_id' => $name[1]['questions_id'] ,
                'name' => $name[1]['name'],
                'dimensions_name' =>$name[1]['dimensions_name'],

                'value'=>$name[1]['value'],
                'categories_id'=>$name[1]['categories_id'],
                 'date_created'    => $name[1]['date_created'],
                  'date_modified'    => $name[1]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[2]['questions_id'] ,
                'name' => $name[2]['name'],
                'dimensions_name' =>$name[2]['dimensions_name'],

                'value'=>$name[2]['value'],
                'categories_id'=>$name[2]['categories_id'],
                 'date_created'    => $name[2]['date_created'],
                  'date_modified'    => $name[2]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[3]['questions_id'] ,
                'name' => $name[3]['name'],
                'dimensions_name' =>$name[3]['dimensions_name'],

                'value'=>$name[3]['value'],
                'categories_id'=>$name[3]['categories_id'],
                 'date_created'    => $name[3]['date_created'],
                  'date_modified'    => $name[3]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_id' => $name[4]['questions_id'] ,
                'name' => $name[4]['name'],
                'dimensions_name' =>$name[4]['dimensions_name'],

                'value'=>$name[4]['value'],
                'categories_id'=>$name[4]['categories_id'],
                 'date_created'    => $name[4]['date_created'],
                  'date_modified'    => $name[4]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),

            // 5
             array(

               'questions_id' => $name[5]['questions_id'] ,
                'name' => $name[5]['name'],
                'dimensions_name' =>$name[5]['dimensions_name'],

                'value'=>$name[5]['value'],
                'categories_id'=>$name[5]['categories_id'],
                 'date_created'    => $name[5]['date_created'],
                  'date_modified'    => $name[5]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',

                'time_slot'=>$time_slot,

            ),

             array(

               'questions_id' => $name[6]['questions_id'] ,
                'name' => $name[6]['name'],
                'dimensions_name' =>$name[6]['dimensions_name'],

                'value'=>$name[6]['value'],
                'categories_id'=>$name[6]['categories_id'],
                 'date_created'    => $name[6]['date_created'],
                  'date_modified'    => $name[6]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[7]['questions_id'] ,
                'name' => $name[7]['name'],
                'dimensions_name' =>$name[7]['dimensions_name'],

                'value'=>$name[7]['value'],
                'categories_id'=>$name[7]['categories_id'],
                 'date_created'    => $name[7]['date_created'],
                  'date_modified'    => $name[7]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[8]['questions_id'] ,
                'name' => $name[8]['name'],
                'dimensions_name' =>$name[8]['dimensions_name'],

                'value'=>$name[8]['value'],
                'categories_id'=>$name[8]['categories_id'],
                 'date_created'    => $name[8]['date_created'],
                  'date_modified'    => $name[8]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_id' => $name[9]['questions_id'] ,
                'name' => $name[9]['name'],
                'dimensions_name' =>$name[9]['dimensions_name'],

                'value'=>$name[9]['value'],
                'categories_id'=>$name[9]['categories_id'],
                 'date_created'    => $name[9]['date_created'],
                  'date_modified'    => $name[9]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),
            // 10
             array(

               'questions_id' => $name[10]['questions_id'] ,
                'name' => $name[10]['name'],
                'dimensions_name' =>$name[10]['dimensions_name'],

                'value'=>$name[10]['value'],
                'categories_id'=>$name[10]['categories_id'],
                 'date_created'    => $name[10]['date_created'],
                  'date_modified'    => $name[10]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',

                'time_slot'=>$time_slot,

            ),

             array(

               'questions_id' => $name[11]['questions_id'] ,
                'name' => $name[11]['name'],
                'dimensions_name' =>$name[11]['dimensions_name'],

                'value'=>$name[11]['value'],
                'categories_id'=>$name[11]['categories_id'],
                 'date_created'    => $name[11]['date_created'],
                  'date_modified'    => $name[11]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[12]['questions_id'] ,
                'name' => $name[12]['name'],
                'dimensions_name' =>$name[12]['dimensions_name'],

                'value'=>$name[12]['value'],
                'categories_id'=>$name[12]['categories_id'],
                 'date_created'    => $name[12]['date_created'],
                  'date_modified'    => $name[12]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[13]['questions_id'] ,
                'name' => $name[13]['name'],
                'dimensions_name' =>$name[13]['dimensions_name'],

                'value'=>$name[13]['value'],
                'categories_id'=>$name[13]['categories_id'],
                 'date_created'    => $name[13]['date_created'],
                  'date_modified'    => $name[13]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_id' => $name[14]['questions_id'] ,
                'name' => $name[14]['name'],
                'dimensions_name' =>$name[14]['dimensions_name'],

                'value'=>$name[14]['value'],
                'categories_id'=>$name[14]['categories_id'],
                 'date_created'    => $name[14]['date_created'],
                  'date_modified'    => $name[14]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),
            // 15
             array(

               'questions_id' => $name[15]['questions_id'] ,
                'name' => $name[15]['name'],
                'dimensions_name' =>$name[15]['dimensions_name'],

                'value'=>$name[15]['value'],
                'categories_id'=>$name[15]['categories_id'],
                 'date_created'    => $name[15]['date_created'],
                  'date_modified'    => $name[15]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',

                'time_slot'=>$time_slot,

            ),

             array(

               'questions_id' => $name[16]['questions_id'] ,
                'name' => $name[16]['name'],
                'dimensions_name' =>$name[16]['dimensions_name'],

                'value'=>$name[16]['value'],
                'categories_id'=>$name[16]['categories_id'],
                 'date_created'    => $name[16]['date_created'],
                  'date_modified'    => $name[16]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[17]['questions_id'] ,
                'name' => $name[17]['name'],
                'dimensions_name' =>$name[17]['dimensions_name'],

                'value'=>$name[17]['value'],
                'categories_id'=>$name[17]['categories_id'],
                 'date_created'    => $name[17]['date_created'],
                  'date_modified'    => $name[17]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[18]['questions_id'] ,
                'name' => $name[18]['name'],
                'dimensions_name' =>$name[18]['dimensions_name'],

                'value'=>$name[18]['value'],
                'categories_id'=>$name[18]['categories_id'],
                 'date_created'    => $name[18]['date_created'],
                  'date_modified'    => $name[18]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_id' => $name[19]['questions_id'] ,
                'name' => $name[19]['name'],
                'dimensions_name' =>$name[19]['dimensions_name'],

                'value'=>$name[19]['value'],
                'categories_id'=>$name[19]['categories_id'],
                 'date_created'    => $name[19]['date_created'],
                  'date_modified'    => $name[19]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[20]['questions_id'] ,
                'name' => $name[20]['name'],
                'dimensions_name' =>$name[20]['dimensions_name'],

                'value'=>$name[20]['value'],
                'categories_id'=>$name[20]['categories_id'],
                 'date_created'    => $name[20]['date_created'],
                  'date_modified'    => $name[20]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),

        //   21


        array(

               'questions_id' => $name[21]['questions_id'] ,
                'name' => $name[21]['name'],
                'dimensions_name' =>$name[21]['dimensions_name'],

                'value'=>$name[21]['value'],
                'categories_id'=>$name[21]['categories_id'],
                 'date_created'    => $name[21]['date_created'],
                  'date_modified'    => $name[21]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',

                'time_slot'=>$time_slot,

            ),

             array(

               'questions_id' => $name[22]['questions_id'] ,
                'name' => $name[22]['name'],
                'dimensions_name' =>$name[22]['dimensions_name'],

                'value'=>$name[22]['value'],
                'categories_id'=>$name[22]['categories_id'],
                 'date_created'    => $name[22]['date_created'],
                  'date_modified'    => $name[22]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[23]['questions_id'] ,
                'name' => $name[23]['name'],
                'dimensions_name' =>$name[23]['dimensions_name'],

                'value'=>$name[23]['value'],
                'categories_id'=>$name[23]['categories_id'],
                 'date_created'    => $name[23]['date_created'],
                  'date_modified'    => $name[23]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[24]['questions_id'] ,
                'name' => $name[24]['name'],
                'dimensions_name' =>$name[24]['dimensions_name'],

                'value'=>$name[24]['value'],
                'categories_id'=>$name[24]['categories_id'],
                 'date_created'    => $name[24]['date_created'],
                  'date_modified'    => $name[24]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_id' => $name[25]['questions_id'] ,
                'name' => $name[25]['name'],
                'dimensions_name' =>$name[25]['dimensions_name'],

                'value'=>$name[25]['value'],
                'categories_id'=>$name[25]['categories_id'],
                 'date_created'    => $name[25]['date_created'],
                  'date_modified'    => $name[25]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),

            // 5
             array(

               'questions_id' => $name[26]['questions_id'] ,
                'name' => $name[26]['name'],
                'dimensions_name' =>$name[26]['dimensions_name'],

                'value'=>$name[26]['value'],
                'categories_id'=>$name[26]['categories_id'],
                 'date_created'    => $name[26]['date_created'],
                  'date_modified'    => $name[26]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',

                'time_slot'=>$time_slot,

            ),

             array(

               'questions_id' => $name[27]['questions_id'] ,
                'name' => $name[27]['name'],
                'dimensions_name' =>$name[27]['dimensions_name'],

                'value'=>$name[27]['value'],
                'categories_id'=>$name[27]['categories_id'],
                 'date_created'    => $name[27]['date_created'],
                  'date_modified'    => $name[27]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[28]['questions_id'] ,
                'name' => $name[28]['name'],
                'dimensions_name' =>$name[28]['dimensions_name'],

                'value'=>$name[28]['value'],
                'categories_id'=>$name[28]['categories_id'],
                 'date_created'    => $name[28]['date_created'],
                  'date_modified'    => $name[28]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[29]['questions_id'] ,
                'name' => $name[29]['name'],
                'dimensions_name' =>$name[29]['dimensions_name'],

                'value'=>$name[29]['value'],
                'categories_id'=>$name[29]['categories_id'],
                 'date_created'    => $name[29]['date_created'],
                  'date_modified'    => $name[29]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_id' => $name[30]['questions_id'] ,
                'name' => $name[30]['name'],
                'dimensions_name' =>$name[30]['dimensions_name'],

                'value'=>$name[30]['value'],
                'categories_id'=>$name[30]['categories_id'],
                 'date_created'    => $name[30]['date_created'],
                  'date_modified'    => $name[30]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),
            //31
             array(

               'questions_id' => $name[31]['questions_id'] ,
                'name' => $name[31]['name'],
                'dimensions_name' =>$name[31]['dimensions_name'],

                'value'=>$name[31]['value'],
                'categories_id'=>$name[31]['categories_id'],
                 'date_created'    => $name[31]['date_created'],
                  'date_modified'    => $name[31]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',

                'time_slot'=>$time_slot,

            ),
            // 32

            array(

               'questions_id' => $name[32]['questions_id'] ,
                'name' => $name[32]['name'],
                'dimensions_name' =>$name[32]['dimensions_name'],

                'value'=>$name[32]['value'],
                'categories_id'=>$name[32]['categories_id'],
                 'date_created'    => $name[32]['date_created'],
                  'date_modified'    => $name[32]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',

                'time_slot'=>$time_slot,

            ),

             array(

               'questions_id' => $name[33]['questions_id'] ,
                'name' => $name[33]['name'],
                'dimensions_name' =>$name[33]['dimensions_name'],

                'value'=>$name[33]['value'],
                'categories_id'=>$name[33]['categories_id'],
                 'date_created'    => $name[33]['date_created'],
                  'date_modified'    => $name[33]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[34]['questions_id'] ,
                'name' => $name[34]['name'],
                'dimensions_name' =>$name[34]['dimensions_name'],

                'value'=>$name[34]['value'],
                'categories_id'=>$name[34]['categories_id'],
                 'date_created'    => $name[34]['date_created'],
                  'date_modified'    => $name[34]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[35]['questions_id'] ,
                'name' => $name[35]['name'],
                'dimensions_name' =>$name[35]['dimensions_name'],

                'value'=>$name[35]['value'],
                'categories_id'=>$name[35]['categories_id'],
                 'date_created'    => $name[35]['date_created'],
                  'date_modified'    => $name[35]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_id' => $name[36]['questions_id'] ,
                'name' => $name[36]['name'],
                'dimensions_name' =>$name[36]['dimensions_name'],

                'value'=>$name[36]['value'],
                'categories_id'=>$name[36]['categories_id'],
                 'date_created'    => $name[36]['date_created'],
                  'date_modified'    => $name[36]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),

            // 5
             array(

               'questions_id' => $name[37]['questions_id'] ,
                'name' => $name[37]['name'],
                'dimensions_name' =>$name[37]['dimensions_name'],

                'value'=>$name[37]['value'],
                'categories_id'=>$name[37]['categories_id'],
                 'date_created'    => $name[37]['date_created'],
                  'date_modified'    => $name[37]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',

                'time_slot'=>$time_slot,

            ),

             array(

               'questions_id' => $name[38]['questions_id'] ,
                'name' => $name[38]['name'],
                'dimensions_name' =>$name[38]['dimensions_name'],

                'value'=>$name[38]['value'],
                'categories_id'=>$name[38]['categories_id'],
                 'date_created'    => $name[38]['date_created'],
                  'date_modified'    => $name[38]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[39]['questions_id'] ,
                'name' => $name[39]['name'],
                'dimensions_name' =>$name[39]['dimensions_name'],

                'value'=>$name[39]['value'],
                'categories_id'=>$name[39]['categories_id'],
                 'date_created'    => $name[39]['date_created'],
                  'date_modified'    => $name[39]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[40]['questions_id'] ,
                'name' => $name[40]['name'],
                'dimensions_name' =>$name[40]['dimensions_name'],

                'value'=>$name[40]['value'],
                'categories_id'=>$name[40]['categories_id'],
                 'date_created'    => $name[40]['date_created'],
                  'date_modified'    => $name[40]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_id' => $name[41]['questions_id'] ,
                'name' => $name[41]['name'],
                'dimensions_name' =>$name[41]['dimensions_name'],

                'value'=>$name[41]['value'],
                'categories_id'=>$name[41]['categories_id'],
                 'date_created'    => $name[41]['date_created'],
                  'date_modified'    => $name[41]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),
            // 10
             array(

               'questions_id' => $name[42]['questions_id'] ,
                'name' => $name[42]['name'],
                'dimensions_name' =>$name[42]['dimensions_name'],

                'value'=>$name[42]['value'],
                'categories_id'=>$name[42]['categories_id'],
                 'date_created'    => $name[42]['date_created'],
                  'date_modified'    => $name[42]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',

                'time_slot'=>$time_slot,

            ),
            // 43

            array(

               'questions_id' => $name[43]['questions_id'] ,
                'name' => $name[43]['name'],
                'dimensions_name' =>$name[43]['dimensions_name'],

                'value'=>$name[43]['value'],
                'categories_id'=>$name[43]['categories_id'],
                 'date_created'    => $name[43]['date_created'],
                  'date_modified'    => $name[43]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',

                'time_slot'=>$time_slot,

            ),

             array(

               'questions_id' => $name[44]['questions_id'] ,
                'name' => $name[44]['name'],
                'dimensions_name' =>$name[44]['dimensions_name'],

                'value'=>$name[44]['value'],
                'categories_id'=>$name[44]['categories_id'],
                 'date_created'    => $name[44]['date_created'],
                  'date_modified'    => $name[44]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[45]['questions_id'] ,
                'name' => $name[45]['name'],
                'dimensions_name' =>$name[45]['dimensions_name'],

                'value'=>$name[45]['value'],
                'categories_id'=>$name[45]['categories_id'],
                 'date_created'    => $name[45]['date_created'],
                  'date_modified'    => $name[45]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[46]['questions_id'] ,
                'name' => $name[46]['name'],
                'dimensions_name' =>$name[46]['dimensions_name'],

                'value'=>$name[46]['value'],
                'categories_id'=>$name[46]['categories_id'],
                 'date_created'    => $name[46]['date_created'],
                  'date_modified'    => $name[46]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_id' => $name[47]['questions_id'] ,
                'name' => $name[47]['name'],
                'dimensions_name' =>$name[47]['dimensions_name'],

                'value'=>$name[47]['value'],
                'categories_id'=>$name[47]['categories_id'],
                 'date_created'    => $name[47]['date_created'],
                  'date_modified'    => $name[47]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),

            // 5
             array(

               'questions_id' => $name[48]['questions_id'] ,
                'name' => $name[48]['name'],
                'dimensions_name' =>$name[48]['dimensions_name'],

                'value'=>$name[48]['value'],
                'categories_id'=>$name[48]['categories_id'],
                 'date_created'    => $name[48]['date_created'],
                  'date_modified'    => $name[48]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',

                'time_slot'=>$time_slot,

            ),

             array(

               'questions_id' => $name[49]['questions_id'] ,
                'name' => $name[49]['name'],
                'dimensions_name' =>$name[49]['dimensions_name'],

                'value'=>$name[49]['value'],
                'categories_id'=>$name[49]['categories_id'],
                 'date_created'    => $name[49]['date_created'],
                  'date_modified'    => $name[49]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[50]['questions_id'] ,
                'name' => $name[50]['name'],
                'dimensions_name' =>$name[50]['dimensions_name'],
               // //  'sub_categories_names' =>$name[50]['sub_categories_names'],
                'value'=>$name[50]['value'],
                'categories_id'=>$name[50]['categories_id'],
                 'date_created'    => $name[50]['date_created'],
                  'date_modified'    => $name[50]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[51]['questions_id'] ,
                'name' => $name[51]['name'],
                'dimensions_name' =>$name[51]['dimensions_name'],
               //  'sub_categories_names' =>$name[51]['sub_categories_names'],
                'value'=>$name[51]['value'],
                'categories_id'=>$name[51]['categories_id'],
                 'date_created'    => $name[51]['date_created'],
                  'date_modified'    => $name[51]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_id' => $name[52]['questions_id'] ,
                'name' => $name[52]['name'],
                'dimensions_name' =>$name[52]['dimensions_name'],
               //  'sub_categories_names' =>$name[52]['sub_categories_names'],
                'value'=>$name[52]['value'],
                'categories_id'=>$name[52]['categories_id'],
                 'date_created'    => $name[52]['date_created'],
                  'date_modified'    => $name[52]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),
            // 10
             array(

               'questions_id' => $name[53]['questions_id'] ,
                'name' => $name[53]['name'],
                'dimensions_name' =>$name[53]['dimensions_name'],
               //  'sub_categories_names' =>$name[53]['sub_categories_names'],
                'value'=>$name[53]['value'],
                'categories_id'=>$name[53]['categories_id'],
                 'date_created'    => $name[53]['date_created'],
                  'date_modified'    => $name[53]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',

                'time_slot'=>$time_slot,

            ),
            // 54

            array(

               'questions_id' => $name[54]['questions_id'] ,
                'name' => $name[54]['name'],
                'dimensions_name' =>$name[54]['dimensions_name'],
               //  'sub_categories_names' =>$name[54]['sub_categories_names'],
                'value'=>$name[54]['value'],
                'categories_id'=>$name[54]['categories_id'],
                 'date_created'    => $name[54]['date_created'],
                  'date_modified'    => $name[54]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',

                'time_slot'=>$time_slot,

            ),

             array(

               'questions_id' => $name[55]['questions_id'] ,
                'name' => $name[55]['name'],
                'dimensions_name' =>$name[55]['dimensions_name'],
               //  'sub_categories_names' =>$name[55]['sub_categories_names'],
                'value'=>$name[55]['value'],
                'categories_id'=>$name[55]['categories_id'],
                 'date_created'    => $name[55]['date_created'],
                  'date_modified'    => $name[55]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[56]['questions_id'] ,
                'name' => $name[56]['name'],
                'dimensions_name' =>$name[56]['dimensions_name'],
               //  'sub_categories_names' =>$name[56]['sub_categories_names'],
                'value'=>$name[56]['value'],
                'categories_id'=>$name[56]['categories_id'],
                 'date_created'    => $name[56]['date_created'],
                  'date_modified'    => $name[56]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[57]['questions_id'] ,
                'name' => $name[57]['name'],
                'dimensions_name' =>$name[57]['dimensions_name'],
               //  'sub_categories_names' =>$name[57]['sub_categories_names'],
                'value'=>$name[57]['value'],
                'categories_id'=>$name[57]['categories_id'],
                 'date_created'    => $name[57]['date_created'],
                  'date_modified'    => $name[57]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_id' => $name[58]['questions_id'] ,
                'name' => $name[58]['name'],
                'dimensions_name' =>$name[58]['dimensions_name'],
               //  'sub_categories_names' =>$name[58]['sub_categories_names'],
                'value'=>$name[58]['value'],
                'categories_id'=>$name[58]['categories_id'],
                 'date_created'    => $name[58]['date_created'],
                  'date_modified'    => $name[58]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),

            // 5
             array(

               'questions_id' => $name[59]['questions_id'] ,
                'name' => $name[59]['name'],
                'dimensions_name' =>$name[59]['dimensions_name'],
               //  'sub_categories_names' =>$name[59]['sub_categories_names'],
                'value'=>$name[59]['value'],
                'categories_id'=>$name[59]['categories_id'],
                 'date_created'    => $name[59]['date_created'],
                  'date_modified'    => $name[59]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',

                'time_slot'=>$time_slot,

            ),

             array(

               'questions_id' => $name[60]['questions_id'] ,
                'name' => $name[60]['name'],
                'dimensions_name' =>$name[60]['dimensions_name'],
               //  'sub_categories_names' =>$name[60]['sub_categories_names'],
                'value'=>$name[60]['value'],
                'categories_id'=>$name[60]['categories_id'],
                 'date_created'    => $name[60]['date_created'],
                  'date_modified'    => $name[60]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[61]['questions_id'] ,
                'name' => $name[61]['name'],
                'dimensions_name' =>$name[61]['dimensions_name'],
               //  'sub_categories_names' =>$name[61]['sub_categories_names'],
                'value'=>$name[61]['value'],
                'categories_id'=>$name[61]['categories_id'],
                 'date_created'    => $name[61]['date_created'],
                  'date_modified'    => $name[61]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[62]['questions_id'] ,
                'name' => $name[62]['name'],
                'dimensions_name' =>$name[62]['dimensions_name'],
               //  'sub_categories_names' =>$name[62]['sub_categories_names'],
                'value'=>$name[62]['value'],
                'categories_id'=>$name[62]['categories_id'],
                 'date_created'    => $name[62]['date_created'],
                  'date_modified'    => $name[62]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_id' => $name[63]['questions_id'] ,
                'name' => $name[63]['name'],
                'dimensions_name' =>$name[63]['dimensions_name'],
               //  'sub_categories_names' =>$name[63]['sub_categories_names'],
                'value'=>$name[63]['value'],
                'categories_id'=>$name[63]['categories_id'],
                 'date_created'    => $name[63]['date_created'],
                  'date_modified'    => $name[63]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[64]['questions_id'] ,
                'name' => $name[64]['name'],
                'dimensions_name' =>$name[64]['dimensions_name'],
               //  'sub_categories_names' =>$name[64]['sub_categories_names'],
                'value'=>$name[64]['value'],
                'categories_id'=>$name[64]['categories_id'],
                 'date_created'    => $name[64]['date_created'],
                  'date_modified'    => $name[64]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',

                'time_slot'=>$time_slot,

            ),
            //65

             array(

               'questions_id' => $name[65]['questions_id'] ,
                'name' => $name[65]['name'],
                'dimensions_name' =>$name[65]['dimensions_name'],
               //  'sub_categories_names' =>$name[65]['sub_categories_names'],
                'value'=>$name[65]['value'],
                'categories_id'=>$name[65]['categories_id'],
                 'date_created'    => $name[65]['date_created'],
                  'date_modified'    => $name[65]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[66]['questions_id'] ,
                'name' => $name[66]['name'],
                'dimensions_name' =>$name[66]['dimensions_name'],
               //  'sub_categories_names' =>$name[66]['sub_categories_names'],
                'value'=>$name[66]['value'],
                'categories_id'=>$name[66]['categories_id'],
                 'date_created'    => $name[66]['date_created'],
                  'date_modified'    => $name[66]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[67]['questions_id'] ,
                'name' => $name[67]['name'],
                'dimensions_name' =>$name[67]['dimensions_name'],
               //  'sub_categories_names' =>$name[67]['sub_categories_names'],
                'value'=>$name[67]['value'],
                'categories_id'=>$name[67]['categories_id'],
                 'date_created'    => $name[67]['date_created'],
                  'date_modified'    => $name[67]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_id' => $name[68]['questions_id'] ,
                'name' => $name[68]['name'],
                'dimensions_name' =>$name[68]['dimensions_name'],
               //  'sub_categories_names' =>$name[68]['sub_categories_names'],
               //  'sub_categories_names' =>$name[68]['sub_categories_names'],
                'value'=>$name[68]['value'],
                'categories_id'=>$name[68]['categories_id'],
                 'date_created'    => $name[68]['date_created'],
                  'date_modified'    => $name[68]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),
            // 10
             array(

               'questions_id' => $name[69]['questions_id'] ,
                'name' => $name[69]['name'],
                'dimensions_name' =>$name[69]['dimensions_name'],
               //  'sub_categories_names' =>$name[69]['sub_categories_names'],
                'value'=>$name[69]['value'],
                'categories_id'=>$name[69]['categories_id'],
                 'date_created'    => $name[69]['date_created'],
                  'date_modified'    => $name[69]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',

                'time_slot'=>$time_slot,

            ),
            //70

            array(

               'questions_id' => $name[70]['questions_id'] ,
                'name' => $name[70]['name'],
                'dimensions_name' =>$name[70]['dimensions_name'],
               //  'sub_categories_names' =>$name[70]['sub_categories_names'],
                'value'=>$name[70]['value'],
                'categories_id'=>$name[70]['categories_id'],
                 'date_created'    => $name[70]['date_created'],
                  'date_modified'    => $name[70]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[71]['questions_id'] ,
                'name' => $name[71]['name'],
                'dimensions_name' =>$name[71]['dimensions_name'],
               //  'sub_categories_names' =>$name[71]['sub_categories_names'],
                'value'=>$name[71]['value'],
                'categories_id'=>$name[71]['categories_id'],
                 'date_created'    => $name[71]['date_created'],
                  'date_modified'    => $name[71]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[72]['questions_id'] ,
                'name' => $name[72]['name'],
                'dimensions_name' =>$name[72]['dimensions_name'],
               //  'sub_categories_names' =>$name[72]['sub_categories_names'],
                'value'=>$name[72]['value'],
                'categories_id'=>$name[72]['categories_id'],
                 'date_created'    => $name[72]['date_created'],
                  'date_modified'    => $name[72]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_id' => $name[73]['questions_id'] ,
                'name' => $name[73]['name'],
                'dimensions_name' =>$name[73]['dimensions_name'],
               //  'sub_categories_names' =>$name[73]['sub_categories_names'],
                'value'=>$name[73]['value'],
                'categories_id'=>$name[73]['categories_id'],
                 'date_created'    => $name[73]['date_created'],
                  'date_modified'    => $name[73]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[74]['questions_id'] ,
                'name' => $name[74]['name'],
                'dimensions_name' =>$name[74]['dimensions_name'],
               //  'sub_categories_names' =>$name[74]['sub_categories_names'],
                'value'=>$name[74]['value'],
                'categories_id'=>$name[74]['categories_id'],
                 'date_created'    => $name[74]['date_created'],
                  'date_modified'    => $name[74]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',

                'time_slot'=>$time_slot,

            ),
            //65

             array(

               'questions_id' => $name[75]['questions_id'] ,
                'name' => $name[75]['name'],
                'dimensions_name' =>$name[75]['dimensions_name'],
               //  'sub_categories_names' =>$name[75]['sub_categories_names'],
                'value'=>$name[75]['value'],
                'categories_id'=>$name[75]['categories_id'],
                 'date_created'    => $name[75]['date_created'],
                  'date_modified'    => $name[75]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[76]['questions_id'] ,
                'name' => $name[76]['name'],
                'dimensions_name' =>$name[76]['dimensions_name'],
               //  'sub_categories_names' =>$name[76]['sub_categories_names'],
                'value'=>$name[76]['value'],
                'categories_id'=>$name[76]['categories_id'],
                 'date_created'    => $name[76]['date_created'],
                  'date_modified'    => $name[76]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[77]['questions_id'] ,
                'name' => $name[77]['name'],
                'dimensions_name' =>$name[77]['dimensions_name'],
               //  'sub_categories_names' =>$name[77]['sub_categories_names'],
                'value'=>$name[77]['value'],
                'categories_id'=>$name[77]['categories_id'],
                 'date_created'    => $name[77]['date_created'],
                  'date_modified'    => $name[77]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_id' => $name[78]['questions_id'] ,
                'name' => $name[78]['name'],
                'dimensions_name' =>$name[78]['dimensions_name'],
               //  'sub_categories_names' =>$name[78]['sub_categories_names'],
               //  'sub_categories_names' =>$name[78]['sub_categories_names'],
                'value'=>$name[78]['value'],
                'categories_id'=>$name[78]['categories_id'],
                 'date_created'    => $name[78]['date_created'],
                  'date_modified'    => $name[78]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),
            // 79
             array(

               'questions_id' => $name[79]['questions_id'] ,
                'name' => $name[79]['name'],
                'dimensions_name' =>$name[79]['dimensions_name'],
               //  'sub_categories_names' =>$name[79]['sub_categories_names'],
                'value'=>$name[79]['value'],
                'categories_id'=>$name[79]['categories_id'],
                 'date_created'    => $name[79]['date_created'],
                  'date_modified'    => $name[79]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',

                'time_slot'=>$time_slot,

            ),

            //80

            array(

               'questions_id' => $name[80]['questions_id'] ,
                'name' => $name[80]['name'],
                'dimensions_name' =>$name[80]['dimensions_name'],
               //  'sub_categories_names' =>$name[80]['sub_categories_names'],
                'value'=>$name[80]['value'],
                'categories_id'=>$name[80]['categories_id'],
                 'date_created'    => $name[80]['date_created'],
                  'date_modified'    => $name[80]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[81]['questions_id'] ,
                'name' => $name[81]['name'],
                'dimensions_name' =>$name[81]['dimensions_name'],
               //  'sub_categories_names' =>$name[81]['sub_categories_names'],
                'value'=>$name[81]['value'],
                'categories_id'=>$name[81]['categories_id'],
                 'date_created'    => $name[81]['date_created'],
                  'date_modified'    => $name[81]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[82]['questions_id'] ,
                'name' => $name[82]['name'],
                'dimensions_name' =>$name[82]['dimensions_name'],
               //  'sub_categories_names' =>$name[82]['sub_categories_names'],
                'value'=>$name[82]['value'],
                'categories_id'=>$name[82]['categories_id'],
                 'date_created'    => $name[82]['date_created'],
                  'date_modified'    => $name[82]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_id' => $name[83]['questions_id'] ,
                'name' => $name[83]['name'],
                'dimensions_name' =>$name[83]['dimensions_name'],
               //  'sub_categories_names' =>$name[83]['sub_categories_names'],
                'value'=>$name[83]['value'],
                'categories_id'=>$name[83]['categories_id'],
                 'date_created'    => $name[83]['date_created'],
                  'date_modified'    => $name[83]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[84]['questions_id'] ,
                'name' => $name[84]['name'],
                'dimensions_name' =>$name[84]['dimensions_name'],
               //  'sub_categories_names' =>$name[84]['sub_categories_names'],
                'value'=>$name[84]['value'],
                'categories_id'=>$name[84]['categories_id'],
                 'date_created'    => $name[84]['date_created'],
                  'date_modified'    => $name[84]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',

                'time_slot'=>$time_slot,

            ),
            //85

             array(

               'questions_id' => $name[85]['questions_id'] ,
                'name' => $name[85]['name'],
                'dimensions_name' =>$name[85]['dimensions_name'],
               //  'sub_categories_names' =>$name[85]['sub_categories_names'],
                'value'=>$name[85]['value'],
                'categories_id'=>$name[85]['categories_id'],
                 'date_created'    => $name[85]['date_created'],
                  'date_modified'    => $name[85]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[86]['questions_id'] ,
                'name' => $name[86]['name'],
                'dimensions_name' =>$name[86]['dimensions_name'],
               //  'sub_categories_names' =>$name[86]['sub_categories_names'],
                'value'=>$name[86]['value'],
                'categories_id'=>$name[86]['categories_id'],
                 'date_created'    => $name[86]['date_created'],
                  'date_modified'    => $name[86]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[87]['questions_id'] ,
                'name' => $name[87]['name'],
                'dimensions_name' =>$name[87]['dimensions_name'],
               //  'sub_categories_names' =>$name[87]['sub_categories_names'],
                'value'=>$name[87]['value'],
                'categories_id'=>$name[87]['categories_id'],
                 'date_created'    => $name[87]['date_created'],
                  'date_modified'    => $name[87]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_id' => $name[88]['questions_id'] ,
                'name' => $name[88]['name'],
                'dimensions_name' =>$name[88]['dimensions_name'],
               //  'sub_categories_names' =>$name[88]['sub_categories_names'],
               //  'sub_categories_names' =>$name[88]['sub_categories_names'],
                'value'=>$name[88]['value'],
                'categories_id'=>$name[88]['categories_id'],
                 'date_created'    => $name[88]['date_created'],
                  'date_modified'    => $name[88]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),
            // 89
             array(

               'questions_id' => $name[89]['questions_id'] ,
                'name' => $name[89]['name'],
                'dimensions_name' =>$name[89]['dimensions_name'],
               //  'sub_categories_names' =>$name[89]['sub_categories_names'],
                'value'=>$name[89]['value'],
                'categories_id'=>$name[89]['categories_id'],
                 'date_created'    => $name[89]['date_created'],
                  'date_modified'    => $name[89]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',

                'time_slot'=>$time_slot,

            ),

            //90
            array(

               'questions_id' => $name[90]['questions_id'] ,
                'name' => $name[90]['name'],
                'dimensions_name' =>$name[90]['dimensions_name'],
               //  'sub_categories_names' =>$name[90]['sub_categories_names'],
                'value'=>$name[90]['value'],
                'categories_id'=>$name[90]['categories_id'],
                 'date_created'    => $name[90]['date_created'],
                  'date_modified'    => $name[90]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[91]['questions_id'] ,
                'name' => $name[91]['name'],
                'dimensions_name' =>$name[91]['dimensions_name'],
               //  'sub_categories_names' =>$name[91]['sub_categories_names'],
                'value'=>$name[91]['value'],
                'categories_id'=>$name[91]['categories_id'],
                 'date_created'    => $name[91]['date_created'],
                  'date_modified'    => $name[91]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[92]['questions_id'] ,
                'name' => $name[92]['name'],
                'dimensions_name' =>$name[92]['dimensions_name'],
               //  'sub_categories_names' =>$name[92]['sub_categories_names'],
                'value'=>$name[92]['value'],
                'categories_id'=>$name[92]['categories_id'],
                 'date_created'    => $name[92]['date_created'],
                  'date_modified'    => $name[92]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_id' => $name[93]['questions_id'] ,
                'name' => $name[93]['name'],
                'dimensions_name' =>$name[93]['dimensions_name'],
               //  'sub_categories_names' =>$name[93]['sub_categories_names'],
                'value'=>$name[93]['value'],
                'categories_id'=>$name[93]['categories_id'],
                 'date_created'    => $name[93]['date_created'],
                  'date_modified'    => $name[93]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[94]['questions_id'] ,
                'name' => $name[94]['name'],
                'dimensions_name' =>$name[94]['dimensions_name'],
               //  'sub_categories_names' =>$name[94]['sub_categories_names'],
                'value'=>$name[94]['value'],
                'categories_id'=>$name[94]['categories_id'],
                 'date_created'    => $name[94]['date_created'],
                  'date_modified'    => $name[94]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',

                'time_slot'=>$time_slot,

            ),
            //95

             array(

               'questions_id' => $name[95]['questions_id'] ,
                'name' => $name[95]['name'],
                'dimensions_name' =>$name[95]['dimensions_name'],
               //  'sub_categories_names' =>$name[95]['sub_categories_names'],
                'value'=>$name[95]['value'],
                'categories_id'=>$name[95]['categories_id'],
                 'date_created'    => $name[95]['date_created'],
                  'date_modified'    => $name[95]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[96]['questions_id'] ,
                'name' => $name[96]['name'],
                'dimensions_name' =>$name[96]['dimensions_name'],
               //  'sub_categories_names' =>$name[96]['sub_categories_names'],
                'value'=>$name[96]['value'],
                'categories_id'=>$name[96]['categories_id'],
                 'date_created'    => $name[96]['date_created'],
                  'date_modified'    => $name[96]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[97]['questions_id'] ,
                'name' => $name[97]['name'],
                'dimensions_name' =>$name[97]['dimensions_name'],
               //  'sub_categories_names' =>$name[97]['sub_categories_names'],
                'value'=>$name[97]['value'],
                'categories_id'=>$name[97]['categories_id'],
                 'date_created'    => $name[97]['date_created'],
                  'date_modified'    => $name[97]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_id' => $name[98]['questions_id'] ,
                'name' => $name[98]['name'],
                'dimensions_name' =>$name[98]['dimensions_name'],
               //  'sub_categories_names' =>$name[98]['sub_categories_names'],
               //  'sub_categories_names' =>$name[98]['sub_categories_names'],
                'value'=>$name[98]['value'],
                'categories_id'=>$name[98]['categories_id'],
                 'date_created'    => $name[98]['date_created'],
                  'date_modified'    => $name[98]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),
            // 99
             array(

               'questions_id' => $name[99]['questions_id'] ,
                'name' => $name[99]['name'],
                'dimensions_name' =>$name[99]['dimensions_name'],
               //  'sub_categories_names' =>$name[99]['sub_categories_names'],
                'value'=>$name[99]['value'],
                'categories_id'=>$name[99]['categories_id'],
                 'date_created'    => $name[99]['date_created'],
                  'date_modified'    => $name[99]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',

                'time_slot'=>$time_slot,

            ),

            //100
            array(

               'questions_id' => $name[100]['questions_id'] ,
                'name' => $name[100]['name'],
                'dimensions_name' =>$name[100]['dimensions_name'],
               //  'sub_categories_names' =>$name[100]['sub_categories_names'],
                'value'=>$name[100]['value'],
                'categories_id'=>$name[100]['categories_id'],
                 'date_created'    => $name[100]['date_created'],
                  'date_modified'    => $name[100]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[101]['questions_id'] ,
                'name' => $name[101]['name'],
                'dimensions_name' =>$name[101]['dimensions_name'],
               //  'sub_categories_names' =>$name[101]['sub_categories_names'],
                'value'=>$name[101]['value'],
                'categories_id'=>$name[101]['categories_id'],
                 'date_created'    => $name[101]['date_created'],
                  'date_modified'    => $name[101]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[102]['questions_id'] ,
                'name' => $name[102]['name'],
                'dimensions_name' =>$name[102]['dimensions_name'],
               //  'sub_categories_names' =>$name[102]['sub_categories_names'],
                'value'=>$name[102]['value'],
                'categories_id'=>$name[102]['categories_id'],
                 'date_created'    => $name[102]['date_created'],
                  'date_modified'    => $name[102]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_id' => $name[103]['questions_id'] ,
                'name' => $name[103]['name'],
                'dimensions_name' =>$name[103]['dimensions_name'],
               //  'sub_categories_names' =>$name[103]['sub_categories_names'],
                'value'=>$name[103]['value'],
                'categories_id'=>$name[103]['categories_id'],
                 'date_created'    => $name[103]['date_created'],
                  'date_modified'    => $name[103]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[104]['questions_id'] ,
                'name' => $name[104]['name'],
                'dimensions_name' =>$name[104]['dimensions_name'],
               //  'sub_categories_names' =>$name[104]['sub_categories_names'],
                'value'=>$name[104]['value'],
                'categories_id'=>$name[104]['categories_id'],
                 'date_created'    => $name[104]['date_created'],
                  'date_modified'    => $name[104]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',

                'time_slot'=>$time_slot,

            ),



            array(

               'questions_id' => $name[105]['questions_id'] ,
                'name' => $name[105]['name'],
                'dimensions_name' =>$name[105]['dimensions_name'],
               //  'sub_categories_names' =>$name[105]['sub_categories_names'],
                'value'=>$name[105]['value'],
                'categories_id'=>$name[105]['categories_id'],
                 'date_created'    => $name[105]['date_created'],
                  'date_modified'    => $name[105]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[106]['questions_id'] ,
                'name' => $name[106]['name'],
                'dimensions_name' =>$name[106]['dimensions_name'],
               //  'sub_categories_names' =>$name[106]['sub_categories_names'],
                'value'=>$name[106]['value'],
                'categories_id'=>$name[106]['categories_id'],
                 'date_created'    => $name[106]['date_created'],
                  'date_modified'    => $name[106]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[107]['questions_id'] ,
                'name' => $name[107]['name'],
                'dimensions_name' =>$name[107]['dimensions_name'],
               //  'sub_categories_names' =>$name[107]['sub_categories_names'],
                'value'=>$name[107]['value'],
                'categories_id'=>$name[107]['categories_id'],
                 'date_created'    => $name[107]['date_created'],
                  'date_modified'    => $name[107]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_id' => $name[108]['questions_id'] ,
                'name' => $name[108]['name'],
                'dimensions_name' =>$name[108]['dimensions_name'],
               //  'sub_categories_names' =>$name[108]['sub_categories_names'],
                'value'=>$name[108]['value'],
                'categories_id'=>$name[108]['categories_id'],
                 'date_created'    => $name[108]['date_created'],
                  'date_modified'    => $name[108]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[109]['questions_id'] ,
                'name' => $name[109]['name'],
                'dimensions_name' =>$name[109]['dimensions_name'],
               //  'sub_categories_names' =>$name[109]['sub_categories_names'],
                'value'=>$name[109]['value'],
                'categories_id'=>$name[109]['categories_id'],
                 'date_created'    => $name[109]['date_created'],
                  'date_modified'    => $name[109]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',

                'time_slot'=>$time_slot,

            ),
            //65

             array(

               'questions_id' => $name[110]['questions_id'] ,
                'name' => $name[110]['name'],
                'dimensions_name' =>$name[110]['dimensions_name'],
               //  'sub_categories_names' =>$name[110]['sub_categories_names'],
                'value'=>$name[110]['value'],
                'categories_id'=>$name[110]['categories_id'],
                 'date_created'    => $name[110]['date_created'],
                  'date_modified'    => $name[110]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[111]['questions_id'] ,
                'name' => $name[111]['name'],
                'dimensions_name' =>$name[111]['dimensions_name'],
               //  'sub_categories_names' =>$name[111]['sub_categories_names'],
                'value'=>$name[111]['value'],
                'categories_id'=>$name[111]['categories_id'],
                 'date_created'    => $name[111]['date_created'],
                  'date_modified'    => $name[111]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[112]['questions_id'] ,
                'name' => $name[112]['name'],
                'dimensions_name' =>$name[112]['dimensions_name'],
               //  'sub_categories_names' =>$name[112]['sub_categories_names'],
                'value'=>$name[112]['value'],
                'categories_id'=>$name[112]['categories_id'],
                 'date_created'    => $name[112]['date_created'],
                  'date_modified'    => $name[112]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_id' => $name[113]['questions_id'] ,
                'name' => $name[113]['name'],
                'dimensions_name' =>$name[113]['dimensions_name'],
               //  'sub_categories_names' =>$name[113]['sub_categories_names'],
               //  'sub_categories_names' =>$name[113]['sub_categories_names'],
                'value'=>$name[113]['value'],
                'categories_id'=>$name[113]['categories_id'],
                 'date_created'    => $name[113]['date_created'],
                  'date_modified'    => $name[113]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),
            // 114
             array(

               'questions_id' => $name[114]['questions_id'] ,
                'name' => $name[114]['name'],
                'dimensions_name' =>$name[114]['dimensions_name'],
               //  'sub_categories_names' =>$name[114]['sub_categories_names'],
                'value'=>$name[114]['value'],
                'categories_id'=>$name[114]['categories_id'],
                 'date_created'    => $name[114]['date_created'],
                  'date_modified'    => $name[114]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',

                'time_slot'=>$time_slot,

            ),

            //115

            array(

               'questions_id' => $name[115]['questions_id'] ,
                'name' => $name[115]['name'],
                'dimensions_name' =>$name[115]['dimensions_name'],
               //  'sub_categories_names' =>$name[115]['sub_categories_names'],
                'value'=>$name[115]['value'],
                'categories_id'=>$name[115]['categories_id'],
                 'date_created'    => $name[115]['date_created'],
                  'date_modified'    => $name[115]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[116]['questions_id'] ,
                'name' => $name[116]['name'],
                'dimensions_name' =>$name[116]['dimensions_name'],
               //  'sub_categories_names' =>$name[116]['sub_categories_names'],
                'value'=>$name[116]['value'],
                'categories_id'=>$name[116]['categories_id'],
                 'date_created'    => $name[116]['date_created'],
                  'date_modified'    => $name[116]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[117]['questions_id'] ,
                'name' => $name[117]['name'],
                'dimensions_name' =>$name[117]['dimensions_name'],
               //  'sub_categories_names' =>$name[117]['sub_categories_names'],
                'value'=>$name[117]['value'],
                'categories_id'=>$name[117]['categories_id'],
                 'date_created'    => $name[117]['date_created'],
                  'date_modified'    => $name[117]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_id' => $name[118]['questions_id'] ,
                'name' => $name[118]['name'],
                'dimensions_name' =>$name[118]['dimensions_name'],
               //  'sub_categories_names' =>$name[118]['sub_categories_names'],
                'value'=>$name[118]['value'],
                'categories_id'=>$name[118]['categories_id'],
                 'date_created'    => $name[118]['date_created'],
                  'date_modified'    => $name[118]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[119]['questions_id'] ,
                'name' => $name[119]['name'],
                'dimensions_name' =>$name[119]['dimensions_name'],
               //  'sub_categories_names' =>$name[119]['sub_categories_names'],
                'value'=>$name[119]['value'],
                'categories_id'=>$name[119]['categories_id'],
                 'date_created'    => $name[119]['date_created'],
                  'date_modified'    => $name[119]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',

                'time_slot'=>$time_slot,

            ),
            //120

             array(

               'questions_id' => $name[120]['questions_id'] ,
                'name' => $name[120]['name'],
                'dimensions_name' =>$name[120]['dimensions_name'],
               //  'sub_categories_names' =>$name[120]['sub_categories_names'],
                'value'=>$name[120]['value'],
                'categories_id'=>$name[120]['categories_id'],
                 'date_created'    => $name[120]['date_created'],
                  'date_modified'    => $name[120]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[121]['questions_id'] ,
                'name' => $name[121]['name'],
                'dimensions_name' =>$name[121]['dimensions_name'],
               //  'sub_categories_names' =>$name[121]['sub_categories_names'],
                'value'=>$name[121]['value'],
                'categories_id'=>$name[121]['categories_id'],
                 'date_created'    => $name[121]['date_created'],
                  'date_modified'    => $name[121]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[122]['questions_id'] ,
                'name' => $name[122]['name'],
                'dimensions_name' =>$name[122]['dimensions_name'],
               //  'sub_categories_names' =>$name[122]['sub_categories_names'],
                'value'=>$name[122]['value'],
                'categories_id'=>$name[122]['categories_id'],
                 'date_created'    => $name[122]['date_created'],
                  'date_modified'    => $name[122]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_id' => $name[123]['questions_id'] ,
                'name' => $name[123]['name'],
                'dimensions_name' =>$name[123]['dimensions_name'],
               //  'sub_categories_names' =>$name[123]['sub_categories_names'],
               //  'sub_categories_names' =>$name[123]['sub_categories_names'],
                'value'=>$name[123]['value'],
                'categories_id'=>$name[123]['categories_id'],
                 'date_created'    => $name[123]['date_created'],
                  'date_modified'    => $name[123]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),
            // 124
             array(

               'questions_id' => $name[124]['questions_id'] ,
                'name' => $name[124]['name'],
                'dimensions_name' =>$name[124]['dimensions_name'],
               //  'sub_categories_names' =>$name[124]['sub_categories_names'],
                'value'=>$name[124]['value'],
                'categories_id'=>$name[124]['categories_id'],
                 'date_created'    => $name[124]['date_created'],
                  'date_modified'    => $name[124]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',

                'time_slot'=>$time_slot,

            ),

            //125
            array(

               'questions_id' => $name[125]['questions_id'] ,
                'name' => $name[125]['name'],
                'dimensions_name' =>$name[125]['dimensions_name'],
               //  'sub_categories_names' =>$name[125]['sub_categories_names'],
                'value'=>$name[125]['value'],
                'categories_id'=>$name[125]['categories_id'],
                 'date_created'    => $name[125]['date_created'],
                  'date_modified'    => $name[125]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[126]['questions_id'] ,
                'name' => $name[126]['name'],
                'dimensions_name' =>$name[126]['dimensions_name'],
               //  'sub_categories_names' =>$name[126]['sub_categories_names'],
                'value'=>$name[126]['value'],
                'categories_id'=>$name[126]['categories_id'],
                 'date_created'    => $name[126]['date_created'],
                  'date_modified'    => $name[126]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[127]['questions_id'] ,
                'name' => $name[127]['name'],
                'dimensions_name' =>$name[127]['dimensions_name'],
               //  'sub_categories_names' =>$name[127]['sub_categories_names'],
                'value'=>$name[127]['value'],
                'categories_id'=>$name[127]['categories_id'],
                 'date_created'    => $name[127]['date_created'],
                  'date_modified'    => $name[127]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_id' => $name[128]['questions_id'] ,
                'name' => $name[128]['name'],
                'dimensions_name' =>$name[128]['dimensions_name'],
               //  'sub_categories_names' =>$name[128]['sub_categories_names'],
                'value'=>$name[128]['value'],
                'categories_id'=>$name[128]['categories_id'],
                 'date_created'    => $name[128]['date_created'],
                  'date_modified'    => $name[128]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[129]['questions_id'] ,
                'name' => $name[129]['name'],
                'dimensions_name' =>$name[129]['dimensions_name'],
               //  'sub_categories_names' =>$name[129]['sub_categories_names'],
                'value'=>$name[129]['value'],
                'categories_id'=>$name[129]['categories_id'],
                 'date_created'    => $name[129]['date_created'],
                  'date_modified'    => $name[129]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',

                'time_slot'=>$time_slot,

            ),
            //130

             array(

               'questions_id' => $name[130]['questions_id'] ,
                'name' => $name[130]['name'],
                'dimensions_name' =>$name[130]['dimensions_name'],
               //  'sub_categories_names' =>$name[130]['sub_categories_names'],
                'value'=>$name[130]['value'],
                'categories_id'=>$name[130]['categories_id'],
                 'date_created'    => $name[130]['date_created'],
                  'date_modified'    => $name[130]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[131]['questions_id'] ,
                'name' => $name[131]['name'],
                'dimensions_name' =>$name[131]['dimensions_name'],
               //  'sub_categories_names' =>$name[131]['sub_categories_names'],
                'value'=>$name[131]['value'],
                'categories_id'=>$name[131]['categories_id'],
                 'date_created'    => $name[131]['date_created'],
                  'date_modified'    => $name[131]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[132]['questions_id'] ,
                'name' => $name[132]['name'],
                'dimensions_name' =>$name[132]['dimensions_name'],
               //  'sub_categories_names' =>$name[132]['sub_categories_names'],
                'value'=>$name[132]['value'],
                'categories_id'=>$name[132]['categories_id'],
                 'date_created'    => $name[132]['date_created'],
                  'date_modified'    => $name[132]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_id' => $name[133]['questions_id'] ,
                'name' => $name[133]['name'],
                'dimensions_name' =>$name[133]['dimensions_name'],
               //  'sub_categories_names' =>$name[133]['sub_categories_names'],
               //  'sub_categories_names' =>$name[133]['sub_categories_names'],
                'value'=>$name[133]['value'],
                'categories_id'=>$name[133]['categories_id'],
                 'date_created'    => $name[133]['date_created'],
                  'date_modified'    => $name[133]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),
            // 134
             array(

               'questions_id' => $name[134]['questions_id'] ,
                'name' => $name[134]['name'],
                'dimensions_name' =>$name[134]['dimensions_name'],
               //  'sub_categories_names' =>$name[134]['sub_categories_names'],
                'value'=>$name[134]['value'],
                'categories_id'=>$name[134]['categories_id'],
                 'date_created'    => $name[134]['date_created'],
                  'date_modified'    => $name[134]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',

                'time_slot'=>$time_slot,

            ),

            //135
            array(

               'questions_id' => $name[135]['questions_id'] ,
                'name' => $name[135]['name'],
                'dimensions_name' =>$name[135]['dimensions_name'],
               //  'sub_categories_names' =>$name[135]['sub_categories_names'],
                'value'=>$name[135]['value'],
                'categories_id'=>$name[135]['categories_id'],
                 'date_created'    => $name[135]['date_created'],
                  'date_modified'    => $name[135]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[136]['questions_id'] ,
                'name' => $name[136]['name'],
                'dimensions_name' =>$name[136]['dimensions_name'],
               //  'sub_categories_names' =>$name[136]['sub_categories_names'],
                'value'=>$name[136]['value'],
                'categories_id'=>$name[136]['categories_id'],
                 'date_created'    => $name[136]['date_created'],
                  'date_modified'    => $name[136]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[137]['questions_id'] ,
                'name' => $name[137]['name'],
                'dimensions_name' =>$name[137]['dimensions_name'],
               //  'sub_categories_names' =>$name[137]['sub_categories_names'],
                'value'=>$name[137]['value'],
                'categories_id'=>$name[137]['categories_id'],
                 'date_created'    => $name[137]['date_created'],
                  'date_modified'    => $name[137]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_id' => $name[138]['questions_id'] ,
                'name' => $name[138]['name'],
                'dimensions_name' =>$name[138]['dimensions_name'],
               //  'sub_categories_names' =>$name[138]['sub_categories_names'],
                'value'=>$name[138]['value'],
                'categories_id'=>$name[138]['categories_id'],
                 'date_created'    => $name[138]['date_created'],
                  'date_modified'    => $name[138]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[139]['questions_id'] ,
                'name' => $name[139]['name'],
                'dimensions_name' =>$name[139]['dimensions_name'],
               //  'sub_categories_names' =>$name[139]['sub_categories_names'],
                'value'=>$name[139]['value'],
                'categories_id'=>$name[139]['categories_id'],
                 'date_created'    => $name[139]['date_created'],
                  'date_modified'    => $name[139]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Personal Values Assessment',

                'time_slot'=>$time_slot,

            ),
//end

         );

    // echo "<pre>";print_r($insert_questions_data);exit;
     return   $this->db->insert_batch('personal_values_save_for_later', $insert_questions_data);


}



public function work_personality_save_for_later($name){
     //echo "<pre>";print_r($name);exit;
    if(($this->uri->segment(3)!=0)){
	$data['dashboard_data']=$this->uri->segment(3);

}
else{
	$data['dashboard_data']=$this->session->userdata();
}
$email=$data['dashboard_data'];
$email=$email['email'];

    $time_slot=15;
     $test_name='Work Personality Index';

       $insert_questions_data = array(
        array(

              'questions_assessment_id' => $name[0]['questions_assessment_id'] ,
                'name' => $name[0]['name'],
                'dimensions_name' =>$name[0]['dimensions_name'],
                'sub_categories_names' =>$name[0]['sub_categories_names'],
                'value'=>$name[0]['value'],
                'categories_id'=>$name[0]['categories_id'],
                 'date_created'    => $name[0]['date_created'],
                  'date_modified'    => $name[0]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',

                'time_slot'=>$time_slot,

            ),

             array(

               'questions_assessment_id' => $name[1]['questions_assessment_id'] ,
                'name' => $name[1]['name'],
                'dimensions_name' =>$name[1]['dimensions_name'],
                'sub_categories_names' =>$name[1]['sub_categories_names'],
                'value'=>$name[1]['value'],
                'categories_id'=>$name[1]['categories_id'],
                 'date_created'    => $name[1]['date_created'],
                  'date_modified'    => $name[1]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_assessment_id' => $name[2]['questions_assessment_id'] ,
                'name' => $name[2]['name'],
                'dimensions_name' =>$name[2]['dimensions_name'],
                'sub_categories_names' =>$name[2]['sub_categories_names'],
                'value'=>$name[2]['value'],
                'categories_id'=>$name[2]['categories_id'],
                 'date_created'    => $name[2]['date_created'],
                  'date_modified'    => $name[2]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_assessment_id' => $name[3]['questions_assessment_id'] ,
                'name' => $name[3]['name'],
                'dimensions_name' =>$name[3]['dimensions_name'],
                'sub_categories_names' =>$name[3]['sub_categories_names'],
                'value'=>$name[3]['value'],
                'categories_id'=>$name[3]['categories_id'],
                 'date_created'    => $name[3]['date_created'],
                  'date_modified'    => $name[3]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_assessment_id' => $name[4]['questions_assessment_id'] ,
                'name' => $name[4]['name'],
                'dimensions_name' =>$name[4]['dimensions_name'],
                'sub_categories_names' =>$name[4]['sub_categories_names'],
                'value'=>$name[4]['value'],
                'categories_id'=>$name[4]['categories_id'],
                 'date_created'    => $name[4]['date_created'],
                  'date_modified'    => $name[4]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),

            // 5
             array(

               'questions_assessment_id' => $name[5]['questions_assessment_id'] ,
                'name' => $name[5]['name'],
                'dimensions_name' =>$name[5]['dimensions_name'],
                'sub_categories_names' =>$name[5]['sub_categories_names'],
                'value'=>$name[5]['value'],
                'categories_id'=>$name[5]['categories_id'],
                 'date_created'    => $name[5]['date_created'],
                  'date_modified'    => $name[5]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',

                'time_slot'=>$time_slot,

            ),

             array(

               'questions_assessment_id' => $name[6]['questions_assessment_id'] ,
                'name' => $name[6]['name'],
                'dimensions_name' =>$name[6]['dimensions_name'],
                'sub_categories_names' =>$name[6]['sub_categories_names'],
                'value'=>$name[6]['value'],
                'categories_id'=>$name[6]['categories_id'],
                 'date_created'    => $name[6]['date_created'],
                  'date_modified'    => $name[6]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_assessment_id' => $name[7]['questions_assessment_id'] ,
                'name' => $name[7]['name'],
                'dimensions_name' =>$name[7]['dimensions_name'],
                'sub_categories_names' =>$name[7]['sub_categories_names'],
                'value'=>$name[7]['value'],
                'categories_id'=>$name[7]['categories_id'],
                 'date_created'    => $name[7]['date_created'],
                  'date_modified'    => $name[7]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_assessment_id' => $name[8]['questions_assessment_id'] ,
                'name' => $name[8]['name'],
                'dimensions_name' =>$name[8]['dimensions_name'],
                'sub_categories_names' =>$name[8]['sub_categories_names'],
                'value'=>$name[8]['value'],
                'categories_id'=>$name[8]['categories_id'],
                 'date_created'    => $name[8]['date_created'],
                  'date_modified'    => $name[8]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_assessment_id' => $name[9]['questions_assessment_id'] ,
                'name' => $name[9]['name'],
                'dimensions_name' =>$name[9]['dimensions_name'],
                'sub_categories_names' =>$name[9]['sub_categories_names'],
                'value'=>$name[9]['value'],
                'categories_id'=>$name[9]['categories_id'],
                 'date_created'    => $name[9]['date_created'],
                  'date_modified'    => $name[9]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),
            // 10
             array(

               'questions_assessment_id' => $name[10]['questions_assessment_id'] ,
                'name' => $name[10]['name'],
                'dimensions_name' =>$name[10]['dimensions_name'],
                'sub_categories_names' =>$name[10]['sub_categories_names'],
                'value'=>$name[10]['value'],
                'categories_id'=>$name[10]['categories_id'],
                 'date_created'    => $name[10]['date_created'],
                  'date_modified'    => $name[10]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',

                'time_slot'=>$time_slot,

            ),

             array(

               'questions_assessment_id' => $name[11]['questions_assessment_id'] ,
                'name' => $name[11]['name'],
                'dimensions_name' =>$name[11]['dimensions_name'],
                'sub_categories_names' =>$name[11]['sub_categories_names'],
                'value'=>$name[11]['value'],
                'categories_id'=>$name[11]['categories_id'],
                 'date_created'    => $name[11]['date_created'],
                  'date_modified'    => $name[11]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_assessment_id' => $name[12]['questions_assessment_id'] ,
                'name' => $name[12]['name'],
                'dimensions_name' =>$name[12]['dimensions_name'],
                'sub_categories_names' =>$name[12]['sub_categories_names'],
                'value'=>$name[12]['value'],
                'categories_id'=>$name[12]['categories_id'],
                 'date_created'    => $name[12]['date_created'],
                  'date_modified'    => $name[12]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_assessment_id' => $name[13]['questions_assessment_id'] ,
                'name' => $name[13]['name'],
                'dimensions_name' =>$name[13]['dimensions_name'],
                'sub_categories_names' =>$name[13]['sub_categories_names'],
                'value'=>$name[13]['value'],
                'categories_id'=>$name[13]['categories_id'],
                 'date_created'    => $name[13]['date_created'],
                  'date_modified'    => $name[13]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_assessment_id' => $name[14]['questions_assessment_id'] ,
                'name' => $name[14]['name'],
                'dimensions_name' =>$name[14]['dimensions_name'],
                'sub_categories_names' =>$name[14]['sub_categories_names'],
                'value'=>$name[14]['value'],
                'categories_id'=>$name[14]['categories_id'],
                 'date_created'    => $name[14]['date_created'],
                  'date_modified'    => $name[14]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),
            // 15
             array(

               'questions_assessment_id' => $name[15]['questions_assessment_id'] ,
                'name' => $name[15]['name'],
                'dimensions_name' =>$name[15]['dimensions_name'],
                'sub_categories_names' =>$name[15]['sub_categories_names'],
                'value'=>$name[15]['value'],
                'categories_id'=>$name[15]['categories_id'],
                 'date_created'    => $name[15]['date_created'],
                  'date_modified'    => $name[15]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',

                'time_slot'=>$time_slot,

            ),

             array(

               'questions_assessment_id' => $name[16]['questions_assessment_id'] ,
                'name' => $name[16]['name'],
                'dimensions_name' =>$name[16]['dimensions_name'],
                'sub_categories_names' =>$name[16]['sub_categories_names'],
                'value'=>$name[16]['value'],
                'categories_id'=>$name[16]['categories_id'],
                 'date_created'    => $name[16]['date_created'],
                  'date_modified'    => $name[16]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_assessment_id' => $name[17]['questions_assessment_id'] ,
                'name' => $name[17]['name'],
                'dimensions_name' =>$name[17]['dimensions_name'],
                'sub_categories_names' =>$name[17]['sub_categories_names'],
                'value'=>$name[17]['value'],
                'categories_id'=>$name[17]['categories_id'],
                 'date_created'    => $name[17]['date_created'],
                  'date_modified'    => $name[17]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_assessment_id' => $name[18]['questions_assessment_id'] ,
                'name' => $name[18]['name'],
                'dimensions_name' =>$name[18]['dimensions_name'],
                'sub_categories_names' =>$name[18]['sub_categories_names'],
                'value'=>$name[18]['value'],
                'categories_id'=>$name[18]['categories_id'],
                 'date_created'    => $name[18]['date_created'],
                  'date_modified'    => $name[18]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_assessment_id' => $name[19]['questions_assessment_id'] ,
                'name' => $name[19]['name'],
                'dimensions_name' =>$name[19]['dimensions_name'],
                'sub_categories_names' =>$name[19]['sub_categories_names'],
                'value'=>$name[19]['value'],
                'categories_id'=>$name[19]['categories_id'],
                 'date_created'    => $name[19]['date_created'],
                  'date_modified'    => $name[19]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_assessment_id' => $name[20]['questions_assessment_id'] ,
                'name' => $name[20]['name'],
                'dimensions_name' =>$name[20]['dimensions_name'],
                'sub_categories_names' =>$name[20]['sub_categories_names'],
                'value'=>$name[20]['value'],
                'categories_id'=>$name[20]['categories_id'],
                 'date_created'    => $name[20]['date_created'],
                  'date_modified'    => $name[20]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),

        //   21


        array(

               'questions_assessment_id' => $name[21]['questions_assessment_id'] ,
                'name' => $name[21]['name'],
                'dimensions_name' =>$name[21]['dimensions_name'],
                'sub_categories_names' =>$name[21]['sub_categories_names'],
                'value'=>$name[21]['value'],
                'categories_id'=>$name[21]['categories_id'],
                 'date_created'    => $name[21]['date_created'],
                  'date_modified'    => $name[21]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',

                'time_slot'=>$time_slot,

            ),

             array(

               'questions_assessment_id' => $name[22]['questions_assessment_id'] ,
                'name' => $name[22]['name'],
                'dimensions_name' =>$name[22]['dimensions_name'],
                'sub_categories_names' =>$name[22]['sub_categories_names'],
                'value'=>$name[22]['value'],
                'categories_id'=>$name[22]['categories_id'],
                 'date_created'    => $name[22]['date_created'],
                  'date_modified'    => $name[22]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_assessment_id' => $name[23]['questions_assessment_id'] ,
                'name' => $name[23]['name'],
                'dimensions_name' =>$name[23]['dimensions_name'],
                'sub_categories_names' =>$name[23]['sub_categories_names'],
                'value'=>$name[23]['value'],
                'categories_id'=>$name[23]['categories_id'],
                 'date_created'    => $name[23]['date_created'],
                  'date_modified'    => $name[23]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_assessment_id' => $name[24]['questions_assessment_id'] ,
                'name' => $name[24]['name'],
                'dimensions_name' =>$name[24]['dimensions_name'],
                'sub_categories_names' =>$name[24]['sub_categories_names'],
                'value'=>$name[24]['value'],
                'categories_id'=>$name[24]['categories_id'],
                 'date_created'    => $name[24]['date_created'],
                  'date_modified'    => $name[24]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_assessment_id' => $name[25]['questions_assessment_id'] ,
                'name' => $name[25]['name'],
                'dimensions_name' =>$name[25]['dimensions_name'],
                'sub_categories_names' =>$name[25]['sub_categories_names'],
                'value'=>$name[25]['value'],
                'categories_id'=>$name[25]['categories_id'],
                 'date_created'    => $name[25]['date_created'],
                  'date_modified'    => $name[25]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),

            // 5
             array(

               'questions_assessment_id' => $name[26]['questions_assessment_id'] ,
                'name' => $name[26]['name'],
                'dimensions_name' =>$name[26]['dimensions_name'],
                'sub_categories_names' =>$name[26]['sub_categories_names'],
                'value'=>$name[26]['value'],
                'categories_id'=>$name[26]['categories_id'],
                 'date_created'    => $name[26]['date_created'],
                  'date_modified'    => $name[26]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',

                'time_slot'=>$time_slot,

            ),

             array(

               'questions_assessment_id' => $name[27]['questions_assessment_id'] ,
                'name' => $name[27]['name'],
                'dimensions_name' =>$name[27]['dimensions_name'],
                'sub_categories_names' =>$name[27]['sub_categories_names'],
                'value'=>$name[27]['value'],
                'categories_id'=>$name[27]['categories_id'],
                 'date_created'    => $name[27]['date_created'],
                  'date_modified'    => $name[27]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_assessment_id' => $name[28]['questions_assessment_id'] ,
                'name' => $name[28]['name'],
                'dimensions_name' =>$name[28]['dimensions_name'],
                'sub_categories_names' =>$name[28]['sub_categories_names'],
                'value'=>$name[28]['value'],
                'categories_id'=>$name[28]['categories_id'],
                 'date_created'    => $name[28]['date_created'],
                  'date_modified'    => $name[28]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_assessment_id' => $name[29]['questions_assessment_id'] ,
                'name' => $name[29]['name'],
                'dimensions_name' =>$name[29]['dimensions_name'],
                'sub_categories_names' =>$name[29]['sub_categories_names'],
                'value'=>$name[29]['value'],
                'categories_id'=>$name[29]['categories_id'],
                 'date_created'    => $name[29]['date_created'],
                  'date_modified'    => $name[29]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_assessment_id' => $name[30]['questions_assessment_id'] ,
                'name' => $name[30]['name'],
                'dimensions_name' =>$name[30]['dimensions_name'],
                'sub_categories_names' =>$name[30]['sub_categories_names'],
                'value'=>$name[30]['value'],
                'categories_id'=>$name[30]['categories_id'],
                 'date_created'    => $name[30]['date_created'],
                  'date_modified'    => $name[30]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),
            //31
             array(

               'questions_assessment_id' => $name[31]['questions_assessment_id'] ,
                'name' => $name[31]['name'],
                'dimensions_name' =>$name[31]['dimensions_name'],
                'sub_categories_names' =>$name[31]['sub_categories_names'],
                'value'=>$name[31]['value'],
                'categories_id'=>$name[31]['categories_id'],
                 'date_created'    => $name[31]['date_created'],
                  'date_modified'    => $name[31]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',

                'time_slot'=>$time_slot,

            ),
            // 32

            array(

               'questions_assessment_id' => $name[32]['questions_assessment_id'] ,
                'name' => $name[32]['name'],
                'dimensions_name' =>$name[32]['dimensions_name'],
                'sub_categories_names' =>$name[32]['sub_categories_names'],
                'value'=>$name[32]['value'],
                'categories_id'=>$name[32]['categories_id'],
                 'date_created'    => $name[32]['date_created'],
                  'date_modified'    => $name[32]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',

                'time_slot'=>$time_slot,

            ),

             array(

               'questions_assessment_id' => $name[33]['questions_assessment_id'] ,
                'name' => $name[33]['name'],
                'dimensions_name' =>$name[33]['dimensions_name'],
                'sub_categories_names' =>$name[33]['sub_categories_names'],
                'value'=>$name[33]['value'],
                'categories_id'=>$name[33]['categories_id'],
                 'date_created'    => $name[33]['date_created'],
                  'date_modified'    => $name[33]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_assessment_id' => $name[34]['questions_assessment_id'] ,
                'name' => $name[34]['name'],
                'dimensions_name' =>$name[34]['dimensions_name'],
                'sub_categories_names' =>$name[34]['sub_categories_names'],
                'value'=>$name[34]['value'],
                'categories_id'=>$name[34]['categories_id'],
                 'date_created'    => $name[34]['date_created'],
                  'date_modified'    => $name[34]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_assessment_id' => $name[35]['questions_assessment_id'] ,
                'name' => $name[35]['name'],
                'dimensions_name' =>$name[35]['dimensions_name'],
                'sub_categories_names' =>$name[35]['sub_categories_names'],
                'value'=>$name[35]['value'],
                'categories_id'=>$name[35]['categories_id'],
                 'date_created'    => $name[35]['date_created'],
                  'date_modified'    => $name[35]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_assessment_id' => $name[36]['questions_assessment_id'] ,
                'name' => $name[36]['name'],
                'dimensions_name' =>$name[36]['dimensions_name'],
                'sub_categories_names' =>$name[36]['sub_categories_names'],
                'value'=>$name[36]['value'],
                'categories_id'=>$name[36]['categories_id'],
                 'date_created'    => $name[36]['date_created'],
                  'date_modified'    => $name[36]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),

            // 5
             array(

               'questions_assessment_id' => $name[37]['questions_assessment_id'] ,
                'name' => $name[37]['name'],
                'dimensions_name' =>$name[37]['dimensions_name'],
                'sub_categories_names' =>$name[37]['sub_categories_names'],
                'value'=>$name[37]['value'],
                'categories_id'=>$name[37]['categories_id'],
                 'date_created'    => $name[37]['date_created'],
                  'date_modified'    => $name[37]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',

                'time_slot'=>$time_slot,

            ),

             array(

               'questions_assessment_id' => $name[38]['questions_assessment_id'] ,
                'name' => $name[38]['name'],
                'dimensions_name' =>$name[38]['dimensions_name'],
                'sub_categories_names' =>$name[38]['sub_categories_names'],
                'value'=>$name[38]['value'],
                'categories_id'=>$name[38]['categories_id'],
                 'date_created'    => $name[38]['date_created'],
                  'date_modified'    => $name[38]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_assessment_id' => $name[39]['questions_assessment_id'] ,
                'name' => $name[39]['name'],
                'dimensions_name' =>$name[39]['dimensions_name'],
                'sub_categories_names' =>$name[39]['sub_categories_names'],
                'value'=>$name[39]['value'],
                'categories_id'=>$name[39]['categories_id'],
                 'date_created'    => $name[39]['date_created'],
                  'date_modified'    => $name[39]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_assessment_id' => $name[40]['questions_assessment_id'] ,
                'name' => $name[40]['name'],
                'dimensions_name' =>$name[40]['dimensions_name'],
                'sub_categories_names' =>$name[40]['sub_categories_names'],
                'value'=>$name[40]['value'],
                'categories_id'=>$name[40]['categories_id'],
                 'date_created'    => $name[40]['date_created'],
                  'date_modified'    => $name[40]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_assessment_id' => $name[41]['questions_assessment_id'] ,
                'name' => $name[41]['name'],
                'dimensions_name' =>$name[41]['dimensions_name'],
                'sub_categories_names' =>$name[41]['sub_categories_names'],
                'value'=>$name[41]['value'],
                'categories_id'=>$name[41]['categories_id'],
                 'date_created'    => $name[41]['date_created'],
                  'date_modified'    => $name[41]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),
            // 10
             array(

               'questions_assessment_id' => $name[42]['questions_assessment_id'] ,
                'name' => $name[42]['name'],
                'dimensions_name' =>$name[42]['dimensions_name'],
                'sub_categories_names' =>$name[42]['sub_categories_names'],
                'value'=>$name[42]['value'],
                'categories_id'=>$name[42]['categories_id'],
                 'date_created'    => $name[42]['date_created'],
                  'date_modified'    => $name[42]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',

                'time_slot'=>$time_slot,

            ),
            // 43

            array(

               'questions_assessment_id' => $name[43]['questions_assessment_id'] ,
                'name' => $name[43]['name'],
                'dimensions_name' =>$name[43]['dimensions_name'],
                'sub_categories_names' =>$name[43]['sub_categories_names'],
                'value'=>$name[43]['value'],
                'categories_id'=>$name[43]['categories_id'],
                 'date_created'    => $name[43]['date_created'],
                  'date_modified'    => $name[43]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',

                'time_slot'=>$time_slot,

            ),

             array(

               'questions_assessment_id' => $name[44]['questions_assessment_id'] ,
                'name' => $name[44]['name'],
                'dimensions_name' =>$name[44]['dimensions_name'],
                'sub_categories_names' =>$name[44]['sub_categories_names'],
                'value'=>$name[44]['value'],
                'categories_id'=>$name[44]['categories_id'],
                 'date_created'    => $name[44]['date_created'],
                  'date_modified'    => $name[44]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_assessment_id' => $name[45]['questions_assessment_id'] ,
                'name' => $name[45]['name'],
                'dimensions_name' =>$name[45]['dimensions_name'],
                'sub_categories_names' =>$name[45]['sub_categories_names'],
                'value'=>$name[45]['value'],
                'categories_id'=>$name[45]['categories_id'],
                 'date_created'    => $name[45]['date_created'],
                  'date_modified'    => $name[45]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_assessment_id' => $name[46]['questions_assessment_id'] ,
                'name' => $name[46]['name'],
                'dimensions_name' =>$name[46]['dimensions_name'],
                'sub_categories_names' =>$name[46]['sub_categories_names'],
                'value'=>$name[46]['value'],
                'categories_id'=>$name[46]['categories_id'],
                 'date_created'    => $name[46]['date_created'],
                  'date_modified'    => $name[46]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_assessment_id' => $name[47]['questions_assessment_id'] ,
                'name' => $name[47]['name'],
                'dimensions_name' =>$name[47]['dimensions_name'],
                'sub_categories_names' =>$name[47]['sub_categories_names'],
                'value'=>$name[47]['value'],
                'categories_id'=>$name[47]['categories_id'],
                 'date_created'    => $name[47]['date_created'],
                  'date_modified'    => $name[47]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),

            // 5
             array(

               'questions_assessment_id' => $name[48]['questions_assessment_id'] ,
                'name' => $name[48]['name'],
                'dimensions_name' =>$name[48]['dimensions_name'],
                'sub_categories_names' =>$name[48]['sub_categories_names'],
                'value'=>$name[48]['value'],
                'categories_id'=>$name[48]['categories_id'],
                 'date_created'    => $name[48]['date_created'],
                  'date_modified'    => $name[48]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',

                'time_slot'=>$time_slot,

            ),

             array(

               'questions_assessment_id' => $name[49]['questions_assessment_id'] ,
                'name' => $name[49]['name'],
                'dimensions_name' =>$name[49]['dimensions_name'],
                'sub_categories_names' =>$name[49]['sub_categories_names'],
                'value'=>$name[49]['value'],
                'categories_id'=>$name[49]['categories_id'],
                 'date_created'    => $name[49]['date_created'],
                  'date_modified'    => $name[49]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_assessment_id' => $name[50]['questions_assessment_id'] ,
                'name' => $name[50]['name'],
                'dimensions_name' =>$name[50]['dimensions_name'],
                'sub_categories_names' =>$name[50]['sub_categories_names'],
                'value'=>$name[50]['value'],
                'categories_id'=>$name[50]['categories_id'],
                 'date_created'    => $name[50]['date_created'],
                  'date_modified'    => $name[50]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_assessment_id' => $name[51]['questions_assessment_id'] ,
                'name' => $name[51]['name'],
                'dimensions_name' =>$name[51]['dimensions_name'],
                'sub_categories_names' =>$name[51]['sub_categories_names'],
                'value'=>$name[51]['value'],
                'categories_id'=>$name[51]['categories_id'],
                 'date_created'    => $name[51]['date_created'],
                  'date_modified'    => $name[51]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_assessment_id' => $name[52]['questions_assessment_id'] ,
                'name' => $name[52]['name'],
                'dimensions_name' =>$name[52]['dimensions_name'],
                'sub_categories_names' =>$name[52]['sub_categories_names'],
                'value'=>$name[52]['value'],
                'categories_id'=>$name[52]['categories_id'],
                 'date_created'    => $name[52]['date_created'],
                  'date_modified'    => $name[52]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),
            // 10
             array(

               'questions_assessment_id' => $name[53]['questions_assessment_id'] ,
                'name' => $name[53]['name'],
                'dimensions_name' =>$name[53]['dimensions_name'],
                'sub_categories_names' =>$name[53]['sub_categories_names'],
                'value'=>$name[53]['value'],
                'categories_id'=>$name[53]['categories_id'],
                 'date_created'    => $name[53]['date_created'],
                  'date_modified'    => $name[53]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',

                'time_slot'=>$time_slot,

            ),
            // 54

            array(

               'questions_assessment_id' => $name[54]['questions_assessment_id'] ,
                'name' => $name[54]['name'],
                'dimensions_name' =>$name[54]['dimensions_name'],
                'sub_categories_names' =>$name[54]['sub_categories_names'],
                'value'=>$name[54]['value'],
                'categories_id'=>$name[54]['categories_id'],
                 'date_created'    => $name[54]['date_created'],
                  'date_modified'    => $name[54]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',

                'time_slot'=>$time_slot,

            ),

             array(

               'questions_assessment_id' => $name[55]['questions_assessment_id'] ,
                'name' => $name[55]['name'],
                'dimensions_name' =>$name[55]['dimensions_name'],
                'sub_categories_names' =>$name[55]['sub_categories_names'],
                'value'=>$name[55]['value'],
                'categories_id'=>$name[55]['categories_id'],
                 'date_created'    => $name[55]['date_created'],
                  'date_modified'    => $name[55]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_assessment_id' => $name[56]['questions_assessment_id'] ,
                'name' => $name[56]['name'],
                'dimensions_name' =>$name[56]['dimensions_name'],
                'sub_categories_names' =>$name[56]['sub_categories_names'],
                'value'=>$name[56]['value'],
                'categories_id'=>$name[56]['categories_id'],
                 'date_created'    => $name[56]['date_created'],
                  'date_modified'    => $name[56]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_assessment_id' => $name[57]['questions_assessment_id'] ,
                'name' => $name[57]['name'],
                'dimensions_name' =>$name[57]['dimensions_name'],
                'sub_categories_names' =>$name[57]['sub_categories_names'],
                'value'=>$name[57]['value'],
                'categories_id'=>$name[57]['categories_id'],
                 'date_created'    => $name[57]['date_created'],
                  'date_modified'    => $name[57]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_assessment_id' => $name[58]['questions_assessment_id'] ,
                'name' => $name[58]['name'],
                'dimensions_name' =>$name[58]['dimensions_name'],
                'sub_categories_names' =>$name[58]['sub_categories_names'],
                'value'=>$name[58]['value'],
                'categories_id'=>$name[58]['categories_id'],
                 'date_created'    => $name[58]['date_created'],
                  'date_modified'    => $name[58]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),

            // 5
             array(

               'questions_assessment_id' => $name[59]['questions_assessment_id'] ,
                'name' => $name[59]['name'],
                'dimensions_name' =>$name[59]['dimensions_name'],
                'sub_categories_names' =>$name[59]['sub_categories_names'],
                'value'=>$name[59]['value'],
                'categories_id'=>$name[59]['categories_id'],
                 'date_created'    => $name[59]['date_created'],
                  'date_modified'    => $name[59]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',

                'time_slot'=>$time_slot,

            ),

             array(

               'questions_assessment_id' => $name[60]['questions_assessment_id'] ,
                'name' => $name[60]['name'],
                'dimensions_name' =>$name[60]['dimensions_name'],
                'sub_categories_names' =>$name[60]['sub_categories_names'],
                'value'=>$name[60]['value'],
                'categories_id'=>$name[60]['categories_id'],
                 'date_created'    => $name[60]['date_created'],
                  'date_modified'    => $name[60]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_assessment_id' => $name[61]['questions_assessment_id'] ,
                'name' => $name[61]['name'],
                'dimensions_name' =>$name[61]['dimensions_name'],
                'sub_categories_names' =>$name[61]['sub_categories_names'],
                'value'=>$name[61]['value'],
                'categories_id'=>$name[61]['categories_id'],
                 'date_created'    => $name[61]['date_created'],
                  'date_modified'    => $name[61]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_assessment_id' => $name[62]['questions_assessment_id'] ,
                'name' => $name[62]['name'],
                'dimensions_name' =>$name[62]['dimensions_name'],
                'sub_categories_names' =>$name[62]['sub_categories_names'],
                'value'=>$name[62]['value'],
                'categories_id'=>$name[62]['categories_id'],
                 'date_created'    => $name[62]['date_created'],
                  'date_modified'    => $name[62]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_assessment_id' => $name[63]['questions_assessment_id'] ,
                'name' => $name[63]['name'],
                'dimensions_name' =>$name[63]['dimensions_name'],
                'sub_categories_names' =>$name[63]['sub_categories_names'],
                'value'=>$name[63]['value'],
                'categories_id'=>$name[63]['categories_id'],
                 'date_created'    => $name[63]['date_created'],
                  'date_modified'    => $name[63]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_assessment_id' => $name[64]['questions_assessment_id'] ,
                'name' => $name[64]['name'],
                'dimensions_name' =>$name[64]['dimensions_name'],
                'sub_categories_names' =>$name[64]['sub_categories_names'],
                'value'=>$name[64]['value'],
                'categories_id'=>$name[64]['categories_id'],
                 'date_created'    => $name[64]['date_created'],
                  'date_modified'    => $name[64]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',

                'time_slot'=>$time_slot,

            ),
            //65

             array(

               'questions_assessment_id' => $name[65]['questions_assessment_id'] ,
                'name' => $name[65]['name'],
                'dimensions_name' =>$name[65]['dimensions_name'],
                'sub_categories_names' =>$name[65]['sub_categories_names'],
                'value'=>$name[65]['value'],
                'categories_id'=>$name[65]['categories_id'],
                 'date_created'    => $name[65]['date_created'],
                  'date_modified'    => $name[65]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_assessment_id' => $name[66]['questions_assessment_id'] ,
                'name' => $name[66]['name'],
                'dimensions_name' =>$name[66]['dimensions_name'],
                'sub_categories_names' =>$name[66]['sub_categories_names'],
                'value'=>$name[66]['value'],
                'categories_id'=>$name[66]['categories_id'],
                 'date_created'    => $name[66]['date_created'],
                  'date_modified'    => $name[66]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_assessment_id' => $name[67]['questions_assessment_id'] ,
                'name' => $name[67]['name'],
                'dimensions_name' =>$name[67]['dimensions_name'],
                'sub_categories_names' =>$name[67]['sub_categories_names'],
                'value'=>$name[67]['value'],
                'categories_id'=>$name[67]['categories_id'],
                 'date_created'    => $name[67]['date_created'],
                  'date_modified'    => $name[67]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_assessment_id' => $name[68]['questions_assessment_id'] ,
                'name' => $name[68]['name'],
                'dimensions_name' =>$name[68]['dimensions_name'],
                'sub_categories_names' =>$name[68]['sub_categories_names'],
                'sub_categories_names' =>$name[68]['sub_categories_names'],
                'value'=>$name[68]['value'],
                'categories_id'=>$name[68]['categories_id'],
                 'date_created'    => $name[68]['date_created'],
                  'date_modified'    => $name[68]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),
            // 10
             array(

               'questions_assessment_id' => $name[69]['questions_assessment_id'] ,
                'name' => $name[69]['name'],
                'dimensions_name' =>$name[69]['dimensions_name'],
                'sub_categories_names' =>$name[69]['sub_categories_names'],
                'value'=>$name[69]['value'],
                'categories_id'=>$name[69]['categories_id'],
                 'date_created'    => $name[69]['date_created'],
                  'date_modified'    => $name[69]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',

                'time_slot'=>$time_slot,

            ),
            //70

            array(

               'questions_assessment_id' => $name[70]['questions_assessment_id'] ,
                'name' => $name[70]['name'],
                'dimensions_name' =>$name[70]['dimensions_name'],
                'sub_categories_names' =>$name[70]['sub_categories_names'],
                'value'=>$name[70]['value'],
                'categories_id'=>$name[70]['categories_id'],
                 'date_created'    => $name[70]['date_created'],
                  'date_modified'    => $name[70]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_assessment_id' => $name[71]['questions_assessment_id'] ,
                'name' => $name[71]['name'],
                'dimensions_name' =>$name[71]['dimensions_name'],
                'sub_categories_names' =>$name[71]['sub_categories_names'],
                'value'=>$name[71]['value'],
                'categories_id'=>$name[71]['categories_id'],
                 'date_created'    => $name[71]['date_created'],
                  'date_modified'    => $name[71]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_assessment_id' => $name[72]['questions_assessment_id'] ,
                'name' => $name[72]['name'],
                'dimensions_name' =>$name[72]['dimensions_name'],
                'sub_categories_names' =>$name[72]['sub_categories_names'],
                'value'=>$name[72]['value'],
                'categories_id'=>$name[72]['categories_id'],
                 'date_created'    => $name[72]['date_created'],
                  'date_modified'    => $name[72]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_assessment_id' => $name[73]['questions_assessment_id'] ,
                'name' => $name[73]['name'],
                'dimensions_name' =>$name[73]['dimensions_name'],
                'sub_categories_names' =>$name[73]['sub_categories_names'],
                'value'=>$name[73]['value'],
                'categories_id'=>$name[73]['categories_id'],
                 'date_created'    => $name[73]['date_created'],
                  'date_modified'    => $name[73]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_assessment_id' => $name[74]['questions_assessment_id'] ,
                'name' => $name[74]['name'],
                'dimensions_name' =>$name[74]['dimensions_name'],
                'sub_categories_names' =>$name[74]['sub_categories_names'],
                'value'=>$name[74]['value'],
                'categories_id'=>$name[74]['categories_id'],
                 'date_created'    => $name[74]['date_created'],
                  'date_modified'    => $name[74]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',

                'time_slot'=>$time_slot,

            ),
            //65

             array(

               'questions_assessment_id' => $name[75]['questions_assessment_id'] ,
                'name' => $name[75]['name'],
                'dimensions_name' =>$name[75]['dimensions_name'],
                'sub_categories_names' =>$name[75]['sub_categories_names'],
                'value'=>$name[75]['value'],
                'categories_id'=>$name[75]['categories_id'],
                 'date_created'    => $name[75]['date_created'],
                  'date_modified'    => $name[75]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_assessment_id' => $name[76]['questions_assessment_id'] ,
                'name' => $name[76]['name'],
                'dimensions_name' =>$name[76]['dimensions_name'],
                'sub_categories_names' =>$name[76]['sub_categories_names'],
                'value'=>$name[76]['value'],
                'categories_id'=>$name[76]['categories_id'],
                 'date_created'    => $name[76]['date_created'],
                  'date_modified'    => $name[76]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_assessment_id' => $name[77]['questions_assessment_id'] ,
                'name' => $name[77]['name'],
                'dimensions_name' =>$name[77]['dimensions_name'],
                'sub_categories_names' =>$name[77]['sub_categories_names'],
                'value'=>$name[77]['value'],
                'categories_id'=>$name[77]['categories_id'],
                 'date_created'    => $name[77]['date_created'],
                  'date_modified'    => $name[77]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_assessment_id' => $name[78]['questions_assessment_id'] ,
                'name' => $name[78]['name'],
                'dimensions_name' =>$name[78]['dimensions_name'],
                'sub_categories_names' =>$name[78]['sub_categories_names'],
                'sub_categories_names' =>$name[78]['sub_categories_names'],
                'value'=>$name[78]['value'],
                'categories_id'=>$name[78]['categories_id'],
                 'date_created'    => $name[78]['date_created'],
                  'date_modified'    => $name[78]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),
            // 79
             array(

               'questions_assessment_id' => $name[79]['questions_assessment_id'] ,
                'name' => $name[79]['name'],
                'dimensions_name' =>$name[79]['dimensions_name'],
                'sub_categories_names' =>$name[79]['sub_categories_names'],
                'value'=>$name[79]['value'],
                'categories_id'=>$name[79]['categories_id'],
                 'date_created'    => $name[79]['date_created'],
                  'date_modified'    => $name[79]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',

                'time_slot'=>$time_slot,

            ),

            //80

            array(

               'questions_assessment_id' => $name[80]['questions_assessment_id'] ,
                'name' => $name[80]['name'],
                'dimensions_name' =>$name[80]['dimensions_name'],
                'sub_categories_names' =>$name[80]['sub_categories_names'],
                'value'=>$name[80]['value'],
                'categories_id'=>$name[80]['categories_id'],
                 'date_created'    => $name[80]['date_created'],
                  'date_modified'    => $name[80]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_assessment_id' => $name[81]['questions_assessment_id'] ,
                'name' => $name[81]['name'],
                'dimensions_name' =>$name[81]['dimensions_name'],
                'sub_categories_names' =>$name[81]['sub_categories_names'],
                'value'=>$name[81]['value'],
                'categories_id'=>$name[81]['categories_id'],
                 'date_created'    => $name[81]['date_created'],
                  'date_modified'    => $name[81]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_assessment_id' => $name[82]['questions_assessment_id'] ,
                'name' => $name[82]['name'],
                'dimensions_name' =>$name[82]['dimensions_name'],
                'sub_categories_names' =>$name[82]['sub_categories_names'],
                'value'=>$name[82]['value'],
                'categories_id'=>$name[82]['categories_id'],
                 'date_created'    => $name[82]['date_created'],
                  'date_modified'    => $name[82]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_assessment_id' => $name[83]['questions_assessment_id'] ,
                'name' => $name[83]['name'],
                'dimensions_name' =>$name[83]['dimensions_name'],
                'sub_categories_names' =>$name[83]['sub_categories_names'],
                'value'=>$name[83]['value'],
                'categories_id'=>$name[83]['categories_id'],
                 'date_created'    => $name[83]['date_created'],
                  'date_modified'    => $name[83]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_assessment_id' => $name[84]['questions_assessment_id'] ,
                'name' => $name[84]['name'],
                'dimensions_name' =>$name[84]['dimensions_name'],
                'sub_categories_names' =>$name[84]['sub_categories_names'],
                'value'=>$name[84]['value'],
                'categories_id'=>$name[84]['categories_id'],
                 'date_created'    => $name[84]['date_created'],
                  'date_modified'    => $name[84]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',

                'time_slot'=>$time_slot,

            ),
            //85

             array(

               'questions_assessment_id' => $name[85]['questions_assessment_id'] ,
                'name' => $name[85]['name'],
                'dimensions_name' =>$name[85]['dimensions_name'],
                'sub_categories_names' =>$name[85]['sub_categories_names'],
                'value'=>$name[85]['value'],
                'categories_id'=>$name[85]['categories_id'],
                 'date_created'    => $name[85]['date_created'],
                  'date_modified'    => $name[85]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_assessment_id' => $name[86]['questions_assessment_id'] ,
                'name' => $name[86]['name'],
                'dimensions_name' =>$name[86]['dimensions_name'],
                'sub_categories_names' =>$name[86]['sub_categories_names'],
                'value'=>$name[86]['value'],
                'categories_id'=>$name[86]['categories_id'],
                 'date_created'    => $name[86]['date_created'],
                  'date_modified'    => $name[86]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_assessment_id' => $name[87]['questions_assessment_id'] ,
                'name' => $name[87]['name'],
                'dimensions_name' =>$name[87]['dimensions_name'],
                'sub_categories_names' =>$name[87]['sub_categories_names'],
                'value'=>$name[87]['value'],
                'categories_id'=>$name[87]['categories_id'],
                 'date_created'    => $name[87]['date_created'],
                  'date_modified'    => $name[87]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_assessment_id' => $name[88]['questions_assessment_id'] ,
                'name' => $name[88]['name'],
                'dimensions_name' =>$name[88]['dimensions_name'],
                'sub_categories_names' =>$name[88]['sub_categories_names'],
                'sub_categories_names' =>$name[88]['sub_categories_names'],
                'value'=>$name[88]['value'],
                'categories_id'=>$name[88]['categories_id'],
                 'date_created'    => $name[88]['date_created'],
                  'date_modified'    => $name[88]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),
            // 89
             array(

               'questions_assessment_id' => $name[89]['questions_assessment_id'] ,
                'name' => $name[89]['name'],
                'dimensions_name' =>$name[89]['dimensions_name'],
                'sub_categories_names' =>$name[89]['sub_categories_names'],
                'value'=>$name[89]['value'],
                'categories_id'=>$name[89]['categories_id'],
                 'date_created'    => $name[89]['date_created'],
                  'date_modified'    => $name[89]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',

                'time_slot'=>$time_slot,

            ),

            //90
            array(

               'questions_assessment_id' => $name[90]['questions_assessment_id'] ,
                'name' => $name[90]['name'],
                'dimensions_name' =>$name[90]['dimensions_name'],
                'sub_categories_names' =>$name[90]['sub_categories_names'],
                'value'=>$name[90]['value'],
                'categories_id'=>$name[90]['categories_id'],
                 'date_created'    => $name[90]['date_created'],
                  'date_modified'    => $name[90]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_assessment_id' => $name[91]['questions_assessment_id'] ,
                'name' => $name[91]['name'],
                'dimensions_name' =>$name[91]['dimensions_name'],
                'sub_categories_names' =>$name[91]['sub_categories_names'],
                'value'=>$name[91]['value'],
                'categories_id'=>$name[91]['categories_id'],
                 'date_created'    => $name[91]['date_created'],
                  'date_modified'    => $name[91]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_assessment_id' => $name[92]['questions_assessment_id'] ,
                'name' => $name[92]['name'],
                'dimensions_name' =>$name[92]['dimensions_name'],
                'sub_categories_names' =>$name[92]['sub_categories_names'],
                'value'=>$name[92]['value'],
                'categories_id'=>$name[92]['categories_id'],
                 'date_created'    => $name[92]['date_created'],
                  'date_modified'    => $name[92]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_assessment_id' => $name[93]['questions_assessment_id'] ,
                'name' => $name[93]['name'],
                'dimensions_name' =>$name[93]['dimensions_name'],
                'sub_categories_names' =>$name[93]['sub_categories_names'],
                'value'=>$name[93]['value'],
                'categories_id'=>$name[93]['categories_id'],
                 'date_created'    => $name[93]['date_created'],
                  'date_modified'    => $name[93]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_assessment_id' => $name[94]['questions_assessment_id'] ,
                'name' => $name[94]['name'],
                'dimensions_name' =>$name[94]['dimensions_name'],
                'sub_categories_names' =>$name[94]['sub_categories_names'],
                'value'=>$name[94]['value'],
                'categories_id'=>$name[94]['categories_id'],
                 'date_created'    => $name[94]['date_created'],
                  'date_modified'    => $name[94]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',

                'time_slot'=>$time_slot,

            ),
            //95

             array(

               'questions_assessment_id' => $name[95]['questions_assessment_id'] ,
                'name' => $name[95]['name'],
                'dimensions_name' =>$name[95]['dimensions_name'],
                'sub_categories_names' =>$name[95]['sub_categories_names'],
                'value'=>$name[95]['value'],
                'categories_id'=>$name[95]['categories_id'],
                 'date_created'    => $name[95]['date_created'],
                  'date_modified'    => $name[95]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_assessment_id' => $name[96]['questions_assessment_id'] ,
                'name' => $name[96]['name'],
                'dimensions_name' =>$name[96]['dimensions_name'],
                'sub_categories_names' =>$name[96]['sub_categories_names'],
                'value'=>$name[96]['value'],
                'categories_id'=>$name[96]['categories_id'],
                 'date_created'    => $name[96]['date_created'],
                  'date_modified'    => $name[96]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_assessment_id' => $name[97]['questions_assessment_id'] ,
                'name' => $name[97]['name'],
                'dimensions_name' =>$name[97]['dimensions_name'],
                'sub_categories_names' =>$name[97]['sub_categories_names'],
                'value'=>$name[97]['value'],
                'categories_id'=>$name[97]['categories_id'],
                 'date_created'    => $name[97]['date_created'],
                  'date_modified'    => $name[97]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_assessment_id' => $name[98]['questions_assessment_id'] ,
                'name' => $name[98]['name'],
                'dimensions_name' =>$name[98]['dimensions_name'],
                'sub_categories_names' =>$name[98]['sub_categories_names'],
                'sub_categories_names' =>$name[98]['sub_categories_names'],
                'value'=>$name[98]['value'],
                'categories_id'=>$name[98]['categories_id'],
                 'date_created'    => $name[98]['date_created'],
                  'date_modified'    => $name[98]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),
            // 99
             array(

               'questions_assessment_id' => $name[99]['questions_assessment_id'] ,
                'name' => $name[99]['name'],
                'dimensions_name' =>$name[99]['dimensions_name'],
                'sub_categories_names' =>$name[99]['sub_categories_names'],
                'value'=>$name[99]['value'],
                'categories_id'=>$name[99]['categories_id'],
                 'date_created'    => $name[99]['date_created'],
                  'date_modified'    => $name[99]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',

                'time_slot'=>$time_slot,

            ),

            //100
            array(

               'questions_assessment_id' => $name[100]['questions_assessment_id'] ,
                'name' => $name[100]['name'],
                'dimensions_name' =>$name[100]['dimensions_name'],
                'sub_categories_names' =>$name[100]['sub_categories_names'],
                'value'=>$name[100]['value'],
                'categories_id'=>$name[100]['categories_id'],
                 'date_created'    => $name[100]['date_created'],
                  'date_modified'    => $name[100]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_assessment_id' => $name[101]['questions_assessment_id'] ,
                'name' => $name[101]['name'],
                'dimensions_name' =>$name[101]['dimensions_name'],
                'sub_categories_names' =>$name[101]['sub_categories_names'],
                'value'=>$name[101]['value'],
                'categories_id'=>$name[101]['categories_id'],
                 'date_created'    => $name[101]['date_created'],
                  'date_modified'    => $name[101]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_assessment_id' => $name[102]['questions_assessment_id'] ,
                'name' => $name[102]['name'],
                'dimensions_name' =>$name[102]['dimensions_name'],
                'sub_categories_names' =>$name[102]['sub_categories_names'],
                'value'=>$name[102]['value'],
                'categories_id'=>$name[102]['categories_id'],
                 'date_created'    => $name[102]['date_created'],
                  'date_modified'    => $name[102]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_assessment_id' => $name[103]['questions_assessment_id'] ,
                'name' => $name[103]['name'],
                'dimensions_name' =>$name[103]['dimensions_name'],
                'sub_categories_names' =>$name[103]['sub_categories_names'],
                'value'=>$name[103]['value'],
                'categories_id'=>$name[103]['categories_id'],
                 'date_created'    => $name[103]['date_created'],
                  'date_modified'    => $name[103]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_assessment_id' => $name[104]['questions_assessment_id'] ,
                'name' => $name[104]['name'],
                'dimensions_name' =>$name[104]['dimensions_name'],
                'sub_categories_names' =>$name[104]['sub_categories_names'],
                'value'=>$name[104]['value'],
                'categories_id'=>$name[104]['categories_id'],
                 'date_created'    => $name[104]['date_created'],
                  'date_modified'    => $name[104]['date_modified'],
                  'email'=>$email,
               'test_name'=>'Work Personality Index',

                'time_slot'=>$time_slot,

            ),
//end

         );

    // echo "<pre>";print_r($insert_questions_data);exit;
     return   $this->db->insert_batch('work_personality_save_for_later', $insert_questions_data);


}

public function nayatel_save_for_later($name){
    //echo "fdgg";
    if(($this->uri->segment(3)!=0)){
	$data['dashboard_data']=$this->uri->segment(3);

}
else{
	$data['dashboard_data']=$this->session->userdata();
}
$email=$data['dashboard_data'];
$email=$email['email'];
   // echo "<pre>";print_r($name);exit;
    $time_slot=15;
    $insert_questions_data = array(
        array(

               'questions_id' => $name[0]['questions_id'] ,
                'name' => $name[0]['name'],
                'dimensions_name' =>$name[0]['dimensions_name'],
                'value'=>$name[0]['value'],
                'categories_id'=>$name[0]['categories_id'],
                 'date_created'    => $name[0]['date_created'],
                  'date_modified'    => $name[0]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',

                'time_slot'=>$time_slot,

            ),

             array(

               'questions_id' => $name[1]['questions_id'] ,
                'name' => $name[1]['name'],
                'dimensions_name' =>$name[1]['dimensions_name'],
                'value'=>$name[1]['value'],
                'categories_id'=>$name[1]['categories_id'],
                 'date_created'    => $name[1]['date_created'],
                  'date_modified'    => $name[1]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[2]['questions_id'] ,
                'name' => $name[2]['name'],
                'dimensions_name' =>$name[2]['dimensions_name'],
                'value'=>$name[2]['value'],
                'categories_id'=>$name[2]['categories_id'],
                 'date_created'    => $name[2]['date_created'],
                  'date_modified'    => $name[2]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[3]['questions_id'] ,
                'name' => $name[3]['name'],
                'dimensions_name' =>$name[3]['dimensions_name'],
                'value'=>$name[3]['value'],
                'categories_id'=>$name[3]['categories_id'],
                 'date_created'    => $name[3]['date_created'],
                  'date_modified'    => $name[3]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_id' => $name[4]['questions_id'] ,
                'name' => $name[4]['name'],
                'dimensions_name' =>$name[4]['dimensions_name'],
                'value'=>$name[4]['value'],
                'categories_id'=>$name[4]['categories_id'],
                 'date_created'    => $name[4]['date_created'],
                  'date_modified'    => $name[4]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,
            ),

            // 5
             array(

               'questions_id' => $name[5]['questions_id'] ,
                'name' => $name[5]['name'],
                'dimensions_name' =>$name[5]['dimensions_name'],
                'value'=>$name[5]['value'],
                'categories_id'=>$name[5]['categories_id'],
                 'date_created'    => $name[5]['date_created'],
                  'date_modified'    => $name[5]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,

            ),

             array(

               'questions_id' => $name[6]['questions_id'] ,
                'name' => $name[6]['name'],
                'dimensions_name' =>$name[6]['dimensions_name'],
                'value'=>$name[6]['value'],
                'categories_id'=>$name[6]['categories_id'],
                 'date_created'    => $name[6]['date_created'],
                  'date_modified'    => $name[6]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[7]['questions_id'] ,
                'name' => $name[7]['name'],
                'dimensions_name' =>$name[7]['dimensions_name'],
                'value'=>$name[7]['value'],
                'categories_id'=>$name[7]['categories_id'],
                 'date_created'    => $name[7]['date_created'],
                  'date_modified'    => $name[7]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[8]['questions_id'] ,
                'name' => $name[8]['name'],
                'dimensions_name' =>$name[8]['dimensions_name'],
                'value'=>$name[8]['value'],
                'categories_id'=>$name[8]['categories_id'],
                 'date_created'    => $name[8]['date_created'],
                  'date_modified'    => $name[8]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_id' => $name[9]['questions_id'] ,
                'name' => $name[9]['name'],
                'dimensions_name' =>$name[9]['dimensions_name'],
                'value'=>$name[9]['value'],
                'categories_id'=>$name[9]['categories_id'],
                 'date_created'    => $name[9]['date_created'],
                  'date_modified'    => $name[9]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,
            ),
            // 10
             array(

               'questions_id' => $name[10]['questions_id'] ,
                'name' => $name[10]['name'],
                'dimensions_name' =>$name[10]['dimensions_name'],
                'value'=>$name[10]['value'],
                'categories_id'=>$name[10]['categories_id'],
                 'date_created'    => $name[10]['date_created'],
                  'date_modified'    => $name[10]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,

            ),

             array(

               'questions_id' => $name[11]['questions_id'] ,
                'name' => $name[11]['name'],
                'dimensions_name' =>$name[11]['dimensions_name'],
                'value'=>$name[11]['value'],
                'categories_id'=>$name[11]['categories_id'],
                 'date_created'    => $name[11]['date_created'],
                  'date_modified'    => $name[11]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[12]['questions_id'] ,
                'name' => $name[12]['name'],
                'dimensions_name' =>$name[12]['dimensions_name'],
                'value'=>$name[12]['value'],
                'categories_id'=>$name[12]['categories_id'],
                 'date_created'    => $name[12]['date_created'],
                  'date_modified'    => $name[12]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[13]['questions_id'] ,
                'name' => $name[13]['name'],
                'dimensions_name' =>$name[13]['dimensions_name'],
                'value'=>$name[13]['value'],
                'categories_id'=>$name[13]['categories_id'],
                 'date_created'    => $name[13]['date_created'],
                  'date_modified'    => $name[13]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_id' => $name[14]['questions_id'] ,
                'name' => $name[14]['name'],
                'dimensions_name' =>$name[14]['dimensions_name'],
                'value'=>$name[14]['value'],
                'categories_id'=>$name[14]['categories_id'],
                 'date_created'    => $name[14]['date_created'],
                  'date_modified'    => $name[14]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,
            ),
            // 15
             array(

               'questions_id' => $name[15]['questions_id'] ,
                'name' => $name[15]['name'],
                'dimensions_name' =>$name[15]['dimensions_name'],
                'value'=>$name[15]['value'],
                'categories_id'=>$name[15]['categories_id'],
                 'date_created'    => $name[15]['date_created'],
                  'date_modified'    => $name[15]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,

            ),

             array(

               'questions_id' => $name[16]['questions_id'] ,
                'name' => $name[16]['name'],
                'dimensions_name' =>$name[16]['dimensions_name'],
                'value'=>$name[16]['value'],
                'categories_id'=>$name[16]['categories_id'],
                 'date_created'    => $name[16]['date_created'],
                  'date_modified'    => $name[16]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[17]['questions_id'] ,
                'name' => $name[17]['name'],
                'dimensions_name' =>$name[17]['dimensions_name'],
                'value'=>$name[17]['value'],
                'categories_id'=>$name[17]['categories_id'],
                 'date_created'    => $name[17]['date_created'],
                  'date_modified'    => $name[17]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[18]['questions_id'] ,
                'name' => $name[18]['name'],
                'dimensions_name' =>$name[18]['dimensions_name'],
                'value'=>$name[18]['value'],
                'categories_id'=>$name[18]['categories_id'],
                 'date_created'    => $name[18]['date_created'],
                  'date_modified'    => $name[18]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_id' => $name[19]['questions_id'] ,
                'name' => $name[19]['name'],
                'dimensions_name' =>$name[19]['dimensions_name'],
                'value'=>$name[19]['value'],
                'categories_id'=>$name[19]['categories_id'],
                 'date_created'    => $name[19]['date_created'],
                  'date_modified'    => $name[19]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[20]['questions_id'] ,
                'name' => $name[20]['name'],
                'dimensions_name' =>$name[20]['dimensions_name'],
                'value'=>$name[20]['value'],
                'categories_id'=>$name[20]['categories_id'],
                 'date_created'    => $name[20]['date_created'],
                  'date_modified'    => $name[20]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,
            ),

        //   21


        array(

               'questions_id' => $name[21]['questions_id'] ,
                'name' => $name[21]['name'],
                'dimensions_name' =>$name[21]['dimensions_name'],
                'value'=>$name[21]['value'],
                'categories_id'=>$name[21]['categories_id'],
                 'date_created'    => $name[21]['date_created'],
                  'date_modified'    => $name[21]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,

            ),

             array(

               'questions_id' => $name[22]['questions_id'] ,
                'name' => $name[22]['name'],
                'dimensions_name' =>$name[22]['dimensions_name'],
                'value'=>$name[22]['value'],
                'categories_id'=>$name[22]['categories_id'],
                 'date_created'    => $name[22]['date_created'],
                  'date_modified'    => $name[22]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[23]['questions_id'] ,
                'name' => $name[23]['name'],
                'dimensions_name' =>$name[23]['dimensions_name'],
                'value'=>$name[23]['value'],
                'categories_id'=>$name[23]['categories_id'],
                 'date_created'    => $name[23]['date_created'],
                  'date_modified'    => $name[23]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[24]['questions_id'] ,
                'name' => $name[24]['name'],
                'dimensions_name' =>$name[24]['dimensions_name'],
                'value'=>$name[24]['value'],
                'categories_id'=>$name[24]['categories_id'],
                 'date_created'    => $name[24]['date_created'],
                  'date_modified'    => $name[24]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_id' => $name[25]['questions_id'] ,
                'name' => $name[25]['name'],
                'dimensions_name' =>$name[25]['dimensions_name'],
                'value'=>$name[25]['value'],
                'categories_id'=>$name[25]['categories_id'],
                 'date_created'    => $name[25]['date_created'],
                  'date_modified'    => $name[25]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,
            ),

            // 5
             array(

               'questions_id' => $name[26]['questions_id'] ,
                'name' => $name[26]['name'],
                'dimensions_name' =>$name[26]['dimensions_name'],
                'value'=>$name[26]['value'],
                'categories_id'=>$name[26]['categories_id'],
                 'date_created'    => $name[26]['date_created'],
                  'date_modified'    => $name[26]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,

            ),

             array(

               'questions_id' => $name[27]['questions_id'] ,
                'name' => $name[27]['name'],
                'dimensions_name' =>$name[27]['dimensions_name'],
                'value'=>$name[27]['value'],
                'categories_id'=>$name[27]['categories_id'],
                 'date_created'    => $name[27]['date_created'],
                  'date_modified'    => $name[27]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[28]['questions_id'] ,
                'name' => $name[28]['name'],
                'dimensions_name' =>$name[28]['dimensions_name'],
                'value'=>$name[28]['value'],
                'categories_id'=>$name[28]['categories_id'],
                 'date_created'    => $name[28]['date_created'],
                  'date_modified'    => $name[28]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[29]['questions_id'] ,
                'name' => $name[29]['name'],
                'dimensions_name' =>$name[29]['dimensions_name'],
                'value'=>$name[29]['value'],
                'categories_id'=>$name[29]['categories_id'],
                 'date_created'    => $name[29]['date_created'],
                  'date_modified'    => $name[29]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_id' => $name[30]['questions_id'] ,
                'name' => $name[30]['name'],
                'dimensions_name' =>$name[30]['dimensions_name'],
                'value'=>$name[30]['value'],
                'categories_id'=>$name[30]['categories_id'],
                 'date_created'    => $name[30]['date_created'],
                  'date_modified'    => $name[30]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,
            ),
            //31
             array(

               'questions_id' => $name[31]['questions_id'] ,
                'name' => $name[31]['name'],
                'dimensions_name' =>$name[31]['dimensions_name'],
                'value'=>$name[31]['value'],
                'categories_id'=>$name[31]['categories_id'],
                 'date_created'    => $name[31]['date_created'],
                  'date_modified'    => $name[31]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,

            ),
            // 32

            array(

               'questions_id' => $name[32]['questions_id'] ,
                'name' => $name[32]['name'],
                'dimensions_name' =>$name[32]['dimensions_name'],
                'value'=>$name[32]['value'],
                'categories_id'=>$name[32]['categories_id'],
                 'date_created'    => $name[32]['date_created'],
                  'date_modified'    => $name[32]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,

            ),

             array(

               'questions_id' => $name[33]['questions_id'] ,
                'name' => $name[33]['name'],
                'dimensions_name' =>$name[33]['dimensions_name'],
                'value'=>$name[33]['value'],
                'categories_id'=>$name[33]['categories_id'],
                 'date_created'    => $name[33]['date_created'],
                  'date_modified'    => $name[33]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[34]['questions_id'] ,
                'name' => $name[34]['name'],
                'dimensions_name' =>$name[34]['dimensions_name'],
                'value'=>$name[34]['value'],
                'categories_id'=>$name[34]['categories_id'],
                 'date_created'    => $name[34]['date_created'],
                  'date_modified'    => $name[34]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[35]['questions_id'] ,
                'name' => $name[35]['name'],
                'dimensions_name' =>$name[35]['dimensions_name'],
                'value'=>$name[35]['value'],
                'categories_id'=>$name[35]['categories_id'],
                 'date_created'    => $name[35]['date_created'],
                  'date_modified'    => $name[35]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_id' => $name[36]['questions_id'] ,
                'name' => $name[36]['name'],
                'dimensions_name' =>$name[36]['dimensions_name'],
                'value'=>$name[36]['value'],
                'categories_id'=>$name[36]['categories_id'],
                 'date_created'    => $name[36]['date_created'],
                  'date_modified'    => $name[36]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,
            ),

            // 5
             array(

               'questions_id' => $name[37]['questions_id'] ,
                'name' => $name[37]['name'],
                'dimensions_name' =>$name[37]['dimensions_name'],
                'value'=>$name[37]['value'],
                'categories_id'=>$name[37]['categories_id'],
                 'date_created'    => $name[37]['date_created'],
                  'date_modified'    => $name[37]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,

            ),

             array(

               'questions_id' => $name[38]['questions_id'] ,
                'name' => $name[38]['name'],
                'dimensions_name' =>$name[38]['dimensions_name'],
                'value'=>$name[38]['value'],
                'categories_id'=>$name[38]['categories_id'],
                 'date_created'    => $name[38]['date_created'],
                  'date_modified'    => $name[38]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[39]['questions_id'] ,
                'name' => $name[39]['name'],
                'dimensions_name' =>$name[39]['dimensions_name'],
                'value'=>$name[39]['value'],
                'categories_id'=>$name[39]['categories_id'],
                 'date_created'    => $name[39]['date_created'],
                  'date_modified'    => $name[39]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[40]['questions_id'] ,
                'name' => $name[40]['name'],
                'dimensions_name' =>$name[40]['dimensions_name'],
                'value'=>$name[40]['value'],
                'categories_id'=>$name[40]['categories_id'],
                 'date_created'    => $name[40]['date_created'],
                  'date_modified'    => $name[40]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_id' => $name[41]['questions_id'] ,
                'name' => $name[41]['name'],
                'dimensions_name' =>$name[41]['dimensions_name'],
                'value'=>$name[41]['value'],
                'categories_id'=>$name[41]['categories_id'],
                 'date_created'    => $name[41]['date_created'],
                  'date_modified'    => $name[41]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,
            ),
            // 10
             array(

               'questions_id' => $name[42]['questions_id'] ,
                'name' => $name[42]['name'],
                'dimensions_name' =>$name[42]['dimensions_name'],
                'value'=>$name[42]['value'],
                'categories_id'=>$name[42]['categories_id'],
                 'date_created'    => $name[42]['date_created'],
                  'date_modified'    => $name[42]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,

            ),
            // 43

            array(

               'questions_id' => $name[43]['questions_id'] ,
                'name' => $name[43]['name'],
                'dimensions_name' =>$name[43]['dimensions_name'],
                'value'=>$name[43]['value'],
                'categories_id'=>$name[43]['categories_id'],
                 'date_created'    => $name[43]['date_created'],
                  'date_modified'    => $name[43]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,

            ),

             array(

               'questions_id' => $name[44]['questions_id'] ,
                'name' => $name[44]['name'],
                'dimensions_name' =>$name[44]['dimensions_name'],
                'value'=>$name[44]['value'],
                'categories_id'=>$name[44]['categories_id'],
                 'date_created'    => $name[44]['date_created'],
                  'date_modified'    => $name[44]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[45]['questions_id'] ,
                'name' => $name[45]['name'],
                'dimensions_name' =>$name[45]['dimensions_name'],
                'value'=>$name[45]['value'],
                'categories_id'=>$name[45]['categories_id'],
                 'date_created'    => $name[45]['date_created'],
                  'date_modified'    => $name[45]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[46]['questions_id'] ,
                'name' => $name[46]['name'],
                'dimensions_name' =>$name[46]['dimensions_name'],
                'value'=>$name[46]['value'],
                'categories_id'=>$name[46]['categories_id'],
                 'date_created'    => $name[46]['date_created'],
                  'date_modified'    => $name[46]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_id' => $name[47]['questions_id'] ,
                'name' => $name[47]['name'],
                'dimensions_name' =>$name[47]['dimensions_name'],
                'value'=>$name[47]['value'],
                'categories_id'=>$name[47]['categories_id'],
                 'date_created'    => $name[47]['date_created'],
                  'date_modified'    => $name[47]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,
            ),

            // 5
             array(

               'questions_id' => $name[48]['questions_id'] ,
                'name' => $name[48]['name'],
                'dimensions_name' =>$name[48]['dimensions_name'],
                'value'=>$name[48]['value'],
                'categories_id'=>$name[48]['categories_id'],
                 'date_created'    => $name[48]['date_created'],
                  'date_modified'    => $name[48]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,

            ),

             array(

               'questions_id' => $name[49]['questions_id'] ,
                'name' => $name[49]['name'],
                'dimensions_name' =>$name[49]['dimensions_name'],
                'value'=>$name[49]['value'],
                'categories_id'=>$name[49]['categories_id'],
                 'date_created'    => $name[49]['date_created'],
                  'date_modified'    => $name[49]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[50]['questions_id'] ,
                'name' => $name[50]['name'],
                'dimensions_name' =>$name[50]['dimensions_name'],
                'value'=>$name[50]['value'],
                'categories_id'=>$name[50]['categories_id'],
                 'date_created'    => $name[50]['date_created'],
                  'date_modified'    => $name[50]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[51]['questions_id'] ,
                'name' => $name[51]['name'],
                'dimensions_name' =>$name[51]['dimensions_name'],
                'value'=>$name[51]['value'],
                'categories_id'=>$name[51]['categories_id'],
                 'date_created'    => $name[51]['date_created'],
                  'date_modified'    => $name[51]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_id' => $name[52]['questions_id'] ,
                'name' => $name[52]['name'],
                'dimensions_name' =>$name[52]['dimensions_name'],
                'value'=>$name[52]['value'],
                'categories_id'=>$name[52]['categories_id'],
                 'date_created'    => $name[52]['date_created'],
                  'date_modified'    => $name[52]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,
            ),
            // 10
             array(

               'questions_id' => $name[53]['questions_id'] ,
                'name' => $name[53]['name'],
                'dimensions_name' =>$name[53]['dimensions_name'],
                'value'=>$name[53]['value'],
                'categories_id'=>$name[53]['categories_id'],
                 'date_created'    => $name[53]['date_created'],
                  'date_modified'    => $name[53]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,

            ),
            // 54

            array(

               'questions_id' => $name[54]['questions_id'] ,
                'name' => $name[54]['name'],
                'dimensions_name' =>$name[54]['dimensions_name'],
                'value'=>$name[54]['value'],
                'categories_id'=>$name[54]['categories_id'],
                 'date_created'    => $name[54]['date_created'],
                  'date_modified'    => $name[54]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,

            ),

             array(

               'questions_id' => $name[55]['questions_id'] ,
                'name' => $name[55]['name'],
                'dimensions_name' =>$name[55]['dimensions_name'],
                'value'=>$name[55]['value'],
                'categories_id'=>$name[55]['categories_id'],
                 'date_created'    => $name[55]['date_created'],
                  'date_modified'    => $name[55]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[56]['questions_id'] ,
                'name' => $name[56]['name'],
                'dimensions_name' =>$name[56]['dimensions_name'],
                'value'=>$name[56]['value'],
                'categories_id'=>$name[56]['categories_id'],
                 'date_created'    => $name[56]['date_created'],
                  'date_modified'    => $name[56]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[57]['questions_id'] ,
                'name' => $name[57]['name'],
                'dimensions_name' =>$name[57]['dimensions_name'],
                'value'=>$name[57]['value'],
                'categories_id'=>$name[57]['categories_id'],
                 'date_created'    => $name[57]['date_created'],
                  'date_modified'    => $name[57]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_id' => $name[58]['questions_id'] ,
                'name' => $name[58]['name'],
                'dimensions_name' =>$name[58]['dimensions_name'],
                'value'=>$name[58]['value'],
                'categories_id'=>$name[58]['categories_id'],
                 'date_created'    => $name[58]['date_created'],
                  'date_modified'    => $name[58]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,
            ),

            // 5
             array(

               'questions_id' => $name[59]['questions_id'] ,
                'name' => $name[59]['name'],
                'dimensions_name' =>$name[59]['dimensions_name'],
                'value'=>$name[59]['value'],
                'categories_id'=>$name[59]['categories_id'],
                 'date_created'    => $name[59]['date_created'],
                  'date_modified'    => $name[59]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,

            ),

             array(

               'questions_id' => $name[60]['questions_id'] ,
                'name' => $name[60]['name'],
                'dimensions_name' =>$name[60]['dimensions_name'],
                'value'=>$name[60]['value'],
                'categories_id'=>$name[60]['categories_id'],
                 'date_created'    => $name[60]['date_created'],
                  'date_modified'    => $name[60]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[61]['questions_id'] ,
                'name' => $name[61]['name'],
                'dimensions_name' =>$name[61]['dimensions_name'],
                'value'=>$name[61]['value'],
                'categories_id'=>$name[61]['categories_id'],
                 'date_created'    => $name[61]['date_created'],
                  'date_modified'    => $name[61]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[62]['questions_id'] ,
                'name' => $name[62]['name'],
                'dimensions_name' =>$name[62]['dimensions_name'],
                'value'=>$name[62]['value'],
                'categories_id'=>$name[62]['categories_id'],
                 'date_created'    => $name[62]['date_created'],
                  'date_modified'    => $name[62]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_id' => $name[63]['questions_id'] ,
                'name' => $name[63]['name'],
                'dimensions_name' =>$name[63]['dimensions_name'],
                'value'=>$name[63]['value'],
                'categories_id'=>$name[63]['categories_id'],
                 'date_created'    => $name[63]['date_created'],
                  'date_modified'    => $name[63]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[64]['questions_id'] ,
                'name' => $name[64]['name'],
                'dimensions_name' =>$name[64]['dimensions_name'],
                'value'=>$name[64]['value'],
                'categories_id'=>$name[64]['categories_id'],
                 'date_created'    => $name[64]['date_created'],
                  'date_modified'    => $name[64]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,

            ),
            //65

             array(

               'questions_id' => $name[65]['questions_id'] ,
                'name' => $name[65]['name'],
                'dimensions_name' =>$name[65]['dimensions_name'],
                'value'=>$name[65]['value'],
                'categories_id'=>$name[65]['categories_id'],
                 'date_created'    => $name[65]['date_created'],
                  'date_modified'    => $name[65]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
            'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[66]['questions_id'] ,
                'name' => $name[66]['name'],
                'dimensions_name' =>$name[66]['dimensions_name'],
                'value'=>$name[66]['value'],
                'categories_id'=>$name[66]['categories_id'],
                 'date_created'    => $name[66]['date_created'],
                  'date_modified'    => $name[66]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,
            ),

             array(

               'questions_id' => $name[67]['questions_id'] ,
                'name' => $name[67]['name'],
                'dimensions_name' =>$name[67]['dimensions_name'],
                'value'=>$name[67]['value'],
                'categories_id'=>$name[67]['categories_id'],
                 'date_created'    => $name[67]['date_created'],
                  'date_modified'    => $name[67]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,
            ),


             array(

               'questions_id' => $name[68]['questions_id'] ,
                'name' => $name[68]['name'],
                'dimensions_name' =>$name[68]['dimensions_name'],
                'value'=>$name[68]['value'],
                'categories_id'=>$name[68]['categories_id'],
                 'date_created'    => $name[68]['date_created'],
                  'date_modified'    => $name[68]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,
            ),
            // 10
             array(

               'questions_id' => $name[69]['questions_id'] ,
                'name' => $name[69]['name'],
                'dimensions_name' =>$name[69]['dimensions_name'],
                'value'=>$name[69]['value'],
                'categories_id'=>$name[69]['categories_id'],
                 'date_created'    => $name[69]['date_created'],
                  'date_modified'    => $name[69]['date_modified'],
                  'email'=>$email,
                'test_name'=>'Nayatel Values Assessment',
                'test_name'=>'Nayatel Values Assessment',
                'time_slot'=>$time_slot,

            ),

         );

    // echo "<pre>";print_r($insert_questions_data);exit;
     return   $this->db->insert_batch('nayatel_save_for_later', $insert_questions_data);

}

public function add_nayatel_value_statements_data($checkbox){

    if(($this->uri->segment(3)!=0)){
	$data['dashboard_data']=$this->uri->segment(3);

}
else{
	$data['dashboard_data']=$this->session->userdata();
}

//$organization=$data['dashboard_data'];
//$organization=$organization['organization'];
$department=$data['dashboard_data'];
$department=$department['department'];
$email=$data['dashboard_data'];
$email=$email['email'];
    // 	echo "<pre>";print_r($organization);echo "<br>";
    // 	echo "<pre>";print_r($department);exit;

$dimensions_name = $this->input->post('dimensions_name[]');
//echo "<pre>";print_r($dimensions_name);exit;
//    //echo "ghhh";exit;
//     $update = $this->db->update('questions_score_value',$nayatel_value_statements_score,$email);

//     return $update;

    $checkbox = $this->input->post('checkbox[]');
    //echo "<pre>";print_r($checkbox);exit;
                        $my_values1 = array();
                        $my_values2 = array();
                        $my_values3 = array();
                        $my_values4 = array();
                        $my_values5 = array();
                         $my_values6 = array();
                        $my_values7 = array();

                        //
                         $total1 = array();
                        $total2 = array();
                        $total3 = array();
                        $total4 = array();
                        $total5 = array();
                        $total6 = array();
                        $total7 = array();

    foreach($dimensions_name as $key => $value){
        //echo "<pre>";print_r($sub_categories_names[$key]);






        // Energy and Drive
           if($value=='Honesty (ایمانداری)') {

              $my_values1[$key] = $checkbox[$key];
               $total1 = array_sum($my_values1);

           }
           else if($value=='Excellence/Brilliance (بہترین کار کردگی)' ) {

              $my_values2[$key] = $checkbox[$key];
               $total2 = array_sum($my_values2);

           }
           else if($value=='Service (خدمت)') {

              $my_values3[$key] = $checkbox[$key];
               $total3 = array_sum($my_values3);

           }
           else if($value=='Respect (احترام)') {

              $my_values4[$key] = $checkbox[$key];
               $total4 = array_sum($my_values4);

           }
           else if($value=='Learning (سیکھ)') {

              $my_values5[$key] = $checkbox[$key];
               $total5 = array_sum($my_values5);

           }
           else if($value=='Innovation (جدت)' ) {

              $my_values6[$key] = $checkbox[$key];
               $total6 = array_sum($my_values6);

           }
           else if($value=='Simplicity (سادگی)') {

              $my_values7[$key] = $checkbox[$key];
               $total7 = array_sum($my_values7);

           }

        //   end

           else{

               //echo "bhh";
           }
    //         echo "<pre>";print_r($total1);"<br>";
    //   echo "<pre>";print_r($total2);"<br>";
    //   echo "<pre>";print_r($total3);"<br>";
    //     echo "<pre>";print_r($total4);"<br>";
    //      echo "<pre>";print_r($total5);"<br>";

       // }
     }
    //}

    // echo "<pre>";print_r($total1);"<br>";"<br>";
    // echo "<pre>";print_r($total2);"<br>";"<br>";
    // echo "<pre>";print_r($total3);"<br>";"<br>";
    // echo "<pre>";print_r($total4);"<br>";"<br>";
    //  echo "<pre>";print_r($total5);"<br>";"<br>";
    //  echo "<pre>";print_r($total6);"<br>";"<br>";
    // echo "<pre>";print_r($total7);"<br>";"<br>";
    // echo "<pre>";print_r($total8);"<br>";"<br>";
    // echo "<pre>";print_r($total9);"<br>";"<br>";
    //  echo "<pre>";print_r($total10);"<br>";"<br>";
    //  echo "<pre>";print_r($total11);"<br>";"<br>";
    // echo "<pre>";print_r($total12);"<br>";"<br>";
    // echo "<pre>";print_r($total13);"<br>";"<br>";
    // echo "<pre>";print_r($total14);"<br>";"<br>";
    //  echo "<pre>";print_r($total15);"<br>";"<br>";
    //  echo "<pre>";print_r($total16);"<br>";"<br>";
    // echo "<pre>";print_r($total17);"<br>";"<br>";
    // echo "<pre>";print_r($total8);"<br>";"<br>";
    // echo "<pre>";print_r($total19);"<br>";"<br>";
    // echo "<pre>";print_r($total20);"<br>";"<br>";
    // echo "<pre>";print_r($total21);"<br>";"<br>";
// exit;
    //  $Energy_and_drive =$total1+$total2+$total3+$total4+$total5+$total6+$total7+$total8;
    //  $Work_style=$total9+$total10+$total11+$total12+$total13;
    //  $Working_With_Others=$total14+$total15+$total16+$total17;
    //  $Dealing_with_pressure_and_Stress=$total18+$total19;
    //  $Problem_solving_style	=$total20+$total21;

    //  echo "<pre>";print_r($Energy_and_drive);"<br>";"<br>";
    // echo "<pre>";print_r($Work_style);"<br>";"<br>";
    // echo "<pre>";print_r($Working_With_Others);"<br>";"<br>";
    // echo "<pre>";print_r($Dealing_with_pressure_and_Stress);"<br>";"<br>";
    //  echo "<pre>";print_r($Problem_solving_style);"<br>";"<br>"; exit;



    // energy and drive


// calculation in percentage
//echo $value1;echo "<br>";echo "<br>";


$value1=$total1;
$value2=$total2;
$value3=$total3;
$value4=$total4;
$value5=$total5;
$value6=$total6;
$value7=$total7;


$value1=$value1/50;
$value2=$value2/50;
$value3=$value3/50;
$value4=$value4/50;
$value5=$value5/50;
$value6=$value6/50;
$value7=$value7/50;
// 1
$value1=$value1*100;
// if($value1=='0' || $value1<='16'){
//   $nayatel_value_score1="Low";

// }
// else if($value1=='17' || $value1<='32'){
//   $nayatel_value_score1="Medium";

// }
// else{
//     $nayatel_value_score1="High";

// }
// 2
$value2=$value2*100;
// if($value2=='0' || $value2<='16'){
//   $nayatel_value_score2="Low";

// }
// else if($value2=='17' || $value2<='32'){
//   $nayatel_value_score2="Medium";

// }
// else{
//     $nayatel_value_score2="High";

// }
// 3
$value3=$value3*100;
// if($value3=='0' || $value3<='16'){
//   $nayatel_value_score3="Low";

// }
// else if($value3=='17' || $value3<='32'){
//   $nayatel_value_score3="Medium";

// }
// else{
//     $nayatel_value_score3="High";

// }
// 4
$value4=$value4*100;
// if($value4=='0' || $value4<='16'){
//   $nayatel_value_score4="Low";

// }
// else if($value4=='17' || $value4<='32'){
//   $nayatel_value_score4="Medium";

// }
// else{
//     $nayatel_value_score4="High";

// }
// 5
$value5=$value5*100;
// if($value5=='0' || $value5<='16'){
//   $nayatel_value_score5="Low";

// }
// else if($value5=='17' || $value5<='32'){
//   $nayatel_value_score5="Medium";

// }
// else{
//     $nayatel_value_score5="High";

// }
// 6
$value6=$value6*100;
// if($value6=='0' || $value6<='16'){
//   $nayatel_value_score6="Low";

// }
// else if($value6=='17' || $value6<='32'){
//   $nayatel_value_score6="Medium";

// }
// else{
//     $nayatel_value_score6="High";

// }
// 7

$value7=$value7*100;
// if($value7=='0' || $value7<='16'){
//   $nayatel_value_score7="Low";

// }
// else if($value7=='17' || $value7<='32'){
//   $nayatel_value_score7="Medium";

// }
// else{
//     $nayatel_value_score7="High";

// }


//   echo "<pre>";print_r($total1);"<br>";"<br>";
//     echo "<pre>";print_r($total2);"<br>";"<br>";
//     echo "<pre>";print_r($total3);"<br>";"<br>";
//     echo "<pre>";print_r($total4);"<br>";"<br>";
//      echo "<pre>";print_r($total5);"<br>";"<br>";
//      echo "<pre>";print_r($total6);"<br>";"<br>";
//     echo "<pre>";print_r($total7);"<br>";"<br>";

// insert
$email = $email;
//$organization=$organization;
$department=$department;

 $un = $this->check_email_nayatel($email);
//echo "<pre>";print_r($un);exit;
            if(!$un) {
                // insert
        $date_created = date("Y-m-d H:i:s");
        $data = array(
            'Honesty' => $value1,
            'Excellence' => $value2,
            'Service' => $value3,
            'Respect' => $value4,
            'Learning' => $value5,
            'Innovation' => $value6,
             'Simplicity' => $value7,
            'email'    => $email,
             'status'    => 'enable',
             'date_created'    => $date_created,
             'organization'    => 'Nayatel',
             'department'    => $department,

            );

            $sumArray = array();

    //echo "<pre>";print_r($data);exit;
        $this->db->insert('nayatel_value_score',$data);
        $id= $this->db->insert_id();exit;
return redirect(base_url().'login/dashboard');
   // return   redirect(base_url().'callback');
       exit;
       //return

//update
            } else {

                $date_created = date("Y-m-d H:i:s");
        $data = array(
            'Honesty' => $value1,
            'Excellence' => $value2,
            'Service' => $value3,
            'Respect' => $value4,
            'Learning' => $value5,
            'Innovation' => $value6,
             'Simplicity' => $value7,
            'email'    => $email,
             'status'    => 'enable',
             'date_created'    => $date_created,
             'organization'    => 'Nayatel',
             'department'    => $department,

            );


        $email = array(
            'email' => $email,


            );
             //echo "<pre>";print_r($data);exit;
       return     $update = $this->db->update('nayatel_value_score',$data,$email);exit;

       return    redirect(base_url().'callback');exit;
            //return $update;
            }

exit;
$date_created = date("Y-m-d H:i:s");
        $data = array(
            'Honesty' => $nayatel_value_score1,
            'Excellence' => $nayatel_value_score2,
            'Service' => $nayatel_value_score3,
            'Respect' => $nayatel_value_score4,
            'Learning' => $nayatel_value_score5,
            'Innovation' => $nayatel_value_score6,
             'Simplicity' => $nayatel_value_score7,
            'email'    => $email,
             'status'    => 'enable',
             'date_created'    => $date_created,
             'organization'    => $organization,
             'department'    => $department,

            );

            $sumArray = array();

   // echo "<pre>";print_r($data);exit;
        $this->db->insert('nayatel_value_score',$data);
       return $id= $this->db->insert_id();exit;



$Energy_and_drive=$Energy_and_drive/200;
//echo $value1;echo "<br>";echo "<br>";
//$value1= (int) $value1;
//echo $value1;echo "<br>";exit;
$Energy_and_drive=$Energy_and_drive*100;
//echo $value1;echo "<br>";exit;



$Work_style=$Work_style/125;
//$value2= (int) $value2;
$Work_style=$Work_style*100;
//echo $value2;echo "<br>";

$Working_With_Others=$Working_With_Others/100;
//$value3= (int) $value3;
$Working_With_Others=$Working_With_Others*100;
//echo $value3;echo "<br>";


$Dealing_with_pressure_and_Stress=$Dealing_with_pressure_and_Stress/50;
//$value4= (int) $value4;
$Dealing_with_pressure_and_Stress=$Dealing_with_pressure_and_Stress*100;
//echo $value4;echo "<br>";


$Problem_solving_style=$Problem_solving_style/50;
//$value5= (int) $value5;
$Problem_solving_style=$Problem_solving_style*100;
//echo $value5;echo "<br>";

    //


// echo $Energy_and_drive;echo "<br>";
// echo $Work_style;echo "<br>";
// echo $Working_With_Others;echo "<br>";
// echo $Dealing_with_pressure_and_Stress;echo "<br>";echo $Problem_solving_style;echo "<br>";exit;
// echo $value11;echo "<br>";echo $value12;echo "<br>";
// echo $value13;echo "<br>";echo $value14;echo "<br>";
// echo $value15;echo "<br>";echo $value16;echo "<br>";
// echo $value17;echo "<br>";echo $value18;echo "<br>";
// echo $value19;echo "<br>";echo $value20;echo "<br>";
// echo $value21;echo "<br>";echo $value22;echo "<br>";
// echo $value23;echo "<br>";echo $value24;echo "<br>";
// echo $value25;echo "<br>";echo $value26;echo "<br>";exit;


//echo $value6;echo "<br>";
$total1=$total1/25;
//echo $value6;echo "<br>";
$total2=$total2/25;
$total3=$total3/25;
$total4=$total4/25;
$total5=$total5/25;
$total6=$total6/25;
$total7=$total7/25;
$total8=$total8/25;
$total9=$total9/25;
$total10=$total10/25;
$total11=$total11/25;
$total12=$total12/25;
$total13=$total13/25;
$total14=$total14/25;
$total15=$total15/25;
$total16=$total16/25;
$total17=$total17/25;
$total18=$total18/25;
$total19=$total19/25;
$total20=$total20/25;
$total21=$total21/25;

// 1
$total1=$total1*100;
//echo $total1;echo "<br>";
$total1=(int) $total1;
//echo $total1;echo "<br>";exit;
if($total1=='0' || $total1<='33'){
  $total1="Low";

}
else if($total1=='34' || $total1<='67'){
  $total1="Medium";

}
else{
    $total1="High";

}
// 2
$total2=$total2*100;
$total2=(int) $total2;
if($total2=='0' || $total2<='33'){
  $total2="Low";

}
else if($total2=='34' || $total2<='67'){
  $total2="Medium";

}
else{
    $total2="High";

}
// 3
$total3=$total3*100;
$total3=(int) $total3;
if($total3=='0' || $total3<='33'){
  $total3="Low";

}
else if($total3=='34' || $total3<='67'){
  $total3="Medium";

}
else{
    $total3="High";

}
    // 4
    $total4=$total4*100;
$total4=(int) $total4;
if($total4=='0' || $total4<='33'){
  $total4="Low";

}
else if($total4=='34' || $total4<='67'){
  $total4="Medium";

}
else{
    $total4="High";

}
    // 5
    $total5=$total5*100;
$total5=(int) $total5;
if($total5=='0' || $total5<='33'){
  $total5="Low";

}
else if($total5=='34' || $total5<='67'){
  $total5="Medium";

}
else{
    $total5="High";

}
    // 6
    $total6=$total6*100;
$total6=(int) $total6;
if($total6=='0' || $total6<='33'){
  $total6="Low";

}
else if($total6=='34' || $total6<='67'){
  $total6="Medium";

}
else{
    $total6="High";

}
// 7
$total7=$total7*100;
$total7=(int) $total7;
if($total7=='0' || $total7<='33'){
  $total7="Low";

}
else if($total7=='34' || $total7<='67'){
  $total7="Medium";

}
else{
    $total7="High";

}
    // 8
    $total8=$total8*100;
$total8=(int) $total8;
if($total8=='0' || $total8<='33'){
  $total8="Low";

}
else if($total8=='34' || $total8<='67'){
  $total8="Medium";

}
else{
    $total8="High";

}
    // 9
    $total9=$total9*100;
$total9=(int) $total9;
if($total9=='0' || $total9<='33'){
  $total9="Low";

}
else if($total9=='34' || $total9<='67'){
  $total9="Medium";

}
else{
    $total9="High";

}
    // 10
    $total10=$total10*100;
$total10=(int) $total10;
if($total10=='0' || $total10<='33'){
  $total10="Low";

}
else if($total10=='34' || $total10<='67'){
  $total10="Medium";

}
else{
    $total10="High";

}
    // 11
    $total11=$total11*100;
$total11=(int) $total11;
if($total11=='0' || $total11<='33'){
  $total11="Low";

}
else if($total11=='34' || $total11<='67'){
  $total11="Medium";

}
else{
    $total11="High";

}
    //12
    $total12=$total12*100;
$total12=(int) $total12;
if($total12=='0' || $total12<='33'){
  $total12="Low";

}
else if($total12=='34' || $total12<='67'){
  $total12="Medium";

}
else{
    $total12="High";

}
    //13
    $total13=$total13*100;
$total13=(int) $total13;
if($total13=='0' || $total13<='33'){
  $total13="Low";

}
else if($total13=='34' || $total13<='67'){
  $total13="Medium";

}
else{
    $total13="High";

}
    // 14
    $total14=$total14*100;
$total14=(int) $total14;
if($total14=='0' || $total14<='34'){
  $total14="Low";

}
else if($total14=='35' || $total14<='68'){
  $total14="Medium";

}
else{
    $total14="High";

}
// 15
$total15=$total15*100;
$total15=(int) $total15;
if($total15=='0' || $total15<='34'){
  $total15="Low";

}
else if($total15=='35' || $total15<='68'){
  $total15="Medium";

}
else{
    $total15="High";

}
// 16
$total16=$total16*100;
$total16=(int) $total16;
if($total16=='0' || $total16<='34'){
  $total16="Low";

}
else if($total16=='35' || $total16<='68'){
  $total16="Medium";

}
else{
    $total16="High";

}
// 17
$total17=$total17*100;
$total17=(int) $total17;
if($total17=='0' || $total17<='34'){
  $total17="Low";

}
else if($total17=='35' || $total17<='68'){
  $total17="Medium";

}
else{
    $total17="High";

}
// 18
$total18=$total18*100;
$total18=(int) $total18;
$total18=$total18/2;
if($total18=='0' || $total18<='16'){
  $total18="Low";

}
else if($total18=='17' || $total18<='32'){
  $total18="Medium";

}
else{
    $total18="High";

}
// 19
$total19=$total19*100;
$total19=(int) $total19;
$total19=$total19/2;
if($total19=='0' || $total19<='16'){
  $total19="Low";

}
else if($total19=='17' || $total19<='32'){
  $total19="Medium";

}
else{
    $total19="High";

}
// 20
$total20=$total20*100;
$total20=(int) $total20;
$total20=$total20/2;
if($total20=='0' || $total20<='16'){
  $total20="Low";

}
else if($total20=='17' || $total20<='32'){
  $total20="Medium";

}
else{
    $total20="High";

}
// 21
$total21=$total21*100;
$total21=(int) $total21;
$total21=$total21/2;
if($total21=='0' || $total21<='16'){
  $total21="Low";

}
else if($total21=='17' || $total21<='32'){
  $total21="Medium";

}
else{
    $total21="High";

}
// insert
        $date_created = date("Y-m-d H:i:s");
        $data = array(
            'Energy_and_drive' => $Energy_and_drive,
            'Work_style' => $Work_style,
            'Working_With_Others' => $Working_With_Others,
            'Dealing_with_pressure_and_Stress' => $Dealing_with_pressure_and_Stress,
            'Problem_solving_style' => $Problem_solving_style,
            'Ambition' => $total1,
            'Initiative' => $total2,
            'Flexibility' => $total3,
            'Energy' => $total4,
            'Leadership' => $total5,
            'Multi_tasking' => $total6,
            'Persuasion' => $total7,
            'Social_Confidence' => $total8,
            'Persistence' => $total9,
            'Attention_to_detail' => $total10,
            'Rule_Following' => $total11,
            'Dependability' => $total12,
            'Planning' => $total13,
            'Team_Work' => $total14,
            'Concern_for_others' => $total15,
            'Outgoing' => $total16,
            'Democratic' => $total17,
            'Self_control' => $total18,
            'Stress_Tolerance' => $total19,
            'Innovation' => $total20,
            'Analytical_Thinking' => $total21,


            'email'    => $email,
             'status'    => 'enable',
             'date_created'    => $date_created,

            );

            $sumArray = array();

    //echo "<pre>";print_r($data);exit;
        $this->db->insert('work_score',$data);
       return $id= $this->db->insert_id();exit;




}

public function add_personal_values_assessment_questions_data($checkbox,$email){

    $checkbox = $this->input->post('checkbox[]');
    $total = array_sum($checkbox);
   $total=$total/700;
   $total=$total*100;
   $total= (int) $total;
   // echo "<pre>";print_r($total);exit;
    $personal_values_assessment_score = array(
        'personal_values_assessment_score' => $total,


        );

        $email = array(
            'email' => $email,


            );

            $update = $this->db->update('questions_score_value',$personal_values_assessment_score,$email);
            //echo "<pre>";print_r($update);exit;
            return $update;

//echo "<pre>";print_r($data);exit;
    $this->db->insert('questions_score',$data);
   return $id= $this->db->insert_id();exit;
}

//questions_score_value

function add_cultural_scan_score($data)
{
    $insert = $this->db->insert('questions_score_value',$data);
    return $this->db->insert_id();
}

    public function add_cultural_scan_questions($checkbox,$email){


        $checkbox = $this->input->post('checkbox[]');

        $email = $email;
        $total = array_sum($checkbox);

       $my_values = array();
        $my_values1 = array();
         $my_values3 = array();
          $my_values4 = array();
           $my_values5 = array();
            $my_values6 = array();
 foreach($checkbox as $key => $value)
{

    for($i=$key;$i<=14;$i++){
    $my_values[$key] = $value;
    }

}

 foreach($checkbox as $key => $value)
{
   // $key=$key[15];
    for($i=$key;$i<=29;$i++){
    $my_values1[$key] = $value;
    }

}

// 3
 foreach($checkbox as $key => $value)
{
   // $key=$key[15];
    for($i=$key;$i<=44;$i++){
    $my_values3[$key] = $value;
    }

}
// 4
 foreach($checkbox as $key => $value)
{
   // $key=$key[15];
    for($i=$key;$i<=61;$i++){
    $my_values4[$key] = $value;
    }

}
// 5
 foreach($checkbox as $key => $value)
{
   // $key=$key[15];
    for($i=$key;$i<=78;$i++){
    $my_values5[$key] = $value;
    }

}
// 6
 foreach($checkbox as $key => $value)
{
   // $key=$key[15];
    for($i=$key;$i<=95;$i++){
    $my_values6[$key] = $value;
    }

}

 $total1 = array_sum($my_values);
 $total2 = array_sum($my_values1);
  $total3 = array_sum($my_values3);
  $total4 = array_sum($my_values4);
 $total5 = array_sum($my_values5);
  $total6 = array_sum($my_values6);
//   echo "<pre>";print_r($total1);
//   echo "<br>";
//   echo "<pre>";print_r($total2);
//   echo "<br>";
//   echo "<pre>";print_r($total3);
//     echo "<br>";
//  echo "<pre>";print_r($total4);
//   echo "<br>";
//   echo "<pre>";print_r($total5);
//   echo "<br>";
//   echo "<pre>";print_r($total6);
//   echo "<br>";
 // exit;
$value1=$total1;
$value2=$total2-$total1;
$value3=$total3-$total2;
$value4=$total4-$total3;
$value5=$total5-$total4;
$value6=$total6-$total5;
$value1=$value1/1500;
$value2=$value2/1500;
$value3=$value3/1500;
$value4=$value4/1700;
$value5=$value5/1700;
$value6=$value6/1700;
$value1=$value1*100;
if($value1=='0' || $value1<='35'){
  $cultural_scan_score1="Own interest or self oriented";

}
else if($value1=='36' || $value1<='55'){
  $cultural_scan_score1="Functional or many opportunities for improvement";

}
else{
    $cultural_scan_score1="Ideal or very functional";

}
// 2
$value2=$value2*100;
if($value2=='0' || $value2<='30'){
  $cultural_scan_score2="Extremely internally driven";

}
else if($value2=='31' || $value2<='50'){
  $cultural_scan_score2="Moderately internally driven";

}
else if($value2=='51' || $value2<='75'){
  $cultural_scan_score2="Moderately externally driven";

}
else{
    $cultural_scan_score2="Extremely externally driven";

}

// 3
$value3=$value3*100;
if($value3=='0' || $value3<='15'){
  $cultural_scan_score3="Very easy going";

}
else if($value3=='16' || $value3<='45'){
  $cultural_scan_score3="Easy-going";

}
else if($value3=='46' || $value3<='55'){
  $cultural_scan_score3="Informal or somehow disciplined";

}
else{
    $cultural_scan_score3="Strictly disciplined";

}

// 4
$value4=$value4*100;
if($value4=='0' || $value4<='45'){
  $cultural_scan_score4="Loyalty towards boss/group";

}
else if($value4=='46' || $value4<='55'){
  $cultural_scan_score4="Just do it or short term orientation";

}

else{
    $cultural_scan_score4="Professional attitude or career oriented";

}


// 5
$value5=$value5*100;
if($value5=='0' || $value5<='45'){
  $cultural_scan_score5="Open system";

}
else if($value5=='46' || $value5<='70'){
  $cultural_scan_score5="Closed to open system";

}

else{
    $cultural_scan_score5="Closed system";

}
// 6
$value6=$value6*100;
if($value6=='0' || $value6<='45'){
  $cultural_scan_score6="Employee oriented organization";

}
else if($value6=='46' || $value6<='55'){
  $cultural_scan_score6="Employee and job oriented";

}
else if($value6=='56' || $value6<='75'){
  $cultural_scan_score6="Work oriented";

}
else{
    $cultural_scan_score6="Very work oriented";

}



//  echo "<pre>";print_r($value1);
// echo "<br>";
//   echo "<pre>";print_r($cultural_scan_score1);exit;

// print
// echo "<pre>";print_r($value1);
//   echo "<br>";
//   echo "<pre>";print_r($value2);
//   echo "<br>";
//   echo "<pre>";print_r($value3);
//     echo "<br>";
//  echo "<pre>";print_r($value4);
//   echo "<br>";
//   echo "<pre>";print_r($value5);
//   echo "<br>";
//   echo "<pre>";print_r($value6);
//   echo "<br>";
//   exit;

       $date_created = date("Y-m-d H:i:s");
        $data = array(
            'cultural_scan_score1' => $cultural_scan_score1,
            'cultural_scan_score2' => $cultural_scan_score2,
            'cultural_scan_score3' => $cultural_scan_score3,
            'cultural_scan_score4' => $cultural_scan_score4,
            'cultural_scan_score5' => $cultural_scan_score5,
            'cultural_scan_score6' => $cultural_scan_score6,
            'email'    => $email,
             'status'    => 'enable',
             'date_created'    => $date_created,

            );

            $sumArray = array();

    //echo "<pre>";print_r($data);exit;
    // 1
    if ($value1==0 || $value1 <=55){
       $cultural_scan1='Means';
    }
    else{

        $cultural_scan1='Goal';
    }
    // 2
    if ($value2==0 || $value2 <=55){
       $cultural_scan2='Internally';
    }
    else{

        $cultural_scan2='Externally';
    }
    // 3
    if ($value3==0 || $value3 <=55){
       $cultural_scan3='Easygoing';
    }
    else{

        $cultural_scan3='Strict';
    }
    // 4
    if ($value4==0 || $value4 <=55){
       $cultural_scan4='Local';
    }
    else{

        $cultural_scan4='Professional';
    }
    // 5
    if ($value5==0 || $value5 <=55){
       $cultural_scan5='Open';
    }
    else{

        $cultural_scan5='Closed';
    }
    // 6
    if ($value6==0 || $value6 <=55){
       $cultural_scan6='Employee';
    }
    else{

        $cultural_scan6='Work';
    }
    $insert_questions_data = array(

            array(

               'cultural_scan_name' => $cultural_scan_score1 ,
                'cultural_scan' => $cultural_scan1 ,

               'value' =>$value1,



                'email'=>$email,
                'status'=>'enable',
                 'date_created'    => $date_created,

            ),

            array(

                'cultural_scan_name' => $cultural_scan_score2 ,
                'cultural_scan' => $cultural_scan2 ,

               'value' =>$value2,



                'email'=>$email,
                'status'=>'enable',
                 'date_created'    => $date_created,

            ),



            array(

               'cultural_scan_name' => $cultural_scan_score3,
                'cultural_scan' => $cultural_scan3,

               'value' =>$value3,


                'email'=>$email,
                'status'=>'enable',
                 'date_created'    => $date_created,

             ),

             array(

               'cultural_scan_name' => $cultural_scan_score4,
                'cultural_scan' => $cultural_scan4 ,

               'value' =>$value4,



                'email'=>$email,
                'status'=>'enable',
                 'date_created'    => $date_created,

             ),



             array(

                'cultural_scan_name' => $cultural_scan_score5,
                'cultural_scan' => $cultural_scan5 ,

               'value' =>$value5,



                'email'=>$email,
                'status'=>'enable',
                 'date_created'    => $date_created,

             ),

             array(

                'cultural_scan_name' => $cultural_scan_score6,
                'cultural_scan' => $cultural_scan6 ,

               'value' =>$value6,



                'email'=>$email,
                'status'=>'enable',
                 'date_created'    => $date_created,

             )




         );

        // echo "<pre>";print_r($insert_questions_data);exit;





         return   $this->db->insert_batch('cultural_scan_score', $insert_questions_data);exit;




        $this->db->insert('cultural_scan_score',$data);
       return $id= $this->db->insert_id();exit;



    }

public function add_work_form($checkbox,$email){


// $checkbox=$checkbox['checkbox'];
// $dimensions_name=$checkbox['dimensions_name'];
// $sub_categories_names=$checkbox['sub_categories_names'];
//echo "<pre>";print_r($checkbox);exit;
    $checkbox = $this->input->post('checkbox[]');

    $dimensions_name = $this->input->post('dimensions_name[]');
    $sub_categories_names = array();
    $sub_categories_names = $this->input->post('sub_categories_names[]');
    // echo "<pre>";print_r($checkbox);echo "<br>";exit;
    //  echo "<pre>";print_r($dimensions_name);echo "<br>";
    //  echo "<pre>";print_r($sub_categories_names);echo "<br>";
    // exit;
//     $categories_name = $dimensions_name;
//     $sub_categories_name = $sub_categories_names;
//   //


   //echo "<pre>";print_r($dimensions_name);exit;
                        $my_values1 = array();
                        $my_values2 = array();
                        $my_values3 = array();
                        $my_values4 = array();
                        $my_values5 = array();
                         $my_values6 = array();
                        $my_values7 = array();
                        $my_values8 = array();
                        $my_values9 = array();
                        $my_values10 = array();
                         $my_values11 = array();
                        $my_values12 = array();
                        $my_values13 = array();
                        $my_values14 = array();
                        $my_values15 = array();
                         $my_values16 = array();
                        $my_values17 = array();
                        $my_values18 = array();
                        $my_values19 = array();
                        $my_values20 = array();
                        $my_values21 = array();
                        //
                         $total1 = array();
                        $total2 = array();
                        $total3 = array();
                        $total4 = array();
                        $total5 = array();
                        $total6 = array();
                        $total7 = array();
                        $total8 = array();
                        $total9 = array();
                        $total10 = array();
                        $total11 = array();
                        $total12 = array();
                        $total13 = array();
                        $total14 = array();
                        $total15 = array();
                        $total16 = array();
                        $total17 = array();
                        $total18 = array();
                        $total19 = array();
                        $total20 = array();
                        $total21 = array();
    foreach($dimensions_name as $key => $value){
        //echo "<pre>";print_r($sub_categories_names[$key]);
     foreach($sub_categories_names as $values){




        // for($i=$key;$i<=104;$i++){
        // Energy and Drive
           if($value=='Energy and Drive' && $sub_categories_names[$key]== 'Ambition') {

              $my_values1[$key] = $checkbox[$key];
               $total1 = array_sum($my_values1);

           }
           else if($value=='Energy and Drive' && $sub_categories_names[$key]== 'Initiative') {

              $my_values2[$key] = $checkbox[$key];
               $total2 = array_sum($my_values2);

           }
           else if($value=='Energy and Drive' && $sub_categories_names[$key]== 'Flexibility') {

              $my_values3[$key] = $checkbox[$key];
               $total3 = array_sum($my_values3);

           }
           else if($value=='Energy and Drive' && $sub_categories_names[$key]== 'Energy') {

              $my_values4[$key] = $checkbox[$key];
               $total4 = array_sum($my_values4);

           }
           else if($value=='Energy and Drive' && $sub_categories_names[$key]== 'Leadership') {

              $my_values5[$key] = $checkbox[$key];
               $total5 = array_sum($my_values5);

           }
           else if($value=='Energy and Drive' && $sub_categories_names[$key]== 'Multi-tasking') {

              $my_values6[$key] = $checkbox[$key];
               $total6 = array_sum($my_values6);

           }
           else if($value=='Energy and Drive' && $sub_categories_names[$key]== 'Persuasion') {

              $my_values7[$key] = $checkbox[$key];
               $total7 = array_sum($my_values7);

           }
           else if($value=='Energy and Drive' && $sub_categories_names[$key]== 'Social Confidence') {

              $my_values8[$key] = $checkbox[$key];
               $total8 = array_sum($my_values8);

           }
        //   work style
        else if($value=='Work style' && $sub_categories_names[$key]== 'Persistence') {

              $my_values9[$key] = $checkbox[$key];
               $total9 = array_sum($my_values9);

           }
           else if($value=='Work style' && $sub_categories_names[$key]== 'Attention to detail') {

              $my_values10[$key] = $checkbox[$key];
               $total10 = array_sum($my_values10);

           }
           else if($value=='Work style' && $sub_categories_names[$key]== 'Rule-Following') {

              $my_values11[$key] = $checkbox[$key];
               $total11 = array_sum($my_values11);

           }
           else if($value=='Work style' && $sub_categories_names[$key]== 'Dependability') {

              $my_values12[$key] = $checkbox[$key];
               $total12 = array_sum($my_values12);

           }
           else if($value=='Work style' && $sub_categories_names[$key]== 'Planning') {

              $my_values13[$key] = $checkbox[$key];
               $total13 = array_sum($my_values13);

           }
        //   3rd working with others
         else if($value=='Working With Others' && $sub_categories_names[$key]== 'Team Work') {

              $my_values14[$key] = $checkbox[$key];
               $total14 = array_sum($my_values14);

           }
            else if($value=='Working With Others' && $sub_categories_names[$key]== 'Concern for others') {

              $my_values15[$key] = $checkbox[$key];
               $total15 = array_sum($my_values15);

           }
            else if($value=='Working With Others' && $sub_categories_names[$key]== 'Outgoing') {

              $my_values16[$key] = $checkbox[$key];
               $total16 = array_sum($my_values16);

           }
            else if($value=='Working With Others' && $sub_categories_names[$key]== 'Democratic') {

              $my_values17[$key] = $checkbox[$key];
               $total17 = array_sum($my_values17);

           }
        //   4th dealing with pressure and stress
         else if($value=='Dealing with pressure and Stress' && $sub_categories_names[$key]== 'Self-control') {

              $my_values18[$key] = $checkbox[$key];
               $total18 = array_sum($my_values18);

           }
            else if($value=='Dealing with pressure and Stress' && $sub_categories_names[$key]== 'Stress Tolerance') {

              $my_values19[$key] = $checkbox[$key];
               $total19 = array_sum($my_values19);

           }
        //   5th problem solving style
         else if($value=='Problem Solving Style' && $sub_categories_names[$key]== 'Innovation') {

              $my_values20[$key] = $checkbox[$key];
               $total20 = array_sum($my_values20);

           }
            else if($value=='Problem Solving Style' && $sub_categories_names[$key]== 'Analytical Thinking') {

              $my_values21[$key] = $checkbox[$key];
               $total21 = array_sum($my_values21);

           }
        //   end

           else{

               //echo "bhh";
           }
    //         echo "<pre>";print_r($total1);"<br>";
    //   echo "<pre>";print_r($total2);"<br>";
    //   echo "<pre>";print_r($total3);"<br>";
    //     echo "<pre>";print_r($tonal4);"<br>";
    //      echo "<pre>";print_r($total5);"<br>";

       // }
     }
    }


     $Energy_and_drive =$total1+$total2+$total3+$total4+$total5+$total6+$total7+$total8;
     $Work_style=$total9+$total10+$total11+$total12+$total13;
     $Working_With_Others=$total14+$total15+$total16+$total17;
     $Dealing_with_pressure_and_Stress=$total18+$total19;
     $Problem_solving_style	=$total20+$total21;

    //  echo "<pre>";print_r($Energy_and_drive);"<br>";"<br>";
    // echo "<pre>";print_r($Work_style);"<br>";"<br>";
    // echo "<pre>";print_r($Working_With_Others);"<br>";"<br>";
    // echo "<pre>";print_r($Dealing_with_pressure_and_Stress);"<br>";"<br>";
    //  echo "<pre>";print_r($Problem_solving_style);"<br>";"<br>"; exit;



    // energy and drive


// calculation in percentage
//echo $value1;echo "<br>";echo "<br>";
$Energy_and_drive=$Energy_and_drive/200;
//echo $value1;echo "<br>";echo "<br>";
//$value1= (int) $value1;
//echo $value1;echo "<br>";exit;
$Energy_and_drive=$Energy_and_drive*100;
//echo $value1;echo "<br>";exit;



$Work_style=$Work_style/125;
//$value2= (int) $value2;
$Work_style=$Work_style*100;
//echo $value2;echo "<br>";

$Working_With_Others=$Working_With_Others/100;
//$value3= (int) $value3;
$Working_With_Others=$Working_With_Others*100;
//echo $value3;echo "<br>";


$Dealing_with_pressure_and_Stress=$Dealing_with_pressure_and_Stress/50;
//$value4= (int) $value4;
$Dealing_with_pressure_and_Stress=$Dealing_with_pressure_and_Stress*100;
//echo $value4;echo "<br>";


$Problem_solving_style=$Problem_solving_style/50;
//$value5= (int) $value5;
$Problem_solving_style=$Problem_solving_style*100;
//echo $value5;echo "<br>";

    //


// echo $Energy_and_drive;echo "<br>";
// echo $Work_style;echo "<br>";
// echo $Working_With_Others;echo "<br>";
// echo $Dealing_with_pressure_and_Stress;echo "<br>";echo $Problem_solving_style;echo "<br>";exit;
// echo $value11;echo "<br>";echo $value12;echo "<br>";
// echo $value13;echo "<br>";echo $value14;echo "<br>";
// echo $value15;echo "<br>";echo $value16;echo "<br>";
// echo $value17;echo "<br>";echo $value18;echo "<br>";
// echo $value19;echo "<br>";echo $value20;echo "<br>";
// echo $value21;echo "<br>";echo $value22;echo "<br>";
// echo $value23;echo "<br>";echo $value24;echo "<br>";
// echo $value25;echo "<br>";echo $value26;echo "<br>";exit;


//echo $value6;echo "<br>";
$total1=$total1/25;
//echo $value6;echo "<br>";
$total2=$total2/25;
$total3=$total3/25;
$total4=$total4/25;
$total5=$total5/25;
$total6=$total6/25;
$total7=$total7/25;
$total8=$total8/25;
$total9=$total9/25;
$total10=$total10/25;
$total11=$total11/25;
$total12=$total12/25;
$total13=$total13/25;
$total14=$total14/25;
$total15=$total15/25;
$total16=$total16/25;
$total17=$total17/25;
$total18=$total18/25;
$total19=$total19/25;
$total20=$total20/25;
$total21=$total21/25;

// 1
$total1=$total1*100;
//echo $total1;echo "<br>";
// $total1=(int) $total1;
// //echo $total1;echo "<br>";exit;
// if($total1=='0' || $total1<='33'){
//   $total1="Low";

// }
// else if($total1=='34' || $total1<='67'){
//   $total1="Medium";

// }
// else{
//     $total1="High";

// }
// 2
$total2=$total2*100;
// $total2=(int) $total2;
// if($total2=='0' || $total2<='33'){
//   $total2="Low";

// }
// else if($total2=='34' || $total2<='67'){
//   $total2="Medium";

// }
// else{
//     $total2="High";

// }
// 3
$total3=$total3*100;
// $total3=(int) $total3;
// if($total3=='0' || $total3<='33'){
//   $total3="Low";

// }
// else if($total3=='34' || $total3<='67'){
//   $total3="Medium";

// }
// else{
//     $total3="High";

// }
    // 4
    $total4=$total4*100;
// $total4=(int) $total4;
// if($total4=='0' || $total4<='33'){
//   $total4="Low";

// }
// else if($total4=='34' || $total4<='67'){
//   $total4="Medium";

// }
// else{
//     $total4="High";

// }
    // 5
    $total5=$total5*100;
// $total5=(int) $total5;
// if($total5=='0' || $total5<='33'){
//   $total5="Low";

// }
// else if($total5=='34' || $total5<='67'){
//   $total5="Medium";

// }
// else{
//     $total5="High";

// }
    // 6
    $total6=$total6*100;
$total6=(int) $total6;
// if($total6=='0' || $total6<='33'){
//   $total6="Low";

// }
// else if($total6=='34' || $total6<='67'){
//   $total6="Medium";

// }
// else{
//     $total6="High";

// }
// 7
$total7=$total7*100;
// $total7=(int) $total7;
// if($total7=='0' || $total7<='33'){
//   $total7="Low";

// }
// else if($total7=='34' || $total7<='67'){
//   $total7="Medium";

// }
// else{
//     $total7="High";

// }
    // 8
    $total8=$total8*100;
// $total8=(int) $total8;
// if($total8=='0' || $total8<='33'){
//   $total8="Low";

// }
// else if($total8=='34' || $total8<='67'){
//   $total8="Medium";

// }
// else{
//     $total8="High";

// }
    // 9
    $total9=$total9*100;
// $total9=(int) $total9;
// if($total9=='0' || $total9<='33'){
//   $total9="Low";

// }
// else if($total9=='34' || $total9<='67'){
//   $total9="Medium";

// }
// else{
//     $total9="High";

// }
    // 10
    $total10=$total10*100;
// $total10=(int) $total10;
// if($total10=='0' || $total10<='33'){
//   $total10="Low";

// }
// else if($total10=='34' || $total10<='67'){
//   $total10="Medium";

// }
// else{
//     $total10="High";

// }
    // 11
    $total11=$total11*100;
// $total11=(int) $total11;
// if($total11=='0' || $total11<='33'){
//   $total11="Low";

// }
// else if($total11=='34' || $total11<='67'){
//   $total11="Medium";

// }
// else{
//     $total11="High";

// }
    //12
    $total12=$total12*100;
// $total12=(int) $total12;
// if($total12=='0' || $total12<='33'){
//   $total12="Low";

// }
// else if($total12=='34' || $total12<='67'){
//   $total12="Medium";

// }
// else{
//     $total12="High";

// }
    //13
    $total13=$total13*100;
// $total13=(int) $total13;
// if($total13=='0' || $total13<='33'){
//   $total13="Low";

// }
// else if($total13=='34' || $total13<='67'){
//   $total13="Medium";

// }
// else{
//     $total13="High";

// }
    // 14
    $total14=$total14*100;
// $total14=(int) $total14;
// if($total14=='0' || $total14<='34'){
//   $total14="Low";

// }
// else if($total14=='35' || $total14<='68'){
//   $total14="Medium";

// }
// else{
//     $total14="High";

// }
// 15
$total15=$total15*100;
// $total15=(int) $total15;
// if($total15=='0' || $total15<='34'){
//   $total15="Low";

// }
// else if($total15=='35' || $total15<='68'){
//   $total15="Medium";

// }
// else{
//     $total15="High";

// }
// 16
$total16=$total16*100;
// $total16=(int) $total16;
// if($total16=='0' || $total16<='34'){
//   $total16="Low";

// }
// else if($total16=='35' || $total16<='68'){
//   $total16="Medium";

// }
// else{
//     $total16="High";

// }
// 17
$total17=$total17*100;
// $total17=(int) $total17;
// if($total17=='0' || $total17<='34'){
//   $total17="Low";

// }
// else if($total17=='35' || $total17<='68'){
//   $total17="Medium";

// }
// else{
//     $total17="High";

// }
// 18
$total18=$total18*100;
// $total18=(int) $total18;
// $total18=$total18/2;
// if($total18=='0' || $total18<='16'){
//   $total18="Low";

// }
// else if($total18=='17' || $total18<='32'){
//   $total18="Medium";

// }
// else{
//     $total18="High";

// }
// 19
$total19=$total19*100;
// $total19=(int) $total19;
// $total19=$total19/2;
// if($total19=='0' || $total19<='16'){
//   $total19="Low";

// }
// else if($total19=='17' || $total19<='32'){
//   $total19="Medium";

// }
// else{
//     $total19="High";

// }
// 20
$total20=$total20*100;
// $total20=(int) $total20;
// $total20=$total20/2;
// if($total20=='0' || $total20<='16'){
//   $total20="Low";

// }
// else if($total20=='17' || $total20<='32'){
//   $total20="Medium";

// }
// else{
//     $total20="High";

// }
// 21
$total21=$total21*100;
// $total21=(int) $total21;
// $total21=$total21/2;
// if($total21=='0' || $total21<='16'){
//   $total21="Low";

// }
// else if($total21=='17' || $total21<='32'){
//   $total21="Medium";

// }
// else{
//     $total21="High";

// }
//  echo "<pre>";print_r($total1);"<br>";"<br>";
//     echo "<pre>";print_r($total2);"<br>";"<br>";
//     echo "<pre>";print_r($total3);"<br>";"<br>";
//     echo "<pre>";print_r($total4);"<br>";"<br>";
//      echo "<pre>";print_r($total5);"<br>";"<br>";
//      echo "<pre>";print_r($total6);"<br>";"<br>";
//     echo "<pre>";print_r($total7);"<br>";"<br>";
//     echo "<pre>";print_r($total8);"<br>";"<br>";
//     echo "<pre>";print_r($total9);"<br>";"<br>";
//      echo "<pre>";print_r($total10);"<br>";"<br>";
//      echo "<pre>";print_r($total11);"<br>";"<br>";
//     echo "<pre>";print_r($total12);"<br>";"<br>";
//     echo "<pre>";print_r($total13);"<br>";"<br>";
//     echo "<pre>";print_r($total14);"<br>";"<br>";
//      echo "<pre>";print_r($total15);"<br>";"<br>";
//      echo "<pre>";print_r($total16);"<br>";"<br>";
//     echo "<pre>";print_r($total17);"<br>";"<br>";
//     echo "<pre>";print_r($total8);"<br>";"<br>";
//     echo "<pre>";print_r($total19);"<br>";"<br>";
//     echo "<pre>";print_r($total20);"<br>";"<br>";
//     echo "<pre>";print_r($total21);"<br>";"<br>";
//  exit;
$email = $email;

 $un = $this->check_email($email);

            if(!$un) {
                // insert
        $date_created = date("Y-m-d H:i:s");
        $data = array(
            'Energy_and_drive' => $Energy_and_drive,
            'Work_style' => $Work_style,
            'Working_With_Others' => $Working_With_Others,
            'Dealing_with_pressure_and_Stress' => $Dealing_with_pressure_and_Stress,
            'Problem_solving_style' => $Problem_solving_style,
            'Ambition' => $total1,
            'Initiative' => $total2,
            'Flexibility' => $total3,
            'Energy' => $total4,
            'Leadership' => $total5,
            'Multi_tasking' => $total6,
            'Persuasion' => $total7,
            'Social_Confidence' => $total8,
            'Persistence' => $total9,
            'Attention_to_detail' => $total10,
            'Rule_Following' => $total11,
            'Dependability' => $total12,
            'Planning' => $total13,
            'Team_Work' => $total14,
            'Concern_for_others' => $total15,
            'Outgoing' => $total16,
            'Democratic' => $total17,
            'Self_control' => $total18,
            'Stress_Tolerance' => $total19,
            'Innovation' => $total20,
            'Analytical_Thinking' => $total21,


            'email'    => $email,
             'status'    => 'enable',
             'date_created'    => $date_created,

            );

            $sumArray = array();

   //echo "<pre>";print_r($data);exit;
        $this->db->insert('work_score',$data);
        $id= $this->db->insert_id();
        redirect(base_url().'dashboard/login');exit;

// update
            } else {

                 $date_created = date("Y-m-d H:i:s");
        $data = array(
            'Energy_and_drive' => $Energy_and_drive,
            'Work_style' => $Work_style,
            'Working_With_Others' => $Working_With_Others,
            'Dealing_with_pressure_and_Stress' => $Dealing_with_pressure_and_Stress,
            'Problem_solving_style' => $Problem_solving_style,
            'Ambition' => $total1,
            'Initiative' => $total2,
            'Flexibility' => $total3,
            'Energy' => $total4,
            'Leadership' => $total5,
            'Multi_tasking' => $total6,
            'Persuasion' => $total7,
            'Social_Confidence' => $total8,
            'Persistence' => $total9,
            'Attention_to_detail' => $total10,
            'Rule_Following' => $total11,
            'Dependability' => $total12,
            'Planning' => $total13,
            'Team_Work' => $total14,
            'Concern_for_others' => $total15,
            'Outgoing' => $total16,
            'Democratic' => $total17,
            'Self_control' => $total18,
            'Stress_Tolerance' => $total19,
            'Innovation' => $total20,
            'Analytical_Thinking' => $total21,


            'email'    => $email,
             'status'    => 'enable',
             'date_created'    => $date_created,

            );


        $email = array(
            'email' => $email,


            );
            //echo "<pre>";print_r($data);exit;
            $update = $this->db->update('work_score',$data,$email);
              redirect(base_url().'dashboard/login');exit;
           // return $update;
            }



   //end //
      redirect(base_url().'dashboard/login');exit;

exit;


//echo "<pre>";print_r($data);exit;
//     $this->db->insert('questions_score',$data);
//   return $id= $this->db->insert_id();exit;



}

public function check_email_nayatel($email){

    $where = array(
			'email' => $email
		);
		$this->db->select('email');
		$this->db->from('nayatel_value_score');
		$this->db->where($where);
		$query = $this->db->get();
		return $query->first_row('array');
}

   function check_email($email)
	{
        $where = array(
			'email' => $email
		);
		$this->db->select('*');
		$this->db->from('work_score');
		$this->db->where($where);
		$query = $this->db->get();
		return $query->first_row('array');
    }


public function get_description_score($id){

    $categories_id=$id;
    $this->db->select("*");
    $this->db->from("questions_score");
    $this->db->limit(1);
    $this->db->order_by('questions_score_id',"DESC");
    $query = $this->db->get();


    $score=$query->row();

  return $score=$score->score;
   //echo "<pre>";print_r($score);exit;
}

public function get_description($id){
     $categories_id=$id;
     $sql = "SELECT * FROM  description  WHERE categories_id='$categories_id' ORDER BY description_id ASC ";
     $query = $this->db->query($sql);
     return $query->result_array();


}

// manager model
function show() {

    $sql = "SELECT * FROM categories ORDER BY categories_id ASC";
//echo "<pre>";print_r($sql);exit;
    $query = $this->db->query($sql);

    return $query->result_array();

}

public function get_employees(){
   //$email='uzair.hussain7@gmail.com';
    $this->db->select('*');
$this->db->join('sign_up', 'work_score.email = sign_up.email');

$this->db->order_by('sign_up.id',"DESC");
$this->db->order_by('sign_up.first_name', 'ASC');
//$this->db->order_by('sign_up.last_name', 'ASC');
$query = $this->db->get('work_score');

return $query->result_array();exit;
echo "<pre>";print_r($query);exit;
   print_r($result);exit;
$email='uzair.hussain7@gmail.com';
$this->db->select('*');
$this->db->from('sign_up sign_up');
$this->db->join('work_score work_score','sign_up.email = work_score.email');
    $where = array(
			'email' => $email
		);
$this->db->where($where);
$result = $this->db->get()->result_array();
print_r($result);exit;
//work_score

    $sql = "SELECT * FROM sign_up ORDER BY id ASC";
    $query = $this->db->query($sql);
    return $query->result_array();
}

}
