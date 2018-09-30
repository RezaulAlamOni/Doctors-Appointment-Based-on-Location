<?php include('include/db.php'); ?>
<?php include('include/header.php'); ?>
<?php include('include/navbar.php'); ?>
<?php
    require ('class/doctors.php');
    require ('class/departments.php');
//    require ('class/hospitals.php'); its declared in to doctors class
?>

<div class="page-container"><script>
        $('#themeoption').show();
        $('#themeoption-li>a').addClass('active');</script>


    <form action="add_doctors.php" method="post" enctype="multipart/form-data" >
        <div class="page-hdr scroll-to-fixed-fixed" style="z-index: 9; position: fixed; top: 0px; margin-left: 0px; width: 920px; left: 60px;">
            <div class="row">
                <div class="col-6 page-name">
                    <h1><i class="fa fa-user-md"></i>Add Doctor</h1>
                </div>
                <div class="col-4 page-menu" style="padding-right: 50px">
                    <a id="cancel" href="doctors.php" data-toggle="tooltip" data-placement="left" title="" data-original-title="Back to List"><i class="fa fa-reply"></i></a>
                    <button type="submit" name="doctor_submit" data-toggle="tooltip" data-placement="left" title="" data-original-title="Save Doctor"><i class="fa fa-floppy-o"></i></button>
                </div>
            </div>
        </div><div style="display: block; width: 920px; height: 70px; float: none;"></div>
        <div class="content">
            <div class="row">
                <div class="col-md-8">
                    <?php
                        $doct = new doctors();
                        $doct->add();
                    ?>
                    <div class="content-block content-block-horizantal">
                        <div class="content-block-ttl">Basic Info</div>
                        <div class="content-block-main">
                            <input type="hidden" name="_token" value="413cf0188">
                            <div class="content-input row">
                                <div class="col-6">
                                    <label><text>*</text>First Name : </label>
                                    <input type="text" class="input-text" name="firstname" value="" placeholder="First Name" required>
                                    <p class="content-input-error-name">Please enter doctor first name!</p>
                                </div>
                                <div class="col-6">
                                    <label><text>*</text>Last Name : </label>
                                    <input type="text" class="input-text" name="lastname" value="" placeholder="Last Name" required>
                                    <p class="content-input-error-name">Please enter doctor last name!</p>
                                </div>

                            </div>
                            <div class="content-input">
                                <label><text>*</text>Picture : </label>
                                    <input type="file" name="doctor_picture" value="">
                                <div class="content-description">(Size: 530px * 470px)</div>
                            </div>
                            <div class="content-input">
                                <label><text>*</text>Email : </label>
                                <input type="email" class="input-email" name="email" value="" placeholder="email" required="">
                                <p class="content-input-error-name">Please enter doctor email!</p>
                            </div>
                            <div class="content-input">
                                <label><text>*</text>Mobile : </label>
                                <input type="number" class="input-mobile" name="mobile" value="" placeholder="mobile" required="">
                                <p class="content-input-error-name">Please enter doctor phone number!</p>
                            </div>
                            <div class="row content-radio col-12">
                                <div class="content-radio-container col-sm-6">
                                    <div class="">
                                        <label> Gender : </label>
                                    </div>
                                    <div>
                                        <input type="radio" name="gender" value="Male" id="gender-male">
                                        <label for="gender-male"><span><i class="fa fa-check"></i></span><p>Male</p></label>
                                    </div>
                                    <div>
                                        <input type="radio" name="gender" value="Female" id="gender-female">
                                        <label for="gender-female"><span><i class="fa fa-check"></i></span><p>Female</p></label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="content-input">
                                        <label><text>*</text>Doctors Age : </label>
                                        <input type="number" name="age" placeholder="Enter Doctor Age .">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="content-input">
                                        <label><text>*</text>Department : </label>
                                        <select name="department" class="select-list" required="" title="Please Choose Department" id="ui-id-1" style="display: none;">
                                            <option class="text-capitalize text-info " >Select Your Department:</option>
                                            <?php

                                            $dpt = new departments();
                                            $result = $dpt->all();
                                            $departments = $result->fetchAll(); // default value PDO::FETCH_obj

                                            foreach ($departments as $department) {
                                                ?>
                                                <option class="text-capitalize text-info" value="<?php echo $department->id; ?>"><?php echo $department->name; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="content-input">
                                        <label><text>*</text>Mail Chamber : </label>
                                        <select name="chamber" id="ui-id-2" class="select-list" required="" style="display: none;">
                                            <option class="text-capitalize text-info " >Select Your main Chamber :</option>
                                            <?php

                                            $hsptl = new hospitals();
                                            $result = $hsptl->all();

                                            $hospitals = $result->fetchAll(); // default value PDO::FETCH_obj

                                            foreach ($hospitals as $hospital) {
                                                ?>
                                                <option class="text-capitalize text-info" value="<?php echo $hospital->id; ?>"><?php echo $hospital->name; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="content-input col-12">
                                    <label><text>*</text>Appointment Status : </label>
                                    <select name="status" id="ui-id-3" class="select-list" style="display: none;">
                                        <option value="0">Disabled</option>
                                        <option value="1">Enabled</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="content-block content-block-horizantal">
                        <div class="content-block-ttl">Other Info</div>
                        <div class="content-block-main">
                            <div class="content-input">
                                <label>Position : </label>
                                <input type="text" name="position" value="" placeholder="position">
                            </div>
                            <div class="content-input">
                                <label><text>*</text>Degree : </label>
                                <input type="text" class="input-text" name="degree" value="" placeholder="Degree" required="">
                                <p class="content-input-error-name">Please enter doctor degree!</p>
                            </div>
                            <div class="content-input">
                                <label>Speciality : </label>
                                <input type="text" name="speciality" value="" placeholder="Speciality">
                            </div>
                            <div class="content-input">
                                <label><text>*</text>Experience : </label>
                                <input type="number" class="input-number" name="experience" value="" placeholder="Experience" required="">
                                <p class="content-input-error-name">Please enter doctor experience!</p>
                            </div>
                            <div class="content-input">
                                <label>Awards : </label>
                                <input type="text" name="awards" value="" placeholder="Awards">
                            </div>
                            <div class="content-input">
                                <label><text>*</text>Username : </label>
                                <input type="text" name="username" value="" placeholder="Awards">
                            </div>
                            <div class="content-input">
                                <label><text>*</text>Password : </label>
                                <input type="text" name="password" value="" placeholder="Awards">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<!--            <div class="content-block">-->
<!--                <div class="content-block-ttl">Social Link</div>-->
<!--                <div class="content-block-main">-->
<!--                    <div class="content-input content-link">-->
<!--                        <label>Facebook <i class="fa fa-facebook"></i> : </label>-->
<!--                        <input type="url" name="facebook" value="" placeholder="Facebook URL">-->
<!--                    </div>-->
<!--                    <div class="content-input content-link">-->
<!--                        <label>Twitter <i class="fa fa-twitter"></i> : </label>-->
<!--                        <input type="url" name="twitter" value="" placeholder="Twitter URL">-->
<!--                    </div>-->
<!--                    <div class="content-input content-link">-->
<!--                        <label>Google + <i class="fa fa-google"></i> : </label>-->
<!--                        <input type="url" name="google" value="" placeholder="Google plus URL">-->
<!--                    </div>-->
<!--                    <div class="content-input content-link">-->
<!--                        <label>Instagram <i class="fa fa-instagram"></i> : </label>-->
<!--                        <input type="url" name="instagram" value="" placeholder="Instagram URL">-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
            <div class="content-block">
                <div class="content-block-ttl">Appointment Info</div>
                <div class="content-block-main">
                    <div class="row bottom-border-1x content-block-horizantal">
                        <div class="col-sm-6">
                            <div class="content-input">
                                <label>Start Time - before Lunch ( hh:mm ):</label>
                                <input type="time" name="st" value="" placeholder="Start Time">
                                <p class="content-input-error-name">Please select time!</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="content-input">
                                <label>End Time - before Lunch ( hh:mm ):</label>
                                <input type="time" name="et" value="" placeholder="End Time">
                                <p class="content-input-error-name">Please select time</p>
                            </div>
                        </div>
                    </div>

                    <div class="content-input">
                        <label>Time Slot :<br>( in Minutes)</label>
                        <input type="number" name="slot" value="" placeholder="Slot">
                        <p class="content-input-error-name">Please enter time slot!</p>
                    </div>
                    <div class="content-input weekly-container">
                        <label>Weekly Holiday : </label>
                        <select name="week_end" id="doctor-list" multiple="multiple">
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday"></option>
                            <option value="Friday">Friday</option>
                            <option value="Saturday">Saturday</option>
                            <option value="Sunday">Sunday</option>
                        </select>
                        <p class="content-description">Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple items.</p>
                    </div>

                </div>
            </div>
            <input type="hidden" name="id" value="">
            <div class="content-submit text-center">
                <button type="submit" name="doctor_submit" class="btn btn-primary">Save</button>
            </div>

        </div>
    </form>

    <!-- Footer -->
<?php include ('include/footer.php');?>