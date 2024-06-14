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
  if(isset($_POST["amount"]) && isset($_POST["crypto"])){
  $amount=$_POST["amount"]; // get the value of amount from the form
  $crypto= $_POST["crypto"]; // get the value of crypto from the form
  
    echo "<p>You want to convert $amount $crypto.</p>"; // display the amount and the cryptocurrency
  }
  else{
    echo "<h2>Please enter the amount and select the cryptocurrency.</h2>"; // display this message if the amount and the cryptocurrency are not set
  }
  
  ?>
</body>
</html>