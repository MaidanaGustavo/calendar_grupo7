<?php 
   require 'Usuario.php';
  $array = array();
   session_start();
    

    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    
    if(isset($_POST['entrar'])){  
      if(isset($_SESSION['users'])){
        
        foreach($_SESSION['users'] as $use){
           if($use->user == $_POST['usuario'] && $use->senha == md5($_POST['password']) ){
             echo"ejtr09da";
              $_SESSION['user'] = $use;
              header('Location: ../calendario/index.php?nome='.$_SESSION['user']->nome);
            break; 
          }
        }
        echo "senha/usuario incorreto";
      }
     
  }
    
  if(isset($_POST['cadastrar'])){
    $cria = true;   
      if (!isset($_SESSION['users'])){
        $_SESSION['users'] = array();
      }
      
      foreach($_SESSION['users'] as $users){
        if($users->user == $_POST['user'] || $users->email == $_POST['email'] ){
           // echo "usuario ja cadastrado";
            $cria = false;
            header('Location: ../cadastro/falha.html');

        break;
        }
      }
      if($cria==true){
      $user = new Usuario($_POST['nome'],$_POST['email'],$_POST['user'],md5($_POST['senha']));
      array_push($_SESSION['users'],$user);
      //echo "usuario cadastrado";
      header('Location: ../cadastro/sucesso.html');
    }
  }else{
    echo 'deu nao pae';
  }
  
  
?>