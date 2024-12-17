<?php
require('connection/connection.php');
$query = "SELECT * FROM images";
$result = $connection->query($query);
if (!$result) {
  echo "Error: " . $connection->error;
}

?>
<!DOCTYPE html>
<html>

<head>
  <title>About Us</title>
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
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #eee5d7;
    }

    .container {
      width: 80%;
      margin: 40px auto;
    }

    .container h1 {
      margin-top: 170px;
      font-size: 48px;
      margin-bottom: 50px;
      color: #502743;
      text-align: center;
      font-family: 'melina';
    }

    .container p {
      font-size: 21px;
      line-height: 1.5;
      margin-bottom: 40px;
      text-align: left;
      font-family: 'garet';
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
      bottom: 77px;
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
      height: 50px;
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

    .search-bar {
      position: relative;
      top: -30px;
      bottom: 10px;
      padding: 10px;
      width: 100%;
      text-align: center;
      transition: border-color 0.5s ease;
    }

    .search-bar input[type="search"] {
      width: 50%;
      height: 30px;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
    }

    .in::placeholder {
      color: #a39a9a;
      opacity: 0.7;
      font-family: monospace;
    }

    .search-bar button {
      width: 100px;
      height: 30px;
      background-color: #502743;
      color: #fff;
      border: none;
      cursor: pointer;
    }

    .in:focus {
      border: 2px solid #69295f;
      font-family: monospace;
      outline: none;
      color: #6e2d65;
      background-color: #f8f1d9;
    }
  </style>
  <div class="navv">
    <p>20% OFF ON BRIDAL BOUQUETS</p>
  </div>
  <nav>
    <div class="nav-container">
      <a href="homefinal.html" class="logo-link" target="_blank">
        <img src="logo/white.png" alt="Flora Home Logo" class="logo">
      </a>
      <ul class="nav-links">
        <li><a href="homefinal.html">Home</a></li>
        <li><a href="caree.html">Care Guide</a></li>
        <li><a href="shopfinal.html">Shop</a></li>
        <li><a href="blogs.html">Blogs</a></li>
        <li><a href="about.html">About Us</a></li>
      </ul>
      <div class="nav-icons">
        <div class="icons">
          <a href="cart.html">
            <img src="photos/carttt.png" alt="Cart" class="icon">
            <span id="cart-count" class="cart-count">0</span>
          </a>
        </div>
        <div class="iconss">
          <a href="registration.html">
            <img src="photos/accnew.png" alt="User Account" class="icon">
          </a>
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
  <div class="container">
        <h1>Shop Profile</h1>
        <p> Flora is thoughtfully designed to serve two distinct purposes, making it a one-stop solution for plant lovers and bouquet enthusiasts alike.
<br><br>
          In our Plant Care section, you can sign in and register your plants to receive personalized blogs and expert tips on nurturing and maintaining their health. We aim to make plant care easier, more enjoyable, and tailored to your specific needs, ensuring your green companions thrive in any environment.
          <br><br>
          On the other hand, our Floral Shop offers a stunning array of flower bouquets, carefully crafted for every occasion. Whether you're celebrating a milestone, expressing love, or simply brightening your space, our handpicked selections promise beauty, fragrance, and elegance.
          <br><br>
          At Flora, we believe in the power of nature to inspire, connect, and uplift. By combining plant care with the art of floristry, we bring you closer to the wonders of the natural world. Explore, discover, and grow with us!
            </p>
    </div>

  <!-- <?php
  if ($result->num_rows > 0) {
    // Loop through the images and display them
    while ($row = $result->fetch_assoc()) {
      $image_path = $row['img'];
      if (file_exists($image_path)) {
        ?>
  
      <img src="<?php echo $row['img']; ?>" height="200px" width="200px" />
    <?php
    
  } else {
    // Display a message if no images are found
    ?>
    <h3>No images found!</h3>
  <?php
  }
}}
  ?> -->

</body>

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
</script>

</html>