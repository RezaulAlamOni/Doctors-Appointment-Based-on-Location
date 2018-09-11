
<?php include('include/header.php');?>
<body>
    <!-- Header Start -->
    <header id="header">
		<div id="hdr-top-wrapper">
			<div class="layer-stretch hdr-top">
				<div class="hdr-top-block hidden-xs">
					<div id="hdr-social">
						<ul class="social-list social-list-sm">
							<li><a class="width-auto font-13">Follow Us : </a></li>
							<li><a href="https://www.facebook.com/pepdevofficial" target="_blank" id="hdr-facebook" ><i class="fa fa-facebook" ></i></a><span class="mdl-tooltip mdl-tooltip--bottom" for="hdr-facebook">Facebook</span></li>
							<li><a href="https://twitter.com/pepdevofficial" target="_blank" id="hdr-twitter" ><i class="fa fa-twitter" ></i></a><span class="mdl-tooltip mdl-tooltip--bottom" for="hdr-twitter">Twitter</span></li>
							<li><a href="https://www.instagram.com/pepdevofficial/" target="_blank" id="hdr-instagram" ><i class="fa fa-instagram" ></i></a><span class="mdl-tooltip mdl-tooltip--bottom" for="hdr-instagram">Instagram</span></li>
							<li><a href="https://www.linkedin.com/" target="_blank" id="hdr-linkedin" ><i class="fa fa-linkedin" ></i></a><span class="mdl-tooltip mdl-tooltip--bottom" for="hdr-linkedin">Linkedin</span></li>
						</ul>
					</div>
				</div>
				<div class="hdr-top-line"></div>
				<div class="hdr-top-block">
					<div class="theme-dropdown">
						<a id="profile-menu" class="mdl-button mdl-js-button mdl-js-ripple-effect font-13">
							<i class="fa fa-user-o color-black"></i> My Account                        </a>
						<ul id="hdr-user-menu-dd" class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="profile-menu">
							<li class="mdl-menu__item">
								<a href="login.php"><i class="fa fa-sign-in"></i>Login</a>
							</li>
							<li class="mdl-menu__item">
								<a href="register.php"><i class="fa fa-user-o"></i>Register</a>
							</li>
							<li class="mdl-menu__item">
								<a href="forget_pass.php"><i class="fa fa-key"></i>Forgot Password</a>
							</li>

						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="hdr-wrapper">
            <div class="layer-stretch hdr">
                <!--                {{--<div class="tbl-cell hdr-logo">--}}-->
                <!--                    {{--<a href="index2378.html?route=home">--}}-->
                <!--                        {{--<img src="public/uploads/logo-purple.png" alt="Klinikal Health care">--}}-->
                <!--                    {{--</a>--}}-->
                <!--                {{--</div>--}}-->

                <div class="row align-items-center justify-content-end">
                    <a href="index.php" style="padding-left: 60px" class="text-primary"><h1 style="font-family: 'Harlow Solid Italic'">AppointmentBD</h1></a>
                    <!-- Start Menu Section -->
                    <ul class="col menu">
                        <li>
                            <a href="index.php" id="" class="mdl-button mdl-js-button mdl-js-ripple-effect">Home</a>
                        </li>
                        <li><a href="doctors.php" id="menu-doctor" class="mdl-button mdl-js-button mdl-js-ripple-effect active">Doctors</a></li>
                        <li><a href="doctors.php" id="menu-doctor" class="mdl-button mdl-js-button mdl-js-ripple-effect ">Hospitals</a></li>

                        <li><a href="service.php" id="menu-service" class="mdl-button mdl-js-button mdl-js-ripple-effect">Our Service</a></li>
                        <li>
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
                        <li><a href="admin" id="menu-admin" class="text-success mdl-button mdl-js-button mdl-js-ripple-effect ">Admin Panel</a></li>
                        <li>
                            <a id="menu-profile" class="mdl-button mdl-js-button mdl-js-ripple-effect"><i class="fa fa-user-o color-white"> </i> Profile <i class="fa fa-chevron-down"></i></a>
                            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="menu-profile">
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
		</div>
	</header>
    <!-- Header End --><!-- Start Page Title Section -->
<div class="page-ttl">
	<div class="layer-stretch">
		<div class="page-ttl-container">
			<div class="page-ttl-icon">
				<i class="fa fa-key"></i>
			</div>
			<div class="page-ttl-name">
				<h1>Forgot Password</h1>
				<p><a href="index2378.html?route=home">Home</a> > Forgot Password</p>
			</div>
		</div>
	</div>
</div><!-- End Page Title Section -->
<!-- Start Forgot Password Section -->
<div id="login-page">
	<div class="layer-stretch">
		<div class="layer-wrapper">
			<div class="layer-container">
				<form class="form-container" action="http://pepdev.com/theme-preview/klinikal/index.php?route=forgot" method="post" enctype="multipart/form-data">
                    <div class="login-condition">Enter the Email address associated with your account and we will mail you a Reset Link.</div>
					<input type="hidden" name="_token" value="15276e55e6cdfa6911f440f75f64501dc97cc6f4a19102dddb4c47f0c4dd1523ad639943996afef209d6a358056f3b3389a9bcb175b7413ef3547589673a2b7d">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
						<i class="fa fa-envelope-o"></i>
						<input class="mdl-textfield__input" type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="forgot-email">
						<label class="mdl-textfield__label" for="forgot-email">Email Address <em> *</em></label>
						<span class="mdl-textfield__error">Please Enter Valid Email Address!</span>
					</div>
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon form-bot-check">
					<i class="fa fa-question"></i>
						<input class="mdl-textfield__input" type="number" name="bot-check" id="forgot-bot">
						<label class="mdl-textfield__label" for="forgot-bot">What is 8 plus 4 = <em> *</em></label>
						<span class="mdl-textfield__error">Please Enter Correct Value!</span>
					</div>
					<div class="form-submit">
						<button type="submit" name="forgot" id="forgot-submit" class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect mdl-button--raised mdl-button--raised button button-primary button-pill">Send Reset Link</button>
					</div>s
					<div class="login-link">
						 <span class="paragraph-small">Already have an account?</span>
                        <a href="login.html?route=login">Login</a>
					</div>	
				</form>
			</div>
		</div>
	</div>
</div><!-- End Forgot Password Section -->
<?php include('include/footer.php');?>