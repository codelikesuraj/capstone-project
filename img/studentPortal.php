<?php
    session_start();
    include("config/connectionDB.php");
    $firstname = $_POST["firstname"];
    $middlename = $_POST["middlename"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $phoneNumber = $_POST["phoneNumber"];
    $address = $_POST["address"];
    $stateOfOrigin = $_POST["stateOrigin"];
    $originLocalG = $_POST["originLocalG"];
    $nextOfKin = $_POST["nextOfKin"];
    $jambScore = $_POST["jambScore"];
    $uploadName = $_FILE["image"]["name"];
    $uploadTmp = $_FILE["image"]["tmp_name"];
    
   
     $sql = "SELECT email FROM student_portal_information WHERE email='$email'";
     $result = mysqli_query($conn, $sql);
     if(mysqli_num_rows($result) > 0){
        $_SESSION['exist'] = ucfirst($email).' already exist';
     }else{
        $sql = "INSERT INTO student_portal_information(firstname, middlename, lastname, email, dob, gender, phone_number, address, state_of_origin, origin_local_govt, next_of_kin, jamb_score) VALUES('$firstname', '$middlename', '$lastname', '$email', '$dob', '$gender', '$phoneNumber', '$address', '$stateOfOrigin', '$originLocalG', '$nextOfKin', '$jambScore')";
        if(mysqli_query($conn, $sql)){
            $last_id = mysqli_insert_id($conn);
            if(!file_exist("uploads/".$last_id."/")){
                mkdir("uploads/".$last_id);
                move_uploaded_file($uploadTmp, "uploads/".$last_id."/".$uploadName);
                
            }
            $_SESSION["successful"] = ucfirst($firstname).' '.ucfirst($lastname).' record successfully created';
            header("Location: student-portal.php");
        }else{
            $_SESSION['Oops'] = 'Ooops there is a problem saving '.ucfirst($firstname).' '.ucfirst($lastname).'  to the database, please contact the administrator';
            header("Location: student-portal.php");   
        }
    }
?>