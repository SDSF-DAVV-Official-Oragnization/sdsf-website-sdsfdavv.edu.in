<!-- ===== NEWSPAPER TOP UTILITY BAR ===== -->
<div class="news-topbar">
    <div class="news-topbar-inner">
        <div class="topbar-left">
            <span class="topbar-date" id="topbarDate">
                <i class="far fa-calendar-alt"></i> <span id="currentDateFormatted">Wednesday, September 16, 2026</span>
            </span>
            <span class="topbar-divider">|</span>
            <span class="topbar-location">
                <i class="fas fa-map-marker-alt"></i> Takshila Campus, Indore, MP, India
            </span>
        </div>
        <div class="topbar-right">
            <span class="live-edition-badge">
                <span class="live-dot"></span> DAILY EDITION
            </span>
        </div>
    </div>
</div>

<!-- ===== NEWSPAPER MASTHEAD / TITLE HEADER ===== -->
<header class="news-masthead">
    <div class="masthead-inner">
        <div class="masthead-left">
            <div class="masthead-time-widget">
                <span class="time-day" id="mastheadDay">Wednesday</span>
                <span class="time-clock" id="mastheadClock">22:35:00</span>
                <span class="time-meta">CAMPUS LOCAL TIME</span>
            </div>
        </div>

        <div class="masthead-center">
            <div class="masthead-pretitle">DEVI AHILYA VISHWAVIDYALAYA &bull; SCHOOL OF DATA SCIENCE &amp; FORECASTING</div>
            <h1 class="masthead-title">
                <a href="news.php">SDSF CHRONICLE</a>
            </h1>
            <div class="masthead-sub-banner">
                <span>&copy; SDSF - All Rights Reserved.</span>
                <span class="sub-sep">|</span>
                <span><i class="fas fa-globe-americas"></i> Your Trusted Source for SDSF News</span>
                <span class="sub-sep">|</span>
                <span><i class="fas fa-camera-retro"></i> Capturing the Spirit of Data &amp; Innovation</span>
            </div>
        </div>

        <div class="masthead-right">
            <div class="edition-meta-box">
                <span class="meta-issue">Vol. III &bull; Issued on 02/11/26</span>
                <span class="meta-circ">Takshila Academic Press</span>
            </div>

            <!-- Notification Bell -->
            <div class="notif-bell-wrap" id="notifBellWrap">
                <button class="notif-bell-btn" id="notifBellBtn" onclick="toggleNotifPanel(event)" aria-label="Notifications" title="Notifications">
                    <i class="fas fa-bell"></i>
                    <span class="notif-badge" id="notifBadge">3</span>
                </button>
                <div class="notif-panel" id="notifPanel" style="display:none;">
                    <div class="notif-panel-header">
                        <span><i class="fas fa-bell"></i> Recent Updates</span>
                        <button class="notif-panel-close" onclick="closeNotifPanel()" aria-label="Close">&times;</button>
                    </div>
                    <ul class="notif-list">
                        <li class="notif-item notif-unread" onclick="window.location.href='<?php echo $base_path; ?>academics.php#exam-timetable'">
                            <span class="notif-dot notif-dot-blue" style="background: #2563eb; box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.25);"></span>
                            <div class="notif-item-body">
                                <span class="notif-item-title">Final Examination Time Table updated</span>
                                <span class="notif-item-sub">Semester End Examination Schedule (Nov–Dec 2026) &bull; View in Academics</span>
                            </div>
                            <i class="fas fa-chevron-right notif-arrow"></i>
                        </li>
                        <li class="notif-item notif-unread" onclick="onCyberEthicsNotifClick()">
                            <span class="notif-dot notif-dot-green"></span>
                            <div class="notif-item-body">
                                <span class="notif-item-title">Workshop Conducted: Cyber Security &amp; Internet Ethics</span>
                                <span class="notif-item-sub">MMTTC DAVV in association with SDSF &bull; 26&ndash;31 Oct 2026</span>
                            </div>
                            <i class="fas fa-chevron-right notif-arrow"></i>
                        </li>
                        <li class="notif-item notif-unread" onclick="onNotifClick()">
                            <span class="notif-dot"></span>
                            <div class="notif-item-body">
                                <span class="notif-item-title">Monthly Website Updates</span>
                                <span class="notif-item-sub">Submit your projects &amp; achievements anytime</span>
                            </div>
                            <i class="fas fa-chevron-right notif-arrow"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>


        <style>
        /* ── Masthead Right Flex Alignment ── */
        .masthead-right {
            display: flex !important;
            align-items: center !important;
            justify-content: flex-end !important;
            gap: 16px !important;
        }

        /* ── Notification Bell ── */
        .notif-bell-wrap {
            position: relative;
            display: inline-flex;
            align-items: center;
        }
        .notif-bell-btn {
            background: #f8fafc;
            border: 1px solid #cbd5e1;
            border-radius: 50%;
            width: 38px;
            height: 38px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            color: #1e293b;
            font-size: 1.05rem;
            position: relative;
            transition: all 0.2s ease;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.06);
            padding: 0;
            outline: none;
        }
        .notif-bell-btn:hover {
            background: #eff6ff;
            color: #2563eb;
            border-color: #93c5fd;
            transform: scale(1.05);
        }
        .notif-badge {
            position: absolute;
            top: -3px;
            right: -3px;
            background: #dc2626;
            color: #ffffff;
            font-size: 0.65rem;
            font-weight: 700;
            border-radius: 50%;
            width: 17px;
            height: 17px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px solid #ffffff;
            pointer-events: none;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.25);
            line-height: 1;
        }
        .notif-badge[data-count="0"],
        .notif-badge.notif-badge-hidden {
            display: none !important;
        }
        .notif-panel {
            position: absolute;
            top: calc(100% + 12px);
            right: 0;
            width: 320px;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 12px 36px rgba(0, 0, 0, 0.16), 0 2px 8px rgba(0, 0, 0, 0.08);
            z-index: 999999;
            overflow: hidden;
            border: 1px solid #cbd5e1;
            text-align: left;
            animation: notifFadeIn 0.2s cubic-bezier(0.16, 1, 0.3, 1);
        }
        @keyframes notifFadeIn {
            from { opacity: 0; transform: translateY(-8px) scale(0.98); }
            to   { opacity: 1; transform: translateY(0) scale(1); }
        }
        .notif-panel-header {
            background: #0f172a;
            color: #f1f5f9;
            padding: 12px 16px;
            font-size: 0.85rem;
            font-weight: 700;
            letter-spacing: 0.5px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .notif-panel-header i {
            margin-right: 6px;
            color: #fbbf24;
        }
        .notif-panel-close {
            background: none;
            border: none;
            color: #94a3b8;
            font-size: 1.25rem;
            cursor: pointer;
            padding: 0 2px;
            line-height: 1;
            transition: color 0.15s;
        }
        .notif-panel-close:hover {
            color: #ef4444;
        }
        .notif-list {
            list-style: none;
            margin: 0;
            padding: 0;
        }
        .notif-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 14px 16px;
            cursor: pointer;
            border-bottom: 1px solid #f1f5f9;
            transition: background 0.15s;
            text-align: left;
        }
        .notif-item:last-child {
            border-bottom: none;
        }
        .notif-item:hover {
            background: #f8fafc;
        }
        .notif-item.notif-unread {
            background: #eff6ff;
        }
        .notif-item.notif-unread:hover {
            background: #dbeafe;
        }
        .notif-dot {
            width: 9px;
            height: 9px;
            background: #2563eb;
            border-radius: 50%;
            flex-shrink: 0;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.2);
        }
        .notif-dot-green {
            background: #10b981 !important;
            box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.3) !important;
        }
        .notif-item-body {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 3px;
            text-align: left;
        }
        .notif-item-title {
            font-size: 0.88rem;
            font-weight: 700;
            color: #1e293b;
            line-height: 1.3;
        }
        .notif-item-sub {
            font-size: 0.76rem;
            color: #64748b;
            line-height: 1.4;
        }
        .notif-arrow {
            color: #94a3b8;
            font-size: 0.8rem;
            flex-shrink: 0;
            transition: transform 0.15s;
        }
        .notif-item:hover .notif-arrow {
            transform: translateX(3px);
            color: #2563eb;
        }
        @media (max-width: 820px) {
            .masthead-right {
                justify-content: center !important;
                margin-top: 8px;
            }
            .notif-panel {
                right: auto;
                left: 50%;
                transform: translateX(-50%);
            }
            @keyframes notifFadeIn {
                from { opacity: 0; transform: translate(-50%, -8px) scale(0.98); }
                to   { opacity: 1; transform: translate(-50%, 0) scale(1); }
            }
        }
    </style>

        <script>
        (function() {
            var STORAGE_KEY = 'sdsf_web_updates_notif_read_v1';

            function isNotifRead() {
                try {
                    return localStorage.getItem(STORAGE_KEY) === 'true';
                } catch (e) {
                    return false;
                }
            }

            function setNotifRead() {
                try {
                    localStorage.setItem(STORAGE_KEY, 'true');
                } catch (e) {}
            }

            function applyReadState() {
                // Notifications always have a sign active at all times
                var badge = document.getElementById('notifBadge');
                if (badge) badge.classList.remove('notif-badge-hidden');
            }

            function toggleNotifPanel(e) {
                if (e) e.stopPropagation();
                var panel = document.getElementById('notifPanel');
                if (!panel) return;
                var isOpen = panel.style.display !== 'none';
                panel.style.display = isOpen ? 'none' : 'block';
            }

            function closeNotifPanel() {
                var panel = document.getElementById('notifPanel');
                if (panel) panel.style.display = 'none';
            }

            function onNotifClick() {
                closeNotifPanel();
                // Mark as read in localStorage and update DOM
                setNotifRead();
                applyReadState();

                // Open the Monthly Website Updates modal
                if (window.openWebUpdatesModal) {
                    window.openWebUpdatesModal();
                } else {
                    var modal = document.getElementById('webUpdatesModal');
                    if (modal) {
                        modal.style.display = 'flex';
                        document.body.style.overflow = 'hidden';
                    }
                }
            }

            // Apply immediately on load
            applyReadState();
            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', applyReadState);
            }

            // Sync across tabs/windows
            window.addEventListener('storage', function(e) {
                if (e.key === STORAGE_KEY && e.newValue === 'true') {
                    applyReadState();
                }
            });

            // Close panel on outside click
            document.addEventListener('click', function(e) {
                var wrap = document.getElementById('notifBellWrap');
                if (wrap && !wrap.contains(e.target)) {
                    var panel = document.getElementById('notifPanel');
                    if (panel) panel.style.display = 'none';
                }
            });

            // Export functions
            window.toggleNotifPanel = toggleNotifPanel;
            window.closeNotifPanel = closeNotifPanel;
            window.onNotifClick = onNotifClick;
            function onCyberEthicsNotifClick() {
                closeNotifPanel();
                if (window.filterByTopic) {
                    filterByTopic('all');
                }
                setTimeout(function() {
                    var el = document.getElementById('article-cyber-ethics');
                    if (el) {
                        el.scrollIntoView({behavior: 'smooth', block: 'start'});
                    }
                }, 150);
            }
            window.onCyberEthicsNotifClick = onCyberEthicsNotifClick;

            window.markNotifWebUpdatesRead = function() {
                setNotifRead();
                applyReadState();
            };
        })();
    </script>