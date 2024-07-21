<?php
$server = "localhost";
$username = "root";
$pw = "";
$db = "demo";

try {
    $conn = new PDO(
        "mysql:host=$server;dbname=$db",
        $username,
        $pw
    );
    $conn->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );
    echo "<script>console.log('Debug - Connected Successfully');</script>";
} catch (PDOExeption $e) {
    echo "<script>console.log('Debug:Connection error: " . $e->getMessage() . "')</script>";
}
?>