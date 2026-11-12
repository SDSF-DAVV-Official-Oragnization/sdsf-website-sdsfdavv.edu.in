// Handles category filtering, center featured switcher, and quick search
function initTopicFilter() {
    const pillButtons = document.querySelectorAll(".pill-btn");
    const categoryNavButtons = document.querySelectorAll(".category-filter-btn");

    function applyFilter(targetTopic) {
        if (!targetTopic) return;
        targetTopic = targetTopic.toLowerCase();

        // switch back to news view if notices or gallery was open
        const featuredCol = document.getElementById("featuredCol");
        const noticesCol = document.getElementById("noticesCol");
        const galleryCol = document.getElementById("galleryCol");
        const printMediaCol = document.getElementById("printMediaCol");
        const navItemNotices = document.getElementById("navItemNotices");
        const navItemGallery = document.getElementById("navItemGallery");
        const navItemPrintMedia = document.getElementById("navItemPrintMedia");

        if (noticesCol && noticesCol.style.display !== "none") {
            noticesCol.style.display = "none";
            if (featuredCol) featuredCol.style.display = "flex";
            if (navItemNotices) navItemNotices.classList.remove("active");
        }
        if (galleryCol && galleryCol.style.display !== "none") {
            galleryCol.style.display = "none";
            if (featuredCol) featuredCol.style.display = "flex";
            if (navItemGallery) navItemGallery.classList.remove("active");
        }
        if (printMediaCol && printMediaCol.style.display !== "none") {
            printMediaCol.style.display = "none";
            if (featuredCol) featuredCol.style.display = "flex";
        }
        if (navItemPrintMedia) navItemPrintMedia.classList.remove("active");

        // update active nav item
        const navListItems = document.querySelectorAll(".nav-links-list > li");
        navListItems.forEach((li) => {
            const btn = li.querySelector(".category-filter-btn");
            if (btn && btn.getAttribute("data-category") === targetTopic) {
                li.classList.add("active");
            } else if (targetTopic === "all" && li.id === "navItemHome") {
                li.classList.add("active");
            } else {
                li.classList.remove("active");
            }
        });

        // update active pill button
        pillButtons.forEach((btn) => {
            if (btn.getAttribute("data-topic") === targetTopic) {
                btn.classList.add("active");
            } else {
                btn.classList.remove("active");
            }
        });

        // keep left/right side columns steady unless special view
        const constantArticles = document.querySelectorAll(
            ".col-latest .news-card, .col-latest .feed-item, .col-trending .trending-card"
        );
        constantArticles.forEach((art) => {
            art.style.display = "";
            art.style.opacity = "1";
        });

        // Toggle Center Column Featured Category Views:
        const featuredViews = {
            all: document.getElementById("featured-view-home"),
            home: document.getElementById("featured-view-home"),
            hackathon: document.getElementById("featured-view-hackathon"),
            hackathons: document.getElementById("featured-view-hackathon"),
            campus: document.getElementById("featured-view-campus"),
            pace: document.getElementById("featured-view-pace"),
            visarjan: document.getElementById("featured-view-home"),
        };

        const headingLabels = {
            all: "Featured Story",
            home: "Featured Story",
            hackathon: "Hackathons Feature",
            campus: "Campus Life & Culture",
            pace: "PACE Series Feature",
            visarjan: "Ganesh Visarjan Special",
        };

        const allViews = document.querySelectorAll(".featured-category-view");
        allViews.forEach((view) => {
            view.style.display = "none";
        });

        const activeView = featuredViews[targetTopic] || featuredViews["all"];
        if (activeView) {
            activeView.style.display = "flex";
            activeView.style.opacity = "1";
            
            // Handle article visibility inside activeView
            const articles = activeView.querySelectorAll("article");
            articles.forEach(art => {
                if (targetTopic === "visarjan" && art.id !== "article-visarjan") {
                    art.style.display = "none";
                } else {
                    art.style.display = "";
                }
            });
        }

        const headingEl = document.getElementById("featuredSectionHeading");
        if (headingEl && headingLabels[targetTopic]) {
            headingEl.textContent = headingLabels[targetTopic];
        }

        // update query param in url
        if (window.history && window.history.replaceState) {
            const newUrl = targetTopic === "all" 
                ? window.location.pathname 
                : window.location.pathname + "?category=" + encodeURIComponent(targetTopic);
            window.history.replaceState(null, "", newUrl);
        }
    }

    // global helper to trigger filter from inline onclicks
    window.filterByTopic = function (topic) {
        applyFilter(topic);
        const newsContainer = document.querySelector(".news-main-container");
        if (newsContainer) {
            newsContainer.scrollIntoView({ behavior: "smooth", block: "start" });
        }
    };

    // pill clicks
    pillButtons.forEach((btn) => {
        btn.addEventListener("click", function () {
            const topic = this.getAttribute("data-topic");
            applyFilter(topic);
        });
    });

    // top nav category link clicks
    categoryNavButtons.forEach((btn) => {
        btn.addEventListener("click", function () {
            const cat = this.getAttribute("data-category");
            if (cat) applyFilter(cat);
        });
    });

    // dropdown items
    const subDropdownLinks = document.querySelectorAll(".sub-dropdown a[data-filter]");
    subDropdownLinks.forEach((lnk) => {
        lnk.addEventListener("click", function (e) {
            e.preventDefault();
            const filter = this.getAttribute("data-filter");
            applyFilter(filter);
        });
    });

    // check category from query string on load
    const urlParams = new URLSearchParams(window.location.search);
    const categoryParam = urlParams.get("category");
    if (categoryParam) {
        applyFilter(categoryParam);
    }
}

function initLiveSearch() {
    const searchInput = document.getElementById("newsSearchInput");
    if (!searchInput) return;

    searchInput.addEventListener("input", function () {
        const query = this.value.trim().toLowerCase();

        // If notices or gallery column is active, restore news column so search results are visible
        const featuredCol = document.getElementById("featuredCol");
        const noticesCol = document.getElementById("noticesCol");
        const galleryCol = document.getElementById("galleryCol");
        const printMediaCol = document.getElementById("printMediaCol");
        const navItemNotices = document.getElementById("navItemNotices");
        const navItemGallery = document.getElementById("navItemGallery");
        if (noticesCol && noticesCol.style.display !== "none") {
            noticesCol.style.display = "none";
            if (featuredCol) featuredCol.style.display = "flex";
            if (navItemNotices) navItemNotices.classList.remove("active");
        }
        if (galleryCol && galleryCol.style.display !== "none") {
            galleryCol.style.display = "none";
            if (featuredCol) featuredCol.style.display = "flex";
            if (navItemGallery) navItemGallery.classList.remove("active");
        }
        if (printMediaCol && printMediaCol.style.display !== "none") {
            printMediaCol.style.display = "none";
            if (featuredCol) featuredCol.style.display = "flex";
        }
        const navItemPrintMedia = document.getElementById("navItemPrintMedia");
        if (navItemPrintMedia) navItemPrintMedia.classList.remove("active");

        const articles = document.querySelectorAll(
            ".card-primary-col1, .feed-item, .featured-lead-article, .subgrid-card, .trending-card"
        );

        articles.forEach((art) => {
            const title = (art.querySelector(".card-title, .feed-title, .lead-main-headline, .subgrid-title, .trending-title")?.textContent || "").toLowerCase();
            const snippet = (art.querySelector(".card-snippet, .lead-summary-para, .subgrid-text")?.textContent || "").toLowerCase();
            const category = (art.getAttribute("data-category") || "").toLowerCase();

            if (query === "" || title.includes(query) || snippet.includes(query) || category.includes(query)) {
                art.style.display = "";
                art.style.opacity = "1";
            } else {
                art.style.display = "none";
            }
        });
    });
}
