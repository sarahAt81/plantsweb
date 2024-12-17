<?php

require('connection/connection.php');

$sql = "SELECT * FROM plants_table";
$sql1 = "SELECT * FROM  soiltype";
$sql2 = "SELECT *FROM plantdiseases";
$dres = mysqli_query($connection, $sql2);
$plant_res = mysqli_query($connection, $sql);
$soilres = mysqli_query($connection, $sql1);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                <li><a href="care.php">Care Guide</a></li>
                <li><a href="shopfinal.php">Shop</a></li>
                <li><a href="blogs.php">Blogs</a></li>
                <li><a href="about.php">About Us</a></li>
            </ul>
            <div class="nav-icons">
                <div class="icons">
                    <a href="cart.php">
                        <img src="photos/carttt.png" alt="Cart" class="icon">
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
        <div class="dropdown">
            <img class="menuu" src="photos/menuu.png" alt="Your Image" style="width: 16px; height: 20px; margin-left: -24px; margin-top: 40px;" onclick="myFunction()">
            <div id="myDropdown" class="dropdown-content">
                <div class="dropdownn">
                    <a href="shopfinal.php#fallsection">Fall Collection</a>
                </div>
                <div class="dropdownn">
                    <a href="shopfinal.php#onlyroses">Only Roses</a>
                </div>
                <div class="dropdownn">
                    <a href="shopfinal.php#mixedf">Mixed Flowers</a>
                </div>
                <div class="dropdownn">
                    <a href="shopfinal.php#bridal">Bridal Bouquets</a>
                </div>
                <div class="dropdownn">
                    <a href="shopfinal.php#boxes">Flower Boxes</a>
                </div>
            </div>
        </div>
    </nav>
</head>
<style>
    body {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        background-color: #dfd4ca;
    }

    .navv {
        height: 53px;
        background-color: #fae1eb;
        color: rgb(0, 0, 0);
        text-align: center;
        padding: 0;
        font-family: 'Angela', serif;
        font-size: 17px;
        width: 120%;
        z-index: 1001;
        box-sizing: border-box;
        margin-top: -8px;
    }

    .navv p {
        margin-top: 20px;
    }

    nav {
        height: 160px;
        background-color: #72355e;
        padding: 5px 0;
        position: fixed;
        width: 101%;
        top: 0;
        z-index: 1000;
        overflow: visible;
        box-shadow: 0 0 10px rgba(71, 8, 63, 0.5);
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

    .dropbtn {
        color: white;
        padding: 16px;
        font-size: 16px;
        transform: translateY(-200%);
        border: none;
        cursor: pointer;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .menuu {
        height: 10px;
        position: fixed;
        top: 60px;
        left: 730px;
    }

    .dropdown-content {
        display: none;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
        position: relative;
        top: -80px;
        left: 710px;
        background-color: #ecd4e5;
        border-radius: 2px;
    }


    .dropdown-content a {
        text-align: center;
        color: rgb(59, 11, 45);
        text-decoration: none;
        display: block;
        font-family: serif;
        font-size: 14px;
        margin-top: 10px;
        padding: 8px;
    }

    .dropdown-content a:hover {
        color: #b18484;
    }

    .dropdown img {
        cursor: pointer;
    }

    .dropdown-content.show {
        display: block;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .boxx {
        background-color: #f0f0f0;
        padding: 10px;
        border-radius: 20px;
        width: 1300px;
        height: 300px;
        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.2);
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
    }

    .box {
        background-color: #f0f0f0;
        padding: 10px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        position: relative;
        transition: transform 0.3s ease;
        overflow: hidden;
        border-radius: 15px;
        width: 140px;
        height: 100px;
        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.2);
        text-align: center;
        margin: 9px 7px;

    }

    .title {
        margin: 0;
        font-size: 20px;
        font-weight: bold;
        color: rgb(63, 10, 46);
    }

    .line {
        border: 0;
        border-top: 2px solid #000;
        margin: 10px 0;
    }

    .container {
        font-family: 'melina';
        font-size: 45px;
        color: #5e3232;
        margin-top: 145px;
    }

    .content {
        font-size: 16px;
        color: #333;
        margin-top: 60px;
        position: absolute;
        top: 50;
        left: 40;
        text-align: center;
    }

    .containerr {

        margin-top: 60px;
    }

    button[type="submit"] {
        background-color: rgb(48, 5, 54);
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        font-weight: bold;
        box-shadow: 0 2px 4px rgb(47, 3, 41);
    }

    .plant:hover {
        background-color: rgb(225, 242, 219);
    }

    .plant {
        background-color: rgb(42, 1, 39);
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        font-weight: bold;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        transform: translate(-140%, -100%);
    }

    button[type="submit"]:hover {
        background-color: rgb(227, 222, 175);
    }
</style>

<body>
    <div class="container">
        <p>Explore More About Our Plants！</p>
    </div>
    <?php
    if (mysqli_num_rows($plant_res) > 0) {

        while ($row = mysqli_fetch_assoc($plant_res)) {

    ?>
            <div class="containerr">

                <div class="boxx">
                    <a class="plant" href="caree.php">Plant</a>
                    <h2 class="title"><?php echo $row['plantName'] ?></h2>
                    <hr class="line">
                    <div class="box">
                        <h4 class="one">Plant Type</h4>
                        <p class="content"><?php echo $row['plantingtype'] ?></p>
                    </div>
                    <div class="box">
                        <h4 class="one">Planting Month</h4>
                        <p class="content"><?php echo $row['monthsOfPlanting'] ?></p>
                    </div>
                    <div class="box">
                        <div class="boxxx">
                            <h4 class="one">Fertilization</h4>
                            <p class="content"><?php echo $row['plantfertilization'] ?></p>
                            <p class="content"><?php echo $row['fertilizationPeriod'] ?></p>
                        </div>
                    </div>
                    <div class="box">
                        <h4 class="one">Family</h4>
                        <p class="content"><?php echo $row['family'] ?></p>
                    </div>
                    <div class="box">
                        <div class="boxxx">
                            <h4 class="one">Watering</h4>
                            <p class="content"><?php echo $row['WateringPeriod'] ?></p>
                            <p class="content"><?php echo $row['watering'] ?></p>
                        </div>
                    </div>
                    <div class="box">
                        <h4 class="one">Sunlight</h4>
                        <p class="content"><?php echo $row['sunlight'] ?></p>
                    </div>
                    <div class="box">
                        <h4 class="one">Toxicity</h4>
                        <p class="content"><?php echo $row['toxicity'] ?></p>
                    </div>
                    <div class="box">
                        <h4 class="one">Type</h4>
                        <p class="content"><?php echo $row['TypeOfPlant'] ?></p>
                    </div>
                    <?php
                    if (mysqli_num_rows($soilres) > 0) { {
                            while ($row = mysqli_fetch_assoc($soilres)) {

                    ?>
                                <div class="box">
                                    <p class="content"><?php echo $row['soilname'] ?></p>

                                </div>
                    <?php
                            }
                        }
                    }
                    ?>
                    <div class="box">
                        <?php
                        if (mysqli_num_rows($dres) > 0) {
                            while ($row = mysqli_fetch_assoc($dres)) {
                        ?>
                                <p class="content"><?php echo $row['diseaseName'] ?></p>
                        <?php
                            }
                        }
                        ?>
                    </div>

                </div>
        <?php
        }
    }

    mysqli_close($connection);
        ?>


</body>
<script>
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




    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }


    window.onclick = function(event) {
        if (!event.target.matches('img')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }


    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }


    document.querySelector('img').addEventListener('click', function() {
        var dropdown = document.querySelector('.dropdown-content');
        if (dropdown.classList.contains('show')) {
            dropdown.classList.remove('show');
        } else {
            dropdown.classList.add('show');
        }
    });

    document.querySelector('.menuu').addEventListener('click', function() {
        var image = document.querySelector('.menuu');
        image.style.top = '60px';
        image.style.left = '720px';
    });
    window.addEventListener('scroll', function() {
        var image = document.querySelector('.menuu');
        image.style.top = '10px';
        image.style.left = '720px';
    });


    // Get the big photo element
    var bigPhoto = document.querySelector('.photo');

    // Get the small photo elements
    var smallPhotos = document.querySelectorAll('.small-image');

    // Add an event listener to each small photo
    smallPhotos.forEach(function(smallPhoto) {
        smallPhoto.addEventListener('click', function() {
            // Get the src attribute of the small photo
            var src = smallPhoto.src;

            // Set the src attribute of the big photo to the src attribute of the small photo
            bigPhoto.src = src;
        });
    });
</script>

</html>