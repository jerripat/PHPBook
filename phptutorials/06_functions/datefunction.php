<h1>Chapter 4 Functions - Date and Time</h1>

<?php

//Display date and time in different formats
//paul@paulvgibbs.com

//current date and time
echo("-------------<br>");
echo date( 'j F , Y H:h'); 
echo("<br>");

//UNIX time
echo("-------------<br>");
echo( time() );
echo("<br>");

//Number of seconds in a weel
echo("-------------<br>");
$secsinweek = 7 * 24 * 60 * 60;
$nextweek = time() + $secsinweek;
echo date( 'j F , Y H:h', $nextweek); 	//One weeks in advance

?>