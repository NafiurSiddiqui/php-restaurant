<?php
//create short variable names
$name=$_POST['name'];
$email=$_POST['email'];
$feedback=$_POST['feedback'];
//set up some static information

$toaddress = "feedback@example.com";
$subject = "Feedback from web site";
$mailcontent = "Customer name: ".filter_var($name)."\n".
"Customer email: ".$email."\n".
"Customer comments:\n".$feedback."\n";
$fromaddress = "From: webserver@example.com";
//invoke mail() function to send mail
mail($toaddress, $subject, $mailcontent, $fromaddress);
