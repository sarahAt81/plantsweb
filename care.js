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



let slideIndex = 0;
const slides = document.getElementsByClassName("slide");
const playPauseButtons = document.getElementsByClassName("play-pause-btn");


function showSlide(n) {
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[n].style.display = "block"; 

    const video = slides[n].querySelector("video");
    video.currentTime = 0; 
    video.play();

    
    playPauseButtons[n].src = "photos/playf.png"; 

   
    video.onended = function() {
        changeSlide(1);
    };
}


function changeSlide(n) {
    const currentVideo = slides[slideIndex].querySelector("video");
    if (currentVideo) {
        currentVideo.pause(); 
    }

    slideIndex += n;
    if (slideIndex >= slides.length) {
        slideIndex = 0; 
    } else if (slideIndex < 0) {
        slideIndex = slides.length - 1; 
    }
    showSlide(slideIndex);
}


function togglePlayPause(index) {
    const video = slides[index].querySelector("video");
    if (video.paused) {
        video.play();
        playPauseButtons[index].src = "photos/playf.png"; 
    } else {
        video.pause();
        playPauseButtons[index].src = "photos/pausefff.png";
    }
}


for (let i = 0; i < playPauseButtons.length; i++) {
    playPauseButtons[i].addEventListener("click", function() {
        togglePlayPause(i);
    });
}

document.addEventListener("DOMContentLoaded", function() {
    showSlide(slideIndex); 
});

document.querySelector('.indoor').addEventListener('click', function() {
    
    window.location.href = 'indoor.html';
});

document.querySelector('.outdoor').addEventListener('click', function() {
   
    window.location.href = 'outdoor.html'; 
});

document.addEventListener("input", function () {
    const input1 = document.getElementById("input1").value;
    const input2 = document.getElementById("input2").value;
    const plantButton = document.getElementById("plantButton");

    
    if (input1 && input2) {
        plantButton.classList.add("enabled"); 
        plantButton.disabled = false; 
    } else {
        plantButton.classList.remove("enabled");
        plantButton.disabled = true; 
    }
});



