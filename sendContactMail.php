<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require('PHPMailer/Exception.php');
require('PHPMailer/PHPMailer.php');
require('PHPMailer/SMTP.php');
$ourEmail = 'adam-torok@outlook.hu'; // Erre az emailcímre kapjuk meg az üzenetet
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  if(isset($_POST)){
    $email_name = $_POST['email_name'];
    $email_uname = $_POST['email_uname'];  
    $email_message = $_POST['email_message'];  
    $email_phone = $_POST['email_phone'];  
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->SMTPAuth = true;
    $mail->Username  = 'adamtorok1999@gmail.com';   //IDe írjunk majd egye dummy gmail fiókot, ami ehez a domainhez járul        
    $mail->Password  = '6addtehrdk';          
    $mail->setFrom($email_name);              
    $mail->CharSet = 'UTF-8';
    $mail->Mailer = "smtp";
    $mail->addBCC($ourEmail);                    
    $mail->addAddress($ourEmail);                    
    $mail->addReplyTo($email_name, $email_name);       // A választ egyből, annak lehet írni, aki kérdezett.
    $mail->isHTML(true);
    $mail->Subject = 'Csaba | Tetőfedő - Érdeklődő!';
    $mail->Body    = '<h1>Új érdeklődő!,</h1> <br>
    Név : '.$email_uname.' <br>
    Üzenet: '.$email_message.' <br>
    Telefonszám: '.$email_phone.'
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