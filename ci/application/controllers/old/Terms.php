<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Terms extends CI_Controller {
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
		$data['sliders'] = $this->Model_common->all_slider('login');
		$data['page_home'] = $this->Model_common->all_page_home();
		$data['page_terms'] = $this->Model_common->all_page_term();
		$data['social'] = $this->Model_common->all_social();


		$this->load->view('view_header',$data);
		$this->load->view('view_terms',$data);
		$this->load->view('view_footer',$data);
	}
	
	
}