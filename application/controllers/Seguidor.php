<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Seguidor extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Seguidor_model');
    }
    public function index()
    {
        
    }	
    
    public function Seguir()
    {
       $seguir = "1";
       $seguindo =  $this->input->post('seguindo');
       $this-> result = $this->Seguidor_model->Seguir($seguir,$seguindo);    
       
       redirect(base_url('busca'), 'refresh');              
    }
    
    
    
}