<?php
	/**
	* 
	*/
	class dashboard extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('m_login');
			$this->load->helper('url');
		}

		function index()
		{
			if ($this->session->userdata('status') == "login") {
				redirect('dashboard/dashboard');
			}
			else{
				redirect('login/index');
			}
			$this->load->view('login');
		}

		function dashboard()
		{
			if ($this->session->userdata('status') != "login") {
				redirect('login/index');
			}
			$this->load->view('nasabah/dashboard');
		}
	}
?>