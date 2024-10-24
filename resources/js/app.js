import "./bootstrap";

const navbar = document.querySelector("#header");

const navbarOnScroll = () => {
    let currentScrollPosition = window.scrollY;

    if (currentScrollPosition >= 50) {
        console.log("ok");
        navbar.classList.add("nav-color");
        navbar.classList.remove("nav-color--transparent");
    } else {
        navbar.classList.remove("nav-color");
        navbar.classList.add("nav-color--transparent");
    }
};

let lastScrollPosition = window.scrollY;

const checkScrollPosition = () => {
    let currentScrollPosition = window.scrollY;

    if (currentScrollPosition !== lastScrollPosition) {
        navbarOnScroll();
        lastScrollPosition = currentScrollPosition;
    }

    requestAnimationFrame(checkScrollPosition);
};

requestAnimationFrame(checkScrollPosition);

const mobileMenu = document.querySelector("#mobileMenu");
const closeBtn = document.querySelector("#closeMenu");
const openBtn = document.querySelector("#openMenu");

const menuHandler = () => {
    mobileMenu.classList.toggle("translate-x-[100%]");
    mobileMenu.classList.toggle("opacity-0");
    mobileMenu.classList.toggle("opacity-100");
};

openBtn && openBtn.addEventListener("click", menuHandler);
closeBtn && closeBtn.addEventListener("click", menuHandler);

const footerSpan = document.querySelector("#footerYear");

const currentYear = new Date().getFullYear();

footerSpan.innerHTML = currentYear; 
