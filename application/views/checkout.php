<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="FastCheckout Upsy Tecnologia">
    <title>Finalizar Pedido</title>
    <!-- Bootstrap core CSS -->
	<link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link href="<?=base_url()?>assets/css/card.css" rel="stylesheet"/>
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
      .btn-comprar{
      	background: #71c358;
	    color: #fff;
	    font-weight: 500;
	    border: 0;
	    padding: 14px 30px;
	    margin: 0 auto;
	    border-bottom: 5px solid #50b232;
	    border-radius: 6px;
	    font-size: 15px;
	    width: 100%;
      }
      .btn-comprar:hover{
      	color:#fff;
      }
      .compra-segura {
		    width: 275px;
		    margin: 0 auto;
		    margin-top: 6px;
		    margin-bottom: 6px;
		}

		.text-compra-segura {
		    margin-top: 10px;
		    color: #6f6f6f;
		    font-size: 11px;
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
  	<div class="col-md-12 mb-3"> 
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

  	<div class="col-md-6">
      <h4 class="mb-3">Dados Cliente</h4>
      <form class="needs-validation" novalidate>
      	<div class="painel">
	        <div class="row">
	          <div class="col-md-12 mb-3">
	            <label for="nomeCliente">Nome</label>
	            <input autofocus="true" type="text" class="form-control" id="nomeCliente" placeholder="Nome completo" tabindex="1">
	            <div class="invalid-feedback">
	              Campo nome obrigatório
	            </div>
	          </div>
	          <div class="col-md-12 mb-3">
	            <label for="emailCliente">E-mail</label>
	            <input type="text" class="form-control" id="emailCliente" placeholder="E-mail" tabindex="2">
	            <div class="invalid-feedback">
	              E-mail inválido
	            </div>
	          </div>
	        </div>

	        <div class="row">
	          <div class="col-md-6 mb-3">
	            <label for="cpfCliente">CPF</label>
	            <input type="text" class="form-control" id="cpfCliente" placeholder="000.000.000-00" tabindex="3">
	            <div class="invalid-feedback">
	              CPF inválido
	            </div>
	          </div>
	          <div class="col-md-6 mb-3">
	            <label for="telefoneCliente">Telefone com DDD</label>
	            <input type="text" class="form-control" id="telefoneCliente" placeholder="(xx) xxxxx-xxxx" tabindex="4">
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
		            <input type="text" class="form-control" id="cepCliente" placeholder="00000-000" tabindex="5">
		            <div class="invalid-feedback">
		              Cep obrigatório
		            </div>
		        </div>
		        <div class="col-md-6">
		        </div>
		        <div class="col-md-12 mb-3">
		            <label for="ruaCliente">Endereço</label>
		            <input type="text" class="form-control" id="ruaCliente" placeholder="Endereço" tabindex="6" disabled>
		            <div class="invalid-feedback">
		              Endereço obrigatório
		            </div>
		        </div>
		        <div class="col-md-6 mb-3">
		            <label for="numeroEnderecoCliente">Número:</label>
		            <input type="text" class="form-control" id="numeroEnderecoCliente" placeholder="" tabindex="7" disabled>
		            <div class="invalid-feedback">
		              Número Residência obrigatório
		            </div>
		        </div>
		        <div class="col-md-6 mb-3">
		            <label for="complementoEnderecoCliente">Complemento</label>
		            <input type="text" class="form-control" id="complementoEnderecoCliente" tabindex="8" disabled>
		            <div class="invalid-feedback">
		              Complemento obrigatório
		            </div>
		        </div>
		        <div class="col-md-12 mb-3">
		            <label for="bairroCliente">Bairro</label>
		            <input type="text" class="form-control" id="bairroCliente" tabindex="9" disabled>
		            <div class="invalid-feedback">
		              Bairro obrigatório
		            </div>
		        </div>
	        
	          <div class="col-md-6 mb-3">
	            <label for="cidadeCliente">Cidade</label>
	            <input type="text" class="form-control" id="cidadeCliente" tabindex="10" disabled>
	            <div class="invalid-feedback">
	              Cidade obrigatório
	            </div>
	          </div>
	          <div class="col-md-6 mb-3">
	            <label for="estadoCliente">Estado</label>
	            <select class="form-control" id="estadoCliente" disabled="true">
                    <option value="" selected="selected">--</option>
                    <option value="AC" >Acre</option>
					<option value="AL" >Alagoas</option>
					<option value="AP" >Amapá</option>
					<option value="AM" >Amazonas</option>
					<option value="BA" >Bahia</option>
					<option value="CE" >Ceará</option>
					<option value="DF" >Distrito Federal</option>
					<option value="ES" >Espírito Santo</option>
					<option value="GO" >Goiás</option>
					<option value="MA" >Maranhão</option>
					<option value="MT" >Mato Grosso</option>
					<option value="MS" >Mato Grosso do Sul</option>
					<option value="MG" >Minas Gerais</option>
					<option value="PA" >Pará</option>
					<option value="PB" >Paraíba</option>
					<option value="PR" >Paraná</option>
					<option value="PE" >Pernambuco</option>
					<option value="PI" >Piauí</option>
					<option value="RJ" >Rio de Janeiro</option>
					<option value="RN" >Rio Grande do Norte</option>
					<option value="RS" >Rio Grande do Sul</option>
					<option value="RO" >Rondônia</option>
					<option value="RR" >Roraima</option>
					<option value="SC" >Santa Catarina</option>
					<option value="SP" >São Paulo</option>
					<option value="SE" >Sergipe</option>
					<option value="TO" >Tocantins</option> 
				</select>

		        <div class="invalid-feedback">
		            Estado obrigatório
		        </div>
	          </div>
	        </div>
        </div>
    </div>
    <div class="col-md-6 mb-4">
      <h4 class="mb-3">Pagamento</h4>
      <div class="painel">
      	  <!--FORMA DE PAGAMENTO-->
	      <div class="row text-center">
	      	<div class="col-md-12 mb-3">
		        
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
			    <div class="col-md-12">
			    	<div id="form-cartao-credito">
			    		<div class="row">
					      	<div class="col-md-12 mb-3">
						      	<div class="card-wrapper"></div>
						    </div>
					      	<div class="col-md-12 mb-3">
					            <label for="cc-numero">Número do cartão</label>
					            <input type="tel" name="number" class="form-control" id="cc-numero" placeholder="Digite somente os números" onselectstart="return false" oncopy="return false" oncut="return false" ondrag="return false" ondrop="return false" autocomplete="off" tabindex="12">
					            <div class="invalid-feedback">
					              Campo número cartão obrigatório
					            </div>
					        </div>
					        <div class="col-md-12 mb-3">
					            <label for="cc-nome">Nome do titular</label>
					            <input type="tel" name="name" name="number" class="form-control" id="cc-nome" placeholder="Digite somente os números" onselectstart="return false" oncopy="return false" oncut="return false" ondrag="return false" ondrop="return false" autocomplete="off" tabindex="13">
					            <div class="invalid-feedback">
					              Campo nome obrigatório
					            </div>
					        </div>

					        <!---->
					        <div class="col-md-6 mb-3">
					           	<label for="cc-expiracao">Data validade</label>
					            <input type="tel" name="expiry" class="form-control" id="cc-expiracao" placeholder="Mês / Ano" onselectstart="return false" oncopy="return false" oncut="return false" ondrag="return false" ondrop="return false" autocomplete="off" tabindex="14">
					            <div class="invalid-feedback">
					              Campo data validade obrigatório
					            </div>
					        </div>
					     	<div class="col-md-6 mb-3">
					           	<label for="cc-cvv">Código segurança</label>
					            <input type="tel" name="cvv" class="form-control" id="cc-cvv" placeholder="CVV" onselectstart="return false" oncopy="return false" oncut="return false" ondrag="return false" ondrop="return false" autocomplete="off" tabindex="15">
					            <div class="invalid-feedback">
					              Campo CVV obrigatório
					            </div>
					        </div>
			        		
			        		<div class="col-md-12 text-center mb-3">
	                            <button class="btn btn-comprar" id="btn-comprar" type="button">
	                                Comprar agora
	                            </button>
	                           
	                            <p class="text-compra-segura">Ambiente criptografado e 100% seguro.</p>
	                            <img src="<?=base_url()?>/assets/img/compra-segura.png" alt="" class="img-fluid compra-segura">
	                        </div>
				        </div>
				    </div>
			    </div>
	        </div>
	        <div class="row hidden" id="dados-boleto">
			Boleto
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
<script src="<?=base_url()?>assets/js/block-ui.js"></script>
<script src="<?=base_url()?>assets/js/loading.js"></script>
<script src="<?=base_url()?>assets/js/card.js"></script>
<script src="<?=base_url()?>assets/js/form-validation.js"></script>
<script src="<?=base_url()?>assets/js/jquery.mask.min.js"></script>
<script type="text/javascript" src="https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js">
</script> 
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script>

$(() => {


	$("#cepCliente").on("change", function(){
		let cep = $(this).val();
		viaCep(cep);
	});

	$("#btn-comprar").on("click", function(){
		pagamento.finalizarCompra();
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
			contexto.cardNumber = $(this).val().replace(" ","").replace(" ","").replace(" ","").replace(" ","");
			contexto.getBrand();
		});
		$(document).on("change","#cc-expiracao", function(){
			contexto.cardExpire = $(this).val().replace(" ","").replace(" ","");
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
            	if(response.error){
            		erroModal(['Dados inválidos','Verifique os dados do cartão novamente!']);
            		console.log(response);
            		return false;
            	}
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
	            if(response){
	            	$("#cc-numero").removeClass("is-invalid").addClass("is-valid");
	            }
	        },
		    error: function(response) {
		    	if(response.error){
		    		$("#cc-numero").addClass("is-invalid");
		    		$("#cc-numero").focus();
		    	}
		    	console.log("ERRO");
		        console.log(response);
		    }
	    });
	}

	montarModeloPagamento(){

		let contexto = this;

		let pagamento = {

			tipServicoPagamento: 1,
			tipPagamento: "ASSINATURA",
			plan_id: $("#planoId").val(),
			card_number: contexto.cardNumber,
			card_cvv: contexto.cvv,
			card_expiration_month: contexto.cardExpire.split('/')[0],
			card_expiration_year: contexto.cardExpire.split('/')[1],
			card_holder_name: $("#cc-nome").val(),
			card_holder_birth: "",
			card_holder_phone: "",
			token: contexto.cardToken
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

		let contexto = this;

		setTimeout(function(){

			let modeloEnvio = contexto.montarModeloPagamento();

			setTimeout(function(){
				$.ajax({
				url: "<?=base_url()?>index.php/checkout/processarPagamento",
				method: "POST",
				data: { 
					modelo: modeloEnvio
				},
				beforeSend: function(){
					loading();
				},
				success: function(res){
					alert("Pagamento processado com sucesso!");
					console.log(res);
				},
				error: function(res){
					console.log(res);
					erroModal([res]);
				},
				complete: function(){
					loaded();
				}
			});
			},50);


		},100);

		
	}
}

class ValidateInput{

	static isEmail(email){
		let pattern = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return pattern.test(email);
	}

	static isCpf(cpf){
		let pattern = /^([0-9]{3}\.?[0-9]{3}\.?[0-9]{3}\-?[0-9]{2}|[0-9]{2}\.?[0-9]{3}\.?[0-9]{3}\/?[0-9]{4}\-?[0-9]{2})$/;
 		return pattern.test(cpf);
	}

	static isCpfValido(strCPF){
		var Soma;
		var Resto;
		var i;
		Soma = 0;
		if (strCPF == "00000000000") return false;
		     


		for (i=1; i<=9; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
		  Resto = (Soma * 10) % 11;
		   
		if ((Resto == 10) || (Resto == 11))  Resto = 0;
		if (Resto != parseInt(strCPF.substring(9, 10)) ) return false;
		   
		  Soma = 0;
		for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
		    Resto = (Soma * 10) % 11;
		   
		if ((Resto == 10) || (Resto == 11))  Resto = 0;
		if (Resto != parseInt(strCPF.substring(10, 11) ) ) return false;
		return true;
	}

}

class Pagamentos{

	constructor(objetoConfiguracoes){
		this.configuracoes = objetoConfiguracoes;
		this.init();
	}

	init(){

		this.inicializaMascaras();

		this.inicializaCard();

		this.eventosValidacao();

		if(this.configuracoes.servicosPagamento.includes(EnumServicos.PAGSEGURO)){

			this.tipServico = "PAGSEGURO";
			this.InstanciaPagseguro = new PagSeguro('<?=$sessionIdPagseguro;?>');
		}else{
			this.tipServico = "IUGU";
		}

	}

	inicializaCard(){
		this.card =  new Card({
            form: document.querySelector('#form-cartao-credito'),
            container: '.card-wrapper',
            placeholders: {
            	name: "NOME CARTÃO"
            }
        });
	}

	inicializaMascaras(){
		$("#cepCliente").mask("99999-999");
		$("#cpfCliente").mask("999.999.999-99");
		$("#telefoneCliente").mask("(99) 99999-9999");

		$("#cc-cvv").mask("999");
	}

	getConfiguracoes(){
		return this.configuracoes;
	}

	validar(){
		if(!$("#nomeCliente").val()){
			$("#nomeCliente").addClass("is-invalid");
			$("#nomeCliente").focus();
			return false;
		}

		if(!$("#emailCliente").val() || !ValidateInput.isEmail($("#emailCliente").val())){
			$("#emailCliente").addClass("is-invalid");
			$("#emailCliente").focus();
			return false;
		}

		if(!$("#cpfCliente").val() || !ValidateInput.isCpfValido($("#cpfCliente").val().replace(".","").replace(".","").replace(".","").replace("-",""))){
			$("#cpfCliente").addClass("is-invalid");
			$("#cpfCliente").focus();
			return false;
		}

		if(!$("#telefoneCliente").val()){
			$("#telefoneCliente").addClass("is-invalid");
			$("#telefoneCliente").focus();
			return false;
		}

		if(!$("#cepCliente").val()){
			$("#cepCliente").addClass("is-invalid");
			$("#cepCliente").focus();
			return false;
		}

		if(!$("#ruaCliente").val()){
			$("#ruaCliente").addClass("is-invalid");
			$("#ruaCliente").focus();
			return false;
		}

		if(!$("#numeroEnderecoCliente").val()){
			$("#numeroEnderecoCliente").addClass("is-invalid");
			$("#numeroEnderecoCliente").focus();
			return false;
		}

		if(!$("#bairroCliente").val()){
			$("#bairroCliente").addClass("is-invalid");
			$("#bairroCliente").focus();
			return false;
		}

		if(!$("#cidadeCliente").val()){
			$("#cidadeCliente").addClass("is-invalid");
			$("#cidadeCliente").focus();
			return false;
		}

		if(!$("#estadoCliente").val()){
			$("#estadoCliente").addClass("is-invalid");
			$("#estadoCliente").focus();
			return false;
		}

		//catao
		if(!$("#cc-numero").val()){
			$("#cc-numero").addClass("is-invalid");
			$("#cc-numero").focus();
			return false;
		}

		if(!$("#cc-nome").val()){
			$("#cc-nome").addClass("is-invalid");
			$("#cc-nome").focus();
			return false;
		}

		if(!$("#cc-expiracao").val()){
			$("#cc-expiracao").addClass("is-invalid");
			$("#cc-expiracao").focus();
			return false;
		}

		if(!$("#cc-cvv").val()){
			$("#cc-cvv").addClass("is-invalid");
			$("#cc-cvv").focus();
			return false;
		}

		return true;
	}

	eventosValidacao(){

		let contexto = this;

		$("#nomeCliente").on("change", function(){

			let el = $(this);
			if(!el.val()) {
				el.addClass("is-invalid");
				el.focus();
			} else {
				el.removeClass("is-invalid").addClass("is-valid")
			}

		});

		$("#emailCliente").on("change", function(){

			let el = $(this);
			if(!el.val() || ValidateInput.isEmail(el.val()) == false) {
				el.addClass("is-invalid");
				el.focus();
			} else {
				el.removeClass("is-invalid").addClass("is-valid")
			}

		});

		$("#cpfCliente").on("change", function(){

			let el = $(this);
			if(!el.val() || !ValidateInput.isCpfValido(el.val().replace(".","").replace(".","").replace("-","")) || !ValidateInput.isCpf(el.val())) {
				el.addClass("is-invalid");
				el.focus();
			} else {
				el.removeClass("is-invalid").addClass("is-valid")
			}

		});

		$("#telefoneCliente").on("change", function(){

			let el = $(this);
			if(!el.val()) {
				el.addClass("is-invalid");
				el.focus();
			} else {
				el.removeClass("is-invalid").addClass("is-valid")
			}

		});

		//validar endereço

		$("#cepCliente").on("change", function(){

			let el = $(this);
			if(!el.val()) {
				el.addClass("is-invalid");
				el.focus();
			} else {
				el.removeClass("is-invalid").addClass("is-valid")
			}

		});

		$("#ruaCliente").on("change", function(){

			let el = $(this);
			if(!el.val()) {
				el.addClass("is-invalid");
				el.focus();
			} else {
				el.removeClass("is-invalid").addClass("is-valid")
			}

		});

		$("#numeroEnderecoCliente").on("change", function(){

			let el = $(this);
			if(!el.val()) {
				el.addClass("is-invalid");
				el.focus();
			} else {
				el.removeClass("is-invalid").addClass("is-valid")
			}

		});

		$("#bairroCliente").on("change", function(){

			let el = $(this);
			if(!el.val()) {
				el.addClass("is-invalid");
				el.focus();
			} else {
				el.removeClass("is-invalid").addClass("is-valid")
			}

		});

		$("#cidadeCliente").on("change", function(){

			let el = $(this);
			if(!el.val()) {
				el.addClass("is-invalid");
				el.focus();
			} else {
				el.removeClass("is-invalid").addClass("is-valid")
			}

		});

		$("#estadoCliente").on("change", function(){

			let el = $(this);
			if(!el.val()) {
				el.addClass("is-invalid");
				el.focus();
			} else {
				el.removeClass("is-invalid").addClass("is-valid")
			}

		});

		//cartao 
		$("#cc-numero").on("change", function(){

			let el = $(this);
			if(!el.val()) {
				el.addClass("is-invalid");
				el.focus();
			} else {
				el.removeClass("is-invalid").addClass("is-valid")
			}

		});

		$("#cc-nome").on("change", function(){

			let el = $(this);
			if(!el.val()) {
				el.addClass("is-invalid");
				el.focus();
			} else {
				el.removeClass("is-invalid").addClass("is-valid")
			}

		});

		$("#cc-expiracao").on("change", function(){

			let el = $(this);
			if(!el.val()) {
				el.addClass("is-invalid");
				el.focus();
			} else {
				el.removeClass("is-invalid").addClass("is-valid")
			}

		});

		$("#cc-cvv").on("change", function(){

			let el = $(this);
			if(!el.val()) {
				el.addClass("is-invalid");
				el.focus();
			} else {
				el.removeClass("is-invalid").addClass("is-valid")
			}

		});
	}

	finalizarCompra(){

		if(this.validar()){


			switch(this.tipServico){
				case "PAGSEGURO":
					this.InstanciaPagseguro.processarPagamento();
				break;
				default:

				break;
			}
		}

	}
}





const EnumServicos = {
	PAGSEGURO: 1,
	CIELO: 2
};

const pagamento = new Pagamentos(<?=json_encode($objetoConfiguracoes);?>);

const viaCep = (cep) => {

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
			$("#bairroCliente, #estadoCliente, #cidadeCliente, #ruaCliente").trigger('change');
		}

	},'json');

}

const erroModal = (arrMensagens) => {

	let htmlMensagens = 'Ocorreram alguns erros </br>';

	arrMensagens.forEach((x) => {
		htmlMensagens+=" "+x+" </br>";
	});

	Swal.fire({
	  title: 'Oops!',
	  //text: 'Do you want to continue',
	  type: 'error',
	  html: htmlMensagens,
	  confirmButtonText: 'Ok'
	})

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
