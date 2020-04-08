<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_kelas extends CI_Controller {
	function __construct(){
		parent::__Construct();
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
	}
	public function index()
	{
		$data["title"] = "Dashboard Admin";
		$data["all"] = $this->db->get('tb_kelas')->result();
		$data['user'] = $this->session->userdata('user');
		$this->load->view('dashboard/header_db', $data);
		$this->load->view('admin/sidebar_db_admin', $data);
		$this->load->view('kelas/content_db_kelas', $data);
		$this->load->view('dashboard/footer_db', $data);
	}
	public function tambah(){
		$data["title"] = "Dashboard Admin";

		$this->form_validation->set_rules('nama_kelas', 'Nama_kelas', 'required');
		if ($this->form_validation->run() == FALSE)
                {
                	$this->load->view('dashboard/header_db', $data);
					$this->load->view('admin/sidebar_db_admin', $data);
					$this->load->view('kelas/content_db_kelas', $data);
					$this->load->view('dashboard/footer_db', $data);
					
				}
				else
                {
                    $data = [
                    	"nama_kelas" => $this->input->post('nama_kelas', true)
                    ];

                    $this->db->insert('tb_kelas', $data);
                    $this->session->set_flashdata('flash', 'Ditambahkan!');
                    redirect('c_kelas/index');
                }	
	}
	public function hapus()
	{
		$id_kelas=$this->input->post('id_kelas');
		$nama_kelas=$this->input->post('nama_kelas');

		$this->db->where('id_kelas', $id_kelas);
		$this->db->delete('tb_kelas');
		$this->session->set_flashdata('flash',"Dihapus!");
		redirect('c_kelas/index');
		
	}
	public function edit()
	{
		$id_kelas=$this->input->post('id_kelas');
		$nama_kelas=$this->input->post('nama_kelas');
		
			$data=array(
				"nama_kelas"=>$nama_kelas,
				"id_kelas"=>$id_kelas
			);
			$this->db->where('id_kelas', $id_kelas);
			$this->db->update('tb_kelas',$data);
			$this->session->set_flashdata('flash',"Diubah!");
			redirect('c_kelas/index');
	}

	
}
