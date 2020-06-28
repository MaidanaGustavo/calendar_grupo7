$(function () {
  //Verifica existência do user
  $("#user").keyup(function () {
    //Recuperar o valor do campo
    var user = $(this).val();

    //Verificar se há algo digitado
    if (user != "") {
      var dados = {
        palavra: user,
      };
      $.post("proc_pesq_user.php", dados, function (retorna) {
        //Mostra dentro da ul se existe ou não
        $(".resultado").html(retorna);
      });
    }
  });

  $("#email").keyup(function () {
    //Recuperar o valor do campo
    var user = $(this).val();

    //Verificar se há algo digitado
    if (user != "") {
      var dados = {
        palavra: user,
      };
      $.post("proc_pesq_email.php", dados, function (retorna) {
        //Mostra dentro da ul se existe ou não
        $(".emailunico").html(retorna);
      });
    }
  });

  //verifica se as senhas são iguais
  $("#confirma").keyup(function () {
    console.log(78);
    var confirma = $(this).val();
    var senha = $("#senha").val();
    if (confirma == senha) {
      $(".senhaErrada").html("<p>Senhas OK!</p>");
    }
    if (senha != confirma) {
      $(".senhaErrada").html("<p>Senhas não são iguais!</p>");
    }
  });

  //Cadastra o usuário quando submete
  $("form").submit(function () {
    var valores = $("#form").serializeArray();
    $.ajax({
      method: "POST",
      data: valores,
      url: "processa.php",
    });
  });
});
