<!-- ==============================================
     FEATURED VIEW: PACE SERIES (Innovation, Hackathons & Mentorship)
     ============================================== -->
<div class="featured-category-view" id="featured-view-pace" style="display: none;">

<?php
$certif_pace_dir = __DIR__ . '/../../../../photoes/Induction 2026/Certif Appre';
$certif_pace_photos = [];
if (is_dir($certif_pace_dir)) {
    foreach (scandir($certif_pace_dir) as $cpf) {
        if ($cpf !== '.' && $cpf !== '..' && is_file($certif_pace_dir . '/' . $cpf) && preg_match('/\.(jpe?g|png|webp|gif)$/i', $cpf)) {
            $certif_pace_photos[] = $cpf;
        }
    }
    natsort($certif_pace_photos);
    $certif_pace_photos = array_values($certif_pace_photos);
}

$main_certif_img = !empty($certif_pace_photos)
    ? (file_exists($certif_pace_dir . '/optimized/' . $certif_pace_photos[0])
        ? $base_path . 'photoes/Induction 2026/Certif Appre/optimized/' . rawurlencode($certif_pace_photos[0])
        : $base_path . 'photoes/Induction 2026/Certif Appre/' . rawurlencode($certif_pace_photos[0]))
    : $base_path . 'photoes/slide_image_event.jpeg';

$additional_certif_photos = array_slice($certif_pace_photos, 1);
?>

    <!-- ========================================================
         CARD: CERTIFICATE OF APPRECIATION - TEAM CYPHER X3
         ======================================================== -->
    <article class="pace-featured-card cypher-appreciation-card" id="pace-cypher-x3" data-category="pace">
        
        <div class="hackathon-showcase-header">
            <div class="pace-badge-row" style="margin-bottom: 8px;">
                <span class="pace-card-badge cypher-gold-badge"><i class="fas fa-certificate"></i> CERTIFICATE OF APPRECIATION</span>
                <span class="venue-pill aagaaz-venue-pill"><i class="fas fa-university"></i> Aagaaz 26 Induction</span>
                <span class="forum-status-pill cypher-status-pill"><i class="fas fa-trophy"></i> Team Cypher X3</span>
            </div>
            <h3 class="hackathon-showcase-title">Certification of Appreciation Presented to Team Cypher X3 at Aagaaz 26</h3>
            <p class="hackathon-showcase-subtitle">
                <i class="fas fa-award"></i> Felicitated at the <strong>SDSF Induction Program Aagaaz 26</strong> &bull; School of Data Science &amp; Forecasting, DAVV Indore
            </p>
        </div>

        <!-- Main Card Image -->
        <div class="cypher-main-media-wrap" onclick="if(window.openGalleryLightbox) openGalleryLightbox('<?php echo htmlspecialchars($main_certif_img, ENT_QUOTES); ?>', 'Certification of Appreciation Presented to Team Cypher X3 at Aagaaz 26')" title="Click to view full photo in Lightbox">
            <img src="<?php echo htmlspecialchars($main_certif_img, ENT_QUOTES); ?>" alt="Certification of Appreciation presented to Team Cypher X3 at Aagaaz 26" class="cypher-main-img">
            <div class="media-caption-overlay">
                <span><i class="fas fa-award"></i> Certificate of Appreciation Presentation &bull; Team Cypher X3</span>
            </div>
            <div class="photo-overlay-hover"><i class="fas fa-search-plus"></i><span>View Photo</span></div>
        </div>

        <div class="pace-card-content">
            <!-- Felicitated Members Section -->
            <div class="sih-team-container" style="margin-top: 4px; margin-bottom: 22px;">
                <h4 class="sih-team-title"><i class="fas fa-user-graduate"></i> Felicitated Team Members (Team Cypher X3):</h4>
                <div class="sih-members-grid cypher-members-grid">
                    <div class="member-chip highlight cypher-member-chip">
                        <i class="fas fa-user-check"></i>
                        <span><strong>Joyobrata Das</strong> &bull; M.Tech AI&amp;DS 5th Sem</span>
                    </div>
                    <div class="member-chip highlight cypher-member-chip">
                        <i class="fas fa-user-check"></i>
                        <span><strong>Akhilesh Rajoriya</strong> &bull; M.Tech AI&amp;DS 5th Sem</span>
                    </div>
                    <div class="member-chip highlight cypher-member-chip">
                        <i class="fas fa-user-check"></i>
                        <span><strong>Rohit Chaudhary</strong> &bull; M.Tech AI&amp;DS 5th Sem</span>
                    </div>
                </div>
            </div>

            <!-- Context / Narrative -->
            <div class="hackathon-highlight-narrative" style="margin-bottom: 24px;">
                <p>
                    During the official SDSF induction program <strong>Aagaaz 26</strong>, the <strong>Certificate of Appreciation</strong> was proudly awarded to <strong>Team Cypher X3</strong> (comprising <strong>Joyobrata Das</strong>, <strong>Akhilesh Rajoriya</strong>, and <strong>Rohit Chaudhary</strong> from <strong>M.Tech AI&amp;DS 5th Semester</strong>). The recognition honors their continuous drive for technical innovation, participation in national competitions, and active leadership in department technical initiatives.
                    <br> 
                    <br>
                    Joyobrata Das led the initiative — conceptualizing, developing, and maintaining the official SDSF website, which also spawned the SDSF Chronicle (the department's e-newspaper) and laid the technical groundwork for the SDSF Internship and Faculty Portals.

                    <br>
                    Akhilesh Rajoriya supported backend refinement and functional integration of these portals.

                    <br>
                    Rohit Chaudhary handled data ingestion, keeping the systems fed with structured, accurate information.
                </p>
            </div>

            <!-- Additional Photos Gallery Section (3 Photos Majorly) -->
            <div class="cypher-ceremony-gallery-block">
                <div class="cypher-gallery-header">
                    <h4 class="sih-team-title" style="margin-bottom: 4px;">
                        <i class="fas fa-images"></i> Ceremony Photo Gallery :
                    </h4>
                    <span class="cypher-gallery-hint"></span>
                </div>
                
                <div class="cypher-gallery-slots-grid">
                    <?php
                    $rendered_count = 0;
                    if (!empty($additional_certif_photos)):
                        foreach (array_slice($additional_certif_photos, 0, 3) as $rIdx => $rFile):
                            $rendered_count++;
                            $rFull = file_exists($certif_pace_dir . '/optimized/' . $rFile)
                                ? $base_path . 'photoes/Induction 2026/Certif Appre/optimized/' . rawurlencode($rFile)
                                : $base_path . 'photoes/Induction 2026/Certif Appre/' . rawurlencode($rFile);
                            $rThumb = file_exists($certif_pace_dir . '/thumbs/' . $rFile)
                                ? $base_path . 'photoes/Induction 2026/Certif Appre/thumbs/' . rawurlencode($rFile)
                                : $rFull;
                    ?>
                        <div class="cypher-gallery-photo-item" onclick="if(window.openGalleryLightbox) openGalleryLightbox('<?php echo htmlspecialchars($rFull, ENT_QUOTES); ?>', 'Team Cypher X3 Ceremony Photo <?php echo $rendered_count; ?>')">
                            <img src="<?php echo htmlspecialchars($rThumb, ENT_QUOTES); ?>" alt="Team Cypher X3 Ceremony Photo <?php echo $rendered_count; ?>" loading="lazy">
                            <span class="photo-overlay-hover"><i class="fas fa-search-plus"></i><span>View Photo</span></span>
                        </div>
                    <?php 
                        endforeach;
                    endif;
                    while ($rendered_count < 3): 
                        $rendered_count++;
                    ?>
                        <div class="cypher-gallery-placeholder-slot">
                            <div class="slot-icon"><i class="fas fa-camera"></i></div>
                            <span class="slot-title">Ceremony Photo <?php echo $rendered_count; ?></span>
                            <span class="slot-caption">Appears automatically when added to folder</span>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>

        </div>

    </article>

    <!-- ========================================================
         CARD 1: SIH 2025 RUNNER-UP & GUIDANCE TO CURRENT STUDENTS
         ======================================================== -->
    <article class="pace-featured-card sih-guidance-card" data-category="pace">
        
        <!-- PACE Card Media Header -->
        <div class="pace-card-media-wrap sih-media-wrap">
            <img src="<?php echo $base_path; ?>SDSF_News/photoes_news/SIH255RunnerUps/SIH 25 runnerup.jpeg" alt="Smart India Hackathon 2025 Runner-Up Team BreedVision18" class="pace-card-img sih-img">
            <div class="pace-card-overlay">
                <div class="pace-badge-row">
                    <span class="pace-card-badge"><i class="fas fa-trophy"></i> SIH 2025 RUNNER-UP</span>
                    <span class="venue-pill"><i class="fas fa-map-marker-alt"></i> LNCT Bhopal</span>
                    <span class="forum-status-pill"><span class="pulse-dot"></span> Senior Guidance</span>
                </div>
                <h3 class="pace-card-media-title">Smart India Hackathon 2025 (LNCT Bhopal): Runner-Up Guidance for Current Participants</h3>
            </div>
        </div>

        <div class="pace-card-content">
            
            <div class="pace-byline-bar">
                <div class="pace-author-info">
                    <i class="fas fa-award"></i> Team <strong>BreedVision18</strong> &bull; SIH 2025 Grand Finale Runner-Up
                </div>
                <div class="pace-meta-details">
                    <span><i class="fas fa-university"></i> LNCT Bhopal (Nodal Center)</span>
                    <span>&bull;</span>
                    <span><i class="fas fa-lightbulb"></i> Mentorship &amp; Tips</span>
                </div>
            </div>

            <!-- Participants Box -->
            <div class="sih-team-container">
                <h4 class="sih-team-title"><i class="fas fa-users"></i> Team Members &amp; Mentor:</h4>
                <div class="sih-members-grid">
                    <div class="member-chip highlight">
                        <i class="fas fa-user-check"></i>
                        <span><strong>Rohit Choudhary</strong> (SDSF)</span>
                    </div>
                    <div class="member-chip">
                        <i class="fas fa-user"></i>
                        <span><strong>Kartikey Yadav</strong> (IOT &bull; Team Lead)</span>
                    </div>
                    <div class="member-chip">
                        <i class="fas fa-user"></i>
                        <span><strong>Pradyumn Malviya</strong> (IOT)</span>
                    </div>
                    <div class="member-chip">
                        <i class="fas fa-user"></i>
                        <span><strong>Riddhi Thakkar</strong> (IOT)</span>
                    </div>
                    <div class="member-chip">
                        <i class="fas fa-user"></i>
                        <span><strong>Sarthak Malakar</strong> (IOT)</span>
                    </div>
                    <div class="member-chip">
                        <i class="fas fa-user"></i>
                        <span><strong>Aditya Agrawal</strong> (IIPS)</span>
                    </div>
                    <div class="member-chip mentor-chip">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <span><strong>Anupam Pandey</strong> (Mentor)</span>
                    </div>
                </div>
            </div>

            <!-- Runner-Up Guidance Quote Box -->
            <div class="dev-forum-quote-card sih-advice-box">
                <div class="quote-header">
                    <div class="dev-icon-bubble trophy-bubble">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <div>
                        <span class="quote-tag">Words of Advice from the SIH 2025 Runner-Up Team</span>
                        <h4 class="quote-subhead">Key Strategies for Students Preparing for Current SIH Rounds</h4>
                    </div>
                </div>

                <blockquote class="dev-quote-body">
                    “For the first round, the PPT is extremely important, so make sure to strictly follow the format and guidelines specified by SIH. Focus on understanding the problem statement clearly and use simple flowcharts, diagrams, and visuals to make your solution easy to understand. Try to include a working prototype for the internal rounds as well, wherever possible, to demonstrate how your idea actually works. The goal should be that even a non-technical person can understand the problem, solution, and impact without much explanation. Avoid unnecessary fancy elements—judges value simplicity, clarity, and how well you can explain your solution.”
                </blockquote>
            </div>

        </div>

    </article>


    <!-- ========================================================
         CARD 2: HACK FOR GREEN WINNERS (MICROSOFT OFFICE)
         ======================================================== -->
    <article class="pace-featured-card" data-category="pace">
        
        <div class="hackathon-showcase-header">
            <div class="pace-badge-row" style="margin-bottom: 8px;">
                <span class="pace-card-badge green-badge"><i class="fas fa-leaf"></i> HACK FOR GREEN भारत</span>
                <span class="venue-pill ms-pill"><i class="fab fa-microsoft"></i> Microsoft Office</span>
                <span class="forum-status-pill runnerup-pill"><i class="fas fa-medal"></i> 2nd Runner-Up</span>
            </div>
            <h3 class="hackathon-showcase-title">Hack for Green भारत — India’s First AI Sustainability Hackathon Winners</h3>
            <p class="hackathon-showcase-subtitle">
                <i class="fas fa-map-marker-alt"></i> Hosted &amp; felicitated at the <strong>Microsoft Office</strong> &bull; Organized by Tech Masters India
            </p>
        </div>

        <!-- Dual Media Layout (Trophy & Team) -->
        <div class="hackathon-dual-media">
            <div class="dual-media-item">
                <img src="<?php echo $base_path; ?>SDSF_News/photoes_news/Hack for green/team.jpeg" alt="Hack For Green Winners Team at Microsoft Office" class="dual-media-img" loading="lazy">
                <div class="media-caption-overlay">
                    <span><i class="fas fa-camera"></i> Award Ceremony &amp; Certificates &bull; Microsoft Office</span>
                </div>
            </div>
            <div class="dual-media-item">
                <img src="<?php echo $base_path; ?>SDSF_News/photoes_news/Hack for green/trophy.jpeg" alt="Hack For Green 2nd Runner-Up Trophy" class="dual-media-img contain-fit" loading="lazy">
                <div class="media-caption-overlay">
                    <span><i class="fas fa-trophy"></i> 2nd Runner-Up Trophy &bull; Tech Masters India</span>
                </div>
            </div>
        </div>

        <div class="pace-card-content">
            <div class="hackathon-leader-badge-row">
                <span class="leader-pill">
                    <i class="fas fa-user-check"></i> Team Leader: <strong>Rohit Choudhary</strong> (SDSF)
                </span>
            </div>
            <div class="hackathon-highlight-narrative">
                <p>
                    Demonstrating exceptional innovation in Artificial Intelligence for environmental and ecological sustainability, the team led by <strong>Rohit Choudhary</strong> (SDSF) secured the prestigious <strong>2nd Runner-Up Trophy</strong> at <em>Hack for Green भारत</em>. The national hackathon brought together leading student developers to engineer impactful, AI-powered solutions, with the final rounds and awards taking place at the state-of-the-art <strong>Microsoft Office</strong>.
                </p>
            </div>
        </div>

    </article>


    <!-- ========================================================
         CARD 3: INDIA - ISRAEL HACKATHON & SYMPOSIUM WINNERS
         ======================================================== -->
    <article class="pace-featured-card" data-category="pace">
        
        <div class="hackathon-showcase-header">
            <div class="pace-badge-row" style="margin-bottom: 8px;">
                <span class="pace-card-badge blue-gold-badge"><i class="fas fa-water"></i> INDIA - ISRAEL HACKATHON</span>
                <span class="venue-pill"><i class="fas fa-university"></i> GH Raisoni University</span>
                <span class="forum-status-pill winner-gold-pill"><i class="fas fa-trophy"></i> Winner &bull; ₹15,000 Cash Prize</span>
            </div>
            <h3 class="hackathon-showcase-title">India - Israel Hackathon &amp; Symposium: "The Circular Economy Water Challenge"</h3>
            <p class="hackathon-showcase-subtitle">
                <i class="fas fa-handshake"></i> Organized by <strong>GH Raisoni College of Engineering, Nagpur</strong> in association with the <strong>Consulate General of Israel in Mumbai &amp; MASHAV</strong>
            </p>
        </div>

        <!-- Dual Media Layout (Ceremony & Trophy/Cheque) -->
        <div class="hackathon-dual-media">
            <div class="dual-media-item">
                <img src="<?php echo $base_path; ?>SDSF_News/photoes_news/India-Israle/team.jpeg" alt="India - Israel Hackathon Winners on Stage" class="dual-media-img" loading="lazy">
                <div class="media-caption-overlay">
                    <span><i class="fas fa-award"></i> Cheque Awarding Stage Ceremony with Dignitaries</span>
                </div>
            </div>
            <div class="dual-media-item">
                <img src="<?php echo $base_path; ?>SDSF_News/photoes_news/India-Israle/win.jpeg" alt="Winner Trophy and ₹15,000 Cheque" class="dual-media-img contain-fit" loading="lazy">
                <div class="media-caption-overlay">
                    <span><i class="fas fa-trophy"></i> Winner Trophy &bull; ₹15,000 Cash Prize Cheque</span>
                </div>
            </div>
        </div>

        <div class="pace-card-content">
            <div class="hackathon-leader-badge-row">
                <span class="leader-pill">
                    <i class="fas fa-user-check"></i> Team Leader: <strong>Rohit Choudhary</strong> (SDSF)
                </span>
            </div>

            <!-- Hackathon Credentials Summary Table -->
            <div class="credentials-summary-grid">
                <div class="credential-item">
                    <span class="cred-label"><i class="fas fa-bullseye"></i> Challenge Theme</span>
                    <span class="cred-value">The Circular Economy Water Challenge</span>
                </div>
                <div class="credential-item">
                    <span class="cred-label"><i class="fas fa-user-check"></i> Team Leader</span>
                    <span class="cred-value"><strong>Rohit Choudhary</strong> (SDSF)</span>
                </div>
                <div class="credential-item">
                    <span class="cred-label"><i class="fas fa-award"></i> Winning Team</span>
                    <span class="cred-value">Classic Coders</span>
                </div>
                <div class="credential-item">
                    <span class="cred-label"><i class="fas fa-rupee-sign"></i> Prize Awarded</span>
                    <span class="cred-value">₹15,000 Cash Award &amp; Official Trophy</span>
                </div>
                <div class="credential-item">
                    <span class="cred-label"><i class="fas fa-globe-asia"></i> International Partner</span>
                    <span class="cred-value">Consulate General of Israel &amp; MASHAV</span>
                </div>
            </div>
        </div>

    </article>


    <!-- ========================================================
         CARD 4: DEV'S FORUM INITIATIVE & OPEN CALL FOR IDEAS
         ======================================================== -->
    <article class="pace-featured-card" data-category="pace">
        
        <!-- PACE Card Media Header -->
        <div class="pace-card-media-wrap">
            <img src="<?php echo $base_path; ?>photoes/about_ai.png" alt="SDSF PACE and Innovation" class="pace-card-img">
            <div class="pace-card-overlay">
                <div class="pace-badge-row">
                    <span class="pace-card-badge"><i class="fas fa-bolt"></i> PACE &bull; DEV'S FORUM INITIATIVE</span>
                    <span class="forum-status-pill"><span class="pulse-dot"></span> Active Call for Ideas</span>
                </div>
                <h3 class="pace-card-media-title">Let’s Build, Innovate &amp; Grow Together: Beyond GitHub &amp; LinkedIn</h3>
            </div>
        </div>

        <div class="pace-card-content">
            
            <div class="pace-byline-bar">
                <div class="pace-author-info">
                    <i class="fas fa-terminal"></i> From the <strong>Dev’s Forum &amp; PACE Initiative</strong>
                </div>
                <div class="pace-meta-details">
                    <span><i class="fas fa-map-marker-alt"></i> SDSF, DAVV Indore</span>
                    <span>&bull;</span>
                    <span><i class="fas fa-lightbulb"></i> Open to All Students</span>
                </div>
            </div>

            <!-- Dev's Forum Quote Card -->
            <div class="dev-forum-quote-card">
                <div class="quote-header">
                    <div class="dev-icon-bubble">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <div>
                        <span class="quote-tag">A Message from the Dev’s Forum</span>
                        <h4 class="quote-subhead">Encouraging Student-Led Ideas &amp; Real-World Projects</h4>
                    </div>
                </div>

                <blockquote class="dev-quote-body">
                    “We would like to encourage students to submit interesting ideas and projects. Let’s not limit only to GitHub and LinkedIn posting your ideas — let’s build and grow together!”
                </blockquote>

                <p class="dev-quote-context">
                    Got an idea you want to bring to life? We welcome proposals related to any field — whether it is <strong>Data Science &amp; Analytics</strong>, <strong>Curriculums &amp; Learning Modules</strong>, <strong>Software Systems &amp; Web Apps</strong>, or other emerging domains. Our team will collaborate, mentor, and help you transform concepts into impactful, deployable products.
                </p>
            </div>

            <!-- Focus Domains Row -->
            <div class="idea-domains-row">
                <span class="domain-pill"><i class="fas fa-brain"></i> Data Science</span>
                <span class="domain-pill"><i class="fas fa-book-reader"></i> Curriculums</span>
                <span class="domain-pill"><i class="fas fa-laptop-code"></i> Software Systems</span>
                <span class="domain-pill"><i class="fas fa-robot"></i> Artificial Intelligence</span>
                <span class="domain-pill"><i class="fas fa-layer-group"></i> Open Research</span>
            </div>


        </div>

    </article>

</div>
