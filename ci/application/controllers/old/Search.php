<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {
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
		if(isset($_GET['chefname']) != '' || isset($_GET['zipcode']) != '')
		{
			
			$this->db->select('tbl_customer.*','tbl_customer_details.*');
			$this->db->from('tbl_customer');
			$this->db->join('tbl_customer_details','tbl_customer_details.customer_id=tbl_customer.customer_id','LEFT');
			$this->db->like('tbl_customer_details.userzip',$_GET['zipcode']);
			$this->db->like('fullname',$_GET['chefname']);
			$this->db->where('role_id',2);
			$getusers = $this->db->get();
		}else if(isset($_GET['hiretype']) != '')
		{
			$this->db->select('tbl_customer.*','tbl_customer_details.*');
			$this->db->from('tbl_customer');
			$this->db->join('tbl_customer_details','tbl_customer_details.customer_id=tbl_customer.customer_id','LEFT');
			$this->db->like('tbl_customer_details.hiretype',$_GET['hiretype']);
			$this->db->where('role_id',2);
			$getusers = $this->db->get();
		}else if(isset($_GET['cusine']) != '')
		{
			$this->db->select('tbl_customer.*','tbl_customer_details.*');
			$this->db->from('tbl_customer');
			$this->db->join('tbl_customer_details','tbl_customer_details.customer_id=tbl_customer.customer_id','LEFT');
			$this->db->like('tbl_customer_details.cusine',$_GET['cusine']);
			$this->db->where('role_id',2);
			$getusers = $this->db->get();
		}else if(isset($_GET['servicetype']) != '')
		{
			$this->db->select('tbl_customer.*','tbl_feature_project.*');
			$this->db->from('tbl_customer');
			$this->db->join('tbl_feature_project','tbl_feature_project.user_id=tbl_customer.customer_id','LEFT');
			$this->db->like('tbl_feature_project.event_type',$_GET['servicetype']);
			$this->db->where('role_id',2);
			$getusers = $this->db->get();
		}else
		{
			$getusers = $this->db->get_where('tbl_customer',array('role_id' => 2));
		}
		
		$data['chef'] = $getusers;
			//$data['search_string'] = $_POST['search_string'];
			//$data['result'] = $this->Model_search->search($_POST['search_string']);
			//$data['total'] = $this->Model_search->search_total($_POST['search_string']);

			$this->load->view('view_header',$data);
			$this->load->view('view_search',$data);
			$this->load->view('view_footer',$data);

		

	}
	
	
	public function profile($id)
	{
		$data['setting'] = $this->Model_common->all_setting();
		$data['page_home'] = $this->Model_common->all_page_home();
		$data['page_search'] = $this->Model_common->all_page_search();
		$data['comment'] = $this->Model_common->all_comment();
		$data['social'] = $this->Model_common->all_social();
		$data['all_news'] = $this->Model_common->all_news();
		$getusers = $this->db->get_where('tbl_customer',array('customer_id' => $id))->row();
		$data['chef'] = $getusers;
		$this->load->view('view_header',$data);
		$this->load->view('view_chef_profile_view',$data);
		$this->load->view('view_footer',$data);
	}
	
	
	
	public function stripePost()
    {
        require_once('application/libraries/stripe-php/init.php');
    
        \Stripe\Stripe::setApiKey($this->config->item('stripe_secret'));
     	
     	$getchefdetails = $this->db->get_where('tbl_customer_details',array('customer_id' => $this->input->post('chef_id')))->row();
     	
        \Stripe\Charge::create ([
                "amount" => $this->input->post('feature_price') * 100,
                "currency" => "usd",
                "source" => $this->input->post('stripeToken'),
                "description" => "Book Order for feature project.|".$getchefdetails->accounttitle.'|'.$getchefdetails->cash.'|'.$getchefdetails->credit.'|'.$getchefdetails->carnumber
        ]);
        
        $where_data	= array(
        				   		'order_id' 		=> $this->input->post('order_id'),
        				   );
        $post_data	= array(
        				   		'payment_status' => 1,
        				   );				   
        
        $this->db->update('tbl_order',$post_data);
        
        $notifydata = array(
		   						   		'from'		=> $this->session->userdata('id'),
		   						   		'to'		=> $this->input->post('chef_id'),
		   						   		'message'	=> 'Payment is paid By Customer',
		   						   		'status'	=> 0,
		   						   		'timestamp' => time(),
	                                    "url" 		=> "order/index",
	                                    'screen'	=> 'order',
	                                    'chat_id'	=> 0,
		   						   );
		   		
		$addnotification = $this->db->insert('tbl_notification',$notifydata);
		
		
		   		
        
            
        $this->session->set_flashdata('success', 'Payment made successfully.');
        redirect('Order/index','refresh');  
    }
    
    
    
    public function submitorder()
    {
        
        
        $post_data	= array(
        				   		'chef_id' 		=> $this->input->post('chef_id'),
        				   		'customer_id'	=> $this->session->userdata('id'),
        				   		'feature_id'	=> $this->input->post('feature_id'),
        				   		'available_in'	=> $this->input->post('availablein'),
        				   		'description'	=> $this->input->post('description'),
        				   		'total_amount'	=> $this->input->post('feature_price'),
        				   		'status'		=> 1,
        				   );
        
        $this->db->insert('tbl_order',$post_data);
        
        $notifydata = array(
		   						   		'from'		=> $this->session->userdata('id'),
		   						   		'to'		=> $this->input->post('chef_id'),
		   						   		'message'	=> 'New Order is created',
		   						   		'status'	=> 0,
		   						   		'timestamp' => time(),
	                                    "url" 		=> "dashboard",
	                                    'screen'	=> 'dashboard',
	                                    'chat_id'	=> 0,
		   						   );
		   		
		$addnotification = $this->db->insert('tbl_notification',$notifydata);
		
		// preparing insert params
		$insertParams = array(
								'user_id' 				=> $this->session->userdata('id'),
								'driver_id' 			=> $this->input->post('chef_id'),
								'lastmessage_type' 		=> '',
								'lastmessage_message' 	=> 'Hello Dear I have created an order kindly check',
								'lastmessage_image_url' => '',
								);

		// insert the reocrd
		// conversation id
		$conversation_id = $this->chat_model->insert_conversation($insertParams);
		   		
        
            
        $this->session->set_flashdata('success', 'Payment made successfully.');
        redirect('Order/index');  
    }
    
    
    
    public function getdate()
	{
		$unavailable = array();
		
		$getdates = $this->db->get_where('tbl_calendar',array('customer_id' => $this->input->get('chef_id')));
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