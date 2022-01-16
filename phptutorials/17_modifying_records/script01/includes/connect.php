<?php
//Database connection details to mySQL

// Use constants for database settings
DEFINE ('DBUSER', 'Your database user');
DEFINE ('DBPASSWORD', 'Your password');
DEFINE ('DBHOST', 'localhost');
DEFINE ('DBNAME', 'Your database name');

//DEFINE ('DBUSER', 'root');
//DEFINE ('DBPASSWORD', '');
//DEFINE ('DBHOST', 'localhost');
//DEFINE ('DBNAME', 'tutorials');

//Make a connection to the database
$link = mysqli_connect(DBHOST, DBUSER, DBPASSWORD, DBNAME);

//Check the connection
if (!$link) {
    printf("Could not connect to database: %s\n", mysqli_connect_error());
    exit();
}
?>