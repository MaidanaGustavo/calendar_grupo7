	
<?php 
session_start(); 
session_destroy(); 
setcookie('usuarioNome', null, -1);
header("Location: login.html");

exit; 
?>
