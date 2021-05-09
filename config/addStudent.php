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
	isset($_POST['jambScore']) && !empty($_POST['jambScore']) && 
	isset($_FILES['image']['name']) && 
	isset($_FILES['image']['tmp_name'])
	)
{
	$first_name = strtolower($_POST['firstname']);
	$middle_name = strtolower($_POST['middlename']);
	$last_name = strtolower($_POST['lastname']);
	$email = strtolower($_POST['email']);
	$date_of_birth = $_POST['dob'];
	$gender = $_POST['gender'];
	$phone_number = $_POST['phoneNumber'];
	$home_address = strtolower($_POST['address']);
	$state_of_origin = $_POST['stateOrigin'];
	$local_govt = strtolower($_POST['originLocalG']);
	$next_of_kin = strtolower($_POST['nextOfKin']);
	$jamb_score = $_POST['jambScore'];
	$image_name = $_FILES['image']['name'];
	$tmp_image_name = $_FILES['image']['tmp_name'];

	$checkStudent = "SELECT email from account WHERE email = '$email'";
	$result = mysqli_query($conn, $checkStudent);
	if(mysqli_num_rows($result) > 0){
	   $_SESSION['oops'] = ucfirst($email).' already exist';
	   header('Location: ../student-portal.php');
	   exit();
	}

	$insertNewStudent = "INSERT INTO account (first_name, middle_name, last_name, full_name, email, date_of_birth, gender, phone_number, home_address, state_of_origin, local_govt, next_of_kin, jamb_score, image_name) VALUES ('$first_name', '$middle_name', '$last_name',  '$first_name $middle_name $last_name', '$email', '$date_of_birth', '$gender', '$phone_number', '$home_address', '$state_of_origin', '$local_govt', '$next_of_kin', '$jamb_score', '$image_name')";

	if (mysqli_query($conn, $insertNewStudent)){
		$last_id = mysqli_insert_id($conn);
         if(!file_exists("../uploads/")){
            mkdir("../uploads/");
            move_uploaded_file($tmp_image_name, '../uploads/'.$image_name);        
        }else {
			move_uploaded_file($tmp_image_name, '../uploads/'.$image_name); 
		}
		$_SESSION['successful'] = 'New student information has just been successfully added';
	}else {
		$_SESSION['oops'] = 'New student has not been successfully added';
	}
}else {
	$_SESSION['oops'] = 'One or more field is empty';
}
header("Location: ../student-portal.php");
exit();
?>