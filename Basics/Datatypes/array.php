<?php
$cars = array("Volvo", "BMW", "Toyota");
echo $cars[0];
echo "<br>";
echo $cars[1];
echo "<br>";
echo $cars[2];
echo "<br>";
echo $cars[1] = "Ford";
echo "<br>";
$cars[] = "Maruti";
echo $cars[3];
echo "<br>";
sort($cars);
//Associative array
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";
echo "<br>";
echo "Ben is " . $age['Ben'] . " years old.";
echo "<br>";
echo "Joe is " . $age['Joe'] . " years old.";
echo "<br>";
// array sorting
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);
for($i = 0; $i < count($numbers); $i++){
    echo $numbers[$i];
    echo "<br>";
}
//asort for assceding order
//rsort for descending order
echo " Multidimensional array";
//A multidimensional array is an array containing one or more arrays.
$car = array(
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 5, 2),
    array("Land Rover", 17, 15)
);
echo $car[0][0].": In stock: ".$car[0][1].", sold: ".$car[0][2].".<br>";
echo $car[1][0].": In stock: ".$car[1][1].", sold: ".$car[1][2].".<br>";
echo $car[2][0].": In stock: ".$car[2][1].", sold: ".$car[2][2].".<br>";
echo $car[3][0].": In stock: ".$car[3][1].", sold: ".$car[3][2].".<br>";
// loop through a multidimensional array
for($row = 0; $row < 4; $row++){
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for($col = 0; $col < 3; $col++){
        echo "<li>".$car[$row][$col]."</li>";
    }
    echo "</ul>";
}
// count() function is used to count the number of elements in an array
echo count($car);
?>
