<?php
require('connection/connection.php');

$sql = "SELECT * FROM plants_table";
$res = $connection->query($sql);
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

body {
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start; 
    background-color: #dfd4ca ;
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
.container {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
   
    margin-right: 230px;
  }

  .photo-container {
    flex: 1;
   position: absolute;
   top: 260px;
   left: 280px;
  }

  .photo {
    width: 100%;
    height: 300px;
    border-radius: 30px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
  }
  .family{
    font-size: 36px;
    color:rgba(32, 3, 22, 0.55);
  }
  .desc{
    font-size: 36px;
    margin-bottom: 20px;
    color:rgb(52, 6, 36);
  }

  .content-container {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: flex-start;
   position: absolute;
top: 270px;
left: 800px;
  }
.container {
    flex: 1;
    display: flex;
    flex-direction: row;
    justify-content: flex-start;
    align-items: flex-start;
    position: absolute;
    top: 475px;
    left: 800px;
  }
  .containerr {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: center;
    margin-top: 650px;
  }
  .content-container h1 {
    font-size: 55px;
    margin-bottom: 20px;
  }

  .content-container p {
    font-size: 32px;
    margin-bottom: 20px;
  }

  .content-container h4 {
    font-size: 27px;
    margin-bottom: 10px;
  }

  .box {
    background-color: #f0f0f0;
    padding: 10px;
    margin-right: 10px;
    border-radius: 5px;
  }
  
  .box {
    background-color: #f0f0f0;
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 20px;
    width: 170px;
    height: 90px;
    box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.2);
  }
  .boxx {
    background-color: #f0f0f0;
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 20px;
    width: 1300px;
    height: 300px;
    box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.2);
  }
  
  .box h4 {
    font-size: 16px;
    margin-top: -15px;
    text-align: center;
  }
 
  .box p {
    margin-top: 6px;
    font-size: 14px;
    text-align: center;
  }
  

  .box:nth-child(1) {
    background-color:rgba(15, 75, 64, 0.67);
  }
  
  .box:nth-child(2) {
    background-color:rgba(54, 172, 205, 0.52);
  }
  
  .box:nth-child(3) {
    background-color:rgba(162, 220, 38, 0.6);
  }
  
  .box:nth-child(4) {
    background-color:rgba(13, 124, 83, 0.45);
  }
  .one {
   color:#fae1eb;
  }
  .two{
   color:#fae1eb;
  }
  .three{
   color:#fae1eb;
  }
  .four{
   color:#fae1eb;
  }
  .title {
    margin: 0;
    font-size: 20px;
    font-weight: bold;
    color:rgb(63, 10, 46);
}

.line {
    border: 0;
    border-top: 2px solid #000;
    margin: 10px 0;
}

.content {
    font-size: 16px;
    color: #333;
}
    </style>
    <div class="navv"><p>20% OFF ON BRIDAL BOUQUETS</p></div>
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
<body> <div class="photo-container">
          <img class="photo" src="photos/plants/pothos.jpg" alt="Big Photo">
        </div>
        <div class="content-container">
          <h1><?php 
          while($row = $res->fetch_assoc()) {
            echo $row['plantName'];
          }
          ?></h1>
          <p class="family">Family from Database</p>
          <p class="desc">Description of the plant.</p>
            
          </div>
    <div class="container">

          <div class="box">
            <img src="photos/str.svg" alt="">
            <h4 class="one">Type</h4>
            <p class="one">Box 1 Text</p>
          </div>
          <div class="box">
            <img src="photos/download.svg" alt="">
            <h4 class="two">Water</h4>
            <p class="two">Box 2 Text</p>
          </div>
          <div class="box">
            <img src="photos/sun-27b4e2feb72c763449e684f4b5040cb2.svg" alt="">
            <h4 class="three">Light</h4>
            <p class="three">Box 3 Text</p>
          </div>
          <div class="box">
            <img src="photos/download (2).svg" alt="">
            <h4 class="four">Toxicity</h4>
            <p class="four">Box 4 Text</p>
          </div>
              </div>
              <div class="containerr">
        
<div class="boxx">
<h2 class="title">Title</h2>
    <hr class="line">
    <p class="content">This is a paragraph under the line.</p>
</div>
<div class="boxx">
<h2 class="title">Title</h2>
    <hr class="line">
    <p class="content">This is a paragraph under the line.</p>
</div>
<div class="boxx">
<h2 class="title">Title</h2>
    <hr class="line">
    <p class="content">This is a paragraph under the line.</p>
</div>
<div class="boxx">
<h2 class="title">Title</h2>
    <hr class="line">
    <p class="content">This is a paragraph under the line.</p>
</div>
  </div>
    </div>
            <script >
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
});</script>
          </body>
          </html>