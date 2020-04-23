<?php
	/*
		Aqui é muito importante, aqui se faz a conexão ao seu BD 

	*/
	define('MYSQL_HOST','localhost'); 
	define('MYSQL_USER','root'); // Deve substituir pelo SEU USER
	define('MYSQL_PASSWORD','password'); // Colocar a SUA SENHA
	define('MYSQL_DB_NAME','PersonalCalendar'); // Nome do banco 

	try{
		$PDO = new PDO('mysql:host='.MYSQL_HOST.';dbname='.MYSQL_DB_NAME,MYSQL_USER,MYSQL_PASSWORD); // Faz a conexao 
	}catch(PDOException $e){ // Caso a conexao nao seja bem sucedida, exibe a mensagem de erro. 
		echo "Erro ao conectar com o MySQL". $e->getMessage();
	}	
?>