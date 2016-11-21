<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public function index()
	{
		$this->load->view('siswa');
	}
	
	public function aksisimpan()
	{
		$param = $this->input->post() ;

		if ($param['nilai'] <= '60') {
			redirect('Siswa\warning');
		}else{
			echo "<pre>";
			print_r ($param);
			echo "</pre>";
		}
	}

	public function warning()
	{
		$this->load->view('warning');
	}
	

}