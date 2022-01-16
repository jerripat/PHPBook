<?php
session_start();

//------------------------------------------------
if ( isset($_POST["Submit"]) ) {
	$username = $_POST["username"];
	$password = $_POST["password"];
	if ( authenticate($username, $password) ) {
		$_SESSION["access"] = "yes";
		include("includes/menu.php");
	}
	else
	{
		loginform();
	}
}
else
{
	loginform();
}
//------------------------------------------------
function authenticate($username, $password) {

	if ( $username == "username" && $password == "password" ) {
		return true;
	}
	else
	{
		return false;
	}

}
//------------------------------------------------
function loginform() {
?>
<form name="login" action="" method="post">
	<input type="text" name="username" /><br/>
    <input type="password" name="password" /><br/>
    <input type="submit" name="Submit" value="Submit" /><br/>
</form>
<?php
}
?>

