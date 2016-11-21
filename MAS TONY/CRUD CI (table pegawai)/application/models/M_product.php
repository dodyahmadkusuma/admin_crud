<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Product extends CI_Model {

    public function get( $id = null)
    {
        $sql = "select * from product";
        if( $id ) {
            $sql .= " where id_product = '{$id}'";
        }
        
    	
    	

        $query = $this->db->query($sql);

        if( $id ) {
            return $query->row();
        } else {
            return $query->result();
        }

    }
	public function del($id=null)
	{
		$sql = "delete from product where id_product = '{$id}'";
		$query=$this->db->query($sql);
	}
	public function plus()
	{
		$product = $_POST['nama'];

		$id =md5(date('ymdhms').rand());
		$Jml = $_POST['Jml'];

		$sql="INSERT INTO product(id_product ,nama,Jml) values('$id','$product','$Jml')";
		$query=$this->db->query($sql);
	}
	public function getList($limit, $offset)
	{
		$data = $this->db->get('product', $limit, $offset ); 
		
		return $data->result();
	}	
	public function totalRows()
	{
		$data = $this->db->get('product'); 
		
		return $data->num_rows();
	}
	public function simpanproduct($param='')
	{
		$id =md5(date('ymdhms').rand());

		$object = [
			'id_product' => $id,
			'nama' 		=> $param['nama'],
			'Jml' 	=> $param['Jml'],
		];
		$this->db->insert('product', $object);
		return $this->db->affected_rows();
	}
	public function detailProduct($id)
	{
		$this->db->where('id_product', $id);
		$data = $this->db->get('product');
		return $data->row();
	}

	public function updateProduct($param='')
	{
		$object = [
			'nama'		=> $param['nama'],
			'Jml'	=> $param['Jml'],
		];
		$this->db->where('id_product', $param['id_product']);
		$this->db->update('product', $object);
		return $this->db->affected_rows();
	}

}

/* End of file M_pegawai.php */
/* Location: ./application/models/M_pegawai.php */
