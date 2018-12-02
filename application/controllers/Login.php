<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	private $user;
	public function __contruct() {
		parent::__construct();
		$this->load->model('User');
		$this->load->helper('url_helper');
	}

	public function index()
	{
		$this->load->view('login');
	}
	
	public function validate()
	{
		$this->form_validation->set_rules('login', '', 'callback_user_check');

		if ($this->form_validation->run() == FALSE){
			$this->load->view('login');
		} else {
			$this->session->set_userdata('user',$this->user);
			$this->load->view('templates/header');
			$this->load->view('templates/footer');
		}	


	}

	public function user_check()
	{
		$user = $this->User->validate($this->input->post());
		if(empty($user)){
			$this->form_validation->set_message('user_check', '<b>E-mail</b> e/ou <b>senha</b> estão incorreto(s)!');
			return FALSE;
		}else{
			$this->user=$user;
			return TRUE;
		}
	}

	public function logout(){
		$this->session->unset_userdata('user');
		redirect(base_url());	
	}

}
