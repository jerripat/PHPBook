<?php

//Displaying all cookies that have been set from this domain

foreach($_COOKIE as $key => $value)
{
  echo $key . " => " . $value . "<br/>";
}

?>