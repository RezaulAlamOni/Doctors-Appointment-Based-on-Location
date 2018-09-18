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
    <link rel="stylesheet" href="https://css.zohostatic.com/salesiq/Sep_18_2018_1_https/styles/floatbutton.css"><script src="https://js.zohostatic.com/salesiq/Sep_18_2018_1_https/js/floatbutton.js"></script>
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
                    <a class="menu-dropdown active"><i class="icon-cloud-upload"></i><span>Theme Options</span><i class="fa fa-angle-down"></i></a>
                    <ul id="themeoption" class="sub-menu" style="display: block;">
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
    <div class="page-container"><script>
            $('#themeoption').show();
            $('#themeoption-li>a').addClass('active');</script>


        <form action="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=themeoption/doctor/action" method="post" enctype="multipart/form-data" siq_id="autopick_6988">
            <div class="page-hdr scroll-to-fixed-fixed" style="z-index: 9; position: fixed; top: 0px; margin-left: 0px; width: 920px; left: 60px;">
                <div class="row">
                    <div class="col-8 page-name">
                        <h1><i class="fa fa-user-md"></i>Add Doctor</h1>
                    </div>
                    <div class="col-4 page-menu">
                        <a id="cancel" href="index.php?route=themeoption/doctor" data-toggle="tooltip" data-placement="left" title="" data-original-title="Back to List"><i class="fa fa-reply"></i></a>
                        <button type="submit" name="submit" data-toggle="tooltip" data-placement="left" title="" data-original-title="Save Doctor"><i class="fa fa-floppy-o"></i></button>
                    </div>
                </div>
            </div><div style="display: block; width: 920px; height: 70px; float: none;"></div>
            <div class="content">
                <div class="row">
                    <div class="col-md-8">
                        <div class="content-block content-block-horizantal">
                            <div class="content-block-ttl">Basic Info</div>
                            <div class="content-block-main">
                                <input type="hidden" name="_token" value="413ccea5ca6b8ce59e0da0d74a15110a305317f742542dcc5f09cc85ddf4f25288776a66377494dbf3154612b21c29b49cdcd6ee235b8ea2b77355d52eef0188">
                                <div class="content-input">
                                    <label><text>*</text>Name : </label>
                                    <input type="text" class="input-text" name="name" value="" placeholder="Name" required="">
                                    <p class="content-input-error-name">Please enter doctor name!</p>
                                </div>
                                <div class="content-input">
                                    <label><text>*</text>Picture : </label>
                                    <div class="image-upload">
                                        <a>Upload</a>
                                    </div>
                                    <div class="saved-picture" style="display: none">
                                        <input type="hidden" name="doctor-picture" value="">
                                    </div>
                                    <div class="saved-picture-delete" data-toggle="tooltip" data-placement="right" title="" style="display: none" data-original-title="Remove">
                                        <a class="fa fa-times"></a>
                                    </div>
                                    <div class="content-description">(Size: 530px * 470px)</div>
                                </div>
                                <div class="content-input">
                                    <label><text>*</text>Email : </label>
                                    <input type="email" class="input-email" name="email" value="" placeholder="email" required="">
                                    <p class="content-input-error-name">Please enter doctor email!</p>
                                </div>
                                <div class="content-input">
                                    <label><text>*</text>Mobile : </label>
                                    <input type="number" class="input-mobile" name="mobile" value="" placeholder="mobile" required="">
                                    <p class="content-input-error-name">Please enter doctor phone number!</p>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="content-input">
                                            <label><text>*</text>Department : </label>
                                            <select name="department" class="select-list" required="" title="Please Choose Department" id="ui-id-1" style="display: none;">
                                                <option value="" disabled="" selected="">Department</option>
                                                <option value="1"> Gynaecology										</option>
                                                <option value="2"> Orthology										</option>
                                                <option value="3"> Dermatologist										</option>
                                                <option value="4"> Anaesthesia										</option>
                                                <option value="5"> Ayurvedic										</option>
                                                <option value="6"> Pathology										</option>
                                            </select><span tabindex="0" id="ui-id-1-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-1-menu" aria-haspopup="true" title="Please Choose Department" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Department</span></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="content-input">
                                            <label><text>*</text>Status : </label>
                                            <select name="status" id="ui-id-2" class="select-list" required="" style="display: none;">
                                                <option value="0">Disabled</option>
                                                <option value="1">Enabled</option>
                                            </select><span tabindex="0" id="ui-id-2-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-2-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Disabled</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="content-block content-block-horizantal">
                            <div class="content-block-ttl">Other Info</div>
                            <div class="content-block-main">
                                <div class="content-input">
                                    <label><text>*</text>Priority : </label>
                                    <input type="number" class="input-number" value="" name="priority" placeholder="Enter Priority">
                                </div>
                                <div class="content-input">
                                    <label>Position : </label>
                                    <input type="text" name="position" value="" placeholder="position">
                                </div>
                                <div class="content-input">
                                    <label><text>*</text>Degree : </label>
                                    <input type="text" class="input-text" name="degree" value="" placeholder="Degree" required="">
                                    <p class="content-input-error-name">Please enter doctor degree!</p>
                                </div>
                                <div class="content-input">
                                    <label>Specility : </label>
                                    <input type="text" name="specility" value="" placeholder="Specility">
                                </div>
                                <div class="content-input">
                                    <label><text>*</text>Experience : </label>
                                    <input type="number" class="input-number" name="experience" value="" placeholder="Experience" required="">
                                    <p class="content-input-error-name">Please enter doctor experience!</p>
                                </div>
                                <div class="content-input">
                                    <label>Awards : </label>
                                    <input type="text" name="awards" value="" placeholder="Awards">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content-block">
                    <div class="content-block-ttl">Social Link</div>
                    <div class="content-block-main">
                        <div class="content-input content-link">
                            <label>Facebook <i class="fa fa-facebook"></i> : </label>
                            <input type="url" name="facebook" value="" placeholder="Facebook URL">
                        </div>
                        <div class="content-input content-link">
                            <label>Twitter <i class="fa fa-twitter"></i> : </label>
                            <input type="url" name="twitter" value="" placeholder="Twitter URL">
                        </div>
                        <div class="content-input content-link">
                            <label>Google + <i class="fa fa-google"></i> : </label>
                            <input type="url" name="google" value="" placeholder="Google plus URL">
                        </div>
                        <div class="content-input content-link">
                            <label>Instagram <i class="fa fa-instagram"></i> : </label>
                            <input type="url" name="instagram" value="" placeholder="Instagram URL">
                        </div>
                    </div>
                </div>
                <div class="content-block">
                    <div class="content-block-ttl">Appointment Info</div>
                    <div class="content-block-main">
                        <div class="row bottom-border-1x content-block-horizantal">
                            <div class="col-sm-6">
                                <div class="content-input">
                                    <label>Start Time - before Lunch ( hh:mm ):</label>
                                    <input type="time" name="st1" value="" placeholder="Start Time">
                                    <p class="content-input-error-name">Please select time!</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="content-input">
                                    <label>End Time - before Lunch ( hh:mm ):</label>
                                    <input type="time" name="et1" value="" placeholder="End Time">
                                    <p class="content-input-error-name">Please select time</p>
                                </div>
                            </div>
                        </div>
                        <div class="row bottom-border-1x content-block-horizantal">
                            <div class="col-sm-6">
                                <div class="content-input">
                                    <label>Start Time - After Lunch ( hh:mm ):</label>
                                    <input type="time" name="st2" value="" placeholder="Start Time">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="content-input">
                                    <label>End Time - After Lunch ( hh:mm ):</label>
                                    <input type="time" name="et2" value="" placeholder="End Time">
                                </div>
                            </div>
                        </div>
                        <div class="content-input">
                            <label>Time Slot :<br>( in Minutes)</label>
                            <input type="number" name="slot" value="" placeholder="Slot">
                            <p class="content-input-error-name">Please enter time slot!</p>
                        </div>
                        <div class="content-input weekly-container">
                            <label>Weekly Holiday : </label>
                            <select name="weeklyList[]" id="doctor-list" multiple="multiple">
                                <option value="1">Monday</option>
                                <option value="2">Tuesday</option>
                                <option value="3">Wednesday</option>
                                <option value="4">Thursday</option>
                                <option value="5">Friday</option>
                                <option value="6">Saturday</option>
                                <option value="0">Sunday</option>
                            </select>
                            <input type="hidden" id="weekly-holiday" value="">
                            <p class="content-description">Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple items.</p>
                        </div>
                        <div class="content-input">
                            <label>National Holiday : </label>
                            <div id="other-holiday" class="hasDatepicker"><div class="ui-datepicker-inline ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all ui-datepicker-multi ui-datepicker-multi-3" style="display: block; width: 51em;"><div class="ui-datepicker-group ui-datepicker-group-first"><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-left"><a class="ui-datepicker-prev ui-corner-all ui-state-disabled" title="Prev"><span class="ui-icon ui-icon-circle-triangle-w">Prev</span></a><div class="ui-datepicker-title"><span class="ui-datepicker-month">September</span>&nbsp;<span class="ui-datepicker-year">2018</span></div></div><table class="ui-datepicker-calendar"><thead><tr><th scope="col" class="ui-datepicker-week-end"><span title="Sunday">Su</span></th><th scope="col"><span title="Monday">Mo</span></th><th scope="col"><span title="Tuesday">Tu</span></th><th scope="col"><span title="Wednesday">We</span></th><th scope="col"><span title="Thursday">Th</span></th><th scope="col"><span title="Friday">Fr</span></th><th scope="col" class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th></tr></thead><tbody><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">1</span></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">2</span></td><td class=" ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">3</span></td><td class=" ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">4</span></td><td class=" ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">5</span></td><td class=" ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">6</span></td><td class=" ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">7</span></td><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">8</span></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">9</span></td><td class=" ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">10</span></td><td class=" ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">11</span></td><td class=" ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">12</span></td><td class=" ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">13</span></td><td class=" ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">14</span></td><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">15</span></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">16</span></td><td class=" ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">17</span></td><td class=" ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">18</span></td><td class=" ui-datepicker-days-cell-over undefined ui-datepicker-current-day ui-datepicker-today" data-handler="selectDay" data-event="click" data-month="8" data-year="2018"><a class="ui-state-default ui-state-highlight ui-state-active ui-state-hover" href="#">19</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="8" data-year="2018"><a class="ui-state-default" href="#">20</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="8" data-year="2018"><a class="ui-state-default" href="#">21</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="8" data-year="2018"><a class="ui-state-default" href="#">22</a></td></tr><tr><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="8" data-year="2018"><a class="ui-state-default" href="#">23</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="8" data-year="2018"><a class="ui-state-default" href="#">24</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="8" data-year="2018"><a class="ui-state-default" href="#">25</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="8" data-year="2018"><a class="ui-state-default" href="#">26</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="8" data-year="2018"><a class="ui-state-default" href="#">27</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="8" data-year="2018"><a class="ui-state-default" href="#">28</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="8" data-year="2018"><a class="ui-state-default" href="#">29</a></td></tr><tr><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="8" data-year="2018"><a class="ui-state-default" href="#">30</a></td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr></tbody></table></div><div class="ui-datepicker-group ui-datepicker-group-middle"><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix"><div class="ui-datepicker-title"><span class="ui-datepicker-month">October</span>&nbsp;<span class="ui-datepicker-year">2018</span></div></div><table class="ui-datepicker-calendar"><thead><tr><th scope="col" class="ui-datepicker-week-end"><span title="Sunday">Su</span></th><th scope="col"><span title="Monday">Mo</span></th><th scope="col"><span title="Tuesday">Tu</span></th><th scope="col"><span title="Wednesday">We</span></th><th scope="col"><span title="Thursday">Th</span></th><th scope="col"><span title="Friday">Fr</span></th><th scope="col" class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th></tr></thead><tbody><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="9" data-year="2018"><a class="ui-state-default" href="#">1</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="9" data-year="2018"><a class="ui-state-default" href="#">2</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="9" data-year="2018"><a class="ui-state-default" href="#">3</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="9" data-year="2018"><a class="ui-state-default" href="#">4</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="9" data-year="2018"><a class="ui-state-default" href="#">5</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="9" data-year="2018"><a class="ui-state-default" href="#">6</a></td></tr><tr><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="9" data-year="2018"><a class="ui-state-default" href="#">7</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="9" data-year="2018"><a class="ui-state-default" href="#">8</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="9" data-year="2018"><a class="ui-state-default" href="#">9</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="9" data-year="2018"><a class="ui-state-default" href="#">10</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="9" data-year="2018"><a class="ui-state-default" href="#">11</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="9" data-year="2018"><a class="ui-state-default" href="#">12</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="9" data-year="2018"><a class="ui-state-default" href="#">13</a></td></tr><tr><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="9" data-year="2018"><a class="ui-state-default" href="#">14</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="9" data-year="2018"><a class="ui-state-default" href="#">15</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="9" data-year="2018"><a class="ui-state-default" href="#">16</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="9" data-year="2018"><a class="ui-state-default" href="#">17</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="9" data-year="2018"><a class="ui-state-default" href="#">18</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="9" data-year="2018"><a class="ui-state-default" href="#">19</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="9" data-year="2018"><a class="ui-state-default" href="#">20</a></td></tr><tr><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="9" data-year="2018"><a class="ui-state-default" href="#">21</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="9" data-year="2018"><a class="ui-state-default" href="#">22</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="9" data-year="2018"><a class="ui-state-default" href="#">23</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="9" data-year="2018"><a class="ui-state-default" href="#">24</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="9" data-year="2018"><a class="ui-state-default" href="#">25</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="9" data-year="2018"><a class="ui-state-default" href="#">26</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="9" data-year="2018"><a class="ui-state-default" href="#">27</a></td></tr><tr><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="9" data-year="2018"><a class="ui-state-default" href="#">28</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="9" data-year="2018"><a class="ui-state-default" href="#">29</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="9" data-year="2018"><a class="ui-state-default" href="#">30</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="9" data-year="2018"><a class="ui-state-default" href="#">31</a></td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr></tbody></table></div><div class="ui-datepicker-group ui-datepicker-group-last"><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-right"><a class="ui-datepicker-next ui-corner-all" data-handler="next" data-event="click" title="Next"><span class="ui-icon ui-icon-circle-triangle-e">Next</span></a><div class="ui-datepicker-title"><span class="ui-datepicker-month">November</span>&nbsp;<span class="ui-datepicker-year">2018</span></div></div><table class="ui-datepicker-calendar"><thead><tr><th scope="col" class="ui-datepicker-week-end"><span title="Sunday">Su</span></th><th scope="col"><span title="Monday">Mo</span></th><th scope="col"><span title="Tuesday">Tu</span></th><th scope="col"><span title="Wednesday">We</span></th><th scope="col"><span title="Thursday">Th</span></th><th scope="col"><span title="Friday">Fr</span></th><th scope="col" class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th></tr></thead><tbody><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">1</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">2</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">3</a></td></tr><tr><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">4</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">5</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">6</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">7</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">8</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">9</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">10</a></td></tr><tr><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">11</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">12</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">13</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">14</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">15</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">16</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">17</a></td></tr><tr><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">18</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">19</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">20</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">21</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">22</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">23</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">24</a></td></tr><tr><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">25</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">26</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">27</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">28</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">29</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">30</a></td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr></tbody></table></div><div class="ui-datepicker-row-break"></div><div class="ui-datepicker-group ui-datepicker-group-first"><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-left"><div class="ui-datepicker-title"><span class="ui-datepicker-month">December</span>&nbsp;<span class="ui-datepicker-year">2018</span></div></div><table class="ui-datepicker-calendar"><thead><tr><th scope="col" class="ui-datepicker-week-end"><span title="Sunday">Su</span></th><th scope="col"><span title="Monday">Mo</span></th><th scope="col"><span title="Tuesday">Tu</span></th><th scope="col"><span title="Wednesday">We</span></th><th scope="col"><span title="Thursday">Th</span></th><th scope="col"><span title="Friday">Fr</span></th><th scope="col" class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th></tr></thead><tbody><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="11" data-year="2018"><a class="ui-state-default" href="#">1</a></td></tr><tr><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="11" data-year="2018"><a class="ui-state-default" href="#">2</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="11" data-year="2018"><a class="ui-state-default" href="#">3</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="11" data-year="2018"><a class="ui-state-default" href="#">4</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="11" data-year="2018"><a class="ui-state-default" href="#">5</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="11" data-year="2018"><a class="ui-state-default" href="#">6</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="11" data-year="2018"><a class="ui-state-default" href="#">7</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="11" data-year="2018"><a class="ui-state-default" href="#">8</a></td></tr><tr><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="11" data-year="2018"><a class="ui-state-default" href="#">9</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="11" data-year="2018"><a class="ui-state-default" href="#">10</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="11" data-year="2018"><a class="ui-state-default" href="#">11</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="11" data-year="2018"><a class="ui-state-default" href="#">12</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="11" data-year="2018"><a class="ui-state-default" href="#">13</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="11" data-year="2018"><a class="ui-state-default" href="#">14</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="11" data-year="2018"><a class="ui-state-default" href="#">15</a></td></tr><tr><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="11" data-year="2018"><a class="ui-state-default" href="#">16</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="11" data-year="2018"><a class="ui-state-default" href="#">17</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="11" data-year="2018"><a class="ui-state-default" href="#">18</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="11" data-year="2018"><a class="ui-state-default" href="#">19</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="11" data-year="2018"><a class="ui-state-default" href="#">20</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="11" data-year="2018"><a class="ui-state-default" href="#">21</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="11" data-year="2018"><a class="ui-state-default" href="#">22</a></td></tr><tr><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="11" data-year="2018"><a class="ui-state-default" href="#">23</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="11" data-year="2018"><a class="ui-state-default" href="#">24</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="11" data-year="2018"><a class="ui-state-default" href="#">25</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="11" data-year="2018"><a class="ui-state-default" href="#">26</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="11" data-year="2018"><a class="ui-state-default" href="#">27</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="11" data-year="2018"><a class="ui-state-default" href="#">28</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="11" data-year="2018"><a class="ui-state-default" href="#">29</a></td></tr><tr><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="11" data-year="2018"><a class="ui-state-default" href="#">30</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="11" data-year="2018"><a class="ui-state-default" href="#">31</a></td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr></tbody></table></div><div class="ui-datepicker-group ui-datepicker-group-middle"><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix"><div class="ui-datepicker-title"><span class="ui-datepicker-month">January</span>&nbsp;<span class="ui-datepicker-year">2019</span></div></div><table class="ui-datepicker-calendar"><thead><tr><th scope="col" class="ui-datepicker-week-end"><span title="Sunday">Su</span></th><th scope="col"><span title="Monday">Mo</span></th><th scope="col"><span title="Tuesday">Tu</span></th><th scope="col"><span title="Wednesday">We</span></th><th scope="col"><span title="Thursday">Th</span></th><th scope="col"><span title="Friday">Fr</span></th><th scope="col" class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th></tr></thead><tbody><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="#">1</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="#">2</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="#">3</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="#">4</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="#">5</a></td></tr><tr><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="#">6</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="#">7</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="#">8</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="#">9</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="#">10</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="#">11</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="#">12</a></td></tr><tr><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="#">13</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="#">14</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="#">15</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="#">16</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="#">17</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="#">18</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="#">19</a></td></tr><tr><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="#">20</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="#">21</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="#">22</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="#">23</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="#">24</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="#">25</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="#">26</a></td></tr><tr><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="#">27</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="#">28</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="#">29</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="#">30</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="0" data-year="2019"><a class="ui-state-default" href="#">31</a></td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr></tbody></table></div><div class="ui-datepicker-group ui-datepicker-group-last"><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-right"><div class="ui-datepicker-title"><span class="ui-datepicker-month">February</span>&nbsp;<span class="ui-datepicker-year">2019</span></div></div><table class="ui-datepicker-calendar"><thead><tr><th scope="col" class="ui-datepicker-week-end"><span title="Sunday">Su</span></th><th scope="col"><span title="Monday">Mo</span></th><th scope="col"><span title="Tuesday">Tu</span></th><th scope="col"><span title="Wednesday">We</span></th><th scope="col"><span title="Thursday">Th</span></th><th scope="col"><span title="Friday">Fr</span></th><th scope="col" class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th></tr></thead><tbody><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="1" data-year="2019"><a class="ui-state-default" href="#">1</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="1" data-year="2019"><a class="ui-state-default" href="#">2</a></td></tr><tr><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="1" data-year="2019"><a class="ui-state-default" href="#">3</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="1" data-year="2019"><a class="ui-state-default" href="#">4</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="1" data-year="2019"><a class="ui-state-default" href="#">5</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="1" data-year="2019"><a class="ui-state-default" href="#">6</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="1" data-year="2019"><a class="ui-state-default" href="#">7</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="1" data-year="2019"><a class="ui-state-default" href="#">8</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="1" data-year="2019"><a class="ui-state-default" href="#">9</a></td></tr><tr><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="1" data-year="2019"><a class="ui-state-default" href="#">10</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="1" data-year="2019"><a class="ui-state-default" href="#">11</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="1" data-year="2019"><a class="ui-state-default" href="#">12</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="1" data-year="2019"><a class="ui-state-default" href="#">13</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="1" data-year="2019"><a class="ui-state-default" href="#">14</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="1" data-year="2019"><a class="ui-state-default" href="#">15</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="1" data-year="2019"><a class="ui-state-default" href="#">16</a></td></tr><tr><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="1" data-year="2019"><a class="ui-state-default" href="#">17</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="1" data-year="2019"><a class="ui-state-default" href="#">18</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="1" data-year="2019"><a class="ui-state-default" href="#">19</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="1" data-year="2019"><a class="ui-state-default" href="#">20</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="1" data-year="2019"><a class="ui-state-default" href="#">21</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="1" data-year="2019"><a class="ui-state-default" href="#">22</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="1" data-year="2019"><a class="ui-state-default" href="#">23</a></td></tr><tr><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="1" data-year="2019"><a class="ui-state-default" href="#">24</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="1" data-year="2019"><a class="ui-state-default" href="#">25</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="1" data-year="2019"><a class="ui-state-default" href="#">26</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="1" data-year="2019"><a class="ui-state-default" href="#">27</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="1" data-year="2019"><a class="ui-state-default" href="#">28</a></td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr></tbody></table></div><div class="ui-datepicker-row-break"></div></div></div>
                            <input type="hidden" name="nationalList" value="2000-12-25" id="altField">
                            <input type="hidden" id="other-holiday-list" value="">
                        </div>
                        <div class="content-input">
                            <label><text>*</text>Appointment Status : </label>
                            <select name="appointment" id="ui-id-3" class="select-list" style="display: none;">
                                <option value="0">Disabled</option>
                                <option value="1">Enabled</option>
                            </select><span tabindex="0" id="ui-id-3-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-3-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Disabled</span></span>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="id" value="">
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
    </script><div id="zsiqwidget"></div>

</div>


<input type="file" multiple="multiple" class="dz-hidden-input" accept="image/*" style="visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;"><div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div><div class="ui-selectmenu-menu ui-front"><ul aria-hidden="true" aria-labelledby="ui-id-1-button" id="ui-id-1-menu" role="listbox" tabindex="0" class="ui-menu ui-corner-bottom ui-widget ui-widget-content"></ul></div><div class="ui-selectmenu-menu ui-front"><ul aria-hidden="true" aria-labelledby="ui-id-2-button" id="ui-id-2-menu" role="listbox" tabindex="0" class="ui-menu ui-corner-bottom ui-widget ui-widget-content"></ul></div><div class="ui-selectmenu-menu ui-front"><ul aria-hidden="true" aria-labelledby="ui-id-3-button" id="ui-id-3-menu" role="listbox" tabindex="0" class="ui-menu ui-corner-bottom ui-widget ui-widget-content"></ul></div><div class="zsiq_floatmain zsiq_theme1 siq_bR" style="visibility: hidden; display: block;"><div id="zsiq_float" class="zsiq_float " style="font-family:salesiq-font"><div class="zsiq_flt_rel"><em id="zsiq_agtpic" class="zsiq_user sqico-chat"></em><div id="titlediv" class="zsiq_cnt"><div id="zsiq_maintitle" class="zsiq_ellips" title="We're Online!">We're Online!</div><p id="zsiq_byline" class="zsiq_ellips" title="How may I help you today?">How may I help you today?</p></div><em id="zsiq_unreadcnt" class="zsiq_unrdcnt" style="display: none;"></em><em id="zsiq_avcall" class="zsiqmin_unrdcnt zsiq_unrdcnt sqico-mincall" style="display: none;"></em></div></div></div><style id="floatthemecss">.zsiq_flt_rel{ background-color:#45a4ec !important;}</style><div class="zls-sptwndw  siqembed siqtrans siqhide zsiq-mobhgt siq_rht zsiq_size2" embedtheme="1" style="visibility: hidden; top: -10000px; display: block;"><div id="siqcht" class="zls-prelative"><iframe id="siqiframe" seamless="seamless" height="460" width="100%"></iframe></div></div>
</body>