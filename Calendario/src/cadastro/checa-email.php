<?php
header("Content-Type: text/html; charset=UTF-8"); // Caracteres 
if(isset($_POST['email'])){
	include('../backend/connect.php'); 
	$email = $_POST['email'];
	$consulta = "SELECT * FROM usuario WHERE email = '".$email."'"; 
	$sql = $PDO->query($consulta); 
	$rows = $sql->fetchAll(); 
	$contas = $sql->rowCount();
	$numeros = $contas; 
	if($numeros>0){ 
		echo "Email já cadastrado"; 
	}else{ 
		echo "Email validado"; 
	}
}
?>