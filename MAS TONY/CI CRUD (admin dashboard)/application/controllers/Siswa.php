<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends Auth_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_siswa');
		$this->load->model('M_kelas');

	}

	public function index()
	{
		$data['judul'] = 'Menu Siswa';
		$data['data_siswa'] = $this->M_siswa->getSiswa();
		$this->load_template('siswa/home',$data);	
		}
	public function add_siswa()
	{
		$data['judul'] = 'Tambah Siswa';
		$data['kelas'] = $this->M_kelas->getKelas();
		$this->load_template('siswa/form_tambah_siswa',$data);
			
	}
	public function act_Tambah()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('id_kelas', 'Kelas', 'required');
			if ($this->form_validation->run() == FALSE) 
			{
				$this->session->set_flashdata('alert_msg',err_msg(validation_errors()));
				redirect('siswa/add_siswa');
			}else{
					$param = $this->input->post();
					$proses_simpan = $this->M_siswa->act_Tambah($param);

				if ($proses_simpan >= 0) {
					$this->session->set_flashdata('alert_msg',succ_msg('Siswa Berhasil Di Input'));
					redirect('siswa/');
				} else {
					$this->session->set_flashdata('alert_msg',err_msg('Siswa Gagal Di Input'));
					redirect('siswa/add_siswa');
				}
			}	

	}
	public function editSiswa($id)
	{
		$data['judul'] = 'Edit Siswa';
		$data['siswa'] = $this->M_siswa->getDetailSiswa($id);
		$data['kelas'] = $this->M_kelas->getKelas();

		$this->load_template('siswa/edit',$data);
	}
	public function act_edit()
	{	
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('id_kelas', 'Kelas', 'required');
			if ($this->form_validation->run() == FALSE) 
			{
				$this->session->set_flashdata('alert_msg',err_msg(validation_errors()));
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$param = $this->input->post();
				$proses_simpan = $this->M_siswa->act_edit($param);
				if ($proses_simpan >= 0) {
					$this->session->set_flashdata('alert_msg',succ_msg('Siswa Berhasil Di Edit'));
					redirect('siswa/');
				} else {
					$this->session->set_flashdata('alert_msg',err_msg('Siswa Gagal Di Edit'));
					redirect($_SERVER['HTTP_REFERER']);
				}
				
			}

	}
	public function hapusSiswa($id="")
	{
		$proses_simpan = $this->M_siswa->act_hapus($id);
		if ($proses_simpan >= 0) {
			$this->session->set_flashdata('alert_msg',succ_msg('Siswa Berhasil Di Hapus'));
		} else {
			$this->session->set_flashdata('alert_msg',err_msg('Siswa Gagal Di Hapus'));
		}
		redirect('siswa');

	}

}

/* End of file Siswa.php */
/* Location: ./application/controllers/Siswa.php */