<?php
include("connectionDB.php");
if(
    isset($_GET['id']) && !empty($_GET['id'])
){    
    $studentId = $_GET['id'];
    $student = array();
    $getStudent = "SELECT * FROM account WHERE id='$studentId'";
    $result = mysqli_query($conn, $getStudent);
    if($result && mysqli_num_rows($result) == 1)
    {
        while($row = mysqli_fetch_assoc($result)){
            $student['id'] = $row['id'];
            $student['name'] = $row['first_name'].' '.$row['middle_name'].' '.$row['last_name'];
            $student['email'] = $row['email'];
            $student['date_of_birth'] = $row['date_of_birth'];
            $student['gender'] = $row['gender'];
            $student['phone_number'] = $row['phone_number'];
            $student['address'] = $row['home_address'];
            $student['state_of_origin'] = $row['state_of_origin'];
            $student['local_govt'] = $row['local_govt'];
            $student['next_of_kin'] = $row['next_of_kin'];
            $student['jamb_score'] = $row['jamb_score'];
            $student['admin_status'] = $row['admin_status'];
            $student['image_name'] = $row['image_name'];
        }
    }
    else{
        header('Location: dashboard.php');
        exit();
    }
}else {
    header('Location: dashboard.php');
    exit();
}