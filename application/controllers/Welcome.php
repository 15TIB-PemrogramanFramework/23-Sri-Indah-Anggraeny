<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
function __construct()
	{
		parent::__construct();
		$this->load->model('Barang_model');
		$this->load->model('Member_model');
		$this->load->model('Pesan_model');
		$this->load->helper(array('url'));
	}
	public function Index()
	{
		$this->load->view('Index');
	}
	public function About()
	{
		$this->load->view('About');
	}
	public function Contact()
	{
		$this->load->view('Contact');
	}
	public function Services()
	{
		$this->load->view('Services');
	}
	public function Produk()
	{
		$data['barang'] = $this->Barang_model->ambil_data();
		$this->load->view('Produk',$data);
	}
	public function Tentang_Produk()
	{
		$this->load->view('Tentang_Produk');
	}
	public function Other_page()
	{
		$this->load->view('Other_page');
	}
	
	public function Registrasi()
	{
		$this->load->view('Registrasi');
	}
	
	

	public function Index_member()
	{
		$this->load->view('Index_member');
	}
	public function About_member()
	{
		$this->load->view('About_member');
	}
	public function Contact_member()
	{
		$this->load->view('Contact_member');
	}
	public function Services_member()
	{
		$this->load->view('Services_member');
	}
	public function Produk_member()
	{
		$data['barang'] = $this->Barang_model->ambil_data();
		
		$this->load->view('Produk_member', $data);
	}
	public function Tentang_Produk_member()
	{
		$this->load->view('Tentang_Produk_member');
	}
	public function Other_page_member()
	{
		$this->load->view('Other_page_member');
	}
	public function Pemesanan()
	{
		$this->load->view('Pemesanan');
	}
	public function Status_member($id)
	{
		$member = $this->Member_model->ambil_data_user($id);
		//$id2 = $member->id_member;
		$data['pesan'] = $this->Pesan_model->ambil_data_id2($member->id_member);
		$this->load->view('Status_member',$data);
	}

	public function Gagal_login()
	{
		$this->load->view('Gagal_login');
	}
	public function Gagal_regis()
	{
		$this->load->view('Gagal_regis');
	}
	

}
