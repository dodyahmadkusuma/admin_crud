<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Handphone extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_handphone', 'handphone');
    }

    public function index()
    {
        redirect( base_url('handphone/view'));
    }

    public function view($halaman = "")
    {
        // $data['data_handphone'] = $this->handphone->get();
        // $this->template->views('Handphone/handphone', $data);

        $limit = 5;
        if ($halaman != '') {
        $offset = $halaman;
        }else{
        $offset = 0;
        }
        $data['data_handphone'] = $this->handphone->getList($limit, $offset);
        $this->load->library('pagination');

        $config['base_url'] = base_url('handphone/view/');
        $config['total_rows'] = $this->handphone->totalRows();
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

        $this->template->views('Handphone/handphone', $data);


    }

    public function detail( $id = null )
    {
        $data['data_handphone'] = $this->handphone->get( $id );
        $this->template->views('Handphone/detail_handphone', $data);
    }
     public function delete($id = null)
    {
    
        $delete= $this->handphone->del($id);
            
        $this->template->views('Handphone/delete');
    }
    public function tambah($id = null)
    {
        $this->template->views('Handphone/tambah');

    }
    public function aksisimpan()
    {
         $data['post'] = $this->input->post();
         $data['jml'] = $this->input->post();
         $data['tambah'] = $this->handphone->plus();
         $this->template->views('Handphone/aksisimpan', $data);

            
    }

    public function form()
    {
        $this->template->views('Handphone/form_handphone');
    }
    public function actSave()
    {
        $param = $this->input->get();
        $proses_simpan = $this->handphone->simpanhandphone($param);
        if ($proses_simpan >= 0) {
            redirect('handphone/');
        } else {
            redirect('handphone/form');
        }
        
    }
    public function edit($id)
    {
        $handphone          = $this->handphone->detailhandphone($id);
        $data['handphone']  = $handphone;
        $this->template->views('Handphone/edit', $data);
    }
    public function actSaveUpdate()
    {
        $param = $this->input->get();
        $proses_simpan = $this->handphone->updatehandphone($param);
        if ($proses_simpan >= 0) {
            redirect('handphone');
        } else {
            redirect('handphone/form');
        }
    }
}
/* End of file handphone.php */
/* Location: ./application/controllers/handphone.php */