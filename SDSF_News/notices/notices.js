// Toggles between center featured stories and notices
function initNoticesToggle() {
    const navNoticesBtn = document.getElementById("navNoticesBtn");
    const navHomeBtn = document.getElementById("navHomeBtn");
    const navItemNotices = document.getElementById("navItemNotices");
    const navItemHome = document.getElementById("navItemHome");
    const featuredCol = document.getElementById("featuredCol");
    const noticesCol = document.getElementById("noticesCol");
    const galleryCol = document.getElementById("galleryCol");
    const printMediaCol = document.getElementById("printMediaCol");

    if (navNoticesBtn) {
        navNoticesBtn.addEventListener("click", function (e) {
            e.preventDefault();
            const navListItems = document.querySelectorAll(".nav-links-list > li");
            navListItems.forEach((li) => li.classList.remove("active"));
            if (navItemNotices) navItemNotices.classList.add("active");

            if (featuredCol) featuredCol.style.display = "none";
            if (galleryCol) galleryCol.style.display = "none";
            if (printMediaCol) printMediaCol.style.display = "none";
            if (noticesCol) {
                noticesCol.style.display = "flex";
            }
        });
    }

    if (navHomeBtn) {
        navHomeBtn.addEventListener("click", function (e) {
            if (noticesCol && noticesCol.style.display !== "none") {
                e.preventDefault();
                const navListItems = document.querySelectorAll(".nav-links-list > li");
                navListItems.forEach((li) => li.classList.remove("active"));
                if (navItemHome) navItemHome.classList.add("active");

                if (noticesCol) noticesCol.style.display = "none";
                if (featuredCol) featuredCol.style.display = "flex";
            }
        });
    }

    // Auto-open Notices section if navigated via ?view=notices or #notices
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get("view") === "notices" || window.location.hash === "#notices") {
        const navListItems = document.querySelectorAll(".nav-links-list > li");
        navListItems.forEach((li) => li.classList.remove("active"));
        if (navItemNotices) navItemNotices.classList.add("active");
        if (featuredCol) featuredCol.style.display = "none";
        if (noticesCol) noticesCol.style.display = "flex";
    }
}
