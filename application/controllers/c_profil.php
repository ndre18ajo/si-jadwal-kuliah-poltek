<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_profil extends CI_Controller {
	function __construct(){
		parent::__Construct();
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
	}
	public function index()
	{
		$data["title"] = "Dashboard Admin";
		$data["all"] = $this->db->get('tb_users')->result();
		$this->load->view('dashboard/header_db', $data);
		$this->load->view('admin/sidebar_db_admin', $data);
		$this->load->view('profil/content_db_profil', $data);
		$this->load->view('dashboard/footer_db', $data);
	}
	public function edit()
	{
		$data["title"] = "Dashboard Admin";
		$data["all"] = $this->db->get('tb_users')->result();

		if ($this->form_validation->run() == FALSE) {
			$data["title"] = "Dashboard Admin";
			$data["all"] = $this->db->get('tb_users')->result();
			$this->load->view('dashboard/header_db', $data);
			$this->load->view('admin/sidebar_db_admin', $data);
			$this->load->view('profil/content_db_profil', $data);
			$this->load->view('dashboard/footer_db', $data);
		} else {
			$username = $this->input->post('username');
			$email = $this->input->post('email');

			$data=array(
				"id_users"=>$id_users,
				"username"=>$username,
				"email"=>$email
			);

			$this->db->set('username', $username);
			$this->db->where('email', $email);
			$this->db->update('tb_users', $data);

			$this->session->set_flashdata('flash',"Data Profil Berhasil Diupdate!");
			redirect('c_profil/edit');
		}
	}
	public function ganti_password(){
		$data["title"] = "Dashboard Admin";
		$data["all"] = $this->db->get('tb_users')->result();

		$this->form_validation->set_rules('password_lama', 'password_lama', 'required|trim');
		$this->form_validation->set_rules('password_baru', 'password_baru', 'required|trim');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('dashboard/header_db', $data);
			$this->load->view('admin/sidebar_db_admin', $data);
			$this->load->view('profil/content_db_profil', $data);
			$this->load->view('dashboard/footer_db', $data);
		} else {
			$password_lama = $this->input->post('password_lama');
			$password_baru = $this->input->post('password_baru');
			echo json_encode($data['tb_users']['password']);

			// if(!password_verify($password_lama, $data['tb_users']['password'])) {
			// 	$this->session->set_flashdata('flash2',"Password Salah!");
			// 	redirect('c_profil/ganti_password');
			// } else {
			// 	if ($password_lama == $password_baru) {
			// 		$this->session->set_flashdata('flash2',"Password Lama Tidak Boleh Sama Dengan Password Baru!");
			// 		redirect('c_profil/ganti_password');
			// 	} else {
			// 		$password_hash = password_hash($password_baru, PASSWORD_DEFAULT);

			// 		$this->db->set('password', $password_hash);
			// 		$this->db->where('email', $this->session->userdata('email'));
			// 		$this->db->update('tb_users');

			// 		$this->session->set_flashdata('flash2',"Password telah diganti!");
			// 		redirect('c_profil/ganti_password');
			// 	}
			// }
		}
		
	}
	
}
