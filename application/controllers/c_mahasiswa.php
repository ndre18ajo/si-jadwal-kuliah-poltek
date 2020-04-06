<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_mahasiswa extends CI_Controller {
	function __construct(){
		parent::__Construct();
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
	}
	public function index()
	{
		$data["title"] = "Dashboard Admin";
		$data["all"] = $this->db->get('tb_mahasiswa')->result();
		$this->load->view('dashboard/header_db', $data);
		$this->load->view('admin/sidebar_db_admin', $data);
		$this->load->view('mahasiswa/content_db_mahasiswa', $data);
		$this->load->view('dashboard/footer_db', $data);
	}
	public function tambah(){
		$data["title"] = "Dashboard Dosen";

		$this->form_validation->set_rules('nim_mhs', 'nim_mhs', 'required');
		$this->form_validation->set_rules('nama_mhs', 'nama_mhs', 'required');
		$this->form_validation->set_rules('tingkat', 'tingkat', 'required');
		$this->form_validation->set_rules('semester', 'semester', 'required');
		$this->form_validation->set_rules('prodi', 'prodi', 'required');
		if ($this->form_validation->run() == FALSE)
                {
                	$this->load->view('dashboard/header_db', $data);
					$this->load->view('admin/sidebar_db_admin', $data);
					$this->load->view('mahasiswa/content_db_mahasiswa', $data);
					$this->load->view('dashboard/footer_db', $data);
					
				}
				else
                {
                    $data = [
                    	"nim_mhs" => $this->input->post('nim_mhs', true),
                    	"nama_mhs" => $this->input->post('nama_mhs', true),
                    	"tingkat" => $this->input->post('tingkat', true),
                    	"semester" => $this->input->post('semester', true),
                    	"prodi" => $this->input->post('prodi', true)
                    ];

                    $this->db->insert('tb_mahasiswa', $data);
                    $this->session->set_flashdata('flash', 'Ditambahkan!');
                    redirect('c_mahasiswa/index');
                }	
	}
	public function hapus()
	{
		$id_mahasiswa=$this->input->post('id_mahasiswa');
		$nim_mhs=$this->input->post('nim_mhs');
		$nama_matkul=$this->input->post('nama_mhs');
		$tingkat=$this->input->post('tingkat');
		$semester=$this->input->post('semester');
		$prodi=$this->input->post('prodi');

		$this->db->where('id_mahasiswa', $id_mahasiswa);
		$this->db->delete('tb_mahasiswa');
		$this->session->set_flashdata('flash',"Dihapus!");
		redirect('c_mahasiswa/index');
		
	}
	public function edit()
	{
		$id_mahasiswa=$this->input->post('id_mahasiswa');
		$nim_mhs=$this->input->post('nim_mhs');
		$nama_mhs=$this->input->post('nama_mhs');
		$tingkat=$this->input->post('tingkat');
		$semester=$this->input->post('semester');
		$prodi=$this->input->post('prodi');

			$data=array(
				"id_mahasiswa"=>$id_mahasiswa,
				"nim_mhs"=>$nim_mhs,
				"nama_mhs"=>$nama_mhs,
				"tingkat"=>$tingkat,
				"semester"=>$semester,
				"prodi"=>$prodi
			);
			$this->db->where('id_mahasiswa', $id_mahasiswa);
			$this->db->update('tb_mahasiswa',$data);
			$this->session->set_flashdata('flash',"Diubah!");
			redirect('c_mahasiswa/index');
	}
	public function dashboard_mahasiswa(){
		$data["title"] = "Dashboard Mahasiswa";
			$this->load->view('dashboard/header_db', $data);
			$this->load->view('mahasiswa/dashboard_db_mahasiswa', $data);
			$this->load->view('mahasiswa/sidebar_db_mahasiswa', $data);
			$this->load->view('dashboard/footer_db', $data);
	}
	
}
