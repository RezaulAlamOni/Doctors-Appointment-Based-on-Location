
<?php include('include/db.php'); ?>
<?php include('include/header.php'); ?>
<?php include('include/navbar.php'); ?>


<div class="page-container"><script>


            $('#themeoption-li>a').addClass('active');</script>


        <form action="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=themeoption/doctor/action" method="post" enctype="multipart/form-data" siq_id="autopick_3118">
            <div class="page-hdr scroll-to-fixed-fixed" style="z-index: 9; position: fixed; top: 0px; margin-left: 0px; width: 920px; left: 60px;">
                <div class="row">
                    <div class="col-8 page-name">
                        <h1><i class="fa fa-user-md"></i>Edit Doctor</h1>
                    </div>
                    <div class="col-4 page-menu">
                        <a id="cancel" href="index.php?route=themeoption/doctor" data-toggle="tooltip" data-placement="left" title="" data-original-title="Back to List"><i class="fa fa-reply"></i></a>
                        <button type="submit" name="submit" data-toggle="tooltip" data-placement="left" title="" data-original-title="Save Doctor"><i class="fa fa-floppy-o"></i></button>
                    </div>
                </div>
            </div><div style="display: block; width: 920px; height: 70px; float: none;"></div>
            <div class="content">
                <div class="row">
                    <div class="col-md-8">
                        <div class="content-block content-block-horizantal">
                            <div class="content-block-ttl">Basic Info</div>
                            <div class="content-block-main">
                                <input type="hidden" name="_token" value="413ccea5ca6b8ce59e0da0d74a15110a305317f742542dcc5f09cc85ddf4f25288776a66377494dbf3154612b21c29b49cdcd6ee235b8ea2b77355d52eef0188">
                                <div class="content-input">
                                    <label><text>*</text>Name : </label>
                                    <input type="text" class="input-text" name="name" value="Theodore Bennett" placeholder="Name" required="">
                                    <p class="content-input-error-name">Please enter doctor name!</p>
                                </div>
                                <div class="content-input">
                                    <label><text>*</text>Picture : </label>
                                    <div class="image-upload" style="display: none">
                                        <a>Upload</a>
                                    </div>
                                    <div class="saved-picture">
                                        <img class="img-thumbnail" src="../public/uploads/doctor-6.jpg" alt="">
                                        <input type="hidden" name="doctor-picture" value="doctor-6.jpg">
                                    </div>
                                    <div class="saved-picture-delete" data-toggle="tooltip" data-placement="right" title="" data-original-title="Remove">
                                        <a class="fa fa-times"></a>
                                    </div>
                                    <div class="content-description">(Size: 530px * 470px)</div>
                                </div>
                                <div class="content-input">
                                    <label><text>*</text>Email : </label>
                                    <input type="email" class="input-email" name="email" value="pepdevofficial@gmail.com" placeholder="email" required="">
                                    <p class="content-input-error-name">Please enter doctor email!</p>
                                </div>
                                <div class="content-input">
                                    <label><text>*</text>Mobile : </label>
                                    <input type="number" class="input-mobile" name="mobile" value="8975383539" placeholder="mobile" required="">
                                    <p class="content-input-error-name">Please enter doctor phone number!</p>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="content-input">
                                            <label><text>*</text>Department : </label>
                                            <select name="department" class="select-list" required="" title="Please Choose Department" id="ui-id-1" style="display: none;">
                                                <option value="" disabled="" selected="">Department</option>
                                                <option value="1"> Gynaecology										</option>
                                                <option value="2"> Orthology										</option>
                                                <option value="3"> Dermatologist										</option>
                                                <option value="4" selected=""> Anaesthesia										</option>
                                                <option value="5"> Ayurvedic										</option>
                                                <option value="6"> Pathology										</option>
                                            </select><span tabindex="0" id="ui-id-1-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-1-menu" aria-haspopup="true" title="Please Choose Department" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text"> Anaesthesia										</span></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="content-input">
                                            <label><text>*</text>Status : </label>
                                            <select name="status" id="ui-id-2" class="select-list" required="" style="display: none;">
                                                <option value="0">Disabled</option>
                                                <option value="1" selected="">Enabled</option>
                                            </select><span tabindex="0" id="ui-id-2-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-2-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Enabled</span></span>
                                        </div>
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
                                    <label><text>*</text>Priority : </label>
                                    <input type="number" class="input-number" value="5" name="priority" placeholder="Enter Priority">
                                </div>
                                <div class="content-input">
                                    <label>Position : </label>
                                    <input type="text" name="position" value="Senior Resident" placeholder="position">
                                </div>
                                <div class="content-input">
                                    <label><text>*</text>Degree : </label>
                                    <input type="text" class="input-text" name="degree" value="MBBS, MD" placeholder="Degree" required="">
                                    <p class="content-input-error-name">Please enter doctor degree!</p>
                                </div>
                                <div class="content-input">
                                    <label>Specility : </label>
                                    <input type="text" name="specility" value="Anesthesiologist" placeholder="Specility">
                                </div>
                                <div class="content-input">
                                    <label><text>*</text>Experience : </label>
                                    <input type="number" class="input-number" name="experience" value="9" placeholder="Experience" required="">
                                    <p class="content-input-error-name">Please enter doctor experience!</p>
                                </div>
                                <div class="content-input">
                                    <label>Awards : </label>
                                    <input type="text" name="awards" value="12" placeholder="Awards">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content-block">
                    <div class="content-block-ttl">Social Link</div>
                    <div class="content-block-main">
                        <div class="content-input content-link">
                            <label>Facebook <i class="fa fa-facebook"></i> : </label>
                            <input type="url" name="facebook" value="https://www.facebook.com" placeholder="Facebook URL">
                        </div>
                        <div class="content-input content-link">
                            <label>Twitter <i class="fa fa-twitter"></i> : </label>
                            <input type="url" name="twitter" value="https://www.twitter.com" placeholder="Twitter URL">
                        </div>
                        <div class="content-input content-link">
                            <label>Google + <i class="fa fa-google"></i> : </label>
                            <input type="url" name="google" value="https://www.google.com" placeholder="Google plus URL">
                        </div>
                        <div class="content-input content-link">
                            <label>Instagram <i class="fa fa-instagram"></i> : </label>
                            <input type="url" name="instagram" value="" placeholder="Instagram URL">
                        </div>
                    </div>
                </div>
                <div class="content-block">
                    <div class="content-block-ttl">Appointment Info</div>
                    <div class="content-block-main">
                        <div class="row bottom-border-1x content-block-horizantal">
                            <div class="col-sm-6">
                                <div class="content-input">
                                    <label>Start Time - before Lunch ( hh:mm ):</label>
                                    <input type="time" name="st1" value="11:00" placeholder="Start Time">
                                    <p class="content-input-error-name">Please select time!</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="content-input">
                                    <label>End Time - before Lunch ( hh:mm ):</label>
                                    <input type="time" name="et1" value="18:00" placeholder="End Time">
                                    <p class="content-input-error-name">Please select time</p>
                                </div>
                            </div>
                        </div>
                        <div class="row bottom-border-1x content-block-horizantal">
                            <div class="col-sm-6">
                                <div class="content-input">
                                    <label>Start Time - After Lunch ( hh:mm ):</label>
                                    <input type="time" name="st2" value="" placeholder="Start Time">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="content-input">
                                    <label>End Time - After Lunch ( hh:mm ):</label>
                                    <input type="time" name="et2" value="" placeholder="End Time">
                                </div>
                            </div>
                        </div>
                        <div class="content-input">
                            <label>Time Slot :<br>( in Minutes)</label>
                            <input type="number" name="slot" value="20" placeholder="Slot">
                            <p class="content-input-error-name">Please enter time slot!</p>
                        </div>
                        <div class="content-input weekly-container">
                            <label>Weekly Holiday : </label>
                            <select name="weeklyList[]" id="doctor-list" multiple="multiple">
                                <option value="1">Monday</option>
                                <option value="2">Tuesday</option>
                                <option value="3">Wednesday</option>
                                <option value="4">Thursday</option>
                                <option value="5">Friday</option>
                                <option value="6">Saturday</option>
                                <option value="0" selected="">Sunday</option>
                            </select>
                            <input type="hidden" id="weekly-holiday" value="0">
                            <p class="content-description">Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple items.</p>
                        </div>
                        <div class="content-input">
                            <label><text>*</text>Appointment Status : </label>
                            <select name="appointment" id="ui-id-3" class="select-list" style="display: none;">
                                <option value="0">Disabled</option>
                                <option value="1" selected="">Enabled</option>
                            </select><span tabindex="0" id="ui-id-3-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-3-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Enabled</span></span>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="id" value="6">
                <div class="content-submit text-center">
                    <button type="submit" name="submit" class="btn btn-primary">Save</button>
                </div>

            </div>
        </form>

        <!-- Footer -->
    <?php include('include/footer.php'); ?>
