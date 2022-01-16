<h1>Chapter 12 Database Access</h1>

<p>SQL fetch with try / catch</p>
<p>&nbsp;</p>

<?php

//Example of fetching data with try / catch and PDO
//paul@paulvgibbs.com

error_reporting( E_ALL | E_STRICT | E_DEPRECATED );

$dbname = 'databasename';
$user = 'databseusername';
$pass = 'databasepassword';

try {
    $dbh = new PDO("mysql:host=localhost;dbname=$dbname", $user, $pass);
    foreach($dbh->query('SELECT * from staff') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>