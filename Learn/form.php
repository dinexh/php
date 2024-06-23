<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form.php" method="post">
    <label> User Name:</label>
    <input type="text" name="username" id="username" placeholder="Enter your username">
    <label for="">Password</label>
    <input type="password" name="password" id="password" placeholder="Enter your password">
    <button>
        Submit
    </button>
    </form>
</body>
</html>
<?php
// get and post are superglobals that are used to collect and display form data
// $_GET is an array that collects data from a form with method="get"
// $_POST is an array that collects data from a form with method="post"
 echo $_POST['username']."<br>";
 // line break $_get is bacsically like a string and we want a line break so contactenation is used ."<br>"
    echo $_POST['password'];
// in get method the data is displayed in the url but in post method the data is not displayed in the url
 ?>