<h1>Chapter 4 Arrays - Array Examples</h1>

<?php

//paul@paulvgibbs.com

$country["WA"] = "Wales";
$country["EN"] = "England";

echo("<br/>");

foreach($country as $key => $value) {
	echo( $key . " " . $value . "<br/>");
}

echo("<br/>");
echo( $country["WA"] );
echo("<br/><br/>");

echo "WA is an abbreviation for " . $country['WA'];

?>
<br/><br/>
<?php

$beatles[] = "John";
$beatles[] = "Paul";
$beatles[] = "George";
$beatles[] = "Ringo";

echo( "My fav Beatle is $beatles[1] " );

?>
<br/><br/>
<?php

foreach($beatles as $key => $value) {
	echo( $value . "<br/>" );
}


?>