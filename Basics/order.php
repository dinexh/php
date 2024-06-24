<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="order.php" method ="post">
    <label> User Name:</label>
    <input type="text" name="username" id="username" placeholder="Enter your username">
    <label for=""> Quantity</label>
    <input type="number" name="quantity" id="quantity" placeholder="Enter the quantity">
    <button>
        submit
    </button>
    </form>
</body>
</html>
<?php
  $item = "pen";
  $price = 10;
  $Qantity = $_POST['quantity'];
  echo "Hello " . $_POST['username'];
    echo "<br>";
    echo "pen price is " . $price;
    echo "<br>";
  echo " You have ordered {$Qantity} x {$item}";
    echo "<br>";
    $totalPrice = $Qantity * $price;
    echo "Total price is " . $totalPrice;
?>
