<?php
$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];

$email_from = '201947@students.au.edu.pk';
$email_subject = 'Choose a finger'
$email_body = "User Name: $name.\n".
                "User Email: $email.\n"
                  "User Message: $comment.\n";
$to = '201947@students.au.edu.pk'
$header = "From: $email_from\r\n"
$header.="Reply-to:$email\r\n";

mail($to, $email_subject, $email_body,$header)
header("Location: Contact.html")
?>