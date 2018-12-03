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
        $list->setList($this->Product->get_all()); // Carrega os produtos
        $list->setTh(['ID','Nome', 'Preço', 'Quantidade', 'Categoria']); // Nomes das colunas
        $list->setTd(['id','name', 'price', 'amount', 'cat_name']); // Nomes dos campos do retorno do select
        $list->setEdit(true); // Adiciona o botão de edição
        $list->setDelete(true);// Adiciona o botão de excluir
        $data['list'] = $list;// Lista para ser exibida
        		
		$data['title'] = 'Produtos';
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/list', $data);
		$this->load->view('templates/footer');
	}
	
	public function delete($id)
	{
		$this->Product->delete($id);// Deleta o produto pelo id enviado
	}
	
	public function edit($id)
	{
		$data['product']=$this->Product->get($id);// Busca o produto pelo id
		$data['categories']=$this->Category->get_all(); // busca todas as categorias para ser carregada no select
		
		$this->load->view('templates/header', $data); // visualização
		$this->load->view('produto', $data);
		$this->load->view('templates/footer');
	}
	
	
	
	public function save()
	{
		$this->setRules();// regras do formulário
		if ($this->form_validation->run() == FALSE){ //  validação do formulário	
			$data['product']= $this->input->post();// insere os dados do post no formulário
			$data['categories']=$this->Category->get_all();// busca todas as categorias para ser carregada no select
			$this->load->view('templates/header', $data);// visualização
			$this->load->view('produto', $data);
			$this->load->view('templates/footer');
		}
		else {
			$this->Product->save($this->input->post());// salva os dados do formulário
			redirect('produtos');	// redireciona para lista de produtos
		}	
		
	}

	public function create()
	{
		$data=[];// carrega um formulário vazio
		$data['categories']=$this->Category->get_all(); // busca todas as categorias para ser carregada no select
		$this->load->view('templates/header', $data); // visualização
		$this->load->view('produto', $data);
		$this->load->view('templates/footer');
	}

	// regras do formulário
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
