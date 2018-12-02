<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends KS_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->model('Product');
			$this->load->model('Category');
			$this->load->helper('url_helper');
			$this->load->library(['Listing','form_validation']);
		}

	public function index()
	{   
        $list  = new Listing();
        $list->setList($this->Product->get_all());
        $list->setTh(['ID','Nome', 'Preço', 'Quantidade', 'Categoria']);
        $list->setTd(['id','name', 'price', 'amount', 'cat_name']);
        $list->setEdit(true);
        $list->setDelete(true);
        $data['list'] = $list;
        		
		$data['title'] = 'Produtos';
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/list', $data);
		$this->load->view('templates/footer');
	}
	
	public function delete($id)
	{
		$this->Product->delete($id);
	}
	
	public function edit($id)
	{
		$data['product']=$this->Product->get($id);
		$data['categories']=$this->Category->get_all();
		
		$data['title'] = $data['product']->name;
	
		$this->load->view('templates/header', $data);
		$this->load->view('produto', $data);
		$this->load->view('templates/footer');
	}
	
	
	
	public function save()
	{
		$this->setRules();
		if ($this->form_validation->run() == FALSE){	
			$data['product']= $this->input->post();
			$data['categories']=$this->Category->get_all();
			$this->load->view('templates/header', $data);
			$this->load->view('produto', $data);
			$this->load->view('templates/footer');
		}
		else {
			$this->Product->save($this->input->post());		
			redirect('produtos');	
		}	
		
	}

	public function create()
	{
		$data=[];
		$data['categories']=$this->Category->get_all();
		$this->load->view('templates/header', $data);
		$this->load->view('produto', $data);
		$this->load->view('templates/footer');
	}

	public function  setRules(){
		$config = array(
			array(
					'field' => 'name',
					'label' => 'Nome',
					'rules' => 'required'
			),
			array(
					'field' => 'amount',
					'label' => 'Quantidade',
					'rules' => 'required'
			),
			array(
					'field' => 'price',
					'label' => 'Preço',
					'rules' => 'required'
			),
			array(
					'field' => 'categories_id',
					'label' => 'Categoria',
					'rules' => 'required'
			),
			
		);	

		$this->form_validation->set_rules($config);
	}
}
