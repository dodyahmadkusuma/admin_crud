<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belajar extends CI_Controller {

	public function index()
	{
		$nama 			= 'Dody Ahmad Kusuma Jaya';
		$data['namaku'] = $nama;
		$data['umurku'] = 22 ;

		$this->load->view('belajar',$data);
	}
	
	public function form_tambah()
	{
		$this->load->view('form_tambah');
	}
	public function aksisimpan()
	{
		$param = $this->input->post() ;

		if ($param['nama'] == 'dody') {
			redirect('Belajar/form_tambah');
		}else{
			echo "<pre>";
			print_r ($param);
			echo "</pre>";
		}
	}


// TUGAS BIKIN FORM SISWA, NILAI,( REDIRECT ) 


}
