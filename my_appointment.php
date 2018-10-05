
<?php include('include/db.php');?>
<?php include('include/header.php');?>

<?php
    $page_name = "<i class='fa fa-plus-square'> </i> My Appointments";
?>
<?php include('include/nav.php');?>
 Start My Appointment Section
<div id="myappointment-page" class="layer-stretch animated-wrapper" style="opacity: 1;">
    <div class="layer-wrapper">
        <div class="theme-material-card">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-bordered table-striped datatable-table dataTable no-footer dtr-inline collapsed" width="100%" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 100%;">
                            <thead>
                                <tr class="table-heading" role="row">
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 10.5px;" aria-label="#: activate to sort column ascending">ID</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 16.5px;" aria-label="ID: activate to sort column ascending">Doctor</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 49.5px;" aria-label="Doctor: activate to sort column ascending">Chamber</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 34.5px;" aria-label="Date: activate to sort column ascending">Date & Time</th>
<!--                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 45.5px;" aria-label="Status: activate to sort column ascending">Serial</th>-->
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 45.5px;" aria-label="Status: activate to sort column ascending">Comments</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 45.5px;" aria-label="Status: activate to sort column ascending">Status</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 0.5px;" aria-label=": activate to sort column ascending">Action</th>
                                </tr>

                            </thead>
                            <tbody>
                            <?php
                            $sql = "SELECT * FROM appointment WHERE patient_id = {$_SESSION['patient_id']}";
                            $result = $pdo->prepare($sql);
                            $result->execute();
                            $appointments = $result->fetchAll();
                            foreach ($appointments as $appointment) {

                                ?>
                                <tr class="odd text-capitalize" >
                                    <td>12040<?php echo $appointment->id; ?>1238</td>
                                    <td>
                                        <?php
//                                        echo $appointment->doctor_id;
                                        $sql = "SELECT * FROM doctors WHERE id = {$appointment->doctor_id}";
                                        $result = $pdo->prepare($sql);
                                        $result->execute();
                                        $doctors = $result->fetchAll();
                                        foreach ($doctors as $d) {
                                            echo $d->first_name." ".$d->last_name;
                                        }

                                        ?>
                                    </td>
                                    <td><?php echo $appointment->address; ?></td>
                                    <td><?php echo $appointment->date."<br>".$appointment->time; ?></td>
                                    <td><?php echo $appointment->comments; ?></td>
                                    <td><?php echo "Active" ?></td>
                                    <td class="text-center">

                                            <a href="my_appointment.php?delete=<?php echo $appointment->id; ?>" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash-o"></i</a>

                                    </td>
                                </tr>

                                <?php

                            }
                            if (isset($_GET['delete'])){
                                $id= $_GET['delete'];
                                $sql = "DELETE FROM appointment WHERE id = {$id}";
                                $result = $pdo->prepare($sql);
                                $result->execute();
                                header('Location: my_appointment.php');
                            }

                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div><!-- End My Appointment Section -->

<!-- Start Make an Appointment Modal -->
<?php include('include/make_appointment.php');?><!-- End Make an Appointment Section -->
<!-- Start of Time Table Section -->
<?php include ('include/footer.php');?>
