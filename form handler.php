<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'sakinislam79@gmail.com';

$email_subject ='new form submission';

$email_body = "User Name: $name.\n".
             "User Email: $visitor_email.\n".
            "subject: $subject.n\"
            "User Message: $message .\n";


$to = 'Sakinislam79@gmail.com';
$headers = "form: $email_form \r\n";
$headers .= "Reply-To:$visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");

?>