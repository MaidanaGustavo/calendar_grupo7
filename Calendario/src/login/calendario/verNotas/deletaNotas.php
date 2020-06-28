<?php
	include '../../../cadastro/conexao.php';
    $id = $_GET['id'];
    $query = "DELETE FROM notas WHERE id = '$id' ";
    $executa = mysqli_query($conn,$query);
 
    if($executa){
        header('Location: minhasNotas.php');
        echo $id;
    }

    


    


?>