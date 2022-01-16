<h1>Chapter 4 Functions - Date and Time</h1>

<?php

//Displays a set of drop down lists with the current date selected.
//paul@paulvgibbs.com

$mon = array (1 => "Jan", 2 => "Feb", 3 => "Mar", 4 => "Apr", 5 => "May", 6 => "Jun",
		 7 => "Jul", 8 => "Aug", 9 => "Sep", 10 => "Oct", 11 => "Nov", 12 => "Dec", );

$currentdate = getdate();
$month = $currentdate["mon"];
$day = $currentdate["mday"];
$year = $currentdate["year"];

?>
<strong>Month</strong><br/>
<select name="month">
<?php
	for ($m = 1; $m<=12; $m++)
	{
	?>
		<option value="<?php echo($m); ?>" <?php if ($month == $m) {echo"selected";} ?> ><?php echo($mon[$m]); ?></option>
	<?php
	}
?>
</select>

