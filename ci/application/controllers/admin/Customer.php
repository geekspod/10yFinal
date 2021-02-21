<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller 
{
	function __construct() 
	{
        parent::__construct();
         $this->load->model('admin/Model_common');
        $this->load->model('admin/Model_customer');
    }

	public function index()
	{
		
		$header['setting'] = $this->Model_common->get_setting_data();
		$data['partner'] = $this->Model_customer->show();

		$this->load->view('admin/view_header',$header);
		$this->load->view('admin/view_customer',$data);
		$this->load->view('admin/view_footer');
	}


	public function add_manager_data()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
		$this->form_validation->set_rules('designation', 'designation', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('landline', 'Landline', 'required');
		$this->form_validation->set_rules('cnic', 'CNIC', 'required');
		$this->form_validation->set_rules('mobile', 'Mobile', 'required');
		$this->form_validation->set_rules('department', 'Department', 'required');
		$this->form_validation->set_rules('location', 'Location', 'required');
		$this->form_validation->set_rules('age', 'Age', 'required');
		$this->form_validation->set_rules('gender', 'Gender', 'required');
		$this->form_validation->set_rules('reporting', 'Reporting', 'required');
	
		
		if ($this->form_validation->run() == FALSE) {
			$json  = array(
			'success'	=> false,
			'message'	=> validation_errors(),
			);
			echo json_encode($json);
		} else {

			$checkemail 	= $this->Model_customer->check_email($this->input->post('email'));
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
				
				 $salt = 'b7r4';
				
				$password =  hash('sha256', $salt . ( hash('sha256',$this->input->post('password'))));
				$confirm_password=$password;
				
				
				$data = array(
				'first_name'		=> $this->input->post('first_name'),
				'last_name'		=> $this->input->post('last_name'),
				'designation'		=> $this->input->post('designation'),
				
				'job_title'		=> $this->input->post('designation'),
				'landline'		=> $this->input->post('landline'),
				'cnic'		=> $this->input->post('cnic'),
				
				
				'mobile'		=> $this->input->post('mobile'),
				'department'		=> $this->input->post('department'),
				'location'		=> $this->input->post('location'),
				
				'age'		=> $this->input->post('age'),
				'gender'		=> $this->input->post('gender'),
				'reporting'		=> $this->input->post('reporting'),
				
				
				'email'			=> $this->input->post('email'),
				'password'		=> $password,
				'confirm_password'		=> $confirm_password,
				'status'		=> 'disable',
				'role'		=> 'manager',
				'code'			=> $code,
				'dob'		=> '',
				'passport_number'			=> '',
				
				
				
				
				);
				//		echo "<pre>";print_r($data);exit;
				$inserdata	= $this->Model_customer->add_customer($data);
				$customerid = $this->db->insert_id();
				
				if ($inserdata > 0) {
					$this->load->library('email');
					$config['wordwrap'] = TRUE;
					$config['mailtype'] = 'html';

					$this->email->initialize($config);
					$this->email->from('uzair.hussain7@gmail.com', 'Nayatel-Manager-Confirmation-Email');
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

                                      <td align="center" valign="top" style="font-size:24px;font-family:Open Sans,Arial,Helvetica,sans-serif;color:#1c2c3a;text-align:center" colspan="2">Verify Your account click on this and update the password for the first time.<a href="'.base_url().'/manager/login/active_employees/?code='.$code.'">link</a></td>

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


	public function add()
	{
		//echo "hhhhf";exit;
		$data['error'] = '';
		$data['success'] = '';
		$error = '';

		if(isset($_POST['form1'])) {

			$valid = 1;

			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_rules('email', 'Email', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');

			if($this->form_validation->run() == FALSE) {
				$valid = 0;
                $error .= validation_errors();
            }

            $path = $_FILES['photo']['name'];
		    $path_tmp = $_FILES['photo']['tmp_name'];

		    if($path!='') {
		        $ext = pathinfo( $path, PATHINFO_EXTENSION );
		        $file_name = basename( $path, '.' . $ext );
		        $ext_check = $this->Model_common->extension_check_photo($ext);
		        if($ext_check == FALSE) {
		            $valid = 0;
		            $error .= 'You must have to upload jpg, jpeg, gif or png file for featured photo<br>';
		        }
		    } else {
		    	$valid = 0;
		        $error .= 'You must have to select a photo for featured photo<br>';
		    }

		    if($valid == 1) 
		    {
				$next_id = $this->Model_customer->get_auto_increment_id();
				foreach ($next_id as $row) {
		            $ai_id = $row['Auto_increment'];
		        }

		        $final_name = 'user-'.$ai_id.'.'.$ext;
		        move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

		        $form_data = array(
					'name'  => $_POST['name'],
					'email' => $_POST['email'],
					'password'  => $_POST['password'],
					'confirm_password'  => $_POST['confirm_password'],
					'photo' => $final_name,
	
				);
				echo "<pre>";print_r($form_data);exit;
	            $this->Model_customer->add($form_data);

		        $data['success'] = 'User is added successfully!';
				redirect(base_url().'admin/customer');
		        unset($_POST['name']);
		    } 
		    else
		    {
		    	$data['error'] = $error;
		    }

            $this->load->view('admin/view_header');
			$this->load->view('admin/view_partner_add',$data);
			$this->load->view('admin/view_footer');
            
        } else {
            
            $this->load->view('admin/view_header');
			$this->load->view('admin/view_partner_add',$data);
			$this->load->view('admin/view_footer');
        }
		
	}


	public function edit($id)
	{
		
    	// If there is no partner in this id, then redirect
    	$tot = $this->Model_customer->partner_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/customer');
        	exit;
    	}
       	
       	$header['setting'] = $this->Model_common->get_setting_data();
		$data['error'] = '';
		$data['success'] = '';
		$error = '';


		if(isset($_POST['form1'])) 
		{

			$valid = 1;

			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_rules('email', 'Email', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			

			if($this->form_validation->run() == FALSE) {
				$valid = 0;
                $error .= validation_errors();
            }

            

		    if($valid == 1) 
		    {
		    	$data['partner'] = $this->Model_customer->getData($id);
				if(empty($_POST['password']))
				{
					$form_data = array(
						'name' 	=> $_POST['name'],
					
						'email'	=> $_POST['email'],
						'status'	=> $_POST['status'],
						
		            );
				}else
				{
					$form_data = array(
						'name' 	=> $_POST['name'],
						'password' 	=> $_POST['password'],
						'email'	=> $_POST['email'],
						'status'	=> $_POST['status'],
		            );
				}
		    	
		    		//echo "<pre>";print_r($form_data);exit;
		            $this->Model_customer->update($id,$form_data);
				
				

				$data['success'] = 'Customer is updated successfully';
				redirect(base_url().'admin/customer');
		    }
		    else
		    {
		    	$data['error'] = $error;
		    }

		    $data['partner'] = $this->Model_customer->getData($id);
	       	$this->load->view('admin/view_header',$header);
			$this->load->view('admin/view_customer_edit',$data);
			$this->load->view('admin/view_footer');
           
		} else {
			$data['partner'] = $this->Model_customer->getData($id);
	       	$this->load->view('admin/view_header',$header);
			$this->load->view('admin/view_customer_edit',$data);
			$this->load->view('admin/view_footer');
		}

	}


	public function delete($id) 
	{
		// If there is no partner in this id, then redirect
    	$tot = $this->Model_customer->partner_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/customer');
        	exit;
    	}

        

        $this->Model_customer->delete($id);
        redirect(base_url().'admin/customer');
    }

}