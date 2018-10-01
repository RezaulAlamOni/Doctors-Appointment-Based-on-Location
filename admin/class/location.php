<?php
/**
 * Created by PhpStorm.
 * User: rzala
 * Date: 10/1/2018
 * Time: 7:23 PM
 */

class location
{
    function all(){
        global $pdo;
        $sql = "SELECT * FROM locations ORDER BY name asc ";
        $result = $pdo->prepare($sql);
        $result->execute();
        return $result;
    }
    function add(){
        global $pdo;
        if (isset($_POST['add_location'])){
            $name = $_POST['name'];

            $sql = "INSERT INTO `locations`(`name`) VALUES ('$name')";
            $result = $pdo->prepare($sql);
            $result->execute();
            if ($result){
//                echo '<h2 class="text-center text-primary">Location Added Successfully !!! </h2>';
                header('Location: locations.php');

            }
        }
    }
    function update(){
        global $pdo;
        if (isset($_POST['update_location'])){
            $name = $_POST['name'];
            $id = $_POST['id'];

            $sql = "UPDATE `locations` set `name`='$name' where location_id = ?";
            $result = $pdo->prepare($sql);
            $result->execute([$id]);
            if ($result){
//                echo '<h2 class="text-center text-primary">Location update Successfully !!! </h2>';
                header('Location: locations.php');
            }
        }
    }
    function find($id){
        global $pdo;
        $sql = "SELECT * FROM locations where location_id = :id";
        $result = $pdo->prepare($sql);
        $result->execute(['id'=>$id]);
        return $result;
    }
}