<?php


// User is logged in, proceed to add the product to the cart
require('connection/connection.php'); // Database connection

$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$user_id = $_POST['client_id']; // Assuming user ID is stored in session after login

// Check if the product is already in the cart
$sql_check = "SELECT * FROM cart WHERE user_id = '$user_id' AND product_name = '$product_name'";
$result = $connection->query($sql_check);

if ($result->num_rows > 0) {
    // Product is already in the cart, update the quantity
    $sql_update = "UPDATE cart SET quantity = quantity + 1 WHERE user_id = '$user_id' AND product_name = '$product_name'";
    if ($connection->query($sql_update)) {
        echo '<script>alert("Quantity updated in your cart!"); window.location.href="cart.php";</script>';
    } else {
        echo '<script>alert("Failed to update quantity. Please try again."); window.history.back();</script>';
    }
} else {
    // Product is not in the cart, add it with quantity 1
    $sql_insert = "INSERT INTO cart (user_id, product_name, product_price, quantity) VALUES ('$user_id', '$product_name', '$product_price', 1)";
    if ($connection->query($sql_insert)) {
        echo '<script>alert("Product added to cart!"); window.location.href="cart.php";</script>';
    } else {
        echo '<script>alert("Failed to add product to cart. Please try again."); window.history.back();</script>';
    }
}

$connection->close();
?>
