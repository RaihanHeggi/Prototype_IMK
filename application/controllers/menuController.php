<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class menuController extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
		$this->load->model('user');
     
	}

	public function index()
	{
		$data['dataUser'] = $this->session->userdata('userFile');
		$this->load->view('menuPage',$data);
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('homeController');
	}
}
