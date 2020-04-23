var senha1 = document.getElementById('senha'); // Pega a senha 
var senha2 = document.getElementById('senha-confirm'); // Pega a confirmação da senha
var val1=false;
var val2=false; /*       Validaçoes dos formularios */
var val3=false;
function validarSenha(){

	if(senha1.value != "" && senha2.value != "" ){ // Verifica se os campos não estão vazios
	if(senha1.value==senha2.value){ // Faz a comparação da senha e da confirmação
		val1=true; 
		document.getElementById('mensagem').innerHTML = 'Senhas iguais <i class="fas fa-check-circle"></i>'; // Adiciona o texto
		document.getElementById('mensagem').style.color = '#00f108'; // Muda a color 
				
	}else{
		document.getElementById('mensagem').style.color = '#f7ff00';  // Muda cor
		document.getElementById('mensagem').innerHTML = 'Senhas diferentes <i class="fas fa-times"></i>';	//Adicona o texto
		val1=false; 
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
                	if(data=='Usuário já existe'){ 
                		document.getElementById('resposta').style.color = '#f7ff00';
                		val2=false;
                		
                	}else{ 
                		val2=true;
                		document.getElementById('resposta').style.color = '#00f108';
                	}
            } 
        }); 
    });

   var email =$('#email');
   email.blur(function(){
   	$.ajax({
   		url: 'checa-email.php',
   		type: 'POST',
   		data: {"email": email.val()},
   		success: function(data){
   			document.getElementById('checa-email').innerHTML = data;
   			if(data=='Email já cadastrado'){ 
                		document.getElementById('checa-email').style.color = '#f7ff00';
                		val3=false;                		
                	}else{ 
                		val3=true;  
                		document.getElementById('checa-email').style.color = '#00f108';
                	}

   		}
   	});
   }); 


function checarFormulario(){
	 /* Verifica se todas as validacoes estao ok */
	if(val1==true&&val2==true&&val3==true){
		document.getElementById("enviar").disabled = false; //Se estiver ok ,permite o submit
		
	}else{
		document.getElementById("enviar").disabled = true; //Se nao desabilita o botao
	}
	}