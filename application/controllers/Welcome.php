<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$is_login	= $this->session->userdata('nip');
		if (! $is_login) {
			//redirect(base_url('Welcome/index'));
			//return;
		}
	}

	public function index()
	{
		$this->load->view('template/login.php');
	}
}
