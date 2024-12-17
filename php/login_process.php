<?php
session_start();
require('connection/connection.php'); // Include your database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = mysqli_real_escape_string($connection, trim($_POST['email']));
    $password = trim($_POST['password']);

    // Check if email and password are provided
    if (empty($email) || empty($password)) {
        echo '<script>alert("Please fill in all fields."); window.location.href="login.php";</script>';
        exit();
    }

    // Query to check user credentials
    $sql = "SELECT * FROM client WHERE email = '$email'";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verify the password
        if (password_verify($password, $user['password'])) { // Assuming passwords are hashed
            // Set session variables
            $_SESSION['client_id'] = $user['id'];
            $_SESSION['client_name'] = $user['client_name'];
            $_SESSION['email'] = $user['email'];

            echo '<script>alert("Login successful!"); window.location.href="homefinal.php";</script>';
        } else {
            echo '<script>alert("Invalid password."); window.location.href="login.php";</script>';
        }
    } else {
        echo '<script>alert("User not found."); window.location.href="login.php";</script>';
    }

    $connection->close();
}
?>
