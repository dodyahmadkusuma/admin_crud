<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pegawai', 'pegawai');
    }

    public function index()
    {
        redirect( base_url('pegawai/view'));
    }

    public function view($halaman = "")
    {
        // $data['data_pegawai'] = $this->pegawai->get();
        // $this->template->views('Pegawai/pegawai', $data);

        $limit = 5;
        if ($halaman != '') {
        $offset = $halaman;
        }else{
        $offset = 0;
        }
        $data['data_pegawai'] = $this->pegawai->getList($limit, $offset);
        $this->load->library('pagination');

        $config['base_url'] = base_url('pegawai/view/');
        $config['total_rows'] = $this->pegawai->totalRows();
        $config['per_page'] = $limit;
        $config['uri_segment'] = 3;
        $config['num_links'] = 3;
        $config['full_tag_open'] = '<p>';
        $config['full_tag_close'] = '</p>';
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<div>';
        $config['first_tag_close'] = '</div>';
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<div>';
        $config['last_tag_close'] = '</div>';
        $config['next_link'] = '&gt;';
        $config['next_tag_open'] = '<div>';
        $config['next_tag_close'] = '</div>';
        $config['prev_link'] = '&lt;';
        $config['prev_tag_open'] = '<div>';
        $config['prev_tag_close'] = '</div>';
        $config['cur_tag_open'] = '<b>';
        $config['cur_tag_close'] = '</b>';

        $this->pagination->initialize($config);

        $data['paging'] = $this->pagination->create_links();

        $this->template->views('Pegawai/pegawai', $data);


    }

    public function detail( $id = null )
    {
        $data['data_pegawai'] = $this->pegawai->get( $id );
        $this->template->views('Pegawai/detail_pegawai', $data);
    }
     public function delete($id = null)
    {
    
        $delete= $this->pegawai->del($id);
            
        $this->template->views('Pegawai/delete');
    }
    public function tambah($id = null)
    {
        $this->template->views('Pegawai/tambah');

    }
    public function aksisimpan()
    {
         $data['post'] = $this->input->post();
         $data['telp'] = $this->input->post();
         $data['tambah'] = $this->pegawai->plus();
         $this->template->views('Pegawai/aksisimpan', $data);

            
    }

    public function form()
    {
        $this->template->views('Pegawai/form_pegawai');
    }
    public function actSave()
    {
        $param = $this->input->get();
        $proses_simpan = $this->pegawai->simpanPegawai($param);
        if ($proses_simpan >= 0) {
            redirect('pegawai/');
        } else {
            redirect('pegawai/form');
        }
        
    }
    public function edit($id)
    {
        $pegawai          = $this->pegawai->detailPegawai($id);
        $data['pegawai']  = $pegawai;
        $this->template->views('Pegawai/edit', $data);
    }
    public function actSaveUpdate()
    {
        $param = $this->input->get();
        $proses_simpan = $this->pegawai->updatepegawai($param);
        if ($proses_simpan >= 0) {
            redirect('pegawai');
        } else {
            redirect('pegawai/form');
        }
    }
}
/* End of file Pegawai.php */
/* Location: ./application/controllers/Pegawai.php */