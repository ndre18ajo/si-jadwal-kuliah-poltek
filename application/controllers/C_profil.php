<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_profil extends CI_Controller {


	protected $image_path = 'uploads/profile';

	function __construct(){
		parent::__Construct();
		$this->load->library(array('upload', 'form_validation'));
		$this->load->helper(array('form', 'url'));
	}
	public function index()
	{
		$data["title"] = "Dashboard Admin";
		$data["all"] = $this->db->get('tb_users')->result();
		$data['user'] = $this->session->userdata('user');


		$this->load->view('dashboard/header_db', $data);
		$this->load->view('admin/sidebar_db_admin', $data);
		$this->load->view('profil/content_db_profil', $data);
		$this->load->view('dashboard/footer_db', $data);
	}
	public function edit()
	{	

		$user = $this->session->userdata('user');

 		$validation_rules = array(
	        'username' => array(
	            'field' => 'username',
	            'label' => 'Username',
	            'rules' => 'required|trim',
	        ),
	        'email' => array(
	        	'field' => 'email',
	            'label' => 'email',
	            'rules' => 'required|trim',
	        )
	    );



	    $this->form_validation->set_rules($validation_rules);

		if ($this->form_validation->run()) {


			$foto = $user->foto;


			if ($_FILES['foto']['size'] > 0) {
                $this->upload->initialize($this->uploadOptions($_FILES['foto']));

                if ($this->upload->do_upload('foto')) {
                    $file = $this->upload->data();
                    $foto  = $this->image_path.'/image/'.$file['file_name'];
                }
            }


            $dataUpdate = array(
            	'username' => $this->input->post('username'),
            	'email'  => $this->input->post('email'),
            	'foto' => $foto
            );

            $this->db->update('tb_users', $dataUpdate, array('id'=> $user->id));


            // save new session

            $user = $this->db->get_where('tb_users', array('id'=>$user->id))->row();

           $this->session->set_userdata(array('user' => $user));
           $this->session->set_flashdata('flash',"Data Profil Berhasil Diupdate!");
		} else {
           $this->session->set_flashdata('flash',"Data gagal di update");
		}
       

       return redirect('c_profil/index');







		/* kodingan lama */ 


		// $data["title"] = "Dashboard Admin";
		// $data["all"] = $this->db->get('tb_users')->result();

		// if ($this->form_validation->run() == FALSE) {
		// 	$data["title"] = "Dashboard Admin";
		// 	$data["all"] = $this->db->get('tb_users')->result();
		// 	$this->load->view('dashboard/header_db', $data);
		// 	$this->load->view('admin/sidebar_db_admin', $data);
		// 	$this->load->view('profil/content_db_profil', $data);
		// 	$this->load->view('dashboard/footer_db', $data);
		// } else {
		// 	$username = $this->input->post('username');
		// 	$email = $this->input->post('email');

		// 	$data=array(
		// 		"id_users"=>$id_users,
		// 		"username"=>$username,
		// 		"email"=>$email
		// 	);

		// 	$this->db->set('username', $username);
		// 	$this->db->where('email', $email);
		// 	$this->db->update('tb_users', $data);

		// 	$this->session->set_flashdata('flash',"Data Profil Berhasil Diupdate!");
		// 	redirect('c_profil/edit');
		// }


		/*kodingan lama*/
	}



	// untuk upload file

	private function uploadOptions($file)
    {
        $type = explode('/', $file['type']);
        $config = array('encrypt_name' => true);

        if (!is_dir($this->image_path.'/image')) {
            mkdir('./'.$this->image_path.'/image', 0755, true);
        }
        $config['upload_path']   = $this->image_path.'/image';
    

        $config['allowed_types'] = 'jpg|png|gif|jpeg|JPG|PNG|GIF|JPEG';
        $config['max_size']      = 204800; //  200 MB
    

        return $config;
    }



	public function ganti_password(){

		$user = $this->session->userdata('user');

 		$validation_rules = array(
	        'password_lama' => array(
	            'field' => 'password_lama',
	            'label' => 'Password Lama',
	            'rules' => 'required|trim',
	        ),
	        'password_baru' => array(
	        	'field' => 'password_baru',
	            'label' => 'Password Baru',
	            'rules' => 'required|trim',
	        )
	    );

 		$this->form_validation->set_rules($validation_rules);

		if ($this->form_validation->run()) {
			$oldPassword = $user->password;


			if ($oldPassword != $this->input->post('password_lama')) {
				$this->session->set_flashdata('flash2',"Password Lama Salah!");
				return redirect('c_profil/index');
			}


			if ($oldPassword == $this->input->post('password_baru')) {
				$this->session->set_flashdata('flash2',"Password Baru Tidak Boleh Sama Dengan Password Lama!");
				return redirect('c_profil/index');
			}

			 $dataUpdate = array(
            	'password' => $this->input->post('password_baru')
            );

            $this->db->update('tb_users', $dataUpdate, array('id'=> $user->id));


            $user = $this->db->get_where('tb_users', array('id'=>$user->id))->row();

	           $this->session->set_userdata(array('user' => $user));
	           $this->session->set_flashdata('flash',"Password telah diganti!");

		}



		return redirect('c_profil/index');



		// kodingan lama

		// $data["title"] = "Dashboard Admin";
		// $data["all"] = $this->db->get('tb_users')->result();

		// $this->form_validation->set_rules('password_lama', 'password_lama', 'required|trim');
		// $this->form_validation->set_rules('password_baru', 'password_baru', 'required|trim');

		// if ($this->form_validation->run() == FALSE) {
		// 	$this->load->view('dashboard/header_db', $data);
		// 	$this->load->view('admin/sidebar_db_admin', $data);
		// 	$this->load->view('profil/content_db_profil', $data);
		// 	$this->load->view('dashboard/footer_db', $data);
		// } else {
		// 	$password_lama = $this->input->post('password_lama');
		// 	$password_baru = $this->input->post('password_baru');
		// 	echo json_encode($data['tb_users']['password']);

		// 	// if(!password_verify($password_lama, $data['tb_users']['password'])) {
		// 	// 	$this->session->set_flashdata('flash2',"Password Salah!");
		// 	// 	redirect('c_profil/ganti_password');
		// 	// } else {
		// 	// 	if ($password_lama == $password_baru) {
		// 	// 		$this->session->set_flashdata('flash2',"Password Lama Tidak Boleh Sama Dengan Password Baru!");
		// 	// 		redirect('c_profil/ganti_password');
		// 	// 	} else {
		// 	// 		$password_hash = password_hash($password_baru, PASSWORD_DEFAULT);

		// 	// 		$this->db->set('password', $password_hash);
		// 	// 		$this->db->where('email', $this->session->userdata('email'));
		// 	// 		$this->db->update('tb_users');

		// 	// 		$this->session->set_flashdata('flash2',"Password telah diganti!");
		// 	// 		redirect('c_profil/ganti_password');
		// 	// 	}
		// 	// }
		// }
		
	}
	
}
