<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../assets/vendorautoload.php';

$mail = new PHPMailer(true);

try {
    //Configurações do servidor
    $mail->CharSet = 'UTF-8';
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.example.com';                     
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'user@example.com';                     
    $mail->Password   = 'secret';                               
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
    $mail->Port       = 465;                                    

    //Remetente e destinatário
    $mail->setFrom($email, $name);
    $mail->addAddress('contato@konsi.com.br', 'Contato Konsi');

    //Conteúdo do e-mail
    $mail->isHTML(true);                                  
    $mail->Subject = $subject;
    $mail->Body    = "<b>Contato - Konsi</b><br>".$message;
    $mail->AltBody = "Contato - Konsi\n".$message;

    $mail->send();

    $res['verify'] = true;

} catch (Exception $e) {

  $res['verify'] = false;

}

echo json_encode($res);

?>
