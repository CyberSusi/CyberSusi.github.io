<?php
$name = $_POST['name'];
$visitor_email = $_POST['mailaddress'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'domainNAME';

$email_subject = 'New Submission';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "Subject: $subject.\n".
                "User Message: $message.\n";

$to = 's.e.ragusa@web.de';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>
