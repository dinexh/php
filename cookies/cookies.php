<?php
//cookies stores information on the client side rather than the server side like sessions
echo "For Setting cookies";
setcookie("name","value",time()+60*60*24*365);
// Retrieving the value of the "name" cookie
$name = $_COOKIE['name'];
echo "Value of 'name' cookie: " . $name;
