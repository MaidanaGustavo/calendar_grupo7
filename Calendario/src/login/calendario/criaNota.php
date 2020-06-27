<?php
    include "../../cadastro/conexao.php";

    $idUser=  $_COOKIE['usuarioid'];
    $texto = $_POST['texto'];
    $data = $_POST['data'];

    

    $query="INSERT INTO notas (idUsuario, texto, dataNota) VALUES ('$idUser', '$texto', '$data')";
    $criaNota=mysqli_query($conn,$query);

    if($criaNota){
        header('Location: index.php');
    }


?>