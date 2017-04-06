<?php
$to = 'jan.habinak@gmail.com';
$subject = 'Hello from '.$_POST['cf_name'];
$message = $_POST['cf_message'];
$headers = "From: your@email-address.com\r\n";
if (mail($to, $subject, $message, $headers)) {
   echo "SUCCESS";
} else {
   echo "ERROR";
}