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
        $sql = "SELECT * FROM locations";
        $result = $pdo->prepare($sql);
        $result->execute();
        return $result;
    }

}