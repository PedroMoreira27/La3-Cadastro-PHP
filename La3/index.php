<?php
    echo "
    <html>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Document</title>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM' crossorigin='anonymous'>
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js' integrity='sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz' crossorigin='anonymous'></script>
    </head>
        <form method='post'>
            <div style='margin: 43%; margin-top: 10%; gap: 20px;'>
                <button type='submit' name='btnCadastro' class='btn btn-dark'>Cadastrar</button>
                <button type='submit' name='btnEntrar' class='btn btn-dark'>Entrar</button>
            </div>    
        </form>    
    </html>    
    ";
    if(isset($_POST['btnCadastro'])) {
        header("Location: cadastro.php");
    }
    if(isset($_POST['btnEntrar'])) {
        header("Location: clientes.php");
    }
?>