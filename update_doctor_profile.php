
<?php include('include/header.php');?>
<?php
$page_name = "<i class='fa fa-pencil-square-o'></i> My Profile<span style='font-size: 22px;color: #66bb6a'>>>Update</span>";
?>
<?php include('include/nav.php');?>

<div id="edit-profile-page" class="animated-wrapper " style="opacity: 1;background-color: #7b5389">
    <div class="layer-stretch">
        <div class="row layer-wrapper text-center">
            <div class="col-md-8 form-full-container">
                <form action="" method="post" enctype="multipart/form-data">
                    <p class="sub-ttl">Update Profile</p>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input is-dirty is-upgraded" data-upgraded="MaterialTextfield">
                                <input class="mdl-textfield__input" type="text" name="firstname" pattern="[A-Z,a-z, ]*" value="oni" id="profile-first-name">
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
<?php include('include/make_appointment.php');?><!-- End Make an Appointment Section -->

<?php include('include/footer.php');?>