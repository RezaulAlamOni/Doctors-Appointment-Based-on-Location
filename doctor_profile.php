<?php include('include/db.php');?>
<?php include('include/header.php');?>

<?php
    $page_name = "<i class='fa fa-address-card-o'></i> My Profile";
?>
<?php include('include/nav.php');?>

<div id="profile-page" class="dtr-modal-background">
    <div class="layer-stretch">
        <div class="row layer-wrapper">
            <div class="col-md-6 profile-left">
                <div class="profile-data">
                    <div class="profile-data-block">
                        <div class="profile-data-label">Name</div>
                        <div class="profile-data-value">oni asdfasd</div>
                    </div>
                    <div class="profile-data-block">
                        <div class="profile-data-label">Email Address</div>
                        <div class="profile-data-value">rzalam93@gmail.com</div>
                    </div>
                    <div class="profile-data-block">
                        <div class="profile-data-label">Mobile Number</div>
                        <div class="profile-data-value">01554534242</div>
                    </div>
                    <div class="profile-data-block">
                        <div class="profile-data-label">Birthday</div>
                        <div class="profile-data-value"></div>
                    </div>
                    <div class="profile-data-block">
                        <div class="profile-data-label">Gender</div>
                        <div class="profile-data-value"></div>
                    </div>
                    <div class="profile-data-block">
                        <div class="profile-data-label">Blood Group</div>
                        <div class="profile-data-value"></div>
                    </div>
                    <div class="profile-data-block">
                        <div class="profile-data-label">Location</div>
                        <div class="profile-data-value"></div>
                    </div>
                    <div class="profile-data-block">
                        <div class="profile-data-label">Country</div>
                        <div class="profile-data-value"></div>
                    </div>
                    <div class="profile-data-block">
                        <div class="profile-data-label">About</div>
                        <div class="profile-data-value"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 profile-right">
                <div class="profile-data">
                    <div class="profile-data-block">
                        <div class="profile-data-label">Name</div>
                        <div class="profile-data-value">oni asdfasd</div>
                    </div>
                    <div class="profile-data-block">
                        <div class="profile-data-label">Email Address</div>
                        <div class="profile-data-value">rzalam93@gmail.com</div>
                    </div>
                    <div class="profile-data-block">
                        <div class="profile-data-label">Mobile Number</div>
                        <div class="profile-data-value">01554534242</div>
                    </div>
                    <div class="profile-data-block">
                        <div class="profile-data-label">Birthday</div>
                        <div class="profile-data-value"></div>
                    </div>
                    <div class="profile-data-block">
                        <div class="profile-data-label">Gender</div>
                        <div class="profile-data-value"></div>
                    </div>
                    <div class="profile-data-block">
                        <div class="profile-data-label">Blood Group</div>
                        <div class="profile-data-value"></div>
                    </div>
                    <div class="profile-data-block">
                        <div class="profile-data-label">Location</div>
                        <div class="profile-data-value"></div>
                    </div>
                    <div class="profile-data-block">
                        <div class="profile-data-label">Country</div>
                        <div class="profile-data-value"></div>
                    </div>
                    <div class="profile-data-block">
                        <div class="profile-data-label">About</div>
                        <div class="profile-data-value"></div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row layer-wrapper">
            <div class="col-md-3"></div>
            <div class="col-md-6 profile-right">
                <div class="profile-edit">
                    <div class="profile-edit-button text-center">
                        <a href="update_doctor_profile.php" class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect mdl-button--raised mdl-button--raised button button-primary button-pill" data-upgraded=",MaterialButton,MaterialRipple">Edit Personal Info <i class="fa fa-pencil-square-o"></i><span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></a>
                    </div>
                    <div class="paragraph-medium paragraph-black" style="font-family: SansSerif">
                        "Manage this basic information — your name, email, phone number, birthday, blood group and location — to help our doctor in emergency case.</div>

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