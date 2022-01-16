<form action="dates.php" method="post">

<h1>Chapter 4 Arrays</h1>

<?php

//calandar using foreach loops
//paul@paulvgibbs.com

//Make the months array
$months = array (1=> 'January', 2=>'February', 3=>'March', 4=>'April', 5=>'May', 6=>'June', 7=>'July', 8=>'August', 9=>'September', 10=>'October', 11=>'November', 12=>'December');

//Make the days array
$days = range(1,31);

//Make the years array
$years = range(1999,2015);

echo "<select name='month'>\n";
foreach ($months as $key => $value) {
echo "<option value='$key'> $value</option>\n";
}
echo "</select>";


echo "<select name='day'>\n";
foreach ($days as $value) {
echo "<option value='$value'> $value</option>\n";
}
echo"</select>";

echo "<select name='year'>\n";
foreach ($years as $value) {
echo "<option value='$value'> $value</option>\n";
}
echo'</select>';


?>
</form>
