<?php
require('connection/connection.php');
$orders_id = $_GET['orders_id'];

$sql = "SELECT * FROM `orders` INNER JOIN order_details ON orders.orders_id=order_details.orders_id WHERE orders.orders_id='$orders_id'";
// run query:
$result = $conn->query($sql);

// fetch query: 
$order = $result->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
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
            max-width: 1000px;
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

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f2f2f2;
        }

        .table-striped tbody tr:nth-of-type(even) {
            background-color: #ffffff;
        }
    </style>
</head>

<body>
    <div class="table-container">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>SubTotal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($order as $o) { ?>
                        <tr>
                            <td><?php echo htmlspecialchars($o['name']); ?></td>
                            <td><?php echo htmlspecialchars($o['quantity']); ?></td>
                            <td><?php echo htmlspecialchars($o['price']); ?>$</td>
                            <td><?php echo htmlspecialchars($o['sub_total']); ?>$</td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
