<?php 
$base_path = '../'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#162b57">
    <title>Placement Records | SDSF - School of Data Science and Forecasting</title>

    <!-- Global & Local Styles -->
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="placement_records.css">

    <!-- Google Fonts & FontAwesome -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Oswald:wght@400;500;600;700&family=Montserrat:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body id="top" class="subpage-body">

    <!-- Header / Top Navbar -->
    <?php include("../header.php"); ?>

    <!-- ===== COMING SOON CARD SECTION ===== -->
    <main class="status-card-section">
        <div class="status-card-container">
            <div class="status-card">
                <div class="status-icon-box">
                    <i class="fas fa-chart-line"></i>
                </div>
                <span class="status-badge">Live@SDSF</span>
                <h1 class="status-title">Placement Records</h1>
                <div class="status-divider"></div>
                <h2 class="status-heading">Updates shall be given soon</h2>
                <p class="status-desc">
                    Comprehensive placement statistics, recruiter demographics, and official batch reports will be updated here shortly.
                </p>
            </div>
        </div>
    </main>

    <!-- Global Footer -->
    <?php include("../footer.php"); ?>

    <script src="placement_records.js"></script>
</body>
</html>
