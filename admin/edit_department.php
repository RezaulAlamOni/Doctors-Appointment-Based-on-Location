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

        <form action="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=themeoption/department/action" method="post" enctype="multipart/form-data" siq_id="autopick_4584">
            <div class="page-hdr scroll-to-fixed-fixed" style="z-index: 9; position: fixed; top: 0px; margin-left: 0px; width: 920px; left: 60px;">
                <div class="row">
                    <div class="col-8 page-name">
                        <h1><i class="fa fa-hospital-o"></i>Edit Department</h1>
                    </div>
                    <div class="col-4 page-menu">
                        <a id="cancel" href="index.php?route=themeoption/department" data-toggle="tooltip" data-placement="left" title="" data-original-title="Back to List"><i class="fa fa-reply"></i></a>
                        <button type="submit" name="submit" data-toggle="tooltip" data-placement="left" title="" data-original-title="Save Department"><i class="fa fa-floppy-o"></i></button>
                    </div>
                </div>
            </div><div style="display: block; width: 920px; height: 70px; float: none;"></div>
            <div class="content">
                <div class="content-block">
                    <div class="content-block-ttl">Department Details</div>
                    <div class="content-block-main">
                        <input type="hidden" name="_token" value="413ccea5ca6b8ce59e0da0d74a15110a305317f742542dcc5f09cc85ddf4f25288776a66377494dbf3154612b21c29b49cdcd6ee235b8ea2b77355d52eef0188">
                        <div class="content-input">
                            <label><text>*</text>Name : </label>
                            <input type="text" class="input-text" value="Gynaecology" name="name" placeholder="Enter Department Name" required="">
                            <p class="content-input-error-name">Please enter department name!</p>
                        </div>
                        <div class="content-input">
                            <label><text>*</text>Description : </label>
                            <textarea class="textarea-input" name="description" placeholder="Enter Breif Description" required="">Obstetrics and Gynaecology (often abbreviated to OB/GYN, OBG, O&amp;G or Obs &amp; Gynae) are the two surgical specialties dealing with the female reproductive organs, and as such are often combined to form a single medical specialty and postgraduate training program.</textarea>
                            <p class="content-input-error-name">Please enter department description!</p>
                        </div>
                        <div class="content-input">
                            <label><text>*</text>Icon :</label>
                            <input type="text" class="input-text" value="female" name="icon" placeholder="Enter Icon Name (Ex. - user)" required="">
                            <p class="content-input-error-name">Please enter icon name!</p>
                            <div class="content-description">
                                Get icon name icon page (ex : user-md)
                            </div>
                        </div>
                        <div class="content-input">
                            <label>Status : </label>
                            <select name="status" id="ui-id-1" class="select-list" style="display: none;">
                                <option value="0">Disabled</option>
                                <option value="1" selected="">Enabled</option>
                            </select><span tabindex="0" id="ui-id-1-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-1-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Enabled</span></span>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="id" value="1">
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


<input type="file" multiple="multiple" class="dz-hidden-input" accept="image/*" style="visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;"><div class="ui-selectmenu-menu ui-front"><ul aria-hidden="true" aria-labelledby="ui-id-1-button" id="ui-id-1-menu" role="listbox" tabindex="0" class="ui-menu ui-corner-bottom ui-widget ui-widget-content"></ul></div><div class="zsiq_floatmain zsiq_theme1 siq_bR" style="visibility: hidden; display: block;"><div id="zsiq_float" class="zsiq_float " style="font-family:salesiq-font"><div class="zsiq_flt_rel"><em id="zsiq_agtpic" class="zsiq_user sqico-chat"></em><div id="titlediv" class="zsiq_cnt"><div id="zsiq_maintitle" class="zsiq_ellips" title="We're Online!">We're Online!</div><p id="zsiq_byline" class="zsiq_ellips" title="How may I help you today?">How may I help you today?</p></div><em id="zsiq_unreadcnt" class="zsiq_unrdcnt" style="display: none;"></em><em id="zsiq_avcall" class="zsiqmin_unrdcnt zsiq_unrdcnt sqico-mincall" style="display: none;"></em></div></div></div><style id="floatthemecss">.zsiq_flt_rel{ background-color:#45a4ec !important;}</style><div class="zls-sptwndw  siqembed siqtrans siqhide zsiq-mobhgt siq_rht zsiq_size2" embedtheme="1" style="visibility: hidden; top: -10000px; display: block;"><div id="siqcht" class="zls-prelative"><iframe id="siqiframe" seamless="seamless" height="460" width="100%"></iframe></div></div>
</body>