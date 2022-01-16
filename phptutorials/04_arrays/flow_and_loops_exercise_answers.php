<h1>Chapter 4 - Flow and Loops</h1>

(1) 

<br/><br/>

<?php
$age = 22;

if ($age >=18 && $age <= 35)
{
	echo("Youth message");
}
else
{
	echo("Generic Message");
}

?>

<br/><br/>

(2)

<br/><br/>

<?php
$age = 22;


if ($age >=18 && $age <= 35)
{
	echo("Youth message");
}
elseif ($age >=1 && $age <= 17)
{
	echo("Child Message");
}
else
{
	echo("Generic message");
}
?>

<br/><br/>

(3)

<br/><br/>

<?php
$num = 1;

while ($num<=49)
{
	echo("Number is : $num<br/>");
	$num += 2;
}
?>

<br/><br/>

(4)

<br/><br/>

<?php
for ($num = 1; $num <=49; $num +=2)
	echo("Number is : $num<br/>");
?>


