<body>
<?php session_start();?>
<?php

?>
<!-- Header Start -->
<header id="header">
    <div id="hdr-top-wrapper">
        <div class="layer-stretch hdr-top">
            <div class="hdr-top-block hidden-xs">
                <div id="hdr-social">
                    <ul class="social-list social-list-sm">
                        <li><a class="width-auto font-13">Follow Us : </a></li>
                        <li><a href="https://www.facebook.com/" target="_blank" id="hdr-facebook" ><i class="fa fa-facebook" ></i></a><span class="mdl-tooltip mdl-tooltip--bottom" for="hdr-facebook">Facebook</span></li>
                        <li><a href="https://twitter.com/" target="_blank" id="hdr-twitter" ><i class="fa fa-twitter" ></i></a><span class="mdl-tooltip mdl-tooltip--bottom" for="hdr-twitter">Twitter</span></li>
                        <li><a href="https://plus.google.com/" target="_blank" id="hdr-google" ><i class="fa fa-google" ></i></a><span class="mdl-tooltip mdl-tooltip--bottom" for="hdr-google">Google</span></li>
                        <li><a href="https://www.instagram.com/" target="_blank" id="hdr-instagram" ><i class="fa fa-instagram" ></i></a><span class="mdl-tooltip mdl-tooltip--bottom" for="hdr-instagram">Instagram</span></li>
                        <li><a href="https://www.youtube.com/" target="_blank" id="hdr-youtube" ><i class="fa fa-youtube" ></i></a><span class="mdl-tooltip mdl-tooltip--bottom" for="hdr-youtube">Youtube</span></li>
                    </ul>
                </div>
            </div>


            <div class="hdr-top-line"></div>
            <div class="hdr-top-block col-sm-1" id="profile">
                <div class="theme-dropdown text-left"  id="profile-li">
                    <?php if (isset($_SESSION['admin_name'])){ ?>

                        <a id="profile-menu" class="mdl-button mdl-js-button mdl-js-ripple-effect font-13">
                            <i class="fa fa-user-o color-black mdl-color-text--green"></i> <?php echo $_SESSION['admin_name'];?></a>
                        <ul id="hdr-user-menu-dd" class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="profile-menu">
                            <li class="mdl-menu__item">
                                <a href="admin/profile.php"><i class="fa fa-sign-in mdl-color-text--green"></i> Profile</a>
                            </li>
                            <li class="mdl-menu__item">
                                <a href="admin/include/logout.php"><i class="fa fa-user-o mdl-color-text--green"></i> Logout</a>
                            </li>
                            <li class="mdl-menu__item">
                                <a href="about.php"><i class="fa fa-address-book mdl-color-text--green"></i> About</a>
                            </li>
                        </ul>

                    <?php }else if (isset($_SESSION['patient_email'])){ ?>

                        <a id="profile-menu" class="mdl-button mdl-js-button mdl-js-ripple-effect font-16 text-capitalize">
                            <i class="fa fa-user color-green"> </i> <?php echo $_SESSION['patient_first_name']." ".$_SESSION['patient_last_name'];?></a>
                        <ul id="hdr-user-menu-dd" class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="profile-menu">
                            <li class="mdl-menu__item">
                                <a href="profile.php"><i class="fa fa-user mdl-color-text--green"></i> Profile</a>
                            </li>

                            <li class="mdl-menu__item">
                                <a href="update_profile.php"><i class="fa fa-user-plus mdl-color-text--green"></i> Update Profile</a>
                            </li>
                            <li class="mdl-menu__item">
                                <a href="my_appointment.php"><i class="fa fa-plus-square mdl-color-text--green"></i> My Appointment</a>
                            </li>
<!--                            <li class="mdl-menu__item">-->
<!--                                <a href="my_request.php"><i class="fa fa-qrcode mdl-color-text--green"></i> My Request</a>-->
<!--                            </li>-->
<!--                            <li class="mdl-menu__item">-->
<!--                                <a href="my_invoice.php"><i class="fa fa-user-md mdl-color-text--green"></i> My Medical History</a>-->
<!--                            </li>-->
                            <li class="mdl-menu__item">
                                <a href="include/logout.php"><i class="fa fa-sign-out mdl-color-text--green"></i> Logout</a>
                            </li>
                            <li class="mdl-menu__item">
                                <a href="about.php"><i class="fa fa-key mdl-color-text--green"></i> Help </a>
                            </li>
                        </ul>


                    <?php } else if (isset($_SESSION['doctor_email'])){ ?>

                        <a id="profile-menu" class="mdl-button mdl-js-button mdl-js-ripple-effect font-16 text-capitalize">
                            <i class="fa fa-user color-green"> </i> <?php echo $_SESSION['doctor_username'];?></a>
                        <ul id="hdr-user-menu-dd" class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="profile-menu">
                            <li class="mdl-menu__item">
                                <a href="doctor_profile.php"><i class="fa fa-user mdl-color-text--green"></i> Profile</a>
                            </li>

                            <li class="mdl-menu__item">
                                <a href="update_doctor_profile.php"><i class="fa fa-user-plus mdl-color-text--green"></i> Update Profile</a>
                            </li>
                            <li class="mdl-menu__item">
                                <a href="my_patients.php?id=<?php echo $_SESSION['doctor_id']; ?>"><i class="fa fa-plus-square mdl-color-text--green"></i> My Appointment</a>
                            </li>
                            <li class="mdl-menu__item">
                                <a href="include/logout.php"><i class="fa fa-sign-out mdl-color-text--green"></i> Logout</a>
                            </li>
                        </ul>


                    <?php } else { ?>

                        <a id="profile-menu" class="mdl-button mdl-js-button mdl-js-ripple-effect font-13">
                            <i class="fa fa-user color-green"> </i> My Account</a>
                        <ul id="hdr-user-menu-dd" class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="profile-menu">
                            <li class="mdl-menu__item">
                                <a href="login.php"><i class="fa fa-sign-in mdl-color-text--green" ></i>Login</a>
                            </li>
                            <li class="mdl-menu__item">
                                <a href="register.php"><i class="fa fa-user-o mdl-color-text--green"></i>Register</a>
                            </li>
                            <li class="mdl-menu__item">
                                <a href="forget_pass.php"><i class="fa fa-key mdl-color-text--green"></i>Forgot Password</a>
                            </li>

                        </ul>

                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
    <div id="hdr-wrapper">
        <div class="layer-stretch hdr">
            <div class="row align-items-center justify-content-end">
<!--                <a href="index.php" style="padding-left: 60px" class="text-primary"><h1 style="font-family: 'Harlow Solid Italic'">AppointmentBD</h1></a>-->
                <a href="" style="padding-left: 60px" class="text-primary"><h1 style="font-family: 'Harlow Solid Italic'"><?php echo $page_name;?></h1></a>
                <!-- Start Menu Section -->
                <ul class="col menu">
                    <li >
                        <a href="/" id="" class="mdl-button mdl-js-button mdl-js-ripple-effect">Home</a>
                    </li>
                    <li id="doctor"><a href="doctors.php?id=<?php if (isset($_SESSION['patient_id'])){ echo $_SESSION['location_id']; }?>" id="menu-doctor" class="mdl-button mdl-js-button mdl-js-ripple-effect ">Doctors</a></li>
                    <li id="hospital"><a href="hospital.php" id="menu-doctor" class="mdl-button mdl-js-button mdl-js-ripple-effect ">Hospitals</a></li>
                    <li id="department"><a href="department.php" id="menu-doctor" class="mdl-button mdl-js-button mdl-js-ripple-effect ">Departments</a></li>

                    <li id="service"><a href="service.php" id="menu-service" class="mdl-button mdl-js-button mdl-js-ripple-effect">Our Service</a></li>
                    <li id="page">
                        <a id="menu-pages" class="mdl-button mdl-js-button mdl-js-ripple-effect">Pages <i class="fa fa-chevron-down"></i></a>
                        <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="menu-pages">
                            <li class="mdl-menu__item">
                                <a href="about.php">About</a>
                            </li>
                            <li class="mdl-menu__item">
                                <a href="contact.php">Contact</a>
                            </li>

                            <li class="mdl-menu__item">
                                <a href="gallery.php">Gallery</a>
                            </li>
                        </ul>
                    </li>

                    <?php if (isset($_SESSION['admin_name'])) { ?>

                        <li><a href="admin" id="menu-admin"
                               class="mdl-button mdl-js-button mdl-js-ripple-effect btn btn-facebook mdl-color-text--black">
                                <b>Admin Panel</b></a></li>
                        <?php
                    }
                    ?>
                    <li class="mobile-menu-close"><i class="fa fa-times"></i></li>
                </ul>
                <div id="menu-bar" class="col-2 col-md-auto"><a><i class="fa fa-bars color-white"></i></a></div>
            </div>
        </div>
    </div>
</header>
