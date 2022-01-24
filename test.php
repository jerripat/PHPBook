<html>
    <body>
        <form action="getDemo.php" method="get">
            <input type ="text" name="information">
            
        </form>
        <
<?php
$myData = $_GET[ information ];
echo ("You have inputted: ". $myData);
?>
</body>
</html>
$currentdate = getdate();
$month = $currentdate['mon'];
?>
<select name='month' >
<?php 
        for($m = 1; $m <= 12; $m++)
        {
    ?>
            <option value=" <?php echo($m); ?>"
            <?php if ($month == $m) 
            {echo "selected";}  ?>>
            <?php echo($mon[$m]); ?></option>
            <?php
        }
        ?>
        </select>*/