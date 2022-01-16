<?php

class Parcel extends Box {

       private $_deliveryAddress;
       private $_weight;

	   //Constructor
       public function __construct($length, $width, $height, $deliveryAddress, $weight)
       {

       		parent::__construct($length, $width, $height);

             $this->_deliveryAddress = $deliveryAddress;
             $this->_weight = $weight;

       }

	   //Public method
       public function cost() {

             $volume = $this->volume();

             if ($volume <= 200) 
             {
                 return 5;
             }
             else
             {
                 return 10;
             }

       }

}

?>
