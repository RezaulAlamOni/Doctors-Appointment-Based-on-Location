<?php
include ('db.php');
if (isset($_GET['id'])){
    $doctor_id = $_GET['id'];
    $sql = "SELECT * FROM doctors WHERE id = $doctor_id";
    $result = $pdo->prepare($sql);
    $result->execute();
    $doctors = $result->fetchAll();
    foreach ($doctors as $doctor) {
        $sql = "INSERT INTO `admins`(`first_name`, `last_name`, `user_name`, `email`, `phone`, `pic`, `password`, `created_at`) ";
        echo $sql .= "VALUES ('$doctor->first_name','$doctor->last_name','$doctor->username','$doctor->email','$doctor->phone','$doctor->photo','$doctor->password',now())";
        $result = $pdo->prepare($sql);
        $result->execute();
        if ($result){
            echo "<script>alert('admin added successful!!')</script>";
            header('Location: ../doctors.php');

        }
    }


}