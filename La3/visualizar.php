<?php
    if(isset($_GET['erro'])){
    } 

    $SERVIDOR  = 'localhost';
    $USUARIO   = 'Pedro';
    $SENHA     = '06618334';
    $BANCO     = 'test';


    $con = new mysqli ($SERVIDOR,$USUARIO,$SENHA,$BANCO);   

    if ($con -> connect_error){
        echo "Erro ao conectar com a base de dados";
    }
    else {
        $id = $_GET['idCliente'];
        echo "        
        <form method='post'style='font-size: 20px;'> 
            <button type='submit' name='btnVoltar' class='btn btn-light'>Voltar</button>
        </form>";
        if(isset($_POST['btnVoltar'])) {
            header("Location: /La3/index.php");
        }
        $sql = "select * from cadastro where id = ". $id;
            $ret = $con->query($sql);
            while ($registro = $ret->fetch_assoc()){
                echo "<br>";
                echo "
                <html>
                <head>
                    <meta charset='UTF-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <title>Document</title>
                    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM' crossorigin='anonymous'>
                    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js' integrity='sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz' crossorigin='anonymous'></script>
                </head>
                    <hr>
                    <div style='display: flex; justify-content: center;'>
                        <h4>Cliente</h4>
                            <ul>
                                <li>Codigo: ". $registro['id'],"</li>
                                <li> Nome: ". $registro['nome'],"</li>
                                <li> Email: ". $registro['email'],"</li>
                                <li> Data de cadastro: ". $registro['dataCad'],"</li>
                            </ul>     
                    </div> 
                </html> 
                ";
            }
        $con->Close();
    }

?>


