<?php 
/**
* 
*/
class Pesan_model extends CI_Model
{
	public $pesan		= 'pesan';
	public $id			= 'id_pesan';
	public $id_member  	= 'id_member';
	public $id2			= 'id_member';
	public $order		= 'ASC';

	function __construct()
	{
		parent::__construct();
	}

	function ambil_data()
	{
		$this->db->select('pesan.id_pesan, member.nama, barang.nama_barang, barang.harga_barang, pesan.jumlah, pesan.status');
        $this->db->from('pesan');
        $this->db->join('member', 'pesan.id_member = member.id_member');
        $this->db->join('barang', 'pesan.id_barang = barang.id_barang');
		$query = $this->db->get();
		return $query->result();
	}

	function edit_data($id,$data)
	{
		$this->db->where($this->id,$id);
		return $this->db->update($this->pesan,$data);
	}

	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->pesan)->row();
	}
	function hapus_data($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->delete($this->pesan);
	}
	function tambah_data($data)//array
	{
		return $this->db->insert($this->pesan,$data);
	}
	function ambil_data_pesan($id_member){
		$this->db->where($this->id_member,$id_member);
		return $this->db->get($this->pesan)->result();
	}
	function ambil_data_id2($id)
	{
		$this->db->where($this->id2,$id);
		return $this->db->get($this->pesan)->result();//1 data
	}
	
}
 ?>