<?php
require('connection/connection.php');

// Fetch plants from database
$sql = "SELECT * FROM plants_table";
$res = $connection->query($sql);
$plants = array();
while ($row = $res->fetch_assoc()) {
    $plants[] = $row['plantName'];
}

// Save data to table
if (isset($_POST['save_data'])) {
    $name = $_POST['name'];
    $planting_date = $_POST['planting-date'];
    $experience = $_POST['experience'];
    $plant_name = $_POST['plant-name'];

    // Retrieve the plantId from the plants_table table
    $sql = "SELECT plantId FROM plants_table WHERE plantName = '$plant_name'";
    $res = $connection->query($sql);
    $row = $res->fetch_assoc();
    $plant_id = $row['plantId'];

    // SQL query to insert data into table
    $sql = "INSERT INTO farms (username, PlantingDate, experience, plantid) VALUES ('$name', '$planting_date', '$experience', '$plant_id')";
    if ($connection->query($sql) === TRUE) {
        echo "<script>alert('Thanks for planting!');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
}

mysqli_close($connection);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Care Guide</title>
    <!-- <link rel="stylesheet" href="caree.css"> -->
     <style>
      @font-face {
    font-family: 'Angela Cindysttar';
    src: url('fonts/Angela\ Cindysttar.otf') format('truetype');
}
@font-face {
    font-family: 'Adelia';
    src: url('fonts/adelia.otf') format('truetype');
}
@font-face {
    font-family: 'Muth';
    src: url('fonts/Muthiara\ demo\ version.otf') format('truetype');
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
.sowcontainer {
    margin-top: 150px;
    font-family: Arial, sans-serif;
    width: 100%;
    text-align: center;
}
.sow{
    font-size: 45px;
    color: #300622;
    font-weight: bold;
    font-family: 'coco';
}

.form-container {
    display: flex;
    width: 100%;
    justify-content: space-between;
    margin-top: 30px;
    font-family: 'garet';
}
label {
    display: block;
    margin: 10px 0 5px 0;
    color: #502743; 
}

input[type="text"],select {
    width: 200%;
    padding: 15px;
    margin-bottom: 20px;
    border: 2px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    border-radius: 5px;
    font-family: monospace;
    color: #502743;
}
input[type="text"],select::placeholder {
    font-family: monospace;
    background-color:#ffffff ;
}
input[type="text"]:focus, select:focus {
    border-color: #3f0c34;
    border: 2px solid #3d1036 ;
    font-family: monospace;
    outline: none; 
    color: #6e2d65;
    background-color:#f8f1d9 ;
}

input[disabled] {
    background-color: #f9f9f9;
    color: #ccc;
    cursor: not-allowed;
}
#explanation{
    background-color: #f9f9f9;
    color: #ccc;
    height: 200px;
}
.error {
    color: red;
    font-size: 0.9rem;
    margin-top: -8px;
    margin-bottom: 10px;
}

.submit-section {
    text-align: center;
    margin-top: 20px;
}

.submit-section input[type="submit"] {
    padding: 10px 20px;
    background-color: #30061e;
    color: white;
    font-family: 'coco';
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
    width: 190px;
}

.submit-section input[type="submit"]:hover {
    background-color:#b5a15c ;
}

.login-section {
    margin-top: 10px;
    font-size: 0.9rem;
    color: #5f5d5f;
}
.left-section {
    transform: translateX(70%);
}
.right-section {
    transform: translateX(-140%);
}

.login-section a {
    color: #36052c;
    text-decoration: none;
    margin-bottom: 20px;
}

.login-section a:hover {
    text-decoration: underline;
}
     </style>


  <?php include 'navbar.php';?>


<body>
  <div class="sowcontainer">
  <h1 class="sow">Sow the Seed of Change Now!</h1>
</div>
<div>
    <form class="form-container" action="" method="POST">
        <div class="left-section">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your name">

            <label for="planting-date">Planting Date</label>
            <input type="date" class="input-box" id="planting-date" name="planting-date">
        </div>

        <div class="right-section">
            <label for="experience">Do you have experience with planting?</label>
            <select id="experience" name="experience">
                <option value="no">No</option>
                <option value="yes">Yes</option>
            </select>

            <div class="input-group">
                <div class="labell">
                    <p>Plant Name</p>
                </div>
                <div class="inputt">
                    <select class="input-box" id="plant-name" name="plant-name">
                        <?php
                        // Populate the options from the $plants array
                        foreach ($plants as $plant) {
                            echo '<option value="' . $plant . '">' . $plant . '</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>

            <input type="submit" name="save_data" value="Save Data">
        </div>
    </form>
</div>

      <div class="submit-section">
      <input type="submit" value="plant" class="submit-button" name="signup_button">
      </div>
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


const experienceSelect = document.getElementById('experience');
const explanationInput = document.getElementById('explanation');
const emailInput = document.getElementById('email');
const passwordInput = document.getElementById('password');
const nameInput = document.getElementById('name');
const emailError = document.getElementById('emailError');
const passwordError = document.getElementById('passwordError');

// Enable or disable the explanation box based on the selected option
experienceSelect.addEventListener('change', function() {
    if (experienceSelect.value === 'yes') {
        explanationInput.disabled = false;
    } else {
        explanationInput.disabled = true;
        explanationInput.value = '';
    }
});

// Remove placeholder on focus and restore it on blur
const textInputs = document.querySelectorAll('input[type="text"]');
textInputs.forEach(input => {
    input.addEventListener('focus', function() {
        input.dataset.placeholder = input.placeholder;
        input.placeholder = '';
    });

    input.addEventListener('blur', function() {
        input.placeholder = input.dataset.placeholder;
    });
});

    </scripts>
</body>
</html>