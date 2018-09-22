<?php include('include/header.php');?>
<?php
    $page_name = "<i class='fa fa-address-card-o'></i> My Profile";
?>
<?php include('include/nav.php');?>

<!--    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="menu-profile">-->
<!--        <li class="mdl-menu__item">-->
<!--            <a href="login.php"><i class="fa fa-sign-in color-green"></i> Login</a>-->
<!--        </li>-->
<!--        <li class="mdl-menu__item">-->
<!--            <a href="register.php"><i class="fa fa-user-o color-green"></i> Register</a>-->
<!--        </li>-->
<!--        <li class="mdl-menu__item">-->
<!--            <a href="forget_pass.php"><i class="fa fa-key color-green"></i> Forgot Password</a>-->
<!--        </li>-->
<!---->
<!---->
<!--        <li class="mdl-menu__item">-->
<!--            <a href="profile.php"><i class="fa fa-address-card-o color-green"></i>My Profile</a>-->
<!--        </li>-->
<!--        <li class="mdl-menu__item">-->
<!--            <a href="my_appointment.php"><i class="fa fa-plus-square-o color-green"></i> My Appointment</a>-->
<!--        </li>-->
<!--        <li class="mdl-menu__item">-->
<!--            <a href="my_invoice.php"><i class="fa fa-key color-green"></i> My Invoice</a>-->
<!--        </li>-->
<!--        <li class="mdl-menu__item">-->
<!--            <a href="update_profile.php"><i class="fa fa-key color-green"></i> Update Profile</a>-->
<!--        </li>-->
<!--        <li class="mdl-menu__item">-->
<!--            <a href="include/logout.php"><i class="fa fa-sign-out color-green"></i> Logout</a>-->
<!--        </li>-->
<!--    </ul>-->

<!-- Header End --><!-- Start Page Title Section -->
<!--<div class="page-ttl">-->
<!--    <div class="layer-stretch" style="height: 90px;">-->
<!--        <div class="page-ttl-container">-->
<!--            <div class="page-ttl-name">-->
<!--                <h1><i class="fa fa-address-card-o"></i> My Profile</h1>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!-- End Page Title Section -->
<!-- Start Profile Section -->
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
                <div class="profile-edit">
                    <div class="paragraph-medium paragraph-black">Manage this basic information — your name, email, phone number, birthday, blood group and location — to help our doctor in emergency case.</div>
                    <div class="profile-edit-button">
                        <a href="update_profile.php" class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect mdl-button--raised mdl-button--raised button button-primary button-pill" data-upgraded=",MaterialButton,MaterialRipple">Edit Personal Info <i class="fa fa-pencil-square-o"></i><span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Profile Section -->

<!-- Start Make an Appointment Modal -->
<?php include('include/make_appointment.php');?><!-- End Make an Appointment Section -->
<?php include('include/footer.php');?>