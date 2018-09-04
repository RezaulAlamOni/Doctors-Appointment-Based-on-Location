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

<div class="page-hdr">
	<div class="row">
		<div class="col-8 page-name">
			<h1><i class="fa fa-shield"></i>Facilities</h1>
		</div>
		<div class="col-4 page-menu">
			<a id="cancel" href="index.php?route=themeoption/facility" data-toggle="tooltip" data-placement="left" title="Reload">
				<i class="fa fa-refresh"></i>
			</a>
			<a href="index.php?route=themeoption/facility/add" data-toggle="tooltip" data-placement="left" title="Add Facility">
				<i class="fa fa-plus"></i>
			</a>
		</div>
	</div>
</div>
<div class="content">
	<div class="table-container">
		<table id="facility-table" class="table table-bordered table-striped datatable-table">
			<thead>
				<tr class="table-heading">
					<th>#</th>
					<th>Name</th>
					<th>Icon</th>
					<th class="table-action">Action</th>
				</tr>
			</thead>
			<tbody>
								<tr>
					<td class="table-srno">1</td>
					<td><p class="font-14 margin-0">Emergency Departments</p></td>
					
					<td class="table-icon"><i class="fa fa-phone"></i></td>
					<td class="table-action">
						<a href="index.php?route=themeoption/facility/edit&id=1" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="1">
						</a>
					</td>
				</tr>
								<tr>
					<td class="table-srno">2</td>
					<td><p class="font-14 margin-0">24 hour Service</p></td>
					
					<td class="table-icon"><i class="fa fa-calendar"></i></td>
					<td class="table-action">
						<a href="index.php?route=themeoption/facility/edit&id=2" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="2">
						</a>
					</td>
				</tr>
								<tr>
					<td class="table-srno">3</td>
					<td><p class="font-14 margin-0">Advanced Technology</p></td>
					
					<td class="table-icon"><i class="fa fa-cloud"></i></td>
					<td class="table-action">
						<a href="index.php?route=themeoption/facility/edit&id=3" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="3">
						</a>
					</td>
				</tr>
								<tr>
					<td class="table-srno">4</td>
					<td><p class="font-14 margin-0">Ambulance</p></td>
					
					<td class="table-icon"><i class="fa fa-ambulance"></i></td>
					<td class="table-action">
						<a href="index.php?route=themeoption/facility/edit&id=4" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="4">
						</a>
					</td>
				</tr>
								<tr>
					<td class="table-srno">5</td>
					<td><p class="font-14 margin-0">Primary health care</p></td>
					
					<td class="table-icon"><i class="fa fa-stethoscope"></i></td>
					<td class="table-action">
						<a href="index.php?route=themeoption/facility/edit&id=5" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="5">
						</a>
					</td>
				</tr>
								<tr>
					<td class="table-srno">6</td>
					<td><p class="font-14 margin-0">Pharmacies and drug stores</p></td>
					
					<td class="table-icon"><i class="fa fa-shopping-bag"></i></td>
					<td class="table-action">
						<a href="index.php?route=themeoption/facility/edit&id=6" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="6">
						</a>
					</td>
				</tr>
								<tr>
					<td class="table-srno">7</td>
					<td><p class="font-14 margin-0">Laboratory and research</p></td>
					
					<td class="table-icon"><i class="fa fa-hospital-o"></i></td>
					<td class="table-action">
						<a href="index.php?route=themeoption/facility/edit&id=9" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="9">
						</a>
					</td>
				</tr>
								<tr>
					<td class="table-srno">8</td>
					<td><p class="font-14 margin-0">Medical nursing home</p></td>
					
					<td class="table-icon"><i class="fa fa-user-md"></i></td>
					<td class="table-action">
						<a href="index.php?route=themeoption/facility/edit&id=10" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
						<a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
							<i class="fa fa-trash-o"></i><input type="hidden" value="10">
						</a>
					</td>
				</tr>
							</tbody>
		</table>
	</div>
</div>

<!-- Delete Modal -->
<div id="delete-card" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Confirm Delete</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<p class="delete-card-ttl">Are you sure you want to delete?</p>
			</div>
			<div class="modal-footer">
				<form action="index.php?route=themeoption/facility/delete" class="delete-card-button" method="post">
					<input type="hidden" value="" name="id">
					<button type="submit" class="btn btn-danger" name="delete">Delete</button>
				</form>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
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