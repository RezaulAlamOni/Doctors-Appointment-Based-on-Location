
<?php
include ('../db.php');
if (isset($_POST['doctor_id'])){
    $id = $_POST['doctor_id'];

    $sql = "SELECT * FROM doctors where id = {$_POST['doctor_id']}";
    $result = $pdo->prepare($sql);
    $result->execute();
    $doctors = $result->fetchAll();
    ?>
    <input type="text" id="loc1"
<?php
    foreach ($doctors as $doctor) {
        $i = $doctor->hospital_id;
        $sql1= "SELECT * FROM `hospitals` WHERE id = $i";
        $result = $pdo->prepare($sql1);
        $result->execute();
        $hospitals = $result->fetchAll();
        foreach ($hospitals as $hospital) {
            ?>
            value="<?php echo $hospital->name.",".$hospital->address." ";?>"
            <?php

        }
    }
    ?>
           readonly="" >
    <?php

}
