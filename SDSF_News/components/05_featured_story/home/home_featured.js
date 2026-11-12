// Share link handlers for home featured feed
function initHomeFeatured() {
    const homeView = document.getElementById("featured-view-home");
    if (!homeView) return;

    // attach web share api if supported
    const shareLinks = homeView.querySelectorAll(".social-share-quick a[data-share='true']");
    shareLinks.forEach((link) => {
        link.addEventListener("click", function (e) {
            e.preventDefault();
            if (navigator.share) {
                navigator.share({
                    title: "SDSF CHRONICLE - Featured Stories",
                    url: window.location.href,
                }).catch(() => {});
            }
        });
    });
}

document.addEventListener("DOMContentLoaded", initHomeFeatured);

