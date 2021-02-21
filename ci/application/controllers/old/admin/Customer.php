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

	public function add()
	{
		

		$data['error'] = '';
		$data['success'] = '';
		$error = '';

		if(isset($_POST['form1'])) {

			$valid = 1;

			$this->form_validation->set_rules('name', 'Name', 'trim|required');

			if($this->form_validation->run() == FALSE) {
				$valid = 0;
                $error .= validation_errors();
            }

            $path = $_FILES['photo']['name'];
		    $path_tmp = $_FILES['photo']['tmp_name'];

		    if($path!='') {
		        $ext = pathinfo( $path, PATHINFO_EXTENSION );
		        $file_name = basename( $path, '.' . $ext );
		        $ext_check = $this->Model_header->extension_check_photo($ext);
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

		        $final_name = 'partner-'.$ai_id.'.'.$ext;
		        move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

		        $form_data = array(
					'name'  => $_POST['name'],
					'photo' => $final_name
	            );
	            $this->Model_customer->add($form_data);

		        $data['success'] = 'Partner is added successfully!';

		        unset($_POST['name']);
		    } 
		    else
		    {
		    	$data['error'] = $error;
		    }

            $this->load->view('admin/view_header',$header);
			$this->load->view('admin/view_partner_add',$data);
			$this->load->view('admin/view_footer');
            
        } else {
            
            $this->load->view('admin/view_header',$header);
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

			$this->form_validation->set_rules('firstname', 'First Name', 'trim|required');

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
						'firstname' 	=> $_POST['firstname'],
						'lastname' 	=> $_POST['lastname'],
						'email'	=> $_POST['email'],
						'city'	=> $_POST['city'],
						'country'	=> $_POST['country'],
						'phonenumber'	=> $_POST['phonenumber'],
						'addressone'	=> $_POST['addressone'],
						'status'	=> $_POST['status'],
		            );
				}else
				{
					$form_data = array(
						'firstname' 	=> $_POST['firstname'],
						'lastname' 	=> $_POST['lastname'],
						'email'	=> $_POST['email'],
						'city'	=> $_POST['city'],
						'country'	=> $_POST['country'],
						'phonenumber'	=> $_POST['phonenumber'],
						'addressone'	=> $_POST['addressone'],
						'status'	=> $_POST['status'],
						'password'	=> md5($_POST['password']),
		            );
				}
		    	
		    		
		            $this->Model_customer->update($id,$form_data);
				
				

				$data['success'] = 'Cistomer is updated successfully';
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