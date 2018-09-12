<?php
    $db["db_host"]="localhost";
    $db["db_user"]="root";
    $db["db_pass"]="";
    $db["db_name"]="doctors";

    foreach ($db as $key=>$value){
        define($key,$value);
    }

    $con = mysqli_connect(db_host,db_user,db_pass,db_name );

    if ($con){
//        echo "<h1>we are connected</h1>";
    }
//session_start();

?>