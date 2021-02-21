<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller 
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
		$data['categories'] = $this->Model_category->show();

		$this->load->view('admin/view_header',$data);
		$this->load->view('admin/view_categories',$data);
		$this->load->view('admin/view_footer');
	}
public function add_score(){
	$data['categories_id']  = $this->uri->segment('4');
//echo $value;exit;
	$data['setting'] = $this->Model_common->get_setting_data();
	

	$this->load->view('admin/view_header',$data);
	$this->load->view('admin/add_categories_score',$data);
	$this->load->view('admin/view_footer');
}

public function add_categories_score(){
//echo "sdd";exit;
	// $value=$this->input->post('value');
	// $categories_id=$this->input->post('categories_id');
	// echo "<pre>";print_r($value);
	// echo "<pre>";print_r($categories_id);exit;

	$form_data = array(
		'value'    => $_POST['value'],
		'categories_id'       => $_POST['categories_id'],
		
	);
	$this->Model_category->add_categories_score($form_data);

	$success = 'Category Score is added successfully!';
	$this->session->set_flashdata('success',$success);
	redirect(base_url().'admin/categories');
}

public function add()
	{
		

       
		$data['setting'] = $this->Model_common->get_setting_data();

		$error = '';
		$success = '';

		if(isset($_POST['form2'])) {

			$valid = 1;

			$this->form_validation->set_rules('name', 'Test Name', 'trim|required');

			if($this->form_validation->run() == FALSE) {
				$valid = 0;
                $error .= validation_errors();
            }

            $path = $_FILES['banner']['name'];
		    $path_tmp = $_FILES['banner']['tmp_name'];

		    if($path!='') {
		        $ext = pathinfo( $path, PATHINFO_EXTENSION );
		        $file_name = basename( $path, '.' . $ext );
		        $ext_check = $this->Model_common->extension_check_photo($ext);
		        if($ext_check == FALSE) {
		            $valid = 0;
		            $error .= 'You must have to upload jpg, jpeg, gif or png file for banner<br>';
		        }
		    } else {
		    	$valid = 0;
		        $error .= '<br>';
		    }

		    if($valid == 1) 
		    {
				$next_id = $this->Model_category->get_auto_increment_id();
				foreach ($next_id as $row) {
		            $ai_id = $row['Auto_increment'];
		        }

		        $final_name = 'category-banner-'.$ai_id.'.'.$ext;
		        move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

		        $form_data = array(
					'name'    => $_POST['name'],
					'category_banner'  => $final_name,
					'meta_title'       => $_POST['meta_title'],
					'meta_keyword'     => $_POST['meta_keyword'],
					'meta_description' => $_POST['meta_description']
	            );
	            $this->Model_category->add($form_data);

		        $success = 'Category is added successfully!';
		        $this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/categories');
		    } 
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/categories/add');
		    }
            
        } else {            
            $this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_categories_add',$data);
			$this->load->view('admin/view_footer');
        }
		
	}

public function add_categories(){


	$data['setting'] = $this->Model_common->get_setting_data();

	$error = '';
	$success = '';

	if(isset($_POST['form2'])) {

		$valid = 1;

		$this->form_validation->set_rules('name', 'Test Name', 'trim|required');

		if($this->form_validation->run() == FALSE) {
			$valid = 0;
			$error .= validation_errors();
		}

		// $path = $_FILES['banner']['name'];
		// $path_tmp = $_FILES['banner']['tmp_name'];

		// if($path!='') {
		// 	$ext = pathinfo( $path, PATHINFO_EXTENSION );
		// 	$file_name = basename( $path, '.' . $ext );
		// 	$ext_check = $this->Model_common->extension_check_photo($ext);
		// 	if($ext_check == FALSE) {
		// 		$valid = 0;
		// 		$error .= 'You must have to upload jpg, jpeg, gif or png file for banner<br>';
		// 	}
		// } else {
		// 	$valid = 0;
		// 	$error .= '<br>';
		// }

		if($valid == 1) 
		{
			// $next_id = $this->Model_category->get_auto_increment_id();
			// foreach ($next_id as $row) {
			// 	$ai_id = $row['Auto_increment'];
			// }

			// $final_name = 'category-banner-'.$ai_id.'.'.$ext;
			// move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );
			//$created_date=strtotime(date('Y-m-d'));
			$created_date = date('Y-m-d H:i:s');
			$status="enable";
			$form_data = array(
				'name'    => $_POST['name'],
				'created_date'=>$created_date,
				'status'=>$status
			);
			//echo "<pre>";print_r($form_data);exit;
			$this->Model_category->add_categories($form_data);

			$success = 'Category is added successfully!';
			$this->session->set_flashdata('success',$success);
			redirect(base_url().'admin/categories');
		} 
		else
		{
			$this->session->set_flashdata('error',$error);
			redirect(base_url().'admin/categories/add');
		}
		
	} else {            
		$this->load->view('admin/view_header',$data);
		$this->load->view('admin/view_categories_add',$data);
		$this->load->view('admin/view_footer');
	}
	

	// $form_data = array(
	// 	'name'    => $_POST['name'],
		
	// );

	// echo "<pre>";print_r($form_data);exit;
	// $this->Model_category->add($form_data);
	//  $categories=$this->input->post($category_name);
	// 	echo "<pre>";print_r($categories);exit;
		
		
	}
public function edit_questions_score_description($id){

	$id=$this->uri->segment(4);
	//echo "<pre>";print_r($id);exit;
	$tot = $this->Model_category->questions_score_description_check($id);
	//echo "<pre>";print_r($tot);exit;
			if(!$tot) {
				redirect(base_url().'admin/categories/edit_questions_score_description');
				exit;
			}
			   
			   $data['setting'] = $this->Model_common->get_setting_data();
			$error = '';
			$success = '';
	
	
			if(isset($_POST['form3'])) 
			{
	
				$valid = 1;
	
				$this->form_validation->set_rules('name', 'Question Name', 'trim|required');
				//$this->form_validation->set_rules('value', 'Score', 'trim|required');
				
	
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
					$data['description'] = $this->Model_category->get_description($id);
					
					if($data['description'] == '') {
						$form_data = array(
							'name'    => $_POST['name'],
							'categories_id'    => $_POST['categories_id'],
							
						);
						$this->Model_category->description_update($id,$form_data);
					}
					else {
						// unlink('./public/uploads/'.$data['category']['category_banner']);
	
						// $final_name = 'category-banner-'.$id.'.'.$ext;
						// move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );
						$date_modified = date("Y-m-d H:i:s");
						$form_data = array(
							'name'    => $_POST['name'],
							'categories_id'    => $_POST['categories_id'],
						);
						//echo "<pre>";print_r($form_data);exit;
						$this->Model_category->description_update($id,$form_data);
					}
					
					$success = 'Description are updated successfully';
					$this->session->set_flashdata('success',$success);
					redirect(base_url().'admin/categories/view_questions_score_description');
				}
				else
				{
					
					$this->session->set_flashdata('error',$error);
					redirect(base_url().'admin/categories/edit_questions_score_description'.$id);
				}
			   
			} else {
				// if(!$tot) {
				// 	echo "<pre>";print_r($tot);exit;
				// }
				$data['description'] = $this->Model_category->get_description($id);
				//$data['personality_assessment'] = $this->Model_category->get_Work_personality_index($questions_assessment_id);
				//echo "<pre>";print_r($data['description']);exit;
				   $this->load->view('admin/view_header',$data);
				$this->load->view('admin/edit_questions_score_description',$data);
				$this->load->view('admin/view_footer');
			}
	
	
	
}

public function edit_Work_personality_index($id){

	$questions_assessment_id=$this->uri->segment(4);
	//echo "<pre>";print_r($questions_assessment_id);exit;
	$tot = $this->Model_category->personality_assessment_check($questions_assessment_id);
	//echo "<pre>";print_r($tot);exit;
			if(!$tot) {
				redirect(base_url().'admin/categories/edit_personality_assessment');
				exit;
			}
			   
			   $data['setting'] = $this->Model_common->get_setting_data();
			$error = '';
			$success = '';
	
	
			if(isset($_POST['form2'])) 
			{
	
				$valid = 1;
	
				$this->form_validation->set_rules('name', 'Question Name', 'trim|required');
				$this->form_validation->set_rules('value', 'Score', 'trim|required');
				
	
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
					$data['questions'] = $this->Model_category->get_questions_assessment($id);
	
					if($data['questions'] == '') {
						$form_data = array(
							'name'    => $_POST['name'],
							'value'    => $_POST['value'],
							
						);
						$this->Model_category->questions_assessment_update($id,$form_data);
					}
					else {
						// unlink('./public/uploads/'.$data['category']['category_banner']);
	
						// $final_name = 'category-banner-'.$id.'.'.$ext;
						// move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );
						$date_modified = date("Y-m-d H:i:s");
						$form_data = array(
							'name'    => $_POST['name'],
							'value'    => $_POST['value'],
							'date_modified'=>$date_modified
						);
						//echo "<pre>";print_r($form_data);exit;
						$this->Model_category->questions_assessment_update($id,$form_data);
					}
					
					$success = 'Questions Assessment are updated successfully';
					$this->session->set_flashdata('success',$success);
					redirect(base_url().'admin/categories/view_Work_personality_index');
				}
				else
				{
					
					$this->session->set_flashdata('error',$error);
					redirect(base_url().'admin/categories/edit_Work_personality_index'.$id);
				}
			   
			} else {
				// if(!$tot) {
				// 	echo "<pre>";print_r($tot);exit;
				// }
				$data['questions_assessment'] = $this->Model_category->get_questions_assessment($id);
				$data['personality_assessment'] = $this->Model_category->get_Work_personality_index($questions_assessment_id);
				//echo "<pre>";print_r($data['personality_assessment']);exit;
				   $this->load->view('admin/view_header',$data);
				$this->load->view('admin/edit_Work_personality_index',$data);
				$this->load->view('admin/view_footer');
			}
	
	
}

public function edit_personality_assessment($id){

	$questions_assessment_id=$this->uri->segment(4);
//echo "<pre>";print_r($questions_assessment_id);exit;
$tot = $this->Model_category->personality_assessment_check($questions_assessment_id);
//echo "<pre>";print_r($tot);exit;
    	if(!$tot) {
    		redirect(base_url().'admin/categories/edit_personality_assessment');
        	exit;
    	}
       	
       	$data['setting'] = $this->Model_common->get_setting_data();
		$error = '';
		$success = '';


		if(isset($_POST['form2'])) 
		{

			$valid = 1;

			$this->form_validation->set_rules('name', 'Question Name', 'trim|required');
			$this->form_validation->set_rules('value', 'Score', 'trim|required');
			

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
		    	$data['questions'] = $this->Model_category->get_questions_assessment($id);

		    	if($data['questions'] == '') {
		    		$form_data = array(
						'name'    => $_POST['name'],
						'value'    => $_POST['value'],
						
		            );
		            $this->Model_category->questions_assessment_update($id,$form_data);
				}
				else {
					// unlink('./public/uploads/'.$data['category']['category_banner']);

					// $final_name = 'category-banner-'.$id.'.'.$ext;
		        	// move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );
					$date_modified = date("Y-m-d H:i:s");
		        	$form_data = array(
						'name'    => $_POST['name'],
						'value'    => $_POST['value'],
						'date_modified'=>$date_modified
					);
					//echo "<pre>";print_r($form_data);exit;
		            $this->Model_category->questions_assessment_update($id,$form_data);
				}
				
				$success = 'Questions Assessment are updated successfully';
				$this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/categories/view_all_personality_assessment');
		    }
		    else
		    {
				
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/categories/edit_personality_assessment'.$id);
		    }
           
		} else {
			$data['questions_assessment'] = $this->Model_category->get_questions_assessment($id);
			$data['personality_assessment'] = $this->Model_category->get_personality_assessment();
			//echo "<pre>";print_r($data['personality_assessment']);exit;
	       	$this->load->view('admin/view_header',$data);
			$this->load->view('admin/edit_personality_assessment',$data);
			$this->load->view('admin/view_footer');
		}



}

public function edit_all_cultural_scan($id){

$questions_id=$this->uri->segment(4);
//echo "<pre>";print_r($questions_id);exit;
$tot = $this->Model_category->cultural_scan_check($questions_id);
//echo "<pre>";print_r($tot);exit;
    	if(!$tot) {
    		redirect(base_url().'admin/categories/edit_all_cultural_scan');
        	exit;
    	}
       	
       	$data['setting'] = $this->Model_common->get_setting_data();
		$error = '';
		$success = '';


		if(isset($_POST['form2'])) 
		{

			$valid = 1;

			$this->form_validation->set_rules('name', 'Question Name', 'trim|required');
			$this->form_validation->set_rules('value', 'Score', 'trim|required');
			

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
		    	$data['questions'] = $this->Model_category->get_questions($id);

		    	if($path == '') {
		    		$form_data = array(
						'name'    => $_POST['name'],
						'value'    => $_POST['value'],
						
		            );
		            $this->Model_category->questions_update($id,$form_data);
				}
				else {
					// unlink('./public/uploads/'.$data['category']['category_banner']);

					// $final_name = 'category-banner-'.$id.'.'.$ext;
		        	// move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );
					$date_modified = date("Y-m-d H:i:s");
		        	$form_data = array(
						'name'    => $_POST['name'],
						'value'    => $_POST['value'],
						'date_modified'=>$date_modified
					);
					echo "<pre>";print_r($form_data);exit;
		            $this->Model_category->questions_update($id,$form_data);
				}
				
				$success = 'Questions are updated successfully';
				$this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/categories/view_all_cultural_scan');
		    }
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/categories/edit_all_cultural_scan/'.$id);
		    }
           
		} else {
			$data['questions'] = $this->Model_category->get_questions($id);
			//echo "<pre>";print_r($data['questions']);exit;
	       	$this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_questions_edit',$data);
			$this->load->view('admin/view_footer');
		}


}

	public function edit($id)
	{
		
    	$tot = $this->Model_category->categories_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/categories');
        	exit;
    	}
       	
       	$data['setting'] = $this->Model_common->get_setting_data();
		$error = '';
		$success = '';


		if(isset($_POST['form2'])) 
		{

			$valid = 1;

			$this->form_validation->set_rules('name', 'Category Name', 'trim|required');

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
		    	$data['category'] = $this->Model_category->get_category($id);

		    	if($path == '') {
		    		$form_data = array(
						'name'    => $_POST['name'],
						
		            );
		            $this->Model_category->categories_update($id,$form_data);
				}
				else {
					// unlink('./public/uploads/'.$data['category']['category_banner']);

					// $final_name = 'category-banner-'.$id.'.'.$ext;
		        	// move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );
					$date_modified = date("Y-m-d H:i:s");
		        	$form_data = array(
						'name'    => $_POST['name'],
						'date_modified'=>$date_modified
		            );
		            $this->Model_category->categories_update($id,$form_data);
				}
				
				$success = 'Category is updated successfully';
				$this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/categories');
		    }
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/categories/edit'.$id);
		    }
           
		} else {
			$data['categories'] = $this->Model_category->get_categories($id);
	       	$this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_categories_edit',$data);
			$this->load->view('admin/view_footer');
		}

	}
public function delete_questions_score_description($id){

	$tot = $this->Model_category->questions_score_description_check($id);
	if(!$tot) {
		redirect(base_url().'admin/categories');
		exit;
	}

	$questions_assessment = $this->Model_category->get_questions_score_description($id);

	$this->Model_category->delete_description($id);
	$success = 'Questions Assessment are deleted successfully';
	$this->session->set_flashdata('success',$success);
	redirect(base_url().'admin/categories/view_questions_score_description');

}
	public function delete_Work_personality_index($id){

		$tot = $this->Model_category->personality_assessment_check($id);
	if(!$tot) {
		redirect(base_url().'admin/categories');
		exit;
	}

	$questions_assessment = $this->Model_category->get_questions_assessment($id);

	$this->Model_category->delete_questions_assessment($id);
	$success = 'Questions Assessment are deleted successfully';
	$this->session->set_flashdata('success',$success);
	redirect(base_url().'admin/categories/view_Work_personality_index');	
	}
public function delete_personality_assessment($id){

	$tot = $this->Model_category->personality_assessment_check($id);
	if(!$tot) {
		redirect(base_url().'admin/categories');
		exit;
	}

	$questions_assessment = $this->Model_category->get_questions_assessment($id);

	$this->Model_category->delete_questions_assessment($id);
	$success = 'Questions Assessment are deleted successfully';
	$this->session->set_flashdata('success',$success);
	redirect(base_url().'admin/categories/view_all_personality_assessment');	
}

	public function delete_all_personal_values_assessment($id){

		$tot = $this->Model_category->questions_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/categories');
        	exit;
    	}

		$categories = $this->Model_category->get_questions($id);

		$this->Model_category->delete_questions($id);
		$success = 'Questions are deleted successfully';
		$this->session->set_flashdata('success',$success);
		redirect(base_url().'admin/categories/view_all_personal_values_assessment');
	
	}
	public function delete($id) 
	{
    	$tot = $this->Model_category->categories_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/categories');
        	exit;
    	}

		$categories = $this->Model_category->get_categories($id);

		$this->Model_category->delete_categories($id);
		$success = 'categories is deleted successfully';
		$this->session->set_flashdata('success',$success);
		redirect(base_url().'admin/categories');

    	
	}
	
public function delete_all_nayatel_values_assessment($id){

	$tot = $this->Model_category->questions_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/categories');
        	exit;
    	}

		$questions = $this->Model_category->get_questions($id);

		$this->Model_category->delete_questions($id);
		$success = 'Questions are deleted successfully';
		$this->session->set_flashdata('success',$success);
		redirect(base_url().'admin/categories/view_all_nayatel_values_assessment');
}

	public function delete_all_cultural_scan($id){

		$tot = $this->Model_category->questions_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/categories');
        	exit;
    	}

		$categories = $this->Model_category->get_questions($id);

		$this->Model_category->delete_questions($id);
		$success = 'Questions are deleted successfully';
		$this->session->set_flashdata('success',$success);
		redirect(base_url().'admin/categories/view_all_cultural_scan');


	}
	public function view_all_cultural_scan(){

		$data['setting'] = $this->Model_common->get_setting_data();
		$categories_id='1';
		$data['categories'] = $this->Model_category->view_all_cultural_scan($categories_id);
 //echo "<pre>";print_r($data['categories']);exit;
		$this->load->view('admin/view_header',$data);
		$this->load->view('admin/view_all_cultural_scan',$data);
		$this->load->view('admin/view_footer');
	
	}

	
public function add_cultural_scan(){
	
	$data['setting'] = $this->Model_common->get_setting_data();
		$categories_id='1';
		//$data['categories'] = $this->Model_category->view_all_cultural_scan($categories_id);
 //echo "<pre>";print_r($data['categories']);exit;
		$this->load->view('admin/view_header',$data);
		$this->load->view('admin/add_cultural_scan',$data);
		$this->load->view('admin/view_footer');

}

public function add_cultural_scan_value(){
$add_cultural_scan=$this->uri->segment(3);
 //echo "<pre>";print_r($add_cultural_scan);exit;
if($add_cultural_scan=='add_cultural_scan_value')
{
$categories_id='1';
}
else if($add_cultural_scan=='add_personal_values_assessment'){
	$categories_id='2';

}
else if($add_cultural_scan=='add_personality_assessment	'){
	$categories_id='3';

}
else if($add_cultural_scan=='add_Work_personality_index	'){
	$categories_id='9';

}
	
$date_created=date('Y-m-d H:i:s');
	// $cultural_scan='Cultural Scan';
	// $cultural_scan = $this->session->userdata('cultural_scan');
	
	// echo "<pre>";print_r($cultural_scan);exit;


	$data['setting'] = $this->Model_common->get_setting_data();

		$error = '';
		$success = '';

		if(isset($_POST['form2'])) {

			$valid = 1;

			$this->form_validation->set_rules('name1', '1', 'trim|required');
			$this->form_validation->set_rules('name2', '2', 'trim|required');
			$this->form_validation->set_rules('name3', '3', 'trim|required');
			$this->form_validation->set_rules('name4', '4', 'trim|required');
			$this->form_validation->set_rules('name5', '5', 'trim|required');
			$this->form_validation->set_rules('name6', '6', 'trim|required');
			$this->form_validation->set_rules('name7', '7', 'trim|required');
			$this->form_validation->set_rules('name8', '8', 'trim|required');
			$this->form_validation->set_rules('name9', '9', 'trim|required');
			$this->form_validation->set_rules('name10', '10', 'trim|required');
			$this->form_validation->set_rules('name11', '11', 'trim|required');
			$this->form_validation->set_rules('name12', '12', 'trim|required');
			$this->form_validation->set_rules('name13', '13', 'trim|required');
			$this->form_validation->set_rules('name14', '14', 'trim|required');
			$this->form_validation->set_rules('name15', '15', 'trim|required');
			$this->form_validation->set_rules('name16', '16', 'trim|required');
			

			if($this->form_validation->run() == FALSE) {
				$valid = 0;
                $error .= validation_errors();
            }
		 if($valid == 1) 
		    {
				$form_data = array(
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
					'value1'       => $_POST['value1'],
					'value2'       => $_POST['value2'],
					'value3'       => $_POST['value3'],
					'value4'       => $_POST['value4'],
					'value5'       => $_POST['value5'],
					'value6'       => $_POST['value6'],
					'value7'       => $_POST['value7'],
					'value8'       => $_POST['value8'],
					'categories_id'=>$categories_id,
					'date_created'=>$date_created,
				);
				 //echo "<pre>";print_r($form_data);exit;

	            $this->Model_category->add_cultural_scan_data($form_data);

		        $success = 'Cultural Scan Data has been added successfully!';
		        $this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/categories/view_all_cultural_scan');
		    } 
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/categories/add_cultural_scan');
		    }
            
        } else {            
            $this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_all_cultural_scan',$data);
			$this->load->view('admin/view_footer');
        }

}
public function add_description(){

	$data['setting'] = $this->Model_common->get_setting_data();

		$error = '';
		$success = '';

		if(isset($_POST['form4'])) {

			$valid = 1;

			$this->form_validation->set_rules('name', 'Test Name', 'trim|required');
			$this->form_validation->set_rules('score', 'Score', 'trim|required');

			//$this->form_validation->set_rules('description', 'Test Name', 'trim|required');

			if($this->form_validation->run() == FALSE) {
				$valid = 0;
                $error .= validation_errors();
            }

            

		   

		    if($valid == 1) 
		    {
				
		        $form_data = array(
					'name'    => $_POST['name'],
					'categories_id'       => $_POST['categories_id'],
					'score'       => $_POST['score'],
					
	            );
				$this->Model_category->add_description($form_data);
				
				$data['questions_score_description'] = $this->Model_category->get_questions_score_description();
		        $success = 'Description has been added successfully!';
				$this->session->set_flashdata('success',$success);
				//$this->load->view('admin/view_questions_score_description',$data);
				redirect(base_url().'admin/categories/view_questions_score_description',$data);
		    } 
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/categories/add_description');
		    }
            
        } else {    
			$data['questions_score_description'] = $this->Model_category->get_questions_score_description();
        
            $this->load->view('admin/view_header',$data);
			$this->load->view('admin/questions_score_description',$data);
			$this->load->view('admin/view_footer');
        }
}
public function view_questions_score_description(){

		$data['setting'] = $this->Model_common->get_setting_data();
		$data['categories'] = $this->Model_category->show();
		$data['questions_score_description'] = $this->Model_category->get_questions_score_description();

		$this->load->view('admin/view_header',$data);
		$this->load->view('admin/view_questions_score_description',$data);
		$this->load->view('admin/view_footer');

}

public function questions_score_description(){

	$data['setting'] = $this->Model_common->get_setting_data();
	$categories_id='5';
	$data['dimensions'] = $this->Model_category->get_dimensions();

	//$data['categories'] = $this->Model_category->view_all_Work_personality_index($categories_id);
	//echo "<pre>";print_r($data['categories']);exit;
	$this->load->view('admin/view_header',$data);
	$this->load->view('admin/add_description',$data);
	$this->load->view('admin/view_footer');

}

public function add_description_data(){

	$data['setting'] = $this->Model_common->get_setting_data();

	$error = '';
	$success = '';

	if(isset($_POST['form2'])) {

		$valid = 1;

		$this->form_validation->set_rules('name', 'Test Name', 'trim|required');

		if($this->form_validation->run() == FALSE) {
			$valid = 0;
			$error .= validation_errors();
		}

		$path = $_FILES['banner']['name'];
		$path_tmp = $_FILES['banner']['tmp_name'];

		if($path!='') {
			$ext = pathinfo( $path, PATHINFO_EXTENSION );
			$file_name = basename( $path, '.' . $ext );
			$ext_check = $this->Model_common->extension_check_photo($ext);
			if($ext_check == FALSE) {
				$valid = 0;
				$error .= 'You must have to upload jpg, jpeg, gif or png file for banner<br>';
			}
		} else {
			$valid = 0;
			$error .= '<br>';
		}

		if($valid == 1) 
		{
			$next_id = $this->Model_category->get_auto_increment_id();
			foreach ($next_id as $row) {
				$ai_id = $row['Auto_increment'];
			}

			$final_name = 'category-banner-'.$ai_id.'.'.$ext;
			move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

			$form_data = array(
				'name'    => $_POST['name'],
				'category_banner'  => $final_name,
				'meta_title'       => $_POST['meta_title'],
				'meta_keyword'     => $_POST['meta_keyword'],
				'meta_description' => $_POST['meta_description']
			);
			$this->Model_category->add($form_data);

			$success = 'Category is added successfully!';
			$this->session->set_flashdata('success',$success);
			redirect(base_url().'admin/categories');
		} 
		else
		{
			$this->session->set_flashdata('error',$error);
			redirect(base_url().'admin/categories/add');
		}
		
	} else {            
		$this->load->view('admin/view_header',$data);
		$this->load->view('admin/view_categories_add',$data);
		$this->load->view('admin/view_footer');
	}
	
}
public function add_Work_personality_index(){

	$data['setting'] = $this->Model_common->get_setting_data();
	$categories_id='5';
	$data['Work_personality_index'] = $this->Model_category->get_Work_personality_index($categories_id);
//echo "<pre>";print_r($data['categories']);exit;
	$this->load->view('admin/view_header',$data);
	$this->load->view('admin/add_Work_personality_index',$data);
	$this->load->view('admin/view_footer');
}

public function add_Work_personality_index_data(){
	// $radio_value1=$this->input->post($_POST['radio1']);
	// $radio_value2=$this->input->post($_POST['radio2']);
	// $radio_value3=$this->input->post($_POST['radio3']);
	// $radio_value4=$this->input->post($_POST['radio4']);
	// $radio_value5=$this->input->post($_POST['radio5']);
	// $radio_value6=$this->input->post($_POST['radio6']);
	// $radio_value7=$this->input->post($_POST['radio7']);
	// $radio_value8=$this->input->post($_POST['radio8']);
	// $radio_value9=$this->input->post($_POST['radio9']);
	// $radio_value10=$this->input->post($_POST['radio10']);
	// $radio_value11=$this->input->post($_POST['radio11']);
	// $radio_value12=$this->input->post($_POST['radio12']);
	// $radio_value13=$this->input->post($_POST['radio13']);
	// $radio_value14=$this->input->post($_POST['radio14']);
	// $radio_value15=$this->input->post($_POST['radio15']);
	//echo "<pre>";print_r($_POST);exit;
	
		//$query   = $_POST['highly_likely1'];
						//$query   = $_POST['neutral1'];
					//	$query   = $_POST['unlikely1'];
					//	$query   = $_POST['highly_unlikely1'];
						
		$add_cultural_scan=$this->uri->segment(3);
		//echo "<pre>";print_r($add_cultural_scan);exit;
	   if($add_cultural_scan=='add_cultural_scan_value')
	   {
	   $categories_id='1';
	   }
	   else if ($add_cultural_scan=='add_nayatel_values_assessment'){
	
		$categories_id='2';
	   }
	   else if($add_cultural_scan=='add_personal_values_assessment'){
		   $categories_id='3';
	   
	   }
	   else if($add_cultural_scan=='add_personality_assessment	'){
		   $categories_id='4';
	   
	   }
	   else if($add_cultural_scan=='add_Work_personality_index_data'){
		   $categories_id='5';
	   
	   }
		   
			
		$date_created=date('Y-m-d H:i:s');
			// $cultural_scan='Cultural Scan';
			// $cultural_scan = $this->session->userdata('cultural_scan');
			
			// echo "<pre>";print_r($cultural_scan);exit;
		
		
			$data['setting'] = $this->Model_common->get_setting_data();
		
				$error = '';
				$success = '';
		
				if(isset($_POST['form2'])) {
		
					$valid = 1;
		
					$this->form_validation->set_rules('name1', '1', 'trim|required');
					$this->form_validation->set_rules('name2', '2', 'trim|required');
					$this->form_validation->set_rules('name3', '3', 'trim|required');
					$this->form_validation->set_rules('name4', '4', 'trim|required');
					$this->form_validation->set_rules('name5', '5', 'trim|required');
					$this->form_validation->set_rules('name6', '6', 'trim|required');
					$this->form_validation->set_rules('name7', '7', 'trim|required');
					$this->form_validation->set_rules('name8', '8', 'trim|required');
					$this->form_validation->set_rules('name9', '9', 'trim|required');
					$this->form_validation->set_rules('name10', '10', 'trim|required');
					$this->form_validation->set_rules('name11', '11', 'trim|required');
					$this->form_validation->set_rules('name12', '12', 'trim|required');
					$this->form_validation->set_rules('name13', '13', 'trim|required');
					$this->form_validation->set_rules('name14', '14', 'trim|required');
					$this->form_validation->set_rules('name15', '15', 'trim|required');
					// $this->form_validation->set_rules('radio1', 'radio button 1', 'trim|required');
					// $this->form_validation->set_rules('radio2', 'radio button 2', 'trim|required');
					// $this->form_validation->set_rules('radio3', 'radio button 3', 'trim|required');
					// $this->form_validation->set_rules('radio4', 'radio button 4', 'trim|required');
					// $this->form_validation->set_rules('radio5', 'radio button 5', 'trim|required');
					// $this->form_validation->set_rules('radio6', 'radio button 6', 'trim|required');
					// $this->form_validation->set_rules('radio7', 'radio button 7', 'trim|required');
					// $this->form_validation->set_rules('radio8', 'radio button 8', 'trim|required');
					// $this->form_validation->set_rules('radio9', 'radio button 9', 'trim|required');
					// $this->form_validation->set_rules('radio10', 'radio button 10', 'trim|required');
					// $this->form_validation->set_rules('radio11', 'radio button 11', 'trim|required');
					// $this->form_validation->set_rules('radio12', 'radio button 12', 'trim|required');
					// $this->form_validation->set_rules('radio13', 'radio button 13', 'trim|required');
					// $this->form_validation->set_rules('radio14', 'radio button 14', 'trim|required');
					// $this->form_validation->set_rules('radio15', 'radio button 15', 'trim|required');
					
					
		
					if($this->form_validation->run() == FALSE) {
						$valid = 0;
						$error .= validation_errors();
					}
				 if($valid == 1) 
					{
						//$query   = $_POST['highly_likely1'];
						//$query   = $_POST['very_likely1'];
						//$query   = $_POST['neutral1'];
					//	$query   = $_POST['unlikely1'];
					//	$query   = $_POST['highly_unlikely1'];
						//echo "<pre>";print_r($query);exit;
						$form_data = array(
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
							// 'value1'       => $_POST['radio1'],
							// 'value2'       => $_POST['radio2'],
							// 'value3'       => $_POST['radio3'],
							// 'value4'       => $_POST['radio4'],
							// 'value5'       => $_POST['radio5'],
							// 'value6'       => $_POST['radio6'],
							// 'value7'       => $_POST['radio7'],
							// 'value8'       => $_POST['radio8'],
							// 'value9'       => $_POST['radio9'],
							// 'value10'       => $_POST['radio10'],
							// 'value11'       => $_POST['radio11'],
							// 'value12'       => $_POST['radio12'],
							// 'value13'       => $_POST['radio13'],
							// 'value14'       => $_POST['radio14'],
							// 'value15'       => $_POST['radio15'],
							'categories_id'=>$categories_id,
							'date_created'=>$date_created,
						);
						 //echo "<pre>";print_r($form_data);exit;
		//personal_values_assessment_data
						$this->Model_category->personality_assessment_data($form_data);
		
						$success = 'Work Personality Index Values Assessment Data has been added successfully!';
						$this->session->set_flashdata('success',$success);
						redirect(base_url().'admin/categories/view_Work_personality_index');
					} 
					else
					{
						$this->session->set_flashdata('error',$error);
						redirect(base_url().'admin/categories/add_Work_personality_index');
					}
					
				} else {            
					$this->load->view('admin/view_header',$data);
					$this->load->view('admin/add_Work_personality_index',$data);
					$this->load->view('admin/view_footer');
				}

}

// public function add_personal_values_assessment(){

// 	$data['setting'] = $this->Model_common->get_setting_data();
// 		$data['categories'] = $this->Model_category->show();

// 		$this->load->view('admin/view_header',$data);
// 		$this->load->view('admin/add_personal_values_assessment',$data);
// 		$this->load->view('admin/view_footer');

// }

public function add_personal_values_assessment(){
// $radio_value1=$this->input->post($_POST['radio1']);
// $radio_value2=$this->input->post($_POST['radio2']);
// $radio_value3=$this->input->post($_POST['radio3']);
// $radio_value4=$this->input->post($_POST['radio4']);
// $radio_value5=$this->input->post($_POST['radio5']);
// $radio_value6=$this->input->post($_POST['radio6']);
// $radio_value7=$this->input->post($_POST['radio7']);
// $radio_value8=$this->input->post($_POST['radio8']);
// $radio_value9=$this->input->post($_POST['radio9']);
// $radio_value10=$this->input->post($_POST['radio10']);
// $radio_value11=$this->input->post($_POST['radio11']);
// $radio_value12=$this->input->post($_POST['radio12']);
// $radio_value13=$this->input->post($_POST['radio13']);
// $radio_value14=$this->input->post($_POST['radio14']);
// $radio_value15=$this->input->post($_POST['radio15']);
//echo "<pre>";print_r($_POST);exit;

	//$query   = $_POST['highly_likely1'];
					//$query   = $_POST['neutral1'];
				//	$query   = $_POST['unlikely1'];
				//	$query   = $_POST['highly_unlikely1'];
					
	$add_cultural_scan=$this->uri->segment(3);
	//echo "<pre>";print_r($add_cultural_scan);exit;
   if($add_cultural_scan=='add_cultural_scan_value')
   {
   $categories_id='1';
   }
   else if ($add_cultural_scan=='add_nayatel_values_assessment'){

	$categories_id='2';
   }
   else if($add_cultural_scan=='add_personal_values_assessment'){
	   $categories_id='3';
   
   }
   else if($add_cultural_scan=='add_personality_assessment	'){
	   $categories_id='4';
   
   }
   else if($add_cultural_scan=='add_Work_personality_index	'){
	   $categories_id='5';
   
   }
	   
		
	$date_created=date('Y-m-d H:i:s');
		// $cultural_scan='Cultural Scan';
		// $cultural_scan = $this->session->userdata('cultural_scan');
		
		// echo "<pre>";print_r($cultural_scan);exit;
	
	
		$data['setting'] = $this->Model_common->get_setting_data();
	
			$error = '';
			$success = '';
	
			if(isset($_POST['form2'])) {
	
				$valid = 1;
	
				$this->form_validation->set_rules('name1', '1', 'trim|required');
				$this->form_validation->set_rules('name2', '2', 'trim|required');
				$this->form_validation->set_rules('name3', '3', 'trim|required');
				$this->form_validation->set_rules('name4', '4', 'trim|required');
				$this->form_validation->set_rules('name5', '5', 'trim|required');
				$this->form_validation->set_rules('name6', '6', 'trim|required');
				$this->form_validation->set_rules('name7', '7', 'trim|required');
				$this->form_validation->set_rules('name8', '8', 'trim|required');
				$this->form_validation->set_rules('name9', '9', 'trim|required');
				$this->form_validation->set_rules('name10', '10', 'trim|required');
				$this->form_validation->set_rules('name11', '11', 'trim|required');
				$this->form_validation->set_rules('name12', '12', 'trim|required');
				$this->form_validation->set_rules('name13', '13', 'trim|required');
				$this->form_validation->set_rules('name14', '14', 'trim|required');
				$this->form_validation->set_rules('name15', '15', 'trim|required');
				$this->form_validation->set_rules('radio1', 'radio button 1', 'trim|required');
				$this->form_validation->set_rules('radio2', 'radio button 2', 'trim|required');
				$this->form_validation->set_rules('radio3', 'radio button 3', 'trim|required');
				$this->form_validation->set_rules('radio4', 'radio button 4', 'trim|required');
				$this->form_validation->set_rules('radio5', 'radio button 5', 'trim|required');
				$this->form_validation->set_rules('radio6', 'radio button 6', 'trim|required');
				$this->form_validation->set_rules('radio7', 'radio button 7', 'trim|required');
				$this->form_validation->set_rules('radio8', 'radio button 8', 'trim|required');
				$this->form_validation->set_rules('radio9', 'radio button 9', 'trim|required');
				$this->form_validation->set_rules('radio10', 'radio button 10', 'trim|required');
				$this->form_validation->set_rules('radio11', 'radio button 11', 'trim|required');
				$this->form_validation->set_rules('radio12', 'radio button 12', 'trim|required');
				$this->form_validation->set_rules('radio13', 'radio button 13', 'trim|required');
				$this->form_validation->set_rules('radio14', 'radio button 14', 'trim|required');
				$this->form_validation->set_rules('radio15', 'radio button 15', 'trim|required');
				
				
	
				if($this->form_validation->run() == FALSE) {
					$valid = 0;
					$error .= validation_errors();
				}
			 if($valid == 1) 
				{
					//$query   = $_POST['highly_likely1'];
					//$query   = $_POST['very_likely1'];
					//$query   = $_POST['neutral1'];
				//	$query   = $_POST['unlikely1'];
				//	$query   = $_POST['highly_unlikely1'];
					//echo "<pre>";print_r($query);exit;
					$form_data = array(
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
						'value1'       => $_POST['radio1'],
						'value2'       => $_POST['radio2'],
						'value3'       => $_POST['radio3'],
						'value4'       => $_POST['radio4'],
						'value5'       => $_POST['radio5'],
						'value6'       => $_POST['radio6'],
						'value7'       => $_POST['radio7'],
						'value8'       => $_POST['radio8'],
						'value9'       => $_POST['radio9'],
						'value10'       => $_POST['radio10'],
						'value11'       => $_POST['radio11'],
						'value12'       => $_POST['radio12'],
						'value13'       => $_POST['radio13'],
						'value14'       => $_POST['radio14'],
						'value15'       => $_POST['radio15'],
						'categories_id'=>$categories_id,
						'date_created'=>$date_created,
					);
					 //echo "<pre>";print_r($form_data);exit;
	//personal_values_assessment_data
					$this->Model_category->personality_assessment_data($form_data);
	
					$success = 'Personality Values Assessment Data has been added successfully!';
					$this->session->set_flashdata('success',$success);
					redirect(base_url().'admin/categories/view_all_personal_values_assessment');
				} 
				else
				{
					$this->session->set_flashdata('error',$error);
					redirect(base_url().'admin/categories/add_personal_values_assessment');
				}
				
			} else {            
				$this->load->view('admin/view_header',$data);
				$this->load->view('admin/add_personal_values_assessment',$data);
				$this->load->view('admin/view_footer');
			}
	
	}
	
	
public function add_personality_assessment(){

	$add_cultural_scan=$this->uri->segment(3);
	
	if($add_cultural_scan=='add_cultural_scan_value')
	{
	$categories_id='1';
	}
	else if ($add_cultural_scan=='add_nayatel_values_assessment_data'){
 
	 $categories_id='2';
	}
	else if($add_cultural_scan=='add_personal_values_assessment'){
		$categories_id='3';
	
	}
	else if($add_cultural_scan=='add_personality_assessment'){
		$categories_id='4';
	
	}
	else if($add_cultural_scan=='add_Work_personality_index'){
		$categories_id='5';
	
	}
	//echo "<pre>";print_r($categories_id);exit; 
	$date_created=date('Y-m-d H:i:s');
		// $cultural_scan='Cultural Scan';
		// $cultural_scan = $this->session->userdata('cultural_scan');
		
		// echo "<pre>";print_r($cultural_scan);exit;
	
	
		$data['setting'] = $this->Model_common->get_setting_data();
	
			$error = '';
			$success = '';
	
			if(isset($_POST['form2'])) {
	
				$valid = 1;
	
				$this->form_validation->set_rules('name1', '1', 'trim|required');
				$this->form_validation->set_rules('name2', '2', 'trim|required');
				$this->form_validation->set_rules('name3', '3', 'trim|required');
				$this->form_validation->set_rules('name4', '4', 'trim|required');
				$this->form_validation->set_rules('name5', '5', 'trim|required');
				$this->form_validation->set_rules('name6', '6', 'trim|required');
				$this->form_validation->set_rules('name7', '7', 'trim|required');
				$this->form_validation->set_rules('name8', '8', 'trim|required');
				$this->form_validation->set_rules('name9', '9', 'trim|required');
				$this->form_validation->set_rules('name10', '10', 'trim|required');
				$this->form_validation->set_rules('name11', '11', 'trim|required');
				$this->form_validation->set_rules('name12', '12', 'trim|required');
				$this->form_validation->set_rules('name13', '13', 'trim|required');
				$this->form_validation->set_rules('name14', '14', 'trim|required');
				$this->form_validation->set_rules('name15', '15', 'trim|required');

				$this->form_validation->set_rules('radio1', '1', 'trim|required');
				$this->form_validation->set_rules('radio2', '2', 'trim|required');
				$this->form_validation->set_rules('radio3', '3', 'trim|required');
				$this->form_validation->set_rules('radio4', '4', 'trim|required');
				$this->form_validation->set_rules('radio5', '5', 'trim|required');
				$this->form_validation->set_rules('radio6', '6', 'trim|required');
				$this->form_validation->set_rules('radio7', '7', 'trim|required');
				$this->form_validation->set_rules('radio8', '8', 'trim|required');
				$this->form_validation->set_rules('radio9', '9', 'trim|required');
				$this->form_validation->set_rules('radio10', '10', 'trim|required');
				$this->form_validation->set_rules('radio11', '11', 'trim|required');
				$this->form_validation->set_rules('radio12', '12', 'trim|required');
				$this->form_validation->set_rules('radio13', '13', 'trim|required');
				$this->form_validation->set_rules('radio14', '14', 'trim|required');
				$this->form_validation->set_rules('radio15', '15', 'trim|required');

				
	
				if($this->form_validation->run() == FALSE) {
					$valid = 0;
					$error .= validation_errors();
				}
			 if($valid == 1) 
				{
					$form_data = array(
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


						'value1'       => $_POST['radio1'],
						'value2'       => $_POST['radio2'],
						'value3'       => $_POST['radio3'],
						'value4'       => $_POST['radio4'],
						'value5'       => $_POST['radio5'],
						'value6'       => $_POST['radio6'],
						'value7'       => $_POST['radio7'],
						'value8'       => $_POST['radio8'],
						'value9'       => $_POST['radio9'],
						'value10'       => $_POST['radio10'],
						'value11'       => $_POST['radio11'],
						'value12'       => $_POST['radio12'],
						'value13'       => $_POST['radio13'],
						'value14'       => $_POST['radio14'],
						'value15'       => $_POST['radio15'],


						'categories_id'=>$categories_id,
						'date_created'=>$date_created,
					);
					 //echo "<pre>";print_r($form_data);exit;
	
					$this->Model_category->personality_assessment_data($form_data);
	
					$success = 'Personality Values Assessment Data has been added successfully!';
					$this->session->set_flashdata('success',$success);
					redirect(base_url().'admin/categories/view_all_personality_assessment');
				} 
				else
				{
					$this->session->set_flashdata('error',$error);
					redirect(base_url().'admin/categories/add_personality_assessment');
				}
				
			} else {            
				$this->load->view('admin/view_header',$data);
				$this->load->view('admin/add_personality_assessment',$data);
				$this->load->view('admin/view_footer');
			}
  
}	
	
public function add_nayatel_values_assessment_data(){

	$add_cultural_scan=$this->uri->segment(3);
	
   if($add_cultural_scan=='add_cultural_scan_value')
   {
   $categories_id='1';
   }
   else if ($add_cultural_scan=='add_nayatel_values_assessment_data'){

	$categories_id='2';
   }
   else if($add_cultural_scan=='add_personal_values_assessment'){
	   $categories_id='3';
   
   }
   else if($add_cultural_scan=='add_personality_assessment	'){
	   $categories_id='4';
   
   }
   else if($add_cultural_scan=='add_Work_personality_index	'){
	   $categories_id='5';
   
   }
   //echo "<pre>";print_r($categories_id);exit; 
   $date_created=date('Y-m-d H:i:s');
	   // $cultural_scan='Cultural Scan';
	   // $cultural_scan = $this->session->userdata('cultural_scan');
	   
	   // echo "<pre>";print_r($cultural_scan);exit;
   
   
	   $data['setting'] = $this->Model_common->get_setting_data();
   
		   $error = '';
		   $success = '';
   
		   if(isset($_POST['form2'])) {
   
			   $valid = 1;
   
			   $this->form_validation->set_rules('name1', '1', 'trim|required');
			   $this->form_validation->set_rules('name2', '2', 'trim|required');
			   $this->form_validation->set_rules('name3', '3', 'trim|required');
			   $this->form_validation->set_rules('name4', '4', 'trim|required');
			   $this->form_validation->set_rules('name5', '5', 'trim|required');
			   $this->form_validation->set_rules('name6', '6', 'trim|required');
			   $this->form_validation->set_rules('name7', '7', 'trim|required');
			   $this->form_validation->set_rules('name8', '8', 'trim|required');
			   $this->form_validation->set_rules('name9', '9', 'trim|required');
			   $this->form_validation->set_rules('name10', '10', 'trim|required');
			   $this->form_validation->set_rules('name11', '11', 'trim|required');
			   $this->form_validation->set_rules('name12', '12', 'trim|required');
			   $this->form_validation->set_rules('name13', '13', 'trim|required');
			   $this->form_validation->set_rules('name14', '14', 'trim|required');
			   $this->form_validation->set_rules('name15', '15', 'trim|required');
			   $this->form_validation->set_rules('name16', '16', 'trim|required');
			   $this->form_validation->set_rules('name13', '17', 'trim|required');
			   $this->form_validation->set_rules('name14', '18', 'trim|required');
			   $this->form_validation->set_rules('name15', '19', 'trim|required');
			   $this->form_validation->set_rules('name16', '20', 'trim|required');
			   
   
			   if($this->form_validation->run() == FALSE) {
				   $valid = 0;
				   $error .= validation_errors();
			   }
			if($valid == 1) 
			   {
				   $form_data = array(
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
					   'value1'       => $_POST['value1'],
					   'value2'       => $_POST['value2'],
					   'value3'       => $_POST['value3'],
					   'value4'       => $_POST['value4'],
					   'value5'       => $_POST['value5'],
					   'value6'       => $_POST['value6'],
					   'value7'       => $_POST['value7'],
					   'value8'       => $_POST['value8'],
					   'value9'       => $_POST['value9'],
					   'value10'       => $_POST['value10'],
					   'value11'       => $_POST['value11'],
					   'value12'       => $_POST['value12'],
					   'value13'       => $_POST['value13'],
					   'value14'       => $_POST['value14'],
					   'value15'       => $_POST['value15'],
					   'value16'       => $_POST['value16'],
					   'value17'       => $_POST['value17'],
					   'value18'       => $_POST['value18'],
					   'value19'       => $_POST['value19'],
					   'value20'       => $_POST['value20'],
					   'categories_id'=>$categories_id,
					   'date_created'=>$date_created,
				   );
					//echo "<pre>";print_r($form_data);exit;
   
				   $this->Model_category->nayatel_values_assessment_data($form_data);
   
				   $success = 'Nayatel Values Assessment Data has been added successfully!';
				   $this->session->set_flashdata('success',$success);
				   redirect(base_url().'admin/categories/add_nayatel_values_assessment');
			   } 
			   else
			   {
				   $this->session->set_flashdata('error',$error);
				   redirect(base_url().'admin/categories/add_nayatel_values_assessment');
			   }
			   
		   } else {            
			   $this->load->view('admin/view_header',$data);
			   $this->load->view('admin/add_nayatel_values_assessment',$data);
			   $this->load->view('admin/view_footer');
		   }
   
   
}

public function add_nayatel_values_assessment(){
	
	$data['setting'] = $this->Model_common->get_setting_data();
		$categories_id='2';
		//$data['categories'] = $this->Model_category->view_all_cultural_scan($categories_id);
 //echo "<pre>";print_r($data['categories']);exit;
		$this->load->view('admin/view_header',$data);
		$this->load->view('admin/add_nayatel_values_assessment',$data);
		$this->load->view('admin/view_footer');

}
public function delete__all_nayatel_values_assessment(){


}
public function edit_all_personal_values_assessment($id){

	$tot = $this->Model_category->questions_check($id);
	if(!$tot) {
		redirect(base_url().'admin/categories/edit_all_personal_values_assessment');
		exit;
	}
	   
	   $data['setting'] = $this->Model_common->get_setting_data();
	$error = '';
	$success = '';


	if(isset($_POST['form2'])) 
	{

		$valid = 1;

		$this->form_validation->set_rules('name', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('value', 'Score', 'trim|required');


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
			$data['questions'] = $this->Model_category->get_questions($id);

			if($data['questions'] == '') {
				$form_data = array(
					'name'    => $_POST['name'],
					'value'    => $_POST['value'],
					
				);
				$this->Model_category->categories_update($id,$form_data);
			}
			else {
				// unlink('./public/uploads/'.$data['category']['category_banner']);

				// $final_name = 'category-banner-'.$id.'.'.$ext;
				// move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );
				$date_modified = date("Y-m-d H:i:s");
				$form_data = array(
					'name'    => $_POST['name'],
					'value'    => $_POST['value'],
					'date_modified'=>$date_modified
				);
			//	echo "<pre>";print_r($form_data);exit;
				$this->Model_category->questions_update($id,$form_data);
			}
			
			$success = 'Questions are updated successfully';
			$this->session->set_flashdata('success',$success);
			redirect(base_url().'admin/categories/view_all_personal_values_assessment');
		}
		else
		{
			$this->session->set_flashdata('error',$error);
			redirect(base_url().'admin/categories/edit_all_personal_values_assessment'.$id);
		}
	   
	} else {

		$data['questions'] = $this->Model_category->get_questions($id);
		//echo "<pre>";print_r($data['questions']) ;exit;
		   $this->load->view('admin/view_header',$data);
		$this->load->view('admin/edit_all_personal_values_assessment',$data);
		$this->load->view('admin/view_footer');
	}
}

public function edit_all_nayatel_values_assessment($id){

	$tot = $this->Model_category->questions_check($id);
	if(!$tot) {
		redirect(base_url().'admin/categories');
		exit;
	}
	   
	   $data['setting'] = $this->Model_common->get_setting_data();
	$error = '';
	$success = '';


	if(isset($_POST['form2'])) 
	{

		$valid = 1;

		$this->form_validation->set_rules('name', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('value', 'Score', 'trim|required');


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
			$data['questions'] = $this->Model_category->get_questions($id);

			if($data['questions'] == '') {
				$form_data = array(
					'name'    => $_POST['name'],
					'value'    => $_POST['value'],
					
				);
				$this->Model_category->categories_update($id,$form_data);
			}
			else {
				// unlink('./public/uploads/'.$data['category']['category_banner']);

				// $final_name = 'category-banner-'.$id.'.'.$ext;
				// move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );
				$date_modified = date("Y-m-d H:i:s");
				$form_data = array(
					'name'    => $_POST['name'],
					'value'    => $_POST['value'],
					'date_modified'=>$date_modified
				);
			//	echo "<pre>";print_r($form_data);exit;
				$this->Model_category->questions_update($id,$form_data);
			}
			
			$success = 'Questions are updated successfully';
			$this->session->set_flashdata('success',$success);
			redirect(base_url().'admin/categories/view_all_nayatel_values_assessment');
		}
		else
		{
			$this->session->set_flashdata('error',$error);
			redirect(base_url().'admin/categories/edit_all_nayatel_values_assessment'.$id);
		}
	   
	} else {

		$data['questions'] = $this->Model_category->get_questions($id);
		//echo "<pre>";print_r($data['questions']) ;exit;
		   $this->load->view('admin/view_header',$data);
		$this->load->view('admin/edit_all_nayatel_values_assessment',$data);
		$this->load->view('admin/view_footer');
	}
}
public function view_Work_personality_index(){

	$data['setting'] = $this->Model_common->get_setting_data();
		$categories_id='5';
		$data['Work_personality_index'] = $this->Model_category->view_all_Work_personality_index($categories_id);
 //echo "<pre>";print_r($data['questions']);exit;
		$this->load->view('admin/view_header',$data);
		$this->load->view('admin/view_all_Work_personality_index',$data);
		$this->load->view('admin/view_footer');
}
	public function view_all_nayatel_values_assessment(){

		$data['setting'] = $this->Model_common->get_setting_data();
		$categories_id='2';
		$data['questions'] = $this->Model_category->view_all_nayatel_values_assessment($categories_id);
 //echo "<pre>";print_r($data['questions']);exit;
		$this->load->view('admin/view_header',$data);
		$this->load->view('admin/view_all_nayatel_values_assessment',$data);
		$this->load->view('admin/view_footer');
	
	}
	public function view_all_personal_values_assessment(){

		$data['setting'] = $this->Model_common->get_setting_data();
		$categories_id='3';
		$data['questions'] = $this->Model_category->view_all_personal_values_assessment($categories_id);
 //echo "<pre>";print_r($data['questions']);exit;
		$this->load->view('admin/view_header',$data);
		$this->load->view('admin/view_all_personal_values_assessment',$data);
		$this->load->view('admin/view_footer');
	
	}
public function view_all_personality_assessment(){

	$data['setting'] = $this->Model_common->get_setting_data();
		$categories_id='4';
		$data['personality_assessment'] = $this->Model_category->view_all_personality_assessment($categories_id);
 //echo "<pre>";print_r($data['personality_assessment']);exit;
		$this->load->view('admin/view_header',$data);
		$this->load->view('admin/view_all_personality_assessment',$data);
		$this->load->view('admin/view_footer');
}

public function view_all_Work_personality_index(){

	$data['setting'] = $this->Model_common->get_setting_data();
	$categories_id='5';
	//$data['categories'] = $this->Model_category->view_all_Work_personality_index($categories_id);
//echo "<pre>";print_r($data['categories']);exit;
	$this->load->view('admin/view_header',$data);
	$this->load->view('admin/add_Work_personality_index',$data);
	$this->load->view('admin/view_footer');

}

}