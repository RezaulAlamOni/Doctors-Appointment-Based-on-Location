<?php
/**
 * Created by PhpStorm.
 * User: rzala
 * Date: 9/25/2018
 * Time: 1:29 AM
 */

class departments
{

    function all(){
        global $pdo;
        $sql = "SELECT * FROM departments ORDER By id ASC ";
        $result = $pdo->prepare($sql);
        $result->execute();
        return $result;
    }
    function find($id){
        global $pdo;
        $sql = "SELECT * FROM departments WHERE id = :id ";
        $result = $pdo->prepare($sql);
        $result->execute(['id'=>$id]);
        return $result;
    }
    function count() {
        global $pdo;
        $sql = "SELECT * FROM departments";
        $result = $pdo->prepare($sql);
        $result->execute();
        return $result->rowCount();
    }
    function delete($id){
        global $pdo;
        $sql = "DELETE FROM `departments` WHERE id = :id ";
        $result = $pdo->prepare($sql);
        $result->execute(['id'=>$id]);
    }
    function add(){
        global $pdo;
        if (isset($_POST['add_department'])){
            $name     = $_POST['name'];
            $details  = $_POST['description'];
            $name_adj = $_POST['adj'];

            $img        =   $_FILES['photo']['name'];
            $img_temp   =   $_FILES['photo']['tmp_name'];
            if (!empty($img)){
                move_uploaded_file($img_temp,"../public/uploads/{$img}");
                $sql = "INSERT INTO `departments`(`name`, `photo`, `name_adj`, `details`) ";
                $sql .= "VALUES ('$name','$img','$name_adj','$details')";
                $result = $pdo->prepare($sql);
                $result->execute();
                if ($result){
                    echo '<h2 class="text-center text-primary">Successful Added Department !!! </h2>';
                    header('Location: department.php');
                }
            }


        }

    }
    function update(){
        global $pdo;
        if (isset($_POST['update_department'])){
            $id       = $_POST['id'];
            $name     = $_POST['name'];
            $details  = $_POST['description'];
            $name_adj = $_POST['adj'];
            $img      =   $_FILES['photo']['name'];

            if (!empty($img)) {
                $img_temp   =   $_FILES['photo']['tmp_name'];
                move_uploaded_file($img_temp, "../public/uploads/{$img}");
            }else{
                $rslt = $this->find($id);
                $dpts = $rslt->fetchAll();
                foreach ($dpts as $dpt) {
                    $img = $dpt->photo;
                }

            }
                $sql = "UPDATE `departments` SET `name`='$name', `photo`='$img', `name_adj`='$name_adj', `details`='$details' WHERE  id = :id";
                $result = $pdo->prepare($sql);
                $result->execute(['id'=>$id]);
                if ($result){
                    header('Location: department.php');
                }



        }

    }


}