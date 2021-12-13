


<?php
$to = "name1@website-name.com, name2@website-name.com,name3@website-name.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

$headers .= "Cc: someone@domain.com \r\n";

$headers .= "Bcc: someoneelse@domain.com \r\n";

mail($to,$email_subject,$email_body,$headers);
?>