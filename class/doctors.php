<?php
/**
 * Created by PhpStorm.
 * User: rzala
 * Date: 9/25/2018
 * Time: 12:36 AM
 */

class doctors
{
    function all(){
        global $pdo;
        $sql = "SELECT * FROM doctors";
        $result = $pdo->prepare($sql);
        $result->execute();
        return $result;
    }
    function doctor_dpt($id){
        global  $pdo;
        $sql2 = "SELECT * FROM departments WHERE id = :id";
        $r = $pdo->prepare($sql2);
        $r->execute(['id'=>$id]);
        $dpts = $r->fetchAll();

        foreach ($dpts as $dpt){
            echo $dpt->name_adj;
        }
    }
    function doctor_hptl($id){
        global  $pdo;
        $sql2 = "SELECT * FROM hospitals WHERE id = :id";
        $r = $pdo->prepare($sql2);
        $r->execute(['id'=>$id]);
        $hptl = $r->fetchAll();

        foreach ($hptl as $hpt){
            echo "<h6 class='text-white' style='height: 50px;'><b>".$hpt->name."</b></h6><h6 class=''>".$hpt->dist_city."</h6>";
        }
    }
    function count() {
        global $pdo;
        $sql = "SELECT * FROM doctors";
        $result = $pdo->prepare($sql);
        $result->execute();
        return $result->rowCount();
    }


}