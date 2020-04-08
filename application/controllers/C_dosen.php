<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_dosen extends CI_Controller {
	function __construct(){
		parent::__Construct();
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
	}
	public function index()
	{
		$data["title"] = "Dashboard Admin";
		$data["all"] = $this->db->get('tb_dosen')->result();
		$data['user'] = $this->session->userdata('user');
		$this->load->view('dashboard/header_db', $data);
		$this->load->view('admin/sidebar_db_admin', $data);
		$this->load->view('dosen/content_db_dosen', $data);
		$this->load->view('dashboard/footer_db', $data);
	}
	public function tambah(){
		$data["title"] = "Dashboard Dosen";

		$this->form_validation->set_rules('nip_dosen', 'nip_dosen', 'required');
		$this->form_validation->set_rules('nama_dosen', 'nama_dosen', 'required');
		$this->form_validation->set_rules('jk_dosen', 'jk_dosen', 'required');
		if ($this->form_validation->run() == FALSE)
                {
                	$this->load->view('dashboard/header_db', $data);
					$this->load->view('admin/sidebar_db_admin', $data);
					$this->load->view('dosen/content_db_dosen', $data);
					$this->load->view('dashboard/footer_db', $data);
					
				}
				else
                {
                    $data = [
                    	"nip_dosen" => $this->input->post('nip_dosen', true),
                    	"nama_dosen" => $this->input->post('nama_dosen', true),
                    	"jk_dosen" => $this->input->post('jk_dosen', true)
                    ];

                    $this->db->insert('tb_dosen', $data);
                    $this->session->set_flashdata('flash', 'Ditambahkan!');
                    redirect('c_dosen/index');
                }	
	}
	public function hapus()
	{
		$id_dosen=$this->input->post('id_dosen');
		$nip_dosen=$this->input->post('nip_dosen');
		$nama_matkul=$this->input->post('nama_dosen');
		$jk_dosen=$this->input->post('jk_dosen');

		$this->db->where('id_dosen', $id_dosen);
		$this->db->delete('tb_dosen');
		$this->session->set_flashdata('flash',"Dihapus!");
		redirect('c_dosen/index');
		
	}
	public function edit()
	{
		$id_dosen=$this->input->post('id_dosen');
		$nip_dosen=$this->input->post('nip_dosen');
		$nama_dosen=$this->input->post('nama_dosen');
		$jk_dosen=$this->input->post('jk_dosen');

			$data=array(
				"nip_dosen"=>$nip_dosen,
				"nama_dosen"=>$nama_dosen,
				"jk_dosen"=>$jk_dosen
			);
			$this->db->where('id_dosen', $id_dosen);
			$this->db->update('tb_dosen',$data);
			$this->session->set_flashdata('flash',"Diubah!");
			redirect('c_dosen/index');
	}
	public function dashboard_dosen(){
		$data['title'] = 'Dashboard Dosen';
		$this->load->view('dashboard/header_db', $data);
		$this->load->view('dosen/dashboard_db_dosen', $data);
		$this->load->view('dosen/sidebar_db_dosen', $data);
		$this->load->view('dashboard/footer_db', $data);
	}

}