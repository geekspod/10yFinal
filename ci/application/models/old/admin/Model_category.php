<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_category extends CI_Model 
{
	function get_auto_increment_id()
    {
        $sql = "SHOW TABLE STATUS LIKE 'tbl_category'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function show() {
        $sql = "SELECT * FROM categories ORDER BY categories_id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
public function get_all_dimensions(){

    $sql = "SELECT * FROM dimensions ORDER BY dimensions_id	 ASC";
    $query = $this->db->query($sql);
    return $query->result_array();   
}

public function get_all_sub_categories(){

    $sql = "SELECT * FROM sub_categories ORDER BY sub_categories_id	 ASC";
    $query = $this->db->query($sql);
    return $query->result_array();   
}
function get_edit_sub_categories($id)
    { 
        $sub_categories_id=$id;
        $sql = 'SELECT * FROM sub_categories WHERE sub_categories_id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

    public function get_description($id){

        $description_id=$id;
        $sql = 'SELECT * FROM description WHERE description_id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array'); 
    }

public function get_sub_categories($id){
    $categories_id=$id;
    $sql = "SELECT * FROM dimensions WHERE categories_id='$categories_id' ORDER BY dimensions_id ASC ";
    $query = $this->db->query($sql);
    return $query->result_array(); 

}


    public function get_dimensions(){

        $sql = "SELECT * FROM categories ORDER BY categories_id	 ASC";
        $query = $this->db->query($sql);
        return $query->result_array();  
    }

   public function view_all_cultural_scan($id){
       $categories_id=$id;
    $sql = "SELECT * FROM questions WHERE categories_id='$categories_id' ORDER BY questions_id ASC ";
    $query = $this->db->query($sql);
    return $query->result_array();  

   } 
public function get_all_Work_personality_index($id){

    $sql = "SELECT * FROM  questions_assessment  WHERE categories_id='$categories_id' ORDER BY questions_assessment_id ASC ";
    $query = $this->db->query($sql);
    return $query->result_array();  
}
public function add_description($id){

    $this->db->insert('description',$id);
    return $this->db->insert_id();
    
}
public function add_sub_categories_data($id){

    $this->db->insert('sub_categories',$id);
    return $this->db->insert_id(); 
}

public function get_questions_score_description(){

   // $categories_id=$id;
    $sql = "SELECT * FROM description ORDER BY description_id ASC ";
    $query = $this->db->query($sql);
    return $query->result_array();  
}
   public function get_Work_personality_index($id){

    $edit_Work_personality_index= $this->uri->segment(3);
    if($edit_Work_personality_index=='edit_Work_personality_index'){
      $categories_id=5; 
    }
    else{        //edit_personality_assessment
  $categories_id=4;
    }
  $sql = "SELECT * FROM  radio_assessment  WHERE categories_id='$categories_id' ORDER BY radio_assessment_id ASC ";
  $query = $this->db->query($sql);
  return $query->result_array();  

}



   public function get_personality_assessment(){
      $edit_Work_personality_index= $this->uri->segment(3);
      if($edit_Work_personality_index=='edit_Work_personality_index'){
        $categories_id=5; 
      }
      else{      //edit_personality_assessment
    $categories_id=4;
      }
    $sql = "SELECT * FROM  radio_assessment  WHERE categories_id='$categories_id' ORDER BY radio_assessment_id ASC ";
    $query = $this->db->query($sql);
    return $query->result_array();  

      
}

   public function view_all_nayatel_values_assessment($id){

    $categories_id=$id;
    $sql = "SELECT * FROM questions WHERE categories_id='$categories_id' ORDER BY questions_id ASC ";
    $query = $this->db->query($sql);
    return $query->result_array();  

   }

public function view_all_personal_values_assessment($id){

    $categories_id=$id;
    $sql = "SELECT * FROM questions WHERE categories_id='$categories_id' ORDER BY questions_id ASC ";
    $query = $this->db->query($sql);
    return $query->result_array();     
}

public function view_all_personality_assessment($id){

    $categories_id=$id;
    $sql = "SELECT * FROM questions_assessment WHERE categories_id='$categories_id' ORDER BY questions_assessment_id ASC ";
    $query = $this->db->query($sql);
    return $query->result_array();   
}

public function view_all_Work_personality_index($id){
    $categories_id=$id;
    $sql = "SELECT * FROM questions_assessment WHERE categories_id='$categories_id' ORDER BY questions_assessment_id ASC ";
    $query = $this->db->query($sql);
    return $query->result_array();  

}
public function get_data_sub_categories($id){
   

  $sql = 'SELECT * FROM sub_categories WHERE sub_categories_id=?';
  $query = $this->db->query($sql,array($id));
  return $query->first_row('array');  
    
    }
public function get_delete_questions_score_description($id){
$description_id=$id;
    $sql = 'SELECT * FROM description WHERE description_id=?';
    $query = $this->db->query($sql,array($id));
    return $query->first_row('array'); 
}

public function get_questions_assessment($id){

    $sql = 'SELECT * FROM questions_assessment WHERE questions_assessment_id=?';
    $query = $this->db->query($sql,array($id));
    return $query->first_row('array');  
}

public function get_questions($id){

    $sql = 'SELECT * FROM questions WHERE questions_id=?';
    $query = $this->db->query($sql,array($id));
    return $query->first_row('array'); 
}

    function get_one_dimensions($id)
    { 
        $sql = 'SELECT * FROM dimensions WHERE dimensions_id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

    // public function get_one_dimensions(){

    //     $sql = "SELECT * FROM dimensions ORDER BY dimensions_id	 ASC";
    //     $query = $this->db->query($sql);
    //     return $query->result_array();  
    // }
    function add($data) {
        $this->db->insert('tbl_category',$data);
        return $this->db->insert_id();
    }
    function add_categories($data) {
        $this->db->insert('categories',$data);
        return $this->db->insert_id();
    }

public function personal_values_assessment_data(){


}
public function add_work_personality_index($data){
    
}

public function personality_assessment_data($data){

   
    $insert_in_questions=array(
        'name1'=>$_POST['name1'],
        'name2'=>$_POST['name2'],
        'name3'=>$_POST['name3'],
        'name4'=>$_POST['name4'],
        'name5'=>$_POST['name5'],
        'name6'=>$_POST['name6'],
        'name7'=>$_POST['name7'],
        'name8'=>$_POST['name8'],
        'name9'=>$_POST['name9'],
        'name10'=>$_POST['name10'],
        'name11'=>$_POST['name11'],
        'name12'=>$_POST['name12'],
        'name13'=>$_POST['name13'],
        'name14'=>$_POST['name14'],
        'name15'=>$_POST['name15'],
    // 'value1' =>$_POST['radio1'], 
    // 'value2' =>$_POST['radio2'],  
    // 'value3' =>$_POST['radio3'],  
    // 'value4' =>$_POST['radio4'], 
    // 'value5' =>$_POST['radio5'], 
    // 'value6' =>$_POST['radio6'],  
    // 'value7' =>$_POST['radio7'],  
    // 'value8' =>$_POST['radio8'],  
    // 'value9' =>$_POST['radio9'], 
    // 'value10' =>$_POST['radio10'],  
    // 'value11' =>$_POST['radio11'],  
    // 'value12' =>$_POST['radio12'], 
    // 'value13' =>$_POST['radio13'], 
    // 'value14' =>$_POST['radio14'],  
    // 'value15' =>$_POST['radio15'],     
    'categories_id'=>$data['categories_id'],
    'date_created'=>$data['date_created'],
    );
    $name1=$data['name1'];
    $name2=$data['name2'];
    $name3=$data['name3'];
    $name4=$data['name4'];
    $name5=$data['name5'];
    $name6=$data['name6'];
    $name7=$data['name7'];
    $name8=$data['name8'];
    $name9=$data['name9'];
    $name10=$data['name10'];
    $name11=$data['name11'];
    $name12=$data['name12'];
    $name13=$data['name13'];
    $name14=$data['name14'];
    $name15=$data['name15'];

    // $value1=$data['value1'];
    // $value2=$data['value2'];
    // $value3=$data['value3'];
    // $value4=$data['value4'];
    // $value5=$data['value5'];
    // $value6=$data['value6'];
    // $value7=$data['value7'];
    // $value8=$data['value8'];
    // $value9=$data['value9'];
    // $value10=$data['value10'];
    // $value11=$data['value11'];
    // $value12=$data['value12'];
    // $value13=$data['value13'];
    // $value14=$data['value14'];
    // $value15=$data['value15'];


    
    $categories_id=$data['categories_id'];
    $date_created=$data['date_created'];
    $insert_questions_data = array(
        array(
           'name' => $name1,
           //'value' =>$value1, 
           'categories_id'=>$data['categories_id'],
           'date_created'=>$data['date_created'],
        ),
        array(
           'name' => $name2 ,
           //'value' =>$value2,  
           'categories_id'=>$data['categories_id'],
    'date_created'=>$data['date_created'],
        ),

        array(
            'name' => $name3,
            //'value' =>$value3, 
            'categories_id'=>$data['categories_id'],
     'date_created'=>$data['date_created'],
         ),
         array(
            'name' => $name4 ,
           // 'value' =>$value4,  
            'categories_id'=>$data['categories_id'],
     'date_created'=>$data['date_created'],
         ),

         array(
            'name' => $name5,
           // 'value' =>$value5, 
            'categories_id'=>$data['categories_id'],
     'date_created'=>$data['date_created'],
         ),
         array(
            'name' => $name6,
           // 'value' =>$value6,  
            'categories_id'=>$data['categories_id'],
     'date_created'=>$data['date_created'],
         ),

         array(
             'name' => $name7,
            // 'value' =>$value7, 
             'categories_id'=>$data['categories_id'],
      'date_created'=>$data['date_created'],
          ),
          array(
             'name' => $name8,
             //'value' =>$value8,  
             'categories_id'=>$data['categories_id'],
      'date_created'=>$data['date_created'],
          ),
          array(
           'name' => $name9,
          // 'value' =>$value9, 
           'categories_id'=>$data['categories_id'],
           'date_created'=>$data['date_created'],
        ),
        array(
           'name' => $name10 ,
          // 'value' =>$value10,  
           'categories_id'=>$data['categories_id'],
    'date_created'=>$data['date_created'],
        ),

        array(
            'name' => $name11,
            //'value' =>$value11, 
            'categories_id'=>$data['categories_id'],
     'date_created'=>$data['date_created'],
         ),
         array(
            'name' => $name12 ,
           // 'value' =>$value12,  
            'categories_id'=>$data['categories_id'],
     'date_created'=>$data['date_created'],
         ),

         array(
            'name' => $name13,
            //'value' =>$value13, 
            'categories_id'=>$data['categories_id'],
     'date_created'=>$data['date_created'],
         ),
         array(
            'name' => $name14,
           // 'value' =>$value14,  
            'categories_id'=>$data['categories_id'],
     'date_created'=>$data['date_created'],
         ),

         array(
             'name' => $name15,
            // 'value' =>$value15, 
             'categories_id'=>$data['categories_id'],
      'date_created'=>$data['date_created'],
          ),
          
     );
    // echo "<pre>";print_r($insert_questions_data);exit;
  
     
     return   $this->db->insert_batch('questions_assessment', $insert_questions_data);


}

    public function nayatel_values_assessment_data($data){

        $name1=$_POST['name1'];
        $name2=$_POST['name2'];
         $name21=$name1.''.$name2;
        // echo "<pre>";print_r($name21);exit;
         $name3=$_POST['name3'];
        $name4=$_POST['name4'];
         $name22=$name3.''.$name4;
 
         $name5=$_POST['name5'];
        $name6=$_POST['name6'];
         $name23=$name5.''.$name6;
 
         $name7=$_POST['name7'];
        $name8=$_POST['name8'];
         $name24=$name7.''.$name8;
 
         $name9=$_POST['name9'];
        $name10=$_POST['name10'];
         $name25=$name9.''.$name10;
 
         $name11=$_POST['name11'];
        $name12=$_POST['name12'];
         $name26=$name11.''.$name12;
 
         $name13=$_POST['name13'];
        $name14=$_POST['name14'];
         $name27=$name13.''.$name14;
 
         $name15=$_POST['name15'];
        $name16=$_POST['name16'];
         $name28=$name15.''.$name16;
        $value1=$_POST['value1'];
        $value2=$_POST['value2'];
        $value3=$_POST['value3'];
        $value4=$_POST['value4'];
        $value5=$_POST['value5'];
        $value6=$_POST['value6'];
        $value7=$_POST['value7'];
        $value8=$_POST['value8'];
        $value9=$_POST['value9'];
        $value10=$_POST['value10'];
        $value11=$_POST['value11'];
        $value12=$_POST['value12'];
        $value13=$_POST['value13'];
        $value14=$_POST['value14'];
        $value15=$_POST['value15'];
        $value16=$_POST['value16'];
        $value17=$_POST['value17'];
        $value18=$_POST['value18'];
        $value19=$_POST['value19'];
        $value20=$_POST['value20'];

         $insert_in_questions=array(
             'name1'=>$_POST['name1'],
             'name2'=>$_POST['name2'],
             'name3'=>$_POST['name3'],
             'name4'=>$_POST['name4'],
             'name5'=>$_POST['name5'],
             'name6'=>$_POST['name6'],
             'name7'=>$_POST['name7'],
             'name8'=>$_POST['name8'],
             'name9'=>$_POST['name9'],
             'name10'=>$_POST['name10'],
             'name11'=>$_POST['name11'],
             'name12'=>$_POST['name12'],
             'name13'=>$_POST['name13'],
             'name14'=>$_POST['name14'],
             'name15'=>$_POST['name15'],
             'name16'=>$_POST['name16'],
             'name17'=>$_POST['name17'],
             'name18'=>$_POST['name18'],
             'name19'=>$_POST['name19'],
             'name20'=>$_POST['name20'],
         'value1' =>$_POST['value1'], 
         'value2' =>$_POST['value2'],  
         'value3' =>$_POST['value3'],  
         'value4' =>$_POST['value4'], 
         'value5' =>$_POST['value5'], 
         'value6' =>$_POST['value6'],  
         'value7' =>$_POST['value7'],  
         'value8' =>$_POST['value8'],  
         'value9' =>$_POST['value9'], 
         'value10' =>$_POST['value10'],  
         'value11' =>$_POST['value11'],  
         'value12' =>$_POST['value12'], 
         'value13' =>$_POST['value13'], 
         'value14' =>$_POST['value14'],  
         'value15' =>$_POST['value15'],  
         'value16' =>$_POST['value16'],  
         'value17' =>$_POST['value17'], 
         'value18' =>$_POST['value18'],  
         'value19' =>$_POST['value19'],  
         'value20' =>$_POST['value20'],        
         'categories_id'=>$data['categories_id'],
         'date_created'=>$data['date_created'],
         );
 
         $categories_id=$data['categories_id'];
         $date_created=$data['date_created'];
         $insert_questions_data = array(
             array(
                'name' => $name1,
                'value' =>$value1, 
                'categories_id'=>$data['categories_id'],
                'date_created'=>$data['date_created'],
             ),
             array(
                'name' => $name2 ,
                'value' =>$value2,  
                'categories_id'=>$data['categories_id'],
         'date_created'=>$data['date_created'],
             ),
 
             array(
                 'name' => $name3,
                 'value' =>$value3, 
                 'categories_id'=>$data['categories_id'],
          'date_created'=>$data['date_created'],
              ),
              array(
                 'name' => $name4 ,
                 'value' =>$value4,  
                 'categories_id'=>$data['categories_id'],
          'date_created'=>$data['date_created'],
              ),
 
              array(
                 'name' => $name5,
                 'value' =>$value5, 
                 'categories_id'=>$data['categories_id'],
          'date_created'=>$data['date_created'],
              ),
              array(
                 'name' => $name6,
                 'value' =>$value6,  
                 'categories_id'=>$data['categories_id'],
          'date_created'=>$data['date_created'],
              ),
  
              array(
                  'name' => $name7,
                  'value' =>$value7, 
                  'categories_id'=>$data['categories_id'],
           'date_created'=>$data['date_created'],
               ),
               array(
                  'name' => $name8,
                  'value' =>$value8,  
                  'categories_id'=>$data['categories_id'],
           'date_created'=>$data['date_created'],
               ),
               array(
                'name' => $name9,
                'value' =>$value9, 
                'categories_id'=>$data['categories_id'],
                'date_created'=>$data['date_created'],
             ),
             array(
                'name' => $name10 ,
                'value' =>$value10,  
                'categories_id'=>$data['categories_id'],
         'date_created'=>$data['date_created'],
             ),
 
             array(
                 'name' => $name11,
                 'value' =>$value11, 
                 'categories_id'=>$data['categories_id'],
          'date_created'=>$data['date_created'],
              ),
              array(
                 'name' => $name12 ,
                 'value' =>$value12,  
                 'categories_id'=>$data['categories_id'],
          'date_created'=>$data['date_created'],
              ),
 
              array(
                 'name' => $name13,
                 'value' =>$value13, 
                 'categories_id'=>$data['categories_id'],
          'date_created'=>$data['date_created'],
              ),
              array(
                 'name' => $name14,
                 'value' =>$value14,  
                 'categories_id'=>$data['categories_id'],
          'date_created'=>$data['date_created'],
              ),
  
              array(
                  'name' => $name15,
                  'value' =>$value15, 
                  'categories_id'=>$data['categories_id'],
           'date_created'=>$data['date_created'],
               ),
               array(
                  'name' => $name16,
                  'value' =>$value16,  
                  'categories_id'=>$data['categories_id'],
           'date_created'=>$data['date_created'],
               )
          );
         // echo "<pre>";print_r($insert_questions_data);exit;
       
          
          return   $this->db->insert_batch('questions', $insert_questions_data);
 

    }
    public function add_cultural_scan_data($data){
       $name1=$_POST['name1'];
       $name2=$_POST['name2'];
        $name21=$name1.''.$name2;
       // echo "<pre>";print_r($name21);exit;
        $name3=$_POST['name3'];
       $name4=$_POST['name4'];
        $name22=$name3.''.$name4;

        $name5=$_POST['name5'];
       $name6=$_POST['name6'];
        $name23=$name5.''.$name6;

        $name7=$_POST['name7'];
       $name8=$_POST['name8'];
        $name24=$name7.''.$name8;

        $name9=$_POST['name9'];
       $name10=$_POST['name10'];
        $name25=$name9.''.$name10;

        $name11=$_POST['name11'];
       $name12=$_POST['name12'];
        $name26=$name11.''.$name12;

        $name13=$_POST['name13'];
       $name14=$_POST['name14'];
        $name27=$name13.''.$name14;

        $name15=$_POST['name15'];
       $name16=$_POST['name16'];
        $name28=$name15.''.$name16;
       $value1=$_POST['value1'];
       $value2=$_POST['value2'];
       $value3=$_POST['value3'];
       $value4=$_POST['value4'];
       $value5=$_POST['value5'];
       $value6=$_POST['value6'];
       $value7=$_POST['value7'];
       $value8=$_POST['value8'];
        $insert_in_questions=array(
			'name1'=>$name21,
			'name2'=>$name22,
			'name3'=>$name23,
            'name4'=>$name24,
            'name5'=>$name25,
			'name6'=>$name26,
			'name7'=>$name27,
			'name8'=>$name28,
        'value1' =>$value1, 
        'value2' =>$value2,  
        'value3' =>$value3,  
        'value4' =>$value4, 
        'value5' =>$value5, 
        'value6' =>$value6,  
        'value7' =>$value7,  
        'value8' =>$value8,        
        'categories_id'=>$data['categories_id'],
        'date_created'=>$data['date_created'],
        );

        $categories_id=$data['categories_id'];
        $date_created=$data['date_created'];
        $insert_questions_data = array(
            array(
               'name' => $name21 ,
               'value' =>$value1, 
               'categories_id'=>$categories_id,
        'date_created'=>$date_created,
            ),
            array(
               'name' => $name22 ,
               'value' =>$value2,  
               'categories_id'=>$categories_id,
        'date_created'=>$date_created,
            ),

            array(
                'name' => $name23 ,
                'value' =>$value3, 
                'categories_id'=>$categories_id,
         'date_created'=>$date_created,
             ),
             array(
                'name' => $name24 ,
                'value' =>$value4,  
                'categories_id'=>$categories_id,
         'date_created'=>$date_created,
             ),

             array(
                'name' => $name25 ,
                'value' =>$value5, 
                'categories_id'=>$categories_id,
         'date_created'=>$date_created,
             ),
             array(
                'name' => $name26 ,
                'value' =>$value6,  
                'categories_id'=>$categories_id,
         'date_created'=>$date_created,
             ),
 
             array(
                 'name' => $name27 ,
                 'value' =>$value7, 
                 'categories_id'=>$categories_id,
          'date_created'=>$date_created,
              ),
              array(
                 'name' => $name28 ,
                 'value' =>$value8,  
                 'categories_id'=>$categories_id,
          'date_created'=>$date_created,
              )
         );
         //echo "<pre>";print_r($insert_questions_data);exit;
        //  $data =array();
        //  for($i=0; $i<$count; $i++) {
        //  $data[$i] = array(
        //             'name' => $name[$i], 
        //             'address' => $value[$i],
        //             'categories_id' => $categories_id,
        //             'date_created' => $date_created,
         
        //             );
        //  }
         
         return   $this->db->insert_batch('questions', $insert_questions_data);

         //$this->db->insert_batch('mytable', $data); 
         

         // echo "<pre>";print_r($insert_in_questions);exit;
        // $this->db->insert('questions',$insert_questions_data);
        // return $this->db->insert_id(); 
    }

    
    public function add_dimensions($data){

        $this->db->insert('dimensions',$data);
        return $this->db->insert_id();   
    }


public function description_update($id,$data) {
    $this->db->where('description_id',$id);
    $this->db->update('description',$data);
}


    public function sub_categories_update($id,$data) {
        $this->db->where('sub_categories_id',$id);
        $this->db->update('sub_categories',$data);
    }

    function update($id,$data) {
        $this->db->where('category_id',$id);
        $this->db->update('tbl_category',$data);
    }

    public function categories_update($id,$data){
        $this->db->where('categories_id',$id);
        $this->db->update('categories',$data);

    }
// public function questions_assessment_update($id,$data){
//     $this->db->where('categories_id',$id);
//     $this->db->update('categories',$data);

// }

public function questions_assessment_update($id,$data){

    $this->db->where('questions_assessment_id',$id);
    $this->db->update('questions_assessment',$data);
}
public function questions_update($id,$data){
    $this->db->where('questions_id',$id);
    $this->db->update('questions',$data);

}

    public function dimensions_update($id,$data){
        $this->db->where('dimensions_id',$id);
        $this->db->update('dimensions',$data);
    }
public function delete_description($id){

    $this->db->where('description_id',$id);
    $this->db->delete('description');
}

public function delete_sub_categories($id){
    $this->db->where('sub_categories_id',$id);
    $this->db->delete('sub_categories');

}
    public function delete_questions_assessment($id){

        $this->db->where('questions_assessment_id',$id);
        $this->db->delete('questions_assessment');
    }
public function delete_questions($id){

    $this->db->where('questions_id',$id);
    $this->db->delete('questions');
}

    public function delete_dimensions($id){
        $this->db->where('dimensions_id',$id);
        $this->db->delete('dimensions');

    }
    function delete($id)
    {
        $this->db->where('category_id',$id);
        $this->db->delete('tbl_category');
    }

    function delete_categories($id)
    {
        $this->db->where('categories_id',$id);
        $this->db->delete('categories');
    }

    function get_category($id)
    {
        $sql = 'SELECT * FROM tbl_category WHERE category_id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }
public function get_edit_dimensions($id){

    $sql = 'SELECT * FROM dimensions WHERE dimensions_id=?';
    $query = $this->db->query($sql,array($id));
    return $query->first_row('array');
}

    function get_categories($id)
    {
        $sql = 'SELECT * FROM categories WHERE categories_id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

    function get_specific_categories($id)
    {
        $sql = 'SELECT * FROM dimensions WHERE dimensions_id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

// public function sub_categories_check($data){

//     $sql = 'SELECT * FROM sub_categories WHERE sub_categories_id=?';
//     $query = $this->db->query($sql,array($data));
//    // echo "<pre>";print_r($sql);exit;
//     return $query->first_row('array'); 
// }


public function questions_score_description_check($data){

    $sql = 'SELECT * FROM description WHERE description_id=?';
    $query = $this->db->query($sql,array($data));
   // echo "<pre>";print_r($sql);exit;
    return $query->first_row('array'); 
}

public function personality_assessment_check($data){

    $sql = 'SELECT * FROM questions_assessment WHERE questions_assessment_id=?';
    $query = $this->db->query($sql,array($data));
   // echo "<pre>";print_r($sql);exit;
    return $query->first_row('array'); 
}

    public function cultural_scan_check($data){

        $sql = 'SELECT * FROM questions WHERE questions_id=?';
        $query = $this->db->query($sql,array($data));
       // echo "<pre>";print_r($sql);exit;
        return $query->first_row('array');
    }

    function category_check($id)
    {
        $sql = 'SELECT * FROM tbl_category WHERE category_id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }
public function questions_check($id){

    $sql = 'SELECT * FROM questions WHERE questions_id=?';
    $query = $this->db->query($sql,array($id));
    return $query->first_row('array');
}

public function sub_categories_check($sub_categories_id){

    $sql = 'SELECT * FROM sub_categories WHERE sub_categories_id=?';
    $query = $this->db->query($sql,array($sub_categories_id));
    return $query->first_row('array');  
}
    public function dimensions_check($id){

        $sql = 'SELECT * FROM dimensions WHERE dimensions_id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');  
    }
public function categories_check($id){

    $sql = 'SELECT * FROM categories WHERE categories_id=?';
    $query = $this->db->query($sql,array($id));
    return $query->first_row('array');   
}


    function check_news($id) {
        $sql = 'SELECT * FROM tbl_news WHERE category_id=?';
        $query = $this->db->query($sql,array($id));
        return $query->num_rows();
    }
   
    public function add_categories_score($data){

        $this->db->insert('categories_score',$data);
        return $this->db->insert_id();
    }
    function check_news_categories($id) {
        $sql = 'SELECT * FROM categories WHERE categories_id=?';
        $query = $this->db->query($sql,array($id));
        return $query->num_rows();
    }
}