<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="functions.php" method="post">
    <label for="">X:</label>
    <input type="text" name="x">
    <label for="">Y:</label>
    <input type="text" name="y">
    <button>
        Submit
    </button>
    </form>
</body>
</html>
<?php
    $x = $_POST['x'];
    $y = $_POST['y'];
    echo "X: " . $x . "<br>";
    echo "Y: " . $y . "<br>";
    $total = null;
    //abosulte value is used to convert negative value to positive value
    $total = abs($x);
    echo "Absolute value of X: " . $total . "<br>";
    //round is used to round off the value
    //floor is used to round off the value to the lowest value
    //ceil is used to round off the value to the highest value
    //pow is used to calculate the power of the value
    $total = round($x);
    echo "Round value of X: " . $total . "<br>";
    $total = floor($x);
    echo "Floor value of X: " . $total . "<br>";
    $total = ceil($x);
    echo "Ceil value of X: " . $total . "<br>";
    $total = pow($x, 2);
    echo "Power of X: " . $total . "<br>";
    //sqrt is used to calculate the square root of the value
    $total = sqrt($x);
    echo "Square root of X: " . $total . "<br>";
    //max is used to calculate the maximum value
    //min is used to calculate the minimum value
    $total = max($x, $y);
    echo "Maximum value: " . $total . "<br>";
    $total = min($x, $y);
    echo "Minimum value: " . $total . "<br>";
    //rand is used to generate random value
    $total = rand($x, $y);
    echo "Random value: " . $total . "<br>";
    
    function add($x, $y){
        return $x + $y;
    }
    function subtract($x, $y){
        return $x - $y;
    }
    function multiply($x, $y){
        return $x * $y;
    }
    function divide($x, $y){
        return $x / $y;
    }
    echo "Addition: " . add($x, $y) . "<br>";
    echo "Subtraction: " . subtract($x, $y) . "<br>";
    echo "Multiplication: " . multiply($x, $y) . "<br>";
    echo "Division: " . divide($x, $y) . "<br>";