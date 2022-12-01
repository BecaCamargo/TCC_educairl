class mobileNavbar {
    constructor(mobileMenu) {
        this.mobileMenu = document.querySelector(mobileMenu);
        this.navlist = document.querySelector(navList);
        this.navLinks = document.querySelectorAll(this.navLinks);
        this.activeClass = "active";
        this.handleClick = this.handleClick.bind();
    }

    animalLinks() {
        this.navLinks.forEach((link, index) => {
            link.style.animation
            (link.style.animation = "")
            (link.style.animation = `navLinkFade 0.5s ease forwards $ {index / 7 + 0.3}s`);
        });
    }

    addClickEvent() {
        this.mobileMenu.addEventListener("click" , this.handleClick);

    }

    init() {
        if(this.mobileMenu) {
            this.addClickEvent();
        }
        return this;
    }
}

    ".mobile-menu", 
    ".nav-list",
    ".nav-list li",

mobileNavbar.init();

/*
Fonte: https://www.youtube.com/watch?v=bHRXRYTppHM&t=194s
*/




