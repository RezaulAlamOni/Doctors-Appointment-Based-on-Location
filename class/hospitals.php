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
        $sql = "SELECT * FROM hospitals";
        $result = $pdo->prepare($sql);
        $result->execute();
        return $result->rowCount();
    }
}