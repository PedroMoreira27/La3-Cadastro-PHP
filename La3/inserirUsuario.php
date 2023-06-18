<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'lib/vendor/autoload.php';

    $SERVIDOR  = 'localhost';
    $USUARIO   = 'Pedro';
    $SENHA     = '06618334';
    $BANCO     = 'test';

    $nome = $_GET['txtNome'];
    $senha = $_GET['iptSenha'];
    $email = $_GET['iptEmail'];
    

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = '0c9da707902da0';
        $mail->Password = '46fb09b40c00a2';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

            
        $mail->setFrom('pedrogonmoreira@gmail.com', 'Pedro Moreira');
        $mail->addAddress($email, $nome); 

        //Conteudo email
        $mail->isHTML(true);                                  
        $mail->Subject = 'Cadastro Realizado';
        $mail->Body    = '<div style=" display: flex; justify-content: center; margin-top: 10px; font-size: 20px;";>
                            Seu cadastro foi Realizado
                          </div>  
                            
                            ';
        $mail->AltBody = 'Cadastro Realizado';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

    $con = new mysqli ($SERVIDOR,$USUARIO,$SENHA,$BANCO);   

    //teste de conexão
    if ($con -> connect_error){
        echo "Erro ao conectar com a base de dados";
    }else {
        echo "<h3>A conexão com o banco de dados foi realizada</h3>";

        $sql="INSERT INTO test.cadastro (nome,email,senha,dataCad) VALUES ('$nome','$email','$senha', NOW())";
        $ret = $con->query($sql);
        if ($ret == true){
            header("Location: cadastro.php?erro=0");
        }

        $con->Close();
    }
    
?> 