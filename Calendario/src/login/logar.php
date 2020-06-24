<?php 
session_start();
include ('../cadastro/conexao.php');                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                


    if( (isset($_POST['usuario'])) && (isset($_POST['password']))){
        $usuario =  $_POST['usuario']; 
        $senha =  md5($_POST['password']);
        $resultado = "SELECT * FROM usuario WHERE usuario = '$usuario' && senha = '$senha' ";   
        $resultado_usuario = mysqli_query($conn,$resultado);
        $numeRows = $resultado_usuario->num_rows;
        if($numeRows>=1){         
            $_SESSION['usuarioid'] = $result['id'];
            $_SESSION['usuarioNome'] = $result['nome'];

            header("location: ../calendario/index.php");
        }else{
            $_SESSION['loginErro'] = "Usuario ou senha invalidos";
            header("location: naocadastrado.html");
        }  
}else{
    $_SESSION['loginErro'] = "Usuario ou senha invalidos";
    header("location: naocadastrado.html");
}

?>