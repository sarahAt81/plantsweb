<?php
require('connection/connection.php'); // Include your database connection

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate input
    $username = mysqli_real_escape_string($connection, $_POST['client_name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['pass']);

    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert data into the `users` table
    $sql = "INSERT INTO client (client_name, email, pass) VALUES ('$username', '$email', '$hashed_password')";

    if ($connection->query($sql) === TRUE) {
        echo '<script>alert("Registration successful! Please log in."); window.location.href="login.php";</script>';

    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }

    $connection->close(); // Close the database connection
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Camden:wght@400&family=Palma+Paradis:wght@400&display=swap" rel="stylesheet">


    <style>
        @font-face {
    font-family: 'Adelia';
    src: url('fonts/adelia.otf') format('truetype');
}
@font-face {
    font-family: 'Muth';
    src: url('fonts/Muthiara\ demo\ version.otf') format('truetype');
}
@font-face {
    font-family: 'Angela Cindysttar';
    src: url('fonts/Angela\ Cindysttar.otf') format('truetype');
}
@font-face {
    font-family: 'Luminous Free';
    src: url('fonts/Luminous\ Free.otf') format('truetype');
}
@font-face {
    font-family: 'Angela ';
    src: url('fonts/Angela.ttf') format('truetype');
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}


body {
    font-family: 'Luminous Free', sans-serif;
    background-color: #f5efe5;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

/* 
.nav {
    background-color: #ddbbab ;
    padding: 10px 0;
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 1000;
}

.nav ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
    text-align: center;
}

.nav ul li {
    display: inline;
    margin: 0 15px;
}

.nav ul li a {
    color:#82453f ;
    text-decoration: none;
    padding: 10px 15px;
    transition: background-color 0.3s ease;
}*/
.container {
    background-color: #160303;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}


.container h2 {
    font-family: 'Adelia', serif;
    margin-bottom: 20px;
    margin-left: 80px ;
}


.container label {
    display: block;
    margin: 10px 0 5px;
}


.container input[type="text"],
.container input[type="email"],
.container input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #502743;
    border-radius: 4px;
}



.container .login-link {
    text-align: center;
    margin-top: 50px; 
    font-size: 12px;
    color: #666;
}

.container .login-link a {
    color: #502743; 
    text-decoration: none;
}

.container .login-link a:hover {
    text-decoration: underline; 
}
.container input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #a05d56;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-top: 30px;
    font-size: 15px;
    font-family: 'Luminous Free', sans-serif;
  }
  
  .container input[type="submit"]:hover {
    background-color: #814440;
  }
        body {
            background-image: url('photos/download.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .container h2 {
            margin-bottom: 20px;
        }


        .container label {
            display: block;
            margin: 10px 0 5px;
        }

        .container input[type="text"],
        .container input[type="email"],
        .container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }


        .container input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #502743;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .container input[type="submit"]:hover {
            background-color: #502743;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Sign In</h2>
        <form id="registrationForm" action="register.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="Sign In">
        </form>

     <div class="login-link">
        Already have an account? <a href="login.php">Log in</a>
    </div>
    </div>

</body>
</html>
