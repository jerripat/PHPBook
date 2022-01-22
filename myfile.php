<html>
    <body>
        <form action="myfile.php" method="get">
            <input type ="text" name="information">
            <input type="password" name="secret">
            <input type="submit" value="send">
            
        </form>
        <
<?php
$information = "Dont Know any";
$myData = $_POST[ 'information' ];
echo ("You have inputted: ". $myData);
?>
</body>
</html>