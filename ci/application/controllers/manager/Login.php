<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{

    function __construct() 
    {
        parent::__construct();
        $this->load->model('manager/Model_login');
        $this->load->model('Model_common');
        $this->load->model('Model_category');
        $this->load->model('Model_portfolio');
        $this->load->model('Model_user');
        $this->load->model('admin/Model_common');

        $this->load->model('manager/Model_category');
        

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
							$this->form_validation->set_rules('job_title', 'Job Title', 'trim|required');
							$this->form_validation->set_rules('landline', 'Landline', 'trim|required');
							$this->form_validation->set_rules('mobile', 'Mobile', 'trim|required');
							$this->form_validation->set_rules('department', 'Department', 'trim|required');
							$this->form_validation->set_rules('location', 'Location', 'trim|required');
							$this->form_validation->set_rules('age', 'Age', 'trim|required');
							$this->form_validation->set_rules('gender', 'Gender', 'trim|required');
							$this->form_validation->set_rules('reporting', 'Reporting', 'trim|required');
							
								
									$this->form_validation->set_rules('cnic', 'Cnic', 'trim|required');
										$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[15]');
		
	
				

			if($this->form_validation->run() == FALSE) {
				$valid = 0;
                $error = validation_errors();
            }
	$valid = 1;
            if($valid == 1) {
                
              
    	$email     = array(
    	                    'email' => $_POST['email'],
    	               );               
    	
    //	echo "<pre>";print_r($email);exit;
    	
    	//$update = $this->Model_user->updatestatus($data,$id) ;
    	
    	$salt = 'b7r4';
				
				$password =  hash('sha256', $salt . ( hash('sha256',$this->input->post('password'))));
				$confirm_password=$password;
				
    	 $date_modified = date("Y-m-d H:i:s");
	            $form_data = array(
					'first_name'     => $_POST['first_name'],
					'last_name'     => $_POST['last_name'],
						
					'cnic'     => $_POST['cnic'],
						'email'     => $_POST['email'],
					'job_title'     => $_POST['job_title'],
						'landline'     => $_POST['landline'],
					'status'     => 'enable',
						'role'     => 'manager',
						'passport_number'     => '',
						'dob'     => '',
					'cnic'     => $_POST['cnic'],
						'mobile'     => $_POST['mobile'],
					'department'     => $_POST['department'],
						
					'location'     => $_POST['location'],
					
					'age'     => $_POST['age'],
					'gender'     => $_POST['gender'],
						
					'reporting'     => $_POST['reporting'],
					'date_modified'     => $date_modified,
					
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
	        	$manager_value_array=$form_data2;
	            $data['manager_dashboard_data']=$this->session->set_userdata($manager_value_array);

	           
	        //	$this->Model_login->update_profile($form_data,$email);
	       // 	$success = 'Profile Information is updated successfully!';
	        //	$manager_value_array=$form_data;
	        	$this->session->set_userdata($manager_value_array);

	        	$this->session->set_flashdata('success',$success);
	        	redirect(base_url().'manager/login/dashboard');
            }
            else {
            	$this->session->set_flashdata('error',$error);
	        	redirect(base_url().'manager/login/profile');
            }
		
        $data['manager_dashboard_data']=$this->session->userdata();
        //$this->session->userdata('manager_value_array');	
		$data['setting'] = $this->Model_common->get_setting_data();
        $data['manager_dashboard_data']=$this->session->userdata();
		$this->load->view('manager/login/dashboard',$data);
	}
    


public function profile(){
  $data['manager_dashboard_data']=$this->session->userdata();
  // echo "<pre>";print_r($data['manager_dashboard_data']);exit;
   
  
    $email= $data['manager_dashboard_data'];
    $email=$email['email'];
    
    // echo "<pre>";print_r($email);exit;
    $data['employee_information'] = $this->Model_category->get_employee_record($email);
   // echo "<pre>";print_r($data['employee_information']);exit;
   
   
   $user_type=$this->session->userdata('role');
   if ($user_type != "manager" ){
     redirect(base_url().'login');
       exit;
   }
   $this->load->view('manager/manager_dashboard_header');
	$this->load->view('manager/manager_dashboard_footer');


  $this->load->view('manager/dashboard2',$data);
  $this->load->view('manager/profile');


}

    public function index()
    {
        $error = '';

        $data['setting'] = $this->Model_login->get_setting_data();

        if(isset($_POST['form1'])) {

            // Getting the form data
            $email = $this->input->post('email',true);
            $password = $this->input->post('password',true);

            // Checking the email address
            $un = $this->Model_login->check_email($email);

            if(!$un) {
                $error = 'Email address is wrong!';
                $this->session->set_flashdata('error',$error);
                redirect(base_url().'login');

            } else {

                // When email found, checking the password
                $pw = $this->Model_login->check_password($email,$password);

                if(!$pw) {
                    
                    $error = 'Password is wrong!';
                    $this->session->set_flashdata('error',$error);
                    redirect(base_url().'login');

                } else {

                    // When email and password both are correct
                    $manager_value_array = array(
                        'manager_id' => $pw['manager_id'],
                        'first_name' => $pw['first_name'],
                        'last_name' => $pw['last_name'],
                        'organization' => $pw['organization'],
                        'email' => $pw['email'],
                        'title' => $pw['title'],
                        'landline' => $pw['landline'],
                        'number1' => $pw['number1'],
                        'cnic' => $pw['cnic'],
                        'password' => $pw['password'],
                        'status' => $pw['status'],
                        'role' => $pw['role'],
                        'code' => $pw['code'],
                        
                    );
                    $this->session->set_userdata($manager_value_array);
                    redirect(base_url().'manager/login/dashboard');
                }
            }
        } else {
            $this->load->view('manager/view_login',$data);    
        }
        
    }

public function get_dashboard_charts_data(){
    
    $data['manager_dashboard_data']=$this->session->userdata();
 //echo "<pre>";print_r($data['manager_dashboard_data']);exit;
   
   $total_employees = $this->Model_login->get_users_count(); 
	//$this->Model_login->assigned_users(); 
	
// gender
$male = $this->Model_login->count_male_from_employees(); 
$female = $this->Model_login->count_female_from_employees(); 


	$work_completed_test = $this->Model_login->work_completed_test(); 
	$assigned_users = $work_completed_test;
	$nayatel_completed_test = $this->Model_login->nayatel_completed_test(); 
	// $this->Model_login->personal_completed_test(); 
	$personal_completed_test = 0;
	$cultural_completed_test = 0;
	// $this->Model_login->incomplte_test();
	$incomplte_test = $assigned_users -  $work_completed_test ;
	// $this->Model_login->pending_test();
	$pending_test = $total_employees -  $assigned_users;
	$not_yet_attempted_work_personality=$total_employees-$work_completed_test;
	
	$incomplete_work_personality_test=$work_completed_test+$not_yet_attempted_work_personality;
	$incomplete_work_personality_test=$total_employees-$incomplete_work_personality_test;
	
		$not_yet_attempted_nayatel_values=$total_employees-$nayatel_completed_test;
			$incomplete_nayatel_values=$nayatel_completed_test+$not_yet_attempted_nayatel_values;
			$incomplete_nayatel_values=	$total_employees-$incomplete_nayatel_values;
			
$not_yet_attempted_personal_values=$total_employees-$personal_completed_test;
	$incomplete_personal_values=$personal_completed_test+$not_yet_attempted_personal_values;
	$incomplete_personal_values=$total_employees-$incomplete_personal_values;
	
$not_yet_attempted_cultural_sacn_values=$total_employees-$cultural_completed_test;
$incomplete_cultural_sacn_values=$cultural_completed_test+$not_yet_attempted_cultural_sacn_values;
$incomplete_cultural_sacn_values=$total_employees-$incomplete_cultural_sacn_values;

	//echo "<pre>";print_r($data);exit;
	
	
$male = $this->Model_login->count_male_from_employees(); 
$female = $this->Model_login->count_female_from_employees(); 
$other_gender = $this->Model_login->count_other_from_employees();
// end gender
// department
$marketing = $this->Model_login->count_marketing_department_from_employees();
$finance = $this->Model_login->count_finance_department_from_employees();
$hr_production = $this->Model_login->count_hr_production_from_employees();
$supply_chain_management = $this->Model_login->count_supply_chain_management_from_employees();
$software_engineering = $this->Model_login->count_software_engineering_from_employees();
$computer_science = $this->Model_login->count_computer_science_from_employees();
$management = $this->Model_login->count_management_from_employees();
$engineering = $this->Model_login->count_engineering_from_employees();
$other_department = $this->Model_login->count_other_department_from_employees();
	
	
// 	age
$first_age_comparison = $this->Model_login->count_first_age_comparison_from_employees();
$second_age_comparison = $this->Model_login->count_second_age_comparison_from_employees();
$third_age_comparison = $this->Model_login->count_third_age_comparison_from_employees();
$fourth_age_comparison = $this->Model_login->count_fourth_age_comparison_from_employees();
	
	
	$data=array(
    'total_employees'=>$total_employees,
     'work_completed_test'=>$work_completed_test,
      'nayatel_completed_test'=>$nayatel_completed_test,
       'personal_completed_test'=>$personal_completed_test,
        
          'cultural_completed_test'=>$cultural_completed_test,
          'male'=>$male,
          'female'=>$female,
          'other_gender'=>$other_gender,
          'marketing'=>$marketing,
           'finance'=>$finance,
          'hr_production'=>$hr_production,
           'supply_chain_management'=>$supply_chain_management,
          'software_engineering'=>$software_engineering,
           'computer_science'=>$computer_science,
          'management'=>$management,
          'engineering'=>$engineering,
          'other_department'=>$other_department,
           'first_age_comparison'=>$first_age_comparison,
          'second_age_comparison'=>$second_age_comparison,
          'third_age_comparison'=>$third_age_comparison,
          'fourth_age_comparison'=>$fourth_age_comparison,
          
          
          'work_completed_test'=>$work_completed_test,
          'nayatel_completed_test'=>$nayatel_completed_test,
           'personal_completed_test'=>$personal_completed_test,
          'cultural_completed_test'=>$cultural_completed_test,
           'not_yet_attempted_work_personality'=>$not_yet_attempted_work_personality,
          'incomplete_work_personality_test'=>$incomplete_work_personality_test,
          'not_yet_attempted_nayatel_values'=>$not_yet_attempted_nayatel_values,
          'incomplete_nayatel_values'=>$incomplete_nayatel_values,
           'not_yet_attempted_personal_values'=>$not_yet_attempted_personal_values,
          'incomplete_personal_values'=>$incomplete_personal_values,
          'not_yet_attempted_cultural_sacn_values'=>$not_yet_attempted_cultural_sacn_values,
          'incomplete_cultural_sacn_values'=>$incomplete_cultural_sacn_values,
          
          
          
    );
   // echo "<pre>";print_r($data);exit;
      echo   $encoded = json_encode($data, JSON_NUMERIC_CHECK);exit;
   
   
    
}

public function dashboard(){

  $data['manager_dashboard_data']=$this->session->userdata();
	//echo "<pre>";print_r($data['manager_dashboard_data']);exit;
	//$name=$values['name'];
	
	$user_type=$this->session->userdata('role');
  if ($user_type != "manager" ){
    redirect(base_url().'login');
      exit;
  }
// 	$total_employees = $this->Model_login->get_users_count(); 
// 	$assigned_users = $this->Model_login->assigned_users(); 
// 	$work_completed_test = $this->Model_login->work_completed_test(); 
// 	$nayatel_completed_test = $this->Model_login->nayatel_completed_test(); 
// 	$personal_completed_test = $this->Model_login->personal_completed_test(); 
// 	$incomplte_test = $this->Model_login->incomplte_test();
// 	$pending_test = $this->Model_login->pending_test();
	
	
	
	$total_employees = $this->Model_login->get_users_count(); 
	//$this->Model_login->assigned_users(); 
	
// gender
// $male = $this->Model_login->count_male_from_employees(); 
// $female = $this->Model_login->count_female_from_employees(); 
// $other_gender = $this->Model_login->count_other_from_employees();
// // end gender
// // department
// $marketing = $this->Model_login->count_marketing_department_from_employees();
// $finance = $this->Model_login->count_finance_department_from_employees();
// $hr_production = $this->Model_login->count_hr_production_from_employees();
// $supply_chain_management = $this->Model_login->count_supply_chain_management_from_employees();
// $software_engineering = $this->Model_login->count_software_engineering_from_employees();
// $computer_science = $this->Model_login->count_computer_science_from_employees();
// $management = $this->Model_login->count_management_from_employees();
// $engineering = $this->Model_login->count_engineering_from_employees();
// $other_department = $this->Model_login->count_other_department_from_employees();
// end department
	//echo "<pre>";print_r($total_employees);exit;

// age
// $first_age_comparison = $this->Model_login->count_first_age_comparison_from_employees();
// $second_age_comparison = $this->Model_login->count_second_age_comparison_from_employees();
// $third_age_comparison = $this->Model_login->count_third_age_comparison_from_employees();
// $fourth_age_comparison = $this->Model_login->count_fourth_age_comparison_from_employees();
// // end age


	$work_completed_test = $this->Model_login->work_completed_test(); 
	$assigned_users = $work_completed_test;
	$nayatel_completed_test = $this->Model_login->nayatel_completed_test(); 
	// $this->Model_login->personal_completed_test(); 
	$personal_completed_test = 0;
	$cultural_completed_test = 0;
	// $this->Model_login->incomplte_test();
	$incomplte_test = $assigned_users -  $work_completed_test ;
	// $this->Model_login->pending_test();
	$pending_test = $total_employees -  $assigned_users;
	$not_yet_attempted_work_personality=$total_employees-$work_completed_test;
	
	$incomplete_work_personality_test=$work_completed_test+$not_yet_attempted_work_personality;
	$incomplete_work_personality_test=$total_employees-$incomplete_work_personality_test;
	
		$not_yet_attempted_nayatel_values=$total_employees-$nayatel_completed_test;
			$incomplete_nayatel_values=$nayatel_completed_test+$not_yet_attempted_nayatel_values;
			$incomplete_nayatel_values=	$total_employees-$incomplete_nayatel_values;
			
$not_yet_attempted_personal_values=$total_employees-$personal_completed_test;
	$incomplete_personal_values=$personal_completed_test+$not_yet_attempted_personal_values;
	$incomplete_personal_values=$total_employees-$incomplete_personal_values;
	
$not_yet_attempted_cultural_sacn_values=$total_employees-$cultural_completed_test;
$incomplete_cultural_sacn_values=$cultural_completed_test+$not_yet_attempted_cultural_sacn_values;
$incomplete_cultural_sacn_values=$total_employees-$incomplete_cultural_sacn_values;

// 	echo "<pre>";print_r($not_yet_attempted_personal_values);exit;

	
	
// Total Employees
// 1.
// completed work
// not yet attempted work
// incomplete work

// 2.
// completed culture 
// not yet attempted culture
// incomplete culture test

// 3.
// completed nayatel
// not yet attempted nayatel
// incomplete nayatel

// 4.
// completed personal
// not yet attempted personal
// incomplete personal	
	
//	echo "<pre>";print_r($total_employees);exit;
	
  $this->load->view('manager/dashboard',$data);
  $this->load->view('manager/dashboard_charts',$data);
  // $this->load->view('manager/manager_dashboard_header');
  // $this->load->view('manager/manager_main_content_dashboard');
	// $this->load->view('manager/manager_dashboard_footer');

}

public function add_employees(){
    
   $data['manager_dashboard_data']=$this->session->userdata();
     $email=$this->session->userdata('email');
    
    $data['users'] = $this->Model_login->get_users();
     $data['count'] = $this->Model_login->get_users_count();
    //echo "<pre>";print_r($data['count']);exit;
  // left side bar and top bar
  $data['manager_dashboard_data']=$this->session->userdata();
  $this->load->view('manager/manager_dashboard_header');
	$this->load->view('manager/manager_dashboard_footer');


  $this->load->view('manager/dashboard2',$data);
//   add employees
$this->load->view('manager/add_employees');
  // Charts
  $this->load->view('manager/share_reports_header');
 // $this->load->view('manager/share_reports',$data);
  $this->load->view('manager/share_reports_footer'); 
    
}

//active_employees
public function active_employees(){
         $data['code'] = $this->input->get('code');
        
   
        
        $this->load->view('view_update_password',$data);
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
    	
    	$update = $this->Model_login->updatestatus($data,$id) ;
    //	echo "<pre>";print_r($update);exit;
    }
    if(!empty($update)){
        $success = 'You have successfully update your password.';
		$this->session->set_flashdata('success',$success);
       redirect(site_url().'/login'); 
        
    }
    }


	public function add_employees_data()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
		$this->form_validation->set_rules('designation', 'designation', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		
		if ($this->form_validation->run() == FALSE) {
			$json  = array(
			'success'	=> false,
			'message'	=> validation_errors(),
			);
			echo json_encode($json);
		} else {

			$checkemail 	= $this->Model_login->check_email($this->input->post('email'));
		//	echo "<pre>";print_r($checkemail);exit;
			if (!empty($checkemail)) {
				$json  = array(
				'success'	=> false,
				'message'	=> '<p>Email Already exists</p>',
				);
				$error = '<p>Email Already exists</p>';
                $this->session->set_flashdata('error',$error);
                //redirect(base_url().'/manager/login/dashboard');
                
				//redirect(base_url().'/manager/login/add_employees');
				echo json_encode($json);
			} else {
				$code = rand(1000,9999);
				$role_id = $this->input->post('role_id');
				
				$data = array(
				'first_name'		=> $this->input->post('first_name'),
				'last_name'		=> $this->input->post('last_name'),
				'designation'		=> $this->input->post('designation'),
				'email'			=> $this->input->post('email'),
				'password'		=> md5($this->input->post('password')),
				'status'		=> 'disable',
				'role'		=> 'employee',
				'code'			=> $code,
				
				);
				$inserdata	= $this->Model_login->add_customer($data);
				$customerid = $this->db->insert_id();
				
				if ($inserdata > 0) {
					$this->load->library('email');
					$config['wordwrap'] = TRUE;
					$config['mailtype'] = 'html';

					$this->email->initialize($config);
					$this->email->from('uzair.hussain7@gmail.com', 'Nayatel-Employee-Confirmation-Email');
					$this->email->to($this->input->post('email'));
					$this->email->subject('Nayatel-Confirmation-Email | Confirmation Email');
					$messages = '
<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#fff" style="font-family:Open Sans,Arial,Helvetica,sans-serif;border-collapse:collapse!important;background:#fff!important;border-collapse:collapse;background:#fff">
  <tbody>
    <tr>
      <td align="center" valign="top" bgcolor="#fff" style="background:#fff!important;background:#fff">
        <img src="'.base_url().'public/uploads/logo.jpg">
      </td>
    </tr>
    <tr>
      <td align="center" valign="top" bgcolor="#ededed">
        <table width="700" class="m_-8985627821087644018mobilewrapper" border="0" cellspacing="0" cellpadding="0" align="center" style="border-collapse:collapse">
          <tbody>
            <tr>
              <td align="center" valign="top">
                <table width="600" class="m_-8985627821087644018mobilewrapper" border="0" cellspacing="0" cellpadding="0" align="center" style="border-collapse:collapse">
                  <tbody>
                    <tr>
                      <td height="20" align="center" valign="top" style="height:20px!important;line-height:10px!important;font-size:20px!important;color:#ededed!important;height:10px;line-height:20px;font-size:20px;color:#ededed">.</td>
                    </tr>
                    <tr>
                      <td align="center" valign="top">
                        <table width="600" class="m_-8985627821087644018mobilewrapper" border="0" cellspacing="0" cellpadding="0" align="center" style="border-collapse:collapse">
                          <tbody>
                            <tr>
                              <td align="center" valign="top">
                                <table width="600" class="m_-8985627821087644018mobilewrapper" bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0" align="center" style="border-collapse:collapse">
                                  <tbody></tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td align="center" valign="top">
                        <table width="800" class="m_-8985627821087644018mobilewrapper" border="0" cellspacing="0" cellpadding="0" align="center" style="border-collapse:collapse">
                          <tbody>
                            <tr>
                              <td align="center" valign="top" bgcolor="#ffffff" style="background:#ffffff">
                                <table width="600" class="m_-8985627821087644018mobilewrapper" border="0" cellspacing="0" cellpadding="0" align="center" style="border-collapse:collapse">
                                  <tbody>
                                    <tr>
                                      <td width="" align="center" valign="top">&nbsp;</td>
                                      <td align="center" valign="top">&nbsp;</td>
                                    </tr>
                                    <tr>

                                      <td align="center" valign="top" style="font-size:24px;font-family:Open Sans,Arial,Helvetica,sans-serif;color:#1c2c3a;text-align:center" colspan="2">Verify Your account click on this and update the password for the first time.<a href="'.base_url().'/login/active_employees/?code='.$code.'">link</a></td>

                                    </tr>
';
					$messages .='
                                    <tr>
                                      <td align="center" valign="top">&nbsp;</td>
                                      <td  align="center" valign="top">&nbsp;</td>
                                    </tr>

                                  </tbody>
                                </table>
                              </td>
                            </tr>
                            <tr>
                              <td align="center" valign="top" bgcolor="#ffffff" style="border-radius:0 0 2px 2px">
                                <table width="600" class="m_-8985627821087644018mobilewrapper" border="0" cellspacing="0" cellpadding="0" align="center" style="border-collapse:collapse">
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>


';




					$messages .= '
                  </tbody>
                </table>
              </td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
  </tbody>
</table> ';
					$this->email->message($messages);

					$this->email->send();
					//$this->response($message, 200);
					$json  = array(
					'success'	=> true,
					'message'	=> 'You have successfully register.Plesae complete your profile as well as update the password for the first time.',
					
					);
					echo json_encode($json);
				} else {
					$json  = array(
					'success'	=> false,
					'message'	=> 'Some thig went wroong',
					);
					echo json_encode($json);

				}
			}

		}
	}


public function register(){

    $data['setting'] = $this->Model_common->all_setting();
    $data['sliders'] = $this->Model_common->all_slider('register');
    $data['page_home'] = $this->Model_common->all_page_home();
    $this->load->view('manager/view_header',$data);
    $this->load->view('manager/manager_register',$data);
    $this->load->view('manager/view_footer',$data);

   // $this->load->view('manager/manager_register');
}

public function get_demo_chart_data(){
  // $email=get_demo_chart_email($email);
     //echo "<pre>";print_r($id);exit;
     $data['manager_dashboard_data']=$this->session->userdata();
  //echo "<pre>";print_r($data['manager_dashboard_data']);exit;
  
 // $email=$this->session->userdata('email');
     //echo "<pre>";print_r($email);exit;
   // $id=  $this->uri->segment(4); 
    // echo "<pre>";print_r($id);exit;
  // $email = $this->Model_login->get_user_email($id);
    // $email=$email['email'];
  //$email=$this->session->userdata();
  //echo "<pre>";print_r($email);exit;
       // $email='uzair.hussain7@gmail.com';
       //$email=$this->session->has_userdata('email_relative_to_reports');
        $email = $this -> session -> userdata('email_relative_to_reports');

       //$email=$this->session->$email_relative_to_reports;
      // echo "<pre>";print_r($email);exit;
        $data = $this->Model_login->get_demo_charts_data($email); 
        // passing values
        
    
    
    // $Energy_and_drive=$data['Energy_and_drive'];
    // $Work_style= $data['Work_style'];
    // $Working_with_others=$data['Working_with_others'];
    // $Dealing_with_pressure_and_stress= $data['Dealing_with_pressure_and_stress'];
    // $Problem_solving_style=$data['Problem_solving_style'];
    //   $data['description1'] = $this->Model_login->get_description_data1($Energy_and_drive); 
    //   $data['description2'] = $this->Model_login->get_description_data1($Energy_and_drive); 
    //     $data['description3'] = $this->Model_login->get_description_data1($Energy_and_drive); 
    //      $data['description4'] = $this->Model_login->get_description_data1($Energy_and_drive); 
    //       $data['description5'] = $this->Model_login->get_description_data1($Energy_and_drive); 
    $Energy_and_drive=$data[0]['Energy_and_drive'];
    $Work_style=$data[0]['Work_style'];
    $Working_with_others=$data[0]['Working_with_others'];
    $Dealing_with_pressure_and_stress=$data[0]['Dealing_with_pressure_and_stress'];
    $Problem_solving_style=$data[0]['Problem_solving_style'];
    
    // description
    $data['Energy_and_drive_data']= $this->Model_login->get_Energy_and_drive_data($Energy_and_drive);
    //  $Energy_and_drive_data=$data['Energy_and_drive_data'];
      $data['Work_style_data']= $this->Model_login->get_Work_style_data($Work_style);
      //$Work_style_data=$data['Work_style_data'];
      
       $data['Working_with_others_data']= $this->Model_login->Working_with_others_data($Working_with_others);
      //  $Working_with_others_data=$data['Working_with_others_data'];
        
        $data['Dealing_with_pressure_and_stress_data']= $this->Model_login->Dealing_with_pressure_and_stress_data($Dealing_with_pressure_and_stress);
        // $Dealing_with_pressure_and_stress_data=$data['Dealing_with_pressure_and_stress_data'];
      
       $data['Problem_solving_style_data']= $this->Model_login->Problem_solving_style_data($Problem_solving_style);
   // $Problem_solving_style_data=$data['Problem_solving_style_data'];
     $Ambition=$data[0]['Ambition'];
    $Initiative=$data[0]['Initiative'];
    $Flexibility=$data[0]['Flexibility'];
    $Energy=$data[0]['Energy'];
    $Leadership=$data[0]['Leadership'];
    
    $Multi_tasking=$data[0]['Multi_tasking'];
     $Persuasion=$data[0]['Persuasion'];
    $Social_Confidence=$data[0]['Social_Confidence'];
    $Persistence=$data[0]['Persistence'];
    $Attention_to_detail=$data[0]['Attention_to_detail'];
    
    $Rule_Following=$data[0]['Rule_Following'];
    $Dependability=$data[0]['Dependability'];
    $Planning=$data[0]['Planning'];
    $Team_Work=$data[0]['Team_Work'];
    $Concern_for_others=$data[0]['Concern_for_others'];
    
    $Outgoing=$data[0]['Outgoing'];
    $Democratic=$data[0]['Democratic'];
    $Self_control=$data[0]['Self_control'];
    $Stress_Tolerance=$data[0]['Stress_Tolerance'];
    $Innovation=$data[0]['Innovation'];
    $Analytical_Thinking=$data[0]['Analytical_Thinking'];
    $data=array(
         'Energy_and_drive'=>$Energy_and_drive,
     'Work_style'=>$Work_style,
      'Working_with_others'=>$Working_with_others,
       'Dealing_with_pressure_and_stress'=>$Dealing_with_pressure_and_stress,
        'Problem_solving_style'=>$Problem_solving_style,
         'Ambition'=>$Ambition,
          'Initiative'=>$Initiative,
    
   
    
    'Flexibility'=>$Flexibility,
     'Energy'=>$Energy,
      'Leadership'=>$Leadership,
       'Multi_tasking'=>$Multi_tasking,
        'Persuasion'=>$Persuasion,
         'Social_Confidence'=>$Social_Confidence,
          'Persistence'=>$Persistence,
    
    'Attention_to_detail'=>$Attention_to_detail,
     'Rule_Following'=>$Rule_Following,
      'Dependability'=>$Dependability,
       'Planning'=>$Planning,
        'Team_Work'=>$Team_Work,
         'Concern_for_others'=>$Concern_for_others,
          'Outgoing'=>$Outgoing,
          
          'Democratic'=>$Democratic,
     'Self_control'=>$Self_control,
      'Stress_Tolerance'=>$Stress_Tolerance,
       'Innovation'=>$Innovation,
        'Analytical_Thinking'=>$Analytical_Thinking,
        
     );
      echo   $encoded = json_encode($data, JSON_NUMERIC_CHECK);exit;
      $this->load->view('manager/user_reports',$data);exit;
        //$this->load->view('manager/user_reports',$data);exit;
       //echo "<pre>";print_r($data);exit;
        //         //data to json 
 
        // $responce->cols[] = array( 
        //     "id" => "", 
        //     "label" => "Topping", 
        //     "pattern" => "", 
        //     "type" => "string" 
        // ); 
        // $responce->cols[] = array( 
        //     "id" => "", 
        //     "label" => "Total", 
        //     "pattern" => "", 
        //     "type" => "number" 
        // ); 
        // $response = {};
         
             //echo "empty";exit;
        $response = new StdClass;
        foreach($data as $key => $value) {
            // echo "<pre>";print_r($key." ".$value);exit;
            
            $response->data = $value;
        // }
            // { 
            
            // $response->label([
            //     'label' => ['1.Energy and drive', 'Ambition', 'Initiative', 'Flexibility', 'Energy', 'Leadership','Multi-tasking','Persuasion','Social Confidence','2.Work style','Persistence','Attention to detail','Rule-Following','Dependability','planning','3.Working With Others','Team Work','concern for others','Outgoing','democratic','4.Dealing with pressure and Stress','Self-control','stress tolerance','5.Problem Solving Style','innovation','Analytical Thinking'],
            //     'data' => (int)$cd['Energy_and_drive'],(int)$cd['Energy_and_drive'],(int)$cd['Ambition'],(int)$cd['Initiative'],(int)$cd['Flexibility'],(int)$cd['Energy'],(int)$cd['Leadership'],(int)$cd['Multi_tasking'],(int)$cd['Persuasion'],(int)$cd['Social_Confidence'],(int)$cd['Work_style'],(int)$cd['Persistence'],(int)$cd['Attention_to_detail'],(int)$cd['Rule_Following'],(int)$cd['Dependability'],(int)$cd['Planning'],(int)$cd['Working_with_others'],(int)$cd['Team_Work'],(int)$cd['Concern_for_others'],(int)$cd['Outgoing'],(int)$cd['Democratic'],(int)$cd['Dealing_with_pressure_and_stress'],(int)$cd['Self_control'],(int)$cd['Stress_Tolerance'],(int)$cd['Problem_solving_style'],(int)$cd['Innovation'],(int)$cd['Analytical_Thinking']
            // ]);
            // $responce->data = array( 
            //     array( 
            //         "lable" => ['1.Energy and drive', 'Ambition', 'Initiative', 'Flexibility', 'Energy', 'Leadership','Multi-tasking','Persuasion','Social Confidence','2.Work style','Persistence','Attention to detail','Rule-Following','Dependability','planning','3.Working With Others','Team Work','concern for others','Outgoing','democratic','4.Dealing with pressure and Stress','Self-control','stress tolerance','5.Problem Solving Style','innovation','Analytical Thinking'],
                    
            //     ) , 
            //     array( 
            //         "data" => (int)$cd['Energy_and_drive'],(int)$cd['Energy_and_drive'],(int)$cd['Ambition'],(int)$cd['Initiative'],(int)$cd['Flexibility'],(int)$cd['Energy'],(int)$cd['Leadership'],(int)$cd['Multi_tasking'],(int)$cd['Persuasion'],(int)$cd['Social_Confidence'],(int)$cd['Work_style'],(int)$cd['Persistence'],(int)$cd['Attention_to_detail'],(int)$cd['Rule_Following'],(int)$cd['Dependability'],(int)$cd['Planning'],(int)$cd['Working_with_others'],(int)$cd['Team_Work'],(int)$cd['Concern_for_others'],(int)$cd['Outgoing'],(int)$cd['Democratic'],(int)$cd['Dealing_with_pressure_and_stress'],(int)$cd['Self_control'],(int)$cd['Stress_Tolerance'],(int)$cd['Problem_solving_style'],(int)$cd['Innovation'],(int)$cd['Analytical_Thinking'],
                    
            //     ) 
            // ); 
            // } 
             $this->load->view('manager/user_reports',$data);exit;
         echo   $encoded = json_encode($data, JSON_NUMERIC_CHECK);exit;
}
exit;
         echo json_encode($response->data,false);exit;
        // echo json_encode($responce->data); 
        
    
    
}
// public function get_demo_chart_email($email){
//  return $this->get_demo_chart_data($email);
// }

public function user_reports(){
    $id=  $this->uri->segment(4); 
    //echo $id;exit;
   
     $value['manager_dashboard_data']=$this->session->userdata();
    // echo "<pre>";print_r($data['manager_dashboard_data']);exit;
    //  $email=$this->session->userdata('email');
   // $Energy_and_drive=60.8;
   //$description1 = $this->Model_login->get_description_data1($Energy_and_drive); 
    //   // $email='uzair.hussain7@gmail.com';
     $email = $this->Model_login->get_user_email($id);
      $this->session->set_userdata($email);
     $email=$email['email'];
      //$this->get_demo_chart_email($email);
    //   description module
       //echo "<pre>";print_r($email);exit;
     $data = $this->Model_login->get_demo_charts_data($email); 
     //echo "<pre>";print_r($data);exit;
     $Energy_and_drive=$data[0]['Energy_and_drive'];
     $Work_style=$data[0]['Work_style'];
     $Working_with_others=$data[0]['Working_with_others'];
     $Dealing_with_pressure_and_stress=$data[0]['Dealing_with_pressure_and_stress'];
       $Problem_solving_style=$data[0]['Problem_solving_style'];
       
        $Ambition=$data[0]['Ambition'];
        $Initiative=$data[0]['Initiative'];
        $Flexibility=$data[0]['Flexibility'];
        $Energy=$data[0]['Energy'];
        $Leadership=$data[0]['Leadership'];
        $Multi_tasking=$data[0]['Multi_tasking'];
        $Persuasion=$data[0]['Persuasion'];
        $Social_Confidence=$data[0]['Social_Confidence'];
        $Persistence=$data[0]['Persistence'];
        $Attention_to_detail=$data[0]['Attention_to_detail'];
        
        $Rule_Following=$data[0]['Rule_Following'];
        $Dependability=$data[0]['Dependability'];
        $Planning=$data[0]['Planning'];
        $Team_Work=$data[0]['Team_Work'];
        $Concern_for_others=$data[0]['Concern_for_others'];
        $Outgoing=$data[0]['Outgoing'];
        $Democratic=$data[0]['Democratic'];
        $Self_control=$data[0]['Self_control'];
        $Stress_Tolerance=$data[0]['Stress_Tolerance'];
        $Innovation=$data[0]['Innovation'];
        $Analytical_Thinking=$data[0]['Analytical_Thinking'];
                
       
     $data['Energy_and_drive_data']= $this->Model_login->get_Energy_and_drive_data($Energy_and_drive);
     
      $data['Work_style_data']= $this->Model_login->get_Work_style_data($Work_style);
      
       $data['Working_with_others_data']= $this->Model_login->Working_with_others_data($Working_with_others);
       
        $data['Dealing_with_pressure_and_stress_data']= $this->Model_login->Dealing_with_pressure_and_stress_data($Dealing_with_pressure_and_stress);
      
       $data['Problem_solving_style_data']= $this->Model_login->Problem_solving_style_data($Problem_solving_style);
      
       //echo "<pre>";print_r($data['Energy_and_drive_data']);echo "<br>";exit;
        //  echo "<pre>";print_r($Work_style);echo "<br>";
        //   echo "<pre>";print_r($Working_with_others);echo "<br>";
        //   echo "<pre>";print_r($Dealing_with_pressure_and_stress);echo "<br>";
        //     echo "<pre>";print_r( $data['user_detail']);echo "<br>";exit;
     $data['user_detail']= $this->Model_login->get_relative_data($email);
     		$data['work_record'] = $this->Model_category->check_record_work_personality_index($email);
     $data['personal_record'] = '';
   //  $this->Model_category->check_record_personal_values_assessment($email);
     		
    $data['personality_assessment_record'] = '';
    // $this->Model_category->check_record_personality_assessment_questions($email);
     		
         //echo "<pre>";print_r( $data['work_record']);echo "<br>";exit;
     $email_relative_to_reports=$email;
    // $_SESSION['$email_relative_to_reports'];
    //$this->session->set_userdata($email_relative_to_reports);
    $this->session->set_userdata('email_relative_to_reports', $email_relative_to_reports);

     //$data = $this->Model_login->get_demo_charts_data($email); 
                            
      // echo "<pre>";print_r( $data['Analytical_Thinking']);exit;
     //$data = $this->Model_login->get_demo_charts_data($email); 
     //echo "<pre>";print_r($data);exit;
     //echo "<pre>";print_r($email);exit;
       
        //echo "<pre>";print_r($data['users']);exit;
  $this->load->view('manager/manager_dashboard_header');
	$this->load->view('manager/manager_dashboard_footer');
//$data['dimensions'] = $this->Model_category->get_employees();
//echo "<pre>";print_r($data['dimensions'] );exit;
  $this->load->view('manager/dashboard2',$value);
  // manage-users

 
 //$this->get_demo_chart_data();
 
		//now pass the data//
		 $data['total'] = $this->Model_login->get_users_count();
   // echo "<pre>";print_r($data['total']);exit;
	$data['users'] = $this->Model_login->get_demo_charts_data($email);
//	echo "<pre>";print_r($data['users']);exit;
    //     $data['ambition'] = $this->Model_login->get_ambition_data($email);
    $data['categories'] = $this->Model_login->get_category_wise_description($email);
         
$this->load->view('manager/manage-users-header');
  $this->load->view('manager/user_reports',$data);
  $this->load->view('manager/manage-users-footer');
        
//      $data['manager_dashboard_data']=$this->session->userdata();
//   $this->load->view('manager/manager_dashboard_header');
// 	$this->load->view('manager/manager_dashboard_footer');


//   $this->load->view('manager/dashboard2',$data);
//   // Charts
//   $this->load->view('manager/reports_header');
//   $this->load->view('manager/user_reports',$id);
//   $this->load->view('manager/reports_footer');
    
}

public function user_id_wise_reports(){
    
  $id=  $this->uri->segment(4); 
   // echo $id;exit;
    
     $data['manager_dashboard_data']=$this->session->userdata();
     $email=$this->session->userdata('email');
  
       // $email='uzair.hussain7@gmail.com';
        $users = $this->Model_login->get_demo_charts_data($email);
        $work_attributes = $this->Model_login->get_work_score_attributes();
        //  $data['categories'] = $this->Model_login->get_category_wise_description($email);
        //echo "<pre>";print_r($data['users']);exit;
        $data['users']=json_encode($users);
        $data['work_attributes']=json_encode($work_attributes);
  $this->load->view('manager/manager_dashboard_header');
	$this->load->view('manager/manager_dashboard_footer');
//$data['dimensions'] = $this->Model_category->get_employees();
//echo "<pre>";print_r($data['dimensions'] );exit;
  $this->load->view('manager/dashboard2',$data);
  // manage-users
 $this->load->view('manager/manage-users-header');
  $this->load->view('manager/user_reports',$data);
  $this->load->view('manager/manage-users-footer');   
    
}

public function get_user_chart_data(){
    
    $id=$this->uri->segment(4);
    echo "<pre>";print_r($id);exit;
    $email = $this->Model_login->get_email($id);
    echo "<pre>";print_r($email);exit;
   // echo $id;
    $data = $this->Model_login->get_user_charts_data($email); 
        //echo "<pre>";print_r($data);exit;
        //         //data to json 
 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Topping", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Total", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        foreach($data as $cd) 
            { 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->Ambition", 
                   
                    "f" => null 
                ) , 
                array( 
                    "v" => (int)$cd->Initiative, 
                    "f" => null 
                ) 
            ); 
            } 
 
        echo json_encode($responce); 
    
}



function get_google_chart_data() 
{ 
     $data['manager_dashboard_data']=$this->session->userdata();
  //echo "<pre>";print_r($data['manager_dashboard_data']);exit;
  
  $email=$this->session->userdata('email');
  
       // $email='uzair.hussain7@gmail.com';
        $data = $this->Model_login->get_charts_data($email); 
        //echo "<pre>";print_r($data);exit;
        //         //data to json 
 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Topping", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Total", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        foreach($data as $cd) 
            { 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->cultural_scan", 
                   
                    "f" => null 
                ) , 
                array( 
                    "v" => (int)$cd->value, 
                    "f" => null 
                ) 
            ); 
            } 
 
        echo json_encode($responce); 
        } 


public function get_nayatel_organization_report(){
    
     $data['manager_dashboard_data']=$this->session->userdata();
 //echo "<pre>";print_r($data['manager_dashboard_data']);exit;
  
  $email=$this->session->userdata('email');
   //echo "<pre>";print_r($email);exit;
        //$email='uzair.hussain7@gmail.com';
        $data = $this->Model_login->get_nayatel_organization_report($email); 
    $Honesty=$data['Honesty'];
    $Excellence=$data['Excellence'];
     $Service=$data['Service'];
      $Respect=$data['Respect'];
       $Learning=$data['Learning'];
        $Innovation=$data['Innovation'];
         $Simplicity=$data['Simplicity'];
         
          
   $Honesty=round($Honesty, 1);
    $Excellence=round($Excellence, 1);
       $Service=round($Service, 1);
      $Respect=round($Respect, 1);
       $Learning=round($Learning, 1);
        $Innovation=round($Innovation, 1);
         $Simplicity=round($Simplicity, 1);
         
         $data=array(
    'Honesty'=>$Honesty,
     'Excellence'=>$Excellence,
      'Service'=>$Service,
       'Respect'=>$Respect,
        'Learning'=>$Learning,
         'Innovation'=>$Innovation,
          'Simplicity'=>$Simplicity,
    
    
    );
    // echo "<pre>";print_r($data);exit;
      echo   $encoded = json_encode($data, JSON_NUMERIC_CHECK);exit;
    // echo "<pre>";print_r($data);exit;
        $response = new StdClass;
        foreach($data as $key => $value) {
            // echo "<pre>";print_r($key." ".$value);exit;
            
            $response->data = $value;
       
            } 
            
             echo   $encoded = json_encode($Honesty, JSON_NUMERIC_CHECK);
              echo   $encoded = json_encode($Excellence, JSON_NUMERIC_CHECK);
               echo   $encoded = json_encode($Service, JSON_NUMERIC_CHECK);
                echo   $encoded = json_encode($Respect, JSON_NUMERIC_CHECK);
                 echo   $encoded = json_encode($Learning, JSON_NUMERIC_CHECK);
                  echo   $encoded = json_encode($Innovation, JSON_NUMERIC_CHECK);
                   echo   $encoded = json_encode($Simplicity, JSON_NUMERIC_CHECK);exit;
                    echo   $encoded = json_encode($response->Honesty, JSON_NUMERIC_CHECK);exit;

         //echo json_encode($response->data,false);exit;
            
  //echo json_encode($response->data,false);exit;
        // echo json_encode($responce->data); 
        
    
    
}
public function reports(){
    
    $data['manager_dashboard_data']=$this->session->userdata();
     $email=$this->session->userdata('email');
    
    $nayatel_organization_report = $this->Model_login->get_nayatel_organization_report($email);
  
   $Honesty=$nayatel_organization_report['Honesty'];
   $data['Honesty']=round($Honesty, 1);
    $Excellence=$nayatel_organization_report['Excellence'];
    $data['Excellence']=round($Excellence, 1);
     $Service=$nayatel_organization_report['Service'];
       $data['Service']=round($Service, 1);
      $Respect=$nayatel_organization_report['Respect'];
      $data['Respect']=round($Respect, 1);
       $Learning=$nayatel_organization_report['Learning'];
       $data['Learning']=round($Learning, 1);
        $Innovation=$nayatel_organization_report['Innovation'];
        $data['Innovation']=round($Innovation, 1);
         $Simplicity=$nayatel_organization_report['Simplicity'];
         $data['Simplicity']=round($Simplicity, 1);
   
//     echo "<pre>";print_r($Honesty);echo "<br>";
//     echo "<pre>";print_r( $data['Excellence']);echo "<br>";
//     echo "<pre>";print_r($Service);echo "<br>";
//     echo "<pre>";print_r($Respect);echo "<br>";
//     echo "<pre>";print_r($Learning);echo "<br>";
//     echo "<pre>";print_r($Innovation);echo "<br>";
//     echo "<pre>";print_r($Simplicity);echo "<br>";
//   exit;
  // left side bar and top bar
  
  
  $data['total'] = $this->Model_login->get_users_count();
  $data['manager_dashboard_data']=$this->session->userdata();
  $this->load->view('manager/manager_dashboard_header');
	$this->load->view('manager/manager_dashboard_footer');


  $this->load->view('manager/dashboard2',$data);
  // Charts
  $this->load->view('manager/reports_header');
  $this->load->view('manager/nayatel_organization_report',$data);
  $this->load->view('manager/reports_footer');
  
}

public function share_pdf_reports(){
   //$reports= $this->user_reports();
   //echo "<pre>";print_r($reports);exit;
    $this->load->library('form_validation');
     $email=$this->input->post('email');
     $sending_email=$this->input->post('sending_email');
     $message=$this->input->post('message');
    

		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('sending_email', 'sending_email', 'required');
		$this->form_validation->set_rules('message', 'message', 'required');
    
    
     $data['manager_dashboard_data']=$this->session->userdata();
  
    //  $email = $this->Model_login->get_user_email($id);
    //  $email=$email['email'];
       // $data['users'] = $this->Model_login->get_demo_charts_data($email);
        
    //     $data['ambition'] = $this->Model_login->get_ambition_data($email);
        // $data['categories'] = $this->Model_login->get_category_wise_description($email);
       //  echo "<pre>";print_r($data['categories'] );exit;
        //echo "<pre>";print_r($data['users']);exit;
    $this->load->view('manager/manager_dashboard_header');
    $this->load->view('manager/dashboard2',$data);
	$this->load->view('manager/manager_dashboard_footer');

//  require_once('application/libraries/mpdf/vendor/autoload.php');
//  $mpdf = new \Mpdf\Mpdf();
//  $data['categories'] = $this->Model_login->get_category_wise_description($email);
// 	$data['users'] = $this->Model_login->get_demo_charts_data($email);
// 	$html =  $this->load->view('manager/share_user_reports',$data, true); //load the pdf.php by passing our data and get all data in $html varriable.
        //$mpdf->WriteHTML($html);
        //$mpdf->Output();
        
        //  $email_data= array();
      
       
       
       // $mpdf->Output();exit;
 
if ($this->form_validation->run() == FALSE)
		{
			$json  = array(
							  		'success'	=> false,
							  		'message'	=> validation_errors(),
                );
                $error = validation_errors();
                $this->session->set_flashdata('error',$error);
                redirect(base_url().'/manager/login/dashboard');
				//echo json_encode($json);
		}
		else
		{
        $date_created = date("Y-m-d H:i:s");
		//	$checkemail 	= $this->Model_login->check_email($this->input->post('email'));
           // echo "<pre>";print_r($checkemail);exit;
//             if($checkemail)
// 			{
// 				$json  = array(
// 							  		'success'	=> false,
// 							  		'message'	=> '<p>Email Already exists</p>',
//                 );
//                 $error = 'Email Already exists';
//                 $this->session->set_flashdata('error',$error);
//                 redirect(base_url().'login');
// 			//	echo json_encode($json);
// 			}else
// 			{
			//	$salt = 'b7r4';
			//	$code = rand(1000,9999);
			//	$password =  hash('sha256', $salt . ( hash('sha256',$this->input->post('password'))));
			//	$confirm_password=$password;
				$data = array(
								'email'		=> $this->input->post('email'),
							 	'sending_email'		=> $this->input->post('sending_email'),
                                 'message'			=> $this->input->post('message'),
                                'date_created'			=> $date_created,
							 );
							// echo "<pre>";print_r($data);exit;
				$inserdata	= $this->Model_login->share_reports($data);
				$share_reports_id = $this->db->insert_id();
				 
			//	$postdata = array('customer_id' => $customerid);
			//	$updatedetails = $this->db->insert('tbl_customer_details',$postdata);
				 //echo "<pre>";print_r($updatedetails);exit;
				if($inserdata > 0)
				{
require_once('application/libraries/mpdf/vendor/autoload.php');
$mpdf = new \Mpdf\Mpdf();
$data['categories'] = $this->Model_login->get_category_wise_description($email);
$data['users'] = $this->Model_login->get_demo_charts_data($email);
	
$html1= $this->load->view('manager/manager_dashboard_header','',TRUE);
$html2=	$this->load->view('manager/manager_dashboard_footer','',TRUE);
// $data['users'] = $this->Model_login->get_demo_charts_data($email);
// $data['categories'] = $this->Model_login->get_category_wise_description($email);
$html3=$this->load->view('manager/manage-users-header','',TRUE);
$html4=  $this->load->view('manager/user_reports',$data,TRUE);
$html5= $this->load->view('manager/manage-users-footer','',TRUE);
	
//$html6 =  $this->load->view('manager/share_user_reports',$data, true); //load the pdf.php by passing our data and get all data in $html varriable.


        $mpdf->WriteHTML($html1);
        $mpdf->WriteHTML($html2);
        $mpdf->WriteHTML($html3);
        $mpdf->WriteHTML($html4);
        $mpdf->WriteHTML($html5);
       // $mpdf->WriteHTML($html6);
        $mpdf->Output('uploads/pdf/User_Reports.pdf','F');
        
        
        
    

				    
					$this->load->library('email');
					
					$config['charset'] = 'utf-8';
                    $config['wordwrap'] = TRUE;
                    $config['mailtype'] = 'html';
				// 	$config['wordwrap'] = TRUE;
				// 	$config['mailtype'] = 'html';
					 //$email_data= $mpdf->WriteHTML($html);
					   //  $this->email->string_attach($email_data, 'base64.pdf', 'application/pdf');
                    // $pdfFilePath = 'uploads/pdf/file.pdf';
                    // $this->email->attach($pdfFilePath);
                    $this->email->attach('uploads/pdf/User_Reports.pdf');
                    // $this->email->set_header('MIME-Version', '1.0; charset=utf-8');

                    // $this->email->set_header('Content-type', 'text/html');
					$this->email->initialize($config);
					$this->email->from($email, 'Nayatel-Share-Reports');
					$this->email->to($this->input->post('sending_email'));  
					$this->email->subject('Nayatel-Share-Reports | Share-Reports');
					
				    $email=$this->input->post('email');
				         
        
        

			
//	$this->email->send();
//	$this->email->message();
	
//exit;
//$body = $this->load->view('manager/user_reports',$data,TRUE);
//$messages = $this->load->view('manager/user_reports', $data, true);      

//$messages = file_get_contents('manager/login/user_reports()');

				// 	$messages = $body;
//$messages .='';
$message= $this->load->view('manager/manager_dashboard_header','',TRUE);

$message=	$this->load->view('manager/manager_dashboard_footer','',TRUE);
$data['users'] = $this->Model_login->get_demo_charts_data($email);
$data['categories'] = $this->Model_login->get_category_wise_description($email);
$message=$this->load->view('manager/manage-users-header','',TRUE);
$message=  $this->load->view('manager/user_reports',$data,TRUE);
$message= $this->load->view('manager/manage-users-footer','',TRUE);
//$email_data;
           // echo "<pre>";print_r($email_data);exit;           
                                  
//$messages .= ' '; 
				//$this->email->message($email_data);	
		//		$template = $this->load->view('manager/user_reports',$data,TRUE);
		
		$context = stream_context_create(
    array(
        "http" => array(
            "header" => "User-Agent: Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36"
        )
    )
);

//$template = file_get_contents("https://10-yards.com/manager/user_reports", false, $context);
		
$template =  $this->load->view('manager/user_reports',$data,TRUE);

$this->email->message($template);	
$this->email->send();
	        	//$this->response($message, 200);
					$json  = array(
								  		'success'	=> true,
								  		'message'	=> 'Kindly check your report',
                  );
                  $success = 'Kindly check your report';
                $this->session->set_flashdata('success',$success);
                redirect(base_url().'manager/login/share_reports');
					echo json_encode($json);
				}else
				{
					$json  = array(
								  		'success'	=> false,
								  		'message'	=> 'Somethig went wroong',
                  );
                  $error = 'Somethig went wroong';
                $this->session->set_flashdata('error',$error);
                redirect(base_url().'login');
					echo json_encode($json);			  
					
				}	
			}
			
		}
    
   	
	

public function share_reports(){
    
    $data['manager_dashboard_data']=$this->session->userdata();
     $email=$this->session->userdata('email');
    
    $data['users'] = $this->Model_login->get_users();
     $data['count'] = $this->Model_login->get_users_count();
    //echo "<pre>";print_r($data['count']);exit;
  // left side bar and top bar
  $data['manager_dashboard_data']=$this->session->userdata();
  $this->load->view('manager/manager_dashboard_header');
	$this->load->view('manager/manager_dashboard_footer');


  $this->load->view('manager/dashboard2',$data);
  // Charts
  $this->load->view('manager/share_reports_header');
  $this->load->view('manager/share_reports',$data);
  $this->load->view('manager/share_reports_footer');
}

public function view_employees(){
  $data['manager_dashboard_data']=$this->session->userdata();
  $this->load->view('manager/manager_dashboard_header');
  $this->load->view('manager/manager_dashboard_footer');
  $this->load->view('manager/dashboard2',$data);

  // employees
  $this->load->view('manager/employees_header');
  $this->load->view('manager/view_employees');
  $this->load->view('manager/employees_footer');
}


public function employees(){
  //$data['setting'] = $this->common->get_setting_data();
   // $data['partner'] = $this->admin->show();
   
   
$values['manager_dashboard_data']=$this->session->userdata();
  $this->load->view('manager/manager_dashboard_header');
	$this->load->view('manager/manager_dashboard_footer');
$data = $this->Model_category->get_employees();
//echo "<pre>";print_r($data );exit;
 $Energy_and_drive=$data[0]['Energy_and_drive'];
$Work_style=$data[0]['Work_style'];
     $Working_with_others=$data[0]['Working_with_others'];
     $Dealing_with_pressure_and_stress=$data[0]['Dealing_with_pressure_and_stress'];
       $Problem_solving_style=$data[0]['Problem_solving_style'];
       
       $total=($Energy_and_drive)+($Work_style)+($Working_with_others)+($Dealing_with_pressure_and_stress)+($Problem_solving_style);
       $total=($total)/5;
   $data['dimensions']=$data;    
//echo "<pre>";print_r($total );exit;
  $this->load->view('manager/dashboard2',$values);
  // manage-users
 $this->load->view('manager/manage-users-header');
  $this->load->view('manager/manage-users',$data);
  $this->load->view('manager/manage-users-footer');
   
   
    
  
//   $data['setting'] = $this->Model_common->all_setting();
//   $data['partner'] = $this->Model_category->get_employees();
//   $this->load->view('manager/manager_view_header',$data);
//   $this->load->view('manager/view_customer',$data);
//   $this->load->view('manager/manager_view_footer',$data);
  



		

}

public function test_view(){
//   $this->load->model('Model_common');
//   $data['setting'] = $this->Model_common->all_setting();
//   


    $data['manager_dashboard_data']=$this->session->userdata();
  $this->load->view('manager/manager_dashboard_header');
	$this->load->view('manager/manager_dashboard_footer');
	$data['categories'] = $this->Model_category->show();
//$data['dimensions'] = $this->Model_category->get_employees();
//echo "<pre>";print_r($data['dimensions'] );exit;
  $this->load->view('manager/dashboard2',$data);
  // manage-users
 $this->load->view('manager/manage-users-header');
  $this->load->view('manager/view_categories',$data);
  $this->load->view('manager/manage-users-footer');
   


//   $this->load->view('manager/manager_view_header',$data);
//   $this->load->view('manager/view_categories',$data);
// 	$this->load->view('manager/manager_view_footer',$data);
}

public function test(){

  //$data['categories'] = $this->Model_category->get_all_categories();

    //$data['setting'] = $this->Model_common->get_setting_data();

		$data['categories'] = $this->Model_category->show();
    $this->load->view('manager/manager_view_header',$data);
    $this->load->view('manager/view_categories',$data);
    $this->load->view('manager/manager_view_footer',$data);

}

public function save(){

    $this->load->library('form_validation');

		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
		$this->form_validation->set_rules('email', 'Email Address', 'required');
        $this->form_validation->set_rules('organization', 'Organization Name', 'required');
        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('landline', 'landline', 'required');
        $this->form_validation->set_rules('number1', 'number1', 'required');
        $this->form_validation->set_rules('number2', 'number2', 'required');
        $this->form_validation->set_rules('cnic', 'CNIC Number', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[15]');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
		if ($this->form_validation->run() == FALSE)
		{
			$json  = array(
							  		'success'	=> false,
							  		'message'	=> validation_errors(),
                );
                $error = validation_errors();
                $this->session->set_flashdata('error',$error);
                redirect(base_url().'login');
				//echo json_encode($json);
		}
		else
		{
		
			$checkemail 	= $this->Model_login->check_email($this->input->post('email'));
           // echo "<pre>";print_r($checkemail);exit;
            if($checkemail)
			{
				$json  = array(
							  		'success'	=> false,
							  		'message'	=> '<p>Email Already exists</p>',
                );
                $error = 'Email Already exists';
                $this->session->set_flashdata('error',$error);
                redirect(base_url().'login');
			//	echo json_encode($json);
			}else
			{
				$salt = 'b7r4';
				$code = rand(1000,9999);
				$password =  hash('sha256', $salt . ( hash('sha256',$this->input->post('password'))));
				$confirm_password=$password;
				$data = array(
								'first_name'		=> $this->input->post('first_name'),
							 	'last_name'		=> $this->input->post('last_name'),
                                 'middle_name'			=> $this->input->post('middle_name'),
                                 'organization'		=> $this->input->post('organization'),
                                 'email'			=> $this->input->post('email'),
                                 'title'		=> $this->input->post('title'),
                                 'landline'			=> $this->input->post('landline'),
                                 'number1'		=> $this->input->post('number1'),
                                 'number2'		=> $this->input->post('number2'),
                                 'cnic'		=> $this->input->post('cnic'),
							 	
								 'password'		=> $password,
								 'confirm_password'		=> $confirm_password,
							 	'status'		=> 'disable',
								'role'		=> 'manager',
								'code'		=> $code,
							 );
							// echo "<pre>";print_r($data);exit;
				$inserdata	= $this->Model_login->add_customer($data);
				$customerid = $this->db->insert_id();
				 
				$postdata = array('customer_id' => $customerid);
				$updatedetails = $this->db->insert('tbl_customer_details',$postdata);
				 //echo "<pre>";print_r($updatedetails);exit;
				if($inserdata > 0)
				{
					$this->load->library('email');
					$config['wordwrap'] = TRUE;
					$config['mailtype'] = 'html';

					$this->email->initialize($config);
					$this->email->from('uzair.hussain7@gmail.com', 'Nayatel-Confirmation-Email');
					$this->email->to($this->input->post('email'));  
					$this->email->subject('Nayatel-Confirmation-Email | Confirmation Email');
					$messages = '
<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#fff" style="font-family:Open Sans,Arial,Helvetica,sans-serif;border-collapse:collapse!important;background:#fff!important;border-collapse:collapse;background:#fff">
  <tbody>
    <tr>
      <td align="center" valign="top" bgcolor="#fff" style="background:#fff!important;background:#fff">
        <img src="'.base_url().'public/uploads/logo.jpg">
      </td>
    </tr>
    <tr>
      <td align="center" valign="top" bgcolor="#ededed">
        <table width="700" class="m_-8985627821087644018mobilewrapper" border="0" cellspacing="0" cellpadding="0" align="center" style="border-collapse:collapse">
          <tbody>
            <tr>
              <td align="center" valign="top">
                <table width="600" class="m_-8985627821087644018mobilewrapper" border="0" cellspacing="0" cellpadding="0" align="center" style="border-collapse:collapse">
                  <tbody>
                    <tr>
                      <td height="20" align="center" valign="top" style="height:20px!important;line-height:10px!important;font-size:20px!important;color:#ededed!important;height:10px;line-height:20px;font-size:20px;color:#ededed">.</td>
                    </tr>
                    <tr>
                      <td align="center" valign="top">
                        <table width="600" class="m_-8985627821087644018mobilewrapper" border="0" cellspacing="0" cellpadding="0" align="center" style="border-collapse:collapse">
                          <tbody>
                            <tr>
                              <td align="center" valign="top">
                                <table width="600" class="m_-8985627821087644018mobilewrapper" bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0" align="center" style="border-collapse:collapse">
                                  <tbody></tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td align="center" valign="top">
                        <table width="800" class="m_-8985627821087644018mobilewrapper" border="0" cellspacing="0" cellpadding="0" align="center" style="border-collapse:collapse">
                          <tbody>
                            <tr>
                              <td align="center" valign="top" bgcolor="#ffffff" style="background:#ffffff">
                                <table width="600" class="m_-8985627821087644018mobilewrapper" border="0" cellspacing="0" cellpadding="0" align="center" style="border-collapse:collapse">
                                  <tbody>
                                    <tr>
                                      <td width="" align="center" valign="top">&nbsp;</td>
                                      <td align="center" valign="top">&nbsp;</td>
                                    </tr>
                                    <tr>
                                      
                                      <td align="center" valign="top" style="font-size:24px;font-family:Open Sans,Arial,Helvetica,sans-serif;color:#1c2c3a;text-align:center" colspan="2">Verify Your account click on this <a href="'.base_url().'/manager/Login/active/?code='.$code.'">link</a></td>
                                      
                                    </tr>
';
$messages .='                                    
                                    <tr>
                                      <td align="center" valign="top">&nbsp;</td>
                                      <td  align="center" valign="top">&nbsp;</td>
                                    </tr>
                                   
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                            <tr>
                              <td align="center" valign="top" bgcolor="#ffffff" style="border-radius:0 0 2px 2px">
                                <table width="600" class="m_-8985627821087644018mobilewrapper" border="0" cellspacing="0" cellpadding="0" align="center" style="border-collapse:collapse">
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    
                                    
';


                       
                                  
$messages .= '     
                  </tbody>
                </table>
              </td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
  </tbody>
</table> '; 
				$this->email->message($messages);	

				$this->email->send();
	        	//$this->response($message, 200);
					$json  = array(
								  		'success'	=> true,
								  		'message'	=> 'You have successfully register. kindly login your account',
                  );
                  $success = 'You have successfully register. kindly check your email to verify your account';
                $this->session->set_flashdata('success',$success);
                redirect(base_url().'login');
					echo json_encode($json);
				}else
				{
					$json  = array(
								  		'success'	=> false,
								  		'message'	=> 'Somethig went wroong',
                  );
                  $error = 'Somethig went wroong';
                $this->session->set_flashdata('error',$error);
                redirect(base_url().'login');
					echo json_encode($json);			  
					
				}	
			}
			
		}
}

public function active()
    {
		$code = $this->input->get('code');
	//	$code = $this->uri->segment(4);
	//	echo "<pre>";print_r($code);exit;
     
        //$id   = $this->input->post('userid');
    	
    	
    	$data   = array(
    	                    'status' => 'enable',
    	               );
    	$id     = array(
    	                    'code' => $code
    	               );               
    	
    	$update = $this->Model_login->updatestatus($data,$id) ;
    
    	if($update > 0)
    	{
    	    $success = 'Your Account is being active';
	        $this->session->set_flashdata('success',$success);
	        redirect(site_url().'/manager');
    	}else
    	{
    		$error = 'Server is not responding correctly';
    	    $this->session->set_flashdata('error',$error);
	        redirect(site_url().'/manager');
    	}
    }
    function logout() {
        $this -> session -> unset_userdata('manager_value_array');
        $this -> session -> unset_userdata('manager_dashboard_data');
        $this -> session -> unset_userdata('value_array');
		$this -> session -> unset_userdata('email');
        $this->session->sess_destroy();
        redirect(base_url().'login');
    }
}
