<h1>Chapter 12 Database Access</h1>

<p>SQL FETCH using bindParam and named place holders</p>
<p>&nbsp;</p>

<?php

//SQL fetch using bindParam
//paul@paulvgibbs.com

error_reporting( E_ALL | E_STRICT | E_DEPRECATED );

$dbname = 'databasename';
$user = 'databseusername';
$pass = 'databasepassword';


$dbh = new PDO("mysql:host=localhost;dbname=$dbname", $user, $pass);

$stmt = $dbh->prepare("SELECT * FROM staff where department = :dept and first_name = :forename");

$stmt->bindParam(":dept", $department, PDO::PARAM_STR);
$stmt->bindParam(":forename", $first_name, PDO::PARAM_STR);

$department = "music";
$first_name = "paul";

if ($stmt->execute()) {
  while ($row = $stmt->fetch()) {
    print_r($row);
  }
}
?>
