<h1>Chapter 4 Functions</h1>

<?php 
// A simple script that we will convert into a function.
//paul@paulvgibbs.com

$name = "Paul";
echo("Hello $name<br/>");

?>



<?php

//A function that returns no values and has no arguments

sayHello();

//----------------------------------------------
function sayHello() {

	$name = "Paul";
	echo("Hello $name<br/>");

}
//----------------------------------------------

?>




<?php
//A function that returns no values but has one argument

sayHello1("Paul");
sayHello1("John");
sayHello1("George");
sayHello1("Ringo");

//----------------------------------------------
function sayHello1($name) {

	echo("Hello $name<br/>");

}
//----------------------------------------------

?>



<?php
// A function that has a default argument

sayHello2("Paul");
sayHello2("Ringo", "Goodby");

//----------------------------------------------
function sayHello2($name, $greeting = 'Hello') {

	echo("$greeting $name<br/>");

}
//----------------------------------------------

?>


<?php
// A function that has a return value

echo sayHello3("Paul");
echo sayHello3("Ringo", "Goodby");

//----------------------------------------------
function sayHello3($name, $greeting = 'Hello') {

	$returnvalue = "$greeting $name<br/>";
	return $returnvalue;

}
//----------------------------------------------

?>