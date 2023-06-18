<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'lib/vendor/autoload.php';

    $nome = $_GET['txtNome'];
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
        $mail->Body    = 'URUBU DO PIX';
        $mail->AltBody = 'urubu do pix agradece';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
?>
