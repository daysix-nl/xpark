
try {
    window.addEventListener('scroll', function () {
        var body = document.body;
        var scrollPosition = window.scrollY;

        if (scrollPosition >= 20) {
            body.classList.remove('scroll-nonactive');
            body.classList.add('scroll-active');
        } else {
            body.classList.remove('scroll-active');
            body.classList.add('scroll-nonactive');
        }
    });
} catch (error) { }



try {
    let labels = ["Software", "Hardware", "Service"];
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 0,
        effect: "fade",
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnHover: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination-triangle",
            clickable: true,
            renderBullet: function (index, className) {
                return '<span class="' + className + '"><span class="tab-text">' + labels[index] + "</span></span>";
            },
        },
    });



} catch (error) { }

try {
    let labelss = ["XPark B.V.", "Waysis", "Brickyard"];
    var swiper = new Swiper(".mySwiperContent", {
        spaceBetween: 30,
        effect: "fade",
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination-content",
            clickable: true,
            renderBullet: function (index, className) {
                return '<span class="' + className + '"><span class="tab-text">' + labelss[index] + "</span></span>";
            },
        },
    });
} catch (error) { }


try {
    var swiper = new Swiper(".mySwiperMogelijkheden", {
        slidesPerView: 'auto',
        spaceBetween: 25,
        breakpoints: {
            768: {
                slidesPerView: 'auto',
                spaceBetween: 25,
            },
            1200: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1352: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
        },
    });
} catch (error) { }

try {
    var swiper = new Swiper(".mySwiperKlanten", {
        slidesPerView: 'auto',
        spaceBetween: 12,
        breakpoints: {
            768: {
                slidesPerView: 'auto',
                spaceBetween: 34,
            },
            1200: {
                slidesPerView: 'auto',
                spaceBetween: 30,
            },
            1352: {
                slidesPerView: 'auto',
                spaceBetween: 34,
            },
        },
    });
} catch (error) { }


try {
    var swiper = new Swiper(".mySwiperPartners", {
        slidesPerView: "auto",
        centeredSlides: true,
        loop: true,
        spaceBetween: 30,
        initialSlide: 1, // Begin bij de tweede slide (0-gebaseerde index)
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
} catch (error) { }

try {
    var swiper = new Swiper(".mySwiperWaarom", {
        spaceBetween: 0,
        slidesPerView: 1,
        effect: "fade",
        loop: true,
        autoplay: {
            delay: 15000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
} catch (error) { }

try {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("show");
            }
        });
    });

    const hiddenElements = document.querySelectorAll(".element-fade-in");
    hiddenElements.forEach((el) => observer.observe(el));
} catch (error) { }




function addParallaxEffect(innerClass, sectionClass) {
    try {
        const inner = document.querySelector(innerClass);
        const section = document.querySelector(sectionClass);

        if (!inner || !section) {
            throw new Error("Inner or section element not found");
        }

        window.addEventListener("scroll", function () {
            let scrollPosition =
                window.scrollY ||
                window.scrollTop ||
                document.getElementsByTagName("html")[0].scrollTop;
            let centerPoint = section.offsetTop + section.offsetHeight / 2 - window.innerHeight / 1;
            let scale;

            // Scaling from 1 to 1.5 when scroll is from 0 to centerPoint of image
            if (scrollPosition <= centerPoint) {
                scale = 1.5 - (scrollPosition / centerPoint) * 0.5;
            }
            scale = Math.max(Math.min(scale, 1.5), 1); // Clamp scale value between 1 and 1.5

            inner.style.transform = `scale(${scale})`;
        });
    } catch (error) {
        console.error(error.message);
    }
}

// Gebruik de functie voor elk geval op de pagina
addParallaxEffect(".inner-par1", ".section-par1");
addParallaxEffect(".inner-par2", ".section-par2");
// Voeg hier zoveel aanroepen toe als nodig is




try {
    gsap.to(".car-animation", {
        x: "110vw",
        scrollTrigger: {
            trigger: ".start-car-animtion",
            start: "top 0px",
            end: "bottom 100px",
            scrub: 0.5,
            //   markers: true,
        },
    });
} catch (error) { }



try {
    // Functie om de classes te toggelen
    function toggleHamburgerClass() {
        document.body.classList.toggle('hamburger-nonactive');
        document.body.classList.toggle('hamburger-active');
    }

    // Event listener toevoegen aan de knoppen
    document.getElementById('hamburger').addEventListener('click', toggleHamburgerClass);
    document.getElementById('close-button').addEventListener('click', toggleHamburgerClass);
} catch (error) { }



/**********************/
/**** accordion ***/
/**********************/
try {
    const acc = document.getElementsByClassName("accordion");

    for (let i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
            const panel = this.nextElementSibling;
            this.classList.toggle("active");
            panel.style.height =
                panel.style.height === panel.scrollHeight + "px"
                    ? "0"
                    : panel.scrollHeight + "px";

            for (let j = 0; j < acc.length; j++) {
                if (this !== acc[j]) {
                    acc[j].classList.remove("active");
                    acc[j].nextElementSibling.style.height = "0";
                }
            }
        });
    }
} catch (error) { }



try {
    document.addEventListener('DOMContentLoaded', function () {
        var openButtons = document.querySelectorAll('.open-form');
        var closeButton = document.getElementById('close');
        var body = document.body;

        function toggleForm(event) {
            var vacatureId = event.currentTarget.getAttribute('data-vacature-id');
            var formField = document.querySelector('#input_3_6'); // Pas dit aan naar het juiste veld ID
            if (formField) {
                formField.value = vacatureId;
            }

            if (body.classList.contains('form-close')) {
                body.classList.remove('form-close');
                body.classList.add('form-open');
            } else {
                body.classList.remove('form-open');
                body.classList.add('form-close');
            }
        }

        openButtons.forEach(function (button) {
            button.addEventListener('click', toggleForm);
        });

        if (closeButton) {
            closeButton.addEventListener('click', function () {
                body.classList.remove('form-open');
                body.classList.add('form-close');
            });
        }
    });
} catch (error) { }

