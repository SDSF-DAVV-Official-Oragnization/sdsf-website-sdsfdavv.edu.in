<?php 
$base_path = '../'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#162b57">
    <title>Faculty Mentor | Career Nirmaan - SDSF DAVV</title>
    
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="career.css">

    <!-- Google Fonts & FontAwesome -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,600&family=Oswald:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .mentor-profile-section {
            padding: 50px 0 70px 0;
        }
        .mentor-card-main {
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 10px 30px rgba(15, 23, 42, 0.08);
            overflow: hidden;
            margin-bottom: 40px;
        }
        .mentor-card-header {
            background: linear-gradient(135deg, #09122a 0%, #1e3a8a 100%);
            color: #ffffff;
            padding: 40px 30px;
            display: flex;
            align-items: center;
            gap: 25px;
            flex-wrap: wrap;
        }
        .mentor-avatar-box {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.15);
            border: 3px solid #f2b300;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.4rem;
            color: #ffffff;
            flex-shrink: 0;
        }
        .mentor-header-info h2 {
            font-family: 'Oswald', sans-serif;
            font-size: 2.2rem;
            margin: 0 0 6px 0;
            color: #ffffff;
            letter-spacing: 0.5px;
        }
        .mentor-header-info .mentor-title-tag {
            display: inline-block;
            background: rgba(242, 179, 0, 0.2);
            color: #f2b300;
            border: 1px solid rgba(242, 179, 0, 0.5);
            padding: 3px 12px;
            border-radius: 20px;
            font-size: 0.82rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 8px;
        }
        .mentor-header-info p {
            margin: 0;
            color: #cbd5e1;
            font-size: 0.95rem;
        }
        .mentor-card-body {
            padding: 35px 30px;
        }
        .mentor-contacts-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 20px;
            margin-bottom: 35px;
        }
        .mentor-contact-item {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 18px 20px;
            display: flex;
            align-items: center;
            gap: 15px;
            transition: border-color 0.2s ease, transform 0.2s ease;
        }
        .mentor-contact-item:hover {
            border-color: #cbd5e1;
            transform: translateY(-2px);
        }
        .mci-icon {
            width: 46px;
            height: 46px;
            border-radius: 8px;
            background: #eff6ff;
            color: #1e3a8a;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            flex-shrink: 0;
        }
        .mci-info label {
            display: block;
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: #64748b;
            margin-bottom: 3px;
        }
        .mci-info a, .mci-info span {
            font-size: 1.05rem;
            font-weight: 600;
            color: #0f172a;
            text-decoration: none;
            word-break: break-all;
        }
        .mci-info a:hover {
            color: #1e3a8a;
            text-decoration: underline;
        }
        .mentor-details-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 25px;
            margin-bottom: 30px;
        }
        .mentor-detail-box {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 24px;
        }
        .mentor-detail-box h3 {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.15rem;
            color: #0f172a;
            margin: 0 0 14px 0;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .mentor-detail-box h3 i {
            color: #1e3a8a;
        }
        .mentor-detail-box ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .mentor-detail-box ul li {
            padding: 8px 0;
            border-bottom: 1px dashed #e2e8f0;
            font-size: 0.92rem;
            color: #475569;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .mentor-detail-box ul li:last-child {
            border-bottom: none;
        }
        .mentor-detail-box ul li i {
            color: #16a34a;
            font-size: 0.85rem;
        }
        .mentor-cta-bar {
            background: #f8fafc;
            border-top: 1px solid #e2e8f0;
            padding: 22px 30px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
            flex-wrap: wrap;
        }
        .mentor-cta-bar a {
            font-size: 0.9rem;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        .btn-tt-link {
            background: #1e3a8a;
            color: #ffffff !important;
            padding: 10px 20px;
            border-radius: 6px;
            transition: background 0.2s ease;
        }
        .btn-tt-link:hover {
            background: #0f172a;
        }
    </style>
</head>

<body id="top" class="career-page">

    <!-- ===== Header / Navbar ===== -->
    <?php include("../header.php"); ?>

    <!-- ===== Main Content ===== -->
    <main class="page-content">

        <!-- ===== Hero Section ===== -->
        <section class="career-hero">
            <img src="career_hero_bg.jpg" alt="Career Nirmaan Background" class="career-hero-bg-img">
            <div class="career-hero-overlay"></div>
            <div class="career-hero-content">
                <div class="hero-badge">
                    <i class="fas fa-chalkboard-teacher"></i> Faculty Leadership &amp; Guidance
                </div>
                <h1 class="hero-title">CAREER NIRMAAN MENTOR</h1>
                <h2 class="hero-subtitle">Official Placement In-Charge &amp; Student Career Advisory</h2>
                <p class="hero-intro-text">
                    Dedicated faculty mentorship providing career roadmap navigation, corporate aptitude guidance, resume audits, and mock interview preparations.
                </p>
            </div>
        </section>

        <div class="content-container mentor-profile-section">

            <!-- Mentor Card -->
            <div class="mentor-card-main">
                <div class="mentor-card-header">
                    <div class="mentor-avatar-box">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <div class="mentor-header-info">
                        <span class="mentor-title-tag">Faculty In-Charge &bull; Placement Mentor</span>
                        <h2>Ms. Riya Sadawana</h2>
                        <p>School of Data Science and Forecasting &bull; Devi Ahilya Vishwavidyalaya (DAVV), Indore</p>
                    </div>
                </div>

                <div class="mentor-card-body">
                    <!-- Contact Cards -->
                    <div class="mentor-contacts-grid">
                        <div class="mentor-contact-item">
                            <div class="mci-icon"><i class="fas fa-phone-alt"></i></div>
                            <div class="mci-info">
                                <label>Contact Number</label>
                                <a href="tel:9009000301">+91 9009000301</a>
                            </div>
                        </div>

                        <div class="mentor-contact-item">
                            <div class="mci-icon"><i class="fas fa-envelope"></i></div>
                            <div class="mci-info">
                                <label>Official Email</label>
                                <a href="mailto:riyasadawana@gmail.com">riyasadawana@gmail.com</a>
                            </div>
                        </div>

                        <div class="mentor-contact-item">
                            <div class="mci-icon"><i class="fas fa-hashtag"></i></div>
                            <div class="mci-info">
                                <label>Program / Course Code</label>
                                <span>PLA-CN (Career Nirmaan)</span>
                            </div>
                        </div>

                        <div class="mentor-contact-item">
                            <div class="mci-icon"><i class="fas fa-building"></i></div>
                            <div class="mci-info">
                                <label>Office Location</label>
                                <span>Faculty Wing, Takshila Campus</span>
                            </div>
                        </div>
                    </div>

                    <!-- Details Grid -->
                    <div class="mentor-details-grid">
                        <div class="mentor-detail-box">
                            <h3><i class="fas fa-compass"></i> Mentorship &amp; Advisory Scope</h3>
                            <ul>
                                <li><i class="fas fa-check"></i> Career path planning for Data Science &amp; AI</li>
                                <li><i class="fas fa-check"></i> Resume review &amp; GitHub/portfolio optimization</li>
                                <li><i class="fas fa-check"></i> Quantitative aptitude &amp; coding assessment strategy</li>
                                <li><i class="fas fa-check"></i> Soft skills, GD &amp; behavioral interview coaching</li>
                            </ul>
                        </div>

                        <div class="mentor-detail-box">
                            <h3><i class="fas fa-user-clock"></i> Consultation &amp; Office Hours</h3>
                            <ul>
                                <li><i class="fas fa-check"></i> Weekday consultation: 03:00 PM – 05:00 PM</li>
                                <li><i class="fas fa-check"></i> Weekend flagship mock interviews panelist</li>
                                <li><i class="fas fa-check"></i> One-on-one sessions by prior appointment</li>
                                <li><i class="fas fa-check"></i> Student walk-ins welcome during office hours</li>
                            </ul>
                        </div>
                    </div>

                </div>

                <!-- Footer Bar -->
                <div class="mentor-cta-bar">
                    <span style="font-size:0.92rem; color:#64748b;">
                        <i class="fas fa-calendar-alt"></i> Looking for the complete weekly class schedule?
                    </span>
                    <a href="timetable.php" class="btn-tt-link">
                        View Career Nirmaan Time Table <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

        </div>
    </main>

    <!-- Global Footer -->
    <?php include("../footer.php"); ?>

    <script src="career.js"></script>
</body>
</html>
