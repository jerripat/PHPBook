<?php

class Person {

	//-----------------------------
	// private properites
	protected $_name;
	protected $_dateofbirth;
	protected $_weight;
 
	//-----------------------------
	// constructor
	public function __construct( $name, $dateofbirth, $weight )
	{
		$this->_name   = $name;
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


class Employee extends Person {

	//-----------------------------
	// private properties
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
		echo("<br/>-------------------------------------------------------------<br/>");
		echo("NAME: " . $this->_name . " DATEOFBIRTH: " . $this->_dateofbirth . " WEIGHT: " . $this->_weight . " SALARY: " . $this->_salary . " STARTDATE: " . $this->_startdate);
		echo("<br/>-------------------------------------------------------------<br/>");		
	}

}

$pete = new Employee('Pete Coles', '1990-06-07', '200', 20000, '2012-06-04');

$pete->printall();

$paul = new Person('Paul Gibbs', '1960-02-01', 160);

$paul->printall();

?>