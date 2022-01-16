<h1>Chapter 8 Email Form - Email Test</h1>

<?php

$to = "to@somewhere.com";
$subject = "PHP Course";
$body = "This is a test email\n\nfrom my website";
$headers = "From: from@somewhereelse.com\r\n";

mail($to, $subject, $body, $headers);

?>

