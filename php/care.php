<?php
require('connection/connection.php');

$sql = "SELECT * FROM plants_table";
$res = $connection->query($sql);
$plants = array();
while ($row = $res->fetch_assoc()) {
    $plants[] = $row['plantName'];
}
mysqli_close($connection);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Care Guide</title>
    <style>
        @font-face {
            font-family: 'Angela Cindysttar';
            src: url('fonts/Angela\ Cindysttar.otf') format('truetype');
        }

        @font-face {
            font-family: 'hello';
            src: url('fonts/Hello.otf') format('truetype');
        }

        @font-face {
            font-family: 'Luminous Free';
            src: url('fonts/Luminous\ Free.otf') format('truetype');
        }

        @font-face {
            font-family: 'Angela ';
            src: url('fonts/Angela.ttf') format('truetype');
        }

        @font-face {
            font-family: 'melina';
            src: url('fonts/Melina.ttf') format('truetype');
        }

        @font-face {
            font-family: 'simple';
            src: url('fonts/Sparky\ Stones.ttf') format('truetype');
        }

        @font-face {
            font-family: 'insight';
            src: url('fonts/Insight.otf') format('truetype');
        }

        @font-face {
            font-family: 'childa';
            src: url('fonts/Childa.otf') format('truetype');
        }

        @font-face {
            font-family: 'listen';
            src: url('fonts/Listen.otf') format('truetype');
        }

        @font-face {
            font-family: 'dreams';
            src: url('fonts/CaviarDreams.ttf') format('truetype');
        }

        @font-face {
            font-family: 'garet';
            src: url('fonts/Garet-Book.otf') format('truetype');
        }

        @font-face {
            font-family: 'coco';
            src: url('fonts/Cocogoose-Pro-Bold-trial.ttf') format('truetype');
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body,
        html {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            background-color: #eee5d7;
        }

        .navv {
            height: 53px;
            background-color: #fae1eb;
            color: rgb(0, 0, 0);
            text-align: center;
            padding: 0;
            font-family: 'Angela', serif;
            font-size: 17px;
            width: 600%;
            z-index: 1001;
            box-sizing: border-box;
        }

        .navv p {
            margin-top: 20px;
        }

        nav {
            height: 160px;
            background-color: #72355e;
            padding: 5px 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            overflow: visible;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 2000px;
            margin: auto;
            padding: 10px;
            transition: padding 0.3s ease;
        }

        .logo {
            max-width: 200px;
            max-height: 150px;
            width: auto;
            height: auto;
            transition: height 0.3s ease;
        }

        .nav-links {
            list-style-type: none;
            display: flex;
            margin: 0;
        }

        .nav-links li {
            font-family: 'melina', serif;
            font-size: 1.5rem;
            margin: 0 15px;
            position: relative;
        }

        .nav-links li a {
            line-height: 160px;
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            transition: color 0.3s ease;
        }

        .nav-icons {
            display: flex;
            align-items: center;
        }

        .nav-icons .icon {
            height: 40px;
            margin: 0 10px;
            transition: height 0.3s ease;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            text-align: center;
        }

        nav ul li {
            font-family: 'melina', serif;
            font-size: 1.1rem;
            display: inline-block;
            margin: 0 15px;
            position: relative;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            position: relative;
        }

        nav ul li a::after {
            content: "";
            position: absolute;
            left: 50%;
            bottom: 1px;
            width: 0;
            height: 2px;
            background-color: rgb(255, 255, 255);
            transition: width 0.3s ease, left 0.3s ease;
        }

        nav ul li a:hover::after {
            width: 100%;
            left: 0;
        }

        .cart-count {
            position: absolute;
            transform: translate(-130%, 10%);
            background-color: rgb(180, 31, 31);
            color: #fff;
            padding: 2px 5px;
            border-radius: 50%;
            font-size: 12px;
        }

        .content {
            margin-top: 130px;
            width: 100%;
            text-align: center;
            color: #333;
        }

        .parr {
            font-size: 30px;
            color: #551344;
            font-family: 'coco', serif;
            margin-bottom: 30px;
            margin-top: 20px;
        }

        .controls {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: none;
            z-index: 10;
        }

        .slide:hover .controls {
            display: flex;
        }

        .links button {
            margin: 0 20px;
            margin-top: 1px;
            margin-bottom: 40px;
            font-size: 15px;
            color: #fff;
            border: none;
            background-color: #643053;
            padding: 15px;
            cursor: pointer;
            border-radius: 10px;
            transition: background-color 0.3s ease;
            font-family: 'coco', serif;
        }

        .links button:hover {
            background-color: #b5a15c;
        }

        .links button:focus {
            background-color: #b5a15c;
        }

        .input-container {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .input-group {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0 20px;
        }

        .input-box {
            font-family: monospace;
            color: #502743;
            padding: 10px;
            font-size: 17px;
            border-radius: 5px;
            width: 300px;
            height: 60px;
            border: 2px solid #ccc5c5;
            transition: border-color 0.5s ease;
        }

        .input-box::placeholder {
            color: #a39a9a;
            opacity: 0.7;
            font-family: monospace;
        }

        .input-box:focus {
            border: 2px solid #69295f;
            font-family: monospace;
            outline: none;
            color: #6e2d65;
            background-color: #f8f1d9;
        }

        input[type="date"]::-webkit-calendar-picker-indicator {
            color: #6e2d65;
            cursor: pointer;
            padding: 5px;
        }

        .labell {
            font-family: 'garet', serif;
            margin-right: 25px;
            margin-bottom: 20px;
            font-size: 24px;
            color: #502743;
        }

        .sen {
            margin-top: 20px;
            margin-bottom: 20px;
            font-size: 29px;
            font-family: 'coco', serif;
            color: #502743;
        }

        .plant {
            width: 150px;
            margin: 0 20px;
            font-size: 20px;
            color: #fff;
            border: none;
            background-color: #643053;
            padding: 8px 20px;
            cursor: pointer;
            border-radius: 100px;
            transition: background-color 0.3s ease;
            font-family: 'coco', serif;
            margin-top: 30px;
            pointer-events: none;
        }

        .plant:hover {
            background-color: #b5a15c;
        }


    </style>
    <div class="navv">
        <p>20% OFF ON BRIDAL BOUQUETS</p>
    </div>
    <nav>
        <div class="nav-container">
            <a href="homefinal.php" class="logo-link" target="_blank">
                <img src="logo/white.png" alt="Flora Home Logo" class="logo">
            </a>
            <ul class="nav-links">
                <li><a href="homefinal.php">Home</a></li>
                <li><a href="caree.php">Care Guide</a></li>
                <li><a href="shopfinal.php">Shop</a></li>
                <li><a href="blogs.php">Blogs</a></li>
                <li><a href="about.php">About Us</a></li>
            </ul>
            <div class="nav-icons">
                <div class="icons">
                    <a href="cart.php">
                        <img src="seniorproject/photos/carttt.png" alt="Cart" class="icon">
                        <span id="cart-count" class="cart-count">0</span>
                    </a>
                </div>
                <div class="iconss">
                    <a href="registration.php">
                        <img src="photos/accnew.png" alt="User Account" class="icon">
                    </a>
                </div>
            </div>
        </div>
    </nav>
</head>

<body>

    <div class="content">
        <div class="input-container">

            <div class="input-group">
                <div class="labell">
                    <p>Planting Date</p>
                </div>
                <div class="inputt">
                    <input type="date" class="input-box" placeholder="Planting Date" id="planting-date">
                </div>
            </div>

            <div class="input-group">
                <div class="labell">
                    <p>Plant Name</p>
                </div>
                <div class="inputt">
                    <select class="input-box" id="plant-name">
                        <a href="goldenpothosblog.php">

                        <?php
                        // Populate the options from the $plants array
                        foreach ($plants as $plant) {
                            echo '<option value="' . $plant . '">' . $plant . '</option>';
                        }
                        ?>
                        </a>
                    </select>
                </div>
            </div>
        </div>

        <button class="button plant" id="plantButton" disabled>Plant</button>




    </div>

    <script>
        const select = document.getElementById('plant-name');
        const button = document.getElementById('submit-btn');

        // Add an event listener to the select element
        select.addEventListener('change', () => {
            // If a value is selected, enable the button
            if (select.value !== '') {
                button.disabled = false;
            } else {
                button.disabled = true;
            }
        });
        const navBar = document.querySelector("nav");
        const logo = document.querySelector(".logo");
        const navContainer = document.querySelector(".nav-container");
        const navLinks = document.querySelectorAll(".nav-links li a");

        navBar.style.height = "160px";
        logo.style.height = "120px";
        navContainer.style.padding = "20px";
        navLinks.forEach(link => link.style.lineHeight = "160px");
        window.addEventListener("scroll", function() {
            const scrollPosition = window.scrollY;

            if (scrollPosition > 50) {
                navBar.style.padding = "1px 0";
                logo.style.height = "100px";
                navContainer.style.padding = "6px";
                navBar.style.height = "100px";
                navLinks.forEach(link => link.style.lineHeight = "100px");
            } else {
                navBar.style.padding = "10px 0";
                logo.style.height = "120px";
                navContainer.style.padding = "20px";
                navBar.style.height = "160px";
                navLinks.forEach(link => link.style.lineHeight = "160px");
            }
        });

        var cartCount = document.getElementById('cart-count');

        var count = 0;

        var addToCartButtons = document.querySelectorAll('.add-to-cart');
        addToCartButtons.forEach(function(button) {
            button.addEventListener('click', function() {

                count++;


                cartCount.textContent = count;
            });
        });
    </script>
</body>

</html>