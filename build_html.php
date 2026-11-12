<?php
$pages = [
    "index.php", "about.php", "academics.php", "admission.php", "aids.php",
    "bda.php", "ds.php", "events.php", "exeds.php", "mba.php", "msc.php",
    "Newspaper_index_showoff_UI.php",
    "career_nirman/career.php", "career_nirman/mentor.php", "career_nirman/timetable.php",
    "placement_news/placement_news.php", "placement_records/placement_records.php",
    "workshop/workshop.php",
    "SDSF_News/index.php", "SDSF_News/news.php",
    "SDSF_News/gallery/gallery_view.php", "SDSF_News/notices/notices_view.php",
    "SDSF_News/print_media/print_media_view.php"
];

$baseDir = __DIR__;
foreach ($pages as $relPath) {
    $fullPath = $baseDir . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $relPath);
    if (!file_exists($fullPath)) {
        echo "Skipping missing: $relPath\n";
        continue;
    }
    
    // Set working directory to the file's directory so relative includes work
    chdir(dirname($fullPath));
    
    ob_start();
    include basename($fullPath);
    $html = ob_get_clean();
    
    $outPath = substr($fullPath, 0, -4) . '.html';
    file_put_contents($outPath, $html);
    echo "Generated: " . $relPath . " -> " . basename($outPath) . " (" . strlen($html) . " bytes)\n";
}
echo "Done!\n";
