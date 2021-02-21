<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct()
	{
        parent::__construct();
        $this->load->model('Model_common');
        $this->load->model('Model_home');
        $this->load->model('Model_portfolio');
		redirect('/login');
    }

	public function index()
	{
		$data['setting'] = $this->Model_common->all_setting();
	//	echo "<pre>";print_r($data['setting']);exit;
		$data['page_home'] = $this->Model_common->all_page_home();
		//	echo "<pre>";print_r($data['page_home']);exit;
	//home_welcome_video
		$data['why_home'] = $this->Model_common->select_why();
	//	echo "<pre>";print_r($data['why_home']);exit;
		$data['comment'] = $this->Model_common->all_comment();
		$data['social'] = $this->Model_common->all_social();
		//	echo "<pre>";print_r($data['social']);exit;
		$data['all_news'] = $this->Model_common->all_news();
		$data['all_news_category'] = $this->Model_common->all_news_category();

		$data['sliders'] = $this->Model_common->all_slider();
	//	echo "<pre>";print_r($data['sliders']);exit;
		$data['services'] = $this->Model_home->all_service();
		$data['features'] = $this->Model_home->all_feature();
		$data['why_choose'] = $this->Model_home->all_why_choose();
		//	echo "<pre>";print_r($data['why_choose']);exit;
		$data['team_members'] = $this->Model_home->all_team_member();
		$data['testimonials'] = $this->Model_home->all_testimonial();		
		$data['clients'] = $this->Model_home->all_client();
		$data['pricing_table'] = $this->Model_home->all_pricing_table();
		$data['home_faq'] = $this->Model_home->all_faq_home();

		$data['portfolio_category'] = $this->Model_portfolio->get_portfolio_category();
		$data['portfolio'] = $this->Model_portfolio->get_portfolio_data();

		$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();
//	echo "<pre>";print_r($data['portfolio_footer']);exit;
		$this->load->view('view_header',$data);
		$this->load->view('view_home',$data);
	    $this->load->view('view_footer',$data);
	}

	public function send_email() {

		$data['setting'] = $this->Model_common->all_setting();
//echo "<pre>";print_r($data['setting']);exit;
		$error = '';

		if(isset($_POST['submit'])) {

			$valid = 1;

           

// 			if($_POST['pest_control'] == 'Pest Control') {
// 	    		$pest_control_status = 'Yes';
// 	    	} else {
// 	    		$pest_control_status = 'No';
// 	    	}

// 	    	if($_POST['termite_control'] == 'Termite Control') {
// 	    		$termite_control_status = 'Yes';
// 	    	} else {
// 	    		$termite_control_status = 'No';
// 	    	}

// 	    	if($_POST['damage_repair'] == 'Damage Repair') {
// 	    		$damage_repair_status = 'Yes';
// 	    	} else {
// 	    		$damage_repair_status = 'No';
// 	    	}

			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
			$this->form_validation->set_rules('subject', 'Subject', 'trim|required');
			$this->form_validation->set_rules('message', 'Message', 'trim|required');
			$this->form_validation->set_error_delimiters('', '<br>');

			if($this->form_validation->run() == FALSE) {
				$valid = 0;
                $error .= validation_errors();
            }

            // if( $pest_control_status == 'No' && $termite_control_status == 'No' && $damage_repair_status == 'No' ) {
            // 	$valid = 0;
            //     $error .= 'You must have to select at least one service.';
            // }

		    if($valid == 1)
		    {
		         $name= $this->input->post('name');
            $email= $this->input->post('email');
            $subject= $this->input->post('subject');
            $message= $this->input->post('message');
            
				$msg = '
            		<h3>Visitor Information</h3>
					<b>Name: </b> '.$_POST['name'].'<br><br>
					<b>Email: </b> '.$_POST['email'].'<br><br>
					<b>subject: </b> '.$_POST['subject'].'<br><br>
					<b>message: </b> '.$_POST['message'].'<br><br>
					
				';
            	$this->load->library('email');

				$this->email->from($data['setting']['send_email_from']);
				$this->email->to($data['setting']['receive_email_to']);

				$this->email->subject('Contact Form Email');
				$this->email->message($msg);

				$this->email->set_mailtype("html");

				$this->email->send();

		        $success = 'Thank you for sending the email. We will contact with you shortly.';
        		$this->session->set_flashdata('success',$success);

		    } 
		    else
		    {
        		$this->session->set_flashdata('error',$error);
		    }

			redirect(base_url());
            
        } else {
            
            redirect(base_url());
        }
	}
}
