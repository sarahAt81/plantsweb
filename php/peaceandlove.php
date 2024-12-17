<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Care Guide</title>
    <link rel="stylesheet" href="bridal.css">
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
            <img class="menuu" src="photos/menuu.png" alt="Your Image"
                style="width: 16px; height: 20px; margin-left: -24px; margin-top: 40px;" onclick="myFunction()">
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
            <img src="photos/bouquets/ppeace.jpg" alt="Big Photo" class="big-photo">
            <div class="hot-tag">SALE</div>
            <div class="small-photos">
                <img src="photos/bouquets/ppeace.jpg" alt="Small Photo 1" class="small-photo">
                <img src="photos/bouquets/cpo.jpg" alt="Small Photo 2" class="small-photo">
            </div>
        </div>
        <div class="product-info">
            <h1 class="product-name">Peace And Love</h1>
            <div class="price-container">
                <span class="original-price">$113.00</span>
                <span class="discount-label">20% off</span>
                <span class="sale-price">$90.40</span>
            </div>
            <hr class="thin-line">
            <div class="gift-message">
                <label class="add">Add a gift message?</label>
                <select id="gift-select" class="yesno">
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
            <p class="small-p">25 White Baby Rose Stems </p>
        </div>
    </div>
    <div class="d">
        <p class="details"><strong>Details</strong></p>
        <p class="detail">
            Offer this bouquet of 25 white baby roses to send a message of peace to your friends.
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

<script src="glam.js"></script>

</html>