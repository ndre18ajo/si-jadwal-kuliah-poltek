<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_jadwal extends CI_Controller {
	public function index()
	{
		$data["title"] = "Dashboard Admin";
		$this->load->view('dashboard/header_db', $data);
		$this->load->view('admin/sidebar_db_admin', $data);
		$this->load->view('jadwal/content_db_jadwal', $data);
		$this->load->view('dashboard/footer_db', $data);
	}

	
}
