<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Conteudo_Model extends Model {
	
        var $titulo ='';
	var $descricao ='';
	var $link ='';
	
	function Conteudo_Model()
	{
		// Chamar o construtor do Model
		parent::Model();	
	}
        
	function publicaConteudo()
	{
            
        $this->idUser='1';    
	$this->titulo =$_POST['titulo'];
        $this->link=$_POST['link'];
	$this->descricao =$_POST['descricao'];
	
	$this->db->insert('conteudo',$this);
	}
        
}

?>
