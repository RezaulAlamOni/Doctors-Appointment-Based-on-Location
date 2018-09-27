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
    function add(){
        global $pdo;
        if (isset($_REQUEST['register_patient'])){

            $fname      = trim($_REQUEST['firstname']);
            $lname      = trim($_REQUEST['lastname']);
            $mail       = trim($_REQUEST['email']);
            $mobile     = trim($_REQUEST['mobile']);
            $gender     = trim($_REQUEST['gender']);
            $username   = trim($_REQUEST['username']);
            $password   = trim($_REQUEST['password']);
            $blood_group = trim($_REQUEST['blood']) ;
            $location    = trim($_REQUEST['location']) ;

//            $password   = password_hash($password,PASSWORD_BCRYPT,array('cost'=>12));

            if ($this->username_exist($username)){
                echo "<h2 class='text-center text-danger text-capitalize'>Please Try Another username this is already Registered</h2>";
            }else if ($this->email_exist($mail)){
                echo "<h2 class='text-center text-danger text-capitalize'>Please Try Another Email Id this is already Registered</h2>";
            }else if (!empty($username)){


                $sql  = "INSERT INTO `patients` (`first_name`, `last_name`, `user_name`, `password`, `email`, `blood_group`, `gender`, `phone`, `location_id`, `created_at`,`medical_history`) " ;
                $sql .= "VALUES ('$fname','$lname','$username','$password','$mail','$blood_group','$gender','$mobile',$location,now(),'')";

                $result = $pdo->prepare($sql);
                $result->execute();

                if ($result){
                    echo '<h2 class="text-center text-success text-capitalize">patient Registration Successful !!! <a href="login.php">Login Please</a></h2>';
                }else
                    echo '<h2 class="text-center text-danger text-capitalize">patient Registration failed !!! <a href="login.php">Login Please</a></h2>';


            }
        }
    }


}