/*=============== SHOW MENU ===============*/
const navMenu = document.getElementById("nav-menu"),
    navToggle = document.getElementById("nav-toggle"),
    navClose = document.getElementById("nav-close");

if (navToggle) {
    navToggle.addEventListener("click", () => {
        navMenu.classList.add("show-menu");
    })
}

if (navClose) {
    navClose.addEventListener("click", () => {
        navMenu.classList.remove("show-menu");
    })
}

/*=============== CHANGE BG HEADER ===============*/
const scrollHeader = () => {
    const header = document.getElementById("header");

    scrollY >= 50 ? header.classList.add("scroll-header")
        : header.classList.remove("scroll-header");
}

window.addEventListener("scroll", scrollHeader);

/*=============== SWIPER ===============*/
let featureSwiper = new Swiper(".features__content", {
    speed: 400,
    spaceBetween: 30,
    centeredSlides: true,
    slidesPerView: 'auto',
    grabCursor: true,
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    // breakpoints: {
    //     1024: {
    //       slidesPerView: 2,
    //       spaceBetween: 32
    //     },
    // }
});

/*=============== SHOW SCROLL UP ===============*/ 
function scrollUp(){
    const scrollUp = document.getElementById('scroll-up');
    // When the scroll is higher than 460 viewport height, add the show-scroll class to the a tag with the scroll-top class
    if(this.scrollY >= 460) scrollUp.classList.add('show-scroll'); else scrollUp.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollUp)

/*=============== SCROLL REVEAL ANIMATION ===============*/
const sr = ScrollReveal({
    origin: 'top',
    distance: '60px',
    duration: 2500,
    delay: 400,
    // reset: true
})

sr.reveal(`.hero__data, .video__component, .features__title-div, 
.advantages__title, .advantages__content, .contact__data
`)
sr.reveal(`.hero__image, .header, .testimonials__container`,{interval: 100})
sr.reveal(`.section__title`,{interval: 200})
sr.reveal(`.swiper, .analize__data, .demo__data, .advantages__image, .contact__img`,{origin: 'bottom'})

// const scroll = new LocomotiveScroll({
//     el: document.querySelector('#main'),
//     smooth: true
// });

/*=============== BUTTON HOVER ===============*/
let elements = document.querySelectorAll(".text");

elements.forEach((element) => {
    let innerText = element.innerText;
    console.log(innerText)
    element.innerHTML = "";

    let textContainer = document.createElement("div");
    textContainer.classList.add("block")

    for (let letter of innerText) {
        let span = document.createElement("span");
        span.innerText = letter.trim() === "" ? "\xa0" : letter;
        span.classList.add("letter");
        textContainer.appendChild(span);
    }

    element.appendChild(textContainer);
    element.appendChild(textContainer.cloneNode(true));
})

elements.forEach((element) => {
    element.addEventListener("mouseover", () => {
        element.classList.remove("play")
    })
})