<?php 
require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;

// SMTP configuration
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'chauhansunil33@gmail.com';
$mail->Password = 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXX';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('info@example.com', 'CodexWorld');
$mail->addReplyTo('info@example.com', 'CodexWorld');

// Add a recipient
$mail->addAddress('john@gmail.com');

// Add cc or bcc 
$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');

// Email subject
$mail->Subject = 'Send Email via SMTP using PHPMailer';

// Set email format to HTML
$mail->isHTML(true);

// Email body content
$mailContent = "<h1>Send HTML Email using SMTP in PHP</h1>
    <p>This is a test email has sent using SMTP mail server with PHPMailer.</p>";
$mail->Body = $mailContent;

// Send email
if(!$mail->send()){
    echo 'Message could not be sent.';
    echo "<br>";
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}else{
    echo 'Message has been sent';
}
