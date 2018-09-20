<?php include('include/header.php');?>
<?php
    $page_name = "<i class='fa fa-address-card-o'></i> My Profile";
?>
<?php include('include/nav.php');?>

<!--    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="menu-profile">-->
<!--        <li class="mdl-menu__item">-->
<!--            <a href="login.php"><i class="fa fa-sign-in color-green"></i> Login</a>-->
<!--        </li>-->
<!--        <li class="mdl-menu__item">-->
<!--            <a href="register.php"><i class="fa fa-user-o color-green"></i> Register</a>-->
<!--        </li>-->
<!--        <li class="mdl-menu__item">-->
<!--            <a href="forget_pass.php"><i class="fa fa-key color-green"></i> Forgot Password</a>-->
<!--        </li>-->
<!---->
<!---->
<!--        <li class="mdl-menu__item">-->
<!--            <a href="profile.php"><i class="fa fa-address-card-o color-green"></i>My Profile</a>-->
<!--        </li>-->
<!--        <li class="mdl-menu__item">-->
<!--            <a href="my_appointment.php"><i class="fa fa-plus-square-o color-green"></i> My Appointment</a>-->
<!--        </li>-->
<!--        <li class="mdl-menu__item">-->
<!--            <a href="my_invoice.php"><i class="fa fa-key color-green"></i> My Invoice</a>-->
<!--        </li>-->
<!--        <li class="mdl-menu__item">-->
<!--            <a href="update_profile.php"><i class="fa fa-key color-green"></i> Update Profile</a>-->
<!--        </li>-->
<!--        <li class="mdl-menu__item">-->
<!--            <a href="include/logout.php"><i class="fa fa-sign-out color-green"></i> Logout</a>-->
<!--        </li>-->
<!--    </ul>-->

<!-- Header End --><!-- Start Page Title Section -->
<!--<div class="page-ttl">-->
<!--    <div class="layer-stretch" style="height: 90px;">-->
<!--        <div class="page-ttl-container">-->
<!--            <div class="page-ttl-name">-->
<!--                <h1><i class="fa fa-address-card-o"></i> My Profile</h1>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!-- End Page Title Section -->
<!-- Start Profile Section -->
<div id="profile-page" class="dtr-modal-background">
    <div class="layer-stretch">
        <div class="row layer-wrapper">
            <div class="col-md-6 profile-left">
                <div class="profile-data">
                    <div class="profile-data-block">
                        <div class="profile-data-label">Name</div>
                        <div class="profile-data-value">oni asdfasd</div>
                    </div>
                    <div class="profile-data-block">
                        <div class="profile-data-label">Email Address</div>
                        <div class="profile-data-value">rzalam93@gmail.com</div>
                    </div>
                    <div class="profile-data-block">
                        <div class="profile-data-label">Mobile Number</div>
                        <div class="profile-data-value">01554534242</div>
                    </div>
                    <div class="profile-data-block">
                        <div class="profile-data-label">Birthday</div>
                        <div class="profile-data-value"></div>
                    </div>
                    <div class="profile-data-block">
                        <div class="profile-data-label">Gender</div>
                        <div class="profile-data-value"></div>
                    </div>
                    <div class="profile-data-block">
                        <div class="profile-data-label">Blood Group</div>
                        <div class="profile-data-value"></div>
                    </div>
                    <div class="profile-data-block">
                        <div class="profile-data-label">Location</div>
                        <div class="profile-data-value"></div>
                    </div>
                    <div class="profile-data-block">
                        <div class="profile-data-label">Country</div>
                        <div class="profile-data-value"></div>
                    </div>
                    <div class="profile-data-block">
                        <div class="profile-data-label">About</div>
                        <div class="profile-data-value"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 profile-right">
                <div class="profile-edit">
                    <div class="paragraph-medium paragraph-black">Manage this basic information — your name, email, phone number, birthday, blood group and location — to help our doctor in emergency case.</div>
                    <div class="profile-edit-button">
                        <a href="update_profile.php" class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect mdl-button--raised mdl-button--raised button button-primary button-pill" data-upgraded=",MaterialButton,MaterialRipple">Edit Personal Info <i class="fa fa-pencil-square-o"></i><span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Profile Section -->

<!-- Start Make an Appointment Modal -->
<div id="appointment" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title">Make An Appointment</h4>
                <div class="appointment-hdr-back"><i class="fa fa-chevron-left"></i></div>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <div class="appointment-form">
                    <div class="appointment-part-1">
                        <div class="appointment-option">
                            <div class="appointment-option-department">
                                <i class="fa fa-hospital-o" id="appointment-option-department" tabindex="0"></i>
                                <span class="mdl-tooltip mdl-tooltip--top" for="appointment-option-department" data-upgraded=",MaterialTooltip">I Know Department</span>
                            </div>
                            <div class="appointment-option-doctor">
                                <i class="fa fa-user-md" id="appointment-option-doctor" tabindex="0"></i>
                                <span class="mdl-tooltip mdl-tooltip--top" for="appointment-option-doctor" data-upgraded=",MaterialTooltip">I Know Doctor</span>
                            </div>
                        </div>
                        <div class="appointment-invisible">
                            <input type="hidden" value="{&quot;id&quot;:1,&quot;name&quot;:&quot;Daniel Barnes&quot;,&quot;department&quot;:2,&quot;weekly&quot;:&quot;[\&quot;3\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25, 2017-01-18, 2017-01-21, 2017-01-30, 2017-03-27, 2017-03-31\&quot;&quot;}" class="doctor-id-1 department-id-2">
                            <input type="hidden" value="{&quot;id&quot;:3,&quot;name&quot;:&quot;Melissa Bates&quot;,&quot;department&quot;:1,&quot;weekly&quot;:&quot;[\&quot;1\&quot;,\&quot;2\&quot;,\&quot;6\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25, 2017-04-13, 2017-04-14, 2017-04-20, 2017-07-07, 2017-07-08, 2017-07-14\&quot;&quot;}" class="doctor-id-3 department-id-1">
                            <input type="hidden" value="{&quot;id&quot;:4,&quot;name&quot;:&quot;Cheri Aria&quot;,&quot;department&quot;:3,&quot;weekly&quot;:&quot;[\&quot;5\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25, 2017-03-07, 2017-03-14, 2017-03-20, 2017-03-26\&quot;&quot;}" class="doctor-id-4 department-id-3">
                            <input type="hidden" value="{&quot;id&quot;:5,&quot;name&quot;:&quot;Steve Soeren&quot;,&quot;department&quot;:2,&quot;weekly&quot;:&quot;[\&quot;0\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25, 2017-02-16, 2017-03-14, 2017-03-17, 2017-03-23, 2017-03-31\&quot;&quot;}" class="doctor-id-5 department-id-2">
                            <input type="hidden" value="{&quot;id&quot;:6,&quot;name&quot;:&quot;Theodore Bennett&quot;,&quot;department&quot;:4,&quot;weekly&quot;:&quot;[\&quot;0\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25, 2017-02-15, 2017-02-16, 2017-03-07, 2017-03-15, 2017-03-23, 2017-03-31\&quot;&quot;}" class="doctor-id-6 department-id-4">
                            <input type="hidden" value="{&quot;id&quot;:7,&quot;name&quot;:&quot;Barbara Baker&quot;,&quot;department&quot;:2,&quot;weekly&quot;:&quot;[\&quot;1\&quot;,\&quot;5\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25, 2017-06-08, 2017-06-20, 2017-06-28, 2017-06-29\&quot;&quot;}" class="doctor-id-7 department-id-2">
                            <input type="hidden" value="{&quot;id&quot;:8,&quot;name&quot;:&quot;Linda Adams&quot;,&quot;department&quot;:1,&quot;weekly&quot;:&quot;[\&quot;0\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25, 2017-06-16, 2017-06-21, 2017-06-26, 2017-07-11, 2017-07-14, 2017-07-20, 2017-07-31\&quot;&quot;}" class="doctor-id-8 department-id-1">
                            <input type="hidden" value="{&quot;id&quot;:10,&quot;name&quot;:&quot;Vedhraj Jain&quot;,&quot;department&quot;:5,&quot;weekly&quot;:&quot;[\&quot;6\&quot;,\&quot;0\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25\&quot;&quot;}" class="doctor-id-10 department-id-5">
                        </div>
                        <input type="hidden" name="appointment_token" value="15276e55e6cdfa6911f440f75f64501dc97cc6f4a19102dddb4c47f0c4dd1523ad639943996afef209d6a358056f3b3389a9bcb175b7413ef3547589673a2b7d">
                        <div class="mdl-selectfield mdl-js-selectfield mdl-selectfield--floating-label appointment-input is-upgraded" data-upgraded=",MaterialSelectfield">
                            <select class="mdl-selectfield__select" id="appointment-department" name="department">
                                <option value=""></option>
                                <option value="1">Gynaecology</option>
                                <option value="2">Orthology</option>
                                <option value="3">Dermatologist</option>
                                <option value="4">Anaesthesia</option>
                                <option value="5">Ayurvedic</option>
                            </select>
                            <label class="mdl-selectfield__label" for="appointment-department">Choose Department <em>*</em></label>
                        </div>
                        <div id="appointment-doctor-wrapper" class="mdl-selectfield mdl-js-selectfield mdl-selectfield--floating-label appointment-input is-upgraded" data-upgraded=",MaterialSelectfield">
                            <select class="mdl-selectfield__select" id="appointment-doctor" name="doctor">
                                <option value=""></option>
                            </select>
                            <label class="mdl-selectfield__label" for="appointment-doctor">Choose Doctor <em>*</em></label>
                        </div>
                        <div class="or-label">OR</div>
                        <div id="search-doctor" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label ui-widget appointment-input is-upgraded" data-upgraded=",MaterialTextfield">
                            <label class="mdl-textfield__label" for="appointment-search-doctor">I Know Doctor <em>*</em></label>
                            <input class="mdl-textfield__input ui-autocomplete-input" type="text" value="" id="appointment-search-doctor" autocomplete="off">
                        </div>
                        <div id="appointment-date-wrapper" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label appointment-input is-dirty is-upgraded" data-upgraded=",MaterialTextfield">
                            <input class="mdl-textfield__input" type="text" value="" id="appointment-date" readonly="">
                            <label class="mdl-textfield__label" for="appointment-date">Choose Date <em>*</em></label>
                        </div>
                        <div class="appointment-slot">
                            <p>Choose Time Slot</p>
                        </div>
                        <div class="appointment-button">
                            <button id="appointment-continue" class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect mdl-button--raised mdl-button--raised button button-primary button-pill" disabled="" data-upgraded=",MaterialButton,MaterialRipple">Continue<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
                        </div>
                    </div>
                    <div class="appointment-loading">
                        <div class="appointment-loading-gif"></div>
                    </div>
                    <div class="appointment-part-2">
                        <div class="appointment-enterd-value"></div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label appointment-input is-dirty is-upgraded" data-upgraded=",MaterialTextfield">
                            <input class="mdl-textfield__input" type="text" pattern="[A-Z,a-z, ]*" value="oni asdfasd" id="appointment-name">
                            <label class="mdl-textfield__label" for="appointment-name">Name <em>*</em></label>
                            <span class="mdl-textfield__error">Please Enter Valid Name!</span>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label appointment-input is-dirty is-upgraded" data-upgraded=",MaterialTextfield">
                            <input class="mdl-textfield__input" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value="rzalam93@gmail.com" id="appointment-email">
                            <label class="mdl-textfield__label" for="appointment-email">Email Address <em>*</em></label>
                            <span class="mdl-textfield__error">Please Enter Valid Email Address!</span>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label appointment-input is-dirty is-upgraded" data-upgraded=",MaterialTextfield">
                            <input class="mdl-textfield__input" type="text" pattern="[0-9]*" value="01554534242" id="appointment-mobile">
                            <label class="mdl-textfield__label" for="appointment-mobile">Mobile Number <em>*</em></label>
                            <span class="mdl-textfield__error">Please Enter Valid Mobile Number!</span>
                        </div>
                        <div class="appointment-button">
                            <button id="appointment-submit" class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect mdl-button--raised mdl-button--raised button button-primary button-pill" data-upgraded=",MaterialButton,MaterialRipple">Finish<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
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
<?php include('include/footer.php');?>