
<?php include('include/header.php'); ?>
<?php include('include/navbar.php'); ?>
<?php require ('class/hospitals.php')?>
<?php require ('class/location.php')?>

<div class="page-container">
    <script>
        $('#hospital').show();
        $('#hospital-li>a').addClass('active');
    </script>

        <form action="add_hospital.php" method="post" enctype="multipart/form-data" siq_id="autopick_4656">
            <div class="page-hdr scroll-to-fixed-fixed" style="z-index: 9; position: fixed; top: 0px; margin-left: 0px; width: 920px; left: 60px;">
                <div class="row">
                    <div class="col-6 page-name">
                        <h1><i class="fa fa-hospital-o"></i>Add Hospital</h1>
                    </div>
                    <div class="col-4 page-menu" style="padding-right: 50px">
                        <a id="cancel" href="hospital.php" data-toggle="tooltip" data-placement="left" title="" data-original-title="Back to List"><i class="fa fa-reply"></i></a>
                        <button type="submit" name="add_hospital" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add Hospital"><i class="fa fa-floppy-o"></i></button>
                    </div>
                </div>
            </div><div style="display: block; width: 920px; height: 70px; float: none;"></div>
            <div class="content">
                <div class="content-block">
                    <?php
                        $dpt = new hospitals();
                        $dpt->add();
                    ?>
                    <div class="content-block-ttl">Hospital Details</div>
                    <div class="content-block-main">
                        <input type="hidden" name="_token" value="413cce0188">
                        <div class="content-input">
                            <label><text>*</text>Name : </label>
                            <input type="text" class="input-text" value="" name="name" placeholder="Enter Hospital Name" required="">
                            <p class="content-input-error-name">Please enter department name!</p>
                        </div>
                        <div class="content-input">
                            <label><text>*</text>Address : </label>
                            <input type="text" class="input-text" value="" name="address" placeholder="Enter Address" required="">
                            <p class="content-input-error-name">Please enter hospital address!</p>
                        </div>
                        <div class="content-input">
                            <label>Key Location : </label>
                            <select name="location" id="ui-id-2" class="select-list" required="" style="display: none;">
                                <option class="text-capitalize text-info " >Select Your key Location ...........</option>
                                <?php

                                $l = new location();
                                $result = $l->all();

                                $locations = $result->fetchAll(); // default value PDO::FETCH_obj

                                foreach ($locations as $location) {
                                    ?>
                                    <option class="text-capitalize text-info" value="<?php echo $location->location_id; ?>"><?php echo $location->name; ?></option>
                                    <?php
                                }
                                ?>
                            </select>

                        </div>
                        <div class="content-input">
                            <label><text>*</text>Hospital Photo :</label>
                            <input type="file" name="photo" class="btn btn-info">

                        </div>

                    </div>
                </div>
                <input type="hidden" name="id" value="">
                <div class="content-submit text-center">
                    <button type="submit" name="add_hospital" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>
        <!-- Footer -->

<?php include ('include/footer.php');