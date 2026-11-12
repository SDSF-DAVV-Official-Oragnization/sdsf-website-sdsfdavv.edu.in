// Gallery toggle controller for center column view
function initGalleryToggle() {
    const navGalleryBtn = document.getElementById("navGalleryBtn");
    const navHomeBtn = document.getElementById("navHomeBtn");
    const navItemGallery = document.getElementById("navItemGallery");
    const navItemHome = document.getElementById("navItemHome");
    const featuredCol = document.getElementById("featuredCol");
    const noticesCol = document.getElementById("noticesCol");
    const galleryCol = document.getElementById("galleryCol");
    const printMediaCol = document.getElementById("printMediaCol");

    function openGalleryView(targetId) {
        const navListItems = document.querySelectorAll(".nav-links-list > li");
        navListItems.forEach((li) => li.classList.remove("active"));
        if (navItemGallery) navItemGallery.classList.add("active");

        if (featuredCol) featuredCol.style.display = "none";
        if (noticesCol) noticesCol.style.display = "none";
        if (printMediaCol) printMediaCol.style.display = "none";
        if (galleryCol) galleryCol.style.display = "flex";

        // Update active pills
        document.querySelectorAll(".pill-btn").forEach(btn => btn.classList.remove("active"));
        if (targetId === "inductionGalleryBox") {
            const aagaazBtn = document.getElementById("pillBtnAagaaz26");
            if (aagaazBtn) aagaazBtn.classList.add("active");
        }

        if (targetId) {
            const targetEl = document.getElementById(targetId);
            if (targetEl) {
                if (targetId === 'gdgGalleryBox') {
                    const gdgGrid = document.getElementById('gdgPhotosGrid');
                    if (gdgGrid) {
                        gdgGrid.style.display = "block";
                        const toggleText = document.getElementById("gdgToggleText");
                        const toggleArrow = document.getElementById("gdgToggleArrow");
                        if (toggleText) toggleText.innerText = "Hide Event Photos";
                        if (toggleArrow) {
                            toggleArrow.classList.remove("fa-chevron-down");
                            toggleArrow.classList.add("fa-chevron-up");
                        }
                    }
                    const ganeshGrid = document.getElementById('ganeshPhotosGrid');
                    if (ganeshGrid) {
                        ganeshGrid.style.display = "none";
                        const toggleTextG = document.getElementById("ganeshToggleText");
                        const toggleArrowG = document.getElementById("ganeshToggleArrow");
                        if (toggleTextG) toggleTextG.innerText = "View All 6 Event Photos"; // generic fallback
                        if (toggleArrowG) {
                            toggleArrowG.classList.remove("fa-chevron-up");
                            toggleArrowG.classList.add("fa-chevron-down");
                        }
                    }
                }
                setTimeout(function () {
                    const yOffset = -90;
                    const y = targetEl.getBoundingClientRect().top + window.pageYOffset + yOffset;
                    window.scrollTo({ top: y, behavior: "smooth" });
                }, 100);
                return;
            }
        }

        const newsContainer = document.querySelector(".news-main-container");
        if (newsContainer) {
            newsContainer.scrollIntoView({ behavior: "smooth", block: "start" });
        }
    }

    function closeGalleryView() {
        if (galleryCol && galleryCol.style.display !== "none") {
            galleryCol.style.display = "none";
            if (featuredCol) featuredCol.style.display = "flex";
            if (navItemGallery) navItemGallery.classList.remove("active");
            if (navItemHome) navItemHome.classList.add("active");
        }
    }

    if (navGalleryBtn) {
        navGalleryBtn.addEventListener("click", function (e) {
            e.preventDefault();
            openGalleryView();
        });
    }

    if (navHomeBtn) {
        navHomeBtn.addEventListener("click", function (e) {
            if (galleryCol && galleryCol.style.display !== "none") {
                e.preventDefault();
                closeGalleryView();
            }
        });
    }

    // Auto-open Gallery view if URL query contains ?view=gallery or hash is #gallery
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get("view") === "gallery" || window.location.hash === "#gallery" || window.location.hash === "#inductionGalleryBox") {
        const targetId = window.location.hash ? window.location.hash.slice(1) : null;
        openGalleryView(targetId);
    }

    // expose globally
    window.openNewsGalleryView = openGalleryView;
    window.closeNewsGalleryView = closeGalleryView;
}

// toggle ganesh chaturthi photo grid
function toggleGaneshPhotoGrid() {
    const grid = document.getElementById("ganeshPhotosGrid");
    const toggleText = document.getElementById("ganeshToggleText");
    const toggleArrow = document.getElementById("ganeshToggleArrow");
    
    if (!grid) return;
    
    if (grid.style.display === "none") {
        grid.style.display = "block";
        if (toggleText) toggleText.innerText = "Hide Event Photos";
        if (toggleArrow) {
            toggleArrow.classList.remove("fa-chevron-down");
            toggleArrow.classList.add("fa-chevron-up");
        }
        grid.scrollIntoView({ behavior: "smooth", block: "nearest" });
    } else {
        grid.style.display = "none";
        if (toggleText) toggleText.innerText = "View All 6 Event Photos";
        if (toggleArrow) {
            toggleArrow.classList.remove("fa-chevron-up");
            toggleArrow.classList.add("fa-chevron-down");
        }
    }
}

// full photo modal viewer
function openGalleryLightbox(imgSrc, captionText) {
    const backdrop = document.getElementById("galleryLightboxModal");
    const imgElem = document.getElementById("galleryLightboxImg");
    const captionElem = document.getElementById("galleryLightboxCaption");
    
    if (!backdrop || !imgElem) return;
    
    imgElem.src = imgSrc;
    if (captionElem) {
        captionElem.innerHTML = `<i class="fas fa-camera"></i> ${captionText || "SDSF Ke Raja 2026 Celebration"}`;
    }
    
    backdrop.style.display = "flex";
    document.body.style.overflow = "hidden";
}

function closeGalleryLightbox(e) {
    if (e && e.target && e.target.classList.contains("gallery-lightbox-container")) {
        return; // Don't close if clicked inside container
    }
    const backdrop = document.getElementById("galleryLightboxModal");
    if (backdrop) {
        backdrop.style.display = "none";
        document.body.style.overflow = "auto";
    }
}

// Global escape key handler for gallery lightbox
document.addEventListener("keydown", function(e) {
    if (e.key === "Escape") {
        closeGalleryLightbox();
    }
});

// toggle ganesh visarjan photo grid
function toggleVisarjanPhotoGrid() {
    const grid = document.getElementById("visarjanPhotosGrid");
    const toggleText = document.getElementById("visarjanToggleText");
    const toggleArrow = document.getElementById("visarjanToggleArrow");
    
    if (!grid) return;
    
    if (grid.style.display === "none") {
        grid.style.display = "block";
        if (toggleText) toggleText.innerText = "Hide Event Photos";
        if (toggleArrow) {
            toggleArrow.classList.remove("fa-chevron-down");
            toggleArrow.classList.add("fa-chevron-up");
        }
        grid.scrollIntoView({ behavior: "smooth", block: "nearest" });
    } else {
        grid.style.display = "none";
        if (toggleText) toggleText.innerText = "View All 6 Event Photos";
        if (toggleArrow) {
            toggleArrow.classList.remove("fa-chevron-up");
            toggleArrow.classList.add("fa-chevron-down");
        }
    }
}

window.toggleGaneshPhotoGrid = toggleGaneshPhotoGrid;
window.toggleVisarjanPhotoGrid = toggleVisarjanPhotoGrid;
window.toggleGdgPhotoGrid = function() {
    const grid = document.getElementById("gdgPhotosGrid");
    const toggleText = document.getElementById("gdgToggleText");
    const toggleArrow = document.getElementById("gdgToggleArrow");
    
    if (!grid) return;
    
    if (grid.style.display === "none") {
        grid.style.display = "block";
        if (toggleText) toggleText.innerText = "Hide Event Photos";
        if (toggleArrow) {
            toggleArrow.classList.remove("fa-chevron-down");
            toggleArrow.classList.add("fa-chevron-up");
        }
        grid.scrollIntoView({ behavior: "smooth", block: "nearest" });
    } else {
        grid.style.display = "none";
        // To be accurate, we'd need the exact count, but "View All Event Photos" is generic enough
        if (toggleText) toggleText.innerText = "View All Event Photos";
        if (toggleArrow) {
            toggleArrow.classList.remove("fa-chevron-up");
            toggleArrow.classList.add("fa-chevron-down");
        }
    }
};
window.openGalleryLightbox = openGalleryLightbox;
window.closeGalleryLightbox = closeGalleryLightbox;

document.addEventListener("DOMContentLoaded", initGalleryToggle);
