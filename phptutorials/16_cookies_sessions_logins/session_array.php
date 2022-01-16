<?php session_start(); 

//Initialise an array:

$_SESSION['cart'] = array();

//Add items with their quantities:

$_SESSION['cart']['Boxers'] = 4;
$_SESSION['cart']['T-shirts'] = 2;
$_SESSION['cart']['Socks'] = 5;

//We can print out the complete structure using:
 
print_r($_SESSION['cart']);

//Array
//(
//   [Boxers] => 4
//    [T-shirts] => 2
//    [Socks] => 5
//)

//To update the quantities.

$_SESSION['cart']['Socks'] = $new_quantity;
$_SESSION['cart']['Socks'] += $quantity;

?>