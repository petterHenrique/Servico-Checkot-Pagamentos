<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Checkout example</title>
    <!-- Bootstrap core CSS -->
	<link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .margin-top-20{margin-top:30px;}
      .painel{
      	background:#fff;
      	padding:20px;
      	border-radius:10px;
      	box-shadow: 4px 2px 7px rgba(0, 0, 0, 0.05);
      }

      .btn-pagamento{
      	background: #f5f5f5;
      	padding: 14px;
	    white-space: normal;
	    margin-bottom: 12px;
	    border: 2px solid;
	    min-width: 168px;
	    font-size: 13px;
	    text-align: left;
	    font-weight: 500;
	    margin-right: 10px;
	    position: relative;
      }

      .active{
      	background: #fff !important;
	    border-color: #7dd063 !important;
	    color: #61b746 !important;
	    box-shadow: inset 0 3px 5px rgba(125, 208, 99, 0.08) !important;
	    -webkit-box-shadow: inset 0 3px 5px rgba(125, 208, 99, 0.08) !important;
      }
      .hidden{
      	display:none;
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="<?=base_url()?>assets/css/form-validation.css" rel="stylesheet"/>
  </head>
  <body class="bg-light">


<div class="container">
  <div class="col-md-12 text-center" style="margin-top:20px;">
    <img class="d-block mx-auto mb-4" src="<?=$objetoConfiguracoes->urlEstabelecimento ?? "";?>" alt="" width="72" height="72">
  </div>

  <div class="row">

  <!--AQUI TOPO INFORMANDO QUAL PRODUTO SE TRATA-->
  	<div class="col-md-12 order-md-1 mb-3"> 
	  	<div class="painel">
	  		<div class="row">
		  		<div class="col-md-4">
		  			<b>VENDEDOR</b>
		  			<p>contato@gmail.com</p>
		  		</div>
		  		<div class="col-md-4 text-center">
		  			<b>VOCÊ ESTÁ ADQUIRINDO</b>
		  			<p><?=$plano->DES_PLANO;?> <b class="text-success">R$ <?=$plano->VALOR_PLANO;?></b></p>
		  		</div>
		  		<div class="col-md-4 text-right">
		  			<img style="width:120px;" src="http://positivabalancas.com.br/wp-content/uploads/2017/04/google-safe.png" class="img-fluid"/>
		  		</div>
		  	</div>
	  	</div>
  	</div>


    <div class="col-md-6 order-md-2 mb-4">
      <h4 class="mb-3">Pagamento</h4>
      <div class="painel">
      	  <!--FORMA DE PAGAMENTO-->
	      <div class="row">
	      	<div class="col-md-12">
		        <h6 class="font-bold">
		            PAGAR COM:
		        </h6>
		        <p class="marginless">Escolha qual método de pagamento você prefere usar.</p>
		        <button class="btn btn-default btn-pagamento active" type="button" id="pagarcom-cartao" onclick="mudaFormaPagamento(this); return false;">
		            <i class="far fa-credit-card"></i>
		            <span>Cartão de crédito</span>
		        </button>
		        <button class="btn btn-default btn-pagamento" type="button" id="pagarcom-boleto" onclick="mudaFormaPagamento(this); return false;">
		            <i class="fas fa-barcode"></i>
		            Boleto
		        </button>                                       
	      	</div>
	      </div>

	      <!--ABAS-->
	      <div class="row" id="dados-cartao">
Car
	      </div>
	      <div class="row hidden" id="dados-boleto">
Bo
	      </div>
      </div>
    </div>
    <div class="col-md-6 order-md-1">
      <h4 class="mb-3">Dados Cliente</h4>
      <form class="needs-validation" novalidate>
      	<div class="painel">
	        <div class="row">
	          <div class="col-md-12 mb-3">
	            <label for="nomeCliente">Nome</label>
	            <input type="text" class="form-control" id="nomeCliente" placeholder="Nome completo" value="" required>
	            <div class="invalid-feedback">
	              Campo nome obrigatório
	            </div>
	          </div>
	          <div class="col-md-12 mb-3">
	            <label for="emailCliente">E-mail</label>
	            <input type="text" class="form-control" id="emailCliente" placeholder="E-mail" value="" required>
	            <div class="invalid-feedback">
	              E-mail obrigatório
	            </div>
	          </div>
	        </div>

	        <div class="row">
	          <div class="col-md-6 mb-3">
	            <label for="cpfCliente">CPF</label>
	            <input type="text" class="form-control" id="cpfCliente" placeholder="000.000.000-00" value="" required>
	            <div class="invalid-feedback">
	              CPF obrigatório
	            </div>
	          </div>
	          <div class="col-md-6 mb-3">
	            <label for="telefoneCliente">Telefone com DDD</label>
	            <input type="text" class="form-control" id="telefoneCliente" placeholder="(xx) xxxxx-xxxx" value="" required>
	            <div class="invalid-feedback">
	              Telefone obrigatório
	            </div>
	          </div>
	        </div>
	    </div>
        <div class="mb-4"></div>
        <h4 class="mb-3">Endereço</h4>
        <div class="painel">
	        <div class="row">
	        	<div class="col-md-6 mb-3">
		            <label for="cepCliente">CEP</label>
		            <input type="text" class="form-control" id="cepCliente" placeholder="00000-000" value="" required>
		            <div class="invalid-feedback">
		              Cep obrigatório
		            </div>
		        </div>
		        <div class="col-md-6">
		        </div>
		        <div class="col-md-12 mb-3">
		            <label for="ruaCliente">Endereço</label>
		            <input type="text" class="form-control" id="ruaCliente" placeholder="Endereço" value="" required disabled>
		            <div class="invalid-feedback">
		              Rua obrigatório
		            </div>
		        </div>
		        <div class="col-md-6 mb-3">
		            <label for="numeroEnderecoCliente">Número:</label>
		            <input type="text" class="form-control" id="numeroEnderecoCliente" placeholder="" required disabled>
		            <div class="invalid-feedback">
		              Número Residência obrigatório
		            </div>
		        </div>
		        <div class="col-md-6 mb-3">
		            <label for="complementoEnderecoCliente">Complemento</label>
		            <input type="text" class="form-control" id="complementoEnderecoCliente" placeholder="" value="" disabled>
		            <div class="invalid-feedback">
		              Complemento obrigatório
		            </div>
		        </div>
		        <div class="col-md-12 mb-3">
		            <label for="bairroCliente">Bairro</label>
		            <input type="text" class="form-control" id="bairroCliente" placeholder="" value="" required disabled>
		            <div class="invalid-feedback">
		              Bairro obrigatório
		            </div>
		        </div>
	        
	          <div class="col-md-6 mb-3">
	            <label for="cidadeCliente">Cidade</label>
	            <input type="text" class="form-control" id="cidadeCliente" placeholder="" value="" required disabled>
	            <div class="invalid-feedback">
	              Cidade obrigatório
	            </div>
	          </div>
	          <div class="col-md-6 mb-3">
	            <label for="estadoCliente">Estado</label>
	             <input type="text" class="form-control" id="estadoCliente" placeholder="" value="" required disabled>
		            <div class="invalid-feedback">
		              Estado obrigatório
		            </div>
	            <div class="invalid-feedback">
	              Please provide a valid state.
	            </div>
	          </div>
	        </div>
        </div>
    </div>
  </div>
  <footer class="text-muted text-center text-small margin-top-20">
    <p class="mb-1">&copy; <?=date("Y")?> FastCheckout - Produto Upsy</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacidade</a></li>
      <li class="list-inline-item"><a href="#">Termos e Condições</a></li>
      <li class="list-inline-item"><a href="#">Suporte</a></li>
    </ul>
  </footer>
</div>
<script src="<?=base_url()?>assets/js/jquery-3.4.1.min.js"></script>
<script src="<?=base_url()?>assets/js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url()?>assets/js/form-validation.js"></script>
<script src="<?=base_url()?>assets/js/jquery.mask.min.js"></script>
<script type="text/javascript" src="https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js">
</script> 
<script>

$(() => {


	$("#cepCliente").on("change", function(){
		let cep = $(this).val();
		viaCep(cep);
	});

});

class PagSeguro {

	constructor(sessionId){
		PagSeguroDirectPayment.setSessionId(sessionId);
		this.init();
		this.cardBrand = undefined;
		this.cardToken = undefined;
		this.cardExpire = undefined;
		this.cardNumber = undefined;
		this.cvv = undefined;
	}

	init(){

		let contexto = this;

		$(document).on("change","#cc-numero", function(){
			contexto.cardNumber = $(this).val();
			contexto.getBrand();
		});
		$(document).on("change","#cc-expiracao", function(){
			contexto.cardExpire = $(this).val();
		});
		$(document).on("change","#cc-cvv", function(){
			contexto.cvv = $(this).val();
		});
		$(document).on("click",".btn-finalizar", function(){
			contexto.processarPagamento();
		});


	}

	getCardToken(){

		let contexto = this;

		PagSeguroDirectPayment.createCardToken({
        	cardNumber: contexto.cardNumber,
        	brand: contexto.cardBrand,
        	cvv: contexto.cvv,
        	expirationMonth: contexto.cardExpire.split("/")[0],
        	expirationYear: contexto.cardExpire.split("/")[1],
        	success: function(response){
            	contexto.cardToken = response.card.token;
       		},
        	error: function(response){
            	console.log(response);
        	}
    	});
	}

	getBrand(){

		let contexto = this;

		PagSeguroDirectPayment.getBrand({
	        cardBin: contexto.cardNumber,
	        success: function(response) {

	        	console.log(response);

	            contexto.cardBrand = response.brand.name;

	        },
		    error: function(response) {
		            console.log(response);
		    }
	    });
	}

	montarModeloPagamento(){

		let contexto = this;

		let pagamento = {

			tipServicoPagamento: 1,
			tipPagamento: "ASSINATURA",
			plan_id: document.querySelector("#planoId").value,
			card_number: contexto.cardNumber,
			card_cvv: contexto.cvv,
			card_expiration_month: contexto.cardExpire.split('/')[0],
			card_expiration_year: contexto.cardExpire.split('/')[1],
			card_holder_name: document.querySelector("#cc-nome").value,
			card_holder_birth: "",
			card_holder_phone: ""
		};

		let cliente = {
			name: $("#nomeCliente").val(),
			email: $("#emailCliente").val(),
			document: $("#cpfCliente").val(),
			phone: $("#telefoneCliente").val(),
		}

		let endereco = {
			street: $("#ruaCliente").val(),
			number: $("#numeroEnderecoCliente").val(),
			complement: $("#complementoEnderecoCliente").val(),
			district: $("#bairroCliente").val(),
			city: $("#cidadeCliente").val(),
			state: $("#estadoCliente").val(),
			postalCode: $("#cepCliente").val()
		};

		let modelo = {
			clienteModel: cliente,
			pagamentoModel: pagamento,
			enderecoModel: endereco 
		}

		return modelo;
	}




	processarPagamento(){
		this.getCardToken();

		$.ajax({
			url: "<?=base_url()?>index.php/checkout/processarPagamento",
			method: "POST",
			data: { 
				modelo: montarModeloPagamento()
			},
			beforeSend: function(){

			},
			error: function(){

			},
			complete: function(){

			}
		});
	}
}

class Pagamentos{

	constructor(objetoConfiguracoes){
		this.configuracoes = objetoConfiguracoes;
		this.init();
	}

	init(){

		this.inicializaMascaras();

		if(this.configuracoes.servicosPagamento.includes(EnumServicos.PAGSEGURO)){


			this.InstanciaPagseguro = new PagSeguro('<?=$sessionIdPagseguro;?>');
		}

	}

	inicializaMascaras(){
		$("#cepCliente").mask("99999-999");
		$("#cpfCliente").mask("999.999.999-99");
		$("#telefoneCliente").mask("(99) 99999-9999");
	}

	getConfiguracoes(){
		return this.configuracoes;
	}

}

const EnumServicos = {
	PAGSEGURO: 1,
	CIELO: 2
};

const pagamento = new Pagamentos(<?=json_encode($objetoConfiguracoes);?>);

const viaCep = (cep) => {

	console.log(cep);

	let cepFormatado = cep.replace("-","");

	$.get("https://viacep.com.br/ws/"+cepFormatado+"/json/", {}, function(response){

		$("#ruaCliente").prop("disabled", false);
		$("#bairroCliente").prop("disabled", false);
		$("#cidadeCliente").prop("disabled", false);
		$("#estadoCliente").prop("disabled", false);
		$("#numeroEnderecoCliente").prop("disabled", false);
		$("#complementoEnderecoCliente").prop("disabled", false);

		$("#ruaCliente").val(response.logradouro);
		$("#bairroCliente").val(response.bairro);
		$("#cidadeCliente").val(response.localidade);
		$("#estadoCliente").val(response.uf);

		if(response.logradouro != ""){
			$("#numeroEnderecoCliente").focus();
		}

	},'json');

}

function mudaFormaPagamento(e) {
    if (e.getAttribute('id') == 'pagarcom-cartao') {
        $('#pagarcom-boleto').removeClass('active');
        $('#pagarcom-cartao').addClass('active');

        $('#dados-cartao').removeClass('hidden');
        $('#dados-boleto').addClass('hidden');

    } else if (e.getAttribute('id') == 'pagarcom-boleto') {
        $('#pagarcom-cartao').removeClass('active');
        $('#pagarcom-boleto').addClass('active');

        $('#dados-cartao').addClass('hidden');
        $('#dados-boleto').removeClass('hidden');
    }
}
</script>
</body>
</html>
