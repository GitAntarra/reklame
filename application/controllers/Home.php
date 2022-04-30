<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		// $this->isMethod = $this->input->method();
		is_logged_in();
	}

    public function index() {

        $data = array();

		$data['list'] = $this->db->get('produk')->result_array();

        return $this->pages->load('home/index', $data, null, null);
    }

}