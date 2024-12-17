<!DOCTYPE html>
<html lang="en">

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
            <li><a href="shopfinal.php" class="shop-dropdown">Shop</a></li>
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
                <a href="register.php">
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
<style>
    @font-face {
        font-family: 'Adelia';
        src: url('fonts/adelia.otf') format('truetype');
    }

    @font-face {
        font-family: 'kg';
        src: url('fonts/KGSecondChancesSolid.ttf') format('truetype');
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

    @font-face {
        font-family: 'melina';
        src: url('fonts/Melina.ttf') format('truetype');
    }

    @font-face {
        font-family: 'childa';
        src: url('fonts/Childa.otf') format('truetype');
    }

    @font-face {
        font-family: 'insight';
        src: url('fonts/Insight.otf') format('truetype');
    }

    @font-face {
        font-family: 'hello';
        src: url('fonts/Hello.otf') format('truetype');
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

    body {
        font-family: 'Arial', sans-serif;
        background-color: #eee5d7;
        margin: 0;
        padding: 0;
        overflow-x: hidden;
        margin-bottom: 0 !important;
    }

    .navv {
        background-color: #fae1eb;
        color: rgb(0, 0, 0);
        text-align: center;
        padding: 1px 0;
        font-family: 'Angela', serif;
        font-size: 17px;
        position: relative;
        top: 30;
        width: 100%;
        z-index: 1001;
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
        position: relative;
        top: -149px;
        left: 729px;
    }

    .dropdown-content {
        display: none;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
        position: relative;
        top: -155px;
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
</style>
<script>
        //Code js for navbar
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

</script>
</html>