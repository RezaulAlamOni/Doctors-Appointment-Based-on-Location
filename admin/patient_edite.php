
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
    <link rel="stylesheet" href="public/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
    <link rel="stylesheet" href="public/css/fullcalendar.min.css">
    <link rel="stylesheet" href="public/css/jquery-ui.min.css">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/datatables.min.css">
    <link rel="stylesheet" href="public/css/dropzone.min.css">
    <link rel="stylesheet" href="public/css/style.css">
    <!-- Include js files -->
    <script type="text/javascript" id="zsiqscript" defer="" src="https://salesiq.zoho.com/widget"></script><script async="" src="https://www.google-analytics.com/analytics.js"></script><script type="text/javascript" src="public/js/moment.min.js"></script>
    <script type="text/javascript" src="public/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="public/js/popper.min.js"></script>
    <script type="text/javascript" src="public/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="public/js/jquery-ui.multidatespicker.min.js"></script>
    <script type="text/javascript" src="public/js/datatables.min.js"></script>
    <script type="text/javascript" src="public/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="public/js/fullcalendar.min.js"></script>
    <script type="text/javascript" src="public/js/Chart.min.js"></script>
    <script type="text/javascript" src="public/js/dropzone.min.js"></script>
    <script type="text/javascript" src="public/js/jquery-scrolltofixed.min.js"></script>
    <script type="text/javascript" src="public/js/admin.js"></script>
    <link rel="stylesheet" href="https://css.zohostatic.com/salesiq/Sep_13_2018_2_https/styles/floatbutton.css"><script src="https://js.zohostatic.com/salesiq/Sep_13_2018_2_https/js/floatbutton.js"></script>
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
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <div class="media-upload-container">
                    <form action="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=upload" class="dropzone dz-clickable" id="media-dropzone" method="post" enctype="multipart/form-data">

                        <div class="dz-default dz-message"><span>Drop files here or click here to upload</span></div></form>
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
            <div id="logo" class="scroll-to-fixed-fixed" style="z-index: 11; position: fixed; top: 0px; margin-left: 0px; left: 0px;">
                <div class="tbl-cell logo-icon">
                    <a href="#"><img src="public/images/icon.png" alt=""></a>
                </div>
                <div class="tbl-cell">
                    <a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=dashboard"><img src="public/images/logo.png"></a>
                </div>
            </div><div style="display: block; width: 60px; height: 70px; float: none;"></div>
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
                    <a class="menu-dropdown active-danger active">
                        <i class="icon-organization"></i><span>Patients</span><i class="fa fa-angle-down"></i>
                    </a>
                    <ul id="patient" class="sub-menu" style="display: block;">
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
                            <a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=page/terms"><i class="icon-eye"></i><span>T &amp; C Page</span></a>
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
    <div class="page-container">
        <link rel="stylesheet" href="public/css/jquery.fancybox.min.css">
        <script src="public/js/jquery.fancybox.min.js"></script>
        <script>
            $('#patient').show();
            $('#patient-li>a').addClass('active');
            $("a.open-pdf").fancybox({
                'frameWidth': 800,
                'frameHeight': 800,
                'overlayShow': true,
                'hideOnContentClick': false,
                'type': 'iframe'
            });
        </script>

        <form action="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=user/action" method="post" enctype="multipart/form-data" siq_id="autopick_5272">
            <div class="page-hdr scroll-to-fixed-fixed" style="z-index: 9; position: fixed; top: 0px; margin-left: 0px; width: 920px; left: 60px;">
                <div class="row">
                    <div class="col-8 page-name">
                        <h1><i class="fa fa-users"></i>Edit Patient</h1>
                    </div>
                    <div class="col-4 page-menu">
                        <a id="cancel" href="index.php?route=patient" data-toggle="tooltip" data-placement="left" title="" data-original-title="Back to List"><i class="fa fa-reply"></i></a>
                        <button type="submit" name="submit" data-toggle="tooltip" data-placement="left" title="" data-original-title="Save Page"><i class="fa fa-floppy-o"></i></button>
                    </div>
                </div>
            </div><div style="display: block; width: 920px; height: 70px; float: none;"></div>
            <div class="content">
                <input type="hidden" name="_token" value="413ccea5ca6b8ce59e0da0d74a15110a305317f742542dcc5f09cc85ddf4f25288776a66377494dbf3154612b21c29b49cdcd6ee235b8ea2b77355d52eef0188">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="content-block content-block-horizantal">
                            <div class="content-block-ttl">Basic details</div>
                            <div class="content-block-main">
                                <div class="row content-input">
                                    <div class="col-sm-6">
                                        <label><text>*</text>First Name : </label>
                                        <input type="text" class="input-text" name="firstname" value="viraj" placeholder="Enter your First Name" required="">
                                        <p class="content-input-error-name">Please enter name!</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <label><text>*</text>Last Name : </label>
                                        <input type="text" class="input-text" name="lastname" value="chamara" placeholder="Enter your Last Name" required="">
                                        <p class="content-input-error-name">Please enter last name!</p>
                                    </div>
                                </div>
                                <div class="row content-input">
                                    <div class="col-sm-6">
                                        <label><text>*</text>Email Address : </label>
                                        <input type="email" class="input-email" name="email" value="ishararokzz@gmail.com" placeholder="Enter your Email Address" readonly="" required="">
                                        <p class="content-input-error-name">Please enter email!</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <label><text>*</text>Mobile : </label>
                                        <input type="number" class="input-mobile" name="mobile" value="0766136852" placeholder="Enter your Mobile number" min="1" required="">
                                        <p class="content-input-error-name">Please enter phone number!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-block content-block-horizantal">
                            <div class="content-block-ttl">Other details</div>
                            <div class="content-block-main">
                                <div class="row content-input">
                                    <div class="col-sm-6">
                                        <label>Date of Birth : </label>
                                        <input type="text" name="dob" id="user-dob" value="" placeholder="Date of Birth" class="hasDatepicker">
                                    </div>
                                    <div class="col-sm-6">
                                    </div>
                                </div>
                                <div class="row content-input">
                                    <div class="col-sm-6">
                                        <label>Location : </label>
                                        <input type="text" name="location" value="" placeholder="User Location">
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Country : </label>
                                        <input type="text" name="country" value="" placeholder="User Country">
                                    </div>
                                </div>
                                <div class="row content-input content-radio">
                                    <div class="col-sm-6">
                                        <label>Gender : </label>
                                        <div class="content-radio-container">
                                            <div>
                                                <input type="radio" name="gender" value="1" id="gender-male">
                                                <label for="gender-male"><span><i class="fa fa-check"></i></span><p>Male</p></label>
                                            </div>
                                            <div>
                                                <input type="radio" name="gender" value="2" id="gender-female">
                                                <label for="gender-female"><span><i class="fa fa-check"></i></span><p>Female</p></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Blood Group : </label>
                                        <input type="text" name="bloodgroup" value="" placeholder="Blood Group">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="content-block content-block-horizantal">
                            <div class="content-block-ttl">Medical History</div>
                            <div class="content-block-main">
                                <div class="content-radio">
                                    <label>Do you now or have you ever had:</label>
                                    <div>
                                        <div class="row">
                                            <div class="col-sm-6 col-md-4 content-radio-container">
                                                <div>
                                                    <input type="checkbox" name="medical[diabetes]" value="checked" id="diabetes">
                                                    <label for="diabetes"><span><i class="fa fa-check"></i></span><p>Diabetes</p></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 content-radio-container">
                                                <div>
                                                    <input type="checkbox" name="medical[high-blood-pressure]" value="checked" id="high-blood-pressure">
                                                    <label for="high-blood-pressure"><span><i class="fa fa-check"></i></span><p>High blood pressure</p></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 content-radio-container">
                                                <div>
                                                    <input type="checkbox" name="medical[high-cholesterol]" value="checked" id="high-cholesterol">
                                                    <label for="high-cholesterol"><span><i class="fa fa-check"></i></span><p>High cholesterol</p></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 content-radio-container">
                                                <div>
                                                    <input type="checkbox" name="medical[heart-problems]" value="checked" id="heart-problems">
                                                    <label for="heart-problems"><span><i class="fa fa-check"></i></span><p>Heart problems</p></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 content-radio-container">
                                                <div>
                                                    <input type="checkbox" name="medical[asthma]" value="checked" id="asthma">
                                                    <label for="asthma"><span><i class="fa fa-check"></i></span><p>Asthma</p></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 content-radio-container">
                                                <div>
                                                    <input type="checkbox" name="medical[kidney-disease]" value="checked" id="kidney-disease">
                                                    <label for="kidney-disease"><span><i class="fa fa-check"></i></span><p>Kidney disease</p></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 content-radio-container">
                                                <div>
                                                    <input type="checkbox" name="medical[kidney-stones]" value="checked" id="kidney-stones">
                                                    <label for="kidney-stones"><span><i class="fa fa-check"></i></span><p>Kidney Stones</p></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 content-radio-container">
                                                <div>
                                                    <input type="checkbox" name="medical[jaundice]" value="checked" id="jaundice">
                                                    <label for="jaundice"><span><i class="fa fa-check"></i></span><p>Jaundice</p></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 content-radio-container">
                                                <div>
                                                    <input type="checkbox" name="medical[hepatitis]" value="checked" id="hepatitis">
                                                    <label for="hepatitis"><span><i class="fa fa-check"></i></span><p>Hepatitis</p></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 content-radio-container">
                                                <div>
                                                    <input type="checkbox" name="medical[rheumatic-fever]" value="checked" id="rheumatic-fever">
                                                    <label for="rheumatic-fever"><span><i class="fa fa-check"></i></span><p>Rheumatic Fever</p></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 content-radio-container">
                                                <div>
                                                    <input type="checkbox" name="medical[cancer]" value="checked" id="cancer">
                                                    <label for="cancer"><span><i class="fa fa-check"></i></span><p>Cancer</p></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 content-radio-container">
                                                <div>
                                                    <input type="checkbox" name="medical[hiv]" value="checked" id="hiv">
                                                    <label for="hiv"><span><i class="fa fa-check"></i></span><p>HIV/AIDS</p></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 content-radio-container">
                                                <div>
                                                    <input type="checkbox" name="medical[epilepsy]" value="checked" id="epilepsy">
                                                    <label for="epilepsy"><span><i class="fa fa-check"></i></span><p>Epilepsy</p></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 content-radio-container">
                                                <div>
                                                    <input type="checkbox" name="medical[pregnancy]" value="checked" id="pregnancy">
                                                    <label for="pregnancy"><span><i class="fa fa-check"></i></span><p>Pregnancy</p></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 content-radio-container">
                                                <div>
                                                    <input type="checkbox" name="medical[blood-thinners]" value="checked" id="blood-thinners">
                                                    <label for="blood-thinners"><span><i class="fa fa-check"></i></span><p>Blood thinners</p></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-input">
                                    <label>Other History : </label>
                                    <textarea name="medical[other]" placeholder="Patient other history or about user"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="content-block">
                            <div class="content-block-ttl">Patient history</div>
                            <div class="content-block-main user-history">
                                <p class="btn btn-primary btn-sm" data-toggle="modal" data-target="#appointment-modal">Appointments ( 1 ) </p>
                                <p class="btn btn-warning btn-sm" data-toggle="modal" data-target="#invoice-modal">Invoices ( 0 )</p>
                                <p class="btn btn-danger btn-sm" data-toggle="modal" data-target="#report-modal">All Reports</p>
                                <p id="create-apnt-user" class="btn btn-default btn-sm">Create Appointment</p>
                            </div>
                        </div>
                        <div class="content-block content-block-horizantal">
                            <div class="content-block-ttl">For office use</div>
                            <div class="content-block-main">
                                <div class="content-input">
                                    <label>User Role : </label>
                                    <select name="role" title="Select User Role" class="select-list" required="" id="ui-id-1" style="display: none;">
                                        <option value="1" selected="">Patient</option>
                                        <option value="2">Handler</option>
                                        <option value="3">Doctor</option>
                                        <option value="4">Dean</option>
                                    </select><span tabindex="0" id="ui-id-1-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-1-menu" aria-haspopup="true" title="Select User Role" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Patient</span></span>
                                    <div class="content-description">
                                        If you want to give an admin access to user then select role otherwise do not select. It will automatically assign patient role to user.
                                    </div>
                                </div>
                                <div class="content-input">
                                    <label>User Name : </label>
                                    <input type="text" name="username" value="" placeholder="User Name">
                                    <div class="content-description">
                                        If you want to give an admin access to user then fill this field otherwise leave empty.
                                    </div>
                                </div>
                                <div class="content-input">
                                    <label>Created Date : </label>
                                    <input type="text" value="14 Sep 2018  ( 6:57 PM )" readonly="">
                                </div>
                                <div class="content-input">
                                    <label>Email Confirmation : </label>
                                    <input type="text" value="Unconfirmed" readonly="">
                                </div>
                                <div class="content-input">
                                    <label>Status : </label>
                                    <select name="status" class="select-list" id="ui-id-2" style="display: none;">
                                        <option value="" disabled="" selected="">Status</option>
                                        <option value="0">InActive</option>
                                        <option value="1" selected="">Active</option>
                                    </select><span tabindex="0" id="ui-id-2-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-2-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Active</span></span>
                                </div>
                                <div class="content-input">
                                    <label>Notify User : </label>
                                    <div class="content-radio-container">
                                        <div>
                                            <input type="checkbox" name="sendmail" value="1" id="send-mail" checked="">
                                            <label for="send-mail"><span><i class="fa fa-check"></i></span><p>Send an Email</p></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="id" value="284">
                </div>
                <div class="content-submit text-center">
                    <button type="submit" name="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>

        <!-- Appointment List Modal -->
        <div id="appointment-modal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Patient's Appointment</h4>
                        <button type="button" class="close" data-dismiss="modal">×</button>
                    </div>
                    <div class="modal-body">
                        <div class="user-appointment">
                            <div class="card-block">
                                <div class="card card-color-new">
                                    <div class="row card-hdr">
                                        <div class="col-2 card-left text-left">
                                            <span class="text-center">1</span>
                                        </div>
                                        <div class="col-10 text-right card-right">
                                            <em>Appointment ID :</em> <span>20180915556015906</span>
                                        </div>
                                    </div>
                                    <div class="row card-bdy">
                                        <div class="col-sm-6 text-left">
                                            <div class="card-img">
                                                <img class="img-thumbnail" src="../public/uploads/doctor-2.jpg" alt="">
                                            </div>
                                            <div class="card-info">
                                                <a href="index.php?route=themeoption/doctor/edit&amp;id=3" class="card-name" target="_blank">Dr. Melissa Bates</a>
                                                <div class="card-text">Gynaecology</div>
                                                <div class="card-text">pepdevofficial@gmail.com</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 appointment-time text-center">
                                            <div class="appointment-date"><i class="fa fa-calendar"></i><span>19 Sep 2018</span></div>
                                            <div><i class="fa fa-hourglass-o"></i><span>At 12:12</span></div>
                                        </div>
                                    </div>
                                    <div class="row card-ftr">
                                        <div class="col-8 text-left">
                                            <span class="badge badge-default badge-sm">New</span>
                                        </div>
                                        <div class="card-action">
                                            <a href="index.php?route=invoice/add&amp;id=1023" class="btn btn-outline btn-warning btn-outline-1x btn-circle" data-toggle="tooltip" title="" target="_blank" data-original-title="Create Invoice"><i class="fa fa-credit-card"></i></a>
                                            <a href="index.php?route=appointment/edit&amp;id=1023" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="" target="_blank" data-original-title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Invoice List Modal -->
        <div id="invoice-modal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Patient's Invoices</h4>
                        <button type="button" class="close" data-dismiss="modal">×</button>
                    </div>
                    <div class="modal-body">
                        <div class="user-appointment">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="report-modal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Patient's Reports</h4>
                        <button type="button" class="close" data-dismiss="modal">×</button>
                    </div>
                    <div class="modal-body">
                        <div class="report-container">
                            <p class="font-16 text-muted">No reports Found.</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Appointment side bar -->
        <div id="apntinfo" class="sidenav">
            <div class="container-fluid sidenav-hdr">
                <p>Appointment Details</p>
                <span class="sidenav-close">x</span>
            </div>
            <input type="hidden" value="{&quot;id&quot;:3,&quot;name&quot;:&quot;Melissa Bates&quot;,&quot;department_id&quot;:1,&quot;weekly&quot;:&quot;[\&quot;1\&quot;,\&quot;2\&quot;,\&quot;6\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25, 2017-04-13, 2017-04-14, 2017-04-20, 2017-07-07, 2017-07-08, 2017-07-14\&quot;&quot;,&quot;department&quot;:&quot;Gynaecology&quot;}" class="doctor-id-3 department-id-Gynaecology">
            <input type="hidden" value="{&quot;id&quot;:8,&quot;name&quot;:&quot;Linda Adams&quot;,&quot;department_id&quot;:1,&quot;weekly&quot;:&quot;[\&quot;0\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25, 2017-06-16, 2017-06-21, 2017-06-26, 2017-07-11, 2017-07-14, 2017-07-20, 2017-07-31\&quot;&quot;,&quot;department&quot;:&quot;Gynaecology&quot;}" class="doctor-id-8 department-id-Gynaecology">
            <input type="hidden" value="{&quot;id&quot;:1,&quot;name&quot;:&quot;Daniel Barnes&quot;,&quot;department_id&quot;:2,&quot;weekly&quot;:&quot;[\&quot;3\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25, 2017-01-18, 2017-01-21, 2017-01-30, 2017-03-27, 2017-03-31\&quot;&quot;,&quot;department&quot;:&quot;Orthology&quot;}" class="doctor-id-1 department-id-Orthology">
            <input type="hidden" value="{&quot;id&quot;:5,&quot;name&quot;:&quot;Steve Soeren&quot;,&quot;department_id&quot;:2,&quot;weekly&quot;:&quot;[\&quot;0\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25, 2017-02-16, 2017-03-14, 2017-03-17, 2017-03-23, 2017-03-31\&quot;&quot;,&quot;department&quot;:&quot;Orthology&quot;}" class="doctor-id-5 department-id-Orthology">
            <input type="hidden" value="{&quot;id&quot;:7,&quot;name&quot;:&quot;Barbara Baker&quot;,&quot;department_id&quot;:2,&quot;weekly&quot;:&quot;[\&quot;1\&quot;,\&quot;5\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25, 2017-06-08, 2017-06-20, 2017-06-28, 2017-06-29\&quot;&quot;,&quot;department&quot;:&quot;Orthology&quot;}" class="doctor-id-7 department-id-Orthology">
            <input type="hidden" value="{&quot;id&quot;:4,&quot;name&quot;:&quot;Cheri Aria&quot;,&quot;department_id&quot;:3,&quot;weekly&quot;:&quot;[\&quot;5\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25, 2017-03-07, 2017-03-14, 2017-03-20, 2017-03-26\&quot;&quot;,&quot;department&quot;:&quot;Dermatologist&quot;}" class="doctor-id-4 department-id-Dermatologist">
            <input type="hidden" value="{&quot;id&quot;:6,&quot;name&quot;:&quot;Theodore Bennett&quot;,&quot;department_id&quot;:4,&quot;weekly&quot;:&quot;[\&quot;0\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25, 2017-02-15, 2017-02-16, 2017-03-07, 2017-03-15, 2017-03-23, 2017-03-31\&quot;&quot;,&quot;department&quot;:&quot;Anaesthesia&quot;}" class="doctor-id-6 department-id-Anaesthesia">
            <input type="hidden" value="{&quot;id&quot;:10,&quot;name&quot;:&quot;Vedhraj Jain&quot;,&quot;department_id&quot;:5,&quot;weekly&quot;:&quot;[\&quot;6\&quot;,\&quot;0\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25\&quot;&quot;,&quot;department&quot;:&quot;Ayurvedic&quot;}" class="doctor-id-10 department-id-Ayurvedic">
            <form action="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=appointment/dashboardappointment" method="post" siq_id="autopick_8564">
                <div class="sidenav-bdy">
                    <div class="apntinfo-block">
                        <div class="apntinfo-block-ttl">Appointment Info</div>
                        <div class="apntinfo-block-container">
                            <input type="hidden" id="apntinfo-id" name="id" value="">
                            <div class="content-input">
                                <label>Status :</label>
                                <select id="apntinfo-status" name="status" class="form-control">
                                    <option value="0">New</option>
                                    <option value="2">In Process</option>
                                    <option value="3">Confirmed</option>
                                    <option value="4">Completed</option>
                                    <option value="1">Canceled</option>
                                </select>
                            </div>
                            <div class="content-input">
                                <label><text>*</text>Doctor :</label>
                                <select id="apntinfo-doctor" name="doctor" class="appointment-doctor form-control">
                                    <option value="">Select Doctor</option>
                                    <option value="3">Melissa Bates( Gynaecology )</option>
                                    <option value="8">Linda Adams( Gynaecology )</option>
                                    <option value="1">Daniel Barnes( Orthology )</option>
                                    <option value="5">Steve Soeren( Orthology )</option>
                                    <option value="7">Barbara Baker( Orthology )</option>
                                    <option value="4">Cheri Aria( Dermatologist )</option>
                                    <option value="6">Theodore Bennett( Anaesthesia )</option>
                                    <option value="10">Vedhraj Jain( Ayurvedic )</option>
                                </select>
                                <input type="hidden" class="appointment-department" name="department" value="">
                            </div>
                            <div class="content-input">
                                <label><text>*</text>Date : </label>
                                <input type="text" name="date" id="appointment-date" value="" placeholder="Date" readonly="" required="">
                            </div>
                            <div class="content-input apntinfo-time">
                                <label><text>*</text>Time : </label>
                                <input type="text" name="time" id="apntinfo-time" placeholder="Time" readonly="" required="">
                            </div>
                            <div class="content-input appointment-slot">
                                <label for=""></label>
                                <div id="appointment-slot"></div>
                            </div>
                        </div>
                    </div>
                    <div class="apntinfo-block">
                        <div class="apntinfo-block-ttl">Patient Info</div>
                        <div class="apntinfo-block-container">
                            <div class="content-input">
                                <label><text>*</text>Name : </label>
                                <input type="text" class="input-text" id="apntinfo-name" value="viraj chamara" name="name" placeholder="Enter Patient Name" required="">
                            </div>
                            <div class="content-input">
                                <label><text>*</text>Email : </label>
                                <input type="text" class="input-text" value="ishararokzz@gmail.com" id="apntinfo-email" name="email" placeholder="Enter Patient Email Address" required="">
                            </div>
                            <div class="content-input">
                                <label><text>*</text>Mobile : </label>
                                <input type="text" class="input-text" value="0766136852" id="apntinfo-mobile" name="mobile" placeholder="Enter Patient Mobile Number" required="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidenav-ftr">
                    <div class="apntinfo-button text-right">
                        <a href="" class="apntinfo-edit btn btn-default" target="_blank">View More</a>
                        <button type="submit" name="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="sidenav-background"></div>
        <script>
            $("a.open-pdf").fancybox({
                'frameWidth': 800,
                'frameHeight': 800,
                'overlayShow': true,
                'hideOnContentClick': false,
                'type': 'iframe'
            });
        </script>
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
    </script><div id="zsiqwidget"></div>

</div>


<input type="file" multiple="multiple" class="dz-hidden-input" accept="image/*" style="visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;"><div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div><div class="ui-selectmenu-menu ui-front"><ul aria-hidden="true" aria-labelledby="ui-id-1-button" id="ui-id-1-menu" role="listbox" tabindex="0" class="ui-menu ui-corner-bottom ui-widget ui-widget-content"></ul></div><div class="ui-selectmenu-menu ui-front"><ul aria-hidden="true" aria-labelledby="ui-id-2-button" id="ui-id-2-menu" role="listbox" tabindex="0" class="ui-menu ui-corner-bottom ui-widget ui-widget-content"></ul></div><div class="zsiq_floatmain zsiq_theme1 siq_bR" style="visibility: hidden; display: block;"><div id="zsiq_float" class="zsiq_float " style="font-family:salesiq-font"><div class="zsiq_flt_rel"><em id="zsiq_agtpic" class="zsiq_user sqico-chat"></em><div id="titlediv" class="zsiq_cnt"><div id="zsiq_maintitle" class="zsiq_ellips" title="We're Online!">We're Online!</div><p id="zsiq_byline" class="zsiq_ellips" title="How may I help you today?">How may I help you today?</p></div><em id="zsiq_unreadcnt" class="zsiq_unrdcnt" style="display: none;"></em><em id="zsiq_avcall" class="zsiqmin_unrdcnt zsiq_unrdcnt sqico-mincall" style="display: none;"></em></div></div></div><style id="floatthemecss">.zsiq_flt_rel{ background-color:#45a4ec !important;}</style><div class="zls-sptwndw  siqembed siqtrans siqhide zsiq-mobhgt siq_rht zsiq_size2" embedtheme="1" style="visibility: hidden; top: -10000px; display: block;"><div id="siqcht" class="zls-prelative"><iframe id="siqiframe" seamless="seamless" height="460" width="100%"></iframe></div></div>
</body>
</html>