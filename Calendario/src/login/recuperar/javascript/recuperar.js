$(document).ready(function() {
    console.log("chamou");
    $('.criar').click(function() { //Ao submeter formulário
        var password = $('#password').val(); //Pega valor do campo email
        var passwordconfirm = $('#passwordconfirm').val(); //Pega valor do campo senha
        console.log("clicou");
        if (password == passwordconfirm) {
            $.ajax({ //Função AJAX
                url: '../backend/mudasenha.php', //Arquivo php
                type: 'POST', //Método de envio
                data: 'password=' + password, //Dados
                success: function(result) { //Sucesso no AJAX
                    if (result == 1) {
                        location.href = 'calendario/index.html' //Redireciona
                        document.getElementById('mensagem').innerHTML = 'Modificado com sucesso"></i>';
                        console.log("funciona");
                    } else {
                        document.getElementById('mensagem').style.color = '#f7ff00'; // Muda cor
                        document.getElementById('mensagem').innerHTML = 'As senhas não são iguais"></i>'; //Adicona o texto
                        console.log("lascou");
                    }
                }
            })
        }
    })
})