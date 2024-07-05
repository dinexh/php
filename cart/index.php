<?php
include 'config.php';

$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product List</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <h1>Product List</h1>
    <div class="products">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='product'>";
                echo "<h2>" . $row['name'] . "</h2>";
                echo "<p>" . $row['description'] . "</p>";
                echo "<p>Price: $" . $row['price'] . "</p>";
                echo '<form method="post" action="cart.php">';
                echo '<input type="hidden" name="product_id" value="' . $row['id'] . '">';
                echo '<input type="number" name="quantity" value="1" min="1">';
                if ($row['quantity'] == 0) {
                    echo '<span style="color: red;">Out of stock</span>';
                } else {
                    echo '<input type="submit" name="add_to_cart" value="Add to Cart">';
                }
                echo '</form>';
                echo "</div>";
            }
        } else {
            echo "No products available.";
        }
        ?>
    </div>
</body>
</html>

<?php
$conn->close();
?>
