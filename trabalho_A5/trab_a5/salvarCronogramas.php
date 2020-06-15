<?php

$nome = $_POST['txtNome'];
$dat = $_POST ['Data']; 
$lugar = $_POST ['txtLugar']; 

include "model/clsConexao.php";

if( isset( $_REQUEST['inserir']) ){
    $query = "INSERT INTO cronogramas (nome, dat, lugar) VALUES ( '$nome', '$dat', '$lugar' )";
    Conexao::executar( $query );
    header("Location: cronogramas.php");
}