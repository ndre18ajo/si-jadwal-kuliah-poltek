<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_alat_peminjaman extends CI_Controller {
	function __construct(){
		parent::__Construct();
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
	}
	public function index()
	{
		$data["title"] = "Dashboard Admin";
		$data["all"] = $this->db->get('tb_alat_pinjaman')->result();
		$this->load->view('dashboard/header_db', $data);
		$this->load->view('admin/sidebar_db_admin', $data);
		$this->load->view('alat_peminjaman/content_db_alat_peminjaman', $data);
		$this->load->view('dashboard/footer_db', $data);
	}
	public function tambah(){
		$data["title"] = "Dashboard Admin";

		$this->form_validation->set_rules('nama_alat', 'nama_alat', 'required');
		if ($this->form_validation->run() == FALSE)
                {
                	$this->load->view('dashboard/header_db', $data);
					$this->load->view('admin/sidebar_db_admin', $data);
					$this->load->view('alat_peminjaman/content_db_alat_peminjaman', $data);
					$this->load->view('dashboard/footer_db', $data);
					
				}
				else
                {
                    $data = [
                    	"nama_alat" => $this->input->post('nama_alat', true)
                    ];

                    $this->db->insert('tb_alat_pinjaman', $data);
                    $this->session->set_flashdata('flash', 'Ditambahkan!');
                    redirect('c_alat_peminjaman/index');
                }	
	}
	public function hapus()
	{
		$nama_alat=$this->input->post('nama_alat');
		$id_alat=$this->input->post('id_alat');

		$this->db->where('id_alat', $id_alat);
		$this->db->delete('tb_alat_pinjaman');
		$this->session->set_flashdata('flash',"Dihapus!");
		redirect('c_alat_peminjaman/index');
		
	}
	public function edit()
	{
		$nama_alat=$this->input->post('nama_alat');
		$id_alat=$this->input->post('id_alat');

			$data=array(
				"nama_alat"=>$nama_alat,
				"id_alat"=>$id_alat
			);
			$this->db->where('id_alat', $id_alat);
			$this->db->update('tb_alat_pinjaman',$data);
			$this->session->set_flashdata('flash',"Diubah!");
			redirect('c_alat_peminjaman/index');
	}
	public function sidebar_mahasiswa(){
		$data["title"] = "Dashboard Mahasiswa";
		$this->load->view('dashboard/header_db', $data);
		$this->load->view('mahasiswa/sidebar_db_mahasiswa', $data);
		$this->load->view('alat_peminjaman/content_db_alat_peminjaman', $data);
		$this->load->view('dashboard/footer_db', $data);
	}

	
}
