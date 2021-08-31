<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Arsip extends CI_Controller
{


	public function index()
	{
		$this->load->model('m_data');
		$data['judul'] = "Arsip";
		$data['arsip'] = $this->m_data->get_all_data_arsip()->result();
		$this->load->view('layout/l_header');
		$this->load->view('arsip_vw', $data);
		$this->load->view('layout/l_footer');
	}

	function edit($id)
	{
		$this->load->model('m_data');
		$data['judul'] = "Edit Arsip";
		$where = array('id_arsip' => $id);
		$data['arsip'] = $this->m_data->edit_data($where, 'arsip')->result();
		$this->load->view('layout/l_header');
		$this->load->view('edit_vw', $data);
		$this->load->view('layout/l_footer');
	}

	function update()
	{
		$this->load->model('m_data');
		$id_arsip = $this->input->post('id_arsip');
		$id_kategori = $this->input->post('id_kategori');
		$judul = $this->input->post('judul'); 
		$tanggal = $this->input->post('tanggal'); 

		$data = array( 
			'id_kategori' => $id_kategori,
			'judul' => $judul,
			'tanggal' => $tanggal,
		);

		$where = array(
			'id_arsip' => $id_arsip
		);

		$this->m_data->update_data($where, $data, 'arsip');
		redirect('arsip/index');
	}

	function hapus($id)
	{
		$id = $this->input->post('data_id');
		$this->load->model('m_data');
		$where = array('id_arsip' => $id);
		$this->m_data->hapus_data($where, 'arsip');
		redirect('arsip/index');
	}

	public function show($id)
	{
		$this->load->model('m_data');
		$data = array(
			'judul' => 'Lihat Arsip Surat',
			'dataSurat' => $this->m_data->get($id),
		);
		$this->load->view('layout/l_header');
		$this->load->view('lihat', $data);
		$this->load->view('layout/l_footer');
	}
	public function download($id)
	{
		$this->load->model('m_data');
		$file = $this->m_data->get($id);

		force_download(FCPATH . 'photo/' . $file[0]->file, NULL);
	}
}
