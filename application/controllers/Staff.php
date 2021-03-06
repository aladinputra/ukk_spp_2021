<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$is_login	= $this->session->userdata('nip');
		if (! $is_login) {
			//redirect(base_url('Welcome/index'));
			//return;
		}
      $data['title'] = 'Dashboard - Staff';
  		$this->load->view('template/header.php',$data);
	}

	public function index()
	{
		$this->load->view('staff/index.php');
  	$this->load->view('template/footer.php');
	}

  public function add()
  {
    $this->load->view('staff/add.php');
    $this->load->view('template/footer.php');
  }

  public function update()
  {
    $this->load->view('staff/update.php');
    $this->load->view('template/footer.php');
  }
}
