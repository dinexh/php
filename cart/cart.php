<?php
session_start();
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_to_cart'])) {
    $user_id = 1; 
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    $stock_check_sql = "SELECT quantity FROM products WHERE id = $product_id";
    $stock_check_result = $conn->query($stock_check_sql);
    if ($stock_check_result->num_rows > 0) {
        $stock = $stock_check_result->fetch_assoc();
        if ($stock['quantity'] >= $quantity) {
            $sql = "INSERT INTO cart (user_id, product_id, quantity) VALUES ($user_id, $product_id, $quantity)
                    ON DUPLICATE KEY UPDATE quantity = quantity + VALUES(quantity)";

            if ($conn->query($sql) === TRUE) {
                echo "Item added to cart successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Not enough stock available";
        }
    } else {
        echo "Product not found";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['remove_from_cart'])) {
    $cart_id = $_POST['cart_id'];

    $sql = "DELETE FROM cart WHERE id = $cart_id";

    if ($conn->query($sql) === TRUE) {
        echo "Item removed from cart successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$user_id = 1; // Replace with actual user ID, possibly from session
$sql = "SELECT cart.id, products.name, products.price, products.quantity AS stock, cart.quantity
        FROM cart
        JOIN products ON cart.product_id = products.id
        WHERE cart.user_id = $user_id";
$result = $conn->query($sql);

$total_amount = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cart</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Your Cart</h1>
    <div class="cart">
        <?php
        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>Product</th><th>Price</th><th>Quantity</th><th>Total</th><th>Status</th><th>Action</th></tr>";
            while ($row = $result->fetch_assoc()) {
                $item_total = $row['price'] * $row['quantity'];
                $total_amount += $item_total;
                echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>$" . $row['price'] . "</td>";
                echo "<td>" . $row['quantity'] . "</td>";
                echo "<td>$" . $item_total . "</td>";
                if ($row['stock'] == 0) {
                    echo "<td>Out of Stock</td>";
                } elseif ($row['stock'] < $row['quantity']) {
                    echo "<td>Only " . $row['stock'] . " left</td>";
                } else {
                    echo "<td>In Stock</td>";
                }
                echo '<td><form method="post" action="cart.php">';
                echo '<input type="hidden" name="cart_id" value="' . $row['id'] . '">';
                echo '<input type="submit" name="remove_from_cart" value="Remove">';
                echo '</form></td>';
                echo "</tr>";
            }
            echo "<tr><td colspan='4' style='text-align:right'>Total:</td><td>$" . $total_amount . "</td><td></td></tr>";
            echo "</table>";
        } else {
            echo "Your cart is empty";
        }
        ?>
    </div>
</body>
</html>

<?php
$conn->close();
?>
