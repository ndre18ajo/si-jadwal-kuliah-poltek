<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_ruangan extends CI_Controller {
	function __construct(){
		parent::__Construct();
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
	}
	public function index()
	{
		$data["title"] = "Dashboard Admin";
		$data["all"] = $this->db->get('tb_ruangan')->result();
		$this->load->view('dashboard/header_db', $data);
		$this->load->view('admin/sidebar_db_admin', $data);
		$this->load->view('ruangan/content_db_ruangan', $data);
		$this->load->view('dashboard/footer_db', $data);
	}
	public function tambah(){
		$data["title"] = "Dashboard Admin";

		$this->form_validation->set_rules('kode_ruangan', 'kode_ruangan', 'required');
		$this->form_validation->set_rules('kapasitas_ruangan', 'kapasitas_ruangan', 'required');
		if ($this->form_validation->run() == FALSE)
                {
                	$this->load->view('dashboard/header_db', $data);
					$this->load->view('admin/sidebar_db_admin', $data);
					$this->load->view('ruangan/content_db_ruangan', $data);
					$this->load->view('dashboard/footer_db', $data);
					
				}
				else
                {
                    $data = [
                    	"kode_ruangan" => $this->input->post('kode_ruangan', true),
                    	"kapasitas_ruangan" => $this->input->post('kapasitas_ruangan', true)
                    ];

                    $this->db->insert('tb_ruangan', $data);
                    $this->session->set_flashdata('flash', 'Ditambahkan!');
                    redirect('c_ruangan/index');
                }	
	}
	public function hapus()
	{
		$id_ruangan=$this->input->post('id_ruangan');
		$kode_ruangan=$this->input->post('kode_ruangan');
		$kapasitas_ruangan=$this->input->post('kapasitas_ruangan');

		$this->db->where('id_ruangan', $id_ruangan);
		$this->db->delete('tb_ruangan');
		$this->session->set_flashdata('flash',"Dihapus!");
		redirect('c_ruangan/index');
		
	}
	public function edit()
	{
		$id_ruangan=$this->input->post('id_ruangan');
		$kode_ruangan=$this->input->post('kode_ruangan');
		$kapasitas_ruangan=$this->input->post('kapasitas_ruangan');

			$data=array(
				"id_ruangan"=>$id_ruangan,
				"kode_ruangan"=>$kode_ruangan,
				"kapasitas_ruangan"=>$kapasitas_ruangan
			);
			$this->db->where('id_ruangan', $id_ruangan);
			$this->db->update('tb_ruangan',$data);
			$this->session->set_flashdata('flash',"Diubah!");
			redirect('c_ruangan/index');
	}
	
}
