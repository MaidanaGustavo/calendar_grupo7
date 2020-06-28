<?php
//Incluir a conexão com banco de dados
include_once('conexao.php');

extract($_POST);

$usuario = $palavra;

//Pesquisar no banco de dados nome do usuario referente a palavra digitada
$result_user = "SELECT * FROM usuario WHERE usuario = '$usuario'";
$resultado_user = mysqli_query($conn, $result_user);
$rows = $resultado_user->num_rows;

if(($resultado_user) AND ($rows != 0 )){
	echo "<p>Usuário já existe!</p>";
}else{
	echo "<p>Usuário OK!</p>";
}
