<?php
header("Content-Type: text/html; charset=UTF-8"); // Caracteres 
if(isset($_POST['user_name'])){ // Verifica se não está vazio o user
	include('../backend/connect.php'); // Inclui o código de conectar ao BD 
	$usuario = $_POST['user_name']; // Pega o dado do input user
	$consulta = "SELECT * FROM usuario WHERE userName = '".$usuario."'"; // Monta a query com o select
	$sql = $PDO->query($consulta); // Prepara a query
	$rows = $sql->fetchAll(); // Executa a query
	$contas = $sql->rowCount(); // Conta as rows
	$numeros = $contas; // Adiciona o valor na variavel

	if($numeros>0){ // Verifica se o numero de rows for maior que 0(Ou seja se o usuario já existe no BD) 
		echo "Usuário já existe"; //response
	}else{ // Caso nao exista
		echo "Usuário válido"; // response
	}
}

?>