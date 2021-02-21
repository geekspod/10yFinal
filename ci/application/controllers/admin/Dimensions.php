<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dimensions extends CI_Controller 
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
		$data['dimensions'] = $this->Model_category->get_dimensions();
//echo "<pre>";print_r($data['dimensions']);exit;
		$this->load->view('admin/view_header',$data);
		$this->load->view('admin/add_dimensions',$data);
		$this->load->view('admin/view_footer');
	}
	public function sub_categories(){

		$data['setting'] = $this->Model_common->get_setting_data();
		$data['categories'] = $this->Model_category->get_dimensions();
		$id='5';
		$data['dimensions'] = $this->Model_category->get_sub_categories();
		//$data['categories'] = $this->Model_category->get_specific_categories($id);
//echo "<pre>";print_r($data['categories']);exit;
		$this->load->view('admin/view_header',$data);
		$this->load->view('admin/add_sub_categories',$data);
		$this->load->view('admin/view_footer');
	}

	public function view_sub_categories(){
		$data['setting'] = $this->Model_common->get_setting_data();
		$data['sub_categories'] = $this->Model_category->get_all_sub_categories();
		//$categories_id=$sub_categories['categories_id'];
		//$dimensions_id=$sub_categories['dimensions_id'];
// 		foreach($sub_categories as $row)
// 		{
// 			$categories_id = $row['categories_id']; 
// 			$dimensions_id = $row['dimensions_id']; 
// 		}
// echo "<pre>";print_r($dimensions_id);exit;
		$this->load->view('admin/view_header',$data);
		$this->load->view('admin/view_sub_categories',$data);
		$this->load->view('admin/view_footer');

	}
public function view(){

	$data['setting'] = $this->Model_common->get_setting_data();
		$data['dimensions'] = $this->Model_category->get_all_dimensions();
//echo "<pre>";print_r($data['dimensions']);exit;
		$this->load->view('admin/view_header',$data);
		$this->load->view('admin/view_dimensions',$data);
		$this->load->view('admin/view_footer');
}

public function add_score(){
	$data['dimensions_id']  = $this->uri->segment('4');
//echo $value;exit;
	$data['setting'] = $this->Model_common->get_setting_data();
	

	$this->load->view('admin/view_header',$data);
	$this->load->view('admin/add_dimensions_score',$data);
	$this->load->view('admin/view_footer');
}

public function add_dimensions_score(){
//echo "sdd";exit;
	// $value=$this->input->post('value');
	// $dimensions_id=$this->input->post('dimensions_id');
	// echo "<pre>";print_r($value);
	// echo "<pre>";print_r($dimensions_id);exit;

	$form_data = array(
		'value'    => $_POST['value'],
		'dimensions_id'       => $_POST['dimensions_id'],
		
	);
	$this->Model_category->add_dimensions_score($form_data);

	$success = 'Category Score is added successfully!';
	$this->session->set_flashdata('success',$success);
	redirect(base_url().'admin/dimensions');
}
public function add_sub_categories_data(){

	$data['setting'] = $this->Model_common->get_setting_data();

	$error = '';
	$success = '';

	if(isset($_POST['form3'])) {

		$valid = 1;

		$this->form_validation->set_rules('name', 'Sub Categories Name', 'trim|required');

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

			$form_data = array(
				'name'    => $_POST['name'],
				'categories_id' => $_POST['categories_id'],
				'dimensions_id' => $_POST['dimensions_id'],
			);
		//	echo "<pre>";print_r($form_data);exit;
			$this->Model_category->add_sub_categories_data($form_data);

			$success = 'Sub Category is added successfully!';
			$this->session->set_flashdata('success',$success);
			redirect(base_url().'admin/dimensions/view_sub_categories');
		} 
		else
		{
			$this->session->set_flashdata('error',$error);
			redirect(base_url().'admin/dimensions/add_sub_categories');
		}
		
	} else {            
		$this->load->view('admin/view_header',$data);
		$this->load->view('admin/view_sub_categories',$data);
		$this->load->view('admin/view_footer');
	}
		
}

public function add()
	{
		
//echo "sdd";exit;
       
		$data['setting'] = $this->Model_common->get_setting_data();

		$error = '';
		$success = '';

		if(isset($_POST['form2'])) {

			$valid = 1;

			$this->form_validation->set_rules('name', 'dimensions Name', 'trim|required');

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
				redirect(base_url().'admin/dimensions');
		    } 
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/dimensions/add');
		    }
            
        } else {            
            $this->load->view('admin/view_header',$data);
			$this->load->view('admin/add_dimensions',$data);
			$this->load->view('admin/view_footer');
        }
		
	}

public function add_dimensions(){

	// $form_data = array(
	// 	'name'    => $_POST['name'],
	// 	'categories_id'=>$_POST['categories_id'],
	// );
	// echo "<pre>";print_r($form_data);exit;
	$data['setting'] = $this->Model_common->get_setting_data();

	$error = '';
	$success = '';

	if(isset($_POST['form3'])) {

		$valid = 1;

		$this->form_validation->set_rules('name', 'Dimensions Name', 'trim|required');
		$this->form_validation->set_rules('categories_id', 'Categories Name', 'trim|required');

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

			$form_data = array(
				'name'    => $_POST['name'],
				'categories_id'=>$_POST['categories_id'],
			);
		//	echo "<pre>";print_r($form_data);exit;
			$this->Model_category->add_dimensions($form_data);

			$success = 'Dimensions is added successfully!';
			$this->session->set_flashdata('success',$success);
			redirect(base_url().'admin/dimensions/view');
		} 
		else
		{
			$this->session->set_flashdata('error',$error);
			redirect(base_url().'admin/dimensions');
		}
		
	} else {            
		$this->load->view('admin/view_header',$data);
		$this->load->view('admin/view_dimensions',$data);
		$this->load->view('admin/view_footer');
	}
	


		
		
	}
public function edit_sub_categories($id){
	$tot = $this->Model_category->sub_categories_check($id);
	//echo "<pre>";print_r($tot);exit;
	if(!$tot) {
		redirect(base_url().'admin/dimensions');
		exit;
	}
	   
	   $data['setting'] = $this->Model_common->get_setting_data();
	$error = '';
	$success = '';


	if(isset($_POST['form3'])) 
	{

		$valid = 1;

		$this->form_validation->set_rules('name', 'Sub Categories Name', 'trim|required');

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
			$data['sub_categories'] = $this->Model_category->get_edit_sub_categories($id);

			if($data['sub_categories']  == '') {
				$form_data = array(
					'name'    => $_POST['name'],
					'sub_categories_id'=>$_POST['sub_categories_id'],
					'dimensions_id'    => $_POST['dimensions_id'],
				);
				//echo "<pre>";print_r($data['form_data']);exit;
				$this->Model_category->sub_categories_update($id,$form_data);
			}
			else {
				// unlink('./public/uploads/'.$data['category']['category_banner']);

				// $final_name = 'category-banner-'.$id.'.'.$ext;
				// move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

				$form_data = array(
					'name'    => $_POST['name'],
					'categories_id'=>$_POST['categories_id'],
					'dimensions_id'    => $_POST['dimensions_id'],
				);
			//echo "<pre>";print_r($form_data);exit;
				$this->Model_category->sub_categories_update($id,$form_data);
			}
			
			$success = 'Sub Categories are updated successfully';
			$this->session->set_flashdata('success',$success);
			redirect(base_url().'admin/dimensions/view_sub_categories');
		}
		else
		{
			$this->session->set_flashdata('error',$error);
			redirect(base_url().'admin/dimensions/edit_sub_categories/'.$id);
		}
	   
	} else {
		$sub_categories = $this->Model_category->get_edit_sub_categories($id);
		$categories_id=$sub_categories['categories_id'];
		$dimensions_id=$sub_categories['dimensions_id'];
		// $data['categories'] = $this->Model_category->get_categories($categories_id);
		// $data['dimensions'] = $this->Model_category->get_specific_dimensions($dimensions_id);
		$data['categories'] = $this->Model_category->get_dimensions();
		
		$data['dimensions'] = $this->Model_category->get_sub_categories();
				$data['sub_categories_names'] = $this->Model_category->get_sub_categories_names();

		//$dimensions = $this->Model_category->get_categories($categories_id);

		// $data['dimensions']=$dimensions['name'];
		// $data['categories']=$categories['name'];
		$data['sub_categories']=$sub_categories;
		// echo "<pre>";print_r($categories);exit;
		$this->load->view('admin/view_header',$data);
		$this->load->view('admin/edit_sub_categories',$data);
		$this->load->view('admin/view_footer');
	}

}

	public function edit($id)
	{
		

		
		$tot = $this->Model_category->dimensions_check($id);
		//echo "<pre>";print_r($tot);exit;
    	if(!$tot) {
    		redirect(base_url().'admin/dimensions');
        	exit;
    	}
       	
       	$data['setting'] = $this->Model_common->get_setting_data();
		$error = '';
		$success = '';


		if(isset($_POST['form3'])) 
		{

			$valid = 1;

			$this->form_validation->set_rules('name', 'Categories Name', 'trim|required');
			$this->form_validation->set_rules('dimensions_id', 'Dimensions Id ', 'trim|required');

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
		    	$data['dimensions'] = $this->Model_category->get_edit_dimensions($id);
		    	$dimensions=$data['dimensions'];
//echo "<pre>";print_r($data['dimensions']);exit;
		    	if($dimensions == '') {
		    		$form_data = array(
						'name'    => $_POST['name'],
						'dimensions_id'=>$_POST['dimensions_id'],
							'categories_name'    => $_POST['categories_id'],
		            );
		            $this->Model_category->dimensions_update($id,$form_data);
				}
				else {
					// unlink('./public/uploads/'.$data['category']['category_banner']);

					// $final_name = 'category-banner-'.$id.'.'.$ext;
		        	// move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

		        	$form_data = array(
						'name'    => $_POST['name'],
						'dimensions_id'=>$_POST['dimensions_id'],
						'categories_name'    => $_POST['categories_id'],
					);
					//echo "<pre>";print_r($form_data);exit;
		            $this->Model_category->dimensions_update($id,$form_data);
				}
				
				$success = 'Dimensions are updated successfully';
				$this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/dimensions/view');
		    }
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/dimensions/edit/'.$id);
		    }
           
		} else {
			$data['dimensions'] = $this->Model_category->get_one_dimensions($id);
			 //echo "<pre>";print_r($data['dimensions']);exit;
			 	$data['all_categories'] = $this->Model_category->get_all_test();
 //echo "<pre>";print_r($data['all_categories']);exit;
	       	$this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_dimensions_edit',$data);
			$this->load->view('admin/view_footer');
		}

	}

public function delete_sub_categories($id){

	$tot = $this->Model_category->sub_categories_check($id);
	if(!$tot) {
		redirect(base_url().'admin/dimensions');
		exit;
	}

	$sub_categories = $this->Model_category->get_data_sub_categories($id);
	//echo "<pre>";print_r($sub_categories);exit;
	$this->Model_category->delete_sub_categories($id);
	$success = 'Sub Categories is deleted successfully';
	$this->session->set_flashdata('success',$success);
	redirect(base_url().'admin/dimensions/view_sub_categories');

		
}
	public function delete($id) 
	{
    	$tot = $this->Model_category->dimensions_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/dimensions');
        	exit;
    	}

		$dimensions = $this->Model_category->get_dimensions($id);

		$this->Model_category->delete_dimensions($id);
		$success = 'categories is deleted successfully';
		$this->session->set_flashdata('success',$success);
		redirect(base_url().'admin/dimensions/view');

    	
    }

}