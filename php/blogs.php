<?php


?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blogs</title>
  <style>
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
      font-family: 'simple';
      src: url('fonts/Sparky\ Stones.ttf') format('truetype');
    }

    @font-face {
      font-family: 'garet';
      src: url('fonts/Garet-Book.otf') format('truetype');
    }

    body {
      font-family: 'Arial', sans-serif;
      background-color: #eee5d7;
      margin: 0;
      padding: 0;
    }

    .container {
      text-align: center;
      padding: 20px;
    }

    .sen {
      font-family: 'melina';
      font-size: 45px;
      color: #5e3232;
      margin-top: 145px;
    }

    footer {
      background-color: #72355e;
      color: #fff;
      padding: 20px;
      font-size: 14px;
      width: 100%;
      height: 370px;
      box-shadow: 0 0 10px rgba(71, 8, 63, 0.5);
      padding-bottom: 0;
      margin-top: 100px;
      font-family: Arial;
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

    .aboutt {
      text-decoration: none;
      color: #fff;
      font-size: 14px;

    }

    .photocrads {
      margin-top: 200px;
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

    .in:focus {
      border: 2px solid #69295f;
      font-family: monospace;
      outline: none;
      color: #6e2d65;
      background-color: #f8f1d9;
    }

    .products {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
      margin-top: 50px;
    }


    .product {
      background-color: #f8f1d9;
      border-radius: 20px;
      padding: 20px;
      width: 200px;
      height: 120px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      position: relative;
      transition: transform 0.3s ease;
      overflow: hidden;
    }


    .product h2 {
      display: none;
    }

    .product:hover h2 {
      display: block;
      position: absolute;
      font-family: 'melina';
      font-size: 30px;
      text-align: center;
      opacity: 1 !important;
    }

    .product img {
      width: 140%;
      height: 100%;
      object-fit: cover;
      padding: 0;
      margin: 0;
    }

    .tulip {
      margin-left: -50px;
      margin-bottom: 170px;
    }

    .rose {
      margin-left: -50px;
    }

    .sun {
      margin-top: 230px;
      margin-left: -50px;
    }

    .zin {
      margin-top: -10px;
      margin-left: -50px;
    }

    .lan {
      margin-top: -10px;
      margin-left: -50px;
    }

    .chry {
      margin-top: -120px;
      margin-left: -40px;
    }

    .petn {
      margin-top: 40px;
      margin-left: -30px;
    }

    .daisy {
      margin-top: 40px;
      margin-left: -30px;
    }

    .pansy {
      margin-top: 40px;
      margin-left: -110px;
    }

    .mari {
      margin-top: 40px;
      margin-left: -110px;
    }

    .hya {
      margin-top: 40px;
      margin-left: -110px;
    }

    .nar {
      margin-top: 40px;
      margin-left: -110px;
    }

    .tmsmke {
      margin-top: 90px;
      margin-left: -110px;
    }

    .jas {
      margin-top: 90px;
      margin-left: -110px;
    }

    .lav {
      margin-top: 90px;
      margin-left: -110px;
    }

    .golden {
      margin-top: 90px;
      margin-left: -110px;
    }

    .sedum {
      margin-top: 90px;
      margin-left: -110px;
    }

    .aloe {
      margin-top: 90px;
      margin-left: -110px;
    }

    .crocus {
      margin-top: 50px;
      margin-left: -110px;
    }

    .baby {
      margin-top: 50px;
      margin-left: -110px;
    }

    .product:hover {
      transform: scale(1.05);
    }

    .fade:hover {
      opacity: 0.2;
    }
    .sen1 {
      text-align: center;
      font-size: 30px;
      font-family: 'coco';
      margin-left: 745px;
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
      <img class="menuu" src="photos/menuu.png" alt=" Image" style="width: 16px; height: 20px; margin-left: -24px; margin-top: 40px;" onclick="myFunction()">
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
  <div class="container">
    <p class="sen">Explore More About Our Plants!</p>
  </div>
  <div class="container1">
    <a href="PlantList.php" class="sen1">View Care Guide</a>
  </div>
  <section class="products">
    <div class="product">
      <div class="fade">
        <div class="tulip">
          <img class="t" src="photos/plants/tulipp.webp" alt="Tulip">
        </div>
      </div>
      <h2 class="tit">Tulips</h2>
    </div>
    <div class="product">
      <div class="fade">
        <div class="rose">
          <img class="t" src="photos/plants/rose.jpeg" alt="Rose">
        </div>
      </div>
      <h2 class="tit">Roses</h2>
    </div>
    <div class="product">
      <div class="fade">
        <div class="sun">
          <img class="t" src="photos/plants/sun.webp" alt="Sunflower">
        </div>
      </div>
      <h2 class="tit">Sunflowers</h2>
    </div>
    <div class="product">
      <div class="fade">
        <div class="zin">
          <img class="t" src="photos/plants/zinnias.jpeg" alt=" Zinnias">
        </div>
      </div>
      <h2>Zinnias</h2>
    </div>
    <div class="product">
      <div class="fade">
        <div class="lan">
          <img class="t" src="photos/plants/lan.jpeg" alt="lantana">
        </div>
      </div>
      <h2 class="tit">Lantana</h2>
    </div>
    <div class="product">
      <div class="fade">
        <div class="chry">
          <img class="t" src="photos/plants/ch.webp" alt="chrysanthemums">
        </div>
      </div>
      <h2 class="tit">Chrysanthemums</h2>
    </div>
    <div class="product">
      <div class="fade">
        <div class="petn">
          <img class="t" src="photos/plants/pp.jpeg" alt="petunias">
        </div>
      </div>
      <h2 class="tit">Petunias</h2>
    </div>
    <div class="product">
      <div class="fade">
        <div class="daisy">
          <img class="t" src="photos/plants/da.webp" alt="Daisy">
        </div>
      </div>
      <h2 class="tit">Marguerite Daisies</h2>
    </div>
    <div class="product">
      <div class="fade">
        <div class="pansy">
          <img class="t" src="photos/plants/pansy.webp" alt="Pansy">
        </div>
      </div>
      <h2 class="tit">Pansy</h2>
    </div>
    <div class="product">
      <div class="fade">
        <div class="mari">
          <img class="t" src="photos/plants/mari.jpeg" alt="Mari Gold">
        </div>
      </div>
      <h2 class="tit">Mari Gold</h2>
    </div>
    <div class="product">
      <div class="fade">
        <div class="hya">
          <img class="t" src="photos/plants/hya.jpeg" alt="Hyacinth">
        </div>
      </div>
      <h2 class="tit">Hyacinth</h2>
    </div>
    <div class="product">
      <div class="fade">
        <div class="nar">
          <img class="t" src="photos/plants/nar.webp" alt="narcissus">
        </div>
      </div>
      <h2 class="tit">narcissus</h2>
    </div>
    <div class="product">
      <div class="fade">
        <div class="tmsmke">
          <img class="t" src="photos/plants/tmm.jpeg" alt="tm lsmke">
        </div>
      </div>
      <h2 class="tit">Antirrhinum Majus</h2>
    </div>
    <div class="product">
      <div class="fade">
        <div class="jas">
          <img class="t" src="photos/plants/jas.webp" alt="jasmine">
        </div>
      </div>
      <h2 class="tit">Jasmine</h2>
    </div>
    <div class="product">
      <div class="fade">
        <div class="lav">
          <img class="t" src="photos/plants/lav.jpeg" alt="lavender">
        </div>
      </div>
      <h2 class="tit">Lavender</h2>
    </div>
    <div class="product">
      <div class="fade">
        <div class="golden">
          <img class="t" src="photos/plants/pot.jpeg" alt="goldenpothos">
        </div>
      </div>
      <h2 class="tit">Golden Pothos</h2>
    </div>
    <div class="product">
      <div class="fade">
        <div class="sedum">
          <img class="t" src="photos/plants/sedum.jpeg" alt="Sedum lime light">
        </div>
      </div>
      <h2 class="tit">Sedum Limelight</h2>
    </div>
    <div class="product">
      <div class="fade">
        <div class="aloe">
          <img class="t" src="photos/plants/aloe.jpeg" alt="aloe vera">
        </div>
      </div>
      <h2 class="tit">Aloe Vera</h2>
    </div>
    <div class="product">
      <div class="fade">
        <div class="crocus">
          <img class="t" src="photos/plants/crocus.jpeg" alt="crocus">
        </div>
      </div>
      <h2 class="tit">Crocus</h2>
    </div>
    <div class="product">
      <div class="fade">
        <div class="baby">
          <img class="t" src="photos/plants/bb.jpeg" alt="baby bunny">
        </div>
      </div>
      <h2 class="tit">Baby Bunny Bellies</h2>
    </div>
  </section>

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
   const searchForm = document.getElementById('search-form');
  const searchQueryInput = document.getElementById('search-query');

  searchForm.addEventListener('submit', async (event) => {
    event.preventDefault();

    const searchQuery = searchQueryInput.value;

    try {
      const response = await fetch('/search', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ query: searchQuery })
      });

      if (response.ok) {
        const results = await response.json();
        displaySearchResults(results);
      } else {
        console.error('Error:', response.status);
      }
    } catch (error) {
      console.error('Error:', error);
    }
  });

  function displaySearchResults(results) {
    // Display the search results on the new page
    // You can use JavaScript to dynamically create and append elements to the page
  }
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
</script>

</html>