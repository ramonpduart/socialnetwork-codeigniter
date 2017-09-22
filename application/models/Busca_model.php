<?php


class Busca_model extends CI_Model
{
    
     function __construct()
     {
        parent::__construct();
     }
        
    function resultBusca($busca)
    {
        $this -> db -> like('nome',$busca);
        return $this->db->get('usuario')->result();
    }
		
}