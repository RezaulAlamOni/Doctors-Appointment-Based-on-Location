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
	$('#page').show();
	$('#page-li>a').addClass('active');</script>
</script>
<!-- Home page start -->

<form action="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=page/action" method="post" enctype="multipart/form-data">
	<div class="page-hdr">
		<div class="row">
			<div class="col-8 page-name">
				<h1><i class="fa fa-home"></i>Home Page</h1>
			</div>
			<div class="col-4 page-menu">
				<button type="submit" name="submit" data-toggle="tooltip" data-placement="left" title="Save Page"><i class="fa fa-floppy-o"></i></button>
			</div>
		</div>
	</div>
		<div class="content">
		<div class="row">
			<div class="col-sm-8">
				<div class="content-block content-block-horizantal">
					<div class="content-block-ttl">Slider Section</div>
					<div class="content-block-main">
						<input type="hidden" name="_token" value="413ccea5ca6b8ce59e0da0d74a15110a305317f742542dcc5f09cc85ddf4f25288776a66377494dbf3154612b21c29b49cdcd6ee235b8ea2b77355d52eef0188">
												<div class="content-input">
							<label>Slide 1 Picture : </label>
							<div class="image-upload"  style="display: none"  >
								<a>Upload</a>
							</div>
							<div class="saved-picture"  >
																<img class="img-thumbnail" src="../public/uploads/slider-1.jpg" alt="">
																<input type="hidden" name="page[slider][0][img]" value="slider-1.jpg">
							</div>
							<div class="saved-picture-delete" data-toggle="tooltip" data-placement="right" title="Remove"  >
								<a class="fa fa-times"></a>
							</div>
							<div class="content-description">(Size: 1920px x 800px)</div>
						</div>
						<div class="content-input">
							<label>Slide 1 tag line : </label>
							<input type="text" name="page[slider][0][tag]" value="Appointment and Patient Data Management" placeholder="Slide Tag Line">
						</div>
						<div class="content-input">
							<label>Slide 1 content : </label>
							<input type="text" name="page[slider][0][content]" value="We have created 30+ Pages, 70+ Components or Shortcodes, Popup for this template and more in future. #twitterhash, @facebooktag" placeholder="Slide content">
						</div>
												<div class="content-input">
							<label>Slide 2 Picture : </label>
							<div class="image-upload"  style="display: none"  >
								<a>Upload</a>
							</div>
							<div class="saved-picture"  >
																<img class="img-thumbnail" src="../public/uploads/slider-2.jpg" alt="">
																<input type="hidden" name="page[slider][1][img]" value="slider-2.jpg">
							</div>
							<div class="saved-picture-delete" data-toggle="tooltip" data-placement="right" title="Remove"  >
								<a class="fa fa-times"></a>
							</div>
							<div class="content-description">(Size: 1920px x 800px)</div>
						</div>
						<div class="content-input">
							<label>Slide 2 tag line : </label>
							<input type="text" name="page[slider][1][tag]" value="A Complete Solution for Clinic Managment" placeholder="Slide Tag Line">
						</div>
						<div class="content-input">
							<label>Slide 2 content : </label>
							<input type="text" name="page[slider][1][content]" value="This is tag line ipsum dolor sit amet, consectetur Nihil cupiditate. mollitia maiores elit#twitterhash, @facebooktag" placeholder="Slide content">
						</div>
												<div class="content-input">
							<label>Slide 3 Picture : </label>
							<div class="image-upload"  style="display: none"  >
								<a>Upload</a>
							</div>
							<div class="saved-picture"  >
																<img class="img-thumbnail" src="../public/uploads/slider-3.jpg" alt="">
																<input type="hidden" name="page[slider][2][img]" value="slider-3.jpg">
							</div>
							<div class="saved-picture-delete" data-toggle="tooltip" data-placement="right" title="Remove"  >
								<a class="fa fa-times"></a>
							</div>
							<div class="content-description">(Size: 1920px x 800px)</div>
						</div>
						<div class="content-input">
							<label>Slide 3 tag line : </label>
							<input type="text" name="page[slider][2][tag]" value="24/7 Support Services " placeholder="Slide Tag Line">
						</div>
						<div class="content-input">
							<label>Slide 3 content : </label>
							<input type="text" name="page[slider][2][content]" value="Do not hesitate to contact us on our dedicated support forum. mollitia maiores temp fugit! consectetur adipisicing elit #twitterhash, @facebooktag" placeholder="Slide content">
						</div>
											</div>
				</div>
				<div class="content-block content-block-horizantal">
					<div class="content-block-ttl">Service Section (What We Do)</div>
					<div class="content-block-main">
						<div class="content-input">
							<label>Section Title : </label>
							<input type="text" name="page[service][title]" value="WHAT WE DO" placeholder="Service Section Name">
						</div>
						<div class="content-input">
							<label>Section Picture : </label>
							<div class="image-upload"  style="display: none"  >
								<a>Upload</a>
							</div>
							<div class="saved-picture"  >
																<img class="img-thumbnail" src="../public/uploads/hm-service.jpg" alt="">
																<input type="hidden" name="page[service][picture]" value="hm-service.jpg">
							</div>
							<div class="saved-picture-delete" data-toggle="tooltip" data-placement="right" title="Remove"  >
								<a class="fa fa-times"></a>
							</div>
							<div class="content-description">(Size: 620px x 680px)</div>
						</div>
						<div class="content-input">
							<label>Section Description : </label>
							<textarea name="page[service][description]" class="textarea-input" placeholder="Service Section About">Klinikal is a web application that our team has created for small and medium scale clinical enterprises. In this a clinic can post their data and host a website in an organised way.This application provides a customizing interface solution for appointment making according to clinic specific requirement and also handle patient visiting history and invoices</textarea>
						</div>
						<div class="content-input">
							<label>Services List : </label>
							<div class="content-extra">Maximum six services will be displayed according to priority.</div>
						</div>
					</div>
				</div>
				<div class="content-block content-block-horizantal">
					<div class="content-block-ttl">About Us Section (Who We Are)</div>
					<div class="content-block-main">
						<div class="content-input">
							<label>Section Title : </label>
							<input type="text" name="page[about][title]" value="Who We Are" placeholder="About Section Name">
						</div>
												<div class="content-input content-input-multi">
							<label>Block 1: </label>
							<div class="row">
								<div class="col-sm-4">
									<input type="text" name="page[about][block][0][icon]" value="user-md" placeholder="Icon Name (Ex: fa-user)">
								</div>
								<div class="col-sm-4">
									<input type="text" name="page[about][block][0][title]" value="Doctor(s)" placeholder="Title (Ex: Doctor)">
								</div>
								<div class="col-sm-4">
									<input type="text" name="page[about][block][0][count]" value="10" placeholder="Number or Count (Ex: 9)">
								</div>
							</div>
							
						</div>
												<div class="content-input content-input-multi">
							<label>Block 2: </label>
							<div class="row">
								<div class="col-sm-4">
									<input type="text" name="page[about][block][1][icon]" value="ambulance" placeholder="Icon Name (Ex: fa-user)">
								</div>
								<div class="col-sm-4">
									<input type="text" name="page[about][block][1][title]" value="Room(s)" placeholder="Title (Ex: Doctor)">
								</div>
								<div class="col-sm-4">
									<input type="text" name="page[about][block][1][count]" value="20" placeholder="Number or Count (Ex: 9)">
								</div>
							</div>
							
						</div>
												<div class="content-input content-input-multi">
							<label>Block 3: </label>
							<div class="row">
								<div class="col-sm-4">
									<input type="text" name="page[about][block][2][icon]" value="calendar" placeholder="Icon Name (Ex: fa-user)">
								</div>
								<div class="col-sm-4">
									<input type="text" name="page[about][block][2][title]" value="Year of Experience(s)" placeholder="Title (Ex: Doctor)">
								</div>
								<div class="col-sm-4">
									<input type="text" name="page[about][block][2][count]" value="23" placeholder="Number or Count (Ex: 9)">
								</div>
							</div>
							
						</div>
												<div class="content-input content-input-multi">
							<label>Block 4: </label>
							<div class="row">
								<div class="col-sm-4">
									<input type="text" name="page[about][block][3][icon]" value="clock-o" placeholder="Icon Name (Ex: fa-user)">
								</div>
								<div class="col-sm-4">
									<input type="text" name="page[about][block][3][title]" value="OPENING HOURS PER WEEK" placeholder="Title (Ex: Doctor)">
								</div>
								<div class="col-sm-4">
									<input type="text" name="page[about][block][3][count]" value="40" placeholder="Number or Count (Ex: 9)">
								</div>
							</div>
							
						</div>
												<div class="content-input">
							<label>Section Picture : </label>
							<div class="image-upload"  style="display: none"  >
								<a>Upload</a>
							</div>
							<div class="saved-picture"  >
																<img class="img-thumbnail" src="../public/uploads/hm-about.jpg" alt="">
																<input type="hidden" name="page[about][picture]" value="hm-about.jpg">
							</div>
							<div class="saved-picture-delete" data-toggle="tooltip" data-placement="right" title="Remove"  >
								<a class="fa fa-times"></a>
							</div>
							<div class="content-description">(Size: 660px x 750px)</div>
						</div>
						<div class="content-input">
							<label>Section Description : </label>
							<textarea name="page[about][description]" placeholder="About Section Moto">A hospital is an institution for healthcare typically providing specialized treatment for inpatient (or overnight) stays. Some hospitals primarily admit patients suffering from a specific disease or affection, or are reserved for the diagnosis and treatment of conditions affecting a specific age group. Others have a mandate that expands beyond offering dominantly curative and rehabilitative care services to include promotional, preventive and educational roles as part of a primary healthcare approach. Today, hospitals are usually funded by the state, health organizations (for profit or non-profit), by health insurances or by charities and by donations.</textarea>
						</div>
					</div>
				</div>
				<div class="content-block content-block-horizantal">
					<div class="content-block-ttl">Facility Section (Why Are We Best?)</div>
					<div class="content-block-main">
						<div class="content-input">
							<label>Section Title : </label>
							<input type="text" name="page[facility][title]" value="Why Choose Us" placeholder="Facility Section Name">
						</div>
						<div class="content-input">
							<label>Facility Lists : </label>
							<div class="content-extra">
								All enabled facilities will be displayed If you do not want to display then make them disabled.
							</div>
						</div>
					</div>
				</div>
				<div class="content-block content-block-horizantal">
					<div class="content-block-ttl">Doctor section</div>
					<div class="content-block-main">
						<div class="content-input">
							<label>Section Title : </label>
							<input type="text" name="page[doctor][title]" value="Our Team" placeholder="Doctor Section Title">
						</div>
						<div class="content-input">
							<label>Doctor Slider : </label>
							<div class="content-extra">Maximum six doctors will be displayed according to priority.</div>
						</div>
					</div>
				</div>
				<div class="content-block content-block-horizantal">
					<div class="content-block-ttl">Blog Section</div>
					<div class="content-block-main">
						<div class="content-input">
							<label>Section Title : </label>
							<input type="text" name="page[blog][title]" value="Latest Posts" placeholder="Blog Section Title">
						</div>
						<div class="content-input">
							<label>Blog Lists : </label>
							<div class="content-extra">
								Latest three blog will be displayed on home page.
							</div>
						</div>
					</div>
				</div>
				<div class="content-block content-block-horizantal">
					<div class="content-block-ttl">What People Say? Section (Testimonial Section)</div>
					<div class="content-block-main">
						<div class="content-input">
							<label>Section Title : </label>
							<input type="text" name="page[testimonial][title]" value="What People Say" placeholder="Testimonial Section Name">
						</div>
						<div class="content-input">
							<label>Testimonial Lists : </label>
							<div class="content-extra">
								All enabled Testimonial will be displayed If you do not want to display then make them disabled.
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="content-block content-block-horizantal">
					<div class="content-block-ttl">SEO Section</div>
					<div class="content-block-main">
						<div class="content-input">
							<label><text>*</text>Meta Tag : </label>
							<input type="text" class="input-text" name="meta[tag]" value="Klinikal health care - Appointment and patient management system - Home" placeholder="Meta Tag Title" required>
						</div>
						<div class="content-input">
							<label>Meta Description : </label>
							<textarea name="meta[description]" class="textarea-small" placeholder="Meta Tag Description">Appointment and patient management system created to simplify </textarea>
							<input type="hidden" name="page_name" value="home">
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