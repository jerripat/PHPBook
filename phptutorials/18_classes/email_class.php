<?php

class EmailOut {

      //Properties
      private $_toAddress;
      private $_fromAddress;
      private $_subject;
      private $_body;

      //Contructor
      public function  __construct( $toAddress, $fromAddress, $subject, $body) {
           $this->_toAddress = $toAddress;
           $this->_fromAddress = $fromAddress;
           $this->_subject = $subject;
           $this->_body = $body;
      }	

	  //send the email
      public function sendMail()
      {

           $header = "From: $this->_fromAddress\r\n";

           //to, subject, body, headers, parameters
           mail($this->_toAddress, $this->_subject, $this->_body, $header);
		   
   		   echo("<br/> $this->_toAddress, $this->_subject, $this->_body, $header <br/>");
		   
      }

}


$myMail = new EmailOut("paul@paulvgibbs.com", "marjie@archibaldsweb.co.uk", "A test subject", "A test body");
$myMail->sendMail();


?>
