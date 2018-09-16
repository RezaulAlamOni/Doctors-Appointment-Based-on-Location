<?php include('include/db.php');?>
<?php include('include/header.php');?>

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
                        }else {
                            ?>
                            <a href="login.php" class="font-14 mr-4"><i class="fa fa-sign-in"></i>Login</a>
                            <a href="register.php" class="font-14"><i class="fa fa-user-o"></i>Register</a>
                            <?php
                        }
                            ?>
                    </div>
                </div>
                <div class="col-lg-5">
					<div class="text-center text-danger">
						<a href="index.php"><h1 style="padding-left: 120px"><b>AppointmentBD</b></h1></a>
					</div>
                    <!--<div class="hdr-center-logo text-center">-->
                        <!--<a href="index.html" class="d-inline-block"><img src="public/uploads/logo-blue.png" alt="Klinikal Health care"> </a>-->
                    <!--</div>-->
                </div>
                <div class="col-lg-4 d-none d-sm-none d-md-block d-lg-block d-xl-block">
                    <div class="pull-right">
                        <ul class="social-list social-list-white">
                          	<li><a href="" target="_blank" id="hdr-facebook" class="fa fa-facebook rounded"></a><span class="mdl-tooltip mdl-tooltip--bottom" for="hdr-facebook">Facebook</span></li>
                           	<li><a href="" target="_blank" id="hdr-twitter" class="fa fa-twitter rounded"></a><span class="mdl-tooltip mdl-tooltip--bottom" for="hdr-twitter">Twitter</span></li>
                           	<li><a href="" target="_blank" id="hdr-instagram" class="fa fa-instagram rounded"></a><span class="mdl-tooltip mdl-tooltip--bottom" for="hdr-instagram">Instagram</span></li>
                           	<li><a href="" target="_blank" id="hdr-linkedin" class="fa fa-linkedin rounded"></a><span class="mdl-tooltip mdl-tooltip--bottom" for="hdr-linkedin">Linkedin</span></li>
<!--                           	<li><a href="" target="_blank" id="hdr-flickr" class="fa fa-flickr rounded"></a><span class="mdl-tooltip mdl-tooltip--bottom" for="hdr-flickr">Flickr</span></li>-->
<!--                          	<li><a href="" target="_blank" id="hdr-rss" class="fa fa-rss rounded"></a><span class="mdl-tooltip mdl-tooltip--bottom" for="hdr-rss">Rss</span></li>-->
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
                        <li><a href="index.php" id="menu-home" class="mdl-button mdl-js-button mdl-js-ripple-effect">Home</a></li>
						<li><a href="doctors.php" id="menu-doctor" class="mdl-button mdl-js-button mdl-js-ripple-effect">Doctors</a></li>
                        <li><a href="hospitals.php" id="menu-service" class="mdl-button mdl-js-button mdl-js-ripple-effect">Hospitals</a></li>
                        <li><a href="service.php" id="menu-service" class="mdl-button mdl-js-button mdl-js-ripple-effect">Our Service</a></li>
                        <li>
                            <a id="menu-pages" class="mdl-button mdl-js-button mdl-js-ripple-effect">Pages <i class="fa fa-chevron-down"></i></a>
                            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="menu-pages">
                                <li class="mdl-menu__item"><a href="about.php">About</a></li>
                                <li class="mdl-menu__item"><a href="contact.php">Contact</a></li>
                                <li class="mdl-menu__item"><a href="gallery.php">Gallery</a></li>
                            </ul>
                        </li>

					</ul>

					<ul class="col menu ">
                        <li style="width:310px;height:25px;padding-bottom: 40px;">
                            <div class="" style="">
                                <form action="" method="post" style="">
                                    <div class="input-group">
                                        <input  name="search" type="text" class="form-control">
                                        <span class="input-group-btn" style="">
                                            <button class="btn btn-default" type="submit" name="submit">
                                                <span class="fa fa-search"></span>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </li>
						<li><a href="admin" id="menu-admin" class="mdl-button mdl-js-button mdl-js-ripple-effect btn btn-success">Admin Panel</a></li>

                        <li>
                            <a id="menu-profile" class="mdl-button mdl-js-button mdl-js-ripple-effect"><i class="fa fa-user-o color-white"> </i> Profile <i class="fa fa-chevron-down"></i></a>
                            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="menu-profile">
                                <?php
                                    if (isset($_SESSION['admin_name']) || isset($_SESSION['user_name'])){






                                    }
                                ?>
                                <li class="mdl-menu__item">
                                    <a href="login.php"><i class="fa fa-sign-in color-green"></i> Login</a>
                                </li>
                                <li class="mdl-menu__item">
                                    <a href="register.php"><i class="fa fa-user-o color-green"></i> Register</a>
                                </li>
                                <li class="mdl-menu__item">
                                    <a href="forget_pass.php"><i class="fa fa-key color-green"></i> Forgot Password</a>
                                </li>

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
					<h1 class="animated fadeInDown">Appointment System Based on Patient Area</h1>
					<p class="animated fadeInDown">We have created 30+ Pages, 70+ Components or Shortcodes, Popup for this template and more in future. #twitterhash, @facebooktag</p>

                </div>
                <div class="slider-backgroung-image" style="background-image: url(public/uploads/slider-1.jpg); ">7</div>

            </li>
			<li>
				<div class="slider-info">
					<h2>A Complete Patient Data Management System</h2>
					<p class="animated fadeInDown">This is tag line ipsum dolor sit amet, consectetur Nihil cupiditate. mollitia maiores elit#twitterhash, @facebooktag</p>
				</div>
                <div class="slider-backgroung-image" style="background-image: url(public/uploads/slider-3.jpg);"></div>

            </li>
			<li>
				<div class="slider-info">
					<h2>Get Appointment in any Hospital of Bangladesh </h2>
					<p class="animated fadeInDown">Do not hesitate to contact us on our dedicated support forum. mollitia maiores temp fugit! consectetur adipisicing elit #twitterhash, @facebooktag</p>
				</div>
                <div class="slider-backgroung-image" style="background-image: url(public/uploads/slider-2.jpg);"></div>

            </li>
			<li>
				<div class="slider-info">
					<h2>Get Appointment Quickly & Nearest Hospital</h2>
					<p class="animated fadeInDown">Do not hesitate to contact us on our dedicated support forum. mollitia maiores temp fugit! consectetur adipisicing elit #twitterhash, @facebooktag</p>
				</div>
                <div class="slider-backgroung-image" style="background-image: url(public/uploads/slider-3.jpg);"></div>

            </li>
		</ul>

			<div class="slider-appointment">
<!--				<a id="slider-appointment-btn" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect animated fadeInUp" >Input Your Disease Symptom For Appointment</a><br>-->
				<a id="slider-appointment-btn" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect animated fadeInUp" >Make An Appointment</a>
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
				<h3 class="animated animated-down">Who We Are</h3>
			</div>
			<div class="row">
				<div class="col-md-7">
					<div class="hm-about-block">
						<div class="tbl-cell hm-about-icon"><i class="fa fa-user-md"></i></div>
						<div class="tbl-cell hm-about-number">
							<span>10</span>
							<p>Doctor(s)</p>
						</div>
					</div>
					<div class="hm-about-block">
						<div class="tbl-cell hm-about-icon"><i class="fa fa-ambulance"></i></div>
						<div class="tbl-cell hm-about-number">
							<span>20</span>
							<p>Hospital(s)</p>
						</div>
					</div>

					<div class="hm-about-block">
						<div class="tbl-cell hm-about-icon"><i class="fa fa-users"></i></div>
						<div class="tbl-cell hm-about-number">
							<span>40</span>
							<p>Patients</p>
						</div>
					</div>
                    <div class="hm-about-block">
                        <div class="tbl-cell hm-about-icon"><i class="fa fa-calendar"></i></div>
                        <div class="tbl-cell hm-about-number">
                            <span>23</span>
                            <p>Year of Service(s)</p>
                        </div>
                    </div>
					<div class="hm-about-paragraph animated animated-up">
						<p class="paragraph-medium paragraph-white">A hospital is an institution for healthcare typically providing specialized treatment for inpatient (or overnight) stays. Some hospitals primarily admit patients suffering from a specific disease or affection, or are reserved for the diagnosis and treatment of conditions affecting a specific age group. Others have a mandate that expands beyond offering dominantly curative and rehabilitative care services to include promotional, preventive and educational roles as part of a primary healthcare approach. Today, hospitals are usually funded by the state, health organizations (for profit or non-profit), by health insurances or by charities and by donations.</p>
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



<!-- Start Make an Appointment Modal -->

	<div id="appointment" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header text-center">
					<h4 class="modal-title">Make An Appointment</h4>
					<div class="appointment-hdr-back"><i class="fa fa-chevron-left"></i></div>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<div class="appointment-form">

						<div class="appointment-part-1">
							<div class="appointment-option">
								<div class="appointment-option-department">
									<i class="fa fa-hospital-o" id="appointment-option-department"></i>
									<span class="mdl-tooltip mdl-tooltip--top" for="appointment-option-department">I Know Department</span>
								</div>
								<div class="appointment-option-doctor">
									<i class="fa fa-user-md" id="appointment-option-doctor"></i>
									<span class="mdl-tooltip mdl-tooltip--top" for="appointment-option-doctor">I Know Doctor</span>
								</div>
							</div>
							<div class="appointment-invisible">
								<input type="hidden" value="{&quot;id&quot;:1,&quot;name&quot;:&quot;Daniel Barnes&quot;,&quot;department&quot;:2,&quot;weekly&quot;:&quot;[\&quot;3\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25, 2017-01-18, 2017-01-21, 2017-01-30, 2017-03-27, 2017-03-31\&quot;&quot;}" class="doctor-id-1 department-id-2" >
								<input type="hidden" value="{&quot;id&quot;:3,&quot;name&quot;:&quot;Melissa Bates&quot;,&quot;department&quot;:1,&quot;weekly&quot;:&quot;[\&quot;1\&quot;,\&quot;2\&quot;,\&quot;6\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25, 2017-04-13, 2017-04-14, 2017-04-20, 2017-07-07, 2017-07-08, 2017-07-14\&quot;&quot;}" class="doctor-id-3 department-id-1" >
								<input type="hidden" value="{&quot;id&quot;:4,&quot;name&quot;:&quot;Cheri Aria&quot;,&quot;department&quot;:3,&quot;weekly&quot;:&quot;[\&quot;5\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25, 2017-03-07, 2017-03-14, 2017-03-20, 2017-03-26\&quot;&quot;}" class="doctor-id-4 department-id-3" >
								<input type="hidden" value="{&quot;id&quot;:5,&quot;name&quot;:&quot;Steve Soeren&quot;,&quot;department&quot;:2,&quot;weekly&quot;:&quot;[\&quot;0\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25, 2017-02-16, 2017-03-14, 2017-03-17, 2017-03-23, 2017-03-31\&quot;&quot;}" class="doctor-id-5 department-id-2" >
								<input type="hidden" value="{&quot;id&quot;:6,&quot;name&quot;:&quot;Theodore Bennett&quot;,&quot;department&quot;:4,&quot;weekly&quot;:&quot;[\&quot;0\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25, 2017-02-15, 2017-02-16, 2017-03-07, 2017-03-15, 2017-03-23, 2017-03-31\&quot;&quot;}" class="doctor-id-6 department-id-4" >
								<input type="hidden" value="{&quot;id&quot;:7,&quot;name&quot;:&quot;Barbara Baker&quot;,&quot;department&quot;:2,&quot;weekly&quot;:&quot;[\&quot;1\&quot;,\&quot;5\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25, 2017-06-08, 2017-06-20, 2017-06-28, 2017-06-29\&quot;&quot;}" class="doctor-id-7 department-id-2" >
								<input type="hidden" value="{&quot;id&quot;:8,&quot;name&quot;:&quot;Linda Adams&quot;,&quot;department&quot;:1,&quot;weekly&quot;:&quot;[\&quot;0\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25, 2017-06-16, 2017-06-21, 2017-06-26, 2017-07-11, 2017-07-14, 2017-07-20, 2017-07-31\&quot;&quot;}" class="doctor-id-8 department-id-1" >
								<input type="hidden" value="{&quot;id&quot;:10,&quot;name&quot;:&quot;Vedhraj Jain&quot;,&quot;department&quot;:5,&quot;weekly&quot;:&quot;[\&quot;6\&quot;,\&quot;0\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25\&quot;&quot;}" class="doctor-id-10 department-id-5" >
							</div>
							<input type="hidden" name="appointment_token" value="15276e55e6cdfa6911f440f75f64501dc97cc6f4a19102dddb4c47f0c4dd1523ad639943996afef209d6a358056f3b3389a9bcb175b7413ef3547589673a2b7d">
							<div class="mdl-selectfield mdl-js-selectfield mdl-selectfield--floating-label appointment-input">

								<select class="mdl-selectfield__select" id="appointment-department" name="department">
									<option value=""></option>
									<option value="1">Gynaecology</option>
									<option value="2">Orthology</option>
									<option value="3">Dermatologist</option>
									<option value="4">Anaesthesia</option>
									<option value="5">Ayurvedic</option>
								</select>

								<label class="mdl-selectfield__label" for="appointment-department">Choose Department <em>*</em></label>
							</div>
							<div id="appointment-doctor-wrapper" class="mdl-selectfield mdl-js-selectfield mdl-selectfield--floating-label appointment-input">
								<select class="mdl-selectfield__select" id="appointment-doctor" name="doctor">
									<option value=""></option>
								</select>
								<label class="mdl-selectfield__label" for="appointment-doctor">Choose Doctor <em>*</em></label>
							</div>
							<div class="or-label">OR</div>
							<div id="search-doctor" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label ui-widget appointment-input">
								<label class="mdl-textfield__label" for="appointment-search-doctor">I Know Doctor <em>*</em></label>
								<input class="mdl-textfield__input" type="text" value="" id="appointment-search-doctor">
							</div>
							<div id="appointment-date-wrapper" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label appointment-input">
								<input class="mdl-textfield__input" type="text" value="" id="appointment-date" readonly>
								<label class="mdl-textfield__label" for="appointment-date">Choose Date <em>*</em></label>
							</div>
							<div class="appointment-slot">
								<p>Choose Time Slot</p>
							</div>
							<div class="appointment-button">
								<button id="appointment-continue" class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect mdl-button--raised mdl-button--raised button button-primary button-pill " disabled>Continue</button>
							</div>
						</div>
						<div class="appointment-loading">
							<div class="appointment-loading-gif"></div>
						</div>

						<div class="appointment-part-2">
							<div class="appointment-enterd-value"></div>
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label appointment-input">
								<input class="mdl-textfield__input" type="text" pattern="[A-Z,a-z, ]*" value="" id="appointment-name">
								<label class="mdl-textfield__label" for="appointment-name">Name <em>*</em></label>
								<span class="mdl-textfield__error">Please Enter Valid Name!</span>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label appointment-input">
								<input class="mdl-textfield__input" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value="" id="appointment-email">
								<label class="mdl-textfield__label" for="appointment-email">Email Address <em>*</em></label>
								<span class="mdl-textfield__error">Please Enter Valid Email Address!</span>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label appointment-input">
								<input class="mdl-textfield__input" type="text" pattern="[0-9]*" value="" id="appointment-mobile">
								<label class="mdl-textfield__label" for="appointment-mobile">Mobile Number <em>*</em></label>
								<span class="mdl-textfield__error">Please Enter Valid Mobile Number!</span>
							</div>
							<div class="appointment-button">
								<button id="appointment-submit" class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect mdl-button--raised mdl-button--raised button button-primary button-pill">Finish</button>
							</div>
						</div>
						<div class="appointment-success">
							<p class="paragraph-medium">Hello <span id="appointment-success-name"></span></p>
							<p class="appointment-success-descr paragraph-medium">
								Your appointment for <span id="appointment-success-date"></span> at <span id="appointment-success-time"></span>
								has been booked.							</p>
							<div class="appointment-mail-icon"><i class="fa fa-envelope-o"></i></div>
							<p class="paragraph-medium paragraph-black">For more information visit your mail box.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- End Make an Appointment Section -->
 <?php include('include/footer.php');?>