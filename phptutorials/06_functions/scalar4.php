<?php 

declare(strict_types=1); // strict mode on

$a ='1'; // string
$b = 2;  //integer

function FunctionName (int $a, int $b){
  return $a + $b;
}

echo FunctionName ($a, $b);

?>