<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

	public function __construct(){
		parent::__construct();
    	$this->load->model('Planos');
    	$this->load->model('CheckoutPagamentos');
	}

	public function index()
	{
		$this->CheckoutPagamentos->Init(1);
		$objetoConfiguracoes = new StdClass();
		// IND PAGAMENTO - 1(Recorrencia) 2(Pedido, Carrinho compras)
		$objetoConfiguracoes->urlEstabelecimento = "https://getbootstrap.com/docs/4.3/assets/brand/bootstrap-solid.svg";
		$objetoConfiguracoes->tipoPagamento = 1;
		$objetoConfiguracoes->servicosPagamento = [1,2]; //1 - Pagseguro 2- Cielo
		$objetoConfiguracoes->servicosFrete = [1,2]; //1-Correios 2- Jadlog
		$objetoConfiguracoes->cliente = null;
		$objetoConfiguracoes->enderecoCliente = null;

		$dados['objetoConfiguracoes'] = $objetoConfiguracoes;
		$dados['plano'] = $this->Planos->RetornaPlanoId(1);
		$dados['sessionIdPagseguro'] = $this->CheckoutPagamentos->RetornarSessionIdPagseguro();
		
		$this->load->view('checkout', $dados);
	}

	public function criarPlanos(){

		//inicializa pagamentos
		$this->CheckoutPagamentos->Init(1);

		//realizad cadastro pagseguro dos planos
		$entidade = new StdClass();
		$entidade->id = 1;
		$entidade->nome = "Plano 1#";
		$entidade->periodo = 'MONTHLY';//[WEEKLY, MONTHLY, BIMONTHLY, TRIMONTHLY, SEMIANNUALLY ou YEARLY]
		$entidade->valor = '29.90';

		$response = $this->CheckoutPagamentos->CriarPlano($entidade);

		echo json_encode($response);
		//$this->load->view('planos');
	}

	public function processarPagamento(){

		try{

			$tipoPagamento = $_POST['modelo']['pagamentoModel']['tipServicoPagamento'];


			$response;

			switch ($tipoPagamento) {

				case 1: //PAGSEGURO

					$cliente = $_POST['modelo']['clienteModel'];
					$endereco = $_POST['modelo']['enderecoModel'];
					$pagamento = $_POST['modelo']['pagamentoModel'];
					$plano = "";

					$this->CheckoutPagamentos->Init(1);
					
					$response = $this->CheckoutPagamentos->PagamentoPagSeguroAssinaturaCartao($cliente, $endereco, $pagamento, $plano);

					break;

				case 2: //CIELO

					break;
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
        		->set_output(json_encode(array(
        			'sucesso' => true,
        			'dados' => $response)
        		));

		} catch (\Exception $e) {

		   $this->output
        	->set_status_header(400)
        	->set_content_type('application/json', 'utf-8')
        	->set_output(json_encode($response));

		}

	}
}
