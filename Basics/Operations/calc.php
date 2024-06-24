<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="calc.php" method="post">
        <label for="">Radius</label>
        <input type="text" name="radius">
        <button>
            Submit
        </button>
    </form>
</body>
</html>
<?php
$radius = $_POST['radius'];
echo "Radius: " . $radius . "<br>";
$total = null;
//pi is used to get the value of pi
$total = pi() * $radius * $radius;
echo "Area of Circle: " . $total . "<br>";
$total = 2 * pi() * $radius;
echo "Circumference of Circle: " . $total . "<br>";
?>