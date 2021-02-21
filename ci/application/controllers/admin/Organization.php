<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Organization extends CI_Controller 
{
	function __construct() 
	{
        parent::__construct();
        $this->load->model('admin/Model_common');
        $this->load->model('admin/Model_category');
    }

	public function index()
	{
		$data['setting'] = $this->Model_common->get_setting_data();
		$data['organization'] = $this->Model_category->get_organization();

		$this->load->view('admin/view_header',$data);
		$this->load->view('admin/view_organization',$data);
		$this->load->view('admin/view_footer');
	}


    public function add()
	{
		

       
		$data['setting'] = $this->Model_common->get_setting_data();

		$error = '';
		$success = '';

		if(isset($_POST['form3'])) {

			$valid = 1;

			$this->form_validation->set_rules('organization_name', 'Organization Name', 'trim|required');
			$this->form_validation->set_rules('department_name', 'Department Name', 'trim|required');

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
				$date_created=date("Y-m-d H:i:s");
		        $form_data = array(
					'organization_name'    => $_POST['organization_name'],
					
					'department_name'       => $_POST['department_name'],
					'status'=>'enable',
					'date_created'=>$date_created
	            );
	            $this->Model_category->add_organization($form_data);

		        $success = 'organization is added successfully!';
		        $this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/organization');
		    } 
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/organization/add');
		    }
            
        } else {            
            $this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_organization_add',$data);
			$this->load->view('admin/view_footer');
        }
		
	}


    public function edit($id)
	{
		
    	$tot = $this->Model_category->organization_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/organization');
        	exit;
    	}
       	
       	$data['setting'] = $this->Model_common->get_setting_data();
		$error = '';
		$success = '';


		if(isset($_POST['form3'])) 
		{

			$valid = 1;

			$this->form_validation->set_rules('organization_name', 'Organization Name', 'trim|required');
			$this->form_validation->set_rules('department_name', 'Department Name', 'trim|required');
			$this->form_validation->set_rules('status', 'status', 'trim|required');

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
		    // }

		    if($valid == 1) 
		    {
		    	$data['category'] = $this->Model_category->get_organization_edit($id);

		    	if(	$data['category'] == '') {
		    		$form_data = array(
                        'organization_name'    => $_POST['organization_name'],
                        'department_name'    => $_POST['department_name'],
                        'status'    => $_POST['status'],
						
		            );
		            // echo "<pre>";print_r($form_data);exit;
		            $this->Model_category->organization_update($id,$form_data);
				}
				else {
					// unlink('./public/uploads/'.$data['category']['category_banner']);

					// $final_name = 'category-banner-'.$id.'.'.$ext;
		        	// move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );
					$modified_date = date("Y-m-d H:i:s");
		        	$form_data = array(
						'organization_name'    => $_POST['organization_name'],
                        'department_name'    => $_POST['department_name'],
                        'status'    => $_POST['status'],
						'modified_date'=>$modified_date
		            );
		            // echo "<pre>";print_r($form_data);exit;
		            $this->Model_category->organization_update($id,$form_data);
				}
				
				$success = 'Organization is updated successfully';
				$this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/organization');
		    }
		    else
		    { //echo "<pre>";print_r($form_data);exit;
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/organization/edit'.$id);
		    }
           
		} else {
		    // echo "<pre>";print_r("bghhh");
            $data['organization'] = $this->Model_category->get_organization_edit($id);
           
	       	$this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_organization_edit',$data);
			$this->load->view('admin/view_footer');
		}

	}
public function delete($id){

	$tot = $this->Model_category->organization_check($id);
	if(!$tot) {
		redirect(base_url().'admin/organization');
		exit;
	}

	$questions_assessment = $this->Model_category->get_one_organization($id);

	$this->Model_category->delete_organization($id);
	$success = 'Organizations are deleted successfully';
	$this->session->set_flashdata('success',$success);
	redirect(base_url().'admin/organization');

}


}

