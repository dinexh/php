<?php

// variable = a reusable container that stores a value
// a string , int . float , boolean , array , object , null etc..

$name = "John <br>";
/* $ used to declare a variable name -> name of variable
" " -> string value
*/
echo $name;
// output: John

// non string literal 

echo " hello {$name} ";

// output: hello John

// for int

$age = 25;
echo " you are {$age} years old <br>";

// output: you are 25 years old

// for float
$cgpa  = 3.5;

echo " your cgpa is {$cgpa}";

// for boolean

$employed = true;
$online = false;
$for_sale = true;

echo " employed: {$employed} <br>";
echo " online status: {$online} <br>";
echo " for sale: {$for_sale} <br>";
// adding two or more varibles

echo " employed: {$employed} , online status: {$online} , for sale: {$for_sale} <br>";
?>