<!-- Developer profile modal -->
<div class="developer-modal-backdrop" id="developerModal" style="display:none;" onclick="closeDeveloperModal(event)">
    <div class="developer-modal-card" onclick="event.stopPropagation()">
        
        <!-- Close Button -->
        <button class="dev-modal-close" onclick="closeDeveloperModal()" aria-label="Close Developer Profile">
            <i class="fas fa-times"></i>
        </button>

        <!-- Header Ribbon -->
        <div class="dev-modal-ribbon">
            <span class="ribbon-kicker"><i class="fas fa-newspaper"></i> SDSF CHRONICLE &bull; DIGITAL PRESS DESK</span>
            <span class="ribbon-edition">OFFICIAL CONTRIBUTOR</span>
        </div>

        <!-- Main Card Content -->
        <div class="dev-modal-body">
            
            <div class="dev-profile-header">
                <div class="dev-avatar-wrap">
                    <img src="<?php echo $base_path; ?>photoes/Joyobrata Das.png" alt="Joyobrata Das" class="dev-avatar-img">
                    <span class="dev-badge-icon" title="Lead Developer"><i class="fas fa-check"></i></span>
                </div>
                
                <div class="dev-title-info">
                    <span class="dev-role-badge"><i class="fas fa-code"></i> Lead Web Developer</span>
                    <h2 class="dev-name">Joyobrata Das</h2>
                    <p class="dev-tagline">UI/UX Designer &bull; Full-Stack Developer</p>
                    <div class="dev-meta-pills">
                        <span><i class="fas fa-graduation-cap"></i> M.Tech Dual Degree AI/DS</span>
                        <span>&bull;</span>
                        <span><i class="fas fa-map-marker-alt"></i> Takshila Campus &bull; Indore </span>
                    </div>
                </div>
            </div>

            <!-- About / Small Note Section -->
            <div class="dev-note-section">
                <h4 class="dev-note-title"><i class="fas fa-quote-left"></i> About the Architect</h4>
                <p class="dev-note-text">
                    Passionate about merging modern user-interface design with high-performance web engineering. 
                    Architected and developed the digital newspaper broadsheet platform, modular component system, and interactive features for the School of Data Science &amp; Forecasting.
                </p>
            </div>

            <!-- Tech Stack Tags -->
            <div class="dev-skills-row">
                <span class="skill-tag">AI Engineer</span>
                <span class="skill-tag">Modern Vanilla CSS</span>
                <span class="skill-tag">JavaScript ES6+</span>
                <span class="skill-tag">UI/UX Design</span>
                <span class="skill-tag">Data Science &amp; AI</span>
            </div>

            <!-- Social Links / Action Buttons -->
            <div class="dev-social-actions">
                <a href="https://www.linkedin.com/in/joyobrata-das-53467b39b/" target="_blank" rel="noopener noreferrer" class="dev-btn btn-linkedin">
                    <i class="fab fa-linkedin-in"></i> Connect on LinkedIn
                </a>
                <a href="https://github.com/holycompile" target="_blank" rel="noopener noreferrer" class="dev-btn btn-github">
                    <i class="fab fa-github"></i> View GitHub Profile
                </a>
                <a href="https://joyobrata-das.vercel.app/" target="_blank" rel="noopener noreferrer" class="dev-btn btn-website">
                    <i class="fas fa-globe"></i> Visit Personal Website
                </a>
            </div>

        </div>

        <!-- Card Footer -->
        <div class="dev-modal-footer">
            <span>School of Data Science &amp; Forecasting &bull; Devi Ahilya Vishwavidyalaya</span>
        </div>

    </div>
</div>
