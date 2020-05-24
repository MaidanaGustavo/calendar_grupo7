
 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
 	<meta charset="UTF-8">
 	<title> Personal Calendar</title>
 	<link rel="stylesheet" href="css/style.css">
 	
 </head>
 <body onload="Renderizar()">
	<div class= "nomeUsuario">
		<?php echo "Bem vindo ".$_GET['nome'] ?>
	</div>
 	<div class="wrapper">
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
	 <?php echo $_SESSION['user'] ?>
	  
 	<script src="javascript/calendario.js"></script>
 </body>
 </html>