<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message']



$email_from = 'bulemisworld@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User name: $name.\n".
              "User email: $visitor_email.\n".
              "Subject: $subject.\n".
              "User message: $message.\n".;


$to = 'waswabulemzzz@gmail.com';

$headers = "From: $email_from \r\n";

$headers .="Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: contact.html");

?>