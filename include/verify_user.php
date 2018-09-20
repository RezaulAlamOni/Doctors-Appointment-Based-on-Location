<?php //include("db.php"); ?>
<?php include ("function.php");?>

<?php session_start(); ?>
<?php
    $pdo = new PDO("mysql:host=localhost;dbname=doctors",'root','');
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
    if (isset($_REQUEST['login']) ) {
        if (empty($_REQUEST['email']) ) header('Location: ../login.php');
        if (empty($_REQUEST['password']) ) header('Location: ../login.php');


        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];

        $sql = "SELECT * FROM patients where email = :email";
        $result = $pdo->prepare($sql);
        $result->execute(['email'=>$email]);
        $patients = $result->fetchAll(); // default value PDO::FETCH_ASSOC

        if ($result->rowCount()>0) {

            foreach ($patients as $row){

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
                $location_id= $row['location_id'];
                $medical_history = $row['dob'];
                $status  = $row['status'];
                $created  = $row['created_at'];
                $updated  = $row['updated_at'];


                if ($password == $pass) {

                    $_SESSION['patient_first_name'] = $first_name;
                    $_SESSION['patient_last_name'] = $last_name;
                    $_SESSION['patient_name'] = $user_name;
                    $_SESSION['patient_email'] = $mail;
                    $_SESSION['patient_phone'] = $phone;
                    $_SESSION['patient_id'] = $id;

                    header("Location: ../index.php");
                } else {

                    header('Location: ../login.php');
                }
            }
        }else{
            header("Location: ../login.php");
        }



    }


