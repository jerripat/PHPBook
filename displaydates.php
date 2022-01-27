
<div class="square">
    <br/><br/>
    <div style="padding:20px">
    <h2><center> Chapter 6 functions <br.> Date and Time</center> </h2>
</div>
</div>
<?php

$mon = array(1 => "Jan", 2 => "Feb", 3 => "Mar", 4 => "Apr",
5 => "May", 6 => "Jun", 7 => "Jul", 8 => "Aug", 9 => "Sep",
10 => "Oct", 11 => "Nov", 12 => "Dec",);

?>
<style>
 <?php include("includes/CSS/styles-flexbox.css"); ?>
 <?php include("includes/CSS/styles.css"); ?>
</style>

<?php
$currentdate = getDate();
$month =$currentdate["mon"];
$day = $currentdate["mday"];
$year = $currentdate["year"];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Calculations</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="CSS/styles-flexbox.css">
    </head>
    <title> Calculate Tax</title>
    </head>
<body>
    <form>     
     <div class="container">
    <div class="items-1 item">
      <strong>Month</strong>
    <select name="month">
        <?php
  for ($m = 1; $m <= 12; $m++){
      ?>
            <option value="<?php echo($m); ?> " <?php if ($month == $m) {echo"selected";} ?> ><?php echo($mon[$m]); ?></option>
    <?php
      }
      ?>  
</select> 
</div>
    <div class="items-2 item">
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
</div>
    <div class="items-3 item">
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
      </div>
                    </form>
         <button class="btn btn-primary button1" type="button" onclick="open(location, '_self').close();">Close</button>
        
         <button class="btn btn-primary button1" type="button" onclick="submit">Submit</button>
        </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>   
       
    </body>
</html>