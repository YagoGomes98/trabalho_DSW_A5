<?php
    $action = "inserir";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shows</title>
    <link rel="stylesheet" type="text/css" href="estilo.css" >
</head>
<body>

    <?php  require_once "menu.php"; ?>

    <h1>Cronogramas</h1>

    <form method="POST" action="salvarCronogramas.php?<?php echo $action; ?>">
        <label for="txtNome">Nome:</label>
        <input type="text" name="txtNome" required />
        <br>
        <label for="Data">Data:</label> 
        <input type="date" name="Data" required /> 
        <br>
        <label for="txtLugar">Local:</label> 
        <input type="text" name="txtLugar" required /> 
        <br>
        <input type="submit" value="Salvar" />
        <input type="reset" value="Limpar" />
    </form>

    <hr>

    <table id="tbl_cronogramas">
        <tr>
            
            <th>Nome</th>
            <th>Data</th> 
            <th>Local</th>
        </tr>

        <?php
            include_once 'model/clsConexao.php';
            $query = "SELECT * FROM cronogramas";
            $result = Conexao::consultar( $query );

            while( $cat = mysqli_fetch_array($result)){
                echo '<tr>'; 
                
                echo '    <td>'.$cat['nome'].'</td>';
                echo '    <td>'.$cat['dat']. '</td>'; 
                echo '    <td>'.$cat['lugar']. '</td>'; 
                echo '</tr>';
            }
        ?>
        
    </table>


    
</body>
</html>
