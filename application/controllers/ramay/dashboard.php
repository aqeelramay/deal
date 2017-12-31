<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url', 'form', 'security'));
        $this->load->library(array('session','form_validation'));
        $this->load->model('admin_model');
	}
	
	function index()
	{
		$this->checkuser();
		$data['page_title'] = 'Admin Panel Login';
		$this->load->view("ramay/login", $data);	
	}
	
	//check user login or not if not redirect to login page
	function checkuser() {
		if(!$this->session->userdata('admin_username')) {
            redirect('ramay/dashboard/login');
        }
    }
		
	function login()
	{
		if(isset($_POST['admin_login']))
		{
			$this->form_validation->set_rules('username','Username','required|trim|xss_clean|callback_validate_credentials');
			$this->form_validation->set_rules('password','Password','required|trim');
			if($this->form_validation->run())
			{
			 	$this->session->set_userdata('admin_username', $this->db->escape_str($this->input->post('username')));
				redirect('ramay/dashboard/member');
			}
		}
		$this->load->view("ramay/login");
	 }
	 
	 function member()
	 {   
		$this->checkuser();
		$data['page_title'] = 'Deal Admin Panel';
		$this->load->view("ramay/index", $data);
	 }
		
	function validate_credentials() 
	{
		if($this->admin_model->can_login())
		{
			return true;
		}
		else
		{
			$this->form_validation->set_message('validate_credentials','Incorrect Username/Password');
			return false;
		}
	}

	function logout()
	{
	   $this->session->unset_userdata('admin_username');
	   redirect('ramay/dashboard/login');
	}
	
	function changePass()
	{
		$data['page_title'] = "Change Admin Panel Password";
		$this->load->view('ramay/change-password', $data);	
	}
	
	function changePassword()
	{
		$password = $this->db->query("SELECT password FROM adminuser where username = '".$this->session->userdata('admin_username')."'")->row()->password;
		
		if(isset($_POST['update_admin']))
		{
			$password = $this->input->post('password');
			
			if(empty($password))
			{
				redirect('ramay/dashboard/member');	
			} 
			else
			{
				$this->admin_model->change_password($password); 
				redirect('ramay/dashboard/member');
			}
		}
		else
		{
			redirect('ramay/dashboard/changePass');	
		}
	}
		
	function admin_setting()
	{
		if(isset($_POST['update_profile']))
		{
			$update_profile = array(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'phone' => $this->input->post('phone'),
				'address' => $this->input->post('address')
			);
			$this->admin_model->update_profile($update_profile);
		}
			$data['profile'] = $this->admin_model->admin_profile();
			$this->load->view('ramay/admin_setting', $data);
	}
}
