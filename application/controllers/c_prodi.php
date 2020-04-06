<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_prodi extends CI_Controller {
	function __construct(){
		parent::__Construct();
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
	}
	public function index()
	{
		$data["title"] = "Dashboard Admin";
		$data["all"] = $this->db->get('tb_prodi')->result();
		$this->load->view('dashboard/header_db', $data);
		$this->load->view('admin/sidebar_db_admin', $data);
		$this->load->view('prodi/content_db_prodi', $data);
		$this->load->view('dashboard/footer_db', $data);
	}
	public function tambah(){
		$data["title"] = "Tambah Data Program Studi";

		$this->form_validation->set_rules('prodi', 'Prodi', 'required');
		if ($this->form_validation->run() == FALSE)
                {
                    $this->load->view('dashboard/header_db', $data);
					$this->load->view('admin/sidebar_db_admin', $data);
					$this->load->view('prodi/content_db_prodi', $data);
					$this->load->view('dashboard/footer_db', $data);
                }
                else
                {
                    $data = [
                    	"prodi" => $this->input->post('prodi', true)
                    ];

                    $this->db->insert('tb_prodi', $data);
                    $this->session->set_flashdata('flash', 'Ditambahkan!');
                    redirect('c_prodi/index');
                }	
	}
	public function hapus()
	{
		$id_prodi=$this->input->post('id_prodi');

		$this->db->where('id_prodi', $id_prodi);
		$this->db->delete('tb_prodi');
		$this->session->set_flashdata('flash',"Dihapus!");
		redirect('c_prodi/index');
		
	}
	public function edit()
	{
		$prodi=$this->input->post('prodi');
		$id_prodi=$this->input->post('id_prodi');

			$data=array(
				"prodi"=>$prodi,
				"id_prodi"=>$id_prodi
			);
			$this->db->where('id_prodi', $id_prodi);
			$this->db->update('tb_prodi',$data);
			$this->session->set_flashdata('flash',"Diubah!");
			redirect('c_prodi/index');
	}

	
}
