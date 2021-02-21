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
public function get_all_personality_assessment_questions($categories_id){

    $sql = "SELECT * FROM  questions_assessment  WHERE categories_id='$categories_id' ORDER BY questions_assessment_id ASC ";
    $query = $this->db->query($sql);
    return $query->result_array(); 
}

public function get_all_nayatel_value_statements($categories_id){

    $sql = "SELECT * FROM  questions_assessment  WHERE categories_id='$categories_id' ORDER BY questions_assessment_id ASC ";
    $query = $this->db->query($sql);
    return $query->result_array(); 
}

public function get_all_personal_values_assessment($categories_id){
    $sql = "SELECT * FROM  questions_assessment  WHERE categories_id='$categories_id' ORDER BY questions_assessment_id ASC ";
    $query = $this->db->query($sql);
    return $query->result_array(); 

}

public function get_all_cultural_scan_data($categories_id){

    $sql = "SELECT * FROM  questions_assessment  WHERE categories_id='$categories_id' ORDER BY questions_assessment_id ASC ";
    $query = $this->db->query($sql);
    return $query->result_array(); 

}

public function get_all_Work_personality_index($categories_id){

    $sql = "SELECT * FROM  questions_assessment  WHERE categories_id='$categories_id' ORDER BY questions_assessment_id ASC ";
    $query = $this->db->query($sql);
    return $query->result_array(); 
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
public function add_personality_assessment_questions_data($checkbox){
    $checkbox = $this->input->post('checkbox[]');
    $total = array_sum($checkbox);
   
    $data = array(
        'score' => $total,
        'categories_id'=>'4',
       
        );
//echo "<pre>";print_r($data);exit;
    $this->db->insert('questions_score',$data);
   return $id= $this->db->insert_id();exit; 

}

public function add_nayatel_value_statements_data($checkbox){
    $checkbox = $this->input->post('checkbox[]');
    $total = array_sum($checkbox);
   
    $data = array(
        'score' => $total,
        'categories_id'=>'2',
       
        );
//echo "<pre>";print_r($data);exit;
    $this->db->insert('questions_score',$data);
   return $id= $this->db->insert_id();exit;  

}

public function add_personal_values_assessment_questions_data($checkbox){

    $checkbox = $this->input->post('checkbox[]');
    $total = array_sum($checkbox);
   
    $data = array(
        'score' => $total,
        'categories_id'=>'3',
       
        );
//echo "<pre>";print_r($data);exit;
    $this->db->insert('questions_score',$data);
   return $id= $this->db->insert_id();exit;  
}

    public function add_cultural_scan_questions($checkbox){


        $checkbox = $this->input->post('checkbox[]');
        $total = array_sum($checkbox);
       
        $data = array(
            'score' => $total,
            'categories_id'=>'1',
           
            );
    //echo "<pre>";print_r($data);exit;
        $this->db->insert('questions_score',$data);
       return $id= $this->db->insert_id();exit;
    
    
    
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