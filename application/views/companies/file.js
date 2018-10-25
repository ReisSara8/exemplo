	$("#cnpj").focusout(function(){
		$.ajax({
			url: '/pasta/cnpj.php?cnpj='+$("#cnpj").val(),
			dataType: 'json',
			success: function(resposta){
				if(resposta.status == "ERROR"){
					alert(resposta.message + "\nPlease, insert the values manually.");
					$("#post #nome").focus().select();
					return false;
				}
				
				$("#post #fantasy_name").val(resposta.nome);
				$("#post #phone").val(resposta.telefone);
				$("#post #email").val(resposta.email);
				$("#post #street").val(resposta.logradouro);
				$("#post #complement").val(resposta.complemento);
				$("#post #neigboorhood").val(resposta.bairro);
				$("#post #city").val(resposta.municipio);
				$("#post #state").val(resposta.uf);
				$("#post #cep").val(resposta.cep);
				$("#post #number").val(resposta.numero);
			}
		});
	});