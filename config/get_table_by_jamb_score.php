<?php
include ('connectionDB.php');
if(isset($_POST['jamb_score'])){
    $jamb_score = intval($_POST['jamb_score'], 10);
    $students = array();
    $counter = 0;
    if($jamb_score === 0){
        $getStudentsByJambScore = "SELECT * FROM account ORDER BY full_name ASC";
    }else {
        $getStudentsByJambScore = "SELECT * FROM account WHERE jamb_score LIKE '%$jamb_score%' ORDER BY full_name ASC";
    }
    $result = mysqli_query($conn, $getStudentsByJambScore);
    
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
                    <td>'.$row['full_name'].'</td>
                    <td>'.$row['gender'].'</td>
                    <td>'.$row['jamb_score'].'</td>
                    <td>'.$row['adm_status'].'</td>
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