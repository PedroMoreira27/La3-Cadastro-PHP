<?php
    $SERVIDOR  = 'localhost';
    $USUARIO   = 'Pedro';
    $SENHA     = '06618334';
    $BANCO     = 'test';

    session_start();

    $nome = $_SESSION['nome'];

    $con = new mysqli ($SERVIDOR,$USUARIO,$SENHA,$BANCO);   

    if ($con -> connect_error){   
        echo "Erro ao conectar com a base de dados";
    }else if($_SESSION['token'] =! "ABCDEF"){
        header("Location:cadastro.php");
    }
        echo "<h3>A conexão com o banco de dados foi realizada</h3>";
        
        $nome = $_SESSION['nome'];
        $email = $_SESSION['email'];
        echo "
          <h1>Pagina do sistema</h1>
          <hr />
          <h3>Voce esta conectado como: $nome";

    $con->Close();
    
?>    