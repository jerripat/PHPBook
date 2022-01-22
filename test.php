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