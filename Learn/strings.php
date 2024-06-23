<?php
$x = "hello world";
echo $x;
echo "<br>";
// string length - strlen()
echo strlen($x);
echo "<br>";
// for returning in uppercasse - strtoupper()
echo strtoupper($x);
echo "<br>";
// for returning in lowercase - strtolower()
echo strtolower($x);
echo "<br>";
// for replacing - str_replace()
echo str_replace("world", "dolly", $x); 
echo "<br>";
// for finding position of a word - strpos()
echo strpos($x, "world");
echo "<br>";
