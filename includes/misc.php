<?php

echo sayHello("paul");
echo sayHello("Ringo","Goodbye");

//--------------------------------------------

function sayHello($name, $greeting = "Hello"){
    
        $returnvalue = "$greeting $name<br/>";
        return $returnvalue;
        
    //--------------------------------------------
}
?>