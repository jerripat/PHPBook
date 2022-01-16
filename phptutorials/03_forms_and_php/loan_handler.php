<!DOCTYPE HTML>
<head>
<meta charset=utf-8" />
<title>Loan Enquiry</title>
</head>
<body>

<h1>Chapter 3 Forms - Loan Enquiry</h1>

<?php

//Collect the data
$name = $_POST['fullname'];
$email = $_POST['emailaddress'];
$employment = $_POST['employment'];
$age = $_POST['age'];

//Print the submitted information.
echo "<p>Thank you, <b>$name</b>, for your enquiry</p>
<p>We will reply to you at your email address: <strong>$email</strong>.</p>";
echo("<p>You are $employment $age</p>");

?>

</body>
</html>
