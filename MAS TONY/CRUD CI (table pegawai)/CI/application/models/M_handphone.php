<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Handphone extends CI_Model {

    public function get( $id = null)
    {
        $sql = "select * from handphone";
        if( $id ) {
            $sql .= " where id_handphone = '{$id}'";
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
		$sql = "delete from handphone where id_handphone = '{$id}'";
		$query=$this->db->query($sql);
	}
	public function plus()
	{
		$nama = $_POST['nama'];

		$id =md5(date('ymdhms').rand());
		$jml = $_POST['jml'];

		$sql="INSERT INTO handphone(id_handphone ,nama,jml) values('$id','$nama','$jml')";
		$query=$this->db->query($sql);
	}
	public function getList($limit, $offset)
	{
		$data = $this->db->get('handphone', $limit, $offset ); 
		
		return $data->result();
	}	
	public function totalRows()
	{
		$data = $this->db->get('handphone'); 
		
		return $data->num_rows();
	}
	public function simpanhandphone($param='')
	{
		$id =md5(date('ymdhms').rand());

		$object = [
			'id_handphone' => $id,
			'nama' 		=> $param['nama'],
			'jml' 	=> $param['jml'],
		];
		$this->db->insert('handphone', $object);
		return $this->db->affected_rows();
	}
	public function detailhandphone($id)
	{
		$this->db->where('id_handphone', $id);
		$data = $this->db->get('handphone');
		return $data->row();
	}

	public function updatehandphone($param='')
	{
		$object = [
			'nama'		=> $param['nama'],
			'jml'	=> $param['jml'],
		];
		$this->db->where('id_handphone', $param['id_handphone']);
		$this->db->update('handphone', $object);
		return $this->db->affected_rows();
	}

}

/* End of file M_handphone.php */
/* Location: ./application/models/M_handphone.php */
