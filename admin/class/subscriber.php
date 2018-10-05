<?php
/**
 * Created by PhpStorm.
 * User: rzala
 * Date: 10/5/2018
 * Time: 3:38 PM
 */

class subscriber
{
    function all(){
        global $pdo;
        $sql = "SELECT * FROM subscribers";
        $result = $pdo->prepare($sql);
        $result->execute();
        return $result;
    }
}