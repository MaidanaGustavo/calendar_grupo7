<?php
  require('connect.php'); // Pega o arquivo de conexao 
    
  $login=$_POST['login'];	//Pegando dados passados por AJAX
  $senha=$_POST['senha'];
  $scodif = md5($senha);
  
  //Consulta no banco de dados
  $sql = mysqli_query("SELECT * FROM usuario WHERE email = '$login' and senha = '$scodif'");
  $res=count($sql);
	if ($res > 0){
		echo 1;	//Responde sucesso
		if(!isset($_SESSION)) 	//verifica se há sessão aberta
			session_start();		//Inicia seção
		//Abrindo seções
		$_SESSION['id']=$res['id']; 		
		$_SESSION['user']=$res['nome'];
		$_SESSION['email']=$res['email'];	
		
	}else{
		echo 0;	//Se a consulta não retornar nada é porque as credenciais estão erradas	
	}
?>