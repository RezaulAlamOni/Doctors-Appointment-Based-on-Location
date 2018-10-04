
<?php
include ('../db.php');
if (isset($_POST['doctor_id'])){
    $id = $_POST['doctor_id'];
    $date = $_POST['date'];
    $dt = strtotime($date);
    $day = date("D",$dt);
    $day=strtoupper($day);

    $sql = "SELECT * FROM doctors where id = {$_POST['doctor_id']}";
    $result = $pdo->prepare($sql);
    $result->execute();
    $doctors = $result->fetchAll();
    ?>
        <div id="time_slot">
<?php
    foreach ($doctors as $doctor){


        $week_end = strtoupper($doctor->week_end);
        if ($week_end != $day){

            $i= $doctor->start_appointment;
            $j= $doctor->end_appointment;
            $s= $doctor->time_slot;

            echo 'Appointment Start Time: '.$i;

    }else
        echo '<p class="text-danger">Doctor is not Available !!!!<br>Please Select another Day</p>';
 }?>
        </div>
        <?php


}