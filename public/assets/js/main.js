// *** iframe ******

function openMap() {
    document.body.classList.add("map-open");

    mapFrame.src =
        "https://pelayanan.jakarta.go.id/kemudahan-berusaha/invest.html";

    mapWrapper.style.display = "block";

    // trigger animation
    requestAnimationFrame(() => {
        mapWrapper.classList.add("active");
    });
}

function closeMap() {
    mapWrapper.classList.remove("active");

    setTimeout(() => {
        mapWrapper.style.display = "none";
        mapFrame.src = ""; // stop iframe
        document.body.classList.remove("map-open");
    }, 300);
}

/* ESC to close */
document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && mapWrapper.classList.contains("active")) {
        closeMap();
    }
});
//**** */ end iframe******

(function () {
    "use strict";

    /**
     * Apply .scrolled class to the body as the page is scrolled down
     */
    function toggleScrolled() {
        const selectBody = document.querySelector("body");
        const selectHeader = document.querySelector("#header");
        if (
            !selectHeader.classList.contains("scroll-up-sticky") &&
            !selectHeader.classList.contains("sticky-top") &&
            !selectHeader.classList.contains("fixed-top")
        )
            return;
        window.scrollY > 100
            ? selectBody.classList.add("scrolled")
            : selectBody.classList.remove("scrolled");
    }

    document.addEventListener("scroll", toggleScrolled);
    window.addEventListener("load", toggleScrolled);

    /**
     * Mobile nav toggle
     */
    const mobileNavToggleBtn = document.querySelector(".mobile-nav-toggle");

    function mobileNavToogle() {
        document.querySelector("body").classList.toggle("mobile-nav-active");
        mobileNavToggleBtn.classList.toggle("bi-list");
        mobileNavToggleBtn.classList.toggle("bi-x");
    }
    mobileNavToggleBtn.addEventListener("click", mobileNavToogle);

    /**
     * Hide mobile nav on same-page/hash links
     */
    document.querySelectorAll("#navmenu a").forEach((navmenu) => {
        navmenu.addEventListener("click", () => {
            if (document.querySelector(".mobile-nav-active")) {
                mobileNavToogle();
            }
        });
    });

    /**
     * Toggle mobile nav dropdowns
     */
    document
        .querySelectorAll(".navmenu .toggle-dropdown")
        .forEach((navmenu) => {
            navmenu.addEventListener("click", function (e) {
                e.preventDefault();
                this.parentNode.classList.toggle("active");
                this.parentNode.nextElementSibling.classList.toggle(
                    "dropdown-active",
                );
                e.stopImmediatePropagation();
            });
        });

    /**
     * Scroll top button
     */
    let scrollTop = document.querySelector(".scroll-top");

    function toggleScrollTop() {
        if (scrollTop) {
            window.scrollY > 100
                ? scrollTop.classList.add("active")
                : scrollTop.classList.remove("active");
        }
    }
    scrollTop.addEventListener("click", (e) => {
        e.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: "smooth",
        });
    });

    window.addEventListener("load", toggleScrollTop);
    document.addEventListener("scroll", toggleScrollTop);

    /**
     * Animation on scroll function and init
     */
    function aosInit() {
        AOS.init({
            duration: 600,
            easing: "ease-in-out",
            once: true,
            mirror: false,
        });
    }
    window.addEventListener("load", aosInit);

    /**
     * Auto generate the carousel indicators
     */
    document
        .querySelectorAll(".carousel-indicators")
        .forEach((carouselIndicator) => {
            carouselIndicator
                .closest(".carousel")
                .querySelectorAll(".carousel-item")
                .forEach((carouselItem, index) => {
                    if (index === 0) {
                        carouselIndicator.innerHTML += `<li data-bs-target="#${carouselIndicator.closest(".carousel").id}" data-bs-slide-to="${index}" class="active"></li>`;
                    } else {
                        carouselIndicator.innerHTML += `<li data-bs-target="#${carouselIndicator.closest(".carousel").id}" data-bs-slide-to="${index}"></li>`;
                    }
                });
        });

    /**
     * Initiate glightbox
     */
    const glightbox = GLightbox({
        selector: ".glightbox",
    });

    /**
     * Init isotope layout and filters
     */
    document
        .querySelectorAll(".isotope-layout")
        .forEach(function (isotopeItem) {
            let layout = isotopeItem.getAttribute("data-layout") ?? "masonry";
            let filter = isotopeItem.getAttribute("data-default-filter") ?? "*";
            let sort =
                isotopeItem.getAttribute("data-sort") ?? "original-order";

            let initIsotope;
            imagesLoaded(
                isotopeItem.querySelector(".isotope-container"),
                function () {
                    initIsotope = new Isotope(
                        isotopeItem.querySelector(".isotope-container"),
                        {
                            itemSelector: ".isotope-item",
                            layoutMode: layout,
                            filter: filter,
                            sortBy: sort,
                        },
                    );
                },
            );

            isotopeItem
                .querySelectorAll(".isotope-filters li")
                .forEach(function (filters) {
                    filters.addEventListener(
                        "click",
                        function () {
                            isotopeItem
                                .querySelector(
                                    ".isotope-filters .filter-active",
                                )
                                .classList.remove("filter-active");
                            this.classList.add("filter-active");
                            initIsotope.arrange({
                                filter: this.getAttribute("data-filter"),
                            });
                            if (typeof aosInit === "function") {
                                aosInit();
                            }
                        },
                        false,
                    );
                });
        });

    /**
     * Initiate Pure Counter
     */
    new PureCounter();

    /**
     * Animate the skills items on reveal
     */
    let skillsAnimation = document.querySelectorAll(".skills-animation");
    skillsAnimation.forEach((item) => {
        new Waypoint({
            element: item,
            offset: "80%",
            handler: function (direction) {
                let progress = item.querySelectorAll(".progress .progress-bar");
                progress.forEach((el) => {
                    el.style.width = el.getAttribute("aria-valuenow") + "%";
                });
            },
        });
    });

    /**
     * Init swiper sliders
     */
    function initSwiper() {
        document
            .querySelectorAll(".init-swiper")
            .forEach(function (swiperElement) {
                let config = JSON.parse(
                    swiperElement
                        .querySelector(".swiper-config")
                        .innerHTML.trim(),
                );

                if (swiperElement.classList.contains("swiper-tab")) {
                    initSwiperWithCustomPagination(swiperElement, config);
                } else {
                    new Swiper(swiperElement, config);
                }
            });
    }

    window.addEventListener("load", initSwiper);
})();

/**
 * Slider Card — dijalankan setelah DOM siap
 */
document.addEventListener("DOMContentLoaded", function () {
    const slides = [
        {
            label: "Clean Water",
            desc: "Pengelolaan air bersih untuk kebutuhan masyarakat Jakarta secara berkelanjutan dan merata.",
            img: "https://images.unsplash.com/photo-1581244277943-fe4a9c777189?w=600&q=80",
        },
        {
            label: "Waste Water",
            desc: "Sistem pengolahan air limbah modern untuk menjaga kebersihan lingkungan dan ekosistem kota.",
            img: "https://images.unsplash.com/photo-1465447142348-e9952c393450?w=600&q=80",
        },
        {
            label: "Transportation",
            desc: "Infrastruktur transportasi terintegrasi yang menghubungkan seluruh wilayah Jakarta secara efisien.",
            img: "https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?w=600&q=80",
        },
        {
            label: "Energy",
            desc: "Investasi energi terbarukan untuk mendukung ketahanan energi dan mengurangi emisi karbon.",
            img: "https://images.unsplash.com/photo-1473341304170-971dccb5ac1e?w=600&q=80",
        },
        {
            label: "Housing",
            desc: "Pembangunan hunian terjangkau dan berkualitas bagi seluruh lapisan masyarakat Jakarta.",
            img: "https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=600&q=80",
        },
    ];

    const wrapper = document.getElementById("sliderWrapper");
    const dotsEl = document.getElementById("sliderDots");

    // Pastikan elemen ada sebelum dijalankan
    if (!wrapper || !dotsEl) return;

    let current = 0;

    // Build dots
    slides.forEach((_, i) => {
        const d = document.createElement("button");
        d.className = "dot" + (i === 0 ? " active" : "");
        d.addEventListener("click", () => goTo(i));
        dotsEl.appendChild(d);
    });

    function render() {
        wrapper.innerHTML = "";

        const indices = [
            (current - 1 + slides.length) % slides.length,
            current,
            (current + 1) % slides.length,
        ];

        indices.forEach((idx, pos) => {
            const card = document.createElement("div");
            card.className = "slide-card " + (pos === 1 ? "active" : "side");

            card.innerHTML = `
                <img src="${slides[idx].img}" alt="${slides[idx].label}" loading="lazy">
                <div class="card-label">
                    <h3>${slides[idx].label}</h3>
                    <p>${slides[idx].desc}</p>
                </div>
            `;

            if (pos === 0)
                card.addEventListener("click", () =>
                    goTo((current - 1 + slides.length) % slides.length),
                );
            if (pos === 2)
                card.addEventListener("click", () =>
                    goTo((current + 1) % slides.length),
                );

            wrapper.appendChild(card);
        });

        dotsEl.querySelectorAll(".dot").forEach((d, i) => {
            d.classList.toggle("active", i === current);
        });
    }

    function goTo(index) {
        current = index;
        render();
    }

    // Keyboard
    document.addEventListener("keydown", (e) => {
        if (e.key === "ArrowLeft")
            goTo((current - 1 + slides.length) % slides.length);
        if (e.key === "ArrowRight") goTo((current + 1) % slides.length);
    });

    // Touch swipe
    let startX = null;
    wrapper.addEventListener(
        "touchstart",
        (e) => (startX = e.touches[0].clientX),
        { passive: true },
    );
    wrapper.addEventListener("touchend", (e) => {
        if (startX === null) return;
        const dx = e.changedTouches[0].clientX - startX;
        if (Math.abs(dx) > 50)
            goTo(
                dx < 0
                    ? (current + 1) % slides.length
                    : (current - 1 + slides.length) % slides.length,
            );
        startX = null;
    });

    // Auto play
    setInterval(() => goTo((current + 1) % slides.length), 4000);

    render();
});
