<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class homeController extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
		$this->load->model('user');
	}
}
