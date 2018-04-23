<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url_helper');
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function view() {
		$data['iso'] = "ingin mencoba menampilkan isi2";
		$data['page'] = 'home';
		$this->load->view('index', $data);
		/*
		$this->load->view('content/header');
		$this->load->view('index', $data);
		$this->load->view('content/footer');
		*/
	}
}
