<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KS_Controller extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->helper('url_helper');
			
			// verifica se existe dados do usuário na sessão, do contrário o envia para o login
			if (!($this->session->has_userdata('user'))){
				$this->session->set_flashdata('logout_msg', '<b>Opss...</b> Não está logado ao sistema!');
				redirect(base_url());	
				// $this->load->view('login', $data);
			}
	}

	// public function index()
	// {   
    //     $list  = new Listing();
    //     $list->setList($this->Product->get_all());
    //     $list->setTh(['ID','Nome', 'Preço', 'Quantidade']);
    //     $list->setTd(['id','name', 'price', 'amount']);
    //     $list->setEdit(true);
    //     $list->setDelete(true);
    //     $data['list'] = $list;
        		
	// 	$data['title'] = 'Produtos';
		
	// 	$this->load->view('templates/header', $data);
	// 	$this->load->view('templates/list', $data);
	// 	$this->load->view('templates/footer');
	// }
	
	// public function delete($id)
	// {
	// 	$this->Category->delete($id);
	// }
	
	// public function edit($id)
	// {
	// 	$data['product']=$this->Product->get($id);
	// 	$data['categories']=$this->Category->get_all();
		
	// 	$data['title'] = $data['product']->name;
	
	// 	$this->load->view('templates/header', $data);
	// 	$this->load->view('produto', $data);
	// 	$this->load->view('templates/footer');
	// }
	
	
	
	// public function save()
	// {
	// 	$this->setRules();
	// 	if ($this->form_validation->run() == FALSE){	
	// 		$data['product']= $this->input->post();
	// 		$data['categories']=$this->Category->get_all();
	// 		$this->load->view('templates/header', $data);
	// 		$this->load->view('produto', $data);
	// 		$this->load->view('templates/footer');
	// 	}
	// 	else {
	// 		$this->Product->save($this->input->post());		
	// 		redirect('produtos');	
	// 	}	
		
	// }

	// public function create()
	// {
	// 	$data=[];
	// 	$data['categories']=$this->Category->get_all();
	// 	$this->load->view('templates/header', $data);
	// 	$this->load->view('produto', $data);
	// 	$this->load->view('templates/footer');
	// }

	// public function  setRules(){
	// 	$config = array(
	// 		array(
	// 				'field' => 'name',
	// 				'label' => 'Nome',
	// 				'rules' => 'required'
	// 		)
	// 	);	

	// 	$this->form_validation->set_rules($config);
	// }
}
