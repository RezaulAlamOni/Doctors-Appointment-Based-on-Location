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
<!-- Invoice List Page start -->
<div class="page-hdr">
    <div class="row">
        <div class="col-8 page-name">
            <h1><i class="fa fa-credit-card"></i>Invoices</h1>
        </div>
        <div class="col-4 page-menu">
            <a id="cancel" href="index.php?route=invoice" data-toggle="tooltip" data-placement="left" title="Reload"><i class="fa fa-refresh"></i></a>
            <a href="index.php?route=invoice/add&id=0" data-toggle="tooltip" data-placement="left" title="Create Invoice"><i class="fa fa-plus"></i></a>
        </div>
    </div> 
</div>
<div class="content">
    <div class="well">
        <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <label class="control-label">Doctor</label>
                    <select id="filter-doctor" class="form-control">
                        <option value=""></option>
                                                <option value="Dr. Daniel Barnes">Dr. Daniel Barnes</option>
                                                <option value="Dr. Melissa Bates">Dr. Melissa Bates</option>
                                                <option value="Dr. Cheri Aria">Dr. Cheri Aria</option>
                                                <option value="Dr. Steve Soeren">Dr. Steve Soeren</option>
                                                <option value="Dr. Theodore Bennett">Dr. Theodore Bennett</option>
                                                <option value="Dr. Barbara Baker">Dr. Barbara Baker</option>
                                                <option value="Dr. Linda Adams">Dr. Linda Adams</option>
                                                <option value="Dr. Janet Collins">Dr. Janet Collins</option>
                                                <option value="Dr. Vedhraj Jain">Dr. Vedhraj Jain</option>
                                                <option value="Dr. Emily Rasberry">Dr. Emily Rasberry</option>
                                                <option value="Dr. Nancy Allen">Dr. Nancy Allen</option>
                                            </select>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label class="control-label">Start Date</label>
                    <input type="text" id="filter-start-date" class="form-control filter-date">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label class="control-label">End Date</label>
                    <input type="text" id="filter-end-date" class="form-control filter-date">
                </div>
            </div>
            <div class="col-sm-12">
                <div class="pull-right">
                    <button id="reset" class="btn btn-default btn-sm">Reset</button>
                    <button id="filter-invoice" class="btn btn-primary btn-sm"><i class="fa fa-filter"></i>Filter</button>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            /*Doctor filter*/
            function filterByDoctor(filter) {
                $('.invoice-container .invoice-card').each(function (index) {
                    var x = "Dr. ",
                    doctor = x.concat($(this).find('.invoice-doctor-name').text().trim());
                    if (doctor.indexOf(filter) == 0) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            }
            /*Single date filter*/
            function filterByDate(filter) {
                $('.invoice-container .invoice-card').each(function (index) {
                    var date = $(this).find('.card-ftr span').text().trim();
                    if (date.indexOf(filter) == 0 && $(this).css('display') == 'block') {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            }
            /*Date range filter*/    
            function filterByDateRange(start_date, end_date) {
                var start_date = new Date(start_date),
                end_date = new Date(end_date);
                $('.invoice-container .invoice-card').each(function (index) {
                    var date = new Date($(this).find('.card-ftr span').text().trim());
                    if ( date >= start_date && $(this).css('display') == 'block') {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                    if (date > end_date  && $(this).css('display') == 'block') {
                        $(this).hide();
                    }
                });
            }
            /*Filter Submit*/
            $('#filter-invoice').click(function() {

            });
            $('#reset').click(function() {
                window.location.reload();
            })
            var invoiceTable;
            var invoiceSettings;
            $(document).ready(function(){
                invoiceTable = $('.invoice-table').DataTable( {
                    "aLengthMenu": [[10, 25, 50, 75, -1], [10, 25, 50, 75, "All"]],
                    "iDisplayLength": 25,
                    "bSort": false,
                    "pagingType": "full_numbers"
                });
                invoiceSettings = invoiceTable.settings();
            });

            /*Filter Submit*/
            $('#filter-invoice').click(function() {
                invoiceSettings[0]._iDisplayLength = invoiceSettings[0].fnRecordsTotal();
                invoiceTable.draw();  
                $('.invoice-card').show();
                if ($('#filter-doctor').val() !== '') {
                    filterByDoctor($('#filter-doctor').val());
                }
                if ($('#filter-start-date').val() !== '' && $('#filter-end-date').val() !== '' ) {
                    filterByDateRange($('#filter-start-date').val(), $('#filter-end-date').val());
                }else if ($('#filter-start-date').val() !== '') {
                    filterByDate($('#filter-start-date').val());
                }
            });
        </script>
    </div>
    <div class="invoice-container">
        <table id="card-table" class="invoice-table table">
            <thead><tr><th style="display: none;"></th></tr></thead>
            <tbody>
                                <tr>
                    <td>
                        <div class="card-block invoice-card">
                            <div class="card">
                                <div class="row card-hdr">
                                    <div class="col-2 card-left text-left">
                                        <span class="text-center">1</span>
                                    </div>
                                    <div class="col-10 text-right card-right">
                                        <em>Invoice Id : </em> <span>INV-0054</span>
                                    </div>
                                </div>
                                <div class="row card-bdy">
                                    <div class="col-sm-7 text-left">
                                        <div class="card-img card-icon">
                                            <i class="fa fa-user-o fa-3x"></i>
                                        </div>
                                        <div class="card-info">
                                            <div class="card-name">Charlie Runkle</div>
                                            <div class="card-text">support@pepdev.com</div>
                                            <div class="card-text">0011223344</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 text-right">
                                        <a href="index.php?route=themeoption/doctor/edit&id=3" class="invoice-doctor-name" target="_blank"><i class="fa fa-user-md"></i>Melissa Bates</a>
                                        <div class="invoice-amount">
                                            <p><span>Amount - </span><span>Rs. 315.00</span></p>
                                            <p><span>Due - </span><span>Rs. 15.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-ftr">
                                    <div class="text-left">
                                        <span class="badge badge-light badge-sm">08 Oct 2017</span>
                                                                                <a href="index.php?route=appointment/edit&id=19" class="badge badge-primary badge-sm" target="_blank">Go to Appointment</a>
                                                                            </div>
                                    <div class="card-action">
                                        <a href="index.php?route=invoice/view&id=54" class="btn btn-outline btn-secondary btn-outline-1x btn-circle" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                        <a href="index.php?route=invoice/edit&id=54" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                        <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i><input type="hidden" value="54"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                                <tr>
                    <td>
                        <div class="card-block invoice-card">
                            <div class="card">
                                <div class="row card-hdr">
                                    <div class="col-2 card-left text-left">
                                        <span class="text-center">2</span>
                                    </div>
                                    <div class="col-10 text-right card-right">
                                        <em>Invoice Id : </em> <span>INV-0051</span>
                                    </div>
                                </div>
                                <div class="row card-bdy">
                                    <div class="col-sm-7 text-left">
                                        <div class="card-img card-icon">
                                            <i class="fa fa-user-o fa-3x"></i>
                                        </div>
                                        <div class="card-info">
                                            <div class="card-name">johon</div>
                                            <div class="card-text">johon@johon.com</div>
                                            <div class="card-text">123456789</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 text-right">
                                        <a href="index.php?route=themeoption/doctor/edit&id=3" class="invoice-doctor-name" target="_blank"><i class="fa fa-user-md"></i>Melissa Bates</a>
                                        <div class="invoice-amount">
                                            <p><span>Amount - </span><span>$ 300.00</span></p>
                                            <p><span>Due - </span><span>$ 0.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-ftr">
                                    <div class="text-left">
                                        <span class="badge badge-light badge-sm">08 Oct 2017</span>
                                                                                <a href="index.php?route=appointment/edit&id=308" class="badge badge-primary badge-sm" target="_blank">Go to Appointment</a>
                                                                            </div>
                                    <div class="card-action">
                                        <a href="index.php?route=invoice/view&id=51" class="btn btn-outline btn-secondary btn-outline-1x btn-circle" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                        <a href="index.php?route=invoice/edit&id=51" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                        <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i><input type="hidden" value="51"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                                <tr>
                    <td>
                        <div class="card-block invoice-card">
                            <div class="card">
                                <div class="row card-hdr">
                                    <div class="col-2 card-left text-left">
                                        <span class="text-center">3</span>
                                    </div>
                                    <div class="col-10 text-right card-right">
                                        <em>Invoice Id : </em> <span>INV-0038</span>
                                    </div>
                                </div>
                                <div class="row card-bdy">
                                    <div class="col-sm-7 text-left">
                                        <div class="card-img card-icon">
                                            <i class="fa fa-user-o fa-3x"></i>
                                        </div>
                                        <div class="card-info">
                                            <div class="card-name">Vidanata Rovana</div>
                                            <div class="card-text">support@pepdev.com</div>
                                            <div class="card-text">0011223344</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 text-right">
                                        <a href="index.php?route=themeoption/doctor/edit&id=8" class="invoice-doctor-name" target="_blank"><i class="fa fa-user-md"></i>Linda Adams</a>
                                        <div class="invoice-amount">
                                            <p><span>Amount - </span><span>$ 200.00</span></p>
                                            <p><span>Due - </span><span>$ 0.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-ftr">
                                    <div class="text-left">
                                        <span class="badge badge-light badge-sm">08 Oct 2017</span>
                                                                                <a href="index.php?route=appointment/edit&id=88" class="badge badge-primary badge-sm" target="_blank">Go to Appointment</a>
                                                                            </div>
                                    <div class="card-action">
                                        <a href="index.php?route=invoice/view&id=38" class="btn btn-outline btn-secondary btn-outline-1x btn-circle" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                        <a href="index.php?route=invoice/edit&id=38" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                        <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i><input type="hidden" value="38"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                                <tr>
                    <td>
                        <div class="card-block invoice-card">
                            <div class="card">
                                <div class="row card-hdr">
                                    <div class="col-2 card-left text-left">
                                        <span class="text-center">4</span>
                                    </div>
                                    <div class="col-10 text-right card-right">
                                        <em>Invoice Id : </em> <span>INV-0037</span>
                                    </div>
                                </div>
                                <div class="row card-bdy">
                                    <div class="col-sm-7 text-left">
                                        <div class="card-img card-icon">
                                            <i class="fa fa-user-o fa-3x"></i>
                                        </div>
                                        <div class="card-info">
                                            <div class="card-name">Peter Jackson</div>
                                            <div class="card-text">support@pepdev.com</div>
                                            <div class="card-text">0011223344</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 text-right">
                                        <a href="index.php?route=themeoption/doctor/edit&id=5" class="invoice-doctor-name" target="_blank"><i class="fa fa-user-md"></i>Steve Soeren</a>
                                        <div class="invoice-amount">
                                            <p><span>Amount - </span><span>$ 107.00</span></p>
                                            <p><span>Due - </span><span>$ 107.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-ftr">
                                    <div class="text-left">
                                        <span class="badge badge-light badge-sm">08 Oct 2017</span>
                                                                                <a href="index.php?route=appointment/edit&id=125" class="badge badge-primary badge-sm" target="_blank">Go to Appointment</a>
                                                                            </div>
                                    <div class="card-action">
                                        <a href="index.php?route=invoice/view&id=37" class="btn btn-outline btn-secondary btn-outline-1x btn-circle" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                        <a href="index.php?route=invoice/edit&id=37" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                        <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i><input type="hidden" value="37"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                                <tr>
                    <td>
                        <div class="card-block invoice-card">
                            <div class="card">
                                <div class="row card-hdr">
                                    <div class="col-2 card-left text-left">
                                        <span class="text-center">5</span>
                                    </div>
                                    <div class="col-10 text-right card-right">
                                        <em>Invoice Id : </em> <span>INV-0035</span>
                                    </div>
                                </div>
                                <div class="row card-bdy">
                                    <div class="col-sm-7 text-left">
                                        <div class="card-img card-icon">
                                            <i class="fa fa-user-o fa-3x"></i>
                                        </div>
                                        <div class="card-info">
                                            <div class="card-name">Charlie Shen</div>
                                            <div class="card-text">support@pepdev.com</div>
                                            <div class="card-text">0011223344</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 text-right">
                                        <a href="index.php?route=themeoption/doctor/edit&id=10" class="invoice-doctor-name" target="_blank"><i class="fa fa-user-md"></i>Vedhraj Jain</a>
                                        <div class="invoice-amount">
                                            <p><span>Amount - </span><span>$ 382.00</span></p>
                                            <p><span>Due - </span><span>$ 182.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-ftr">
                                    <div class="text-left">
                                        <span class="badge badge-light badge-sm">08 Oct 2017</span>
                                                                                <a href="index.php?route=appointment/edit&id=96" class="badge badge-primary badge-sm" target="_blank">Go to Appointment</a>
                                                                            </div>
                                    <div class="card-action">
                                        <a href="index.php?route=invoice/view&id=35" class="btn btn-outline btn-secondary btn-outline-1x btn-circle" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                        <a href="index.php?route=invoice/edit&id=35" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                        <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i><input type="hidden" value="35"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                                <tr>
                    <td>
                        <div class="card-block invoice-card">
                            <div class="card">
                                <div class="row card-hdr">
                                    <div class="col-2 card-left text-left">
                                        <span class="text-center">6</span>
                                    </div>
                                    <div class="col-10 text-right card-right">
                                        <em>Invoice Id : </em> <span>INV-0055</span>
                                    </div>
                                </div>
                                <div class="row card-bdy">
                                    <div class="col-sm-7 text-left">
                                        <div class="card-img card-icon">
                                            <i class="fa fa-user-o fa-3x"></i>
                                        </div>
                                        <div class="card-info">
                                            <div class="card-name">alvaro vald</div>
                                            <div class="card-text">support@pepdev.com</div>
                                            <div class="card-text">0011223344</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 text-right">
                                        <a href="index.php?route=themeoption/doctor/edit&id=1" class="invoice-doctor-name" target="_blank"><i class="fa fa-user-md"></i>Daniel Barnes</a>
                                        <div class="invoice-amount">
                                            <p><span>Amount - </span><span>$ 571.65</span></p>
                                            <p><span>Due - </span><span>$ 0.65</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-ftr">
                                    <div class="text-left">
                                        <span class="badge badge-light badge-sm">20 Sep 2017</span>
                                                                                <a href="index.php?route=appointment/edit&id=140" class="badge badge-primary badge-sm" target="_blank">Go to Appointment</a>
                                                                            </div>
                                    <div class="card-action">
                                        <a href="index.php?route=invoice/view&id=55" class="btn btn-outline btn-secondary btn-outline-1x btn-circle" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                        <a href="index.php?route=invoice/edit&id=55" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                        <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i><input type="hidden" value="55"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                                <tr>
                    <td>
                        <div class="card-block invoice-card">
                            <div class="card">
                                <div class="row card-hdr">
                                    <div class="col-2 card-left text-left">
                                        <span class="text-center">7</span>
                                    </div>
                                    <div class="col-10 text-right card-right">
                                        <em>Invoice Id : </em> <span>INV-0047</span>
                                    </div>
                                </div>
                                <div class="row card-bdy">
                                    <div class="col-sm-7 text-left">
                                        <div class="card-img card-icon">
                                            <i class="fa fa-user-o fa-3x"></i>
                                        </div>
                                        <div class="card-info">
                                            <div class="card-name">Arya Stark</div>
                                            <div class="card-text">support@pepdev.com</div>
                                            <div class="card-text">0011223344</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 text-right">
                                        <a href="index.php?route=themeoption/doctor/edit&id=8" class="invoice-doctor-name" target="_blank"><i class="fa fa-user-md"></i>Linda Adams</a>
                                        <div class="invoice-amount">
                                            <p><span>Amount - </span><span>$ 232.80</span></p>
                                            <p><span>Due - </span><span>$ -7.20</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-ftr">
                                    <div class="text-left">
                                        <span class="badge badge-light badge-sm">28 Aug 2017</span>
                                                                                <a href="index.php?route=appointment/edit&id=120" class="badge badge-primary badge-sm" target="_blank">Go to Appointment</a>
                                                                            </div>
                                    <div class="card-action">
                                        <a href="index.php?route=invoice/view&id=47" class="btn btn-outline btn-secondary btn-outline-1x btn-circle" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                        <a href="index.php?route=invoice/edit&id=47" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                        <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i><input type="hidden" value="47"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                                <tr>
                    <td>
                        <div class="card-block invoice-card">
                            <div class="card">
                                <div class="row card-hdr">
                                    <div class="col-2 card-left text-left">
                                        <span class="text-center">8</span>
                                    </div>
                                    <div class="col-10 text-right card-right">
                                        <em>Invoice Id : </em> <span>INV-0041</span>
                                    </div>
                                </div>
                                <div class="row card-bdy">
                                    <div class="col-sm-7 text-left">
                                        <div class="card-img card-icon">
                                            <i class="fa fa-user-o fa-3x"></i>
                                        </div>
                                        <div class="card-info">
                                            <div class="card-name">Devos Seaworth</div>
                                            <div class="card-text">support@pepdev.com</div>
                                            <div class="card-text">0011223344</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 text-right">
                                        <a href="index.php?route=themeoption/doctor/edit&id=1" class="invoice-doctor-name" target="_blank"><i class="fa fa-user-md"></i>Daniel Barnes</a>
                                        <div class="invoice-amount">
                                            <p><span>Amount - </span><span>$ 800.00</span></p>
                                            <p><span>Due - </span><span>$ 0.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-ftr">
                                    <div class="text-left">
                                        <span class="badge badge-light badge-sm">22 Aug 2017</span>
                                                                                <a href="index.php?route=appointment/edit&id=61" class="badge badge-primary badge-sm" target="_blank">Go to Appointment</a>
                                                                            </div>
                                    <div class="card-action">
                                        <a href="index.php?route=invoice/view&id=41" class="btn btn-outline btn-secondary btn-outline-1x btn-circle" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                        <a href="index.php?route=invoice/edit&id=41" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                        <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i><input type="hidden" value="41"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                                <tr>
                    <td>
                        <div class="card-block invoice-card">
                            <div class="card">
                                <div class="row card-hdr">
                                    <div class="col-2 card-left text-left">
                                        <span class="text-center">9</span>
                                    </div>
                                    <div class="col-10 text-right card-right">
                                        <em>Invoice Id : </em> <span>INV-0040</span>
                                    </div>
                                </div>
                                <div class="row card-bdy">
                                    <div class="col-sm-7 text-left">
                                        <div class="card-img card-icon">
                                            <i class="fa fa-user-o fa-3x"></i>
                                        </div>
                                        <div class="card-info">
                                            <div class="card-name">Behka Moody</div>
                                            <div class="card-text">support@pepdev.com</div>
                                            <div class="card-text">0011223344</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 text-right">
                                        <a href="index.php?route=themeoption/doctor/edit&id=10" class="invoice-doctor-name" target="_blank"><i class="fa fa-user-md"></i>Vedhraj Jain</a>
                                        <div class="invoice-amount">
                                            <p><span>Amount - </span><span>$ 528.00</span></p>
                                            <p><span>Due - </span><span>$ 28.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-ftr">
                                    <div class="text-left">
                                        <span class="badge badge-light badge-sm">15 Aug 2017</span>
                                                                                <a href="index.php?route=appointment/edit&id=97" class="badge badge-primary badge-sm" target="_blank">Go to Appointment</a>
                                                                            </div>
                                    <div class="card-action">
                                        <a href="index.php?route=invoice/view&id=40" class="btn btn-outline btn-secondary btn-outline-1x btn-circle" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                        <a href="index.php?route=invoice/edit&id=40" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                        <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i><input type="hidden" value="40"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                                <tr>
                    <td>
                        <div class="card-block invoice-card">
                            <div class="card">
                                <div class="row card-hdr">
                                    <div class="col-2 card-left text-left">
                                        <span class="text-center">10</span>
                                    </div>
                                    <div class="col-10 text-right card-right">
                                        <em>Invoice Id : </em> <span>INV-0031</span>
                                    </div>
                                </div>
                                <div class="row card-bdy">
                                    <div class="col-sm-7 text-left">
                                        <div class="card-img card-icon">
                                            <i class="fa fa-user-o fa-3x"></i>
                                        </div>
                                        <div class="card-info">
                                            <div class="card-name">Mahendra Choudhary</div>
                                            <div class="card-text">support@pepdev.com</div>
                                            <div class="card-text">0011223344</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 text-right">
                                        <a href="index.php?route=themeoption/doctor/edit&id=3" class="invoice-doctor-name" target="_blank"><i class="fa fa-user-md"></i>Melissa Bates</a>
                                        <div class="invoice-amount">
                                            <p><span>Amount - </span><span>$ 200.00</span></p>
                                            <p><span>Due - </span><span>$ 0.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-ftr">
                                    <div class="text-left">
                                        <span class="badge badge-light badge-sm">19 Jul 2017</span>
                                                                            </div>
                                    <div class="card-action">
                                        <a href="index.php?route=invoice/view&id=31" class="btn btn-outline btn-secondary btn-outline-1x btn-circle" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                        <a href="index.php?route=invoice/edit&id=31" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                        <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i><input type="hidden" value="31"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                                <tr>
                    <td>
                        <div class="card-block invoice-card">
                            <div class="card">
                                <div class="row card-hdr">
                                    <div class="col-2 card-left text-left">
                                        <span class="text-center">11</span>
                                    </div>
                                    <div class="col-10 text-right card-right">
                                        <em>Invoice Id : </em> <span>INV-0030</span>
                                    </div>
                                </div>
                                <div class="row card-bdy">
                                    <div class="col-sm-7 text-left">
                                        <div class="card-img card-icon">
                                            <i class="fa fa-user-o fa-3x"></i>
                                        </div>
                                        <div class="card-info">
                                            <div class="card-name">winceton logo</div>
                                            <div class="card-text">support@pepdev.com</div>
                                            <div class="card-text">0011223344</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 text-right">
                                        <a href="index.php?route=themeoption/doctor/edit&id=3" class="invoice-doctor-name" target="_blank"><i class="fa fa-user-md"></i>Melissa Bates</a>
                                        <div class="invoice-amount">
                                            <p><span>Amount - </span><span>$ 270.00</span></p>
                                            <p><span>Due - </span><span>$ 20.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-ftr">
                                    <div class="text-left">
                                        <span class="badge badge-light badge-sm">19 Jul 2017</span>
                                                                                <a href="index.php?route=appointment/edit&id=75" class="badge badge-primary badge-sm" target="_blank">Go to Appointment</a>
                                                                            </div>
                                    <div class="card-action">
                                        <a href="index.php?route=invoice/view&id=30" class="btn btn-outline btn-secondary btn-outline-1x btn-circle" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                        <a href="index.php?route=invoice/edit&id=30" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                        <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i><input type="hidden" value="30"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                                <tr>
                    <td>
                        <div class="card-block invoice-card">
                            <div class="card">
                                <div class="row card-hdr">
                                    <div class="col-2 card-left text-left">
                                        <span class="text-center">12</span>
                                    </div>
                                    <div class="col-10 text-right card-right">
                                        <em>Invoice Id : </em> <span>INV-0052</span>
                                    </div>
                                </div>
                                <div class="row card-bdy">
                                    <div class="col-sm-7 text-left">
                                        <div class="card-img card-icon">
                                            <i class="fa fa-user-o fa-3x"></i>
                                        </div>
                                        <div class="card-info">
                                            <div class="card-name">Angela Marker</div>
                                            <div class="card-text">support@pepdev.com</div>
                                            <div class="card-text">0011223344</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 text-right">
                                        <a href="index.php?route=themeoption/doctor/edit&id=6" class="invoice-doctor-name" target="_blank"><i class="fa fa-user-md"></i>Theodore Bennett</a>
                                        <div class="invoice-amount">
                                            <p><span>Amount - </span><span>$ 2000.00</span></p>
                                            <p><span>Due - </span><span>$ 0.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-ftr">
                                    <div class="text-left">
                                        <span class="badge badge-light badge-sm">11 Jul 2017</span>
                                                                                <a href="index.php?route=appointment/edit&id=109" class="badge badge-primary badge-sm" target="_blank">Go to Appointment</a>
                                                                            </div>
                                    <div class="card-action">
                                        <a href="index.php?route=invoice/view&id=52" class="btn btn-outline btn-secondary btn-outline-1x btn-circle" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                        <a href="index.php?route=invoice/edit&id=52" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                        <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i><input type="hidden" value="52"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                                <tr>
                    <td>
                        <div class="card-block invoice-card">
                            <div class="card">
                                <div class="row card-hdr">
                                    <div class="col-2 card-left text-left">
                                        <span class="text-center">13</span>
                                    </div>
                                    <div class="col-10 text-right card-right">
                                        <em>Invoice Id : </em> <span>INV-0042</span>
                                    </div>
                                </div>
                                <div class="row card-bdy">
                                    <div class="col-sm-7 text-left">
                                        <div class="card-img card-icon">
                                            <i class="fa fa-user-o fa-3x"></i>
                                        </div>
                                        <div class="card-info">
                                            <div class="card-name">Ajaz</div>
                                            <div class="card-text">support@pepdev.com</div>
                                            <div class="card-text">7069802976</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 text-right">
                                        <a href="index.php?route=themeoption/doctor/edit&id=1" class="invoice-doctor-name" target="_blank"><i class="fa fa-user-md"></i>Daniel Barnes</a>
                                        <div class="invoice-amount">
                                            <p><span>Amount - </span><span>$ 211.00</span></p>
                                            <p><span>Due - </span><span>$ 11.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-ftr">
                                    <div class="text-left">
                                        <span class="badge badge-light badge-sm">11 Jul 2017</span>
                                                                                <a href="index.php?route=appointment/edit&id=199" class="badge badge-primary badge-sm" target="_blank">Go to Appointment</a>
                                                                            </div>
                                    <div class="card-action">
                                        <a href="index.php?route=invoice/view&id=42" class="btn btn-outline btn-secondary btn-outline-1x btn-circle" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                        <a href="index.php?route=invoice/edit&id=42" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                        <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i><input type="hidden" value="42"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                                <tr>
                    <td>
                        <div class="card-block invoice-card">
                            <div class="card">
                                <div class="row card-hdr">
                                    <div class="col-2 card-left text-left">
                                        <span class="text-center">14</span>
                                    </div>
                                    <div class="col-10 text-right card-right">
                                        <em>Invoice Id : </em> <span>INV-0056</span>
                                    </div>
                                </div>
                                <div class="row card-bdy">
                                    <div class="col-sm-7 text-left">
                                        <div class="card-img card-icon">
                                            <i class="fa fa-user-o fa-3x"></i>
                                        </div>
                                        <div class="card-info">
                                            <div class="card-name">frances</div>
                                            <div class="card-text">support@pepdev.com</div>
                                            <div class="card-text">1112223333</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 text-right">
                                        <a href="index.php?route=themeoption/doctor/edit&id=8" class="invoice-doctor-name" target="_blank"><i class="fa fa-user-md"></i>Linda Adams</a>
                                        <div class="invoice-amount">
                                            <p><span>Amount - </span><span>$ 1650.00</span></p>
                                            <p><span>Due - </span><span>$ 0.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-ftr">
                                    <div class="text-left">
                                        <span class="badge badge-light badge-sm">20 Jun 2017</span>
                                                                                <a href="index.php?route=appointment/edit&id=162" class="badge badge-primary badge-sm" target="_blank">Go to Appointment</a>
                                                                            </div>
                                    <div class="card-action">
                                        <a href="index.php?route=invoice/view&id=56" class="btn btn-outline btn-secondary btn-outline-1x btn-circle" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                        <a href="index.php?route=invoice/edit&id=56" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                        <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i><input type="hidden" value="56"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                                <tr>
                    <td>
                        <div class="card-block invoice-card">
                            <div class="card">
                                <div class="row card-hdr">
                                    <div class="col-2 card-left text-left">
                                        <span class="text-center">15</span>
                                    </div>
                                    <div class="col-10 text-right card-right">
                                        <em>Invoice Id : </em> <span>INV-0034</span>
                                    </div>
                                </div>
                                <div class="row card-bdy">
                                    <div class="col-sm-7 text-left">
                                        <div class="card-img card-icon">
                                            <i class="fa fa-user-o fa-3x"></i>
                                        </div>
                                        <div class="card-info">
                                            <div class="card-name">Rohit Tiwari</div>
                                            <div class="card-text">support@pepdev.com</div>
                                            <div class="card-text">0011223344</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 text-right">
                                        <a href="index.php?route=themeoption/doctor/edit&id=1" class="invoice-doctor-name" target="_blank"><i class="fa fa-user-md"></i>Daniel Barnes</a>
                                        <div class="invoice-amount">
                                            <p><span>Amount - </span><span>$ 100.50</span></p>
                                            <p><span>Due - </span><span>$ 0.50</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-ftr">
                                    <div class="text-left">
                                        <span class="badge badge-light badge-sm">08 Jun 2017</span>
                                                                                <a href="index.php?route=appointment/edit&id=42" class="badge badge-primary badge-sm" target="_blank">Go to Appointment</a>
                                                                            </div>
                                    <div class="card-action">
                                        <a href="index.php?route=invoice/view&id=34" class="btn btn-outline btn-secondary btn-outline-1x btn-circle" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                        <a href="index.php?route=invoice/edit&id=34" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                        <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i><input type="hidden" value="34"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                                <tr>
                    <td>
                        <div class="card-block invoice-card">
                            <div class="card">
                                <div class="row card-hdr">
                                    <div class="col-2 card-left text-left">
                                        <span class="text-center">16</span>
                                    </div>
                                    <div class="col-10 text-right card-right">
                                        <em>Invoice Id : </em> <span>INV-0033</span>
                                    </div>
                                </div>
                                <div class="row card-bdy">
                                    <div class="col-sm-7 text-left">
                                        <div class="card-img card-icon">
                                            <i class="fa fa-user-o fa-3x"></i>
                                        </div>
                                        <div class="card-info">
                                            <div class="card-name">Antonio Rider</div>
                                            <div class="card-text">support@pepdev.com</div>
                                            <div class="card-text">0011223344</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 text-right">
                                        <a href="index.php?route=themeoption/doctor/edit&id=3" class="invoice-doctor-name" target="_blank"><i class="fa fa-user-md"></i>Melissa Bates</a>
                                        <div class="invoice-amount">
                                            <p><span>Amount - </span><span>$ 100.00</span></p>
                                            <p><span>Due - </span><span>$ 0.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-ftr">
                                    <div class="text-left">
                                        <span class="badge badge-light badge-sm">07 Jun 2017</span>
                                                                                <a href="index.php?route=appointment/edit&id=76" class="badge badge-primary badge-sm" target="_blank">Go to Appointment</a>
                                                                            </div>
                                    <div class="card-action">
                                        <a href="index.php?route=invoice/view&id=33" class="btn btn-outline btn-secondary btn-outline-1x btn-circle" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                        <a href="index.php?route=invoice/edit&id=33" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                        <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i><input type="hidden" value="33"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                                <tr>
                    <td>
                        <div class="card-block invoice-card">
                            <div class="card">
                                <div class="row card-hdr">
                                    <div class="col-2 card-left text-left">
                                        <span class="text-center">17</span>
                                    </div>
                                    <div class="col-10 text-right card-right">
                                        <em>Invoice Id : </em> <span>INV-0029</span>
                                    </div>
                                </div>
                                <div class="row card-bdy">
                                    <div class="col-sm-7 text-left">
                                        <div class="card-img card-icon">
                                            <i class="fa fa-user-o fa-3x"></i>
                                        </div>
                                        <div class="card-info">
                                            <div class="card-name">Grey Worm</div>
                                            <div class="card-text">support@pepdev.com</div>
                                            <div class="card-text">0011223344</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 text-right">
                                        <a href="index.php?route=themeoption/doctor/edit&id=3" class="invoice-doctor-name" target="_blank"><i class="fa fa-user-md"></i>Melissa Bates</a>
                                        <div class="invoice-amount">
                                            <p><span>Amount - </span><span>$ 100.00</span></p>
                                            <p><span>Due - </span><span>$ 0.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-ftr">
                                    <div class="text-left">
                                        <span class="badge badge-light badge-sm">05 Jun 2017</span>
                                                                                <a href="index.php?route=appointment/edit&id=2" class="badge badge-primary badge-sm" target="_blank">Go to Appointment</a>
                                                                            </div>
                                    <div class="card-action">
                                        <a href="index.php?route=invoice/view&id=29" class="btn btn-outline btn-secondary btn-outline-1x btn-circle" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                        <a href="index.php?route=invoice/edit&id=29" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                        <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i><input type="hidden" value="29"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                                <tr>
                    <td>
                        <div class="card-block invoice-card">
                            <div class="card">
                                <div class="row card-hdr">
                                    <div class="col-2 card-left text-left">
                                        <span class="text-center">18</span>
                                    </div>
                                    <div class="col-10 text-right card-right">
                                        <em>Invoice Id : </em> <span>INV-0028</span>
                                    </div>
                                </div>
                                <div class="row card-bdy">
                                    <div class="col-sm-7 text-left">
                                        <div class="card-img card-icon">
                                            <i class="fa fa-user-o fa-3x"></i>
                                        </div>
                                        <div class="card-info">
                                            <div class="card-name">Sonu Singh</div>
                                            <div class="card-text">support@pepdev.com</div>
                                            <div class="card-text">0011223344</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 text-right">
                                        <a href="index.php?route=themeoption/doctor/edit&id=4" class="invoice-doctor-name" target="_blank"><i class="fa fa-user-md"></i>Cheri Aria</a>
                                        <div class="invoice-amount">
                                            <p><span>Amount - </span><span>$ 300.00</span></p>
                                            <p><span>Due - </span><span>$ 0.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-ftr">
                                    <div class="text-left">
                                        <span class="badge badge-light badge-sm">02 Jun 2017</span>
                                                                                <a href="index.php?route=appointment/edit&id=73" class="badge badge-primary badge-sm" target="_blank">Go to Appointment</a>
                                                                            </div>
                                    <div class="card-action">
                                        <a href="index.php?route=invoice/view&id=28" class="btn btn-outline btn-secondary btn-outline-1x btn-circle" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                        <a href="index.php?route=invoice/edit&id=28" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                        <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i><input type="hidden" value="28"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                                <tr>
                    <td>
                        <div class="card-block invoice-card">
                            <div class="card">
                                <div class="row card-hdr">
                                    <div class="col-2 card-left text-left">
                                        <span class="text-center">19</span>
                                    </div>
                                    <div class="col-10 text-right card-right">
                                        <em>Invoice Id : </em> <span>INV-0027</span>
                                    </div>
                                </div>
                                <div class="row card-bdy">
                                    <div class="col-sm-7 text-left">
                                        <div class="card-img card-icon">
                                            <i class="fa fa-user-o fa-3x"></i>
                                        </div>
                                        <div class="card-info">
                                            <div class="card-name">Paul Martin</div>
                                            <div class="card-text">support@pepdev.com</div>
                                            <div class="card-text">0011223344</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 text-right">
                                        <a href="index.php?route=themeoption/doctor/edit&id=3" class="invoice-doctor-name" target="_blank"><i class="fa fa-user-md"></i>Melissa Bates</a>
                                        <div class="invoice-amount">
                                            <p><span>Amount - </span><span>$ 107.00</span></p>
                                            <p><span>Due - </span><span>$ 7.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-ftr">
                                    <div class="text-left">
                                        <span class="badge badge-light badge-sm">02 Jun 2017</span>
                                                                                <a href="index.php?route=appointment/edit&id=67" class="badge badge-primary badge-sm" target="_blank">Go to Appointment</a>
                                                                            </div>
                                    <div class="card-action">
                                        <a href="index.php?route=invoice/view&id=27" class="btn btn-outline btn-secondary btn-outline-1x btn-circle" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                        <a href="index.php?route=invoice/edit&id=27" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                        <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i><input type="hidden" value="27"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                                <tr>
                    <td>
                        <div class="card-block invoice-card">
                            <div class="card">
                                <div class="row card-hdr">
                                    <div class="col-2 card-left text-left">
                                        <span class="text-center">20</span>
                                    </div>
                                    <div class="col-10 text-right card-right">
                                        <em>Invoice Id : </em> <span>INV-0026</span>
                                    </div>
                                </div>
                                <div class="row card-bdy">
                                    <div class="col-sm-7 text-left">
                                        <div class="card-img card-icon">
                                            <i class="fa fa-user-o fa-3x"></i>
                                        </div>
                                        <div class="card-info">
                                            <div class="card-name">Ruth Hill</div>
                                            <div class="card-text">support@pepdev.com</div>
                                            <div class="card-text">0011223344</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 text-right">
                                        <a href="index.php?route=themeoption/doctor/edit&id=3" class="invoice-doctor-name" target="_blank"><i class="fa fa-user-md"></i>Melissa Bates</a>
                                        <div class="invoice-amount">
                                            <p><span>Amount - </span><span>$ 472.00</span></p>
                                            <p><span>Due - </span><span>$ 172.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-ftr">
                                    <div class="text-left">
                                        <span class="badge badge-light badge-sm">02 Jun 2017</span>
                                                                                <a href="index.php?route=appointment/edit&id=66" class="badge badge-primary badge-sm" target="_blank">Go to Appointment</a>
                                                                            </div>
                                    <div class="card-action">
                                        <a href="index.php?route=invoice/view&id=26" class="btn btn-outline btn-secondary btn-outline-1x btn-circle" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                        <a href="index.php?route=invoice/edit&id=26" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                        <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i><input type="hidden" value="26"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                                <tr>
                    <td>
                        <div class="card-block invoice-card">
                            <div class="card">
                                <div class="row card-hdr">
                                    <div class="col-2 card-left text-left">
                                        <span class="text-center">21</span>
                                    </div>
                                    <div class="col-10 text-right card-right">
                                        <em>Invoice Id : </em> <span>INV-0025</span>
                                    </div>
                                </div>
                                <div class="row card-bdy">
                                    <div class="col-sm-7 text-left">
                                        <div class="card-img card-icon">
                                            <i class="fa fa-user-o fa-3x"></i>
                                        </div>
                                        <div class="card-info">
                                            <div class="card-name">Anthony Collins</div>
                                            <div class="card-text">support@pepdev.com</div>
                                            <div class="card-text">0011223344</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 text-right">
                                        <a href="index.php?route=themeoption/doctor/edit&id=1" class="invoice-doctor-name" target="_blank"><i class="fa fa-user-md"></i>Daniel Barnes</a>
                                        <div class="invoice-amount">
                                            <p><span>Amount - </span><span>$ 100.00</span></p>
                                            <p><span>Due - </span><span>$ 0.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-ftr">
                                    <div class="text-left">
                                        <span class="badge badge-light badge-sm">31 May 2017</span>
                                                                                <a href="index.php?route=appointment/edit&id=3" class="badge badge-primary badge-sm" target="_blank">Go to Appointment</a>
                                                                            </div>
                                    <div class="card-action">
                                        <a href="index.php?route=invoice/view&id=25" class="btn btn-outline btn-secondary btn-outline-1x btn-circle" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                        <a href="index.php?route=invoice/edit&id=25" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                        <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i><input type="hidden" value="25"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                                <tr>
                    <td>
                        <div class="card-block invoice-card">
                            <div class="card">
                                <div class="row card-hdr">
                                    <div class="col-2 card-left text-left">
                                        <span class="text-center">22</span>
                                    </div>
                                    <div class="col-10 text-right card-right">
                                        <em>Invoice Id : </em> <span>INV-0024</span>
                                    </div>
                                </div>
                                <div class="row card-bdy">
                                    <div class="col-sm-7 text-left">
                                        <div class="card-img card-icon">
                                            <i class="fa fa-user-o fa-3x"></i>
                                        </div>
                                        <div class="card-info">
                                            <div class="card-name">Helen Green</div>
                                            <div class="card-text">support@pepdev.com</div>
                                            <div class="card-text">0011223344</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 text-right">
                                        <a href="index.php?route=themeoption/doctor/edit&id=4" class="invoice-doctor-name" target="_blank"><i class="fa fa-user-md"></i>Cheri Aria</a>
                                        <div class="invoice-amount">
                                            <p><span>Amount - </span><span>$ 1547.00</span></p>
                                            <p><span>Due - </span><span>$ 47.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-ftr">
                                    <div class="text-left">
                                        <span class="badge badge-light badge-sm">31 May 2017</span>
                                                                                <a href="index.php?route=appointment/edit&id=69" class="badge badge-primary badge-sm" target="_blank">Go to Appointment</a>
                                                                            </div>
                                    <div class="card-action">
                                        <a href="index.php?route=invoice/view&id=24" class="btn btn-outline btn-secondary btn-outline-1x btn-circle" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                        <a href="index.php?route=invoice/edit&id=24" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                        <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i><input type="hidden" value="24"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                                <tr>
                    <td>
                        <div class="card-block invoice-card">
                            <div class="card">
                                <div class="row card-hdr">
                                    <div class="col-2 card-left text-left">
                                        <span class="text-center">23</span>
                                    </div>
                                    <div class="col-10 text-right card-right">
                                        <em>Invoice Id : </em> <span>INV-0023</span>
                                    </div>
                                </div>
                                <div class="row card-bdy">
                                    <div class="col-sm-7 text-left">
                                        <div class="card-img card-icon">
                                            <i class="fa fa-user-o fa-3x"></i>
                                        </div>
                                        <div class="card-info">
                                            <div class="card-name">Carol Walker</div>
                                            <div class="card-text">support@pepdev.com</div>
                                            <div class="card-text">0011223344</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 text-right">
                                        <a href="index.php?route=themeoption/doctor/edit&id=8" class="invoice-doctor-name" target="_blank"><i class="fa fa-user-md"></i>Linda Adams</a>
                                        <div class="invoice-amount">
                                            <p><span>Amount - </span><span>$ 300.00</span></p>
                                            <p><span>Due - </span><span>$ 0.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-ftr">
                                    <div class="text-left">
                                        <span class="badge badge-light badge-sm">31 May 2017</span>
                                                                                <a href="index.php?route=appointment/edit&id=87" class="badge badge-primary badge-sm" target="_blank">Go to Appointment</a>
                                                                            </div>
                                    <div class="card-action">
                                        <a href="index.php?route=invoice/view&id=23" class="btn btn-outline btn-secondary btn-outline-1x btn-circle" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                        <a href="index.php?route=invoice/edit&id=23" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                        <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i><input type="hidden" value="23"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                                <tr>
                    <td>
                        <div class="card-block invoice-card">
                            <div class="card">
                                <div class="row card-hdr">
                                    <div class="col-2 card-left text-left">
                                        <span class="text-center">24</span>
                                    </div>
                                    <div class="col-10 text-right card-right">
                                        <em>Invoice Id : </em> <span>INV-0021</span>
                                    </div>
                                </div>
                                <div class="row card-bdy">
                                    <div class="col-sm-7 text-left">
                                        <div class="card-img card-icon">
                                            <i class="fa fa-user-o fa-3x"></i>
                                        </div>
                                        <div class="card-info">
                                            <div class="card-name">winceton logo</div>
                                            <div class="card-text">support@pepdev.com</div>
                                            <div class="card-text">0011223344</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 text-right">
                                        <a href="index.php?route=themeoption/doctor/edit&id=3" class="invoice-doctor-name" target="_blank"><i class="fa fa-user-md"></i>Melissa Bates</a>
                                        <div class="invoice-amount">
                                            <p><span>Amount - </span><span>$ 600.00</span></p>
                                            <p><span>Due - </span><span>$ 0.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-ftr">
                                    <div class="text-left">
                                        <span class="badge badge-light badge-sm">31 May 2017</span>
                                                                                <a href="index.php?route=appointment/edit&id=74" class="badge badge-primary badge-sm" target="_blank">Go to Appointment</a>
                                                                            </div>
                                    <div class="card-action">
                                        <a href="index.php?route=invoice/view&id=21" class="btn btn-outline btn-secondary btn-outline-1x btn-circle" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                        <a href="index.php?route=invoice/edit&id=21" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                        <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i><input type="hidden" value="21"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                                <tr>
                    <td>
                        <div class="card-block invoice-card">
                            <div class="card">
                                <div class="row card-hdr">
                                    <div class="col-2 card-left text-left">
                                        <span class="text-center">25</span>
                                    </div>
                                    <div class="col-10 text-right card-right">
                                        <em>Invoice Id : </em> <span>INV-0020</span>
                                    </div>
                                </div>
                                <div class="row card-bdy">
                                    <div class="col-sm-7 text-left">
                                        <div class="card-img card-icon">
                                            <i class="fa fa-user-o fa-3x"></i>
                                        </div>
                                        <div class="card-info">
                                            <div class="card-name">Drivine Cartel</div>
                                            <div class="card-text">support@pepdev.com</div>
                                            <div class="card-text">0011223344</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 text-right">
                                        <a href="index.php?route=themeoption/doctor/edit&id=1" class="invoice-doctor-name" target="_blank"><i class="fa fa-user-md"></i>Daniel Barnes</a>
                                        <div class="invoice-amount">
                                            <p><span>Amount - </span><span>$ 100.00</span></p>
                                            <p><span>Due - </span><span>$ 0.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-ftr">
                                    <div class="text-left">
                                        <span class="badge badge-light badge-sm">31 May 2017</span>
                                                                                <a href="index.php?route=appointment/edit&id=4" class="badge badge-primary badge-sm" target="_blank">Go to Appointment</a>
                                                                            </div>
                                    <div class="card-action">
                                        <a href="index.php?route=invoice/view&id=20" class="btn btn-outline btn-secondary btn-outline-1x btn-circle" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                        <a href="index.php?route=invoice/edit&id=20" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                        <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i><input type="hidden" value="20"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                                <tr>
                    <td>
                        <div class="card-block invoice-card">
                            <div class="card">
                                <div class="row card-hdr">
                                    <div class="col-2 card-left text-left">
                                        <span class="text-center">26</span>
                                    </div>
                                    <div class="col-10 text-right card-right">
                                        <em>Invoice Id : </em> <span>INV-0019</span>
                                    </div>
                                </div>
                                <div class="row card-bdy">
                                    <div class="col-sm-7 text-left">
                                        <div class="card-img card-icon">
                                            <i class="fa fa-user-o fa-3x"></i>
                                        </div>
                                        <div class="card-info">
                                            <div class="card-name">Ollena Tyrell</div>
                                            <div class="card-text">support@pepdev.com</div>
                                            <div class="card-text">0011223344</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 text-right">
                                        <a href="index.php?route=themeoption/doctor/edit&id=1" class="invoice-doctor-name" target="_blank"><i class="fa fa-user-md"></i>Daniel Barnes</a>
                                        <div class="invoice-amount">
                                            <p><span>Amount - </span><span>$ 322.50</span></p>
                                            <p><span>Due - </span><span>$ 22.50</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-ftr">
                                    <div class="text-left">
                                        <span class="badge badge-light badge-sm">31 May 2017</span>
                                                                                <a href="index.php?route=appointment/edit&id=70" class="badge badge-primary badge-sm" target="_blank">Go to Appointment</a>
                                                                            </div>
                                    <div class="card-action">
                                        <a href="index.php?route=invoice/view&id=19" class="btn btn-outline btn-secondary btn-outline-1x btn-circle" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                        <a href="index.php?route=invoice/edit&id=19" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                        <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i><input type="hidden" value="19"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                                <tr>
                    <td>
                        <div class="card-block invoice-card">
                            <div class="card">
                                <div class="row card-hdr">
                                    <div class="col-2 card-left text-left">
                                        <span class="text-center">27</span>
                                    </div>
                                    <div class="col-10 text-right card-right">
                                        <em>Invoice Id : </em> <span>INV-0018</span>
                                    </div>
                                </div>
                                <div class="row card-bdy">
                                    <div class="col-sm-7 text-left">
                                        <div class="card-img card-icon">
                                            <i class="fa fa-user-o fa-3x"></i>
                                        </div>
                                        <div class="card-info">
                                            <div class="card-name">Prashant Kumar</div>
                                            <div class="card-text">support@pepdev.com</div>
                                            <div class="card-text">0011223344</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 text-right">
                                        <a href="index.php?route=themeoption/doctor/edit&id=1" class="invoice-doctor-name" target="_blank"><i class="fa fa-user-md"></i>Daniel Barnes</a>
                                        <div class="invoice-amount">
                                            <p><span>Amount - </span><span>$ 560.00</span></p>
                                            <p><span>Due - </span><span>$ 60.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-ftr">
                                    <div class="text-left">
                                        <span class="badge badge-light badge-sm">31 May 2017</span>
                                                                                <a href="index.php?route=appointment/edit&id=72" class="badge badge-primary badge-sm" target="_blank">Go to Appointment</a>
                                                                            </div>
                                    <div class="card-action">
                                        <a href="index.php?route=invoice/view&id=18" class="btn btn-outline btn-secondary btn-outline-1x btn-circle" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                        <a href="index.php?route=invoice/edit&id=18" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                        <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i><input type="hidden" value="18"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                                <tr>
                    <td>
                        <div class="card-block invoice-card">
                            <div class="card">
                                <div class="row card-hdr">
                                    <div class="col-2 card-left text-left">
                                        <span class="text-center">28</span>
                                    </div>
                                    <div class="col-10 text-right card-right">
                                        <em>Invoice Id : </em> <span>INV-0017</span>
                                    </div>
                                </div>
                                <div class="row card-bdy">
                                    <div class="col-sm-7 text-left">
                                        <div class="card-img card-icon">
                                            <i class="fa fa-user-o fa-3x"></i>
                                        </div>
                                        <div class="card-info">
                                            <div class="card-name">Nymeria Sand</div>
                                            <div class="card-text">support@pepdev.com</div>
                                            <div class="card-text">0011223344</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 text-right">
                                        <a href="index.php?route=themeoption/doctor/edit&id=1" class="invoice-doctor-name" target="_blank"><i class="fa fa-user-md"></i>Daniel Barnes</a>
                                        <div class="invoice-amount">
                                            <p><span>Amount - </span><span>$ 225.00</span></p>
                                            <p><span>Due - </span><span>$ 25.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-ftr">
                                    <div class="text-left">
                                        <span class="badge badge-light badge-sm">31 May 2017</span>
                                                                                <a href="index.php?route=appointment/edit&id=56" class="badge badge-primary badge-sm" target="_blank">Go to Appointment</a>
                                                                            </div>
                                    <div class="card-action">
                                        <a href="index.php?route=invoice/view&id=17" class="btn btn-outline btn-secondary btn-outline-1x btn-circle" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                        <a href="index.php?route=invoice/edit&id=17" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                        <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i><input type="hidden" value="17"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                                <tr>
                    <td>
                        <div class="card-block invoice-card">
                            <div class="card">
                                <div class="row card-hdr">
                                    <div class="col-2 card-left text-left">
                                        <span class="text-center">29</span>
                                    </div>
                                    <div class="col-10 text-right card-right">
                                        <em>Invoice Id : </em> <span>INV-0016</span>
                                    </div>
                                </div>
                                <div class="row card-bdy">
                                    <div class="col-sm-7 text-left">
                                        <div class="card-img card-icon">
                                            <i class="fa fa-user-o fa-3x"></i>
                                        </div>
                                        <div class="card-info">
                                            <div class="card-name">Meera Reed</div>
                                            <div class="card-text">support@pepdev.com</div>
                                            <div class="card-text">0011223344</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 text-right">
                                        <a href="index.php?route=themeoption/doctor/edit&id=1" class="invoice-doctor-name" target="_blank"><i class="fa fa-user-md"></i>Daniel Barnes</a>
                                        <div class="invoice-amount">
                                            <p><span>Amount - </span><span>$ 308.00</span></p>
                                            <p><span>Due - </span><span>$ 58.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-ftr">
                                    <div class="text-left">
                                        <span class="badge badge-light badge-sm">19 May 2017</span>
                                                                                <a href="index.php?route=appointment/edit&id=38" class="badge badge-primary badge-sm" target="_blank">Go to Appointment</a>
                                                                            </div>
                                    <div class="card-action">
                                        <a href="index.php?route=invoice/view&id=16" class="btn btn-outline btn-secondary btn-outline-1x btn-circle" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                        <a href="index.php?route=invoice/edit&id=16" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                        <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i><input type="hidden" value="16"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                                <tr>
                    <td>
                        <div class="card-block invoice-card">
                            <div class="card">
                                <div class="row card-hdr">
                                    <div class="col-2 card-left text-left">
                                        <span class="text-center">30</span>
                                    </div>
                                    <div class="col-10 text-right card-right">
                                        <em>Invoice Id : </em> <span>INV-0014</span>
                                    </div>
                                </div>
                                <div class="row card-bdy">
                                    <div class="col-sm-7 text-left">
                                        <div class="card-img card-icon">
                                            <i class="fa fa-user-o fa-3x"></i>
                                        </div>
                                        <div class="card-info">
                                            <div class="card-name">Netya Ravandle</div>
                                            <div class="card-text">support@pepdev.com</div>
                                            <div class="card-text">0011223344</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 text-right">
                                        <a href="index.php?route=themeoption/doctor/edit&id=5" class="invoice-doctor-name" target="_blank"><i class="fa fa-user-md"></i>Steve Soeren</a>
                                        <div class="invoice-amount">
                                            <p><span>Amount - </span><span>$ 1000.00</span></p>
                                            <p><span>Due - </span><span>$ 990.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-ftr">
                                    <div class="text-left">
                                        <span class="badge badge-light badge-sm">27 Apr 2017</span>
                                                                                <a href="index.php?route=appointment/edit&id=37" class="badge badge-primary badge-sm" target="_blank">Go to Appointment</a>
                                                                            </div>
                                    <div class="card-action">
                                        <a href="index.php?route=invoice/view&id=14" class="btn btn-outline btn-secondary btn-outline-1x btn-circle" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                        <a href="index.php?route=invoice/edit&id=14" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                        <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i><input type="hidden" value="14"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                                <tr>
                    <td>
                        <div class="card-block invoice-card">
                            <div class="card">
                                <div class="row card-hdr">
                                    <div class="col-2 card-left text-left">
                                        <span class="text-center">31</span>
                                    </div>
                                    <div class="col-10 text-right card-right">
                                        <em>Invoice Id : </em> <span>INV-0013</span>
                                    </div>
                                </div>
                                <div class="row card-bdy">
                                    <div class="col-sm-7 text-left">
                                        <div class="card-img card-icon">
                                            <i class="fa fa-user-o fa-3x"></i>
                                        </div>
                                        <div class="card-info">
                                            <div class="card-name">Rahul Maldode</div>
                                            <div class="card-text">support@pepdev.com</div>
                                            <div class="card-text">0011223344</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 text-right">
                                        <a href="index.php?route=themeoption/doctor/edit&id=6" class="invoice-doctor-name" target="_blank"><i class="fa fa-user-md"></i>Theodore Bennett</a>
                                        <div class="invoice-amount">
                                            <p><span>Amount - </span><span>$ 20.00</span></p>
                                            <p><span>Due - </span><span>$ 0.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-ftr">
                                    <div class="text-left">
                                        <span class="badge badge-light badge-sm">20 Apr 2017</span>
                                                                                <a href="index.php?route=appointment/edit&id=36" class="badge badge-primary badge-sm" target="_blank">Go to Appointment</a>
                                                                            </div>
                                    <div class="card-action">
                                        <a href="index.php?route=invoice/view&id=13" class="btn btn-outline btn-secondary btn-outline-1x btn-circle" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                        <a href="index.php?route=invoice/edit&id=13" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                        <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i><input type="hidden" value="13"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                                <tr>
                    <td>
                        <div class="card-block invoice-card">
                            <div class="card">
                                <div class="row card-hdr">
                                    <div class="col-2 card-left text-left">
                                        <span class="text-center">32</span>
                                    </div>
                                    <div class="col-10 text-right card-right">
                                        <em>Invoice Id : </em> <span>INV-0012</span>
                                    </div>
                                </div>
                                <div class="row card-bdy">
                                    <div class="col-sm-7 text-left">
                                        <div class="card-img card-icon">
                                            <i class="fa fa-user-o fa-3x"></i>
                                        </div>
                                        <div class="card-info">
                                            <div class="card-name">Virat Kumar</div>
                                            <div class="card-text">support@pepdev.com</div>
                                            <div class="card-text">0011223344</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 text-right">
                                        <a href="index.php?route=themeoption/doctor/edit&id=0" class="invoice-doctor-name" target="_blank"><i class="fa fa-user-md"></i></a>
                                        <div class="invoice-amount">
                                            <p><span>Amount - </span><span>$ 100.00</span></p>
                                            <p><span>Due - </span><span>$ 0.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-ftr">
                                    <div class="text-left">
                                        <span class="badge badge-light badge-sm">20 Apr 2017</span>
                                                                            </div>
                                    <div class="card-action">
                                        <a href="index.php?route=invoice/view&id=12" class="btn btn-outline btn-secondary btn-outline-1x btn-circle" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                        <a href="index.php?route=invoice/edit&id=12" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                        <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i><input type="hidden" value="12"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                                <tr>
                    <td>
                        <div class="card-block invoice-card">
                            <div class="card">
                                <div class="row card-hdr">
                                    <div class="col-2 card-left text-left">
                                        <span class="text-center">33</span>
                                    </div>
                                    <div class="col-10 text-right card-right">
                                        <em>Invoice Id : </em> <span>INV-0011</span>
                                    </div>
                                </div>
                                <div class="row card-bdy">
                                    <div class="col-sm-7 text-left">
                                        <div class="card-img card-icon">
                                            <i class="fa fa-user-o fa-3x"></i>
                                        </div>
                                        <div class="card-info">
                                            <div class="card-name">Bronn Warna</div>
                                            <div class="card-text">support@pepdev.com</div>
                                            <div class="card-text">0011223344</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 text-right">
                                        <a href="index.php?route=themeoption/doctor/edit&id=1" class="invoice-doctor-name" target="_blank"><i class="fa fa-user-md"></i>Daniel Barnes</a>
                                        <div class="invoice-amount">
                                            <p><span>Amount - </span><span>$ 21.10</span></p>
                                            <p><span>Due - </span><span>$ 1.10</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-ftr">
                                    <div class="text-left">
                                        <span class="badge badge-light badge-sm">13 Apr 2017</span>
                                                                                <a href="index.php?route=appointment/edit&id=6" class="badge badge-primary badge-sm" target="_blank">Go to Appointment</a>
                                                                            </div>
                                    <div class="card-action">
                                        <a href="index.php?route=invoice/view&id=11" class="btn btn-outline btn-secondary btn-outline-1x btn-circle" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                        <a href="index.php?route=invoice/edit&id=11" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                        <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i><input type="hidden" value="11"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                                <tr>
                    <td>
                        <div class="card-block invoice-card">
                            <div class="card">
                                <div class="row card-hdr">
                                    <div class="col-2 card-left text-left">
                                        <span class="text-center">34</span>
                                    </div>
                                    <div class="col-10 text-right card-right">
                                        <em>Invoice Id : </em> <span>INV-0010</span>
                                    </div>
                                </div>
                                <div class="row card-bdy">
                                    <div class="col-sm-7 text-left">
                                        <div class="card-img card-icon">
                                            <i class="fa fa-user-o fa-3x"></i>
                                        </div>
                                        <div class="card-info">
                                            <div class="card-name">Deborah Carter</div>
                                            <div class="card-text">support@pepdev.com</div>
                                            <div class="card-text">0011223344</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 text-right">
                                        <a href="index.php?route=themeoption/doctor/edit&id=3" class="invoice-doctor-name" target="_blank"><i class="fa fa-user-md"></i>Melissa Bates</a>
                                        <div class="invoice-amount">
                                            <p><span>Amount - </span><span>$ 10.60</span></p>
                                            <p><span>Due - </span><span>$ 0.60</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-ftr">
                                    <div class="text-left">
                                        <span class="badge badge-light badge-sm">14 Mar 2017</span>
                                                                                <a href="index.php?route=appointment/edit&id=8" class="badge badge-primary badge-sm" target="_blank">Go to Appointment</a>
                                                                            </div>
                                    <div class="card-action">
                                        <a href="index.php?route=invoice/view&id=10" class="btn btn-outline btn-secondary btn-outline-1x btn-circle" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                        <a href="index.php?route=invoice/edit&id=10" class="btn btn-outline btn-info btn-outline-1x btn-circle" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                        <a class="btn btn-outline btn-danger btn-outline-1x btn-circle table-delete" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i><input type="hidden" value="10"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                <form action="index.php?route=invoice/delete" class="delete-card-button" method="post">
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