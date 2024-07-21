<?php
error_reporting(0);
include('../dbconnection.php');
include('../SessionCheck.php');
$id = $_GET['id'];
echo "Can't delete Category as Photos are binded to it.";
$query = "delete from categories where item_id=$id";
        //Execute query.
        $stmt = $conn->prepare($query);
	    $stmt->execute();

	    header("Location: categories.php");
?>