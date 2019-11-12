<?php
//    $db["db_host"]="localhost";
//    $db["db_user"]="root";
//    $db["db_pass"]="";
//    $db["db_name"]="doctors";
//
//    foreach ($db as $key=>$value){
//        define($key,$value);
//    }
//
//    $con = mysqli_connect(db_host,db_user,db_pass,db_name );
//        $con = new PDO('mysqli:host=localhost;dbname=doctors','root','');

//    if ($con){
//        echo "<h1>we are connected</h1>";
//    }

    $pdo = new PDO("mysql:host=localhost;dbname=doctors",'root','');
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);