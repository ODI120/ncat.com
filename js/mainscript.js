// =============Custom Script for alumni 6 per page =============

const itemsPerPage = 3;
let currentPage = 1;
const imageContainer = document.querySelector('.image-container');
const images = Array.from(imageContainer.children);
const totalPages = Math.ceil(images.length / itemsPerPage);

document.getElementById('totalPages').textContent = totalPages;

function showPage(page) {
    const start = (page - 1) * itemsPerPage;
    const end = start + itemsPerPage;
    images.forEach((img, index) => {
        if (index >= start && index < end) {
            img.classList.remove('_hidden');
        } else {
            img.classList.add('_hidden');
        }
    });
    document.getElementById('currentPage').textContent = page;
}

function nextPage() {
    if ((currentPage * itemsPerPage) < images.length) {
        currentPage++;
        showPage(currentPage);
    }
}

function prevPage() {
    if (currentPage > 1) {
        currentPage--;
        showPage(currentPage);
    }
}

// Initialize the first page
showPage(currentPage);

// ====================scroll show/hiden======

const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add('show');
            observer.unobserve(entry.target); // Stop observing once it has been revealed
        }
    });
});

const hiddenElements = document.querySelectorAll('.hidden');
hiddenElements.forEach((el) => observer.observe(el));

// ==============navbar hide and show addEventListener.==========
document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.getElementById('navbar');
    const mobileMenu = document.getElementById('mobile-menu');
    const navLinks = document.getElementById('navbarNav');
    const logo = document.getElementById('logo');
    let lastScrollTop = 0;
  
    window.addEventListener('scroll', function() {
      let scrollTop = window.scrollY || document.documentElement.scrollTop;
      if (scrollTop > lastScrollTop && scrollTop > 200) {
        navbar.classList.add('visible');
      } else {
        navbar.classList.remove('visible');
      }
      lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // For mobile or negative scrolling
    });
  
    mobileMenu.addEventListener('click', function() {
      navLinks.classList.toggle('show');
      mobileMenu.querySelector('.navbar-toggler-icon').classList.toggle('active');
      logo.classList.toggle('hidden');
    });
});


// -----------------------------------------------------------------

const scrollContainer = document.querySelector('.scroll-content');
const items = scrollContainer.children;
const itemsCount = items.length;

// Clone the items to create the seamless infinite effect
for (let i = 0; i < itemsCount; i++) {
    const clone = items[i].cloneNode(true);
    scrollContainer.appendChild(clone);
}
