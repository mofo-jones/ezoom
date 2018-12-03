<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias extends KS_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->model('Category');
			$this->load->helper('url_helper');
			$this->load->library('Listing');
	}

	// listagem de categorias
	public function index()
	{   
        $list  = new Listing();
        $list->setList($this->Category->get_all());
        $list->setTh(['ID','Nome']); // Nomes das colunas
        $list->setTd(['id','name']); // Nomes dos campos do retorno do select
        $list->setEdit(true); // Adiciona o botão de edição
        $list->setDelete(true); // Adiciona o botão de excluir
        		
        $data['list'] = $list; // Lista para ser exibida
		
		$this->load->view('templates/header', $data); // carrega a visualização
		$this->load->view('templates/list', $data);
		$this->load->view('templates/footer');
	}

	public function view()
	{
		$data['category'] = $this->Category->get($id); // carrega a categoria 

        if (empty($data['category']))
        {
                show_404();
        }

        $data['title'] = $data['category']['name']; // Carrega o título

        $this->load->view('templates/header', $data); // carrega a visualização
        $this->load->view('news/view', $data);
        $this->load->view('templates/footer');
	}
	
	public function delete($id)
	{
		$this->Category->delete($id); // deleta a categoria pelo id
	}
	
	public function edit($id)
	{
		$data['category']=$this->Category->get($id); // Busca a categoria para edição
		$data['title'] = $data['category']->name; // Carrega o título
	
		$this->load->view('templates/header', $data); // Carrega a visualização
		$this->load->view('categorias', $data);
		$this->load->view('templates/footer');
	}

	public function save()
	{

		$this->setRules();// adiciona as regras dos campos dos formulário
		if ($this->form_validation->run() == FALSE){	
			$data['category']= $this->input->post();// adiciona os dados do post ao formulário novamente
			$this->load->view('templates/header', $data);// Carrega a visualização
			$this->load->view('categorias', $data);
			$this->load->view('templates/footer');
		}
		else {
			$this->Category->save($this->input->post()); // salva os dados do post
			redirect('categorias');	// redireciona para a lista de categorias
		}	
	}

	public function create()
	{
		$data=[];
		$this->load->view('templates/header', $data); // carrega o formulário vazio
		$this->load->view('categorias', $data);
		$this->load->view('templates/footer');
	}

	// seta as regras dos campos do formulário
	public function  setRules(){
		$config = array(
			array(
					'field' => 'name',
					'label' => 'Nome',
					'rules' => 'required'
			)
		);	
		$this->form_validation->set_rules($config);
	}

	public function getCategorias() {		
		$this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($this->Category->get_all()));
	}
	
	public function getCategoria($id) {
		$this->output
        ->set_content_type('application/json')
		->set_output(json_encode($this->Category->get($id)));
	}
}
