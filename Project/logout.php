<?php
// Mulai sesi
session_start();

// Hapus semua variabel sesi
$_SESSION = array();

// Hapus sesi dari server
session_destroy();

// Redirect ke halaman landing page
header("Location: index.html");
exit;
?>