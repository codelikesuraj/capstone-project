<?php
include ('connectionDB.php');
if(isset($_POST['name']) && isset($_POST['name_length'])){
    $name = trim($_POST['name']);
    $name_length = intval($_POST['name_length'], 10);
    $students = array();
    $counter = 0;
    if($name_length === 0){
        $getStudentsByName = "SELECT * FROM account";
    }else {
        $getStudentsByName = "SELECT * FROM account WHERE full_name LIKE '%$name%'";
    }
    $result = mysqli_query($conn, $getStudentsByName);
    
    if($result && mysqli_num_rows($result)>0){
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
        echo '</tbody>';
    }
}