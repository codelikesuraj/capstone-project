<?php
include("connectionDB.php");
$students = array();
$getStudent = "SELECT * FROM account";
$result = mysqli_query($conn, $getStudent);
if($result && mysqli_num_rows($result)>0)
{
    $counter = 0;
    while($row = mysqli_fetch_assoc($result)){
        $students[$counter]['id'] = $row['id'];
        $students[$counter]['name'] = $row['full_name'];
        $students[$counter]['gender'] = $row['gender'];
        $students[$counter]['jamb_score'] = $row['jamb_score'];
        $students[$counter]['adm_status'] = $row['adm_status'];
        $counter++;
    }
}
?>