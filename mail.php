<?php
$name = $_post['name'];
$email = $_post['email'];
$message = $_post['message'];
$to = "serjomh33@gmail.com";
$subject = "mail from tamkeen";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";


$headers = "From" .$name. "\r\n" .
"CC: tamkeen-contact@tamkeen.org.ly";

$txt = "you have recived an e-mail from :" .$name . "\r\nEmail: " .$email . "\r\n Message:" . $message;

if ($email!=NULL){
    mail($to, $subject , $txt ,$headers);
}

header ('location:index.html');
?>