<?php
// the message
$msg = "Hello this is a sample mail... This code will send a mail to the id you set below! Enjoy!!";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("someone@example.com","My subject",$msg);
?>
