function initPrintMediaToggle() {
    const navPrintMediaBtn = document.getElementById("navPrintMediaBtn");
    const navItemPrintMedia = document.getElementById("navItemPrintMedia");
    const featuredCol = document.getElementById("featuredCol");
    const noticesCol = document.getElementById("noticesCol");
    const galleryCol = document.getElementById("galleryCol");
    const printMediaCol = document.getElementById("printMediaCol");

    function openPrintMediaView() {
        document.querySelectorAll(".nav-links-list > li").forEach((item) => item.classList.remove("active"));
        if (navItemPrintMedia) navItemPrintMedia.classList.add("active");
        if (featuredCol) featuredCol.style.display = "none";
        if (noticesCol) noticesCol.style.display = "none";
        if (galleryCol) galleryCol.style.display = "none";
        if (printMediaCol) printMediaCol.style.display = "flex";
        document.querySelectorAll(".pill-btn").forEach((button) => button.classList.remove("active"));
    }

    if (navPrintMediaBtn) {
        navPrintMediaBtn.addEventListener("click", function (event) {
            event.preventDefault();
            openPrintMediaView();
        });
    }

    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get("view") === "print-media") {
        openPrintMediaView();
    }
}

document.addEventListener("DOMContentLoaded", initPrintMediaToggle);
