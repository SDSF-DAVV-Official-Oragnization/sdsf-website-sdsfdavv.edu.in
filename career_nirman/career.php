<?php 
$base_path = '../'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- App / mobile -->
    <meta name="theme-color" content="#162b57">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <title>Career Nirmaan | SDSF - School of Data Science and Forecasting</title>
    
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="career.css">

    <!-- Google Fonts & FontAwesome -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,600&family=Oswald:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body id="top" class="career-page">

    <!-- ===== Header / Navbar ===== -->
    <?php include("../header.php"); ?>

    <!-- ===== Main Content ===== -->
    <main class="page-content">

        <!-- ===== Hero Section ===== -->
        <section class="career-hero">
            <img src="career_hero_bg.jpg" alt="Career Nirmaan Training & Placement Background" class="career-hero-bg-img">
            <div class="career-hero-overlay"></div>
            <div class="career-hero-content">
                <div class="hero-badge">
                    <i class="fas fa-briefcase"></i> Training & Placement Initiative
                </div>
                <h1 class="hero-title">CAREER NIRMAAN</h1>
                <h2 class="hero-subtitle">Special Placement Preparation Classes & Mock Interview Drives</h2>
                <p class="hero-intro-text">
                    A dedicated departmental career acceleration program at the School of Data Science and Forecasting, 
                    designed to hone analytical rigor, core technical competencies, and professional interview readiness.
                </p>
            </div>
        </section>

        <!-- ===== Motivational Accent Banner ===== -->
        <div class="content-container">
            <div class="motto-banner-card">
                <div class="motto-icon-box">
                    <i class="fas fa-rocket"></i>
                </div>
                <div class="motto-text-box">
                    <div class="motto-tag">*** Invest in your future ***</div>
                    <p class="motto-quote">
                        "Attend these specialized placement preparation sessions and turn your hard work into career success!"
                    </p>
                </div>
                <div class="motto-action-box">
                    <button class="btn-print-schedule" onclick="window.print()" title="Print Time Table">
                        <i class="fas fa-print"></i> Print Schedule
                    </button>
                </div>
            </div>

            <!-- ===== TIME TABLE SECTION ===== -->
            <section class="timetable-section" id="timetable">
                <div class="section-card-header">
                    <div class="header-left">
                        <span class="header-eyebrow"><i class="fas fa-clock"></i> Weekly Class Schedule</span>
                        <h2 class="section-title">Official Time Table</h2>
                        <p class="section-subtitle">
                            Devi Ahilya Vishwavidyalaya • School of Data Science and Forecasting
                        </p>
                    </div>
                   
                </div>

                <!-- Schedule Mode Toggle / Filter Tabs -->
                <div class="schedule-filters-bar">
                    <div class="filter-tabs-group">
                        <button class="filter-tab-btn active" data-filter="all">
                            <i class="fas fa-calendar-week"></i> Full Week
                        </button>
                        <button class="filter-tab-btn" data-filter="weekday">
                            <i class="fas fa-book-reader"></i> Weekday Batch Sessions
                        </button>
                        <button class="filter-tab-btn" data-filter="weekend">
                            <i class="fas fa-users-cog"></i> Weekend Common Prep & Mocks
                        </button>
                    </div>
                    <div class="view-legend">
                        <span class="legend-item"><span class="legend-dot dot-batch"></span> Program Specific</span>
                        <span class="legend-item"><span class="legend-dot dot-common"></span> Common Placement Prep</span>
                        <span class="legend-item"><span class="legend-dot dot-mock"></span> Mock Interviews</span>
                    </div>
                </div>

                <!-- Responsive Table Wrapper -->
                <div class="table-responsive-box">
                    <table class="career-timetable" id="careerTimetable">
                        <thead>
                            <tr class="thead-main">
                                <th class="col-day">DAY</th>
                                <th class="col-time">10:00 – 11:00</th>
                                <th class="col-time">11:00 – 12:00</th>
                                <th class="col-time">12:00 – 01:00</th>
                                <th class="col-break">01:00 – 02:00<br><span class="break-tag">LUNCH / RECESS</span></th>
                                <th class="col-time">03:00 – 04:00</th>
                                <th class="col-time">04:00 – 05:00</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Monday -->
                            <tr class="timetable-row weekday-row" data-type="weekday">
                                <td class="day-cell">
                                    <span class="day-badge">MONDAY</span>
                                </td>
                                <td class="empty-cell" data-label="10:00-11:00"><span class="dash">—</span></td>
                                <td class="empty-cell" data-label="11:00-12:00"><span class="dash">—</span></td>
                                <td class="empty-cell" data-label="12:00-01:00"><span class="dash">—</span></td>
                                <td class="break-cell" data-label="01:00-02:00"><span class="recess-pill">Break</span></td>
                                <td class="slot-cell batch-slot" data-label="03:00-04:00">
                                    <div class="session-card">
                                        <div class="session-tag tag-mba">MBA (BA) – III</div>
                                        <div class="session-name">Business Analytics Batch Prep</div>
                                    </div>
                                </td>
                                <td class="empty-cell" data-label="04:00-05:00"><span class="dash">—</span></td>
                            </tr>

                            <!-- Tuesday -->
                            <tr class="timetable-row weekday-row" data-type="weekday">
                                <td class="day-cell">
                                    <span class="day-badge">TUESDAY</span>
                                </td>
                                <td class="empty-cell" data-label="10:00-11:00"><span class="dash">—</span></td>
                                <td class="empty-cell" data-label="11:00-12:00"><span class="dash">—</span></td>
                                <td class="empty-cell" data-label="12:00-01:00"><span class="dash">—</span></td>
                                <td class="break-cell" data-label="01:00-02:00"><span class="recess-pill">Break</span></td>
                                <td class="slot-cell batch-slot" data-label="03:00-04:00">
                                    <div class="session-card">
                                        <div class="session-tag tag-aids">M.Tech. (AI&DS) – IX</div>
                                        <div class="session-name">AI & Data Science Batch Prep</div>
                                    </div>
                                </td>
                                <td class="empty-cell" data-label="04:00-05:00"><span class="dash">—</span></td>
                            </tr>

                            <!-- Wednesday -->
                            <tr class="timetable-row weekday-row" data-type="weekday">
                                <td class="day-cell">
                                    <span class="day-badge">WEDNESDAY</span>
                                </td>
                                <td class="empty-cell" data-label="10:00-11:00"><span class="dash">—</span></td>
                                <td class="empty-cell" data-label="11:00-12:00"><span class="dash">—</span></td>
                                <td class="empty-cell" data-label="12:00-01:00"><span class="dash">—</span></td>
                                <td class="break-cell" data-label="01:00-02:00"><span class="recess-pill">Break</span></td>
                                <td class="slot-cell batch-slot" data-label="03:00-04:00">
                                    <div class="session-card">
                                        <div class="session-tag tag-msc">M.Sc. (DSA) – III</div>
                                        <div class="session-name">Data Science & Analytics Batch Prep</div>
                                    </div>
                                </td>
                                <td class="empty-cell" data-label="04:00-05:00"><span class="dash">—</span></td>
                            </tr>

                            <!-- Thursday -->
                            <tr class="timetable-row weekday-row" data-type="weekday">
                                <td class="day-cell">
                                    <span class="day-badge">THURSDAY</span>
                                </td>
                                <td class="empty-cell" data-label="10:00-11:00"><span class="dash">—</span></td>
                                <td class="empty-cell" data-label="11:00-12:00"><span class="dash">—</span></td>
                                <td class="empty-cell" data-label="12:00-01:00"><span class="dash">—</span></td>
                                <td class="break-cell" data-label="01:00-02:00"><span class="recess-pill">Break</span></td>
                                <td class="slot-cell batch-slot" data-label="03:00-04:00">
                                    <div class="session-card">
                                        <div class="session-tag tag-ds">M.Tech. (DS/BDA) – III</div>
                                        <div class="session-name">Data Science & Big Data Batch Prep</div>
                                    </div>
                                </td>
                                <td class="empty-cell" data-label="04:00-05:00"><span class="dash">—</span></td>
                            </tr>

                            <!-- Friday -->
                            <tr class="timetable-row weekend-row" data-type="weekend">
                                <td class="day-cell">
                                    <span class="day-badge day-highlight">FRIDAY</span>
                                </td>
                                <td class="empty-cell" data-label="10:00-11:00"><span class="dash">—</span></td>
                                <td class="empty-cell" data-label="11:00-12:00"><span class="dash">—</span></td>
                                <td class="empty-cell" data-label="12:00-01:00"><span class="dash">—</span></td>
                                <td class="break-cell" data-label="01:00-02:00"><span class="recess-pill">Break</span></td>
                                <td colspan="2" class="slot-cell common-slot" data-label="03:00-05:00">
                                    <div class="session-card session-spanned">
                                        <div class="session-tag tag-common">
                                            <i class="fas fa-users"></i> ALL BATCHES
                                        </div>
                                        <div class="session-name">Common Placement Preparation</div>
                                        <div class="session-desc">Aptitude, Soft Skills, Group Discussions & Quantitative Problem Solving</div>
                                        <div class="session-meta-row">
                                            <span><i class="fas fa-clock"></i> 03:00 PM – 05:00 PM</span>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <!-- Saturday -->
                            <tr class="timetable-row weekend-row" data-type="weekend">
                                <td class="day-cell">
                                    <span class="day-badge day-highlight">SATURDAY</span>
                                </td>
                                <td class="empty-cell" data-label="10:00-11:00"><span class="dash">—</span></td>
                                <td class="empty-cell" data-label="11:00-12:00"><span class="dash">—</span></td>
                                <td class="empty-cell" data-label="12:00-01:00"><span class="dash">—</span></td>
                                <td class="break-cell" data-label="01:00-02:00"><span class="recess-pill">Break</span></td>
                                <td colspan="2" class="slot-cell common-slot" data-label="03:00-05:00">
                                    <div class="session-card session-spanned">
                                        <div class="session-tag tag-common">
                                            <i class="fas fa-code"></i> ALL BATCHES
                                        </div>
                                        <div class="session-name">Common Placement Preparation</div>
                                        <div class="session-desc">Technical Coding Practice, Machine Learning Case Studies & System Design</div>
                                        <div class="session-meta-row">
                                            <span><i class="fas fa-clock"></i> 03:00 PM – 05:00 PM</span>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <!-- Sunday -->
                            <tr class="timetable-row weekend-row" data-type="weekend">
                                <td class="day-cell">
                                    <span class="day-badge day-special">SUNDAY</span>
                                </td>
                                <td class="empty-cell" data-label="10:00-11:00"><span class="dash">—</span></td>
                                <td colspan="2" class="slot-cell mock-slot" data-label="11:00-01:00">
                                    <div class="session-card session-spanned session-mock">
                                        <div class="session-tag tag-mock">
                                            <i class="fas fa-microphone-alt"></i> FLAGSHIP INTERVIEW DRIVE
                                        </div>
                                        <div class="session-name">Common Mock Interviews</div>
                                        <div class="session-desc">One-on-One Technical, HR & Analytical Panel Simulations with Comprehensive Feedback</div>
                                        <div class="session-meta-row">
                                            <span><i class="fas fa-clock"></i> 11:00 AM – 01:00 PM</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="break-cell" data-label="01:00-02:00"><span class="recess-pill">Break</span></td>
                                <td class="empty-cell" data-label="03:00-04:00"><span class="dash">—</span></td>
                                <td class="empty-cell" data-label="04:00-05:00"><span class="dash">—</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Faculty & Course Metadata Card Footer -->
                <div class="course-meta-footer">
                    <div class="meta-item-box">
                        <span class="meta-label"><i class="fas fa-hashtag"></i> Course Code</span>
                        <span class="meta-value code-pill">PLA-CN</span>
                    </div>
                    <div class="meta-item-box">
                        <span class="meta-label"><i class="fas fa-book"></i> Course Title</span>
                        <span class="meta-value">Career Nirmaan</span>
                    </div>
                    <div class="meta-item-box">
                        <span class="meta-label"><i class="fas fa-chalkboard-teacher"></i> Faculty In-Charge</span>
                        <span class="meta-value teacher-name">Ms. Riya Sadawana</span>
                    </div>
                    <div class="meta-item-box">
                        <span class="meta-label"><i class="fas fa-phone"></i> Contact No.</span>
                        <a href="tel:9009000301" class="meta-link"><i class="fas fa-phone-alt"></i> 9009000301</a>
                    </div>
                    <div class="meta-item-box">
                        <span class="meta-label"><i class="fas fa-envelope"></i> Official Email</span>
                        <a href="mailto:riyasadawana@gmail.com" class="meta-link"><i class="fas fa-envelope-open-text"></i> riyasadawana@gmail.com</a>
                    </div>
                </div>
            </section>

            <!-- ===== PILLARS / PROGRAM HIGHLIGHTS ===== -->
            <section class="pillars-section">
                <div class="section-center-head">
                    <span class="section-eyebrow"><i class="fas fa-layer-group"></i> Comprehensive Training Model</span>
                    <h2 class="section-main-title">Core Pillars of Career Nirmaan</h2>
                    <div class="title-accent-bar"></div>
                    <p class="section-lead-text">
                        Engineered to bridge the gap between academic mastery and industry hiring expectations through continuous, targeted skill enhancement.
                    </p>
                </div>

                <div class="pillars-grid">
                    <div class="pillar-card">
                        <div class="pillar-icon-wrap icon-blue">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h3>Technical & Coding Mastery</h3>
                        <p>Comprehensive drills in Python, SQL, R, Machine Learning architectures, Data Structures & Algorithms, and System Analytics.</p>
                        <ul class="pillar-features">
                            <li><i class="fas fa-check-circle"></i> Live Coding Exercises</li>
                            <li><i class="fas fa-check-circle"></i> Data Science Case Studies</li>
                        </ul>
                    </div>

                    <div class="pillar-card">
                        <div class="pillar-icon-wrap icon-gold">
                            <i class="fas fa-calculator"></i>
                        </div>
                        <h3>Quantitative Aptitude & Logic</h3>
                        <p>Structured practice for company-specific online assessment tests (OA), quantitative ability, logical reasoning, and data interpretation.</p>
                        <ul class="pillar-features">
                            <li><i class="fas fa-check-circle"></i> Speed & Accuracy Drills</li>
                            <li><i class="fas fa-check-circle"></i> Company-Pattern Mock Tests</li>
                        </ul>
                    </div>

                    <div class="pillar-card">
                        <div class="pillar-icon-wrap icon-purple">
                            <i class="fas fa-comments"></i>
                        </div>
                        <h3>Mock Interviews & Soft Skills</h3>
                        <p>Simulated HR, managerial, and multi-panel technical interviews designed to build confidence, articulation, and situational response skills.</p>
                        <ul class="pillar-features">
                            <li><i class="fas fa-check-circle"></i> 1-on-1 Detailed Feedback</li>
                            <li><i class="fas fa-check-circle"></i> Group Discussion (GD) Rounds</li>
                        </ul>
                    </div>

                    <div class="pillar-card">
                        <div class="pillar-icon-wrap icon-emerald">
                            <i class="fas fa-file-invoice"></i>
                        </div>
                        <h3>Resume & Portfolio Reviews</h3>
                        <p>Optimizing student resumes with ATS compliance, GitHub project showcases, LinkedIn branding, and impactful project demonstrations.</p>
                        <ul class="pillar-features">
                            <li><i class="fas fa-check-circle"></i> ATS Resume Formatting</li>
                            <li><i class="fas fa-check-circle"></i> Project Portfolio Mentorship</li>
                        </ul>
                    </div>
                </div>
            </section>





            <!-- ===== UPDATES & NOTICES SECTION ===== -->
            <section class="notices-section" id="updates-notices">
                <div class="notices-card">
                    <div class="notices-head">
                        <div class="notices-title-group">
                            <span class="notices-badge"><i class="fas fa-bullhorn"></i> Notice Board</span>
                            <h3 class="notices-heading">Updates &amp; Notices</h3>
                        </div>
                        <span class="live-pulse-badge"><span class="pulse-dot"></span> Live Feed</span>
                    </div>

                    <!-- Continuous Moving / Dragging Text Line -->
                    <div class="notices-ticker-track" id="noticesTicker" title="Hover to pause or drag left/right">
                        <div class="notices-ticker-label">
                            <i class="fas fa-bell"></i> LATEST
                        </div>
                        <div class="notices-marquee-container" id="marqueeContainer">
                            <div class="notices-marquee-content" id="marqueeContent">
                                <span class="ticker-text-item">
                                    <i class="fas fa-bullhorn"></i> Students are requested to see the updates section for latest notices and official informations.
                                </span>
                                <span class="ticker-bullet">&bull;</span>
                                <span class="ticker-text-item">
                                    <i class="fas fa-user-graduate"></i> Students are requested to attend all designated classes and placement training sessions regularly.
                                </span>
                                <span class="ticker-bullet">&bull;</span>
                                <!-- Duplicate pair for continuous seamless scrolling -->
                                <span class="ticker-text-item">
                                    <i class="fas fa-bullhorn"></i> Students are requested to see the updates section for latest notices and official informations.
                                </span>
                                <span class="ticker-bullet">&bull;</span>
                                <span class="ticker-text-item">
                                    <i class="fas fa-user-graduate"></i> Students are requested to attend all designated classes and placement training sessions regularly.
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="notices-body">
                        <div class="notice-item">
                            <div class="notice-icon"><i class="fas fa-bell"></i></div>
                            <div class="notice-content">
                                <span class="notice-tag">Announcement</span>
                                <p class="notice-text">Important updates shall be notified here.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </main>

    <!-- ===== Footer ===== -->
    <?php include("../footer.php"); ?>

    <!-- Page Specific Script -->
    <script src="career.js"></script>
</body>
</html>
