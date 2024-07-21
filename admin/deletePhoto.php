<?php
error_reporting(0);
include('../dbconnection.php');

$id = $_GET['id'];
echo 'To delete Photo '. $id;
$query = "delete from photos where photo_id=$id";
        //Execute query.
        $stmt = $conn->prepare($query);
	    $stmt->execute();

	    header("Location: photos.php");
?>