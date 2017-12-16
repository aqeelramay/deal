<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url', 'form'));
        $this->load->library(array('session','form_validation'));
        $this->load->model('admin_model');
    }
    
    function login()
    {
        $this->load->view("ramay/login");
    }
}