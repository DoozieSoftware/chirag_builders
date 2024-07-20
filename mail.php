<?php

$response = file_get_contents($url);
$response = json_decode($response);

$name = $_POST['name']; // required

$email = $_POST['email']; // required
$phone = $_POST['phone']; // required
 
$message = $_POST['message']; // required

$to = "ravichirag1990@gmail.com";

$subject = "Contact Page - Mail from Chirag Buliders Website";
$from = "Chirag Buliders Web";

$body_message = 'From: ' . $from . "\n";
$body_message .= 'E-mail: ' . $to . "\n";
$body_message .= 'Name: ' . $name . "\n";
// $body_message .= 'Last Name: ' . $lastname . "\n";
$body_message .= 'Email: ' . $email . "\n";
$body_message .= 'phone: ' . $phone . "\n";

$body_message .= 'message: ' . $message . "\n";

$headers = 'From: ' . $email . "\r\n";
$headers .= 'Reply-To: ' . $email . "\r\n";

$mail_status = mail($to, $subject,
    $body_message, $headers);

if ($mail_status) {?>
 <script language="javascript" type="text/javascript">
  alert('We have received your request. Someone from Chirag Buliders will contact them in next 3 hours');
  window.location.href = 'contact.html';
 </script>
 <?php
} else {?>
  <script language="javascript" type="text/javascript">
   alert('Message failed. Please, send an email to ');
   window.location.href = 'contact.html';
  </script>
 <?php }
?>