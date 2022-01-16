<?php

class Box {

	protected  $_length;
	protected  $_width;
	protected  $_height;

	public function __construct($length, $width, $height) {
		$this->_length = $length;
		$this->_width = $width;
		$this->_height = $height; 
	}

	public function volume() {
		return $this->_length * $this->_width * $this->_height;
	}

} 

$myBox = new Box(20,10, 5);
$myVolume = $myBox->volume();
echo("Volume = " . $myVolume . "<br/>");



class Parcel extends Box {
	
	private $_deliveryAddress;
	private $_weight;


	public function __construct($length, $width, $height, $deliveryAddress, $weight) {
	
		parent::__construct($length, $width, $height);

		$this->_deliveryAddress = $deliveryAddress;
		$this->_weight = $weight;
	
	}

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

$myParcel = new Parcel(20,10, 5, '10 Bristol Road', '210');
$myCost = $myParcel->cost();
$myVolume = $myParcel->volume();
echo("Volume = " . $myVolume . " Cost = " . $myCost . "<br/>");


?>
