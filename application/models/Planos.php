<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Planos extends CI_Model {
    
    public function RetornarListaPlanos(){
    	return $this->db->get("planos")->result();
    }
    
    public function RetornaPlanoId($id){
    	$this->db->where("COD_PLANO", $id);
    	return $this->db->get("planos")->row();
    }
    
}