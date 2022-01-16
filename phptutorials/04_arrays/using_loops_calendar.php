<h1>Chapter 4 Arrays</h1>

<p>Example calendar display using arrays, for loops and while loops with 
a submit button that returns the values selected</p>

<form action="using_loops_calendar.php" method="post">

<!--<form action="collect_post.php" method="post">-->

<?php #script - calendar.php

//echo("Month : " . $_POST["month"] . "<br/>");
//echo("submit : " . $_POST["submit"] . "<br/>");

if (isset($_POST["month"]))
{
	echo("Month : " . $_POST["month"] . "<br/>");
}

if (isset($_POST["day"]))
{
	echo("Day : " . $_POST["day"] . "<br/>");
}

if (isset($_POST["year"]))
{
	echo("Year : " . $_POST["year"] . "<br/>");
}

//Make the months array
$months = array (1=> 'January', 2=>'February', 3=>'March', 4=>'April', 
				 5=>'May', 6=>'June', 7=>'July', 8=>'August', 9=>'September', 
				 10=>'October', 11=>'November', 12=>'December');


//Make the months pull down menu
echo "<select name='month'>\n";
foreach ($months as $key => $value) {
	echo "<option value='$key'> $value</option>\n";
}
echo'</select>';

//Make the days pull down menu
echo "<select name='day'>\n";
for ($day = 1; $day <= 31; $day++) {
	echo "<option value='$day'>$day</option>\n";
}
echo"</select>";

//Make the years pull down menu
echo "<select name='year'>\n";
$year = 1999;
while ($year <= 2015) {
	echo "<option value='$year'>$year</option>\n";
	$year++;
}
echo"</select>";
?>

<input type="submit" name="submit" value="submit" />

</form>