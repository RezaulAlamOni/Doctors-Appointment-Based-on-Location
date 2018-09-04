@extends('layouts.apps')

@section('content')
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
							<li><a href="" target="_blank" id="hdr-google" class="fa fa-google rounded"></a><span class="mdl-tooltip mdl-tooltip--bottom" for="hdr-google">Google</span></li>
							<li><a href="" target="_blank" id="hdr-instagram" class="fa fa-instagram rounded"></a><span class="mdl-tooltip mdl-tooltip--bottom" for="hdr-instagram">Instagram</span></li>
							<li><a href="" target="_blank" id="hdr-youtube" class="fa fa-youtube rounded"></a><span class="mdl-tooltip mdl-tooltip--bottom" for="hdr-youtube">Youtube</span></li>
							<li><a href="" target="_blank" id="hdr-linkedin" class="fa fa-linkedin rounded"></a><span class="mdl-tooltip mdl-tooltip--bottom" for="hdr-linkedin">Linkedin</span></li>
						</ul>
                    </div>
                </div>
                <div class="hdr-top-line hidden-xs"></div>
                <div class="hdr-top-block hdr-number">
                    <div class="font-13">
                        <i class="fa fa-mobile font-20 tbl-cell"> </i> <span class="hidden-xs tbl-cell"> Emergency Number : </span> <span class="tbl-cell">1800000000</span>
                    </div>
                </div>
                <div class="hdr-top-line"></div>
                <div class="hdr-top-block">
                    <div class="theme-dropdown">
                        <a id="profile-menu" class="mdl-button mdl-js-button mdl-js-ripple-effect font-13">
                            <i class="fa fa-user-o color-black"></i> My Account</a>

                        <ul id="hdr-user-menu-dd" class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="profile-menu">
                            <li class="mdl-menu__item">
                                <a href="{{ route('login') }}"><i class="fa fa-sign-in"></i>Login</a>
                            </li>
                            <li class="mdl-menu__item">
                                <a href="{{ route('registration') }}"><i class="fa fa-user-o"></i>Register</a>
                            </li>
                            <li class="mdl-menu__item">
                                <a href="{{ route('forget.pass') }}"><i class="fa fa-key"></i>Forgot Password</a>
                            </li>
                            <li class="mdl-menu__item">
                                <a href="{{ route('about') }}"><i class="fa fa-info"></i>Help</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="hdr-wrapper">
            <div class="layer-stretch hdr" >
                <div class="row align-items-center justify-content-end">
                    <a href="{{ route('index') }}" style="padding-left: 60px" class="text-primary"><h1>Choose Your Doctor</h1></a>

                    <!-- Start Menu Section -->
                    <ul class="col menu">
                        <li>
                            <a href="{{ route('index') }}" id="" class="mdl-button mdl-js-button mdl-js-ripple-effect">Home</a>
                        </li>
                        <li><a href="{{ route('service') }}" id="menu-service" class="mdl-button mdl-js-button mdl-js-ripple-effect active">Our Service</a></li>
                        <li><a href="{{ route('doctors') }}" id="menu-doctor" class="mdl-button mdl-js-button mdl-js-ripple-effect">Doctors</a></li>
                        <li>
                            <a id="menu-pages" class="mdl-button mdl-js-button mdl-js-ripple-effect">Pages <i class="fa fa-chevron-down"></i></a>
                            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="menu-pages">
                                <li class="mdl-menu__item">
                                    <a href="{{ route('about') }}">About</a>
                                </li>
                                <li class="mdl-menu__item">
                                    <a href="{{ route('contact') }}">Contact</a>
                                </li>
                                {{--<li class="mdl-menu__item">--}}
                                    {{--<a href="{{ route('login') }}">Login</a>--}}
                                {{--</li>--}}
                                {{--<li class="mdl-menu__item">--}}
                                    {{--<a href="{{ route('registration') }}">Register</a>--}}
                                {{--</li>--}}
								<li class="mdl-menu__item">
									<a href="{{ route('gallery') }}">Gallery</a>
								</li>
                            </ul>
                        </li>
                        <li><a href="admin/index.php" id="menu-admin" class="text-success mdl-button mdl-js-button mdl-js-ripple-effect ">Admin Panel</a></li>
                        <li>
                            <a id="menu-profile" class="mdl-button mdl-js-button mdl-js-ripple-effect"><i class="fa fa-user-o color-white"> </i> Profile <i class="fa fa-chevron-down"></i></a>
                            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="menu-profile">
                                <li class="mdl-menu__item">
                                    <a href="{{ route('login') }}"><i class="fa fa-sign-in color-green"></i> Login</a>
                                </li>
                                <li class="mdl-menu__item">
                                    <a href="{{ route('registration') }}"><i class="fa fa-user-o color-green"></i> Register</a>
                                </li>
                                <li class="mdl-menu__item">
                                    <a href="{{ route('forget.pass') }}"><i class="fa fa-key color-green"></i> Forgot Password</a>
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
				<i class="fa fa-medkit"></i>
			</div>
			<div class="page-ttl-name">
				<h1>Services</h1>
				<p><a href="index2378.html?route=home">Home</a> > Service</p>
			</div>
		</div>
	</div>
</div><!-- End Page Title Section -->
<!-- Start Service List Section -->
<div class="layer-stretch animated-wrapper">
	<div class="layer-wrapper layer-bottom-0">
		<div class="row text-center">
			<div class="col-md-8">
				<div class="row">
										<div class="col-sm-6">
						<div class="theme-block animated animated-up">
		<div class="theme-block-picture">
		<img src="public/uploads/service-1.jpg" alt="Cardiovascular centre">
	</div>
	<div class="theme-block-data service-block-data">
		<div class="service-icon">
			<i class="fa fa-stethoscope"></i>
		</div>
		<h4><a>Cardiovascular centre</a></h4>
	</div>
	<div class="theme-block-hidden service-hidden-block">
		<i class="fa fa-stethoscope"></i>
		<h4>
			<a href="index426b.html?route=service&amp;id=1/Cardiovascular-centre">Cardiovascular centre</a>
		</h4>
		<p class="service-description paragraph-small paragraph-black">
			<span>When you're facing heart or vascular issues, the last thing on your mind should be how to navigate your care. Overlake's David and Shelley Hovind Heart &amp; Vascular Center brings cardiac and vascular services together in one location. Our new 19,200-square-foot facility features the most advanced cardiovascular equipment and technology available on the Eastside.</span>
			<a href="index426b.html?route=service&amp;id=1/Cardiovascular-centre">(Read More)</a>
		</p>
	</div>
</div>					</div>
										<div class="col-sm-6">
						<div class="theme-block animated animated-up">
		<div class="theme-block-picture">
		<img src="public/uploads/service-2.jpg" alt="Childbirth Center">
	</div>
	<div class="theme-block-data service-block-data">
		<div class="service-icon">
			<i class="fa fa-child"></i>
		</div>
		<h4><a>Childbirth Center</a></h4>
	</div>
	<div class="theme-block-hidden service-hidden-block">
		<i class="fa fa-stethoscope"></i>
		<h4>
			<a href="index3610.html?route=service&amp;id=2/Childbirth-Center">Childbirth Center</a>
		</h4>
		<p class="service-description paragraph-small paragraph-black">
			<span>We believe that childbirth is a natural event not a medical procedure and believe in women and their ability to birth their babies in a way that is right for them. Childbirth is a beautiful experience and we support and encourage our patients to enjoy their journey. To do this we build a supportive environment for both family members and birth workers to be their to support mothers and babies through this amazing event.</span>
			<a href="index3610.html?route=service&amp;id=2/Childbirth-Center">(Read More)</a>
		</p>
	</div>
</div>					</div>
										<div class="col-sm-6">
						<div class="theme-block animated animated-up">
		<div class="theme-block-picture">
		<img src="public/uploads/service-3.jpg" alt="Cardiology">
	</div>
	<div class="theme-block-data service-block-data">
		<div class="service-icon">
			<i class="fa fa-heartbeat"></i>
		</div>
		<h4><a>Cardiology</a></h4>
	</div>
	<div class="theme-block-hidden service-hidden-block">
		<i class="fa fa-stethoscope"></i>
		<h4>
			<a href="index7c9d.html?route=service&amp;id=3/Cardiology">Cardiology</a>
		</h4>
		<p class="service-description paragraph-small paragraph-black">
			<span>All cardiologists study the disorders of the heart, but the study of adult and child heart disorders are through different training pathways. Therefore, an adult cardiologist (often simply called &quot;cardiologist&quot;) is inadequately trained to take care of children, and pediatric cardiologists are inadequately trained to take care of adults. The surgical aspects are not included in cardiology and are in the domain of cardiothoracic surgery.</span>
			<a href="index7c9d.html?route=service&amp;id=3/Cardiology">(Read More)</a>
		</p>
	</div>
</div>					</div>
										<div class="col-sm-6">
						<div class="theme-block animated animated-up">
		<div class="theme-block-picture">
		<img src="public/uploads/service-4.jpg" alt="Skin Care">
	</div>
	<div class="theme-block-data service-block-data">
		<div class="service-icon">
			<i class="fa fa-wheelchair-alt"></i>
		</div>
		<h4><a>Skin Care</a></h4>
	</div>
	<div class="theme-block-hidden service-hidden-block">
		<i class="fa fa-stethoscope"></i>
		<h4>
			<a href="index923b.html?route=service&amp;id=4/Skin-Care">Skin Care</a>
		</h4>
		<p class="service-description paragraph-small paragraph-black">
			<span>The flawless, blemish and acne-free skin that you've always desired is no more a dream, but reality.Here are brilliant face care tips to get that glow you've always wanted. Browse through our beauty secrets, tackle your skincare issues and follow our tricks regularly to get beautiful skin naturally. </span>
			<a href="index923b.html?route=service&amp;id=4/Skin-Care">(Read More)</a>
		</p>
	</div>
</div>					</div>
										<div class="col-sm-6">
						<div class="theme-block animated animated-up">
		<div class="theme-block-picture">
		<img src="public/uploads/service-5.jpg" alt="Laboratory Services">
	</div>
	<div class="theme-block-data service-block-data">
		<div class="service-icon">
			<i class="fa fa-flask"></i>
		</div>
		<h4><a>Laboratory Services</a></h4>
	</div>
	<div class="theme-block-hidden service-hidden-block">
		<i class="fa fa-stethoscope"></i>
		<h4>
			<a href="index5737.html?route=service&amp;id=5/Laboratory-Services">Laboratory Services</a>
		</h4>
		<p class="service-description paragraph-small paragraph-black">
			<span>A laboratory is a facility that provides controlled conditions in which scientific or technological research, experiments, and measurement may be performed. Laboratories used for scientific research take many forms because of the differing requirements of specialists</span>
			<a href="index5737.html?route=service&amp;id=5/Laboratory-Services">(Read More)</a>
		</p>
	</div>
</div>					</div>
										<div class="col-sm-6">
						<div class="theme-block animated animated-up">
		<div class="theme-block-picture">
		<img src="public/uploads/service-6.jpg" alt="Mammography">
	</div>
	<div class="theme-block-data service-block-data">
		<div class="service-icon">
			<i class="fa fa-certificate"></i>
		</div>
		<h4><a>Mammography</a></h4>
	</div>
	<div class="theme-block-hidden service-hidden-block">
		<i class="fa fa-stethoscope"></i>
		<h4>
			<a href="indexe51c.html?route=service&amp;id=6/Mammography">Mammography</a>
		</h4>
		<p class="service-description paragraph-small paragraph-black">
			<span>Magnetic Resonance Imaging (MRI) is a medical imaging technique which produces detailed images of organs, soft tissues, bone and virtually all other internal body structures. MRI provides a stark contrast between the different soft tissues of the body making it especially useful in neurological (brain), musculoskeletal, cardiovascular</span>
			<a href="indexe51c.html?route=service&amp;id=6/Mammography">(Read More)</a>
		</p>
	</div>
</div>					</div>
										<div class="col-sm-6">
						<div class="theme-block animated animated-up">
		<div class="theme-block-picture">
		<img src="public/uploads/service-7.jpg" alt="Dermatologist">
	</div>
	<div class="theme-block-data service-block-data">
		<div class="service-icon">
			<i class="fa fa-h-square"></i>
		</div>
		<h4><a>Dermatologist</a></h4>
	</div>
	<div class="theme-block-hidden service-hidden-block">
		<i class="fa fa-stethoscope"></i>
		<h4>
			<a href="index6322.html?route=service&amp;id=9/Dermatologist">Dermatologist</a>
		</h4>
		<p class="service-description paragraph-small paragraph-black">
			<span>Dermatology is the branch of medicine dealing with the skin, nails, hair and its diseases. It is a specialty with both medical and surgical aspects. A dermatologist treats diseases, in the widest sense, and some cosmetic problems of the skin, scalp, hair, and nails.
Dermatologists have been leaders in the field of cosmetic surgery. Some dermatologists complete fellowships in surgical dermatology. Many are trained in their residency on the use of botulinum toxin, fillers, and laser surgery.</span>
			<a href="index6322.html?route=service&amp;id=9/Dermatologist">(Read More)</a>
		</p>
	</div>
</div>					</div>
										<div class="col-sm-6">
						<div class="theme-block animated animated-up">
		<div class="theme-block-picture">
		<img src="public/uploads/service-8.jpg" alt="Anesthesiology">
	</div>
	<div class="theme-block-data service-block-data">
		<div class="service-icon">
			<i class="fa fa-glass"></i>
		</div>
		<h4><a>Anesthesiology</a></h4>
	</div>
	<div class="theme-block-hidden service-hidden-block">
		<i class="fa fa-stethoscope"></i>
		<h4>
			<a href="indexacc2.html?route=service&amp;id=10/Anesthesiology">Anesthesiology</a>
		</h4>
		<p class="service-description paragraph-small paragraph-black">
			<span>Anesthesiology is the practice of medicine that uses specific drugs to render your entire body â€” or part of your body â€” insensitive to pain. Anesthesia will enable you to tolerate a surgical procedure comfortably, with minimal emotional stress. Based upon the type of surgery you are having, among other factors, there are different types of anesthesia.</span>
			<a href="indexacc2.html?route=service&amp;id=10/Anesthesiology">(Read More)</a>
		</p>
	</div>
</div>					</div>
										<div class="col-sm-6">
						<div class="theme-block animated animated-up">
		<div class="theme-block-picture">
		<img src="public/uploads/service-9.jpg" alt="Paediatrics">
	</div>
	<div class="theme-block-data service-block-data">
		<div class="service-icon">
			<i class="fa fa-stethoscope"></i>
		</div>
		<h4><a>Paediatrics</a></h4>
	</div>
	<div class="theme-block-hidden service-hidden-block">
		<i class="fa fa-stethoscope"></i>
		<h4>
			<a href="index7df0.html?route=service&amp;id=11/Paediatrics">Paediatrics</a>
		</h4>
		<p class="service-description paragraph-small paragraph-black">
			<span>Pediatric gastroenterology has grown greatly in North America and Europe. It began with the speciality of pediatrics, which was developed along with childrenâ€™s hospitals in the 19th century. The concept of specialists concentrating on organ specific specialties started around the same time.</span>
			<a href="index7df0.html?route=service&amp;id=11/Paediatrics">(Read More)</a>
		</p>
	</div>
</div>					</div>
										<div class="col-sm-6">
						<div class="theme-block animated animated-up">
		<div class="theme-block-picture">
		<img src="public/uploads/service-10.jpg" alt="Eye Care">
	</div>
	<div class="theme-block-data service-block-data">
		<div class="service-icon">
			<i class="fa fa-eye"></i>
		</div>
		<h4><a>Eye Care</a></h4>
	</div>
	<div class="theme-block-hidden service-hidden-block">
		<i class="fa fa-stethoscope"></i>
		<h4>
			<a href="index011b.html?route=service&amp;id=12/Eye-Care">Eye Care</a>
		</h4>
		<p class="service-description paragraph-small paragraph-black">
			<span>An eye care professional (ECP) is an individual who provides a service related to the eyes or vision. It is a general term that can refer to any healthcare worker involved in eye care, from one with a small amount of post-secondary training to practitioners with a doctoral level of education.</span>
			<a href="index011b.html?route=service&amp;id=12/Eye-Care">(Read More)</a>
		</p>
	</div>
</div>					</div>
										<div class="col-sm-6">
						<div class="theme-block animated animated-up">
		<div class="theme-block-picture">
		<img src="public/uploads/service-13.jpg" alt="Radiology Center">
	</div>
	<div class="theme-block-data service-block-data">
		<div class="service-icon">
			<i class="fa fa-bullhorn"></i>
		</div>
		<h4><a>Radiology Center</a></h4>
	</div>
	<div class="theme-block-hidden service-hidden-block">
		<i class="fa fa-stethoscope"></i>
		<h4>
			<a href="index9b9d.html?route=service&amp;id=13/Radiology-Center">Radiology Center</a>
		</h4>
		<p class="service-description paragraph-small paragraph-black">
			<span>Radiology is a specialty that uses medical imaging to diagnose and treat diseases seen within the body. A variety of imaging techniques such as X-ray radiography, ultrasound, computed tomography (CT), nuclear medicine including positron emission tomography (PET), and magnetic resonance imaging (MRI) are used to diagnose and/or treat diseases. Interventional radiology is the performance of (usually minimally invasive) medical procedures with the guidance of imaging technologies.</span>
			<a href="index9b9d.html?route=service&amp;id=13/Radiology-Center">(Read More)</a>
		</p>
	</div>
</div>
										</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="theme-material-card text-center">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input">
						<input class="mdl-textfield__input" type="text" id="search-services">
						<label class="mdl-textfield__label" for="search-services">Search Services by Name</label>
						<button class="fa fa-search search-button"></button>
					</div>
</div>
<div class="theme-material-card">
	<div class="sub-ttl">Our Team</div>
	<div class="flexslider theme-flexslider">
		<ul class="slides">
			<li>
				<div class="theme-flexslider-container">
					<img src="public/uploads/doctor-1.jpg" />
					<h4>Daniel Barnes</h4>
					<p>Orthologist</p>
				</div>
			</li>
			<li>
				<div class="theme-flexslider-container">
					<img src="public/uploads/doctor-2.jpg" />
					<h4>Melissa Bates</h4>
					<p>Gynocologist</p>
				</div>
			</li>
			<li>
				<div class="theme-flexslider-container">
					<img src="public/uploads/doctor-4.jpg" />
					<h4>Cheri Aria</h4>
					<p>Dermatologist</p>
				</div>
			</li>
			<li>
				<div class="theme-flexslider-container">
					<img src="public/uploads/doctor-3.jpg" />
					<h4>Steve Soeren</h4>
					<p>Orthologist</p>
				</div>
			</li>
			<li>
				<div class="theme-flexslider-container">
					<img src="public/uploads/doctor-6.jpg" />
					<h4>Theodore Bennett</h4>
					<p>Anesthesiologist</p>
				</div>
			</li>
			<li>
				<div class="theme-flexslider-container">
					<img src="public/uploads/doctor-8.jpg" />
					<h4>Barbara Baker</h4>
					<p>Surgeon</p>
				</div>
			</li>
		</ul>
	</div>
</div>
<div class="theme-material-card">
	<div class="sub-ttl">Recent Post</div>
			<a href="index4c29.html?route=blog-page&amp;id=13/Bladder-Weakness-%e2%80%93-What,-Why-and-Natural-Remedies" class="row blog-recent">
			<div class="col-4 blog-recent-img">
				<img class="img-responsive img-thumbnail" src="public/uploads/blog-2.jpg" alt="">
			</div>
			<div class="col-8 blog-recent-post">
				<h4>Bladder Weakness – What, Why and Natural Remedies</h4>
				<p>08 Oct 2017</p>
			</div>
		</a>
				<a href="indexcf96.html?route=blog-page&amp;id=12/Breast-Cancer-%e2%80%93-7-Tips-to-Avoid-This" class="row blog-recent">
			<div class="col-4 blog-recent-img">
				<img class="img-responsive img-thumbnail" src="public/uploads/blog-9.jpg" alt="">
			</div>
			<div class="col-8 blog-recent-post">
				<h4>Breast Cancer – 7 Tips to Avoid This</h4>
				<p>08 Oct 2017</p>
			</div>
		</a>
				<a href="index37df.html?route=blog-page&amp;id=11/Why-Food-Poisoning-happened-and-How-To-%e2%80%93-Home-Remedy" class="row blog-recent">
			<div class="col-4 blog-recent-img">
				<img class="img-responsive img-thumbnail" src="public/uploads/blog-1.jpg" alt="">
			</div>
			<div class="col-8 blog-recent-post">
				<h4>Why Food Poisoning happened and How To  – Home Remedy</h4>
				<p>08 Jun 2017</p>
			</div>
		</a>
				<a href="indexe990.html?route=blog-page&amp;id=10/All-you-need-to-know-about-Chinese-Food,-Is-it-good-or-bad?" class="row blog-recent">
			<div class="col-4 blog-recent-img">
				<img class="img-responsive img-thumbnail" src="public/uploads/blog-2.jpg" alt="">
			</div>
			<div class="col-8 blog-recent-post">
				<h4>All you need to know about Chinese Food, Is it good or bad?</h4>
				<p>05 Jun 2017</p>
			</div>
		</a>
				<a href="index039b.html?route=blog-page&amp;id=9/Keep-it-Clean:-Make-Sure-Your-Fruits-and-Veggies-Are-Safe-and-Healthy" class="row blog-recent">
			<div class="col-4 blog-recent-img">
				<img class="img-responsive img-thumbnail" src="public/uploads/blog-3.jpg" alt="">
			</div>
			<div class="col-8 blog-recent-post">
				<h4>Keep it Clean: Make Sure Your Fruits and Veggies Are Safe and Healthy</h4>
				<p>27 Apr 2017</p>
			</div>
		</a>


				</div>
			</div>
		</div>
	</div>
</div><!-- End Service List Section -->

<!-- Start Facility List Section -->
<div class="colored-background">
	<div class="layer-stretch">
		<div class="layer-wrapper layer-bottom-0 animated-wrapper">
			<div class="layer-ttl layer-ttl-white">
				<h3 class="animated animated-down">Why Choose Us</h3>
			</div>
			<div class="layer-container">
				<div class="feature-block animated animated-up">
					<div class="feature-icon">
						<i class="fa fa-phone"></i>
					</div>
					<span>Emergency Departments</span>
					<p class="paragraph-small paragraph-white">The emergency departments of our clinic operate 24 hours a day, although staffing levels may be varied in an attempt to reflect patient volume.</p>
				</div>
				<div class="feature-block animated animated-up">
					<div class="feature-icon">
						<i class="fa fa-calendar"></i>
					</div>
					<span>24 hour Service</span>
					<p class="paragraph-small paragraph-white">24-7 (usually spoken "twenty-four seven") is facility that is available any time and, usually, every day in our clinic health care center. we look after you every time.</p>
				</div>
				<div class="feature-block animated animated-up">
					<div class="feature-icon">
						<i class="fa fa-cloud"></i>
					</div>
					<span>Advanced Technology</span>
					<p class="paragraph-small paragraph-white">Medical technology, encompasses a wide range of healthcare products and is used to diagnose, monitor or treat diseases or medical conditions affecting humans.</p>
				</div>
				<div class="feature-block animated animated-up">
					<div class="feature-icon">
						<i class="fa fa-ambulance"></i>
					</div>
					<span>Ambulance</span>
					<p class="paragraph-small paragraph-white">An ambulance is a vehicle for transportation of sick or injured people to, from or between places of treatment for an illness or injury.</p>
				</div>
				<div class="feature-block animated animated-up">
					<div class="feature-icon">
						<i class="fa fa-stethoscope"></i>
					</div>
					<span>Primary health care</span>
					<p class="paragraph-small paragraph-white">Healthcare centres, including clinics, doctor's offices, urgent care centers and ambulatory surgery centers, serve as first point of contact with a health professional.</p>
				</div>
				<div class="feature-block animated animated-up">
					<div class="feature-icon">
						<i class="fa fa-shopping-bag"></i>
					</div>
					<span>Pharmacies and drug stores</span>
					<p class="paragraph-small paragraph-white">Pharmacies and drug stores comprise establishments engaged in retailing prescription or nonprescription drugs and medicines, and other types of goods.</p>
				</div>
				<div class="feature-block animated animated-up">
					<div class="feature-icon">
						<i class="fa fa-hospital-o"></i>
					</div>
					<span>Laboratory and research</span>
					<p class="paragraph-small paragraph-white">A medical laboratory or clinical laboratory is a laboratory where tests are done on biological specimens in order to get information about the health of a patient.</p>
				</div>
				<div class="feature-block animated animated-up">
					<div class="feature-icon">
						<i class="fa fa-user-md"></i>
					</div>
					<span>Medical nursing home</span>
					<p class="paragraph-small paragraph-white">Medical nursing homes, including residential treatment centers and geriatric care facilities, are health care institutions which have accommodation facilities.</p>
				</div>
			</div>
		</div>
	</div>
</div><!-- End Facility List Section -->

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
									<option value="">

									</option>
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
	<!-- Start of Time Table Section -->
	<div id="tt" class="animated-wrapper">
		<div class="layer-stretch">
			<div class="layer-wrapper">
				<div class="layer-ttl">
					<h3 class="animated animated-down">Our Time Table</h3>
				</div>
				<div class="layer-container">
										<div class="tt-block animated animated-up">
						<p><i class="fa fa-calendar"></i><a>Sun</a></p>
						<p>
							<i class="fa fa-hourglass-1"></i><a>09:00 AM - 01:00 PM</a>
						</p>
						<p>
							<button class="mdl-button mdl-js-button mdl-js-ripple-effect">Make An Appointment</button>
						</p>
					</div>
										<div class="tt-block animated animated-up">
						<p><i class="fa fa-calendar"></i><a>Mon</a></p>
						<p>
							<i class="fa fa-hourglass-1"></i><a>09:00 AM - 05:00 PM</a>
						</p>
						<p>
							<button class="mdl-button mdl-js-button mdl-js-ripple-effect">Make An Appointment</button>
						</p>
					</div>
										<div class="tt-block animated animated-up">
						<p><i class="fa fa-calendar"></i><a>Tue</a></p>
						<p>
							<i class="fa fa-hourglass-1"></i><a>09:00 AM - 05:00 PM</a>
						</p>
						<p>
							<button class="mdl-button mdl-js-button mdl-js-ripple-effect">Make An Appointment</button>
						</p>
					</div>
										<div class="tt-block animated animated-up">
						<p><i class="fa fa-calendar"></i><a>Wed</a></p>
						<p>
							<i class="fa fa-hourglass-1"></i><a>09:00 AM - 05:00 PM</a>
						</p>
						<p>
							<button class="mdl-button mdl-js-button mdl-js-ripple-effect">Make An Appointment</button>
						</p>
					</div>
										<div class="tt-block animated animated-up">
						<p><i class="fa fa-calendar"></i><a>Thu</a></p>
						<p>
							<i class="fa fa-hourglass-1"></i><a>09:00 AM - 05:00 PM</a>
						</p>
						<p>
							<button class="mdl-button mdl-js-button mdl-js-ripple-effect">Make An Appointment</button>
						</p>
					</div>
										<div class="tt-block animated animated-up">
						<p><i class="fa fa-calendar"></i><a>Fri</a></p>
						<p>
							<i class="fa fa-hourglass-1"></i><a>09:00 AM - 05:00 PM</a>
						</p>
						<p>
							<button class="mdl-button mdl-js-button mdl-js-ripple-effect">Make An Appointment</button>
						</p>
					</div>
										<div class="tt-block animated animated-up">
						<p><i class="fa fa-calendar"></i><a>Sat</a></p>
						<p>
							<i class="fa fa-hourglass-1"></i><a>09:00 AM - 05:00 PM</a>
						</p>
						<p>
							<button class="mdl-button mdl-js-button mdl-js-ripple-effect">Make An Appointment</button>
						</p>
					</div>
									</div>
			</div>
		</div>
	</div><!-- End of Time Table Section -->




@endsection