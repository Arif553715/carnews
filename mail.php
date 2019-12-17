<?php
$name = $_POST['name'];
$email = $_POST['email'];
$email = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$formcontent=" From: $name \n subject: $subject \n  Message: $message";
$recipient = "arif553715@gmail.com";
$subject = "Add Your Subject Here";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header("location: thankyou.html")
?>