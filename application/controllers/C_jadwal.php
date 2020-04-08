<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_jadwal extends CI_Controller {
	public function index()
	{
		$data["title"] = "Dashboard Admin";
        $data['user'] = $this->session->userdata('user');
        $data['matkul'] =  $this->db->get('tb_matkul')->result();
        $data['dosen'] =  $this->db->get('tb_dosen')->result();
        $data['prodi'] =  $this->db->get('tb_prodi')->result();
        $data['ruangan'] =  $this->db->get('tb_ruangan')->result();
        $data['alat'] =  $this->db->get('tb_alat_pinjaman')->result();
        $data['kelas'] =  $this->db->get('tb_kelas')->result();
        $data["all"] = $this->db->get('tb_jadwal')->result();
		$this->load->view('dashboard/header_db', $data);
		$this->load->view('admin/sidebar_db_admin', $data);
		$this->load->view('jadwal/content_db_jadwal', $data);
		$this->load->view('dashboard/footer_db', $data);
	}



    public function tambah()
    {
        $data["title"] = "Dashboard Admin";

        $this->form_validation->set_rules('id_matkul', 'id_matkul', 'required');
        $this->form_validation->set_rules('nama_matkul', 'nama_matkul', 'required');
        $this->form_validation->set_rules('sks', 'sks', 'required');
        $this->form_validation->set_rules('semester', 'semester', 'required');
        $this->form_validation->set_rules('tingkat', 'tingkat', 'required');
        $this->form_validation->set_rules('waktu', 'waktu', 'required');
        $this->form_validation->set_rules('hari', 'hari', 'required');
        $this->form_validation->set_rules('id_dosen1', 'id_dosen1', 'required');
        $this->form_validation->set_rules('id_dosen2', 'id_dosen2', 'required');
        $this->form_validation->set_rules('id_dosen_koordinator', 'id_dosen_koordinator', 'required');
        $this->form_validation->set_rules('id_prodi', 'id_prodi', 'required');
        $this->form_validation->set_rules('id_ruangan', 'id_ruangan', 'required');
        $this->form_validation->set_rules('id_alat', 'id_alat', 'required');
        $this->form_validation->set_rules('tahun_akademik', 'tahun_akademik', 'required');
        $this->form_validation->set_rules('teori', 'teori', 'required');
        $this->form_validation->set_rules('praktik', 'praktik', 'required');
        $this->form_validation->set_rules('klinik', 'klinik', 'required');
        if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('flash', 'Gagal!');
            return redirect('c_jadwal/index');
        }
        else
        {
            $data = [
                'id_matkul' => $this->input->post('id_matkul'),
                'kode_matkul' => $this->db->get_where('tb_matkul', array('id_matkul'=>$this->input->post('id_matkul')))->row()->kode_matkul,
                'nama_matkul' => $this->input->post('nama_matkul'),
                'sks' => $this->input->post('sks'),
                'semester' => $this->input->post('semester'),
                'tingkat' => $this->input->post('tingkat'),
                'waktu' => $this->input->post('waktu'),
                'hari' => $this->input->post('hari'),
                'id_dosen1' => $this->input->post('id_dosen1'),
                'dosen1' => $this->db->get_where('tb_dosen', array('id_dosen' => $this->input->post('id_dosen1')))->row()->nama_dosen,
                'id_dosen2' => $this->input->post('id_dosen2'),
                'id_kelas' => $this->input->post('id_kelas'),
                'dosen2' =>  $this->db->get_where('tb_dosen', array('id_dosen' => $this->input->post('id_dosen1')))->row()->nama_dosen,
                'id_dosen_koordinator' => $this->input->post('id_dosen_koordinator'),
                'koordinator' => $this->db->get_where('tb_dosen', array('id_dosen' => $this->input->post('id_dosen_koordinator')))->row()->nama_dosen,
                'id_prodi' => $this->input->post('id_prodi'),
                'prodi' => $this->db->get_where('tb_prodi', array('id_prodi' => $this->input->post('id_prodi')))->row()->prodi,
                'id_ruangan' => $this->input->post('id_ruangan'),
                'kode_ruangan' => $this->db->get_where('tb_ruangan', array('id_ruangan' => $this->input->post('id_ruangan')))->row()->kode_ruangan,
                'id_alat' => $this->input->post('id_alat'),
                'nama_alat' => $this->db->get_where('tb_alat_pinjaman', array('id_alat' => $this->input->post('id_alat')))->row()->nama_alat,
                'tahun_akademik' => $this->input->post('tahun_akademik'),
                'teori' => $this->input->post('teori'),
                'praktik' => $this->input->post('praktik'),
                'klinik' => $this->input->post('klinik'),
            ];


            $this->db->insert('tb_jadwal', $data);
            $this->session->set_flashdata('flash', 'Ditambahkan!');
            redirect('c_jadwal/index');
        }   


        die();
    }

    public function hapus()
    {
        $id_jadwal=$this->input->post('id_jadwal');

        $this->db->where('id_jadwal', $id_jadwal);
        $this->db->delete('tb_jadwal');
        $this->session->set_flashdata('flash',"Dihapus!");
        redirect('c_jadwal/index');
    }



    public function edit($value='')
    {
         $data = [
            'id_matkul' => $this->input->post('id_matkul'),
            'kode_matkul' => $this->db->get_where('tb_matkul', array('id_matkul'=>$this->input->post('id_matkul')))->row()->kode_matkul,
            'nama_matkul' => $this->input->post('nama_matkul'),
            'sks' => $this->input->post('sks'),
            'semester' => $this->input->post('semester'),
            'tingkat' => $this->input->post('tingkat'),
            'waktu' => $this->input->post('waktu'),
            'hari' => $this->input->post('hari'),
            'id_dosen1' => $this->input->post('id_dosen1'),
            'dosen1' => $this->db->get_where('tb_dosen', array('id_dosen' => $this->input->post('id_dosen1')))->row()->nama_dosen,
            'id_kelas' => $this->input->post('id_kelas'),
            'id_dosen2' => $this->input->post('id_dosen2'),
            'dosen2' =>  $this->db->get_where('tb_dosen', array('id_dosen' => $this->input->post('id_dosen1')))->row()->nama_dosen,
            'id_dosen_koordinator' => $this->input->post('id_dosen_koordinator'),
            'koordinator' => $this->db->get_where('tb_dosen', array('id_dosen' => $this->input->post('id_dosen_koordinator')))->row()->nama_dosen,
            'id_prodi' => $this->input->post('id_prodi'),
            'prodi' => $this->db->get_where('tb_prodi', array('id_prodi' => $this->input->post('id_prodi')))->row()->prodi,
            'id_ruangan' => $this->input->post('id_ruangan'),
            'kode_ruangan' => $this->db->get_where('tb_ruangan', array('id_ruangan' => $this->input->post('id_ruangan')))->row()->kode_ruangan,
            'id_alat' => $this->input->post('id_alat'),
            'nama_alat' => $this->db->get_where('tb_alat_pinjaman', array('id_alat' => $this->input->post('id_alat')))->row()->nama_alat,
            'tahun_akademik' => $this->input->post('tahun_akademik'),
            'teori' => $this->input->post('teori'),
            'praktik' => $this->input->post('praktik'),
            'klinik' => $this->input->post('klinik'),
        ];


        $this->db->update('tb_jadwal',$data, array('id_jadwal' => $this->input->post('id_jadwal')));
        $this->session->set_flashdata('flash',"Diubah!");
        redirect('c_jadwal/index');

    }
	
}
