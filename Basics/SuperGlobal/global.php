<?php
//Global variables are variables that can be accessed from any scope.
//Global keyword is used to access a global variable from within a function.
$x = 5;
$y = 10;
function myTest(){
    global $x, $y;
    $y = $x + $y;
}
myTest();
echo $y;    
?>

