<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Checkout example</title>
    <!-- Bootstrap core CSS -->
	<link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet"/>
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
    </style>
    <!-- Custom styles for this template -->
    <link href="<?=base_url()?>assets/css/form-validation.css" rel="stylesheet"/>
  </head>
  <body class="bg-light">


    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="<?=$objetoConfiguracoes->urlEstabelecimento ?? "";?>" alt="" width="72" height="72">
    <h2>Estabelecimento</h2>
    <p class="lead">Informe seus dados abaixo para que você possa desfrutar dos benefícios da [EMPRESA].</p>
  </div>

  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Seu carrinho</span>
        <span class="badge badge-secondary badge-pill">1</span>
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0"><?=$plano->DES_PLANO;?></h6>
            <small class="text-muted">Assinatura de marketing online.</small>
          </div>
          <span class="text-muted"><?=$plano->VALOR_PLANO;?></span>
        </li>
        
        <!--li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Third item</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$5</span>
        </li-->
        <!--li class="list-group-item d-flex justify-content-between bg-light">
          <div class="text-success">
            <h6 class="my-0">Promo code</h6>
            <small>EXAMPLECODE</small>
          </div>
          <span class="text-success">-$5</span>
        </li-->
        <li class="list-group-item d-flex justify-content-between">
          <span>Total</span>
          <strong class="text-success">R$ <?=$plano->VALOR_PLANO;?></strong>
        </li>
      </ul>

      <form class="card p-2">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Código desconto">
          <div class="input-group-append">
            <button type="submit" class="btn btn-secondary">Cupom</button>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Dados Cliente</h4>
      <form class="needs-validation" novalidate>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="nomeCliente">Nome Completo</label>
            <input type="text" class="form-control" id="nomeCliente" placeholder="" value="" required>
            <div class="invalid-feedback">
              Campo nome obrigatório
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="emailCliente">E-mail</label>
            <input type="text" class="form-control" id="emailCliente" placeholder="" value="" required>
            <div class="invalid-feedback">
              E-mail obrigatório
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="cpfCliente">CPF</label>
            <input type="text" class="form-control" id="cpfCliente" placeholder="" value="" required>
            <div class="invalid-feedback">
              CPF obrigatório
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="telefoneCliente">Telefone</label>
            <input type="text" class="form-control" id="telefoneCliente" placeholder="" value="" required>
            <div class="invalid-feedback">
              Telefone obrigatório
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <h4 class="mb-3">Endereço</h4>

        <div class="row">
        	<div class="col-md-6 mb-3">
	            <label for="cepCliente">CEP</label>
	            <input type="text" class="form-control" id="cepCliente" placeholder="" value="" required>
	            <div class="invalid-feedback">
	              Cep obrigatório
	            </div>
	        </div>
	        <div class="col-md-6 mb-3">
	            <label for="ruaCliente">Rua</label>
	            <input type="text" class="form-control" id="ruaCliente" placeholder="" value="" required>
	            <div class="invalid-feedback">
	              Rua obrigatório
	            </div>
	        </div>
	        <div class="col-md-12 mb-3">
	            <label for="bairroCliente">Bairro</label>
	            <input type="text" class="form-control" id="bairroCliente" placeholder="" value="" required>
	            <div class="invalid-feedback">
	              Bairro obrigatório
	            </div>
	        </div>
        </div>


       


        <div class="row">
          <div class="col-md-4 mb-3">
            <label for="cidadeCliente">Cidade</label>
            <input type="text" class="form-control" id="cidadeCliente" placeholder="" value="" required>
            <div class="invalid-feedback">
              Cidade obrigatório
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="estadoCliente">Estado</label>
             <input type="text" class="form-control" id="estadoCliente" placeholder="" value="" required>
	            <div class="invalid-feedback">
	              Estado obrigatório
	            </div>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="numeroEnderecoCliente">Número Redidência:</label>
            <input type="text" class="form-control" id="numeroEnderecoCliente" placeholder="" required>
            <div class="invalid-feedback">
              Número Residência obrigatório
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <h4 class="mb-3">Pagamento</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="cartaocredito" name="paymentMethod" type="radio" class="custom-control-input" checked required>
            <label class="custom-control-label" for="cartaocredito">Cartão Crédito</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="boleto" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="boleto">Boleto</label>
          </div>
        </div>
        <div class="row">
          <input type="hidden" id="planoId" value="<?=$plano->ID_INTEGRACAO;?>"/>
          <div class="col-md-6 mb-3">
            <label for="cc-nome">Nome do cartão</label>
            <input type="text" class="form-control" id="cc-nome" placeholder="" required>
            <small class="text-muted">Preencha nome completo que consta no cartão de crédito</small>
            <div class="invalid-feedback">
              Nome cartão obrigatório
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="cc-numero">Número do cartão</label>
            <input type="text" class="form-control" id="cc-numero" placeholder="" required>
            <div class="invalid-feedback">
              Número do cartão obrigatório
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="cc-expiracao">Data Expiração</label>
            <input type="text" class="form-control" id="cc-expiracao" placeholder="" required>
            <div class="invalid-feedback">
              Data expiração obrigatório
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="cc-cvv">CVV</label>
            <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
            <div class="invalid-feedback">
              Código segurança obrigatório.
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <button class="btn btn-success btn-lg btn-block btn-finalizar" type="button">Finalizar Pedido</button>
      </form>
    </div>
  </div>
  <footer class="my-5 pt-5 text-muted text-center text-small">
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
<script type="text/javascript" src="https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js">
</script> 
<script>

$(() => {


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

		}

		let endereco = {

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
				modelo: montarModeloPagamento();
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

		if(this.configuracoes.servicosPagamento.includes(EnumServicos.PAGSEGURO)){


			this.InstanciaPagseguro = new PagSeguro('<?=$sessionIdPagseguro;?>');
		}

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

</script>
</body>
</html>
