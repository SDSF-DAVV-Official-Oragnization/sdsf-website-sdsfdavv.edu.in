<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- App / mobile -->
  <meta name="theme-color" content="#162b57">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  
  <title>SDSF | School of Data Science and Forecasting</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="SDSF_News/news.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <!-- font styles importing -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700;800;900&family=Playfair+Display:ital,wght@0,600;0,700;0,800;0,900;1,400;1,700&family=Lora:ital,wght@0,400;0,500;0,600;1,400&family=Oswald:wght@300;400;500;600;700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500&display=swap" rel="stylesheet">
</head>
<body>

  <!-- ===== Header / Navbar ===== -->
  <?php include("header.php"); ?>

  <!-- ===== Hero Section (Image Slider) ===== -->
  <section class="hero-slider">
    <div class="slide fade">
      <img src="photoes/IMG_6745.jpg" alt="Slide 1">
      <div class="hero-text">
        
        <h1 class="code-colored">
          <span class="c1"></span>
          <span class="c1"></span><br>
          <p class="tagline">Empowering Through Analytics.</p>
          <span class="c1">Logical</span><br>
          <span class="c3">Thinking Ahead</span>
        </h1>
      </div>
    </div>


    <div class="slide fade">
      <img src="photoes/collab2.jpg" alt="Slide 2">
      <div class="hero-text">
        
        <h1 class="code-colored">
          <span class="c1"></span>
          <span class="c1"></span><br>
          <p class="tagline">Decode. Analyze. Predict</p>
          <span class="c1">Turning</span><br>
          <span class="c3">Code Into Clarity</span>
        </h1>
      </div>
    </div>

     <div class="slide fade">
      <img src="photoes/IMG_6727.jpg" alt="Slide 3">
      <div class="hero-text">
        
        <h1 class="code-colored">
          <span class="c1"></span>
          <span class="c1"></span><br>
          <p class="tagline">Data is Power.</p>
          <span class="c1">Numbers</span><br>
          <span class="c3">That Tell Stories</span>
        </h1>
      </div>
    </div>

    <div class="slide fade">
      <img src="photoes/collab3.jpg" alt="Slide 4">
      <div class="hero-text">
        
        <h1 class="code-colored">
          <span class="c1"></span>
          <span class="c1"></span><br>
          <p class="tagline">Learning Beyond Limits.</p>
          <span class="c1">Empowering</span><br>
          <span class="c3">The Innovators</span>
        </h1>
      </div>
    </div>

    

    <div class="slide fade">
      <img src="photoes/indexhero1.jpg" alt="Slide 5">
      <div class="hero-text">
        
        <h1 class="code-colored">
          <span class="c1"></span>
          <span class="c1"></span><br>
          <p class="tagline">Possibility. Knowledge. Empowerment.</p>
          <span class="c1">Discovery</span><br>
          <span class="c3">Starts With Data</span>
        </h1>
      </div>
    </div>

    <div class="slide fade">
      <img src="photoes/slide_image_event.jpeg" alt="Slide 6">
      <div class="hero-text">
        
        <h1 class="code-colored">
          <span class="c1"></span>
          <span class="c1"></span><br>
          <p class="tagline">Togetherness to Success.</p>
          <span class="c1">Analytics</span><br>
          <span class="c3">Driving To Action</span>
        </h1>
      </div>
    </div>

    <!-- Arrow Buttons -->
    <a class="prev" onClick="plusSlides(-1)">&#10094;</a>
    <a class="next" onClick="plusSlides(1)">&#10095;</a>

    <!-- Dots for manual control -->
    <div class="dots">
      <span class="dot" onClick="currentSlide(1)"></span>
      <span class="dot" onClick="currentSlide(2)"></span>
      <span class="dot" onClick="currentSlide(3)"></span>
      <span class="dot" onClick="currentSlide(4)"></span>
      <span class="dot" onClick="currentSlide(5)"></span>
      <span class="dot" onClick="currentSlide(6)"></span>
    </div>
  </section>

  <script>
    let currentSlideIndex = 1;
    let slideTimer = null;
    const SLIDE_INTERVAL = 5000;

    function showSlide(n) {
      const slides = document.querySelectorAll(".hero-slider .slide");
      const dots = document.querySelectorAll(".hero-slider .dot");
      if (slides.length === 0) return;

      // Always clear any pending timer so manual clicks don't cause multiple concurrent timers
      if (slideTimer) {
        clearTimeout(slideTimer);
        slideTimer = null;
      }

      // Wraparound boundaries
      if (n > slides.length) {
        currentSlideIndex = 1;
      } else if (n < 1) {
        currentSlideIndex = slides.length;
      } else {
        currentSlideIndex = n;
      }

      for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (let i = 0; i < dots.length; i++) {
        dots[i].classList.remove("active");
      }

      slides[currentSlideIndex - 1].style.display = "block";
      if (dots[currentSlideIndex - 1]) {
        dots[currentSlideIndex - 1].classList.add("active");
      }

      // Restart auto-slide timer cleanly
      slideTimer = setTimeout(function() {
        showSlide(currentSlideIndex + 1);
      }, SLIDE_INTERVAL);
    }

    function plusSlides(n) {
      showSlide(currentSlideIndex + n);
    }

    function currentSlide(n) {
      showSlide(n);
    }

    // Initialize on DOM load and handle hover pausing
    document.addEventListener("DOMContentLoaded", function() {
      showSlide(1);

      const slider = document.querySelector(".hero-slider");
      if (slider) {
        slider.addEventListener("mouseenter", function() {
          if (slideTimer) {
            clearTimeout(slideTimer);
            slideTimer = null;
          }
        });
        slider.addEventListener("mouseleave", function() {
          if (!slideTimer) {
            slideTimer = setTimeout(function() {
              showSlide(currentSlideIndex + 1);
            }, SLIDE_INTERVAL);
          }
        });
      }
    });
  </script>

  <!-- ===== GDG SDSF Tech Club Feature ===== -->
  <section class="gdg-home-banner" aria-labelledby="gdg-home-title">
    <img class="gdg-home-banner-image" src="gdg/gdgbg.jpeg" alt="" aria-hidden="true">
    <div class="gdg-home-banner-overlay"></div>
    <div class="gdg-home-banner-content">
      <img class="gdg-home-logo" src="gdg/logo.png" alt="Google Developer Groups On Campus, School of Data Science and Forecasting">
      <div class="gdg-home-copy">
        <span class="gdg-home-kicker"><i class="fab fa-google" aria-hidden="true"></i> Our Campus Tech Club</span>
        <h2 id="gdg-home-title">Curious minds. <span>Real-world tech.</span></h2>
        <p>
          GDG SDSF brings students together to explore technology, learn by building,
          and turn bold ideas into useful projects. Connect with fellow creators,
          grow your skills, and help shape what comes next.
        </p>
        <a class="gdg-home-cta" href="events.php#developer-communities">
          Learn more about GDG SDSF <i class="fas fa-arrow-right" aria-hidden="true"></i>
        </a>
      </div>
    </div>
  </section>

  <!-- ===== Explore the SDSF NEXUS Section ===== -->
  <section class="nexus-landing-section" id="explore-nexus">
    
    <!-- Title & Subtext Header with Academic Background Image -->
    <div class="nexus-hero-banner">
      <img src="photoes/nexus_library_bg.jpg" alt="SDSF Nexus Academic Background" class="nexus-hero-bg-img">
      <div class="nexus-hero-overlay"></div>
      
      <div class="nexus-section-intro">
        <span class="nexus-kicker"><i class="fas fa-newspaper"></i> OFFICIAL UNIVERSITY PRESS &bull; LIVE BROADSHEET</span>
        <h2 class="nexus-section-title">Explore the <span>SDSF CHRONICLE</span></h2>
        <h3 class="nexus-section-subtitle">Capturing the Spirit of Data &amp; Academic Innovation</h3>
        <p class="nexus-section-subtext">Discover our premier university digital newspaper capturing the spirit of data, cutting-edge research, academic feats, and real-time campus circulars.</p>
        
        <div class="nexus-stats-pills">
          <div class="nexus-stat-pill"><i class="fas fa-newspaper"></i> <span>Daily Campus Press</span></div>
          <div class="nexus-stat-pill"><i class="fas fa-file-pdf"></i> <span>Signed Circulars &amp; Notices</span></div>
          <div class="nexus-stat-pill"><i class="fas fa-chart-line"></i> <span>Research &amp; AI Lab</span></div>
        </div>
      </div>
    </div>

    <div class="nexus-preview-card-wrap">
      <?php include("Newspaper_index_showoff_UI.php"); ?>
    </div>
  </section>

  <?php include("footer.php"); ?>

  <!-- ===== Contributor Section ===== -->
  <div id="contributorModal" class="modal" style="display: none !important;">
      <div class="modal-content">
          <span class="close-btn" onclick="closeContributorModal()">&times;</span>
          <h2>Meet Our Contributors</h2>
          <p class="modal-intro">The success of our website is supported by the dedication of these individuals. ⭐ Top Contributors: Joyobrata Das | Lead Web Developer • UI/UX Designer • Frontend Developer</p>

          <div class="contributor-list-section">
              <h3>⭐ Top Contributors</h3>
              <div class="contributor-row top-tier">
                  <div class="contributor-details-left">
                      <h4 class="contributor-name">Joyobrata Das</h4>
                      <p class="role">Lead Web Developer • UI/UX Designer • Frontend Developer</p>
                      <p class="qualification">M.Tech Dual Degree AI/DS </p>
                      <p class="from">Kolkata</p>
                      <div class="links">
                          <a href="https://linkedin.com/in/Joyobrata" target="_blank" class="link-linkedin">LinkedIn</a> |
                          <a href="https://github.com/holycompile" target="_blank" class="link-github">GitHub</a>
                      </div>
                  </div>
                  <div class="contributor-photo-right">
                      <img src="/photoes/contributor_top2.jpg" alt="Joyobrata Das" class="contributor-photo">
                  </div>
              </div>
          </div>
      </div>
  </div>

  <script>
      function openContributorModal(event) {
          event.preventDefault(); 
          document.getElementById('menu-toggle').checked = false;
          const modal = document.getElementById('contributorModal');
          modal.style.display = "block";
          document.body.style.overflow = "hidden"; 
      }

      function closeContributorModal() {
          const modal = document.getElementById('contributorModal');
          modal.style.display = "none";
          document.body.style.overflow = "auto"; 
      }

      window.onclick = function(event) {
          const modal = document.getElementById('contributorModal');
          if (event.target === modal) {
              closeContributorModal();
          }
      }
  </script>
                           
</body>
</html>
