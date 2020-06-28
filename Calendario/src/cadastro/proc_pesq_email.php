<?php
//Incluir a conexão com banco de dados
include_once('conexao.php');

extract($_POST);

$email = $palavra;

//Pesquisar no banco de dados email do usuario referente a palavra digitada
$result_user = "SELECT * FROM usuario WHERE email = '$email'";
$resultado_user = mysqli_query($conn, $result_user);
$rows = $resultado_user->num_rows;

if(($resultado_user) AND ($rows != 0 )){
	echo "<p>E-mail já está sendo utilizado!</p>";
}else{
	echo "<p>E-mail OK!</p>";
}
