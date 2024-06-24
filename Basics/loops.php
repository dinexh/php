<?php
// In php same as any other language we have loops
// while loop
$i =  0;
echo "While loop";
while($i < 10){
    echo $i;
    echo "<br>";
    $i++;
}
// for loop
echo "For loop";
for($i = 0; $i < 10; $i++){
    echo $i;
    echo "<br>";
}
// do while loop
echo "Do while loop";
$i = 0;
do{
    echo $i;
    echo "<br>";
    $i++;
} while($i < 10);
echo "<br>";
echo "For each loop";
// for each loop
$colour = array("red", "green", "blue");
foreach($colour as $value){
    echo $value;
    echo "<br>";
}
// continue and break
echo "Continue and break";
for($i = 0; $i < 10; $i++){
    if($i == 5){
        continue;
    }
    if($i == 8){
        break;
    }
    echo $i;
    echo "<br>";
}