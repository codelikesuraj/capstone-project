<?php
include ('connectionDB.php');
if(isset($_POST['gender']) && !empty($_POST['gender'])){
    $gender = trim($_POST['gender']);
    $students = array();
    $counter = 0;
    if($gender == 'male' || $gender == 'female'){
        $getStudentsByGender = "SELECT * FROM account WHERE gender = '$gender' ORDER BY full_name ASC";
    }else{
        $getStudentsByGender = "SELECT * FROM account ORDER BY full_name ASC";
    }
    $result = mysqli_query($conn, $getStudentsByGender);
    
    echo '
        <thead>
            <tr>
                <th>S/n</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Jamb Score</th>
                <th>Admission Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
    ';
    
    if($result && mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            echo '
                <tr>
                    <td>'.($counter+1).'</td>
                    <td>'.ucwords(htmlentities($row['full_name'])).'</td>
                    <td>'.ucfirst(htmlentities($row['gender'])).'</td>
                    <td>'.htmlentities($row['jamb_score']).'</td>
                    <td>'.ucfirst(htmlentities($row['adm_status'])).'</td>
                    <td><a href="view-student-details.php?id='.$row['id'].'">View</a></td>
                </tr>
            ';
            $counter++;
        }
    }
    else{
        echo '
            <tr>
                <td colspan="6">No record(s) found!!!</td>
            </tr>
        ';
    }    
    echo '</tbody>';
}