

<body onload="startTime()">
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
                    <form action="index.php" class="dropzone" id="media-dropzone" method="post" enctype="multipart/form-data">
                        <div class="fallback">
                            <input name="file" type="file" />
                        </div>
                    </form>
                </div>
                <div class="media-all">
                    <input type="hidden" name="media_all" value="[&quot;testimonial-5.jpg&quot;,&quot;testimonial-4.jpg&quot;,&quot;testimonial-3.jpg&quot;,&quot;testimonial-2.jpg&quot;,&quot;testimonial-1.jpg&quot;,&quot;slider-7.jpg&quot;,&quot;slider-6.jpg&quot;,&quot;slider-5.jpg&quot;,&quot;slider-4.jpg&quot;,&quot;slider-3.jpg&quot;,&quot;slider-2.jpg&quot;,&quot;slider-1.jpg&quot;,&quot;slide-doctor-8.jpg&quot;,&quot;slide-doctor-7.jpg&quot;,&quot;slide-doctor-6.jpg&quot;,&quot;slide-doctor-5.jpg&quot;,&quot;slide-doctor-4.jpg&quot;,&quot;slide-doctor-3.jpg&quot;,&quot;slide-doctor-2.jpg&quot;,&quot;slide-doctor-1.jpg&quot;,&quot;service.jpg&quot;,&quot;service-9.jpg&quot;,&quot;service-8.jpg&quot;,&quot;service-7.jpg&quot;,&quot;service-6.jpg&quot;,&quot;service-5.jpg&quot;,&quot;service-4.jpg&quot;,&quot;service-3.jpg&quot;,&quot;service-2.jpg&quot;,&quot;service-14.jpg&quot;,&quot;service-13.jpg&quot;,&quot;service-12.jpg&quot;,&quot;service-11.jpg&quot;,&quot;service-10.jpg&quot;,&quot;service-1.jpg&quot;,&quot;recent-5.jpg&quot;,&quot;recent-4.jpg&quot;,&quot;recent-3.jpg&quot;,&quot;recent-2.jpg&quot;,&quot;recent-1.jpg&quot;,&quot;logo-purple.png&quot;,&quot;logo-orange.png&quot;,&quot;logo-green.png&quot;,&quot;logo-blue.png&quot;,&quot;hm-service.jpg&quot;,&quot;hm-about.jpg&quot;,&quot;hm-about-1.jpg&quot;,&quot;feature-6.jpg&quot;,&quot;feature-5.jpg&quot;,&quot;feature-4.jpg&quot;,&quot;feature-3.jpg&quot;,&quot;feature-2.jpg&quot;,&quot;feature-1.jpg&quot;,&quot;favicon-purple-32x32.png&quot;,&quot;favicon-orange-32x32.png&quot;,&quot;favicon-green-32x32.png&quot;,&quot;favicon-blue-32x32.png&quot;,&quot;event-1.jpg&quot;,&quot;doctor-male.png&quot;,&quot;doctor-female.png&quot;,&quot;doctor-9.jpg&quot;,&quot;doctor-8.jpg&quot;,&quot;doctor-7.jpg&quot;,&quot;doctor-6.jpg&quot;,&quot;doctor-5.jpg&quot;,&quot;doctor-4.jpg&quot;,&quot;doctor-3.jpg&quot;,&quot;doctor-2.jpg&quot;,&quot;doctor-12.jpg&quot;,&quot;doctor-11.jpg&quot;,&quot;doctor-10.jpg&quot;,&quot;doctor-1.jpg&quot;,&quot;comment-6.jpg&quot;,&quot;comment-5.jpg&quot;,&quot;comment-4.jpg&quot;,&quot;comment-3.jpg&quot;,&quot;comment-2.jpg&quot;,&quot;comment-1.jpg&quot;,&quot;blog-9.jpg&quot;,&quot;blog-8.jpg&quot;,&quot;blog-7.jpg&quot;,&quot;blog-6.jpg&quot;,&quot;blog-5.jpg&quot;,&quot;blog-4.jpg&quot;,&quot;blog-3.jpg&quot;,&quot;blog-2.jpg&quot;,&quot;blog-11.jpg&quot;,&quot;blog-10.jpg&quot;,&quot;blog-1.jpg&quot;,&quot;author-2.jpg&quot;,&quot;author-1.jpg&quot;,&quot;800x800-gallery.jpg&quot;,&quot;660x75.[ 0.jpg&quot;,&quot;645x405.jpg&quot;,&quot;645x405-about.jpg&quot;,&quot;620x680.jpg&quot;,&quot;620x680-service.jpg&quot;,&quot;585x390.jpg&quot;,&quot;530x470.jpg&quot;,&quot;530x470-theme-block.jpg&quot;,&quot;513x150-feature.jpg&quot;,&quot;495x420.jpg&quot;,&quot;375x360-doctorslider.jpg&quot;,&quot;225x200-author.jpg&quot;,&quot;200x200.jpg&quot;,&quot;200x200-testimonial.jpg&quot;,&quot;1920x800.jpg&quot;,&quot;1920x800-slider.jpg&quot;,&quot;130x115-recentpost.jpg&quot;,&quot;130x115-comment.jpg&quot;]">
                    <input type="hidden" name="absolute-path" value="route=">
                    <input type="hidden" name="absolute-upload-path" value="uploads/">
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
                    <a href="../index.php"><img src="public/images/logo.png"></a>
                </div>
            </div>
            <div class="menu-user">

                <div class="menu-user-icon"><!--<i class="fa fa-user-circle"></i>-->
                    <a href="profile.php">
                        <img src="public/images/<?php echo $_SESSION['admin_img']?>" style="height: 50px" alt="">
                    </a>
                </div>
                <div class="menu-user-info">
                    <p><?php echo $_SESSION['admin_name'];?></p>
                    <p><?php echo $_SESSION['admin_first_name'];
                    echo $_SESSION['admin_last_name'];?></p>
<div class="menu-user-dropdown">
    <i class="fa fa-angle-double-down fa-2x" id="menu-user-drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"></i>
    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="menu-user-drop">
        <li><a href="../index.php" target="_blank"><i class="icon-link"></i> Visit Website</a></li>
        <li><a href="profile.php"><i class="icon-user"></i> Profile</a></li>
        <li><a href="include/logout.php"><i class="icon-logout"></i> Logout</a></li>
    </ul>
</div>
</div>
</div>
<ul>
    <li id="dashboard-li">
        <a href="index.php"><i class="icon-screen-desktop">
            </i><span>Dashboard</span></a></li>

    <li id="patient-li">
        <a class="menu-dropdown active-danger">
            <i class="icon-organization"></i><span>Patients</span><i class="fa fa-angle-down"></i>
        </a>
        <ul id="patient" class="sub-menu">

            <li>
                <a href="patient.php">
                    <i class="icon-people"></i><span>All Patients</span>
                </a>
            </li>

            <li id="appointment">
                <a href="patient_add.php">
                    <i class="icon-user-follow"></i><span>Add Patient</span>
                </a>
            </li>
            <li id="appointment">
                <a href="patient_edite.php">
                    <i class="icon-user-follow"></i><span>Update Patient</span>
                </a>
            </li>
            <li>
                <a href="invoice.php">
                    <i class="icon-envelope"></i><span>Invoice</span>
                </a>
            </li><li>
                <a href="request.php">
                    <i class="icon-envelope-open"></i><span>Requests</span>
                </a>
            </li>
        </ul>
    </li>
    <li id="appointment-li">
        <a class="menu-dropdown">
            <i class="icon-user-follow"></i>
            <span>Appointments</span>
            <i class="fa fa-angle-down"></i>
        </a>

        <ul id="appointment" class="sub-menu">

            <li id="appointment">
                <a href="appointment.php">
                    <i class="icon-user"></i>
                    <span>All Appointments</span>
                </a>
            </li>
            <li id="department">
                <a href="appointmentadd.php">
                    <i class="icon-user-follow"></i>
                    <span>Add Appointments</span>
                </a>
            </li>
            <li id="service">
                <a href="appointmentedit.php">
                    <i class="icon-briefcase"></i><span>Update Appointment </span>
                </a>
            </li>
            <li id="service">
                <a href="">
                    <i class="icon-briefcase"></i><span>Hospitals Appointment </span>
                </a>
            </li>
            <!--                        <li id="testimonial">-->
            <!--                            <a href="">-->
            <!--                                <i class="fa fa-quote-left"></i><span>Testimonials</span>-->
            <!--                            </a>-->
            <!--                        </li>-->
        </ul>
    </li>
    <li id="doctor-li">
        <a class="menu-dropdown"><i class="icon-globe-alt"></i>
            <span>Doctors</span><i class="fa fa-angle-down"></i></a>
        <ul id="page" class="sub-menu">
            <li id="menu_page">
                <a href="doctors.php"><i class="icon-people"></i><span>All Doctors</span></a>
            </li>
            <li id="home_page">
                <a href=""><i class="icon-user-follow"></i><span>Add Doctors</span></a>
            </li>
            <li id="service_page">
                <a href=""><i class="icon-briefcase"></i><span>Update Page</span></a>
            </li>

        </ul>
    </li>
    <li id="hospital-li">
        <a class="menu-dropdown"><i class="icon-home"></i>
            <span>Hospitals</span><i class="fa fa-angle-down"></i></a>
        <ul id="page" class="sub-menu">
            <li id="menu_page">
                <a href=""><i class="icon-home"></i><span>All Hospitals</span></a>
            </li>
            <li id="home_page">
                <a href=""><i class="icon-home"></i><span>Add Hospital</span></a>
            </li>
            <li id="service_page">
                <a href=""><i class="icon-briefcase"></i><span>Update Hospital</span></a>
            </li>
            <li id="doctor_page">
                <a href=""><i class="fa fa-user-md"></i><span>Departments </span></a>
            </li>
            <!--                        <li id="blog_page">-->
            <!--                            <a href=""><i class="icon-speech"></i><span>Blog Page</span></a>-->
            <!--                        </li>-->
            <!---->
            <!--                        <li id="about_page">-->
            <!--                            <a href=""><i class="icon-info"></i><span>About Page</span></a>-->
            <!--                        </li>-->

        </ul>
    </li>
    <li id="blog-li">
        <a class="menu-dropdown"><i class="icon-map"></i><span>Areas</span><i class="fa fa-angle-down"></i></a>
        <ul id="blog" class="sub-menu">
            <li>
                <a class="menu-dropdown" href=""><i class="icon-list"></i><span>Area List</span></a>
            </li>
            <li>
                <a href=""><i class="icon-map"></i><span>Add Area</span></a>
            </li>
            <li>
                <a href=""><i class="icon-map"></i><span>Update Area</span></a>
            </li>

        </ul>
    </li>

    <li id="user-li">
        <a class="menu-dropdown"><i class="icon-people"></i><span>Users</span><i class="fa fa-angle-down"></i></a>
        <ul id="user" class="sub-menu">
            <li>
                <a class="menu-dropdown" href="user.php"><i class="icon-people"></i><span>Users</span></a>
            </li>
            <li>
                <a class="menu-dropdown" href=""><i class="icon-user-follow"></i><span>Add User</span></a>
            </li>
            <li>
                <a class="menu-dropdown" href=""><i class="icon-user-follow"></i><span>Update Users</span></a>
            </li>

        </ul>
    </li>
    <!--                <li id="setting-li">-->
    <!--                    <a class="menu-dropdown"><i class="icon-settings"></i><span>Settings</span><i class="fa fa-angle-down"></i></a>-->
    <!--                    <ul id="setting" class="sub-menu">-->
    <!--                        <li>-->
    <!--                            <a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=setting/generalsetting"><i class="icon-settings"></i><span>General Setting</span></a>-->
    <!--                        </li>-->
    <!--                        <li>-->
    <!--                            <a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=tax"><i class="icon-settings"></i><span>Finance Setting</span></a>-->
    <!--                        </li>-->
    <!--                        <li>-->
    <!--                            <a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=setting/analytics"><i class="icon-settings"></i><span>Google Analytics</span></a>-->
    <!--                        </li>-->
    <!--                        <li>-->
    <!--                            <a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=setting/customcss"><i class="fa fa-css3"></i><span>Custom Css</span></a>-->
    <!--                        </li>-->
    <!--                        <li>-->
    <!--                            <a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=icon"><i class="icon-flag"></i><span>Icon Set</span></a>-->
    <!--                        </li>-->
    <!--                        <li>-->
    <!--                            <a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=errorlog"><i class="icon-exclamation"></i><span>Error Log</span></a>-->
    <!--                        </li>-->
    <!--                        <li>-->
    <!--                            <a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=permission"><i class="icon-bell"></i><span>Permission</span></a>-->
    <!--                        </li>-->
    <!--                    </ul>-->
    <!--                </li>-->
</ul>
</div>
</div>
