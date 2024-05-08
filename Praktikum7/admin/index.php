<?php
require_once 'navbar.html';
require_once 'sidebar.html';
?>

<h2>Selamat Datang <?= $_SESSION['user']['name']; ?></h2>

<?php
require_once 'footer.html';
?>