<html>
    <p>Please select your favorite color</p>
    <form method=get>
        <input type = "radio" name="color" value="Red">Red<br>
        <input type = "radio" name="color" value="Yellow">Yellow<br>
        <input type = "radio" name="color" value="Green">Green<br>
        <br><br>
        <input type ="submit" value="Submit">
        <br><br>
</form>
</html>

<?php
echo "You Select:<br>";
$hobby = $_GET["color"];

echo($hobby);
$date =date("M d Y");
$hour = date("h:i:s");
$week = date("D H A");
echo $date . ' - ' . $hour  . ' - ' . $week; 

?>
        