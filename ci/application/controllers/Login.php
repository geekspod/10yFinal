<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct()
	{
        parent::__construct();
        $this->load->model('Model_common');
        $this->load->model('Model_category');
        $this->load->model('Model_portfolio');
		$this->load->model('Model_user');
		$this->load->library('form_validation');
		// $this->load->model('Model_login');
    }


	public function index()
	{
		
		// $id = $this->uri->segment(3);
 		// echo $id;exit;
		//bootbox.alert("Hello world!");

		$data['setting'] = $this->Model_common->all_setting();
		$data['sliders'] = $this->Model_common->all_slider('login');
    	$data['social'] = $this->Model_common->all_social();

		$this->load->view('view_header',$data);
		$this->load->view('view_login',$data);
		$this->load->view('view_footer',$data);
		
	}
	
public function incomplete_scenario(){
    $test_name="Work Personality Index";
    if(($this->uri->segment(3)!=0)){
	$data['dashboard_data']=$this->uri->segment(3);
	
}
else{
	$data['dashboard_data']=$this->session->userdata();
}

$email=$data['dashboard_data'];
$email=$email['email'];
$date_created = date("Y-m-d H:i:s");
$date_modified=$date_created;
$test_time_slot=$_POST['time'];
	
	
	$form_data = array(
				'test_time_slot'    => $test_time_slot,
				'date_modified'    => $date_modified,
				'date_created'    => $date_created,
				'email'    => $email,
				'test_name'    => $test_name,
			
			);
		//	echo "<pre>";print_r($form_data);exit;
		   $questions_score_id= $this->Model_category->add_incomplete_scenario($form_data);
	
	
	
    	//echo "<pre>";print_r($questions_score_id);exit;
    	redirect(base_url().'login/dashboard');
		    exit;
}


public function nayatel_incomplete_scenario(){
    $test_name="Nayatels Value Statements";
    if(($this->uri->segment(3)!=0)){
	$data['dashboard_data']=$this->uri->segment(3);
	
}
else{
	$data['dashboard_data']=$this->session->userdata();
}

$email=$data['dashboard_data'];
$email=$email['email'];
$date_created = date("Y-m-d H:i:s");
$date_modified=$date_created;
$test_time_slot=$_POST['time'];
	
	
	$form_data = array(
				'test_time_slot'    => $test_time_slot,
				'date_modified'    => $date_modified,
				'date_created'    => $date_created,
				'email'    => $email,
				'test_name'    => $test_name,
			
			);
		//	echo "<pre>";print_r($form_data);exit;
		   $questions_score_id= $this->Model_category->add_incomplete_scenario($form_data);
	
	
	
    	//echo "<pre>";print_r($questions_score_id);exit;
    	redirect(base_url().'login/dashboard');
		    exit;
}
	
public function nayatel_value_statements_error(){
    

	$categories_id=2;
	$data['setting'] = $this->Model_common->all_setting();
	//$data['sliders'] = $this->Model_common->all_slider('login');
	$data['nayatel_value_statements'] = $this->Model_category->get_all_nayatel_value_statements($categories_id);
	$data['count'] = $this->Model_category->count_active_records($categories_id);
// $email=$email[0];
// 	echo "<pre>";print_r($email);exit;
	$name= $data['nayatel_value_statements'];
if(($this->uri->segment(3)!=0)){
	$data['dashboard_data']=$this->uri->segment(3);
	
}
else{
	$data['dashboard_data']=$this->session->userdata();
}
$data['categories'] = $this->Model_category->get_categories();
			
$data['dashboard_data']=$this->session->userdata();
	//$data['dashboard_data']=$this->session->userdata();
	//echo "<pre>";print_r($data['dashboard_data']);exit;
    $this->load->view('dashboard_test',$data);
	$this->load->view('admin/employee_view_header',$data);

//	$this->load->view('nayatel_value_statements',$data);
		
	$this->load->view('admin/employee_view_footer',$data);
    
    
}
	
public function nayatel_value_statements(){

	//echo "success";exit;

	$categories_id=2;
	$data['setting'] = $this->Model_common->all_setting();
	//$data['sliders'] = $this->Model_common->all_slider('login');

	$data['count'] = $this->Model_category->count_active_records($categories_id);
	
		$data['time'] = $this->Model_category->test_time_slot($categories_id);
		//	echo "<pre>";print_r($data['time']);exit;
// $email=$email[0];
// 	echo "<pre>";print_r($email);exit;
//	$name= $data['nayatel_value_statements'];
if(($this->uri->segment(3)!=0)){
	$data['dashboard_data']=$this->uri->segment(3);
	
}
else{
	$data['dashboard_data']=$this->session->userdata();
}

$data['categories'] = $this->Model_category->get_categories();
			
$data['dashboard_data']=$this->session->userdata();
$email=$data['dashboard_data'];
$email=$email['email'];
	//$data['dashboard_data']=$this->session->userdata();
//	echo "<pre>";print_r($data['dashboard_data']);exit;
// 	save for later
//$data['nayatel_save_for_later'] = $this->Model_category->nayatel_save_for_later($name);
// end

	
		$value['get_all_nayatel_save_for_later'] = $this->Model_category->get_all_nayatel_save_for_later($email);
	
	$value['check_record_nayatel_save_for_later'] = $this->Model_category->check_record_nayatel_save_for_later($email);
//	echo "<pre>";print_r($value['check_record_nayatel_save_for_later']);exit;
	if(!empty($value['check_record_nayatel_save_for_later'])){
	   
	   
	   	$value['remaining_test_time_slot'] = $this->Model_category->remaining_test_time_slot($email);
	   //	echo "<pre>";print_r($value['remaining_test_time_slot']);exit;
	   	$remaining_test_time_slot=	$value['remaining_test_time_slot'];
	   	if(empty($remaining_test_time_slot)){
	   	    
	   	 $value['remaining_test_time_slots'] = $this->Model_category->test_time_slot($categories_id);
	   	}
	   	else{
	   	   $value['remaining_test_time_slots'] = $this->Model_category->remaining_test_time_slot($email); 
	   	    
	   	}
	   	// echo "above";exit;
	    $this->load->view('dashboard_test',$data);
	$this->load->view('admin/employee_view_header',$data);

	$this->load->view('nayatel_save_for_later',$value);
		
	$this->load->view('admin/employee_view_footer',$data);
	    
	    
	}

else{
    // there are errors
 // echo "down";exit;
   $data['time'] = $this->Model_category->test_time_slot($categories_id);
   //	echo "<pre>";print_r($data['time']);exit;
    	$data['nayatel_value_statements'] = $this->Model_category->get_all_nayatel_value_statements($categories_id);
    	$name= $data['nayatel_value_statements'];
    	 $data['nayatel_save_for_later'] = $this->Model_category->nayatel_save_for_later($name);
    //	echo "<pre>";print_r($data['nayatel_save_for_later']);exit;
    $this->load->view('dashboard_test',$data);
	$this->load->view('admin/employee_view_header',$data);

	$this->load->view('nayatel_value_statements',$data);
		
	$this->load->view('admin/employee_view_footer',$data);
}
		
}

public function save_for_later2(){
    
   $questions_id = $this->input->post('questions_id[]');
   
     	$test_time_slot = $this->input->post('time');
     	// echo "<pre>";print_r($_POST);echo "<br>";exit;
     	  $nayatel_save_for_later_time=$this->Model_category->nayatel_save_for_later_time($test_time_slot);
     $nayatel_values_assessment_id=$this->Model_category->save_for_later();
		    exit;
    $dimensions_name = $this->input->post('dimensions_name[]');
    $checkbox = $this->input->post('checkbox[]');
   //$dimensions_name=$this->input->post(dimensions_name);
   echo "<pre>";print_r($checkbox);echo "<br>";
     echo "<pre>";print_r($dimensions_name);echo "<br>";exit;
   
   if(($this->uri->segment(3)!=0)){
	$data['dashboard_data']=$this->uri->segment(3);
	
}
else{
	$data['dashboard_data']=$this->session->userdata();
}
$department=$data['dashboard_data'];
$department=$department['department'];


$data['setting'] = $this->Model_common->all_setting();

	$error = '';
	$success = '';
	
	 
	 
	     
	     $email=$_POST['email'];
	$checkbox[] = $this->input->post('checkbox[]');
	$dimensions_name = $this->input->post('dimensions_name[]');
	$date_created = date("Y-m-d H:i:s");
	$form_data = array(
				'checkbox'    => $_POST['checkbox'],
				
             
			
				
			);
		//	echo "<pre>";print_r($form_data);exit;
			 $nayatel_values_assessment_id=$this->Model_category->save_for_later($form_data);
		    exit;
		 
    
}

public function work_save_for_later(){
    
    $reponse = array(
                'csrf_name' => $this->security->get_csrf_token_name(),
                'csrf_token' => $this->security->get_csrf_hash()
                );
               /// echo "<pre>";print_r($reponse);echo "<br>";exit;
	if(empty($reponse))
	   {
	       $error='Something gone wrong. Try Again.';
			$this->session->set_flashdata('error',$error);
			redirect(base_url().'login/dashboard');
	   }
    
    
  // echo "<pre>";print_r($_POST);echo "<br>";exit;
     
     $test_time_slot = $this->input->post('time');
     $test_time_slot=$test_time_slot/60;
     $test_time_slot= round($test_time_slot);
    // echo "<pre>";print_r($test_time_slot);echo "<br>";echo "<br>";
     if($test_time_slot == 1){
         $test_time_slot=0;
     }
  //   echo "<pre>";print_r($test_time_slot);echo "<br>";exit;
    $work_personality_save_for_later_time=$this->Model_category->work_personality_save_for_later_time($test_time_slot);
    // now 18-01-2021-5:08 pm
$work_save_for_later=$this->Model_category->work_save_for_later();
      redirect(base_url().'login/dashboard');
		    exit;
     
    
}

public function save_for_later(){
    
    $reponse = array(
                'csrf_name' => $this->security->get_csrf_token_name(),
                'csrf_token' => $this->security->get_csrf_hash()
                );
	if(empty($reponse))
	   {
	       $error='Something gone wrong. Try Again.';
			$this->session->set_flashdata('error',$error);
			redirect(base_url().'login/dashboard');
	   }
	   
    // echo "<pre>";print_r($_POST);echo "<br>";exit;
    	$questions_id = $this->input->post('questions_id[]');
   
     	$test_time_slot = $this->input->post('time');
     $test_time_slot=$test_time_slot/60;
     $test_time_slot= round($test_time_slot);
     
     	// echo "<pre>";print_r($test_time_slot);echo "<br>";echo "<br>";
     if($test_time_slot == 1){
         $test_time_slot=0;
     }
  //   echo "<pre>";print_r($test_time_slot);echo "<br>";exit;
  
     	  $nayatel_save_for_later_time=$this->Model_category->nayatel_save_for_later_time($test_time_slot);
     $nayatel_values_assessment_id=$this->Model_category->save_for_later();
      redirect(base_url().'login/dashboard');
		    exit;
    $dimensions_name = $this->input->post('dimensions_name[]');
    $checkbox = $this->input->post('checkbox[]');
   //$dimensions_name=$this->input->post(dimensions_name);
   echo "<pre>";print_r($checkbox);echo "<br>";
     echo "<pre>";print_r($dimensions_name);echo "<br>";exit;
   
   if(($this->uri->segment(3)!=0)){
	$data['dashboard_data']=$this->uri->segment(3);
	
}
else{
	$data['dashboard_data']=$this->session->userdata();
}
$department=$data['dashboard_data'];
$department=$department['department'];


$data['setting'] = $this->Model_common->all_setting();

	$error = '';
	$success = '';
	
	 
	 
	     
	     $email=$_POST['email'];
	$checkbox[] = $this->input->post('checkbox[]');
	$dimensions_name = $this->input->post('dimensions_name[]');
	$date_created = date("Y-m-d H:i:s");
	$form_data = array(
				'checkbox'    => $_POST['checkbox'],
				
             
			
				
			);
		//	echo "<pre>";print_r($form_data);exit;
			 $nayatel_values_assessment_id=$this->Model_category->save_for_later($form_data);
		    exit;
			
	     
	 
    
}

public function nayatel_value_statements_data(){
    
    $reponse = array(
                'csrf_name' => $this->security->get_csrf_token_name(),
                'csrf_token' => $this->security->get_csrf_hash()
                );
	if(empty($reponse))
	   {
	       $error='Something gone wrong. Try Again.';
			$this->session->set_flashdata('error',$error);
			redirect(base_url().'login/dashboard');
	   }
    	//echo "<pre>";print_r($_POST);exit;
  	$form_data = array(
				'checkbox'    => $_POST['checkbox'],
			
				
			);
   $questions_score_id=$this->Model_category->add_nayatel_value_statements_data($form_data);
  return  redirect(base_url().'login/dashboard');
		    exit;
		
//echo "<pre>";print_r($_POST);exit;

//   $checkbox[] = $this->input->post('checkbox');
//   	        echo "<pre>";print_r($checkbox);exit;
  	        // // //echo json_encode($checkbox);exit;

if(($this->uri->segment(3)!=0)){
	$data['dashboard_data']=$this->uri->segment(3);
	
}
else{
	$data['dashboard_data']=$this->session->userdata();
}
//	echo "<pre>";print_r($data['dashboard_data']);exit;
//$organization=$data['dashboard_data'];
//$organization=$organization['organization'];

//$department=$organization['department'];
//echo "<pre>";print_r($organization);exit;
	$data['setting'] = $this->Model_common->all_setting();

	$error = '';
	$success = '';
	// $data=$this->session->userdata();
	// $email=$_POST['email'];
	//echo "<pre>";print_r($email);exit;
        if(isset($_POST['checkbox'])) {

		
	//echo "hghhh";exit;
		$this->form_validation->set_rules('checkbox[0]', 'Question 1', 'trim|required');
		$this->form_validation->set_rules('checkbox[1]', 'Question 2', 'trim|required');
		$this->form_validation->set_rules('checkbox[2]', 'Question 3', 'trim|required');
		$this->form_validation->set_rules('checkbox[3]', 'Question 4', 'trim|required');
		$this->form_validation->set_rules('checkbox[4]', 'Question 5', 'trim|required');
		
		
		
		$this->form_validation->set_rules('checkbox[5]', 'Question 6', 'trim|required');
		$this->form_validation->set_rules('checkbox[6]', 'Question 7', 'trim|required');
		$this->form_validation->set_rules('checkbox[7]', 'Question 8', 'trim|required');
		$this->form_validation->set_rules('checkbox[8]', 'Question 9', 'trim|required');
		$this->form_validation->set_rules('checkbox[9]', 'Question 10', 'trim|required');
		
		$this->form_validation->set_rules('checkbox[10]', 'Question 11', 'trim|required');
		$this->form_validation->set_rules('checkbox[11]', 'Question 12', 'trim|required');
		$this->form_validation->set_rules('checkbox[12]', 'Question 13', 'trim|required');
		$this->form_validation->set_rules('checkbox[13]', 'Question 14', 'trim|required');
		$this->form_validation->set_rules('checkbox[14]', 'Question 15', 'trim|required');
		
		$this->form_validation->set_rules('checkbox[15]', 'Question 16', 'trim|required');
		$this->form_validation->set_rules('checkbox[16]', 'Question 17', 'trim|required');
		$this->form_validation->set_rules('checkbox[17]', 'Question 18', 'trim|required');
		$this->form_validation->set_rules('checkbox[18]', 'Question 19', 'trim|required');
		$this->form_validation->set_rules('checkbox[19]', 'Question 20', 'trim|required');
		

		
		$this->form_validation->set_rules('checkbox[20]', 'Question 21', 'trim|required');
		$this->form_validation->set_rules('checkbox[21]', 'Question 22', 'trim|required');
		$this->form_validation->set_rules('checkbox[22]', 'Question 23', 'trim|required');
		$this->form_validation->set_rules('checkbox[23]', 'Question 24', 'trim|required');
		$this->form_validation->set_rules('checkbox[24]', 'Question 25', 'trim|required');
		
		$this->form_validation->set_rules('checkbox[25]', 'Question 26', 'trim|required');
		$this->form_validation->set_rules('checkbox[26]', 'Question 27', 'trim|required');
		$this->form_validation->set_rules('checkbox[27]', 'Question 28', 'trim|required');
		$this->form_validation->set_rules('checkbox[28]', 'Question 29', 'trim|required');
		$this->form_validation->set_rules('checkbox[29]', 'Question 30', 'trim|required');
		
		$this->form_validation->set_rules('checkbox[30]', 'Question 31', 'trim|required');
		$this->form_validation->set_rules('checkbox[31]', 'Question32', 'trim|required');
		$this->form_validation->set_rules('checkbox[32]', 'Question 33', 'trim|required');
		$this->form_validation->set_rules('checkbox[33]', 'Question 34', 'trim|required');
		$this->form_validation->set_rules('checkbox[34]', 'Question 35', 'trim|required');
		
		$this->form_validation->set_rules('checkbox[35]', 'Question 36', 'trim|required');
		$this->form_validation->set_rules('checkbox[36]', 'Question 37', 'trim|required');
		$this->form_validation->set_rules('checkbox[37]', 'Question 38', 'trim|required');
		$this->form_validation->set_rules('checkbox[38]', 'Question 39', 'trim|required');
		$this->form_validation->set_rules('checkbox[39]', 'Question 40', 'trim|required');
		
		$this->form_validation->set_rules('checkbox[40]', 'Question 41', 'trim|required');
		$this->form_validation->set_rules('checkbox[41]', 'Question 42', 'trim|required');
		$this->form_validation->set_rules('checkbox[42]', 'Question 43', 'trim|required');
		$this->form_validation->set_rules('checkbox[43]', 'Question 44', 'trim|required');
		$this->form_validation->set_rules('checkbox[44]', 'Question 45', 'trim|required');
		
		$this->form_validation->set_rules('checkbox[45]', 'Question 46', 'trim|required');
		$this->form_validation->set_rules('checkbox[46]', 'Question 47', 'trim|required');
		$this->form_validation->set_rules('checkbox[47]', 'Question 48', 'trim|required');
		$this->form_validation->set_rules('checkbox[48]', 'Question 49', 'trim|required');
		$this->form_validation->set_rules('checkbox[49]', 'Question 50', 'trim|required');
		
		$this->form_validation->set_rules('checkbox[50]', 'Question 51', 'trim|required');
		$this->form_validation->set_rules('checkbox[51]', 'Question 52', 'trim|required');
		$this->form_validation->set_rules('checkbox[52]', 'Question 53', 'trim|required');
		$this->form_validation->set_rules('checkbox[53]', 'Question 54', 'trim|required');
		$this->form_validation->set_rules('checkbox[54]', 'Question 55', 'trim|required');
		
		$this->form_validation->set_rules('checkbox[55]', 'Question 56', 'trim|required');
		$this->form_validation->set_rules('checkbox[56]', 'Question 57', 'trim|required');
		$this->form_validation->set_rules('checkbox[57]', 'Question 58', 'trim|required');
		$this->form_validation->set_rules('checkbox[58]', 'Question 59', 'trim|required');
		$this->form_validation->set_rules('checkbox[59]', 'Question 60', 'trim|required');
		
		$this->form_validation->set_rules('checkbox[60]', 'Question61', 'trim|required');
		$this->form_validation->set_rules('checkbox[61]', 'Question 62', 'trim|required');
		$this->form_validation->set_rules('checkbox[62]', 'Question 63', 'trim|required');
		$this->form_validation->set_rules('checkbox[63]', 'Question 64', 'trim|required');
		$this->form_validation->set_rules('checkbox[64]', 'Question 65', 'trim|required');
		
		$this->form_validation->set_rules('checkbox[65]', 'Question 66', 'trim|required');
		$this->form_validation->set_rules('checkbox[66]', 'Question 67', 'trim|required');
		$this->form_validation->set_rules('checkbox[67]', 'Question 68', 'trim|required');
		$this->form_validation->set_rules('checkbox[68]', 'Question 69', 'trim|required');
		$this->form_validation->set_rules('checkbox[69]', 'Question 70', 'trim|required');
		
		
	
	//	$email=$_POST['email'];
		if($this->form_validation->run() == FALSE) {
				$valid = 0;
                $error .= validation_errors();
            }
            else if($this->form_validation->run() == TRUE) {
				$valid = 1;
               // $error .= validation_errors();
            }
            else{
                	//$valid = 1;
            }
		
	
	if($valid == 1) 
		{
			
			$checkbox[] = $this->input->post('checkbox[]');
	        //echo "<pre>";print_r($checkbox);exit;
			
			$form_data = array(
				'checkbox'    => $_POST['checkbox'],
			
				
			);
			//echo "<pre>";print_r($form_data);exit;
		    $questions_score_id=$this->Model_category->add_nayatel_value_statements_data($form_data);
		    exit;
		  // $this->load->view('dashboard-new');exit;
		  //add_event_ajax();exit;	
		  // echo "<pre>";print_r("Success added,redirecting to the main page.");exit;
// 			$questions_score = $this->Model_category->get_last_inserted_record($questions_score_id);
			
// 			$test_score= $questions_score['score'];
// 			$categories_id=$questions_score['categories_id'];
	
// 			 //echo "<pre>";print_r($test_score);echo "<br>";exit;
// 			// echo "<pre>";print_r($categories_id);exit;
// 			$data['description'] = $this->Model_category->get_relative_score($test_score,$categories_id);
// 			//echo "<pre>";print_r($test_score);exit;
// 			// $data['description']=$questions_score['name'];
// 			 //echo "<pre>";print_r($data['description']);exit;
	
// 			if($test_score >=0 && $test_score <=30)
// 			{
	
// 				$data['grade']='D';
// 			}
// 			else if($test_score >=31 && $test_score <=50)
// 			{
	
// 				$data['grade']='C';
// 			}
	
// 			else if($test_score >=51 && $test_score <=70)
// 			{
	
// 				$data['grade']='B';
// 			}
	
// 			else if($test_score >=71 && $test_score <=100)
// 			{
	
// 				$data['grade']='A';
// 			}
			//echo "<pre>";print_r($data['grade']);exit;
		
			$success = 'Nayatel Value Statements are added successfully!';
			$this->session->set_flashdata('success',$success);
			$data['setting'] = $this->Model_common->all_setting();
			$data['sliders'] = $this->Model_common->all_slider('login');
			//$this->load->view('view_header',$data);
			//$this->load->view('view_description',$data);
			
		
				$data['categories'] = $this->Model_category->get_categories();
				$data['nayatel_record'] = $this->Model_category->check_record_nayatel($email);
				$data['work_record'] = $this->Model_category->check_record_work_personality_index($email);
				//echo "<pre>";print_r($data['work_record']);exit;
				$data['dashboard_data']=$this->session->userdata();
			//	echo "vdhgdg";exit;
	            redirect(base_url().'login/dashboard');

				//$this->load->view('dashboard-new',$data);
				
// 			$data['categories'] = $this->Model_category->get_categories();
		
// 				$data['dashboard_data']=$this->session->userdata();
// 				redirect(base_url().'login/personal_values_assessment',$data);
				//$this->load->view('dashboard',$data);
	
			
			//$this->load->view('view_footer',$data);
		//	redirect(base_url().'login/personal_values_assessment',$data);
			//echo "<pre>";print_r($data['grade']);exit;
	
		   
		} 
		else
		{
			//echo "2";exit;
			$this->session->set_flashdata('error',$error);
			redirect(base_url().'login/nayatel_value_statements_error');
		}
		
	} else {    
		
	//	echo "3";exit;
	
		$this->load->view('admin/view_header',$data);
		//	redirect(base_url().'login/dashboard');
		$this->load->view('nayatel_value_statements',$data);
		$this->load->view('admin/view_footer');
	}
	

}
// 4
public function personality_assessment_questions(){

	$categories_id=4;
	$data['setting'] = $this->Model_common->all_setting();
	//$data['sliders'] = $this->Model_common->all_slider('login');
	$data['personality_assessment_questions'] = $this->Model_category->get_all_personality_assessment_questions($categories_id);
	$data['count'] = $this->Model_category->count_active_records($categories_id);

	//echo "<pre>";print_r($data['cultural_scan_questions']);exit;
	$name= $data['personality_assessment_questions'];
	if(($this->uri->segment(3)!=0)){
		$data['dashboard_data']=$this->uri->segment(3);
		
	}
	else{
		$data['dashboard_data']=$this->session->userdata();
	}
	
	
        $data['categories'] = $this->Model_category->get_categories();
        
        $data['dashboard_data']=$this->session->userdata();
        $this->load->view('dashboard_test',$data);
	$this->load->view('admin/employee_view_header',$data);
	$this->load->view('personality_assessment_questions',$data);
	$this->load->view('admin/employee_view_footer',$data);
}
public function personality_assessment_questions_data(){

	$data['setting'] = $this->Model_common->all_setting();

	$error = '';
	$success = '';
	
	if(isset($data['setting'])) {
	
		$valid = 1;
	
		$this->form_validation->set_rules('checkbox[]', 'Please select one value', 'trim|required');
		
		
		$email=$_POST['email'];
		
	
		if($valid == 1) 
		{
			
			$checkbox[] = $this->input->post('checkbox[]');
	//echo "<pre>";print_r($checkbox);exit;
			
			$form_data = array(
				'checkbox'    => $_POST['checkbox'],
				'categories_id'    => '4',
			);
			//echo "<pre>";print_r($form_data);exit;
		   $questions_score_id= $this->Model_category->add_personality_assessment_questions_data($form_data,$email);
		  // echo "<pre>";print_r($questions_score_id);exit;
			$questions_score = $this->Model_category->get_last_inserted_record($questions_score_id);
			
			$test_score= $questions_score['score'];
			$categories_id=$questions_score['categories_id'];
	
			 //echo "<pre>";print_r($test_score);echo "<br>";exit;
			// echo "<pre>";print_r($categories_id);exit;
			$data['description'] = $this->Model_category->get_relative_score($test_score,$categories_id);
			//echo "<pre>";print_r($test_score);exit;
			// $data['description']=$questions_score['name'];
			 //echo "<pre>";print_r($data['description']);exit;
	
			if($test_score >=0 && $test_score <=30)
			{
	
				$data['grade']='D';
			}
			else if($test_score >=31 && $test_score <=50)
			{
	
				$data['grade']='C';
			}
	
			else if($test_score >=51 && $test_score <=70)
			{
	
				$data['grade']='B';
			}
	
			else if($test_score >=71 && $test_score <=100)
			{
	
				$data['grade']='A';
			}
			//echo "<pre>";print_r($data['grade']);exit;
			$success = 'Personality Assessment Questions Score are added successfully!';
			$this->session->set_flashdata('success',$success);
			$data['setting'] = $this->Model_common->all_setting();
			$data['sliders'] = $this->Model_common->all_slider('login');
			//$this->load->view('view_header',$data);
			//$this->load->view('view_description',$data);
				
				$data['categories'] = $this->Model_category->get_categories();
				$data['nayatel_record'] = $this->Model_category->check_record_nayatel($email);
				$data['work_record'] = $this->Model_category->check_record_work_personality_index($email);
				//echo "<pre>";print_r($data['work_record']);exit;
					$data['dashboard_data']=$this->session->userdata();


					$this->load->view('dashboard-new',$data);
					
// 			$data['categories'] = $this->Model_category->get_categories();
		
// 				$data['dashboard_data']=$this->session->userdata();
// 				redirect(base_url().'login/work_personality_index_form',$data);
				//$this->load->view('dashboard',$data);
	
			
			//$this->load->view('view_footer',$data);
		//	redirect(base_url().'login/work_personality_index_form',$data);
			//echo "<pre>";print_r($data['grade']);exit;
	
		   
		} 
		else
		{
			$this->session->set_flashdata('error',$error);
			redirect(base_url().'login/personality_assessment_questions');
		}
		
	} else {    
		
		
	
		$this->load->view('admin/view_header',$data);
		$this->load->view('login/personality_assessment_questions',$data);
		$this->load->view('admin/view_footer');
	}
	
	
}

public function personal_values_assessment(){

	$categories_id=3;
	$data['setting'] = $this->Model_common->all_setting();
	//$data['sliders'] = $this->Model_common->all_slider('login');
	$data['personal_values_assessment'] = $this->Model_category->get_all_personal_values_assessment($categories_id);
	$data['count'] = $this->Model_category->count_active_records($categories_id);

	//echo "<pre>";print_r($data['cultural_scan_questions']);exit;
	if(($this->uri->segment(3)!=0)){
		$data['dashboard_data']=$this->uri->segment(3);
		
	}
	else{
		$data['dashboard_data']=$this->session->userdata();
	}
		$data['dashboard_data']=$this->session->userdata();

 $email=$data['dashboard_data'];
    $email=$email['email'];
    
    
   // echo "<pre>";print_r($value['get_all_personal_values_save_for_later']);exit;
	$value['check_record_personal_values_save_for_later'] = $this->Model_category->check_record_personal_values_save_for_later($email);	    
	 if(!empty($value['check_record_personal_values_save_for_later']))
		  
{
	$value['get_all_personal_values_save_for_later'] = $this->Model_category->get_all_personal_values_save_for_later($email);
	
$value['remaining_test_time_slot'] = $this->Model_category->remaining_test_time_slot_personal_values($email);
	   //	echo "<pre>";print_r($value['remaining_test_time_slot']);exit;	      
	
		  $remaining_test_time_slot=	$value['remaining_test_time_slot'];
	   	if(empty($remaining_test_time_slot)){
	   	    
	   	 $value['remaining_test_time_slot'] = $this->Model_category->personal_test_time_slot($categories_id);
	   	}
	   	else{
	   	   $value['remaining_test_time_slot'] = $this->Model_category->remaining_test_time_slot_personal_values($email); 
	   	}
		          	//echo "<pre>";print_r($value['remaining_test_time_slot']);exit;  
			$value['count'] = $this->Model_category->count_active_records($categories_id);
			$this->load->view('dashboard_test',$data);
	$this->load->view('admin/employee_view_header',$data);
	$this->load->view('personal_values_save_for_later',$value);
	$this->load->view('admin/employee_view_footer',$data);
		
}		
else{
    
    $data['time'] = $this->Model_category->personal_test_time_slot($categories_id);
    
    	$name= $data['personal_values_assessment'];
			$data['count'] = $this->Model_category->count_active_records($categories_id);
    	// $data['personal_values_save_for_later'] = $this->Model_category->add_personal_values_save_for_later_questions($name);
	
    

//echo "<pre>";print_r($name);exit;

$data['categories'] = $this->Model_category->get_categories();
$data['dashboard_data']=$this->session->userdata();
$this->load->view('dashboard_test',$data);

	$this->load->view('admin/employee_view_header',$data);
	$this->load->view('personal_values_assessment',$data);
	$this->load->view('admin/employee_view_footer',$data);
}
}

public function personal_save_for_later(){
    
    echo "<pre>";print_r($_POST);exit;
    
}


public function personal_values_assessment_questions_data(){
echo "<pre>";print_r($_POST);exit;
//$checkbox1=count($this->input->post(($checkbox)));

// 		if(!empty($_POST['checkbox'])) {
// 			foreach($_POST['checkbox'] as $check) {
// 					echo $check; //echoes the value set in the HTML form for each checked checkbox.
// 								 //so, if I were to check 1, 3, and 5 it would echo value 1, value 3, value 5.
// 								 //in your case, it would echo whatever $row['Report ID'] is equivalent to.
// 			}
// 		}
// exit;
$data['setting'] = $this->Model_common->all_setting();

$error = '';
$success = '';

if(isset($data['setting'])) {

	$valid = 1;

	$this->form_validation->set_rules('checkbox[]', 'Please select one value', 'trim|required');
	$email=$_POST['email'];
	//echo "<pre>";print_r($email);exit;
	
	

	if($valid == 1) 
	{
		
		$checkbox[] = $this->input->post('checkbox[]');
//echo "<pre>";print_r($checkbox);exit;
		
		$form_data = array(
			'checkbox'    => $_POST['checkbox'],
			
		);
		//echo "<pre>";print_r($form_data);exit;
	   $questions_score_id= $this->Model_category->add_personal_values_assessment_questions_data($form_data,$email);
	  // echo "<pre>";print_r($questions_score_id);exit;
		$questions_score = $this->Model_category->get_last_inserted_record($questions_score_id);
		
		$test_score= $questions_score['score'];
		$categories_id=$questions_score['categories_id'];

		 //echo "<pre>";print_r($test_score);echo "<br>";exit;
		// echo "<pre>";print_r($categories_id);exit;
		$data['description'] = $this->Model_category->get_relative_score($test_score,$categories_id);
		//echo "<pre>";print_r($test_score);exit;
		// $data['description']=$questions_score['name'];
		 //echo "<pre>";print_r($data['description']);exit;

		if($test_score >=0 && $test_score <=30)
		{

			$data['grade']='D';
		}
		else if($test_score >=31 && $test_score <=50)
		{

			$data['grade']='C';
		}

		else if($test_score >=51 && $test_score <=70)
		{

			$data['grade']='B';
		}

		else if($test_score >=71 && $test_score <=100)
		{

			$data['grade']='A';
		}
		//echo "<pre>";print_r($data['grade']);exit;
	//	$success = 'Personal Values Assessment are added successfully!';
		$this->session->set_flashdata('success',$success);
		$data['setting'] = $this->Model_common->all_setting();
		$data['sliders'] = $this->Model_common->all_slider('login');
		//$this->load->view('view_header',$data);
		//$this->load->view('view_description',$data);
			
			//echo "<pre>";print_r($email);exit;
			
				$data['categories'] = $this->Model_category->get_categories();
				$data['nayatel_record'] = $this->Model_category->check_record_nayatel($email);
				$data['work_record'] = $this->Model_category->check_record_work_personality_index($email);
				//echo "<pre>";print_r($data['work_record']);exit;
					$data['dashboard_data']=$this->session->userdata();


					$this->load->view('dashboard-new',$data);
		
// 		$data['categories'] = $this->Model_category->get_categories();
	
// 			$data['dashboard_data']=$this->session->userdata();
// 			redirect(base_url().'login/personality_assessment_questions',$data);
			//$this->load->view('dashboard',$data);

		
		//$this->load->view('view_footer',$data);
	//	redirect(base_url().'login/description',$data);
		//echo "<pre>";print_r($data['grade']);exit;

	   
	} 
	else
	{
		$this->session->set_flashdata('error',$error);
		redirect(base_url().'login/personal_values_assessment');
	}
	
} else {    
	
	

	$this->load->view('admin/view_header',$data);
	$this->load->view('login/personal_values_assessment',$data);
	$this->load->view('admin/view_footer');
}



}
public function cultural_scan_questions_view(){


	$categories_id=1;
	$data['setting'] = $this->Model_common->all_setting();
	//$data['sliders'] = $this->Model_common->all_slider('login');
	$data['cultural_scan_questions'] = $this->Model_category->get_all_cultural_scan_data($categories_id);
	$data['count'] = $this->Model_category->count_active_records($categories_id);

	//echo "<pre>";print_r($data['count']);exit;
	$name= $data['cultural_scan_questions'];
	$data['email']=$this->uri->segment(3);
//	echo "<pre>";print_r($data['email']);exit;

        if(($this->uri->segment(3)!=0)){
            $data['dashboard_data']=$this->uri->segment(3);
            
        }
        else{
            $data['dashboard_data']=$this->session->userdata();
        }
        
        $data['categories'] = $this->Model_category->get_categories();
        
        $data['dashboard_data']=$this->session->userdata();
        $this->load->view('dashboard_test',$data);

	$this->load->view('admin/employee_view_header',$data);
	$this->load->view('cultural_scan_questions_view',$data);
	$this->load->view('admin/employee_view_footer',$data);

}

public function cultural_scan_questions(){

	 //$email = $this->uri->segment(3);
 //	echo "<pre>";print_r($email);exit;
$email=$_POST['email'];
$this->session->set_userdata($email);
$data['email']=$email;

// echo "<pre>";print_r($email);exit;
$data['setting'] = $this->Model_common->all_setting();

$error = '';
$success = '';

if(isset($data['setting'])) {

	$valid = 1;

	$this->form_validation->set_rules('checkbox[]', 'Please select one value', 'trim|required');
	
	
	
	

	if($valid == 1) 
	{
		
		$checkbox[] = $this->input->post('checkbox[]');
		
		$form_data = array(
			'checkbox'    => $_POST['checkbox'],
			
			
		);
		
	   $questions_score_id= $this->Model_category->add_cultural_scan_questions($form_data,$email);

		$questions_score = $this->Model_category->get_last_inserted_record($questions_score_id);
		
		$test_score= $questions_score['score'];
		$categories_id=$questions_score['categories_id'];

		
		$data['description'] = $this->Model_category->get_relative_score($test_score,$categories_id);
		

		if($test_score >=0 && $test_score <=30)
		{

			$data['grade']='D';
		}
		else if($test_score >=31 && $test_score <=50)
		{

			$data['grade']='C';
		}

		else if($test_score >=51 && $test_score <=70)
		{

			$data['grade']='B';
		}

		else if($test_score >=71 && $test_score <=100)
		{

			$data['grade']='A';
		}
	
		$success = 'Cultural Scan Values are added successfully!';
		$this->session->set_flashdata('success',$success);
		$data['setting'] = $this->Model_common->all_setting();
		$data['sliders'] = $this->Model_common->all_slider('login');
	
		$data['categories'] = $this->Model_category->get_categories();
	
		//	$data['dashboard_data']=$this->session->userdata();
			
		
				$data['categories'] = $this->Model_category->get_categories();
				$data['nayatel_record'] = $this->Model_category->check_record_nayatel($email);
				$data['work_record'] = $this->Model_category->check_record_work_personality_index($email);
				//echo "<pre>";print_r($data['work_record']);exit;
					$data['dashboard_data']=$this->session->userdata();


					$this->load->view('dashboard-new',$data);
			
		//	redirect(base_url().'login/nayatel_value_statements',$data);

		
		

	   
	} 
	else
	{
		$this->session->set_flashdata('error',$error);
		redirect(base_url().'login/cultural_scan_questions_view');
	}
	
} else {    
	
	

	$this->load->view('admin/view_header',$data);
	$this->load->view('login/cultural_scan_questions_view',$data);
	$this->load->view('admin/view_footer');
}


}

public function work_personality_index_form(){
$data['unique_form_name'] = "CSRFGuard_".mt_rand(0,mt_getrandmax());
$data['token'] =$this->Model_category->csrfguard_generate_token($data['unique_form_name']);


// 	echo "<pre>";print_r($data['unique_form_name']);echo "<br>";
// 		echo "<pre>";print_r($data['token']);exit;	 

	//echo "view";exit;
			$categories_id=5;
			$data['setting'] = $this->Model_common->all_setting();
			//$data['sliders'] = $this->Model_common->all_slider('login');
		
			if(($this->uri->segment(3)!=0)){
				$data['dashboard_data']=$this->uri->segment(3);
				
			}
			else{
				$data['dashboard_data']=$this->session->userdata();
			}
			
			$data['categories'] = $this->Model_category->get_categories();
			
		  $data['dashboard_data']=$this->session->userdata();
		            
	 
	 $email=$data['dashboard_data'];
    $email=$email['email'];
    $value['get_all_work_personality_save_for_later'] = $this->Model_category->get_all_work_personality_save_for_later($email);
	$value['check_record_work_personality_save_for_later'] = $this->Model_category->check_record_work_personality_save_for_later($email);	    
		  if(!empty($value['check_record_work_personality_save_for_later']))
		  
{
		      
		$value['remaining_test_time_slot'] = $this->Model_category->remaining_test_time_slot_work_personality($email);
	   //	echo "<pre>";print_r($value['remaining_test_time_slot']);exit;	      
	
		  $remaining_test_time_slot=	$value['remaining_test_time_slot'];
	   	if(empty($remaining_test_time_slot)){
	   	    
	   	 $value['remaining_test_time_slots'] = $this->Model_category->work_test_time_slot($categories_id);
	   	}
	   	else{
	   	   $value['remaining_test_time_slots'] = $this->Model_category->remaining_test_time_slot_work_personality($email); 
	   	}
		            
			$value['count'] = $this->Model_category->count_active_records($categories_id);
		
		 //echo "above";exit;
	    $this->load->view('dashboard_test',$data);
	$this->load->view('admin/employee_view_header',$data);

	$this->load->view('work_personality_index_save_for_later',$value);
		
	$this->load->view('admin/employee_view_footer',$data);
}
	else{
	      //echo "down";exit;
   $data['time'] = $this->Model_category->work_test_time_slot($categories_id);
   
   	$data['get_all_work_personality_save_for_later'] = $this->Model_category->get_all_Work_personality_index($categories_id);
			$data['count'] = $this->Model_category->count_active_records($categories_id);
	
		//	echo "<pre>";print_r($data['time']);exit;
		
   
  
   //insert for save later
    	$name= $data['get_all_work_personality_save_for_later'];
    	 $data['work_personality_save_for_later'] = $this->Model_category->work_personality_save_for_later($name);
    //	echo "<pre>";print_r($data['nayatel_save_for_later']);exit;
   
   //	echo "<pre>";print_r($data['time']);exit;
	    	$this->load->view('dashboard_test',$data);
			$this->load->view('admin/employee_view_header',$data);
			$this->load->view('work_personality_index_view_form',$data);
			$this->load->view('admin/employee_view_footer',$data);
	}		
	
		}

	public function work_personality_index_form_data(){
	   //echo "<pre>";print_r($_POST);exit;
	   
	   $csrf_name=$this->input->post("csrf_name");
		$csrf_token= $this->input->post("csrf_token");
		
				$csrf_check =$this->Model_category->csrfguard_validate_token($csrf_name,$csrf_token);


 $reponse = array(
                'csrf_name' => $this->security->get_csrf_token_name(),
                'csrf_token' => $this->security->get_csrf_hash()
                );
// echo "<pre>";print_r($csrf_name);echo "<br>";
// echo "<pre>";print_r($csrf_token);echo "<br>";
 //echo "<pre>";print_r($reponse);exit;
	   if(empty($reponse))
	   {
	       $error='Something gone wrong. Try Again.';
			$this->session->set_flashdata('error',$error);
			redirect(base_url().'login/dashboard');
	   }
	   
	    if(($this->uri->segment(3)!=0)){
	$data['dashboard_data']=$this->uri->segment(3);
	
}
else{
	$data['dashboard_data']=$this->session->userdata();
}

	     $email=$data['dashboard_data'];
	     $email=$email['email'];
	    	$checkbox[] = $this->input->post('checkbox[]');
				$dimensions_name[] = $this->input->post('dimensions_name[]');
				$sub_categories_names[] = $this->input->post('sub_categories_names[]');
		//echo "<pre>";print_r($email);exit;
		        
		        $form_data = array(
					'checkbox'    => $_POST['checkbox'],
					'dimensions_name'    => $_POST['dimensions_name'],
					'sub_categories_names'    => $_POST['sub_categories_names'],
					
				);
				//echo "<pre>";print_r($form_data);exit;
			   $questions_score_id= $this->Model_category->add_work_form($form_data,$email);
			   echo "<pre>";print_r($questions_score_id);exit;
		//$checkbox1=count($this->input->post(($checkbox)));

// 		if(!empty($_POST['checkbox'])) {
// 			foreach($_POST['checkbox'] as $check) {
// 					echo $check; //echoes the value set in the HTML form for each checked checkbox.
// 								 //so, if I were to check 1, 3, and 5 it would echo value 1, value 3, value 5.
// 								 //in your case, it would echo whatever $row['Report ID'] is equivalent to.
// 			}
// 		}
// exit;
		$data['setting'] = $this->Model_common->all_setting();

		$error = '';
		$success = '';

		if(isset($_POST['checkbox'])) {

		//	$valid = 1;

			$this->form_validation->set_rules('checkbox[0]', 'Question 1', 'trim|required');
		$this->form_validation->set_rules('checkbox[1]', 'Question 2', 'trim|required');
		$this->form_validation->set_rules('checkbox[2]', 'Question 3', 'trim|required');
		$this->form_validation->set_rules('checkbox[3]', 'Question 4', 'trim|required');
		$this->form_validation->set_rules('checkbox[4]', 'Question 5', 'trim|required');
		
		
		
		$this->form_validation->set_rules('checkbox[5]', 'Question 6', 'trim|required');
		$this->form_validation->set_rules('checkbox[6]', 'Question 7', 'trim|required');
		$this->form_validation->set_rules('checkbox[7]', 'Question 8', 'trim|required');
		$this->form_validation->set_rules('checkbox[8]', 'Question 9', 'trim|required');
		$this->form_validation->set_rules('checkbox[9]', 'Question 10', 'trim|required');
		
		$this->form_validation->set_rules('checkbox[10]', 'Question 11', 'trim|required');
		$this->form_validation->set_rules('checkbox[11]', 'Question 12', 'trim|required');
		$this->form_validation->set_rules('checkbox[12]', 'Question 13', 'trim|required');
		$this->form_validation->set_rules('checkbox[13]', 'Question 14', 'trim|required');
		$this->form_validation->set_rules('checkbox[14]', 'Question 15', 'trim|required');
		
		$this->form_validation->set_rules('checkbox[15]', 'Question 16', 'trim|required');
		$this->form_validation->set_rules('checkbox[16]', 'Question 17', 'trim|required');
		$this->form_validation->set_rules('checkbox[17]', 'Question 18', 'trim|required');
		$this->form_validation->set_rules('checkbox[18]', 'Question 19', 'trim|required');
		$this->form_validation->set_rules('checkbox[19]', 'Question 20', 'trim|required');
		

		
		$this->form_validation->set_rules('checkbox[20]', 'Question 21', 'trim|required');
		$this->form_validation->set_rules('checkbox[21]', 'Question 22', 'trim|required');
		$this->form_validation->set_rules('checkbox[22]', 'Question 23', 'trim|required');
		$this->form_validation->set_rules('checkbox[23]', 'Question 24', 'trim|required');
		$this->form_validation->set_rules('checkbox[24]', 'Question 25', 'trim|required');
		
		$this->form_validation->set_rules('checkbox[25]', 'Question 26', 'trim|required');
		$this->form_validation->set_rules('checkbox[26]', 'Question 27', 'trim|required');
		$this->form_validation->set_rules('checkbox[27]', 'Question 28', 'trim|required');
		$this->form_validation->set_rules('checkbox[28]', 'Question 29', 'trim|required');
		$this->form_validation->set_rules('checkbox[29]', 'Question 30', 'trim|required');
		
		$this->form_validation->set_rules('checkbox[30]', 'Question 31', 'trim|required');
		$this->form_validation->set_rules('checkbox[31]', 'Question32', 'trim|required');
		$this->form_validation->set_rules('checkbox[32]', 'Question 33', 'trim|required');
		$this->form_validation->set_rules('checkbox[33]', 'Question 34', 'trim|required');
		$this->form_validation->set_rules('checkbox[34]', 'Question 35', 'trim|required');
		
		$this->form_validation->set_rules('checkbox[35]', 'Question 36', 'trim|required');
		$this->form_validation->set_rules('checkbox[36]', 'Question 37', 'trim|required');
		$this->form_validation->set_rules('checkbox[37]', 'Question 38', 'trim|required');
		$this->form_validation->set_rules('checkbox[38]', 'Question 39', 'trim|required');
		$this->form_validation->set_rules('checkbox[39]', 'Question 40', 'trim|required');
		
		$this->form_validation->set_rules('checkbox[40]', 'Question 41', 'trim|required');
		$this->form_validation->set_rules('checkbox[41]', 'Question 42', 'trim|required');
		$this->form_validation->set_rules('checkbox[42]', 'Question 43', 'trim|required');
		$this->form_validation->set_rules('checkbox[43]', 'Question 44', 'trim|required');
		$this->form_validation->set_rules('checkbox[44]', 'Question 45', 'trim|required');
		
		$this->form_validation->set_rules('checkbox[45]', 'Question 46', 'trim|required');
		$this->form_validation->set_rules('checkbox[46]', 'Question 47', 'trim|required');
		$this->form_validation->set_rules('checkbox[47]', 'Question 48', 'trim|required');
		$this->form_validation->set_rules('checkbox[48]', 'Question 49', 'trim|required');
		$this->form_validation->set_rules('checkbox[49]', 'Question 50', 'trim|required');
		
		$this->form_validation->set_rules('checkbox[50]', 'Question 51', 'trim|required');
		$this->form_validation->set_rules('checkbox[51]', 'Question 52', 'trim|required');
		$this->form_validation->set_rules('checkbox[52]', 'Question 53', 'trim|required');
		$this->form_validation->set_rules('checkbox[53]', 'Question 54', 'trim|required');
		$this->form_validation->set_rules('checkbox[54]', 'Question 55', 'trim|required');
		
		$this->form_validation->set_rules('checkbox[55]', 'Question 56', 'trim|required');
		$this->form_validation->set_rules('checkbox[56]', 'Question 57', 'trim|required');
		$this->form_validation->set_rules('checkbox[57]', 'Question 58', 'trim|required');
		$this->form_validation->set_rules('checkbox[58]', 'Question 59', 'trim|required');
		$this->form_validation->set_rules('checkbox[59]', 'Question 60', 'trim|required');
		
		$this->form_validation->set_rules('checkbox[60]', 'Question61', 'trim|required');
		$this->form_validation->set_rules('checkbox[61]', 'Question 62', 'trim|required');
		$this->form_validation->set_rules('checkbox[62]', 'Question 63', 'trim|required');
		$this->form_validation->set_rules('checkbox[63]', 'Question 64', 'trim|required');
		$this->form_validation->set_rules('checkbox[64]', 'Question 65', 'trim|required');
		
		$this->form_validation->set_rules('checkbox[65]', 'Question 66', 'trim|required');
		$this->form_validation->set_rules('checkbox[66]', 'Question 67', 'trim|required');
		$this->form_validation->set_rules('checkbox[67]', 'Question 68', 'trim|required');
		$this->form_validation->set_rules('checkbox[68]', 'Question 69', 'trim|required');
		$this->form_validation->set_rules('checkbox[69]', 'Question 70', 'trim|required');
		
		
		
		$this->form_validation->set_rules('checkbox[70]', 'Question 71', 'trim|required');
		$this->form_validation->set_rules('checkbox[71]', 'Question 72', 'trim|required');
		$this->form_validation->set_rules('checkbox[72]', 'Question 73', 'trim|required');
		$this->form_validation->set_rules('checkbox[73]', 'Question 74', 'trim|required');
		$this->form_validation->set_rules('checkbox[74]', 'Question 75', 'trim|required');
		
		$this->form_validation->set_rules('checkbox[75]', 'Question 76', 'trim|required');
		$this->form_validation->set_rules('checkbox[76]', 'Question 77', 'trim|required');
		$this->form_validation->set_rules('checkbox[77]', 'Question 78', 'trim|required');
		$this->form_validation->set_rules('checkbox[78]', 'Question 79', 'trim|required');
		$this->form_validation->set_rules('checkbox[79]', 'Question 80', 'trim|required');
		
		$this->form_validation->set_rules('checkbox[80]', 'Question 81', 'trim|required');
		$this->form_validation->set_rules('checkbox[81]', 'Question 82', 'trim|required');
		$this->form_validation->set_rules('checkbox[82]', 'Question 83', 'trim|required');
		$this->form_validation->set_rules('checkbox[83]', 'Question 84', 'trim|required');
		$this->form_validation->set_rules('checkbox[84]', 'Question 85', 'trim|required');
		
		$this->form_validation->set_rules('checkbox[85]', 'Question 86', 'trim|required');
		$this->form_validation->set_rules('checkbox[86]', 'Question 87', 'trim|required');
		$this->form_validation->set_rules('checkbox[87]', 'Question 88', 'trim|required');
		$this->form_validation->set_rules('checkbox[88]', 'Question 89', 'trim|required');
		$this->form_validation->set_rules('checkbox[89]', 'Question 90', 'trim|required');
		
		$this->form_validation->set_rules('checkbox[90]', 'Question 91', 'trim|required');
		$this->form_validation->set_rules('checkbox[91]', 'Question 92', 'trim|required');
		$this->form_validation->set_rules('checkbox[92]', 'Question 93', 'trim|required');
		$this->form_validation->set_rules('checkbox[93]', 'Question 94', 'trim|required');
		$this->form_validation->set_rules('checkbox[94]', 'Question 95', 'trim|required');
		
		$this->form_validation->set_rules('checkbox[95]', 'Question 96', 'trim|required');
		$this->form_validation->set_rules('checkbox[96]', 'Question 97', 'trim|required');
		$this->form_validation->set_rules('checkbox[97]', 'Question 98', 'trim|required');
		$this->form_validation->set_rules('checkbox[98]', 'Question 99', 'trim|required');
		$this->form_validation->set_rules('checkbox[99]', 'Question 100', 'trim|required');
		
		$this->form_validation->set_rules('checkbox[100]', 'Question 101', 'trim|required');
		$this->form_validation->set_rules('checkbox[101]', 'Question 102', 'trim|required');
		$this->form_validation->set_rules('checkbox[102]', 'Question 103', 'trim|required');
		$this->form_validation->set_rules('checkbox[103]', 'Question 104', 'trim|required');
		$this->form_validation->set_rules('checkbox[104]', 'Question 105', 'trim|required');
		
		
		
			$email=$_POST['email'];
			if($this->form_validation->run() == FALSE) {
				$valid = 0;
                $error .= validation_errors();
            }
            else if($this->form_validation->run() == TRUE) {
				$valid = 1;
               // $error .= validation_errors();
            }
            else{
                	//$valid = 1;
            }
			
		    

		    if($valid == 1) 
		    {
				
				$checkbox[] = $this->input->post('checkbox[]');
				$dimensions_name[] = $this->input->post('dimensions_name[]');
				$sub_categories_names[] = $this->input->post('sub_categories_names[]');
		//echo "<pre>";print_r($checkbox);exit;
		        
		        $form_data = array(
					'checkbox'    => $_POST['checkbox'],
					'dimensions_name'    => $_POST['dimensions_name'],
					'sub_categories_names'    => $_POST['sub_categories_names'],
					
				);
				//echo "<pre>";print_r($form_data);exit;
			   $questions_score_id= $this->Model_category->add_work_form($form_data,$email);
			   echo "<pre>";print_r($questions_score_id);exit;
				$questions_score = $this->Model_category->get_last_inserted_record($questions_score_id);
				
				$test_score= $questions_score['score'];
				$categories_id=$questions_score['categories_id'];

				 //echo "<pre>";print_r($test_score);echo "<br>";exit;
				// echo "<pre>";print_r($categories_id);exit;
				$data['description'] = $this->Model_category->get_relative_score($test_score,$categories_id);
				//echo "<pre>";print_r($test_score);exit;
				// $data['description']=$questions_score['name'];
				 //echo "<pre>";print_r($data['description']);exit;

				if($test_score >=0 && $test_score <=30)
				{

					$data['grade']='D';
				}
				else if($test_score >=31 && $test_score <=50)
				{

					$data['grade']='C';
				}

				else if($test_score >=51 && $test_score <=70)
				{

					$data['grade']='B';
				}

				else if($test_score >=71 && $test_score <=100)
				{

					$data['grade']='A';
				}
				//echo "<pre>";print_r($data['grade']);exit;
				$success = 'Work Personality Index Score is added successfully!';
				$this->session->set_flashdata('success',$success);
				$data['setting'] = $this->Model_common->all_setting();
				$data['sliders'] = $this->Model_common->all_slider('login');
				//$this->load->view('view_header',$data);
				//$this->load->view('view_description',$data);
				
					
				$data['categories'] = $this->Model_category->get_categories();
				$data['nayatel_record'] = $this->Model_category->check_record_nayatel($email);
				$data['work_record'] = $this->Model_category->check_record_work_personality_index($email);
				//echo "<pre>";print_r($data['work_record']);exit;
					$data['dashboard_data']=$this->session->userdata();


					$this->load->view('dashboard-new',$data);
				
				// $data['categories'] = $this->Model_category->get_categories();
			
				// 	$data['dashboard_data']=$this->session->userdata();
					
				// 	$this->load->view('dashboard-new',$data);
	//redirect(base_url().'dashboard');
				
				//$this->load->view('view_footer',$data);
			//	redirect(base_url().'login/description',$data);
				//echo "<pre>";print_r($data['grade']);exit;

		       
		    } 
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'login/work_personality_index_form');
		    }
            
        } else {    
			
			

            $this->load->view('admin/view_header',$data);
			$this->load->view('login/work_personality_index_form',$data);
			$this->load->view('admin/view_footer');
        }
	}

public function description($questions_score= ''){
	$last_record = $this->Model_category->get_last_record();
	//$score=$last_record['score'];
	//echo "<pre>";print_r($last_record);exit;
// 		//$score=$data['score'];
// 		foreach ($questions_score as $item)
// {
//   echo 'name: ' . $item['score'];
// }
		
// 		if(is_array($questions_score) && count($questions_score) > 0){
// 			if(isset($questions_score)) {
// 				$score = $questions_score->score;
// 				echo "<pre>";print_r($questions_score);exit;
// 			}

			
// 		 } else {
// 			echo "No result found";
// 		 }
	   

		//echo "<pre>";print_r($questions_score);exit;
		$last_record=30;

		$data['setting'] = $this->Model_common->all_setting();
		$data['sliders'] = $this->Model_common->all_slider('login');
		$categories_id='5';
		$data['score'] = $this->Model_category->get_description_score($categories_id);
//echo "<pre>";print_r($data['score']);exit;

		$data['Work_personality_index'] = $this->Model_category->get_description($categories_id);
		//echo "<pre>";print_r($data['score']);exit;
		$score=$data['score'];
		//echo "<pre>";print_r($score);exit;
		// if($score >=0 && $score <=20){

		// 	$data['score_value']='C';
		// }
		// if($score >=21 && $score <=40){
		
		// 	$data['score_value']='B';
		// }
		
		// if($score >=41 && $score <=60){
		
		// 	$data['score_value']='A';
		// }
		//echo "<pre>";print_r($data['value']);exit;



		$this->load->view('view_header',$data);
		$this->load->view('view_description',$data);
		$this->load->view('view_footer',$data);

}

public function dashboard_success(){
   
   $categories_id=2;
	$data['setting'] = $this->Model_common->all_setting();
	//$data['sliders'] = $this->Model_common->all_slider('login');
	$data['nayatel_value_statements'] = $this->Model_category->get_all_nayatel_value_statements($categories_id);
	$data['count'] = $this->Model_category->count_active_records($categories_id);
// $email=$email[0];
// 	echo "<pre>";print_r($email);exit;
	$name= $data['nayatel_value_statements'];
if(($this->uri->segment(3)!=0)){
	$data['dashboard_data']=$this->uri->segment(3);
	
}
else{
	$data['dashboard_data']=$this->session->userdata();
}
$data['categories'] = $this->Model_category->get_categories();
			
$data['dashboard_data']=$this->session->userdata();
	//$data['dashboard_data']=$this->session->userdata();
	//echo "<pre>";print_r($data['dashboard_data']);exit;
    $this->load->view('dashboard_test',$data);
	$this->load->view('admin/employee_view_header',$data);

//	$this->load->view('nayatel_value_statements',$data);
		
	$this->load->view('admin/employee_view_footer',$data);
    
   
    // $data['categories'] = $this->Model_category->get_categories();
    // 	$data['dashboard_data']=$this->session->userdata();
    		//redirect(base_url().'login/dashboard');
    
}

public function dashboard(){
                // $this->session->set_userdata($value_array);
                $data['dashboard_data']=$this->session->userdata();
                $email=$data['dashboard_data'];
                //echo "<pre>";print_r($dashboard_data);exit;
                $email=$email['email'];
               // echo "<pre>";print_r($email);exit;
				$data['categories'] = $this->Model_category->get_categories();
				$data['nayatel_record'] = $this->Model_category->check_record_nayatel($email);
				$data['work_record'] = $this->Model_category->check_record_work_personality_index($email);
				
				// resume the test
// resume test
$data['work_resume_test'] = $this->Model_category->work_resume_test($email);
$data['incomplete_scenario'] = $this->Model_category->check_incomplete_scenario($email);

// count questions
$count_work_questions = $this->Model_category->count_work_questions($email);
$count_work_questions=105-$count_work_questions;
$count_work_questions=$count_work_questions/105;
$count_work_questions=$count_work_questions*100;
$data['count_work_questions']=round($count_work_questions);
//echo "<pre>";print_r($data['count_work_questions']);exit;


// count nayatel questions
$count_nayatel_questions = $this->Model_category->count_nayatel_questions($email);
$count_nayatel_questions=70-$count_nayatel_questions;
$count_nayatel_questions=$count_nayatel_questions/70;
$count_nayatel_questions=$count_nayatel_questions*100;
$data['count_nayatel_questions']=round($count_nayatel_questions);


//if function gives completed then check,otherwise check time
	
	if($data['work_resume_test'] == 'completed'){
	    $data['work_resume_test']='completed';
	    
	}
	else if($data['work_resume_test'] == 'pending'){
	    $data['work_resume_test']='pending';
	    
	}
	else if($data['work_resume_test'] == 'resume'){
	    $data['work_resume_test']='resume';
	    
	}
	else if ($data['incomplete_scenario'] == 'incomplete'){
	    
	    $data['incomplete_scenario']='incomplete';
	}
	else{
	    
	    $data['work_resume_test']='incomplete';
	}
	
	
	$data['nayatel_resume_test'] = $this->Model_category->nayatel_resume_test($email);
	$data['nayatel_incomplete_scenario'] = $this->Model_category->check_nayatel_incomplete_scenario($email);
		if($data['nayatel_resume_test'] == 'completed'){
	    $data['nayatel_resume_test']='completed';
	    
	}
		else if($data['nayatel_incomplete_scenario'] == 'incomplete'){
	    $data['nayatel_incomplete_scenario']='incomplete';
	    
	}
	else if($data['nayatel_resume_test'] == 'pending'){
	    $data['nayatel_resume_test']='pending';
	    
	}
	else if($data['nayatel_resume_test'] == 'resume'){
	    $data['nayatel_resume_test']='resume';
	    
	}
	else{
	    
	    $data['nayatel_resume_test']='incomplete';
	}	
				//echo "<pre>";print_r($data['work_record']);exit;
					
// 	foreach($categories as $thing) {
// 			print_r($thing) ;
// 		 }exit;
  //echo "<pre>";print_r($data['categories']);
// echo "<pre>";print_r($categories[1]);
// echo "<pre>";print_r($categories[2]);
// echo "<pre>";print_r($categories[3]);
// echo "<pre>";print_r($categories[4]);exit;

// 		print_r($data);
	
// exit;
	//echo "<pre>";print_r($data['dashboard_data']);exit;
	//$name=$values['name'];
	$this->load->view('dashboard-new',$data);
		
}

public function data_collection(){
		
		$email=$this->input->post('email');

		$role_id=$this->input->post('role_id');
		$name=$this->input->post('name');
		$gender=$this->input->post('gender');
		$department=$this->input->post('department');
		$tenure=$this->input->post('tenure');
		$job_title=$this->input->post('job_title');
		$location=$this->input->post('location');
		$age=$this->input->post('age');
		$reporting=$this->input->post('reporting');
		// name
		// gender
		// department
		// tenure
		// job_title
		// location
		// age
		// reporting

		//$data['setting'] = $this->Model_common->get_setting_data();

		$error = '';
		$success = '';

		if(isset($_POST['form2'])) {

			$valid = 1;

			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_rules('gender', 'Gender', 'trim|required');
			$this->form_validation->set_rules('department', 'Department', 'trim|required');
			$this->form_validation->set_rules('tenure', 'Tenure', 'trim|required');
			$this->form_validation->set_rules('job_title', 'Job Title', 'trim|required');
			$this->form_validation->set_rules('location', 'Location', 'trim|required');
			$this->form_validation->set_rules('age', 'Age', 'trim|required');
			$this->form_validation->set_rules('reporting', 'Reporting', 'trim|required');


			if($this->form_validation->run() == FALSE) {
				$valid = 0;
                $error .= validation_errors();
            }

            // $path = $_FILES['banner']['name'];
		    // $path_tmp = $_FILES['banner']['tmp_name'];

		    // if($path!='') {
		    //     $ext = pathinfo( $path, PATHINFO_EXTENSION );
		    //     $file_name = basename( $path, '.' . $ext );
		    //     $ext_check = $this->Model_common->extension_check_photo($ext);
		    //     if($ext_check == FALSE) {
		    //         $valid = 0;
		    //         $error .= 'You must have to upload jpg, jpeg, gif or png file for banner<br>';
		    //     }
		    // } else {
		    // 	$valid = 0;
		    //     $error .= '<br>';
		    // }

		    if($valid == 1) 
		    {
				// $next_id = $this->Model_category->get_auto_increment_id();
				// foreach ($next_id as $row) {
		        //     $ai_id = $row['Auto_increment'];
		        // }

		        // $final_name = 'category-banner-'.$ai_id.'.'.$ext;
		        // move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

		        $value_array = array(   
					'role'=>'3',
					'name'=>$this->input->post("name"),
					'gender' =>$this->input->post("gender"),
					'department'=>$this->input->post('department'),
					'tenure'=>$this->input->post("tenure"),
					'job_title' =>$this->input->post("job_title"),
					'location'=>$this->input->post('location'),
					'age'=>$this->input->post("age"),
					'reporting' =>$this->input->post("reporting"),
					'email' =>$this->input->post("email"),
					
					
				);
				//echo "<pre>";print_r($value_array);exit;
				$insert_id =$this->Model_user->register('data_collection',$value_array);
				$update_data   = array(
    	                   	'department'=>$this->input->post('department'),
    	                   	'location'=>$this->input->post('location'),
    	               );
            	$update_email    = array(
    	                    'email' => $this->input->post("email"),
    	               );               
    	       
				$name=$name;
				$value_array = array(   
					'role'=>'3',
					'name'=>$name,
					'gender' =>$gender,
					'department'=>$department,
					'tenure'=>$tenure,
					'job_title' =>$job_title,
					'location'=>$location,
					'age'=>$age,
					'reporting' =>$reporting,
					'email' =>$email,
					
					
				);
				$this->session->set_userdata($value_array);
				$data['dashboard_data']=$value_array;
				 $update = $this->Model_user->update_employee_info($update_data,$update_email) ;
				//echo "<pre>";print_r($data['dashboard_data']);exit;
				// echo "<pre>";print_r($name);
				// echo "<pre>";print_r($department);
				// echo "<pre>";print_r($email);
				// echo "<pre>";print_r($location);exit;
				//$data['categories'] = $this->Model_category->get_categories();
			


				// foreach($categories as $thing) {
				// 	echo $thing;
				//  }
				
					// echo "<pre>";print_r($categories[0]);
					// echo "<pre>";print_r($categories[1]);
					// echo "<pre>";print_r($categories[2]);
					// echo "<pre>";print_r($categories[3]);
					// echo "<pre>";print_r($categories[4]);
					// exit;

				
				//$categories=$categories->name;
				
				//$name=$categories['name'];
				//echo "<pre>";print_r($categories[0]);exit;
				//$categories=$categories->name;
				//echo "<pre>";print_r($categories['name']);exit;

				

		        $success = 'Data is added successfully!';
				$this->session->set_flashdata('success',$success);
				redirect(base_url().'login/dashboard');
				//$this->load->view('dashboard',$data);
		    } 
		    else
		    {
				$error = 'Kindly enter all the details';
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'login');
		    }
            
        } else {            
            $this->load->view('admin/view_header',$data);
			$this->load->view('login/data_collection',$data);
			$this->load->view('admin/view_footer');
        }
		

		
//echo "<pre>";print_r($value_array);exit;
		//$this->Login_content_model->replace('support_confirmation',$value_array);

$this->load->view('thankyou');

}

	public function access(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

		$this->load->model('Model_user');
		
		$data['get_user'] 	 = $this->Model_user->login_form_validate();
		//echo "<pre>";print_r($data['get_user'] );exit;
		if(empty($data['get_user']->mobile)){
		    
		    //	
		    	$update_email=$data['get_user']->email;
		    //	echo "<pre>";print_r($update_email);exit;
		    $update_email=array(
		        'update_email'=>$update_email,
		        );
		    	$this->session->set_userdata($update_email);
		    	redirect(base_url().'login/update_employee_profile');
		}
		
		if(!empty($data['get_user']->role )){
		
		
		}
		
		if(!empty($data['get_user'] )){
			$get_user 	 = $this->Model_user->login_form_validate();
			$data['email']=$get_user->email;
			$email=$data['email'];

			$value_array	 = $this->Model_user->check_data_collection($email);
			//	 echo "<pre>";print_r($value_array);exit;
			
   
			
		if($value_array){

				foreach($value_array as $row)
				{
					$role = $row['role']; // add each user id to the array
					$first_name = $row['first_name'];
					$last_name = $row['last_name']; 
					$mobile = $row['mobile']; 
					$job_title = $row['job_title']; 
				
					$status = $row['status']; 
					$date_created = $row['date_created'];
					$gender = $row['gender']; 
					$department = $row['department']; 
				    $landline = $row['landline'];
					$designation = $row['designation']; 
					$location= $row['location']; 
					$age= $row['age']; 
					$reporting = $row['reporting']; 
					$email = $row['email']; 
				}
	
	   
			$value_array = array(   
			
				'role'=>$role,
				'first_name'=>$first_name,
				'last_name'=>$last_name,
				'mobile'=>$mobile,
				'job_title'=>$job_title,
				'status'=>$status,
				'landline'=>$landline,
				'date_created'=>$date_created,
				
				'gender' =>$gender,
				'department'=>$department,
				'designation'=>$designation,
				
				'location'=>$location,
				'age'=>$age,
				'reporting' =>$reporting,
				'email' =>$email,
				
				
			);
			$this->session->set_userdata($value_array);
				$data['categories'] = $this->Model_category->get_categories();
				$data['nayatel_record'] = $this->Model_category->check_record_nayatel($email);
				$data['work_record'] = $this->Model_category->check_record_work_personality_index($email);
				
				//echo "<pre>";print_r($data['work_record']);exit;
					$data['dashboard_data']=$this->session->userdata();
					$data['manager_dashboard_data']=$this->session->userdata();
					//echo "<pre>";print_r($dashboard_data);exit;
					//$name=$values['name'];
					
	// resume the test
// resume test
$data['work_resume_test'] = $this->Model_category->work_resume_test($email);
$data['incomplete_scenario'] = $this->Model_category->check_incomplete_scenario($email);
$data['nayatel_incomplete_scenario'] = $this->Model_category->check_nayatel_incomplete_scenario($email);
// count questions
$count_work_questions = $this->Model_category->count_work_questions($email);
$count_work_questions=105-$count_work_questions;
$count_work_questions=$count_work_questions/105;
$count_work_questions=$count_work_questions*100;
$data['count_work_questions']=round($count_work_questions);


// count nayatel questions
$count_nayatel_questions = $this->Model_category->count_nayatel_questions($email);
$count_nayatel_questions=70-$count_nayatel_questions;
$count_nayatel_questions=$count_nayatel_questions/70;
$count_nayatel_questions=$count_nayatel_questions*100;
$data['count_nayatel_questions']=round($count_nayatel_questions);

//if function gives completed then check,otherwise check time
	//echo "<pre>";print_r($work_resume_test);exit;
if ($data['incomplete_scenario'] == 'incomplete'){
	    
	    $data['incomplete_scenario']='incomplete';
	}
	else	if($data['work_resume_test'] == 'completed'){
	    $data['work_resume_test']='completed';
	    
	}
	else if($data['work_resume_test'] == 'pending'){
	    $data['work_resume_test']='pending';
	    
	}
	else if($data['work_resume_test'] == 'resume'){
	    $data['work_resume_test']='resume';
	    
	}
	else{
	    
	    $data['work_resume_test']='incomplete';
	}
	
	
	$nayatel_resume_test = $this->Model_category->nayatel_resume_test($email);
		if($nayatel_resume_test == 'completed'){
	    $data['nayatel_resume_test']='completed';
	    
	}
	else if($nayatel_resume_test == 'pending'){
	    $data['nayatel_resume_test']='pending';
	    
	}
	else if($nayatel_resume_test == 'resume'){
	    $data['nayatel_resume_test']='resume';
	    
	}
	else{
	    
	    $data['nayatel_resume_test']='incomplete';
	}
	
	//	echo "<pre>";print_r($nayatel_resume_test);exit;
	
//if work_resume_test == 0 then incomplete 
// otherwise resume the test 
			//	$success = 'Login successfully!';
			//	$this->session->set_flashdata('success',$success);
				$value['setting'] = $this->Model_common->all_setting();
				$value['sliders'] = $this->Model_common->all_slider('login');
	
$role=$data['get_user']->role;
                //echo "<pre>";print_r($role);exit;
	if($role == 'employee'){
	    $this->load->view('dashboard-new',$data);
	//	redirect(base_url().'login/dashboard');
		
		}
        else if ($role== 'manager'){
redirect(base_url().'manager/login/dashboard');

          // redirect('https://10-yards.com/manager/login/dashboard'); 
        }
        else{

redirect(base_url().'login');
        }
	
	
			//$this->load->view('view_header',$value);
		//	$this->load->view('dashboard-new',$data);
			//$this->load->view('view_footer',$value);	
			}
			else{
			   // echo "else";exit;
			//$success = 'Login successfully!';
		//	$this->session->set_flashdata('success',$success);
			$value['setting'] = $this->Model_common->all_setting();
			$value['sliders'] = $this->Model_common->all_slider('login');


		$this->load->view('view_header',$value);
		$this->load->view('dashboard-new',$data);
		$this->load->view('view_footer',$value);
		}
	}
		else{
			
			$error = 'Kindly enter email and password!';
			$this->session->set_flashdata('error',$error);
				redirect(base_url().'login');
		}
		
		//redirect(base_url().'admin/categories');
//echo "<pre>";print_r($data['get_user'] );exit;

//$this->load->view('view_header',$data);

		
		//$this->load->view('data_collection',$data);
		//$this->load->view('view_footer',$data);

		}



	
// 	public function check_login()
// 	{
// 		$this->load->library('form_validation');

// 		$this->form_validation->set_rules('password', 'Password', 'required');
// 		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

// 		if ($this->form_validation->run() == FALSE)
// 		{
// 			$json  = array(
// 							  		'success'	=> false,
// 							  		'message'	=> validation_errors(),
// 							  );
// 				echo json_encode($json);
// 		}
// 		else
// 		{
// 			$email = $this->input->post('email',true);
//             $password = $this->input->post('password',true);
// 			$checkstatus = $this->Model_user->checkstatus($email);
// 			//echo "<pre>";print_r($checkstatus);exit;
			
// 			if($checkstatus->num_rows() > 0)
// 			{
// 				$error = 'Your account is not active kindly active your account';
//                 $json  = array(
// 							  		'success'	=> false,
// 							  		'message'	=> $error,
// 							  );
// 				echo json_encode($json);
// 				die();
// 			}
//             // Checking the email address
//             $un = $this->Model_user->check_email($email);
// //echo "<pre>";print_r($checkstatus);exit;
//             if($un->num_rows() == 0) 
//             {
//                 $error = 'Email address is wrong!';
//                 $json  = array(
// 							  		'success'	=> false,
// 							  		'message'	=> $error,
// 							  );
// 				echo json_encode($json);

//             } else 
//             {

//                 // When email found, checking the password
//                 $pw = $this->Model_user->check_password($email,$password);

//                 if($pw->num_rows() == 0) 
//                 {
                    
//                     $error = 'Password is wrong!';
//                     $json  = array(
// 							  		'success'	=> false,
// 							  		'message'	=> $error,
// 							  );
// 					echo json_encode($json);

//                 } else {

//                     // When email and password both are correct
//                     $user = $pw->result_array();
//                     foreach($user as $use)
//                     {
// 						$array = array(
// 				                        'id' 		=> $use['customer_id'],
// 				                        'email' 	=> $use['email'],
// 				                        'username'	=> $use['username'],
// 				                        'fullname'  => $use['fullname'],
// 				                        'photo'		=> $use['photo'],
// 				                        'password' 	=> $use['password'],
// 				                        'status' 	=> $use['status'],
// 										'role_id'	=> $use['role_id'],
// 				                        'logged_in' => true,
// 	                    			  );
// 	                    $this->session->set_userdata($array);
// 						if ($use['role_id'] == 1)
// 						{
// 							$role = 'customer';
// 						}else
// 						{
// 							$role = 'chef';
// 						}
// 					}
                    
                    
                    
//                     $json  = array(
// 							  		'success'	=> true,
// 							  		'message'	=> 'You have successfully Logged In',
// 									  'role'	=> $role,
// 							  );
// 					echo json_encode($json);
//                 }
//             }
// 		}
// 	}	
	
	
	function logout() {
		//echo "ghhj";exit;
		$this -> session -> unset_userdata('value_array');
		$this -> session -> unset_userdata('email');
		$this -> session -> unset_userdata('update_email');
		
        $this->session->sess_destroy();
        redirect(base_url('login'));exit;
    }
    
    
public function update_profile(){
    //echo "njjj";exit;
    $email =$_POST['email'];
    //echo "<pre>";print_r($email);exit;
        $error = '';
		$success = '';

	//	$data['setting'] = $this->Model_common->get_setting_data();

	
//echo "njjj";exit;
		

			        $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
				    $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
					$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
					
					$this->form_validation->set_rules('mobile', 'Mobile', 'trim|required');
					$this->form_validation->set_rules('job_title', 'Job Title	', 'trim|required');
					
					$this->form_validation->set_rules('password', 'password', 'trim|required');
					$this->form_validation->set_rules('department', 'department', 'trim|required');
					
					$this->form_validation->set_rules('location', 'location', 'trim|required');
					$this->form_validation->set_rules('age', 'age', 'trim|required');
					
					$this->form_validation->set_rules('gender', 'gender', 'trim|required');
				// 	$this->form_validation->set_rules('tenure', 'tenure', 'trim|required');
					$this->form_validation->set_rules('reporting', 'reporting', 'trim|required');
					$this->form_validation->set_rules('cnic', 'Cnic', 'trim|required');
					$this->form_validation->set_rules('landline', 'landline', 'required');

				

			if($this->form_validation->run() == FALSE) {
				$valid = 0;
                $error = validation_errors();
            }
            else{
                
              $valid = 1;  
            }
	
            if($valid == 1) {
                
              
    	$email     = array(
    	                    'email' => $_POST['email'],
    	               );               
    	
    //	echo "<pre>";print_r($email);exit;
    	
    	//$update = $this->Model_user->updatestatus($data,$id) ;
    	
    	        $salt = 'b7r4';
				
				$password =  hash('sha256', $salt . ( hash('sha256',$this->input->post('password'))));
			//	$confirm_password=$password;
				
    	
	            $form_data = array(
					'first_name'     => $_POST['first_name'],
					'last_name'     => $_POST['last_name'],
					'mobile'     => $_POST['mobile'],
					'job_title'     => $_POST['job_title'],
					
				
					'landline'     => $_POST['landline'],
					'department'     => $_POST['department'],
					'location'     => $_POST['location'],
					'cnic'     => $_POST['cnic'],
					
					'age'     => $_POST['age'],
					'gender'     => $_POST['gender'],
				// 	'tenure'     => $_POST['tenure'],
					'reporting'     => $_POST['reporting'],
					
					
	            );
	           // echo "<pre>";print_r($form_data);exit;
	        	$this->Model_category->update_employee_profile($form_data,$email);
	        	$success = 'Employee Profile Information is updated successfully!';
	        	
	        	$form_data2 = array(
					'first_name'     => $_POST['first_name'],
					'last_name'     => $_POST['last_name'],
					'mobile'     => $_POST['mobile'],
					'job_title'     => $_POST['job_title'],
					 'email' => $_POST['email'],
				
					'landline'     => $_POST['landline'],
					'department'     => $_POST['department'],
					'location'     => $_POST['location'],
					'cnic'     => $_POST['cnic'],
					
					'age'     => $_POST['age'],
					'gender'     => $_POST['gender'],
				// 	'tenure'     => $_POST['tenure'],
					'reporting'     => $_POST['reporting'],
					
					
	            );
	        	$value_array=$form_data2;
	            $data['dashboard_data']=$this->session->set_userdata($value_array);


                $data['categories'] = $this->Model_category->get_categories();
                $email=$this->input->post('email');
				$data['nayatel_record'] = $this->Model_category->check_record_nayatel($email);
				$data['work_record'] = $this->Model_category->check_record_work_personality_index($email);
				
				$value['setting'] = $this->Model_common->all_setting();
				$value['sliders'] = $this->Model_common->all_slider('login');
	
	        	$this->session->set_flashdata('success',$success);
	        		redirect(base_url().'login/dashboard');
            }
            else {
            	$this->session->set_flashdata('error',$error);
	        	redirect(base_url().'login');
            }
		
        $data['dashboard_data']=$this->session->userdata();
        //$this->session->userdata('manager_value_array');	
	//	$data['setting'] = $this->Model_common->get_setting_data();
       // $data['manager_dashboard_data']=$this->session->userdata();
	//	$this->load->view('dashboard-new',$data);
	}
  
    
    public function update_employee_profile(){
       
       
       $email=$this->uri->segment(3);
       if(!empty($email)){
         $email=$email;  
       }
       else{
           
            $email=$this->session->userdata();
            $email=$email['update_email'];
       }
       
    //$email= $data['dashboard_data'];
    
     //echo "<pre>";print_r($email);exit;
    $data['employee_information'] = $this->Model_category->get_employee_record($email);
   // echo "<pre>";print_r($data['employee_information']);exit;
   // $data['employee_information'];
    
	$data['setting'] = $this->Model_common->all_setting();
	//$data['sliders'] = $this->Model_common->all_slider('login');
	
	//$data['count'] = $this->Model_category->count_active_records($categories_id);
// $email=$email[0];
// 	echo "<pre>";print_r($email);exit;
	//$name= $data['nayatel_value_statements'];
// if(($this->uri->segment(3)!=0)){
// 	$data['dashboard_data']=$this->uri->segment(3);
	
// }
// else{
// 	$data['dashboard_data']=$this->session->userdata();
// }
$data['categories'] = $this->Model_category->get_categories();
			
//$data['dashboard_data']=$this->session->userdata();
	//$data['dashboard_data']=$this->session->userdata();
	//echo "<pre>";print_r($data['dashboard_data']);exit;
   // $this->load->view('dashboard_test',$data);
	$this->load->view('admin/employee_view_header',$data);

	$this->load->view('update_employee_information',$data);
		
	$this->load->view('admin/employee_view_footer',$data);
    
        
        
    }
    
    public function change_password_first(){
         $code = $this->uri->segment(3);
         	//echo "<pre>";print_r($code);exit;
        $this->form_validation->set_rules('new_password', 'Password', 'required|min_length[6]');
		$this->form_validation->set_rules('re_password', 'confirm Password', 'required|matches[new_password]');
      
           if($this->form_validation->run() == FALSE) {
				$valid = 0;
                $error = validation_errors();
            }
            else{
                
                $valid = 1;
            }
            
            $salt = 'b7r4';
				
				$password =  hash('sha256', $salt . ( hash('sha256',$this->input->post('new_password'))));
				$confirm_password =  hash('sha256', $salt . ( hash('sha256',$this->input->post('re_password'))));
            
            
            if($valid == 1) {
              	$data   = array(
    	                    'status' => 'enable',
    	                     'password' => $password,
    	                     'confirm_password' => $confirm_password,
    	               );
    	$id     = array(
    	                    'code' => $code
    	               );               
    	
    	$update = $this->Model_user->updatestatus($data,$id) ;
    //	echo "<pre>";print_r($update);exit;
    }
    if(!empty($update)){
        $success = 'You have successfully update your password, kindly complete your profile by login!';
		$this->session->set_flashdata('success',$success);
       redirect(site_url().'/login'); 
        
    }
    }
    
    
    public function active_employees(){
         $data['code'] = $this->input->get('code');
        
   
        
        $this->load->view('view_update_password',$data);
    }
    
    public function active()
    {
		$code = $this->input->get('code');
		//$code = $this->uri->segment(3);
	//	echo "<pre>";print_r($code);exit;
     
        //$id   = $this->input->post('userid');
    	
    	
    	$data   = array(
    	                    'status' => 'enable',
    	               );
    	$id     = array(
    	                    'code' => $code
    	               );               
    	
    	$update = $this->Model_user->updatestatus($data,$id) ;
    
    	if($update > 0)
    	{
    	    $success = 'Your Account is being active';
	        $this->session->set_flashdata('success',$success);
	        redirect(site_url().'/login');
    	}else
    	{
    		$error = 'Server is not responding correctly';
    	    $this->session->set_flashdata('error',$error);
	        redirect(site_url().'/login');
    	}
    	
    	
    }
}