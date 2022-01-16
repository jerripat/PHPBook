<?php

//Report all errors
error_reporting( E_ALL | E_STRICT | E_DEPRECATED ); 

echo("Example of Class Composition<br/><br/>");

//========================================================
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
		echo("<br/>---------------------------------------<br/>");
		echo("NAME: " . $this->_name . "<br/>");
		echo("DATEOFBIRTH: " . $this->_dateofbirth . "<br/>");
		echo("WEIGHT: " . $this->_weight . "<br/>");
		echo("---------------------------------------<br/>");
	}

}
//========================================================


//========================================================
class Employment {

	//-----------------------------
	// private properties
	private $_salary;
	private $_startdate;
	private $_person;

 	//-----------------------------
	// constructor
	public function __construct($person, $salary, $startdate) 
	{

		$this->_person = $person;
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
		echo("<br/>---------------------------------------<br/>");
		echo("NAME: " . $this->_person->get_name() . "<br/>");
		echo("AGE: " . $this->_person->get_age() . "<br/>");
		echo("WEIGHT: " . $this->_person->get_weight() . "<br/>");
		echo("SALARY: " . $this->_salary . "<br/>");
		echo("STARTDATE: " . $this->_startdate . "<br/>");
		echo("---------------------------------------<br/>");
	}

}
//========================================================


$pete = new Employment( 
		new Person('Pete Coles', '1990-06-07', '200'), 
		20000, '2012-06-04' );

$pete->printall();

$paul = new Employment( 
		new Person('Paul Gibbs', '1960-02-01', 160), 
		25000, '2020-07-02' );

$paul->printall();

?>
