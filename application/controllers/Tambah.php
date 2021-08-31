<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tambah extends CI_Controller
{
	function tambah_arsip()
	{
		$this->load->library('form_validation');
		$data = array(
			'id_arsip' => set_value('id_arsip', ''),
			'id_kategori' => set_value('id_kategori', ''),
			'judul' => set_value('judul', ''),
			'tanggal' => set_value('tanggal', ''),
			'file' => set_value('file', ''),
		);
		$data['judul'] = "Tambah Data";
		$this->load->view('layout/l_header');
		$this->load->view('tambaharsip_vw', $data);
		$this->load->view('layout/l_footer');
	}

	//upload file
	function tambah_arsip_aksi()
	{
		$this->load->model('m_data');
		$id_arsip = $this->input->post('id_arsip');
		$id_kategori = $this->input->post('id_kategori');
		$judul = $this->input->post('judul');
		$tanggal = $this->input->post('tanggal');
		$file = $this->input->post('file');

		$config['upload_path']          = './photo/';
		$config['allowed_types']        = 'pdf';

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('userfile')) {
			echo "file eror";
			echo $this->upload->display_errors();
		} else {
			$file = $this->upload->data();
			$data = array(
				'id_arsip' => $id_arsip,
				'id_kategori' => $id_kategori,
				'judul'	=> $judul,
				'tanggal'	=> $tanggal,
				'file'	=> $file['file_name']
			);
			$this->m_data->input_data($data, 'arsip');
			redirect('arsip/index');
		}
	}
}
