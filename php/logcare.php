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

.login-container {
  width: 300px;
  margin-top:190px;
  text-align: center;
}

.login-container h2 {
  margin-bottom: 30px;
  font-family: 'coco', serif;
}

.login-container label {
  display: block;
  margin-bottom: 10px;
  font-family: 'garet';
}

.login-container input[type="text"], .login-container input[type="password"] {
width: 100%;
height: 30px;
margin-bottom: 20px;
padding: 10px;
border: 2px solid #ccc;
box-sizing: border-box;
border-radius: 5px;
font-family: monospace;
color: #502743;

}
.login-container input[type="text"]:focus , .login-container input[type="password"] :focus{
      border-color: #3f0c34;
      border: 2px solid #3d1036 ;
      font-family: monospace;
      outline: none; 
      color: #6e2d65;
      background-color:#f8f1d9 ;
  }
.login-container input[type="submit"] {
  width: 100px;
  height: 30px;
  background-color: #30061e;
  color: white;
  font-family: 'coco';
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 14px;
}

.login-container input[type="submit"]:hover {
    background-color:#b5a15c ;
}
    </style>
    <div class="navv"><p>20% OFF ON BRIDAL BOUQUETS</p></div>
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
        <div class="login-container">
          <h2>Login</h2>
          <form>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username"><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password"><br><br>
            <input type="submit" value="Login" style="width: 100px;">
          </form>
        </div>
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

</script>
</body>
</html>