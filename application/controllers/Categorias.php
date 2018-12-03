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

	public function index()
	{   
        $list  = new Listing();
        $list->setList($this->Category->get_all());
        $list->setTh(['ID','Nome']);
        $list->setTd(['id','name']);
        $list->setEdit(true);
        $list->setDelete(true);
        		
		$data['title'] = 'Categorias';
        $data['list'] = $list;
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/list', $data);
		$this->load->view('templates/footer');
	}

	public function view()
	{
		$data['category'] = $this->Category->get($id);

        if (empty($data['category']))
        {
                show_404();
        }

        $data['title'] = $data['category']['name'];

        $this->load->view('templates/header', $data);
        $this->load->view('news/view', $data);
        $this->load->view('templates/footer');
	}
	
	public function delete($id)
	{
		$this->Category->delete($id);
	}
	
	public function edit($id)
	{
		$data['category']=$this->Category->get($id);
		$data['title'] = $data['category']->name;
	
		$this->load->view('templates/header', $data);
		$this->load->view('categorias', $data);
		$this->load->view('templates/footer');
	}

	public function save()
	{

		$this->setRules();
		if ($this->form_validation->run() == FALSE){	
			$data['category']= $this->input->post();
			$this->load->view('templates/header', $data);
			$this->load->view('categorias', $data);
			$this->load->view('templates/footer');
		}
		else {
			$this->Category->save($this->input->post());		
			redirect('categorias');	
		}	
	}

	public function create()
	{
		$data=[];
		$this->load->view('templates/header', $data);
		$this->load->view('categorias', $data);
		$this->load->view('templates/footer');
	}

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
}
