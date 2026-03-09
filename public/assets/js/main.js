// *** iframe ******

function openMap() {
    document.body.classList.add("map-open");
    mapFrame.src =
        "https://pelayanan.jakarta.go.id/kemudahan-berusaha/invest.html";
    mapWrapper.style.display = "block";
    requestAnimationFrame(() => {
        mapWrapper.classList.add("active");
    });
}

function closeMap() {
    mapWrapper.classList.remove("active");
    setTimeout(() => {
        mapWrapper.style.display = "none";
        mapFrame.src = "";
        document.body.classList.remove("map-open");
    }, 300);
}

document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && mapWrapper.classList.contains("active")) {
        closeMap();
    }
});
//**** */ end iframe******

(function () {
    "use strict";

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

    const mobileNavToggleBtn = document.querySelector(".mobile-nav-toggle");

    function mobileNavToogle() {
        document.querySelector("body").classList.toggle("mobile-nav-active");
        mobileNavToggleBtn.classList.toggle("bi-list");
        mobileNavToggleBtn.classList.toggle("bi-x");
    }
    mobileNavToggleBtn.addEventListener("click", mobileNavToogle);

    document.querySelectorAll("#navmenu a").forEach((navmenu) => {
        navmenu.addEventListener("click", () => {
            if (document.querySelector(".mobile-nav-active")) {
                mobileNavToogle();
            }
        });
    });

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
        window.scrollTo({ top: 0, behavior: "smooth" });
    });

    window.addEventListener("load", toggleScrollTop);
    document.addEventListener("scroll", toggleScrollTop);

    function aosInit() {
        AOS.init({
            duration: 600,
            easing: "ease-in-out",
            once: true,
            mirror: false,
        });
    }
    window.addEventListener("load", aosInit);

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

    const glightbox = GLightbox({ selector: ".glightbox" });

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
                            if (typeof aosInit === "function") aosInit();
                        },
                        false,
                    );
                });
        });

    new PureCounter();

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
 * Slider Card
 */
document.addEventListener("DOMContentLoaded", function () {
    const slides = [
        {
            desc: "Sistem pengolahan air limbah modern untuk menjaga kebersihan lingkungan dan ekosistem kota.Sistem pengolahan air limbah modern untuk menjaga kebersihan lingkungan dan ekosistem kota.Sistem pengolahan air limbah modern untuk menjaga kebersihan lingkungan dan ekosistem kota.Sistem pengolahan air limbah modern untuk menjaga kebersihan lingkungan dan ekosistem kota.",
            img: "https://images.unsplash.com/photo-1581244277943-fe4a9c777189?w=600&q=80",
        },
        {
            desc: "Sistem pengolahan air limbah modern untuk menjaga kebersihan lingkungan dan ekosistem kota.Sistem pengolahan air limbah modern untuk menjaga kebersihan lingkungan dan ekosistem kotaSistem pengolahan air limbah modern untuk menjaga kebersihan lingkungan dan ekosistem kota.",
            img: "https://images.unsplash.com/photo-1465447142348-e9952c393450?w=600&q=80",
        },
        {
            desc: "Infrastruktur transportasi terintegrasi yang menghubungkan seluruh wilayah Jakarta secara efisien.",
            img: "https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?w=600&q=80",
        },
        {
            desc: "Investasi energi terbarukan untuk mendukung ketahanan energi dan mengurangi emisi karbon.",
            img: "https://images.unsplash.com/photo-1473341304170-971dccb5ac1e?w=600&q=80",
        },
        {
            desc: "Pembangunan hunian terjangkau dan berkualitas bagi seluruh lapisan masyarakat Jakarta.",
            img: "https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=600&q=80",
        },
    ];

    const wrapper = document.getElementById("sliderWrapper");
    const dotsEl = document.getElementById("sliderDots");
    if (!wrapper || !dotsEl) return;

    let current = 0;

    // Build dots
    slides.forEach((_, i) => {
        const d = document.createElement("button");
        d.className = "dot" + (i === 0 ? " active" : "");
        d.addEventListener("click", () => goTo(i));
        dotsEl.appendChild(d);
    });

    // ✅ Fungsi set peek — dipanggil setelah card masuk DOM
    function setPeek(card) {
        const label = card.querySelector(".card-label");
        const p = card.querySelector("p");

        requestAnimationFrame(() => {
            const peekHeight = 40; // tinggi teks yang ingin terlihat saat peek

            label.style.transition = "none";
            label.style.transform = `translateY(calc(100% - ${peekHeight}px))`;
            p.style.opacity = "0";

            requestAnimationFrame(() => {
                label.style.transition = "transform 0.4s ease";
                p.style.transition = "opacity 0.3s ease";
            });

            card.addEventListener("mouseenter", () => {
                label.style.transform = "translateY(0)";
                p.style.opacity = "1";
            });

            card.addEventListener("mouseleave", () => {
                label.style.transform = `translateY(calc(100% - ${peekHeight}px))`;
                p.style.opacity = "0";
            });
        });
    }

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
                <img src="${slides[idx].img}" alt="slider image" loading="lazy">
                <div class="card-label">

                    <p>${slides[idx].desc}</p>
                </div>
            `;

            wrapper.appendChild(card);

            // ✅ Hanya card aktif (tengah) yang punya hover peek
            if (pos === 1) {
                setPeek(card);
            } else {
                // Side card: sembunyikan label total
                const label = card.querySelector(".card-label");
                label.style.transform = "translateY(100%)";

                // Klik untuk pindah slide
                if (pos === 0)
                    card.addEventListener("click", () =>
                        goTo((current - 1 + slides.length) % slides.length),
                    );
                if (pos === 2)
                    card.addEventListener("click", () =>
                        goTo((current + 1) % slides.length),
                    );
            }
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
        {
            passive: true,
        },
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

    const items = document.querySelectorAll(".menu-item");
    const slider = document.getElementById("slider");

    items.forEach((item) => {
        item.addEventListener("click", function () {
            const rect = this.getBoundingClientRect();
            const parentRect = this.parentElement.getBoundingClientRect();

            slider.style.width = rect.width + "px";
            slider.style.left = rect.left - parentRect.left + "px";
        });
    });

    window.onload = () => {
        items[0].click();
    };

    // Auto play
    setInterval(() => goTo((current + 1) % slides.length), 4000);

    render();
});
