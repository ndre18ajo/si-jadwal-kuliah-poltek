<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_users extends CI_Controller {
	function __construct(){
		parent::__Construct();
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
	}
	public function index()
	{
		$data["title"] = "Dashboard Admin";
		$data["all"] = $this->db->get('tb_users')->result();
		$data['user'] = $this->session->userdata('user');
		$this->load->view('dashboard/header_db', $data);
		$this->load->view('admin/sidebar_db_admin', $data);
		$this->load->view('users/content_db_users', $data);
		$this->load->view('dashboard/footer_db', $data);
	}
	public function tambah(){
		$data["title"] = "Dashboard Admin";

		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		$this->form_validation->set_rules('level', 'level', 'required');
		if ($this->form_validation->run() == FALSE)
                {
                	$this->load->view('dashboard/header_db', $data);
					$this->load->view('admin/sidebar_db_admin', $data);
					$this->load->view('users/content_db_users', $data);
					$this->load->view('dashboard/footer_db', $data);
				}
				else
                {
                    $data = [
                    	"username" => $this->input->post('username', true),
                    	"nama" => $this->input->post('nama', true),
                    	"email" => $this->input->post('email', true),
                    	"password" => $this->input->post('password', true),
                    	"level" => $this->input->post('level', true)
                    ];

                    $this->db->insert('tb_users', $data);
                    $this->session->set_flashdata('flash', 'Ditambahkan!');
                    redirect('c_users/index');
                }	
	}
	public function hapus()
	{
		$id=$this->input->post('id');
		$username=$this->input->post('username');
		$nama=$this->input->post('nama');
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$level=$this->input->post('level');

		$this->db->where('id', $id);
		$this->db->delete('tb_users');
		$this->session->set_flashdata('flash',"Dihapus!");
		redirect('c_users/index');
		
	}
	public function edit()
	{
		$id=$this->input->post('id');
		$username=$this->input->post('username');
		$nama=$this->input->post('nama');
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$level=$this->input->post('level');

		$data=array(
			"id"=>$id,
			"username"=>$username,
			"nama"=>$nama,
			"email"=>$email,
			"password"=>$password,
			"level"=>$level,
		);
		$this->db->where('id', $id);
		$this->db->update('tb_users',$data);


		$userLogin = $this->session->userdata('user');


		// update jika yang di edit user yang sedang logion
		if ($userLogin->id == $id) {
			
            $user = $this->db->get_where('tb_users', array('id'=>$id))->row();

           	$this->session->set_userdata(array('user' => $user));
		}


		$this->session->set_flashdata('flash',"Diubah!");
		redirect('c_users/index');
	}
	
}
