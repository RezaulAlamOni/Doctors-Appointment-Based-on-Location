<?php
/**
 * Created by PhpStorm.
 * User: rzala
 * Date: 9/25/2018
 * Time: 12:36 AM
 */
require('hospitals.php');
$hos = new hospitals();
class doctors
{

    function all(){
        global $pdo;
        $sql = "SELECT * FROM doctors";
        $result = $pdo->prepare($sql);
        $result->execute();
        return $result;
    }
    function doctor_dpt($id){
        global  $pdo;
        $sql2 = "SELECT * FROM departments WHERE id = :id";
        $r = $pdo->prepare($sql2);
        $r->execute(['id'=>$id]);
        $dpts = $r->fetchAll();

        foreach ($dpts as $dpt){
            echo $dpt->name_adj;
        }
    }
//
//    function doctor_hptl($id){
//        global  $pdo;
//        global  $hos;
//        $sql2 = "SELECT * FROM hospitals WHERE id = :id";
//        $r = $pdo->prepare($sql2);
//        $r->execute(['id'=>$id]);
//        $hptl = $r->fetchAll();
//
//        foreach ($hptl as $hpt){
//            echo "<h6 class=''>".$hos->find($hpt->location_id)."</h6>";
//        }
//    }
    function count() {
        global $pdo;
        $sql = "SELECT * FROM doctors";
        $result = $pdo->prepare($sql);
        $result->execute();
        return $result->rowCount();
    }
    function username_exist($username){
        global $pdo;
        $sql = "SELECT * FROM doctors WHERE username = '{$username}'";
        $result = $pdo->prepare($sql);
        $result->execute();
        if ($result->rowCount()){
            return true;
        }else return false;
    }
    function email_exist($mail){
        global $pdo;
        $sql = "SELECT * FROM doctors WHERE email = '{$mail}'";
        $result = $pdo->prepare($sql);
        $result->execute();
        if ($result->rowCount()){
            return true;
        }else{ return false;}
    }

    function add(){
        global $pdo;
        if (isset($_POST['doctor_submit'])){

            $fname          = trim($_REQUEST['firstname']);
            $lname          = trim($_REQUEST['lastname']);
            $mail           = trim($_REQUEST['email']);
            $mobile         = trim($_REQUEST['mobile']);
            $gender         = trim($_REQUEST['gender']);
            $age            = trim($_REQUEST['age']);
            $department_id  = trim($_REQUEST['department']);
            $hospital_id    = trim($_REQUEST['chamber']);
            $position       = trim($_REQUEST['position']);
            $degree         = trim($_REQUEST['degree']);
            $speciality     = trim($_REQUEST['speciality']);
            $experience     = trim($_REQUEST['experience']);
            $awards         = trim($_REQUEST['awards']);
            $username       = trim($_REQUEST['username']);
            $password       = trim($_REQUEST['password']);

            $start_time     = trim($_REQUEST['st']);
            $end_time       = trim($_REQUEST['et']);
            $slot           = trim($_REQUEST['slot']);
            $week_end       = trim($_REQUEST['week_end']);
            $status         = trim($_REQUEST['status']);



//            $password   = password_hash($password,PASSWORD_BCRYPT,array('cost'=>12));

            $img        =   $_FILES['doctor_picture']['name'];
            $img_temp   =   $_FILES['doctor_picture']['tmp_name'];


            if ($this->username_exist($username)){
                echo "<h3 class='text-center text-danger'>Please Try Another username this is already Registered</h3>";
            }else if ($this->email_exist($mail)){
                echo "<h3 class='text-center text-danger'>Please Try Another Email Id this is already Registered</h3>";
            }else if (!empty($degree) || !empty($hospital_id) || !empty($department_id) || !empty($username)|| !empty($password)){

                move_uploaded_file($img_temp,"../public/uploads/{$img}");

                $sql = "INSERT INTO `doctors`( `first_name`, `last_name`, `email`, `phone`, `gender`, `age`, `username`, `password`, `role_id`, `photo`, `degree`, `awards`, `department_id`, `position`, `specialty`, `experience`, `hospital_id`, `start_appointment`, `end_appointment`, `time_slot`, `week_end`, `status`, `created_at`) " ;
                $sql .= "VALUES ('$fname','$lname','$mail','$mobile','$gender','$age','$username','$password',3,'$img','$degree','$awards',$department_id,'$position','$speciality',$experience,$hospital_id,'$start_time','$end_time','$slot','$week_end',$status,now())";
                $result = $pdo->prepare($sql);
                $result->execute();

                if ($result){
                    echo '<h2 class="text-center text-primary">Successful Added Doctor !!! </h2>';
                }else
                    echo '<h2 class="text-center text-danger">Addition failed !!! </h2>';

            }
        }
    }

    function find_doctors_by_location($location_id){
        global $pdo;
        $sql = "SELECT * FROM `doctors`WHERE doctors.hospital_id IN(SELECT hospitals.id FROM hospitals WHERE hospitals.location_id = :id)";
        $result = $pdo->prepare($sql);
        $result->execute(['id'=>$location_id]);
        return $result;
    }
    function remaining_doctors_after_finding_by_location($location_id){
        global $pdo;
        $sql = "SELECT * FROM `doctors`WHERE doctors.hospital_id not IN(SELECT hospitals.id FROM hospitals WHERE hospitals.location_id = :id)";
        $result = $pdo->prepare($sql);
        $result->execute(['id'=>$location_id]);
        return $result;

    }
    function count_by_dptID($id){
        global $pdo;
        $sql = "SELECT * FROM doctors where department_id = :id";
        $result = $pdo->prepare($sql);
        $result->execute(['id'=>$id]);
        return $result->rowCount();
    }

}