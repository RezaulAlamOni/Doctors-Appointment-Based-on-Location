<?php
include ('db.php');
if (isset($_POST['profile'])) {
    $id         = $_POST['id'];
    $dob        = $_POST['dob'];
    $location   = $_POST['location_id'];
    $condition  = $_POST['condition'];
    $phone      = $_POST['mobile'];

    $img        =   $_FILES['report']['name'];
    $img_temp   =   $_FILES['report']['tmp_name'];
//    move_uploaded_file($img_temp,"public/uploads/{$img}");

    echo $sql = "UPDATE `patients` SET `dob`='$dob',`location_id`=$location, `medical_history` = '$condition',`phone`='$phone' ,`medical_report` = '$img' where patient_id = $id";
    $result = $pdo->prepare($sql);
    $result->execute();
    if ($result){
        header('Location: ../index.php');
    }

}