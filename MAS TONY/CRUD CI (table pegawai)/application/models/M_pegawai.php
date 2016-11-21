<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pegawai extends CI_Model {

    public function get( $id = null)
    {
        $sql = "select * from pegawai";
        if( $id ) {
            $sql .= " where id_pegawai = '{$id}'";
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
		$sql = "delete from pegawai where id_pegawai = '{$id}'";
		$query=$this->db->query($sql);
	}
	public function plus()
	{
		$nama = $_POST['nama'];

		$id =md5(date('ymdhms').rand());
		$telp = $_POST['telp'];

		$sql="INSERT INTO pegawai(id_pegawai ,nama,telp) values('$id','$nama','$telp')";
		$query=$this->db->query($sql);
	}
	public function getList($limit, $offset)
	{
		$data = $this->db->get('pegawai', $limit, $offset ); 
		
		return $data->result();
	}	
	public function totalRows()
	{
		$data = $this->db->get('pegawai'); 
		
		return $data->num_rows();
	}
	public function simpanPegawai($param='')
	{
		$id =md5(date('ymdhms').rand());

		$object = [
			'id_pegawai' => $id,
			'nama' 		=> $param['nama'],
			'telp' 	=> $param['telp'],
		];
		$this->db->insert('pegawai', $object);
		return $this->db->affected_rows();
	}
	public function detailPegawai($id)
	{
		$this->db->where('id_pegawai', $id);
		$data = $this->db->get('pegawai');
		return $data->row();
	}

	public function updatePegawai($param='')
	{
		$object = [
			'nama'		=> $param['nama'],
			'telp'	=> $param['telp'],
		];
		$this->db->where('id_pegawai', $param['id_pegawai']);
		$this->db->update('pegawai', $object);
		return $this->db->affected_rows();
	}

}

/* End of file M_pegawai.php */
/* Location: ./application/models/M_pegawai.php */
