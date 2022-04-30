<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('UserModel');
		// $this->isMethod = $this->input->method();
		// is_logged_in();
	}

    public function index() {

		if($this->session->userdata('user_login')){
			redirect('home');
		}

        $data = array();

        return $this->load->view('auth/index', $data);
    }

    public function attemplogin()
	{

		$getPost = $this->input->post();

		$user = $this->UserModel->checkUser($getPost['user'], $getPost['pass']);

		if($user){
			$this->session->set_flashdata('msg', 'login berhasil');
			$this->session->set_userdata('user_login', $user);
			redirect(site_url('home'));
		}else{
			$this->session->set_flashdata('msg', 'login Gagal');
			redirect(site_url('auth'));

		}
	}

	public function logout(){
		$this->session->sess_destroy();
	
		$this->session->set_flashdata('msg', 'silahkan login kembali');
		redirect(site_url('auth'));

	}

}