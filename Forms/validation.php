<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="validation.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required minlength="2"><br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>
    <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php
$name = $email = "";
$nameErr = $emailErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = sanitize_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = sanitize_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }
}

function sanitize_input($data) {
    //The trim() function removes whitespace and other predefined characters from both sides of a string.
    $data = trim($data);
    //The stripslashes() function removes backslashes added by the addslashes() function.
    $data = stripslashes($data);
    //The htmlspecialchars() function converts some predefined characters to HTML entities.
    $data = htmlspecialchars($data);
    return $data;
}
//The preg_match() function searches a string for pattern, returning true if the pattern exists, and false otherwise.
$name = test_input($_POST["name"]);
if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
    $nameErr = "Only letters and white space allowed";
  }
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }   
    echo "Name: ".$name."<br>";
    echo "Email: ".$email."<br>";
    //filter_var() function filters a variable with the specified filter.
    //In this case, the filter is FILTER_VALIDATE_EMAIL, which validates an e-mail address.
    //If the data is a valid e-mail address, the function returns true, otherwise it returns false.
    //The FILTER_SANITIZE_EMAIL filter removes all illegal characters from an e-mail address.
    
?>