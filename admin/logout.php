<?php 
    $expire_date = time() - (86400 * 30);
    setcookie('user_name', "", $expire_date, '/');
    header("Location: login.php");
    exit;
?>