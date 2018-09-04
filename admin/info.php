<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Klinikal Admin Panel</title>
    <link rel="icon" type="image/x-icon" href="public/images/favicon.png">
    <!-- <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:400,600"> -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet">
    <!-- Incclude css files -->
    <link rel="stylesheet" href="public/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
    <link rel="stylesheet" href="public/css/fullcalendar.min.css" />
    <link rel="stylesheet" href="public/css/jquery-ui.min.css" />
    <link rel="stylesheet" href="public/css/bootstrap.min.css" />
    <link rel="stylesheet" href="public/css/datatables.min.css">
    <link rel="stylesheet" href="public/css/dropzone.min.css">
    <link rel="stylesheet" href="public/css/style.css" />
    <!-- Include js files -->
    <script type="text/javascript" src="public/js/moment.min.js"></script>
    <script type="text/javascript" src="public/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="public/js/popper.min.js"></script>
    <script type="text/javascript" src="public/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="public/js/jquery-ui.multidatespicker.min.js" /></script>
    <script type="text/javascript" src="public/js/datatables.min.js"></script>
    <script type="text/javascript" src="public/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="public/js/fullcalendar.min.js"></script>
    <script type="text/javascript" src="public/js/Chart.min.js"></script>
    <script type="text/javascript" src="public/js/dropzone.min.js"></script>
    <script type="text/javascript" src="public/js/jquery-scrolltofixed.min.js" /></script>
    <script type="text/javascript" src="public/js/admin.js"></script>
</head>
<body>
    <!-- Media Modal -->
    <div id="media-upload" class="modal" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="media-hdr">
                        <p>Media <span>(Click On Image To Select)</span></p>
                    </div>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="media-upload-container">
                        <form action="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=upload" class="dropzone" id="media-dropzone" method="post" enctype="multipart/form-data">
                            <div class="fallback">
                                <input name="file" type="file" />
                            </div>
                        </form>
                    </div>
                    <div class="media-all">
                                                <input type="hidden" name="media_all" value="[&quot;testimonial-5.jpg&quot;,&quot;testimonial-4.jpg&quot;,&quot;testimonial-3.jpg&quot;,&quot;testimonial-2.jpg&quot;,&quot;testimonial-1.jpg&quot;,&quot;slider-7.jpg&quot;,&quot;slider-6.jpg&quot;,&quot;slider-5.jpg&quot;,&quot;slider-4.jpg&quot;,&quot;slider-3.jpg&quot;,&quot;slider-2.jpg&quot;,&quot;slider-1.jpg&quot;,&quot;slide-doctor-8.jpg&quot;,&quot;slide-doctor-7.jpg&quot;,&quot;slide-doctor-6.jpg&quot;,&quot;slide-doctor-5.jpg&quot;,&quot;slide-doctor-4.jpg&quot;,&quot;slide-doctor-3.jpg&quot;,&quot;slide-doctor-2.jpg&quot;,&quot;slide-doctor-1.jpg&quot;,&quot;service.jpg&quot;,&quot;service-9.jpg&quot;,&quot;service-8.jpg&quot;,&quot;service-7.jpg&quot;,&quot;service-6.jpg&quot;,&quot;service-5.jpg&quot;,&quot;service-4.jpg&quot;,&quot;service-3.jpg&quot;,&quot;service-2.jpg&quot;,&quot;service-14.jpg&quot;,&quot;service-13.jpg&quot;,&quot;service-12.jpg&quot;,&quot;service-11.jpg&quot;,&quot;service-10.jpg&quot;,&quot;service-1.jpg&quot;,&quot;recent-5.jpg&quot;,&quot;recent-4.jpg&quot;,&quot;recent-3.jpg&quot;,&quot;recent-2.jpg&quot;,&quot;recent-1.jpg&quot;,&quot;logo-purple.png&quot;,&quot;logo-orange.png&quot;,&quot;logo-green.png&quot;,&quot;logo-blue.png&quot;,&quot;hm-service.jpg&quot;,&quot;hm-about.jpg&quot;,&quot;hm-about-1.jpg&quot;,&quot;feature-6.jpg&quot;,&quot;feature-5.jpg&quot;,&quot;feature-4.jpg&quot;,&quot;feature-3.jpg&quot;,&quot;feature-2.jpg&quot;,&quot;feature-1.jpg&quot;,&quot;favicon-purple-32x32.png&quot;,&quot;favicon-orange-32x32.png&quot;,&quot;favicon-green-32x32.png&quot;,&quot;favicon-blue-32x32.png&quot;,&quot;event-1.jpg&quot;,&quot;doctor-male.png&quot;,&quot;doctor-female.png&quot;,&quot;doctor-9.jpg&quot;,&quot;doctor-8.jpg&quot;,&quot;doctor-7.jpg&quot;,&quot;doctor-6.jpg&quot;,&quot;doctor-5.jpg&quot;,&quot;doctor-4.jpg&quot;,&quot;doctor-3.jpg&quot;,&quot;doctor-2.jpg&quot;,&quot;doctor-12.jpg&quot;,&quot;doctor-11.jpg&quot;,&quot;doctor-10.jpg&quot;,&quot;doctor-1.jpg&quot;,&quot;comment-6.jpg&quot;,&quot;comment-5.jpg&quot;,&quot;comment-4.jpg&quot;,&quot;comment-3.jpg&quot;,&quot;comment-2.jpg&quot;,&quot;comment-1.jpg&quot;,&quot;blog-9.jpg&quot;,&quot;blog-8.jpg&quot;,&quot;blog-7.jpg&quot;,&quot;blog-6.jpg&quot;,&quot;blog-5.jpg&quot;,&quot;blog-4.jpg&quot;,&quot;blog-3.jpg&quot;,&quot;blog-2.jpg&quot;,&quot;blog-11.jpg&quot;,&quot;blog-10.jpg&quot;,&quot;blog-1.jpg&quot;,&quot;author-2.jpg&quot;,&quot;author-1.jpg&quot;,&quot;800x800-gallery.jpg&quot;,&quot;660x750.jpg&quot;,&quot;645x405.jpg&quot;,&quot;645x405-about.jpg&quot;,&quot;620x680.jpg&quot;,&quot;620x680-service.jpg&quot;,&quot;585x390.jpg&quot;,&quot;530x470.jpg&quot;,&quot;530x470-theme-block.jpg&quot;,&quot;513x150-feature.jpg&quot;,&quot;495x420.jpg&quot;,&quot;375x360-doctorslider.jpg&quot;,&quot;225x200-author.jpg&quot;,&quot;200x200.jpg&quot;,&quot;200x200-testimonial.jpg&quot;,&quot;1920x800.jpg&quot;,&quot;1920x800-slider.jpg&quot;,&quot;130x115-recentpost.jpg&quot;,&quot;130x115-comment.jpg&quot;]">
                        <input type="hidden" name="absolute-path" value="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=">
                        <input type="hidden" name="absolute-upload-path" value="http://pepdev.com/theme-preview/klinikal/public/uploads/">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Container -->
    <div id="main-wrapper">
        <!-- Menu Wrapper -->
        <div id="menu-wrapper">
            <div id="menu-menu">
                <div id="logo">
                    <div class="tbl-cell logo-icon">
                        <a href="#"><img src="public/images/icon.png" alt=""></a>
                    </div>
                    <div class="tbl-cell">
                        <a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=dashboard"><img src="public/images/logo.png"></a>
                    </div>
                </div>
                <div class="menu-user">
                    <div class="menu-user-icon"><i class="fa fa-user-circle"></i></div>
                    <div class="menu-user-info">
                        <p>Pep dev</p>
                        <p>Dean</p>
                        <div class="menu-user-dropdown">
                            <i class="fa fa-angle-double-down fa-2x" id="menu-user-drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"></i>
                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="menu-user-drop">
                                <li><a href="http://pepdev.com/theme-preview/klinikal/" target="_blank"><i class="icon-link"></i> Visit Website</a></li>
                                <li><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=profile"><i class="icon-user"></i> Profile</a></li>
                                <li><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=logout"><i class="icon-logout"></i> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul>
                    <li id="dashboard-li"><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=dashboard"><i class="icon-screen-desktop"></i><span>Dashboard</span></a></li>
                    <li id="patient-li">
                        <a class="menu-dropdown active-danger">
                            <i class="icon-organization"></i><span>Patients</span><i class="fa fa-angle-down"></i>
                        </a>
                        <ul id="patient" class="sub-menu">
                            <li>
                                <a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=patient">
                                    <i class="icon-people"></i><span>Patients</span>
                                </a>
                            </li>
                            <li id="appointment">
                                <a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=appointment">
                                    <i class="icon-user-follow"></i><span>Appointments</span>
                                </a>
                            </li>
                            <li id="invoice">
                                <a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=invoice">
                                    <i class="icon-wallet"></i><span>Invoices</span>
                                </a>
                            </li>
                            <li>
                                <a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=request">
                                    <i class="icon-envelope-open"></i><span>Requests</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li id="themeoption-li">
                        <a class="menu-dropdown"><i class="icon-cloud-upload"></i><span>Theme Options</span><i class="fa fa-angle-down"></i></a>
                        <ul id="themeoption" class="sub-menu">
                            <li id="info">
                                <a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=info">
                                    <i class="icon-info"></i><span>Clinic Info</span>
                                </a>
                            </li>
                            <li id="department">
                                <a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=themeoption/department">
                                    <i class="icon-layers"></i><span>Departments</span>
                                </a>
                            </li>
                            <li id="doctor">
                                <a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=themeoption/doctor">
                                    <i class="fa fa-user-md"></i><span>Doctors</span>
                                </a>
                            </li>
                            <li id="facility">
                                <a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=themeoption/facility">
                                    <i class="icon-shield"></i><span>Facilities</span>
                                </a>
                            </li>
                            <li id="service">
                                <a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=themeoption/service">
                                    <i class="icon-briefcase"></i><span>Services</span>
                                </a>
                            </li>
                            <li id="testimonial">
                                <a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=themeoption/testimonial">
                                    <i class="fa fa-quote-left"></i><span>Testimonials</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li id="page-li">
                        <a class="menu-dropdown"><i class="icon-globe-alt"></i><span>Website</span><i class="fa fa-angle-down"></i></a>
                        <ul id="page" class="sub-menu">
                            <li id="menu_page">
                                <a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=page/header"><i class="icon-menu"></i><span>Header</span></a>
                            </li>
                            <li id="home_page">
                                <a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=page/home"><i class="icon-home"></i><span>Home page</span></a>
                            </li>
                            <li id="service_page">
                                <a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=page/service"><i class="icon-briefcase"></i><span>Service Page</span></a>
                            </li>
                            <li id="doctor_page">
                                <a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=page/doctor"><i class="fa fa-user-md"></i><span>Doctor Page</span></a>
                            </li>
                            <li id="blog_page">
                                <a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=page/blog"><i class="icon-speech"></i><span>Blog Page</span></a>
                            </li>
                            <li id="gallery_page">
                                <a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=page/gallery"><i class="icon-picture"></i><span>Gallery Page</span></a>
                            </li>
                            <li id="about_page">
                                <a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=page/about"><i class="icon-info"></i><span>About Page</span></a>
                            </li>
                            <li id="contact_page">
                                <a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=page/contact"><i class="icon-envelope"></i><span>Contact Page</span></a>
                            </li>
                            <li id="privacy_page">
                                <a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=page/privacy"><i class="icon-lock-open"></i><span>Privacy policy</span></a>
                            </li>
                            <li id="terms_page">
                                <a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=page/terms"><i class="icon-eye"></i><span>T &#38; C Page</span></a>
                            </li>
                            <li id="faq_page">
                                <a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=page/faq"><i class="icon-question"></i><span>Faq</span></a>
                            </li>
                            <li id="footer_page">
                                <a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=page/footer"><i class="fa fa-copyright"></i><span>Footer</span></a>
                            </li>
                        </ul>
                    </li>
                    <li id="blog-li">
                        <a class="menu-dropdown"><i class="icon-speech"></i><span>Blog</span><i class="fa fa-angle-down"></i></a>
                        <ul id="blog" class="sub-menu">
                            <li>
                                <a class="menu-dropdown" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=blog"><i class="icon-list"></i><span>Blog List</span></a>
                            </li>
                            <li>
                                <a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=category"><i class="icon-folder-alt"></i><span>Category</span></a>
                            </li>
                            <li>
                                <a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=comment"><i class="icon-bubbles"></i><span>Comments</span></a>
                            </li>
                        </ul>
                    </li>
                    <li id="pharmacy-li">
                        <a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=pharmacy"><i class="icon-basket-loaded"></i><span>Pharmacy</span></a>
                    </li>
                    <li id="review-li">
                        <a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=review"><i class="icon-star"></i><span>Review</span></a>
                    </li>
                    <li id="user-li">
                        <a class="menu-dropdown"><i class="icon-people"></i><span>Users</span><i class="fa fa-angle-down"></i></a>
                        <ul id="user" class="sub-menu">
                            <li>
                                <a class="menu-dropdown" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=user"><i class="icon-people"></i><span>Users</span></a>
                            </li>
                            <li>
                                <a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=subscriber"><i class="icon-user-following"></i><span>Subscribers</span></a>
                            </li>
                        </ul>
                    </li>
                    <li id="setting-li">
                        <a class="menu-dropdown"><i class="icon-settings"></i><span>Settings</span><i class="fa fa-angle-down"></i></a>
                        <ul id="setting" class="sub-menu">
                            <li>
                                <a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=setting/generalsetting"><i class="icon-settings"></i><span>General Setting</span></a>
                            </li>
                            <li>
                                <a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=tax"><i class="icon-settings"></i><span>Finance Setting</span></a>
                            </li>
                            <li>
                                <a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=setting/analytics"><i class="icon-settings"></i><span>Google Analytics</span></a>
                            </li>
                            <li>
                                <a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=setting/customcss"><i class="fa fa-css3"></i><span>Custom Css</span></a>
                            </li>
                            <li>
                                <a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=icon"><i class="icon-flag"></i><span>Icon Set</span></a>
                            </li>
                            <li>
                                <a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=errorlog"><i class="icon-exclamation"></i><span>Error Log</span></a>
                            </li>
                            <li>
                                <a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=permission"><i class="icon-bell"></i><span>Permission</span></a>
                            </li>
                        </ul>
                    </li>  
                </ul>
            </div>
        </div>
        <div class="page-container"><script>
	$('#themeoption').show();
	$('#themeoption-li>a').addClass('active');</script>
</script>
<form action="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=info/action" method="post" enctype="multipart/form-data">
	<div class="page-hdr">
		<div class="row">	
			<div class="col-8 page-name">
				<h1><i class="fa fa-info-circle"></i>Clinic Info</h1>
			</div>
			<div class="col-4 pull-right page-menu">
				<button type="submit" name="submit" data-toggle="tooltip" data-placement="left" title="Save Page"><i class="fa fa-floppy-o"></i></button>
			</div>
		</div>
	</div>
		<div class="content">
		<input type="hidden" name="_token" value="413ccea5ca6b8ce59e0da0d74a15110a305317f742542dcc5f09cc85ddf4f25288776a66377494dbf3154612b21c29b49cdcd6ee235b8ea2b77355d52eef0188">
		<div class="row">
			<div class="col-sm-6">
				<div class="content-block content-block-horizantal">
					<div class="content-block-ttl">Theme details</div>
					<div class="content-block-main">
						<div class="row content-input">
							<div class="col-sm-6">
								<label><text>*</text>Site Url : </label>
								<input type="url" class="input-text" name="url" value="http://www.pepdev.com/theme-preview/klinikal" placeholder="Your website URL" required>
								<p class="content-input-error-name">Please enter Url!</p>
							</div>
							<div class="col-sm-6">
								<label><text>*</text>Site Mode : </label>
								<select name="mode" id="" class="select-list">
									<option value="1" selected >Live</option>
									<option value="2" >Comming Soon</option>
									<option value="3" >Maintenance mode</option>
								</select>
							</div>
						</div>
						<div class="content-input">
							<label>Theme Color</label>
							<div class="theme-color">
								<div>
									<input type="radio" name="theme-color" value="blue" id="blue" checked>
									<label for="blue"><i class="fa fa-check-square-o"></i></label>
								</div>
								<div>
									<input type="radio" name="theme-color" value="green" id="green" >
									<label for="green"><i class="fa fa-check-square-o"></i></label>
								</div>
								<div>
									<input type="radio" name="theme-color" value="orange" id="orange" >
									<label for="orange"><i class="fa fa-check-square-o"></i></label>
								</div>
								<div>
									<input type="radio" name="theme-color" value="purple" id="purple" >
									<label for="purple"><i class="fa fa-check-square-o"></i></label>
								</div>
							</div>
						</div>
						<div class="row content-input">
							<div class="col-sm-6">
								<label><text>*</text>Clinic Logo : </label>
								<div class="image-upload"  style="display: none"  >
									<a>Upload</a>
								</div>
								<div class="saved-picture"  >
																		<img class="img-thumbnail" src="../public/uploads/logo-blue.png" alt="">
																		<input type="hidden" name="logo" value="logo-blue.png">
								</div>
								<div class="saved-picture-delete" data-toggle="tooltip" data-placement="right" title="Remove"  >
									<a class="fa fa-times"></a>
								</div>
							</div>
							<div class="col-sm-6">
								<label><text>*</text>Clinic favicon : </label>
								<div class="image-upload"  style="display: none"  >
									<a>Upload</a>
								</div>
								<div class="saved-picture"  >
																		<img class="img-thumbnail" src="../public/uploads/favicon-blue-32x32.png" alt="">
																		<input type="hidden" name="favicon" value="favicon-blue-32x32.png">
								</div>
								<div class="saved-picture-delete" data-toggle="tooltip" data-placement="right" title="Remove"  >
									<a class="fa fa-times"></a>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="content-block content-block-horizantal">
					<div class="content-block-ttl">Basic details</div>
					<div class="content-block-main">
						<div class="row content-input">
							<div class="col-sm-6">
								<label><text>*</text>Clinic Name : </label>
								<input type="text" class="input-text" name="name" value="Klinikal Health care" placeholder="Clinic Name" required>
								<p class="content-input-error-name">Please enter clinic name!</p>
							</div>
							<div class="col-sm-6">
								<label><text>*</text>Clinic Email : </label>
								<input type="email" class="input-email" name="email" value="support@pepdev.com" placeholder="Clinic Email Address" required>
								<p class="content-input-error-name">Please enter email address!</p>
							</div>
						</div>
						<div class="row content-input">
							<div class="col-sm-6 ">
								<label><text>*</text>Phone Number : </label>
								<input type="text" class="input-text" name="mobile" value="11122333333" placeholder="Clinic Phone Number" required>
								<p class="content-input-error-name">Please enter clinic phone number!</p>
							</div>
							<div class="col-sm-6">
								<label><text>*</text>Emergency Number : </label>
								<input type="text" class="input-text" name="emergency" value="1800000000" placeholder="Emergency Number" required>
								<p class="content-input-error-name">Please enter clinic emergency phone number!</p>
							</div>
						</div>
						<div class="row content-input">
							<div class="col-sm-6">
								<label><text>*</text>Address : </label>
								<textarea name="address" class="textarea-input" placeholder="Clinic Address" required>Your office, Building Name
Street name, Area
City, Country Pin Code</textarea>
								<p class="content-input-error-name">Please enter clinic address!</p>
							</div>
							<div class="col-sm-6">
								<label><text>*</text>Currency Code : </label>
								<input type="text" class="input-text" name="currency" value="USD" placeholder="Currency Code" required>
								<p class="content-input-error-name">Please enter currency code</p>
								<div class="content-description">Like USD for USA. You can find a full list of ISO currency codes and settings <a href="http://www.xe.com/iso4217.php" target="_blank">here</a></div>
							</div>
						</div>
						<div class="row content-input">
							<div class="col-sm-12">
							<label>Language : </label>
								<select name="language" class="select-list">
									<option value="eng" >English</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clear clearfix"></div>
			<div class="col-sm-6">
				<div class="content-block content-block-horizantal">
					<div class="content-block-ttl">Social Link</div>
					<div class="content-block-main">
						<div class="content-input content-link">
							<label>Facebook <i class="fa fa-facebook"></i> : </label>
							<input type="url" name="facebook" value="https://www.facebook.com/pepdevofficial" placeholder="Facebook Link">
						</div>
						<div class="content-input content-link">
							<label>Twitter <i class="fa fa-twitter"></i> : </label>
							<input type="url" name="twitter" value="https://twitter.com/pepdevofficial" placeholder="Twitter Link">
						</div>
						<div class="content-input content-link">
							<label>Google + <i class="fa fa-google"></i> : </label>
							<input type="url" name="google" value="https://plus.google.com/110823961031348424693" placeholder="Google plus Link">
						</div>
						<div class="content-input content-link">
							<label>Instagram <i class="fa fa-instagram"></i> : </label>
							<input type="url" name="instagram" value="https://www.instagram.com/pepdevofficial/" placeholder="Instagram Link">
						</div>
						<div class="content-input content-link">
							<label>Youtube <i class="fa fa-youtube"></i> : </label>
							<input type="url" name="youtube" value="https://www.youtube.com/channel/UCRuPHwjNznZilEvlGIr1Y1Q" placeholder="Youtube Link">
						</div>
						<div class="content-input content-link">
							<label>Linkedin <i class="fa fa-linkedin"></i> : </label>
							<input type="url" name="linkedin" value="https://www.linkedin.com/" placeholder="Linkedin Link">
						</div>
						<div class="content-input content-link">
							<label>Flickr <i class="fa fa-flickr"></i> : </label>
							<input type="url" name="flickr" value="https://www.flickr.com/" placeholder="Flickr Link">
						</div>
						<div class="content-input content-link">
							<label>Rss <i class="fa fa-rss"></i> : </label>
							<input type="url" name="rss" value="https://www.rss.com/" placeholder="Feed Rss Link">
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="content-block content-block-horizantal">
					<div class="content-block-ttl">Time Table</div>
					<div class="content-block-main">
						<div class="content-input">
							<label>Sunday Time : </label>
							<input type="text" class="input-text" name="sun" value="09:00 AM - 01:00 PM" placeholder="Sunday Timing" required>
							<p class="content-input-error-name">Please enter sunday time table!</p>
						</div>
						<div class="content-input">
							<label>Monday Time : </label>
							<input type="text" class="input-text" name="mon" value="09:00 AM - 05:00 PM" placeholder="Monday Timing" required>
							<p class="content-input-error-name">Please enter monday time table!</p>
						</div>
						<div class="content-input">
							<label>Tuesday Time : </label>
							<input type="text" class="input-text" name="tue" value="09:00 AM - 05:00 PM" placeholder="Tuesday Timing" required>
							<p class="content-input-error-name">Please enter tuesday time table!</p>
						</div>
						<div class="content-input">
							<label>Wednesday Time : </label>
							<input type="text" class="input-text" name="wed" value="09:00 AM - 05:00 PM" placeholder="Wednesday Timing" required>
							<p class="content-input-error-name">Please enter wednesday time table!</p>
						</div>
						<div class="content-input">
							<label>Thursday Time : </label>
							<input type="text" class="input-text" name="thu" value="09:00 AM - 05:00 PM" placeholder="Thursday Timing" required>
							<p class="content-input-error-name">Please enter thursday time table!</p>
						</div>
						<div class="content-input">
							<label>Friday Time : </label>
							<input type="text" class="input-text" name="fri" value="09:00 AM - 05:00 PM" placeholder="Friday Timing" required>
							<p class="content-input-error-name">Please enter friday time table!</p>
						</div>
						<div class="content-input">
							<label>Saturday Time : </label>
							<input type="text" class="input-text" name="sat" value="09:00 AM - 05:00 PM" placeholder="Saturday Timing" required>
							<p class="content-input-error-name">Please enter saturday time table!</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="content-submit text-center">
			<button type="submit" name="submit" class="btn btn-primary">Save</button>
		</div>
	</div>
</form>
<!-- Footer -->

<script>  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-93901876-1', 'auto');
  ga('send', 'pageview');</script>


</div>

<script type="text/javascript">
var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq || 
{widgetcode:"b0707d67168a123a4b74ffaaa713d80d766a387e66055ee6c3b075720a1e3e1b", values:{},ready:function(){}};
var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;
s.src="https://salesiq.zoho.com/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);d.write("<div id='zsiqwidget'></div>");
</script>
		
</div>
	</div>
</body>
</html>