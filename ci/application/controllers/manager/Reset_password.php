<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reset_password extends CI_Controller 
{

    function __construct() 
    {
        parent::__construct();
        $this->load->model('manager/Model_reset_password');
    }

    public function index($email=0,$token=0)
    {
        $tot = $this->Model_reset_password->check_url($email,$token);
        if(!$tot) {
            redirect(base_url().'manager');
            exit;
        }

        $error = '';
        $success = '';
        $data['setting'] = $this->Model_reset_password->get_setting_data();
        
        if(isset($_POST['form1'])) {
            $valid = 1;

            $this->form_validation->set_rules('new_password', 'Password', 'trim|required');
            $this->form_validation->set_rules('re_password', 'Retype Password', 'trim|required|matches[new_password]');

            if($this->form_validation->run() == FALSE) {
                $valid = 0;
                $error = validation_errors();
            }

            if($valid == 1) 
            {
                $salt = 'b7r4';
                // $code = rand(1000,9999);
                $password =  hash('sha256', $salt . ( hash('sha256',$this->input->post('new_password'))));
                // $confirm_password=$password;
               // echo "<pre>";print_r($password);exit;
                $form_data = array(
                    'password' => ($password),
                    'token'    => ''
                );
                $this->Model_reset_password->update($email,$form_data);
                $success = 'Password is updated successfully!';
                $this->session->set_flashdata('success',$success);
                redirect(base_url().'manager/reset_password/success');
            }
            else
            {
                $this->session->set_flashdata('error',$error);
                $data['var1'] = $email;
                $data['var2'] = $token;
                $this->load->view('manager/view_reset_password',$data);
            }
        } else {
            $data['var1'] = $email;
            $data['var2'] = $token;
            $this->load->view('manager/view_reset_password',$data);
        }        
    }

    public function success() 
    {
        $data['setting'] = $this->Model_reset_password->get_setting_data();
        $this->load->view('manager/view_reset_password_success',$data);
    }
}
