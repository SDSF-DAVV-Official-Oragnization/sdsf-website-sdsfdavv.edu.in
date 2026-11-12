<?php
header('Content-Type: text/plain');
echo "=== Vercel PHP Diagnostic ===\n";
echo "Current dir: " . __DIR__ . "\n";
echo "Parent dir: " . dirname(__DIR__) . "\n";
echo "Files in current dir:\n";
print_r(scandir(__DIR__));
echo "\nFiles in parent dir:\n";
print_r(scandir(dirname(__DIR__)));
