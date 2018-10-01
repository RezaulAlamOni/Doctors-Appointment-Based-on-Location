<?php

class hospitals
{
    function count() {
        global $pdo;
        $sql = "SELECT * FROM hospitals ";
        $result = $pdo->prepare($sql);
        $result->execute();
        return $result->rowCount();
    }
    function all(){
        global $pdo;
        $sql = "SELECT * FROM hospitals ORDER BY name ASC ";
        $result = $pdo->prepare($sql);
        $result->execute();
        return $result;
    }
    function find($id){
        global $pdo;
        $sql = "SELECT * FROM hospitals WHERE  id = $id";
        $result = $pdo->prepare($sql);
        $result->execute();
        $hospital = $result->fetchAll();
        foreach ($hospital as $name){
            echo $name->name;
        }
    }//echo name
    function find_byID($id){
        global $pdo;
        $sql = "SELECT * FROM hospitals WHERE  id = $id";
        $result = $pdo->prepare($sql);
        $result->execute();
        $hospitals = $result->fetchAll();
        return $hospitals;
    }
    function find_by_location($id){
        global $pdo;
        $sql = "SELECT name FROM hospitals WHERE  location_id = :id";
        $result = $pdo->prepare($sql);
        $result->execute(['id'=>$id]);
        return $result->rowCount();
    }
    function find_all_by_location($id){
        global $pdo;
        $sql = "SELECT * FROM hospitals WHERE location_id = :id";
        $result = $pdo->prepare($sql);
        $result->execute(['id'=>$id]);
        return $result;
    }
    function hptl_location($hospital_id){

        global $pdo;
        $sql = "SELECT locations.name FROM locations WHERE locations.location_id =  :id ";
        $result = $pdo->prepare($sql);
        $result->execute(['id'=>$hospital_id]);
        $locations = $result->fetchAll();
        foreach ($locations as $location) {
            echo $location->name;
        }
    }
    function doctor_count_by_hospitalID($id){
        global $pdo;
        $sql = "SELECT * FROM `doctors` WHERE hospital_id = :id";
        $result = $pdo->prepare($sql);
        $result->execute(['id'=>$id]);
        return $result->rowCount();

    }
    function add(){
        global $pdo;
        if (isset($_POST['add_hospital'])){
            $name     = $_POST['name'];
            $address  = $_POST['address'];
            $location = $_POST['location'];

            $img        =   $_FILES['photo']['name'];
            $img_temp   =   $_FILES['photo']['tmp_name'];
            if (!empty($img)){
                move_uploaded_file($img_temp,"../public/uploads/{$img}");

                $sql = "INSERT INTO `hospitals` (`name`, `address`, `photo`, `location_id`)  ";
                $sql .= "VALUES ('$name','$address','$img',$location)";

                $result = $pdo->prepare($sql);
                $result->execute();
                if ($result){
//                    echo '<h2 class="text-center text-primary">Successful Added Hospital !!! </h2>';
                    header('Location: hospital.php');
                }
            }


        }

    }
    function update(){
        global $pdo;
        if (isset($_POST['update_hospital'])){
            $id       = $_POST['id'];
            $name     = $_POST['name'];
            $address  = $_POST['address'];
            $location = $_POST['location'];
            $img      = $_FILES['photo']['name'];

            if (!empty($img)) {
                $img_temp   =   $_FILES['photo']['tmp_name'];
                move_uploaded_file($img_temp, "../public/uploads/{$img}");
            }else{
                $rslt = $this->find_byID($id);
                foreach ($rslt as $hospital) {
                    $img = $hospital->photo;
                }

            }
            $sql = "UPDATE `hospitals` SET `name`='$name', `photo`='$img', `address`= '$address', `location_id`=$location WHERE  id = :id";
            $result = $pdo->prepare($sql);
            $result->execute(['id'=>$id]);
            if ($result){
                header('Location: hospital.php');
            }



        }

    }
}