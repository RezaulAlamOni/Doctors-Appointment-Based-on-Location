<?php include("db.php"); ?>
<?php session_start(); ?>
<?php
    if (isset($_REQUEST['login']) ) {
//        if (empty($_REQUEST['email']) ) header('Location: ../login.php');
//        if (empty($_REQUEST['password']) ) header('Location: ../login.php');

        $email      = $_REQUEST['email'];
        $password   = $_POST['password'];
        $n   = $_POST['n'];
        $m   = $_POST['m'];
        $m = $n+$m;
        $sum   = trim($_POST['sum']);

        if (isset($_REQUEST['role'])) {
            $role = trim($_POST['role']);
            if ($role == 'patient' && $sum == $m ) {
                $sql = "SELECT * FROM patients where email = :email";
                $result = $pdo->prepare($sql);
                $result->execute(['email' => $email]);
                $patients = $result->fetchAll(PDO::FETCH_ASSOC); // default value PDO::FETCH_ASSOC
                if ($result->rowCount() > 0) {
                    foreach ($patients as $row) {

                        $id         = $row['patient_id'];
                        $user_name  = $row['user_name'];
                        $pass       = $row['password'];
                        $first_name = $row['first_name'];
                        $last_name  = $row['last_name'];
                        $gender     = $row['gender'];
                        $mail       = $row['email'];
                        $phone      = $row['phone'];
                        $dob        = $row['dob'];
                        $blood_grp  = $row['blood_group'];
                        $role_id    = $row['role_id'];
                        $location_id = $row['location_id'];
                        $medical_history = $row['medical_history'];
                        $medical_report = $row['medical_report'];
                        $created    = $row['created_at'];
                        $updated    = $row['updated_at'];

                        if ($password == $pass){
//                if (password_verify($password,$pass)) {

                            $_SESSION['patient_first_name']     = $first_name;
                            $_SESSION['patient_last_name']      = $last_name;
                            $_SESSION['patient_username']       = $user_name;
                            $_SESSION['patient_email']          = $mail;
                            $_SESSION['patient_phone']          = $phone;
                            $_SESSION['patient_id']             = $id;
                            $_SESSION['location_id']             = $location_id;
                            $_SESSION['medical_history']        = $medical_history;
                            $_SESSION['medical_report']         = $medical_report;

                            header("Location: ../index.php");
                        } else {

                            header('Location: ../login.php');
                        }
                    }
                } else {
                    header("Location: ../login.php");

                }
            }
            if ($role == 'doctor' && $sum == $m) {
                $sql = "SELECT * FROM doctors where email = :email";
                $result = $pdo->prepare($sql);
                $result->execute(['email' => $email]);
                $patients = $result->fetchAll(PDO::FETCH_ASSOC); // default value PDO::FETCH_ASSOC

                if ($result->rowCount() > 0) {

                    foreach ($patients as $row) {

                        $id         = $row['id'];
                        $user_name  = $row['username'];
                        $pass       = $row['password'];
                        $first_name = $row['first_name'];
                        $last_name  = $row['last_name'];
                        $gender     = $row['gender'];
                        $mail       = $row['email'];
                        $phone      = $row['phone'];
                        $hospital_id = $row['hospital_id'];
                        $department_id = $row['department_id'];
                        $created    = $row['created_at'];
                        $updated    = $row['updated_at'];


                        if ($password == $pass) {
//                if (password_verify($password,$pass)) {

                            $_SESSION['doctor_first_name'] = $first_name;
                            $_SESSION['doctor_last_name']  = $last_name;
                            $_SESSION['doctor_username']       = $user_name;
                            $_SESSION['doctor_email']      = $mail;
                            $_SESSION['doctor_d_id']      = $department_id;
                            $_SESSION['doctor_h_id']      = $hospital_id;
                            $_SESSION['doctor_phone']      = $phone;
                            $_SESSION['doctor_id']         = $id;

                            header("Location: ../index.php");
                        } else {

                            header('Location: ../login.php');
                        }
                    }
                } else {
                    header("Location: ../login.php");

                }
            }
        }
    }






