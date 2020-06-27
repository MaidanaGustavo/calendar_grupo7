<?php 
session_start();
include ('../cadastro/conexao.php');                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                


    if( (isset($_POST['usuario'])) && (isset($_POST['password']))){
        $usuario =  $_POST['usuario']; 
        $senha =  md5($_POST['password']);
        $resultado = "SELECT * FROM usuario WHERE usuario = '$usuario' && senha = '$senha' ";   
        $resultado_usuario = mysqli_query($conn,$resultado);
        $row = mysqli_fetch_row($resultado_usuario);
        $numeRows = $resultado_usuario->num_rows;
        if($numeRows>=1){         
            $_SESSION['usuarioid'] = $row[0];
            $_SESSION['usuarioNome'] = $row[1];
            $usuarioNome = $_SESSION['usuarioNome'];
            setcookie('usuarioNome',$_SESSION['usuarioNome']);
            setcookie('usuarioid',$_SESSION['usuarioid']);
            $nome  = $_COOKIE['usuarioNome'];	
           header("location: calendario/index.php");
        }else{
            $_SESSION['loginErro'] = "Usuario ou senha invalidos";
            header("location: naocadastrado.html");
        }  
}else{
    $_SESSION['loginErro'] = "Usuario ou senha invalidos";
    header("location: naocadastrado.html");
}

?>