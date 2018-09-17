
<?php include('include/header.php'); ?>
<?php include('include/navbar.php'); ?>
<!--page Container start-->
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

        <form action="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=user/action" method="post" enctype="multipart/form-data" siq_id="autopick_7004">
            <div class="page-hdr scroll-to-fixed-fixed" style="z-index: 9; position: fixed; top: 0px; margin-left: 0px; width: 920px; left: 60px;">
                <div class="row">
                    <div class="col-5 page-name">
                        <h1><i class="fa fa-users"></i>Add Patient</h1>
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
                                        <input type="text" class="input-text" name="firstname" value="" placeholder="Enter your First Name" required="">
                                        <p class="content-input-error-name">Please enter name!</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <label><text>*</text>Last Name : </label>
                                        <input type="text" class="input-text" name="lastname" value="" placeholder="Enter your Last Name" required="">
                                        <p class="content-input-error-name">Please enter last name!</p>
                                    </div>
                                </div>
                                <div class="row content-input">
                                    <div class="col-sm-6">
                                        <label><text>*</text>Email Address : </label>
                                        <input type="email" class="input-email" name="email" value="" placeholder="Enter your Email Address" required="">
                                        <p class="content-input-error-name">Please enter email!</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <label><text>*</text>Mobile : </label>
                                        <input type="number" class="input-mobile" name="mobile" value="" placeholder="Enter your Mobile number" min="1" required="">
                                        <p class="content-input-error-name">Please enter phone number!</p>
                                    </div>
                                </div>
                                <div class="content-input">
                                    <label><text>*</text>Password (min 6 words) :</label>
                                    <input type="password" class="input-password" pattern=".{6,}" title="Minimum 6 word required!" name="password" placeholder="Enter your Password" required="">
                                    <p class="content-input-error-name">Please enter password (minimum 6 words)!</p>
                                    <div class="content-description">This password will be mailed to user.</div>
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
                        <div class="content-block content-block-horizantal">
                            <div class="content-block-ttl">For office use</div>
                            <div class="content-block-main">
                                <div class="content-input">
                                    <label>User Role : </label>
                                    <select name="role" title="Select User Role" class="select-list" required="" id="ui-id-1" style="display: none;">
                                        <option value="1">Patient</option>
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
                    <input type="hidden" name="id" value="">
                </div>
                <div class="content-submit text-center">
                    <button type="submit" name="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>

        <!-- Footer -->
<?php include ('include/footer.php');?>




