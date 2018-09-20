
<?php include('include/header.php');?>
<?php
$page_name = "<i class=\"fa fa-pencil-square-o\"></i> My Profile";
?>
<?php include('include/nav.php');?>

<!-- Header End --><!-- Start Page Title Section -->
<!--<div class="page-ttl">-->
<!--    <div class="layer-stretch">-->
<!--        <div class="page-ttl-container">-->
<!--            <div class="page-ttl-icon"><i class="fa fa-pencil-square-o"></i></div>-->
<!--            <div class="page-ttl-name">-->
<!--                <h1>Update Profile</h1>-->
<!--                <p><a href="http://pepdev.com/theme-preview/klinikal/index.php?route=home">Home</a> &gt; <a href="index.php?route=user/profile">My Profile</a> &gt; Update Profile</p>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div><!-- End Page Title Section -->-->
<!-- Start Edit Profile Section -->
<div id="edit-profile-page" class="animated-wrapper " style="opacity: 1;background-color: #7b5389">
    <div class="layer-stretch">
        <div class="row layer-wrapper text-center">
            <div class="col-md-8 form-full-container">
                <form action="http://pepdev.com/theme-preview/klinikal/index.php?route=user/profile/edit" method="post" enctype="multipart/form-data">
                    <p class="sub-ttl">Update Profile</p>
                    <input type="hidden" name="_token" value="15276e55e6cdfa6911f440f75f64501dc97cc6f4a19102dddb4c47f0c4dd1523ad639943996afef209d6a358056f3b3389a9bcb175b7413ef3547589673a2b7d">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input is-dirty is-upgraded" data-upgraded=",MaterialTextfield">
                                <input class="mdl-textfield__input" type="text" name="firstname" pattern="[A-Z,a-z, ]*" value="oni" id="profile-first-name" readonly="">
                                <label class="mdl-textfield__label" for="profile-first-name">First Name</label>
                                <span class="mdl-textfield__error">Please Enter Valid Name!</span>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input is-dirty is-upgraded" data-upgraded=",MaterialTextfield">
                                <input class="mdl-textfield__input" type="text" name="lastname" value="asdfasd" pattern="[A-Z,a-z, ]*" id="profile-last-name" readonly="">
                                <label class="mdl-textfield__label" for="profile-last-name">Last Name</label>
                                <span class="mdl-textfield__error">Please Enter Valid Name!</span>
                            </div>
                        </div>
                        <div class="clearfix clear"></div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input is-dirty is-upgraded" data-upgraded=",MaterialTextfield">
                                <input class="mdl-textfield__input" type="text" name="email" value="rzalam93@gmail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="profile-email" readonly="">
                                <label class="mdl-textfield__label" for="profile-email">Email Address</label>
                                <span class="mdl-textfield__error">Please Enter Valid Email Address!</span>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input is-dirty is-upgraded" data-upgraded=",MaterialTextfield">
                                <input class="mdl-textfield__input" type="text" name="mobile" value="01554534242" pattern="[0-9]*" id="profile-mobile">
                                <label class="mdl-textfield__label" for="profile-mobile">Mobile Number</label>
                                <span class="mdl-textfield__error">Please Enter Valid Mobile Number!</span>
                            </div>
                        </div>
                        <div class="clearfix clear"></div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input is-upgraded" data-upgraded=",MaterialTextfield">
                                <input class="mdl-textfield__input hasDatepicker" type="text" name="dob" value="" id="profile-dob">
                                <label class="mdl-textfield__label" for="profile-dob">Birthday</label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-radio" data-upgraded=",MaterialTextfield">
                                <p>Gender</p>
                                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect mdl-js-ripple-effect--ignore-events is-upgraded" for="gender-male" data-upgraded=",MaterialRadio,MaterialRipple">
                                    <input type="radio" id="gender-male" class="mdl-radio__button" name="gender" value="1">
                                    <span class="mdl-radio__label">Male</span>
                                    <span class="mdl-radio__outer-circle"></span><span class="mdl-radio__inner-circle"></span><span class="mdl-radio__ripple-container mdl-js-ripple-effect mdl-ripple--center" data-upgraded=",MaterialRipple"><span class="mdl-ripple"></span></span></label>
                                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect mdl-js-ripple-effect--ignore-events is-upgraded" for="gender-female" data-upgraded=",MaterialRadio,MaterialRipple">
                                    <input type="radio" id="gender-female" class="mdl-radio__button" name="gender" value="2">
                                    <span class="mdl-radio__label">Female</span>
                                    <span class="mdl-radio__outer-circle"></span><span class="mdl-radio__inner-circle"></span><span class="mdl-radio__ripple-container mdl-js-ripple-effect mdl-ripple--center" data-upgraded=",MaterialRipple"><span class="mdl-ripple"></span></span></label>
                            </div>
                        </div>
                        <div class="clearfix clear"></div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input is-upgraded" data-upgraded=",MaterialTextfield">
                                <input class="mdl-textfield__input" type="text" name="bloodgroup" value="" id="profile-bg">
                                <label class="mdl-textfield__label" for="profile-bg">Blood Group</label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input is-upgraded" data-upgraded=",MaterialTextfield">
                                <input class="mdl-textfield__input" type="text" value="" name="location" id="profile-location">
                                <label class="mdl-textfield__label" for="profile-location">Location</label>
                            </div>
                        </div>
                        <div class="clearfix clear"></div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input is-upgraded" data-upgraded=",MaterialTextfield">
                                <input class="mdl-textfield__input" type="text" name="country" value="" id="profile-country">
                                <label class="mdl-textfield__label" for="profile-country">Country</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-submit">
                        <button type="submit" id="edit-profile-submit" name="profile" class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect mdl-button--raised mdl-button--raised button button-primary button-pill" data-upgraded=",MaterialButton,MaterialRipple">Update Profile<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <form action="index.php?route=user/profile/password" method="post" class="form-full-container" enctype="multipart/form-data">
                    <p class="sub-ttl">Change Password</p>
                    <input type="hidden" name="_token" value="15276e55e6cdfa6911f440f75f64501dc97cc6f4a19102dddb4c47f0c4dd1523ad639943996afef209d6a358056f3b3389a9bcb175b7413ef3547589673a2b7d">
                    <input type="hidden" name="email" value="rzalam93@gmail.com">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input is-upgraded" data-upgraded=",MaterialTextfield">
                        <input class="mdl-textfield__input" type="password" name="oldpassword" id="change-password-old">
                        <label class="mdl-textfield__label" for="register-old-password">Old Password(**********)</label>
                        <span class="mdl-textfield__error">Please Enter Valid Password(Min 6 Character)!</span>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input is-upgraded" data-upgraded=",MaterialTextfield">
                        <input class="mdl-textfield__input" type="password" name="newpassword" id="change-password-new">
                        <label class="mdl-textfield__label" for="register-new-password">New Password(**********)</label>
                        <span class="mdl-textfield__error">Please Enter Valid Password(Min 6 Character)!</span>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input is-upgraded" data-upgraded=",MaterialTextfield">
                        <input class="mdl-textfield__input" type="password" name="confirmpassword" id="change-password-confirm">
                        <label class="mdl-textfield__label" for="register-confirm-password">Confirm Password(**********)</label>
                        <span class="mdl-textfield__error">Please Enter Valid Password(Min 6 Character)!!</span>
                    </div>
                    <div class="form-submit text-center">
                        <button type="submit" id="change-password-submit" name="profilepassword" class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect mdl-button--raised mdl-button--raised button button-primary button-pill" data-upgraded=",MaterialButton,MaterialRipple">Change Password<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><!-- End Edit Profile Section -->

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