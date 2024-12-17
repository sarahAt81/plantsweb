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

const slides = document.querySelectorAll('.slide');
const slideControls = document.querySelectorAll('.slide-circle');
let currentSlide = 0;

function showSlide(slideIndex) {
    slides.forEach((slide, index) => {
        if (index === slideIndex) {
            slide.style.opacity = '1';
        } else {
            slide.style.opacity = '0';
        }
    });

    slideControls.forEach((control, index) => {
        if (index === slideIndex) {
            control.classList.add('active');
        } else {
            control.classList.remove('active');
        }
    });
}

/*************  ✨ Codeium Command ⭐  *************/
/**
 * Increment the current slide index and show the new slide.
 * This function is called every 5 seconds in order to automatically
 * change the slide.
 */
/******  47a4df91-21ca-4e52-b72b-48ce63f6be27  *******/function nextSlide() {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
}

setInterval(nextSlide, 5000);

slideControls.forEach((control, index) => {
    control.addEventListener('click', () => {
        currentSlide = index;
        showSlide(currentSlide);
    });
});

showSlide(currentSlide);

const faqQuestions = document.querySelectorAll('.faq-question');

faqQuestions.forEach((question) => {
  question.addEventListener('click', () => {
   
    faqQuestions.forEach((otherQuestion) => {
      if (otherQuestion !== question) {
        const otherFaqAnswer = otherQuestion.nextElementSibling;
        const otherFaqPlus = otherQuestion.querySelector('.faq-plus');

        if (otherFaqAnswer.style.display === 'block') {
          otherFaqAnswer.style.display = 'none';
          otherFaqPlus.textContent = '+';
        }
      }
    });

   
    const faqAnswer = question.nextElementSibling;
    const faqPlus = question.querySelector('.faq-plus');

    if (faqAnswer.style.display === 'none') {
      faqAnswer.style.display = 'block';
      faqPlus.textContent = '-';
    } else {
      faqAnswer.style.display = 'none';
      faqPlus.textContent = '+';
    }
  });
});

document.querySelector('.plus-mark').addEventListener('click', function() {
  var question = document.querySelector('.question');
  var answer = document.querySelector('.answer');
  question.style.display = 'none';
  answer.style.display = 'block';
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


document.querySelector('img').addEventListener('click', function() {
  var dropdown = document.querySelector('.dropdown-content');
  if (dropdown.classList.contains('show')) {
    dropdown.classList.remove('show');
  } else {
    dropdown.classList.add('show');
  }
});
