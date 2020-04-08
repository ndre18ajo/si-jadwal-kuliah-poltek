<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_login extends CI_Controller {
	function __construct(){
	  parent::__construct();
	  $this->load->helper('form');
	  $this->load->library('form_validation', 'session');

	}
	public function index()
	{

	
		if ($this->session->userdata('udhmasuk')) {

			$yglogin = $this->session->userdata('user');

			if($yglogin->level == 'admin'){
				return redirect('/c_admin/index'); //harus sama dengan method function dibawah nya
			}elseif($yglogin->level == 'dosen'){
				return redirect('/c_dosen/dashboard_dosen');
			}elseif($yglogin->level =='mahasiswa'){
				return redirect('/c_mahasiswa/dashboard_mahasiswa');
			}
		}
		$this->load->view('login/v_form_login');
	}
	public function ceklogin(){
		$this->load->helper('url');



	

		if(isset($_POST['login'])){
			$user = $this->input->post('user',true);
			$pass = $this->input->post('pass',true);
			$cek = $this->m_login->proseslogin($user, $pass);
			$hasil = count($cek);

			if($hasil == 1){
				$yglogin = $this->db->get_where('tb_users',array('username'=>$user, 'password' => $pass))->row();

				// inject manual foto
				$yglogin->foto = ($yglogin->foto == '' ? 'assets/foto_profil/user.png' : $yglogin->foto);
				$data = array('udhmasuk' => true, 'nama' => $yglogin->nama, 'email' => $yglogin->email, 'username' => $yglogin->username, 'user' => $yglogin);

				
				$this->session->set_userdata($data);
				if($yglogin->level == 'admin'){
					redirect('/c_admin/index'); //harus sama dengan method function dibawah nya
				}elseif($yglogin->level == 'dosen'){
					redirect('/c_dosen/dashboard_dosen');
				}elseif($yglogin->level =='mahasiswa'){
				redirect('/c_mahasiswa/dashboard_mahasiswa');
				}
			}else{
				echo $this->session->set_flashdata('notif2', 'Password Salah! <button type="button" class="close" data-dismiss="alert" aria-label="tutup"><span aria-hidden="true">&times</span></button>');
				redirect('index');
			} 

		}
	}
	public function keluar(){
			$this->session->sess_destroy();
			redirect('index');
		}
}
