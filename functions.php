<?php
 function printHello(){
  echo "Hello world";
 }
 function calculate(int $price,float $tax=0.05, string $tax_name){ // we can data type the parameters in the function
  $total = $price + $price * $tax;
  return "The total price is $total with $tax_name";
 }
 printHello();
echo calculate(price:100,tax:0.1); // 110