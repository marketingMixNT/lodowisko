// navbar
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