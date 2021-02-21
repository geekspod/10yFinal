<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Games extends CI_Controller 
{
	function __construct() 
	{
        parent::__construct();
        $this->load->model('admin/Model_common');
        $this->load->model('admin/Model_pricing_table');
        $this->load->model('admin/Model_portfolio');
    }

	public function index()
	{
		$data['setting'] = $this->Model_common->get_setting_data();

		$data['pricing_table'] = $this->Model_pricing_table->show();

		$this->load->view('admin/view_header',$data);
		$this->load->view('admin/view_pricing_table',$data);
		$this->load->view('admin/view_footer');
	}
	
	public function rules($id)
	{
		$data['setting'] = $this->Model_common->get_setting_data();

		$data['portfolio'] = $this->Model_portfolio->show($id);

		$this->load->view('admin/view_header',$data);
		$this->load->view('admin/view_rules',$data);
		$this->load->view('admin/view_footer');
	}
	
	public function rulesadd()
	{
		$data['setting'] = $this->Model_common->get_setting_data();

		$error = '';
		$success = '';

		if(isset($_POST['form1'])) {

			$valid = 1;

			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_rules('short_content', 'Short Content', 'trim|required');

			if($this->form_validation->run() == FALSE) {
				$valid = 0;
                $error .= validation_errors();
            }


		   
		    if($valid == 1) 
		    {
				

		        $form_data = array(
					'name'             => $_POST['name'],
					'short_content'    => $_POST['short_content'],
					'game_id'    		=> $_POST['game_id'],
					'category_id'      => $_POST['category_id'],
	            );
	            $this->Model_portfolio->add($form_data);


	            


		        $success = 'Game Rules is added successfully!';
		        $this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/games/rules/'.$_POST['game_id']);
		    } 
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/games/rules/'.$_POST['game_id']);
		    }            
        } else {
            $data['all_photo_category'] = $this->Model_portfolio->get_all_photo_category();
            $this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_portfolio_add',$data);
			$this->load->view('admin/view_footer');
        }
		
	}
	
	public function rulesedit($id)
	{
		
    	// If there is no service in this id, then redirect
    	$tot = $this->Model_portfolio->portfolio_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/portfolio');
        	exit;
    	}
       	
       	$data['setting'] = $this->Model_common->get_setting_data();
		$error = '';
		$success = '';


		if(isset($_POST['form1'])) 
		{

			$valid = 1;

			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_rules('short_content', 'Short Content', 'trim|required');

			if($this->form_validation->run() == FALSE) {
				$valid = 0;
                $error .= validation_errors();
            }

          

		    
		    if($valid == 1) 
		    {
		    	$data['portfolio'] = $this->Model_portfolio->getData($id);
					$form_data = array(
						'name'             => $_POST['name'],
						'short_content'    => $_POST['short_content'],
						'content'          => $_POST['content'],
						'category_id'      => $_POST['category_id'],
		            );
		            $this->Model_portfolio->update($id,$form_data);
				

				
				$success = 'Games Rules is updated successfully';
				$this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/games');
		    }
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/games/rulesedit/'.$id);
		    }
           
		} else {
			$data['portfolio'] = $this->Model_portfolio->getData($id);
			$data['all_photo_category'] = $this->Model_portfolio->get_all_photo_category();
			$data['all_photos_by_id'] = $this->Model_portfolio->get_all_photos_by_category_id($id);
	       	$this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_portfolio_edit',$data);
			$this->load->view('admin/view_footer');
		}

	}

	public function add()
	{
		$data['setting'] = $this->Model_common->get_setting_data();

		$error = '';
		$success = '';

		if(isset($_POST['form1'])) {

			$valid = 1;

			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_rules('entry_fees', 'Entry Fees', 'trim|required');

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
		    	$next_id = $this->Model_pricing_table->get_auto_increment_id();
				foreach ($next_id as $row) {
		            $ai_id = $row['Auto_increment'];
		        }

		        $final_name = 'game-'.$ai_id.'.'.$ext;
		        move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );
		        $form_data = array(
					'game_name'   => $_POST['name'],
					'entry_fees'  => $_POST['entry_fees'],
					'game_category'       => $_POST['game_category'],
					'game_desc'       => $_POST['content'],
					'game_image'  => $final_name,
	            );
	            $this->Model_pricing_table->add($form_data);
	            if( isset($_FILES['photos']["name"]) && isset($_FILES['photos']["tmp_name"]) )
		        {
		            $photos = array();
		            $photos = $_FILES['photos']["name"];
		            $photos = array_values(array_filter($photos));

		            $photos_temp = array();
		            $photos_temp = $_FILES['photos']["tmp_name"];
		            $photos_temp = array_values(array_filter($photos_temp));

		            $next_id1 = $this->Model_portfolio->get_auto_increment_id1();
					foreach ($next_id1 as $row1) {
			            $ai_id1 = $row1['Auto_increment'];
			        }

		            $z = $ai_id1;

		            $m=0;
		            $final_names = array();
		            for($i=0;$i<count($photos);$i++)
		            {

		            	$ext = pathinfo( $photos[$i], PATHINFO_EXTENSION );
				        $ext_check = $this->Model_common->extension_check_photo($ext);
				        if($ext_check == FALSE) {
				        	// Nothing to do, just skip
				        } else {
				        	$final_names[$m] = $z.'.'.$ext;
		                    move_uploaded_file($photos_temp[$i],"./public/uploads/portfolio_photos/".$final_names[$m]);
		                    $m++;
		                    $z++;
				        }
		            }
		        }

		        for($i=0;$i<count($final_names);$i++)
		        {
		        	$form_data = array(
						'portfolio_id' => $ai_id,
						'photo'        => $final_names[$i]
		            );
		            $this->Model_portfolio->add_photos($form_data);
		        }

		        $success = 'Game is added successfully!';
		        $this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/games');
		    } 
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/games/add');
		    }
            
        } else {
            
            $this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_pricing_table_add',$data);
			$this->load->view('admin/view_footer');
        }
		
	}


	public function edit($id)
	{
		
    	// If there is no pricing table in this id, then redirect
    	$tot = $this->Model_pricing_table->pricing_table_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/games');
        	exit;
    	}
       	
       	$data['setting'] = $this->Model_common->get_setting_data();
		$error = '';
		$success = '';


		if(isset($_POST['form1'])) 
		{

			$valid = 1;

			$this->form_validation->set_rules('name', 'Game Name', 'trim|required');
			$this->form_validation->set_rules('entry_fees', 'Entry Fees', 'trim|required');

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
		    }
		    
		    if($valid == 1) 
		    {
		    	$data['pricing_table'] = $this->Model_pricing_table->getData($id);
		    	if($path == '') {
		    		 $form_data = array(
											'game_name'        => $_POST['name'],
											'entry_fees'       => $_POST['entry_fees'],
											'game_desc'       => $_POST['content'],
											'game_category'       => $_POST['game_category'],
							            );
		            $this->Model_pricing_table->update($id,$form_data);
				}
				else {
					unlink('./public/uploads/'.$data['portfolio']['photo']);

					$final_name = 'portfolio-'.$id.'.'.$ext;
		        	move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

		        	
		            $form_data = array(
											'game_name'        => $_POST['name'],
											'entry_fees'       => $_POST['entry_fees'],
											'game_image'       => $final_name,
											'game_desc'       => $_POST['content'],
											'game_category'       => $_POST['game_category'],
							            );
		            $this->Model_pricing_table->update($id,$form_data);
				}
	    		
				if( isset($_FILES['photos']["name"]) && isset($_FILES['photos']["tmp_name"]) )
		        {
		            $photos = array();
		            $photos = $_FILES['photos']["name"];
		            $photos = array_values(array_filter($photos));

		            $photos_temp = array();
		            $photos_temp = $_FILES['photos']["tmp_name"];
		            $photos_temp = array_values(array_filter($photos_temp));

		            $next_id1 = $this->Model_portfolio->get_auto_increment_id1();
					foreach ($next_id1 as $row1) {
			            $ai_id1 = $row1['Auto_increment'];
			        }

		            $z = $ai_id1;

		            $m=0;
		            $final_names = array();
		            for($i=0;$i<count($photos);$i++)
		            {

		            	$ext = pathinfo( $photos[$i], PATHINFO_EXTENSION );
				        $ext_check = $this->Model_common->extension_check_photo($ext);
				        if($ext_check == FALSE) {
				        	// Nothing to do, just skip
				        } else {
				        	$final_names[$m] = $z.'.'.$ext;
		                    move_uploaded_file($photos_temp[$i],"./public/uploads/portfolio_photos/".$final_names[$m]);
		                    $m++;
		                    $z++;
				        }
		            }
		        }

		        for($i=0;$i<count($final_names);$i++)
		        {
		        	$form_data = array(
						'portfolio_id' => $id,
						'photo'        => $final_names[$i]
		            );
		            $this->Model_portfolio->add_photos($form_data);
		        }
				$success = 'Game is updated successfully';
				$this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/games');
		    }
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/games/edit/'.$id);
		    }
           
		} else {
			$data['pricing_table'] = $this->Model_pricing_table->getData($id);
			$data['all_photos_by_id'] = $this->Model_portfolio->get_all_photos_by_category_id($id);
	       	$this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_pricing_table_edit',$data);
			$this->load->view('admin/view_footer');
		}

	}


	public function delete($id) 
	{
		// If there is no pricing table in this id, then redirect
    	$tot = $this->Model_pricing_table->pricing_table_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/pricing_table');
        	exit;
    	}

        $this->Model_pricing_table->delete($id);
        $success = 'Game is deleted successfully';
        $this->session->set_flashdata('success',$success);
        redirect(base_url().'admin/games');
    }

}