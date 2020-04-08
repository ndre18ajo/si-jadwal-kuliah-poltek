<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_login extends CI_Model {
	function proseslogin($user, $pass){
		$this->db->where('username',$user);
		$this->db->where('password',$pass);
		return $this->db->get('tb_users')->row();
	}
}