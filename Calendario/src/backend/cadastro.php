<?php
require('connect.php'); // Pega o arquivo de conexao 
$nome = $_POST['nome'];                  
$sobrenome = $_POST['sobrenome'];       /*       Captura os dados do formulario              */ 
$email = $_POST['email'];
$user = $_POST['user'];
$senha = md5($_POST['senha']);   // Criptografa  a senha 
/*   Monta a query  */
$sql = "INSERT INTO usuario(nome,sobrenome,email,userName,senha)VALUES(:nome,:sobrenome,:email,:user,:senha)"; 
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':nome',$nome);
$stmt->bindParam(':sobrenome',$sobrenome);
$stmt->bindParam(':email',$email);
$stmt->bindParam(':user',$user);
$stmt->bindParam(':senha',$senha);

$result  = $stmt->execute(); //Executa a query 
if(! $result){    //Se caso der erro 
	var_dump($stmt->errorInfo());
	exit;
}

header('Location: ../cadastro/sucesso.html'); 
?>