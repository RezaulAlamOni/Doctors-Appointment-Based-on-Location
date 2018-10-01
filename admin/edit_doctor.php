
<?php include('include/db.php'); ?>
<?php include('include/header.php'); ?>
<?php include('include/navbar.php'); ?>

<?php
require ('class/doctors.php');
require ('class/departments.php');
//    require ('class/hospitals.php'); its declared in to doctors class

?>
<div class="page-container"><script>
            $('#themeoption-li>a').addClass('active');</script>


        <form action="edit_doctor.php" method="post" enctype="multipart/form-data" siq_id="autopick_3118">
            <div class="page-hdr scroll-to-fixed-fixed" style="z-index: 9; position: fixed; top: 0px; margin-left: 0px; width: 920px; left: 60px;">
                <div class="row">
                    <div class="col-6 page-name">
                        <h1><i class="fa fa-user-md"></i>Edit Doctor</h1>
                    </div>
                    <div class="col-4 page-menu" style="padding-right: 50px">
                        <a id="cancel" href="doctors.php" data-toggle="tooltip" data-placement="left" title="" data-original-title="Back to List"><i class="fa fa-reply"></i></a>
                        <button type="submit" name="doctor_update" data-toggle="tooltip" data-placement="left" title="" data-original-title="Update Doctor"><i class="fa fa-floppy-o"></i></button>
                    </div>
                </div>
            </div><div style="display: block; width: 920px; height: 70px; float: none;"></div>
            <div class="content">
                <?php
                $doct = new doctors();
                $doct->update();
                if (isset($_GET['id'])) $id = $_GET['id'];
                if (isset($_POST['id'])) $id = $_POST['id'];
                $rslt = $doct->find($id);
                $doctors = $rslt->fetchAll();

                foreach ( $doctors as $doctor) {

                ?>
                <div class="row">
                    <div class="col-md-8">
                        <div class="content-block content-block-horizantal">
                            <div class="content-block-ttl">Basic Info</div>
                            <div class="content-block-main">
                                <input type="hidden" name="_token" value="413cf0188">
                                <div class="content-input row">
                                    <div class="col-6">
                                        <label>
                                            <text>*</text>
                                            First Name : </label>
                                        <input type="text" class="input-text" name="firstname" value="<?php echo $doctor->first_name;?>"
                                               placeholder="First Name" required>
                                        <p class="content-input-error-name">Please enter doctor first name!</p>
                                    </div>
                                    <div class="col-6">
                                        <label>
                                            <text>*</text>
                                            Last Name : </label>
                                        <input type="text" class="input-text" name="lastname" value="<?php echo $doctor->last_name;?>"
                                               placeholder="Last Name" required>
                                        <p class="content-input-error-name">Please enter doctor last name!</p>
                                    </div>

                                </div>
                                <div class="content-input">
                                    <img src="../public/uploads/<?php echo $doctor->photo;?>" alt="Photo not Found!!" style="height: 60px">
                                    <label><text>*</text>Picture : </label>
                                    <input type="file" name="doctor_picture" value="">
                                    <div class="content-description">(Size: 530px * 470px)</div>
                                </div>
                                <div class="content-input">
                                    <label>
                                        <text>*</text>
                                        Email : </label>
                                    <input type="email" class="input-email" name="email" value="<?php echo $doctor->email;?>" placeholder="email"
                                           disabled>
                                    <p class="content-input-error-name">Please enter doctor email!</p>
                                </div>
                                <div class="content-input">
                                    <label>
                                        <text>*</text>
                                        Mobile : </label>
                                    <input type="number" class="input-mobile" name="mobile" value="<?php echo $doctor->phone;?>"
                                           placeholder="mobile" required="">
                                    <p class="content-input-error-name">Please enter doctor phone number!</p>
                                </div>
                                <div class="row content-radio col-12">
                                    <div class="content-radio-container col-sm-6">
                                        <div class="">
                                            <label> Gender : </label>
                                        </div>
                                        <div>
                                            <input type="radio" name="gender" value="Male" id="gender-male"
                                                <?php if ($doctor->gender=='Male') echo 'checked';?>>
                                            <label for="gender-male"><span><i class="fa fa-check"></i></span>
                                                <p>Male</p></label>
                                        </div>
                                        <div>
                                            <input type="radio" name="gender" value="Female" id="gender-female"
                                                <?php if ($doctor->gender=='Female') echo 'checked';?>>
                                            <label for="gender-female"><span><i class="fa fa-check"></i></span>
                                                <p>Female</p></label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="content-input">
                                            <label>
                                                <text>*</text>
                                                Doctors Age : </label>
                                            <input type="number" name="age" placeholder="Enter Doctor Age ." value="<?php echo $doctor->age;?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="content-input">
                                            <label><text>*</text>Department : </label>
                                            <select name="department" class="select-list" required=""
                                                    title="Please Choose Department" id="ui-id-1"
                                                    style="display: none;">

                                                <?php

                                                $dpt = new departments();
                                                $result = $dpt->all();
                                                $departments = $result->fetchAll(); // default value PDO::FETCH_obj

                                                foreach ($departments as $department) {
                                                    ?>
                                                    <option class="text-capitalize text-info" value="<?php echo $department->id; ?>"
                                                        <?php if ($doctor->department_id == $department->id) echo 'selected';?>>
                                                        <?php echo $department->name; ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="content-input">
                                            <label>
                                                <text>*</text>
                                                Mail Chamber : </label>
                                            <select name="chamber" id="ui-id-2" class="select-list" required=""
                                                    style="display: none;">
                                                <option class="text-capitalize text-info ">Select Your main Chamber :
                                                </option>
                                                <?php

                                                $hsptl = new hospitals();
                                                $result = $hsptl->all();

                                                $hospitals = $result->fetchAll(); // default value PDO::FETCH_obj

                                                foreach ($hospitals as $hospital) {
                                                    ?>
                                                    <option class="text-capitalize text-info" value="<?php echo $hospital->id; ?>"
                                                        <?php if ($doctor->hospital_id==$hospital->id) echo 'selected';?>>
                                                        <?php echo $hospital->name; ?>
                                                    </option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="content-input col-12">
                                        <label>
                                            <text>*</text>
                                            Appointment Status : </label>
                                        <select name="status" id="ui-id-3" class="select-list" style="display: none;">
                                            <option value="0" <?php if ($doctor->status==0) echo 'selected';?> >Disabled</option>
                                            <option value="1" <?php if ($doctor->status==1) echo 'selected';?>>Enabled</option>
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
                                    <input type="text" name="position" value="<?php echo $doctor->position;?>" placeholder="position">
                                </div>
                                <div class="content-input">
                                    <label> User Role : </label>
                                    <select name="role" title="Select User Role" class="select-list" required=""
                                            id="ui-id-1" style="display: none;">
                                        <?php
                                        $sql = "SELECT * FROM roles ";
                                        $result = $pdo->prepare($sql);
                                        $result->execute();
                                        $roles = $result->fetchAll(); // default value PDO::FETCH_obj

                                        foreach ($roles as $role) { ?>
                                            <option value="<?php echo $role->role_id; ?>"
                                                <?php if ($role->role_id == $doctor->role_id) echo "selected"?> >
                                                <p class="text-capitalize"><?php echo $role->role_name; ?></p>
                                            </option>
                                            <?php }   ?>
                                    </select>
                                     </div>

                                <div class="content-input">
                                    <label>
                                        <text>*</text>
                                        Degree : </label>
                                    <input type="text" class="input-text" name="degree" value="<?php echo $doctor->degree;?>" placeholder="Degree"
                                           required="">
                                    <p class="content-input-error-name">Please enter doctor degree!</p>
                                </div>
                                <div class="content-input">
                                    <label>Speciality : </label>
                                    <input type="text" name="speciality" value="<?php echo $doctor->specialty;?>" placeholder="Speciality">
                                </div>
                                <div class="content-input">
                                    <label>
                                        <text>*</text>
                                        Experience : </label>
                                    <input type="number" class="input-number" name="experience" value="<?php echo $doctor->experience; ?>"
                                           placeholder="Experience" required="">
                                    <p class="content-input-error-name">Please enter doctor experience!</p>
                                </div>
                                <div class="content-input">
                                    <label>Awards : </label>
                                    <input type="text" name="awards" value="<?php echo $doctor->awards;?>" placeholder="Awards">
                                </div>
                                <div class="content-input">
                                    <label>
                                        <text>*</text>
                                        Username : </label>
                                    <input type="text" name="username" value="<?php echo $doctor->username;?>">
                                </div>
                                <div class="content-input">
                                    <label>
                                        <text>*</text>
                                        Password : </label>
                                    <input type="text" name="password" value="" placeholder="Awards">
                                </div>
                                <p style="font-size: 12px">Password Will be mailed to doctor fro farther use !!!!</p>
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
                                    <label>Start Time ( hh:mm ):</label>
                                    <input type="time" name="st" value="<?php echo $doctor->start_appointment;?>" placeholder="Start Time">
                                    <p class="content-input-error-name">Please select time!</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="content-input">
                                    <label>End Time ( hh:mm ):</label>
                                    <input type="time" name="et" value="<?php echo $doctor->end_appointment;?>" placeholder="End Time">
                                    <p class="content-input-error-name">Please select time</p>
                                </div>
                            </div>
                        </div>

                        <div class="content-input">
                            <label>Time Slot :<br>( in Minutes)</label>
                            <input type="number" name="slot" value="<?php echo $doctor->time_slot;?>" placeholder="Slot">
                            <p class="content-input-error-name">Please enter time slot!</p>
                        </div>
                        <div class="content-input weekly-container">
                            <label>Weekly Holiday : </label>
                            <select name="week_end" id="doctor-list" multiple="multiple">
                                <option value="Monday" <?php if ($doctor->week_end=='Monday') echo 'selected';?>>Monday</option>
                                <option value="Tuesday" <?php if ($doctor->week_end=='Tuesday') echo 'selected';?>>Tuesday</option>
                                <option value="Wednesday" <?php if ($doctor->week_end=='Wednesday') echo 'selected';?>>Wednesday</option>
                                <option value="Thursday" <?php if ($doctor->week_end=='Thursday') echo 'selected';?>></option>
                                <option value="Friday" <?php if ($doctor->week_end=='Friday') echo 'selected';?>>Friday</option>
                                <option value="Saturday" <?php if ($doctor->week_end=='Saturday') echo 'selected';?>>Saturday</option>
                                <option value="Sunday" <?php if ($doctor->week_end=='Sunday') echo 'selected';?>>Sunday</option>
                            </select>
                            <p class="content-description">Please use the CTRL key (PC) or COMMAND key (Mac) to select
                                multiple items.</p>
                        </div>

                    </div>
                </div>
                <input type="hidden" name="id" value="<?php echo $doctor->id;?>">
                <div class="content-submit text-center">
                    <button type="submit" name="doctor_update" class="btn btn-primary">Update</button>
                </div>

            </div>
            <?php
            }
            ?>
        </form>

        <!-- Footer -->
    <?php include('include/footer.php'); ?>
