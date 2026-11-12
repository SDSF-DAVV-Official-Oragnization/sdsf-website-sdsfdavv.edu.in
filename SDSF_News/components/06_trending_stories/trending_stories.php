<!-- Column 3: Trending stories sidebar -->
<?php
$induction_trending_dir = __DIR__ . '/../../../photoes/Induction 2026';
$induction_trending_images = [];
if (is_dir($induction_trending_dir)) {
    foreach (scandir($induction_trending_dir) as $file) {
        if ($file !== '.' && $file !== '..' && preg_match('/\.(jpe?g|png|webp|gif)$/i', $file)) {
            $induction_trending_images[] = $file;
        }
    }
    natsort($induction_trending_images);
    $induction_trending_images = array_values($induction_trending_images);
}
$induction_trending_preferred = 'IMG-20260918-WA0007.jpg';
if (file_exists($induction_trending_dir . '/' . $induction_trending_preferred)) {
    $induction_trending_cover = $base_path . 'photoes/Induction 2026/' . rawurlencode($induction_trending_preferred);
} elseif (!empty($induction_trending_images)) {
    $induction_trending_cover = $base_path . 'photoes/Induction 2026/' . rawurlencode($induction_trending_images[0]);
} else {
    $induction_trending_cover = $base_path . 'photoes/slide_image_event.jpeg';
}

$certif_appre_dir = __DIR__ . '/../../../photoes/Induction 2026/Certif Appre';
$certif_appre_images = [];
if (is_dir($certif_appre_dir)) {
    foreach (scandir($certif_appre_dir) as $file) {
        if ($file !== '.' && $file !== '..' && is_file($certif_appre_dir . '/' . $file) && preg_match('/\.(jpe?g|png|webp|gif)$/i', $file)) {
            $certif_appre_images[] = $file;
        }
    }
    natsort($certif_appre_images);
    $certif_appre_images = array_values($certif_appre_images);
}
$certif_appre_cover = !empty($certif_appre_images)
    ? (file_exists($certif_appre_dir . '/optimized/' . $certif_appre_images[0])
        ? $base_path . 'photoes/Induction 2026/Certif Appre/optimized/' . rawurlencode($certif_appre_images[0])
        : $base_path . 'photoes/Induction 2026/Certif Appre/' . rawurlencode($certif_appre_images[0]))
    : $base_path . 'photoes/slide_image_event.jpeg';
?>
<aside class="grid-col col-trending" id="trendingCol">
    <div class="col-section-header">
        <h2 class="col-heading">Trending Stories</h2>
        <span class="col-header-line"></span>
    </div>

    <div class="trending-list">      
        <!-- Item: Workshop Conducted by Malaviya Mission Training Centre -->
        <article class="trending-card" data-id="cyber_ethics" data-category="academic">
            <div class="trending-media">
                <a href="news.php?category=all#article-cyber-ethics" onclick="if(window.filterByTopic){ filterByTopic('all'); } setTimeout(function(){ var el=document.getElementById('article-cyber-ethics'); if(el) el.scrollIntoView({behavior:'smooth',block:'start'}); },150); return false;">
                    <img src="<?php echo $base_path; ?>SDSF_News/photoes_news/cyber_security_ethics_thumb.jpeg" alt="Workshop Conducted: Cyber Security and Internet Ethics Course" loading="lazy">
                </a>
                <span class="trend-rank" style="background: #0284c7; color: #fff;"><i class="fas fa-shield-alt"></i></span>
            </div>
            <div class="trending-info">
                <div class="placement-mini-pill" style="color: #0369a1; background: #e0f2fe; border-color: #bae6fd;">
                    <span class="pulse-dot" style="background: #0284c7;"></span> WORKSHOP CONDUCTED
                </div>
                <h4 class="trending-title">
                    <a href="news.php?category=all#article-cyber-ethics" onclick="if(window.filterByTopic){ filterByTopic('all'); } setTimeout(function(){ var el=document.getElementById('article-cyber-ethics'); if(el) el.scrollIntoView({behavior:'smooth',block:'start'}); },150); return false;">
                        Malaviya Mission Training Centre Conducts Course in Cyber Security &amp; Internet Ethics
                    </a>
                </h4>
                <div class="trending-meta">
                    <span class="trend-views"><i class="fas fa-check-circle"></i> Completed</span>
                    <span class="trend-date"><i class="far fa-clock"></i> 26–31 Oct 2026</span>
                </div>
            </div>
        </article>

        <!-- Item 8.5: ANDAI placement spotlight with modal -->
        <article class="trending-card trending-card-placement" data-id="13" data-category="campus" id="trendingArticleAndaiPlacement">
            <div class="trending-media placement-thumb-trigger" title="Click to view selected students">
                <img src="<?php echo $base_path; ?>SDSF_News/photoes_news/ANDAI Internship 2026.jpeg" alt="ANDAI Virtual Internship Selected Students">
                <span class="trend-rank">01</span>
                <span class="placement-hover-icon"><i class="fas fa-expand-alt"></i></span>
            </div>
            <div class="trending-info placement-info-trigger" title="Click to view selected students">
                <div class="placement-mini-pill">
                    <span class="pulse-dot"></span> Placements 2026
                </div>
                <h4 class="trending-title">
                    <a href="javascript:void(0)" class="placement-open-link">
                       14 SDSF Students Selected for ANDAI Virtual Internship
                    </a>
                </h4>
                <div class="trending-meta">
                    <span class="trend-views"><i class="fas fa-user-graduate"></i> 14 Selected</span>
                    <span class="trend-date"><i class="far fa-clock"></i> 10th Oct 2026</span>
                </div>
            </div>

            <!-- Selected students modal -->
            <div id="articleAndaiPlacementPopup" class="article-modal-backdrop" aria-hidden="true">
                <div class="article-modal-dialog" role="dialog" aria-modal="true" aria-labelledby="andaiPlacementPopupTitle">
                    <button type="button" class="article-modal-close" id="closeAndaiArticlePopupBtn" aria-label="Close details">&times;</button>

                    <div class="article-modal-header">
                        <div class="modal-badge-row">
                            <span class="modal-tag"><i class="fas fa-award"></i> Campus Placement Spotlight</span>
                            <span class="modal-company-pill"><i class="fas fa-building"></i> ANDAI</span>
                        </div>
                        <h3 id="andaiPlacementPopupTitle" class="modal-main-title">14 SDSF Students Selected for ANDAI Virtual Internship</h3>
                        <p class="modal-sub-desc">
                            School of Data Science and Forecasting, DAVV Indore is proud to announce the selection of 14 talented students for the ANDAI virtual internship.
                        </p>
                    </div>

                    <div class="article-modal-grid">
                        <div class="modal-poster-col">
                            <div class="poster-card-frame">
                                <img src="<?php echo $base_path; ?>SDSF_News/photoes_news/ANDAI Internship 2026.jpeg" alt="ANDAI Virtual Internship placed students poster" class="modal-poster-img">
                            </div>
                        </div>

                        <div class="modal-roster-col">
                            <div class="roster-header">
                                <div class="roster-icon"><i class="fas fa-user-graduate"></i></div>
                                <div>
                                    <h4 class="roster-title">Selected Candidates &amp; Programs</h4>
                                    <p class="roster-meta-role">Designation: <strong>Virtual Internship</strong> | Batch 2026-27</p>
                                </div>
                            </div>

                            <div class="students-roster-list" style="max-height: 350px; overflow-y: auto; padding-right: 10px;">
                                <div class="student-entry"><span class="entry-num">01</span><div class="entry-details"><h5 class="entry-name">Mansi Rathore</h5><span class="entry-course"><i class="fas fa-graduation-cap"></i> MTech (AI/DS)</span></div></div>
                                <div class="student-entry"><span class="entry-num">02</span><div class="entry-details"><h5 class="entry-name">Manasha Upadhyay</h5><span class="entry-course"><i class="fas fa-graduation-cap"></i> MTech (AI/DS)</span></div></div>
                                <div class="student-entry"><span class="entry-num">03</span><div class="entry-details"><h5 class="entry-name">Vaishnavi Mahajan</h5><span class="entry-course"><i class="fas fa-graduation-cap"></i> MTech (AI/DS)</span></div></div>
                                <div class="student-entry"><span class="entry-num">04</span><div class="entry-details"><h5 class="entry-name">Rudrakshi Thakur</h5><span class="entry-course"><i class="fas fa-graduation-cap"></i> MTech (AI/DS)</span></div></div>
                                <div class="student-entry"><span class="entry-num">05</span><div class="entry-details"><h5 class="entry-name">Pranjal Rathod</h5><span class="entry-course"><i class="fas fa-graduation-cap"></i> MTech (AI/DS)</span></div></div>
                                <div class="student-entry"><span class="entry-num">06</span><div class="entry-details"><h5 class="entry-name">Inshal Ali</h5><span class="entry-course"><i class="fas fa-graduation-cap"></i> MTech (AI/DS)</span></div></div>
                                <div class="student-entry"><span class="entry-num">07</span><div class="entry-details"><h5 class="entry-name">Vedansh Mehta</h5><span class="entry-course"><i class="fas fa-graduation-cap"></i> MTech (AI/DS)</span></div></div>
                                <div class="student-entry"><span class="entry-num">08</span><div class="entry-details"><h5 class="entry-name">Sargam Verma</h5><span class="entry-course"><i class="fas fa-graduation-cap"></i> MTech (AI/DS)</span></div></div>
                                <div class="student-entry"><span class="entry-num">09</span><div class="entry-details"><h5 class="entry-name">Naman Saxena</h5><span class="entry-course"><i class="fas fa-graduation-cap"></i> MTech (BDA)</span></div></div>
                                <div class="student-entry"><span class="entry-num">10</span><div class="entry-details"><h5 class="entry-name">Rehan Patel</h5><span class="entry-course"><i class="fas fa-graduation-cap"></i> MSc (DS &amp; Analytics)</span></div></div>
                                <div class="student-entry"><span class="entry-num">11</span><div class="entry-details"><h5 class="entry-name">Tanishk Tomar</h5><span class="entry-course"><i class="fas fa-graduation-cap"></i> MTech (AI/DS)</span></div></div>
                                <div class="student-entry"><span class="entry-num">12</span><div class="entry-details"><h5 class="entry-name">Hitesh Joshi</h5><span class="entry-course"><i class="fas fa-graduation-cap"></i> MTech (BDA)</span></div></div>
                                <div class="student-entry"><span class="entry-num">13</span><div class="entry-details"><h5 class="entry-name">Abhay Chauhan</h5><span class="entry-course"><i class="fas fa-graduation-cap"></i> MTech (AI/DS)</span></div></div>
                                <div class="student-entry"><span class="entry-num">14</span><div class="entry-details"><h5 class="entry-name">Rahul Yadav</h5><span class="entry-course"><i class="fas fa-graduation-cap"></i> MTech (AI/DS)</span></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>

       <!-- Item 7: Placement spotlight with modal -->
        <article class="trending-card trending-card-placement" data-id="10" data-category="campus" id="trendingArticlePlacement">
            <div class="trending-media placement-thumb-trigger" title="Click to view selected students">
                <img src="<?php echo $base_path; ?>SDSF_News/photoes_news/Orange_Placed_Students.png" alt="Orange Data Tech Selected Students">
                <span class="trend-rank">02</span>
                <span class="placement-hover-icon"><i class="fas fa-expand-alt"></i></span>
            </div>
            <div class="trending-info placement-info-trigger" title="Click to view selected students">
                <div class="placement-mini-pill">
                    <span class="pulse-dot"></span> Placements 2026
                </div>
                <h4 class="trending-title">
                    <a href="javascript:void(0)" class="placement-open-link">
                       Six SDSF Students Selected at Orange Data Tech
                    </a>
                </h4>
                <div class="trending-meta">
                    <span class="trend-views"><i class="fas fa-user-graduate"></i> 6 Placed</span>
                    <span class="trend-date"><i class="far fa-clock"></i> 5th Sep 2026</span>
                </div>
            </div>

            <!-- Selected students modal -->
            <div id="articlePlacementPopup" class="article-modal-backdrop" aria-hidden="true">
                <div class="article-modal-dialog" role="dialog" aria-modal="true" aria-labelledby="placementPopupTitle">
                    <button type="button" class="article-modal-close" id="closeArticlePopupBtn" aria-label="Close details">&times;</button>
                    
                    <div class="article-modal-header">
                        <div class="modal-badge-row">
                            <span class="modal-tag"><i class="fas fa-award"></i> Campus Placement Spotlight</span>
                            <span class="modal-company-pill"><i class="fas fa-building"></i> Orange Data Tech</span>
                        </div>
                        <h3 id="placementPopupTitle" class="modal-main-title">Six SDSF Students Selected as Data Analysts</h3>
                        <p class="modal-sub-desc">
                            School of Data Science and Forecasting, DAVV Indore is proud to announce the selection of 6 talented students in the campus recruitment drive 2026.
                        </p>
                    </div>

                    <div class="article-modal-grid">
                        <!-- Poster Preview Section -->
                        <div class="modal-poster-col">
                            <div class="poster-card-frame">
                                <img src="<?php echo $base_path; ?>SDSF_News/photoes_news/Orange_Placed_Students.png" alt="Placed Students Poster" class="modal-poster-img">
                            </div>
                            <a href="<?php echo $base_path; ?>placement_news/placement_news.php" class="modal-full-story-btn">
                                <i class="fas fa-newspaper"></i> Read Full Placement Report <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>

                        <!-- Selected Students & Courses List -->
                        <div class="modal-roster-col">
                            <div class="roster-header">
                                <div class="roster-icon"><i class="fas fa-user-graduate"></i></div>
                                <div>
                                    <h4 class="roster-title">Selected Candidates &amp; Programs</h4>
                                    <p class="roster-meta-role">Designation: <strong>Data Analyst</strong> | Batch 2024-2026</p>
                                </div>
                            </div>

                            <div class="students-roster-list">
                                <div class="student-entry">
                                    <span class="entry-num">01</span>
                                    <div class="entry-details">
                                        <h5 class="entry-name">Rajveer Singh</h5>
                                        <span class="entry-course"><i class="fas fa-graduation-cap"></i> MBA (Business Analytics)</span>
                                    </div>
                                </div>
                                <div class="student-entry">
                                    <span class="entry-num">02</span>
                                    <div class="entry-details">
                                        <h5 class="entry-name">Anjali Kewat</h5>
                                        <span class="entry-course"><i class="fas fa-graduation-cap"></i> M.Sc. (Data Science &amp; Analytics)</span>
                                    </div>
                                </div>
                                <div class="student-entry">
                                    <span class="entry-num">03</span>
                                    <div class="entry-details">
                                        <h5 class="entry-name">Divyanshu Varshney</h5>
                                        <span class="entry-course"><i class="fas fa-graduation-cap"></i> MBA (Business Analytics)</span>
                                    </div>
                                </div>
                                <div class="student-entry">
                                    <span class="entry-num">04</span>
                                    <div class="entry-details">
                                        <h5 class="entry-name">Atharv Bhavsar</h5>
                                        <span class="entry-course"><i class="fas fa-graduation-cap"></i> M.Tech (AI &amp; Data Science)</span>
                                    </div>
                                </div>
                                <div class="student-entry">
                                    <span class="entry-num">05</span>
                                    <div class="entry-details">
                                        <h5 class="entry-name">Riti Kumayou</h5>
                                        <span class="entry-course"><i class="fas fa-graduation-cap"></i> M.Tech (AI &amp; Data Science)</span>
                                    </div>
                                </div>
                                <div class="student-entry">
                                    <span class="entry-num">06</span>
                                    <div class="entry-details">
                                        <h5 class="entry-name">Kushagra Takzare</h5>
                                        <span class="entry-course"><i class="fas fa-graduation-cap"></i> M.Tech (AI &amp; Data Science)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Styles for placement card & modal -->
            <style>
                .trending-card-placement {
                    position: relative;
                    cursor: pointer;
                    background: #f8fafc;
                    border: 1px solid #e2e8f0;
                    border-radius: 6px;
                    padding: 8px;
                    margin-top: 4px;
                    box-shadow: 0 1px 3px rgba(0,0,0,0.04);
                    transition: background 0.2s ease, border-color 0.2s ease, box-shadow 0.2s ease;
                }
                /* avoid transform on parent so fixed modal stays full screen */
                .trending-card-placement:hover {
                    background: #f0fdf4;
                    border-color: #86efac;
                    box-shadow: 0 4px 12px rgba(22, 101, 52, 0.12);
                }
                .trending-card-placement .trending-media {
                    position: relative;
                }
                .placement-hover-icon {
                    position: absolute;
                    inset: 0;
                    background: rgba(15, 23, 42, 0.45);
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    color: #ffffff;
                    font-size: 0.85rem;
                    opacity: 0;
                    transition: opacity 0.2s ease;
                    border-radius: 4px;
                }
                .trending-card-placement:hover .placement-hover-icon {
                    opacity: 1;
                }
                .placement-mini-pill {
                    display: inline-flex;
                    align-items: center;
                    gap: 5px;
                    font-size: 0.62rem;
                    font-weight: 700;
                    color: #166534;
                    background: #dcfce7;
                    border: 1px solid #bbf7d0;
                    padding: 1px 6px;
                    border-radius: 12px;
                    margin-bottom: 3px;
                    text-transform: uppercase;
                    letter-spacing: 0.4px;
                }
                .pulse-dot {
                    width: 5px;
                    height: 5px;
                    background: #22c55e;
                    border-radius: 50%;
                    box-shadow: 0 0 0 2px rgba(34, 197, 94, 0.3);
                }
                .trending-card-placement .trending-title a {
                    color: #0f172a;
                    font-weight: 700;
                    line-height: 1.25;
                }
                .trending-card-placement:hover .trending-title a {
                    color: #15803d;
                }

                /* Popup Modal Overlay - Guaranteed Full Viewport */
                .trending-card-placement .article-modal-backdrop {
                    grid-column: 1 / -1;
                    position: fixed !important;
                    top: 0 !important;
                    left: 0 !important;
                    right: 0 !important;
                    bottom: 0 !important;
                    width: 100vw !important;
                    height: 100vh !important;
                    z-index: 9999999 !important;
                    background: rgba(11, 19, 43, 0.82);
                    backdrop-filter: blur(8px);
                    -webkit-backdrop-filter: blur(8px);
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    padding: 20px;
                    box-sizing: border-box;
                    opacity: 0;
                    visibility: hidden;
                    pointer-events: none;
                    transition: opacity 0.25s ease, visibility 0.25s ease;
                }
                .trending-card-placement .article-modal-backdrop.is-open {
                    opacity: 1;
                    visibility: visible;
                    pointer-events: auto;
                }

                /* Modal Container */
                .article-modal-dialog {
                    position: relative;
                    background: #ffffff;
                    width: 100%;
                    max-width: 880px;
                    max-height: 90vh;
                    overflow-y: auto;
                    border-radius: 14px;
                    box-shadow: 0 25px 60px -15px rgba(0, 0, 0, 0.5);
                    padding: 28px;
                    box-sizing: border-box;
                    transform: scale(0.95) translateY(10px);
                    transition: transform 0.25s cubic-bezier(0.16, 1, 0.3, 1);
                    cursor: default;
                }
                .article-modal-backdrop.is-open .article-modal-dialog {
                    transform: scale(1) translateY(0);
                }

                /* Close Button */
                .article-modal-close {
                    position: absolute;
                    top: 16px;
                    right: 18px;
                    width: 38px;
                    height: 38px;
                    background: #f1f5f9;
                    border: 1px solid #cbd5e1;
                    border-radius: 50%;
                    font-size: 1.5rem;
                    line-height: 1;
                    color: #475569;
                    cursor: pointer;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    transition: all 0.2s ease;
                    z-index: 20;
                }
                .article-modal-close:hover {
                    background: #dc2626;
                    color: #ffffff;
                    border-color: #dc2626;
                    transform: rotate(90deg);
                }

                /* Header */
                .article-modal-header {
                    margin-bottom: 20px;
                    padding-bottom: 14px;
                    border-bottom: 1px solid #e2e8f0;
                    padding-right: 48px;
                }
                .modal-badge-row {
                    display: flex;
                    align-items: center;
                    gap: 8px;
                    flex-wrap: wrap;
                    margin-bottom: 8px;
                }
                .modal-tag {
                    display: inline-flex;
                    align-items: center;
                    gap: 5px;
                    background: #eff6ff;
                    color: #1d4ed8;
                    border: 1px solid #bfdbfe;
                    font-size: 0.72rem;
                    font-weight: 700;
                    padding: 3px 9px;
                    border-radius: 20px;
                    text-transform: uppercase;
                    letter-spacing: 0.4px;
                }
                .modal-company-pill {
                    display: inline-flex;
                    align-items: center;
                    gap: 5px;
                    background: #fff7ed;
                    color: #c2410c;
                    border: 1px solid #fed7aa;
                    font-size: 0.72rem;
                    font-weight: 700;
                    padding: 3px 9px;
                    border-radius: 20px;
                }
                .modal-main-title {
                    font-family: var(--font-headline, 'Playfair Display', serif);
                    font-size: 1.45rem;
                    font-weight: 800;
                    color: #0f172a;
                    line-height: 1.3;
                    margin: 0 0 6px 0;
                }
                .modal-sub-desc {
                    font-size: 0.86rem;
                    color: #475569;
                    line-height: 1.5;
                    margin: 0;
                }

                /* Two Column Grid */
                .article-modal-grid {
                    display: grid;
                    grid-template-columns: 1fr 1fr;
                    gap: 22px;
                    align-items: start;
                }

                /* Poster Column */
                .modal-poster-col {
                    display: flex;
                    flex-direction: column;
                    gap: 12px;
                }
                .poster-card-frame {
                    background: #0f172a;
                    border-radius: 10px;
                    overflow: hidden;
                    box-shadow: 0 8px 20px rgba(15, 23, 42, 0.12);
                    border: 1px solid #cbd5e1;
                }
                .modal-poster-img {
                    width: 100%;
                    height: auto;
                    display: block;
                    object-fit: contain;
                    transition: transform 0.3s ease;
                }
                .poster-card-frame:hover .modal-poster-img {
                    transform: scale(1.02);
                }
                .modal-full-story-btn {
                    display: inline-flex;
                    align-items: center;
                    justify-content: center;
                    gap: 8px;
                    background: #162b57;
                    color: #ffffff;
                    text-decoration: none;
                    font-size: 0.82rem;
                    font-weight: 600;
                    padding: 10px 14px;
                    border-radius: 8px;
                    transition: background 0.2s ease, transform 0.15s ease;
                }
                .modal-full-story-btn:hover {
                    background: #2563eb;
                    color: #ffffff;
                    transform: translateY(-1px);
                }

                /* Roster Column */
                .modal-roster-col {
                    background: #f8fafc;
                    border: 1px solid #e2e8f0;
                    border-radius: 10px;
                    padding: 16px;
                }
                .roster-header {
                    display: flex;
                    align-items: center;
                    gap: 10px;
                    margin-bottom: 12px;
                    padding-bottom: 10px;
                    border-bottom: 1px solid #e2e8f0;
                }
                .roster-icon {
                    width: 38px;
                    height: 38px;
                    background: #dbeafe;
                    color: #1d4ed8;
                    border-radius: 8px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    font-size: 1.1rem;
                    flex-shrink: 0;
                }
                .roster-title {
                    font-size: 0.95rem;
                    font-weight: 700;
                    color: #0f172a;
                    margin: 0 0 2px 0;
                }
                .roster-meta-role {
                    font-size: 0.76rem;
                    color: #64748b;
                    margin: 0;
                }
                .roster-meta-role strong {
                    color: #166534;
                }

                /* Student List */
                .students-roster-list {
                    display: flex;
                    flex-direction: column;
                    gap: 8px;
                }
                .student-entry {
                    display: flex;
                    align-items: center;
                    gap: 10px;
                    background: #ffffff;
                    border: 1px solid #e2e8f0;
                    padding: 9px 12px;
                    border-radius: 6px;
                    transition: border-color 0.15s ease, background 0.15s ease;
                }
                .student-entry:hover {
                    border-color: #93c5fd;
                    background: #f0f7ff;
                }
                .entry-num {
                    font-family: var(--font-mono, monospace);
                    font-size: 0.74rem;
                    font-weight: 800;
                    color: #2563eb;
                    background: #eff6ff;
                    width: 26px;
                    height: 26px;
                    border-radius: 4px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    flex-shrink: 0;
                }
                .entry-details {
                    display: flex;
                    flex-direction: column;
                    gap: 1px;
                }
                .entry-name {
                    font-size: 0.88rem;
                    font-weight: 700;
                    color: #0f172a;
                    margin: 0;
                }
                .entry-course {
                    font-size: 0.74rem;
                    color: #64748b;
                    display: flex;
                    align-items: center;
                    gap: 5px;
                }
                .entry-course i {
                    font-size: 0.7rem;
                    color: #94a3b8;
                }

                @media (max-width: 768px) {
                    .article-modal-grid {
                        grid-template-columns: 1fr;
                        gap: 16px;
                    }
                    .article-modal-dialog {
                        padding: 18px 14px;
                        max-height: 94vh;
                    }
                    .modal-main-title {
                        font-size: 1.2rem;
                    }
                }
            </style>

            <script>
                (function() {
                    function initPlacementArticleModal() {
                        document.querySelectorAll('.trending-card-placement').forEach(function(card) {
                            var modal = card.querySelector('.article-modal-backdrop');
                            var closeBtn = card.querySelector('.article-modal-close');
                            if (!modal) return;

                            function openModal(e) {
                                if (e) {
                                    // don't open if clicking nested buttons/links inside modal
                                    if (e.target.closest('.modal-full-story-btn') || e.target.closest('.article-modal-dialog')) {
                                        return;
                                    }
                                    e.preventDefault();
                                }
                                modal.classList.add('is-open');
                                modal.setAttribute('aria-hidden', 'false');
                                document.body.style.overflow = 'hidden';
                            }

                            function closeModal(e) {
                                if (e) {
                                    e.preventDefault();
                                    e.stopPropagation();
                                }
                                modal.classList.remove('is-open');
                                modal.setAttribute('aria-hidden', 'true');
                                document.body.style.overflow = '';
                            }

                            // card click triggers
                            var triggers = card.querySelectorAll('.placement-thumb-trigger, .placement-info-trigger, .placement-open-link');
                            triggers.forEach(function(el) {
                                el.addEventListener('click', openModal);
                            });

                            if (closeBtn) {
                                closeBtn.addEventListener('click', closeModal);
                            }

                            // backdrop click outside dialog
                            modal.addEventListener('click', function(e) {
                                if (e.target === modal) {
                                    closeModal(e);
                                }
                            });

                            // escape key
                            document.addEventListener('keydown', function(e) {
                                if (e.key === 'Escape' && modal.classList.contains('is-open')) {
                                    closeModal(e);
                                }
                            });
                        });
                    }

                    if (document.readyState === 'loading') {
                        document.addEventListener('DOMContentLoaded', initPlacementArticleModal);
                    } else {
                        initPlacementArticleModal();
                    }

                    window.addEventListener('load', function() {
                        if (window.location.hash === '#trendingArticleRakutenPlacement') {
                            setTimeout(function() {
                                var el = document.getElementById('trendingArticleRakutenPlacement');
                                if (el) {
                                    el.scrollIntoView({behavior:'smooth',block:'start'});
                                    var tr = el.querySelector('.placement-open-link');
                                    if(tr) tr.click();
                                }
                            }, 300); // small delay to allow DOM/images to settle
                        }
                    });
                })();
            </script>
        </article>

        <!-- Item 8: Rakuten Symphony placement spotlight with modal -->
        <article class="trending-card trending-card-placement" data-id="11" data-category="campus" id="trendingArticleRakutenPlacement">
            <div class="trending-media placement-thumb-trigger" title="Click to view selected students">
                <img src="<?php echo $base_path; ?>SDSF_News/photoes_news/Rakuten_placed_students.jpeg" alt="Rakuten Symphony Selected Students">
                <span class="trend-rank">03</span>
                <span class="placement-hover-icon"><i class="fas fa-expand-alt"></i></span>
            </div>
            <div class="trending-info placement-info-trigger" title="Click to view selected students">
                <div class="placement-mini-pill">
                    <span class="pulse-dot"></span> Placements 2026
                </div>
                <h4 class="trending-title">
                    <a href="javascript:void(0)" class="placement-open-link">
                       Two SDSF Students Selected at Rakuten Symphony
                    </a>
                </h4>
                <div class="trending-meta">
                    <span class="trend-views"><i class="fas fa-user-graduate"></i> 2 Placed</span>
                    <span class="trend-date"><i class="far fa-clock"></i> 5th Sep 2026</span>
                </div>
            </div>

            <!-- Selected students modal -->
            <div id="articleRakutenPlacementPopup" class="article-modal-backdrop" aria-hidden="true">
                <div class="article-modal-dialog" role="dialog" aria-modal="true" aria-labelledby="rakutenPlacementPopupTitle">
                    <button type="button" class="article-modal-close" id="closeRakutenArticlePopupBtn" aria-label="Close details">&times;</button>

                    <div class="article-modal-header">
                        <div class="modal-badge-row">
                            <span class="modal-tag"><i class="fas fa-award"></i> Campus Placement Spotlight</span>
                            <span class="modal-company-pill"><i class="fas fa-building"></i> Rakuten Symphony</span>
                        </div>
                        <h3 id="rakutenPlacementPopupTitle" class="modal-main-title">Two SDSF Students Selected as Data Analysts</h3>
                        <p class="modal-sub-desc">
                            School of Data Science and Forecasting, DAVV Indore is proud to announce the selection of 2 talented students in the campus recruitment drive 2026.
                        </p>
                    </div>

                    <div class="article-modal-grid">
                        <div class="modal-poster-col">
                            <div class="poster-card-frame">
                                <img src="<?php echo $base_path; ?>SDSF_News/photoes_news/Rakuten_placed_students.jpeg" alt="Rakuten Symphony placed students poster" class="modal-poster-img">
                            </div>
                            <a href="<?php echo $base_path; ?>placement_news/placement_news.php" class="modal-full-story-btn">
                                <i class="fas fa-newspaper"></i> Read Full Placement Report <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>

                        <div class="modal-roster-col">
                            <div class="roster-header">
                                <div class="roster-icon"><i class="fas fa-user-graduate"></i></div>
                                <div>
                                    <h4 class="roster-title">Selected Candidates &amp; Programs</h4>
                                    <p class="roster-meta-role">Designation: <strong>Data Analyst</strong> | Batch 2024-2026</p>
                                </div>
                            </div>

                            <div class="students-roster-list">
                                <div class="student-entry">
                                    <span class="entry-num">01</span>
                                    <div class="entry-details">
                                        <h5 class="entry-name">Rajveer Singh</h5>
                                        <span class="entry-course"><i class="fas fa-graduation-cap"></i> MBA (Business Analytics)</span>
                                    </div>
                                </div>
                                <div class="student-entry">
                                    <span class="entry-num">02</span>
                                    <div class="entry-details">
                                        <h5 class="entry-name">Vikrant Singh</h5>
                                        <span class="entry-course"><i class="fas fa-graduation-cap"></i> MBA (Business Analytics)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <article class="trending-card vedant-trending-card" tabindex="0" role="button"
            aria-haspopup="dialog" aria-controls="vedantStoryModal"
            aria-label="Read: Kodith Kaijus win Best Use of Gemma 4">
            <div class="trending-media">
                <img src="<?php echo $base_path; ?>vedanthackotberfest.jpeg"
                    alt="Vedant Khare with his award at Hacktoberfest Hack Day" loading="lazy">
                <span class="trend-rank">04</span>
            </div>
            <div class="trending-info">
                <span class="vedant-story-kicker"><i class="fas fa-trophy" aria-hidden="true"></i> Hackathon win</span>
                <h4 class="trending-title">Kodith Kaijus win "Best Use of Gemma 4" at Hacktoberfest Hack Day by MLH x PyData Indore</h4>
                <div class="trending-meta">
                    <span class="trend-views"><i class="fas fa-award" aria-hidden="true"></i> Winner</span>
                    <span class="trend-date"><i class="far fa-clock" aria-hidden="true"></i> 4th Oct 2026</span>
                </div>
            </div>
        </article>

        <div class="vedant-story-modal" id="vedantStoryModal" hidden>
            <div class="vedant-story-dialog" role="dialog" aria-modal="true" aria-labelledby="vedantStoryTitle">
                <button type="button" class="vedant-story-close" aria-label="Close story">
                    <i class="fas fa-times" aria-hidden="true"></i>
                </button>
                <div class="vedant-story-photo">
                    <img src="<?php echo $base_path; ?>vedanthackotberfest.jpeg"
                        alt="Vedant Khare holding his Hacktoberfest Hack Day award">
                </div>
                <div class="vedant-story-copy">
                    <span class="vedant-story-modal-kicker"><i class="fas fa-trophy" aria-hidden="true"></i> Hacktoberfest Hack Day &bull; Challenge 01</span>
                    <h2 id="vedantStoryTitle">Kodith Kaijus win "Best Use of Gemma 4" at Hacktoberfest Hack Day by MLH x PyData Indore</h2>
                    <p>The team won Challenge 01 at the event, held at the Walkover Office on 4 October 2026. Team: Vedant Khare (School of Data Science and Forecasting, lead developer), Ayush Anand and Akshat Gupta (School of Instrumentation).</p>
                    <p>Their winning app, <strong>Parchi - From chat to clarity</strong>, turns messy WhatsApp group chats into one clean shopping list. It uses Google's Gemma 4 AI to read Hindi, English and Hinglish, apply cancellations and flag vague requests instead of guessing.</p>
                    <p>It works out who owes what and makes bills with the amount in words in the Indian number system. Crowdmind, the app's community feed for shops, groups and buyers, blocks OTP and UPI scams.</p>
                </div>
            </div>
        </div>
        <script>
            (function () {
                function initVedantStoryModal() {
                    const card = document.querySelector(".vedant-trending-card");
                    const modal = document.getElementById("vedantStoryModal");
                    if (!card || !modal) return;

                    document.body.appendChild(modal);

                    const dialog = modal.querySelector(".vedant-story-dialog");
                    const closeButton = modal.querySelector(".vedant-story-close");
                    let previousOverflow = "";

                    function openStory() {
                        previousOverflow = document.body.style.overflow;
                        modal.hidden = false;
                        document.body.style.overflow = "hidden";
                        closeButton.focus();
                    }

                    function closeStory() {
                        if (modal.hidden) return;
                        modal.hidden = true;
                        document.body.style.overflow = previousOverflow;
                        card.focus();
                    }

                    card.addEventListener("click", openStory);
                    card.addEventListener("keydown", function (event) {
                        if (event.key === "Enter" || event.key === " ") {
                            event.preventDefault();
                            openStory();
                        }
                    });
                    closeButton.addEventListener("click", closeStory);
                    dialog.addEventListener("click", function (event) {
                        event.stopPropagation();
                    });
                    modal.addEventListener("click", function (event) {
                        event.stopPropagation();
                        closeStory();
                    });
                    document.addEventListener("keydown", function (event) {
                        if (event.key === "Escape") closeStory();
                    });
                }

                if (document.readyState === "loading") {
                    document.addEventListener("DOMContentLoaded", initVedantStoryModal);
                } else {
                    initVedantStoryModal();
                }
            })();
        </script>

        <!-- Trending Item 0: Ganesh Visarjan -->
        <article class="trending-card" data-id="14" data-category="campus">
            <div class="trending-media">
                <a href="news.php?category=all#article-visarjan" onclick="if(window.filterByTopic){ window.filterByTopic('all'); } const el = document.getElementById('article-visarjan'); if(el) el.scrollIntoView({behavior:'smooth'}); return false;" title="View Ganesh Visarjan 2026 Story">
                    <img src="<?php echo $base_path; ?>SDSF_News/photoes_news/Ganesh Visarjan 2026/visarjan-2026-05.jpeg" alt="Ganesh Visarjan 2026: SDSF Bids Bappa a Heartfelt Farewell">
                </a>
                <span class="trend-rank" style="background: linear-gradient(135deg, #b45309 0%, #ea580c 100%); color: #ffffff;">05</span>
            </div>
            <div class="trending-info">
                <h4 class="trending-title">
                    <a href="news.php?category=all#article-visarjan" onclick="if(window.filterByTopic){ window.filterByTopic('all'); } const el = document.getElementById('article-visarjan'); if(el) el.scrollIntoView({behavior:'smooth'}); return false;">
                       Ganesh Visarjan 2026: SDSF Bids Bappa a Heartfelt Farewell
                    </a>
                </h4>
                <div class="trending-meta">
                    <span class="trend-views" style="color: #ea580c;"><i class="fas fa-om"></i> Campus &amp; Culture</span>
                    <span class="trend-date"><i class="far fa-clock"></i> 25th Sep 2026</span>
                </div>
            </div>
        </article>

        <!-- Trending Item 1: SDSF Ke Raja Ganesh Chaturthi Special -->
        <article class="trending-card" data-id="12" data-category="campus">
            <div class="trending-media">
                <a href="news.php?view=gallery" onclick="if(window.openNewsGalleryView){ window.openNewsGalleryView(); return false; }" title="View Event Photos in Gallery">
                    <img src="<?php echo $base_path; ?>SDSF_News/photoes_news/Ganesh Ji 2026.jpg" alt="SDSF Ke Raja 2026">
                </a>
                <span class="trend-rank" style="background: linear-gradient(135deg, #b45309 0%, #ea580c 100%); color: #ffffff;">06</span>
            </div>
            <div class="trending-info">
                <h4 class="trending-title">
                    <a href="news.php?category=all#article-ganesh" onclick="if(window.filterByTopic){ window.filterByTopic('all'); } const el = document.getElementById('article-ganesh'); if(el) el.scrollIntoView({behavior:'smooth'}); return false;">
                       SDSF Welcomes “SDSF Ke Raja” with Grandeur and Devotion
                    </a>
                </h4>
                <div class="trending-meta">
                    <span class="trend-views" style="color: #ea580c;"><i class="fas fa-om"></i> Campus &amp; Culture</span>
                    <span class="trend-date"><i class="far fa-clock"></i> 14th Sep 2026</span>
                </div>
            </div>
        </article>

        <!-- Trending Item 2: Certification Of Appreciation - Team Cypher X3 -->
        <article class="trending-card" data-id="cypher-x3" data-category="pace">
            <div class="trending-media">
                <a href="news.php?category=pace#pace-cypher-x3" onclick="if(window.filterByTopic){ window.filterByTopic('pace'); } setTimeout(function(){ var el = document.getElementById('pace-cypher-x3'); if(el) el.scrollIntoView({behavior:'smooth', block:'start'}); }, 120); return false;" title="Certification of Appreciation Presented to Team Cypher X3 at Aagaaz 26">
                    <img src="<?php echo htmlspecialchars($certif_appre_cover, ENT_QUOTES); ?>" alt="Certification Of Appreciation - Team Cypher X3 at Aagaaz 26">
                </a>
                <span class="trend-rank" style="background: linear-gradient(135deg, #b45309 0%, #f59e0b 100%); color: #ffffff;">06</span>
            </div>
            <div class="trending-info">
                <h4 class="trending-title">
                    <a href="news.php?category=pace#pace-cypher-x3" onclick="if(window.filterByTopic){ window.filterByTopic('pace'); } setTimeout(function(){ var el = document.getElementById('pace-cypher-x3'); if(el) el.scrollIntoView({behavior:'smooth', block:'start'}); }, 120); return false;">
                        Certification Of appreciation presented to Team Cypher X3 at AAgaaz 26
                    </a>
                </h4>
                <div class="trending-meta">
                    <span class="trend-views" style="color: #b45309;"><i class="fas fa-award"></i> PACE &bull; Felicitation</span>
                    <span class="trend-date"><i class="far fa-clock"></i> 17th Sep 2026</span>
                </div>
            </div>
        </article>

        <!-- Trending Item 3: SDSF Induction Aagaaz 26 -->
        <article class="trending-card" data-id="13" data-category="campus">
            <div class="trending-media">
                <a href="news.php?view=gallery#inductionGalleryBox" title="View the SDSF Induction Aagaaz 26 photo album">
                    <img src="<?php echo htmlspecialchars($induction_trending_cover, ENT_QUOTES); ?>" alt="SDSF Induction Aagaaz 26">
                </a>
                <span class="trend-rank">07</span>
            </div>
            <div class="trending-info">
                <h4 class="trending-title">
                    <a href="news.php?view=gallery#inductionGalleryBox">SDSF Induction Aagaaz 26: A Warm Welcome for the 2026 Batch</a>
                </h4>
                <div class="trending-meta">
                    <span class="trend-views"><i class="fas fa-user-graduate"></i> Campus &amp; Culture</span>
                    <span class="trend-date"><i class="far fa-clock"></i> 17th Sep 2026</span>
                </div>
            </div>
        </article>

        <!-- Trending Item 4 -->
        <article class="trending-card" data-id="9" data-category="pace">
            <div class="trending-media">
                <a href="news.php?category=pace" onclick="filterByTopic('pace'); return false;">
                    <img src="<?php echo $base_path; ?>SDSF_News/photoes_news/SIH255RunnerUps/SIH 25 runnerup.jpeg" alt="Featured Story">
                </a>
                <span class="trend-rank">08</span>
            </div>
            <div class="trending-info">
                <h4 class="trending-title">
                    <a href="news.php?category=pace" onclick="filterByTopic('pace'); return false;">
                       Smart India Hackathon 2025 (LNCT Bhopal): Runner-Up Guidance for Current Participants 
                    </a>
                </h4>
                <div class="trending-meta">
                    <span class="trend-views"><i class="far fa-eye"></i> Watch More</span>
                    <span class="trend-date"><i class="far fa-clock"></i> 5th Sep 2026</span>
                </div>
            </div>
        </article>

        
        <!-- Trending Item 5 -->
        <article class="trending-card" data-id="9" data-category="pace">
            <div class="trending-media">
                <a href="news.php?category=pace" onclick="filterByTopic('pace'); return false;">
                    <img src="<?php echo $base_path; ?>SDSF_News/photoes_news/Hack for green/team.jpeg" alt="Featured Story">
                </a>
                <span class="trend-rank">09</span>
            </div>
            <div class="trending-info">
                <h4 class="trending-title">
                    <a href="news.php?category=pace" onclick="filterByTopic('pace'); return false;">
                       Hack for Green भारत — India’s First AI Sustainability Hackathon Winners
                    </a>
                </h4>
                <div class="trending-meta">
                    <span class="trend-views"><i class="far fa-eye"></i> Watch More</span>
                    <span class="trend-date"><i class="far fa-clock"></i> 5th Sep 2026</span>
                </div>
            </div>
        </article>
       
        <!-- Trending Item 6 -->
        <article class="trending-card" data-id="9" data-category="pace">
            <div class="trending-media">
                <a href="news.php?category=pace" onclick="filterByTopic('pace'); return false;">
                    <img src="<?php echo $base_path; ?>SDSF_News/photoes_news/India-Israle/team.jpeg" alt="Featured Story">
                </a>
                <span class="trend-rank">10</span>
            </div>
            <div class="trending-info">
                <h4 class="trending-title">
                    <a href="news.php?category=pace" onclick="filterByTopic('pace'); return false;">
                       India - Israel Hackathon & Symposium: "The Circular Economy Water Challenge"
                    </a>
                </h4>
                <div class="trending-meta">
                    <span class="trend-views"><i class="far fa-eye"></i> Watch More</span>
                    <span class="trend-date"><i class="far fa-clock"></i> 5th Sep 2026</span>
                </div>
            </div>
        </article>

    </div>
</aside>
