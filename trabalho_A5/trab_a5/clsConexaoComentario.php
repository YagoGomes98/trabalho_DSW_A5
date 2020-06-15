<?php 

	$host = "localhost"; 
	$user = "root"; 
	$pass = "";
	$banco = "comentarios"; 
	$conexao = mysqli_connect($host,$user,$pass);
	mysqli_select_db($conexao, $banco);
	
	?>