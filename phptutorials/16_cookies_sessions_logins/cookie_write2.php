<?php

//Create a cookie - you can use single or double quote marks, but do not use spaces in cookie name

//This expires in one day
setcookie( "myname", "Paul", time()+(60*60*24) );

?>