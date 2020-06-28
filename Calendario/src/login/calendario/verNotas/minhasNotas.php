<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
	<script src="https://kit.fontawesome.com/61f50ee882.js" crossorigin="anonymous"></script>
    <title>Minhas notas</title>
</head>
<body>
<?php
			include '../../../cadastro/conexao.php';
			$idUsuario = $_COOKIE['usuarioid'];
			$query1 = "SELECT  * FROM notas WHERE idUsuario = '$idUsuario'";
			$queryExecute = mysqli_query($conn,$query1);
			$row = $queryExecute->fetch_array(MYSQLI_NUM);
			$numeRows = $queryExecute->num_rows;
			if($numeRows>0){			
				
				while($linhas = $queryExecute->fetch_array()){
					$rows[] = $linhas;
				}
				
				foreach($rows as $linha){
					echo '<div class="today" white-space: normal >'.$linha['texto'].'<br>'.
					$linha['dataNota'].'</div>';
					echo '<div class = "eliminar-today" > ';
					echo "<a href= 'deletaNotas.php?id=".$linha['id']."' >  <i class='fas fa-times'></i> Deletar </a>";
					echo "</div>";
				}
			}
		?>

		<button onClick = "Redirecionar()">Inicio</button>

		<script>
			function Redirecionar (){
				window.location.href = "../index.php";
			}
		</script>
</body>
</html>