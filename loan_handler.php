<!doctype html="en">

<title>Loan Enquiry</title>

        <style>
         <?php include style.css; ?>
         
         .button1
          {
           box-shadow: 0 10px 16px 0 rgba(3, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
       }
        .square {
           background: #3254a8;
           width: 25rem;
           aspect-ratio: 2/1;
           border: solid black;
           box-shadow: 15px 15px 10px rgba(60, 56, 140, 1);
           display: block;
           margin-top: 2rem;
           margin-left: 10rem;
       }
        .container {
             display: flex;
              height: 50px;
              justify-direction:  center;
              align-tems: center;
        }
         </style>
<head>
        
        
        
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
     <title>Loan Enquiry</title>
 </head>
 <body class="container">
     <form class="square">
        <?php
            $name = isset($_POST['fullname']);
            $email = isset($_POST['emailaddress']);
            $employment = isset($_POST['employment']);
            $age = isset($_POST['age']);
          
             if  (isset($_POST['fullname'])) 
             {
                       $name = stripslashes($_POST['fullname']);
             }
             else
             {
                 echo('<p>Please enter your name</p>');
                       $name = null;
             }
                           
             if  (isset($_POST['emailaddress']))
             {
                       $email = stripslashes($_POST['emailaddress']);
             }
             else
             {
                 echo('<p id="email">Please enter your email</p>');
                       $email =null;
             }
            
            if  (isset($_POST['employment'])) 
            {
                           
                       $employment = stripslashes($_POST['employment']);
            }
            else
            {
                echo('<p id="employed">Please enter your Employer</p>');
                       $employment = null;
            }
                      
            if  (isset($_POST['age']))
            {
                       $age = stripslashes($_POST['age']);
            }
            else 
            {
                echo('<p>Please enter your age</p>');
                       $age = null;
            }
                                   
            echo "<p>Thank you, <b>$name</b>, for tour enquery</p>
            <p>We will reply to you at your email address: <strong>$email</strong>.</p>";
            echo("<p>You are $employment $age years old</p>");       
 ?>
        </form>
       </main>
    </body>
</html>
