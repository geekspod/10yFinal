<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	function __construct()
	{
        parent::__construct();
        $this->load->model('Model_common');
        $this->load->model('Model_home');
        $this->load->model('Model_portfolio');
        $this->load->model('Model_team');
    }

	public function index()
	{
		$data['setting'] = $this->Model_common->all_setting();
		$data['page_about'] = $this->Model_common->all_page_about();
		$data['comment'] = $this->Model_common->all_comment();
		$data['social'] = $this->Model_common->all_social();
		$data['all_news'] = $this->Model_common->all_news();
		$data['page_home'] = $this->Model_common->all_page_home();
		$data['services'] = $this->Model_home->all_service();
		$data['sliders'] = $this->Model_common->all_slider('aboutus');
		$data['testimonials'] = $this->Model_home->all_testimonial();
		$data['team_members'] = $this->Model_team->all_team_member();

		$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();

		$this->load->view('view_header',$data);
		$this->load->view('view_about',$data);
		$this->load->view('view_footer',$data);
	}
}