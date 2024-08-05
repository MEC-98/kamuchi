'use strict';

/* Navbar toggle */
const navbar = document.querySelector("[data-navbar]");
const navToggler = document.querySelectorAll("[data-nav-toggler]");
const navLinks = document.querySelectorAll("[data-nav-link]");
const overlay = document.querySelector("[data-overlay]");

for (let i = 0; i < navToggler.length; i++) {
    navToggler[i].addEventListener("click", function() {
        navbar.classList.toggle("active");
        overlay.classList.toggle("active");
    });
}

for (let i = 0; i < navLinks.length; i++) {
    navLinks[i].addEventListener("click", function() {
        navbar.classList.remove("active");
        overlay.classList.remove("active");
    });
}

/* Header */
const header = document.querySelector("[data-header]");
const backTopBtn = document.querySelector("[data-back-top-btn]");

// Check if we are on specific pages
const isSpecialPage = window.location.pathname.includes("faq.php") ||
    window.location.pathname.includes("Politique_de_cookies.php") ||
    window.location.pathname.includes("contactus.php") ||
    window.location.pathname.includes("policy-privacy.php");

if (isSpecialPage) {
    header.classList.add("active");
} else {
    window.addEventListener("scroll", function() {
        if (window.scrollY >= 100) {
            header.classList.add("active");
            backTopBtn.classList.add("active");
        } else {
            header.classList.remove("active");
            backTopBtn.classList.remove("active");
        }
    });
}

/* contact */
const inputs = document.querySelectorAll(".input");

function focusFunc() {
    let parent = this.parentNode;
    parent.classList.add("focus");
}

function blurFunc() {
    let parent = this.parentNode;
    if (this.value == "") {
        parent.classList.remove("focus");
    }
}

inputs.forEach((input) => {
    input.addEventListener("focus", focusFunc);
    input.addEventListener("blur", blurFunc);
});