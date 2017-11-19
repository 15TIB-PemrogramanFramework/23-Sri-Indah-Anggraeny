<?php 
/**
* 
*/
class Member extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Member_model');
		$this->load->helper('url');
	}
//halaman member
	function index()
	{
		//print_r($this->Member_model->ambil_data());
		$data['member'] = $this->Member_model->ambil_data();
		$this->load->view('Login',$data);
	}


	function daftar()
	{
		$data = array(
			'aksi' 			=> site_url('Member/daftar_aksi'),
			'nama' 			=> set_value('nama'),
			'email' 		=> set_value('email'),			
			'alamat' 		=> set_value('alamat'),
			'username' 		=> set_value('username'),
			'password' 		=> set_value('password'),
			'id_member' 	=> set_value('id_member'),
			'button' 		=> 'Daftar'
			);
		$this->load->view('Registrasi',$data);
	}

	function daftar_aksi()
	{

		$data = array(
			'nama' 				=> $this->input->post('nama'),
			'email'		 		=> $this->input->post('email'),
			'alamat' 			=> $this->input->post('alamat'),
			'username' 			=> $this->input->post('username'),
			'password' 			=> $this->input->post('password')
			);
		
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		$this->form_validation->set_rules(
			'username', 'Username',
			'is_unique[member.username]|is_unique[admin.username]',
			array(
				'required'      => 'You have not provided %s.',
				'is_unique'     => 'This %s already exists.'
			)
		);
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			redirect(site_url('Member/daftar'));
		}
		else
		{
		$this->Member_model->tambah_data($data);
		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil ditambahkan!!</div></div>");
		redirect('LoginMember');
		}	

	}

	function Login()
	{
		$this->load->view('Login');
	}

	function Home()
	{
		$this->load->view('Index');
	}




/* ADMIN */

	function delete($id)
	{
		$this->Member_model->hapus_data($id);
		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data berhasil dihapus!!</div></div>");
		redirect(site_url('Member/data_member'));
	}
function data_member()
	{
		//print_r($this->Member_model->ambil_data());
		$data['member'] = $this->Member_model->ambil_data();
		$this->load->view('Admin/Member_list',$data);
	}
	function update($id)
	{
		$member = $this->Member_model->ambil_data_id($id);
		$data = array(
			'aksi' 				=> site_url('member/update_aksi'),
			'nama' 				=> set_value('nama',$member->nama),
			'email' 			=> set_value('email',$member->email),
			'alamat'		 	=> set_value('alamat',$member->alamat),
			'username' 			=> set_value('username',$member->username),
			'password' 			=> set_value('password',$member->password),
			'id_member' 		=> set_value('id_member',$member->id_member),
			'button' 			=> 'Update'
			);
		$this->load->view('Admin/Member_form',$data);		
	}

	function update_aksi()
	{
		$data = array(
			'nama' 			=> $this->input->post('nama'),
			'email'		 	=> $this->input->post('email'),
			'alamat' 		=> $this->input->post('alamat'),
			'username' 		=> $this->input->post('username'),
			'password' 		=> $this->input->post('password')
			);	
		$id_member = $this->input->post('id_member');
		$this->Member_model->edit_data($id_member,$data);
		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil diubah!!</div></div>");
        redirect('Member/data_member');
	}

	function mau_daftar()
	{
		
		$this->load->view('Registrasi');
	}
}

 ?>