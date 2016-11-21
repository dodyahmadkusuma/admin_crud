<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_product', 'product');
    }

    public function index()
    {
        redirect( base_url('product/view'));
    }

    public function view($halaman = "")
    {
        // $data['data_product'] = $this->product->get();
        // $this->template->views('Product/product', $data);

        $limit = 5;
        if ($halaman != '') {
        $offset = $halaman;
        }else{
        $offset = 0;
        }
        $data['data_product'] = $this->product->getList($limit, $offset);
        $this->load->library('pagination');

        $config['base_url'] = base_url('product/view/');
        $config['total_rows'] = $this->product->totalRows();
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

        $this->template->views('Product/product', $data);


    }

    public function detail( $id = null )
    {
        $data['data_product'] = $this->product->get( $id );
        $this->template->views('Product/detail_product', $data);
    }
     public function delete($id = null)
    {
    
        $delete= $this->product->del($id);
            
        $this->template->views('Product/delete_product');
    }
    public function tambah($id = null)
    {
        $this->template->views('Product/tambah_product');

    }
    public function aksisimpan()
    {
         $data['post'] = $this->input->post();
         $data['Jml'] = $this->input->post();
         $data['tambah'] = $this->product->plus();
         $this->template->views('Product/aksisimpan_product', $data);

            
    }

    public function form()
    {
        $this->template->views('Product/form_product');
    }
    public function actSave()
    {
        $param = $this->input->get();
        $proses_simpan = $this->product->simpanproduct($param);
        if ($proses_simpan >= 0) {
            redirect('product/');
        } else {
            redirect('product/form');
        }
        
    }
    public function edit($id)
    {
        $product          = $this->product->detailproduct($id);
        $data['product']  = $product;
        $this->template->views('Product/edit_product', $data);
    }
    public function actSaveUpdate()
    {
        $param = $this->input->get();
        $proses_simpan = $this->product->updateproduct($param);
        if ($proses_simpan >= 0) {
            redirect('product');
        } else {
            redirect('product/form');
        }
    }
}
/* End of file Product.php */
/* Location: ./application/controllers/Product.php */