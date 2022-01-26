
<!DOCTYPE html>
 <link>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="includes/CSS/layout.css" /> <link rel="stylesheet" type="text/css" href="includes/CSS/styles.css" />
    <link rel="stylesheet" type="text/css" href="includes/CSS/styles-flexbox.css" />
     <title>Product Item details</title>
 </link>

 <body>
     <header>
           
     </header>
     <main>
<form name="product" method="post" action="products.php">
         <div class="container">   
        <p>Product item name <input type="text" name="item" size="20" /></p>
        <p>Product Cost <input type="text" name="cost" size="10" /></p>
        <p>Tax value <input type="text" name="tax" size="10" /></p>
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
</form>
     </main>
       <footer></footer>
    </body>
 </html>
