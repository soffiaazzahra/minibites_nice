// Menu Toggle untuk Mobile (Hamburger menu)
const toggler = document.querySelector('#toggler');
const navbar = document.querySelector('.navbar');

toggler.addEventListener('change', () => {
  if (toggler.checked) {
    navbar.style.clipPath = 'polygon(0 0, 100% 0, 100% 100%, 0 100%)';
  } else {
    navbar.style.clipPath = 'polygon(0 0, 100% 0, 100% 0, 0 0)';
  }
});

// Scroll Animasi Smooth untuk Navigasi
const navLinks = document.querySelectorAll('header .navbar a');

navLinks.forEach(link => {
  link.addEventListener('click', function (e) {
    e.preventDefault();
    const targetID = this.getAttribute('href').substring(1);
    const targetSection = document.getElementById(targetID);
    
    window.scrollTo({
      top: targetSection.offsetTop - 80, // Adjust scroll position to avoid header overlap
      behavior: 'smooth'
    });
  });
});

// Autoplay untuk Video di Section About
const video = document.querySelector('.about .video-container video');
if (video) {
  video.setAttribute('autoplay', true);
  video.setAttribute('loop', true);
  video.setAttribute('muted', true); // Muted agar tidak langsung mengeluarkan suara
  video.setAttribute('playsinline', true);
}

// Add to Cart dan Wishlist Interaksi
const cartButtons = document.querySelectorAll('.cart-btn');
cartButtons.forEach(btn => {
  btn.addEventListener('click', () => {
    alert('Item added to cart!');
  });
});

const heartButtons = document.querySelectorAll('.fas.fa-heart');
heartButtons.forEach(btn => {
  btn.addEventListener('click', () => {
    btn.classList.toggle('active');
    alert('Added to wishlist!');
  });
});
