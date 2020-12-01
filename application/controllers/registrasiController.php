<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class registrasiController extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('user');
     
	}
	
	public function index()
	{
        $this->load->view('registrasiPage');
	}

	public function registration(){
		$nama  = $this->input->post('inputNama');
		$email = $this->input->post('inputEmail');
		$password = $this->input->post('inputPassword');
		if($nama != ""){
			if($this->user->cekData($nama)){
				$data = array(
					'nama_user' => $nama,
					'email_user' => $email,
					'password_user' => $password
				);
				$this->user->insert($data);
				$this->session->set_flashdata('messages','<div class="alert alert-success mt-3" style="color:green;font-family:Poppins,sans-seriff;font-size: 14px;">alert registration success</div>');
				redirect('registrasiController');
			}else{
				$this->session->set_flashdata('messages','<div class ="alert alert-danger mt-3" style="color:red;font-family:Poppins,sans-seriff; font-size: 14px;">alert user already <strong>registered</strong></div>');
				redirect('registrasiController');
			}
		}else{
			$this->session->set_flashdata('messages','<div class="alert alert-danger mt-3" style="color:red;font-family:Poppins,sans-seriff; font-size: 14px;">alert please fill correctly</div>');
			redirect('registrasiController');
		}
	}
}
