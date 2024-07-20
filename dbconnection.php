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
    echo "Connected Successfully";
} catch (PDOExeption $e) {
    echo "Connection error: " . $e->getMessage();
}
?>