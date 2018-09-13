
<?php include("db.php"); ?>
<?php include ("admin_function.php"); ?>
<?php session_start(); ?>
<?php
global $con;
if (isset($_REQUEST['login']) ){
    $username   = $_REQUEST['username'];
    $password   = $_REQUEST['password'];
    $username   = mysqli_real_escape_string($con,$username);
    $password   = mysqli_real_escape_string($con,$password);
    $sql        = "SELECT * FROM admins where name = '{$username}'";
    $rslt       = mysqli_query($con,$sql);

    $row = mysqli_fetch_array($rslt);

    if (!$row){
        header('Location: ../login.php');
    }else{

        while ($row) {
            $pass = $row['password'];
            $name = $row['name'];
            $mail = $row['email'];
            $pic = $row['pic'];
            $id = mysqli_real_escape_string($con, $row['admin_id']);

//           $password = crypt($password,$pass);

//           if(password_verify($password,$pass)){
            if ($password == $pass) {

                $_SESSION['admin_name'] = $name;
                $_SESSION['admin_email'] = $mail;
                $_SESSION['admin_id'] = $id;
                $_SESSION['admin_img'] = $pic;

                header("Location: ../index.php");
            } else {
                header('Location: ../login.php');
            }
        }


    }
}
