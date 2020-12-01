<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class loginController extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
		$this->load->model('user');
     
	}

	public function index()
	{
		$this->load->view('loginPage');
	}

	public function login(){
		$email = $this->input->post('inputEmail');
		$password = $this->input->post('inputPassword');
		if(($email != "") && ($password != "")){
			if($this->user->cekDataEmail($email,$password)){
				$dataorang = $this->user->getNama($email);
				$userdata = array(
					'email' => $email,
					'nama' => $dataorang['nama_user'],
					'status' => 'Login'
				);
				$this->session->set_userdata('userFile',$userdata);
				redirect('menuController');
			}else{
				$this->session->set_flashdata('messages','<div class="alert alert-danger mt-3" style="color:red;font-family:Poppins,sans-seriff; font-size: 14px;"> login failed </div>');
				redirect('loginController');
			}
		}else{
			$this->session->set_flashdata('messages','<div class="alert alert-danger mt-3" style="color:red;font-family:Poppins,sans-seriff; font-size: 14px;">alert please fill correctly</div>');
			redirect('loginController');
		}
	}
}
