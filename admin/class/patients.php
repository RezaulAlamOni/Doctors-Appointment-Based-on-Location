<?php
/**
 * Created by PhpStorm.
 * User: rzala
 * Date: 9/25/2018
 * Time: 2:12 AM
 */

class patients
{
    function count() {
        global $pdo;
        $sql = "SELECT * FROM patients";
        $result = $pdo->prepare($sql);
        $result->execute();
        return $result->rowCount();
    }
    function location($id){
        global $pdo;
        $sql = "SELECT * FROM locations WHERE id = :id";
        $result = $pdo->prepare($sql);
        $result->execute(['id'=>$id]);
        return $result;
    }
    function username_exist($username){
        global $pdo;
        $sql = "SELECT * FROM patients WHERE username = '{$username}'";
        $result = $pdo->prepare($sql);
        $result->execute();
        if ($result->rowCount()){
            return true;
        }else return false;
    }
    function email_exist($mail){
        global $pdo;
        $sql = "SELECT * FROM patients WHERE email = '{$mail}'";
        $result = $pdo->prepare($sql);
        $result->execute();
        if ($result->rowCount()){
            return true;
        }else{ return false;}
    }
    function patient_add(){
        global $pdo;
        if (isset($_POST['patient_submit'])){
            $first_name = $_POST['firstname'];
            $last_name  = $_POST['lastname'] ;
            $email      = $_POST['email'] ;
            $mobile     = $_POST['mobile'] ;
            $dob        = $_POST['dob'] ;
            $location   = $_POST['location'] ;
            $blood_group= $_POST['bloodgroup'];
            $gender     = $_POST['gender'] ;
            $role       = $_POST['role'] ;
            $username     = $_POST['username'];
            $password     = $_POST['password'];

            if (!empty($_POST['medical'])){
                $history="";
//                $number=  count($_POST['medical']);
                foreach ($_POST['medical'] as $medical){
                    $history .= $medical.",";
                }
            }

            if ($this->username_exist($username)){
                echo "<h3 class='text-center text-danger text-capitalize'>Please Try Another username this is already Registered</h3>";
            }else if ($this->email_exist($email)){
                echo "<h3 class='text-center text-danger text-capitalize'>Please Try Another Email Id this is already Registered</h3>";
            }else if (!empty($username)) {

                $sql = "INSERT INTO `patients` (`first_name`, `last_name`, `user_name`, `password`, `email`, `dob`, `blood_group`, `gender`, `phone`, `location_id`, `role_id`, `created_at`,`medical_history`) ";
                $sql .= " VALUES ('$first_name','$last_name','$username','$password','$email','$dob','$blood_group','$gender','$mobile','$location','$role',now(),'$history')";
                $result = $pdo->prepare($sql);
                $result->execute();

                if ($result) {
                    echo '<h3 class="text-center text-success text-capitalize">patient Added Successful !!! </h3>';
                } else {
                    header("Location: patient_add.php");
                }
            }
        }
    }
    function patient_update($id){
        global $pdo;
        if (isset($_POST['patient_update'])){
            $first_name = $_POST['firstname'];
            $last_name  = $_POST['lastname'] ;
            $email      = $_POST['email'] ;
            $mobile     = $_POST['mobile'] ;
//            $dob        = $_POST['dob'] ;
            $location   = $_POST['location'] ;
            $blood_group= $_POST['bloodgroup'];
            $gender     = $_POST['gender'] ;
            $role       = $_POST['role'] ;
            $status       = $_POST['status'] ;
            $username     = $_POST['username'];
            $password     = $_POST['password'];
            echo $id;
            if (!empty($_POST['medical'])) {
                $history = "";
//                $number = count($_POST['medical']);
                foreach ($_POST['medical'] as $medical) {
                    $history .= $medical.",";
                }
            }

            if (!empty($username)) {

                $sql  = "UPDATE `patients` SET `first_name`='$first_name', `last_name`='$last_name', `user_name`='$username', `password`= '$password', `email`='$email', `blood_group`='$blood_group', ";
                echo $sql .= "`gender`='$gender', `phone`='$mobile', `location_id`=$location, `role_id`= $role, `updated_at`= now(),`medical_history`='$history',`status`=$status WHERE `patient_id` = $id ";

                $result = $pdo->prepare($sql);
                $result->execute();

                if ($result) {
                    echo '<script>alert("<h3>Patient Updated Successful !!! </h3>")</script>';
                    header('Location: patient.php');

                }else
                    header('Location: patient_edite.php?id={$id}');
            }
        }
    }

    function find($id){
        global $pdo;
        $sql = "SELECT * FROM patients where patient_id = :id ";
        $result = $pdo->prepare($sql);
        $result->execute(['id'=>$id]);
        return $result;
    }

}