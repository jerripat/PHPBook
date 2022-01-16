<form action="dates1.php" method="post">

<h1>Chapter 4 Arrays</h1>

<?php

//A calendar drop down using for loop and while loop
//paul@paulvgibbs.com

//Make the months array
$months = array (1=> 'January', 2=>'February', 3=>'March', 4=>'April', 5=>'May', 6=>'June', 7=>'July', 8=>'August', 9=>'September', 10=>'October', 11=>'November', 12=>'December');

//Make the months drop down selector
echo "<select name='month'>\n";
foreach ($months as $key => $value) {
	echo "<option value='$key'> $value</option>\n";
}
echo"</select>";

//Make the days drop down selector
echo "<select name='day'>\n";
for ($day = 1; $day <= 31; $day++) {
	echo "<option value='$day'>$day</option>\n";
}
echo"</select>";

//Make the years drop down selector
echo "<select name='year'>";
$year = 1999;
while ($year <= 2015) {
	echo "<option value='$year'>$year</option>\n";
	$year++;
}
echo"</select>";
?>
</form>
