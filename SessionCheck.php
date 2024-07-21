<?php
session_start ();
if (!isset ($_COOKIE['user_name'])) {
    
    header('location: login.php');
}
if (isset($_GET['logout'])) {
   session_destroy();
    unset ($_SESSION['username']);
    header("location: login.php");
}
?>