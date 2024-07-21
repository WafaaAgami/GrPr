<?php
error_reporting(0);
include('../dbconnection.php');

$id = $_GET['id'];
echo 'To delete User '. $id;
$query = "delete from users where user_id=$id";
        //Execute query.
        $stmt = $conn->prepare($query);
	    $stmt->execute();

	    header("Location: users.php");
?>