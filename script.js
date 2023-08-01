document.addEventListener("DOMContentLoaded", function () {
    const dropdown = document.querySelector(".dropdown");
    const socialButton = dropdown.querySelector(".dropdown-btn");
    const dropdownContent = dropdown.querySelector(".dropdown-content");

    socialButton.addEventListener("click", function () {
        dropdown.classList.toggle("flip");
        dropdownContent.classList.toggle("show");
    });

    // Close the dropdown when clicking outside of it
    window.addEventListener("click", function (event) {
        if (!event.target.matches(".social-button") && !event.target.matches(".dropdown-content")) {
            dropdownContent.classList.remove("show");
        }
    });
});


// Function to toggle the visibility of the dropdown content
function toggleDropdown() {
    var dropdownContent = document.getElementById("dropdownContent");
    dropdownContent.classList.toggle("show");
}

// Add an event listener to the button to toggle the dropdown when clicked
var dropdownButton = document.querySelector(".dropdown-btn");
dropdownButton.addEventListener("click", toggleDropdown);



const menuButton = document.getElementById('menuButton');
const mobileNav = document.getElementById('mobileMenu');

function toggleMobileNav() {
    mobileNav.classList.toggle('show');
}

menuButton.addEventListener('click', toggleMobileNav);

function hideMobileNavOnDesktop() {
    if (window.innerWidth >= 768) {
        mobileNav.classList.remove('show');
    }
}

window.addEventListener('resize', hideMobileNavOnDesktop);

function Home() {
    window.location.href = 'index.php';
}

function Project() {
    window.location.href = 'Project.php';
}

function About() {
    window.location.href = 'About.php';
}

function GitHub() {
    // No navigation for now
}

function EsphomePage() {
    // No navigation for now
}
