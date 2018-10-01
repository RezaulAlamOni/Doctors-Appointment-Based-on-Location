<?php
/**
 * Created by PhpStorm.
 * User: rzala
 * Date: 10/2/2018
 * Time: 2:16 AM
 */

class admin
{
    function find_byID($id){
        global $pdo;
        $sql = "SELECT * FROM admins WHERE  admin_id = $id";
        $result = $pdo->prepare($sql);
        $result->execute();
        $admin = $result->fetchAll();
        return $admin;
    }
    function update(){
        global $pdo;
        if (isset($_POST['update'])){
            $id             = $_POST['id'];
            $username       = $_POST['username'];
            $fname          = $_POST['firstname'];
            $lname          = $_POST['lastname'];
            $phone          = $_POST['mobile'];

//            if (!empty($img)) {
//                $img            = $_FILES['user_pic']['temp'];
//                $img_temp       = $_FILES['user_pic']['tmp_name'];
//                move_uploaded_file($img_temp, "public/images/{$img}");
//            }else{
                $rslt = $this->find_byID($id);
                foreach ($rslt as $admin) {
                    $img = $admin->pic;
                }
//
//            }
            $sql = "UPDATE `admins` SET `first_name`='$fname', `last_name`='$lname', `user_name`= '$username', `phone`='$phone' ,`pic`='$img',`updated_at`=now() where admin_id = $id";
            $result = $pdo->prepare($sql);
            $result->execute();
            if ($result){
                header('Location: profile.php');
            }
        }


    }
    function delete(){

    }
    function find($id){

    }
    function check_old_password($id,$pass){
        $admins = $this->find_byID($id);
        foreach ( $admins as $item) {
            if ($item->password == $pass)
                return true;
            return false;
        }

    }
    function update_password(){
        global $pdo;
        if (isset($_POST['pass_update'])) {
            $id     = $_POST['id'];
            $pass   = $_POST['old-password'];
            $pass2  = $_POST['new-password'];
            $pass3  = $_POST['confirm-password'];
            if ($this->check_old_password($id,$pass)){
                if ($pass2==$pass3){
                    $sql = "UPDATE `admins` SET  `password`='$pass3',`updated_at`= now() where admin_id = $id";
                    $result = $pdo->prepare($sql);
                    $result->execute();
                }else
                    echo 'password not match!!! ';
            }else
                echo 'old password not match';
        }
    }

    function isAdmin($username){

    }
    function username_exist($username){

    }
    function add(){

    }
}