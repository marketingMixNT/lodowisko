// mobile menu
const mobileMenu = document.querySelector("#mobileMenu");
const closeBtn = document.querySelector("#closeMenu");
const openBtn = document.querySelector("#openMenu");

const navItems = document.querySelectorAll(".nav-item");

const menuHandler = () => {
    mobileMenu.classList.toggle("translate-x-[100%]");
    mobileMenu.classList.toggle("opacity-0");
    mobileMenu.classList.toggle("opacity-100");
};

openBtn && openBtn.addEventListener("click", menuHandler);
closeBtn && closeBtn.addEventListener("click", menuHandler);

navItems.forEach(item => {
    item.addEventListener("click", menuHandler);
});
