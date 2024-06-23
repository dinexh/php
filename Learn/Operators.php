<?php
//Arithmetic Operators
echo "Arithmetic Operators <br>";
$x = 10;
$y = 20;
$sum = null;
//addition
$sum = $x + $y;
echo "Sum of $x and $y is: $sum <br>";
//subtraction
$sum = $x - $y;
echo "Difference of $x and $y is: $sum <br>";
//multiplication
$sum = $x * $y;
echo "Product of $x and $y is: $sum <br>";
//division
$sum = $x / $y;
echo "Division of $x and $y is: $sum <br>";
//modulus
$sum = $x % $y;
echo "Modulus of $x and $y is: $sum <br>";

echo "Incriement and Decrement Operators <br>";
//Increment and Decrement Operators
$counter = 10;
// $counter++;
$counter = $counter + 1;
echo "Increment of 10 is: $counter <br>";
//operator precedence basically follows the BODMAS rule
$counter = 10;
$counter = $counter + 1 * 2;
echo "Increment of 10 is: $counter <br>";
?>