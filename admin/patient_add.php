
<?php include('include/header.php'); ?>
<?php include('include/navbar.php'); ?>

<?php require('class/patients.php')?>

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


        <form action="" method="post" enctype="multipart/form-data" siq_id="autopick_7004">
            <div class="page-hdr scroll-to-fixed-fixed" style="z-index: 9; position: fixed; top: 0px; margin-left: 0px; width: 920px; left: 60px;">
                <div class="row col-sm-12">
                    <div class="col-sm-6 page-name">
                        <h1><i class="fa fa-users"></i>Add Patient</h1>
                    </div>
                    <div class="col-sm-4 page-menu" >
                        <a id="cancel" href="patient_add.php" data-toggle="tooltip" data-placement="left" title="" data-original-title="Back to List"><i class="fa fa-reply"></i></a>
                        <button type="submit" name="patient_submit" data-toggle="" data-placement="left" title="" data-original-title="Save Page"><i class="fa fa-floppy-o"></i></button>
                    </div>
                </div>
            </div><div style="display: block; width: 920px; height: 70px; float: none;"></div>
            <div class="content">
                <input type="hidden" name="_token" value="413ccea5ca6b8ce59e0da0d74a15110a305317f742542dcc5f09cc85ddf4f25288776a66377494dbf3154612b21c29b49cdcd6ee235b8ea2b77355d52eef0188">
                <div class="row">
                    <div class="col-sm-8">
                        <?php
                            $patient=new patients();
                            $patient->patient_add();
                        ?>

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
                                        <input type="date" name="dob" id="user-dob" value="" placeholder="Date of Birth (DD/MM/YY)" class="hasDatepicker">
                                    </div>
                                    <div class="col-sm-6">
                                    </div>
                                </div>
                                <div class="row content-input">
                                    <div class="col-sm-6">

                                        <label><text>*</text>Location : </label>
                                        <select name="location" title="Select User Role" class="select-list" required="" id="ui-id-1" style="display: none;">
                                            <option value="">Select your location</option>
                                            <?php
                                            $sql = "SELECT * FROM locations ";
                                            $result = $pdo->prepare($sql);
                                            $result->execute();
                                            $locations = $result->fetchAll(); // default value PDO::FETCH_obj
                                            foreach ($locations as $location){
                                                ?>
                                                <option value="<?php echo $location->location_id;?>"><?php echo $location->name;?></option>

                                                <?php
                                            }
                                            ?>

                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Blood Group : </label>
                                        <select name="bloodgroup" title="Select User Role" class="select-list" required="" id="ui-id-1" style="display: none;">
                                            <option value="">Select your Blood Group</option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="row content-input content-radio">
                                    <div class="col-sm-12">
                                        <label>Gender : </label>
                                        <div class="content-radio-container">
                                            <div>
                                                <input type="radio" name="gender" value="Male" id="gender-male">
                                                <label for="gender-male"><span><i class="fa fa-check"></i></span><p>Male</p></label>
                                            </div>
                                            <div>
                                                <input type="radio" name="gender" value="Female" id="gender-female">
                                                <label for="gender-female"><span><i class="fa fa-check"></i></span><p>Female</p></label>
                                            </div>
                                        </div>
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
                                                    <input type="checkbox" name="medical[]" value="diabetes" id="diabetes">
                                                    <label for="diabetes"><span><i class="fa fa-check"></i></span><p>Diabetes</p></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 content-radio-container">
                                                <div>
                                                    <input type="checkbox" name="medical[]" value="high-blood-pressure" id="high-blood-pressure">
                                                    <label for="high-blood-pressure"><span><i class="fa fa-check"></i></span><p>High blood pressure</p></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 content-radio-container">
                                                <div>
                                                    <input type="checkbox" name="medical[]" value="high-cholesterol" id="high-cholesterol">
                                                    <label for="high-cholesterol"><span><i class="fa fa-check"></i></span><p>High cholesterol</p></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 content-radio-container">
                                                <div>
                                                    <input type="checkbox" name="medical[]" value="heart-problems" id="heart-problems">
                                                    <label for="heart-problems"><span><i class="fa fa-check"></i></span><p>Heart problems</p></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 content-radio-container">
                                                <div>
                                                    <input type="checkbox" name="medical[]" value="asthma" id="asthma">
                                                    <label for="asthma"><span><i class="fa fa-check"></i></span><p>Asthma</p></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 content-radio-container">
                                                <div>
                                                    <input type="checkbox" name="medical[]" value="kidney-disease" id="kidney-disease">
                                                    <label for="kidney-disease"><span><i class="fa fa-check"></i></span><p>Kidney disease</p></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 content-radio-container">
                                                <div>
                                                    <input type="checkbox" name="medical[]" value="kidney-stones" id="kidney-stones">
                                                    <label for="kidney-stones"><span><i class="fa fa-check"></i></span><p>Kidney Stones</p></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 content-radio-container">
                                                <div>
                                                    <input type="checkbox" name="medical[]" value="jaundice" id="jaundice">
                                                    <label for="jaundice"><span><i class="fa fa-check"></i></span><p>Jaundice</p></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 content-radio-container">
                                                <div>
                                                    <input type="checkbox" name="medical[]" value="hepatitis" id="hepatitis">
                                                    <label for="hepatitis"><span><i class="fa fa-check"></i></span><p>Hepatitis</p></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 content-radio-container">
                                                <div>
                                                    <input type="checkbox" name="medical[]" value="rheumatic-fever" id="rheumatic-fever">
                                                    <label for="rheumatic-fever"><span><i class="fa fa-check"></i></span><p>Rheumatic Fever</p></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 content-radio-container">
                                                <div>
                                                    <input type="checkbox" name="medical[]" value="cancer" id="cancer">
                                                    <label for="cancer"><span><i class="fa fa-check"></i></span><p>Cancer</p></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 content-radio-container">
                                                <div>
                                                    <input type="checkbox" name="medical[]" value="hiv" id="hiv">
                                                    <label for="hiv"><span><i class="fa fa-check"></i></span><p>HIV/AIDS</p></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 content-radio-container">
                                                <div>
                                                    <input type="checkbox" name="medical[]" value="epilepsy" id="epilepsy">
                                                    <label for="epilepsy"><span><i class="fa fa-check"></i></span><p>Epilepsy</p></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 content-radio-container">
                                                <div>
                                                    <input type="checkbox" name="medical[]" value="pregnancy" id="pregnancy">
                                                    <label for="pregnancy"><span><i class="fa fa-check"></i></span><p>Pregnancy</p></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 content-radio-container">
                                                <div>
                                                    <input type="checkbox" name="medical[]" value="blood-thinners" id="blood-thinners">
                                                    <label for="blood-thinners"><span><i class="fa fa-check"></i></span><p>Blood thinners</p></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-input">
                                    <label>Other History : </label>

                                    <textarea name="medical[]" placeholder="Patient other history or about user" ></textarea>

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
                                        <?php
                                            $sql = "SELECT * FROM roles ";
                                            $result = $pdo->prepare($sql);
                                            $result->execute();
                                            $roles = $result->fetchAll(); // default value PDO::FETCH_obj

                                        foreach ($roles as $role){
                                            ?>
                                            <option value="<?php echo $role->role_id;?>"><p class="text-capitalize"><?php echo $role->role_name;?></p></option>

                                            <?php
                                        }

                                        ?>



                                    </select>
<!--                                    <span tabindex="0" id="ui-id-1-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-1-menu" aria-haspopup="true" title="Select User Role" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Patient</span></span>-->
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
<!--                                <div class="content-input">-->
<!--                                    <label>Notify User : </label>-->
<!--                                    <div class="content-radio-container">-->
<!--                                        <div>-->
<!--                                            <input type="checkbox" name="sendmail" value="1" id="send-mail" checked="">-->
<!--                                            <label for="send-mail"><span><i class="fa fa-check"></i></span><p>Send an Email</p></label>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="id" value="">
                </div>
                <div class="content-submit text-center">
                    <button type="submit" name="patient_submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>

        <!-- Footer -->
<?php include ('include/footer.php');?>




