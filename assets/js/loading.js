function loading(msg){

	let mensagem = msg == undefined ? "Processando" : msg;

	$.blockUI({ 
		message: '<b style="margin-left:-4px;" class="text-success"><i class="fas fa-spin fa-spinner"></i>&nbsp;'+mensagem+"</b>",
		css: { 
			border:'none',
			padding: '10px',
			'border-radius': '5px'
		}		 
	}); 

}

function loaded(){
	$.unblockUI();
}