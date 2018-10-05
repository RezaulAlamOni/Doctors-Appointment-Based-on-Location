<?php
/**
 * Created by PhpStorm.
 * User: rzala
 * Date: 9/25/2018
 * Time: 11:24 PM
 */

class appointments
{
    function all(){
        global $pdo;
        $sql = "SELECT * FROM appointment order By id desc ";
        $result = $pdo->prepare($sql);
        $result->execute();
        return $result;
    }

}