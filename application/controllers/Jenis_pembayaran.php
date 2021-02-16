<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis_pembayaran extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$is_login	= $this->session->userdata('nip');
		if (! $is_login) {
			//redirect(base_url('Welcome/index'));
			//return;
		}
      $data['title'] = 'Dashboard - Data Jenis Pembayaran';
  		$this->load->view('template/header.php',$data);
	}

	public function index()
	{
		$this->load->view('jenis_pembayaran/index.php');
  	$this->load->view('template/footer.php');
	}

  public function add()
  {
    $this->load->view('jenis_pembayaran/add.php');
    $this->load->view('template/footer.php');
  }

  public function update()
  {
    $this->load->view('jenis_pembayaran/update.php');
    $this->load->view('template/footer.php');
  }
}
