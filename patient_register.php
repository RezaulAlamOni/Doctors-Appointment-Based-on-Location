<?php include('include/db.php');?>
<?php include('include/header.php');?>
<?php

    $page_name = "<i class='fa fa-registered'></i> Registration <span style='font-size: 18px;'> >>Patient </span> ";
    require ('class/patients.php');

?>
<?php include('include/nav.php');?>
<?php
    $patient = new patients();
    $patient->add();
?>
    <h2 class="text-center text-success" style="font-family: SansSerif;">Please Enter Your Valid Information</h2>
    <div id="login-page">
        <div class="layer-stretch" >
            <div class="layer-wrapper" style="background-image: url('public/uploads/slider-1.jpg');">
                <div class="layer-container " >
                    <form class="form-container" action="patient_register.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="15276e55e6cdfa6911f440f75f64501dc97cc6f4a19102dddb4c47f0c4dd1523ad639943996afef209d6a358056f3b3389a9bcb175b7413ef3547589673a2b7d">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                            <i class="fa fa-user-o"></i>
                            <input class="mdl-textfield__input" type="text" name="firstname" pattern="[A-Z,a-z, ]*" id="register-first-name">
                            <label class="mdl-textfield__label" for="register-first-name">First Name <em> *</em></label>
                            <span class="mdl-textfield__error">Please Enter Valid Name!</span>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                            <i class="fa fa-user-o"></i>
                            <input class="mdl-textfield__input" type="text" name="lastname" pattern="[A-Z,a-z, ]*" id="register-last-name">
                            <label class="mdl-textfield__label" for="register-last-name">Last Name <em> *</em></label>
                            <span class="mdl-textfield__error">Please Enter Valid Name!</span>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                            <i class="fa fa-envelope-o"></i>
                            <input class="mdl-textfield__input" type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="register-email">
                            <label class="mdl-textfield__label" for="register-email">Email Address <em> *</em></label>
                            <span class="mdl-textfield__error">Please Enter Valid Email Address!</span>
                        </div>

                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                            <i class="fa fa-location-arrow"></i>
                            <label for="location">Location : </label>
                            <select name="location" id="locationig" class="form-input" >
                                <option value="" class="">Select Your Location</option>
                                <?php

                                $sql = "SELECT * FROM locations ";
                                $result = $pdo->prepare($sql);
                                $result->execute();
                                $locations = $result->fetchAll(); // default value PDO::FETCH_obj

                                foreach ($locations as $location) {
                                    ?>
                                    <option class="text-capitalize" value="<?php echo $location->location_id; ?>"><?php echo $location->name; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                            <i class="fa fa-plus-circle"></i>
                            <label for="blood">Blood Group :</label>
                            <select name="blood" id="blood" class="form-input" >
                                <option value="">Select Blood Group</option>
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
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                            <i class="fa fa-phone"></i>
                            <input class="mdl-textfield__input" type="text" name="mobile" pattern="[0-9]*" id="register-mobile">
                            <label class="mdl-textfield__label" for="register-mobile">Mobile Number <em> *</em></label>
                            <span class="mdl-textfield__error">Please Enter Valid Mobile Number!</span>
                        </div>

                        <div class="row form-input">
                            <div class="col-md-4">
                                <label for=""><span></span><p class="text-info"><i class="fa fa-intersex text-success"> </i><b>  Gender : </b></p> </label>
                            </div>
                            <div class="col-md-4">
                                <input type="radio" name="gender" value="Male" id="gender-male" class="mdl-radio__outer-circle">
                                <label for="gender-male"><span></span><p><i class="fa fa-mars"></i> Male </p></label>
                            </div>
                            <div class="col-md-4">
                                <input type="radio" name="gender" value="Female" id="gender-female" class="mdl-radio__outer-circle">
                                <label for="gender-female"><span></span><p><i class="fa fa-venus"></i> Female </p></label>
                            </div>
                        </div>

                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                            <i class="fa fa-key"></i>
                            <input class="mdl-textfield__input" type="text" name="username" id="register-username">
                            <label class="mdl-textfield__label" for="register-password">Username <em> *</em></label>
                            <span class="mdl-textfield__error">Please Enter Valid Username(Min 6 Character)!</span>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                            <i class="fa fa-key"></i>
                            <input class="mdl-textfield__input" type="password" name="password" id="register-password">
                            <label class="mdl-textfield__label" for="register-password">Password <em> *</em></label>
                            <span class="mdl-textfield__error">Please Enter Valid Password(Min 6 Character)!</span>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                            <i class="fa fa-key"></i>
                            <input class="mdl-textfield__input" type="password" name="confirmpassword" id="register-confirm-password">
                            <label class="mdl-textfield__label" for="register-confirm-password">Confirm Password <em> *</em></label>
                            <span class="mdl-textfield__error">Please Enter Valid Password(Min 6 Character)!</span>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon form-bot-check">
                            <i class="fa fa-question"></i>
                            <input class="mdl-textfield__input" type="number" name="bot-check" id="register-bot">
                            <?php
                                $a = rand(1,10);
                                $b = rand(10,20);
                            ?>
                            <label class="mdl-textfield__label" for="register-bot">What is <?php echo $a;?> plus <?php echo $b;?> = <em> *</em></label>
                            <span class="mdl-textfield__error">Please Enter Correct Value!</span>
                        </div>
                        <div class="login-condition">By clicking Creat Account you aggree to our<br /><a href="about.php">Terms & Condition</a></div>
                        <div class="form-submit">
                            <button type="submit" id="register-submit" class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect mdl-button--raised mdl-button--raised button button-primary button-pill" name="register_patient">Create Account</button>
                        </div>
                        <div class="login-link">
                            <span class="paragraph-small">Already have an account?</span>
                            <a href="login.php">Login</a>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <!-- End Register Section -->
    <!-- Start Make an Appointment Modal -->
<?php include('include/footer.php');?>