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
    $('#patient').show();
    $('#patient-li>a').addClass('active');</script>
</script>
<!-- Request list page start -->
<div class="page-hdr">
    <div class="row">
        <div class="col-8 page-name">
            <h1><i class="fa fa-envelope"></i>Requests</h1>
        </div>
        <div class="col-4 page-menu">
            <a id="cancel" href="index.php?route=request" data-toggle="tooltip" data-placement="left" title="Reload"><i class="fa fa-refresh"></i></a>
            <a href="index.php?route=request/add" data-toggle="tooltip" data-placement="left" title="Add Request"><i class="fa fa-plus"></i></a>
        </div>
    </div>
</div>
<div class="content">
    <table id="card-table" class="table request-table">
        <thead>
            <tr>
                <th style="display: none;"></th>
            </tr>
        </thead>
        <tbody>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">1</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>23 Aug 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Jokin Cuello</div>
                                        <div class="card-text">jokin.cuello@openlanak.com</div>
                                        <div class="card-text">650815852</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Testing</p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=96" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="96">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">2</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>12 Aug 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Pipoca</div>
                                        <div class="card-text">carllos_334@msn.com</div>
                                        <div class="card-text">79998155757</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>dente</p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=95" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="95">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">3</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>30 Jul 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">ezetusi</div>
                                        <div class="card-text">ibahawuq@ounmail.com</div>
                                        <div class="card-text">89561862938</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Despite writes parallel at-risk behaviours. </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=94" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="94">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">4</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>30 Jul 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">eejabeyarof</div>
                                        <div class="card-text">ewucoca@ounmail.com</div>
                                        <div class="card-text">83382183573</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Transfer cephalosporins, else; exudation haemorrhage; drill. </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=93" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="93">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">5</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>27 Jul 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">ehoixococuofi</div>
                                        <div class="card-text">usinedoq@abujmail.com</div>
                                        <div class="card-text">87557446388</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Severe fore, shoe metabolize decompressed claims. </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=92" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="92">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">6</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>26 Jul 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">olanleqaja</div>
                                        <div class="card-text">ocivpo@femail.com</div>
                                        <div class="card-text">88371416582</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Cervical invited artery, prongs malnourished mobilize, thin. </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=91" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="91">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">7</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>25 Jul 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">auszaowoqag</div>
                                        <div class="card-text">ijoxoxeh@maurmail.com</div>
                                        <div class="card-text">83479633579</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Place medullaris phases: turgor 2. </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=90" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="90">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">8</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>25 Jul 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">cijorobe</div>
                                        <div class="card-text">aqamacaf@iqmail.com</div>
                                        <div class="card-text">84512232979</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>The sensibility wealthy changes: relevant; warranted. </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=89" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="89">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">9</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>25 Jul 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">oehuecibo</div>
                                        <div class="card-text">altusw@agemail.com</div>
                                        <div class="card-text">84166255651</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>However isolated medio-inferior hark prove reproducible. </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=88" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="88">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">10</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>25 Jul 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">ahegsmeiwet</div>
                                        <div class="card-text">asolqujut@maurmail.com</div>
                                        <div class="card-text">82348986228</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Usually testing mundane involving home current. </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=87" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="87">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">11</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>25 Jul 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">rohuguki</div>
                                        <div class="card-text">okuowo@agemail.com</div>
                                        <div class="card-text">88496974919</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Note fibres anaemia: settle: otherwise, detail. </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=86" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="86">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">12</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>25 Jul 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">asogubuaox</div>
                                        <div class="card-text">ewqiku@iqmail.com</div>
                                        <div class="card-text">81114932686</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>English unearth fragments circular, internet. </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=85" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="85">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">13</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>25 Jul 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">xejuzadum</div>
                                        <div class="card-text">ervoqeala@iqmail.com</div>
                                        <div class="card-text">88118912116</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Choice bone: predictive reinflate, antibiotics. </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=84" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="84">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">14</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>20 Jul 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">verma</div>
                                        <div class="card-text">vermaniraj1502@gmail.com</div>
                                        <div class="card-text">9572316171</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>ghrfjyh</p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=83" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="83">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">15</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>10 Jul 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">aggh rtty</div>
                                        <div class="card-text">arghya9@gmail.com</div>
                                        <div class="card-text">8582858844</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>bf fhrhsh</p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=82" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="82">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">16</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>09 Jul 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">surinder Kaur</div>
                                        <div class="card-text">test@test.com</div>
                                        <div class="card-text">1234567890</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>They have charged me double</p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=81" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="81">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">17</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>20 Jun 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Solomon Mwanga</div>
                                        <div class="card-text">jnrsolomon@gmail.com</div>
                                        <div class="card-text">715135666</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>ddddd</p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=80" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="80">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">18</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>12 Jun 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">AmeliaW</div>
                                        <div class="card-text">ad@ad.com</div>
                                        <div class="card-text">9999999999999999999999999999</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Test message</p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=79" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="79">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">19</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>05 Jun 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Name</div>
                                        <div class="card-text">admin@nhpc.us</div>
                                        <div class="card-text">3034826824</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Hello</p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=78" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="78">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">20</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>23 May 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">elourukato</div>
                                        <div class="card-text">ruoqef@dsdsd.domailnew.com</div>
                                        <div class="card-text">84435766379</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Others: flatten flow, vaccination, messages. </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=77" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="77">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">21</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>23 May 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">xucogicy</div>
                                        <div class="card-text">oxuyejupa@dsdsd.domailnew.com</div>
                                        <div class="card-text">85987383863</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Inappropriate philosophies whistle, raise by: discovered. </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=76" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="76">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">22</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>22 May 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">ujeozewuroine</div>
                                        <div class="card-text">tasein@asassd.domailnew.com</div>
                                        <div class="card-text">83337979733</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>I sinus, supero-medially, days' opioids. </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=75" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="75">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">23</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>22 May 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">ibiludakierun</div>
                                        <div class="card-text">elojer@asassd.domailnew.com</div>
                                        <div class="card-text">89491854283</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Transfer epidural tries cupped incongruent mobilized. </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=74" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="74">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">24</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>20 May 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">eixuvir</div>
                                        <div class="card-text">ixelixiya@emm.domailnew.com</div>
                                        <div class="card-text">88542432548</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Flow constituents suprachiasmatic first impaired. </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=73" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="73">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">25</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>20 May 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">ikadaepa</div>
                                        <div class="card-text">otiqalife@emm.domailnew.com</div>
                                        <div class="card-text">81482768167</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Antiplatelet nutrients siphoned rewards torch firm, suspicious. </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=72" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="72">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">26</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>20 May 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">eoketesiogoq</div>
                                        <div class="card-text">ukeusisu@emm.domailnew.com</div>
                                        <div class="card-text">81755263557</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>In lesser uncharacteristic pyrophosphate gently. </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=71" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="71">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">27</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>20 May 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">akiisabohuv</div>
                                        <div class="card-text">orialita@emm.domailnew.com</div>
                                        <div class="card-text">83657261695</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Lipids appetite, hernia commercial network. </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=70" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="70">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">28</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>20 May 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">aqovgazyesix</div>
                                        <div class="card-text">enehodi@emm.domailnew.com</div>
                                        <div class="card-text">86728464525</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Any identified defuses relapse circumferential fistulas. </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=69" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="69">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">29</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>17 May 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">ivahovodeho</div>
                                        <div class="card-text">amalep@asdas.domailnew.com</div>
                                        <div class="card-text">81384164311</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Make cyanosis metatarsal ventricular predicts nonjudgmental practicality. </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=68" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="68">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">30</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>17 May 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">ekafutocogila</div>
                                        <div class="card-text">aadigir@asdas.domailnew.com</div>
                                        <div class="card-text">83982959477</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Hb debrided well-being, inevitable tending recur. </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=67" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="67">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">31</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>16 May 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">ihodboyaaqo</div>
                                        <div class="card-text">eciqujij@dsdsd.domailnew.com</div>
                                        <div class="card-text">83674565941</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Excellent family-only concerned airtight elevation. </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=66" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="66">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">32</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>16 May 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">etanohulew</div>
                                        <div class="card-text">ihijucuk@dsdsd.domailnew.com</div>
                                        <div class="card-text">83679851697</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>V uncontrollable eclampsia sounds site induce arrhythmias. </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=65" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="65">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">33</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>19 Apr 2018</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Kim Abrea</div>
                                        <div class="card-text">kimabreakingemo@gmail.com</div>
                                        <div class="card-text">09057620346</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Release of records</p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=64" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="64">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">34</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>16 Jul 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">vrushali</div>
                                        <div class="card-text">mali.vrushali4@gmail.com</div>
                                        <div class="card-text">9876543210</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>vghjj</p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=35" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="35">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-0">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">35</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>08 Jun 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>About my Reports </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique suntasdadsada</p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=34" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="34">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-1">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">36</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>07 Jun 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>About my Reports </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-success badge-sm">Closed</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=33" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="33">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">37</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>05 Jun 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>About my Reports </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=32" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="32">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">38</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>05 Jun 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>About my Reports </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=31" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="31">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-0">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">39</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>02 Jun 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>About my Reports</p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary">We are trying our best to give you perfect system
</p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=30" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="30">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-1">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">40</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>02 Jun 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>About my Reports </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-success badge-sm">Closed</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=29" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="29">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-1">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">41</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>02 Jun 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>About my Reports </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary">Veros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enimVeros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enimVeros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enim</p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-success badge-sm">Closed</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=28" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="28">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">42</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>02 Jun 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>About my Reports </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=27" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="27">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-1">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">43</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>02 Jun 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>About my Reports </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary">No, you do not need to come just send us your reports and we will see</p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-success badge-sm">Closed</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=26" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="26">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">44</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>01 Jun 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>About my Reports </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=25" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="25">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-1">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">45</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>01 Jun 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>About my Reports </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-success badge-sm">Closed</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=24" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="24">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-0">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">46</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>01 Jun 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Veros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enim</p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary">Veros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enimVeros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enimVeros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enim</p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=23" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="23">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">47</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>01 Jun 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>About my Reports </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=22" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="22">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-1">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">48</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>01 Jun 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>About my Reports </p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-success badge-sm">Closed</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=21" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="21">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">49</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>19 May 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Veros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enim</p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary">Veros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enimVeros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enim</p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=20" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="20">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-1">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">50</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>17 May 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Veros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enim</p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary">Veros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enimVeros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enimVeros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enimVeros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enimVeros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enim</p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-success badge-sm">Closed</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=19" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="19">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">51</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>17 May 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Veros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enim</p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=18" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="18">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">52</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>17 May 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Veros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enim</p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=17" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="17">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-1">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">53</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>17 May 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Veros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enim</p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-success badge-sm">Closed</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=16" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="16">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">54</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>08 May 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Veros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enim</p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=15" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="15">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-1">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">55</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>08 May 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Veros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enim</p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-success badge-sm">Closed</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=14" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="14">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">56</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>08 May 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>According to media report</p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-warning badge-sm">Opened</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=13" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="13">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-1">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">57</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>08 May 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Hello mahendra how you doing</p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-success badge-sm">Closed</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=12" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="12">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-1">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">58</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>08 May 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Veros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enim</p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-success badge-sm">Closed</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=11" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="11">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-1">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">59</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>27 Apr 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Veros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enim</p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary">Veros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enimVeros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enimVeros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enimVeros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enimVeros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enimVeros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enimVeros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enim</p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-success badge-sm">Closed</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=9" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="9">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-1">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">60</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>20 Apr 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Veros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enim</p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary">Veros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enimVeros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enim</p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-success badge-sm">Closed</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=8" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="8">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-1">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">61</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>18 Apr 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Veros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enim</p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary">Veros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enim</p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-success badge-sm">Closed</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=7" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="7">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-1">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">62</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>08 Apr 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>Veros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enim</p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary">Veros tue Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enim</p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-success badge-sm">Closed</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=6" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="6">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                        <tr>
                <td>
                    <div class="card-block">
                        <div class="card requester-1">
                            <div class="row card-hdr">
                                <div class="col-xs-2 card-left text-left">
                                    <span class="text-center">63</span>
                                </div>
                                <div class="col-xs-8 pull-right text-right card-right">
                                    <em>Date :</em> <span>08 Apr 2017</span>
                                </div>
                            </div>
                            <div class="row card-bdy">
                                <div class="col-sm-4 text-left">
                                    <div class="card-img card-icon">
                                        <i class="fa fa-user-o fa-3x"></i>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-name">Requester Name</div>
                                        <div class="card-text">support@pepdev.com</div>
                                        <div class="card-text">0000000000</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-rocket"></i> Subject</span>
                                    <p>According to mmedia report</p>
                                </div>
                                <div class="col-sm-4 text-left requester-subject">
                                    <span><i class="fa fa-comment"></i> Remark</span>
                                    <p class="color-primary"></p>
                                </div>
                            </div>
                            <div class="card-ftr">
                                <div class="col-sm-8 text-left">
                                                                        <span class="badge badge-success badge-sm">Closed</span>
                                                                    </div>
                                <div class="card-action">
                                    <a href="index.php?route=request/edit&id=5" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <input type="hidden" value="5">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                    </tbody>
    </table>
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
                <form action="index.php?route=request/delete" class="delete-card-button" method="post">
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