<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coba extends CI_Controller {
	public function index()
	{
		$data['siswa'] = $this->db->get('siswa')->result();
		
		$this->load->view('siswa/index', $data);
	}
}
