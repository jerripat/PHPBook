<?php

class Box {

       //Properties
       private $_length;
       private $_width;
       private $_height;

       //Constructor
       public function __construct($length, $width, $height) {
             $this->_length = $length;
             $this->_width = $width;
             $this->_height = $height; 
       }

       //Method
       public function volume() {
          return $this->_length * $this->_width * $this->_height;

       }

} 

$myBox = new Box(20,10, 5);
$myVolume = $myBox->volume();
echo("Volume = " . $myVolume . "<br/>");

?>

