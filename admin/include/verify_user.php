
<?php
include("db.php");
include ("admin_function.php");
session_start();
?>
<?php
global $con;
if (isset($_REQUEST['login']) ){
    $username   =$_REQUEST['username'];
//    echo $sum        = $_REQUEST['sum'];
//    echo $a        = $_REQUEST['a'];
//    $b        = $_REQUEST['b'];
    $password   =$_REQUEST['password'];
    $username   = mysqli_real_escape_string($con,$username);
    $password   = mysqli_real_escape_string($con,$password);
    $sql        = "SELECT * FROM admins where name = '{$username}'";
    $rslt       = mysqli_query($con,$sql);

    if (!$rslt){
        die("Faild TO CONNECT !! ".mysqli_error($con));
}
    $row = mysqli_fetch_array($rslt);
    if (!$row){
        header('Location: ../login.php');
        }

    while ($row) {
        $pass = $row['password'];
        $name = $row['name'];
        $mail = $row['email'];
        $pic = $row['pic'];
        $id = mysqli_real_escape_string($con, $row['admin_id']);

//           $password = crypt($password,$pass);

//           if(password_verify($password,$pass)){

        if ($password == $pass) {

            $_SESSION['name'] = $name;
            $_SESSION['email'] = $mail;
            $_SESSION['id'] = $id;
            $_SESSION['img'] = $pic;

            header("Location: ../index.php");
        } else {
            header('Location: ../login.php');
        }
    }

}
