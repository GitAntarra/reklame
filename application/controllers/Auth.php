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

	public function register(){
		// if($this->session->userdata('user_login')){
		// 	redirect('home');
		// }

        $data = array();

        return $this->load->view('auth/register', $data);
	}

	public function registered(){
		$getPost = $this->input->post();

		try {
			$insert = [
				"nama"    => $getPost['nama'],
				"username"    => $getPost['username'],
				"email"   => $getPost['email'],
				"password" => $getPost['password'],
				"no_phone"     => $getPost['no_phone']
			];
			$this->db->insert('user', $insert);

			$db_error = $this->db->error();

			if ($db_error['code'] != 0) {
				throw new Exception('Database error');
			}

			$this->session->set_flashdata('msg', 'register berhasil, silahkan login');
			redirect(site_url('auth'));

			// if($user){
			// 	$this->session->set_flashdata('msg', 'login berhasil');
			// 	$this->session->set_userdata('user_login', $user);
			// 	redirect(site_url('home'));
			// }else{
			// 	$this->session->set_flashdata('msg', 'login Gagal');
			// 	redirect(site_url('auth'));
			// }
		} catch (Exception $e) {
			print_r($e);
			// return $this->ResData(true, $db_error['code'], "Insert Failed", $db_error['message']);
		}
	}

	public function logout(){
		$this->session->sess_destroy();
	
		$this->session->set_flashdata('msg', 'silahkan login kembali');
		redirect(site_url('auth'));

	}

}