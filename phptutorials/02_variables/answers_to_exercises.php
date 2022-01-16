<h1>Chapter 2 Variables - Answers to exercises</h1>

<?php

$file = $_SERVER['PHP_SELF'];
$user = $_SERVER['HTTP_USER_AGENT'];
$address = $_SERVER['REMOTE_ADDR'];

echo("<p>You are running the file <strong>$file</strong></p>");
echo("<p>You are viewing this page using <strong>$user</strong><br/> <br><strong>$address</strong></p>");

?>
<br/><br/>


<?php

$work = 'Super Software Company';
$town = 'Trowbridge';
$country = "Wiltshire";
$address = $town . ', ' . $country;

$first_name = "Paul";
$last_name = "Gibbs";

$myname = $first_name . ' ' . $last_name;

echo "$myname works at $address";

?>

<br/><br/>
Possible answer to exercise 2.1<br/>
-------------------------------<br/>

<?php
$myname = "Paul";
$mystring = "This script is written by name";

echo ( str_replace("name", $myname, $mystring) ); 

?>

<br/><br/>
Possible answer to exercise 2.2<br/>
-------------------------------<br/>

<?php
$string = "http://www.withinweb.com";

$pos = strpos($string, "http:");

if ($pos == 0) {
	echo("found");
}
?>



<br/><br/>
Possible answers to exercise 2.5<br/>
--------------------------------<br/>

<?php
$Tf = 20;
$Tc = ( 5 / 9 ) * ( $Tf - 32 );
printf("%f", $Tc);
echo("<br/><br/>");
?>

<?php
$Tf = 20;
$Tc = ( 5 / 9 ) * ( $Tf - 32 );
printf("%f", $Tc);
echo("<br/><br/>");
?>
The answer is <?php printf("%f", $Tc);
echo("<br/><br/>");
?>


<?php
$Tf = 20;
$Tc = ( 5 / 9 ) * ( $Tf - 32 );
printf("The answer is %f", $Tc);
echo("<br/><br/>");
?>

<br/><br/>
Possible answer to exercise 2.6<br/>
-------------------------------<br/>

<?php

$a = 21.2;
$b = 34.2;
$c = 23.4;

$result = ($a + $b + $c)/3;

echo(number_format($result, 2));
echo("<br/><br/>");

?>

