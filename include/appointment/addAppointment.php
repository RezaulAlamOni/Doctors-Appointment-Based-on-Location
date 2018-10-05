<?php
include ('../db.php');
if (isset($_POST['dpt_id'])){
    session_start();
    $patient_id = $_SESSION['patient_id'];
    $dpt_id         = $_POST['dpt_id'];
    $doctor_id      = $_POST['doctor_id'];
    $date           = $_POST['date'];
    $time           = $_POST['time'];
    $address        = $_POST['address'];

    if (!empty($time) && !empty($address)){
        $sql = "INSERT INTO `appointment`( `patient_id`,`address`,`doctor_id`, `dpt_id`, `date`, `time`, `created_at`)" ;
        $sql .= "VALUES ($patient_id,'$address',$doctor_id,$dpt_id,'$date','$time',now())";
        $result = $pdo->prepare($sql);
        $result->execute();
        if ($result){
            echo 'Appointment Booking Successful!!';
        }
    }else
        echo 'Time or address Can not be empty !!!!';

}