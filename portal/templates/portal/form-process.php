<?php
/**
 * php file part for contact form validate
 *
 * @package Bitfonix - Bitcoin And Crypto Currency HTML Template
 */
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];		
	$from="From: $name $phone $subject<$email>\r\nReturn-path: $email";
	$subject="Bitfonix - Bitcoin And Crypto Currency HTML Template";
	mail("shahadat.cse12@yahoo.com", $subject, $message, $from)

?>
