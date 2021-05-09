<?php
session_start();
include("connectionDB.php");
if (
	isset($_POST['id']) && !empty($_POST['id']) && 
	isset($_POST['adm_status']) && !empty($_POST['adm_status'])
	)
{
	$id = $_POST['id'];
	$adm_status = $_POST['adm_status'];

	$updateStatus = "UPDATE account SET adm_status = '$adm_status' WHERE id = $id";

	if (mysqli_query($conn, $updateStatus)){
		$_SESSION['successful'] = 'New student information has just been successfully added';
	}else {
		$_SESSION['Oops'] = 'New student has not been successfully added';
	}
}else {
	$_SESSION['Oops'] = 'One or more field is empty';
}
header("Location: ../view-student-details.php?id=$id");
exit();
?>