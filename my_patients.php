
<?php include('include/db.php');?>
<?php include('include/header.php');?>

<?php

    $page_name = "<i class='fa fa-plus-square'> </i> My Patients";
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
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 10.5px;" aria-label="#: activate to sort column ascending">#</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 16.5px;" aria-label="ID: activate to sort column ascending">ID</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 49.5px;" aria-label="Doctor: activate to sort column ascending">Patients Name</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 34.5px;" aria-label="Date: activate to sort column ascending">Date</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 34.5px;" aria-label="Date: activate to sort column ascending">Time</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 34.5px;" aria-label="Date: activate to sort column ascending">Problems</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 45.5px;" aria-label="Status: activate to sort column ascending">Status</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 0.5px; display: none;" aria-label=": activate to sort column ascending"></th></tr>
                            </thead>
                            <tbody>
                            <?php
                            $sql = "SELECT * FROM appointment WHERE doctor_id = {$_GET['id']}";
                            $result = $pdo->prepare($sql);
                            $result->execute();
                            $appointments = $result->fetchAll();
                            $i = 1;
                            foreach ($appointments as $appointment) {

                                ?>

                                <tr class="odd text-capitalize">

                                    <td valign="top" class="dataTables_empty"><?php echo $i; ?></td>
                                    <td valign="top" class="dataTables_empty">2040<?php echo $appointment->id;?>1230</td>
                                    <td valign="top" class="dataTables_empty">
                                        <a href="appointment_details.php?id=<?php echo $appointment->id;?>">
                                        <?php
                                        $sql = "SELECT * FROM patients WHERE patient_id = {$appointment->patient_id}";
                                        $result = $pdo->prepare($sql);
                                        $result->execute();
                                        $doctors = $result->fetchAll();
                                        foreach ($doctors as $d) {
                                            echo $d->first_name." ".$d->last_name;
                                        }
                                        ?></a>
                                    </td>
                                    <td valign="top" class="dataTables_empty"><?php echo $appointment->date;?></td>
                                    <td valign="top" class="dataTables_empty"><?php echo $appointment->time;?></td>
                                    <td valign="top" class="dataTables_empty"><?php echo $appointment->problems;?></td>

                                    <td>Active</td>
                                    <td><a href="my_patients.php?delete=<?php $appointment->id; ?>"><i class="fa fa-trash-o"></i></a></td>

                                </tr>

                                <?php
                                $i++;
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
