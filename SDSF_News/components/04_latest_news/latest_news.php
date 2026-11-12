<!-- Column 1: Latest News sidebar -->
<?php
// Look for Induction 2026 images, pick the optimized or preferred shot for cover
$induction_latest_dir = __DIR__ . '/../../../photoes/Induction 2026';
$induction_latest_images = [];

if (is_dir($induction_latest_dir)) {
    foreach (scandir($induction_latest_dir) as $file) {
        if ($file !== '.' && $file !== '..' && preg_match('/\.(jpe?g|png|webp|gif)$/i', $file)) {
            $induction_latest_images[] = $file;
        }
    }
    natsort($induction_latest_images);
    $induction_latest_images = array_values($induction_latest_images);
}

// WhatsApp shot is lighter, use as default cover if present
$_preferred = 'IMG-20260918-WA0007.jpg';
if (file_exists($induction_latest_dir . '/' . $_preferred)) {
    $induction_latest_cover = $base_path . 'photoes/Induction 2026/' . rawurlencode($_preferred);
} elseif ($induction_latest_images) {
    $induction_latest_cover = $base_path . 'photoes/Induction 2026/' . rawurlencode($induction_latest_images[0]);
} else {
    $induction_latest_cover = $base_path . 'photoes/slide_image_event.jpeg';
}
?>
<aside class="grid-col col-latest" id="latestNewsCol">
    <div class="col-section-header">
        <h2 class="col-heading">Latest News</h2>
        <span class="col-header-line"></span>
    </div>

    <!-- Workshop Conducted: Cyber Security & Internet Ethics (MMTTC DAVV) -->
    <article class="news-card card-primary-col1" data-id="cyber_ethics" data-category="academic">
        <div class="card-media">
            <a href="news.php?category=all#article-cyber-ethics" onclick="if(window.filterByTopic){ filterByTopic('all'); } setTimeout(function(){ var el=document.getElementById('article-cyber-ethics'); if(el) el.scrollIntoView({behavior:'smooth',block:'start'}); },150); return false;">
                <img src="<?php echo $base_path; ?>SDSF_News/photoes_news/cyber_security_ethics_thumb.jpeg" alt="Workshop Conducted: Cyber security and Internet Ethics by MMTTC DAVV" loading="lazy">
            </a>
            <span class="card-badge badge-academic" style="background: #0284c7;"><i class="fas fa-shield-alt"></i> MMTTC DAVV</span>
        </div>
        <div class="card-body">
            <h3 class="card-title">
                <a href="news.php?category=all#article-cyber-ethics" onclick="if(window.filterByTopic){ filterByTopic('all'); } setTimeout(function(){ var el=document.getElementById('article-cyber-ethics'); if(el) el.scrollIntoView({behavior:'smooth',block:'start'}); },150); return false;">Workshop Conducted: Malaviya Mission Training Centre Holds Course in Cyber Security &amp; Internet Ethics</a>
            </h3>
            <p class="card-snippet">
                MMTTC (Formerly UGC-HRDC), DAVV in association with School of Data Science &amp; Forecasting (SDSF), coordinated by Dr. Govind Maheshwari, conducted an online Short Term Course (26–31 Oct 2026).
            </p>
            <div class="card-meta">
                <span><i class="far fa-clock"></i> Conducted: 26–31 Oct 2026</span>
                <span>&bull;</span>
                <span style="color: #0284c7; font-weight: 600;"><i class="fas fa-external-link-alt"></i> View Report &amp; Links</span>
            </div>
        </div>
    </article>


    <!-- Yash Mathur: DAVV Football Team Runners-Up at District Level -->
    <article class="news-card card-primary-col1" data-id="yash_football" data-category="campus" onclick="if(window.openYashFootballModal){ openYashFootballModal(); }" style="cursor: pointer;">
        <div class="card-media">
            <a href="javascript:void(0)" onclick="if(window.openYashFootballModal){ openYashFootballModal(); } return false;">
                <img src="<?php echo $base_path; ?>SDSF_News/photoes_news/YashMathurFOOTBALL.jpeg" alt="Yash Mathur Represents DAVV at District Football Championship" loading="lazy" style="object-position: 50% 20% !important;">
            </a>
            <span class="card-badge badge-academic" style="background: #16a34a;"><i class="fas fa-futbol"></i> Sports</span>
        </div>
        <div class="card-body">
            <h3 class="card-title">
                <a href="javascript:void(0)" onclick="if(window.openYashFootballModal){ openYashFootballModal(); } return false;">SDSF's Yash Mathur Clinches Runners-Up at District Men's Football Championship</a>
            </h3>
            <p class="card-snippet">
                Yash Mathur proudly represented the DAVV UTD Football Team at the District Level Men's Football Competition at Govt. College Rau, Indore, securing an outstanding Runners-Up finish.
            </p>
            <div class="card-meta">
                <span><i class="far fa-clock"></i> 30 Oct 2026</span>
            </div>
        </div>
    </article>
    <!-- Monthly Website Updates — Full Story Modal -->
    <div id="webUpdatesModal" class="yash-story-modal-backdrop" style="display:none;" onclick="if(event.target===this){ closeWebUpdatesModal(); }">
        <div class="yash-story-modal-dialog" role="dialog" aria-modal="true" aria-labelledby="webUpdatesModalTitle">
            <button type="button" class="yash-story-modal-close" onclick="closeWebUpdatesModal()" aria-label="Close notice">&times;</button>

            <!-- Decorative banner (no photo for this notice) -->
            <div style="background: linear-gradient(135deg, #1e3a5f 0%, #2563eb 100%); padding: 36px 28px 28px; text-align: center;">
                <i class="fas fa-laptop-code" style="font-size: 2.8rem; color: rgba(255,255,255,0.9); display: block; margin-bottom: 10px;"></i>
                <span style="color: rgba(255,255,255,0.7); font-size: 0.75rem; letter-spacing: 2px; text-transform: uppercase; font-family: var(--font-mono, monospace);">SDSF Chronicle &bull; Department Announcement</span>
            </div>

            <div class="yash-story-modal-body">
                <div class="yash-story-badge-row">
                    <span class="yash-story-badge" style="background: #2563eb;"><i class="fas fa-globe"></i> DEPARTMENT NOTICE &bull; WEBSITE</span>
                    <span class="yash-story-date"><i class="far fa-clock"></i> Open Anytime</span>
                </div>

                <h2 id="webUpdatesModalTitle" class="yash-story-title">
                    Monthly Website Updates
                </h2>

                <p class="yash-story-intro">
                    <em>Students are encouraged to submit updates about their achievements and projects to the SDSF tech team for consideration and possible publication on the department's official website.</em>
                </p>

                <div class="yash-story-content">
                    <p>
                        The School of Data Science and Forecasting (SDSF) invites all students to share updates about their personal academic achievements and recently completed projects. Selected submissions will be published on the official SDSF department website.
                    </p>
                    <p>
                        Eligible submissions may include academic accomplishments, independently developed software or data science projects, research contributions, or any other noteworthy work undertaken by a student of SDSF.
                    </p>

                    <div class="yash-highlights-box" style="border-color: #bfdbfe; background: #eff6ff;">
                        <h4 class="yash-highlights-title" style="color: #1d4ed8;"><i class="fas fa-info-circle" style="color: #2563eb;"></i> Submission Guidelines</h4>
                        <ul class="yash-highlights-list">
                            <li>Send your submission by email to the tech team at the addresses listed below.</li>
                            <li>All submissions are received and retained as a departmental record.</li>
                            <li>Only selected, noteworthy submissions will be published on the official website.</li>
                            <li>Students whose submissions are selected will receive a reply email from the tech team.</li>
                        </ul>
                    </div>

                    <div class="yash-highlights-box" style="border-color: #bfdbfe; background: #f0f9ff; margin-top: 14px;">
                        <h4 class="yash-highlights-title" style="color: #1d4ed8;"><i class="fas fa-envelope" style="color: #2563eb;"></i> Contact &mdash; Tech Team</h4>
                        <ul class="yash-highlights-list" style="list-style: none; padding-left: 0;">
                            <li style="padding: 6px 0; border-bottom: 1px solid #dbeafe;">
                                <strong>Tech Lead</strong>&nbsp;&mdash;&nbsp;<a href="mailto:joyobratadas.85912@gmail.com" style="color: #2563eb; word-break: break-all;">joyobratadas.85912@gmail.com</a>
                            </li>
                            <li style="padding: 6px 0; border-bottom: 1px solid #dbeafe;">
                                <strong>Tech Lead 2.0</strong>&nbsp;&mdash;&nbsp;<a href="mailto:omsinghlodhi21@gmail.com" style="color: #2563eb; word-break: break-all;">omsinghlodhi21@gmail.com</a>
                            </li>
                            <li style="padding: 6px 0;">
                                <strong>Tech Lead 3.0</strong>&nbsp;&mdash;&nbsp;<a href="mailto:aliviahossain12@gmail.com" style="color: #2563eb; word-break: break-all;">aliviahossain12@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openWebUpdatesModal() {
            var modal = document.getElementById('webUpdatesModal');
            if (!modal) return;
            modal.style.display = 'flex';
            document.body.style.overflow = 'hidden';
            if (window.markNotifWebUpdatesRead) {
                window.markNotifWebUpdatesRead();
            } else {
                try { localStorage.setItem('sdsf_web_updates_notif_read_v1', 'true'); } catch(e){}
                var b = document.getElementById('notifBadge');
                if (b) b.classList.add('notif-badge-hidden');
            }
        }
        function closeWebUpdatesModal() {
            var modal = document.getElementById('webUpdatesModal');
            if (!modal) return;
            modal.style.display = 'none';
            document.body.style.overflow = '';
        }
        window.openWebUpdatesModal = openWebUpdatesModal;
        window.closeWebUpdatesModal = closeWebUpdatesModal;
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') { closeWebUpdatesModal(); }
        });
    </script>

         <!-- The Next Wave: GDG SDSF Core Team Recruitment -->
    <article class="news-card card-primary-col1" data-id="gdg_recruitment" data-category="campus">
        <div class="card-media">
            <a href="news.php?category=all#article-gdg-recruitment" onclick="if(window.filterByTopic){ filterByTopic('all'); } setTimeout(function(){ var el=document.getElementById('article-gdg-recruitment'); if(el) el.scrollIntoView({behavior:'smooth',block:'start'}); },150); return false;">
                <img src="<?php echo $base_path; ?>SDSF_News/photoes_news/GDG Team Recruitment 2026/1.jpeg" alt="The Next Wave: GDG SDSF Core Team Recruitment" loading="lazy">
            </a>
            <span class="card-badge badge-academic">GDG</span>
        </div>
        <div class="card-body">
            <h3 class="card-title">
                <a href="news.php?category=all#article-gdg-recruitment" onclick="if(window.filterByTopic){ filterByTopic('all'); } setTimeout(function(){ var el=document.getElementById('article-gdg-recruitment'); if(el) el.scrollIntoView({behavior:'smooth',block:'start'}); },150); return false;">The Next Wave: GDG SDSF Core Team Recruitment</a>
            </h3>
            <p class="card-snippet">
                Join GDGoC SDSF for a community info session to learn about GDG, meet new organizers, and discover how to join the GDG SDSF Core Team.
            </p>
            <div class="card-meta">
                <span><i class="far fa-clock"></i> 9 Oct 2026</span>
            </div>
        </div>
    </article>

         <!-- Ganesh Visarjan 2026 -->
    <article class="news-card card-primary-col1" data-id="14" data-category="campus">
        <div class="card-media">
            <a href="news.php?category=all#article-visarjan" onclick="if(window.filterByTopic){ filterByTopic('all'); } setTimeout(function(){ var el=document.getElementById('article-visarjan'); if(el) el.scrollIntoView({behavior:'smooth',block:'start'}); },150); return false;">
                <img src="<?php echo $base_path; ?>SDSF_News/photoes_news/Ganesh Visarjan 2026/visarjan-2026-05.jpeg" alt="Ganesh Visarjan 2026: SDSF Bids Bappa a Heartfelt Farewell" loading="lazy" style="object-position: 50% 65% !important;">
            </a>
            <span class="card-badge badge-academic">Visarjan</span>
        </div>
        <div class="card-body">
            <h3 class="card-title">
                <a href="news.php?category=all#article-visarjan" onclick="if(window.filterByTopic){ filterByTopic('all'); } setTimeout(function(){ var el=document.getElementById('article-visarjan'); if(el) el.scrollIntoView({behavior:'smooth',block:'start'}); },150); return false;">Ganesh Visarjan 2026: SDSF Bids Bappa a Heartfelt Farewell</a>
            </h3>
            <p class="card-snippet">
                SDSF students bid farewell to Lord Ganesha on 25th September 2026 with aarti, havan and dance, as Bappa was taken around the entire campus.
            </p>
            <div class="card-meta">
                <span><i class="far fa-clock"></i> 25 Sept 2026</span>
            </div>
        </div>
    </article>

         <!-- SDSF Induction Aagaaz 26 -->
    <article class="news-card card-primary-col1" data-id="13" data-category="campus">
        <div class="card-media">
            <a href="news.php?category=campus#campusAagaaz26" onclick="if(window.filterByTopic){ filterByTopic('campus'); } setTimeout(function(){ var el=document.getElementById('campusAagaaz26'); if(el) el.scrollIntoView({behavior:'smooth',block:'start'}); },150); return false;">
                <img src="<?php echo htmlspecialchars($induction_latest_cover, ENT_QUOTES); ?>" alt="SDSF Induction Aagaaz 26" loading="lazy">
            </a>
            <span class="card-badge badge-academic">Induction</span>
        </div>
        <div class="card-body">
            <h3 class="card-title">
                <a href="news.php?category=campus#campusAagaaz26" onclick="if(window.filterByTopic){ filterByTopic('campus'); } setTimeout(function(){ var el=document.getElementById('campusAagaaz26'); if(el) el.scrollIntoView({behavior:'smooth',block:'start'}); },150); return false;">SDSF Induction Aagaaz 26 Welcomes the 2026 Batch</a>
            </h3>
            <p class="card-snippet">
                Aagaaz 26 gave the new batch a warm start with faculty interactions, shared campus moments, and an inspiring introduction to life at SDSF.
            </p>
            <div class="card-meta">
                <span><i class="far fa-clock"></i> 17 Sept 2026</span>
            </div>
        </div>
    </article>

    <!-- Lead Story in Column 1 Orange Data Tech -->
    <article class="news-card card-primary-col1" data-id="1" data-category="home">
        <div class="card-media">
            <a href="news.php?category=all" onclick="filterByTopic('all'); const card = document.getElementById('featured-lead-article-orange-tech'); if (card) card.scrollIntoView({behavior:'smooth'}); return false;">
                <img src="<?php echo $base_path; ?>SDSF_News/photoes_news/Orange_Tech.png" alt="Orange Data Tech Campus Placement Drive" loading="lazy">
            </a>
            <span class="card-badge badge-academic">Placement</span>
        </div>
        <div class="card-body">
            <h3 class="card-title">
                <a href="news.php?category=all" onclick="filterByTopic('all'); const card = document.getElementById('featured-lead-article-orange-tech'); if (card) card.scrollIntoView({behavior:'smooth'}); return false;">
                    SDSF Students Selected at Orange Data Tech Through Campus Hiring Drive
                </a>
            </h3>
            <p class="card-snippet">
                The recruitment drive provided students with an excellent opportunity to
                 demonstrate their analytical, technical, problem-solving, and communication skills. 
                 The selection process included multiple stages designed to assess the candidates'
                  aptitude, technical knowledge, and suitability for the respective roles.

            </p>
            <div class="card-meta">
                <span><i class="far fa-clock"></i> 2 Sept 2026</span>
            </div>
        </div>
    </article>

    <!-- Culture Program / Campus Life -->
    <article class="news-card card-primary-col1" data-id="1" data-category="campus">
        <div class="card-media">
            <a href="news.php?category=campus" onclick="filterByTopic('campus'); return false;">
                <img src="<?php echo $base_path; ?>SDSF_News/photoes_news/slide_image_event.jpeg" alt="Academic Collaboration" loading="lazy">
            </a>
            <span class="card-badge badge-academic">Events</span>
        </div>
        <div class="card-body">
            <h3 class="card-title">
                <a href="news.php?category=campus" onclick="filterByTopic('campus'); return false;">
                    Where Culture Comes Alive
                </a>
            </h3>
            <p class="card-snippet">
                A vibrant celebration of tradition, talent,
                and togetherness by the School of Data Science & Forecasting at the Sfoorti DAVV.
            </p>
        </div>
    </article>

    <!-- Column feed items -->
    <div class="col1-feed-list">
        <article class="feed-item" data-id="2" data-category="pace">
            <div class="feed-content">
                <span class="feed-tag tag-hackathon">Pace</span>
                <h4 class="feed-title">
                    <a href="news.php?category=pace" onclick="filterByTopic('pace'); return false;">
                        Encouraging Student Lead Ideas and monthly show case of Student Projects 
                    </a>
                </h4>
                <div class="feed-meta">
                    <span><i class="far fa-eye"></i> See Details</span>
                    <span>&bull;</span>
                    <span><i class="far fa-clock"></i> Issued on 05/10/26</span>
                </div>
            </div>
        </article>
    </div>

    <!-- Yash Mathur Football Achievement Story Modal Popup -->
    <div id="yashFootballModal" class="yash-story-modal-backdrop" style="display:none;" onclick="if(event.target===this){ closeYashFootballModal(); }">
        <div class="yash-story-modal-dialog" role="dialog" aria-modal="true" aria-labelledby="yashModalTitle">
            <button type="button" class="yash-story-modal-close" onclick="closeYashFootballModal()" aria-label="Close story">&times;</button>
            
            <div class="yash-story-modal-media">
                <img src="<?php echo $base_path; ?>SDSF_News/photoes_news/YashMathurFOOTBALL.jpeg" alt="Yash Mathur — DAVV UTD Football Team, District Level Championship" style="object-position: 50% 20% !important;">
                <div class="yash-story-media-caption">
                    <i class="fas fa-camera"></i> Yash Mathur &bull; District Level Men's Football Championship &bull; Govt. College Rau, Indore &bull; 28–30 Oct 2026
                </div>
            </div>

            <div class="yash-story-modal-body">
                <div class="yash-story-badge-row">
                    <span class="yash-story-badge"><i class="fas fa-futbol"></i> CAMPUS &amp; CULTURE &bull; SPORTS ACHIEVEMENT</span>
                    <span class="yash-story-date"><i class="far fa-clock"></i> 30/10/2026</span>
                </div>

                <h2 id="yashModalTitle" class="yash-story-title">
                    🏆 SDSF's Yash Mathur Clinches Runners-Up at District Men's Football Championship
                </h2>

                <p class="yash-story-intro">
                    <em>Representing DAVV UTD with pride, Yash Mathur brings home silver from the District Level Men's Football Competition held at Govt. College Rau, Indore.</em>
                </p>

                <div class="yash-story-byline">
                    <div class="yash-byline-author">
                        <i class="fas fa-feather-alt"></i> Blog By <strong>Om Singh Lodhi</strong> (M.Tech AI&amp;DS)
                    </div>
                    <div class="yash-byline-meta">
                        <span><i class="far fa-calendar-alt"></i> 30 October 2026</span>
                        <span>&bull;</span>
                        <span><i class="fas fa-map-marker-alt"></i> Govt. College Rau, Indore</span>
                    </div>
                </div>

                <div class="yash-story-content">
                    <p>
                        The School of Data Science and Forecasting (SDSF), DAVV, is proud to celebrate the achievement of its student <strong>Yash Mathur</strong>, who represented the <strong>DAVV UTD Football Team</strong> at the prestigious <strong>District Level Men's Football Competition</strong> held at Government College, Rau, Indore, from <strong>28th to 30th October 2026</strong>.
                    </p>
                    <p>
                        Competing against teams from across the district, Yash and the DAVV UTD squad demonstrated exceptional skill, teamwork, and competitive spirit throughout the tournament. The team's stellar run in the competition culminated in a well-deserved <strong>Runners-Up (Second Position)</strong> finish — a remarkable feat that reflects both individual talent and collective effort on the field.
                    </p>

                    <div class="yash-highlights-box">
                        <h4 class="yash-highlights-title"><i class="fas fa-star"></i> Achievement Highlights</h4>
                        <ul class="yash-highlights-list">
                            <li><strong>Tournament:</strong> District Level Men's Football Competition</li>
                            <li><strong>Venue:</strong> Government College, Rau, Indore</li>
                            <li><strong>Duration:</strong> 28th – 30th October 2026</li>
                            <li><strong>Result:</strong> 🥈 Runners-Up (Second Position)</li>
                            <li><strong>Team:</strong> DAVV UTD Football Team</li>
                        </ul>
                    </div>

                    <p>
                        This achievement is a testament to Yash's dedication and passion for the sport, and SDSF proudly extends its heartfelt congratulations to him. We look forward to seeing him continue to represent DAVV and SDSF on bigger stages in the future. 🎉⚽
                    </p>
                </div>
            </div>
        </div>
    </div>

    <style>
        .yash-story-modal-backdrop {
            position: fixed !important;
            inset: 0 !important;
            width: 100vw !important;
            height: 100vh !important;
            background: rgba(11, 19, 43, 0.85);
            backdrop-filter: blur(6px);
            -webkit-backdrop-filter: blur(6px);
            z-index: 9999999 !important;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            box-sizing: border-box;
            animation: yashModalFadeIn 0.2s ease-out;
        }
        @keyframes yashModalFadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .yash-story-modal-dialog {
            position: relative;
            background: #ffffff;
            width: 100%;
            max-width: 780px;
            max-height: 90vh;
            overflow-y: auto;
            border-radius: 12px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.4);
            box-sizing: border-box;
            border: 1px solid #e2e8f0;
            animation: yashModalSlideUp 0.25s cubic-bezier(0.16, 1, 0.3, 1);
        }
        @keyframes yashModalSlideUp {
            from { transform: scale(0.96) translateY(12px); opacity: 0; }
            to { transform: scale(1) translateY(0); opacity: 1; }
        }
        .yash-story-modal-close {
            position: absolute;
            top: 14px;
            right: 14px;
            width: 36px;
            height: 36px;
            background: #ffffff;
            border: 1px solid #cbd5e1;
            border-radius: 50%;
            font-size: 1.4rem;
            line-height: 1;
            color: #334155;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s ease;
            z-index: 20;
            box-shadow: 0 2px 6px rgba(0,0,0,0.15);
        }
        .yash-story-modal-close:hover {
            background: #dc2626;
            color: #ffffff;
            border-color: #dc2626;
            transform: rotate(90deg);
        }
        .yash-story-modal-media {
            width: 100%;
            background: #0f172a;
            position: relative;
        }
        .yash-story-modal-media img {
            width: 100%;
            max-height: 420px;
            object-fit: cover;
            display: block;
        }
        .yash-story-media-caption {
            padding: 8px 16px;
            background: #f8fafc;
            border-bottom: 1px solid #e2e8f0;
            font-size: 0.76rem;
            color: #64748b;
        }
        .yash-story-modal-body {
            padding: 24px 28px 28px;
        }
        .yash-story-badge-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
            flex-wrap: wrap;
            margin-bottom: 10px;
        }
        .yash-story-badge {
            background: #16a34a;
            color: #ffffff;
            padding: 4px 10px;
            border-radius: 4px;
            font-weight: 700;
            font-size: 0.72rem;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }
        .yash-story-date {
            font-size: 0.78rem;
            color: #64748b;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }
        .yash-story-title {
            font-family: var(--font-headline, 'Playfair Display', serif);
            font-size: 1.55rem;
            font-weight: 800;
            color: #0b132b;
            line-height: 1.3;
            margin: 0 0 10px 0;
        }
        .yash-story-intro {
            font-size: 0.95rem;
            color: #334155;
            font-style: italic;
            line-height: 1.55;
            margin: 0 0 16px 0;
        }
        .yash-story-byline {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
            padding: 10px 14px;
            background: #f8fafc;
            border-left: 3px solid #16a34a;
            border-radius: 4px;
            font-size: 0.82rem;
            color: #475569;
            margin-bottom: 20px;
        }
        .yash-byline-author i {
            color: #16a34a;
            margin-right: 4px;
        }
        .yash-story-content p {
            font-size: 0.95rem;
            line-height: 1.7;
            color: #1e293b;
            margin: 0 0 14px 0;
        }
        .yash-highlights-box {
            background: #f0fdf4;
            border: 1px solid #bbf7d0;
            border-radius: 8px;
            padding: 16px 20px;
            margin: 18px 0;
        }
        .yash-highlights-title {
            margin: 0 0 10px 0;
            color: #166534;
            font-size: 0.95rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .yash-highlights-title i {
            color: #eab308;
        }
        .yash-highlights-list {
            margin: 0;
            padding-left: 20px;
            color: #1e293b;
            font-size: 0.88rem;
            line-height: 1.8;
        }
        @media (max-width: 640px) {
            .yash-story-modal-body {
                padding: 18px 16px 22px;
            }
            .yash-story-title {
                font-size: 1.25rem;
            }
        }
    </style>

    <script>
        function openYashFootballModal() {
            var modal = document.getElementById('yashFootballModal');
            if (!modal) return;
            modal.style.display = 'flex';
            document.body.style.overflow = 'hidden';
        }
        function closeYashFootballModal() {
            var modal = document.getElementById('yashFootballModal');
            if (!modal) return;
            modal.style.display = 'none';
            document.body.style.overflow = '';
        }
        window.openYashFootballModal = openYashFootballModal;
        window.closeYashFootballModal = closeYashFootballModal;
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeYashFootballModal();
            }
        });
    </script>

</aside>
