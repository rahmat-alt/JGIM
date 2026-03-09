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
