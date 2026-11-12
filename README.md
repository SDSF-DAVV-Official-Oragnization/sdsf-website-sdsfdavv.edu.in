> [!IMPORTANT]
> This repository is shared **solely for portfolio and demonstration purposes**.
> It was developed for the **School of Data Science and Forecasting (SDSF), DAVV**.
> Please do not reuse, redistribute, or deploy this code without prior permission from the department.
>
> Visit the official website: https://dsf.dauniv.ac.in/
>
> © SDSF - School of Data Science and Forecasting, DAVV Indore. All Rights Reserved.


# School of Data Science and Forecasting (SDSF) Official Website ----

The official, responsive web portal and digital ecosystem for the **School of Data Science and Forecasting (SDSF)**, a premier teaching and research department under **Devi Ahilya Vishwavidyalaya (DAVV)** in Indore, Madhya Pradesh, India. 

This platform serves as the central digital hub for prospective students, current batches, faculty members, corporate recruiters, and research scholars.

---

## 📢 Message from the DevHead: To Junior Devs & Contributors! 

> **Yoo my Jnr Devs of SDSF!** 👋  
> *Ik ik, no need to worry at all — you can use Claude, ChatGPT, and AI EASY to write your code!*  
> 
> **BUT**, make sure you just **understand the architecture** and contribute decently. Respect the modular PHP & component structure, verify what you build, and don't just blindly push AI code!  
> 
> That's it! Happy hacking and build cool stuff. **Biee..... read more below!** 

---

## 🌐 Project Overview & Subsystems

The SDSF digital platform is built as a cohesive suite of modular portals:

1. **Main Department Portal (`/`)**
   - **Hero Carousel & Announcements:** Dynamic image slider showcasing campus highlights, academic notices, and department updates.
   - **Interactive Admissions Guide (`admission.php`):** Comprehensive eligibility checklist, seat matrix, fee structures, and application links with sticky navigation and scroll-reveal.
   - **Academic Curriculum Hub (`academics.php`):** Ordinances (No. 14 CBCS, No. 11 Ph.D.), semester break calendars, and direct links to syllabus documents.
   - **Campus Life & Events Gallery (`events.php`, `events.js`):** Interactive event logger covering induction ceremonies (Aagaaz), HackHive hackathons, symposiums, and a high-performance custom image lightbox.
   - **Program-Specific Portals:** Dedicated pages for M.Tech Integrated (AI & DS), M.Tech Data Science, M.Tech Big Data Analytics, M.Tech Executive (DS), MBA Business Analytics, and M.Sc. Data Science.

2. **SDSF Chronicle — Digital E-News Portal (`SDSF_News/`)**
   - **3-Column Broadsheet Layout:** Inspired by classic newspaper front folds featuring *Latest News* (Left Column), *Featured Story & Category Switcher* (Center Column), and *Trending Stories* (Right Column).
   - **Breaking Ticker (`03_ticker/`):** Real-time marquee stream with duplicate track loop for seamless infinite scrolling.
   - **Interactive Modal Readers (`07_article_modal/`, `08_developer_modal/`):** In-memory article pop-up reader and developer spotlight.
   - **Dynamic Press Gallery (`gallery/`):** Auto-scanned photo albums (Ganesh Chaturthi, Induction 2026, Orange Tech drive) with expandable photo grids.
   - **Integrated Notices Feed (`notices/`):** Tab toggle displaying academic circulars and semester timetables.

3. **Career Nirmaan Hub (`career_nirman/`)**
   - Specialized placement preparation portal featuring interactive timetable filters (weekday vs. weekend sessions), auto-detection of today's schedule, mentor profiles, and draggable marquee ticker.

4. **Placement Desk (`placement_news/`, `placement_records/`)**
   - Campus recruitment reports, placement spotlights with high-res modal previews, and batch recruitment statistics.

5. **Research & Doctoral Portal (`research/`)**
   - Searchable Ph.D. repository (theses from 1998 to present), approved research supervisors directory, publications database (journals, books, conferences), and funded project records.

6. **Technical Workshops (`workshop/`)**
   - Dedicated logs and circulars for hands-on technical sessions, tools bootcamps, and faculty development programs.

---

## 🛠️ Technology Stack

- **Backend & Templating:** Native PHP (modular server-side component architecture using `include`, query-string routing, and dynamic filesystem scanners like `scandir`).
- **Frontend Structuring:** Semantic HTML5 (`<article>`, `<aside>`, `<section>`, `<nav>`, `<header>`).
- **Styling Architecture:** Modern Vanilla CSS3 (CSS Grid, Flexbox, CSS Custom Properties, smooth transitions, mobile-first responsive `@media` breakpoints, and backdrop filters). Zero heavy framework bloat.
- **Client-Side Interactions:** Vanilla JavaScript (ES6+) utilizing the Intersection Observer API for scroll-reveal animations, custom DOM modal/lightbox managers, touch swipe gesture handlers, and live masthead clocks.
- **Typography & Icons:** Google Fonts (*Oswald*, *Poppins*, *Montserrat*, *JetBrains Mono*) and Font Awesome 6.4.0.
- **Media Preprocessing:** Python script (`optimize_induction_images.py`) using PIL/Pillow for progressive JPEG and thumbnail generation.

---

## 📂 Complete Project Structure

Below is the directory structure representing the active filesystem:

```text
SDSF-Official-Website/
│
├── css/                                       # Core page stylesheets
│   ├── about.css                              # Mission, vision, and leadership cards
│   ├── academics.css                          # Ordinances, syllabus, and academic tables
│   ├── admission.css                          # Fee tables, eligibility grids, and sticky bar
│   └── events.css                             # Events cards, lightbox modal, and gallery grid
│
├── SDSF_News/                                 # SDSF Chronicle Digital Broadsheet Platform
│   ├── components/                            # Modular component system
│   │   ├── 01_header/                         # Masthead, live clock, and date widget
│   │   │   ├── header.css
│   │   │   ├── header.js
│   │   │   └── header.php
│   │   ├── 02_navbar/                         # Topic filter pills & search bar
│   │   │   ├── campus_item.php
│   │   │   ├── developer_item.php
│   │   │   ├── gallery_item.php
│   │   │   ├── hackathons_item.php
│   │   │   ├── home_item.php
│   │   │   ├── navbar.css
│   │   │   ├── navbar.js
│   │   │   ├── navbar.php
│   │   │   ├── news_dropdown.php
│   │   │   ├── notices_item.php
│   │   │   └── pace_item.php
│   │   ├── 03_ticker/                         # Breaking news marquee bar
│   │   │   └── ticker.php
│   │   ├── 04_latest_news/                    # Left column feed & recent campus highlights
│   │   │   └── latest_news.php
│   │   ├── 05_featured_story/                 # Center column category views
│   │   │   ├── featured_story.css
│   │   │   ├── featured_story.php
│   │   │   ├── campus/                        # Campus life featured stories & JS
│   │   │   ├── hackathons/                    # Hackathons coverage & interactive tags
│   │   │   ├── home/                          # Lead festive & academic articles
│   │   │   └── pace/                          # PACE project features
│   │   ├── 06_trending_stories/               # Right column trending cards & placement popup
│   │   │   └── trending_stories.php
│   │   ├── 07_article_modal/                  # Full-screen article reader pop-up
│   │   │   ├── modal.css
│   │   │   ├── modal.js
│   │   │   └── modal.php
│   │   └── 08_developer_modal/                # Contributor profile spotlight
│   │       ├── developer_modal.css
│   │       ├── developer_modal.js
│   │       └── developer_modal.php
│   ├── gallery/                               # Multi-album event gallery viewer
│   │   ├── gallery.css
│   │   ├── gallery.js
│   │   └── gallery_view.php
│   ├── notices/                               # Department notices & circulars feed
│   │   ├── notices.css
│   │   ├── notices.js
│   │   ├── notices_item.php
│   │   └── notices_view.php
│   ├── photoes_news/                          # News portal graphic assets & photos
│   ├── index.php                              # News root redirector
│   ├── news.css                               # Master stylesheet for newspaper layout
│   ├── news.js                                # Main orchestrator script for news modules
│   └── news.php                               # Master newspaper broadsheet template
│
├── career_nirman/                             # Placement Training Portal (Career Nirmaan)
│   ├── career.css                             # Timetables, hero banner, and mentor cards
│   ├── career.js                              # Timetable day-filter and drag-scroll ticker
│   ├── career.php                             # Career Nirmaan portal entry point
│   ├── career_hero_bg.jpg                     # Section banner graphic
│   ├── mentor.php                             # Faculty and corporate mentor directory
│   └── timetable.php                          # Weekly placement preparation schedule
│
├── placement_news/                            # Placement Drive Coverage
│   ├── placement_news.css                     # Placement drive cards and modal styles
│   ├── placement_news.js                      # Recruitment poster viewer modal
│   └── placement_news.php                     # Orange Data Tech & drive coverage
│
├── placement_records/                         # Student Placement Statistics
│   ├── placement_records.css                  # Tables and recruiter listings
│   ├── placement_records.js                   # Smooth scroll and table interactions
│   └── placement_records.php                  # Placement records page
│
├── research/                                  # Research, Ph.D., & Publications
│   ├── research_page.css                      # Accordion and table design
│   ├── research_page.html                     # Ph.D. data view & project matrices
│   └── research_page.js                       # Ph.D. search filter and project accordion
│
├── workshop/                                  # Hands-on Workshops & Tech Seminars
│   ├── workshop.css                           # Workshop listings styling
│   ├── workshop.js                            # Workshop reveal observer
│   └── workshop.php                           # Technical sessions page
│
├── notices_pdfs/                              # Academic notices, circulars, and schedules
├── photoes/                                   # General department banners, posters, and events
│   ├── Induction 2026/                        # Official Induction album (raw, thumbs, optimized)
│   │   ├── Certif Appre/                      # Appreciation ceremony photos
│   │   ├── optimized/                         # Compressed display photos
│   │   └── thumbs/                            # Lightweight thumbnails
│   └── ...                                    # Department logos and hero carousel slides
├── results/                                   # Examination results distribution PDFs
├── time_tables/                               # Official semester schedule PDFs (AIDS, MSc, MBA, DS)
│
├── about.php                                  # SDSF Department overview, vision, and Head's message
├── academics.php                              # Academic calendars, rules, ordinances, and breaks
├── admission.js                               # Sticky nav bar, dynamic header check, scroll reveal
├── admission.php                              # Admissions guidelines, fee matrices, and eligibility
├── aids.php                                   # M.Tech Integrated (AI & DS) curriculum & schedule
├── bda.php                                    # M.Tech (Big Data Analytics) curriculum & notices
├── ds.php                                     # M.Tech (Data Science) curriculum & timetables
├── events.js                                  # Events lightbox modal, keyboard nav, touch swipe
├── events.php                                 # Campus life, HackHive hackathons, and conferences
├── exeds.php                                  # M.Tech Executive (Data Science) details
├── footer.php                                 # Shared global footer with links and social channels
├── header.php                                 # Shared responsive header with desktop/mobile navigation
├── index.php                                  # Homepage with hero slider, notice board, and previews
├── mba.php                                    # M.B.A (Business Analytics) program details
├── msc.php                                    # M.Sc. (Data Science & Analytics) program details
├── Newspaper_index_showoff_UI.php             # Interactive broadsheet preview card for index.php
├── optimize_induction_images.py               # PIL/Pillow utility script to optimize high-res media
├── Placement_Brochure_2026-27.pdf             # Official 19-page department recruitment brochure
├── style.css                                  # Global stylesheet (layout, reset, header, footer, animations)
└── README.md                                  # Repository documentation
```

---

## 📑 Core Page Mapping

| Route / File | Module / Section | Core Purpose & Interactive Features |
| :--- | :--- | :--- |
| **`index.php`** | Department Home | Hero image carousel, latest announcements, admissions modal, and news preview fold. |
| **`about.php`** | About SDSF | Department vision & mission, history, academic goals, and Head of Department's address. |
| **`academics.php`** | Academic Ordinances | Rules for CBCS, Ph.D. Ordinances, semester calendars, and credit schemes. |
| **`admission.php`** | Admissions Portal | Fee structures, seat matrix, eligibility criteria, and sticky navigation bar. |
| **`events.php`** | Campus Life & Gallery | HackHive hackathons, induction ceremonies, and full-screen keyboard/touch lightbox. |
| **`SDSF_News/news.php`** | SDSF Chronicle | Digital broadsheet with 3-column layout, real-time ticker, and category filters. |
| **`career_nirman/career.php`** | Career Nirmaan | Placement training portal, mock interview schedules, and mentor directory. |
| **`placement_news/placement_news.php`** | Placement News | Detailed campus placement reports, student selections, and poster lightbox. |
| **`placement_records/placement_records.php`** | Placement Stats | Company-wise placement statistics, roles offered, and package trends. |
| **`research/research_page.html`** | Research Portal | Searchable database of 25+ years of Ph.D. theses, faculty supervisors, and funded projects. |
| **`workshop/workshop.php`** | Technical Workshops | Logs of workshops, symposiums, guest lectures, and faculty development programs. |
| **`header.php` / `footer.php`** | Global Partials | Reusable, responsive header and footer components included across all top-level pages. |

---

## 💡 Development Philosophy & Human-AI Collaboration

This project represents a thoughtful blend of **hands-on human engineering** and modern **AI-assisted development**.

### Human Architecture & Craftsmanship
- **System Architecture & Design:** The overall portal architecture, modular PHP component division, DOM structure, and relational file linking were designed and structured manually.
- **UI/UX & Visual Aesthetics:** The layout concepts—including the authentic vintage broadsheet feel of *SDSF Chronicle*, custom CSS grids, card elevations, color palettes, and responsive breakpoints—were carefully hand-crafted to meet the department's visual standards.
- **Core Domain Logic:** The academic ordinances, admissions fee matrices, timetable filters, Ph.D. research archives, and event lightbox workflows were written and curated by the human developer.
- **Code Maintenance & Refactoring:** Routine code passes ensure clean, readable, and idiomatic code with practical developer comments rather than verbose or robotic docstrings.

### AI Agents & Models Utilized
During the development and iteration of this codebase, modern AI coding assistants were leveraged as pair-programming aids:
- **Claude 3.5 / 3.7 Sonnet** (*Anthropic*): Employed for component scaffolding, rapid CSS styling adjustments, writing boilerplate data structures, and optimizing layout responsiveness.
- **Claude Max / Claude Opus** (*Anthropic*): Used for deep code analysis, verifying accessibility patterns, and designing multi-column flex/grid layouts.
- **Gemini** (*Google DeepMind*): Leveraged for image optimization scripting (`optimize_induction_images.py`), testing DOM event patterns, and documentation formatting.

> **Summary:** AI tools served as fast, high-leverage assistants for drafting boilerplate, regex patterns, and responsive utility classes, while all architectural decisions, design sensibilities, data accuracy, and final implementations remain human-led and human-verified.

---

## 🚀 How to Run Locally

Because the project utilizes PHP for modular component rendering (`<?php include("header.php"); ?>`), it must be served through a PHP runtime.

### Option 1: Built-in PHP CLI Server (Quickest)
1. Ensure PHP (v7.4 or v8.x) is installed on your computer.
2. Open your terminal in the project root directory:
   ```bash
   cd SDSF-Official-Website
   ```
3. Start the built-in development server:
   ```bash
   php -S localhost:8000
   ```
4. Visit the portal in your browser:
   ```text
   http://localhost:8000/index.php
   ```

### Option 2: Using XAMPP / WAMP / Apache
1. Copy or clone the `SDSF-Official-Website` folder into your web server's public document directory:
   - **XAMPP (Windows):** `C:\xampp\htdocs\SDSF-Official-Website`
   - **WampServer (Windows):** `C:\wamp64\www\SDSF-Official-Website`
2. Open the server control panel and start the **Apache** service.
3. Open your browser and navigate to:
   ```text
   http://localhost/SDSF-Official-Website/index.php
   ```

### Image Optimization Utility (Optional)
If new event photos are added to `photoes/Induction 2026/`, you can generate optimized web images and thumbnails using the Python helper:
```bash
python optimize_induction_images.py
```

---

## 👨‍💻 Project Credits

- **Architect & Lead Developer:** **Joyobrata Das** (Lead Web Developer, UI/UX Designer & Full-Stack Developer, M.Tech Dual Degree AI & DS, SDSF DAVV)
  - [LinkedIn Profile](https://www.linkedin.com/in/joyobrata-das-53467b39b/)
  - [GitHub Profile](https://github.com/holycompile)
  - [Personal Website](https://joyobrata-das.vercel.app/)
- **Department:** School of Data Science and Forecasting (SDSF), Devi Ahilya Vishwavidyalaya, Indore, MP, India.
