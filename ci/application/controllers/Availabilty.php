<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Availabilty extends CI_Controller {
	function __construct()
	{
        parent::__construct();
        $this->load->model('Model_common');
        $this->load->model('Model_search');
        $this->load->model('Model_portfolio');
        $this->load->model('chat_model');
        if(!$this->session->userdata('logged_in'))
        {
			redirect(site_url().'/login');
		}
    }

	public function index() {

		$data['setting'] = $this->Model_common->all_setting();
		$data['page_home'] = $this->Model_common->all_page_home();
		$data['page_search'] = $this->Model_common->all_page_search();
		$data['comment'] = $this->Model_common->all_comment();
		$data['social'] = $this->Model_common->all_social();
		$data['all_news'] = $this->Model_common->all_news();

		$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();

		$error2 = '';
		
			$getusers = $this->db->get_where('tbl_customer',array('role_id' => 2));
		
		
		$data['chef'] = $getusers;
			//$data['search_string'] = $_POST['search_string'];
			//$data['result'] = $this->Model_search->search($_POST['search_string']);
			//$data['total'] = $this->Model_search->search_total($_POST['search_string']);

			$this->load->view('view_header',$data);
			$this->load->view('view_availabilty',$data);
			$this->load->view('view_footer',$data);
	}
	
	
	public function add()
	{
		$customer_id = $this->session->userdata('id');
		$date        = $this->input->get('date');
		end($date);         // move the internal pointer to the end of the array
		$key = key($date);  // fetches the key of the element pointed to by the internal pointer
		$datenew = $this->changedate($date[$key]);
		$adddate = $this->db->get_where('tbl_calendar',array('customer_id' =>$this->session->userdata('id'),'date' => $datenew));
		$post_data = array(
							  	'customer_id' => $this->session->userdata('id'),
							  	'date'		  => $datenew,
							  );
		if($adddate->num_rows() > 0)
		{
			$this->db->delete('tbl_calendar',$post_data);
		}else
		{
			
			$this->db->insert('tbl_calendar',$post_data);				  
		}
		
		
	}
	
	
	public function changedate($chkdt)
	{
			$month = substr($chkdt,4,3);
			if($month == 'Jan') $month = '01';
			else if($month == 'Feb') $month = '02';
			else if($month == 'Mar') $month = '03';
			else if($month == 'Apr') $month = '04';
			else if($month == 'May') $month = '05';
			else if($month == 'Jun') $month = '06';
			else if($month == 'Jul') $month = '07';
			else if($month == 'Aug') $month = '08';
			else if($month == 'Sep') $month = '09';
			else if($month == 'Oct') $month = '10';
			else if($month == 'Nov') $month = '11';
			else if($month == 'Dec') $month = '12';
			
			$date = substr($chkdt,7,3);
			$year = substr($chkdt,10,5);
			$finaldt = date("Y-m-d", mktime(0, 0, 0, $month, $date, $year));
			return $finaldt;
	}
	
	
	
	
	public function getdate()
	{
		$unavailable = array();
		
		$getdates = $this->db->get_where('tbl_calendar',array('customer_id' => $this->session->userdata('id')));
		if($getdates->num_rows() > 0)
		{
			foreach($getdates->result_array() as $dates)
			{
				$unavailable[] = $dates['date'];
			}
		}else
		{
			
		}
		
		echo implode(",",$unavailable);
		
	}
	
    
}