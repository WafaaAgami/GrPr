<?php
error_reporting(0);
include('../dbconnection.php');

$id = $_GET['id'];
echo 'To delete Category '. $id;
$query = "delete from categories where item_id=$id";
        //Execute query.
        $stmt = $conn->prepare($query);
	    $stmt->execute();

	    header("Location: categories.php");
?>