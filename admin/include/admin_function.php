<?php
ob_start();

if (isset($_POST['patient_submit'])){

    $pdo = new PDO("mysql:host=localhost;dbname=doctors",'root','');
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

    $first_name = $_POST['firstname'];
    $last_name  = $_POST['lastname'] ;
    $email      = $_POST['email'] ;
    $mobile     = $_POST['mobile'] ;
    $dob        = $_POST['dob'] ;
    $location   = $_POST['location'] ;
    $blood_group= $_POST['bloodgroup'] ;
    $gender     = $_POST['gender'] ;
    $role       = $_POST['role'] ;
    $username     = $_POST['username'];
    $password     = $_POST['password'];

    if (!empty($_POST['medical'])){
        $history="";
        $number=  count($_POST['medical']);
        foreach ($_POST['medical'] as $key => $medical){
            $history .= $medical.", ";
            if ($key==$number-2){
                $history .= "<br>";
            }
        }
    }
    $sql  = "INSERT INTO `patients` (`first_name`, `last_name`, `user_name`, `password`, `email`, `dob`, `blood_group`, `gender`, `phone`, `location_id`, `role_id`, `created_at`,`medical_history`) ";
    $sql .= " VALUES ('$first_name','$last_name','$username','$password','$email','$dob','$blood_group','$gender','$mobile','$location','$role',now(),'$history')";
    $result = $pdo->prepare($sql);
    $result->execute();

    header("Location: ../patient.php");
}