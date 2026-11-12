<!-- Middle column gallery view -->
<section class="grid-col col-featured col-gallery-middle" id="galleryCol" style="display: none;">
    <div class="col-section-header">
        <h2 class="col-heading"><i class="fas fa-images"></i> SDSF Event Gallery</h2>
        <span class="col-header-line"></span>
    </div>

<?php
// Scan for Ganesh Chaturthi event images
$ganesh_dir = __DIR__ . '/../photoes_news/Ganesh Chaturthi 2026';
$ganesh_images = [];
if (is_dir($ganesh_dir)) {
    $scanned = scandir($ganesh_dir);
    foreach ($scanned as $img_file) {
        if ($img_file === '.' || $img_file === '..') continue;
        $ext = strtolower(pathinfo($img_file, PATHINFO_EXTENSION));
        if (in_array($ext, ['jpg', 'jpeg', 'png', 'webp', 'gif'])) {
            $ganesh_images[] = $img_file;
        }
    }
}
$ganesh_count = count($ganesh_images);

// Pick up Induction 2026 gallery images from the shared photoes folder
$induction_dir = __DIR__ . '/../../photoes/Induction 2026';
$induction_images = [];
if (is_dir($induction_dir)) {
    $scanned = scandir($induction_dir);
    foreach ($scanned as $img_file) {
        if ($img_file === '.' || $img_file === '..' || !is_file($induction_dir . '/' . $img_file)) continue;
        $ext = strtolower(pathinfo($img_file, PATHINFO_EXTENSION));
        if (in_array($ext, ['jpg', 'jpeg', 'png', 'webp', 'gif'])) {
            $induction_images[] = $img_file;
        }
    }
    natsort($induction_images);
    $induction_images = array_values($induction_images);
}
$induction_count = count($induction_images);
$induction_preview_images = array_slice($induction_images, 0, 6);
$induction_preferred = 'IMG-20260918-WA0007.jpg';
if (file_exists($induction_dir . '/' . $induction_preferred)) {
    $induction_cover = $base_path . 'photoes/Induction 2026/' . rawurlencode($induction_preferred);
} elseif ($induction_count) {
    $induction_cover = file_exists($induction_dir . '/optimized/' . $induction_images[0])
        ? $base_path . 'photoes/Induction 2026/optimized/' . rawurlencode($induction_images[0])
        : $base_path . 'photoes/Induction 2026/' . rawurlencode($induction_images[0]);
} else {
    $induction_cover = $base_path . 'photoes/slide_image_event.jpeg';
}
?>

    <!-- Gallery Cards as Boxes -->
    <div class="gallery-boxes-container">
        <!-- BOX: Cyber Security & Internet Ethics Course -->
        <div class="gallery-box-card ganesh-chaturthi-box" id="cyberEthicsGalleryBox">
            <div class="gallery-box-img-wrap-Orange-tech" onclick="openGalleryLightbox('<?php echo $base_path; ?>SDSF_News/photoes_news/cyber_security_ethics_2026.jpg', 'MMTTC (UGC-HRDC), DAVV Indore &bull; Short Term Course in Cyber Security &amp; Internet Ethics');" style="cursor: pointer;" title="Click to view full photo">
                <img src="<?php echo $base_path; ?>SDSF_News/photoes_news/cyber_security_ethics_2026.jpg" alt="Cyber Security and Internet Ethics - MMTTC DAVV">
                <div class="gallery-box-badge badge-festive-album" style="background: #0284c7; color: white;">
                    <i class="fas fa-shield-alt"></i> MMTTC (UGC-HRDC) DAVV
                </div>
            </div>
            <div class="gallery-box-body">
                <div class="gallery-box-meta">
                    <span class="gallery-box-date"><i class="far fa-calendar-alt"></i> Oct 26–31, 2026</span>
                    <span class="gallery-box-tag tag-festive" style="color: #0284c7; border-color: #0284c7; background: #e0f2fe;">Workshop Conducted</span>
                </div>
                <h3 class="gallery-box-title">
                    Short Term Course in Cyber Security &amp; Internet Ethics
                </h3>
                <p class="gallery-box-desc">
                    Educational poster and curriculum framework from the 6-day online Short Term Course organized by Malaviya Mission Teacher Training Centre (Formerly UGC-HRDC), Devi Ahilya Vishwavidyalaya, Indore in association with School of Data Science and Forecasting (SDSF), coordinated by Dr. Govind Maheshwari.
                </p>
                <div class="gallery-box-footer" style="display: flex; gap: 8px; flex-wrap: wrap;">
                    <button type="button" class="gallery-box-action action-festive" style="color: #0284c7; border-color: #0284c7;" onclick="openGalleryLightbox('<?php echo $base_path; ?>SDSF_News/photoes_news/cyber_security_ethics_2026.jpg', 'MMTTC (UGC-HRDC), DAVV Indore &bull; Short Term Course in Cyber Security &amp; Internet Ethics');">
                        <i class="fas fa-expand-alt"></i> <span>View HD Photo</span>
                    </button>
                </div>
            </div>
        </div>


        <!-- BOX 1: Ganesh Chaturthi 2026 - SDSF Ke Raja Agaman & Bhajan Sandhya -->
        <div class="gallery-box-card ganesh-chaturthi-box" id="ganeshGalleryBox">
            <div class="gallery-box-img-wrap-Orange-tech">
                <img src="<?php echo $base_path; ?>SDSF_News/photoes_news/Ganesh Ji 2026.jpg" alt="SDSF Ke Raja - Ganesh Chaturthi 2026">
                <div class="gallery-box-badge badge-festive-album">
                    <i class="fas fa-om"></i> <?php echo $ganesh_count; ?> Event Photos &bull; Agaman
                </div>
            </div>
            <div class="gallery-box-body">
                <div class="gallery-box-meta">
                    <span class="gallery-box-date"><i class="far fa-calendar-alt"></i> Sept 14, 2026</span>
                    <span class="gallery-box-tag tag-festive">Festive Celebration</span>
                </div>
                <h3 class="gallery-box-title">
                    Ganesh Chaturthi 2026: SDSF Ke Raja Agaman &amp; Bhajan Sandhya
                </h3>
                <p class="gallery-box-desc">
                    Welcoming Lord Ganesha with devotion, traditional rituals, vibrant student decorations, and an uplifting Bhajan Sandhya at Takshila Campus. Browse the complete <?php echo $ganesh_count; ?>-photo event press album below.
                </p>
                <div class="gallery-box-footer">
                    <button type="button" class="gallery-box-action action-festive" onclick="toggleGaneshPhotoGrid()">
                        <i class="fas fa-th"></i> <span id="ganeshToggleText">View All <?php echo $ganesh_count; ?> Event Photos</span> <i class="fas fa-chevron-down" id="ganeshToggleArrow"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Dedicated Photo Grid for Ganesh Chaturthi 2026 -->
        <div class="ganesh-photos-grid-wrapper" id="ganeshPhotosGrid" style="display: none;">
            <div class="ganesh-grid-header">
                <h4><i class="fas fa-images"></i> SDSF Ke Raja Press Photos (<?php echo $ganesh_count; ?> Photos)</h4>
                <span class="grid-subtext">Click any photo to view in high resolution</span>
            </div>
            <div class="ganesh-grid-items">
                <?php foreach ($ganesh_images as $idx => $img_name): 
                    $full_img_url = $base_path . 'SDSF_News/photoes_news/Ganesh Chaturthi 2026/' . rawurlencode($img_name);
                    $caption_title = 'SDSF Ke Raja 2026 Celebration - Press Photo #' . ($idx + 1);
                ?>
                <div class="ganesh-grid-item" onclick="openGalleryLightbox('<?php echo htmlspecialchars($full_img_url, ENT_QUOTES); ?>', '<?php echo htmlspecialchars($caption_title, ENT_QUOTES); ?>')">
                    <img src="<?php echo htmlspecialchars($full_img_url, ENT_QUOTES); ?>" alt="SDSF Ke Raja 2026 Photo <?php echo $idx + 1; ?>" loading="lazy">
                    <div class="photo-overlay-hover"><i class="fas fa-search-plus"></i><span>View HD</span></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

<?php
// Scan for Ganesh Visarjan event images
$visarjan_dir = __DIR__ . '/../photoes_news/Ganesh Visarjan 2026';
$visarjan_images = [];
if (is_dir($visarjan_dir)) {
    $scanned = scandir($visarjan_dir);
    foreach ($scanned as $img_file) {
        if ($img_file === '.' || $img_file === '..') continue;
        $ext = strtolower(pathinfo($img_file, PATHINFO_EXTENSION));
        if (in_array($ext, ['jpg', 'jpeg', 'png', 'webp', 'gif'])) {
            $visarjan_images[] = $img_file;
        }
    }
}
$visarjan_count = count($visarjan_images);

// Scan for GDG event images
$gdg_dir = __DIR__ . '/../photoes_news/GDG Team Recruitment 2026';
$gdg_images = [];
if (is_dir($gdg_dir)) {
    $scanned = scandir($gdg_dir);
    foreach ($scanned as $img_file) {
        if ($img_file === '.' || $img_file === '..') continue;
        $ext = strtolower(pathinfo($img_file, PATHINFO_EXTENSION));
        if (in_array($ext, ['jpg', 'jpeg', 'png', 'webp', 'gif'])) {
            $gdg_images[] = $img_file;
        }
    }
}
$gdg_count = count($gdg_images);
?>

        <!-- BOX: GDG Team Recruitment 2026 -->
        <div class="gallery-box-card ganesh-chaturthi-box" id="gdgGalleryBox">
            <div class="gallery-box-img-wrap-Orange-tech">
                <img src="<?php echo $base_path; ?>SDSF_News/photoes_news/GDG Team Recruitment 2026/1.jpeg" alt="GDG SDSF Core Team Recruitment">
                <div class="gallery-box-badge badge-festive-album" style="background: #4285F4; color: white;">
                    <i class="fab fa-google"></i> <?php echo $gdg_count; ?> Event Photos &bull; GDG
                </div>
            </div>
            <div class="gallery-box-body">
                <div class="gallery-box-meta">
                    <span class="gallery-box-date"><i class="far fa-calendar-alt"></i> Oct 9, 2026</span>
                    <span class="gallery-box-tag tag-festive" style="color: #4285F4; border-color: #4285F4; background: #e8f0fe;">GDG SDSF</span>
                </div>
                <h3 class="gallery-box-title">
                    The Next Wave: GDG SDSF Core Team Recruitment
                </h3>
                <p class="gallery-box-desc">
                    Moments from the GDG SDSF community info session and recruitment event at SDSF, DAVV.
                </p>
                <div class="gallery-box-footer">
                    <button type="button" class="gallery-box-action action-festive" onclick="toggleGdgPhotoGrid()">
                        <i class="fas fa-th"></i> <span id="gdgToggleText">View All <?php echo $gdg_count; ?> Event Photos</span> <i class="fas fa-chevron-down" id="gdgToggleArrow"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Dedicated Photo Grid for GDG 2026 -->
        <div class="ganesh-photos-grid-wrapper" id="gdgPhotosGrid" style="display: none;">
            <div class="ganesh-grid-header">
                <h4><i class="fas fa-images"></i> GDG SDSF Recruitment Photos (<?php echo $gdg_count; ?> Photos)</h4>
                <span class="grid-subtext">Click any photo to view in high resolution</span>
            </div>
            <div class="ganesh-grid-items">
                <?php foreach ($gdg_images as $idx => $img_name): 
                    $full_img_url = $base_path . 'SDSF_News/photoes_news/GDG Team Recruitment 2026/' . rawurlencode($img_name);
                    $caption_title = 'GDG SDSF Recruitment - Photo #' . ($idx + 1);
                ?>
                <div class="ganesh-grid-item" onclick="openGalleryLightbox('<?php echo htmlspecialchars($full_img_url, ENT_QUOTES); ?>', '<?php echo htmlspecialchars($caption_title, ENT_QUOTES); ?>')">
                    <img src="<?php echo htmlspecialchars($full_img_url, ENT_QUOTES); ?>" alt="GDG Recruitment Photo <?php echo $idx + 1; ?>" loading="lazy">
                    <div class="photo-overlay-hover"><i class="fas fa-search-plus"></i><span>View HD</span></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <!-- BOX 1.5: Ganesh Visarjan 2026 -->
        <div class="gallery-box-card ganesh-chaturthi-box" id="visarjanGalleryBox">
            <div class="gallery-box-img-wrap-Orange-tech">
                <img src="<?php echo $base_path; ?>SDSF_News/photoes_news/Ganesh Visarjan 2026/visarjan-2026-05.jpeg" alt="Ganesh Visarjan 2026: Farewell to Bappa">
                <div class="gallery-box-badge badge-festive-album">
                    <i class="fas fa-om"></i> <?php echo $visarjan_count; ?> Event Photos &bull; Visarjan
                </div>
            </div>
            <div class="gallery-box-body">
                <div class="gallery-box-meta">
                    <span class="gallery-box-date"><i class="far fa-calendar-alt"></i> Sept 25, 2026</span>
                    <span class="gallery-box-tag tag-festive">Festive Celebration</span>
                </div>
                <h3 class="gallery-box-title">
                    Ganesh Visarjan 2026: Farewell to Bappa
                </h3>
                <p class="gallery-box-desc">
                    Moments from the Ganesh Visarjan at SDSF, DAVV, Indore.
                </p>
                <div class="gallery-box-footer">
                    <button type="button" class="gallery-box-action action-festive" onclick="toggleVisarjanPhotoGrid()">
                        <i class="fas fa-th"></i> <span id="visarjanToggleText">View All <?php echo $visarjan_count; ?> Event Photos</span> <i class="fas fa-chevron-down" id="visarjanToggleArrow"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Dedicated Photo Grid for Ganesh Visarjan 2026 -->
        <div class="ganesh-photos-grid-wrapper" id="visarjanPhotosGrid" style="display: none;">
            <div class="ganesh-grid-header">
                <h4><i class="fas fa-images"></i> Ganesh Visarjan 2026 Photos (<?php echo $visarjan_count; ?> Photos)</h4>
                <span class="grid-subtext">Click any photo to view in high resolution</span>
            </div>
            <div class="ganesh-grid-items">
                <?php foreach ($visarjan_images as $idx => $img_name): 
                    $full_img_url = $base_path . 'SDSF_News/photoes_news/Ganesh Visarjan 2026/' . rawurlencode($img_name);
                    $caption_title = 'Ganesh Visarjan 2026 Celebration - Press Photo #' . ($idx + 1);
                ?>
                <div class="ganesh-grid-item" onclick="openGalleryLightbox('<?php echo htmlspecialchars($full_img_url, ENT_QUOTES); ?>', '<?php echo htmlspecialchars($caption_title, ENT_QUOTES); ?>')">
                    <img src="<?php echo htmlspecialchars($full_img_url, ENT_QUOTES); ?>" alt="Ganesh Visarjan 2026 Photo <?php echo $idx + 1; ?>" loading="lazy">
                    <div class="photo-overlay-hover"><i class="fas fa-search-plus"></i><span>View HD</span></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- BOX 2: SDSF Induction Aagaaz 26 -->
        <a href="<?php echo $base_path; ?>events.php?gallery=induction-2026#event-gallery" class="gallery-box-card induction-aagaaz-box" id="inductionGalleryBox">
            <div class="gallery-box-img-wrap-Orange-tech">
                <img src="<?php echo htmlspecialchars($induction_cover, ENT_QUOTES); ?>" alt="SDSF Induction Aagaaz 26">
                <div class="gallery-box-badge badge-induction-album">
                    <i class="fas fa-images"></i> <?php echo $induction_count; ?> Photos &bull; Official Induction
                </div>
            </div>
            <div class="gallery-box-body">
                <div class="gallery-box-meta">
                    <span class="gallery-box-date"><i class="far fa-calendar-alt"></i> Sept 17, 2026</span>
                    <span class="gallery-box-tag tag-induction">Campus Life</span>
                </div>
                <h3 class="gallery-box-title">SDSF Induction Aagaaz 26</h3>
                <p class="gallery-box-desc">
                    The official welcome for the SDSF 2026 batch brought new students, faculty, and seniors together for a warm and memorable start. Aagaaz 26 set an enthusiastic tone for the academic journey ahead.
                </p>
                <div class="gallery-box-footer">
                    <span class="gallery-box-action action-induction">
                        View all <?php echo $induction_count; ?> photos in Events <i class="fas fa-arrow-right"></i>
                    </span>
                </div>
            </div>
        </a>

        <!-- Quick preview grid for induction photos -->
        <div class="induction-photos-grid-wrapper">
            <div class="ganesh-grid-header">
                <h4><i class="fas fa-images"></i> Aagaaz 26 Highlights</h4>
                <span class="grid-subtext">A preview of up to 6 photos from the official induction</span>
            </div>
            <?php if ($induction_preview_images): ?>
                <div class="ganesh-grid-items">
                    <?php foreach ($induction_preview_images as $idx => $img_name):
                        $thumb_url = file_exists($induction_dir . '/thumbs/' . $img_name)
                            ? $base_path . 'photoes/Induction 2026/thumbs/' . rawurlencode($img_name)
                            : $base_path . 'photoes/Induction 2026/' . rawurlencode($img_name);
                        $image_url = file_exists($induction_dir . '/optimized/' . $img_name)
                            ? $base_path . 'photoes/Induction 2026/optimized/' . rawurlencode($img_name)
                            : $base_path . 'photoes/Induction 2026/' . rawurlencode($img_name);
                        $caption = 'Aagaaz 26 — SDSF Induction 2026 · Photo ' . ($idx + 1);
                    ?>
                        <div class="ganesh-grid-item" onclick="openGalleryLightbox('<?php echo htmlspecialchars($image_url, ENT_QUOTES); ?>', '<?php echo htmlspecialchars($caption, ENT_QUOTES); ?>')" title="View Photo">
                            <img src="<?php echo htmlspecialchars($thumb_url, ENT_QUOTES); ?>" data-full="<?php echo htmlspecialchars($image_url, ENT_QUOTES); ?>" alt="SDSF Induction Aagaaz 26 photo <?php echo $idx + 1; ?>" loading="lazy">
                            <div class="photo-overlay-hover"><i class="fas fa-search-plus"></i><span>View Photo</span></div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <p class="induction-empty-note">Photos from Aagaaz 26 will appear here as soon as they are added to the induction album.</p>
            <?php endif; ?>
            <a class="induction-more-photos-link" href="<?php echo $base_path; ?>events.php#event-gallery">
                View more photos <i class="fas fa-arrow-right"></i>
            </a>
        </div>

        <!-- Orange Data Tech Campus Placement Drive -->
        <a href="<?php echo $base_path; ?>events.php?gallery=orange-tech#event-gallery" class="gallery-box-card featured-box">
            <div class="gallery-box-img-wrap-Orange-tech">
                <img src="<?php echo $base_path; ?>SDSF_News/photoes_news/Orange_Tech_2.0.png" alt="Orange Data Tech Campus Recruitment Drive">
                <div class="gallery-box-badge">
                    <i class="fas fa-camera"></i> 35 Photos &bull; Placements
                </div>
            </div>
            <div class="gallery-box-body">
                <div class="gallery-box-meta">
                    <span class="gallery-box-date"><i class="far fa-calendar-alt"></i> Sept 2, 2026</span>
                    <span class="gallery-box-tag">Campus Hiring</span>
                </div>
                <h3 class="gallery-box-title">
                    Orange Data Tech Campus Recruitment Drive
                </h3>
                <p class="gallery-box-desc">
                    Six SDSF students successfully secured placements as Business Analysts and Associate Software Engineers. Click to view all 35 event pictures in the department gallery.
                </p>
                <div class="gallery-box-footer">
                    <span class="gallery-box-action">
                        View in Department Portal <i class="fas fa-arrow-right"></i>
                    </span>
                </div>
            </div>
        </a>

        <!-- BOX 2: SDSF Placement Brochure 2026-27 -->
        <a href="<?php echo $base_path; ?>SDSF_News/photoes_news/Placement_Brochure_2026-27.pdf" target="_blank" class="gallery-box-card brochure-box">
            <div class="gallery-box-img-wrap-Orange-tech">
                <img src="<?php echo $base_path; ?>SDSF_News/photoes_news/brochure_cover.png" alt="SDSF Placement Brochure 2026-27">
                <div class="gallery-box-badge badge-brochure">
                    <i class="fas fa-file-pdf"></i> Official PDF &bull; 19 Pages
                </div>
            </div>
            <div class="gallery-box-body">
                <div class="gallery-box-meta">
                    <span class="gallery-box-date"><i class="far fa-calendar-alt"></i> Batch 2026–27</span>
                    <span class="gallery-box-tag tag-brochure">Official Publication</span>
                </div>
                <h3 class="gallery-box-title">
                    SDSF Campus Placement Brochure 2026–27
                </h3>
                <p class="gallery-box-desc">
                    Official departmental placement brochure outlining academic programs, batch demographics, industry collaborations, curriculum pillars, and recruiter guidelines.
                </p>
                <div class="gallery-box-footer">
                    <span class="gallery-box-action action-brochure">
                        View / Download Brochure (PDF) <i class="fas fa-external-link-alt"></i>
                    </span>
                </div>
            </div>
        </a>

        <!-- BOX 3: SDSF Campus Events & Induction Gallery -->
        <a href="<?php echo $base_path; ?>events.php#event-gallery" class="gallery-box-card">
            <div class="gallery-box-img-wrap-Orange-tech">
                <img src="<?php echo $base_path; ?>photoes/slide_image_event.jpeg" alt="SDSF Campus Life &amp; Events">
                <div class="gallery-box-badge">
                    <i class="fas fa-camera"></i> Campus Events &bull; Orientation
                </div>
            </div>
            <div class="gallery-box-body">
                <div class="gallery-box-meta">
                    <span class="gallery-box-date"><i class="far fa-calendar-alt"></i> Annual Highlights</span>
                    <span class="gallery-box-tag">Campus Life</span>
                </div>
                <h3 class="gallery-box-title">
                    SDSF Student Induction &amp; Cultural Fests
                </h3>
                <p class="gallery-box-desc">
                    Capturing academic orientations, tech symposiums, leadership talks, and festive celebrations across the Takshila DAVV campus.
                </p>
                <div class="gallery-box-footer">
                    <span class="gallery-box-action">
                        View in Department Portal <i class="fas fa-arrow-right"></i>
                    </span>
                </div>
            </div>
        </a>

    </div>
</section>
