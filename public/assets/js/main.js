(function () {
    "use strict";

    function updateSelector() {
        var tabs = $("#navbarSupportedContent");
        var activeItem = tabs.find(".active");
        if (activeItem.length === 0) {
            activeItem = tabs.find("li:first");
            activeItem.addClass("active");
        }

        var itemPos = activeItem.position();
        var itemHeight = activeItem.innerHeight();
        var itemWidth = activeItem.innerWidth();

        if (itemPos) {
            $(".hori-selector").css({
                top: itemPos.top + "px",
                left: itemPos.left + "px",
                height: itemHeight + "px",
                width: itemWidth + "px",
                visibility: "visible",
                transition: "all 0.3s ease",
            });
        }
    }

    $(document).ready(function () {
        setTimeout(updateSelector, 500);
    });

    $(window).on("resize", function () {
        setTimeout(updateSelector, 500);
    });

    $(".navbar-toggler").click(function () {
        $(".navbar-collapse").slideToggle(300);
        setTimeout(updateSelector, 300);
    });

    $(document).on("click", "#navbarSupportedContent ul li", function () {
        $("#navbarSupportedContent ul li").removeClass("active");
        $(this).addClass("active");
        updateSelector();
    });

    $(document).ready(function () {
        var path = window.location.pathname.split("/").pop() || "index.html";
        var target = $('#navbarSupportedContent ul li a[href="' + path + '"]');
        if (target.length) {
            target.parent().addClass("active");
        } else {
            $("#navbarSupportedContent ul li:first").addClass("active");
        }
        setTimeout(updateSelector, 500);
    });

    const select = (el, all = false) => {
        el = el.trim();
        if (all) {
            return [...document.querySelectorAll(el)];
        } else {
            return document.querySelector(el);
        }
    };

    const on = (type, el, listener, all = false) => {
        let selectEl = select(el, all);
        if (selectEl) {
            if (all) {
                selectEl.forEach((e) => e.addEventListener(type, listener));
            } else {
                selectEl.addEventListener(type, listener);
            }
        }
    };

    const onscroll = (el, listener) => {
        el.addEventListener("scroll", listener);
    };

    let navbarlinks = select("#navbar .scrollto", true);
    const navbarlinksActive = () => {
        let position = window.scrollY + 200;
        navbarlinks.forEach((navbarlink) => {
            if (!navbarlink.hash) return;
            let section = select(navbarlink.hash);
            if (!section) return;
            if (
                position >= section.offsetTop &&
                position <= section.offsetTop + section.offsetHeight
            ) {
                navbarlink.classList.add("active");
            } else {
                navbarlink.classList.remove("active");
            }
        });
    };
    window.addEventListener("load", navbarlinksActive);
    onscroll(document, navbarlinksActive);

    const scrollto = (el) => {
        let header = select("#header");
        let offset = header.offsetHeight;
        let elementPos = select(el).offsetTop;
        window.scrollTo({
            top: elementPos - offset,
            behavior: "smooth",
        });
    };

    let selectHeader = select("#header");
    if (selectHeader) {
        const headerScrolled = () => {
            if (window.scrollY > 100) {
                selectHeader.classList.add("header-scrolled");
            } else {
                selectHeader.classList.remove("header-scrolled");
            }
        };
        window.addEventListener("load", headerScrolled);
        onscroll(document, headerScrolled);
    }

    let backtotop = select(".back-to-top");
    if (backtotop) {
        const toggleBacktotop = () => {
            if (window.scrollY > 100) {
                backtotop.classList.add("active");
            } else {
                backtotop.classList.remove("active");
            }
        };
        window.addEventListener("load", toggleBacktotop);
        onscroll(document, toggleBacktotop);
    }

    on("click", ".mobile-nav-toggle", function (e) {
        select("#navbar").classList.toggle("navbar-mobile");
        this.classList.toggle("bi-list");
        this.classList.toggle("bi-x");
    });

    on(
        "click",
        ".navbar .dropdown > a",
        function (e) {
            if (select("#navbar").classList.contains("navbar-mobile")) {
                e.preventDefault();
                this.nextElementSibling.classList.toggle("dropdown-active");
            }
        },
        true
    );

    on(
        "click",
        ".scrollto",
        function (e) {
            if (select(this.hash)) {
                e.preventDefault();
                let navbar = select("#navbar");
                if (navbar.classList.contains("navbar-mobile")) {
                    navbar.classList.remove("navbar-mobile");
                    let navbarToggle = select(".mobile-nav-toggle");
                    navbarToggle.classList.toggle("bi-list");
                    navbarToggle.classList.toggle("bi-x");
                }
                scrollto(this.hash);
            }
        },
        true
    );
    $(document).ready(function () {
        // Toggle .show on navbar collapse
        $(".navbar-toggler").on("click", function () {
            $(".navbar-collapse").toggleClass("show");
        });

        // Update horizontal selector position
        function updateSelector() {
            var activeItem = $(".navbar-nav .active");
            if (activeItem.length === 0) {
                activeItem = $(".navbar-nav li:first-child");
                activeItem.addClass("active");
            }

            var itemPos = activeItem.position();
            var itemHeight = activeItem.innerHeight();
            var itemWidth = activeItem.innerWidth();

            $(".hori-selector")
                .css({
                    top: itemPos.top + "px",
                    left: itemPos.left + "px",
                    height: itemHeight + "px",
                    width: itemWidth + "px",
                })
                .show();
        }

        // Event listeners for updating the selector position
        $(window).on("resize", function () {
            setTimeout(updateSelector, 500);
        });

        $(".navbar-nav").on("click", "li", function () {
            $(".navbar-nav li").removeClass("active");
            $(this).addClass("active");
            updateSelector();
        });

        $(window).on("load", function () {
            setTimeout(updateSelector, 500);
        });

        // Smooth scroll on clicking links
        $(".scrollto").on("click", function (e) {
            var target = $(this.hash);
            if (target.length) {
                e.preventDefault();
                var header = $("#header");
                var offset = header.outerHeight();
                $("html, body").animate(
                    {
                        scrollTop: target.offset().top - offset,
                    },
                    1000
                );
                if ($(".navbar-collapse").hasClass("show")) {
                    $(".navbar-collapse").removeClass("show");
                    $(".navbar-toggler").toggleClass("bi-list bi-x");
                }
            }
        });
    });

    window.addEventListener("load", () => {
        if (window.location.hash) {
            if (select(window.location.hash)) {
                scrollto(window.location.hash);
            }
        }
    });

    document.addEventListener("DOMContentLoaded", function () {
        const tabs = document.querySelectorAll(".service-link");
        tabs.forEach((tab) => {
            tab.addEventListener("click", function (event) {
                event.preventDefault();
                const targetTabId = this.getAttribute("href");
                const targetTabContent = document.querySelector(targetTabId);

                document.querySelectorAll(".service-link").forEach((tab) => {
                    tab.classList.remove("active");
                });
                document.querySelectorAll(".postcard").forEach((postcard) => {
                    postcard.style.display = "none";
                });

                this.classList.add("active");
                targetTabContent.style.display = "flex";
            });
        });
    });

    let preloader = select("#preloader");
    if (preloader) {
        window.addEventListener("load", () => {
            preloader.remove();
        });
    }

    const glightbox = GLightbox({
        selector: ".glightbox",
    });

    window.addEventListener("load", () => {
        let newsContainer = select(".news-container");
        if (newsContainer) {
            let newsIsotope = new Isotope(newsContainer, {
                itemSelector: ".news-item",
            });

            let newsFilters = select("#news-flters li", true);

            on(
                "click",
                "#news-flters li",
                function (e) {
                    e.preventDefault();
                    newsFilters.forEach(function (el) {
                        el.classList.remove("filter-active");
                    });
                    this.classList.add("filter-active");

                    newsIsotope.arrange({
                        filter: this.getAttribute("data-filter"),
                    });
                    newsIsotope.on("arrangeComplete", function () {
                        AOS.refresh();
                    });
                },
                true
            );
        }
    });

    const newsLightbox = GLightbox({
        selector: ".news-lightbox",
    });

    new Swiper(".news-details-slider", {
        speed: 400,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            type: "bullets",
            clickable: true,
        },
    });

    document.addEventListener("DOMContentLoaded", function () {
        var swiper = new Swiper(".news-details-slider", {
            speed: 400,
            loop: true,
            autoplay: {
                delay: 5000,
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
    });

    window.addEventListener("load", () => {
        AOS.init({
            duration: 1000,
            easing: "ease-in-out",
            once: true,
            mirror: false,
        });
    });

    document.addEventListener("DOMContentLoaded", function () {
        AOS.init({
            duration: 1000, // Duration of animations in milliseconds
            easing: "ease-in-out", // Easing function for animations
            once: true, // Whether animation should happen only once - while scrolling down
            disable: "mobile", // Optionally disable AOS on mobile devices
        });
    });

    document.addEventListener("DOMContentLoaded", function () {
        const elements = document.querySelectorAll(".fade-in");

        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("visible");
                    } else {
                        entry.target.classList.remove("visible");
                    }
                });
            },
            { threshold: 0.1 }
        );

        elements.forEach((element) => {
            observer.observe(element);
        });
    });

    document.addEventListener("DOMContentLoaded", function () {
        const elements = document.querySelectorAll(
            ".fade-up, .scale-up, .rotate-in"
        );

        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("visible");
                    } else {
                        entry.target.classList.remove("visible");
                    }
                });
            },
            { threshold: 0.1 }
        );

        elements.forEach((element) => {
            observer.observe(element);
        });
    });

    document.addEventListener("DOMContentLoaded", function () {
        const footer = document.getElementById("footer");
        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        footer.classList.add("visible");
                    } else {
                        footer.classList.remove("visible");
                    }
                });
            },
            { threshold: 0.1 }
        );

        observer.observe(footer);
    });

    AOS.init({
        duration: 1200, // durasi animasi dalam milidetik
        once: true, // hanya jalankan animasi sekali
    });

    document.addEventListener("DOMContentLoaded", function () {
        var swiper = new Swiper(".news-details-slider", {
            speed: 400,
            loop: true,
            autoplay: {
                delay: 5000,
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

        var dropdownButton = document.getElementById("dropdown-button");
        var dropdownContent = document.getElementById("dropdown-content");

        dropdownButton.addEventListener("click", function () {
            dropdownContent.classList.toggle("show");

            if (dropdownContent.classList.contains("show")) {
                dropdownButton.textContent = "Show Less";
            } else {
                dropdownButton.textContent = "Read More";
            }
        });
    });

    document.addEventListener("DOMContentLoaded", function () {
        const whatsappChatBubble = document.getElementById(
            "whatsapp-chat-bubble"
        );
        const whatsappNumber = "+62 813-8491-1009"; // Ganti dengan nomor WhatsApp yang diinginkan

        whatsappChatBubble.addEventListener("click", function () {
            window.open(`https://wa.me/6281384911009`, "_blank");
        });
    });

    // Add your JavaScript here
    window.addEventListener("scroll", function () {
        var backToTopButton = document.getElementById("back-to-top");
        var whatsappChatContainer = document.getElementById(
            "whatsapp-chat-container"
        );

        if (window.scrollY > 100) {
            // Adjust scroll value as needed
            backToTopButton.style.display = "flex";
            whatsappChatContainer.style.right = "80px"; // Move WhatsApp chat bubble to the right
        } else {
            backToTopButton.style.display = "none";
            whatsappChatContainer.style.right = "20px"; // Move WhatsApp chat bubble back to initial position
        }
    });

    document.addEventListener("DOMContentLoaded", function () {
        // Get the modal
        var modal = document.getElementById("modal");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // Show the modal
        modal.style.display = "block";

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        };

        // Automatically close the modal after 7 seconds
        setTimeout(function () {
            modal.style.display = "none";
        }, 7000);
    });

    document.addEventListener("DOMContentLoaded", function () {
        const navbar = document.getElementById("navbar");

        // Function to add or remove 'scrolled' class based on scroll position
        function onScroll() {
            if (window.scrollY > 50) {
                // Adjust the scroll value as needed
                navbar.classList.add("scrolled");
            } else {
                navbar.classList.remove("scrolled");
            }
        }

        // Listen for scroll events
        window.addEventListener("scroll", onScroll);
    });

    AOS.init({
        duration: 1000, // Durasi animasi dalam milidetik
        easing: "ease-in-out", // Gaya animasi
        once: true, // Animasi terjadi sekali saja
    });

    /*=============== SHOW HIDDEN - PASSWORD ===============*/
    const showHiddenPass = (loginPass, loginEye) => {
        const input = document.getElementById(loginPass),
            iconEye = document.getElementById(loginEye);

        iconEye.addEventListener("click", () => {
            // Change password to text
            if (input.type === "password") {
                // Switch to text
                input.type = "text";

                // Icon change
                iconEye.classList.add("ri-eye-line");
                iconEye.classList.remove("ri-eye-off-line");
            } else {
                // Change to password
                input.type = "password";

                // Icon change
                iconEye.classList.remove("ri-eye-line");
                iconEye.classList.add("ri-eye-off-line");
            }
        });
    };

    showHiddenPass("login-pass", "login-eye");

    new PureCounter();
})();


