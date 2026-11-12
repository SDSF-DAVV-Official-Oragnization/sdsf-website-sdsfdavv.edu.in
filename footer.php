<?php $base = isset($base_path) ? $base_path : ''; ?>
<!-- FontAwesome & Montserrat stylesheet support for footer -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<footer class="main-footer" role="contentinfo">
    <div class="footer-top-bar">
        <div class="footer-top-line"></div>
        <a href="#" class="footer-search-btn" aria-label="Search website" title="Search">
            <i class="fas fa-search"></i>
        </a>
    </div>

    <div class="footer-container">
        <!-- Column 1: Address -->
        <div class="footer-col footer-col-address">
            <h3>UNIVERSITY ADDRESS</h3>
            <p class="univ-title">School of Data Science and Forecasting</p>
            <p>Devi Ahilya Vishwavidyalaya</p>
            <p>DAVV Takshila Campus, Khandwa Road</p>
            <p>Indore, Madhya Pradesh – 452001</p>
            <p class="contact-info"><strong>Phone:</strong> +91 8982177634</p>
            <p class="contact-info"><strong>Email:</strong> gmaheshwari@ietdavv.edu.in</p>
            <br>
            <p class="univ-subtitle">SDSF Information Center</p>
            <p>Indore</p>
        </div>

        <!-- Column 2: Social Media -->
        <div class="footer-col footer-col-social">
            <h3>SOCIAL MEDIA</h3>
            <ul class="social-list">
                <li>
                    <a href="https://www.linkedin.com/company/sdsf-davv-indore/posts/" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-linkedin-in"></i> <span>LinkedIn</span>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/davv_sdsf/" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-instagram"></i> <span>Instagram</span>
                    </a>
                </li>
                
                
                
                
                
            </ul>
        </div>

        <!-- Column 3: Quick Links -->
        <div class="footer-col footer-col-links">
            <h3>QUICK LINKS</h3>
            <ul class="footer-links-list">
                <li><a href="<?php echo $base; ?>admission.php">Careers</a></li>
                <li><a href="https://www.dauniv.ac.in/ragging" target="_blank" rel="noopener noreferrer">Anti-Ragging Committee</a></li>
                <li><a href="https://www.dauniv.ac.in/grievance-redressal-system" target="_blank" rel="noopener noreferrer">Grievance Redressal Committee</a></li>
                <li><a href="https://www.dauniv.ac.in/digital-lib" target="_blank" rel="noopener noreferrer">Digital Library</a></li>
                
            </ul>
        </div>

        <!-- Column 4: Parents -->
        <div class="footer-col footer-col-parents">
            <h3>PARENTS</h3>
            <ul class="footer-links-list">
                <li><a href="https://www.google.com/maps/dir/22.6891486,75.867182/davv+takshila+campus/@22.6898923,75.8673051,18z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3962fcef50d20ba3:0x592abbfe7172123e!2m2!1d75.8704159!2d22.6892814" target="_blank" rel="noopener noreferrer">How to Reach</a></li>
                <li><a href="https://www.google.com/maps/search/nearby+hotels+in+DAVV+Takshila+campus/@22.6899046,75.8634427,16z/data=!3m1!4b1" target="_blank" rel="noopener noreferrer">Accommodation for Parents & Visitors near DAVV Takshila Campus</a></li>
                <li><a href="https://www.dauniv.ac.in" target="_blank" rel="noopener noreferrer">DAVV Official Portal</a></li>
                
            </ul>
        </div>
    </div>

    <div class="footer-bottom-bar">
        <div class="footer-bottom-container">
            <p class="copyright-text">&copy; SDSF - School of Data Science and Forecasting, DAVV Indore. All Rights Reserved. Developed by Joyobrata Das — M.Tech AI&DS Student, SDSF DAVV </p>
            <a href="#top" id="sdsfBackToTop" class="sdsf-back-to-top" aria-label="Back to top" title="Back to Top">
                <i class="fas fa-chevron-up"></i>
            </a>
        </div>
    </div>
</footer>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const backToTopBtn = document.getElementById("sdsfBackToTop");
        if (backToTopBtn) {
            backToTopBtn.addEventListener("click", function(e) {
                e.preventDefault();
                window.scrollTo({
                    top: 0,
                    behavior: "smooth"
                });
            });
        }
    });
</script>
