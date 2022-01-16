<h1>Chapter 4 Arrays</h1>

<?php

//Make the months array
$months = array (1=> 'January', 2=>'February', 3=>'March', 4=>'April', 5=>'May', 6=>'June', 7=>'July', 8=>'August', 9=>'September', 10=>'October', 11=>'November', 12=>'December');

echo "<select name='month'>\n";
foreach ($months as $key => $value) {
echo "<option value='$key'> $value</option>\n";
}
echo"</select>\n";

?>