
<?php //include("db.php"); ?>
<?php session_start(); ?>
<?php
//global $con;

$pdo = new PDO("mysql:host=localhost;dbname=doctors",'root','');
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

if (isset($_REQUEST['login']) ){
    $username   = $_REQUEST['username'];
    $password   = $_REQUEST['password'];

    $a   = $_REQUEST['a'];
    $b   = $_REQUEST['b'];
    $sum   = $_REQUEST['sum'];

//    $username   = mysqli_real_escape_string($con,$username);
//    $password   = mysqli_real_escape_string($con,$password);
//    $sql        = "SELECT * FROM admins where user_name = '{$username}'";
//    $rslt       = mysqli_query($con,$sql);

    $sql = "SELECT * FROM admins where user_name = :name";
    $result = $pdo->prepare($sql);
    $result->execute(['name'=>$username]);
    $admins = $result->fetchAll(); // default value PDO::FETCH_ASSOC

//    foreach ($admins as $admin){
////    echo $admin->user_name;
//        echo $admin['user_name'];
//    }
//    $result = $pdo->query($sql);

//    if (mysqli_num_rows($rslt)>0) {
    if ($result->rowCount()>0 && $sum == $a+$b) {

//        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {

        foreach ($admins as $row){

            $pass = $row['password'];
            $first_name = $row['first_name'];
            $last_name = $row['last_name'];
            $user_name = $row['user_name'];
            $mail = $row['email'];
            $phone = $row['phone'];
            $pic = $row['pic'];
//            $id = mysqli_real_escape_string($con, $row['admin_id']);
            $id = $row['admin_id'];

//           $password = crypt($password,$pass);

//           if(password_verify($password,$pass)){
            if ($password == $pass ) {

                $_SESSION['admin_first_name'] = $first_name;
                $_SESSION['admin_last_name'] = $last_name;
                $_SESSION['admin_name'] = $user_name;
                $_SESSION['admin_email'] = $mail;
                $_SESSION['admin_phone'] = $phone;
                $_SESSION['admin_id'] = $id;
                $_SESSION['admin_img'] = $pic;


                header("Location: ../index.php");
            } else {

                header('Location: ../login.php');
            }
        }
    }else{
        header("Location: ../login.php");
    }
}

