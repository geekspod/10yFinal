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
		$this->load->view('view_register_employee',$data);
		$this->load->view('view_footer',$data);
	}
	
	// public function sign_up(){


	// }
	
	public function save()
	{
		echo "hhhhf";exit;
		$this->load->library('form_validation');

		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
		$this->form_validation->set_rules('email', 'Email Address', 'required');

		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[15]');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
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
		
			$checkemail 	= $this->Model_user->check_email($this->input->post('email'));
			 if($checkemail->num_rows() > 0)
			{
				$json  = array(
							  		'success'	=> false,
							  		'message'	=> '<p>Email Already exists</p>',
							  );
				echo json_encode($json);
			}else
			{
				$salt = rand(1000,9999);
				$password =  hash('sha256', $salt . ( hash('sha256',$this->input->post('password'))));
				$confirm_password=$password;
				$data = array(
								'first_name'		=> $this->input->post('first_name'),
							 	'last_name'		=> $this->input->post('last_name'),
							 	'email'			=> $this->input->post('email'),
								 'password'		=> md5($this->input->post('password')),
								 'confirm_password'		=> $confirm_password,
							 	'status'		=> 'enable',
								'role'		=> 'employee',
							 );
							 echo "<pre>";print_r($data);exit;
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
					$this->email->from('no-reply@gmail.com', 'Saver The Passion');
					$this->email->to($this->input->post('email'));  
					$this->email->subject('Saver The Passion | Confirmation Email');
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
								  );
					echo json_encode($json);
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
				'message'	=> '<p>Email Already exists</p>',
				);
				echo json_encode($json);
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
					$this->email->from('no-reply@gmail.com', 'Saver The Passion');
					$this->email->to($this->input->post('email'));
					$this->email->subject('Saver The Passion | Confirmation Email');
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