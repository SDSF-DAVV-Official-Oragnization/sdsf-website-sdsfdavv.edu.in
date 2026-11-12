// Events page interactions & photo lightbox
document.addEventListener("DOMContentLoaded", function () {
    // reveal animations on scroll
    const reveals = document.querySelectorAll(".reveal");
    if ("IntersectionObserver" in window) {
        const revealObserver = new IntersectionObserver(
            (entries, observer) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("active");
                        observer.unobserve(entry.target);
                    }
                });
            },
            { threshold: 0.12, rootMargin: "0px 0px -40px 0px" }
        );
        reveals.forEach((el) => revealObserver.observe(el));
    } else {
        reveals.forEach((el) => el.classList.add("active"));
    }

    // lightbox modal setup
    const modal = document.getElementById("photoLightboxModal");
    if (!modal) return;

    const backdrop = document.getElementById("lightboxBackdrop");
    const closeBtn = document.getElementById("lightboxCloseBtn");
    const prevBtn = document.getElementById("lightboxPrevBtn");
    const nextBtn = document.getElementById("lightboxNextBtn");
    const mainImg = document.getElementById("lightboxMainImg");
    const counter = document.getElementById("lightboxCounter");
    const spinner = document.getElementById("lightboxSpinner");
    const thumbsTrack = document.getElementById("lightboxThumbsTrack");
    const fullscreenBtn = document.getElementById("lightboxFullscreenBtn");

    const galleries = window.EVENT_GALLERIES && typeof window.EVENT_GALLERIES === "object"
        ? window.EVENT_GALLERIES
        : {};
    let photos = [];
    let currentIndex = 0;
    let isOpen = false;

    // Build thumbnail track
    function buildThumbnails() {
        if (!thumbsTrack) return;
        thumbsTrack.innerHTML = "";
        photos.forEach((item, idx) => {
            const thumbBtn = document.createElement("button");
            thumbBtn.type = "button";
            thumbBtn.className = "lightbox-thumb-btn" + (idx === currentIndex ? " active" : "");
            thumbBtn.setAttribute("aria-label", `View photo ${idx + 1}`);
            thumbBtn.dataset.index = idx;

            const thumbImg = document.createElement("img");
            const thumbSrc = (typeof item === "object" && item && item.thumb) ? item.thumb : item;
            thumbImg.src = thumbSrc;
            thumbImg.alt = `Thumbnail ${idx + 1}`;
            thumbImg.loading = "lazy";

            thumbBtn.appendChild(thumbImg);
            thumbBtn.addEventListener("click", () => showPhoto(idx));
            thumbsTrack.appendChild(thumbBtn);
        });
    }

    function updateActiveThumbnail() {
        if (!thumbsTrack) return;
        const thumbBtns = thumbsTrack.querySelectorAll(".lightbox-thumb-btn");
        thumbBtns.forEach((btn, idx) => {
            if (idx === currentIndex) {
                btn.classList.add("active");
                btn.scrollIntoView({ behavior: "smooth", inline: "center", block: "nearest" });
            } else {
                btn.classList.remove("active");
            }
        });
    }

    function preloadAdjacent() {
        if (!photos.length) return;
        const nextIdx = (currentIndex + 1) % photos.length;
        const prevIdx = (currentIndex - 1 + photos.length) % photos.length;
        const nextItem = photos[nextIdx];
        const prevItem = photos[prevIdx];
        const nextSrc = (typeof nextItem === "object" && nextItem && nextItem.full) ? nextItem.full : nextItem;
        const prevSrc = (typeof prevItem === "object" && prevItem && prevItem.full) ? prevItem.full : prevItem;
        const imgNext = new Image();
        imgNext.src = nextSrc;
        const imgPrev = new Image();
        imgPrev.src = prevSrc;
    }

    function showPhoto(index) {
        if (!photos.length) return;
        if (index < 0) index = photos.length - 1;
        if (index >= photos.length) index = 0;
        currentIndex = index;

        if (counter) {
            counter.textContent = `${currentIndex + 1} / ${photos.length}`;
        }

        const currentItem = photos[currentIndex];
        const currentSrc = (typeof currentItem === "object" && currentItem && currentItem.full) ? currentItem.full : currentItem;

        if (spinner) spinner.style.display = "block";
        if (mainImg) {
            mainImg.style.opacity = "0.2";
            mainImg.style.transform = "scale(0.98)";

            const tempImg = new Image();
            tempImg.src = currentSrc;
            tempImg.onload = function () {
                mainImg.src = currentSrc;
                mainImg.style.opacity = "1";
                mainImg.style.transform = "scale(1)";
                if (spinner) spinner.style.display = "none";
            };
            tempImg.onerror = function () {
                if (spinner) spinner.style.display = "none";
                mainImg.style.opacity = "1";
            };
        }

        updateActiveThumbnail();
        preloadAdjacent();
    }

    function openGallery(galleryId, startIndex = 0) {
        const gallery = galleries[galleryId];
        if (!gallery || !Array.isArray(gallery.photos) || !gallery.photos.length) return;
        photos = gallery.photos;
        if (!photos.length) return;
        const title = document.getElementById("lightboxEventTitle");
        if (title) title.textContent = gallery.title || "Event Photo Gallery";
        isOpen = true;
        modal.classList.add("is-open");
        modal.setAttribute("aria-hidden", "false");
        document.body.style.overflow = "hidden";
        buildThumbnails();
        showPhoto(startIndex);
    }

    function closeGallery() {
        isOpen = false;
        modal.classList.remove("is-open");
        modal.setAttribute("aria-hidden", "true");
        document.body.style.overflow = "";
        if (document.fullscreenElement) {
            document.exitFullscreen().catch(() => {});
        }
    }

    function nextPhoto() {
        showPhoto(currentIndex + 1);
    }

    function prevPhoto() {
        showPhoto(currentIndex - 1);
    }

    // Attach Event Listeners
    if (closeBtn) closeBtn.addEventListener("click", closeGallery);
    if (backdrop) backdrop.addEventListener("click", closeGallery);
    if (prevBtn) prevBtn.addEventListener("click", prevPhoto);
    if (nextBtn) nextBtn.addEventListener("click", nextPhoto);

    // Fullscreen toggle
    if (fullscreenBtn) {
        fullscreenBtn.addEventListener("click", function () {
            if (!document.fullscreenElement) {
                modal.requestFullscreen().catch(() => {});
            } else {
                document.exitFullscreen().catch(() => {});
            }
        });
    }

    // Keyboard support
    document.addEventListener("keydown", function (e) {
        if (!isOpen) return;
        if (e.key === "Escape") {
            closeGallery();
        } else if (e.key === "ArrowRight") {
            nextPhoto();
        } else if (e.key === "ArrowLeft") {
            prevPhoto();
        }
    });

    // Touch swipe support
    let touchStartX = 0;
    let touchEndX = 0;
    const stage = document.getElementById("lightboxStage");
    if (stage) {
        stage.addEventListener(
            "touchstart",
            function (e) {
                touchStartX = e.changedTouches[0].screenX;
            },
            { passive: true }
        );

        stage.addEventListener(
            "touchend",
            function (e) {
                touchEndX = e.changedTouches[0].screenX;
                handleGesture();
            },
            { passive: true }
        );
    }

    function handleGesture() {
        const threshold = 40;
        if (touchEndX < touchStartX - threshold) {
            nextPhoto(); // swiped left
        }
        if (touchEndX > touchStartX + threshold) {
            prevPhoto(); // swiped right
        }
    }

    // gallery click triggers
    const openBtns = document.querySelectorAll("[data-open-gallery]");
    openBtns.forEach((btn) => {
        btn.addEventListener("click", function (e) {
            e.preventDefault();
            openGallery(btn.dataset.openGallery, 0);
        });
    });

    // auto open gallery if passed in URL query or hash
    const urlParams = new URLSearchParams(window.location.search);
    const requestedGallery = urlParams.get("gallery");
    if (galleries[requestedGallery] || window.location.hash === "#event-gallery-open") {
        setTimeout(() => {
            const gallerySection = document.getElementById("event-gallery");
            if (gallerySection) {
                gallerySection.scrollIntoView({ behavior: "smooth" });
            }
            openGallery(galleries[requestedGallery] ? requestedGallery : "orange-tech", 0);
        }, 300);
    }
});
