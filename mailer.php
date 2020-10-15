<?php
require("/home1/displa88/robertocpaes.dev/PhpMailer/PHPMailer.php");
require("/home1/displa88/robertocpaes.dev/PhpMailer/SMTP.php");
    // fetch the form fields after removing html tags and whitespaces if any
    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r", "\n"), array(" ", " "), $name);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);

    // checking the data
    if (empty($name) OR empty($message) OR !filter_var($email, FILTER_SANITIZE_EMAIL)) {
        
  header("Location: http://robertocpaes.dev/index.php?success=-1#form");
  exit;
    }else{
          // set the recipient's email address
    $recipient = "contato@robertocpaes.dev";

    // set the email subject
    $subject = "New contact from $name";

    // build the email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    // build the email headers
    $email_headers = "From: $name <$email>";

    // send the email

    $mail = new PHPMailer\PHPMailer\PHPMailer;

// Configura o charset do e-mail



// Servidor SMTP
$mail->Host = "robertocpaes.dev";



// Usuário da conta
$mail->Username = "contato@robertocpaes.dev";

// Senha da conta
$mail->Password = "ppe+(K%*e~iO";


// Porta do servidor SMTP
$mail->Port = 465;

// Informa se vamos enviar mensagens usando HTML

// Email do Remetente
$mail->From = $email;

// Nome do Remetente
$mail->FromName = $name;

// Endereço do e-mail do destinatário
$mail->addAddress("contato@robertocpaes.dev");

// Assunto do e-mail
$mail->Subject = $subject;

// Mensagem que vai no corpo do e-mail
$mail->Body = $email_content;

// Envia o e-mail e captura o sucesso ou erro
$mail->Send();
    header("Location: http://robertocpaes.dev/index.php?success=1#form");

      
    }


    // redirect to index.html with success code
   // 
?>