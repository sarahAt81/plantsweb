
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Log In</title>
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

        .container h2 {
            font-family: 'Adelia', serif;
            margin-bottom: 20px;
            margin-left: 80px;
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

        .container input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #82453f;
            color: #82453f;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 30px;
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
            font-size: 15px;
            font-family: 'Luminous Free', sans-serif;
            background-color: #a05d56;
            color: #fff;
        }

        .container input[type="submit"]:hover {
            background-color: #814440;
        }
    </style>

    <style>
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
        <h2>Log In</h2>

        <form id="registrationForm" action="login_process.php" method="post">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="login" id="login">
        </form>

    </div>

</body>

</html>