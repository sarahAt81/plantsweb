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
