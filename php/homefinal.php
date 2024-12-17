<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Flora Home</title>
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
    font-family:'listen' ;
    src: url('fonts/Listen.otf') format('truetype');
}
@font-face {
    font-family:'dreams' ;
    src: url('fonts/CaviarDreams.ttf') format('truetype');
}
@font-face {
    font-family:'garet' ;
    src: url('fonts/Garet-Book.otf') format('truetype');
}
@font-face {
    font-family: 'coco';
    src: url('fonts/Cocogoose-Pro-Bold-trial.ttf') format('truetype');
}
body {
    font-family: 'Arial', sans-serif;
    background-color:#eee5d7 ;
    margin: 0;
    padding: 0;
    overflow-x: hidden;
    margin-bottom: 0 !important;
}
.navv{
    background-color: #fae1eb; 
    color: rgb(0, 0, 0); 
    text-align: center; 
    padding: 1px 0; 
    font-family: 'Angela',serif;
    font-size: 17px; 
    position: relative;
    top: 30;
    width: 100%; 
    z-index: 1001; 
   }
nav {
    height: 160px;
    background-color:#72355e ;
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
    color:white;
    text-decoration: none;
    padding: 10px 15px;
    position: relative;
}

nav ul li a::after {
    content: ""; 
    position: absolute;
    left:50%;
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

.quote {
    position: absolute;
    bottom: 20px; 
    left: 40px; 
    color: white;
    font-family: 'melina', serif;
    font-size: 5rem; 
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.7);
}
.sent {
    text-align: center;
    font-family: 'Angela', serif;
    font-size:20px ;
    color: #3b152f;
}
.mainsent{
    text-align: center;
    font-family: 'melina', serif;
    font-size:27px ;
    color: #3b152f;
}
.n{
    font-size: 30px;
}
.best-sellers-section {
    background-color:#dfd4ca ;
    color: rgb(71, 21, 60);
    padding: 20px;
    text-align: center;
    height: 730px;
}

.best-sellers-title {
    font-size: 70px;
    margin-bottom: 20px;
    font-family: 'hello', serif;
    position: relative;
    text-align: center;
}
.best-sellers-title:before {
    content: "";
    position: absolute;
    top: 50%;
    left: 0;
    width: 500px;
    height: 1px;
    background-color: #3b152f;
    transform: translateY(-50%);
    z-index: 1;
  }
  .best-sellers-title:after {
    content: "";
    position: absolute;
    top: 50%;
    right: 0;
    width: 500px;
    height: 1px;
    background-color: #3b152f;
    transform: translateY(-50%);
    z-index: 1;
  }
.product-grid {
    display: flex;
    justify-content: space-between;
    margin: 20px;
}
  
.product {
    width: 25%;
    height: 450px;
    text-align: center;
    margin: 20px;
    position: relative;
}

.product div {
    position: absolute;
    top: 0;
    left: 0;
    background-color: #ccc;
    padding: 10px;
    border-radius: 5px;
    font-size: 16px;
    color: #333;
    z-index: 1;
}

  .product img {
    animation: fadeIn 4s;
    width: 100%;
    height: 330px;
    object-fit: cover;
    
}
  @keyframes fadeIn {
    0% {
      opacity: 0;
    }
    100% {
      opacity: 1;
    }
  }
.product h2 {
    font-size: 20px;
    margin-bottom: 5px;
    font-family:'garet', serif;
  }
  
.product p {
    font-size: 16px;
    color: #666;
    margin-bottom: 35px;
    font-family:'garet', serif;
  
  }
  
.add-to-cart {
    width: 100%;
    font-family:'serif';
    background-color: #571754;
    color: #fff;
    padding: 10px 98px;
    border: none;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
  }
  
.add-to-cart:hover {
    color: #8a7684;
  }
.cart-button {
    position: relative;
 }

.cart-count {
   position: absolute;
   transform: translate(-130%, 10%);
   background-color:  rgb(180, 31, 31);
   color: #fff;
   padding: 2px 5px;
   border-radius: 50%;
   font-size: 12px;
 }

.hot-tag {
  position: absolute;
  transform: translate(390%, -15%);
  background-color: rgb(134, 20, 20) !important;
  color: #fff !important;
  font-size: 7px;
  padding: 2px 5px;
  width: 40px;
  text-align: center !important;
  height: 5px;
  display: flex;
  justify-content: center;
  align-items: center;
  font-family: serif;
}
.slideshow-container {
  position: relative;
  width: 100%;
  height: 500px;
  overflow: hidden;
}

.big-image {
  width: 60%;
  height: 100%;
  object-fit: cover;
  float: left;
}

.slide {
  position: absolute;
  width: 100%;
  height: 100%;
  opacity: 0;
  transition: opacity 0.5s ease-in-out;
}
  
.slide img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.slide-circle.active {
  background-color: #ff0000;
}

.button-container {
 margin-top: 20px;
}

.slideshow-container {
  position: relative;
  width: 100%;
  height: 500px;
  padding-top: 80px;
  overflow: hidden;
}

.slide {
  position: absolute;
  width: 100%;
  height: 100%;
  opacity: 0;
  transition: opacity 0.5s ease-in-out;
}

.big-image {
  width: 60%;
  height: 100%;
  object-fit: cover;
  float: left;
}

.slide-text {
  position: absolute;
  bottom: 30px;
  left: 20px;
  color: #fff;
  text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.5);
  width: 40%;
}
.slide-text h2 {
  position: absolute;
  bottom: 150px;
  left: 40px;
}
.button-box {
    display: inline-block;
    border: 1px solid #fff;
    padding: 10px 50px;
    margin-left: 40px;
    margin-bottom: 90px;
    font-size: 40px;
}

.button-box a {
    color: #fff;
    text-decoration: none;
    font-family: serif;
    cursor: pointer;
}

.button-box a:hover {
    color: #000;
}
.buttonnc{
    margin-top: 70px;
}

.buttonn {
    display: inline-block;
    border: 1px solid #3d1239;
    padding: 10px 50px;
    margin-left: 200px;
    margin-bottom: 90px;
    border-radius: 0;
    font-size: 40px;
}

.buttonn a {
    text-decoration: border ;
    color : #3d1239;
    text-decoration: none;
    font-family: serif;
}

.buttonn a:hover {
    color: #9c9393;
}
.text{
    font-family: 'coco';
    color: #3d1239;
    margin-top: 150px;
}
.fontt{
    margin-left: 250px;
    font-size: 20px

}
.fonttt{
    margin-left: 100px;
    font-size: 60px;
   
}
.slide-controls {
    position: absolute;
    bottom: 20px;
    right: 20px;
    display: flex;
    align-items: center;
}

.slide-circle {
    width: 20px;
    height: 20px;
    border-radius: 50%;
    background-color: #fff;
    margin: 20px 10px;
    cursor: pointer;
    transform: translate(-3250%, 160%);
}

.slide-circle.active {
    background-color: #420e31;
}
.container {
  display: flex;
  height: 100vh; 
}

.left-side {
height: 5000px;
  position: absolute;
  width: 50%;
  padding: 20px;
  background-color: #e4ded1;
  top: 0%;
  right: 0;
}

.font {
    font-family: 'serif';
    font-size: 40px;
    right: 100px;
}

.right-side {
  width: 50%;
  overflow: hidden; 
}

.right-side img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.full {
  margin-top: 0; 
  padding-top: 0;
  position: relative; 
  width: 100%;
  height: 72vh;
  background-size: contain;
  background-position: center;
}

.full img {
  width: 100%;
  height: 100%;
  object-fit: contain;
  transform: translate(0%, 0%);
}

.fall-section {
    background-color:#dfd4ca ;
    color: rgb(71, 21, 60);
    padding: 20px;
    text-align: center;
    height: 800px;
}

.fall-title {
    font-size: 70px;
    margin-bottom: 20px;
    font-family: 'hello', serif;
    position: relative;
    text-align: center;
}
.fall-title:before {
    content: "";
    position: absolute;
    top: 50%;
    left: 0;
    width: 455px;
    height: 1px;
    background-color: #3b152f;
    transform: translateY(-50%);
    transform: translateX(0%);
    z-index: 1;
  }
  .fall-title:after {
    content: "";
    position: absolute;
    top: 50%;
    right: 0;
    width: 455px;
    height: 1px;
    background-color: #3b152f;
    transform: translateY(-50%);
    transform: translateX(0%);
    z-index: 1;
  }
  .container {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
    text-align: center;
  }
  
  .container-item {
    width: 50%;
    padding: 10px;
    margin-bottom: 20px;
    height: 10vh;
  }
  
  .container-item img {
    width: 40%;
    height: 87%;
    object-fit: cover;
  }
  
  .container-item h3 {
    color:#3b152f ;
    font-weight: bold;
    margin-top: 15px;
  }
  
  .container-item p {
    color:#3b152f ;
    font-family:'garet';
    margin-top: 30px;
  }

  .faq-container {
    transform: translateY(-160%);
    text-align: center;
      /*  background-color:#f0b4d97e;*/
    height: 400px;
    margin-top: 220px;
    margin-bottom: -80000;
    padding-bottom: 0;
  }
  .faqq-container {
    transform: translateY(-175%);
    text-align: center;
  }
  .tit{
    font-family: 'hello', serif;
    color: #3b152f;
  }
  .faq-item {
    align-items: center;
  }
  
  .faq-question {
    cursor: pointer;
    font-family: serif;
    transition: top 0.5s ease-in-out;
    margin-bottom: 20px;
}

  .faq-plus {
    font-size: 18px;
    margin-right: 10px;
  }
  
  .faq-answer {
    display: none;
    position: relative;
    opacity: 0.7;
    margin-top: 10px;
    padding-left: 20px;
    font-size: 15px;
    transition: top 0.5s ease-in-out;
}

  .faq-h1 {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    background-color: #fff;
    z-index: 1;
  }
  .checkout-box {
    position: absolute;
    top: 20%;
    right: 550px;
    transform: translateY(450%);
    padding: 20px;
    background-color: #e9e6e6;
    cursor: pointer;
  }
  
  .checkout-text {
    font-weight: bold;
    color: #064732;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  }
  
  .checkout-box:hover {
    background-color: #c9c2c2;
  }
  
  .checkout-box:active {
    background-color: #f5f5f5;
  }

  .view-collection-box {
    background-color: #50224a67 ;
    font-family: serif;
    color: #fff;
    padding: 13px;
    text-align: center;
    margin-top: 70px;
    margin-left: 500px;
    cursor: pointer;
    width: 300px;
  }

  .view-collection-link {
    font-family: serif;
    color: #fff;
    text-decoration: none;
    font-size: 19px;
  }
  .view-collection-link:hover {
    color:#50173e ;
  }
  .autumn-feels-container {
    position: relative;
    transform: translateY(-7%);
    background-color: #ecd3814b;
    height: 400px;
    margin-top: 26px;
  }
  
 .autumn-image {
  opacity: 0.4;
  width: 100%;
  height: 100%;
  object-fit: cover;
  position: absolute;
 transform: translateY(0%);
 }

  .autumn-feels-container h1 {
    font-size: 100px;
    font-weight: bold;
    margin-bottom: 20px;
    font-family: 'hello', serif;
  }
  
  .autumn-feels-container p {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
    font-family: 'kg';
  }
  
.texts-and-buttons {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
  }
  .plant-box {
    background-color:#252702 ;
    color: #fff;
    padding: 10px;
    text-align: center;
    margin-top: 30px;
    cursor: pointer;
    width: 150px;
    margin-left: 170px !important;
  }
  
  .plant-text {
    font-weight: bold;
    font-size: 18px;
    font-family: serif;
  }
  
  .plant-box:hover {
    background-color: #d1be66;
  }
  .faq-image {
    opacity: 0.1;
    width: 100%;
    height: 100%;
    object-fit: cover;
    transform:translateX(50%);
    transform:translateY(0%);
  }

footer {
    background-color:#72355e ;
    color: #fff;
    padding: 20px;
    font-size: 14px;
    width: 100%;
    height: 380px;
    box-shadow: 0 0 10px rgba(71, 8, 63, 0.5);
    padding-bottom:0;
    margin-top: -620px !important;
}
  
.footer-left {
    float: left;
    width: 20%;
    margin-right: 20px;
}
  
.footer-left img {
    width: 100px;
    height: 100px;
    margin-bottom: 20px;
}
  
.footer-middle {
    float: left;
    width: 60%;
}
  
.column {
  float: left;
  width: 33%;
  margin-right: 20px;
}
.columnextra {
   float: left;
   width: 60.33%;
   position: relative;
   bottom: 65px;
   left: 220px;
   color: rgb(255, 255, 255);
   text-decoration: none !important;
}

.column h3 {
  font-size: 18px;
  margin-bottom: 10px;
}
  
.column p {
  margin-bottom: 10px;
}
  
.footer-right {
  float: left;
  width: 20%;
}
  
  .footer-right img {
    width: 100%;
    height: 50px;
    transform: translateX(-110%);
    margin-top: 70px;
  }
  
  .footer-bottom {
    clear: both;
    border-top: 1px solid #ccc;
    padding-top: 20px;
    margin-top: 20px;
  }
  
  .footer-bottom p {
    float: left;
    margin-right: 20px;
  }
  
  .social-links {
    transform: translateX(-5%);
    float: right;
  }
  
  .social-links a {
    margin-right: 10px;
  }
  .facebook img {
    transform: translateY(-5%);
    width: 30px;
    height: 30px;
  }
  
  .instagram img {
    transform: translateY(-28%);
    width: 30px;
    height: 20px;
  }
  
  .whatsapp img {
    width: 30px;
    height: 30px;
  }

  .aboutt{
    text-decoration: none;
    color: #fff;
    font-size: 14px;

  }
  .photocrads{
  margin-top: 200px;
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
  left:729px;
  }

.dropdown-content {
  display: none;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  position: relative;
  top: -155px;
  left:710px;
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
      <?php
        if (!isset($_SESSION['user_id'])) {
          // User is not logged in, set cart count to 0
          $cart_count = 0;
        } else {
          // User is logged in, check the number of items in the cart
          require('connection/connection.php'); // Database connection

          $user_id = $_SESSION['user_id']; // Get user ID from session

          // Query to get the total number of items in the cart
          $sql = "SELECT SUM(quantity) AS total_items FROM cart WHERE user_id = '$user_id'";
          $result = $connection->query($sql);

          if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $cart_count = $row['total_items']; // Get the total quantity of items in the cart
          } else {
            $cart_count = 0; // No items in the cart
          }

          $connection->close();
        }
        ?>

        <!-- Your php -->
        <div class="icons">
          <a href="cart.php">
            <img src="photos/carttt.png" alt="Cart" class="icon">
            <span id="cart-count" class="cart-count"><?php echo $cart_count; ?></span>
          </a>
        </div>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

<div class="iconss">
    <?php if (isset($_SESSION['user_id'])): ?>
        <!-- Show Logout Icon -->
        <a href="logout.php" class="logout-icon">
            <i class="fas fa-arrow-left"></i> Logout
        </a>
    <?php else: ?>
        <!-- Show Login/Registration Icon -->
        <a href="register.php" class="login-icon">
            <i class="fas fa-user"></i> Login
        </a>
    <?php endif; ?>
</div>
<a href="ourorder.php" title="Orders" 
   style="font-family:'Times New Roman', Times, serif; 
          font-size: 1.5rem; 
          margin-top: 16px; 
          color: white; 
          text-decoration: none;">
    <i class="fas fa-box" style="font-size: 2rem;"></i>
</a> <!-- Orders Icon -->


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

<body>
  <div class="slideshow-container">
    <div class="slide">
      <img src="photos/homewallone.jpg" alt="Slide 1">
      <div class="slide-text">
        <h2 class="font">Get Your <br>Care Guide Now</h2>
        <div class="button-container">
          <div class="button-box">
            <a href="care.php" class="learn-more">Learn More</a>
          </div>
        </div>
      </div>
    </div>
    <div class="slide">
      <div class="right-side">
        <img src="photos/hoomre.jpg" alt="Slide 2">
      </div>
      <div class="left-side">
        <div>
          <div class="text">
            <h2 class="fontt">Shop from our</h2>
            <h2 class="fonttt">Fall Collection</h2>
            </h2>
          </div>
          <div class="buttonnc">
            <div class="buttonn">
              <a href="shopfinal.php#fallsection" class="learn-more">Shop Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="slide-controls">
      <div class="slide-circle" data-slide="1"></div>
      <div class="slide-circle" data-slide="2"></div>
    </div>
  </div>
  <br><br><br>
  <div class="sent">
    <h1>Your destination for exquisite floral arrangements and scents</h1>
    <p class="n">-Order your Flowers Online and get it Delivered Across Lebanon-</p>
  </div>
  <br><br><br><br>
  <div class="best-sellers-section">
    <h2 class="best-sellers-title">Top Sellers</h2>
    <div class="product-grid">
      <div class="product">
        <img src="photos/bouquets/bridesell.jpg" alt="Product 1">
        <div class="hot-tag">SALE</div>
        <h2>For All Your Love Bouquet</h2>
        <p>USD 150.000</p>
        <form action="add_to_cart.php" method="post">
          <input type="hidden" name="product_name" value="For All Your Love Bouquet">
          <input type="hidden" name="product_price" value="150.000">
          <button type="submit" class="add-to-cart">Add to Cart</button>
        </form>
      </div>

      <div class="product">
        <img src="photos/bouquets/topselltwo.jpg" alt="Product 2">
        <h2>Shine Bright Bouquet</h2>
        <p>USD 50.000</p>
        <form action="add_to_cart.php" method="post">
          <input type="hidden" name="product_name" value="Shine Bright Bouquet">
          <input type="hidden" name="product_price" value="50.000">
          <button type="submit" class="add-to-cart">Add to Cart</button>
        </form>
      </div>
      <div class="product">
        <img src="photos/bouquets/charming box.jpg" alt="Product 3">
        <div class="hot-tag">HOT</div>
        <h2>Charming Box</h2>
        <p>USD 90.000</p>
        <form action="add_to_cart.php" method="post">
          <input type="hidden" name="product_name" value="Charming Box">
          <input type="hidden" name="product_price" value="90.000">
          <button type="submit" class="add-to-cart">Add to Cart</button>
        </form>
      </div>
      <div class="product">
        <img src="photos/bouquets/bestsellfour.jpg" alt="Product 4">
        <h2>Only Roses Bouquet</h2>
        <p>USD 100.000</p>
        <form action="add_to_cart.php" method="post">
          <input type="hidden" name="product_name" value="Only Roses Bouquet">
          <input type="hidden" name="product_price" value="100.000">
          <button type="submit" class="add-to-cart">Add to Cart</button>
        </form>
      </div>
    </div>
  </div>

  
<div class="full">
    <img src="photos/delivering.jpg" alt="Background Image">
    <div class="checkout-box" 
         onclick="window.location.href='<?php echo isset($_SESSION['user_id']) ? 'checkout.php' : 'login.php'; ?>'">
        <span class="checkout-text">
            <?php echo isset($_SESSION['user_id']) ? 'Go to Checkout' : 'Please Log In to Checkout'; ?>
        </span>
    </div>
</div>


  <div class="fall-section">
    <h2 class="fall-title">Fall Collection</h2>
    <div class="product-grid">
      <div class="product">
        <img src="photos/bouquets/fall.jpg" alt="Product 1">
        <h2>Sunny Fall</h2>
        <p>USD 100.000</p>
        <form action="add_to_cart.php" method="post">
          <input type="hidden" name="product_name" value="Sunny Fall">
          <input type="hidden" name="product_price" value="100.000">
          <button type="submit" class="add-to-cart">Add to Cart</button>
        </form>
      </div>
      <div class="product">
        <img src="photos/bouquets/fallonee.jpg" alt="Product 2">
        <h2>A La Folie</h2>
        <p>USD 93.000</p>
        <form action="add_to_cart.php" method="post">
          <input type="hidden" name="product_name" value="A La Folie">
          <input type="hidden" name="product_price" value="93.000">
          <button type="submit" class="add-to-cart">Add to Cart</button>
        </form>
      </div>
      <div class="product">
        <img src="photos/bouquets/falltwo.jpg" alt="Product 3">
        <div class="hot-tag">HOT</div>
        <h2>Yellow Puffs</h2>
        <p>USD 113.000</p>
        <form action="add_to_cart.php" method="post">
          <input type="hidden" name="product_name" value="Yellow Puffs">
          <input type="hidden" name="product_price" value="113.000">
          <button type="submit" class="add-to-cart">Add to Cart</button>
        </form>
      </div>
      <div class="product">
        <img src="photos/bouquets/fallfinal.jpg" alt="Product 4">
        <h2>Blooms Of Youth</h2>
        <p>USD 113.000</p>
        <form action="add_to_cart.php" method="post">
          <input type="hidden" name="product_name" value="Blooms Of Youth">
          <input type="hidden" name="product_price" value="113.000">
          <button type="submit" class="add-to-cart">Add to Cart</button>
        </form>
      </div>
    </div>
    <div class="view-collection-box">
      <a href="shopfinal.php" class="view-collection-link">Check the full collection</a>
    </div>
  </div>

  <div class="autumn-feels-container">
    <img src="photos/aut.jpeg" alt="Image" class="autumn-image">
    <div class="texts-and-buttons">
      <h1>Autumn Feels</h1>
      <p>Plant your mums now</p>
      <div class="plant-box" onclick="window.location.href='mums.php'">
        <span class="plant-text">Plant</span>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="container-item">
      <img src="photos/truck.png" alt="Image 1">
      <h3>Same day delivery</h3>
      <p>Before 5PM across Lebanon</p>
    </div>
    <div class="container-item">
      <img src="photos/defend.png" alt="Image 2">
      <h3>100% secure checkout</h3>
      <p>Guaranteed Secure Checkout</p>
    </div>
    <div class="container-item">
      <img src="photos/chatting.png" alt="Image 3">
      <h3>Chat with us</h3>
      <p>+961 81 888 257 (whatsapp)</p>
    </div>
  </div>

  <div class="faq-container">
    <br>
    <img src="photos/fl.jpeg" alt="Image" class="faq-image">
    <div class="faqq-container">
      <h1 class="tit">Frequently Asked Questions</h1>
      <div class="faq-item">
        <div class="faq-question">
          <span>Do you offer same day delivery?</span>
          <span class="plus-mark">+</span>
        </div>
        <div class="faq-answer" style="display: none;">
          <p>Yes, same-day delivery is guaranteed.</p>
        </div>
      </div>
      <div class="faq-item">
        <div class="faq-question">
          <span>Can I customize my bouquet or arrangement?</span>
          <span class="faq-plus">+</span>
        </div>
        <div class="faq-answer" style="display: none;">
          <p>Yes, for customization please contact us via WhatsApp.</p>
        </div>
      </div>
      <div class="faq-item">
        <div class="faq-question">
          <span>Do you have options for special occasions like weddings?</span>
          <span class="faq-plus">+</span>
        </div>
        <div class="faq-answer" style="display: none;">
          <p>No, we will have soon..</p>
        </div>
      </div>
    </div>
  </div>

</body>

<footer>
  <div class="footer-left">
    <a href="homefinal.php"><img src="logo/white.png" alt="Logo"></a>
    <p>Hadath, Aljameaa Street</p>
    <p>Beirut, Lebanon</p>
  </div>
  <div class="footer-middle">
    <div class="column">
      <h3><b>Contact Us</b></h3>
      <p>Phone: 78938016</p>
      <p>Email: flora223@gmail.com</p>
      <p>Address: Hadath Aljameaa Street, Beirut, Lebanon</p>
    </div>
    <div class="column">
      <h3><b>Company</b></h3>
      <a class="aboutt" href="about.php">About Us</a>
    </div>
    <div class="column">
      <div class="columnextra">
        <h3><b>Legal</b></h3>
        <a class="aboutt" href="privacy.php">Privacy Policy</a>
        <br><br>
        <a class="aboutt" href="terms.php">Terms and conditions</a>
      </div>
    </div>
  </div>
  <div class="footer-right">
    <img class="photocards" src="photos/photo1.png" alt="Photo 1">
  </div>
  <div class="footer-bottom">
    <p>&copy; 2023 Flora Home. All Rights Reserved</p>
    <div class="social-links">
      <a class="facebook" href="facebook"><img src="logo/face.svg" alt="Facebook"></a>
      <a class="instagram" href="instagram"><img src="logo/instagram.png" alt="Instagram"></a>
      <a class="whatsapp" href="whatsapp"><img src="logo/whats.png" alt="whatsapp"></a>
    </div>
  </div>
</footer>

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

const slides = document.querySelectorAll('.slide');
const slideControls = document.querySelectorAll('.slide-circle');
let currentSlide = 0;

function showSlide(slideIndex) {
    slides.forEach((slide, index) => {
        if (index === slideIndex) {
            slide.style.opacity = '1';
        } else {
            slide.style.opacity = '0';
        }
    });

    slideControls.forEach((control, index) => {
        if (index === slideIndex) {
            control.classList.add('active');
        } else {
            control.classList.remove('active');
        }
    });
}

/*************  ✨ Codeium Command ⭐  *************/
/**
 * Increment the current slide index and show the new slide.
 * This function is called every 5 seconds in order to automatically
 * change the slide.
 */
/******  47a4df91-21ca-4e52-b72b-48ce63f6be27  *******/function nextSlide() {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
}

setInterval(nextSlide, 5000);

slideControls.forEach((control, index) => {
    control.addEventListener('click', () => {
        currentSlide = index;
        showSlide(currentSlide);
    });
});

showSlide(currentSlide);

const faqQuestions = document.querySelectorAll('.faq-question');

faqQuestions.forEach((question) => {
  question.addEventListener('click', () => {
   
    faqQuestions.forEach((otherQuestion) => {
      if (otherQuestion !== question) {
        const otherFaqAnswer = otherQuestion.nextElementSibling;
        const otherFaqPlus = otherQuestion.querySelector('.faq-plus');

        if (otherFaqAnswer.style.display === 'block') {
          otherFaqAnswer.style.display = 'none';
          otherFaqPlus.textContent = '+';
        }
      }
    });

   
    const faqAnswer = question.nextElementSibling;
    const faqPlus = question.querySelector('.faq-plus');

    if (faqAnswer.style.display === 'none') {
      faqAnswer.style.display = 'block';
      faqPlus.textContent = '-';
    } else {
      faqAnswer.style.display = 'none';
      faqPlus.textContent = '+';
    }
  });
});

document.querySelector('.plus-mark').addEventListener('click', function() {
  var question = document.querySelector('.question');
  var answer = document.querySelector('.answer');
  question.style.display = 'none';
  answer.style.display = 'block';
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


document.querySelector('img').addEventListener('click', function() {
  var dropdown = document.querySelector('.dropdown-content');
  if (dropdown.classList.contains('show')) {
    dropdown.classList.remove('show');
  } else {
    dropdown.classList.add('show');
  }
});

</script>

</html>