<?php
  require('connect.php'); // Pega o arquivo de conexao 
    
  $password=md5($_POST['password']);	//Pegando dados passados por AJAX
  $user = $_POST['user'];
  
  //Consulta no banco de dados
  $sql = mysqli_query("UPDATE usuario set senha = '$password' where email = '$user'");
  $res=count($sql);
	if ($res > 0){
		echo 1;	//Responde sucesso
		//if(!isset($_SESSION)) 	//verifica se há sessão aberta
		//	session_start();		//Inicia seção
		//Abrindo seções
		//$_SESSION['id']=$res['id']; 		
		//$_SESSION['user']=$res['nome'];
		//$_SESSION['email']=$res['email'];	
		
	}else{
		echo 0;	//Se a consulta não retornar nada é porque as credenciais estão erradas	
	}
?>