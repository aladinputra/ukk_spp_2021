<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$is_login	= $this->session->userdata('nip');
		if (! $is_login) {
			//redirect(base_url('Welcome/index'));
			//return;
		}
      $data['title'] = 'Dashboard - Laporan';
  		$this->load->view('template/header.php',$data);
	}

	public function index()
	{
		$this->load->view('laporan/index.php');
  	$this->load->view('template/footer.php');
	}
  
}
