<?php
    if(isset($_GET['erro'])){
    } 
    echo "
    <html>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Document</title>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM' crossorigin='anonymous'>
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js' integrity='sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz' crossorigin='anonymous'></script>
        </head>
        <form method='post'style='font-size: 20px;'> 
            <button type='submit' name='btnVoltar' class='btn btn-light'>Voltar</button>
        </form>
        <form action='inserirUsuario.php' style=' margin: 25%; margin-top: 10%;'>
                <div class='mb-3'>
                    <label for='inputNome' class='form-label'>Nome</label>
                    <input type='text' name='txtNome' class='form-control' id='inputNome'>
                </div>
                <div class='mb-3'>
                    <label for='inputEmail' class='form-label'>Email</label>
                    <input type='text' name='iptEmail' class='form-control' id='inputEmail' required>
                </div>
                <div class='mb-3'>
                    <label for='inputSenha' class='form-label'>Senha</label>
                    <input type='password' name='iptSenha' class='form-control' id='inputSenha' required>
                </div>
                    <button type='submit' class='btn btn-dark'>Cadastrar</button>
        </form>

    </html>
    ";



    if(isset($_POST['btnVoltar'])) {
        header("Location:/La3/index.php");
    }

    if(isset($_POST['btnLogin'])) {
        header("Location:clientes.php");
    }

?>