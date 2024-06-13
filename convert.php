<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
 <h1>Result</h1> 
  <?php 
  // super global variables
  $amount=$_GET["amount"]; // get the value of amount from the form
  $crypto= $_GET["crypto"]; // get the value of crypto from the form
  echo "<p>You want to convert $amount from $crypto.</p>"; // display the amount and the cryptocurrency
  
  ?>
</body>
</html>