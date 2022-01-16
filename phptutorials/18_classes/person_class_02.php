<?php

class Person {

	//-----------------------------
	// private properites
	private $_name;
	private $_dateofbirth;
	private $_weight;
 
	//-----------------------------
	// constructor
	public function __construct( $name, $dateofbirth, $weight )
	{
		$this->_name = $name;
		$this->_dateofbirth = $dateofbirth;
		$this->_weight = $weight;
	} 
 
	//-----------------------------
	// methods that return information about the person
	public function get_name()
	{
		return $this->_name;
	}
 
	public function get_dateofbirth()
	{
		return $this->_dateofbirth;
	}

	public function get_age()
	{		
 		$today = new DateTime();
    		$diff = $today->diff(new DateTime($this->_dateofbirth));
       		return $diff->y;
	}
 
	public function get_weight()
	{
		return $this->_weight;
	}
 
	//-----------------------------
	// methods that change values of properties 
	public function change_name($name)
	{		
		$this->_name = $name;
	}
 
	public function add_weight($weight)
	{
		$this->_weight = $this->_weight + $weight;
	}
 
	public function lose_weight($weight)
	{
		$this->_weight = $this->_weight - $weight;
	}

	//-----------------------------
	// print the person details	
	public function printall()	
	{
		echo("<br/>-------------------------------------------------------------<br/>");
		echo("NAME: " . $this->_name . " DATEOFBIRTH: " . $this->_dateofbirth . " WEIGHT: " . $this->_weight . "<br/>");
		echo("-------------------------------------------------------------<br/><br/>");
	}

}



$paul = new Person('Paul Gibbs', '1957-04-03', 160);
$john = new Person('John Smith', '1970-04-05', 210);

$paul->lose_weight(10);
echo("Paul's weight is now: " . $paul->get_weight(10) . "<br/>");
echo("Paul's age is: " . $paul->get_age() . "<br/>");
echo("-------------------------------------<br/><br/>");

$paul->printall();	// display all details

$people[] = $paul; 
$people[] = $john;

foreach( $people as $person ) { 
    echo "The name is " . $person->get_name() . "<br/>";
    echo "This person is ".$person->get_age()." years old.<br/>"; 
}

?>