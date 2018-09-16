<?php

$pdo = new PDO('mysql:host=localhost;dbname=doctors','root','');
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

//$result= $pdo->query('SELECT * FROM admins WHERE admin_id="1"');
//
//
////while ($row = $result->fetch(PDO::FETCH_ASSOC)){
////    echo $row['user_name']." " ;
////    echo $row['first_name'] ." ";
////    echo $row['last_name']." ";
////    echo $row['email']." ";
////}
//if ($result->rowCount()>0) {
//    while ($row = $result->fetch(PDO::FETCH_OBJ)) {
//        echo $row->user_name . " ";
//        echo $row->first_name . " ";
//        echo $row->last_name . " ";
//        echo $row->admin_id . " ";
//
//    }
//}else
//{
////    header('Location:index.php');
//    echo "Not found";
//}

//$sql = 'SELECT * FROM admins WHERE admin_id=?';
//$result = $pdo->prepare($sql);
//$result->execute([1]);
//$admin = $result->fetchAll();
//var_dump($admin);

$name = 'mehadi';
$sql = "SELECT * FROM admins where user_name = :name";
$result = $pdo->prepare($sql);
$result->execute(['name'=>$name]);
$admins = $result->fetchAll(PDO::FETCH_ASSOC);
foreach ($admins as $admin){
//    echo $admin->user_name;
    echo $admin['user_name'];
}
//var_dump($admins);
