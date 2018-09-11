<?php include('include/header.php');?>
<body>

    <!-- Header Start -->
    <header id="header">
        <div id="hdr-top-wrapper">
            <div class="layer-stretch hdr-top">
                <div class="hdr-top-block hidden-xs ">
                    <div id="hdr-social">
                        <ul class="social-list social-list-sm">
                            <li><a class="width-auto font-14">Follow Us : </a></li>
                            <li><a href="" target="_blank" id="hdr-facebook" class="fa fa-facebook rounded"></a><span class="mdl-tooltip mdl-tooltip--bottom" for="hdr-facebook">Facebook</span></li>
                            <li><a href="" target="_blank" id="hdr-twitter" class="fa fa-twitter rounded"></a><span class="mdl-tooltip mdl-tooltip--bottom" for="hdr-twitter">Twitter</span></li>
                            <li><a href="" target="_blank" id="hdr-instagram" class="fa fa-instagram rounded"></a><span class="mdl-tooltip mdl-tooltip--bottom" for="hdr-instagram">Instagram</span></li>
                            <li><a href="" target="_blank" id="hdr-linkedin" class="fa fa-linkedin rounded"></a><span class="mdl-tooltip mdl-tooltip--bottom" for="hdr-linkedin">Linkedin</span></li>
                        </ul>
                    </div>
                </div>
                <div class="hdr-top-line hidden-xs"></div>
                <div class="hdr-top-block hdr-number">
                    <div class="font-13">
                        <i class="fa fa-mobile font-20 tbl-cell"> </i> <span class="hidden-xs tbl-cell"> Emergency Number : </span> <span class="tbl-cell">8795</span>
                    </div>
                </div>
                <!--                <div class="hdr-top-line"></div>-->
                <!--                <div class="hdr-top-block">-->
                <!--                    <div class="theme-dropdown">-->
                <!--                        <a id="profile-menu" class="mdl-button mdl-js-button mdl-js-ripple-effect font-13">-->
                <!--                            <i class="fa fa-user-o color-black"></i> My Account</a>-->
                <!---->
                <!--                        <ul id="hdr-user-menu-dd" class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="profile-menu">-->
                <!--                            <li class="mdl-menu__item">-->
                <!--                                <a href="{{ route('login') }}"><i class="fa fa-sign-in"></i>Login</a>-->
                <!--                            </li>-->
                <!--                            <li class="mdl-menu__item">-->
                <!--                                <a href="{{ route('registration') }}"><i class="fa fa-user-o"></i>Register</a>-->
                <!--                            </li>-->
                <!--                            <li class="mdl-menu__item">-->
                <!--                                <a href="{{ route('forget.pass') }}"><i class="fa fa-key"></i>Forgot Password</a>-->
                <!--                            </li>-->
                <!--                            <li class="mdl-menu__item">-->
                <!--                                <a href="{{ route('about') }}"><i class="fa fa-info"></i>Help</a>-->
                <!--                            </li>-->
                <!--                        </ul>-->
                <!--                    </div>-->
                <!--                </div>-->
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
                        <li><a href="doctors.php" id="menu-doctor" class="mdl-button mdl-js-button mdl-js-ripple-effect ">Doctors</a></li>
                        <li><a href="doctors.php" id="menu-doctor" class="mdl-button mdl-js-button mdl-js-ripple-effect ">Hospitals</a></li>

                        <li><a href="service.php" id="menu-service" class="mdl-button mdl-js-button mdl-js-ripple-effect active">Our Service</a></li>
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
    </header>
    <!-- Header End --><!-- Start Page Title Section -->
<div class="page-ttl">
	<div class="layer-stretch">
		<div class="page-ttl-container">
			<div class="page-ttl-icon">
				<i class="fa fa-certificate"></i>
			</div>
			<div class="page-ttl-name">
				<h1>Mammography</h1>
				<p><a href="index2378.html?route=home">Home</a> / <a href="index115b.html?route=services">Services</a> / Mammography</p>
			</div>
		</div>
	</div>
</div><!-- End Page Title Section -->

<!-- Start Service List Section -->
<div class="layer-stretch">
	<div class="row layer-wrapper">
		<div class="col-md-8 text-left">
						<div class="theme-material-card">
				<div class="blog"></div>
				<div class="theme-img blog-picture theme-img-scalerotate text-center">
					<img src="public/uploads/service-6.jpg" alt="Mammography">
				</div>
				<p></p>
				<p class="paragraph-medium paragraph-black text-left">
					Magnetic Resonance Imaging (MRI) is a medical imaging technique which produces detailed images of organs, soft tissues, bone and virtually all other internal body structures. MRI provides a stark contrast between the different soft tissues of the body making it especially useful in neurological (brain), musculoskeletal, cardiovascular				</p>
				<div class="paragraph-medium paragraph-black text-left">
					<p><b>Magnetic Resonance Imaging</b>&nbsp;(MRI) is a medical imaging technique which produces detailed images of organs, soft tissues, bone and virtually all other internal body structures. MRI provides a stark contrast between the different soft tissues of the body making it especially useful in neurological (brain), musculoskeletal, cardiovascular, and oncological (cancer) imaging.</p><p><b>Mammography</b>&nbsp;(also called mastography) is the process of using low-energy X-rays (usually around 30 kVp) to examine the human breast, which is used as a diagnostic and screening tool. The goal of mammography is the early detection of breast cancer, typically through detection of characteristic masses and/or microcalcifications</p><p>The use of <b>mammography </b>as a screening tool for the detection of early breast cancer in otherwise healthy women without symptoms is controversial.</p><h4>Sub Heading</h4><p><span style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enim, beatae velit reiciendis, inventore molestiae, neque sapiente temporibus architecto dicta, vero quaerat sequi quos. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</span><span style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enim, beatae velit reiciendis, inventore molestiae, neque sapiente temporibus architecto dicta, vero quaerat sequi quos. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</span><br></p><ol><li><span style="text-align: center;">At vero eos et accusamus et iusto odio dignissimos</span></li><li><span style="text-align: center;">ducimus qui blanditiis praesentium voluptatum deleniti</span></li><li><span style="text-align: center;">atque corrupti quos dolores et quas molestias excepturi</span></li><li><span style="text-align: center;">sint occaecati cupiditate non provident, similique&nbsp;</span><br></li></ol><p><b><span style="text-align: center;">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique suntasdadsada</span><span style="text-align: center;">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique suntasdadsada</span><span style="text-align: center;">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique suntasdadsada</span></b><span style="text-align: center;"><b>At vero eos et accusamus e</b>t iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique suntasdadsada</span><span style="text-align: center;">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique suntasd</span></p><div><span style="text-align: center;"><br></span></div>				</div>
			</div>
			<div class="theme-material-card">
				<div class="sub-ttl">Reviews (0)</div>
				<ul class="comment-list">
										<li class="text-center font-18">No Review Found !!!</li>
									</ul>
			</div>
			<div class="theme-material-card text-center">
				<div class="sub-ttl layer-ttl-white">Write A Review</div>
								<p class="font-16">You must be registered and logged in to Review</p>
				<a href="index51d2.html?route=login" class="mdl-button mdl-js-button mdl-js-ripple-effect button button-primary">Login</a>
							</div>
		</div>
		<div class="col-md-4 service-page-left text-center visible-md visible-lg">
			<div class="theme-material-card">
				<div class="sub-ttl">Our Services</div>
				<ul class="category-list">
										<li>
												<a href="index426b.html?route=service&amp;id=1/Cardiovascular-centre">
							<i class="fa fa-stethoscope"></i>Cardiovascular centre						</a>
					</li>
										<li>
												<a href="index3610.html?route=service&amp;id=2/Childbirth-Center">
							<i class="fa fa-child"></i>Childbirth Center						</a>
					</li>
										<li>
												<a href="index7c9d.html?route=service&amp;id=3/Cardiology">
							<i class="fa fa-heartbeat"></i>Cardiology						</a>
					</li>
										<li>
												<a href="index923b.html?route=service&amp;id=4/Skin-Care">
							<i class="fa fa-wheelchair-alt"></i>Skin Care						</a>
					</li>
										<li>
												<a href="index5737.html?route=service&amp;id=5/Laboratory-Services">
							<i class="fa fa-flask"></i>Laboratory Services						</a>
					</li>
										<li>
												<a href="indexe51c.html?route=service&amp;id=6/Mammography">
							<i class="fa fa-certificate"></i>Mammography						</a>
					</li>
										<li>
												<a href="index6322.html?route=service&amp;id=9/Dermatologist">
							<i class="fa fa-h-square"></i>Dermatologist						</a>
					</li>
										<li>
												<a href="indexacc2.html?route=service&amp;id=10/Anesthesiology">
							<i class="fa fa-glass"></i>Anesthesiology						</a>
					</li>
										<li>
												<a href="index7df0.html?route=service&amp;id=11/Paediatrics">
							<i class="fa fa-stethoscope"></i>Paediatrics						</a>
					</li>
										<li>
												<a href="index011b.html?route=service&amp;id=12/Eye-Care">
							<i class="fa fa-eye"></i>Eye Care						</a>
					</li>
										<li>
												<a href="index9b9d.html?route=service&amp;id=13/Radiology-Center">
							<i class="fa fa-bullhorn"></i>Radiology Center						</a>
					</li>
									</ul>
			</div>
		</div>
	</div>
</div><!-- End Service List Section -->
<!-- Start Facility List Section -->

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
								<button id="appointment-continue" class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect mdl-button--raised mdl-button--raised button button-primary button-pill" disabled>Continue</button>
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