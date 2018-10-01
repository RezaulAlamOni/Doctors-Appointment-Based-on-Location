
<?php include('include/header.php'); ?>
<?php include('include/navbar.php'); ?>
<?php require ('class/location.php')?>

<div class="page-container">
    <script>
        $('#area').show();
        $('#area-li>a').addClass('active');
    </script>

        <form action="add_location.php" method="post" enctype="multipart/form-data" siq_id="autopick_4656">
            <div class="page-hdr scroll-to-fixed-fixed" style="z-index: 9; position: fixed; top: 0px; margin-left: 0px; width: 920px; left: 60px;">
                <div class="row">
                    <div class="col-6 page-name">
                        <h1><i class="fa fa-hospital-o"></i>Add Location</h1>
                    </div>
                    <div class="col-4 page-menu" style="padding-right: 50px">
                        <a id="cancel" href="locations.php" data-toggle="tooltip" data-placement="left" title="" data-original-title="Back to List"><i class="fa fa-reply"></i></a>
                        <button type="submit" name="add_location" data-toggle="tooltip" data-placement="left" title="" data-original-title="Save Department"><i class="fa fa-floppy-o"></i></button>
                    </div>
                </div>
            </div><div style="display: block; width: 920px; height: 70px; float: none;"></div>
            <div class="content">
                <div class="content-block">
                    <?php
                        $loc = new location();
                        $loc->add();
                    ?>
                    <div class="content-block-ttl">Location Details</div>
                    <div class="content-block-main">
                        <input type="hidden" name="_token" value="413eef0188">
                        <div class="content-input">
                            <label><text>*</text>Enter Location Name : </label>
                            <input type="text" class="input-text" value="" name="name" placeholder="Enter location Name like Dhanmondi,Dhaka (Thana,District)" required="">
                            <p class="content-input-error-name">Please enter department name!</p>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="id" value="">
                <div class="content-submit text-center">
                    <button type="submit" name="add_location" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>
        <!-- Footer -->

<?php include ('include/footer.php');