<?php 
$base_path = '../'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#162b57">
    <title>SDSF CHRONICLE | School of Data Science and Forecasting News</title>
    
    <!-- Global and Newspaper Stylesheets -->
    <link rel="stylesheet" href="<?php echo $base_path; ?>style.css">
    <link rel="stylesheet" href="news.css">
    <link rel="stylesheet" href="gallery/gallery.css">
    <link rel="stylesheet" href="components/05_featured_story/featured_story.css">
    <link rel="stylesheet" href="components/05_featured_story/home/home_featured.css">
    <link rel="stylesheet" href="components/05_featured_story/hackathons/hackathons_featured.css">
    <link rel="stylesheet" href="components/05_featured_story/campus/campus_featured.css">
    <link rel="stylesheet" href="components/05_featured_story/pace/pace_featured.css">
    
    <!-- Google Fonts for Editorial / Newspaper Typography -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700;800;900&family=Playfair+Display:ital,wght@0,600;0,700;0,800;0,900;1,400;1,700&family=Lora:ital,wght@0,400;0,500;0,600;1,400&family=Poppins:wght@300;400;500;600;700&family=Oswald:wght@500;600;700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body id="top" class="news-portal-body">

    <div class="newspaper-wrapper">
        
        <!-- ===== 1. HEADER MODULE (Utility Bar & Masthead) ===== -->
        <?php include __DIR__ . '/components/01_header/header.php'; ?>

        <!-- ===== 2. NAVBAR MODULE (Category Links & Search Bar) ===== -->
        <?php include __DIR__ . '/components/02_navbar/navbar.php'; ?>

        <!-- ===== 3. BREAKING TICKER MODULE ===== -->
        <?php include __DIR__ . '/components/03_ticker/ticker.php'; ?>

        <!-- ===== MAIN EDITORIAL SECTION (3-COLUMN LAYOUT) ===== -->
        <main class="news-main-container">

            <!-- Category Filter Pills (Interactive) -->
            <div class="filter-pills-row">
                <span class="filter-pills-label"><i class="fas fa-sliders-h"></i> Topics:</span>
                <button class="pill-btn active" data-topic="all">All Stories</button>
                <button class="pill-btn" data-topic="hackathon">Hackathons &amp; Tech</button>
                <button class="pill-btn" data-topic="campus">Campus &amp; Culture</button>
                <button class="pill-btn" data-topic="pace">PACE Series</button>
                <button class="pill-btn pill-btn-aagaaz" id="pillBtnAagaaz26" data-aagaaz="true" type="button" onclick="if(window.openNewsGalleryView){ window.openNewsGalleryView('inductionGalleryBox'); } else { window.location.href='news.php?view=gallery#inductionGalleryBox'; } return false;">🎓 AAgaaz 26</button>
                <button class="pill-btn pill-btn-visarjan" data-topic="visarjan" type="button" onclick="if(window.filterByTopic){ filterByTopic('visarjan'); } return false;">🌺 Ganesh Visarjan</button>
            </div>

            <div class="newspaper-grid">
                
                <!-- COLUMN 1: LATEST NEWS (Left Column) -->
                <?php include __DIR__ . '/components/04_latest_news/latest_news.php'; ?>

                <!-- COLUMN 2: FEATURED MAIN STORY (Center Column) -->
                <?php include __DIR__ . '/components/05_featured_story/featured_story.php'; ?>

                <!-- COLUMN 2 (ALT): NOTICES VIEW (Toggled by Navbar) -->
                <?php include __DIR__ . '/notices/notices_view.php'; ?>

                <!-- COLUMN 2 (ALT 2): GALLERY VIEW (Toggled by Navbar) -->
                <?php include __DIR__ . '/gallery/gallery_view.php'; ?>

                <!-- COLUMN 2 (ALT 3): PLACEMENT PRINT MEDIA VIEW (Toggled by Navbar) -->
                <?php include __DIR__ . '/print_media/print_media_view.php'; ?>

                <!-- COLUMN 3: TRENDING STORIES (Right Column) -->
                <?php include __DIR__ . '/components/06_trending_stories/trending_stories.php'; ?>

            </div>

        </main>

        <!-- ===== EDITORIAL FOOTNOTE / PRESS TICKER ===== -->
        <footer class="newspaper-footer-bar">
            <div class="newspaper-footer-inner">
                <div class="press-imprint">
                    <strong>SDSF CHRONICLE</strong> &bull; Published by the School of Data Science &amp; Forecasting, Takshila Campus, DAVV, Khandwa Road, Indore (M.P.) – 452001.
                </div>
                <div class="press-links">
                    <a href="news.php">Editorial Board</a> &bull; 
                    <a href="<?php echo $base_path; ?>about.php">About SDSF</a> &bull; 
                    <a href="<?php echo $base_path; ?>events.php">Events Desk</a> &bull; 
                    <a href="<?php echo $base_path; ?>career_nirman/career.php">Placement Bureau</a>
                </div>
            </div>
        </footer>

    </div>

    <!-- ===== DEVELOPER PROFILE MODAL (Option 3) ===== -->
    <?php include __DIR__ . '/components/08_developer_modal/developer_modal.php'; ?>

    <!-- ===== GLOBAL GALLERY LIGHTBOX MODAL POPUP ===== -->
    <div id="galleryLightboxModal" class="gallery-lightbox-backdrop" style="display:none;" onclick="closeGalleryLightbox(event)">
        <div class="gallery-lightbox-container" onclick="event.stopPropagation()">
            <button class="gallery-lightbox-close" onclick="closeGalleryLightbox()" aria-label="Close photo preview">
                <i class="fas fa-times"></i>
            </button>
            <img id="galleryLightboxImg" src="" alt="Enlarged Press Photo" class="gallery-lightbox-img">
            <div id="galleryLightboxCaption" class="gallery-lightbox-caption"></div>
        </div>
    </div>

    <!-- Global Website Footer -->
    <?php include($base_path . "footer.php"); ?>

    <!-- Modular Component Scripts -->
    <script src="components/01_header/header.js"></script>
    <script src="components/02_navbar/navbar.js"></script>
    <script src="notices/notices.js"></script>
    <script src="gallery/gallery.js"></script>
    <script src="print_media/print_media.js"></script>
    <script src="components/05_featured_story/home/home_featured.js"></script>
    <script src="components/05_featured_story/hackathons/hackathons_featured.js"></script>
    <script src="components/05_featured_story/campus/campus_featured.js"></script>
    <script src="components/05_featured_story/pace/pace_featured.js"></script>
    <script src="components/08_developer_modal/developer_modal.js"></script>
    <script src="news.js"></script>
</body>
</html>
