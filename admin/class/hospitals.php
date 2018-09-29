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
        $sql = "SELECT name FROM hospitals WHERE  id = $id";
        $result = $pdo->prepare($sql);
        $result->execute();
        $hospital = $result->fetchAll();
        foreach ($hospital as $name){
            echo $name->name;
        }
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
}