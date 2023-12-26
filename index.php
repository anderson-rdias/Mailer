<?php

				require 'PHPMailerAutoload.php';



$mail = new PHPMailer;

                       
//$mail->SMTPDebug = 3;                 // Habilita modo debug na saída
$mail->isSMTP();                        // Setar o uso do SMTP
$mail->Host = 'email-ssl.com.br';  	// Servidor smtp 
$mail->SMTPAuth = true;                 // Habilita a autenticação do form
$mail->Username = 'teste@btmachado.com.br';       // Conta de e-mail que realizará o envio
$mail->Password = 'Locaweb@102030';       // Senha da conta de e-mail
//$mail->SMTPSecure = 'tls';            // Habilitar uso do TLS (plesk 11.5 ou utilizando contas do Gmail)
$mail->Port = 587;                       // Porta de conexão 
$mail->From = 'teste@btmachado.com.br'; 			// e-mail From deve ser o mesmo de "username" (contadeEmail)
$mail->FromName = 'Teste'; 				// Nome que será exibido ao receber a mensagem. 
$mail->addAddress('teste@btmachado.com.br', 'Alexandre'); // Destinatário 
//$mail->addAddress('ellen@example.com');               	// Nome do destinatário
//$mail->addReplyTo('info@example.com', 'Information');  	//Responder para 
//$mail->addCC('cc@example.com'); // Adicionar cópia para o recebimento. 
//$mail->addBCC('bcc@example.com'); // Adicionar cópia oculta para o recebimento.

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Envio autenticado - mesmo from';  //Assunto da Mensagem
$mail->Body    = 'This is the HTML message body <b>in bold!</b>'; // Corpo da mensagem
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Mensagem enviada com sucesso !';
}

?>


