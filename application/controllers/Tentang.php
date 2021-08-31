<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller {


	public function index()
	{
        $data['judul'] = "Tentang";
		$this->load->view('layout/l_header');
		$this->load->view('tentang_vw', $data);
		$this->load->view('layout/l_footer');
	}
}