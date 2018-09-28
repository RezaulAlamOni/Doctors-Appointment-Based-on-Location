<?php
/**
 * Created by PhpStorm.
 * User: rzala
 * Date: 9/25/2018
 * Time: 2:14 AM
 */

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
        $sql = "SELECT name FROM hospitals WHERE  location_id = $id";
        $result = $pdo->prepare($sql);
        $result->execute();
        $hospital = $result->fetchAll();
        foreach ($hospital as $name){
            echo $name->name;
        }
    }
}