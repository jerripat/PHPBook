
Exercise 21.1<br/>
------------<br/>

Write a regular expression that looks for the following words in a phrase and displays a message to say if any of the phrases exist in the string.<br/><br/>

cow<br/>
pig<br/>
horse<br/>


<?php
$pattern = "/cow|horse|pig/";
$string = "this is some text about a cow and a horse";

if (preg_match($pattern, $string, $matches)) {
	echo"<br/>matches found<br/>";
	echo $matches[0];	
}

//The $matches[0] array in this use returns the first full match.
?>



<br/><br/>
Exercise 21.2<br/>
------------<br/><br/>

Write a regular expression that counts the number of words in a phrase.<br/><br/>


<?php
$pattern = "/\s+/";
$string = "php  regular expressions";

$keywords = preg_split($pattern, $string);
echo( "Number of works : " .count($keywords) );
?>


<br/><br/>
Exercise 21.3<br/>
------------<br/>

<br/>
Divide a sentence into words.


<?php
$pattern = "/\s+/";
$string = "php  regular expressions";

$keywords = preg_split($pattern, $string);
foreach($keywords as $key=>$value) {
	echo( $value . "<br/>" );
}
?>


