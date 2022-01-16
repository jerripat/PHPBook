<?php 

declare(strict_types=1);

$a = 1; // integer
$b = 2; // integer

function FunctionName ($a, $b) : int  {
   return $a+$b;
}

echo FunctionName ($a, $b);

?>