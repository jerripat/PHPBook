<!doctype html="en">

<title>Loan Enquiry</title>

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
     <title>Loan Enquiry</title>
 </head>

 <body>
     <main>
        <?php
            $name = $_POST['fullname'];
            $email = $_POST['emailaddress'];
            $employment = $_POST['employment'];
            $age = $_POST['age'];
          
             if ($_POST['fullname']) 
             {
                        if  (!empty($_POST['fullname'])){
                            $name = stripslashes($_POST['fullname']);
                        }
                        else
                         {
                            $name = NULL;
                            echo '<p><font color="red">Please enter your name</font></p>';
                        }
                            $name = $_POST['fullname'];
            }else {
                    echo("<p>You forgot to select your name</p>");
                    $name = NULL;
            }
            if  ($_POST['emailaddress'])
            {
                         if (!empty($_POST['emailaddress'])){
                            $email = stripslashes($_POST['emailaddress']);
                        }
                        else
                         {
                            $email = NULL;
                            echo '<p id="email">Please enter your email</p>';
                        }
                        
                        $email = $_POST['emailaddress'];
            } 
            else 
            {
                $email = null;
            }
            if ($_POST['employment']) 
            {
                            if (!empty($_POST['employment'])){
                                $employment = stripslashes($_POST['employment']);
                            }
                            else
                             {
                                $employment = null;
                                echo'<p id="employed">Please enter your Employer</p>';
                            }
                                $employment = $_POST['employment'];
            }
            else 
            {
                                echo("<p>You forgot to select your employment state</p>");
                                $employment = null;
            }
            if ($_POST['age'])
            {
                                if(!empty($_POST['age'])){
                                    $age = stripslashes($_POST['age']);
                                }
                                else 
                                {
                                    $age = null;
                                    echo'<p>Please enter your age</p>';
                                }
                                    $age =$_POST['age'];
            }
            else
            {
                                    $age = NULL;
            }
            echo "<p>Thank you, <b>$name</b>, for tour enquery</p>
            <p>We will reply to you at your email address: <strong>$email</strong>.</p>";
            echo("<p>You are $employment $age years old</p>");       
        ?>
        
       </main>
    </body>
</html>
