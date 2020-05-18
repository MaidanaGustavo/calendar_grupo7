$(document).ready(function() {
    console.log("chamou");
    $('.login').click(function() { //Ao submeter formulário
        var login = $('#user').val(); //Pega valor do campo email
        var senha = $('#senha').val(); //Pega valor do campo senha
        console.log("clicou");
        $.ajax({ //Função AJAX
            url: '../backend/valida.php', //Arquivo php
            type: 'POST', //Método de envio
            data: 'login=' + login + '&senha=' + senha, //Dados
            success: function(result) { //Sucesso no AJAX
                if (result == 1) {
                    location.href = 'calendario/index.html' //Redireciona
                    console.log("funciona");
                } else {
                    document.getElementById('mensagem').style.color = '#f7ff00'; // Muda cor
                    document.getElementById('mensagem').innerHTML = 'usuario ou e-mail inválido"></i>'; //Adicona o texto
                    console.log("lascou");
                }
            }
        })
    })
})