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



    $sql = "SELECT * FROM dimensions ORDER BY categories_id	ASC";

    $query = $this->db->query($sql);

    return $query->result_array();   

}

public function get_organization(){
    
    $sql = "SELECT * FROM organization ORDER BY organization_id	 ASC";

    $query = $this->db->query($sql);

    return $query->result_array();   
}

public function get_all_sub_categories(){



    $sql = "SELECT * FROM sub_categories ORDER BY sub_categories_id	 ASC";

    $query = $this->db->query($sql);

    return $query->result_array();   

}

public function get_organization_edit($data){
    
        $organization_id=$data;

        $sql = 'SELECT * FROM organization WHERE organization_id=?';

        $query = $this->db->query($sql,array($data));

        return $query->first_row('array');

  
    
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

public function get_sub_categories_names(){

    $categories_id='Work Personality Index';

    $sql = "SELECT * FROM sub_categories WHERE categories_id='$categories_id' ORDER BY sub_categories_id ASC ";

    $query = $this->db->query($sql);

    return $query->result_array(); 

    echo "<pre>";print_r($query);exit;

}

public function get_sub_categories(){

    $sql = "SELECT * FROM dimensions ORDER BY dimensions_id	 ASC";

    $query = $this->db->query($sql);

    return $query->result_array(); 

    // $categories_id=$id;

    // $sql = "SELECT * FROM dimensions WHERE categories_id='$categories_id' ORDER BY dimensions_id ASC ";

    // $query = $this->db->query($sql);

    // return $query->result_array(); 



}

public function get_specific_dimensions($id){

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
public function get_relative_nayatel_dimensions($id){
    $categories_id=$id;

    $sql = "SELECT * FROM dimensions WHERE categories_id='$categories_id' ORDER BY dimensions_id ASC ";

    $query = $this->db->query($sql);

    return $query->result_array(); 

}

    function get_relative_dimensions($id)

    {

        $categories_id=$id;

        $sql = "SELECT * FROM dimensions WHERE categories_id='$categories_id' ORDER BY dimensions_id ASC ";
    
        $query = $this->db->query($sql);
    
        return $query->result_array(); 

       
        $categories_id=$id;
        $sql = "SELECT * FROM dimensions WHERE categories_id='$categories_id'";
  //echo "<pre>";print_r($sql);exit;
        $query = $this->db->query($sql);
    
        return  $query->result_array(); 
      

    }

public function get_all_test(){
    
     $sql = "SELECT * FROM categories ORDER BY categories_id	 ASC";

        $query = $this->db->query($sql);

        return $query->result_array();  
        
        
        
}


    public function get_all_categories(){



        $sql = "SELECT * FROM dimensions ORDER BY categories_id	 ASC";

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

    $sql = "SELECT * FROM questions WHERE categories_id='$categories_id' ORDER BY dimensions_name ASC ";

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

// public function get_organization(){



//   // $categories_id=$id;

//     $sql = "SELECT * FROM organization ORDER BY organization_id ASC ";

//     $query = $this->db->query($sql);

//     return $query->result_array();  

// }


public function get_cities(){
   $sql = "SELECT * FROM cities ORDER BY cities_id ASC ";

    $query = $this->db->query($sql);

    return $query->result_array();    
    
}

public function get_position(){
   $sql = "SELECT * FROM position ORDER BY position_id ASC ";

    $query = $this->db->query($sql);

    return $query->result_array();    
    
}
public function get_department(){



   // $categories_id=$id;

    $sql = "SELECT * FROM department ORDER BY department_id ASC ";

    $query = $this->db->query($sql);

    return $query->result_array();  
    

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

public function get_one_organization($id){
    
     $sql = 'SELECT * FROM organization WHERE organization_id=?';

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



public function personal_values_assessment_data($data){



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

    $name16=$data['name16'];

    $name17=$data['name17'];

    $name18=$data['name18'];

    $name19=$data['name19'];

    $name20=$data['name20'];



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



          array(

            'name' => $name16,

            //'value' =>$value11, 

            'categories_id'=>$data['categories_id'],

     'date_created'=>$data['date_created'],

         ),

         array(

            'name' => $name17 ,

           // 'value' =>$value12,  

            'categories_id'=>$data['categories_id'],

     'date_created'=>$data['date_created'],

         ),



         array(

            'name' => $name18,

            //'value' =>$value13, 

            'categories_id'=>$data['categories_id'],

     'date_created'=>$data['date_created'],

         ),

         array(

            'name' => $name19,

           // 'value' =>$value14,  

            'categories_id'=>$data['categories_id'],

     'date_created'=>$data['date_created'],

         ),



         array(

             'name' => $name20,

            // 'value' =>$value15, 

             'categories_id'=>$data['categories_id'],

      'date_created'=>$data['date_created'],

          ),

          

     );

    // echo "<pre>";print_r($insert_questions_data);exit;

  

     

     return   $this->db->insert_batch('questions', $insert_questions_data);





}

public function edit_work_values(){
 	$date_modified = date("Y-m-d H:i:s");
  				$update_in_nayatel = array(

					'name1'    => $_POST['name1'],
					'name2'    => $_POST['name2'],
					'name3'    => $_POST['name3'],
					'name4'    => $_POST['name4'],
					'name5'    => $_POST['name5'],
					'name6'    => $_POST['name6'],
					'name7'    => $_POST['name7'],
					'name8'    => $_POST['name8'],
					'name9'    => $_POST['name9'],
					'name10'    => $_POST['name10'],
					
					'name11'    => $_POST['name11'],
					'name12'    => $_POST['name12'],
					'name13'    => $_POST['name13'],
					'name14'    => $_POST['name14'],
					'name15'    => $_POST['name15'],
					'name16'    => $_POST['name16'],
					'name17'    => $_POST['name17'],
					'name18'    => $_POST['name18'],
					'name19'    => $_POST['name19'],
					'name20'    => $_POST['name20'],
					
					'name21'    => $_POST['name21'],
					'name22'    => $_POST['name22'],
					'name23'    => $_POST['name23'],
					'name24'    => $_POST['name24'],
					'name25'    => $_POST['name25'],
					'name26'    => $_POST['name26'],
					'name27'    => $_POST['name27'],
					'name28'    => $_POST['name28'],
					'name29'    => $_POST['name29'],
					'name30'    => $_POST['name30'],
					
					'name31'    => $_POST['name31'],
					'name32'    => $_POST['name32'],
					'name33'    => $_POST['name33'],
					'name34'    => $_POST['name34'],
					'name35'    => $_POST['name35'],
					'name36'    => $_POST['name36'],
					'name37'    => $_POST['name37'],
					'name38'    => $_POST['name38'],
					'name39'    => $_POST['name39'],
					'name40'    => $_POST['name40'],
					
					'name41'    => $_POST['name41'],
					'name42'    => $_POST['name42'],
					'name43'    => $_POST['name43'],
					'name44'    => $_POST['name44'],
					'name45'    => $_POST['name45'],
					'name46'    => $_POST['name46'],
					'name47'    => $_POST['name47'],
					'name48'    => $_POST['name48'],
					'name49'    => $_POST['name49'],
					'name50'    => $_POST['name50'],
					
					'name51'    => $_POST['name51'],
					'name52'    => $_POST['name52'],
					'name53'    => $_POST['name53'],
					'name54'    => $_POST['name54'],
					'name55'    => $_POST['name55'],
					'name56'    => $_POST['name56'],
					'name57'    => $_POST['name57'],
					'name58'    => $_POST['name58'],
					'name59'    => $_POST['name59'],
					'name60'    => $_POST['name60'],
					
					'name61'    => $_POST['name61'],
					'name62'    => $_POST['name62'],
					'name63'    => $_POST['name63'],
					'name64'    => $_POST['name64'],
					'name65'    => $_POST['name65'],
					'name66'    => $_POST['name66'],
					'name67'    => $_POST['name67'],
					'name68'    => $_POST['name68'],
					'name69'    => $_POST['name69'],
					'name70'    => $_POST['name70'],
				// 	70 end
				
				    'name71'    => $_POST['name71'],
					'name72'    => $_POST['name72'],
					'name73'    => $_POST['name73'],
					'name74'    => $_POST['name74'],
					'name75'    => $_POST['name75'],
					'name76'    => $_POST['name76'],
					
					'name77'    => $_POST['name77'],
					'name78'    => $_POST['name78'],
					'name79'    => $_POST['name79'],
					'name80'    => $_POST['name80'],
					'name81'    => $_POST['name81'],
					'name82'    => $_POST['name82'],
					'name83'    => $_POST['name83'],
					'name84'    => $_POST['name84'],
					'name85'    => $_POST['name85'],
					'name86'    => $_POST['name86'],
					
					'name87'    => $_POST['name87'],
					'name88'    => $_POST['name88'],
					'name89'    => $_POST['name89'],
					'name90'    => $_POST['name90'],
					'name91'    => $_POST['name91'],
					'name92'    => $_POST['name92'],
					'name93'    => $_POST['name93'],
					'name94'    => $_POST['name94'],
					'name95'    => $_POST['name95'],
					'name96'    => $_POST['name96'],
					
					'name97'    => $_POST['name97'],
					'name98'    => $_POST['name98'],
					'name99'    => $_POST['name99'],
					'name100'    => $_POST['name100'],
					'name101'    => $_POST['name101'],
					'name102'    => $_POST['name102'],
					'name103'    => $_POST['name103'],
					'name104'    => $_POST['name104'],
					'name105'    => $_POST['name105'],
				// 	105 end
					
					'dimensions_name'    => $_POST['dimensions_name'],
					'categories_id'    => $_POST['categories_id'],
					'questions_assessment_id'    => $_POST['questions_assessment_id'],
					'sub_categories_names'    => $_POST['sub_categories_names'],


					'date_modified'=>$date_modified

				);
				
			
	$name1=$update_in_nayatel['name1'];

    $name2=$update_in_nayatel['name2'];

    $name3=$update_in_nayatel['name3'];

    $name4=$update_in_nayatel['name4'];

    $name5=$update_in_nayatel['name5'];

    $name6=$update_in_nayatel['name6'];

    $name7=$update_in_nayatel['name7'];

    $name8=$update_in_nayatel['name8'];

    $name9=$update_in_nayatel['name9'];

    $name10=$update_in_nayatel['name10'];
// 10
    $name11=$update_in_nayatel['name11'];

    $name12=$update_in_nayatel['name12'];

    $name13=$update_in_nayatel['name13'];

    $name14=$update_in_nayatel['name14'];

    $name15=$update_in_nayatel['name15'];

    $name16=$update_in_nayatel['name16'];

    $name17=$update_in_nayatel['name17'];

    $name18=$update_in_nayatel['name18'];

    $name19=$update_in_nayatel['name19'];

    $name20=$update_in_nayatel['name20'];
    // 20
    
    $name21=$update_in_nayatel['name21'];

    $name22=$update_in_nayatel['name22'];

    $name23=$update_in_nayatel['name23'];

    $name24=$update_in_nayatel['name24'];

    $name25=$update_in_nayatel['name25'];

    $name26=$update_in_nayatel['name26'];

    $name27=$update_in_nayatel['name27'];

    $name28=$update_in_nayatel['name28'];

    $name29=$update_in_nayatel['name29'];

    $name30=$update_in_nayatel['name30'];
    // 30
    
    	$name31=$update_in_nayatel['name31'];

    $name32=$update_in_nayatel['name32'];

    $name33=$update_in_nayatel['name33'];

    $name34=$update_in_nayatel['name34'];

    $name35=$update_in_nayatel['name35'];

    $name36=$update_in_nayatel['name36'];

    $name37=$update_in_nayatel['name37'];

    $name38=$update_in_nayatel['name38'];

    $name39=$update_in_nayatel['name39'];

    $name40=$update_in_nayatel['name40'];
    // 40
    
    	$name41=$update_in_nayatel['name41'];

    $name42=$update_in_nayatel['name42'];

    $name43=$update_in_nayatel['name43'];

    $name44=$update_in_nayatel['name44'];

    $name45=$update_in_nayatel['name45'];

    $name46=$update_in_nayatel['name46'];

    $name47=$update_in_nayatel['name47'];

    $name48=$update_in_nayatel['name48'];

    $name49=$update_in_nayatel['name49'];

    $name50=$update_in_nayatel['name50'];
    // 50
    
    	$name51=$update_in_nayatel['name51'];

    $name52=$update_in_nayatel['name52'];

    $name53=$update_in_nayatel['name53'];

    $name54=$update_in_nayatel['name54'];

    $name55=$update_in_nayatel['name55'];

    $name56=$update_in_nayatel['name56'];

    $name57=$update_in_nayatel['name57'];

    $name58=$update_in_nayatel['name58'];

    $name59=$update_in_nayatel['name59'];

    $name60=$update_in_nayatel['name60'];
    
    // 60
    
    	$name61=$update_in_nayatel['name61'];

    $name62=$update_in_nayatel['name62'];

    $name63=$update_in_nayatel['name63'];

    $name64=$update_in_nayatel['name64'];

    $name65=$update_in_nayatel['name65'];

    $name66=$update_in_nayatel['name66'];

    $name67=$update_in_nayatel['name67'];

    $name68=$update_in_nayatel['name68'];

    $name69=$update_in_nayatel['name69'];

    $name70=$update_in_nayatel['name70'];
    
    // 70
    
    $name71=$update_in_nayatel['name71'];

    $name72=$update_in_nayatel['name72'];

    $name73=$update_in_nayatel['name73'];

    $name74=$update_in_nayatel['name74'];

    $name75=$update_in_nayatel['name75'];
   
    $name76=$update_in_nayatel['name76'];

    $name77=$update_in_nayatel['name77'];

    $name78=$update_in_nayatel['name78'];

    $name79=$update_in_nayatel['name79'];

    $name80=$update_in_nayatel['name80'];
// 80
    $name81=$update_in_nayatel['name81'];

    $name82=$update_in_nayatel['name82'];

    $name83=$update_in_nayatel['name83'];

    $name84=$update_in_nayatel['name84'];

    $name85=$update_in_nayatel['name85'];
  
    
    $name86=$update_in_nayatel['name86'];

    $name87=$update_in_nayatel['name87'];

    $name88=$update_in_nayatel['name88'];

    $name89=$update_in_nayatel['name89'];

    $name90=$update_in_nayatel['name90'];
// 90
    $name91=$update_in_nayatel['name91'];

    $name92=$update_in_nayatel['name92'];

    $name93=$update_in_nayatel['name93'];

    $name94=$update_in_nayatel['name94'];

    $name95=$update_in_nayatel['name95'];
    
    
    
    $name96=$update_in_nayatel['name96'];

    $name97=$update_in_nayatel['name97'];

    $name98=$update_in_nayatel['name98'];

    $name99=$update_in_nayatel['name99'];
// 100
    $name100=$update_in_nayatel['name100'];

    $name101=$update_in_nayatel['name101'];

    $name102=$update_in_nayatel['name102'];

    $name103=$update_in_nayatel['name103'];

    $name104=$update_in_nayatel['name104'];

    $name105=$update_in_nayatel['name105'];
    // 105 end


			
			
				
				    $insert_questions_data = array(

        array(

           'name' => $name1,
            'dimensions_name'=>$update_in_nayatel['dimensions_name'][0],
            'categories_id'=>$update_in_nayatel['categories_id'][0],
      

           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][0],
           
            'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][0],

           'date_modified'=>$date_modified,

        ),

        array(

           'name' => $name2 ,

      

        'dimensions_name'=>$update_in_nayatel['dimensions_name'][1],
            'categories_id'=>$update_in_nayatel['categories_id'][1],
      

           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][1],

 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][1],
           'date_modified'=>$date_modified,

        ),



        array(

            'name' => $name3,

         

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][2],
            'categories_id'=>$update_in_nayatel['categories_id'][2],
      

           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][2],

           'date_modified'=>$date_modified,
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][2],
         ),

         array(

            'name' => $name4 ,

        

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][3],
            'categories_id'=>$update_in_nayatel['categories_id'][3],
      

           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][3],
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][3],
           'date_modified'=>$date_modified,

         ),



         array(

            'name' => $name5,

     

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][4],
            'categories_id'=>$update_in_nayatel['categories_id'][4],
      

           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][4],
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][4],
           'date_modified'=>$date_modified,

         ),

         array(

            'name' => $name6,

       
           'dimensions_name'=>$update_in_nayatel['dimensions_name'][5],
            'categories_id'=>$update_in_nayatel['categories_id'][5],
      

           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][5],
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][5],
           'date_modified'=>$date_modified,

         ),



         array(

             'name' => $name7,

        

            'dimensions_name'=>$update_in_nayatel['dimensions_name'][6],
            'categories_id'=>$update_in_nayatel['categories_id'][6],
      

           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][6],
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][6],
           'date_modified'=>$date_modified,

          ),

          array(

             'name' => $name8,

         

            'dimensions_name'=>$update_in_nayatel['dimensions_name'][7],
            'categories_id'=>$update_in_nayatel['categories_id'][7],
      

           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][7],
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][7],
           'date_modified'=>$date_modified,

          ),

          array(

           'name' => $name9,

        

         'dimensions_name'=>$update_in_nayatel['dimensions_name'][8],
            'categories_id'=>$update_in_nayatel['categories_id'][8],
      

           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][8],
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][8],
           'date_modified'=>$date_modified,

        ),

        array(

           'name' => $name10 ,

   

         'dimensions_name'=>$update_in_nayatel['dimensions_name'][9],
            'categories_id'=>$update_in_nayatel['categories_id'][9],
      

           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][9],
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][9],
           'date_modified'=>$date_modified,

        ),



        array(

            'name' => $name11,

         

           'dimensions_name'=>$update_in_nayatel['dimensions_name'][10],
            'categories_id'=>$update_in_nayatel['categories_id'][10],
      

           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][10],
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][10],
           'date_modified'=>$date_modified,

         ),

         array(

            'name' => $name12 ,

        

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][11],
            'categories_id'=>$update_in_nayatel['categories_id'][11],
      

           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][11],
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][11],
           'date_modified'=>$date_modified,

         ),



         array(

            'name' => $name13,

      

            'dimensions_name'=>$update_in_nayatel['dimensions_name'][12],
            'categories_id'=>$update_in_nayatel['categories_id'][12],
      

           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][12],
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][12],
           'date_modified'=>$date_modified,

         ),

         array(

            'name' => $name14,

       

           'dimensions_name'=>$update_in_nayatel['dimensions_name'][13],
            'categories_id'=>$update_in_nayatel['categories_id'][13],
      

           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][13],
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][13],
           'date_modified'=>$date_modified,
         ),



         array(

             'name' => $name15,

       

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][14],
            'categories_id'=>$update_in_nayatel['categories_id'][14],
      

           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][14],
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][14],
           'date_modified'=>$date_modified,

          ),



          array(

            'name' => $name16,

         

        'dimensions_name'=>$update_in_nayatel['dimensions_name'][15],
            'categories_id'=>$update_in_nayatel['categories_id'][15],
      

           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][15],
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][15],
           'date_modified'=>$date_modified,

         ),

         array(

            'name' => $name17 ,

         

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][16],
            'categories_id'=>$update_in_nayatel['categories_id'][16],
      

           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][16],
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][16],
           'date_modified'=>$date_modified,
         ),



         array(

            'name' => $name18,

          

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][17],
            'categories_id'=>$update_in_nayatel['categories_id'][17],
      

           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][17],
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][17],
           'date_modified'=>$date_modified,

         ),

         array(

            'name' => $name19,

         

           'dimensions_name'=>$update_in_nayatel['dimensions_name'][18],
            'categories_id'=>$update_in_nayatel['categories_id'][18],
      

           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][18],
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][18],
           'date_modified'=>$date_modified,

         ),



         array(

             'name' => $name20,

         

           'dimensions_name'=>$update_in_nayatel['dimensions_name'][19],
            'categories_id'=>$update_in_nayatel['categories_id'][19],
      
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][19],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][19],

           'date_modified'=>$date_modified,

          ),
// 20
        //   21
array(

           'name' => $name21,
            'dimensions_name'=>$update_in_nayatel['dimensions_name'][20],
            'categories_id'=>$update_in_nayatel['categories_id'][20],
      

           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][20],
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][20],
           'date_modified'=>$date_modified,

        ),

        array(

           'name' => $name22 ,

      

        'dimensions_name'=>$update_in_nayatel['dimensions_name'][21],
            'categories_id'=>$update_in_nayatel['categories_id'][21],
      

           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][21],
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][21],
           'date_modified'=>$date_modified,

        ),



        array(

            'name' => $name23,

         

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][22],
            'categories_id'=>$update_in_nayatel['categories_id'][22],
      

           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][22],
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][22],
           'date_modified'=>$date_modified,

         ),

         array(

            'name' => $name24 ,

        

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][23],
            'categories_id'=>$update_in_nayatel['categories_id'][23],
      

           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][23],
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][23],
           'date_modified'=>$date_modified,

         ),



         array(

            'name' => $name25,

     

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][24],
            'categories_id'=>$update_in_nayatel['categories_id'][24],
      
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][24],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][24],

           'date_modified'=>$date_modified,

         ),

         array(

            'name' => $name26,

       
           'dimensions_name'=>$update_in_nayatel['dimensions_name'][25],
            'categories_id'=>$update_in_nayatel['categories_id'][25],
      
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][25],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][25],

           'date_modified'=>$date_modified,

         ),



         array(

             'name' => $name27,

        

            'dimensions_name'=>$update_in_nayatel['dimensions_name'][26],
            'categories_id'=>$update_in_nayatel['categories_id'][26],
      
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][26],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][26],

           'date_modified'=>$date_modified,

          ),

          array(

             'name' => $name28,

         

            'dimensions_name'=>$update_in_nayatel['dimensions_name'][27],
            'categories_id'=>$update_in_nayatel['categories_id'][27],
      
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][27],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][27],

           'date_modified'=>$date_modified,

          ),

          array(

           'name' => $name29,

        

         'dimensions_name'=>$update_in_nayatel['dimensions_name'][28],
            'categories_id'=>$update_in_nayatel['categories_id'][28],
      
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][28],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][28],

           'date_modified'=>$date_modified,

        ),

        array(

           'name' => $name30 ,

   

         'dimensions_name'=>$update_in_nayatel['dimensions_name'][29],
            'categories_id'=>$update_in_nayatel['categories_id'][29],
      
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][29],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][29],

           'date_modified'=>$date_modified,

        ),



        array(

            'name' => $name31,

         

           'dimensions_name'=>$update_in_nayatel['dimensions_name'][30],
            'categories_id'=>$update_in_nayatel['categories_id'][30],
      
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][30],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][30],

           'date_modified'=>$date_modified,

         ),

         array(

            'name' => $name32 ,

        

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][31],
            'categories_id'=>$update_in_nayatel['categories_id'][31],
      
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][31],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][31],

           'date_modified'=>$date_modified,

         ),



         array(

            'name' => $name33,

      

            'dimensions_name'=>$update_in_nayatel['dimensions_name'][32],
            'categories_id'=>$update_in_nayatel['categories_id'][32],
      
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][32],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][32],

           'date_modified'=>$date_modified,

         ),

         array(

            'name' => $name34,

       

           'dimensions_name'=>$update_in_nayatel['dimensions_name'][33],
            'categories_id'=>$update_in_nayatel['categories_id'][33],
      
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][33],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][33],

           'date_modified'=>$date_modified,
         ),



         array(

             'name' => $name35,

     'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][34],   

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][34],
            'categories_id'=>$update_in_nayatel['categories_id'][34],
      

           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][34],

           'date_modified'=>$date_modified,

          ),



          array(

            'name' => $name36,

         

        'dimensions_name'=>$update_in_nayatel['dimensions_name'][35],
            'categories_id'=>$update_in_nayatel['categories_id'][35],
      
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][35],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][35],

           'date_modified'=>$date_modified,

         ),

         array(

            'name' => $name37 ,

         

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][36],
            'categories_id'=>$update_in_nayatel['categories_id'][36],
     'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][36],  

           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][36],

           'date_modified'=>$date_modified,
         ),



         array(

            'name' => $name38,

          

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][37],
            'categories_id'=>$update_in_nayatel['categories_id'][37],
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][37],      

           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][37],

           'date_modified'=>$date_modified,

         ),

         array(

            'name' => $name39,

         
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][38],
           'dimensions_name'=>$update_in_nayatel['dimensions_name'][38],
            'categories_id'=>$update_in_nayatel['categories_id'][38],
      

           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][38],

           'date_modified'=>$date_modified,

         ),



         array(

             'name' => $name40,

     'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][39],     

           'dimensions_name'=>$update_in_nayatel['dimensions_name'][39],
            'categories_id'=>$update_in_nayatel['categories_id'][39],
      

           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][39],

           'date_modified'=>$date_modified,

          ),
        //   41
                array(

           'name' => $name41,
            'dimensions_name'=>$update_in_nayatel['dimensions_name'][40],
            'categories_id'=>$update_in_nayatel['categories_id'][40],
      
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][40],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][40],

           'date_modified'=>$date_modified,

        ),

        array(

           'name' => $name42 ,

      

        'dimensions_name'=>$update_in_nayatel['dimensions_name'][41],
            'categories_id'=>$update_in_nayatel['categories_id'][41],
      
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][41],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][41],

           'date_modified'=>$date_modified,

        ),



        array(

            'name' => $name43,

         

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][42],
            'categories_id'=>$update_in_nayatel['categories_id'][42],
  'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][42],     

           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][42],

           'date_modified'=>$date_modified,

         ),

         array(

            'name' => $name44 ,

        

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][43],
            'categories_id'=>$update_in_nayatel['categories_id'][43],
      
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][43],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][43],

           'date_modified'=>$date_modified,

         ),



         array(

            'name' => $name45,

     

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][44],
            'categories_id'=>$update_in_nayatel['categories_id'][44],
      
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][44],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][44],

           'date_modified'=>$date_modified,

         ),

         array(

            'name' => $name46,

       
           'dimensions_name'=>$update_in_nayatel['dimensions_name'][45],
            'categories_id'=>$update_in_nayatel['categories_id'][45],
      
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][45],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][45],

           'date_modified'=>$date_modified,

         ),



         array(

             'name' => $name47,

        

            'dimensions_name'=>$update_in_nayatel['dimensions_name'][46],
            'categories_id'=>$update_in_nayatel['categories_id'][46],
  'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][46],     

           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][46],

           'date_modified'=>$date_modified,

          ),

          array(

             'name' => $name48,

         

            'dimensions_name'=>$update_in_nayatel['dimensions_name'][47],
            'categories_id'=>$update_in_nayatel['categories_id'][47],
      
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][47],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][47],

           'date_modified'=>$date_modified,

          ),

          array(

           'name' => $name49,

        

         'dimensions_name'=>$update_in_nayatel['dimensions_name'][48],
            'categories_id'=>$update_in_nayatel['categories_id'][48],
      
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][48],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][48],

           'date_modified'=>$date_modified,

        ),

        array(

           'name' => $name50 ,

   

         'dimensions_name'=>$update_in_nayatel['dimensions_name'][49],
            'categories_id'=>$update_in_nayatel['categories_id'][49],
      
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][49],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][49],

           'date_modified'=>$date_modified,

        ),



       
// 51
        array(

           'name' => $name51,
            'dimensions_name'=>$update_in_nayatel['dimensions_name'][50],
            'categories_id'=>$update_in_nayatel['categories_id'][50],
      
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][50],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][50],

           'date_modified'=>$date_modified,

        ),

        array(

           'name' => $name52 ,

      

        'dimensions_name'=>$update_in_nayatel['dimensions_name'][51],
            'categories_id'=>$update_in_nayatel['categories_id'][51],
      
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][51],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][51],

           'date_modified'=>$date_modified,

        ),



        array(

            'name' => $name53,

         

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][52],
            'categories_id'=>$update_in_nayatel['categories_id'][52],
      
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][52],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][52],

           'date_modified'=>$date_modified,

         ),

         array(

            'name' => $name54 ,

        

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][53],
            'categories_id'=>$update_in_nayatel['categories_id'][53],
      
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][53],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][53],

           'date_modified'=>$date_modified,

         ),



         array(

            'name' => $name55,

     

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][54],
            'categories_id'=>$update_in_nayatel['categories_id'][54],
    'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][54],   

           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][54],

           'date_modified'=>$date_modified,

         ),

         array(

            'name' => $name56,

       
           'dimensions_name'=>$update_in_nayatel['dimensions_name'][55],
            'categories_id'=>$update_in_nayatel['categories_id'][55],
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][55],      

           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][55],

           'date_modified'=>$date_modified,

         ),



         array(

             'name' => $name57,

        

            'dimensions_name'=>$update_in_nayatel['dimensions_name'][56],
            'categories_id'=>$update_in_nayatel['categories_id'][56],
      
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][56],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][56],

           'date_modified'=>$date_modified,

          ),

          array(

             'name' => $name58,

         

            'dimensions_name'=>$update_in_nayatel['dimensions_name'][57],
            'categories_id'=>$update_in_nayatel['categories_id'][57],
      
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][57],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][57],

           'date_modified'=>$date_modified,

          ),

          array(

           'name' => $name59,

        

         'dimensions_name'=>$update_in_nayatel['dimensions_name'][58],
            'categories_id'=>$update_in_nayatel['categories_id'][58],
      
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][58],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][58],

           'date_modified'=>$date_modified,

        ),

        array(

           'name' => $name60 ,

   

         'dimensions_name'=>$update_in_nayatel['dimensions_name'][59],
            'categories_id'=>$update_in_nayatel['categories_id'][59],
      
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][59],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][59],

           'date_modified'=>$date_modified,

        ),



     
// 61
        array(

           'name' => $name61,
            'dimensions_name'=>$update_in_nayatel['dimensions_name'][60],
            'categories_id'=>$update_in_nayatel['categories_id'][60],
      
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][60],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][60],

           'date_modified'=>$date_modified,

        ),

        array(

           'name' => $name62 ,

      

        'dimensions_name'=>$update_in_nayatel['dimensions_name'][61],
            'categories_id'=>$update_in_nayatel['categories_id'][61],
      
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][61],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][61],

           'date_modified'=>$date_modified,

        ),



        array(

            'name' => $name63,

         

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][62],
            'categories_id'=>$update_in_nayatel['categories_id'][62],
      
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][62],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][62],

           'date_modified'=>$date_modified,

         ),

         array(

            'name' => $name64 ,

        

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][63],
            'categories_id'=>$update_in_nayatel['categories_id'][63],
      
'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][63],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][63],

           'date_modified'=>$date_modified,

         ),



         array(

            'name' => $name65,

     

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][64],
            'categories_id'=>$update_in_nayatel['categories_id'][64],
'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][64],      

           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][64],

           'date_modified'=>$date_modified,

         ),

         array(

            'name' => $name66,

       
           'dimensions_name'=>$update_in_nayatel['dimensions_name'][65],
            'categories_id'=>$update_in_nayatel['categories_id'][65],
      
'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][65],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][65],

           'date_modified'=>$date_modified,

         ),



         array(

             'name' => $name67,

        

            'dimensions_name'=>$update_in_nayatel['dimensions_name'][66],
            'categories_id'=>$update_in_nayatel['categories_id'][66],
      
'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][66],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][66],

           'date_modified'=>$date_modified,

          ),

          array(

             'name' => $name68,

         

            'dimensions_name'=>$update_in_nayatel['dimensions_name'][67],
            'categories_id'=>$update_in_nayatel['categories_id'][67],
      
'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][67],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][67],

           'date_modified'=>$date_modified,

          ),

          array(

           'name' => $name69,

        

         'dimensions_name'=>$update_in_nayatel['dimensions_name'][68],
            'categories_id'=>$update_in_nayatel['categories_id'][68],
   'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][68],   

           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][68],

           'date_modified'=>$date_modified,

        ),

        array(

           'name' => $name70 ,

   

         'dimensions_name'=>$update_in_nayatel['dimensions_name'][69],
        'categories_id'=>$update_in_nayatel['categories_id'][69],
      
'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][69],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][69],

           'date_modified'=>$date_modified,

        ),
// 70

         array(

            'name' => $name71 ,

         

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][70],
            'categories_id'=>$update_in_nayatel['categories_id'][70],
     'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][70],  

           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][70],

           'date_modified'=>$date_modified,
         ),



         array(

            'name' => $name72,

          

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][71],
            'categories_id'=>$update_in_nayatel['categories_id'][71],
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][71],      

           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][71],

           'date_modified'=>$date_modified,

         ),

         array(

            'name' => $name73,

         
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][72],
           'dimensions_name'=>$update_in_nayatel['dimensions_name'][72],
            'categories_id'=>$update_in_nayatel['categories_id'][72],
      

           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][72],

           'date_modified'=>$date_modified,

         ),



         array(

             'name' => $name74,

     'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][73],     

           'dimensions_name'=>$update_in_nayatel['dimensions_name'][73],
            'categories_id'=>$update_in_nayatel['categories_id'][73],
      

           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][73],

           'date_modified'=>$date_modified,

          ),
      
                array(

           'name' => $name75,
            'dimensions_name'=>$update_in_nayatel['dimensions_name'][74],
            'categories_id'=>$update_in_nayatel['categories_id'][74],
      
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][74],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][74],

           'date_modified'=>$date_modified,

        ),

        array(

           'name' => $name76 ,

      

        'dimensions_name'=>$update_in_nayatel['dimensions_name'][75],
            'categories_id'=>$update_in_nayatel['categories_id'][75],
      
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][75],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][75],

           'date_modified'=>$date_modified,

        ),



        array(

            'name' => $name77,

         

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][76],
            'categories_id'=>$update_in_nayatel['categories_id'][76],
  'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][76],     

           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][76],

           'date_modified'=>$date_modified,

         ),

         array(

            'name' => $name78 ,

        

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][77],
            'categories_id'=>$update_in_nayatel['categories_id'][77],
      
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][77],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][77],

           'date_modified'=>$date_modified,

         ),



         array(

            'name' => $name79,

     

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][78],
            'categories_id'=>$update_in_nayatel['categories_id'][78],
      
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][78],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][78],

           'date_modified'=>$date_modified,

         ),

         array(

            'name' => $name80,

       
           'dimensions_name'=>$update_in_nayatel['dimensions_name'][79],
            'categories_id'=>$update_in_nayatel['categories_id'][79],
      
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][79],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][79],

           'date_modified'=>$date_modified,

         ),



         array(

             'name' => $name81,

        

            'dimensions_name'=>$update_in_nayatel['dimensions_name'][80],
            'categories_id'=>$update_in_nayatel['categories_id'][80],
  'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][80],     

           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][80],

           'date_modified'=>$date_modified,

          ),

          array(

             'name' => $name82,

         

            'dimensions_name'=>$update_in_nayatel['dimensions_name'][81],
            'categories_id'=>$update_in_nayatel['categories_id'][81],
      
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][81],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][81],

           'date_modified'=>$date_modified,

          ),

          array(

           'name' => $name83,

        

         'dimensions_name'=>$update_in_nayatel['dimensions_name'][82],
            'categories_id'=>$update_in_nayatel['categories_id'][82],
      
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][82],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][82],

           'date_modified'=>$date_modified,

        ),

        array(

           'name' => $name84 ,

   

         'dimensions_name'=>$update_in_nayatel['dimensions_name'][83],
            'categories_id'=>$update_in_nayatel['categories_id'][83],
      
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][83],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][83],

           'date_modified'=>$date_modified,

        ),



       
// 51
        array(

           'name' => $name85,
            'dimensions_name'=>$update_in_nayatel['dimensions_name'][84],
            'categories_id'=>$update_in_nayatel['categories_id'][84],
      
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][84],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][84],

           'date_modified'=>$date_modified,

        ),

        array(

           'name' => $name86 ,

      

        'dimensions_name'=>$update_in_nayatel['dimensions_name'][85],
            'categories_id'=>$update_in_nayatel['categories_id'][85],
      
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][85],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][85],

           'date_modified'=>$date_modified,

        ),



        array(

            'name' => $name87,

         

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][86],
            'categories_id'=>$update_in_nayatel['categories_id'][86],
      
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][86],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][86],

           'date_modified'=>$date_modified,

         ),

         array(

            'name' => $name88 ,

        

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][87],
            'categories_id'=>$update_in_nayatel['categories_id'][87],
      
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][87],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][87],

           'date_modified'=>$date_modified,

         ),



         array(

            'name' => $name89,

     

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][88],
            'categories_id'=>$update_in_nayatel['categories_id'][88],
    'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][88],   

           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][54],

           'date_modified'=>$date_modified,

         ),

         array(

            'name' => $name90,

       
           'dimensions_name'=>$update_in_nayatel['dimensions_name'][89],
            'categories_id'=>$update_in_nayatel['categories_id'][89],
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][89],      

           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][89],

           'date_modified'=>$date_modified,

         ),



         array(

             'name' => $name91,

        

            'dimensions_name'=>$update_in_nayatel['dimensions_name'][90],
            'categories_id'=>$update_in_nayatel['categories_id'][90],
      
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][90],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][90],

           'date_modified'=>$date_modified,

          ),

          array(

             'name' => $name92,

         

            'dimensions_name'=>$update_in_nayatel['dimensions_name'][91],
            'categories_id'=>$update_in_nayatel['categories_id'][91],
      
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][91],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][91],

           'date_modified'=>$date_modified,

          ),

          array(

           'name' => $name93,

        

         'dimensions_name'=>$update_in_nayatel['dimensions_name'][92],
            'categories_id'=>$update_in_nayatel['categories_id'][92],
      
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][92],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][92],

           'date_modified'=>$date_modified,

        ),

        array(

           'name' => $name94 ,

   

         'dimensions_name'=>$update_in_nayatel['dimensions_name'][93],
            'categories_id'=>$update_in_nayatel['categories_id'][93],
      
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][93],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][93],

           'date_modified'=>$date_modified,

        ),



     
// 61
        array(

           'name' => $name95,
            'dimensions_name'=>$update_in_nayatel['dimensions_name'][94],
            'categories_id'=>$update_in_nayatel['categories_id'][94],
      
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][94],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][94],

           'date_modified'=>$date_modified,

        ),

        array(

           'name' => $name96 ,

      

        'dimensions_name'=>$update_in_nayatel['dimensions_name'][95],
            'categories_id'=>$update_in_nayatel['categories_id'][95],
      
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][95],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][95],

           'date_modified'=>$date_modified,

        ),



        array(

            'name' => $name97,

         

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][96],
            'categories_id'=>$update_in_nayatel['categories_id'][96],
      
 'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][96],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][96],

           'date_modified'=>$date_modified,

         ),

         array(

            'name' => $name98 ,

        

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][97],
            'categories_id'=>$update_in_nayatel['categories_id'][97],
      
'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][97],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][97],

           'date_modified'=>$date_modified,

         ),



         array(

            'name' => $name99,

     

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][98],
            'categories_id'=>$update_in_nayatel['categories_id'][98],
'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][98],      

           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][98],

           'date_modified'=>$date_modified,

         ),

         array(

            'name' => $name100,

       
           'dimensions_name'=>$update_in_nayatel['dimensions_name'][99],
            'categories_id'=>$update_in_nayatel['categories_id'][99],
      
'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][99],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][99],

           'date_modified'=>$date_modified,

         ),



         array(

             'name' => $name101,

        

            'dimensions_name'=>$update_in_nayatel['dimensions_name'][100],
            'categories_id'=>$update_in_nayatel['categories_id'][100],
      
'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][100],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][100],

           'date_modified'=>$date_modified,

          ),

          array(

             'name' => $name102,

         

            'dimensions_name'=>$update_in_nayatel['dimensions_name'][101],
            'categories_id'=>$update_in_nayatel['categories_id'][101],
      
'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][101],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][101],

           'date_modified'=>$date_modified,

          ),

          array(

           'name' => $name103,

        

         'dimensions_name'=>$update_in_nayatel['dimensions_name'][102],
            'categories_id'=>$update_in_nayatel['categories_id'][102],
   'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][102],   

           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][102],

           'date_modified'=>$date_modified,

        ),

        array(

           'name' => $name104 ,

   

         'dimensions_name'=>$update_in_nayatel['dimensions_name'][103],
        'categories_id'=>$update_in_nayatel['categories_id'][103],
      
'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][103],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][103],

           'date_modified'=>$date_modified,

        ),
        
          array(

           'name' => $name105 ,

   

         'dimensions_name'=>$update_in_nayatel['dimensions_name'][104],
        'categories_id'=>$update_in_nayatel['categories_id'][104],
      
'sub_categories_names'=>$update_in_nayatel['sub_categories_names'][104],
           'questions_assessment_id'=>$update_in_nayatel['questions_assessment_id'][104],

           'date_modified'=>$date_modified,

        ),
        
// 105 end

          
     );

				//	echo "<pre>";print_r($insert_questions_data);exit;
					//$where_key=$this->db->where('questions_assessment_id', 'questions_assessment_id');
	return	$query=			$this->db->update_batch('questions_assessment', $insert_questions_data, 'questions_assessment_id'); exit;
	//	echo "<pre>";print_r($query);exit;

					return   $this->db->insert_batch('questions', $insert_questions_data);
       
    
}

public function edit_nayatel_values(){
  
  	$date_modified = date("Y-m-d H:i:s");
//   	$name1=array();
//   	$name2=array();
//   	$name3=array();
//   	$name4=array();
//   	$name5=array();
//   	$name6=array();
//   	$name7=array();
//   	$name8=array();
//   	$name9=array();
//   	$name10=array();
  	
//   	$name11=array();
//   	$name12=array();
//   	$name13=array();
//   	$name14=array();
//   	$name15=array();
//   	$name16=array();
//   	$name17=array();
//   	$name18=array();
//   	$name19=array();
//   	$name20=array();
  	
//   	$name21=array();
//   	$name22=array();
//   	$name23=array();
//   	$name24=array();
//   	$name25=array();
//   	$name26=array();
//   	$name27=array();
//   	$name28=array();
//   	$name29=array();
//   	$name30=array();
  	
//   	$name31=array();
//   	$name32=array();
//   	$name33=array();
//   	$name34=array();
//   	$name35=array();
//   	$name36=array();
//   	$name37=array();
//   	$name38=array();
//   	$name39=array();
//   	$name40=array();
  	
//   	$name41=array();
//   	$name42=array();
//   	$name43=array();
//   	$name44=array();
//   	$name45=array();
//   	$name46=array();
//   	$name47=array();
//   	$name48=array();
//   	$name49=array();
//   	$name50=array();
  	
//   	$name51=array();
//   	$name52=array();
//   	$name53=array();
//   	$name54=array();
//   	$name55=array();
//   	$name56=array();
//   	$name57=array();
//   	$name58=array();
//   	$name59=array();
//   	$name60=array();
  	
//   	$name61=array();
//   	$name62=array();
//   	$name63=array();
//   	$name64=array();
//   	$name65=array();
//   	$name66=array();
//   	$name67=array();
//   	$name68=array();
//   	$name69=array();
//   	$name70=array();
  				$update_in_nayatel = array(

					'name1'    => $_POST['name1'],
					'name2'    => $_POST['name2'],
					'name3'    => $_POST['name3'],
					'name4'    => $_POST['name4'],
					'name5'    => $_POST['name5'],
					'name6'    => $_POST['name6'],
					'name7'    => $_POST['name7'],
					'name8'    => $_POST['name8'],
					'name9'    => $_POST['name9'],
					'name10'    => $_POST['name10'],
					
					'name11'    => $_POST['name11'],
					'name12'    => $_POST['name12'],
					'name13'    => $_POST['name13'],
					'name14'    => $_POST['name14'],
					'name15'    => $_POST['name15'],
					'name16'    => $_POST['name16'],
					'name17'    => $_POST['name17'],
					'name18'    => $_POST['name18'],
					'name19'    => $_POST['name19'],
					'name20'    => $_POST['name20'],
					
					'name21'    => $_POST['name21'],
					'name22'    => $_POST['name22'],
					'name23'    => $_POST['name23'],
					'name24'    => $_POST['name24'],
					'name25'    => $_POST['name25'],
					'name26'    => $_POST['name26'],
					'name27'    => $_POST['name27'],
					'name28'    => $_POST['name28'],
					'name29'    => $_POST['name29'],
					'name30'    => $_POST['name30'],
					
					'name31'    => $_POST['name31'],
					'name32'    => $_POST['name32'],
					'name33'    => $_POST['name33'],
					'name34'    => $_POST['name34'],
					'name35'    => $_POST['name35'],
					'name36'    => $_POST['name36'],
					'name37'    => $_POST['name37'],
					'name38'    => $_POST['name38'],
					'name39'    => $_POST['name39'],
					'name40'    => $_POST['name40'],
					
					'name41'    => $_POST['name41'],
					'name42'    => $_POST['name42'],
					'name43'    => $_POST['name43'],
					'name44'    => $_POST['name44'],
					'name45'    => $_POST['name45'],
					'name46'    => $_POST['name46'],
					'name47'    => $_POST['name47'],
					'name48'    => $_POST['name48'],
					'name49'    => $_POST['name49'],
					'name50'    => $_POST['name50'],
					
					'name51'    => $_POST['name51'],
					'name52'    => $_POST['name52'],
					'name53'    => $_POST['name53'],
					'name54'    => $_POST['name54'],
					'name55'    => $_POST['name55'],
					'name56'    => $_POST['name56'],
					'name57'    => $_POST['name57'],
					'name58'    => $_POST['name58'],
					'name59'    => $_POST['name59'],
					'name60'    => $_POST['name60'],
					
					'name61'    => $_POST['name61'],
					'name62'    => $_POST['name62'],
					'name63'    => $_POST['name63'],
					'name64'    => $_POST['name64'],
					'name65'    => $_POST['name65'],
					'name66'    => $_POST['name66'],
					'name67'    => $_POST['name67'],
					'name68'    => $_POST['name68'],
					'name69'    => $_POST['name69'],
					'name70'    => $_POST['name70'],
					
					
					'dimensions_name'    => $_POST['dimensions_name'],
					'categories_id'    => $_POST['categories_id'],
					'questions_id'    => $_POST['questions_id'],


					'date_modified'=>$date_modified

				);
				
			
	$name1=$update_in_nayatel['name1'];

    $name2=$update_in_nayatel['name2'];

    $name3=$update_in_nayatel['name3'];

    $name4=$update_in_nayatel['name4'];

    $name5=$update_in_nayatel['name5'];

    $name6=$update_in_nayatel['name6'];

    $name7=$update_in_nayatel['name7'];

    $name8=$update_in_nayatel['name8'];

    $name9=$update_in_nayatel['name9'];

    $name10=$update_in_nayatel['name10'];
// 10
    $name11=$update_in_nayatel['name11'];

    $name12=$update_in_nayatel['name12'];

    $name13=$update_in_nayatel['name13'];

    $name14=$update_in_nayatel['name14'];

    $name15=$update_in_nayatel['name15'];

    $name16=$update_in_nayatel['name16'];

    $name17=$update_in_nayatel['name17'];

    $name18=$update_in_nayatel['name18'];

    $name19=$update_in_nayatel['name19'];

    $name20=$update_in_nayatel['name20'];
    // 20
    
    $name21=$update_in_nayatel['name21'];

    $name22=$update_in_nayatel['name22'];

    $name23=$update_in_nayatel['name23'];

    $name24=$update_in_nayatel['name24'];

    $name25=$update_in_nayatel['name25'];

    $name26=$update_in_nayatel['name26'];

    $name27=$update_in_nayatel['name27'];

    $name28=$update_in_nayatel['name28'];

    $name29=$update_in_nayatel['name29'];

    $name30=$update_in_nayatel['name30'];
    // 30
    
    	$name31=$update_in_nayatel['name31'];

    $name32=$update_in_nayatel['name32'];

    $name33=$update_in_nayatel['name33'];

    $name34=$update_in_nayatel['name34'];

    $name35=$update_in_nayatel['name35'];

    $name36=$update_in_nayatel['name36'];

    $name37=$update_in_nayatel['name37'];

    $name38=$update_in_nayatel['name38'];

    $name39=$update_in_nayatel['name39'];

    $name40=$update_in_nayatel['name40'];
    // 40
    
    	$name41=$update_in_nayatel['name41'];

    $name42=$update_in_nayatel['name42'];

    $name43=$update_in_nayatel['name43'];

    $name44=$update_in_nayatel['name44'];

    $name45=$update_in_nayatel['name45'];

    $name46=$update_in_nayatel['name46'];

    $name47=$update_in_nayatel['name47'];

    $name48=$update_in_nayatel['name48'];

    $name49=$update_in_nayatel['name49'];

    $name50=$update_in_nayatel['name50'];
    // 50
    
    	$name51=$update_in_nayatel['name51'];

    $name52=$update_in_nayatel['name52'];

    $name53=$update_in_nayatel['name53'];

    $name54=$update_in_nayatel['name54'];

    $name55=$update_in_nayatel['name55'];

    $name56=$update_in_nayatel['name56'];

    $name57=$update_in_nayatel['name57'];

    $name58=$update_in_nayatel['name58'];

    $name59=$update_in_nayatel['name59'];

    $name60=$update_in_nayatel['name60'];
    
    // 60
    
    	$name61=$update_in_nayatel['name61'];

    $name62=$update_in_nayatel['name62'];

    $name63=$update_in_nayatel['name63'];

    $name64=$update_in_nayatel['name64'];

    $name65=$update_in_nayatel['name65'];

    $name66=$update_in_nayatel['name66'];

    $name67=$update_in_nayatel['name67'];

    $name68=$update_in_nayatel['name68'];

    $name69=$update_in_nayatel['name69'];

    $name70=$update_in_nayatel['name70'];
    
    // 70


			
			
				
				    $insert_questions_data = array(

        array(

           'name' => $name1,
            'dimensions_name'=>$update_in_nayatel['dimensions_name'][0],
            'categories_id'=>$update_in_nayatel['categories_id'][0],
      

           'questions_id'=>$update_in_nayatel['questions_id'][0],

           'date_modified'=>$date_modified,

        ),

        array(

           'name' => $name2 ,

      

        'dimensions_name'=>$update_in_nayatel['dimensions_name'][1],
            'categories_id'=>$update_in_nayatel['categories_id'][1],
      

           'questions_id'=>$update_in_nayatel['questions_id'][1],

           'date_modified'=>$date_modified,

        ),



        array(

            'name' => $name3,

         

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][2],
            'categories_id'=>$update_in_nayatel['categories_id'][2],
      

           'questions_id'=>$update_in_nayatel['questions_id'][2],

           'date_modified'=>$date_modified,

         ),

         array(

            'name' => $name4 ,

        

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][3],
            'categories_id'=>$update_in_nayatel['categories_id'][3],
      

           'questions_id'=>$update_in_nayatel['questions_id'][3],

           'date_modified'=>$date_modified,

         ),



         array(

            'name' => $name5,

     

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][4],
            'categories_id'=>$update_in_nayatel['categories_id'][4],
      

           'questions_id'=>$update_in_nayatel['questions_id'][4],

           'date_modified'=>$date_modified,

         ),

         array(

            'name' => $name6,

       
           'dimensions_name'=>$update_in_nayatel['dimensions_name'][5],
            'categories_id'=>$update_in_nayatel['categories_id'][5],
      

           'questions_id'=>$update_in_nayatel['questions_id'][5],

           'date_modified'=>$date_modified,

         ),



         array(

             'name' => $name7,

        

            'dimensions_name'=>$update_in_nayatel['dimensions_name'][6],
            'categories_id'=>$update_in_nayatel['categories_id'][6],
      

           'questions_id'=>$update_in_nayatel['questions_id'][6],

           'date_modified'=>$date_modified,

          ),

          array(

             'name' => $name8,

         

            'dimensions_name'=>$update_in_nayatel['dimensions_name'][7],
            'categories_id'=>$update_in_nayatel['categories_id'][7],
      

           'questions_id'=>$update_in_nayatel['questions_id'][7],

           'date_modified'=>$date_modified,

          ),

          array(

           'name' => $name9,

        

         'dimensions_name'=>$update_in_nayatel['dimensions_name'][8],
            'categories_id'=>$update_in_nayatel['categories_id'][8],
      

           'questions_id'=>$update_in_nayatel['questions_id'][8],

           'date_modified'=>$date_modified,

        ),

        array(

           'name' => $name10 ,

   

         'dimensions_name'=>$update_in_nayatel['dimensions_name'][9],
            'categories_id'=>$update_in_nayatel['categories_id'][9],
      

           'questions_id'=>$update_in_nayatel['questions_id'][9],

           'date_modified'=>$date_modified,

        ),



        array(

            'name' => $name11,

         

           'dimensions_name'=>$update_in_nayatel['dimensions_name'][10],
            'categories_id'=>$update_in_nayatel['categories_id'][10],
      

           'questions_id'=>$update_in_nayatel['questions_id'][10],

           'date_modified'=>$date_modified,

         ),

         array(

            'name' => $name12 ,

        

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][11],
            'categories_id'=>$update_in_nayatel['categories_id'][11],
      

           'questions_id'=>$update_in_nayatel['questions_id'][11],

           'date_modified'=>$date_modified,

         ),



         array(

            'name' => $name13,

      

            'dimensions_name'=>$update_in_nayatel['dimensions_name'][12],
            'categories_id'=>$update_in_nayatel['categories_id'][12],
      

           'questions_id'=>$update_in_nayatel['questions_id'][12],

           'date_modified'=>$date_modified,

         ),

         array(

            'name' => $name14,

       

           'dimensions_name'=>$update_in_nayatel['dimensions_name'][13],
            'categories_id'=>$update_in_nayatel['categories_id'][13],
      

           'questions_id'=>$update_in_nayatel['questions_id'][13],

           'date_modified'=>$date_modified,
         ),



         array(

             'name' => $name15,

       

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][14],
            'categories_id'=>$update_in_nayatel['categories_id'][14],
      

           'questions_id'=>$update_in_nayatel['questions_id'][14],

           'date_modified'=>$date_modified,

          ),



          array(

            'name' => $name16,

         

        'dimensions_name'=>$update_in_nayatel['dimensions_name'][15],
            'categories_id'=>$update_in_nayatel['categories_id'][15],
      

           'questions_id'=>$update_in_nayatel['questions_id'][15],

           'date_modified'=>$date_modified,

         ),

         array(

            'name' => $name17 ,

         

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][16],
            'categories_id'=>$update_in_nayatel['categories_id'][16],
      

           'questions_id'=>$update_in_nayatel['questions_id'][16],

           'date_modified'=>$date_modified,
         ),



         array(

            'name' => $name18,

          

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][17],
            'categories_id'=>$update_in_nayatel['categories_id'][17],
      

           'questions_id'=>$update_in_nayatel['questions_id'][17],

           'date_modified'=>$date_modified,

         ),

         array(

            'name' => $name19,

         

           'dimensions_name'=>$update_in_nayatel['dimensions_name'][18],
            'categories_id'=>$update_in_nayatel['categories_id'][18],
      

           'questions_id'=>$update_in_nayatel['questions_id'][18],

           'date_modified'=>$date_modified,

         ),



         array(

             'name' => $name20,

         

           'dimensions_name'=>$update_in_nayatel['dimensions_name'][19],
            'categories_id'=>$update_in_nayatel['categories_id'][19],
      

           'questions_id'=>$update_in_nayatel['questions_id'][19],

           'date_modified'=>$date_modified,

          ),
// 20
        //   21
array(

           'name' => $name21,
            'dimensions_name'=>$update_in_nayatel['dimensions_name'][20],
            'categories_id'=>$update_in_nayatel['categories_id'][20],
      

           'questions_id'=>$update_in_nayatel['questions_id'][20],

           'date_modified'=>$date_modified,

        ),

        array(

           'name' => $name22 ,

      

        'dimensions_name'=>$update_in_nayatel['dimensions_name'][21],
            'categories_id'=>$update_in_nayatel['categories_id'][21],
      

           'questions_id'=>$update_in_nayatel['questions_id'][21],

           'date_modified'=>$date_modified,

        ),



        array(

            'name' => $name23,

         

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][22],
            'categories_id'=>$update_in_nayatel['categories_id'][22],
      

           'questions_id'=>$update_in_nayatel['questions_id'][22],

           'date_modified'=>$date_modified,

         ),

         array(

            'name' => $name24 ,

        

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][23],
            'categories_id'=>$update_in_nayatel['categories_id'][23],
      

           'questions_id'=>$update_in_nayatel['questions_id'][23],

           'date_modified'=>$date_modified,

         ),



         array(

            'name' => $name25,

     

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][24],
            'categories_id'=>$update_in_nayatel['categories_id'][24],
      

           'questions_id'=>$update_in_nayatel['questions_id'][24],

           'date_modified'=>$date_modified,

         ),

         array(

            'name' => $name26,

       
           'dimensions_name'=>$update_in_nayatel['dimensions_name'][25],
            'categories_id'=>$update_in_nayatel['categories_id'][25],
      

           'questions_id'=>$update_in_nayatel['questions_id'][25],

           'date_modified'=>$date_modified,

         ),



         array(

             'name' => $name27,

        

            'dimensions_name'=>$update_in_nayatel['dimensions_name'][26],
            'categories_id'=>$update_in_nayatel['categories_id'][26],
      

           'questions_id'=>$update_in_nayatel['questions_id'][26],

           'date_modified'=>$date_modified,

          ),

          array(

             'name' => $name28,

         

            'dimensions_name'=>$update_in_nayatel['dimensions_name'][27],
            'categories_id'=>$update_in_nayatel['categories_id'][27],
      

           'questions_id'=>$update_in_nayatel['questions_id'][27],

           'date_modified'=>$date_modified,

          ),

          array(

           'name' => $name29,

        

         'dimensions_name'=>$update_in_nayatel['dimensions_name'][28],
            'categories_id'=>$update_in_nayatel['categories_id'][28],
      

           'questions_id'=>$update_in_nayatel['questions_id'][28],

           'date_modified'=>$date_modified,

        ),

        array(

           'name' => $name30 ,

   

         'dimensions_name'=>$update_in_nayatel['dimensions_name'][29],
            'categories_id'=>$update_in_nayatel['categories_id'][29],
      

           'questions_id'=>$update_in_nayatel['questions_id'][29],

           'date_modified'=>$date_modified,

        ),



        array(

            'name' => $name31,

         

           'dimensions_name'=>$update_in_nayatel['dimensions_name'][30],
            'categories_id'=>$update_in_nayatel['categories_id'][30],
      

           'questions_id'=>$update_in_nayatel['questions_id'][30],

           'date_modified'=>$date_modified,

         ),

         array(

            'name' => $name32 ,

        

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][31],
            'categories_id'=>$update_in_nayatel['categories_id'][31],
      

           'questions_id'=>$update_in_nayatel['questions_id'][31],

           'date_modified'=>$date_modified,

         ),



         array(

            'name' => $name33,

      

            'dimensions_name'=>$update_in_nayatel['dimensions_name'][32],
            'categories_id'=>$update_in_nayatel['categories_id'][32],
      

           'questions_id'=>$update_in_nayatel['questions_id'][32],

           'date_modified'=>$date_modified,

         ),

         array(

            'name' => $name34,

       

           'dimensions_name'=>$update_in_nayatel['dimensions_name'][33],
            'categories_id'=>$update_in_nayatel['categories_id'][33],
      

           'questions_id'=>$update_in_nayatel['questions_id'][33],

           'date_modified'=>$date_modified,
         ),



         array(

             'name' => $name35,

       

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][34],
            'categories_id'=>$update_in_nayatel['categories_id'][34],
      

           'questions_id'=>$update_in_nayatel['questions_id'][34],

           'date_modified'=>$date_modified,

          ),



          array(

            'name' => $name36,

         

        'dimensions_name'=>$update_in_nayatel['dimensions_name'][35],
            'categories_id'=>$update_in_nayatel['categories_id'][35],
      

           'questions_id'=>$update_in_nayatel['questions_id'][35],

           'date_modified'=>$date_modified,

         ),

         array(

            'name' => $name37 ,

         

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][36],
            'categories_id'=>$update_in_nayatel['categories_id'][36],
      

           'questions_id'=>$update_in_nayatel['questions_id'][36],

           'date_modified'=>$date_modified,
         ),



         array(

            'name' => $name38,

          

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][37],
            'categories_id'=>$update_in_nayatel['categories_id'][37],
      

           'questions_id'=>$update_in_nayatel['questions_id'][37],

           'date_modified'=>$date_modified,

         ),

         array(

            'name' => $name39,

         

           'dimensions_name'=>$update_in_nayatel['dimensions_name'][38],
            'categories_id'=>$update_in_nayatel['categories_id'][38],
      

           'questions_id'=>$update_in_nayatel['questions_id'][38],

           'date_modified'=>$date_modified,

         ),



         array(

             'name' => $name40,

         

           'dimensions_name'=>$update_in_nayatel['dimensions_name'][39],
            'categories_id'=>$update_in_nayatel['categories_id'][39],
      

           'questions_id'=>$update_in_nayatel['questions_id'][39],

           'date_modified'=>$date_modified,

          ),
        //   41
                array(

           'name' => $name41,
            'dimensions_name'=>$update_in_nayatel['dimensions_name'][40],
            'categories_id'=>$update_in_nayatel['categories_id'][40],
      

           'questions_id'=>$update_in_nayatel['questions_id'][40],

           'date_modified'=>$date_modified,

        ),

        array(

           'name' => $name42 ,

      

        'dimensions_name'=>$update_in_nayatel['dimensions_name'][41],
            'categories_id'=>$update_in_nayatel['categories_id'][41],
      

           'questions_id'=>$update_in_nayatel['questions_id'][41],

           'date_modified'=>$date_modified,

        ),



        array(

            'name' => $name43,

         

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][42],
            'categories_id'=>$update_in_nayatel['categories_id'][42],
      

           'questions_id'=>$update_in_nayatel['questions_id'][42],

           'date_modified'=>$date_modified,

         ),

         array(

            'name' => $name44 ,

        

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][43],
            'categories_id'=>$update_in_nayatel['categories_id'][43],
      

           'questions_id'=>$update_in_nayatel['questions_id'][43],

           'date_modified'=>$date_modified,

         ),



         array(

            'name' => $name45,

     

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][44],
            'categories_id'=>$update_in_nayatel['categories_id'][44],
      

           'questions_id'=>$update_in_nayatel['questions_id'][44],

           'date_modified'=>$date_modified,

         ),

         array(

            'name' => $name46,

       
           'dimensions_name'=>$update_in_nayatel['dimensions_name'][45],
            'categories_id'=>$update_in_nayatel['categories_id'][45],
      

           'questions_id'=>$update_in_nayatel['questions_id'][45],

           'date_modified'=>$date_modified,

         ),



         array(

             'name' => $name47,

        

            'dimensions_name'=>$update_in_nayatel['dimensions_name'][46],
            'categories_id'=>$update_in_nayatel['categories_id'][46],
      

           'questions_id'=>$update_in_nayatel['questions_id'][46],

           'date_modified'=>$date_modified,

          ),

          array(

             'name' => $name48,

         

            'dimensions_name'=>$update_in_nayatel['dimensions_name'][47],
            'categories_id'=>$update_in_nayatel['categories_id'][47],
      

           'questions_id'=>$update_in_nayatel['questions_id'][47],

           'date_modified'=>$date_modified,

          ),

          array(

           'name' => $name49,

        

         'dimensions_name'=>$update_in_nayatel['dimensions_name'][48],
            'categories_id'=>$update_in_nayatel['categories_id'][48],
      

           'questions_id'=>$update_in_nayatel['questions_id'][48],

           'date_modified'=>$date_modified,

        ),

        array(

           'name' => $name50 ,

   

         'dimensions_name'=>$update_in_nayatel['dimensions_name'][49],
            'categories_id'=>$update_in_nayatel['categories_id'][49],
      

           'questions_id'=>$update_in_nayatel['questions_id'][49],

           'date_modified'=>$date_modified,

        ),



       
// 51
        array(

           'name' => $name51,
            'dimensions_name'=>$update_in_nayatel['dimensions_name'][50],
            'categories_id'=>$update_in_nayatel['categories_id'][50],
      

           'questions_id'=>$update_in_nayatel['questions_id'][50],

           'date_modified'=>$date_modified,

        ),

        array(

           'name' => $name52 ,

      

        'dimensions_name'=>$update_in_nayatel['dimensions_name'][51],
            'categories_id'=>$update_in_nayatel['categories_id'][51],
      

           'questions_id'=>$update_in_nayatel['questions_id'][51],

           'date_modified'=>$date_modified,

        ),



        array(

            'name' => $name53,

         

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][52],
            'categories_id'=>$update_in_nayatel['categories_id'][52],
      

           'questions_id'=>$update_in_nayatel['questions_id'][52],

           'date_modified'=>$date_modified,

         ),

         array(

            'name' => $name54 ,

        

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][53],
            'categories_id'=>$update_in_nayatel['categories_id'][53],
      

           'questions_id'=>$update_in_nayatel['questions_id'][53],

           'date_modified'=>$date_modified,

         ),



         array(

            'name' => $name55,

     

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][54],
            'categories_id'=>$update_in_nayatel['categories_id'][54],
      

           'questions_id'=>$update_in_nayatel['questions_id'][54],

           'date_modified'=>$date_modified,

         ),

         array(

            'name' => $name56,

       
           'dimensions_name'=>$update_in_nayatel['dimensions_name'][55],
            'categories_id'=>$update_in_nayatel['categories_id'][55],
      

           'questions_id'=>$update_in_nayatel['questions_id'][55],

           'date_modified'=>$date_modified,

         ),



         array(

             'name' => $name57,

        

            'dimensions_name'=>$update_in_nayatel['dimensions_name'][56],
            'categories_id'=>$update_in_nayatel['categories_id'][56],
      

           'questions_id'=>$update_in_nayatel['questions_id'][56],

           'date_modified'=>$date_modified,

          ),

          array(

             'name' => $name58,

         

            'dimensions_name'=>$update_in_nayatel['dimensions_name'][57],
            'categories_id'=>$update_in_nayatel['categories_id'][57],
      

           'questions_id'=>$update_in_nayatel['questions_id'][57],

           'date_modified'=>$date_modified,

          ),

          array(

           'name' => $name59,

        

         'dimensions_name'=>$update_in_nayatel['dimensions_name'][58],
            'categories_id'=>$update_in_nayatel['categories_id'][58],
      

           'questions_id'=>$update_in_nayatel['questions_id'][58],

           'date_modified'=>$date_modified,

        ),

        array(

           'name' => $name60 ,

   

         'dimensions_name'=>$update_in_nayatel['dimensions_name'][59],
            'categories_id'=>$update_in_nayatel['categories_id'][59],
      

           'questions_id'=>$update_in_nayatel['questions_id'][59],

           'date_modified'=>$date_modified,

        ),



     
// 61
        array(

           'name' => $name61,
            'dimensions_name'=>$update_in_nayatel['dimensions_name'][60],
            'categories_id'=>$update_in_nayatel['categories_id'][60],
      

           'questions_id'=>$update_in_nayatel['questions_id'][60],

           'date_modified'=>$date_modified,

        ),

        array(

           'name' => $name62 ,

      

        'dimensions_name'=>$update_in_nayatel['dimensions_name'][61],
            'categories_id'=>$update_in_nayatel['categories_id'][61],
      

           'questions_id'=>$update_in_nayatel['questions_id'][61],

           'date_modified'=>$date_modified,

        ),



        array(

            'name' => $name63,

         

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][62],
            'categories_id'=>$update_in_nayatel['categories_id'][62],
      

           'questions_id'=>$update_in_nayatel['questions_id'][62],

           'date_modified'=>$date_modified,

         ),

         array(

            'name' => $name64 ,

        

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][63],
            'categories_id'=>$update_in_nayatel['categories_id'][63],
      

           'questions_id'=>$update_in_nayatel['questions_id'][63],

           'date_modified'=>$date_modified,

         ),



         array(

            'name' => $name65,

     

          'dimensions_name'=>$update_in_nayatel['dimensions_name'][64],
            'categories_id'=>$update_in_nayatel['categories_id'][64],
      

           'questions_id'=>$update_in_nayatel['questions_id'][64],

           'date_modified'=>$date_modified,

         ),

         array(

            'name' => $name66,

       
           'dimensions_name'=>$update_in_nayatel['dimensions_name'][65],
            'categories_id'=>$update_in_nayatel['categories_id'][65],
      

           'questions_id'=>$update_in_nayatel['questions_id'][65],

           'date_modified'=>$date_modified,

         ),



         array(

             'name' => $name67,

        

            'dimensions_name'=>$update_in_nayatel['dimensions_name'][66],
            'categories_id'=>$update_in_nayatel['categories_id'][66],
      

           'questions_id'=>$update_in_nayatel['questions_id'][66],

           'date_modified'=>$date_modified,

          ),

          array(

             'name' => $name68,

         

            'dimensions_name'=>$update_in_nayatel['dimensions_name'][67],
            'categories_id'=>$update_in_nayatel['categories_id'][67],
      

           'questions_id'=>$update_in_nayatel['questions_id'][67],

           'date_modified'=>$date_modified,

          ),

          array(

           'name' => $name69,

        

         'dimensions_name'=>$update_in_nayatel['dimensions_name'][68],
            'categories_id'=>$update_in_nayatel['categories_id'][68],
      

           'questions_id'=>$update_in_nayatel['questions_id'][68],

           'date_modified'=>$date_modified,

        ),

        array(

           'name' => $name70 ,

   

         'dimensions_name'=>$update_in_nayatel['dimensions_name'][69],
        'categories_id'=>$update_in_nayatel['categories_id'][69],
      

           'questions_id'=>$update_in_nayatel['questions_id'][69],

           'date_modified'=>$date_modified,

        ),



      
// 70
          
     );

				//	echo "<pre>";print_r($insert_questions_data);exit;
					//$where_key=$this->db->where('questions_id', 'questions_id');
	return	$query=			$this->db->update_batch('questions', $insert_questions_data, 'questions_id'); exit;
	//	echo "<pre>";print_r($query);exit;

					return   $this->db->insert_batch('questions', $insert_questions_data);
    
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
    'sub_categories_names'=>$data['sub_categories_names'],
    'dimensions_name'=>$data['dimensions_name'],

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
     $sub_categories_names=$data['sub_categories_names'];
      $dimensions_name=$data['dimensions_name'];

    $date_created=$data['date_created'];

    $insert_questions_data = array(

        array(

           'name' => $name1,

           //'value' =>$value1, 

           'categories_id'=>$data['categories_id'],

           'date_created'=>$data['date_created'],
            'sub_categories_names'=>$data['sub_categories_names'],
             'dimensions_name'=>$data['dimensions_name'],

        ),

        array(

           'name' => $name2 ,

           //'value' =>$value2,  

           'categories_id'=>$data['categories_id'],

    'date_created'=>$data['date_created'],
     'sub_categories_names'=>$data['sub_categories_names'],
             'dimensions_name'=>$data['dimensions_name'],

        ),



        array(

            'name' => $name3,

            //'value' =>$value3, 

            'categories_id'=>$data['categories_id'],

     'date_created'=>$data['date_created'],
      'sub_categories_names'=>$data['sub_categories_names'],
             'dimensions_name'=>$data['dimensions_name'],

         ),

         array(

            'name' => $name4 ,

           // 'value' =>$value4,  

            'categories_id'=>$data['categories_id'],

     'date_created'=>$data['date_created'],
      'sub_categories_names'=>$data['sub_categories_names'],
             'dimensions_name'=>$data['dimensions_name'],

         ),



         array(

            'name' => $name5,

           // 'value' =>$value5, 

            'categories_id'=>$data['categories_id'],

     'date_created'=>$data['date_created'],
      'sub_categories_names'=>$data['sub_categories_names'],
             'dimensions_name'=>$data['dimensions_name'],

         ),

         array(

            'name' => $name6,

           // 'value' =>$value6,  

            'categories_id'=>$data['categories_id'],

     'date_created'=>$data['date_created'],
      'sub_categories_names'=>$data['sub_categories_names'],
             'dimensions_name'=>$data['dimensions_name'],

         ),



         array(

             'name' => $name7,

            // 'value' =>$value7, 

             'categories_id'=>$data['categories_id'],

      'date_created'=>$data['date_created'],
       'sub_categories_names'=>$data['sub_categories_names'],
             'dimensions_name'=>$data['dimensions_name'],

          ),

          array(

             'name' => $name8,

             //'value' =>$value8,  

             'categories_id'=>$data['categories_id'],

      'date_created'=>$data['date_created'],
       'sub_categories_names'=>$data['sub_categories_names'],
             'dimensions_name'=>$data['dimensions_name'],

          ),

          array(

           'name' => $name9,

          // 'value' =>$value9, 

           'categories_id'=>$data['categories_id'],

           'date_created'=>$data['date_created'],
            'sub_categories_names'=>$data['sub_categories_names'],
             'dimensions_name'=>$data['dimensions_name'],

        ),

        array(

           'name' => $name10 ,

          // 'value' =>$value10,  

           'categories_id'=>$data['categories_id'],

    'date_created'=>$data['date_created'],
     'sub_categories_names'=>$data['sub_categories_names'],
             'dimensions_name'=>$data['dimensions_name'],

        ),



        array(

            'name' => $name11,

            //'value' =>$value11, 

            'categories_id'=>$data['categories_id'],

     'date_created'=>$data['date_created'],
      'sub_categories_names'=>$data['sub_categories_names'],
             'dimensions_name'=>$data['dimensions_name'],

         ),

         array(

            'name' => $name12 ,

           // 'value' =>$value12,  

            'categories_id'=>$data['categories_id'],

     'date_created'=>$data['date_created'],
      'sub_categories_names'=>$data['sub_categories_names'],
             'dimensions_name'=>$data['dimensions_name'],

         ),



         array(

            'name' => $name13,

            //'value' =>$value13, 

            'categories_id'=>$data['categories_id'],

     'date_created'=>$data['date_created'],
      'sub_categories_names'=>$data['sub_categories_names'],
             'dimensions_name'=>$data['dimensions_name'],

         ),

         array(

            'name' => $name14,

           // 'value' =>$value14,  

            'categories_id'=>$data['categories_id'],

     'date_created'=>$data['date_created'],
 'sub_categories_names'=>$data['sub_categories_names'],
             'dimensions_name'=>$data['dimensions_name'],
         ),



         array(

             'name' => $name15,

            // 'value' =>$value15, 

             'categories_id'=>$data['categories_id'],

      'date_created'=>$data['date_created'],
       'sub_categories_names'=>$data['sub_categories_names'],
             'dimensions_name'=>$data['dimensions_name'],

          ),

          

     );

     //echo "<pre>";print_r($insert_questions_data);exit;

  

     

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

        // $value1=$_POST['value1'];

        // $value2=$_POST['value2'];

        // $value3=$_POST['value3'];

        // $value4=$_POST['value4'];

        // $value5=$_POST['value5'];

        // $value6=$_POST['value6'];

        // $value7=$_POST['value7'];

        // $value8=$_POST['value8'];

        // $value9=$_POST['value9'];

        // $value10=$_POST['value10'];

        // $value11=$_POST['value11'];

        // $value12=$_POST['value12'];

        // $value13=$_POST['value13'];

        // $value14=$_POST['value14'];

        // $value15=$_POST['value15'];

        // $value16=$_POST['value16'];

        // $value17=$_POST['value17'];

        // $value18=$_POST['value18'];

        // $value19=$_POST['value19'];

        // $value20=$_POST['value20'];



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

        //  'value1' =>$_POST['value1'], 

        //  'value2' =>$_POST['value2'],  

        //  'value3' =>$_POST['value3'],  

        //  'value4' =>$_POST['value4'], 

        //  'value5' =>$_POST['value5'], 

        //  'value6' =>$_POST['value6'],  

        //  'value7' =>$_POST['value7'],  

        //  'value8' =>$_POST['value8'],  

        //  'value9' =>$_POST['value9'], 

        //  'value10' =>$_POST['value10'],  

        //  'value11' =>$_POST['value11'],  

        //  'value12' =>$_POST['value12'], 

        //  'value13' =>$_POST['value13'], 

        //  'value14' =>$_POST['value14'],  

        //  'value15' =>$_POST['value15'],  

        //  'value16' =>$_POST['value16'],  

        //  'value17' =>$_POST['value17'], 

        //  'value18' =>$_POST['value18'],  

        //  'value19' =>$_POST['value19'],  

        //  'value20' =>$_POST['value20'],        

         'categories_id'=>$data['categories_id'],

         'date_created'=>$data['date_created'],

         );

 

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

                // 'value' =>$value3, 

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

                 //'value' =>$value6,  

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

                //'value' =>$value9, 

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

                // 'value' =>$value11, 

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

                // 'value' =>$value13, 

                 'categories_id'=>$data['categories_id'],

          'date_created'=>$data['date_created'],

              ),

              array(

                 'name' => $name14,

                 //'value' =>$value14,  

                 'categories_id'=>$data['categories_id'],

          'date_created'=>$data['date_created'],

              ),

  

              array(

                  'name' => $name15,

                  //'value' =>$value15, 

                  'categories_id'=>$data['categories_id'],

           'date_created'=>$data['date_created'],

               ),

               array(

                  'name' => $name16,

                 // 'value' =>$value16,  

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





       $message = str_replace($name1, "<br>", $name2 );



        $name21=$name1.'&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp'.$name2;

       

        //echo "<pre>";print_r($name21);exit;

        $name3=$_POST['name3'];

       $name4=$_POST['name4'];

        $name22=$name3.'&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp'.$name4;



        $name5=$_POST['name5'];

       $name6=$_POST['name6'];

        $name23=$name5.'&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp'.$name6;



        $name7=$_POST['name7'];

       $name8=$_POST['name8'];

        $name24=$name7.'&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp'.$name8;



        $name9=$_POST['name9'];

       $name10=$_POST['name10'];

        $name25=$name9.'&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp'.$name10;



        $name11=$_POST['name11'];

       $name12=$_POST['name12'];

        $name26=$name11.''.$name12;



        $name13=$_POST['name13'];

       $name14=$_POST['name14'];

        $name27=$name13.'&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp'.$name14;



        $name15=$_POST['name15'];

       $name16=$_POST['name16'];

        $name28=$name15.'&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp'.$name16;

    //    $value1=$_POST['value1'];

    //    $value2=$_POST['value2'];

    //    $value3=$_POST['value3'];

    //    $value4=$_POST['value4'];

    //    $value5=$_POST['value5'];

    //    $value6=$_POST['value6'];

    //    $value7=$_POST['value7'];

    //    $value8=$_POST['value8'];

        $insert_in_questions=array(

			'name1'=>$name21,

			'name2'=>$name22,

			'name3'=>$name23,

            'name4'=>$name24,

            'name5'=>$name25,

			'name6'=>$name26,

			'name7'=>$name27,

			'name8'=>$name28,

        // 'value1' =>$value1, 

        // 'value2' =>$value2,  

        // 'value3' =>$value3,  

        // 'value4' =>$value4, 

        // 'value5' =>$value5, 

        // 'value6' =>$value6,  

        // 'value7' =>$value7,  

        // 'value8' =>$value8,        

        'categories_id'=>$data['categories_id'],

        'date_created'=>$data['date_created'],

        );



        $categories_id=$data['categories_id'];

        $date_created=$data['date_created'];

        $insert_questions_data = array(

            array(

               'name' => $name21 ,

               //'value' =>$value1, 

               'categories_id'=>$categories_id,

        'date_created'=>$date_created,

            ),

            array(

               'name' => $name22 ,

               //'value' =>$value2,  

               'categories_id'=>$categories_id,

        'date_created'=>$date_created,

            ),



            array(

                'name' => $name23 ,

               // 'value' =>$value3, 

                'categories_id'=>$categories_id,

         'date_created'=>$date_created,

             ),

             array(

                'name' => $name24 ,

                //'value' =>$value4,  

                'categories_id'=>$categories_id,

         'date_created'=>$date_created,

             ),



             array(

                'name' => $name25 ,

               // 'value' =>$value5, 

                'categories_id'=>$categories_id,

         'date_created'=>$date_created,

             ),

             array(

                'name' => $name26 ,

               // 'value' =>$value6,  

                'categories_id'=>$categories_id,

         'date_created'=>$date_created,

             ),

 

             array(

                 'name' => $name27 ,

                // 'value' =>$value7, 

                 'categories_id'=>$categories_id,

          'date_created'=>$date_created,

              ),

              array(

                 'name' => $name28 ,

                // 'value' =>$value8,  

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



public function organization_update($id,$data){
    
     $this->db->where('organization_id',$id);

    $this->db->update('organization',$data);
    
    
}

public function description_update($id,$data) {
$description_id=$this->input->post('description_id');
//echo "<pre>";print_r($description_id);exit;
    $this->db->where('description_id',$description_id);

    $this->db->update('description',$data);

}





    public function sub_categories_update($id,$data) {

        $this->db->where('sub_categories_id',$id);

       return  $this->db->update('sub_categories',$data);exit;
      // echo "<pre>";print_r($query);exit;

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


public function delete_organization($id){
    
     $this->db->where('organization_id',$id);

    $this->db->delete('organization');
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

$description_id=$data;

    $sql = 'SELECT * FROM description WHERE description_id=?';

    $query = $this->db->query($sql,array($data));

   // echo "<pre>";print_r($sql);exit;

    return $query->first_row('array'); 

}

public function organization_check($data){
    
    $sql = 'SELECT * FROM organization WHERE organization_id=?';

    $query = $this->db->query($sql,array($data));

    

    return $query->first_row('array'); 
   // echo "<pre>";print_r($sql);exit;
    
    
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

   public function add_organization($data){
       
       $this->db->insert('organization',$data);

        return $this->db->insert_id(); 
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