<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require('PHPMailer/Exception.php');
require('PHPMailer/PHPMailer.php');
require('PHPMailer/SMTP.php');
$ourEmail = 'tesztmail'; // Erre az emailcímre kapjuk meg az üzenetet
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  if(isset($_POST)){
    $email_name = $_POST['email_name'];
    $email_message = $_POST['email_message'];  
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->SMTPAuth = true;
    $mail->Username  = 'atesztmail';   //IDe írjunk majd egye dummy gmail fiókot, ami ehez a domainhez járul        
    $mail->Password  = 'tesztmail';          
    $mail->setFrom($email_name);              
    $mail->CharSet = 'UTF-8';
    $mail->Mailer = "smtp";
    $mail->addBCC($ourEmail);                    
    $mail->addAddress($ourEmail);                    
    $mail->addReplyTo($email_name, $email_name);       // A választ egyből, annak lehet írni, aki kérdezett.
    $mail->isHTML(true);
    $mail->Subject = 'Csaba | Tetőfedő - Üzenet!';
    $mail->Body    = '<h1>Új érdeklődő!,</h1> <br>
    '.$email_message.'
    ';
    $mail->AltBody = 'Köszönjük hogy minket választott';
    if($mail->send()){
      echo "sent.";
    }else{
      echo "didnt sent,";
    }
  }
}
?>