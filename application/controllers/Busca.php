<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Busca extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Busca_model');
    }
    
    public function index(){
        
        $this->load->model('Busca_Model');
        
        $this->load->view('html-header');        
        $this->load->view('header');
        $this->load->view('menu');
             
        $rs =  $this->getBusca();  
        $dados['busca'] = $rs;
        
        $this->load->view('result_busca',$dados); 
        
        $this->load->view('html-footer');   
    
    }
    
    public function getBusca()
    {
       $busca =  $this->input->post('busca');
       $this-> result = $this->Busca_model->resultBusca($busca);    
       
       return $this-> result;
    }
		
}