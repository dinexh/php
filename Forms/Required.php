<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Required.php" method="post">
        <label for="">Name:</label>
        <input type="text" name="name" required><br><br>
        <label for="">Email:</label>
        <input type="email" name="email" required><br><br>
        <button>
            Submit
        </button>
    </form>
</body>
</html>
<?php   
$name = $email = "";
$nameErr = $emailErr = "";
if($_SERVER["REQUST_METHOD"]== "POST")
{
    if(empty($_POST["name"]))
    {
        $nameErr = "Name is required";
    }
    else
    {
        $name = test_input($_POST["name"]);
    }
}