<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include "ServicoPagamentoPagseguro.php";

class CheckoutPagamentos extends CI_Model {
    
	private $instanciaServicoPagamentos;

	private $response;

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
    
    public function PagamentoPagSeguroAssinaturaCartao($cliente, $endereco, $pagamento, $plano){

    	//tratar depois qual plano selecionado
    	$plan = 'B46A3D31A0A07CC99485FFAA8BD6E2D4';
    	$ref = 1;//ID da assinatura no banco de dados

    	//cliente
    	$name = $cliente['name'];
    	$email = 'c63596705283633013093@sandbox.pagseguro.com.br';//$cliente['email'];
    	$document = $this->limpaCPF_CNPJ_TELEFONE_CEP($cliente['document']);
    	$phone = $this->limpaCPF_CNPJ_TELEFONE_CEP($cliente['phone']);

      	//endereço
    	$street = $endereco['street'];
    	$number = $endereco['number'];
    	$complement = $endereco['complement'];
    	$district = $endereco['district'];
    	$city = $endereco['city'];
    	$state = $endereco['state'];
  		$country = "BRA";
  		$postalCode = $this->limpaCPF_CNPJ_TELEFONE_CEP($endereco['postalCode']);

  		//cartao
  		$token = $pagamento['token'];
  		$holderName = $pagamento['card_holder_name'];
  		$holderBirth = "23/09/1996";//$pagamento['card_holder_birth'];
  		$holderPhone = $this->limpaCPF_CNPJ_TELEFONE_CEP($cliente['phone']);


  		$this->instanciaServicoPagamentos->createMemberShip($plan, $ref, $name, $email, $document, $phone, $street, $number, $complement, $district, $city, $state, $country, $postalCode, $token, $holderName, $holderBirth, $holderPhone);

  	
  		$response = $this->instanciaServicoPagamentos->getCallback();

  		$DtoRetorno = new StdClass();

  		if(!empty($response->error)){
  			$DtoRetorno->sucesso = false;
  			$DtoRetorno->mensagens = [
				'Não foi possível processar seus dados, tente novamente!'
  			];
  		}else{
  			$DtoRetorno->sucesso = true;
  			$DtoRetorno->codeTransaction = $response->code;
  			$DtoRetorno->mensagens = [
				'Transação realizada com sucesso!'
  			];
  		}

  		return $DtoRetorno;
    }

    private function limpaCPF_CNPJ_TELEFONE_CEP($valor){
	 $valor = trim($valor);
	 $valor = str_replace(".", "", $valor);
	 $valor = str_replace(",", "", $valor);
	 $valor = str_replace("(", "", $valor);
	 $valor = str_replace(")", "", $valor);
	 $valor = str_replace("-", "", $valor);
	 $valor = str_replace(" ", "", $valor);
	 $valor = str_replace("/", "", $valor);
	 return $valor;
	}
}