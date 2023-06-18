<?php
    $SERVIDOR  = 'localhost';
    $USUARIO   = 'Pedro';
    $SENHA     = '06618334';
    $BANCO     = 'test';

    $email = $_GET['iptEmail'];
    $senha = $_GET['iptSenha'];
    $voltar = true;

    

    $con = new mysqli ($SERVIDOR,$USUARIO,$SENHA,$BANCO);   
        
    $sql = "select * from test.cadastro";
    $ret = $con->query($sql);

    while ($registro = $ret -> fetch_assoc()){

    if($senha == $registro['senha'] && $email == $registro['email']) {
        $nome = $_GET['txtNome'];
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['token'] = "ABCDEF";
        $_SESSION['nome'] = $nome;
        header("Location: cadastro.php?");
        $voltar = false;


    }
    else{
        
    }

    }
    if($voltar == true){
    header("Location: entradaDados.php?erro=0");

    }
    
?>    