<?php
session_start();
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
  font-family: 'kg';
  src: url('fonts/KGSecondChancesSolid.ttf') format('truetype');
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
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body, html {
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start; 
    background-color: #dfd4ca ;
}
.bridephoto {
  width: 100px;
  height: 100px;
  border: 1px solid #ccc;
  margin: 20px;
}
.navv{
    height: 53px; 
    background-color: #fae1eb; 
    color: rgb(0, 0, 0); 
    text-align: center; 
    padding:0; 
    font-family: 'Angela',serif;
    font-size: 17px;
    width: 600%; 
    z-index: 1001;
    box-sizing: border-box;
   }
   .navv p{
    margin-top: 20px;
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
.cart-count {
    position: absolute;
    transform: translate(-130%, 10%);
    background-color:  rgb(180, 31, 31);
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
  left:730px;
  }

.dropdown-content {
  display: none;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  position: relative;
  top: -80px;
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
    height: 310px;
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
    margin-top: 20px;
    margin-bottom: 20px;
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
 .fall-section {
    margin-top: 60px;
    background-color:#dfd4ca ;
    color: rgb(71, 21, 60);
    padding: 20px;
    text-align: center;
    height: 510px;
}
.fall-sectionn {
    margin-top: 55px;
    background-color:#dfd4ca ;
    color: rgb(71, 21, 60);
    padding: 20px;
    text-align: center;
    height: 510px;
}
.fall-sction {
  margin-top: 150px;
  background-color:#dfd4ca ;
  color: rgb(71, 21, 60);
  padding: 20px;
  text-align: center;
  height: 510px;
}
.fall-sectionnn {
    margin-top: 100px;
    background-color:#dfd4ca ;
    color: rgb(71, 21, 60);
    padding: 20px;
    text-align: center;
    height: 510px;
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
  .falll-title {
    font-size: 70px;
    margin-bottom: 20px;
    font-family: 'hello', serif;
    position: relative;
    text-align: center;
}
.falll-title:before {
    content: "";
    position: absolute;
    top: 50%;
    left: 0;
    width: 475px;
    height: 1px;
    background-color: #3b152f;
    transform: translateY(-50%);
    transform: translateX(0%);
    z-index: 1;
  }
  .falll-title:after {
    content: "";
    position: absolute;
    top: 50%;
    right: 0;
    width: 475px;
    height: 1px;
    background-color: #3b152f;
    transform: translateY(-50%);
    transform: translateX(0%);
    z-index: 1;
  }
  .fall-ttitle {
    font-size: 70px;
    margin-bottom: 20px;
    font-family: 'hello', serif;
    position: relative;
    text-align: center;
}
.fall-ttitle:before {
    content: "";
    position: absolute;
    top: 50%;
    left: 0;
    width: 444px;
    height: 1px;
    background-color: #3b152f;
    transform: translateY(-50%);
    transform: translateX(0%);
    z-index: 1;
  }
  .fall-ttitle:after {
    content: "";
    position: absolute;
    top: 50%;
    right: 0;
    width: 430px;
    height: 1px;
    background-color: #3b152f;
    transform: translateY(-50%);
    transform: translateX(0%);
    z-index: 1;
  }
  .faall-title {
    font-size: 70px;
    margin-bottom: 20px;
    font-family: 'hello', serif;
    position: relative;
    text-align: center;
}
.faall-title:before {
    content: "";
    position: absolute;
    top: 50%;
    left: 0;
    width: 430px;
    height: 1px;
    background-color: #3b152f;
    transform: translateY(-50%);
    transform: translateX(0%);
    z-index: 1;
  }
  .faall-title:after {
    content: "";
    position: absolute;
    top: 50%;
    right: 0;
    width: 420px;
    height: 1px;
    background-color: #3b152f;
    transform: translateY(-50%);
    transform: translateX(0%);
    z-index: 1;
  }

  footer {
    background-color:#72355e ;
    color: #fff;
    padding: 20px;
    font-size: 14px;
    width: 100%;
    height: 355px;
    box-shadow: 0 0 10px rgba(71, 8, 63, 0.5);
    padding-bottom:0;
    margin-top: 100px;
    font-family:Arial ;
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
 margin-top: 7px;
  float: left;
  width: 33%;
  margin-right: 20px;
}
.columnextra {
   float: left;
   width: 60.33%;
   position: relative;
   bottom: 55px;
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

  .reviews-container {
    margin-top: 90px;
    width: 100%;
    background-color: #faf8f9;
    padding: 20px;
    height: 300px;
    box-shadow:  0 0 10px rgba(0, 0, 0, 0.3);
  }
  
  .reviews-container h1 {
    font-size: 100px;
    margin-top: 40px;
    font-family: 'kg';
    color: #3a0f2b;
    text-align: center;
  }
  
  .photos-container {
    justify-content: flex-start;
    
  }
  
  .photos-container img {
    margin: 10px;
    border-radius: 10px;
    float: left;
    box-shadow:  0 0 10px rgba(0, 0, 0, 0.3);
    transition: transform 0.2s ease-in-out;
  }
  .photos-container img:hover {
    transform: scale(1.1);
  }
  .active {
    width:300px ;
    height: 70px;
    position: relative;
    top: -10;
  }
  .activee {
    width:300px ;
    height: 80px;
    position: relative;
    top: -10px;
  }
  .activeee {
    width:320px ;
    height: 80px;
    position: relative;
    top: -10px;
  }
  .activve {
    width:237px ;
    height: 45px;
    position: relative;
    top: -50px;
  }
  .activvve {
    width:300px ;
    height: 70px;
    position: relative;
    top: -50px;
  }
  .likke {
    width:270px ;
    height: 55px;
    position: relative;
    top: -220px;
  }
  .likkee {
    width:270px ;
    height: 250px;
    transform: translate(90%, -173%);
  }
  .likenew {
    width:270px ;
    height: 55px;
    position: relative;
    top: -280px;
    left: 615px;
  }
  .new {
    width:270px ;
    height: 100px;
    position: relative;
    top: -330px;
    left: -550px;
  }
  .neww {
    width:270px ;
    height: 55px;
    position: relative;
    top: -280px;
    left: 615px;
  }
  .ne {
    width:270px ;
    height: 55px;
    position: relative;
    top: -280px;
    left: 615px;
  }
  .nee {
    width:240px ;
    height: 44px;
    position: relative;
    top: -487px;
    left: 950px;
  }
  .str {
    width:280px ;
    height: 220px;
    position: relative;
    top: -550px;
    left: 250px;
  }
.reviews-container h1 {
  animation: animate 2s infinite;
}

@keyframes animate {
  0% {
    color: #dfd4ca;
    transform: scale(1);
    opacity: 1;
  }
  50% {
    color: #3b152f;
    transform: scale(1.2);
    opacity: 1;
  }
  100% {
    color: #d1cf52;
    transform: scale(1);
    opacity: 1;
  }
}

.first {
  position: relative;
}

.salee {
  width: 100%;
  height: 100%;
  margin-top: 75px;
}
.salee  {
  opacity: 0.5;
}
.sale {
  font-size: 80px;
  position: absolute;
  bottom: 25%;
  left: 10%;
  color: #ffffff;
  padding: 10px;
  text-transform: uppercase;
}
.scroll-down {
  position: absolute;
  bottom: 40px;
  right: 340px;
  width: 200px;
  height: 100px;
}

.circle {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  background-color: #fff;
  display: flex;
  justify-content: center;
  align-items: center;
  transition: transform 0.2s ease-in-out;

}
.circle img {
  width: 100px;
  height: 100px;
  opacity: 0.9;
}
.circle-link {
  text-decoration: none;
  display: block;
  border-radius: 50%;
  padding: 10px;
  transition: background-color 0.2s ease-in-out;
  scroll-behavior: smooth;
  transition: scroll 0.2s;
}
.circle:hover {
  transform: scale(1.2);
}

.fas.fa-arrow-down {
  font-size: 24px;
  color: #333;
}

.container {
  width: 80%;
  margin: 40px auto;
  text-align: center;
  margin-top: 110px;
  background-color: #fdf4f4;
  box-shadow:0 0 10px rgba(0, 0, 0, 0.3);
  height: 295px;
  width: 100%;
  margin-bottom: -120px;
}

.container h1 {
  font-size: 29px;
  margin-top: 30px;
  color: #3a0f2b;
}

.container p {
  color: #666;
  font-size: 21px;
  margin-top: 15px;
}

.container input[type="email"] {
  width: 50%;
  height: 40px;
  padding: 10px;
  margin: 40px auto;
  font-size: 18px;
  border: 1px solid #502743;
  border-radius: 4px;
  margin-bottom: 20px;
}

.container input[type="email"]:focus {
  border: 2px solid rgb(0, 0, 0);
  outline: none;
}

.container input[type="email"]:focus::-webkit-input-placeholder {
  color: transparent;
}

.container input[type="email"]:focus:-ms-input-placeholder {
  color: transparent;
}
.container .subscribe {
  display: block;
  margin-top: 15px;
  transform: translateX(200%);
  width: 20%;
  height: 40px;
  padding: 10px;
  font-size: 18px;
  border: none;
  border-radius: 5px;
  background-color: #360624;
  color: #fff;
  cursor: pointer;
}

.container .subscribe:hover {
  background-color: #a1a7a1;
}
.hot-tag {
 position: absolute;
 transform: translate(370%, -15%);
 background-color: rgb(134, 20, 20) !important;
 color: #fff !important;
 font-size: 7px;
 padding: 2px 5px;
 width: 60px;
 text-align: center !important;
 height: 5px;
 display: flex;
 justify-content: center;
 align-items: center;
 font-family: serif;
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
.iconss {
  display: flex;
  justify-content: flex-end;
  padding: 10px;
}

.iconss a {
  text-decoration: none;
  color: white; /* Set the color to white */
  font-size: 22px; /* Increase font size for larger icons */
  font-weight: bold;
  margin-right: 15px;
  display: flex;
  align-items: center;
  gap: 8px;
}

.iconss a:hover {
  color: #d72638; /* Add hover color effect */
}

.iconss i {
  font-size: 28px; /* Increase icon size */
}
</style>
  <div class="navv">
    <p>20% OFF ON BRIDAL BOUQUETS</p>
  </div>
  <nav>
    <div class="nav-container">
      <a href="index.php" class="logo-link" target="_blank">
        <img src="logo/white.png" alt="Flora Home Logo" class="logo">
      </a>
      <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="care.html">Care Guide</a></li>
        <li><a href="shopfinal.php">Shop</a></li>
        <li><a href="blogs.html">Blogs</a></li>
        <li><a href="about.html">About Us</a></li>
      </ul>
      <div class="nav-icons">
        <?php
        if (!isset($_SESSION['user_id'])) {
          // User is not logged in, set cart count to 0
          $cart_count = 0;
        } else {
          // User is logged in, check the number of items in the cart
          require('connection.php'); // Database connection

          $user_id = $_SESSION['user_id']; // Get user ID from session

          // Query to get the total number of items in the cart
          $sql = "SELECT SUM(quantity) AS total_items FROM cart WHERE user_id = '$user_id'";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $cart_count = $row['total_items']; // Get the total quantity of items in the cart
          } else {
            $cart_count = 0; // No items in the cart
          }

          $conn->close();
        }
        ?>

        <!-- Your HTML -->
        <div class="icons">
          <a href="cart.php">
            <img src="photos/carttt.png" alt="Cart" class="icon">
            <span id="cart-count" class="cart-count"><?php echo $cart_count; ?></span>
          </a>
        </div>

        <div class="iconss">
          <?php if (isset($_SESSION['user_id'])): ?>
            <!-- Show Logout Icon -->
            <a href="logout.php" class="logout-icon">
              <i class="fas fa-arrow-left"></i> Logout
            </a>
          <?php else: ?>
            <!-- Show Login/Registration Icon -->
            <a href="registration.php" class="login-icon">
              <i class="fas fa-user"></i> Login
            </a>
          <?php endif; ?>
        </div>

      </div>
    </div>
    <div class="dropdown">
      <img class="menuu" src="photos/menuu.png" alt="Your Image" style="width: 16px; height: 20px; margin-left: -24px; margin-top: 40px;" onclick="myFunction()">
      <div id="myDropdown" class="dropdown-content">
        <div class="dropdownn">
          <a href="shopfinal.html#fallsection">Fall Collection</a>
        </div>
        <div class="dropdownn">
          <a href="shopfinal.html#onlyroses">Only Roses</a>
        </div>
        <div class="dropdownn">
          <a href="shopfinal.html#mixedf">Mixed Flowers</a>
        </div>
        <div class="dropdownn">
          <a href="shopfinal.html#bridal">Bridal Bouquets</a>
        </div>
        <div class="dropdownn">
          <a href="shopfinal.html#boxes">Flower Boxes</a>
        </div>
      </div>
    </div>
  </nav>
</head>

<body>
  <div class="first">
    <img class="salee" src="photos/exo.jpg" alt="Photo 1">
    <h2 class="sale">SALE UP TO 20%</h2>
    <div class="scroll-down">
      <a href="#bridal" class="circle-link">
        <div class="circle">
          <img src="photos/yes.png" alt="Arrow Down">
        </div>
      </a>
    </div>
  </div>

  <div id="fallsection" class="space">
    <div class="fall-section ">
      <h2 class="fall-title">Fall Collection</h2>
      <div class="product-grid">
        <div class="product">
          <img src="photos/bouquets/fallstart.jpg" alt="Product 1">
          <h2>The Glamorous One</h2>
          <p>USD 95.000</p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="product_name" value="The Glamorous One">
            <input type="hidden" name="product_price" value="95.000">
            <button type="submit" class="add-to-cart">Add to Cart</button>
          </form>
        </div>
        <div class="product">
          <img src="photos/bouquets/cozybox.jpg" alt="Product 2">
          <h2>Cozy Box</h2>
          <p>USD 100.000</p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="product_name" value="Cozy Box">
            <input type="hidden" name="product_price" value="100.000">
            <button type="submit" class="add-to-cart">Add to Cart</button>
          </form>
        </div>
        <div class="product">
          <img src="photos/bouquets/baby.jpg" alt="Product 3">
          <h2>Baby Sprinkles</h2>
          <p>USD 142.000</p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="product_name" value="Baby Sprinkles">
            <input type="hidden" name="product_price" value="142.000">
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
    </div>

    <div class="fall-sction">
      <div class="product-grid">
        <div class="product">
          <img src="photos/bouquets/rush.jpg" alt="Product 1">
          <h2>Rush Of Feelings</h2>
          <p>USD 380.000</p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="product_name" value="Rush Of Feelings">
            <input type="hidden" name="product_price" value="380.000">
            <button type="submit" class="add-to-cart">Add to Cart</button>
          </form>
        </div>
        <div class="product">
          <img src="photos/bouquets/pinkish tulip.jpg" alt="Product 2">
          <h2>Pinkish Tulip</h2>
          <p>USD 42.000</p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="product_name" value="Pinkish Tulip">
            <input type="hidden" name="product_price" value="42.000">
            <button type="submit" class="add-to-cart">Add to Cart</button>
          </form>
        </div>
        <div class="product">
          <img src="photos/bouquets/love.jpg" alt="Product 3">
          <h2>Love</h2>
          <p>USD 113.000</p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="product_name" value="Love">
            <input type="hidden" name="product_price" value="113.000">
            <button type="submit" class="add-to-cart">Add to Cart</button>
          </form>
        </div>
        <div class="product">
          <img src="photos/bouquets/mm.jpg" alt="Product 4">
          <h2>Merry Petals</h2>
          <p>USD 178.000</p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="product_name" value="Merry Petals">
            <input type="hidden" name="product_price" value="178.000">
            <button type="submit" class="add-to-cart">Add to Cart</button>
          </form>
        </div>
      </div>
    </div>

    <div class="fall-sectionn">
      <div class="product-grid">
        <div class="product">
          <img src="photos/bouquets/fallonee.jpg" alt="Product 1">
          <h2>A La Folie</h2>
          <p>USD 93.000</p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="product_name" value="A La Folie">
            <input type="hidden" name="product_price" value="93.000">
            <button type="submit" class="add-to-cart">Add to Cart</button>
          </form>
        </div>
        <div class="product">
          <img src="photos/bouquets/falltwo.jpg" alt="Product 2">
          <h2>Yellow Puffs</h2>
          <p>USD 113.000</p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="product_name" value="Yellow Puffs">
            <input type="hidden" name="product_price" value="113.000">
            <button type="submit" class="add-to-cart">Add to Cart</button>
          </form>
        </div>
        <div class="product">
          <img src="photos/bouquets/rain.jpg" alt="Product 3">
          <h2>Rainbow Feels</h2>
          <p>USD 89.000</p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="product_name" value="Rainbow Feels">
            <input type="hidden" name="product_price" value="89.000<">
            <button type="submit" class="add-to-cart">Add to Cart</button>
          </form>
        </div>
        <div class="product">
          <img src="photos/bouquets/ch.jpg" alt="Product 4">
          <h2>Christmas Glory</h2>
          <p>USD 119.000</p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="product_name" value="Christmas Glory">
            <input type="hidden" name="product_price" value="119.000">
            <button type="submit" class="add-to-cart">Add to Cart</button>
          </form>
        </div>
      </div>
    </div>
  </div>


  <div id="onlyroses" class="space">
    <div class="fall-sectionnn">
      <h2 class="falll-title">Only Roses</h2>
      <div class="product-grid">
        <div class="product">
          <img src="photos/bouquets/cascading.jpg" alt="Product 1">
          <h2>Cascading Roses</h2>
          <p>USD 195.000</p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="product_name" value="Cascading Roses">
            <input type="hidden" name="product_price" value="195.000">
            <button type="submit" class="add-to-cart">Add to Cart</button>
          </form>
        </div>
        <div class="product">
          <img src="photos/bouquets/barbie.jpg" alt="Product 2">
          <h2>Barbie World</h2>
          <p>USD 110.000</p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="product_name" value="Barbie World">
            <input type="hidden" name="product_price" value="110.000">
            <button type="submit" class="add-to-cart">Add to Cart</button>
          </form>
        </div>
        <div class="product">
          <img src="photos/bouquets/pinkper.jpg" alt="Product 3">
          <h2>Pink Perfection</h2>
          <p>USD 45.000</p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="product_name" value="Pink Perfection">
            <input type="hidden" name="product_price" value="45.000">
            <button type="submit" class="add-to-cart">Add to Cart</button>
          </form>
        </div>
        <div class="product">
          <img src="photos/bouquets/classy.jpg" alt="Product 4">
          <h2>Classy Reflex</h2>
          <p>USD 79.000</p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="product_name" value="Classy Reflex">
            <input type="hidden" name="product_price" value="79.000">
            <button type="submit" class="add-to-cart">Add to Cart</button>
          </form>
        </div>
      </div>
    </div>

    <div class="fall-sction">
      <div class="product-grid">
        <div class="product">
          <img src="photos/bouquets/lovem.jpg" alt="Product 1">
          <h2>Madness of Love</h2>
          <p>USD 750.000</p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="product_name" value="Madness of Love">
            <input type="hidden" name="product_price" value="750.000">
            <button type="submit" class="add-to-cart">Add to Cart</button>
          </form>
        </div>
        <div class="product">
          <img src="photos/bouquets/eleg.jpg" alt="Product 2">
          <h2>Rose Elegance</h2>
          <p>USD 70.000</p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="product_name" value="Rose Elegance">
            <input type="hidden" name="product_price" value="70.000">
            <button type="submit" class="add-to-cart">Add to Cart</button>
          </form>
        </div>
        <div class="product">
          <img src="photos/bouquets/color.jpg" alt="Product 3">
          <h2>Colorfull Dreams</h2>
          <p>USD 116.000</p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="product_name" value="Colorfull Dreams">
            <input type="hidden" name="product_price" value="116.000">
            <button type="submit" class="add-to-cart">Add to Cart</button>
          </form>
        </div>
        <div class="product">
          <img src="photos/bouquets/magic.jpg" alt="Product 4">
          <h2>Magic Roses</h2>
          <p>USD 300.000</p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="product_name" value="Magic Roses">
            <input type="hidden" name="product_price" value="300.000">
            <button type="submit" class="add-to-cart">Add to Cart</button>
          </form>
        </div>
      </div>
    </div>

    <div class="fall-sectionn">
      <div class="product-grid">
        <div class="product">
          <img src="photos/bouquets/blush.jpg" alt="Product 1">
          <h2>Blushing</h2>
          <p>USD 86.000</p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="product_name" value="Blushing">
            <input type="hidden" name="product_price" value="86.000">
            <button type="submit" class="add-to-cart">Add to Cart</button>
          </form>
        </div>
        <div class="product">
          <img src="photos/bouquets/moulin.jpg" alt="Product 2">
          <h2>Moulin Rouge</h2>
          <p>USD 100.000</p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="product_name" value="Moulin Rouge">
            <input type="hidden" name="product_price" value="100.000">
            <button type="submit" class="add-to-cart">Add to Cart</button>
          </form>
        </div>
        <div class="product">
          <img src="photos/bouquets/soft.jpg" alt="Product 3">
          <h2>Soft Floral</h2>
          <p>USD 385.000</p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="product_name" value="Soft Floral">
            <input type="hidden" name="product_price" value="385.000">
            <button type="submit" class="add-to-cart">Add to Cart</button>
          </form>
        </div>
        <div class="product">
          <img src="photos/bouquets/bestsellfour.jpg" alt="Product 4">
          <h2>Only Roses</h2>
          <p>USD 200.000</p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="product_name" value="Only Roses">
            <input type="hidden" name="product_price" value="200.000">
            <button type="submit" class="add-to-cart">Add to Cart</button>
          </form>
        </div>
      </div>
    </div>

    <div class="fall-sectionn">
      <div class="product-grid">
        <div class="product">
          <img src="photos/bouquets/surp.jpg" alt="Product 1">
          <h2>Rose Surprise</h2>
          <p>USD 32.000</p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="product_name" value="Rose Surprise">
            <input type="hidden" name="product_price" value="32.000">
            <button type="submit" class="add-to-cart">Add to Cart</button>
          </form>
        </div>
        <div class="product">
          <img src="photos/bouquets/sweett.jpg" alt="Product 2">
          <h2>For My SweetHeart</h2>
          <p>USD 70.000</p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="product_name" value="For My SweetHeart">
            <input type="hidden" name="product_price" value="70.000">
            <button type="submit" class="add-to-cart">Add to Cart</button>
          </form>
        </div>
        <div class="product">
          <img src="photos/bouquets/sweet.jpg" alt="Product 3">
          <h2>Sweet Romance</h2>
          <p>USD 325.000</p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="product_name" value="Sweet Romance">
            <input type="hidden" name="product_price" value="325.000">
            <button type="submit" class="add-to-cart">Add to Cart</button>
          </form>
        </div>
        <div class="product">
          <img src="photos/bouquets/count.jpg" alt="Product 4">
          <h2>Count From 1 to 100</h2>
          <p>USD 300.000</p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="product_name" value="Count From 1 to 100">
            <input type="hidden" name="product_price" value="300.000">
            <button type="submit" class="add-to-cart">Add to Cart</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div id="mixedf" class="space">
    <div class="fall-sectionnn">
      <h2 class="fall-ttitle">Mixed Flowers</h2>
      <div class="product-grid">
        <div class="product">
          <img src="photos/bouquets/topselltwo.jpg" alt="Product 1">
          <h2>Shine Bright</h2>
          <p>USD 55.000</p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="product_name" value="Shine Bright">
            <input type="hidden" name="product_price" value="55.000">
            <button type="submit" class="add-to-cart">Add to Cart</button>
          </form>
        </div>
        <div class="product">
          <img src="photos/bouquets/blushh.jpg" alt="Product 2">
          <h2>Blushing Petals</h2>
          <p>USD 113.000</p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="product_name" value="Blushing Petals">
            <input type="hidden" name="product_price" value="113.000">
            <button type="submit" class="add-to-cart">Add to Cart</button>
          </form>
        </div>
        <div class="product">
          <img src="photos/bouquets/heart.jpg" alt="Product 3">
          <h2>Pink At Heart</h2>
          <p>USD 113.000</p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="product_name" value="Pink At Heart">
            <input type="hidden" name="product_price" value="113.000">
            <button type="submit" class="add-to-cart">Add to Cart</button>
          </form>
        </div>
        <div class="product">
          <img src="photos/bouquets/pinkyy.jpg" alt="Product 4">
          <h2>Red Pinky</h2>
          <p>USD 113.000</p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="product_name" value="Red Pinky">
            <input type="hidden" name="product_price" value="113.000">
            <button type="submit" class="add-to-cart">Add to Cart</button>
          </form>
        </div>
      </div>
    </div>

    <div class="fall-sction">
      <div class="product-grid">
        <div class="product">
          <img src="photos/bouquets/bst.jpg" alt="Product 1">
          <h2>The Best</h2>
          <p>USD 355.000</p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="product_name" value="The Best">
            <input type="hidden" name="product_price" value="355.000">
            <button type="submit" class="add-to-cart">Add to Cart</button>
          </form>
        </div>
        <div class="product">
          <img src="photos/bouquets/sunshine.jpg" alt="Product 2">
          <h2>Sunshine</h2>
          <p>USD 55.000</p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="product_name" value="Sunshine">
            <input type="hidden" name="product_price" value="55.000">
            <button type="submit" class="add-to-cart">Add to Cart</button>
          </form>
        </div>
        <div class="product">
          <img src="photos/bouquets/for.jpg" alt="Product 3">
          <h2>Sweety</h2>
          <p>USD 113.000</p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="product_name" value="Sweety">
            <input type="hidden" name="product_price" value="113.000">
            <button type="submit" class="add-to-cart">Add to Cart</button>
          </form>
        </div>
        <div class="product">
          <img src="photos/bouquets/falalala.jpg" alt="Product 4">
          <h2>Falalala</h2>
          <p>USD 135.000</p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="product_name" value="Falalala">
            <input type="hidden" name="product_price" value="135.000">
            <button type="submit" class="add-to-cart">Add to Cart</button>
          </form>
        </div>
      </div>
    </div>

    <div class="fall-sectionn">
      <div class="product-grid">
        <div class="product">
          <img src="photos/bouquets/country.jpg" alt="Product 1">
          <h2>Country Cottage</h2>
          <p>USD 80.000</p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="product_name" value="Country Cottage">
            <input type="hidden" name="product_price" value="80.000">
            <button type="submit" class="add-to-cart">Add to Cart</button>
          </form>
        </div>
        <div class="product">
          <img src="photos/bouquets/joy.jpg" alt="Product 2">
          <h2>Joyfull Box</h2>
          <p>USD 119.000</p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="product_name" value="Joyfull Box">
            <input type="hidden" name="product_price" value="119.000">
            <button type="submit" class="add-to-cart">Add to Cart</button>
          </form>
        </div>
        <div class="product">
          <img src="photos/bouquets/hot.jpg" alt="Product 3">
          <h2>Hot Pink</h2>
          <p>USD 100.000</p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="product_name" value="Hot Pink">
            <input type="hidden" name="product_price" value="100.000">
            <button type="submit" class="add-to-cart">Add to Cart</button>
          </form>
        </div>
        <div class="product">
          <img src="photos/bouquets/pearl.jpg" alt="Product 4">
          <h2>Pearl Of Pink</h2>
          <p>USD 80.000</p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="product_name" value="Pearl Of Pink">
            <input type="hidden" name="product_price" value="80.000">
            <button type="submit" class="add-to-cart">Add to Cart</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div id="bridal" class="space">
    <div class="fall-sectionnn">
      <h2 class="faall-title">Bridal Bouquets</h2>
      <div class="product-grid">
        <div class="product">
          <img src="photos/bouquets/guardian.jpg" alt="Product 1">
          <div class="hot-tag">SALE</div>
          <h2>Guardian Angel</h2>
          <p>USD 100.000</p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="product_name" value="Guardian Angel">
            <input type="hidden" name="product_price" value="100.000">
            <button type="submit" class="add-to-cart">Add to Cart</button>
          </form>
        </div>
        <div class="product">
          <img src="photos/bouquets/white.jpg" alt="Product 2">
          <div class="hot-tag">SALE</div>
          <h2>White Heart</h2>
          <p>USD 200.000</p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="product_name" value="White Heart">
            <input type="hidden" name="product_price" value="200.000">
            <button type="submit" class="add-to-cart">Add to Cart</button>
          </form>
          <div class="hot-tag">SALE</div>
        </div>
        <div class="product">
          <img src="photos/bouquets/dreamyw.jpg" alt="Product 3">
          <div class="hot-tag">SALE</div>
          <h2>Dreamy Wishes</h2>
          <p>USD 78.000</p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="product_name" value="Dreamy Wishes">
            <input type="hidden" name="product_price" value="78.000">
            <button type="submit" class="add-to-cart">Add to Cart</button>
          </form>
        </div>
        <div class="product">
          <img src="photos/bouquets/softp.jpg" alt="Product 4">
          <div class="hot-tag">SALE</div>
          <h2>Soft Pearl</h2>
          <p>USD 112.000</p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="product_name" value="Soft Pearl">
            <input type="hidden" name="product_price" value="112.000">
            <button type="submit" class="add-to-cart">Add to Cart</button>
          </form>
        </div>
      </div>
    </div>

    <div class="fall-sction">
      <div class="product-grid">
        <div class="product">
          <img src="photos/bouquets/mabrok.jpg" alt="Product 1">
          <div class="hot-tag">SALE</div>
          <h2>1000 Mabrouk</h2>
          <p>USD 420.000</p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="product_name" value="1000 Mabrouk">
            <input type="hidden" name="product_price" value="420.000">
            <button type="submit" class="add-to-cart">Add to Cart</button>
          </form>
        </div>
        <div class="product">
          <img src="photos/bouquets/peace.jpg" alt="Product 2">
          <div class="hot-tag">SALE</div>
          <h2>Peace And Love</h2>
          <p>USD 113.000</p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="product_name" value="Peace And Love">
            <input type="hidden" name="product_price" value="113.000">
            <button type="submit" class="add-to-cart">Add to Cart</button>
          </form>
        </div>
        <div class="product">
          <img src="photos/bouquets/bridesell.jpg" alt="Product 3">
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
          <img src="photos/bouquets/blushh.jpg" alt="Product 4">
          <div class="hot-tag">SALE</div>
          <h2>Blushing Petals</h2>
          <p>USD 113.000</p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="product_name" value="Blushing Petals">
            <input type="hidden" name="product_price" value="113.000">
            <button type="submit" class="add-to-cart">Add to Cart</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div id="boxes" class="space">
    <div class="fall-sectionnn">
      <h2 class="fall-title">Flower Boxes</h2>
      <div class="product-grid">
        <div class="product">
          <img src="photos/bouquets/charming box.jpg" alt="Product 1">
          <h2>Charming Box</h2>
          <p>USD 90.000</p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="product_name" value="Charming Box">
            <input type="hidden" name="product_price" value="90.000">
            <button type="submit" class="add-to-cart">Add to Cart</button>
          </form>
        </div>
        <div class="product">
          <img src="photos/bouquets/happy.jpg" alt="Product 2">
          <h2>Happy Moments</h2>
          <p>USD 140.000</p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="product_name" value="Happy Moments">
            <input type="hidden" name="product_price" value="140.000">
            <button type="submit" class="add-to-cart">Add to Cart</button>
          </form>
        </div>
        <div class="product">
          <img src="photos/bouquets/bloom.jpg" alt="Product 3">
          <h2>Colorfull Bloom</h2>
          <p>USD 135.000</p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="product_name" value="Colorfull Bloom">
            <input type="hidden" name="product_price" value="135.000">
            <button type="submit" class="add-to-cart">Add to Cart</button>
          </form>
        </div>
        <div class="product">
          <img src="photos/bouquets/rosered.jpg" alt="Product 4">
          <h2>Red Rose</h2>
          <p>USD 75.000</p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="product_name" value="Red Rose">
            <input type="hidden" name="product_price" value="75.000">
            <button type="submit" class="add-to-cart">Add to Cart</button>
          </form>
        </div>
      </div>
    </div>


    <div class="fall-sction">
      <div class="product-grid">
        <div class="product">
          <img src="photos/bouquets/pop.jpg" alt="Product 1">
          <h2>Pop Up</h2>
          <p>USD 92.000</p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="product_name" value="Pop Up">
            <input type="hidden" name="product_price" value="92.000">
            <button type="submit" class="add-to-cart">Add to Cart</button>
          </form>
        </div>
        <div class="product">
          <img src="photos/bouquets/sweetspring.jpg" alt="Product 2">
          <h2>Sweet Spring</h2>
          <p>USD 63.000</p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="product_name" value="Sweet Spring">
            <input type="hidden" name="product_price" value="63.000">
            <button type="submit" class="add-to-cart">Add to Cart</button>
          </form>
        </div>
        <div class="product">
          <img src="photos/bouquets/magenta.jpg" alt="Product 3">
          <h2>Rose Magenta</h2>
          <p>USD 119.000</p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="product_name" value="Rose Magenta">
            <input type="hidden" name="product_price" value="119.000">
            <button type="submit" class="add-to-cart">Add to Cart</button>
          </form>
        </div>
        <div class="product">
          <img src="photos/bouquets/art.jpg" alt="Product 4">
          <h2>Artistic Touch</h2>
          <p>USD 320.000</p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="product_name" value="Artistic Touch">
            <input type="hidden" name="product_price" value="320.000">
            <button type="submit" class="add-to-cart">Add to Cart</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- <div class="reviews-container">
  <h1>Reviews</h1>
  <div class="photos-container">
    <img class="active" src="photos/IMG-20241209-WA0039.jpg" alt="Photo 1">
    <img class="activee" src="photos/IMG-20241209-WA0038.jpg" alt="Photo 2">
    <img class="activeee" src="photos/IMG-20241209-WA0040.jpg" alt="Photo 3">
    <img class="activve" src="photos/IMG-20241209-WA0041.jpg" alt="Photo 4">
    <img class="activvve" src="photos/IMG-20241209-WA0042.jpg" alt="Photo 5">
    <img class="likke" src="photos/likke.jpg" alt="Photo 6">
    <img class="likenew" src="photos/IMG-20241209-WA0043.jpg" alt="Photo 7">
    <img class="new" src="photos/so.jpg" alt="Photo 8">
    <img class="neww" src="photos/soo.jpg" alt="Photo 9">
    <img class="ne" src="photos/like.jpg" alt="Photo 10">
    <img class="nee" src="photos/it.jpg" alt="Photo 11">
  </div>
  <img class="str" src="photos/str.gif" alt="Photo 12">
</div>-->

  <div class="container">
    <h1>Never miss our updates about new arrivals and special offers</h1>
    <p>Get the latest news and updates from Flora</p>
    <input type="email" placeholder="Enter your email">
    <button class="subscribe">Subscribe</button>
  </div>

  <footer>
    <div class="footer-left">
      <a href="homefinal.html"><img src="logo/white.png" alt="Logo"></a>
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
        <a class="aboutt" href="about.html">About Us</a>
      </div>
      <div class="column">
        <div class="columnextra">
          <h3><b>Legal</b></h3>
          <a class="aboutt" href="privacy.html">Privacy Policy</a>
          <br><br>
          <a class="aboutt" href="terms.html">Terms and conditions</a>
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
  <script src="shopfinal.js"></script>
</body>

</html>