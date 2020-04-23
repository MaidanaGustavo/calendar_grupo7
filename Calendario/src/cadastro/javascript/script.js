var senha1 = document.getElementById('senha'); // Pega a senha 
var senha2 = document.getElementById('senha-confirm'); // Pega a confirmação da senha
function validarSenha(){

	if(senha1.value != "" && senha2.value != "" ){ // Verifica se os campos não estão vazios
	if(senha1.value==senha2.value){ // Faz a comparação da senha e da confirmação
		document.getElementById("enviar").disabled = false; // Deixa  o botão Cadastrar habilitado
		document.getElementById('mensagem').innerHTML = 'Senhas iguais <i class="fas fa-check-circle"></i>'; // Adiciona o texto
		document.getElementById('mensagem').style.color = '#00f108'; // Muda a color 
				
	}else{
		document.getElementById('mensagem').style.color = '#f7ff00';  // Muda cor
		document.getElementById('mensagem').innerHTML = 'Senhas diferentes <i class="fas fa-times"></i>';	//Adicona o texto
		document.getElementById("enviar").disabled = true; //Desabilita o botão Cadastrar - para impedir o submit - já que as senhas estão divergentes  
	}
	}
}
//Validar se o usuario colocado no input já existe no Banco de dados(Utilizando AJAX) 
var user = $("#user"); //Pega o input user
        user.blur(function() { 
            $.ajax({ 
                url: 'usuario.php', //Caminho do arquivo php aonde será feito a validação
                type: 'POST', // Tipo de envio
                data:{"user_name" : user.val()},  // Seleciona o input
                success: function(data) { 
                	document.getElementById('resposta').innerHTML = data; // Coloca na div resposta a response da requisição
                	if(data=='Usuário já existe'){ // Se o usuario já existe muda a cor e desabilita o botao Cadastrar
                		document.getElementById('resposta').style.color = '#f7ff00';
                		document.getElementById("enviar").disabled = true;
                		
                	}else{ // Caso o usuario nao exista ainda, habilita o botao cadastrar e muda a cor.
                		document.getElementById("enviar").disabled = false; 
                		document.getElementById('resposta').style.color = '#00f108';
                	}
            } 
        }); 
    }); 
