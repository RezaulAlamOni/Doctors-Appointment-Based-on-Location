<?php
include("db.php");
include ("../cms_function.php");
session_start();
?>
<?php
if (isset($_REQUEST['login'])){
    $username   =$_REQUEST['username'];
    $password   =$_REQUEST['password'];
    $username   = mysqli_real_escape_string($con,$username);
    $password   = mysqli_real_escape_string($con,$password);
    $sql        = "SELECT * FROM users where username='{$username}'";
    $rslt       =mysqli_query($con,$sql);

    if (!$rslt){
        die("Faild TO CONNECT !! ".mysqli_error($con));
    }
        while ($row = mysqli_fetch_array($rslt)){
            $pass       =$row['password'];
            $user_name  =$row['username'];
            $firstname  =$row['user_firstname'];
            $lastname   =$row['user_lastname'];
            $mail       =$row['user_email'];
            $role       =$row['user_role'];
            $pic        =$row['user_img'];
            $id         =escape($row['user_id']);
            }
//           $password = crypt($password,$pass);

           if(password_verify($password,$pass)){

           $_SESSION['username']    =$user_name;
           $_SESSION['firstname']   = $firstname;
           $_SESSION['lastname']    = $lastname;
           $_SESSION['email']       = $mail;
           $_SESSION['role']        = $role;
           $_SESSION['id']          = $id;
           $_SESSION['img']         = $pic;

           header("Location: ../index.php");
        } else{
               header('Location: ../index.php');
           }

    }
