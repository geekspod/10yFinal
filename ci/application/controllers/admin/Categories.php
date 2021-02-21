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
		$this->form_validation->set_rules('test_time_slot', 'Test Time', 'trim|required');



		if($this->form_validation->run() == FALSE) {

			$valid = 0;

			$error .= validation_errors();

		}
	if($valid == 1) 

		{

		

			$created_date = date('Y-m-d H:i:s');

			$status="enable";

			$form_data = array(

				'name'    => $_POST['name'],
					'test_time_slot'    => $_POST['test_time_slot'],

				'created_date'=>$created_date,

				'status'=>$status

			);

		//	echo "<pre>";print_r($form_data);exit;

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

	

				$this->form_validation->set_rules('description_test', 'Test Description', 'trim|required');

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

							'description_test'    => $_POST['description_test'],

							'categories_id'    => $_POST['categories_id'],
                            'dimensions_id'    => $_POST['dimensions_id'],
                            'sub_categories_id'    => $_POST['sub_categories_id'],
                            'description_id'    => $_POST['description_id'],

				// 			'sub_categories_id'    => $_POST['sub_categories_id'],
							'min_value'    => $_POST['min_value'],

							'max_value'    => $_POST['max_value'],

							

						);

						$this->Model_category->description_update($id,$form_data);

					}

					else {

						// unlink('./public/uploads/'.$data['category']['category_banner']);

	

						// $final_name = 'category-banner-'.$id.'.'.$ext;

						// move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

						$date_modified = date("Y-m-d H:i:s");

						$form_data = array(

						'description_test'    => $_POST['description_test'],

							'categories_id'    => $_POST['categories_id'],
                            'description_id'    => $_POST['description_id'],

                        'dimensions_id'    => $_POST['dimensions_id'],
				 			'sub_categories_id'    => $_POST['sub_categories_id'],
							'min_value'    => $_POST['min_value'],

							'max_value'    => $_POST['max_value'],

							'date_modified'    => $date_modified,

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

    $data['dimensions'] = $this->Model_category->get_dimensions();

    $data['all_categories'] = $this->Model_category->get_all_categories();
    $data['sub_categories_names'] = $this->Model_category->get_sub_categories_names();
	$data['description'] = $this->Model_category->get_description($id);

				//$data['personality_assessment'] = $this->Model_category->get_Work_personality_index($questions_assessment_id);

				//echo "<pre>";print_r($data['sub_categories_names']);exit;

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

				$this->form_validation->set_rules('dimensions_name', 'Dimensions Name', 'trim|required');

				

	

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

							'dimensions_name'    => $_POST['dimensions_name'],

								'sub_categories_names'    => $_POST['sub_categories_names'],


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

							'dimensions_name'    => $_POST['dimensions_name'],
	               'sub_categories_names'    => $_POST['sub_categories_names'],


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

				$dimensions_id='5';
				$data['dimensions'] = $this->Model_category->get_relative_dimensions($dimensions_id);
	
				$data['sub_categories_names'] = $this->Model_category->get_sub_categories_names();

				$data['questions_assessment'] = $this->Model_category->get_questions_assessment($id);

				$data['personality_assessment'] = $this->Model_category->get_Work_personality_index($questions_assessment_id);

			//	echo "<pre>";print_r($data['dimensions']);exit;

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

			$this->form_validation->set_rules('dimensions_name', 'Dimensions Name', 'trim|required');

			



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

						'dimensions_name'    => $_POST['dimensions_name'],

						

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

						'dimensions_name'    => $_POST['dimensions_name'],

						'date_modified'=>$date_modified

					);

					echo "<pre>";print_r($form_data);exit;

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
			$dimensions_id='4';
			$data['dimensions'] = $this->Model_category->get_relative_dimensions($dimensions_id);

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
			$this->form_validation->set_rules('dimensions_name', 'Dimensions Name', 'trim|required');
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

		    	$data['questions'] = $this->Model_category->get_questions($id);



		    	if($data['questions'] == '') {

		    		$form_data = array(

						'name'    => $_POST['name'],

						'dimensions_name'    => $_POST['dimensions_name'],

						

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

						'dimensions_name'    => $_POST['dimensions_name'],

						'date_modified'=>$date_modified

					);

					//echo "<pre>";print_r($form_data);exit;

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
			$dimensions_id='1';
			$data['questions'] = $this->Model_category->get_questions($id);
			$data['dimensions'] = $this->Model_category->get_relative_dimensions($dimensions_id);


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
				$this->form_validation->set_rules('test_time_slot', 'Test Name', 'trim|required');



			if($this->form_validation->run() == FALSE) {

				$valid = 0;

                $error .= validation_errors();

            }


		    if($valid == 1) 

		    {

		    	$data['category'] = $this->Model_category->get_category($id);



		    	if(	$data['category'] == '') {

		    		$form_data = array(

						'name'    => $_POST['name'],
						'test_time_slot'    => $_POST['test_time_slot'],

						

		            );

		            $this->Model_category->categories_update($id,$form_data);

				}

				else {

				

					$date_modified = date("Y-m-d H:i:s");

		        	$form_data = array(

						'name'    => $_POST['name'],
						'test_time_slot'    => $_POST['test_time_slot'],

						'date_modified'=>$date_modified

		            );
                //echo "<pre>";print_r($form_data);exit;
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

		redirect(base_url().'admin/categories/view_questions_score_description');

		exit;

	}



	$questions_assessment = $this->Model_category->get_questions_score_description($id);



	$this->Model_category->delete_description($id);

	$success = 'Description are deleted successfully';

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
	$id='1';
	$data['categories'] = $this->Model_category->get_relative_dimensions($id);


	// foreach ($categories as $row) {

	// 	$name = $row['name'];

	// }
	// echo "<pre>";print_r($name);exit;
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

// 			$this->form_validation->set_rules('name2', '2', 'trim|required');

// 			$this->form_validation->set_rules('name3', '3', 'trim|required');

// 			$this->form_validation->set_rules('name4', '4', 'trim|required');

// 			$this->form_validation->set_rules('name5', '5', 'trim|required');

// 			$this->form_validation->set_rules('name6', '6', 'trim|required');

// 			$this->form_validation->set_rules('name7', '7', 'trim|required');

// 			$this->form_validation->set_rules('name8', '8', 'trim|required');

// 			$this->form_validation->set_rules('name9', '9', 'trim|required');

// 			$this->form_validation->set_rules('name10', '10', 'trim|required');

// 			$this->form_validation->set_rules('name11', '11', 'trim|required');

// 			$this->form_validation->set_rules('name12', '12', 'trim|required');

// 			$this->form_validation->set_rules('name13', '13', 'trim|required');

// 			$this->form_validation->set_rules('name14', '14', 'trim|required');

// 			$this->form_validation->set_rules('name15', '15', 'trim|required');

// 			$this->form_validation->set_rules('name16', '16', 'trim|required');

			



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

					// 'value1'       => $_POST['value1'],

					// 'value2'       => $_POST['value2'],

					// 'value3'       => $_POST['value3'],

					// 'value4'       => $_POST['value4'],

					// 'value5'       => $_POST['value5'],

					// 'value6'       => $_POST['value6'],

					// 'value7'       => $_POST['value7'],

					// 'value8'       => $_POST['value8'],

					'categories_id'=>$categories_id,

					'date_created'=>$date_created,
					'dimensions_name'=>$_POST['dimensions_name'],

				);

				 echo "<pre>";print_r($form_data);exit;



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

$data['manager_dashboard_data']=$this->session->userdata();
     $email=$this->session->userdata('email');


	$data['setting'] = $this->Model_common->get_setting_data();



		$error = '';

		$success = '';



		if(isset($_POST['form4'])) {



			$valid = 1;



			//$this->form_validation->set_rules('name', 'Test Name', 'trim|required');

		//	$this->form_validation->set_rules('score', 'Score', 'trim|required');

			$this->form_validation->set_rules('description_test', 'Description Test', 'trim|required');

		//	$this->form_validation->set_rules('dimensions_id', 'Description Dimensions', 'trim|required');





			//$this->form_validation->set_rules('description', 'Test Name', 'trim|required');



			if($this->form_validation->run() == FALSE) {

				$valid = 0;

                $error .= validation_errors();

            }



            



		   



		    if($valid == 1) 

		    {

				
                $date_created = date("Y-m-d H:i:s");
		        $form_data = array(

					

					'categories_id'       => $_POST['categories_id'],

					

					'description_test'    => $_POST['description_test'],

					'dimensions_id'       => $_POST['dimensions_id'],


					'min_value'       => $_POST['min_value'],

					'max_value'       => $_POST['max_value'],

					'sub_categories_id'       => $_POST['sub_categories_id'],
                    'email'     => $email,
                    'date_created'     => $date_created,
					

	            );
//echo "<pre>";print_r($form_data);exit;
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

				redirect(base_url().'admin/categories/questions_score_description');

		    }

            

        } else {    

			$data['questions_score_description'] = $this->Model_category->get_questions_score_description();

        

            $this->load->view('admin/view_header',$data);

			$this->load->view('admin/categories/questions_score_description',$data);

			$this->load->view('admin/view_footer');

        }

}

public function view_questions_score_description(){



		$data['setting'] = $this->Model_common->get_setting_data();

		$data['categories'] = $this->Model_category->show();

		$data['questions_score_description'] = $this->Model_category->get_questions_score_description();

//echo "<pre>";print_r($data['questions_score_description']);exit;

		$this->load->view('admin/view_header',$data);

		$this->load->view('admin/view_questions_score_description',$data);

		$this->load->view('admin/view_footer');



}



public function questions_score_description(){



	$data['setting'] = $this->Model_common->get_setting_data();

	$categories_id='5';

	$data['dimensions'] = $this->Model_category->get_dimensions();

	$data['all_categories'] = $this->Model_category->get_all_categories();
$data['sub_categories_names'] = $this->Model_category->get_sub_categories_names();



	//$data['categories'] = $this->Model_category->view_all_Work_personality_index($categories_id);

//	echo "<pre>";print_r($data['all_categories']);exit;

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

				'meta_description' => $_POST['meta_description'],
                
			);
//echo "<pre>";print_r($form_data);exit;
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

	$id='5';
	$data['categories'] = $this->Model_category->get_relative_dimensions($id);
	$data['sub_categories'] = $this->Model_category->get_all_sub_categories();

	$data['setting'] = $this->Model_common->get_setting_data();

	$categories_id='5';

	$data['Work_personality_index'] = $this->Model_category->get_Work_personality_index($categories_id);

//echo "<pre>";print_r($data['sub_categories']);exit;

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

				// 	$this->form_validation->set_rules('name2', '2', 'trim|required');

				// 	$this->form_validation->set_rules('name3', '3', 'trim|required');

				// 	$this->form_validation->set_rules('name4', '4', 'trim|required');

				// 	$this->form_validation->set_rules('name5', '5', 'trim|required');

					// $this->form_validation->set_rules('name6', '6', 'trim|required');

					// $this->form_validation->set_rules('name7', '7', 'trim|required');

					// $this->form_validation->set_rules('name8', '8', 'trim|required');

					// $this->form_validation->set_rules('name9', '9', 'trim|required');

					// $this->form_validation->set_rules('name10', '10', 'trim|required');

					// $this->form_validation->set_rules('name11', '11', 'trim|required');

					// $this->form_validation->set_rules('name12', '12', 'trim|required');

					// $this->form_validation->set_rules('name13', '13', 'trim|required');

					// $this->form_validation->set_rules('name14', '14', 'trim|required');

					// $this->form_validation->set_rules('name15', '15', 'trim|required');

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
							'sub_categories_names'=>$_POST['sub_categories_names'],
								'dimensions_name'=>$_POST['dimensions_name'],

							'date_created'=>$date_created,

						);

						// echo "<pre>";print_r($form_data);exit;

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
	$id='3';
	$data['categories'] = $this->Model_category->get_relative_dimensions($id);

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

				// $this->form_validation->set_rules('name2', '2', 'trim|required');

				// $this->form_validation->set_rules('name3', '3', 'trim|required');

				// $this->form_validation->set_rules('name4', '4', 'trim|required');

				// $this->form_validation->set_rules('name5', '5', 'trim|required');

				// $this->form_validation->set_rules('name6', '6', 'trim|required');

				// $this->form_validation->set_rules('name7', '7', 'trim|required');

				// $this->form_validation->set_rules('name8', '8', 'trim|required');

				// $this->form_validation->set_rules('name9', '9', 'trim|required');

				// $this->form_validation->set_rules('name10', '10', 'trim|required');

				// $this->form_validation->set_rules('name11', '11', 'trim|required');

				// $this->form_validation->set_rules('name12', '12', 'trim|required');

				// $this->form_validation->set_rules('name13', '13', 'trim|required');

				// $this->form_validation->set_rules('name14', '14', 'trim|required');

				// $this->form_validation->set_rules('name15', '15', 'trim|required');



				// $this->form_validation->set_rules('name16', '16', 'trim|required');

				// $this->form_validation->set_rules('name17', '17', 'trim|required');

				// $this->form_validation->set_rules('name18', '18', 'trim|required');

				// $this->form_validation->set_rules('name19', '19', 'trim|required');

				// $this->form_validation->set_rules('name20', '20', 'trim|required');

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

						'name16'    => $_POST['name16'],

						'name17'    => $_POST['name17'],

						'name18'    => $_POST['name18'],

						'name19'    => $_POST['name19'],

						'name20'    => $_POST['name20'],

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

					 echo "<pre>";print_r($form_data);exit;

	//personal_values_assessment_data

					$this->Model_category->personal_values_assessment_data($form_data);

	

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

	$id='4';
	$data['categories'] = $this->Model_category->get_relative_dimensions($id);


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

				// $this->form_validation->set_rules('name2', '2', 'trim|required');

				// $this->form_validation->set_rules('name3', '3', 'trim|required');

				// $this->form_validation->set_rules('name4', '4', 'trim|required');

				// $this->form_validation->set_rules('name5', '5', 'trim|required');

				// $this->form_validation->set_rules('name6', '6', 'trim|required');

				// $this->form_validation->set_rules('name7', '7', 'trim|required');

				// $this->form_validation->set_rules('name8', '8', 'trim|required');

				// $this->form_validation->set_rules('name9', '9', 'trim|required');

				// $this->form_validation->set_rules('name10', '10', 'trim|required');

				// $this->form_validation->set_rules('name11', '11', 'trim|required');

				// $this->form_validation->set_rules('name12', '12', 'trim|required');

				// $this->form_validation->set_rules('name13', '13', 'trim|required');

				// $this->form_validation->set_rules('name14', '14', 'trim|required');

				// $this->form_validation->set_rules('name15', '15', 'trim|required');



				// $this->form_validation->set_rules('radio1', '1', 'trim|required');

				// $this->form_validation->set_rules('radio2', '2', 'trim|required');

				// $this->form_validation->set_rules('radio3', '3', 'trim|required');

				// $this->form_validation->set_rules('radio4', '4', 'trim|required');

				// $this->form_validation->set_rules('radio5', '5', 'trim|required');

				// $this->form_validation->set_rules('radio6', '6', 'trim|required');

				// $this->form_validation->set_rules('radio7', '7', 'trim|required');

				// $this->form_validation->set_rules('radio8', '8', 'trim|required');

				// $this->form_validation->set_rules('radio9', '9', 'trim|required');

				// $this->form_validation->set_rules('radio10', '10', 'trim|required');

				// $this->form_validation->set_rules('radio11', '11', 'trim|required');

				// $this->form_validation->set_rules('radio12', '12', 'trim|required');

				// $this->form_validation->set_rules('radio13', '13', 'trim|required');

				// $this->form_validation->set_rules('radio14', '14', 'trim|required');

				// $this->form_validation->set_rules('radio15', '15', 'trim|required');



				

	

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

			 //  $this->form_validation->set_rules('name2', '2', 'trim|required');

			 //  $this->form_validation->set_rules('name3', '3', 'trim|required');

			 //  $this->form_validation->set_rules('name4', '4', 'trim|required');

			 //  $this->form_validation->set_rules('name5', '5', 'trim|required');

			//    $this->form_validation->set_rules('name6', '6', 'trim|required');

			//    $this->form_validation->set_rules('name7', '7', 'trim|required');

			//    $this->form_validation->set_rules('name8', '8', 'trim|required');

			//    $this->form_validation->set_rules('name9', '9', 'trim|required');

			//    $this->form_validation->set_rules('name10', '10', 'trim|required');

			//    $this->form_validation->set_rules('name11', '11', 'trim|required');

			//    $this->form_validation->set_rules('name12', '12', 'trim|required');

			//    $this->form_validation->set_rules('name13', '13', 'trim|required');

			//    $this->form_validation->set_rules('name14', '14', 'trim|required');

			//    $this->form_validation->set_rules('name15', '15', 'trim|required');

			//    $this->form_validation->set_rules('name16', '16', 'trim|required');

			//    $this->form_validation->set_rules('name13', '17', 'trim|required');

			//    $this->form_validation->set_rules('name14', '18', 'trim|required');

			//    $this->form_validation->set_rules('name15', '19', 'trim|required');

			//    $this->form_validation->set_rules('name16', '20', 'trim|required');

			   

   

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

					//    'value1'       => $_POST['value1'],

					//    'value2'       => $_POST['value2'],

					//    'value3'       => $_POST['value3'],

					//    'value4'       => $_POST['value4'],

					//    'value5'       => $_POST['value5'],

					//    'value6'       => $_POST['value6'],

					//    'value7'       => $_POST['value7'],

					//    'value8'       => $_POST['value8'],

					//    'value9'       => $_POST['value9'],

					//    'value10'       => $_POST['value10'],

					//    'value11'       => $_POST['value11'],

					//    'value12'       => $_POST['value12'],

					//    'value13'       => $_POST['value13'],

					//    'value14'       => $_POST['value14'],

					//    'value15'       => $_POST['value15'],

					//    'value16'       => $_POST['value16'],

					//    'value17'       => $_POST['value17'],

					//    'value18'       => $_POST['value18'],

					//    'value19'       => $_POST['value19'],

					//    'value20'       => $_POST['value20'],

					   'categories_id'=>$categories_id,

					   'date_created'=>$date_created,

				   );

					echo "<pre>";print_r($form_data);exit;

   

				   $this->Model_category->nayatel_values_assessment_data($form_data);

   

				   $success = 'Nayatel Values Assessment Data has been added successfully!';

				   $this->session->set_flashdata('success',$success);

				   redirect(base_url().'admin/categories/view_all_nayatel_values_assessment');

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
$id='2';
	$data['categories'] = $this->Model_category->get_relative_dimensions($id);


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

		$this->form_validation->set_rules('dimensions_name', 'Dimensions Name', 'trim|required');





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

					'dimensions_name'    => $_POST['dimensions_name'],

					

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

					'dimensions_name'    => $_POST['dimensions_name'],

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

		$categories_id='3';
		$data['dimensions'] = $this->Model_category->get_relative_dimensions($categories_id);

		$data['questions'] = $this->Model_category->get_questions($id);

		//echo "<pre>";print_r($data['questions']) ;exit;

		   $this->load->view('admin/view_header',$data);

		$this->load->view('admin/edit_all_personal_values_assessment',$data);

		$this->load->view('admin/view_footer');

	}

}

public function edit_all_nayatel_questions_data(){
    
   

	   
//echo "ghh";exit;
	 $data['setting'] = $this->Model_common->get_setting_data();

	$error = '';

	$success = '';

	if(isset($_POST['form2'])) 

	{



		$valid = 1;



		$this->form_validation->set_rules('name1', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name2', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name3', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name4', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name5', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name6', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name7', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name8', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name9', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name10', 'Questions Name', 'trim|required');

		$this->form_validation->set_rules('name11', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name12', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name13', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name14', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name15', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name16', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name17', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name18', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name19', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name20', 'Questions Name', 'trim|required');
// 20
	$this->form_validation->set_rules('name31', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name32', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name33', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name34', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name35', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name36', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name37', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name38', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name39', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name40', 'Questions Name', 'trim|required');

// 40
	$this->form_validation->set_rules('name41', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name42', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name43', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name44', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name45', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name46', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name47', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name48', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name49', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name50', 'Questions Name', 'trim|required');
// 50
	$this->form_validation->set_rules('name51', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name52', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name53', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name54', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name55', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name56', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name57', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name58', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name59', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name60', 'Questions Name', 'trim|required');
// 60
	$this->form_validation->set_rules('name61', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name62', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name63', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name64', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name65', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name66', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name67', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name68', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name69', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name70', 'Questions Name', 'trim|required');
// 70

		if($this->form_validation->run() == FALSE) {

			$valid = 0;

			$error .= validation_errors();

		}



		if($valid == 1) 

		{
				$date_modified = date("Y-m-d H:i:s");

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
					
					'name21'    => $_POST['name21'],
					'name22'    => $_POST['name22'],
					'name23'    => $_POST['name23'],
					'name24'    => $_POST['name24'],
					'name25'    => $_POST['name25'],
					'name26'    => $_POST['name26'],
					'name27'    => $_POST['name27'],
					'name28'    => $_POST['name28'],
					'name29'    => $_POST['name29'],
					'name30'    => $_POST['name30'],
					
					'name31'    => $_POST['name31'],
					'name32'    => $_POST['name32'],
					'name33'    => $_POST['name33'],
					'name34'    => $_POST['name34'],
					'name35'    => $_POST['name35'],
					'name36'    => $_POST['name36'],
					'name37'    => $_POST['name37'],
					'name38'    => $_POST['name38'],
					'name39'    => $_POST['name39'],
					'name40'    => $_POST['name40'],
					
					'name41'    => $_POST['name41'],
					'name42'    => $_POST['name42'],
					'name43'    => $_POST['name43'],
					'name44'    => $_POST['name44'],
					'name45'    => $_POST['name45'],
					'name46'    => $_POST['name46'],
					'name47'    => $_POST['name47'],
					'name48'    => $_POST['name48'],
					'name49'    => $_POST['name49'],
					'name50'    => $_POST['name50'],
					
					'name51'    => $_POST['name51'],
					'name52'    => $_POST['name52'],
					'name53'    => $_POST['name53'],
					'name54'    => $_POST['name54'],
					'name55'    => $_POST['name55'],
					'name56'    => $_POST['name56'],
					'name57'    => $_POST['name57'],
					'name58'    => $_POST['name58'],
					'name59'    => $_POST['name59'],
					'name60'    => $_POST['name60'],
					
					'name61'    => $_POST['name61'],
					'name62'    => $_POST['name62'],
					'name63'    => $_POST['name63'],
					'name64'    => $_POST['name64'],
					'name65'    => $_POST['name65'],
					'name66'    => $_POST['name66'],
					'name67'    => $_POST['name67'],
					'name68'    => $_POST['name68'],
					'name69'    => $_POST['name69'],
					'name70'    => $_POST['name70'],
					
					
					'dimensions_name'    => $_POST['dimensions_name'],
					'categories_id'    => $_POST['categories_id'],
					'questions_id'    => $_POST['questions_id'],


					'date_modified'=>$date_modified

				);

			//	echo "<pre>";print_r($form_data);exit;

				$this->Model_category->edit_nayatel_values($form_data);

			

			

			$success = 'Questions are updated successfully';

			$this->session->set_flashdata('success',$success);

			redirect(base_url().'admin/categories/view_all_nayatel_values_assessment');

		}

		else

		{
echo "exit";exit;
			$data['setting'] = $this->Model_common->get_setting_data();

		$categories_id='2';

		$data['questions'] = $this->Model_category->view_all_nayatel_values_assessment($categories_id);

             //echo "<pre>";print_r($data['questions']);exit;

		$this->load->view('admin/view_header',$data);

		$this->load->view('admin/edit_all_nayatel_questions',$data);

		$this->load->view('admin/view_footer');

		}

	   

	} else {


      	$data['setting'] = $this->Model_common->get_setting_data();

		$categories_id='2';

		$data['questions'] = $this->Model_category->view_all_nayatel_values_assessment($categories_id);

             //echo "<pre>";print_r($data['questions']);exit;

		$this->load->view('admin/view_header',$data);

		$this->load->view('admin/edit_all_nayatel_questions',$data);

		$this->load->view('admin/view_footer');

	} 
    
}

public function edit_Work_personality_index_questions_data(){
    
  //echo "ghh";exit;
	 $data['setting'] = $this->Model_common->get_setting_data();

	$error = '';

	$success = '';

	if(isset($_POST['form2'])) 

	{



		$valid = 1;



		$this->form_validation->set_rules('name1', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name2', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name3', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name4', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name5', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name6', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name7', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name8', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name9', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name10', 'Questions Name', 'trim|required');

		$this->form_validation->set_rules('name11', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name12', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name13', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name14', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name15', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name16', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name17', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name18', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name19', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name20', 'Questions Name', 'trim|required');
// 20
	$this->form_validation->set_rules('name31', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name32', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name33', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name34', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name35', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name36', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name37', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name38', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name39', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name40', 'Questions Name', 'trim|required');

// 40
	$this->form_validation->set_rules('name41', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name42', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name43', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name44', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name45', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name46', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name47', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name48', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name49', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name50', 'Questions Name', 'trim|required');
// 50
	$this->form_validation->set_rules('name51', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name52', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name53', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name54', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name55', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name56', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name57', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name58', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name59', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name60', 'Questions Name', 'trim|required');
// 60
	$this->form_validation->set_rules('name61', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name62', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name63', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name64', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name65', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name66', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name67', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name68', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name69', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name70', 'Questions Name', 'trim|required');
// 70

	$this->form_validation->set_rules('name71', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name72', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name73', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name74', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name75', 'Questions Name', 'trim|required');


	$this->form_validation->set_rules('name76', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name77', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name78', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name79', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name80', 'Questions Name', 'trim|required');
// 		80
		$this->form_validation->set_rules('name81', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name82', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name83', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name84', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name85', 'Questions Name', 'trim|required');

	$this->form_validation->set_rules('name86', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name87', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name88', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name89', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name90', 'Questions Name', 'trim|required');
// 		90
		$this->form_validation->set_rules('name91', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name92', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name93', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name94', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name95', 'Questions Name', 'trim|required');

	$this->form_validation->set_rules('name96', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name97', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name98', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name99', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name100', 'Questions Name', 'trim|required');
// 		100
		$this->form_validation->set_rules('name101', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name102', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name103', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name104', 'Questions Name', 'trim|required');
		$this->form_validation->set_rules('name105', 'Questions Name', 'trim|required');


		if($this->form_validation->run() == FALSE) {

			$valid = 0;

			$error .= validation_errors();

		}



		if($valid == 1) 

		{
				$date_modified = date("Y-m-d H:i:s");

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
					
					'name21'    => $_POST['name21'],
					'name22'    => $_POST['name22'],
					'name23'    => $_POST['name23'],
					'name24'    => $_POST['name24'],
					'name25'    => $_POST['name25'],
					'name26'    => $_POST['name26'],
					'name27'    => $_POST['name27'],
					'name28'    => $_POST['name28'],
					'name29'    => $_POST['name29'],
					'name30'    => $_POST['name30'],
					
					'name31'    => $_POST['name31'],
					'name32'    => $_POST['name32'],
					'name33'    => $_POST['name33'],
					'name34'    => $_POST['name34'],
					'name35'    => $_POST['name35'],
					'name36'    => $_POST['name36'],
					'name37'    => $_POST['name37'],
					'name38'    => $_POST['name38'],
					'name39'    => $_POST['name39'],
					'name40'    => $_POST['name40'],
					
					'name41'    => $_POST['name41'],
					'name42'    => $_POST['name42'],
					'name43'    => $_POST['name43'],
					'name44'    => $_POST['name44'],
					'name45'    => $_POST['name45'],
					'name46'    => $_POST['name46'],
					'name47'    => $_POST['name47'],
					'name48'    => $_POST['name48'],
					'name49'    => $_POST['name49'],
					'name50'    => $_POST['name50'],
					
					'name51'    => $_POST['name51'],
					'name52'    => $_POST['name52'],
					'name53'    => $_POST['name53'],
					'name54'    => $_POST['name54'],
					'name55'    => $_POST['name55'],
					'name56'    => $_POST['name56'],
					'name57'    => $_POST['name57'],
					'name58'    => $_POST['name58'],
					'name59'    => $_POST['name59'],
					'name60'    => $_POST['name60'],
					
					'name61'    => $_POST['name61'],
					'name62'    => $_POST['name62'],
					'name63'    => $_POST['name63'],
					'name64'    => $_POST['name64'],
					'name65'    => $_POST['name65'],
					'name66'    => $_POST['name66'],
					'name67'    => $_POST['name67'],
					'name68'    => $_POST['name68'],
					'name69'    => $_POST['name69'],
					'name70'    => $_POST['name70'],
				// 	70
				
				    'name71'    => $_POST['name71'],
					'name72'    => $_POST['name72'],
					'name73'    => $_POST['name73'],
					'name74'    => $_POST['name74'],
					'name75'    => $_POST['name75'],
					'name76'    => $_POST['name76'],
					
					'name77'    => $_POST['name77'],
					'name78'    => $_POST['name78'],
					'name79'    => $_POST['name79'],
					'name80'    => $_POST['name80'],
					'name81'    => $_POST['name81'],
					'name82'    => $_POST['name82'],
					'name83'    => $_POST['name83'],
					'name84'    => $_POST['name84'],
					'name85'    => $_POST['name85'],
					'name86'    => $_POST['name86'],
					
					'name87'    => $_POST['name87'],
					'name88'    => $_POST['name88'],
					'name89'    => $_POST['name89'],
					'name90'    => $_POST['name90'],
					'name91'    => $_POST['name91'],
					'name92'    => $_POST['name92'],
					'name93'    => $_POST['name93'],
					'name94'    => $_POST['name94'],
					'name95'    => $_POST['name95'],
					'name96'    => $_POST['name96'],
					
					'name97'    => $_POST['name97'],
					'name98'    => $_POST['name98'],
					'name99'    => $_POST['name99'],
					'name100'    => $_POST['name100'],
					'name101'    => $_POST['name101'],
					'name102'    => $_POST['name102'],
					'name103'    => $_POST['name103'],
					'name104'    => $_POST['name104'],
					'name105'    => $_POST['name105'],
				
					
				
					
					'dimensions_name'    => $_POST['dimensions_name'],
					'categories_id'    => $_POST['categories_id'],
					'questions_assessment_id'=> $_POST['questions_assessment_id'],
						'sub_categories_names'    => $_POST['sub_categories_names'],


					'date_modified'=>$date_modified

				);

			//	echo "<pre>";print_r($form_data);exit;

				$this->Model_category->edit_work_values($form_data);

			

			

			$success = 'Questions are updated successfully';

			$this->session->set_flashdata('success',$success);

			redirect(base_url().'admin/categories/view_Work_personality_index');

		}

		else

		{
//echo "exit";exit;
		$data['setting'] = $this->Model_common->get_setting_data();

		$categories_id='5';

		$data['questions'] = $this->Model_category->view_all_Work_personality_index($categories_id);

 //echo "<pre>";print_r($data['questions']);exit;

		$this->load->view('admin/view_header',$data);

		$this->load->view('admin/edit_all_Work_personality_index_questions',$data);

		$this->load->view('admin/view_footer');

		}

	   

	} else {


      $data['setting'] = $this->Model_common->get_setting_data();

		$categories_id='5';

		$data['questions'] = $this->Model_category->view_all_Work_personality_index($categories_id);

 //echo "<pre>";print_r($data['questions']);exit;

		$this->load->view('admin/view_header',$data);

		$this->load->view('admin/edit_all_Work_personality_index_questions',$data);

		$this->load->view('admin/view_footer');

	} 
  
    
}

public function edit_Work_personality_index_questions(){
    
   $data['setting'] = $this->Model_common->get_setting_data();

		$categories_id='5';

		$data['questions'] = $this->Model_category->view_all_Work_personality_index($categories_id);

 //echo "<pre>";print_r($data['questions']);exit;

		$this->load->view('admin/view_header',$data);

		$this->load->view('admin/edit_all_Work_personality_index_questions',$data);

		$this->load->view('admin/view_footer');
    
}

public function edit_all_nayatel_questions(){
    
 	$data['setting'] = $this->Model_common->get_setting_data();

		$categories_id='2';

		$data['questions'] = $this->Model_category->view_all_nayatel_values_assessment($categories_id);

            // echo "<pre>";print_r($data['questions']);exit;

		$this->load->view('admin/view_header',$data);

		$this->load->view('admin/edit_all_nayatel_questions',$data);

		$this->load->view('admin/view_footer');
   
    
}

public function edit_all_nayatel(){
    
   $date_modified = date("Y-m-d H:i:s");

				$form_data = array(

					'name'    => $_POST['questions_name'],

					'dimensions_name'    => $_POST['dimensions_name'],

					'date_modified'=>$date_modified

				);

			//	echo "<pre>";print_r($form_data);exit;

				$this->Model_category->questions_update($id,$form_data);
    
}

public function edit_all(){
    
   $id=$this->uri->segment(4);



$this->form_validation->set_rules('name', 'Questions Name', 'trim|required');

$this->form_validation->set_rules('dimensions_name', 'Dimensions Name', 'trim|required');


				$valid = 1;
              


if($valid == 1) 

	{

echo "<pre>";print_r($id);exit;


		

			$data['questions'] = $this->Model_category->get_questions($id);



			if($data['questions'] == '') {

				$form_data = array(

					'name'    => $_POST['name'],

					'dimensions_name'    => $_POST['dimensions_name'],

					

				);

				$this->Model_category->categories_update($id,$form_data);

			}

			else {

			

				$date_modified = date("Y-m-d H:i:s");

				$form_data = array(

					'name'    => $_POST['name'],

					'dimensions_name'    => $_POST['dimensions_name'],

					'date_modified'=>$date_modified

				);

				echo "<pre>";print_r($form_data);exit;

				$this->Model_category->questions_update($id,$form_data);

			}

			

			$success = 'Questions are updated successfully';

			$this->session->set_flashdata('success',$success);

			redirect(base_url().'admin/categories/view_all_nayatel_values_assessment');

		}

	
    echo "gvggsg";exit;
}

public function edit_all_nayatel_values_assessment(){

$id=$this->uri->segment(4);


	$tot = $this->Model_category->questions_check($id);

	if(!$tot) {

		redirect(base_url().'admin/categories');

		exit;

	}

	   

	   $data['setting'] = $this->Model_common->get_setting_data();

	$error = '';

	$success = '';

$this->form_validation->set_rules('name', 'Questions Name', 'trim|required');

		$this->form_validation->set_rules('dimensions_name', 'Dimensions Name', 'trim|required');

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

//echo "<pre>";print_r($id);exit;


		if($valid == 1) 

		{

			$data['questions'] = $this->Model_category->get_questions($id);



			if($data['questions'] == '') {

				$form_data = array(

					'name'    => $_POST['name'],

					'dimensions_name'    => $_POST['dimensions_name'],

					

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

					'dimensions_name'    => $_POST['dimensions_name'],

					'date_modified'=>$date_modified

				);

				//echo "<pre>";print_r($form_data);exit;

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


$dimensions_id='2';
		$data['questions'] = $this->Model_category->get_questions($id);
		$data['dimensions'] = $this->Model_category->get_relative_dimensions($dimensions_id);

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

// echo "<pre>";print_r($data['Work_personality_index']);exit;

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