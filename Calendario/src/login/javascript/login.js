function validar(){
	$('#login-box-label').submit(function(){ 	//Ao submeter formulário
		var login=$('#user').val();	//Pega valor do campo email
		var senha=$('#senha').val();	//Pega valor do campo senha
		$.ajax({			//Função AJAX
			url:"valida.php",			//Arquivo php
			type:"post",				//Método de envio
			data: "login="+login+"&senha="+senha,	//Dados
   			success: function (result){			//Sucesso no AJAX
                		if(result==1){						
                			location.href='calendario/index.html'	//Redireciona
                		}else{
                			document.getElementById('mensagem').style.color = '#f7ff00';  // Muda cor
		                    document.getElementById('mensagem').innerHTML = 'usuario ou e-mail inválido"></i>';	//Adicona o texto
                		}
            		}
		})
		return false;	//Evita que a página seja atualizada
	})
})