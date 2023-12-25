/**
 * WOW
 */
new WOW().init();

if (document.querySelector(".hero-slider")) {
    let swiper = new Swiper(".hero-slider", {
        slidesPerView: 1,
        loop: true,
        autoplay: {
            delay: 5000,
        },
        speed: 1000,
    });
}
if (document.querySelector(".next-match .swiper")) {
    let swiper = new Swiper(".next-match .swiper", {
        slidesPerView: 1,
        autoplay: {
            delay: 4000,
        },
        speed: 500,
        pagination: {
            el: ".swiper-pagination",
        },
    });
}
if (document.querySelector(".timeline .swiper")) {
    let swiper = new Swiper(".timeline .swiper", {
        slidesPerView: 5,
        spaceBetween: 30,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            768: {
                slidesPerView: 10,
                spaceBetween: 20,
            },
        },
        on: {
            click: function() {
                var clickedIndex = swiper.clickedIndex;

                if (!isNaN(clickedIndex)) {
                    swiper.slides.forEach(function(slide) {
                        slide.classList.remove("active");
                    });

                    $(".timeline-content .content").removeClass("show");

                    $(".timeline-content [data-index='" + clickedIndex + "']").addClass(
                        "show"
                    );

                    swiper.slides[clickedIndex].classList.add("active");
                }
            },
        },
    });
}
if (document.querySelector(".various-games .swiper")) {
    let swiper = new Swiper(".various-games .swiper", {
        slidesPerView: 1,
        spaceBetween: 55,
        navigation: {
            nextEl: ".next-1",
            prevEl: ".prev-1",
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
                spaceBetween: 55,
            },
            991: {
                slidesPerView: 3,
                spaceBetween: 55,
            },
        },
    });
}
if (document.querySelector(".players .swiper")) {
    let len = jQuery(".players").length;
    for (var i = 1; i <= len; i++) {
        new Swiper(".players .swiper-" + i, {
            slidesPerView: 1,
            spaceBetween: 50,
            navigation: {
                nextEl: ".swiper-next-" + i,
                prevEl: ".swiper-prev-" + i,
            },
            breakpoints: {
                480: {
                    slidesPerView: 2,
                    spaceBetween: 35,
                },
                991: {
                    slidesPerView: 3,
                    spaceBetween: 35,
                },
                1199: {
                    slidesPerView: 3,
                    spaceBetween: 35,
                },
                1400: {
                    slidesPerView: 5,
                    spaceBetween: 35,
                },
            },
        });
    }
}

document.addEventListener("click", function(e) {
    if (e.target.classList.contains("hamburger-toggle")) {
        e.target.children[0].classList.toggle("active");
        $("html").toggleClass("menu-opened");
    }
});

window.addEventListener("scroll", function() {
    var scroll = window.scrollY;
    var header = document.querySelector("header");
    if (scroll >= 60) {
        header.classList.add("fixed");
    } else {
        header.classList.remove("fixed");
    }
});
let go_to_top = document.querySelector(".go-to-top");
if (go_to_top) {
    go_to_top.addEventListener("click", function(event) {
        event.preventDefault();
        var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        if (scrollTop > 0) {
            window.scrollTo({
                top: 0,
                behavior: "smooth",
            });
        }
    });
}

var lightboxVideo = GLightbox();
lightboxVideo.on("open", (target) => {});
var lightboxVideo = GLightbox({
    selector: ".glightbox2",
});

lightboxVideo.on("slide_changed", ({ prev, current }) => {
    console.log("Prev slide", prev);
    console.log("Current slide", current);

    const { slideIndex, slideNode, slideConfig, player } = current;

    if (player) {
        if (!player.ready) {
            // If player is not ready
            player.on("ready", (event) => {
                // Do something when video is ready
            });
        }

        player.on("play", (event) => {
            console.log("Started play");
        });

        player.on("volumechange", (event) => {
            console.log("Volume change");
        });

        player.on("ended", (event) => {
            console.log("Video ended");
        });
    }
});