<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pegawai', 'peg');
    }

    public function index()
    {
        $data['data_pegawai'] = $this->peg->get();
        // $this->load->view('Home');
        $this->template->views('Home' ,$data);

    }
    
}

/* End of file Pegawai.php */
/* Location: ./application/controllers/Pegawai.php */