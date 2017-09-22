<?php


class Seguidor_model extends CI_Model
{
    
     function __construct()
     {
        parent::__construct();
     }
        
    function Seguir($seguir,$seguindo)
    {
        if($seguir != $seguindo)
        {
            $data = array(
            'lista_id_user' => $seguir,
            'Usuario_idUsuario' => $seguindo
            );

            if(count($this->verifica($seguir, $seguindo))===0)                
                $this->db->insert('lista_seguidores',$data);
        }
    }
    
    function verifica($seguir,$seguindo)
    {
        $this->db->where('lista_id_user',$seguir);
        $this->db->where('Usuario_idUsuario',$seguindo);
        return $this->db->get('lista_seguidores')->result_array();       
        
    }
		
}