<?php

class CronogramaDAO{

    public static function getCategorias(){
        $query = "SELECT id, nome, dat, lugar FROM categorias ORDER BY nome";
        $result = Conexao::consultar($query);
        $lista = new ArrayObject();

        while( list($cod, $nome )= mysqli_fetch_row($result)){

                $cat = new Cronograma();
                $cat->id = $cod;
                $cat->nome = $nome;
                $cat->dat= $dat; 
                $cat->lugar= $lugar;

                $lista->append( $cat );
        }
        return $lista;
    }
    

}