<?php include "clsConexaoComentario.php"; ?>

<?php 

	$nome = $_POST['nome'];
	$email=$_POST ['email'];
	$comentario=$_POST ['comentario']; 
	
	?> 
	
<?php  

	$insert="INSERT INTO comentarios (nome, email, comentario) VALUES ('$nome', '$email', '$comentario')"; 
	$query= mysqli_query($conexao,$insert); 
	echo "<center><h1>Seu comentário foi enviado!</h1></center>;" 
	
	
	?> 
	<div id="menu">
	<a href="index.php"><button>Voltar</button></a> 
	</div>