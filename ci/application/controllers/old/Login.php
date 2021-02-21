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


		$this->load->view('view_header',$data);
		$this->load->view('view_login',$data);
		$this->load->view('view_footer',$data);
		
	}
	public function work_personality_index_form(){

//echo "view";exit;
		$categories_id=5;
		$data['setting'] = $this->Model_common->all_setting();
		$data['sliders'] = $this->Model_common->all_slider('login');
		$data['Work_personality_index'] = $this->Model_category->get_all_Work_personality_index($categories_id);
		$data['count'] = $this->Model_category->count_active_records($categories_id);

		//echo "<pre>";print_r($data['count']);exit;
		$name= $data['Work_personality_index'];

		$this->load->view('view_header',$data);
		$this->load->view('work_personality_index_view_form',$data);
		$this->load->view('view_footer',$data);
		

	}

	public function work_personality_index_form_data(){
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
			// $this->form_validation->set_rules('checkbox2', 'Please select one value', 'trim|required');
			// $this->form_validation->set_rules('checkbox3', 'Please select one value', 'trim|required');
			// $this->form_validation->set_rules('checkbox4', 'Please select one value', 'trim|required');
			// $this->form_validation->set_rules('checkbox5', 'Please select one value', 'trim|required');

			
			
		    

		    if($valid == 1) 
		    {
				
				$checkbox[] = $this->input->post('checkbox[]');
		//echo "<pre>";print_r($checkbox);exit;
		        
		        $form_data = array(
					'checkbox'    => $_POST['checkbox'],
					
				);
				//echo "<pre>";print_r($form_data);exit;
			   $questions_score_id= $this->Model_category->add_work_form($form_data);
			  // echo "<pre>";print_r($questions_score_id);exit;
				$questions_score = $this->Model_category->get_last_inserted_record($questions_score_id);
				
				$test_score= $questions_score['score'];
				$categories_id=$questions_score['categories_id'];

				 //echo "<pre>";print_r($test_score);echo "<br>";exit;
				// echo "<pre>";print_r($categories_id);exit;
				$data['description'] = $this->Model_category->get_relative_score($test_score,$categories_id);
				//echo "<pre>";print_r($test_score);exit;
				// $data['description']=$questions_score['name'];
				// echo "<pre>";print_r($data['description']);exit;

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
				$success = 'Score is added successfully!';
				$this->session->set_flashdata('success',$success);
				$data['setting'] = $this->Model_common->all_setting();
				$data['sliders'] = $this->Model_common->all_slider('login');
				$this->load->view('view_header',$data);
				$this->load->view('view_description',$data);
				$this->load->view('view_footer',$data);
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
public function data_collection(){

		// $role_id=$this->input->post('role_id');
		// $name=$this->input->post('name');
		// $gender=$this->input->post('gender');
		// $department=$this->input->post('department');
		// $tenure=$this->input->post('tenure');
		// $job_title=$this->input->post('job_title');
		// $location=$this->input->post('location');
		// $age=$this->input->post('age');
		// $reporting=$this->input->post('reporting');
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
					
					
				);
				//echo "<pre>";print_r($value_array);exit;
				$insert_id =$this->Model_user->register('data_collection',$value_array);

		        $success = 'Data is added successfully!';
		        $this->session->set_flashdata('success',$success);
				redirect(base_url().'login/work_personality_index_form');
		    } 
		    else
		    {
				$error = 'Kindly enter all the details';
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'login');
		    }
            
        } else {            
            $this->load->view('admin/view_header',$data);
			$this->load->view('admin/data_collection',$data);
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
		if(!empty($data['get_user'] )){
			$data['get_user'] 	 = $this->Model_user->login_form_validate();
			$success = 'Login successfully!';
			$this->session->set_flashdata('success',$success);
			$value['setting'] = $this->Model_common->all_setting();
			$value['sliders'] = $this->Model_common->all_slider('login');


		$this->load->view('view_header',$value);
		$this->load->view('data_collection',$data);
		$this->load->view('view_footer',$value);
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



	
	public function check_login()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

		if ($this->form_validation->run() == FALSE)
		{
			$json  = array(
							  		'success'	=> false,
							  		'message'	=> validation_errors(),
							  );
				echo json_encode($json);
		}
		else
		{
			$email = $this->input->post('email',true);
            $password = $this->input->post('password',true);
			$checkstatus = $this->Model_user->checkstatus($email);
			//echo "<pre>";print_r($checkstatus);exit;
			
			if($checkstatus->num_rows() > 0)
			{
				$error = 'Your account is not active kindly active your account';
                $json  = array(
							  		'success'	=> false,
							  		'message'	=> $error,
							  );
				echo json_encode($json);
				die();
			}
            // Checking the email address
            $un = $this->Model_user->check_email($email);
//echo "<pre>";print_r($checkstatus);exit;
            if($un->num_rows() == 0) 
            {
                $error = 'Email address is wrong!';
                $json  = array(
							  		'success'	=> false,
							  		'message'	=> $error,
							  );
				echo json_encode($json);

            } else 
            {

                // When email found, checking the password
                $pw = $this->Model_user->check_password($email,$password);

                if($pw->num_rows() == 0) 
                {
                    
                    $error = 'Password is wrong!';
                    $json  = array(
							  		'success'	=> false,
							  		'message'	=> $error,
							  );
					echo json_encode($json);

                } else {

                    // When email and password both are correct
                    $user = $pw->result_array();
                    foreach($user as $use)
                    {
						$array = array(
				                        'id' 		=> $use['customer_id'],
				                        'email' 	=> $use['email'],
				                        'username'	=> $use['username'],
				                        'fullname'  => $use['fullname'],
				                        'photo'		=> $use['photo'],
				                        'password' 	=> $use['password'],
				                        'status' 	=> $use['status'],
										'role_id'	=> $use['role_id'],
				                        'logged_in' => true,
	                    			  );
	                    $this->session->set_userdata($array);
						if ($use['role_id'] == 1)
						{
							$role = 'customer';
						}else
						{
							$role = 'chef';
						}
					}
                    
                    
                    
                    $json  = array(
							  		'success'	=> true,
							  		'message'	=> 'You have successfully Logged In',
									  'role'	=> $role,
							  );
					echo json_encode($json);
                }
            }
		}
	}	
	
	
	function logout() {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
    
    
    public function active()
    {
        $code = $this->input->get('code');
     
        //$id   = $this->input->post('userid');
    	
    	
    	$data   = array(
    	                    'status' => 1,
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