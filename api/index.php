<?php
// Display errors in logs and output to help debugging
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Prevent path traversal and decode request
$uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$uri = rawurldecode($uri);

// In Vercel serverless environment, parent directory contains all project files
$rootDir = dirname(__DIR__);

// Normalize root path
if ($uri === '/' || $uri === '' || $uri === '/index.php') {
    $target = $rootDir . DIRECTORY_SEPARATOR . 'index.php';
    if (file_exists($target)) {
        chdir($rootDir);
        require $target;
        exit;
    }
}

$path = ltrim($uri, '/');
$target = $rootDir . DIRECTORY_SEPARATOR . str_replace(['/', '\\'], DIRECTORY_SEPARATOR, $path);

// Check if exact file exists
if (file_exists($target) && is_file($target)) {
    $ext = strtolower(pathinfo($target, PATHINFO_EXTENSION));
    if ($ext === 'php') {
        chdir(dirname($target));
        require $target;
        exit;
    }

    // Static asset fallback
    $mimeTypes = [
        'css'   => 'text/css',
        'js'    => 'application/javascript',
        'json'  => 'application/json',
        'png'   => 'image/png',
        'jpg'   => 'image/jpeg',
        'jpeg'  => 'image/jpeg',
        'gif'   => 'image/gif',
        'svg'   => 'image/svg+xml',
        'ico'   => 'image/x-icon',
        'pdf'   => 'application/pdf',
        'woff'  => 'font/woff',
        'woff2' => 'font/woff2',
        'ttf'   => 'font/ttf',
        'eot'   => 'application/vnd.ms-fontobject'
    ];

    if (isset($mimeTypes[$ext])) {
        header('Content-Type: ' . $mimeTypes[$ext]);
        header('Content-Length: ' . filesize($target));
        readfile($target);
        exit;
    }
}

// Check with .php extension appended (e.g. /about -> /about.php)
$phpTarget = $rootDir . DIRECTORY_SEPARATOR . str_replace(['/', '\\'], DIRECTORY_SEPARATOR, $path) . '.php';
if (file_exists($phpTarget) && is_file($phpTarget)) {
    chdir(dirname($phpTarget));
    require $phpTarget;
    exit;
}

// Check if directory with index.php
$dirTarget = $rootDir . DIRECTORY_SEPARATOR . str_replace(['/', '\\'], DIRECTORY_SEPARATOR, $path) . DIRECTORY_SEPARATOR . 'index.php';
if (file_exists($dirTarget) && is_file($dirTarget)) {
    chdir(dirname($dirTarget));
    require $dirTarget;
    exit;
}

// 404 Fallback
http_response_code(404);
echo "404 Not Found";
