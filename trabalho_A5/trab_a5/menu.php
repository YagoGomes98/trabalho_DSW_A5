<div id="menu">
    <a href="index.php"><button>Início</button></a>
    <a href="cronogramas.php"><button>Shows</button></a>
    <a href="comentario.php"><button>Fórum</button></a>
    
    
    <?php
        if( session_status() != PHP_SESSION_ACTIVE ){
            session_start();
        }

        if(  isset( $_SESSION['logado']) && $_SESSION['logado']  ){
            echo '<a href="cronogramas.php"><button>Management</button></a>';

            echo "Olá ". $_SESSION['nome_usuario']; 
            echo ' <a href="deslogar.php"><button>Sair</button></a> ';
        }else{
            echo ' <a href="login.php"><button>Login</button></a> ';
        }

    ?>


    
</div>