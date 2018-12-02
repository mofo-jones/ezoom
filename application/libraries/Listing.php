<?php

class Listing
{
    public $container;
    private $list    = [];
    private $td      = [];
    private $th      = [];
    private $edit    = false;
    private $delete  = false;
    private $module  = '';
    private $fullUrl = '';

    public function __construct()
    {
        // $this->fullUrl =  $baseUrl . $pathFixed . $queryFixed;
        $this->fullUrl =  current_url();
    }

    public function setTh($th){
        $this->th = $th;
    }

    public function getTh(){
        return $this->th;
    }

    public function setTd($td){
        $this->td = $td;
    }

    public function getTd (){
        return $this->td;
    }

    public function setEdit($edit){
        $this->edit = $edit;
    }

    public function getEdit(){
        return $this->edit;
    }

    public function setDelete($delete){
        $this->delete = $delete;
    }

    public function getDelete(){
        return $this->delete; 
    }   

    public function setList($list){
        $this->list = $list;        
    }

    public function getList(){
        return $this->list;
    }

    public function editUrl($id){
        return $this->fullUrl . '/edit/'.$id; 
    }
    
    public function deleteUrl($id){
        return $this->fullUrl . '/delete/'.$id; 
        
    }
}