<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['_replyto']))
$email = $_POST['_replyto'];
if(isset( $_POST['theMessage']))
$message = $_POST['theMessage'];

$content="From: $name \n Email: $email \n Message: $message";
$recipient = "georgittanchev@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");


?>

<script>
window.location.replace("http://georgittanchev.github.io/thanks.html");</script>