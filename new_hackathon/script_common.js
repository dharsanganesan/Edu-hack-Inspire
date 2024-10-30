// Sticky Navbar Functionality
window.onscroll = function() { stickNavbar(); };

const navbar = document.getElementById("navbar");
const sticky = navbar.offsetTop;

function stickNavbar() {
  if (window.pageYOffset > sticky) {
    navbar.classList.add("sticky");
  } else {
    navbar.classList.remove("sticky");
  }
}

// Sidebar Navigation Toggle
function openNav() {
  document.getElementById("mySidenav").style.width = "415px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0px";
}

// Particles and Stars Animation
const particleContainer = document.querySelector('.particles');
const starBackground = document.querySelector('.star-background');

for (let i = 0; i < 100; i++) {
  const particle = document.createElement('div');
  particle.classList.add('particle');
  particle.style.top = `${Math.random() * 100}vh`;
  particle.style.left = `${Math.random() * 100}vw`;
  particle.style.animationDelay = `${Math.random() * 10}s`;
  particleContainer.appendChild(particle);
}

for (let i = 0; i < 300; i++) {
  const star = document.createElement('div');
  star.classList.add('star');
  star.style.top = `${Math.random() * 100}vh`;
  star.style.left = `${Math.random() * 100}vw`;
  starBackground.appendChild(star);
}

// Cursor Effects
const cursor = document.querySelector('.cursor');
const cursorInner = document.querySelector('.cursor2');
const links = document.querySelectorAll('a');

document.addEventListener('mousemove', (e) => {
  cursor.style.transform = `translate3d(${e.clientX - 25}px, ${e.clientY - 25}px, 0)`;
  cursorInner.style.left = `${e.clientX}px`;
  cursorInner.style.top = `${e.clientY}px`;
});

document.addEventListener('mousedown', () => {
  cursor.classList.add('click');
  cursorInner.classList.add('cursorinnerhover');
});

document.addEventListener('mouseup', () => {
  cursor.classList.remove('click');
  cursorInner.classList.remove('cursorinnerhover');
});

links.forEach(link => {
  link.addEventListener('mouseover', () => {
    cursor.classList.add('hover');
  });
  link.addEventListener('mouseleave', () => {
    cursor.classList.remove('hover');
  });
});

// FAQ Section Toggle
document.querySelectorAll('.faq-question').forEach(item => {
  item.addEventListener('click', () => {
    const answer = item.nextElementSibling;
    answer.style.display = answer.style.display === 'block' ? 'none' : 'block';
  });
});

// Countdown Timer
(function () {
  const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

  let today = new Date(),
      dd = String(today.getDate()).padStart(2, "0"),
      mm = String(today.getMonth() + 1).padStart(2, "0"),
      yyyy = today.getFullYear(),
      nextYear = yyyy + 1,
      dayMonth = "11/15/",
      birthday = dayMonth + yyyy;
  
  today = mm + "/" + dd + "/" + yyyy;
  if (today > birthday) {
    birthday = dayMonth + nextYear;
  }
  
  const countDown = new Date(birthday).getTime(),
        x = setInterval(function() {    
          const now = new Date().getTime(),
                distance = countDown - now;

          document.getElementById("days").innerText = Math.floor(distance / day),
          document.getElementById("hours").innerText = Math.floor((distance % day) / hour),
          document.getElementById("minutes").innerText = Math.floor((distance % hour) / minute),
          document.getElementById("seconds").innerText = Math.floor((distance % minute) / second);

          if (distance < 0) {
            document.getElementById("headline").innerText = "It's my birthday!";
            document.getElementById("countdown").style.display = "none";
            document.getElementById("content").style.display = "block";
            clearInterval(x);
          }
        }, 0);
}());

// Owl Carousel Slider
$(".slider").owlCarousel({
  loop: true,
  autoplay: true,
  autoplayTimeout: 1000,
  autoplayHoverPause: true,
});

// Modal Image Functionality
const modal = document.getElementById("myModal"),
      img = document.getElementById("myImg"),
      modalImg = document.getElementById("img01"),
      captionText = document.getElementById("caption");

img.onclick = function() {
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

const span = document.getElementsByClassName("close")[0];
span.onclick = function() { 
  modal.style.display = "none";
}
