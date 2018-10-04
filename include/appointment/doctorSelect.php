<?php
include ('../db.php');
if (isset($_POST['dpt_id'])){
    $sql = "SELECT * FROM doctors where department_id = {$_POST['dpt_id']}";
    $result = $pdo->prepare($sql);
    $result->execute();
    $doctors = $result->fetchAll();
    ?>
    <div class="doctor_ap">
    <select name="" id="doctor_id" class="">
        <option value="">Select Doctor</option>

<?php
    foreach ($doctors as $doctor){
        echo '<option value="'.$doctor->id.'">'.$doctor->first_name.' '.$doctor->last_name.'</option>';
    }

?>
    </select>
    </div>
<?php
}