<?php include('include/db.php');?>
<?php include('include/header.php');?>
<?php require ('class/doctors.php'); ?>

<?php
    $page_name = "<i class='fa fa-address-card-o'></i> My Profile";
?>
<?php include('include/nav.php');?>

<div id="profile-page" class="dtr-modal-background">
    <div class="layer-stretch" style="background-image: url('public/uploads/slider-1.jpg')">
        <div class="row layer-wrapper">
            <div class="col-md-6 profile-left">
                <?php

                $doct = new doctors();
                $result = $doct->find($_SESSION['doctor_id']);
                $doctors = $result->fetchAll();

                foreach ($doctors as $doctor) {


                ?>
                <div class="profile-data">
                    <div class="profile-data-block">
                        <div class="profile-data-label">Name</div>
                        <div class="profile-data-value text-info text-capitalize">
                            <?php echo $doctor->first_name." ".$doctor->last_name; ?>
                        </div>
                    </div>
                    <div class="profile-data-block">
                        <div class="profile-data-label">Email Address</div>
                        <div class="profile-data-value"><?php echo $doctor->email; ?></div>
                    </div>
                    <div class="profile-data-block">
                        <div class="profile-data-label">Mobile Number</div>
                        <div class="profile-data-value"><?php echo $doctor->phone; ?></div>
                    </div>
                    <div class="profile-data-block">
                        <div class="profile-data-label">Degree</div>
                        <div class="profile-data-value"><?php echo $doctor->degree; ?></div>
                    </div>
                    <div class="profile-data-block">
                        <div class="profile-data-label">Gender</div>
                        <div class="profile-data-value"><?php echo $doctor->gender; ?></div>
                    </div>
                    <div class="profile-data-block">
                        <div class="profile-data-label">Blood Group</div>
                        <div class="profile-data-value">A+</div>
                    </div>
                    <div class="profile-data-block">
                        <div class="profile-data-label">Location</div>
                        <div class="profile-data-value">
                            <?php

                            $sql = "SELECT * FROM hospitals where id = $doctor->hospital_id";
                            $result = $pdo->prepare($sql);
                            $result->execute();
                            $hs = $result->fetchAll();
                            foreach ($hs as $h) {
                                echo $h->name."<br>".$h->address;

                            }

                            ?></div>
                    </div>
                    <div class="profile-data-block">
                        <div class="profile-data-label">About</div>
                        <div class="profile-data-value"><?php echo $doctor->email; ?></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 profile-right">
                <div class="profile-data">
                    <div class="profile-data-block">
                        <div class="profile-data-label">week End</div>
                        <div class="profile-data-value text-capitalize"><?php echo $doctor->week_end ?></div>
                    </div>
                    <div class="profile-data-block">
                        <div class="profile-data-label">Start Appointment Everyday</div>
                        <div class="profile-data-value"><?php echo $doctor->start_appointment ?></div>
                    </div>
                    <div class="profile-data-block">
                        <div class="profile-data-label">End Appointment Everyday</div>
                        <div class="profile-data-value"><?php echo $doctor->end_appointment ?></div>
                    </div>

                    <div class="profile-data-block">
                        <div class="profile-data-label">Age</div>
                        <div class="profile-data-value"><?php echo $doctor->age ?></div>
                    </div>
<!--                    <div class="profile-data-block">-->
<!--                        <div class="profile-data-label">Gender</div>-->
<!--                        <div class="profile-data-value"></div>-->
<!--                    </div>-->
<!--                    <div class="profile-data-block">-->
<!--                        <div class="profile-data-label">Blood Group</div>-->
<!--                        <div class="profile-data-value"></div>-->
<!--                    </div>-->
<!--                    <div class="profile-data-block">-->
<!--                        <div class="profile-data-label">Location</div>-->
<!--                        <div class="profile-data-value"></div>-->
<!--                    </div>-->
<!--                    <div class="profile-data-block">-->
<!--                        <div class="profile-data-label">Country</div>-->
<!--                        <div class="profile-data-value"></div>-->
<!--                    </div>-->
<!--                    <div class="profile-data-block">-->
<!--                        <div class="profile-data-label">About</div>-->
<!--                        <div class="profile-data-value"></div>-->
<!--                    </div>-->
                </div>
            </div>

        </div>
        <?php
        }
                    ?>
        <div class="row layer-wrapper">
            <div class="col-md-3"></div>
            <div class="col-md-12 profile-right" style="background: #c1497d">
                <div class="profile-edit">

                    <div class="paragraph-medium paragraph-white text-center" style="font-family: SansSerif">
                        "Manage this basic information — your name, email, phone number, birthday, blood group and location — to help our doctor in emergency case.</div>
                    <div class="profile-edit-button text-center">
                        <a href="update_doctor_profile.php" class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect mdl-button--raised mdl-button--raised button button-success button-hover-info button-pill " data-upgraded=",MaterialButton,MaterialRipple">Edit Personal Info <i class="fa fa-pencil-square-o"></i><span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</div>
<!-- End Profile Section -->

<!-- Start Make an Appointment Modal -->
<?php include('include/make_appointment.php');?><!-- End Make an Appointment Section -->
<?php include('include/footer.php');?>