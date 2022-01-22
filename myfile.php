<html>
    <body>
        <form action="myfile.php" method="get">
            <input type ="text" name="information">
        </form>
        <
<?php

$myData = $_POST[ information ];
echo ("You have inputted: ". $myData);
?>
</body>
</html>