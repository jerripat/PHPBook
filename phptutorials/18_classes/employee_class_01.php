<?php

class Employee extends Person {

	//-----------------------------
	// private properites
	private $_salary;
	private $_startdate;

 	//-----------------------------
	// constructor
	public function __construct( $name, $dateofbirth, $weight, $salary, $startdate)
	{
		parent::__construct( $name, $dateofbirth, $weight );

		$this->_salary = $salary;
		$this->_startdate = $startdate;

	} 

	//-----------------------------
	// methods that return information about the person
	public function get_salary()
	{
		return $this->_salary;
	}
 
	public function get_startdate()
	{
		return $this->_startdate;
	}

	//-----------------------------
	// print the person details	
	public function printall()
	{
		echo("NAME: " . parent::_name . "DATEOFBIRTH: " . parent::_dateofbirth . "WEIGHT: " . parent::_weight . "SALARY: " . $this->_salary . "STARTDATE: " . $this->_startdate .  "<br/>");
	}

}

?>