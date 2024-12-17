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
  font-family: 'coc';
  src: url('fonts/coc.ttf') format('truetype');
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
  display: block;}

.product-page {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    height: 100vh;
}

.header {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
  
.big-photo {
    width: 130%;
    height: 100%;
    margin-top: 750px;
    object-fit: cover;
    border: none;
    transform: translateX(30%);
}
  
.small-photos {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    transform: translate(-180%,-455%);
}
.small-photo {
    width: 80px;
    height: 80px;
    margin: 0 10px;
    object-fit: cover;
    box-sizing: border-box;
    margin-bottom: 10px;
}

.product-info {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    padding: 0 20px;
    margin-left: 330px;
}
  
.product-name {
    font-size: 34px;
    font-weight: bold;
    font-family: 'garet';
    margin-top: 500px;
    color: #380a29;
  }
  
.price {
    font-size: 37px;
    font-weight: bold;
    transform: translateY(20%);
    font-family: 'garet';
    color: #3d092c;
  }
  
.thin-line {
    border: none;
    height: 1px;
    width: 450px;
    background-color: #360a36;
    margin: 20px 0;
  }
  
  .gift-message {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
  }
  
  .gift-message-inputs {
    display: none;
  }

  .add {
    margin-top: 40px;
    font-family: 'coc';
    font-size: 18px;
    font-weight: bold;
  }
  .yesno {
    margin-top: 20px;
    font-family: 'coc';
    width: 500px;
    height: 30px;
  }

  .message-input {
    width: 500px;
    height: 100px;
    padding: 10px;
    resize: none;
    border: 1px solid #ccc;
  }
  
  .character-count {
    margin-top: 7px;
    font-size: 12px;
    color: #666;
    font-family: serif;
  }
  
  .send-it {
    margin-top: 30px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    font-family: 'coc';
  }
  .send-it p {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 25px;
  }
  .send-it .checkbox-container {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
  }
  
  .send-it input[type="checkbox"] {
    margin-right: 10px;
  }
  
  .send-it label {
    font-size: 16px;
  }
  
  .quantity {
    display: flex;
    flex-direction: row;
    align-items: center;
    margin-top: 30px;
  }
  
  .quantity select {
    width: 70px;
    height: 50px;
    padding: 10px;
    border: 1px solid #ccc;
  }
  .add-to-cart {
    background-color: #3d0c2e;
    color: #fff;
    padding: 10px 20px;
    border: none;
    width: 150px;
    height:50px ;
    margin-left: 25px;
    font-size: 15px;
    font-family: 'coc';
    cursor: pointer;
  }
  .small-p {
    font-size: 25px;
    color: #666;
    margin-top: 40px;
  }
  .small-photo {
    cursor: pointer;
  }
  .gift-message select {
    margin-bottom: 10px;
  }
  .gift-message select option[value="yes"] {
    display: block;
  }
  
  .gift-message select option[value="yes"] + .gift-message-inputs {
    display: block;
  }

  .gift-message-inputs input, .gift-message-inputs textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
  }
  
  .gift-message-inputs textarea {
    height: 100px;
    resize: none;
  }
  .d{
    margin-top: 490px;
    position: absolute;
    top: 660px;
    left: 100px;
    right: 100px;
  }
  
.details {
  font-weight: bold;
  font-size: 40px;
  margin-bottom: 20px;
  color: #360a36;
}

.detail {
  font-size: 17px;
  margin-bottom: 20px;
  color: #666;
  font-family: serif;
}

.detail span {
  font-weight: bold;
  color: #333;
}

footer {
  background-color:#72355e ;
  color: #fff;
  padding: 20px;
  font-size: 14px;
  width: 100%;
  height: 370px;
  box-shadow: 0 0 10px rgba(71, 8, 63, 0.5);
  padding-bottom:0;
  margin-top: 690px;
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
    <div class="product-page">
      <div class="header">
        <img src="photos/bouquets/mr.jpg" alt="Big Photo" class="big-photo">
        <div class="small-photos">
          <img src="photos/bouquets/mr.jpg" alt="Small Photo 1" class="small-photo">
          <img src="photos/bouquets/rrrr.jpg" alt="Small Photo 2" class="small-photo">
        </div>
      </div>
      <div class="product-info">
        <h1 class="product-name">Moulin Rouge</h1>
        <p class="price"><span>USD 100</span></p>
        <hr class="thin-line">
        <div class="gift-message">
          <label class="add">Add a gift message?</label>
          <select  id="gift-select" class="yesno">
            <option value="no">No</option>
            <option value="yes">Yes</option>
          </select>
          <div class="gift-message-inputs" id="gift-textboxes" style="display: none;">
            <textarea placeholder="Message" class="message-input" maxlength="200"></textarea>
            <p class="character-count">Max 200 characters</p>
          </div>
        </div>
        <div class="send-it">
          <p>Send it with a little something:</p>
          <div class="checkbox-container">
            <input type="checkbox" id="add-chocolate" name="add-chocolate">
            <label for="add-chocolate">Add Chocolate</label>
          </div>
          <div class="checkbox-container">
            <input type="checkbox" id="add-balloon" name="add-balloon">
            <label for="add-balloon">Add a Balloon</label>
          </div>
        </div>
        <div class="quantity">
          <select>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
          </select>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <p class="small-p">20 Red Roses in a Pot</p>
      </div>
    </div>
    <div class="d">
    <p class="details"><strong>Details</strong></p>
    <p class="detail">
        Send passion to a loved one with this arrangement of 20 red roses in a round pot!
<br><br>
Pot Size: D=24cm, H=9cm.
<br><br>
Note: Pot color or shape may vary upon availability.
    </p>
  </div>

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

document.getElementById("gift-select").addEventListener("change", function() {
  if (this.value === "yes") {
    document.getElementById("gift-textboxes").style.display = "block";
  } else {
    document.getElementById("gift-textboxes").style.display = "none";
  }
});

const bigPhoto = document.querySelector('.big-photo');
const smallPhotos = document.querySelectorAll('.small-photo');

smallPhotos.forEach((smallPhoto) => {
  smallPhoto.addEventListener('click', () => {
    bigPhoto.src = smallPhoto.src;
  });
});


    </script>

</html>