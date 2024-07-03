var swiper = new Swiper(".slide-content", {
    slidesPerView: 3,
    spaceBetween: 25,
    loop: true,
    centerSlide: "true",
    fade: "true",
    grabCursor: "true",
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 2,
        },
        950: {
            slidesPerView: 3,
        },
    },
});

let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
    ) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

window.addEventListener("scroll", () => {
    if (window.scrollY >= 56) {
        navEl.classList.add("navbar-scroll");
        navLink.forEach((link) => {
            link.classList.add("nav-link-scroll");
        });
        navToggler.classList.add("navbar-toggler-scroll");
        navTogglerIcon.classList.add("navbar-toggler-icon-scroll");
    } else if (window.scrollY < 56) {
        navEl.classList.remove("navbar-scroll");
        navLink.forEach((link) => {
            link.classList.remove("nav-link-scroll");
        });
        navToggler.classList.remove("navbar-toggler-scroll");
        navTogglerIcon.classList.remove("navbar-toggler-icon-scroll");
    }
});
