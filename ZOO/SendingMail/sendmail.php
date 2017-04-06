<?php

include "classes/class.phpmailer.php";
$mail= new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug=1;
$mail->SMTPAuth=true;
$mail->SMTPSecure= 'ssl';
$mail->Host = "smtp.gmail.com";
$mail->Port=465;
$mail->IsHTML(true);
$mail->Username="jan.habinak@gmail.com";
$mail->Password="26116579";
$mail->SetFrom("jan.habinak@gmail.com");
$mail->Subject=$_POST_["subject"];
$mail->Body= $_POST["body"];
$mail->AddAddress($_POST["to"]);
if(!$mail->Send())
{
echo "Mailer Error: ".$mail->ErrorInfo;
}
else
{
echo "Message has beend sent";
}

?>