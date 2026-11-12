<!-- ==============================================
     FEATURED VIEW: CAMPUS LIFE & CULTURE
     ============================================== -->
<div class="featured-category-view" id="featured-view-campus" style="display: none;">

<?php
$visarjan_count_campus = 0;
$visarjan_chk_campus = __DIR__ . '/../../../photoes_news/Ganesh Visarjan 2026';
if (is_dir($visarjan_chk_campus)) {
    $fls = scandir($visarjan_chk_campus);
    foreach ($fls as $fl) {
        if ($fl === '.' || $fl === '..') continue;
        $ext = strtolower(pathinfo($fl, PATHINFO_EXTENSION));
        if (in_array($ext, ['jpg', 'jpeg', 'png', 'webp', 'gif'])) {
            $visarjan_count_campus++;
        }
    }
}
?>
    <!-- Ganesh Visarjan 2026 Special Campus Celebration -->
    <article class="featured-lead-article-ganesh" data-category="campus" style="margin-bottom: 24px;">
        <div class="lead-media-wrapper-ganesh">
            <a href="news.php?view=gallery" onclick="if(window.openNewsGalleryView){ window.openNewsGalleryView('visarjanGalleryBox'); return false; }">
                <img src="<?php echo $base_path; ?>SDSF_News/photoes_news/Ganesh Visarjan 2026/visarjan-2026-05.jpeg" alt="Ganesh Visarjan 2026: SDSF Bids Bappa a Heartfelt Farewell" class="lead-main-img" style="object-position: 50% 60% !important;">
            </a>
            <a href="<?php echo $base_path; ?>SDSF_News/photoes_news/Ganesh Visarjan 2026/visarjan-2026-05.jpeg" target="_blank" rel="noopener noreferrer" class="corner-hd-badge" title="Open full high-resolution image in a separate window">
                <i class="fas fa-external-link-alt"></i> View HD Front Photo
            </a>
            <div class="lead-img-caption">
                <span><i class="fas fa-camera"></i> Ganesh Visarjan 2026 &bull; 25th September 2026</span>
            </div>
        </div>
        <div class="lead-editorial-body">
            <div class="lead-badge-row">
                <span class="lead-category-badge lead-festive-badge"><i class="fas fa-om"></i> CAMPUS &amp; CULTURE &bull; GANESH VISARJAN</span>
                <span class="read-time-pill"><i class="far fa-clock"></i> 25/09/2026</span>
            </div>
            <h2 class="lead-main-headline" style="font-size: 1.45rem;">
                <a href="news.php?view=gallery" onclick="if(window.openNewsGalleryView){ window.openNewsGalleryView('visarjanGalleryBox'); return false; }">
                    Ganesh Visarjan 2026: SDSF Bids Bappa a Heartfelt Farewell
                </a>
            </h2>
            <p class="lead-sub-title-intro">
                <em>A day of devotion, gratitude, and togetherness as the SDSF family bid farewell to Lord Ganesha until next year.</em>
            </p>
            <p class="lead-summary-para">
                On 25th September 2026, SDSF students gathered at Bilavali Lake to bid farewell to Lord Ganesha during Ganesh Visarjan 2026. Visarjan is the traditional immersion of the idol, symbolising Bappa's return to his heavenly abode after the festive days.
            </p>
            <div class="festive-chants-box" style="margin: 12px 0;">
                <span class="chant-line-main" style="font-size: 1.1rem;">GANPATI BAPPA MORYA!</span>
                <span class="chant-line-sub" style="font-size: 0.95rem;">Pudhchya Varshi Lavkar Ya!</span>
            </div>
            <div class="lead-action-row">
                <a href="news.php?view=gallery" onclick="if(window.openNewsGalleryView){ window.openNewsGalleryView('visarjanGalleryBox'); return false; }" class="btn-view-gallery-action">
                    <i class="fas fa-images"></i> View Event Gallery (<?php echo $visarjan_count_campus > 0 ? $visarjan_count_campus . ' Photos' : 'All Photos'; ?>)
                </a>
            </div>
        </div>
    </article>

    <!-- Ganesh Chaturthi Special Campus Celebration -->
    <article class="featured-lead-article-ganesh" data-category="campus" style="margin-bottom: 24px;">
        <div class="lead-media-wrapper-ganesh">
            <a href="news.php?view=gallery" onclick="if(window.openNewsGalleryView){ window.openNewsGalleryView(); return false; }">
                <img src="<?php echo $base_path; ?>SDSF_News/photoes_news/Ganesh Ji 2026.jpg" alt="SDSF Welcomes SDSF Ke Raja" class="lead-main-img">
            </a>
            <a href="<?php echo $base_path; ?>SDSF_News/photoes_news/Ganesh Ji 2026.jpg" target="_blank" rel="noopener noreferrer" class="corner-hd-badge" title="Open full high-resolution image in a separate window">
                <i class="fas fa-external-link-alt"></i> View HD Front Photo
            </a>
            <div class="lead-img-caption">
                <span><i class="fas fa-camera"></i> Takshila Campus &bull; SDSF Ke Raja Agaman &bull; 14th September 2026</span>
            </div>
        </div>
        <div class="lead-editorial-body">
            <div class="lead-badge-row">
                <span class="lead-category-badge lead-festive-badge"><i class="fas fa-om"></i> CAMPUS &amp; CULTURE &bull; LIVE FEATURE</span>
                <span class="read-time-pill"><i class="far fa-clock"></i> 14/09/2026</span>
            </div>
            <h2 class="lead-main-headline" style="font-size: 1.45rem;">
                <a href="news.php?view=gallery" onclick="if(window.openNewsGalleryView){ window.openNewsGalleryView(); return false; }">
                    SDSF Welcomes “SDSF Ke Raja” with Grandeur and Devotion
                </a>
            </h2>
            <p class="lead-sub-title-intro">
                <em>A vibrant celebration of faith, togetherness, and student spirit at the School of Data Science &amp; Forecasting</em>
            </p>
            <p class="lead-summary-para">
                The School of Data Science &amp; Forecasting (SDSF), DAVV, Indore, came alive with devotion, enthusiasm, and festive spirit on 14th September 2026 as students and members of the SDSF family gathered to celebrate the auspicious Agaman (arrival) of Lord Ganesha, lovingly welcomed as “SDSF Ke Raja.” 🐘🌺
            </p>
            <div class="festive-chants-box" style="margin: 12px 0;">
                <span class="chant-line-main" style="font-size: 1.1rem;">Ganapati Bappa Morya!</span>
                <span class="chant-line-sub" style="font-size: 0.95rem;">Mangal Murti Morya! 🌺🙏</span>
            </div>
<?php
$ganesh_count_campus = 0;
$ganesh_chk_campus = __DIR__ . '/../../../photoes_news/Ganesh Chaturthi 2026';
if (is_dir($ganesh_chk_campus)) {
    $fls = scandir($ganesh_chk_campus);
    foreach ($fls as $fl) {
        if ($fl === '.' || $fl === '..') continue;
        $ext = strtolower(pathinfo($fl, PATHINFO_EXTENSION));
        if (in_array($ext, ['jpg', 'jpeg', 'png', 'webp', 'gif'])) {
            $ganesh_count_campus++;
        }
    }
}
?>
            <div class="lead-action-row">
                <a href="news.php?view=gallery" onclick="if(window.openNewsGalleryView){ window.openNewsGalleryView(); return false; }" class="btn-view-gallery-action">
                    <i class="fas fa-images"></i> View Event Gallery (<?php echo $ganesh_count_campus > 0 ? $ganesh_count_campus . ' Photos' : 'All Photos'; ?>)
                </a>
            </div>
        </div>
    </article>

<?php
// Pick a nice induction cover from the folder
$aagaaz_dir = __DIR__ . '/../../../../photoes/Induction 2026';
$aagaaz_photos = [];
if (is_dir($aagaaz_dir)) {
    foreach (scandir($aagaaz_dir) as $_af) {
        if ($_af !== '.' && $_af !== '..' && is_file($aagaaz_dir . '/' . $_af) && preg_match('/\.(jpe?g|png|webp|gif)$/i', $_af)) {
            $aagaaz_photos[] = $_af;
        }
    }
    natsort($aagaaz_photos);
    $aagaaz_photos = array_values($aagaaz_photos);
}
// Use the specific WhatsApp photo (small file, loads fast)
$aagaaz_preferred = 'IMG-20260918-WA0007.jpg';
if (file_exists($aagaaz_dir . '/' . $aagaaz_preferred)) {
    $aagaaz_cover_url = $base_path . 'photoes/Induction 2026/' . rawurlencode($aagaaz_preferred);
} elseif (!empty($aagaaz_photos)) {
    $aagaaz_cover_url = $base_path . 'photoes/Induction 2026/' . rawurlencode($aagaaz_photos[0]);
} else {
    $aagaaz_cover_url = $base_path . 'photoes/slide_image_event.jpeg';
}
?>

    <!-- ========================================================
         CARD: AAGAAZ 26 — SDSF INDUCTION FEATURE
         ======================================================== -->
    <article class="campus-aagaaz-card" id="campusAagaaz26" data-category="campus" style="margin-bottom: 24px;">

        <!-- Media Header -->
        <div class="aagaaz-card-media-wrap">
            <img src="<?php echo htmlspecialchars($aagaaz_cover_url, ENT_QUOTES); ?>" alt="Aagaaz 26 — SDSF Induction Ceremony 2026" class="aagaaz-card-img" loading="lazy" onclick="if(window.openGalleryLightbox) openGalleryLightbox(this.src, 'Aagaaz 26: SDSF Welcomes Its New Batch with Colour, Culture and Conviction')" style="cursor: pointer;" title="Click to view full photo in Lightbox">
            <div class="aagaaz-card-overlay">
                <div class="aagaaz-badge-row">
                    <span class="aagaaz-event-badge"><i class="fas fa-star"></i> CAMPUS & CULTURE · INDUCTION 2026</span>
                    <span class="aagaaz-date-pill"><i class="far fa-calendar-alt"></i> 17th Sep 2026</span>
                </div>
                <h2 class="aagaaz-card-title">Aagaaz 26: SDSF Welcomes Its New Batch with Colour, Culture and Conviction</h2>
            </div>
            <a href="<?php echo $base_path; ?>events.php?gallery=induction-2026#event-gallery" target="_blank" rel="noopener noreferrer" class="aagaaz-hd-badge" title="View Induction Gallery">
                <i class="fas fa-images"></i> View Gallery
            </a>
        </div>

        <!-- Card Body -->
        <div class="aagaaz-card-content">

            <!-- Byline & Meta -->
            <div class="aagaaz-byline-bar">
                <div class="aagaaz-author-info">
                    <i class="fas fa-university"></i> <strong>SDSF, DAVV Takshila Campus</strong>
                </div>
                <div class="aagaaz-meta-details">
                    <span><i class="fas fa-map-marker-alt"></i> Indore, M.P.</span>
                    <span>&bull;</span>
                    <span><i class="fas fa-user-graduate"></i> 2026 Batch Induction</span>
                </div>
            </div>

            <!-- Highlights Pills Row -->
            <div class="aagaaz-highlights-row">
                <span class="aagaaz-highlight-pill"><i class="fas fa-om"></i> Saraswati Vandana</span>
                <span class="aagaaz-highlight-pill"><i class="fas fa-fire"></i> Lamp Lighting</span>
                <span class="aagaaz-highlight-pill"><i class="fas fa-microphone-alt"></i> VC Address</span>
                <span class="aagaaz-highlight-pill"><i class="fas fa-music"></i> Cultural Night</span>
                <span class="aagaaz-highlight-pill"><i class="fas fa-certificate"></i> Felicitations</span>
                <span class="aagaaz-highlight-pill"><i class="fas fa-industry"></i> Industry Guests</span>
            </div>

            <!-- Full Narrative -->
            <div class="aagaaz-narrative-body">
                <p>
                    The School of Data Science and Forecasting (SDSF), DAVV Takshila Campus, rolled out a vibrant welcome for its <strong>2026 batch</strong> as it hosted its annual induction ceremony, <strong>Aagaaz 26</strong>. The event opened on a note of devotion and pride with the <em>Saraswati Vandana</em> and the <em>Kulgeet</em>, followed by the ceremonial lighting of the lamp by the dignitaries on stage.
                </p>
                <p>
                    The occasion was graced by Department Coordinator <strong>Dr. Shishir Kumar Shandhilya</strong>, Department HOD <strong>Dr. Govind Maheswari</strong>, the Honourable Vice Chancellor (Kulpati) <strong>Dr. Rakesh Singhai</strong> as Chief Guest, along with special guests <strong>Mr. Rajat Bajaj</strong> (Rakuten) and <strong>Mr. Bhupendra</strong>, CEO of Bitbyte Software Technology.
                </p>
                <p>
                    The faculty addressed the incoming students with words of encouragement, while Dr. Rakesh Singhai's address stood out as the highlight of the morning — speaking on the importance of alumni and professional connections, giving an illustrative example of SDSF's own alumni journey. He made one special mention: the SDSF Official Website, which came out of the department itself, is already reaching students and professionals beyond the campus.
                </p>

                <!-- Dignitaries Quote Box -->
                <div class="aagaaz-quote-box">
                    <div class="aagaaz-quote-icon"><i class="fas fa-quote-left"></i></div>
                    <blockquote class="aagaaz-quote-text">
                        "You are not just students — you are the future architects of data-driven India. Make every day of this journey count."
                    </blockquote>
                    <span class="aagaaz-quote-attr"><i class="fas fa-user-tie"></i> Dr. Rakesh Singhai, Vice Chancellor, DAVV</span>
                </div>

                <p>
                    The ceremony then moved from formal recognition to festive celebration, as faculty members and students gathered for a group photograph marking the occasion. What followed was an evening full of youthful energy — first-year students, alongside seniors and final-year batchmates, took the stage for dance and musical performances brimming with enthusiasm. A lively "guess the logo" game engaged the freshers, testing their wit amid laughter and applause, while an introduction video gave the newcomers a warm, visual glimpse into the spirit and legacy of SDSF. Aagaaz 26 closed not just as an induction, but as a fitting reminder of the department's blend of academic ambition and genuine camaraderie.
                </p>
                <p>
                    Aagaaz 26 was more than just an orientation — it was a declaration of SDSF's culture: <em>rooted in rigour, alive with spirit, and ready for the future</em>. The 2026 batch is officially home. 🎓

                    <br>
                    <br>
                    Thanks to the entire management team to make this event a great success:
                    <br>
                    Anchors:
                    <br>
                    Arayna Dwivedi (M.Tech Int.) 
                    <br>
                    Kumud Bisen (M.Tech Int.)
                    <br>
                    Madhvi Kaware (M.Tech Int.)
                    <br>
                    Akshita Mishra (M.Tech Int.)
                    <br>
                    Nitya Verma (MBA) 
                    <br>
                    Krisarthak (M.Tech Int.)

                    <br>
                    <br>
                    Organizers: 
                    <br>
                    MBA:-
                    <br>
                    Utkarsh Ojha
                    <br>
                    Shubham Singh
                    <br>
                    Shivam Tikare
                    <br> 
                    Nitya Verma
                    <br>
                    Suraj keshri
                    <br>
                    <br>
                    M.sc:
                    <br>
                    Jeetendra singh yadav
                </p>
            </div>

            <!-- Action Row -->
            <div class="aagaaz-action-row">
                <a href="<?php echo $base_path; ?>events.php?gallery=induction-2026#event-gallery" class="btn-aagaaz-gallery" id="btnAagaaz26Gallery">
                    <i class="fas fa-images"></i>
                    <span>View Aagaaz 26 Photo Gallery</span>
                    <i class="fas fa-arrow-right aagaaz-arrow-icon"></i>
                </a>
                <a href="<?php echo $base_path; ?>events.php" class="btn-aagaaz-events">
                    <i class="fas fa-calendar-check"></i>
                    <span>All SDSF Events</span>
                </a>
            </div>

        </div>

    </article>

    <article class="campus-featured-card" data-category="campus">
        
        <!-- Campus Card Media Header -->
        <div class="campus-card-media-wrap">
            <img src="<?php echo $base_path; ?>photoes/slide_image_event.jpeg" alt="SDSF Campus Life &amp; Events" class="campus-card-img">
            <div class="campus-card-overlay">
                <div class="campus-badge-row">
                    <span class="campus-card-badge"><i class="fas fa-fire-alt"></i> CAMPUS LIFE &amp; CULTURE</span>
                    
                </div>
                <h3 class="campus-card-media-title">Where Learning Meets Life, Innovation &amp; Friendship</h3>
            </div>
        </div>

        <div class="campus-card-content">
            
            <div class="campus-byline-bar">
                <div class="campus-author-info">
                    <i class="fas fa-graduation-cap"></i> To All <strong>SDSF Students &amp; Aspirants</strong>
                </div>
                <div class="campus-meta-details">
                    <span><i class="fas fa-map-marker-alt"></i> Takshila Campus, DAVV Indore</span>
                </div>
            </div>

            <!-- Student Inspiration Quote Card -->
            <div class="student-quote-card">
                <div class="quote-header">
                    <div class="quote-icon-bubble">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <span class="quote-tag">Inspiring Words for Every SDSFian</span>
                </div>
                <blockquote class="quote-body">
                    “Explore the vibrant ecosystem of opportunities, achievements, and celebrations. It’s where you grow, glow, mess up, level up — all under the same sky that keeps dreaming with you.”
                </blockquote>
                <div class="quote-footer">
                    <span class="quote-author"><i class="fas fa-feather-alt"></i> Campus Life at SDSF</span>
                    <span class="quote-pulse"><span class="pulse-dot"></span> Active Student Hub</span>
                </div>
            </div>

            <!-- Campus Perks / Highlights -->
            <div class="campus-pills-row">
                <span class="campus-mini-pill"><i class="fas fa-laptop-code"></i> Tech Fests &amp; Hackathons</span>
                <span class="campus-mini-pill"><i class="fas fa-users"></i> Developer Communities</span>
                <span class="campus-mini-pill"><i class="fas fa-trophy"></i> Sports &amp; Cultural Meets</span>
                <span class="campus-mini-pill"><i class="fas fa-hands-helping"></i> Peer Mentorship</span>
            </div>

            <p class="campus-description-para">
                Life at SDSF is more than just lectures and algorithms. It’s midnight brainstorming sessions, competitive hackathons, developer clubs, cultural fests, and building friendships that last a lifetime. Step in and write your story.
            </p>

            <!-- Action Button Redirecting to events.php -->
            <div class="campus-action-container">
                <a href="<?php echo $base_path; ?>events.php" class="btn-explore-campus-life" id="btnExploreCampusLife">
                    <i class="fas fa-compass"></i>
                    <span>Explore Campus Life at SDSF</span>
                    <i class="fas fa-arrow-right arrow-icon"></i>
                </a>
            </div>

        </div>

    </article>

</div>
