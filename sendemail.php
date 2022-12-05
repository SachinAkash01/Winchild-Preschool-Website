<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpMailer/Exception.php';
require_once 'phpMailer/PHPMailer.php';
require_once 'phpMailer/SMTP.php';

$mail = new PHPMailer(true);
$mail->SMTPOptions = array(
'ssl' => array(
'verify_peer' => false,
'verify_peer_name' => false,
'allow_self_signed' => true
)
);

$alert = '';

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'winchildlk@gmail.com'; //SMTP Gmail address
    $mail->Password = 'hbbljjnxpsoktzgn'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('winchildlk@gmail.com'); // Gmail address which used as SMTP server
    $mail->addAddress('winchildlk@gmail.com'); // Email address where we want to receive emails

    $mail->isHTML(true);
    $mail->Subject = 'Message Received (Contact Page)';
    $mail->Body = "<h3>Name : $name <br>Email: $email <br>Message : $message</h3>";

    $mail->send();
    $alert = '<div class="alert-success">
                 <span>Message Sent! Thank you for contacting us.</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}
?>
      