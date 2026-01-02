<?php

// Auto-detect environment
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];

if ($host === 'localhost' || strpos($host, '127.0.0.1') !== false) {
    // Local environment
    define('BASEURL', 'http://localhost/test');
} else {
    // Production environment
    define('BASEURL', $protocol . '://' . $host);
}

// define('BASEURL', 'https://ronikurnia.page.gd');
// define('BASEURL', 'http://localhost/test');