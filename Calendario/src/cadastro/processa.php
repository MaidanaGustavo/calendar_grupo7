<?php
    include_once("conexao.php");

    $nome=$_POST['nome'];
    $usuario=$_POST['user'];
    $email=$_POST['email'];
    $senha=md5($_POST['senha']);


    //echo "Nome: $nome <br>";
    //echo "Usuario: $usuario <br>";
    //echo "Email: $email <br>";
    //echo "Senha: $senha <br>";

    $result_usuarios="INSERT INTO usuario (nome, usuario, email,senha) VALUES ('$nome', '$usuario', '$email','$senha')";
    $resultado_usuario=mysqli_query($conn,$result_usuarios);

    if($resultado_usuario){
        header("location: sucesso.html");
    }
?>