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
        $sql = "SELECT * FROM departments";
        $result = $pdo->prepare($sql);
        $result->execute();
        return $result;
    }
    function count() {
        global $pdo;
        $sql = "SELECT * FROM departments";
        $result = $pdo->prepare($sql);
        $result->execute();
        return $result->rowCount();
    }
}