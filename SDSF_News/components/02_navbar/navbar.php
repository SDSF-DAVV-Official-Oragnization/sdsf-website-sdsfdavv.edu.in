<!-- ===== EDITORIAL CATEGORY NAVIGATION & SEARCH ===== -->
<nav class="editorial-navbar" id="newsNavbar">
    <div class="nav-content-row">
        <ul class="nav-links-list">
            <?php include __DIR__ . '/home_item.php'; ?>
            <?php include __DIR__ . '/notices_item.php'; ?>
            <?php include __DIR__ . '/news_dropdown.php'; ?>
            <?php include __DIR__ . '/hackathons_item.php'; ?>
            <?php include __DIR__ . '/campus_item.php'; ?>
            <?php include __DIR__ . '/gallery_item.php'; ?>
            <?php include __DIR__ . '/pace_item.php'; ?>
            <?php include __DIR__ . '/developer_item.php'; ?>
            <?php include __DIR__ . '/print_media_item.php'; ?>
        </ul>

        <div class="nav-search-wrapper">
            <form class="news-search-form" id="newsSearchForm" onsubmit="return false;">
                <input type="text" id="newsSearchInput" placeholder="Search headlines, articles..." autocomplete="off">
                <button type="submit" id="searchSubmitBtn" aria-label="Search articles">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
    </div>
</nav>
