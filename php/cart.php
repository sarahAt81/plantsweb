<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['client_id'])) {
    // Redirect to the login page
    header("Location: register.php");
    exit();
}

require('connection/connection.php');

// Fetch cart items for the logged-in user
$user_id = $_SESSION['client_id'];
$sql = "SELECT * FROM cart WHERE user_id = '$user_id'";
$result = $connection->query($sql);

// Variables for calculations
$subtotal = 0;
$delivery_fee = 5; // Example delivery fee
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Cart</title>
  <link rel="stylesheet" href="homefinal.css">
  <style>
    /* General page styling */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #dfd4ca;
    }

    h2 {
      text-align: center;
      margin: 20px 0;
      color: #333;
    }

    /* Table styling */
    table {
      width: 60%;
      margin: 20px auto;
      border-collapse: collapse;
      background: #fff;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    table th, table td {
      border: 1px solid #ccc;
      padding: 10px;
      text-align: center;
    }

    table th {
      background-color: #f4f4f4;
      font-weight: bold;
      color: #555;
    }

    table tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    .total-row td {
      font-weight: bold;
      background-color: #f4f4f4;
    }

    /* Centering the table */
    table {
      margin-left: auto;
      margin-right: auto;
    }

    /* Adding some padding around the page */
    body {
      padding: 20px;
    }

    /* Checkout button styling */
    .checkout-container {
      text-align: center;
      margin-top: 20px;
    }

    .checkout-btn {
      padding: 10px 20px;
      font-size: 16px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .checkout-btn:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>

<h2>Your Cart</h2>
<table>
    <tr>
        <th>Product Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Subtotal</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()) { 
        $item_subtotal = $row['product_price'] * $row['quantity']; // Calculate subtotal for each item
        $subtotal += $item_subtotal; // Add to subtotal
    ?>
    <tr>
        <td><?php echo htmlspecialchars($row['product_name']); ?></td>
        <td><?php echo number_format($row['product_price'], 2); ?> USD</td>
        <td><?php echo $row['quantity']; ?></td>
        <td><?php echo number_format($item_subtotal, 2); ?> USD</td>
    </tr>
    <?php } ?>
    <tr class="total-row">
        <td colspan="3">Subtotal</td>
        <td><?php echo number_format($subtotal, 2); ?> USD</td>
    </tr>
    <tr class="total-row">
        <td colspan="3">Delivery Fee</td>
        <td><?php echo number_format($delivery_fee, 2); ?> USD</td>
    </tr>
    <tr class="total-row">
        <td colspan="3">Total</td>
        <td><?php echo number_format($subtotal + $delivery_fee, 2); ?> USD</td>
    </tr>
</table>

<!-- Checkout button -->
<div class="checkout-container">
    <form action="checkout.php" method="post">
        <button type="submit" class="checkout-btn">Proceed to Checkout</button>
    </form>
</div>

</body>
</html>
