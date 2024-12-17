
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Flora Home</title>
  <link rel="stylesheet" href="homefinal.css">
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

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

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
  <div class="slideshow-container">
    <div class="slide">
      <img src="photos/homewallone.jpg" alt="Slide 1">
      <div class="slide-text">
        <h2 class="font">Get Your <br>Care Guide Now</h2>
        <div class="button-container">
          <div class="button-box">
            <a href="care.html" class="learn-more">Learn More</a>
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
              <a href="shopfinal.html#fallsection" class="learn-more">Shop Now</a>
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
      <div class="plant-box" onclick="window.location.href='mums.html'">
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

<script src="homefinal.js"></script>

</html>