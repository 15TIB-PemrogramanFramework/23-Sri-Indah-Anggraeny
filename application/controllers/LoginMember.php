<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class LoginMember extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Member_model');
    }

    public function index()
    {
		if($this->session->userdata('logined1') && $this->session->userdata('logined1') == true) //jika ada session maka akan ke home
		{
			redirect('Welcome/Index_member');
		}
		
		if(!$this->input->post()) //jika tidak ada input data post maka akan ke halaman login
		{
			$this->load->view('Login');
		}
		else
		{
			$cek_login = $this->Member_model->cek_login(
				$this->input->post('username'),
				$this->input->post('password')
				);
			if(!empty($cek_login))
			{
				$this->session->set_userdata('username',$cek_login->username);
				$this->session->set_userdata('logined1',true);				
				redirect("Welcome/Index_member");
			}
			else 
			{
				redirect("Welcome/Gagal_login");
			}
		}
        
    } 
	
	public function logout()
    {
		$this->session->unset_userdata('logined1');//hapus session userdata
		$this->session->unset_userdata('username');
		redirect("/LoginMember");
    } 
}

/* End of file Workflows.php */
/* Location: ./application/controllers/Workflows.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-04-15 00:43:10 */
/* http://harviacode.com */

