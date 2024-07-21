<?php
	error_reporting(0);
	include('../dbconnection.php');
	include('../SessionCheck.php');
	$id = $_GET['id'];
	echo 'To delete Photo '. $id;
	$query = "delete from photosCategories where photo_id=$id";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	
	$query = "delete from photos where photo_id=$id";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	
	header("Location: photos.php");
?>