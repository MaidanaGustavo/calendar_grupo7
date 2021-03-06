
 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
 	<meta charset="UTF-8">
	 <title> Personal Calendar</title>
 	<link rel="stylesheet" href="css/style.css">
	 <script src="https://kit.fontawesome.com/61f50ee882.js" crossorigin="anonymous"></script>
 </head>
 <body onload="Renderizar()">
	<div class= "nomeUsuario">
		<?php 
		
		$nome  = $_COOKIE['usuarioNome'];	
		if(isset($nome)){
		echo "Bem vindo ".$nome ;
		}
		?>
	</div>

 	<div class="wrapper">
	 <div class="logout">
	 <form action="../logout.php
	 ">
	 
	 <button>
	 <i class="fas fa-sign-out-alt"></i>	
	 Sair
		</button>
	 </form>
	 </div>
 		 <div class="calendar">
 		 	<div class="meses">
				<div class="voltar" onclick="moveDate('voltar')">
					<span>&#10094</span>
				</div>
				<div>
					<h2 id="mes"></h2>
					<p id="data_atual"></p>
				</div>
				<div class="proximo" onclick="moveDate('proximo')">
					<span>&#10095</span>
				</div>
 		 	</div>
 		 	<div class="semanas">
 		 		<div>Dom</div>
 		 		<div>Seg</div>
 		 		<div>Ter</div>
 		 		<div>Qua</div>
 		 		<div>Qui</div>
 		 		<div>Sex</div>
 		 		<div>Sab</div>
 		 	</div>
 		 	<div class="dias">
 		 		
 		 </div>
	 </div>

	 <div class="criarNota">
		<a href="./nota/nota.html"><i class="fas fa-plus"></i>Criar nota</a>
	 </div>
	 <div class="minhasNotas">
	 <a href="verNotas/minhasNotas.php"><i class="fas fa-eye"></i>Minhas notas</a>
	 </div>
	  <div class="notaHoje">
		<?php
			include '../../cadastro/conexao.php';
			$idUsuario = $_COOKIE['usuarioid'];
			$query1 = "SELECT  * FROM notas WHERE idUsuario = '$idUsuario'";
			$queryExecute = mysqli_query($conn,$query1);
			$row = $queryExecute->fetch_array(MYSQLI_NUM);
			$numeRows = $queryExecute->num_rows;
			if($numeRows>0){			
				$dataAtual = date('Y-m-d');
				while($linhas = $queryExecute->fetch_array()){
					$rows[] = $linhas;
				}
				
				foreach($rows as $linha){
					if($linha['dataNota'] == $dataAtual){
					echo '<div class="today" white-space: normal >'.$linha['texto'].'<br>'.
					$linha['dataNota'].'</div>';
				}
				}
			}
		?>
	  </div>
 	<script src="javascript/calendario.js"></script>
 </body>
 </html>