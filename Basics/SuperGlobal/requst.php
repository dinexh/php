<?php
//$_REQUEST is a PHP super global variable which contains submitted form data, and all cookie data.
//The $_REQUEST variable is a variable that is used to collect data after submitting an HTML form.
//The $_REQUEST variable can also collect data sent through a URL.
//In other words, $_REQUEST is an array containing data from $_GET, $_POST, and $_COOKIE.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="requst.php" method="post">
        <label for="">name</label>
        <input type="text" name="name">
        <button>
            Submit
        </button>
    </form>
</body>
</html>
<?php
$name = $_REQUEST['name'];
echo $name;