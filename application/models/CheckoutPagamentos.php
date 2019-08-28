<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include "ServicoPagamentoPagseguro.php";

class CheckoutPagamentos extends CI_Model {
    
	private $instanciaServicoPagamentos;

	public function Init($indicador){

		switch ($indicador) {
			case 1:
				$this->instanciaServicoPagamentos = new ServicoPagamentoPagseguro();
				break;
			default:
				//aqui é a implementação CIELO
				break;
		}

	}

	public function CriarPlano($entidade){

		$this->instanciaServicoPagamentos->createPlan($entidade->id, $entidade->nome,$entidade->periodo, $entidade->valor);

		return $this->instanciaServicoPagamentos->getCallback();

	}

	public function RetornarSessionIdPagseguro(){
		$id = $this->instanciaServicoPagamentos->getSessionId();
    	return $id;
    }

    public function RetornarListaPlanos(){
    	return $this->db->get("planos")->result();
    }
    
}