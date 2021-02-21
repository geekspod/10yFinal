<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	function __construct()
	{
        parent::__construct();
        $this->load->model('Model_common');
        $this->load->model('Model_category');
        $this->load->model('Model_portfolio');
        $this->load->model('Model_user');
    }

	public function index()
	{
		
		$data['setting'] = $this->Model_common->all_setting();
		$data['sliders'] = $this->Model_common->all_slider('register');
		$data['page_home'] = $this->Model_common->all_page_home();
		$data['social'] = $this->Model_common->all_social();
		$data['reporting_data'] = $this->Model_user->reporting_data();
		$data['department_data'] = $this->Model_user->department_data();
		$data['job_title_data'] = $this->Model_user->job_title_data();
			
		//	echo "<pre>";print_r($job_title_data);exit;
		$this->load->view('view_header',$data);
		$this->load->view('view_register',$data);
		$this->load->view('view_footer',$data);
	}
	
	public function selection()
	{

		$data['setting'] = $this->Model_common->all_setting();
		$data['sliders'] = $this->Model_common->all_slider('register');
		$data['page_home'] = $this->Model_common->all_page_home();
		
		$this->load->view('view_header',$data);
		$this->load->view('view_register_selection',$data);
		$this->load->view('view_footer',$data);
	}
	
	public function employee()
	{

		$data['setting'] = $this->Model_common->all_setting();
		$data['sliders'] = $this->Model_common->all_slider('register');
		$data['page_home'] = $this->Model_common->all_page_home();
		$this->load->view('view_header',$data);
	//		$this->load->view('view_register',$data);
		$this->load->view('view_register_employee',$data);
		$this->load->view('view_footer',$data);
	}
	
	// public function sign_up(){


	// }

 
	public function save()
	{
	//	echo "hhhhf";exit;
		$this->load->library('form_validation');

		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
		$this->form_validation->set_rules('mobile', 'Mobile#', 'required');
		
	
		$this->form_validation->set_rules('country_code', 'Country Code ', 'required');

        //$this->form_validation->set_rules('mobile', 'Phone Number', 'trim|required|max_length[13]|callback_checkPhone');

	
    // $this->form_validation->set_rules('mobile', 'Contact Phone Number', 'required');
   // $this->form_validation->set_rules('mobile', 'Mobile Number ', 'required|regex_match[/^[0-9]{10}$/]'); //{10} for 10 digits number


	
		$this->form_validation->set_rules('job_title', 'Job Title', 'required');
	
			$this->form_validation->set_rules('landline', 'Landline Number', 'required');
		$this->form_validation->set_rules('cnic', 'CNIC Number', 'required');

		$this->form_validation->set_rules('reporting', 'Reporting', 'required');
		$this->form_validation->set_rules('passport_number', 'Passport Number', 'required');
		
		$this->form_validation->set_rules('email', 'Email Address', 'valid_email|required');
		

        $this->form_validation->set_rules('password', 'Password', 'required|matches[confirm_password]|min_length[8]|callback_password_check');


// 		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[15]');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
		$dob=$this->input->post('dob');
		$this->form_validation->set_rules('reg[dob]', 'Date of birth', 'regex_match[(0[1-9]|1[0-9]|2[0-9]|3(0|1))-(0[1-9]|1[0-2])-\d{4}]'); 
 

		
		
		$rules = array(
				[
					'field' => 'password',
					'label' => 'Password',
					'rules' => 'callback_valid_password',
				],
				[
					'field' => 'confirm_password',
					'label' => 'Confirm Password',
					'rules' => 'required|matches[password]',
				],
			);
			$this->form_validation->set_rules($rules);
			if ($this->form_validation->run())
			{
				//echo 'Success! Account can be created.';
			}
			else
			{
			    	redirect(base_url().'register/index/employer');
				echo 'Error! <ul>' . validation_errors('<li>', '</li>') . '</ul>';
			}
		
		
		if ($this->form_validation->run() == FALSE)
		{
			$json  = array(
							  		'success'	=> false,
							  		'message'	=> validation_errors(),
							  );
							 	redirect(base_url().'register/index/employer');
				echo json_encode($json);
		}
		else
		{
		
			$checkemail 	= $this->Model_user->check_email($this->input->post('email'));
		//	echo "<pre>";print_r($checkemail);exit;
			 if(!(empty($checkemail)))
			{
				$json  = array(
							  		'success'	=> false,
							  		'message'	=> 'Email Already exists',
							  );
							  	$this->form_validation->set_message('valid_password', 'Email Already exists');

                $error = 'Email Already exists';
                $this->session->set_flashdata('error',$error);
                redirect(base_url().'register/index/employer');

			return FALSE;
							  
				// 			  	redirect(base_url().'login');
				// echo json_encode($json);
			}else
			{
				$salt = 'b7r4';
				$code = rand(1000,9999);
				$password =  hash('sha256', $salt . ( hash('sha256',$this->input->post('password'))));
				$confirm_password=$password;
				$date_created=date('Y-m-d H:i:s');
					$mobile=$this->input->post('mobile');
					$country_code=$this->input->post('country_code');
					$mobile=$country_code.''.$mobile;
					
				$data = array(
								'first_name'		=> strtoupper($this->input->post('first_name')),
							 	'last_name'		=> strtoupper($this->input->post('last_name')),
							 	
							 			'job_title'		=>strtoupper( $this->input->post('job_title')),
							 			
							 			'landline'		=> $this->input->post('landline'),
							 		'mobile'		=> $mobile,
							 			
							 			'cnic'		=> $this->input->post('cnic'),
							 			
							 				'reporting'		=> strtoupper($this->input->post('reporting')),
							 
							 		'gender'		=> strtoupper($this->input->post('gender')),
							 			'location'		=> strtoupper($this->input->post('location')),
							 			
							 			'department'		=> strtoupper($this->input->post('department')),
							 			'dob'		=> strtoupper($this->input->post('dob')),
							 			
							 	'email'			=> $this->input->post('email'),
							 		'passport_number'			=> $this->input->post('passport_number'),
								 'password'		=> $password,
								 'confirm_password'		=> $confirm_password,
							 	'status'		=> 'disable',
								'role'		=> strtoupper('employee'),
								'code'		=> $code,
								'date_created'		=> $date_created,
							 );
							 	$department=strtoupper($this->input->post('department'));
							//echo "<pre>";print_r($department);exit;
						
	$department_name	= $this->Model_category->check_department_name($department);
	//echo "<pre>";print_r($department_name);exit;
	if(empty($department_name)){
	    //echo "empty";exit;
	   // echo "<pre>";print_r($department);exit;
	   
	   $date_created = date('Y-m-d H:i:s');
            $add_department = array(
								'name'		=> strtoupper($this->input->post('department')),
							 	'status'		=> 'enable',
							 	'date_created'			=> $date_created,
								 
							 );
							 //echo "<pre>";print_r($data);exit;
				$inserdata	= $this->Model_category->add_department($add_department);
				$departmentid = $this->db->insert_id();
	   

	}

		//echo "<pre>";print_r($data);exit;
				$inserdata	= $this->Model_user->add_customer($data);
			
				$customerid = $this->db->insert_id();
				
				$postdata = array('customer_id' => $customerid);
				$updatedetails = $this->db->insert('tbl_customer_details',$postdata);
				
				if($inserdata > 0)
				{
					$this->load->library('email');
					$config['wordwrap'] = TRUE;
					$config['mailtype'] = 'html';

					$this->email->initialize($config);
					$this->email->from('uzair.hussain7@gmail.com', 'Nayatel-Confirmation-Email');
					$this->email->to($this->input->post('email'));  
					$this->email->subject('Nayatel | Confirmation Email');
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
                                      
                                      <td align="center" valign="top" style="font-size:24px;font-family:Open Sans,Arial,Helvetica,sans-serif;color:#1c2c3a;text-align:center" colspan="2">Verify Your account click on this <a href="'.base_url().'/login/active/?code='.$code.'">link</a></td>
                                      
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
			     redirect(base_url().'register/success');
				//$this->load->view('thankyou');
	        	//$this->response($message, 200);
				// 	$json  = array(
				// 				  		'success'	=> true,
				// 				  		'message'	=> 'You have successfully register. kindly verify your account',
				// 				  );
				// 	echo json_encode($json);
				}else
				{
					$json  = array(
								  		'success'	=> false,
								  		'message'	=> 'Somethig went wroong',
								  );
					echo json_encode($json);			  
					
				}	
			}
			
		}			 
	}
	public function success(){
	    
	    	$this->load->view('thankyou');
	}
public	function phone_check($phone_number)
{
    $regex = '/^\d{3}\s\d{3}\s\d{4}\s\d{3}$/'; // validates 123 123 1234 123
    if (!preg_match($regex, $phone_number)) {
        $this->form_validation->set_message('mobile', 'Phone Number not valid.');
          $error = 'Mobile number must be 10-characters long.';
                $this->session->set_flashdata('error',$error);
                redirect(base_url().'register/index/employer');
        return false;
    }
    return true;
}

public function check_email(){
    
    $checkemail 	= $this->Model_user->check_email($this->input->post('email'));
			if ($checkemail->num_rows() > 0) {
			//	$json  = array(
			//	'success'	=> false,
			//	'message'	=> 'Email Already exists',
			//	);
				//	$this->form_validation->set_message('valid_password', 'Email Already exists');

                //$error = 'Email Already exists';
                //$this->session->set_flashdata('error',$error);
               // redirect(base_url().'login');

			return FALSE;
			}
			else{
			    
			    return true;
			}
    
}

public function valid_password($password = '')
	{
		$password = trim($password);

		$regex_lowercase = '/[a-z]/';
		$regex_uppercase = '/[A-Z]/';
		$regex_number = '/[0-9]/';
		$regex_special = '/[!@#$%^&*()\-_=+{};:,<.>§~]/';

		if (empty($password))
		{
			$this->form_validation->set_message('valid_password', 'The {Password} field is required.');
                $error = 'The {Password} field is required.';
                $this->session->set_flashdata('error',$error);
                redirect(base_url().'register/index/employer');
			return FALSE;
		}

		if (preg_match_all($regex_lowercase, $password) < 1)
		{
			$this->form_validation->set_message('valid_password', 'The {Password} field must be at least one lowercase letter.');

                $error = 'The {Password} field must be at least one lowercase letter.';
                $this->session->set_flashdata('error',$error);
                redirect(base_url().'register/index/employer');

			return FALSE;
		}

		if (preg_match_all($regex_uppercase, $password) < 1)
		{
			$this->form_validation->set_message('valid_password', 'The {Password} field must be at least one uppercase letter.');

                $error = 'The {Password} field must be at least one uppercase letter.';
                $this->session->set_flashdata('error',$error);
                redirect(base_url().'register/index/employer');

			return FALSE;
		}

		if (preg_match_all($regex_number, $password) < 1)
		{
			$this->form_validation->set_message('valid_password', 'The {Password} field must have at least one number.');

                $error = 'The {Password} field must have at least one number.';
                $this->session->set_flashdata('error',$error);
                redirect(base_url().'register/index/employer');

			return FALSE;
		}

		if (preg_match_all($regex_special, $password) < 1)
		{
			$this->form_validation->set_message('valid_password', 'The {Password} field must have at least one special character.' . ' ' . htmlentities('!@#$%^&*()\-_=+{};:,<.>§~'));

                $error = 'The {Password} field must have at least one special character.' . ' ' . htmlentities('!@#$%^&*()\-_=+{};:,<.>§~');
                $this->session->set_flashdata('error',$error);
                 redirect(base_url().'register/index/employer');

			return FALSE;
		}

		if (strlen($password) <= 8)
		{
			$this->form_validation->set_message('valid_password', 'The {Password} field must be at least 8 characters in length.');

                $error = 'The {Password} field must be at least 8 characters in length.';
                $this->session->set_flashdata('error',$error);
                redirect(base_url().'register/index/employer');

			return FALSE;
		}

		if (strlen($password) >= 15)
		{
			$this->form_validation->set_message('valid_password', 'The {Password} field cannot exceed 15 characters in length.');

                $error = 'The {Password} field cannot exceed 15 characters in length.';
                $this->session->set_flashdata('error',$error);
                redirect(base_url().'register/index/employer');

			return FALSE;
		}

		return TRUE;
	}
  
	
	
	public function saveregister()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('firstname', 'First Name', 'required');
		$this->form_validation->set_rules('lastname', 'Last Name', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		if ($this->form_validation->run() == FALSE) {
			$json  = array(
			'success'	=> false,
			'message'	=> validation_errors(),
			);
			echo json_encode($json);
		} else {

			$checkemail 	= $this->Model_user->check_email($this->input->post('email'));
			if ($checkemail->num_rows() > 0) {
				$json  = array(
				'success'	=> false,
				'message'	=> 'Email Already exists',
				);
					$this->form_validation->set_message('valid_password', 'Email Already exists');

                $error = 'Email Already exists';
                $this->session->set_flashdata('error',$error);
                redirect(base_url().'register/index/employer');

			return FALSE;
				
				$error = 'Email Already exists';
                $this->session->set_flashdata('error',$error);
                redirect(base_url().'register/index/employer');
				
				//echo json_encode($json);
			} else {
				$code = rand(1000,9999);
				$role_id = $this->input->post('role_id');
				if($role_id == 'customer')
				{
					$role_ids = 1;
				}else
				{
					$role_ids = 2;
				}
				$data = array(
				'fullname'		=> $this->input->post('firstname').' '.$this->input->post('lastname'),
				'email'			=> $this->input->post('email'),
				'password'		=> md5($this->input->post('password')),
				'status'		=> 1,
				'code'			=> $code,
				'role_id'		=> $role_ids,
				);
				$inserdata	= $this->Model_user->add_customer($data);
				$customerid = $this->db->insert_id();
				if($role_ids == 2)
				{
					$postdata = array('customer_id' => $customerid);
					$updatedetails = $this->db->insert('tbl_customer_details',$postdata);
				}
				
				$user_id = $this->db->insert_id();
				if ($inserdata > 0) {
					$this->load->library('email');
					$config['wordwrap'] = TRUE;
					$config['mailtype'] = 'html';

					$this->email->initialize($config);
					$this->email->from('no-reply@gmail.com', 'Nayatel-Confirmation-Email');
					$this->email->to($this->input->post('email'));
					$this->email->subject('Nayatel | Confirmation Email');
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

                                      <td align="center" valign="top" style="font-size:24px;font-family:Open Sans,Arial,Helvetica,sans-serif;color:#1c2c3a;text-align:center" colspan="2">Verify Your account click on this <a href="'.base_url().'/login/active/?code='.$code.'">link</a></td>

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
					'message'	=> 'You have successfully register kindly login your account',
					'user_id'	=> $customerid,
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

	
	
	function chefprocess($id)
	{
		$data['setting'] = $this->Model_common->all_setting();
		$data['page_home'] = $this->Model_common->all_page_home();
		$data['comment'] = $this->Model_common->all_comment();
		$data['social'] = $this->Model_common->all_social();
		$data['sliders'] = $this->Model_common->all_slider('register');

		$this->load->view('view_header',$data);
		$this->load->view('view_register_chef',$data);
		$this->load->view('view_footer',$data);
	}
	
	
	
	
	public function completeregistration()
	{
	  $image = array();
	  
	  $ImageCount = count($_FILES['comodity_image']['name']);
        for($i = 0; $i < $ImageCount; $i++){
			            $_FILES['file']['name']       = $_FILES['comodity_image']['name'][$i];
			            $_FILES['file']['type']       = $_FILES['comodity_image']['type'][$i];
			            $_FILES['file']['tmp_name']   = $_FILES['comodity_image']['tmp_name'][$i];
			            $_FILES['file']['error']      = $_FILES['comodity_image']['error'][$i];
			            $_FILES['file']['size']       = $_FILES['comodity_image']['size'][$i];

			            // File upload configuration
			            $uploadPath = './uploads/';
			            $config['upload_path'] = $uploadPath;
			            $config['allowed_types'] = 'jpg|jpeg|png|gif';

			            // Load and initialize upload library
			            $this->load->library('upload', $config);
			            $this->upload->initialize($config);

			            // Upload file to server
			            if($this->upload->do_upload('file')){
			                // Uploaded file data
			                $imageData = $this->upload->data();
			                 $uploadImgData[] = $imageData['file_name'];
			                 $insertimages = $this->db->insert('tbl_chef_iages',array('user_id' => $this->input->post('user_id'),'image' => $imageData['file_name'])) ;

			            }
			        }
         if(!empty($uploadImgData)){
            // Insert files data into the database
            $final_name = implode(',',$uploadImgData); 
                       
        }
       
       $cash 		= $this->input->post('cash'); 
       $cardnumber	= $this->input->post('cardnumber'); 
       $accounttitle= $this->input->post('accounttitle'); 
       $expirydate 	= $this->input->post('expirydate'); 
       $credit 		= $this->input->post('credit'); 
       $street 		= $this->input->post('street'); 
       $city 		= $this->input->post('city'); 
       $zip 		= $this->input->post('zip'); 
       $state 		= $this->input->post('state'); 
       $country 	= $this->input->post('country');
       $address 	= $this->input->post('address');
       $about 		= $this->input->post('about');
       $site 		= $this->input->post('site');
       $phone 		= $this->input->post('phone');
       $userzip 	= $this->input->post('userzip');
       $jobtype 	= $this->input->post('jobtype');
       
       $this->db->update('tbl_customer',array('phonenumber'=> $phone),array('customer_id' => $this->input->post('user_id')));
       
       $data = array(
       					'cash'		=> $cash,
       					'credit'	=> $credit,
       					'street'	=> $street,
       					'city'		=> $city,
       					'zip'		=> $zip,
       					'state'		=> $state,
       					'country'	=> $country,
       					'address'	=> $address,
       					'site'		=> $site,
       					'about'		=> $about,
       					'userzip'	=> $userzip,
       					'hiretype'	=> $jobtype,
       					'accounttitle' => $accounttitle,
       					'carnumber'=> $cardnumber,
       					'expirydate'=> $expirydate,
       					'customer_id'	=> $this->input->post('user_id')
       				);
       
       
       $insertdata = $this->db->update('tbl_customer_details',$data,array('customer_id' => $this->input->post('user_id')));
       if($insertdata > 0)
       {
       	 $json = array(
       	 			  	'success'	=> true,
       	 			  	'message'	=> 'Kindly check your email to active your account',
       	 			  );
       	 echo json_encode($json);			  
       }else
       {
	       	$json = array(
	       	 			  	'success'	=> false,
	       	 			  	'message'	=> 'Some thing went wrong',
	       	 			  );
	       	 echo json_encode($json);
       }
			   
	}
}