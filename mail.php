<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['user_name'];
$email = $_POST['user_email'];
$phone = $_POST['user_phone'];
$message = $_POST['user_message'];

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'korolev1021@gmail.com'; // Your login of mail from
  
$mail->Password = 'KillDown2624'; // Your mail passsword from 
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect

$mail->setFrom('korolev1021@gmail.com'); // From
$mail->addAddress('ftucha@kristal.by');     // To

$mail->isHTML(true);                             

$mail->Subject = 'Заявка от ';
$mail->Body    = '' .$name . ' оставил заявку.<br>Его mail: ' .$email. '<br>Его телефон: ' .$phone. '<br>Сообщение: ' .$message. '';
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: index.html');
}
