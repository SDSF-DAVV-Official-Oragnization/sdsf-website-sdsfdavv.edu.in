<!-- ==============================================
     FEATURED VIEW: HOME (All Featured Stories Feed)
     ============================================== -->
<div class="featured-category-view" id="featured-view-home">

    <?php
    $visarjan_count_featured = 0;
    $visarjan_chk_dir = __DIR__ . '/../../../photoes_news/Ganesh Visarjan 2026';
    if (is_dir($visarjan_chk_dir)) {
        $fls = scandir($visarjan_chk_dir);
        foreach ($fls as $fl) {
            if ($fl === '.' || $fl === '..')
                continue;
            $ext = strtolower(pathinfo($fl, PATHINFO_EXTENSION));
            if (in_array($ext, ['jpg', 'jpeg', 'png', 'webp', 'gif'])) {
                $visarjan_count_featured++;
            }
        }
    }
    ?>

    <!-- Workshop Conducted: Malaviya Mission Training Centre (Featured Story) -->
    <article class="featured-lead-article-ganesh" id="article-cyber-ethics" data-id="cyber_ethics" data-category="academic">
        <div class="lead-editorial-body" style="padding-top: 4px;">
            <div class="lead-badge-row">
                <span class="lead-category-badge lead-festive-badge" style="background: #0284c7; color: white;"><i class="fas fa-shield-alt"></i> UGC-HRDC &bull; WORKSHOP CONDUCTED</span>
                <span class="read-time-pill"><i class="far fa-clock"></i> 26–31 Oct 2026</span>
            </div>

            <h1 class="lead-main-headline" style="font-size: 1.65rem; line-height: 1.25; margin-top: 8px;">
                Malaviya Mission Teacher Training Centre, DAVV in Association with School of Data Science and Forecasting Conducts Short Term Course in Cyber Security and Internet Ethics
            </h1>

            <p class="lead-sub-title-intro">
                <em>Organized by Malaviya Mission Teacher Training Centre (Formerly UGC-HRDC), DAVV Indore <strong style="color: #0f172a;">in association with School of Data Science and Forecasting (SDSF)</strong> &bull; Coordinator: <strong style="color: #0f172a;">Dr. Govind Maheshwari</strong></em>
            </p>

            <div class="lead-byline-bar">
                <div class="author-info">
                    <i class="fas fa-university"></i> Organized by <strong>MMTTC (UGC-HRDC), DAVV</strong> in association with <strong>School of Data Science &amp; Forecasting (SDSF)</strong>
                </div>
                <div class="lead-meta-details">
                    <span><i class="fas fa-user-tie"></i> Coordinator: <strong>Dr. Govind Maheshwari</strong></span>
                    <span>&bull;</span>
                    <span><i class="fas fa-laptop"></i> Online Mode</span>
                    <span>&bull;</span>
                    <span><i class="far fa-calendar-alt"></i> 26 Oct – 31 Oct 2026</span>
                </div>
            </div>

            <p class="lead-summary-para">
                The Malaviya Mission Teacher Training Centre (formally UGC-HRDC), Devi Ahilya Vishwavidyalaya, Indore (M.P.), in association with the <strong>School of Data Science &amp; Forecasting (SDSF)</strong>, successfully conducted a dedicated Short Term Course on <strong>Cyber Security and Internet Ethics</strong> from <strong>26th to 31st October 2026</strong> in <strong>Online Mode</strong>. The course was coordinated by <strong>Dr. Govind Maheshwari</strong> (Head, School of Data Science &amp; Forecasting, DAVV). The comprehensive program empowered educators and faculty members with practical skills to navigate today's dynamic digital threat landscape and maintain rigorous ethical standards in academia.
            </p>

            <div class="lead-highlights-box" style="margin-top: 15px; background: #f0f9ff; border: 1px solid #bae6fd;">
                <h4 class="highlights-title" style="color: #0369a1;"><i class="fas fa-bullseye"></i> Key Course Objectives</h4>
                <ul class="highlights-list">
                    <li>To equip faculty with practical cybersecurity and digital ethics skills to protect personal and institutional data.</li>
                    <li>To enable educators to integrate internet ethics, safe browsing, and data privacy principles seamlessly into their everyday academic teaching.</li>
                </ul>
            </div>

            <div class="course-schedule-card" style="margin-top: 15px; padding: 14px 18px; background: #fafaf9; border: 1px solid #e7e5e4; border-radius: 8px; font-size: 0.9rem; line-height: 1.6;">
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 12px;">
                    <div><strong><i class="fas fa-hands-helping" style="color:#0284c7;"></i> In Association With:</strong> School of Data Science &amp; Forecasting (SDSF)</div>
                    <div><strong><i class="fas fa-user-tie" style="color:#0f766e;"></i> Course Coordinator:</strong> Dr. Govind Maheshwari</div>
                    <div><strong><i class="fas fa-ticket-alt" style="color:#059669;"></i> Course Fee:</strong> <span style="color:#059669; font-weight:700;">No Registration Fee (Limited Seats)</span></div>
                    <div><strong><i class="fas fa-broadcast-tower" style="color:#2563eb;"></i> Course Mode:</strong> Online Mode</div>
                    <div><strong><i class="far fa-clock" style="color:#d97706;"></i> Daily Schedule:</strong> 10:00 AM – 1:00 PM &amp; 2:00 PM – 5:00 PM</div>
                    <div><strong><i class="far fa-calendar-check" style="color:#7c3aed;"></i> Duration:</strong> 26-Oct-2026 to 31-Oct-2026</div>
                </div>
            </div>

            <div class="lead-highlights-box" style="margin-top: 15px;">
                <h4 class="highlights-title"><i class="fas fa-clipboard-check"></i> Essential Requirements for Online Participants</h4>
                <ul class="highlights-list">
                    <li>NOC / Permission from Participant's Institute</li>
                    <li>Desktop / Laptop with reliable high-speed Internet connectivity</li>
                    <li>Webcam, Headphone / Microphone</li>
                </ul>
            </div>

            <div class="registration-links-section" style="margin-top: 14px; padding: 12px 16px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 6px;">
                <div style="text-align: center; margin-bottom: 8px;">
                    <span style="display: inline-block; background: #e0f2fe; color: #0369a1; border: 1px solid #bae6fd; font-size: 0.65rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.4px; padding: 2px 8px; border-radius: 10px;">
                        <i class="fas fa-archive"></i> Program Reference &amp; Portal Archive
                    </span>
                </div>
                <div style="display: flex; flex-wrap: wrap; justify-content: center; align-items: center; gap: 18px;">
                    <div style="text-align: center;">
                        <span style="display: block; font-size: 0.72rem; font-weight: 600; color: #475569; margin-bottom: 3px;">Scan QR Code</span>
                        <img src="<?php echo $base_path; ?>SDSF_News/photoes_news/cyber_security_qr_code.png" alt="Scan to Registration QR Code" style="width: 78px; height: 78px; object-fit: contain; border: 1px solid #cbd5e1; border-radius: 4px; padding: 3px; background: #ffffff;">
                    </div>
                    <div style="text-align: left; line-height: 1.45; font-size: 0.8rem;">
                        <div style="margin-bottom: 5px;">
                            <strong style="color: #0f172a;">Registration Form Link:-</strong>
                            <a href="https://mmc.ugc.ac.in" target="_blank" rel="noopener noreferrer" style="color: #2563eb; text-decoration: underline; margin-left: 4px; word-break: break-all;">https://mmc.ugc.ac.in</a>
                        </div>
                        <div style="margin-bottom: 5px;">
                            <strong style="color: #0f172a;">Registration Manual :-</strong>
                            <a href="https://tinyurl.com/yu3b4nf5" target="_blank" rel="noopener noreferrer" style="color: #2563eb; text-decoration: underline; margin-left: 4px; word-break: break-all;">https://tinyurl.com/yu3b4nf5</a>
                        </div>
                        <div style="margin-bottom: 5px;">
                            <strong style="color: #0f172a;">Registration Manual Video :-</strong>
                            <a href="https://tinyurl.com/4cy43zsj" target="_blank" rel="noopener noreferrer" style="color: #2563eb; text-decoration: underline; margin-left: 4px; word-break: break-all;">https://tinyurl.com/4cy43zsj</a>
                        </div>
                        <div>
                            <strong style="color: #0f172a;">NOC Format :-</strong>
                            <a href="https://tinyurl.com/yu3b4nf5" target="_blank" rel="noopener noreferrer" style="color: #2563eb; text-decoration: underline; margin-left: 4px; word-break: break-all;">https://tinyurl.com/yu3b4nf5</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-info-footer" style="margin-top: 16px; padding: 12px 16px; background: #ffffff; border-left: 4px solid #0284c7; border-radius: 4px; font-size: 0.84rem; color: #334155; line-height: 1.6;">
                <strong><i class="fas fa-address-book" style="color: #0284c7;"></i> Organizing Committee &amp; Contact Desk:</strong><br>
                <span><strong>Organized by:</strong> Malaviya Mission Teacher Training Centre (Formerly UGC-HRDC), DAVV Indore in association with School of Data Science &amp; Forecasting (SDSF)</span><br>
                <span><strong>Course Coordinator:</strong> Dr. Govind Maheshwari (Head, School of Data Science &amp; Forecasting, DAVV)</span><br>
                <span><strong>Website:</strong> <a href="https://hrdcindoredauniv.in/" target="_blank" rel="noopener noreferrer" style="color: #0284c7;">https://hrdcindoredauniv.in/</a></span> &bull;
                <span><strong>Email:</strong> <a href="mailto:ugcascindore@gmail.com" style="color: #0284c7;">ugcascindore@gmail.com</a></span> &bull;
                <span><strong>Contact No.:</strong> 0731-2462069</span> &bull;
                <span><strong>WhatsApp:</strong> 8085558237</span>
            </div>
        </div>
    </article>

    <!-- The Next Wave: GDG SDSF Core Team Recruitment (Featured Story) -->
    <article class="featured-lead-article-ganesh" id="article-gdg-recruitment" data-id="gdg_recruitment" data-category="campus">
        <div class="lead-media-wrapper-ganesh">
            <a href="news.php?view=gallery"
                onclick="if(window.openNewsGalleryView){ window.openNewsGalleryView(); return false; }"
                title="Click to view event gallery photos">
                <img src="<?php echo $base_path; ?>SDSF_News/photoes_news/GDG Team Recruitment 2026/1.jpeg"
                    alt="The Next Wave: GDG SDSF Core Team Recruitment" class="lead-main-img" style="object-position: 50% 30% !important;">
            </a>
            <div class="lead-img-caption">
                <span><i class="fas fa-camera"></i> GDG SDSF Core Team Recruitment &bull; 9th October 2026</span>
            </div>
        </div>

        <div class="lead-editorial-body">
            <div class="lead-badge-row">
                <span class="lead-category-badge lead-festive-badge" style="background: #4285F4; color: white;"><i class="fab fa-google"></i> CAMPUS &amp; CULTURE
                    &bull; GDG SDSF</span>
                <span class="read-time-pill"><i class="far fa-clock"></i> 09/10/2026</span>
            </div>

            <h1 class="lead-main-headline" style="font-size: 1.65rem; line-height: 1.25; margin-top: 8px;">
                <a href="news.php?view=gallery"
                    onclick="if(window.openNewsGalleryView){ window.openNewsGalleryView(); return false; }">
                    The Next Wave: GDG SDSF Core Team Recruitment
                </a>
            </h1>

            <p class="lead-sub-title-intro">
                <em>Join GDGoC SDSF for a community info session to learn about GDG, meet new organizers, and celebrate past contributions.</em>
            </p>

            <div class="lead-byline-bar">
                <div class="author-info">
                    <i class="fas fa-feather-alt"></i> Blog By <strong>Om Singh Lodhi</strong> (M.Tech AI&DS)
                </div>
                <div class="lead-meta-details">
                    <span><i class="far fa-calendar-alt"></i> 9 October 2026</span>
                    <span>&bull;</span>
                    <span><i class="fas fa-map-marker-alt"></i> Seminar Hall, SDSF, DAVV</span>
                </div>
            </div>

            <p class="lead-summary-para">
                The Next Wave is here! 🌊 Join GDGoC SDSF for an exciting community info session as we begin a new chapter. Get to know what GDG is all about, meet our new organizers, celebrate the contributions of the previous core team, and discover how you can become a part of the next GDG SDSF Core Team.
                <br><br>
                From leadership and networking to hands-on opportunities and community experiences, learn what it takes to Explore, Create, Collaborate & Grow with GDG.
            </p>

            <div class="lead-highlights-box" style="margin-top: 15px;">
                <h4 class="highlights-title"><i class="fas fa-star"></i> What's in store?</h4>
                <ul class="highlights-list">
                    <li>Know more about GDG &amp; Meet the new organizers</li>
                    <li>Learn about Core Team recruitment</li>
                    <li>Discover opportunities &amp; perks</li>
                    <li>Take part in a fun quiz</li>
                </ul>
            </div>

            <p class="lead-summary-para" style="margin-top: 14px;">
                <strong>Time:</strong> 1:00 PM onwards<br>
                <strong>Venue:</strong> Seminar Hall, SDSF, DAVV Indore
            </p>

            <?php
            $gdg_count_featured = 0;
            $gdg_chk_dir = __DIR__ . '/../../../photoes_news/GDG Team Recruitment 2026';
            if (is_dir($gdg_chk_dir)) {
                $fls = scandir($gdg_chk_dir);
                foreach ($fls as $fl) {
                    if ($fl === '.' || $fl === '..') continue;
                    $ext = strtolower(pathinfo($fl, PATHINFO_EXTENSION));
                    if (in_array($ext, ['jpg', 'jpeg', 'png', 'webp', 'gif'])) {
                        $gdg_count_featured++;
                    }
                }
            }
            ?>
            <div class="lead-action-row" style="margin-top: 15px;">
                <a href="news.php?view=gallery"
                    onclick="if(window.openNewsGalleryView){ window.openNewsGalleryView('gdgGalleryBox'); return false; }"
                    class="btn-view-gallery-action" title="Click to view all event photos in the Gallery">
                    <i class="fas fa-images"></i> View Event Gallery
                    (<?php echo $gdg_count_featured > 0 ? $gdg_count_featured . ' Photos' : 'All Photos'; ?>)
                </a>
                <a href="https://chat.whatsapp.com/DvsmySfinvVA5HE6kGaV2q" target="_blank" rel="noopener noreferrer" class="btn-read-full-story" style="background: #25D366; border-color: #25D366; color: white;">
                    <i class="fab fa-whatsapp"></i> Join WhatsApp Community
                </a>
                <a href="https://gdg.community.dev/gdg-on-campus-school-of-data-science-and-forecasting-indore-india/" target="_blank" rel="noopener noreferrer" class="btn-view-gallery-action">
                    <i class="fas fa-external-link-alt"></i> Visit GDG Page
                </a>
            </div>
        </div>
    </article>

    <!-- Ganesh Visarjan 2026 (Grand Featured Story) -->
    <article class="featured-lead-article-ganesh" id="article-visarjan" data-id="14" data-category="campus">
        <div class="lead-media-wrapper-ganesh">
            <a href="news.php?view=gallery"
                onclick="if(window.openNewsGalleryView){ window.openNewsGalleryView('visarjanGalleryBox'); return false; }"
                title="Click to view event gallery photos">
                <img src="<?php echo $base_path; ?>SDSF_News/photoes_news/Ganesh Visarjan 2026/visarjan-2026-05.jpeg"
                    alt="Ganesh Visarjan 2026: SDSF Bids Bappa a Heartfelt Farewell" class="lead-main-img" style="object-position: 50% 60% !important;">
            </a>
            <a href="<?php echo $base_path; ?>SDSF_News/photoes_news/Ganesh Visarjan 2026/visarjan-2026-05.jpeg"
                target="_blank" rel="noopener noreferrer" class="corner-hd-badge"
                title="Open full high-resolution image in a separate window">
                <i class="fas fa-external-link-alt"></i> View HD Front Photo
            </a>
            <div class="lead-img-caption">
                <span><i class="fas fa-camera"></i> Ganesh Visarjan 2026 &bull; 25th September 2026</span>
            </div>
        </div>

        <div class="lead-editorial-body">
            <div class="lead-badge-row">
                <span class="lead-category-badge lead-festive-badge"><i class="fas fa-om"></i> CAMPUS &amp; CULTURE
                    &bull; GANESH VISARJAN</span>
                <span class="read-time-pill"><i class="far fa-clock"></i> 25/09/2026</span>
            </div>

            <h1 class="lead-main-headline" style="font-size: 1.65rem; line-height: 1.25; margin-top: 8px;">
                <a href="news.php?view=gallery"
                    onclick="if(window.openNewsGalleryView){ window.openNewsGalleryView('visarjanGalleryBox'); return false; }">
                    Ganesh Visarjan 2026: SDSF Bids Bappa a Heartfelt Farewell
                </a>
            </h1>

            <p class="lead-sub-title-intro">
                <em>A day of devotion, gratitude, and togetherness as the SDSF family bid farewell to Lord Ganesha until
                    next year.</em>
            </p>

            <div class="lead-byline-bar">
                <div class="author-info">
                    <i class="fas fa-feather-alt"></i> Blog By <strong>Om Singh Lodhi</strong> (M.Tech AI&DS)
                </div>
                <div class="lead-meta-details">
                    <span><i class="far fa-calendar-alt"></i> 25 September 2026</span>
                    <span>&bull;</span>
                    <span><i class="fas fa-map-marker-alt"></i> SDSF, DAVV, Indore</span>
                </div>
            </div>

            <p class="lead-summary-para">
                On 25th September 2026, SDSF students gathered at Bilavali Lake to bid farewell to Lord Ganesha during
                Ganesh Visarjan 2026. Visarjan is the traditional immersion of the idol, symbolising Bappa's return to
                his heavenly abode after the festive days.
            </p>

            <h3 class="festive-sub-heading"><i class="fas fa-praying-hands"></i> A Farewell Filled with Devotion</h3>
            <p class="lead-summary-para">
                The day included aarti and havan, followed by dance, and Ganeshji was then taken around the entire
                campus. The atmosphere was one of faith and gratitude, with chants of "Ganpati Bappa Morya" in the air.
            </p>

            <h3 class="festive-sub-heading"><i class="fas fa-seedling"></i> Gratitude and Togetherness</h3>
            <p class="lead-summary-para">
                The farewell brought the SDSF family together once again in faith, gratitude and festive spirit, closing
                the Ganesh Chaturthi festivities on a joyful note.
            </p>

            <div class="festive-chants-box">
                <span class="chant-line-main">GANPATI BAPPA MORYA!</span>
                <span class="chant-line-sub">Pudhchya Varshi Lavkar Ya!</span>
            </div>

            <div class="lead-action-row">
                <a href="news.php?view=gallery"
                    onclick="if(window.openNewsGalleryView){ window.openNewsGalleryView('visarjanGalleryBox'); return false; }"
                    class="btn-view-gallery-action" title="Click to view all event photos in the Gallery">
                    <i class="fas fa-images"></i> View Event Gallery
                    (<?php echo $visarjan_count_featured > 0 ? $visarjan_count_featured . ' Photos' : 'All Photos'; ?>)
                </a>
                <div class="social-share-quick">
                    <span>Direct:</span>
                    <a href="news.php?view=gallery"
                        onclick="if(window.openNewsGalleryView){ window.openNewsGalleryView('visarjanGalleryBox'); return false; }"
                        aria-label="Go to Gallery" title="View Event Photos in Gallery">
                        <i class="fas fa-photo-video"></i>
                    </a>
                </div>
            </div>
        </div>
    </article>

    <!-- 1. SDSF Ke Raja - Ganesh Chaturthi 2026 Celebration (Grand Featured Story) -->
    <article class="featured-lead-article-ganesh" id="article-ganesh" data-id="12" data-category="campus">
        <div class="lead-media-wrapper-ganesh">
            <a href="news.php?view=gallery"
                onclick="if(window.openNewsGalleryView){ window.openNewsGalleryView(); return false; }"
                title="Click to view event gallery photos">
                <img src="<?php echo $base_path; ?>SDSF_News/photoes_news/Ganesh Ji 2026.jpg"
                    alt="SDSF Welcomes SDSF Ke Raja - Ganesh Chaturthi 2026" class="lead-main-img">
            </a>
            <a href="<?php echo $base_path; ?>SDSF_News/photoes_news/Ganesh Ji 2026.jpg" target="_blank"
                rel="noopener noreferrer" class="corner-hd-badge"
                title="Open full high-resolution image in a separate window">
                <i class="fas fa-external-link-alt"></i> View HD Front Photo
            </a>
            <div class="lead-img-caption">
                <span><i class="fas fa-camera"></i> Photo By: Arpit Dubey (MBA) &bull; Auspicious Agaman of “SDSF Ke
                    Raja” &bull; 14th September 2026</span>
            </div>
        </div>

        <div class="lead-editorial-body">
            <div class="lead-badge-row">
                <span class="lead-category-badge lead-festive-badge"><i class="fas fa-om"></i> CAMPUS &amp; CULTURE
                    &bull; FESTIVE SPECIAL</span>
                <span class="read-time-pill"><i class="far fa-clock"></i> 14/09/2026</span>
            </div>

            <h1 class="lead-main-headline" style="font-size: 1.65rem; line-height: 1.25; margin-top: 8px;">
                <a href="news.php?view=gallery"
                    onclick="if(window.openNewsGalleryView){ window.openNewsGalleryView(); return false; }">
                    SDSF Welcomes “SDSF Ke Raja” with Grandeur and Devotion
                </a>
            </h1>

            <p class="lead-sub-title-intro">
                <em>A vibrant celebration of faith, togetherness, and student spirit at the School of Data Science &amp;
                    Forecasting</em>
            </p>

            <div class="lead-byline-bar">
                <div class="author-info">
                    <i class="fas fa-feather-alt"></i> Blog By <strong>Joyobrata Das</strong> (M.Tech AI&DS)
                    <strong>Student Press</strong>
                </div>
                <div class="lead-meta-details">
                    <span><i class="far fa-calendar-alt"></i> 14 September 2026</span>
                    <span>&bull;</span>
                    <span><i class="fas fa-map-marker-alt"></i> SDSF, DAVV, Indore</span>
                </div>
            </div>

            <p class="lead-summary-para">
                The School of Data Science &amp; Forecasting (SDSF), DAVV, Indore, came alive with devotion, enthusiasm,
                and festive spirit on 14th September 2026 as students and members of the SDSF family gathered to
                celebrate the auspicious Agaman (arrival) of Lord Ganesha, lovingly welcomed as <strong>“SDSF Ke
                    Raja.”</strong>
                <br><br>
                The celebration marked the beginning of a spiritually uplifting and joyful period for the SDSF
                community. With beautifully decorated surroundings, vibrant traditional arrangements, and the chants of
                <em>“Ganapati Bappa Morya!”</em>, the campus radiated an atmosphere of positivity and togetherness.
            </p>

            <h3 class="festive-sub-heading"><i class="fas fa-praying-hands"></i> A Grand Agaman of Bappa</h3>
            <p class="lead-summary-para">
                The arrival of SDSF Ke Raja was celebrated with great excitement as students came together to welcome
                Bappa with traditional rituals and heartfelt devotion. The campus echoed with chants and devotional
                music, creating a memorable beginning to the festivities.
                <br><br>
                Students from different semesters actively participated in the arrangements, contributing their time,
                creativity, and energy to make the celebration special. From decorations and event coordination to
                devotional activities, the entire celebration reflected the collaborative spirit of SDSF.
            </p>

            <h3 class="festive-sub-heading"><i class="fas fa-music"></i> Bhajan Sandhya — Music, Devotion &amp;
                Togetherness</h3>
            <p class="lead-summary-para">
                One of the highlights of the celebration was the Bhajan Sandhya, where students from different semesters
                came together to offer their musical tributes to Lord Ganesha.
                <br><br>
                The evening witnessed soulful bhajans, devotional songs, and collective chanting, with students taking
                turns to showcase their musical talents. The atmosphere became especially vibrant as students joined in
                the singing, transforming the gathering into a beautiful evening of music, faith, and fellowship.
                <br><br>
                The Bhajan Sandhya also provided a wonderful opportunity for students across different batches and
                semesters to interact, participate, and celebrate together beyond the classroom.
            </p>

            <h3 class="festive-sub-heading"><i class="fas fa-palette"></i> Students Take the Lead</h3>
            <p class="lead-summary-para">
                The festivities were not limited to prayers and bhajans. Students enthusiastically hosted and
                participated in several activities, taking responsibility for different aspects of the celebration.
                <br><br>
                From creative decorations, rangoli, event arrangements, anchoring, photography, music, and coordination
                to managing the overall festive setup, students played an active role throughout the celebration.
                <br><br>
                Their enthusiasm and teamwork demonstrated the strong sense of community that exists within SDSF. Every
                contribution, whether big or small, helped turn the occasion into a memorable celebration.
            </p>

            <h3 class="festive-sub-heading"><i class="fas fa-seedling"></i> A Celebration Beyond the Classroom</h3>
            <p class="lead-summary-para">
                The celebration of SDSF Ke Raja was more than a religious observance—it became a celebration of unity,
                creativity, culture, and belonging.
                <br><br>
                Students and faculty came together to share moments of joy and devotion, strengthening the bond within
                the SDSF community. The festivities provided a refreshing break from academic routines while giving
                students an opportunity to showcase their talents, take initiative, and work together as a team.
                <br><br>
                As the celebrations concluded for the day, the spirit of <em>“Ganapati Bappa Morya”</em> remained alive
                across the SDSF campus, leaving behind memories of smiles, music, devotion, and togetherness.
            </p>

            <h3 class="festive-sub-heading"><i class="fas fa-star-of-life"></i> SDSF Welcomes Bappa</h3>
            <p class="lead-summary-para">
                With hearts filled with devotion and the campus filled with festive energy, SDSF proudly welcomed
                <strong>“SDSF Ke Raja”</strong> on 14th September 2026.
                <br><br>
                The celebration beautifully captured the essence of Ganesh Chaturthi—faith in the heart, joy in
                togetherness, and positivity in every beginning.
            </p>

            <div class="festive-chants-box">
                <span class="chant-line-main">Ganapati Bappa Morya!</span>
                <span class="chant-line-sub">Mangal Murti Morya! 🌺🙏</span>
            </div>

            <?php
            $ganesh_count_featured = 0;
            $ganesh_chk_dir = __DIR__ . '/../../../photoes_news/Ganesh Chaturthi 2026';
            if (is_dir($ganesh_chk_dir)) {
                $fls = scandir($ganesh_chk_dir);
                foreach ($fls as $fl) {
                    if ($fl === '.' || $fl === '..')
                        continue;
                    $ext = strtolower(pathinfo($fl, PATHINFO_EXTENSION));
                    if (in_array($ext, ['jpg', 'jpeg', 'png', 'webp', 'gif'])) {
                        $ganesh_count_featured++;
                    }
                }
            }
            ?>
            <div class="lead-action-row">
                <a href="news.php?view=gallery"
                    onclick="if(window.openNewsGalleryView){ window.openNewsGalleryView(); return false; }"
                    class="btn-view-gallery-action" title="Click to view all event photos in the Gallery">
                    <i class="fas fa-images"></i> View Event Gallery
                    (<?php echo $ganesh_count_featured > 0 ? $ganesh_count_featured . ' Photos' : 'All Photos'; ?>)
                </a>
                <div class="social-share-quick">
                    <span>Direct:</span>
                    <a href="news.php?view=gallery"
                        onclick="if(window.openNewsGalleryView){ window.openNewsGalleryView(); return false; }"
                        aria-label="Go to Gallery" title="View Event Photos in Gallery">
                        <i class="fas fa-photo-video"></i>
                    </a>
                </div>
            </div>
        </div>
    </article>

    <!-- 2. Dainik Bhaskar News card (Compact) -->
    <article class="featured-lead-article-dainik-bhaskar" data-id="6">
        <div class="lead-media-wrapper-dainik-bhaskar">
            <a href="<?php echo $base_path; ?>SDSF_News/photoes_news/Dainik Bhaskar.jpeg" target="_blank"
                rel="noopener noreferrer" title="Click to open image in a separate window">
                <img src="<?php echo $base_path; ?>SDSF_News/photoes_news/Dainik Bhaskar.jpeg"
                    alt="SDSF Research Expansion" class="lead-main-img">
            </a>
            <div class="lead-img-caption">
                <span>Takshila Campus, Indore &bull; Official Press Release by Dainik Bhaskar</span>
            </div>
        </div>

        <div class="lead-editorial-body">
            <div class="lead-badge-row">
                <span class="lead-category-badge"><i class="fas fa-star"></i> FEATURED STORY &bull; DAINIK
                    BHASKAR</span>
                <span class="read-time-pill"><i class="far fa-clock"></i> 03/09/2026</span>
            </div>

            <h2 class="lead-main-headline">
                <a href="<?php echo $base_path; ?>SDSF_News/photoes_news/Dainik Bhaskar.jpeg" target="_blank"
                    rel="noopener noreferrer">
                    SDSF Expands Seat Capacity Across Three Data Science Programmes
                </a>
            </h2>

            <div class="lead-byline-bar">
                <div class="author-info">
                    <i class="fas fa-pen-nib"></i> By <strong>Dainik Bhaskar</strong> &bull; SDSF Press
                </div>
                <div class="lead-meta-details">
                    <span><i class="far fa-calendar-alt"></i> Sept 2, 2026</span>
                </div>
            </div>

            <p class="lead-summary-para">
                SDSF is expanding its academic capacity as demand for data science and analytics programmes continues to
                rise. The intake for the two-year M.Tech, five-year Integrated M.Tech, and MBA Data Analytics programmes
                will increase from 40 to 60 seats each to create more opportunities for aspiring data professionals.
                <br><br>
                New classrooms and upgraded laboratory facilities are also being prepared to support the growing student
                strength with modern project-based learning and smart infrastructure.
            </p>

            <div class="lead-highlights-box">
                <h4 class="highlights-title"><i class="fas fa-check-circle"></i> Highlights:</h4>
                <ul class="highlights-list">
                    <li>Seat Intake Increased: 40 → 60 seats across all three programmes.</li>
                    <li>Infrastructure Expansion: New classrooms, modern labs, and smart facilities.</li>
                    <li>Placement Momentum: 6 students already placed with Orange Data Tech.</li>
                </ul>
            </div>

            <div class="lead-action-row">
                <a href="<?php echo $base_path; ?>SDSF_News/photoes_news/Dainik Bhaskar.jpeg" target="_blank"
                    rel="noopener noreferrer" class="btn-read-full-story"
                    title="Open Dainik Bhaskar newspaper clipping in a separate window">
                    <i class="fas fa-external-link-alt"></i> View Newspaper Clipping
                </a>
                <div class="social-share-quick">
                    <span>View Image:</span>
                    <a href="<?php echo $base_path; ?>SDSF_News/photoes_news/Dainik Bhaskar.jpeg" target="_blank"
                        rel="noopener noreferrer" aria-label="View Dainik Bhaskar Newspaper Photo"
                        title="Open Image in Separate Window">
                        <i class="fas fa-image"></i>
                    </a>
                </div>
            </div>
        </div>
    </article>

    <!-- 2. Orange Data Tech Placement News Card -->
    <article class="featured-lead-article-orange-tech" id="featured-lead-article-orange-tech" data-id="1">
        <div class="lead-media-wrapper-orange-tech">
            <a href="<?php echo $base_path; ?>events.php?gallery=orange-tech"
                title="View Exclusive Photos from the Orange Data Tech Drive">
                <img src="<?php echo $base_path; ?>SDSF_News/photoes_news/Orange_Tech_2.0.png"
                    onerror="this.src='<?php echo $base_path; ?>SDSF_News/photoes_news/Orange_Tech.png'"
                    alt="Six SDSF Students Selected at Orange Data Tech" class="lead-main-img">
            </a>
            <div class="lead-img-caption">
                <span>Takshila Campus, Indore &bull; Official Campus Recruitment Drive by Orange Data Tech</span>
            </div>
        </div>

        <div class="lead-editorial-body">
            <div class="lead-badge-row">
                <span class="lead-category-badge"><i class="fas fa-briefcase"></i> FEATURED STORY &bull; PLACEMENT
                    DRIVE</span>
                <span class="read-time-pill"><i class="far fa-clock"></i> 02/09/2026</span>
            </div>

            <h2 class="lead-main-headline">
                <a href="<?php echo $base_path; ?>events.php?gallery=orange-tech">
                    Six SDSF Students Selected at Orange Data Tech Through Campus Hiring Drive
                </a>
            </h2>

            <div class="lead-byline-bar">
                <div class="author-info">
                    <i class="fas fa-pen-nib"></i> By <strong>SDSF Placement Cell</strong> &bull; Takshila Campus
                </div>
                <div class="lead-meta-details">
                    <span><i class="far fa-calendar-alt"></i> Sept 2, 2026</span>
                    <span>&bull;</span>
                    <span><i class="fas fa-building"></i> Orange Data Tech</span>
                </div>
            </div>

            <p class="lead-summary-para">
                The School of Data Science &amp; Forecasting (SDSF), Devi Ahilya Vishwavidyalaya (DAVV), Indore, is
                pleased to announce that six students from the department have successfully secured placements at Orange
                Data Tech through the campus hiring drive.
                <br><br>
                The recruitment drive provided students with an excellent opportunity to demonstrate their analytical,
                technical, problem-solving, and communication skills. The selection process included multiple stages
                designed to assess the candidates' aptitude, technical knowledge, and suitability for the respective
                roles.
            </p>

            <div class="lead-highlights-box">
                <h4 class="highlights-title"><i class="fas fa-award"></i> Selected Roles Offered:</h4>
                <ul class="highlights-list">
                    <li><strong>Business Analyst (BA)</strong> &bull; Data Strategy &amp; Business Intelligence</li>
                    <li><strong>Associate Software Engineer</strong> &bull; Enterprise Software &amp; Analytics</li>
                </ul>
            </div>

            <p class="lead-summary-para" style="margin-top: 14px;">
                This achievement reflects the dedication, hard work, and professional preparedness of our students,
                along with the continuous efforts of the faculty and the Placement Cell in creating meaningful career
                opportunities for SDSF students.
                <br><br>
                The School of Data Science &amp; Forecasting extends its heartiest congratulations to all six selected
                students and wishes them great success in their upcoming professional journey. We also express our
                sincere gratitude to Orange Data Tech for providing this valuable campus recruitment opportunity to our
                students.
            </p>

            <div class="achievers-box">
                <strong style="color: #c2410c; font-family: var(--font-heading); font-size: 0.95rem;">Congratulations to
                    our achievers!</strong>
                <p style="margin: 4px 0 0 0; font-size: 0.8rem; color: #475569; line-height: 1.5;">
                    SDSF | DAVV, Indore &bull; Empowering Students &bull; Building Careers &bull; Creating Opportunities
                </p>
            </div>

            <div class="lead-action-row">
                <a href="<?php echo $base_path; ?>events.php?gallery=orange-tech" class="btn-read-full-story"
                    title="View Exclusive Photos on Events Page">
                    <i class="fas fa-images"></i> View Event Photos
                </a>
                <div class="social-share-quick">
                    <span>View Image:</span>
                    <a href="<?php echo $base_path; ?>SDSF_News/photoes_news/Orange_Tech_2.0.png" target="_blank"
                        rel="noopener noreferrer" aria-label="Open Orange Tech Poster in New Window"
                        title="Open Full Poster">
                        <i class="fas fa-image"></i>
                    </a>
                </div>
            </div>
        </div>
    </article>

    <!-- Secondary Center Grid Articles for HackHive -->
    <div class="center-subgrid">
        <article class="subgrid-card" data-id="7" data-category="hackathon">
            <div class="subgrid-img-wrap">
                <a href="news.php?category=hackathon" onclick="filterByTopic('hackathon'); return false;">
                    <img src="<?php echo $base_path; ?>photoes/hack_hive.png" alt="HackHive 2.0" loading="lazy">
                </a>
                <span class="subgrid-badge">Hackathons</span>
            </div>
            <div class="subgrid-body">
                <h4 class="subgrid-title">
                    <a href="news.php?category=hackathon" onclick="filterByTopic('hackathon'); return false;">
                        HackHive 2.0: SDSF’s Premier 36-Hour National Hackathon Sparks Breakthrough Solutions
                    </a>
                </h4>
            </div>
        </article>
    </div>

</div>