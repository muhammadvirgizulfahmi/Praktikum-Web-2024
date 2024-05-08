<?php
require_once 'login_koneksi.php';

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM users WHERE username=? and password=?";
    $user = $dbh->prepare($query);
    $user->execute([$username, $password]);

    $count = $user->rowCount();
    if($count > 0){
        session_Start();
        $_SESSION['user'] = $user->fetch();
        header('location: home.php');
    } else {
        header('location: login.php');
    }
}
?>