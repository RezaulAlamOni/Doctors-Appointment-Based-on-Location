<?php
include ('../db.php');
if (isset($_POST['doctor_id'])){


    $doctor_id      = $_POST['doctor_id'];
    $sql = "SELECT * FROM doctors where id = $doctor_id";
    $result = $pdo->prepare($sql);
    $result->execute();
    $doctors = $result->fetchAll();
    foreach ($doctors as $doctor) {
        $dpt_id = $doctor->department_id;
    }

    $patient_id     = $_POST['patient_id'];
    $date           = $_POST['date'];
    $time           = $_POST['time'];
    $address        = $_POST['address'];
    $problem        = $_POST['problem'];


    if (!empty($time) && !empty($address)){
        $sql = "INSERT INTO `appointment`( `patient_id`,`address`,`doctor_id`, `dpt_id`, `date`, `time`,`problems`, `created_at`)" ;
        $sql .= "VALUES ($patient_id,'$address',$doctor_id,$dpt_id,'$date','$time','$problem',now())";
        $result = $pdo->prepare($sql);
        $result->execute();
        if ($result){
            echo 'Appointment Booking Successful!!';
        }
    }else
        echo 'Time or address Can not be empty !!!!';

}