<?php

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

?>