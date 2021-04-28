// Menu hamburguer
if(typeof isMenuOpen == 'undefined') {
    isMenuOpen = false;
}

function menuAnimation() {
    let burger = document.getElementById("burger");
    let navbar = document.querySelector(".navbar-links");
    let scontainer = document.querySelector(".secondary-container");

    isMenuOpen ? burger.classList.remove("open") : burger.classList.add("open");
    isMenuOpen ? scontainer.classList.remove("burger-margin-left") : scontainer.classList.add("burger-margin-left");
    isMenuOpen ? navbar.classList.remove("active") : navbar.classList.add("active");
    isMenuOpen ? document.body.classList.remove("no-scroll") : document.body.classList.add("no-scroll");
    isMenuOpen ? burger.style.marginLeft = 0 : burger.style.marginleft = "180px"; 

    isMenuOpen ? isMenuOpen = false : isMenuOpen = true;
}

window.onscroll = function() {
    checkScroll();
};

function checkScroll() {
    const navbarMain = document.querySelector('.menu-header');
    const navbarSecondary = document.querySelector('.secondary-menu');

    if(window.scrollY >= navbarMain.offsetHeight) {
        document.body.style.marginTop = (navbarMain.offsetHeight + navbarSecondary.offsetHeight) + 'px';
        navbarMain.classList.add("fixed-navbar-main");
        navbarSecondary.classList.add("fixed-navbar-sec");
    } else {
        document.body.style.marginTop = '0px';
        navbarMain.classList.remove("fixed-navbar-main");
        navbarSecondary.classList.remove("fixed-navbar-sec");
    }
}
