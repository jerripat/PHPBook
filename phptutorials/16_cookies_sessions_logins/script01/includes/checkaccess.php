<?php
session_start();

if ( isset ( $_SESSION['access'] ) ) {

	if ($_SESSION['access'] != "yes") {
 		errormessage();
		exit;	
	}

}
else
{
	errormessage();
	exit;
}

//----------------------------------------------
function errormessage() {
?>
	<h2>You do not have access to this page.</h2>
   	<h2>Click <a href="login.php">here</a> to return to login page.</h2>
<?php
}
?>