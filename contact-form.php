<?php

$name = $_POST["name"];
$email = $_POST["email"];

$phone = "+".$_POST["countryCode"].$_POST["phone"];

$message  = $_POST["message"];
$to ="kakumuradenzel@gmail.com,arcuskyle@gmail.com";
// the message
$msg = "Hello Limitless Energy Logistics\nYou  have a new message from your website contact form, below are the details\n\n
Name: $name \nPhone Number: $phone \nEmail: $email\nMessage: $message";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
 if (mail($to,"You have a new message from website",$msg))
 {
     echo "<p class='text-success'> Thank you for messaging us, we will get back to you soon</p>";
 }