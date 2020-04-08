<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_admin extends CI_Controller {
	function __construct(){
	  parent::__construct();
	  $this->load->helper('form');
	  $this->load->library('form_validation', 'session');
	}
	public function index()
	{
		$data["title"] = "Dashboard Admin";
		$data['user'] = $this->session->userdata('user');
		$this->load->view('dashboard/header_db', $data);
		$this->load->view('admin/sidebar_db_admin', $data);
		$this->load->view('admin/content_db_admin', $data);
		$this->load->view('dashboard/footer_db', $data);
	}
	
}
