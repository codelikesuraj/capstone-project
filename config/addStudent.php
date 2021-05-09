<?php
session_start();
include("connectionDB.php");
if (
	isset($_POST['firstname']) && !empty($_POST['firstname']) && 
	isset($_POST['middlename']) && !empty($_POST['middlename']) &&
	isset($_POST['lastname']) && !empty($_POST['lastname']) &&
	isset($_POST['email']) && !empty($_POST['email']) &&
	isset($_POST['dob']) && !empty($_POST['dob']) &&
	isset($_POST['gender']) && !empty($_POST['gender']) &&
	isset($_POST['phoneNumber']) && !empty($_POST['phoneNumber']) &&
	isset($_POST['address']) && !empty($_POST['address']) &&
	isset($_POST['stateOrigin']) && !empty($_POST['stateOrigin']) &&
	isset($_POST['originLocalG']) && !empty($_POST['originLocalG']) &&
	isset($_POST['nextOfKin']) && !empty($_POST['nextOfKin']) &&
	isset($_POST['jambScore']) && !empty($_POST['jambScore'])
	)
{
	$first_name = $_POST['firstname'];
	$middle_name = $_POST['middlename'];
	$last_name = $_POST['lastname'];
	$email = $_POST['email'];
	$date_of_birth = $_POST['dob'];
	$gender = $_POST['gender'];
	$phone_number = $_POST['phoneNumber'];
	$home_address = $_POST['address'];
	$state_of_origin = $_POST['stateOrigin'];
	$local_govt = $_POST['originLocalG'];
	$next_of_kin = $_POST['nextOfKin'];
	$jamb_score = $_POST['jambScore'];

	$insertNewStudent = "INSERT INTO account (first_name, middle_name, last_name, full_name, email, date_of_birth, gender, phone_number, home_address, state_of_origin, local_govt, next_of_kin, jamb_score) VALUES ('$first_name', '$middle_name', '$last_name',  '$first_name $middle_name $last_name', '$email', '$date_of_birth', '$gender', '$phone_number', '$home_address', '$state_of_origin', '$local_govt', '$next_of_kin', '$jamb_score')";

	if (mysqli_query($conn, $insertNewStudent)){
		$_SESSION['successful'] = 'New student information has just been successfully added';
	}else {
		$_SESSION['Oops'] = 'New student has not been successfully added';
	}
}else {
	$_SESSION['Oops'] = 'One or more field is empty';
}
header("Location: ../student-portal.php");
exit();
?>