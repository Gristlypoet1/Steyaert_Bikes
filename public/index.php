<?php
$page = $_GET['page'] ?? 'home';

$allowed_pages = ['home', 'fietsen', 'contact', 'herstellingen'];

if (!in_array($page, $allowed_pages)) {
    $page = 'home';
}

include 'header.php';
include "pages/{$page}.php";
include 'footer.php';
?>