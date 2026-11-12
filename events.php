<!--Code for SDSF Events Page-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events | SDSF</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/events.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Oswald:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body id="top">

    <?php include("header.php"); ?>

    <!-- ===== HERO SECTION ===== -->
    <div class="events-hero" id="hero-section">
        <div class="hero-text-content">
            <div class="hero-badge">
                <i class="fas fa-calendar-alt"></i> Campus Life & Activities
            </div>
            <h1 class="events-title">EVENTS & OPPORTUNITIES</h1>
            <h2 class="hero-subtitle">Campus Life at SDSF</h2>
            <p class="hero-intro-text">
                Explore the vibrant ecosystem of opportunities, achievements and celebrations. It’s where you grow, glow, mess up, level up — all under the same sky that keeps dreaming with you.
            </p>
            <div class="hero-stats-row">
                <div class="stat-pill">
                    <i class="fas fa-calendar-check"></i>
                    <span>Annual Tech Fests</span>
                </div>
                <div class="stat-pill">
                    <i class="fas fa-trophy"></i>
                    <span>Hackathons & Competitions</span>
                </div>
                <div class="stat-pill">
                    <i class="fas fa-users"></i>
                    <span>Conferences & Seminars</span>
                </div>
            </div>
        </div>
    </div>

    <!-- ===== DEVELOPER COMMUNITIES SECTION ===== -->
    <section class="dev-communities-section" id="developer-communities">
        <div class="container-inner">
            <div class="section-header-center">
                <div class="section-eyebrow">
                    <i class="fas fa-code-branch"></i> Student Chapters & Networks
                </div>
                <h2 class="section-main-heading">Developer Communities</h2>
                <div class="heading-accent-line"></div>
                <p class="section-lead-text">
                    Fostering peer-to-peer learning, open-source collaboration, and real-world technology innovation across SDSF.
                </p>
            </div>

            <!-- GDG Showcase Card -->
            <div class="community-showcase-card">
                <!-- Top Brand Header -->
                <div class="community-brand-bar">
                    <div class="gdg-logo-group">
                        <img src="photoes/google_developer_grps_logo.png" alt="Google Developer Groups On Campus - School of Data Science and Forecasting" class="gdg-brand-logo">
                    </div>
                    <div class="community-status-badge">
                        <span class="pulse-dot"></span> Active Chapter
                    </div>
                </div>

                <!-- Main Content Body -->
                <div class="community-body-grid">
                    <div class="community-info-col">
                        <div class="gdg-eyebrow-tag">
                            <i class="fab fa-google"></i> Community
                        </div>
                        <h3 class="community-hero-title gdg-hero-title">
                            Google Developer Groups <span class="highlight-gdg">On Campus</span> SDSF<span class="blink-cursor cursor-gdg">|</span>
                        </h3>
                        
                        <div class="gdg-tagline-quote">
                            <p class="gdg-quote-main">“Connect. Learn. Grow.”</p>
                            <p class="gdg-quote-sub">By developers, for developers — building tomorrow’s tech, today.</p>
                        </div>
                        
                        <p class="community-description">
                            Google Developer Groups are university based community groups for students interested in Google developer technologies. Students from all undergraduate or graduate programs with an interest in growing as a developer are welcome. By joining a GDG, students grow their knowledge in a peer-to-peer learning environment and build solutions for local businesses and their community.
                        </p>
                        
                        <div class="community-actions-row">
                            <a href="https://gdgoc-sdsf.onrender.com/" target="_blank" rel="noopener noreferrer" class="btn-gdg-primary">
                                <span>Know More</span>
                            </a>

                            <!-- Stay Connected Icons Only -->
                            <div class="stay-connected-block">
                                <span class="connected-label">Stay connected with us:</span>
                                <div class="social-icons-row">
                                    <a href="https://www.instagram.com/gdgsdsf/" target="_blank" rel="noopener noreferrer" class="social-icon-btn btn-instagram" title="Follow GDG SDSF on Instagram" aria-label="Instagram">
                                        <svg viewBox="0 0 24 24" class="social-svg-icon" aria-hidden="true">
                                            <path fill="currentColor" d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                        </svg>
                                    </a>
                                    <a href="https://www.linkedin.com/company/gdg-sdsf-davv/" target="_blank" rel="noopener noreferrer" class="social-icon-btn btn-linkedin" title="Follow GDG SDSF on LinkedIn" aria-label="LinkedIn">
                                        <svg viewBox="0 0 24 24" class="social-svg-icon" aria-hidden="true">
                                            <path fill="currentColor" d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.46 10.9v8.37H9.2V10.9H6.46M7.83 6.45a1.64 1.64 0 1 0 0 3.28 1.64 1.64 0 0 0 0-3.28"/>
                                        </svg>
                                    </a>
                                    <a href="https://x.com/GdgDavv" target="_blank" rel="noopener noreferrer" class="social-icon-btn btn-x" title="Follow GDG SDSF on X (Twitter)" aria-label="X (Twitter)">
                                        <svg viewBox="0 0 24 24" class="social-svg-icon" aria-hidden="true">
                                            <path fill="currentColor" d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Visual Graphic -->
                    <div class="community-visual-col">
                        <div class="developer-visual-card">
                            <div class="ambient-glow"></div>
                            <!-- Floating Decorative Coding Elements -->
                            <div class="floating-bubble bubble-1"><i class="fas fa-code"></i></div>
                            <div class="floating-bubble bubble-2"><code>&lt;/&gt;</code></div>
                            <div class="floating-bubble bubble-3"><i class="fab fa-google"></i></div>
                            <div class="floating-bubble bubble-4"><i class="fas fa-laptop-code"></i></div>
                            
                            <!-- Uploaded User Developer Graphic -->
                            <img src="photoes/google_developer_grp_user_photo.png" alt="Google Developer Group Member Coding" class="developer-user-img">
                        </div>
                    </div>
                </div>
            </div>

            <!-- SIS (Society of Intelligent System) Showcase Card -->
            <div class="community-showcase-card sis-showcase-card">
                <!-- Top Brand Header -->
                <div class="community-brand-bar">
                    <div class="gdg-logo-group sis-logo-group">
                        <img src="photoes/SIS Logo.png" alt="Society of Intelligent System DAVV" class="sis-brand-logo">
                        <div class="sis-brand-info">
                            <span class="sis-brand-title">SIS DAVV</span>
                            <span class="sis-brand-sub">Society of Intelligent System</span>
                        </div>
                    </div>
                    <div class="community-status-badge sis-status-badge">
                        <span class="pulse-dot pulse-purple"></span> Student Community
                    </div>
                </div>

                <!-- Main Content Body -->
                <div class="community-body-grid">
                    <div class="community-info-col">
                        <div class="sis-eyebrow-tag">
                            <i class="fas fa-brain"></i> Community
                        </div>
                        <h3 class="community-hero-title sis-hero-title">
                            Society of <span class="highlight-purple">Intelligent System</span> DAVV<span class="blink-cursor cursor-purple">|</span>
                        </h3>
                        
                        <div class="sis-tagline-quote">
                            <p class="sis-quote-main">“Fostering a community of visionary thinkers and makers.”</p>
                            <p class="sis-quote-sub">Elevate your ideas, empower the future.</p>
                        </div>

                        <p class="community-description">
                            Society of Intelligent System (SIS) is the premier student-led technical community at SDSF DAVV, dedicated to artificial intelligence, machine learning, robotics, and futuristic computing. We empower aspiring engineers and data scientists to collaborate on cutting-edge research, build real-world AI applications, and lead next-generation innovations.
                        </p>
                        
                        <div class="community-actions-row">
                            <!-- Stay Connected with Instagram Link -->
                            <div class="stay-connected-block">
                                <span class="connected-label">Stay connected with us:</span>
                                <div class="social-icons-row">
                                    <a href="https://www.instagram.com/teamsisdavv/" target="_blank" rel="noopener noreferrer" class="social-icon-btn btn-instagram" title="Follow Team SIS on Instagram" aria-label="Instagram">
                                        <svg viewBox="0 0 24 24" class="social-svg-icon" aria-hidden="true">
                                            <path fill="currentColor" d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Visual Graphic -->
                    <div class="community-visual-col">
                        <div class="developer-visual-card sis-visual-card">
                            <div class="ambient-glow glow-purple"></div>
                            <!-- Floating AI/Tech Elements -->
                            <div class="floating-bubble bubble-1"><i class="fas fa-brain"></i></div>
                            <div class="floating-bubble bubble-2"><code>&lambda;</code></div>
                            <div class="floating-bubble bubble-3"><i class="fas fa-microchip"></i></div>
                            <div class="floating-bubble bubble-4"><i class="fas fa-network-wired"></i></div>
                            
                            <!-- SIS Graphic Display -->
                            <div class="sis-card-art-box">
                                <img src="photoes/SIS Logo.png" alt="Society of Intelligent System Logo" class="sis-center-hero-logo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- ===== UPCOMING EVENTS SECTION ===== -->
    <section class="upcoming-events-section reveal" id="upcoming-events">
        <div class="container-inner">
            <div class="section-header-center">
                <div class="section-eyebrow">
                    <i class="fas fa-calendar-alt"></i> Roadmap &amp; Hackathons
                </div>
                <h2 class="section-main-heading">Upcoming Events</h2>
                <div class="heading-accent-line"></div>
                <p class="section-lead-text">
                    Explore upcoming hackathons, tech symposiums, workshops, and flagship competitions lined up to ignite innovation, creativity, and hands-on learning across SDSF.
                </p>
            </div>

            <div class="events-timeline">
                <!-- Timeline Node: HackHive 2.0 Connected to Vertical Line -->
                <div class="timeline-item hackhive-timeline-node reveal">
                    <div class="timeline-date-mono"> &bull; ANNUAL HACKATHON</div>
                    <h3 class="timeline-node-title">HackHive 2.0</h3>
                    <div class="timeline-node-subtitle">School of Data Science &amp; Forecasting (DAVV), Indore</div>
                    
                    <!-- Connected HackHive Card Attached to Line (Without Top Status/Countdown Bar) -->
                    <div class="hackhive-timeline-card">
                        <div class="hackhive-honeycomb-bg"></div>
                        <div class="hackhive-ambient-glow"></div>

                        <div class="hackhive-body-grid">
                            <!-- Left Content -->
                            <div class="hackhive-content-col">
                                <div class="hackhive-code-title">
                                    <span class="hackhive-sub-title">import</span> <span class="mono-symbol">about;</span>
                                </div>
                                <h4 class="hackhive-sub-title">Welcome to HackHive 2.0</h4>
                                
                                <p class="hackhive-p-mono">
                                    Where bold ideas become breakthrough innovations. <strong>HackHive 2.0</strong> is a 36-hour hackathon hosted by the <em>School of Data Science &amp; Forecasting, DAVV, Indore</em>, bringing together passionate innovators, developers, designers, and problem-solvers to build technology that creates real-world impact.
                                </p>
                                
                                <ul class="hackhive-feature-bullets">
                                    <li><span class="bullet-dot"></span> Collaborate with like-minded creators &amp; gain insights from industry mentors.</li>
                                    <li><span class="bullet-dot"></span> Transform bold ideas into powerful, deployable real-world solutions.</li>
                                    <li><span class="bullet-dot"></span> Code. Create. Collaborate. <strong>The Hive Awaits. 🐝</strong></li>
                                </ul>

                                <!-- Actions & Social Links Row -->
                                <div class="hackhive-actions-wrap">
                                    <a href="https://hackhive20.vercel.app/?utm_source=ig&amp;utm_medium=social&amp;utm_content=link_in_bio&amp;fbclid=PAdGRleAUE2fhwZG9mAmZkaWQWUNqwp1pXJElOMGDxwnZygBSld7ofMmV4dG4DYWVtAjExAHNydGMGYXBwX2lkDzEyNDAyNDU3NDI4NzQxNAABp-AaQsnnCAufEen_sVQ9H-U4SncbBiDrDmV5vzUDITkIc2fqSC9AN8GAtAe__aem_jpde87SQ8UojmKJ9aH32MA" target="_blank" rel="noopener noreferrer" class="btn-hackhive-primary">
                                        <span>Know More</span>
                                        <i class="fas fa-arrow-right"></i>
                                    </a>

                                    
                                </div>
                            </div>

                            <!-- Right Logo Showcase -->
                            <div class="hackhive-visual-col">
                                <div class="hackhive-logo-portal">
                                    <img src="photoes/hack_hive.png" alt="HackHive 2.0 Logo" class="hackhive-portal-img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== EVENT GALLERY SECTION ===== -->
    <?php
    $orange_photos_dir = 'SDSF_News/photoes_news/Orange_tech_Pictures/';
    $orange_photos = [];
    if (is_dir(__DIR__ . '/' . $orange_photos_dir)) {
        $scanned = scandir(__DIR__ . '/' . $orange_photos_dir);
        foreach ($scanned as $file) {
            if ($file !== '.' && $file !== '..' && preg_match('/\.(jpe?g|png|webp)$/i', $file)) {
                $orange_photos[] = $orange_photos_dir . $file;
            }
        }
    }

    // Add event photos to photoes/Induction 2026 and they will appear automatically.
    $induction_photos_dir = 'photoes/Induction 2026/';
    $induction_photos = [];
    $induction_photos_data = [];
    if (is_dir(__DIR__ . '/' . $induction_photos_dir)) {
        $scanned = scandir(__DIR__ . '/' . $induction_photos_dir);
        // Prioritise small WhatsApp files first (they load fastest as card covers)
        $small_files = [];
        $large_files = [];
        foreach ($scanned as $file) {
            if ($file !== '.' && $file !== '..' && is_file(__DIR__ . '/' . $induction_photos_dir . $file) && preg_match('/\.(jpe?g|png|webp|gif)$/i', $file)) {
                $size = filesize(__DIR__ . '/' . $induction_photos_dir . $file);
                if ($size < 500000) {
                    $small_files[] = $file;  // WhatsApp compressed images < 500KB
                } else {
                    $large_files[] = $file;  // Raw camera photos
                }
            }
        }
        natsort($small_files);
        natsort($large_files);
        // Combine: small files first (for cover), then large files
        $valid_files = array_merge(array_values($small_files), array_values($large_files));
        foreach ($valid_files as $file) {
            $raw = $induction_photos_dir . $file;
            $opt = file_exists(__DIR__ . '/' . $induction_photos_dir . 'optimized/' . $file)
                ? $induction_photos_dir . 'optimized/' . $file
                : $raw;
            $thumb = file_exists(__DIR__ . '/' . $induction_photos_dir . 'thumbs/' . $file)
                ? $induction_photos_dir . 'thumbs/' . $file
                : $opt;

            $induction_photos[] = $opt;
            $induction_photos_data[] = [
                'full' => $opt,
                'thumb' => $thumb,
                'raw' => $raw,
            ];
        }
    }
    // Always use the fast-loading WhatsApp cover for the card image
    $induction_preferred_cover = 'photoes/Induction 2026/IMG-20260918-WA0007.jpg';
    $induction_cover = file_exists(__DIR__ . '/' . $induction_preferred_cover)
        ? $induction_preferred_cover
        : (!empty($induction_photos_data) ? $induction_photos_data[0]['thumb'] : 'photoes/slide_image_event.jpeg');
        
    // Cyber Security & Internet Ethics Course photos
    $cyber_photos = [
        'SDSF_News/photoes_news/cyber_security_ethics_2026.jpg',
    ];

    // Add GDG event photos
    $gdg_photos_dir = 'SDSF_News/photoes_news/GDG Team Recruitment 2026/';
    $gdg_photos = [];
    if (is_dir(__DIR__ . '/' . $gdg_photos_dir)) {
        $scanned = scandir(__DIR__ . '/' . $gdg_photos_dir);
        foreach ($scanned as $file) {
            if ($file !== '.' && $file !== '..' && preg_match('/\.(jpe?g|png|webp)$/i', $file)) {
                $gdg_photos[] = $gdg_photos_dir . $file;
            }
        }
    }
    ?>
    <section class="gallery-section reveal" id="event-gallery">
        <div class="container-inner">
            <div class="section-header-center">
                <div class="section-eyebrow">
                    <i class="fas fa-camera-retro"></i> Captured Moments
                </div>
                <h2 class="section-main-heading">Event Gallery</h2>
                <div class="heading-accent-line"></div>
                <p class="section-lead-text">
                    Relive the vibrancy, recruitment drives, hackathons, and celebrations that define student life and career milestones across SDSF.
                </p>
            </div>

            <div class="news-grid">
                <!-- Event Card: Cyber Security & Internet Ethics Course -->
                <div class="news-card gallery-card featured-gallery-card reveal" data-gallery-id="cyber-ethics">
                    <div class="news-image">
                        <img src="SDSF_News/photoes_news/cyber_security_ethics_2026.jpg" alt="Short Term Course in Cyber Security and Internet Ethics - MMTTC DAVV" data-open-gallery="cyber-ethics" style="object-position: center;">
                        <div class="gallery-badge-overlay">
                            <span class="gallery-count-badge" style="background: #0284c7;"><i class="fas fa-shield-alt"></i> MMTTC (UGC-HRDC)</span>
                        </div>
                    </div>
                    <div class="news-content">
                        <div class="news-date"><i class="far fa-calendar-alt"></i> October 26–31, 2026 &bull; Online Course</div>
                        <h4>Short Term Course in Cyber Security &amp; Internet Ethics</h4>
                        <p>
                            Malaviya Mission Teacher Training Centre (Formerly UGC-HRDC), Devi Ahilya Vishwavidyalaya, Indore in association with School of Data Science and Forecasting (SDSF), coordinated by Dr. Govind Maheshwari, successfully conducted an online Short Term Course empowering educators with practical cybersecurity and digital ethics skills.
                        </p>
                        <div class="event_photo_link">
                            <button type="button" class="btn-open-gallery" data-open-gallery="cyber-ethics">
                                <i class="fas fa-images"></i> View Photos (<?php echo count($cyber_photos); ?>) <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Event Card 2.5: GDG Recruitment -->
                <div class="news-card gallery-card featured-gallery-card reveal" data-gallery-id="gdg-recruitment">
                    <div class="news-image">
                        <img src="SDSF_News/photoes_news/GDG Team Recruitment 2026/1.jpeg" alt="The Next Wave: GDG SDSF Core Team Recruitment" data-open-gallery="gdg-recruitment" style="object-position: center 30%;">
                        <div class="gallery-badge-overlay">
                            <span class="gallery-count-badge"><i class="fas fa-images"></i> <?php echo count($gdg_photos); ?> Photos</span>
                        </div>
                    </div>
                    <div class="news-content">
                        <div class="news-date"><i class="far fa-calendar-alt"></i> October 9, 2026 &bull; GDG SDSF</div>
                        <h4>The Next Wave: GDG SDSF Core Team Recruitment</h4>
                        <p>
                            Moments from the GDG SDSF community info session and recruitment event. A new chapter begins for developer communities at SDSF, DAVV.
                        </p>
                        <div class="event_photo_link">
                            <button type="button" class="btn-open-gallery" data-open-gallery="gdg-recruitment">
                                <i class="fas fa-images"></i> View Photos (<?php echo count($gdg_photos); ?>) <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Flagship Card: Orange Data Tech Placement Drive -->
                <div class="news-card gallery-card featured-gallery-card reveal" data-gallery-id="orange-tech">
                    <div class="news-image">
                        <img src="SDSF_News/photoes_news/Orange_Tech_2.0.png" alt="Orange Data Tech Campus Recruitment Drive" data-open-gallery="orange-tech">
                        <div class="gallery-badge-overlay">
                            <span class="gallery-count-badge"><i class="fas fa-images"></i> <?php echo count($orange_photos); ?> Photos</span>
                        </div>
                    </div>
                    <div class="news-content">
                        <div class="news-date"><i class="far fa-calendar-alt"></i> September 2, 2026 &bull; Placement Drive</div>
                        <h4>Orange Data Tech Campus Recruitment Drive</h4>
                        <p>
                            Six SDSF students successfully secured placements at Orange Data Tech through the campus hiring drive for Business Analyst and Associate Software Engineer roles. Click below to view all exclusive event pictures from the recruitment drive.
                        </p>
                        <div class="event_photo_link">
                            <button type="button" class="btn-open-gallery" id="openOrangeTechBtn" data-open-gallery="orange-tech">
                                <i class="fas fa-images"></i> View Photos (<?php echo count($orange_photos); ?>) <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Event Card 2: SDSF Induction Aagaaz 26 -->
                <div class="news-card gallery-card featured-gallery-card reveal" data-gallery-id="induction-2026">
                    <div class="news-image">
                        <img src="<?php echo htmlspecialchars($induction_cover, ENT_QUOTES); ?>" alt="SDSF Induction Aagaaz 26" data-open-gallery="induction-2026">
                        <div class="gallery-badge-overlay">
                            <span class="gallery-count-badge"><i class="fas fa-images"></i> <?php echo count($induction_photos); ?> Photos</span>
                        </div>
                    </div>
                    <div class="news-content">
                        <div class="news-date"><i class="far fa-calendar-alt"></i> September 17, 2026 &bull; Official Induction</div>
                        <h4>SDSF Induction Aagaaz 26</h4>
                        <p>
                            The official induction for the SDSF 2026 batch, welcoming new students to the department, its faculty, academic journey, and campus community.
                        </p>
                        <div class="event_photo_link">
                            <button type="button" class="btn-open-gallery" data-open-gallery="induction-2026">
                                <i class="fas fa-images"></i> View Photos (<?php echo count($induction_photos); ?>) <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Event Card 3: International Conference iBCD -->
                <div class="news-card gallery-card reveal">
                    <div class="news-image">
                        <img src="https://images.unsplash.com/photo-1523580494863-6f3031224c94?q=80&w=1000&auto=format&fit=crop" alt="International Conference iBCD">
                    </div>
                    <div class="news-content">
                        <div class="news-date"><i class="far fa-calendar-alt"></i> August 23-24, 2024 &bull; Conference</div>
                        <h4>iBCD International Conference</h4>
                        <p>
                            International Conference on Business Intelligence, Computational Mathematics, and Data Analytics organized by SDSF with global partners to discuss advanced research and technologies.
                        </p>
                        <div class="event_photo_link">
                            <span class="gallery-status-note"><i class="fas fa-award"></i> Academic Conference</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== PHOTO VIEWER LIGHTBOX MODAL ===== -->
    <div id="photoLightboxModal" class="photo-lightbox-modal" aria-hidden="true" role="dialog" aria-label="Photo Gallery Viewer">
        <div class="lightbox-overlay" id="lightboxBackdrop"></div>
        <div class="lightbox-container">
            <!-- Lightbox Header -->
            <div class="lightbox-header">
                <div class="lightbox-info">
                    <span class="lightbox-badge"><i class="fas fa-images"></i> Campus Gallery</span>
                    <h3 class="lightbox-title" id="lightboxEventTitle">Event Photo Gallery</h3>
                    <span class="lightbox-counter" id="lightboxCounter">1 / <?php echo count($orange_photos); ?></span>
                </div>
                <div class="lightbox-actions">
                    <button type="button" class="lightbox-btn" id="lightboxFullscreenBtn" title="Toggle Fullscreen" aria-label="Toggle Fullscreen">
                        <i class="fas fa-expand"></i>
                    </button>
                    <button type="button" class="lightbox-btn lightbox-close-btn" id="lightboxCloseBtn" title="Close Gallery (Esc)" aria-label="Close Gallery">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>

            <!-- Lightbox Main Stage -->
            <div class="lightbox-viewport">
                <button type="button" class="lightbox-nav-btn prev-btn" id="lightboxPrevBtn" aria-label="Previous Photo">
                    <i class="fas fa-chevron-left"></i>
                </button>

                <div class="lightbox-image-stage" id="lightboxStage">
                    <div class="lightbox-spinner" id="lightboxSpinner">
                        <i class="fas fa-circle-notch fa-spin"></i>
                    </div>
                    <img src="" alt="Event photo" id="lightboxMainImg" class="lightbox-main-img">
                </div>

                <button type="button" class="lightbox-nav-btn next-btn" id="lightboxNextBtn" aria-label="Next Photo">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>

            <!-- Lightbox Bottom Thumbnails -->
            <div class="lightbox-thumbs-wrapper">
                <div class="lightbox-thumbs-track" id="lightboxThumbsTrack">
                    <!-- Thumbnails generated dynamically by JS -->
                </div>
            </div>
        </div>
    </div>
            
    <script>
        window.EVENT_GALLERIES = <?php echo json_encode([
            'cyber-ethics' => [
                'title' => 'Short Term Course in Cyber Security & Internet Ethics (MMTTC DAVV)',
                'photos' => array_values($cyber_photos),
            ],
            'orange-tech' => [
                'title' => 'Orange Data Tech Campus Recruitment Drive',
                'photos' => array_values($orange_photos),
            ],
            'induction-2026' => [
                'title' => 'SDSF Induction Aagaaz 26',
                'photos' => $induction_photos_data,
            ],
            'gdg-recruitment' => [
                'title' => 'The Next Wave: GDG SDSF Core Team Recruitment',
                'photos' => array_values($gdg_photos),
            ],
        ], JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT); ?>;
    </script>
    <script src="events.js"></script>

    <?php include("footer.php"); ?>
</body>
</html>
