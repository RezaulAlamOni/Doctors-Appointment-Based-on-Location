<?php include('include/db.php'); ?>
<?php include('include/header.php'); ?>
<?php require('class/appointments.php'); ?>
<?php require('class/doctors.php'); ?>
<?php require('class/patients.php'); ?>
<?php require('class/departments.php'); ?>


<?php include('include/navbar.php'); ?>

<div class="page-container">
    <script>
        $('#appointment').show();
        $('#appointment-li>a').addClass('active');
    </script>
    
<!-- Appointment list page start -->

<div class="page-hdr">
    <div class="row">
        <div class="col-4 page-name">
            <h1><i class="fa fa-plus-square"></i>Appointments</h1>
        </div>
        <div class="page-name col-3 text-right">
            <h1 id="time">Time</h1>
        </div>
        <div class="col-5 page-menu">
            <a id="cancel" href=" " data-toggle="tooltip" data-placement="left" title="Reload">
                <i class="fa fa-refresh"></i>
            </a>
            <a href="appointment_add.php?ap=add" data-toggle="tooltip" data-placement="left" title="Add Appointment">
                <i class="fa fa-plus"></i>
            </a>
        </div>
    </div>
    <input type="hidden" value="appointment" name="hidden-appointment">
</div>
<div class="content">
    <div class="well">
<!--        <div class="row">-->
<!--            <div class="col-sm-3">-->
<!--                <div class="form-group">-->
<!--                    <label class="control-label">Doctor</label>-->
<!--                    <select name="" id="filter-doctor" class="form-control">-->
<!--                        <option value=""></option>-->
<!--                            <option value="Dr. Melissa Bates">Dr. Melissa Bates</option>-->
<!--                            <option value="Dr. Linda Adams">Dr. Linda Adams</option>-->
<!--                            <option value="Dr. Daniel Barnes">Dr. Daniel Barnes</option>-->
<!--                            <option value="Dr. Steve Soeren">Dr. Steve Soeren</option>-->
<!--                            <option value="Dr. Barbara Baker">Dr. Barbara Baker</option>-->
<!--                            <option value="Dr. Cheri Aria">Dr. Cheri Aria</option>-->
<!--                            <option value="Dr. Theodore Bennett">Dr. Theodore Bennett</option>-->
<!--                            <option value="Dr. Vedhraj Jain">Dr. Vedhraj Jain</option>-->
<!--                        </select>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-sm-3">-->
<!--                <div class="form-group">-->
<!--                    <label class="control-label">Start Date</label>-->
<!--                    <input type="text" id="filter-start-date" class="form-control filter-date">-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-sm-3">-->
<!--                <div class="form-group">-->
<!--                    <label class="control-label">End Date</label>-->
<!--                    <input type="text" id="filter-end-date" class="form-control filter-date">-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-sm-12">-->
<!--                <div class="pull-right">-->
<!--                    <button id="reset" class="btn btn-default btn-sm">Reset</button>-->
<!--                    <button id="filter-appointment" class="btn btn-primary btn-sm"><i class="fa fa-filter"></i>Filter</button>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
        <script type="text/javascript">
            /*Doctor filter*/
            function filterByDoctor(filter) {
                $('.appointment-table tr .card-block').each(function (index) {
                    var doctor = $(this).find('.card-info a').text().trim();
                    if (doctor.indexOf(filter) == 0) {
                        $(this).parents('.appointment-table tr').show();
                    } else {
                        $(this).parents('.appointment-table tr').hide();
                    }
                });
            }
            /*Status filter*/
            function filterByStatus(filter) {
                $('.appointment-table tr .card-block').each(function (index) {
                    var status = $(this).find('.card-ftr span').text().trim();
                    if (status.indexOf(filter) == 0 && $(this).parents('.appointment-table tr').css('display') == 'table-row') {
                        $(this).parents('.appointment-table tr').show();
                    } else {
                        $(this).parents('.appointment-table tr').hide();
                    }
                });
            }
            /*Single date filter*/
            function filterByDate(filter) {
                $('.appointment-table tr .card-block').each(function (index) {
                    var date = $(this).find('.appointment-date span').text().trim();
                    if (date.indexOf(filter) == 0 && $(this).parents('.appointment-table tr').css('display') == 'table-row') {
                        $(this).parents('.appointment-table tr').show();
                    } else {
                        $(this).parents('.appointment-table tr').hide();
                    }
                });
            }
            /*Date range filter*/
            function filterByDateRange(start_date, end_date) {
                var start_date = new Date(start_date);
                var end_date = new Date(end_date);

                $('.appointment-table tr .card-block').each(function (index) {
                    var date = new Date($(this).find('.appointment-date span').text().trim());
                    if ( date >= start_date && $(this).parents('.appointment-table tr').css('display') == 'table-row') {
                        $(this).parents('.appointment-table tr').show();
                    } else {
                        $(this).parents('.appointment-table tr').hide();
                    }

                    if (date > end_date  && $(this).parents('.appointment-table tr').css('display') == 'table-row') {
                        $(this).parents('.appointment-table tr').hide();
                    }
                });
            }

            $('#reset').click(function() {
                window.location.reload();
            })
            var appointmentTable;
            var appointmentSettings;
            $(document).ready(function(){
                appointmentTable = $('.appointment-table').DataTable( {
                    "aLengthMenu": [[10, 25, 50, 75, -1], [10, 25, 50, 75, "All"]],
                    "iDisplayLength": 25,
                    "bSort": false,
                    "pagingType": "full_numbers"
                });
                appointmentSettings = appointmentTable.settings();
            });

            /*Filter Submit*/
            $('#filter-appointment').click(function() {
                appointmentSettings[0]._iDisplayLength = appointmentSettings[0].fnRecordsTotal();
                appointmentTable.draw();
                $('.appointment-table tr').show();
                if ($('#filter-doctor').val() !== '') {
                    filterByDoctor($('#filter-doctor').val());
                }
                if ($('#filter-status').val() !== '') {
                    filterByStatus($('#filter-status').val());
                }
                if ($('#filter-start-date').val() !== '' && $('#filter-end-date').val() !== '' ) {
                    filterByDateRange($('#filter-start-date').val(), $('#filter-end-date').val());
                }else if ($('#filter-start-date').val() !== '') {
                    filterByDate($('#filter-start-date').val());
                }
            });
        </script>
    </div>
    <table id="card-table" class="appointment-table table">
        <thead>
            <tr><th style="display: none;"></th></tr>
        </thead>
        <tbody>
        <?php
            $appointment  = new appointments();
            $result = $appointment->all();

            $appointments = $result->fetchAll();
        foreach ($appointments as $appointment) {


            ?>
            <tr>
                <td>
                    <div class="card-block">
                        <div class="card card-color-new">
                            <div class="row card-hdr">
                                <div class="col-2 card-left text-left">
                                    <span class="text-center">1</span>
                                </div>
                                <div class="col-10 pull-right text-right card-right">
                                    <em>Appointment ID :</em> <span>12040<?php echo $appointment->id;?>1230</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <?php

                                $doctor = new doctors();
                                $result = $doctor->find($appointment->doctor_id);
                                $doctors = $result->fetchAll();
                                foreach ($doctors as $doctor) {
                                ?>
                                <div class="col-4 text-left">
                                    <div class="card-img">
                                        <img class="img-thumbnail" src="../public/uploads/<?php echo $doctor->photo;?>" alt="">
                                    </div>
                                    <div class="card-info text-capitalize">
                                        <a href="" class="card-name"
                                           target="_blank"><?php echo $doctor->first_name." ".$doctor->last_name;?></a>
                                        <div class="card-text">
                                            <?php
                                            $dpt = new departments();
                                            $result= $dpt->find($appointment->dpt_id);
                                            $departments = $result->fetchAll();
                                            foreach ($departments as $department) {
                                                echo $department->name;
                                            }
                                            ?>
                                        </div>
                                        <div class="card-text"><?php echo $doctor->email;?></div>
                                    </div>
                                </div>

                                <?php
                                }
                                ?>
                                <div class="col-3 appointment-time text-center">
                                    <div class="appointment-date"><i class="fa fa-calendar"></i><span><?php echo $appointment->date;?></span>
                                    </div>
                                    <div><i class="fa fa-hourglass-o"></i><span><?php echo $appointment->time;?></span></div>
                                </div>
                                <div class="col-4 text-left patient-info">
                                    <?php
                                        $patient = new patients();
                                        $result = $patient->find($appointment->patient_id);
                                        $patients = $result->fetchAll();

                                    foreach ($patients as $patient) {

                                        ?>
                                        <a href="index.php?route=user/edit&id=" class="patient-name" target="_blank">
                                            <i class="fa fa-user-o"></i> <?php echo $patient->first_name." ".$patient->last_name;?> </a>
                                        <p class="patient-other">
                                            <i class="fa fa-envelope-o"></i>
                                            <?php echo $patient->email;?> </p>
                                        <p class="patient-other">
                                            <i class="fa fa-phone"></i>
                                            <?php echo $patient->phone;?> </p>

                                        <?php
                                    }
 ?>
                                </div>
                             </div>
                            <div class="row card-ftr">
                                <div class="col-8 text-left">
                                    <span class="badge badge-default badge-sm">New</span>


                                </div>
                                <div class="card-action">
                                    <!--<a href="" class="btn btn-outline btn-warning btn-outline-1x btn-circle" data-toggle="tooltip" title="Create Invoice" target="_blank"><i class="fa fa-credit-card"></i></a>-->
<!--                                    <a href="index.php?route=appointment/edit&id=988"-->
<!--                                       class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip"-->
<!--                                       title="Edit"><i class="fa fa-pencil-square-o"></i></a>-->
                                    <a href="appointment.php?id=<?php echo $appointment->id;?>" class="btn btn-outline btn-danger btn-outline-1x btn-circle"
                                       data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                        <i class="fa fa-trash-o"></i>

                                    </a>
                                    <?php
                                    if (isset($_GET['id'])){
                                        $id= $_GET['id'];
                                        $sql = "DELETE FROM appointment WHERE id = {$id}";
                                        $result = $pdo->prepare($sql);
                                        $result->execute();
                                        header('Location: appointment.php');
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <?php
        }
 ?>

        </tbody>
    </table>
</div>

<!-- Delete Modal -->
<div id="delete-card" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Confirm Delete</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p class="delete-card-ttl">Are you sure you want to delete?</p>
            </div>
            <div class="modal-footer">
                <form action="index.php?route=appointment/delete" class="delete-card-button" method="post">
                    <input type="hidden" value="" name="id">
                    <button type="submit" class="btn btn-danger" name="delete">Delete</button>
                </form>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Footer -->
<?php include('include/footer.php');?>