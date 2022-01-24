<h1> Chapter 4 functions - date and time </h1
<?php

$mon = array(1 => "Jan", 2 => "Feb", 3 => "Mar", 4 => "Apr",
5 => "May", 6 => "Jun", 7 => "Jul", 8 => "Aug", 9 => "Sep",
10 => "Oct", 11 => "Nov", 12 => "Dec",);

$currentdate = getDate();
$month =$currentdate["mon"];
$day = $currentdate["year"];
?>
 <strong>Month</strong><br/>
    <select name="month">
        <?php
  for ($m = 1; $m <= 12; $m++){
      ?>
    <option value="<?php echo($m); ?> " <?php if ($month == $m) {echo"selected";} ?> ><?php echo($mon[$m]); ?></option>
    <?php
      }
      ?>  
</select>
<br/><br/>
<strong>Day</strong><br/>
<select name="day">
    <?php
        for ($d = 1; $d <=31; $d++)
        {
            ?>
            <option value="<?php echo($d); ?>" <?php if ($day == $d) 
            {echo"selected";} ?> ><?php echo($d); ?></option>
	<?php
        }
?>
</select>
     <br/><br/>
     <strong>Year</strong><br/>
     <select name="year">
     <?php
            for ($y = 2010; $y <=2020; $y++)
            {
                ?>
                    <option value="<?php echo($y); ?>" <?php if ($year == $y) {echo"selected"; } ?> ><?php echo($y); ?></option>
                    <?php
                     }
            ?>
            </select>
