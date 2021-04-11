<?php
$name=$_POST['name'];
$phone=$_POST['phone'];
$visitor_email=$_POST['email'];
$message=$_POST['message'];


$email_from='https://amishajha.github.io/';
$email_subject="New Form Submission";
$email_body="User Name: $name.\n".
             "User Email:$visitor_email.\n."
             "User Phone:$phone.\n."
             "User Message:$message.\n";
$to="jhaamisha096@gmail.com";
$headers="From: $email_from\r\n";
$headers="Reply-To:$visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location:index.html");

?>
