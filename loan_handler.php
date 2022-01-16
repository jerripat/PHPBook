
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_POST['fullname'];
  $email = $_POST['email'];
  $employment = $_POST['employment'];
  $age = $_POST['age'];
  
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
?>
<!doctype html>
<html>
    <head>
        <title>My Loan</title>
</head>
<body>
    <main>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
              Name: <input type="text" name="fname">
              <input type="submit">
            </form>
    </main>
</body>

</html>