<?php 
/**
* 
*/
class Konfirmasi_model extends CI_Model
{
	public $konfirmasi	= 'konfirmasi';
	public $id			= 'id_konfirmasi';
	public $id_member  	= 'id_member';
	public $order		= 'ASC';

	function __construct()
	{
		parent::__construct();
	}

	function ambil_data()
	{
		$this->db->select('konfirmasi.id_konfirmasi, member.nama, pesan.id_pesan, pesan.jumlah, konfirmasi.gambar');
        $this->db->from('konfirmasi');
        $this->db->join('member', 'konfirmasi.id_member = member.id_member');
        $this->db->join('pesan', 'konfirmasi.id_pesan = pesan.id_pesan');
		$query = $this->db->get();
		return $query->result();
	}

	function edit_data($id,$data)
	{
		$this->db->where($this->id,$id);
		return $this->db->update($this->konfirmasi,$data);
	}

	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->konfirmasi)->row();
	}
	function hapus_data($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->delete($this->konfirmasi);
	}
	function tambah_data($data)//array
	{
		return $this->db->insert($this->konfirmasi,$data);
	}
	function ambil_data_konfirmasi($id_member){
		$this->db->where($this->id_member,$id_member);
		return $this->db->get($this->konfirmasi)->result();
	}
	function ambil_data_id2($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->konfirmasi)->result();
	}
	
}
 ?>