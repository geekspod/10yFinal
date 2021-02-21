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

   
    public function category_check($id) {
        $sql = 'SELECT * FROM tbl_category WHERE category_id=?';
        $query = $this->db->query($sql,array($id));
        return $query->num_rows();
    }
public function get_all_Work_personality_index($categories_id){

    $sql = "SELECT * FROM  questions_assessment  WHERE categories_id='$categories_id' ORDER BY questions_assessment_id ASC ";
    $query = $this->db->query($sql);
    return $query->result_array(); 
}
public function count_active_records($id){

    $this->db->where('categories_id',$id);
    return  $result = $this->db->get('questions_assessment')->num_rows();
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

public function add_work_form($checkbox){


    $checkbox = $this->input->post('checkbox[]');
    $total = array_sum($checkbox);
   
    $data = array(
        'score' => $total,
        'categories_id'=>'5',
       
        );
//echo "<pre>";print_r($data);exit;
    $this->db->insert('questions_score',$data);
   return $id= $this->db->insert_id();exit;



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

}