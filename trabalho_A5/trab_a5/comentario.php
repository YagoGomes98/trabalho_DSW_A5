<!doctype html>
<html>
<head>
    <title>Fórum</title>
    <meta charset="utf-8">
   
</head>
<body> 

  
<?php  require_once "menu.php"; ?>
   <form name="comment" method="post" action="salvarComentario.php">
   Nome: <input type="text" name="nome" /> <br>
   E-Mail: <input type="text" name="email" /> <br>
   Comentário: <textarea name = "comentario"></textarea> <br> 
   <input type="submit" name="Salvar" value="Enviar comentário"  />
   
   
   

</body>
</html>
