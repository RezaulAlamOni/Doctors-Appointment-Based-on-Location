<?php include('include/db.php');?>
<?php include('include/header.php');?>

<?php require ('class/doctors.php');?>
<?php require ('class/departments.php');?>
<?php require ('class/patients.php');?>
<?php require ('class/hospitals.php');?>

<body>
    <!-- Start Header Section -->
    <header id="header-transparent">
        <div class="layer-stretch hdr-center pt-4 pb-4">
            <div class="row align-items-center">
                <div class="col-lg-3 d-none d-sm-none d-md-none d-lg-block d-xl-block">
                    <div class="hdr-center-account text-left p-0">
                        <?php
                        session_start();
                        if (isset($_SESSION['admin_name'])){
                            ?>
                            <a href="admin" class="font-20 text-uppercase"><b>Welcome TO Admin</b></a>
                            <?php
                        }elseif (isset($_SESSION['patient_email'])){ ?>

                            <a href="my_appointment.php" class="font-18 text-uppercase color-white"><i class="fa fa-plus-square-o"></i> My Appointment </a>

                        <?php }elseif (isset($_SESSION['doctor_email'])){ ?>

                            <a href="my_patients.php?id=<?php echo $_SESSION['doctor_id']; ?>" class="font-18 text-uppercase color-white"><i class="fa fa-wheelchair"></i> My Patients </a>

                        <?php }else {
                            ?>
                            <a href="login.php?route=login" class="font-14 mr-4"><i class="fa fa-sign-in"></i>Login</a>
                            <a href="register.php?route=register" class="font-14"><i class="fa fa-user-o"></i>Register</a>
                            <?php
                        }
                            ?>
                    </div>
                </div>
                <div class="col-lg-5">
					<div class="text-center text-danger">
						<a href="index.php"><h1 style="padding-left: 120px"><b>AppointmentBD</b></h1></a>
					</div>
                </div>
                <div class="col-lg-4 d-none d-sm-none d-md-block d-lg-block d-xl-block">
                    <div class="pull-right">
                        <ul class="social-list social-list-white">
                          	<li><a href="" target="_blank" id="hdr-facebook" class="fa fa-facebook rounded"></a><span class="mdl-tooltip mdl-tooltip--bottom" for="hdr-facebook">Facebook</span></li>
                           	<li><a href="" target="_blank" id="hdr-twitter" class="fa fa-twitter rounded"></a><span class="mdl-tooltip mdl-tooltip--bottom" for="hdr-twitter">Twitter</span></li>
                           	<li><a href="" target="_blank" id="hdr-instagram" class="fa fa-instagram rounded"></a><span class="mdl-tooltip mdl-tooltip--bottom" for="hdr-instagram">Instagram</span></li>
                           	<li><a href="" target="_blank" id="hdr-linkedin" class="fa fa-linkedin rounded"></a><span class="mdl-tooltip mdl-tooltip--bottom" for="hdr-linkedin">Linkedin</span></li>
                       	</ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-transparent-menu">
            <div class="hdr layer-stretch">
                <div class="row align-items-center justify-content-end">

                    <!-- Start Menu Section -->
                    <ul class="col menu text-left">
                        <li><a href="/" id="menu-home" class="mdl-button mdl-js-button mdl-js-ripple-effect">Home</a></li>
						<li><a href="doctors.php" id="menu-doctor" class="mdl-button mdl-js-button mdl-js-ripple-effect">Doctors</a></li>
                        <li><a href="hospital.php" id="menu-hospital" class="mdl-button mdl-js-button mdl-js-ripple-effect">Hospitals</a></li>
                        <li><a href="department.php" id="menu-department" class="mdl-button mdl-js-button mdl-js-ripple-effect">Departments</a></li>
<!--                        <li><a href="service.php" id="menu-service" class="mdl-button mdl-js-button mdl-js-ripple-effect">Our Service</a></li>-->
                        <li>
                            <a id="menu-pages" class="mdl-button mdl-js-button mdl-js-ripple-effect">Pages <i class="fa fa-chevron-down"></i></a>
                            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="menu-pages">
                                <li class="mdl-menu__item"><a href="about.php">About</a></li>
                                <li class="mdl-menu__item"><a href="contact.php">Contact</a></li>
                                <li class="mdl-menu__item"><a href="service.php">Our Service</a></li>
                                <li class="mdl-menu__item"><a href="gallery.php">Gallery</a></li>
                            </ul>
                        </li>

					</ul>

					<ul class="col menu ">
						<li><a href="admin" id="menu-admin" class="mdl-button mdl-js-button mdl-js-ripple-effect btn btn-success">Admin Panel</a></li>

                        <li>
                            <a id="menu-profile" class="mdl-button mdl-js-button mdl-js-ripple-effect">

                                <?php
                                if (isset($_SESSION['admin_name'])){?>
                                    <i class="fa fa-user-secret color-green"></i>
                                    <?php echo $_SESSION['admin_name'];

                                }else if (isset($_SESSION['doctor_email'])){?>
                                    <i class="fa fa-user-md color-green"></i>
                                    <?php  echo $_SESSION['doctor_username'];

                                }else if (isset($_SESSION['patient_email'])){ ?>
                                    <i class="fa fa-user-o color-blue"></i>
                                    <?php  echo $_SESSION['patient_username'];

                               }else { ?> <i class="fa fa-user-o color-white"></i> Profile <?php } ?>

                                <i class="fa fa-chevron-down"></i></a>
                            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="menu-profile">
                                <?php
                                    if (isset($_SESSION['admin_name'])){
                                        ?>
                                        <li class="mdl-menu__item">
                                            <a href="admin/profile.php"> <i class="fa fa-user-circle-o color-green"> </i> Profile</a>
                                        </li>
                                        <li class="mdl-menu__item">
                                            <a href="admin/include/logout.php"><i class="fa fa-sign-out color-green"> </i> Logout</a>
                                        </li>
                                        <li class="mdl-menu__item">
                                            <a href="forget_pass.php"><i class="fa fa-key color-green" > </i> Forgot Password</a>
                                        </li>

                                        <?php }
                                        else if (isset($_SESSION['doctor_email'])) {
                                        ?>

                                            <li class="mdl-menu__item">
                                                <a href="doctor_profile.php?id=<?php echo $_SESSION['doctor_id'];?>"> <i class="fa fa-user-circle color-green"> </i> Profile</a>
                                            </li>
                                            <li class="mdl-menu__item">
                                                <a href="update_doctor_profile.php?id=<?php echo $_SESSION['doctor_id'];?>"><i class="fa fa-user-plus color-green"> </i> Update Profile</a>
                                            </li>
                                            <li class="mdl-menu__item">
                                                <a href="my_patients.php?id=<?php echo $_SESSION['doctor_id'];?>"><i class="fa fa-plus-circle color-green"> </i> My Patients</a>
                                            </li>
                                            <li class="mdl-menu__item">
                                                <a href="include/logout.php"><i class="fa fa-sign-out color-green"> </i> Logout</a>
                                            </li>


                                            <?php }else if (isset($_SESSION['patient_email'])) {
                                        ?>

                                            <li class="mdl-menu__item">
                                                <a href="profile.php?id=<?php echo $_SESSION['patient_id'];?>"> <i class="fa fa-user-circle color-green"> </i> Profile</a>
                                            </li>
                                            <li class="mdl-menu__item">
                                                <a href="update_profile.php?id=<?php echo $_SESSION['patient_id'];?>"><i class="fa fa-user-plus color-green"> </i> Update Profile</a>
                                            </li>
                                            <li class="mdl-menu__item">
                                                <a href="my_appointment.php?id=<?php echo $_SESSION['patient_id'];?>"><i class="fa fa-plus-circle color-green"> </i> My Appointment</a>
                                            </li>
                                            <li class="mdl-menu__item">
                                                <a href="my_request.php?id=<?php echo $_SESSION['patient_id'];?>"><i class="fa fa-qrcode color-green"> </i> My Request</a>
                                            </li>
                                            <li class="mdl-menu__item">
                                                <a href="my_medical_history.php?id=<?php echo $_SESSION['patient_id'];?>"><i class="fa fa-hospital-o color-green"> </i> My Medical History</a>
                                            </li>
                                            <li class="mdl-menu__item">
                                                <a href="include/logout.php"><i class="fa fa-sign-out color-green"> </i> Logout</a>
                                            </li>


                                            <?php }else{ ?>


                                            <li class="mdl-menu__item">
                                                <a href="login.php"><i class="fa fa-sign-in color-green"></i> Login</a>
                                            </li>
                                            <li class="mdl-menu__item">
                                                <a href="register.php"><i class="fa fa-user-o color-green"></i> Register</a>
                                            </li>
                                            <li class="mdl-menu__item">
                                                <a href="forget_pass.php"><i class="fa fa-key color-green"></i> Forgot Password</a>
                                            </li>
                                            <li class="mdl-menu__item">
                                                <a href="about.php"><i class="fa fa-key color-green"></i> Help</a>
                                            </li>

                                            <?php }   ?>
							</ul>
                        </li>


                        <li class="mobile-menu-close"><i class="fa fa-times"></i></li>
                    </ul>
                    <div id="menu-bar" class="col-2 col-md-auto"><a><i class="fa fa-bars color-white"></i></a></div>
                </div>
            </div>
        </div>
    </header><!-- End Header Section -->
	<!-- Start Slider Section -->


<div id="slider" class="slider-1 slider-2">
	<div class="flexslider slider-wrapper">
		<ul class="slides">
			<li>
				<div class="slider-info">
					<h1 class="animated fadeInDown">Appointment System Based on Patient Location</h1>
					<p class="animated fadeInDown">This is web application for the patient in our country to book appointment. </p>

                </div>
                <div class="slider-backgroung-image" style="background-image: url(public/uploads/slider-1.jpg); ">7</div>

            </li>
			<li>
				<div class="slider-info">
					<h2>A Complete Patient Data Management System</h2>
					<p class="animated fadeInDown">This system can manage the patient data for farther user doctor can update patient diagnosis information.</p>
				</div>
                <div class="slider-backgroung-image" style="background-image: url(public/uploads/slider-3.jpg);"></div>

            </li>
			<li>
				<div class="slider-info">
					<h2>Get Appointment in any Hospital of Bangladesh </h2>
					<p class="animated fadeInDown">Do not hesitate to contact us on our dedicated contact for the patient #twitterhash, @facebooktag</p>
				</div>
                <div class="slider-backgroung-image" style="background-image: url(public/uploads/slider-2.jpg);"></div>

            </li>
			<li>
				<div class="slider-info">
					<h2>Get Appointment Quickly & Nearest Hospital</h2>
					<p class="animated fadeInDown">Do not hesitate to contact us on our dedicated support forum #twitterhash, @facebooktag</p>
				</div>
                <div class="slider-backgroung-image" style="background-image: url(public/uploads/slider-3.jpg);"></div>

            </li>
		</ul>

			<div class="slider-appointment">
<!--				<a id="slider-appointment-btn" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect animated fadeInUp" >Input Your Disease Symptom For Appointment</a><br>-->
				<a id="slider-appointment-btn" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect animated fadeInUp">Make An Appointment</a>
			</div>
	</div>
</div>
<!-- Start Home Service Section -->
<div id="" class="">
	<div class="layer-stretch">
		<div class="" style="height: 25px">

		</div>
	</div>
</div>
<!-- Start Home About Section -->
<div id="hm-about" class="colored-background">
	<div class="layer-stretch">
		<div class="layer-wrapper animated-wrapper">
			<div class="layer-ttl layer-ttl-white">
				<h3 class="animated animated-down">Our Components</h3>
			</div>
			<div class="row">
				<div class="col-md-7">
					<div class="hm-about-block">
                        <a href="doctors.php">
                            <div class="tbl-cell hm-about-icon"><i class="fa fa-user-md"></i></div>
						<div class="tbl-cell hm-about-number">
							<span>
                                <?php
                                $doctor = new doctors();
                                echo $doctor->count();
                                ?>
                            </span>
							<p>Doctor(s)</p>
						</div>
                        </a>
					</div>
					<div class="hm-about-block">
                        <a href="hospital.php">
                            <div class="tbl-cell hm-about-icon"><i class="fa fa-hospital-o"></i></div>
						<div class="tbl-cell hm-about-number">
							<span>
                                <?php
                                $hos = new hospitals();
                                echo $hos->count();
                                ?>
                            </span>
							<p>Hospital(s)</p>
						</div>
                        </a>
					</div>

					<div class="hm-about-block">
						<div class="tbl-cell hm-about-icon"><i class="fa fa-users"></i></div>
						<div class="tbl-cell hm-about-number">
							<span>
                                <?php
                                    $patient = new patients();
                                    echo $patient->count();
                                ?>
                            </span>
							<p>Patients</p>
						</div>
					</div>
                    <div class="hm-about-block">

                        <a href="department.php">
                            <div class="tbl-cell hm-about-icon"><i class="fa fa-building-o"></i></div>
                        <div class="tbl-cell hm-about-number">
                            <span>
                                <?php
                                    $dpt = new departments();
                                    echo $dpt->count();
                                ?>
                            </span>
                            <p>Department(s)</p>
                        </div>
                        </a>
                    </div>
					<div class="hm-about-paragraph animated animated-up">
						<p class="paragraph-medium paragraph-white">This is a web base application.You can book appointment in any hospital in Bangladesh.------------------------------------------------------------</p>
					</div>
				</div>
				<div class="col-md-5 animated animated-up fadeInUp">
					<img class="img-thumbnail" src="public/uploads/hm-about.jpg" alt="">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Start Home Facility Section -->

<?php

    $result = $dpt->all();
    $departments  = $result->fetchAll();


?>


<!-- Start Make an Appointment Modal -->

 <?php
    if (isset($_SESSION['patient_name'])) include('include/make_appointment.php'); ?>
 <?php include('include/footer.php');?>