<html>
    <body>
        <form action="postDemo.php" method="post">
            <input type ="text" name="information">
        </form>
        
<?php
$myData = $_POST[ information ];
echo ("You have inputted: ". $myData);
?>
</body>
</html>