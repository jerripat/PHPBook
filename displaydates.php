<h1> Chapter 4 functions - date and time </h1
<?php

$mon = array(1 => "Jan", 2 => "Feb", 3 => "Mar", 4 => "Apr",
5 => "May", 6 => "Jun", 7 => "Jul", 8 => "Aug", 9 => "Sep",
10 => "Oct", 11 => "Nov", 12 => "Dec",);

$currentdate = getDate();
$month =$currentdate["mon"];
$day = $currentdate["mday"];
$year = $currentdate["year"];
?>
<br/>
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
            for ($y = 2010; $y <=2023; $y++)
            {
                ?>
                    <option value="<?php echo($y); ?>" <?php if ($year == $y) {echo"selected"; } ?> ><?php echo($y); ?></option>
                    <?php
                     }
            ?>
            </select>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <script src="" async defer></script>
    </body>
</html>