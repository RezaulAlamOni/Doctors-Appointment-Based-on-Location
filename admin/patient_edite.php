
<?php include('include/header.php'); ?>
<?php include('include/navbar.php'); ?>
<?php require('class/patients.php')?>

    <div class="page-container">
        <link rel="stylesheet" href="public/css/jquery.fancybox.min.css">
        <script src="public/js/jquery.fancybox.min.js"></script>
        <script>
            $('#patient').show();
            $('#patient-li>a').addClass('active');
            $("a.open-pdf").fancybox({
                'frameWidth': 800,
                'frameHeight': 800,
                'overlayShow': true,
                'hideOnContentClick': false,
                'type': 'iframe'
            });
        </script>

        <form action="patient_edite.php" method="post" enctype="multipart/form-data" siq_id="autopick_5272">
            <div class="page-hdr scroll-to-fixed-fixed" style="z-index: 9; position: fixed; top: 0px; margin-left: 0px; width: 920px; left: 60px;">
                <div class="row">
                    <div class="col-6 page-name">
                        <h1><i class="fa fa-users"></i>Edit Patient</h1>
                    </div>
                    <div class="col-4 page-menu" style="padding-right: 50px">
                        <a id="cancel" href="patient.php" data-toggle="tooltip" data-placement="left" title="" data-original-title="Back to List"><i class="fa fa-reply"></i></a>
                        <button type="submit" name="patient_update" data-toggle="tooltip" data-placement="left" title="" data-original-title="Save Page"><i class="fa fa-floppy-o"></i></button>
                    </div>
                </div>
            </div>
            <div style="display: block; width: 920px; height: 70px; float: none;"></div>
            <div class="content">
                <input type="hidden" name="_token" value="">
                <div class="row">
                    <?php
                        $patient=new patients();
//                        $patient->patient_update();
                        if (isset($_GET['id'])){$id = $_REQUEST['id'];}
                        if (isset($_POST['id'])){$id = $_REQUEST['id'];}

                        $rslt = $patient->find($id);
                        $patients = $rslt->fetchAll();
                        $patient->patient_update($id);
                        foreach ($patients as $patient) {

                    ?>
                    <div class="col-sm-8">
                        <div class="content-block content-block-horizantal">
                            <div class="content-block-ttl">Basic details</div>
                            <div class="content-block-main">
                                <div class="row content-input">
                                    <div class="col-sm-6">
                                        <label>
                                            <text>*</text>
                                            First Name : </label>
                                        <input type="text" class="input-text" name="firstname" value="<?php echo $patient->first_name;?>"
                                               placeholder="Enter your First Name" required="">
                                        <p class="content-input-error-name">Please enter name!</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>
                                            <text>*</text>
                                            Last Name : </label>
                                        <input type="text" class="input-text" name="lastname" value="<?php echo $patient->last_name;?>"
                                               placeholder="Enter your Last Name" required="">
                                        <p class="content-input-error-name">Please enter last name!</p>
                                    </div>
                                </div>
                                <div class="row content-input">
                                    <div class="col-sm-6">
                                        <label>
                                            <text>*</text>
                                            Email Address : </label>
                                        <input type="email" class="input-email" name="email" value="<?php echo $patient->email;?>"
                                               placeholder="Enter your Email Address" required="">
                                        <p class="content-input-error-name">Please enter email!</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>
                                            <text>*</text>
                                            Mobile : </label>
                                        <input type="number" class="input-mobile" name="mobile" value="<?php echo $patient->phone;?>"
                                               placeholder="Enter your Mobile number" min="1" required="">
                                        <p class="content-input-error-name">Please enter phone number!</p>
                                    </div>
                                </div>
                                <div class="content-input">
                                    <label>
                                        <text>*</text>
                                        Password (min 6 words) :</label>
                                    <input type="password" class="input-password" pattern=".{6,}"
                                           title="Minimum 6 word required!" name="password"
                                           placeholder="Enter your Password" required="">
                                    <p class="content-input-error-name">Please enter password (minimum 6 words)!</p>
                                    <div class="content-description">This password will be mailed to user.</div>
                                </div>
                            </div>
                        </div>
                        <div class="content-block content-block-horizantal">
                            <div class="content-block-ttl">Other details</div>
                            <div class="content-block-main">
                                <div class="row content-input">
                                    <div class="col-sm-6">
                                        <label>Date of Birth : </label>
                                        <input type="text" value="<?php echo $patient->dob;?>"  disabled>
                                    </div>
                                    <div class="col-sm-6">
                                    </div>
                                </div>
                                <div class="row content-input">
                                    <div class="col-sm-6 text-capitalize">

                                        <label>
                                            <text>*</text>
                                            Location : </label>
                                        <select name="location" title="Select User Role" class="select-list" required=""
                                                id="ui-id-1" style="display: none;">
                                            <option value="">Select your location</option>
                                            <?php
                                            $sql = "SELECT * FROM locations ";
                                            $result = $pdo->prepare($sql);
                                            $result->execute();
                                            $locations = $result->fetchAll(); // default value PDO::FETCH_obj
                                            foreach ($locations as $location) {
                                                ?>
                                                <option value="<?php echo $location->location_id;?>"
                                                    <?php if ($location->location_id==$patient->location_id) { echo "selected";}?> >
                                                    <?php echo $location->name; ?></option>

                                                <?php
                                            }
                                            ?>

                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Blood Group : </label>
                                        <select name="bloodgroup" title="Select User Role" class="select-list"
                                                required="" id="ui-id-1" style="display: none;">
                                            <option value="">Select your Blood Group</option>
                                            <option value="A+" <?php if ($patient->blood_group=='A+'){echo 'selected';} ?>>A+</option>
                                            <option value="A-" <?php if ($patient->blood_group=='A-'){echo 'selected';} ?>>A-</option>
                                            <option value="B+" <?php if ($patient->blood_group=='B+'){echo 'selected';} ?>>B+</option>
                                            <option value="B-" <?php if ($patient->blood_group=='B-'){echo 'selected';} ?>>B-</option>
                                            <option value="AB+" <?php if ($patient->blood_group=='AB+'){echo 'selected';} ?>>AB+</option>
                                            <option value="AB-" <?php if ($patient->blood_group=='AB-'){echo 'selected';} ?>>AB-</option>
                                            <option value="O+" <?php if ($patient->blood_group=='O+'){echo 'selected';} ?>>O+</option>
                                            <option value="O-" <?php if ($patient->blood_group=='O-'){echo 'selected';} ?>>O-</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="row content-input content-radio">
                                    <div class="col-sm-12">
                                        <label>Gender : </label>
                                        <div class="content-radio-container">
                                            <div>
                                                <input type="radio" name="gender" value="Male" id="gender-male" <?php if ($patient->gender == 'Male') echo 'checked'; ?>>
                                                <label for="gender-male"><span><i class="fa fa-check"></i></span>
                                                    <p>Male</p></label>
                                            </div>
                                            <div>
                                                <input type="radio" name="gender" value="Female" id="gender-female" <?php if ($patient->gender == 'Female') echo 'checked'; ?>>
                                                <label for="gender-female"><span><i class="fa fa-check"></i></span>
                                                    <p>Female</p></label>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="content-block content-block-horizantal">
                            <div class="content-block-ttl">Medical History</div>
                            <div class="content-block-main">
                                <div class="content-radio">
                                    <label>Do you now or have you ever had:</label>
                                    <div>
                                        <?php
                                        $md_rpt = explode(',',$patient->medical_history);
                                        $n = count($md_rpt);
                                        ?>
                                        <div class="row">
                                            <div class="col-sm-6 col-md-4 content-radio-container">
                                                <div>
                                                    <input type="checkbox" name="medical[]" value="diabetes"

                                                        <?php
                                                        foreach ($md_rpt as $item) {

                                                            if ($item =='diabetes') echo 'checked';
                                                        }
                                                        ?>

                                                           id="diabetes">
                                                    <label for="diabetes"><span><i class="fa fa-check"></i></span>
                                                        <p>Diabetes</p></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 content-radio-container">
                                                <div>
                                                    <input type="checkbox" name="medical[]" value="high-blood-pressure"
                                                        <?php  foreach ($md_rpt as $item) {

                                                            if ($item=='high-blood-pressure') echo 'checked';
                                                        }
                                                        ?>
                                                           id="high-blood-pressure">
                                                    <label for="high-blood-pressure"><span><i
                                                                    class="fa fa-check"></i></span>
                                                        <p>High blood pressure</p></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 content-radio-container">
                                                <div>
                                                    <input type="checkbox" name="medical[]" value="high-cholesterol"
                                                        <?php
                                                        foreach ($md_rpt as $item) {
                                                            if ($item =='high-cholesterol') echo 'checked';
                                                        }?>
                                                           id="high-cholesterol">
                                                    <label for="high-cholesterol"><span><i
                                                                    class="fa fa-check"></i></span>
                                                        <p>High cholesterol</p></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 content-radio-container">
                                                <div>
                                                    <input type="checkbox" name="medical[]" value="heart-problems"
                                                        <?php
                                                        foreach ($md_rpt as $item) {

                                                            if ($item=='heart-problems') echo 'checked';
                                                        }?>
                                                           id="heart-problems">
                                                    <label for="heart-problems"><span><i class="fa fa-check"></i></span>
                                                        <p>Heart problems</p></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 content-radio-container">
                                                <div>
                                                    <input type="checkbox" name="medical[]" value="asthma" id="asthma"
                                                    <?php
                                                    foreach ($md_rpt as $item) {
                                                        if ($item == 'asthma') echo 'checked';
                                                    }?>>
                                                    <label for="asthma"><span><i class="fa fa-check"></i></span>
                                                        <p>Asthma</p></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 content-radio-container">
                                                <div>
                                                    <input type="checkbox" name="medical[]" value="kidney-disease"
                                                        <?php
                                                         foreach ($md_rpt as $item) {
                                                           if ($item == 'kidney-disease') echo 'checked';
                                                        }?>
                                                           id="kidney-disease">
                                                    <label for="kidney-disease"><span><i class="fa fa-check"></i></span>
                                                        <p>Kidney disease</p></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 content-radio-container">
                                                <div>
                                                    <input type="checkbox" name="medical[]" value="kidney-stones"
                                                        <?php
                                                         foreach ($md_rpt as $item) {
                                                             if ($item == 'kidney-stones') echo 'checked';
                                                        }?>
                                                           id="kidney-stones">
                                                    <label for="kidney-stones"><span><i class="fa fa-check"></i></span>
                                                        <p>Kidney Stones</p></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 content-radio-container">
                                                <div>
                                                    <input type="checkbox" name="medical[]" value="jaundice"
                                                        <?php
                                                        foreach ($md_rpt as $item) {

                                                            if ($item =='jaundice') echo 'checked';
                                                        }?>
                                                           id="jaundice">
                                                    <label for="jaundice"><span><i class="fa fa-check"></i></span>
                                                        <p>Jaundice</p></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 content-radio-container">
                                                <div>
                                                    <input type="checkbox" name="medical[]" value=""
                                                        <?php
                                                        foreach ($md_rpt as $item) {

                                                            if ($item =='hepatitis') echo 'checked';
                                                        }?>
                                                           id="hepatitis" >
                                                    <label for="hepatitis"><span><i class="fa fa-check"></i></span>
                                                        <p>Hepatitis</p></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 content-radio-container">
                                                <div>
                                                    <input type="checkbox" name="medical[]" value="rheumatic-fever"
                                                           <?php
                                                           foreach ($md_rpt as $item) {

                                                               if ($item =='rheumatic-fever') echo 'checked';
                                                           }?>
                                                           id="rheumatic-fever">
                                                    <label for="rheumatic-fever"><span><i
                                                                    class="fa fa-check"></i></span>
                                                        <p>Rheumatic Fever</p></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 content-radio-container">
                                                <div>
                                                    <input type="checkbox" name="medical[]" value="cancer"
                                                        <?php
                                                        foreach ($md_rpt as $item) {

                                                            if ($item =='cancer') echo 'checked';
                                                        }?>
                                                           id="cancer">

                                                    <label for="cancer"><span><i class="fa fa-check"></i></span>
                                                        <p>Cancer</p></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 content-radio-container">
                                                <div>
                                                    <input type="checkbox" name="medical[]" value="hiv"
                                                        <?php
                                                    foreach ($md_rpt as $item) {

                                                        if ($item == 'hiv') echo 'checked';
                                                    }?> id="hiv">

                                                    <label for="hiv"><span><i class="fa fa-check"></i></span>
                                                        <p>HIV/AIDS</p></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 content-radio-container">
                                                <div>
                                                    <input type="checkbox" name="medical[]" value="epilepsy"
                                                        <?php
                                                        foreach ($md_rpt as $item) {

                                                            if ($item =='epilepsy') echo 'checked';
                                                        }?>
                                                           id="epilepsy">
                                                    <label for="epilepsy"><span><i class="fa fa-check"></i></span>
                                                        <p>Epilepsy</p></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 content-radio-container">
                                                <div>
                                                    <input type="checkbox" name="medical[]" value=""
                                                        <?php
                                                        foreach ($md_rpt as $item) {

                                                            if ($item =='pregnancy') echo 'checked';
                                                        }?>
                                                           id="pregnancy">
                                                    <label for="pregnancy"><span><i class="fa fa-check"></i></span>
                                                        <p>Pregnancy</p></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 content-radio-container">
                                                <div>
                                                    <input type="checkbox" name="medical[]" value="blood-thinners"
                                                        <?php
                                                        foreach ($md_rpt as $item) {

                                                            if ($item =='blood-thinners') echo 'checked';
                                                        }?>
                                                           id="blood-thinners">
                                                    <label for="blood-thinners"><span><i class="fa fa-check"></i></span>
                                                        <p>Blood thinners</p></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-input">
                                    <label>Other History : </label>
                                    <textarea name="medical[]" placeholder="Patient other history or about user"><?php if (!empty($md_rpt)) { echo $md_rpt[$n-2]; } ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="content-block">
                            <div class="content-block-ttl">Patient history</div>
                            <div class="content-block-main user-history">
                                <p class="btn btn-primary btn-sm" data-toggle="modal" data-target="#appointment-modal">
                                    Appointments (
                                    <?php

                                    ?>
                                    ) </p>
                                <p class="btn btn-danger btn-sm" data-toggle="modal" data-target="#report-modal">All
                                    Reports</p>
                                <p id="create-apnt-user" class="btn btn-default btn-sm">Create Appointment</p>
                            </div>
                        </div>
                        <div class="content-block content-block-horizantal">
                            <div class="content-block-ttl">For office use</div>
                            <div class="content-block-main">
                                <div class="content-input">
                                    <label>User Role : </label>
                                    <select name="role" title="Select User Role" class="select-list" required=""
                                            id="ui-id-1" style="display: none;">
                                        <?php
                                        $sql = "SELECT * FROM roles ";
                                        $result = $pdo->prepare($sql);
                                        $result->execute();
                                        $roles = $result->fetchAll(); // default value PDO::FETCH_obj

                                        foreach ($roles as $role) {
                                            ?>
                                            <option value="<?php echo $role->role_id; ?>"
                                                <?php if ($role->role_id == $patient->role_id) echo "selected"?> >
                                                <p class="text-capitalize"><?php echo $role->role_name; ?></p>
                                            </option>

                                            <?php
                                        }

                                        ?>


                                    </select>
                                    <div class="content-description">
                                        If you want to give an admin access to user then select role otherwise do not
                                        select. It will automatically assign patient role to user.
                                    </div>
                                </div>
                                <div class="content-input">
                                    <label>User Name : </label>
                                    <input type="text" name="username" value="<?php echo $patient->user_name;?>" placeholder="User Name">
                                    <div class="content-description">
                                        If you want to give an admin access to user then fill this field otherwise leave
                                        empty.
                                    </div>
                                </div>
                                <div class="content-input">
                                    <label>Created Date : </label>
                                    <input type="text" value="<?php echo $patient->created_at;?>" readonly="">
                                </div>
<!--                                <div class="content-input">-->
<!--                                    <label>Email Confirmation : </label>-->
<!--                                    <input type="text" value="Unconfirmed" readonly="">-->
<!--                                </div>-->
                                <div class="content-input">
                                    <label>Status : </label>
                                    <select name="status" class="select-list" id="ui-id-2" style="display: none;">
                                        <option value="1" <?php if ($patient->status == 1) echo "selected"?>>Active</option>
                                        <option value="0" <?php if ($patient->status == 0) echo "selected"?>>InActive</option>
                                    </select>

                                </div>
<!--                                <div class="content-input">-->
<!--                                    <label>Notify User : </label>-->
<!--                                    <div class="content-radio-container">-->
<!--                                        <div>-->
<!--                                            <input type="checkbox" name="sendmail" value="1" id="send-mail" checked="">-->
<!--                                            <label for="send-mail"><span><i class="fa fa-check"></i></span>-->
<!--                                                <p>Send an Email</p></label>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $patient->patient_id; ?>">
                </div>

                <?php
                    }
                ?>
                <div class="content-submit text-center">
                    <button type="submit" name="patient_update" class="btn btn-primary">Save</button>
                </div>

           </div>

        </form>

        <!-- Appointment List Modal -->
        <div id="appointment-modal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Patient's Appointment</h4>
                        <button type="button" class="close" data-dismiss="modal">×</button>
                    </div>
                    <div class="modal-body">
                        <div class="user-appointment">
                            <div class="card-block">
                                <div class="card card-color-new">
                                    <div class="row card-hdr">
                                        <div class="col-2 card-left text-left">
                                            <span class="text-center">1</span>
                                        </div>
                                        <div class="col-10 text-right card-right">
                                            <em>Appointment ID :</em> <span>20180915556015906</span>
                                        </div>
                                    </div>
                                    <div class="row card-bdy">
                                        <div class="col-sm-6 text-left">
                                            <div class="card-img">
                                                <img class="img-thumbnail" src="../public/uploads/doctor-2.jpg" alt="">
                                            </div>
                                            <div class="card-info">
                                                <a href="index.php?route=themeoption/doctor/edit&amp;id=3" class="card-name" target="_blank">Dr. Melissa Bates</a>
                                                <div class="card-text">Gynaecology</div>
                                                <div class="card-text">pepdevofficial@gmail.com</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 appointment-time text-center">
                                            <div class="appointment-date"><i class="fa fa-calendar"></i><span>19 Sep 2018</span></div>
                                            <div><i class="fa fa-hourglass-o"></i><span>At 12:12</span></div>
                                        </div>
                                    </div>
                                    <div class="row card-ftr">
                                        <div class="col-8 text-left">
                                            <span class="badge badge-default badge-sm">New</span>
                                        </div>
                                        <div class="card-action">
                                            <a href="index.php?route=invoice/add&amp;id=1023" class="btn btn-outline btn-warning btn-outline-1x btn-circle" data-toggle="tooltip" title="" target="_blank" data-original-title="Create Invoice"><i class="fa fa-credit-card"></i></a>
                                            <a href="index.php?route=appointment/edit&amp;id=1023" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="" target="_blank" data-original-title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Invoice List Modal -->
        <div id="invoice-modal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Patient's Invoices</h4>
                        <button type="button" class="close" data-dismiss="modal">×</button>
                    </div>
                    <div class="modal-body">
                        <div class="user-appointment">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="report-modal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Patient's Reports</h4>
                        <button type="button" class="close" data-dismiss="modal">×</button>
                    </div>
                    <div class="modal-body">
                        <div class="report-container">
                            <p class="font-16 text-muted">No reports Found.</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Appointment side bar -->
        <div id="apntinfo" class="sidenav">
            <div class="container-fluid sidenav-hdr">
                <p>Appointment Details</p>
                <span class="sidenav-close">x</span>
            </div>
            <input type="hidden" value="{&quot;id&quot;:3,&quot;name&quot;:&quot;Melissa Bates&quot;,&quot;department_id&quot;:1,&quot;weekly&quot;:&quot;[\&quot;1\&quot;,\&quot;2\&quot;,\&quot;6\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25, 2017-04-13, 2017-04-14, 2017-04-20, 2017-07-07, 2017-07-08, 2017-07-14\&quot;&quot;,&quot;department&quot;:&quot;Gynaecology&quot;}" class="doctor-id-3 department-id-Gynaecology">
            <input type="hidden" value="{&quot;id&quot;:8,&quot;name&quot;:&quot;Linda Adams&quot;,&quot;department_id&quot;:1,&quot;weekly&quot;:&quot;[\&quot;0\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25, 2017-06-16, 2017-06-21, 2017-06-26, 2017-07-11, 2017-07-14, 2017-07-20, 2017-07-31\&quot;&quot;,&quot;department&quot;:&quot;Gynaecology&quot;}" class="doctor-id-8 department-id-Gynaecology">
            <input type="hidden" value="{&quot;id&quot;:1,&quot;name&quot;:&quot;Daniel Barnes&quot;,&quot;department_id&quot;:2,&quot;weekly&quot;:&quot;[\&quot;3\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25, 2017-01-18, 2017-01-21, 2017-01-30, 2017-03-27, 2017-03-31\&quot;&quot;,&quot;department&quot;:&quot;Orthology&quot;}" class="doctor-id-1 department-id-Orthology">
            <input type="hidden" value="{&quot;id&quot;:5,&quot;name&quot;:&quot;Steve Soeren&quot;,&quot;department_id&quot;:2,&quot;weekly&quot;:&quot;[\&quot;0\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25, 2017-02-16, 2017-03-14, 2017-03-17, 2017-03-23, 2017-03-31\&quot;&quot;,&quot;department&quot;:&quot;Orthology&quot;}" class="doctor-id-5 department-id-Orthology">
            <input type="hidden" value="{&quot;id&quot;:7,&quot;name&quot;:&quot;Barbara Baker&quot;,&quot;department_id&quot;:2,&quot;weekly&quot;:&quot;[\&quot;1\&quot;,\&quot;5\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25, 2017-06-08, 2017-06-20, 2017-06-28, 2017-06-29\&quot;&quot;,&quot;department&quot;:&quot;Orthology&quot;}" class="doctor-id-7 department-id-Orthology">
            <input type="hidden" value="{&quot;id&quot;:4,&quot;name&quot;:&quot;Cheri Aria&quot;,&quot;department_id&quot;:3,&quot;weekly&quot;:&quot;[\&quot;5\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25, 2017-03-07, 2017-03-14, 2017-03-20, 2017-03-26\&quot;&quot;,&quot;department&quot;:&quot;Dermatologist&quot;}" class="doctor-id-4 department-id-Dermatologist">
            <input type="hidden" value="{&quot;id&quot;:6,&quot;name&quot;:&quot;Theodore Bennett&quot;,&quot;department_id&quot;:4,&quot;weekly&quot;:&quot;[\&quot;0\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25, 2017-02-15, 2017-02-16, 2017-03-07, 2017-03-15, 2017-03-23, 2017-03-31\&quot;&quot;,&quot;department&quot;:&quot;Anaesthesia&quot;}" class="doctor-id-6 department-id-Anaesthesia">
            <input type="hidden" value="{&quot;id&quot;:10,&quot;name&quot;:&quot;Vedhraj Jain&quot;,&quot;department_id&quot;:5,&quot;weekly&quot;:&quot;[\&quot;6\&quot;,\&quot;0\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25\&quot;&quot;,&quot;department&quot;:&quot;Ayurvedic&quot;}" class="doctor-id-10 department-id-Ayurvedic">
            <form action="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=appointment/dashboardappointment" method="post" siq_id="autopick_8564">
                <div class="sidenav-bdy">
                    <div class="apntinfo-block">
                        <div class="apntinfo-block-ttl">Appointment Info</div>
                        <div class="apntinfo-block-container">
                            <input type="hidden" id="apntinfo-id" name="id" value="">
                            <div class="content-input">
                                <label>Status :</label>
                                <select id="apntinfo-status" name="status" class="form-control">
                                    <option value="0">New</option>
                                    <option value="2">In Process</option>
                                    <option value="3">Confirmed</option>
                                    <option value="4">Completed</option>
                                    <option value="1">Canceled</option>
                                </select>
                            </div>
                            <div class="content-input">
                                <label><text>*</text>Doctor :</label>
                                <select id="apntinfo-doctor" name="doctor" class="appointment-doctor form-control">
                                    <option value="">Select Doctor</option>
                                    <option value="3">Melissa Bates( Gynaecology )</option>
                                    <option value="8">Linda Adams( Gynaecology )</option>
                                    <option value="1">Daniel Barnes( Orthology )</option>
                                    <option value="5">Steve Soeren( Orthology )</option>
                                    <option value="7">Barbara Baker( Orthology )</option>
                                    <option value="4">Cheri Aria( Dermatologist )</option>
                                    <option value="6">Theodore Bennett( Anaesthesia )</option>
                                    <option value="10">Vedhraj Jain( Ayurvedic )</option>
                                </select>
                                <input type="hidden" class="appointment-department" name="department" value="">
                            </div>
                            <div class="content-input">
                                <label><text>*</text>Date : </label>
                                <input type="text" name="date" id="appointment-date" value="" placeholder="Date" readonly="" required="">
                            </div>
                            <div class="content-input apntinfo-time">
                                <label><text>*</text>Time : </label>
                                <input type="text" name="time" id="apntinfo-time" placeholder="Time" readonly="" required="">
                            </div>
                            <div class="content-input appointment-slot">
                                <label for=""></label>
                                <div id="appointment-slot"></div>
                            </div>
                        </div>
                    </div>
                    <div class="apntinfo-block">
                        <div class="apntinfo-block-ttl">Patient Info</div>
                        <div class="apntinfo-block-container">
                            <div class="content-input">
                                <label><text>*</text>Name : </label>
                                <input type="text" class="input-text" id="apntinfo-name" value="viraj chamara" name="name" placeholder="Enter Patient Name" required="">
                            </div>
                            <div class="content-input">
                                <label><text>*</text>Email : </label>
                                <input type="text" class="input-text" value="ishararokzz@gmail.com" id="apntinfo-email" name="email" placeholder="Enter Patient Email Address" required="">
                            </div>
                            <div class="content-input">
                                <label><text>*</text>Mobile : </label>
                                <input type="text" class="input-text" value="0766136852" id="apntinfo-mobile" name="mobile" placeholder="Enter Patient Mobile Number" required="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidenav-ftr">
                    <div class="apntinfo-button text-right">
                        <a href="" class="apntinfo-edit btn btn-default" target="_blank">View More</a>
                        <button type="submit" name="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="sidenav-background"></div>
        <script>
            $("a.open-pdf").fancybox({
                'frameWidth': 800,
                'frameHeight': 800,
                'overlayShow': true,
                'hideOnContentClick': false,
                'type': 'iframe'
            });
        </script>
        <!-- Footer -->
<?php include ('include/footer.php');?>