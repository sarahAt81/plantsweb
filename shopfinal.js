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

const circleLink = document.querySelector('.circle-link');

circleLink.addEventListener('click', () => {
  const bridalSection = document.querySelector('#bridal');
  bridalSection.scrollIntoView({ behavior: 'smooth', block: 'start', inline: 'nearest' });
});

const subscribeButton = document.querySelector('.subscribe');
const emailInput = document.querySelector('input[type="email"]');

subscribeButton.addEventListener('click', () => {
  const email = emailInput.value;
  console.log(email);
});