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
$sql = "SELECT * FROM patients where patient_id = :id";
$result = $pdo->prepare($sql);
$result->execute(['id'=>20]);
$admins = $result->fetchAll(PDO::FETCH_ASSOC);


foreach ($admins as $admin){
//    echo $admin->user_name;
    echo $admin['password']."<br>";
}
//var_dump($admins);
 $password = 'qwerty';
 $pass = password_hash($password,PASSWORD_BCRYPT,array('cost'=>12));
$p = 'qwerty';
if (password_verify($p,$pass)){
    echo "<br>aadscfasdcvasdvcasd";
}

