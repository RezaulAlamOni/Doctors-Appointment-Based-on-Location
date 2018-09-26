<?php
ob_start();

if (isset($_REQUEST['register'])){

    $pdo = new PDO("mysql:host=localhost;dbname=doctors",'root','');
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

    $patient['first_name']  = $_REQUEST['firstname'];
    $patient['last_name']   = $_REQUEST['lastname'] ;
    echo  $patient['email']       = $_REQUEST['email'] ;
    $patient['mobile']      = $_REQUEST['mobile'] ;
//    $patient['dob']         = $_REQUEST['dob'] ;
    $patient['location']    = $_REQUEST['location'] ;
    $patient['blood_group'] = $_REQUEST['blood'] ;
    $patient['gender']      = $_REQUEST['gender'] ;
//    $patient['role']        = $_REQUEST['role'] ;
    $patient['username']    = $_REQUEST['username'];
    $patient['password']    = trim($_REQUEST['password']);

//    $patient['password']    = password_hash($passwords,PASSWORD_BCRYPT,array('cost'=>12));

    if (count($patient)==9) {
        foreach ($patient as $key => $value) {
            $$key = $value;
        }
        $sql = "INSERT INTO `patients` (`first_name`, `last_name`, `user_name`, `password`, `email`, `blood_group`, `gender`, `phone`, `location_id`, `created_at`,`medical_history`) ";
        $sql .= " VALUES ('$first_name','$last_name','$username','$password','$email','$blood_group','$gender','$mobile',$location,now(),'')";
        $result = $pdo->prepare($sql);

        $result->execute();
//        if ($result) $register = "Registration Complete !!!!!";
        header("Location: ../login.php");
    }else header("Location: ../register.php");
}