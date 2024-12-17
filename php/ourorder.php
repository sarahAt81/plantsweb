<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // If not, redirect to the login page
    header("Location: login.php");
    exit();
}
// If logged in, get the client_id
$client_id = $_SESSION['user_id'];

require('connection.php');
$client_id = $_SESSION['user_id'];

$sql = "SELECT * FROM `users` INNER JOIN orders ON users.id=orders.user_id WHERE users.id='$client_id'";
// Run query
$result = $conn->query($sql);

$order = $result->fetch_all(MYSQLI_ASSOC); // Multi-result
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .table-container {
            background-color: #ffffff;
            border: 2px solid #72355e;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 1200px;
            width: 100%;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead th {
            background-color: #72355e;
            color: #000;
            text-align: center;
        }

        tbody td {
            text-align: center;
        }

        .btn-warning {
            color: #000;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="table-container">
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Date Order</th>
                        <th>Country</th>
                        <th>City</th>
                        <th>Zip Code</th>
                        <th>Address</th>
                        <th>Total</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($order as $o) { ?>
                        <tr>
                            <td><?php echo htmlspecialchars($o['dateorder']); ?></td>
                            <td><?php echo htmlspecialchars($o['country']); ?></td>
                            <td><?php echo htmlspecialchars($o['city']); ?></td>
                            <td><?php echo htmlspecialchars($o['zipcode']); ?></td>
                            <td><?php echo htmlspecialchars($o['address']); ?></td>
                            <td><?php echo htmlspecialchars($o['total']); ?>$</td>
                            <td><a href="order_details.php?orders_id=<?php echo $o['orders_id']; ?>" class="btn btn-sm btn-success">Order Details</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
