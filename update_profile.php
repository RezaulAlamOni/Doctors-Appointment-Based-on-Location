
<?php include('include/db.php');?>
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
                    <?php
                    $sql = "SELECT * FROM patients where patient_id = {$_SESSION['patient_id']}";
                    $result = $pdo->prepare($sql);
                    $result->execute();
                    $doctors = $result->fetchAll();
                    foreach ($doctors as $doctor) {


                    ?>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input is-dirty is-upgraded"
                                 data-upgraded="MaterialTextfield">
                                <input class="mdl-textfield__input" type="text" name="firstname" pattern="[A-Z,a-z, ]*"
                                       value="<?php echo $doctor->first_name;?>" id="profile-first-name">
                                <label class="mdl-textfield__label" for="profile-first-name">First Name</label>
                                <span class="mdl-textfield__error">Please Enter Valid Name!</span>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input is-dirty is-upgraded"
                                 data-upgraded=",MaterialTextfield">
                                <input class="mdl-textfield__input" type="text" name="lastname" value="<?php echo $doctor->last_name;?>"
                                       pattern="[A-Z,a-z, ]*" id="profile-last-name" readonly="">
                                <label class="mdl-textfield__label" for="profile-last-name">Last Name</label>
                                <span class="mdl-textfield__error">Please Enter Valid Name!</span>
                            </div>
                        </div>
                        <div class="clearfix clear"></div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input is-dirty is-upgraded"
                                 data-upgraded=",MaterialTextfield">
                                <input class="mdl-textfield__input" type="text" name="email" value="<?php echo $doctor->email;?>"
                                       pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="profile-email" readonly="">
                                <label class="mdl-textfield__label" for="profile-email">Email Address</label>
                                <span class="mdl-textfield__error">Please Enter Valid Email Address!</span>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input is-dirty is-upgraded"
                                 data-upgraded=",MaterialTextfield">
                                <input class="mdl-textfield__input" type="text" name="mobile" value="<?php echo $doctor->phone;?>"
                                       pattern="[0-9]*" id="profile-mobile">
                                <label class="mdl-textfield__label" for="profile-mobile">Mobile Number</label>
                                <span class="mdl-textfield__error">Please Enter Valid Mobile Number!</span>
                            </div>
                        </div>
                        <div class="clearfix clear"></div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input is-upgraded"
                                 data-upgraded=",MaterialTextfield"> Date Of Birth
                                <input class="mdl-textfield__input hasDatepicker" type="text" name="dob" value="<?php echo $doctor->dob;?>"
                                       id="">
                                <label class="mdl-textfield__label" for=""></label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-radio"
                                 data-upgraded=",MaterialTextfield">

                            </div>
                        </div>
                        <div class="clearfix clear"></div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input is-upgraded"
                                 data-upgraded=",MaterialTextfield">Blood Group
                                <input class="mdl-textfield__input" type="text" name="bloodgroup" value="<?php echo $doctor->blood_group;?>"
                                       id="profile-bg">
                                <label class="mdl-textfield__label" for="profile-bg"></label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input is-upgraded"
                                 data-upgraded=",MaterialTextfield">
                                <input class="mdl-textfield__input" type="text" value="<?php echo $doctor->location_id;?>" name="location"
                                       id="profile-location">
                                <label class="mdl-textfield__label" for="profile-location"></label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input is-upgraded"
                                 data-upgraded=",MaterialTextfield" style="background-color: #4ca29e"> Update Your Diagnosis Status
                                <input  type="text" value="" name="problems">

                            </div>
                        </div>
                        <div class="clearfix clear"></div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input is-upgraded"
                                 data-upgraded=",MaterialTextfield">
                                <input class="mdl-textfield__input" type="text" name="country" value="Bangladesh"
                                       id="profile-country">
                                <label class="mdl-textfield__label" for="profile-country"></label>
                                <input type="hidden" name="id" value="<?php echo $doctor->patient_id;?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-submit">
                        <button type="submit" id="edit-profile-submit" name="profile"
                                class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect mdl-button--raised mdl-button--raised button button-primary button-pill"
                                data-upgraded=",MaterialButton,MaterialRipple">Update Profile<span
                                    class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span>
                        </button>
                    </div>

                </form>

            </div>
            <div class="col-md-4">
                <form action="update_doctor_profile.php" method="post" class="form-full-container"
                      enctype="multipart/form-data">
                    <p class="sub-ttl">Change Password</p>
                    <input type="hidden" name="id" value="<?php echo $doctor->Patient_id;?>">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input is-upgraded"
                         data-upgraded=",MaterialTextfield">
                        <input class="mdl-textfield__input" type="password" name="oldpassword" id="change-password-old">
                        <label class="mdl-textfield__label" for="register-old-password">Old Password(**********)</label>
                        <span class="mdl-textfield__error">Please Enter Valid Password(Min 6 Character)!</span>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input is-upgraded"
                         data-upgraded=",MaterialTextfield">
                        <input class="mdl-textfield__input" type="password" name="newpassword" id="change-password-new">
                        <label class="mdl-textfield__label" for="register-new-password">New Password(**********)</label>
                        <span class="mdl-textfield__error">Please Enter Valid Password(Min 6 Character)!</span>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input is-upgraded"
                         data-upgraded=",MaterialTextfield">
                        <input class="mdl-textfield__input" type="password" name="confirmpassword"
                               id="change-password-confirm">
                        <label class="mdl-textfield__label" for="register-confirm-password">Confirm
                            Password(**********)</label>
                        <span class="mdl-textfield__error">Please Enter Valid Password(Min 6 Character)!!</span>
                    </div>
                    <div class="form-submit text-center">
                        <button type="submit" id="change-password-submit" name="profilepassword"
                                class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect mdl-button--raised mdl-button--raised button button-primary button-pill"
                                data-upgraded=",MaterialButton,MaterialRipple">Change Password<span
                                    class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span>
                        </button>
                    </div>

                    <?php
                    }
                    if (isset($_POST['profile'])){
                        $id = $_POST['id'];
                        $prblm = $_POST['problems'];

                        $sql = "UPDATE patients SET `medical_report`='$prblm' where patient_id = $id";
                        $result = $pdo->prepare($sql);
                        $result->execute();
                    }
                    ?>
                </form>
                <?php
                if (isset($_POST['profilepassword'])){
                    $id = $_POST['id'];
                    $op = $_POST['oldpassword'];
                    $np = $_POST['newpassword'];
                    $cp = $_POST['confirmpassword'];

                    $sql = "SELECT * FROM patients where patienrt_id = $id";
                    $result = $pdo->prepare($sql);
                    $result->execute();
                    $doctors = $result->fetchAll();
                    foreach ($doctors as $doctor) {
                        if ($doctor->password == $op && $np == $cp){
                            $sql = "UPDATE patients SET `password`='$np' where patient_id = $id";
                            $result = $pdo->prepare($sql);
                            $result->execute();
                        }else echo "Password not Match!!!!";
                    }
                }
                ?>


            </div>
        </div>
    </div>
</div><!-- End Edit Profile Section -->

<!-- Start Make an Appointment Modal -->
<?php include('include/make_appointment.php');?><!-- End Make an Appointment Section -->

<?php include('include/footer.php');?>