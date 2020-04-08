<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_matkul extends CI_Controller {
	function __construct(){
		parent::__Construct();
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
	}
	public function index()
	{
		$data["title"] = "Dashboard Admin";
		$data["all"] = $this->db->get('tb_matkul')->result();
		$data['user'] = $this->session->userdata('user');
		$data['prodi'] = $this->db->get('tb_prodi')->result();
		$this->load->view('dashboard/header_db', $data);
		$this->load->view('admin/sidebar_db_admin', $data);
		$this->load->view('matkul/content_db_matkul', $data);
		$this->load->view('dashboard/footer_db', $data);
	}
	public function tambah(){
		$data["title"] = "Dashboard Dosen";

		$this->form_validation->set_rules('kode_matkul', 'kode_Matkul', 'required');
		$this->form_validation->set_rules('nama_matkul', 'nama_Matkul', 'required');
		$this->form_validation->set_rules('sks', 'sks', 'required');
		$this->form_validation->set_rules('semester', 'semester', 'required');
		$this->form_validation->set_rules('id_prodi', 'id_prodi', 'required');
		$this->form_validation->set_rules('tingkat', 'tingkat', 'required');
		$this->form_validation->set_rules('tahun_akademik', 'tahun_akademik', 'required');
		if ($this->form_validation->run() == FALSE)
                {
					$this->session->set_flashdata('flash2', 'Gagal memasukkan data!');
                    redirect('c_matkul/index');
				}
				else
                {
                    $data = [
                    	"kode_matkul" => $this->input->post('kode_matkul', true),
                    	"nama_matkul" => $this->input->post('nama_matkul', true),
                    	"sks" => $this->input->post('sks', true),
                    	"semester" => $this->input->post('semester', true),
                    	"id_prodi" => $this->input->post('id_prodi', true),
                    	"prodi" => $this->db->get_where('tb_prodi', array('id_prodi'=>$this->input->post('id_prodi', true)))->row()->prodi,
                    	"tingkat" => $this->input->post('tingkat', true),
                    	"tahun_akademik" => $this->input->post('tahun_akademik', true)
                    ];

                    $this->db->insert('tb_matkul', $data);
                    $this->session->set_flashdata('flash', 'Ditambahkan!');
                    redirect('c_matkul/index');
                }	
	}
	public function hapus()
	{
		$id_matkul = $this->input->post('id_matkul');
		$kode_matkul=$this->input->post('kode_matkul');
		$nama_matkul=$this->input->post('nama_matkul');
		$sks=$this->input->post('sks');
		$semester=$this->input->post('semester');
		$prodi=$this->input->post('prodi');
		$tingkat=$this->input->post('tingkat');
		$tahun_akademik=$this->input->post('tahun_akademik');

		$this->db->where('id_matkul', $id_matkul);
		$this->db->delete('tb_matkul');
		$this->session->set_flashdata('flash',"Dihapus!");
		redirect('c_matkul/index');
		
	}
	public function edit()
	{
		$id_matkul = $this->input->post('id_matkul');
		$kode_matkul=$this->input->post('kode_matkul');
		$nama_matkul=$this->input->post('nama_matkul');
		$sks=$this->input->post('sks');
		$semester=$this->input->post('semester');
		$id_prodi=$this->input->post('id_prodi');
      	$prodi = $this->db->get_where('tb_prodi', array('id_prodi'=>$id_prodi))->row()->prodi;
		$tingkat=$this->input->post('tingkat');
		$tahun_akademik=$this->input->post('tahun_akademik');

			$data=array(
				"kode_matkul"=>$kode_matkul,
				"nama_matkul"=>$nama_matkul,
				"sks"=>$sks,
				"semester"=>$semester,
				"prodi"=>$prodi,
				"id_prodi" => $id_prodi,
				"tingkat"=>$tingkat,
				"tahun_akademik"=>$tahun_akademik
			);
			$this->db->where('id_matkul', $id_matkul);
			$this->db->update('tb_matkul',$data);
			$this->session->set_flashdata('flash',"Diubah!");
			redirect('c_matkul/index');
	}

}

