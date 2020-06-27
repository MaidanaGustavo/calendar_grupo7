<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
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
				
				}
			}
		?>

		<a href="../index.php">Pagina Inicial</a>
</body>
</html>