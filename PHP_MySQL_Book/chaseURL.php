<?php
header("Big Guitar inc:https://php-stuff.herokuapp.com/");

$browser = $_SERVER['HTTP_USER_AGENT'];
$address = $_SERVER['REMOTE_ADDR'];
echo "$browser"; echo "$address";
?>