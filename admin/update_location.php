
<?php include('include/header.php'); ?>
<?php include('include/navbar.php'); ?>
<?php require ('class/departments.php')?>

<div class="page-container">
    <script>
        $('#area').show();
        $('#area-li>a').addClass('active');
    </script>

    <form action="" method="post" enctype="multipart/form-data" siq_id="autopick_4656">
        <div class="page-hdr scroll-to-fixed-fixed" style="z-index: 9; position: fixed; top: 0px; margin-left: 0px; width: 920px; left: 60px;">
            <div class="row">
                <div class="col-6 page-name">
                    <h1><i class="fa fa-hospital-o"></i>Update Locations</h1>
                </div>
                <div class="col-4 page-menu" style="padding-right: 50px">
                    <a id="cancel" href="department.php" data-toggle="tooltip" data-placement="left" title="" data-original-title="Back to List"><i class="fa fa-reply"></i></a>
                    <button type="submit" name="update_department" data-toggle="tooltip" data-placement="left" title="" data-original-title="Update Department"><i class="fa fa-floppy-o"></i></button>
                </div>
            </div>
        </div><div style="display: block; width: 920px; height: 70px; float: none;"></div>
        <div class="content">
            <div class="content-block">
                <?php


                $dpt = new departments();
                $dpt->update();
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                }
                $result = $dpt->find($id);
                $departments = $result->fetchAll();
                foreach ($departments

                as $department){
                ?>
                <div class="content-block-ttl">Department Details</div>
                <div class="content-block-main">
                    <input type="hidden" name="_token"
                           value="413ef0188">
                    <div class="content-input">
                        <label>
                            <text>*</text>
                            Name : </label>
                        <input type="text" class="input-text" value="<?php echo $department->name; ?>" name="name"
                               placeholder="Enter Department Name"
                               required="">
                        <p class="content-input-error-name">Please enter department name!</p>
                    </div>
                    <div class="content-input">
                        <label>
                            <text>*</text>
                            Description : </label>
                        <textarea class="textarea-input" name="description" placeholder="Enter Breif Description"
                                  required=""><?php echo $department->details; ?></textarea>
                        <p class="content-input-error-name">Please enter department description!</p>
                    </div>
                    <div class="content-input row">
                        <div class="col-3"></div>
                        <div class="col-4">
                            <img src="../public/uploads/<?php echo $department->photo; ?>" alt="" style="height: 90px;">
                        </div>

                    </div>
                    <div class="content-input">
                        <label>
                            <text>*</text>
                            Department Photo :</label>
                        <input type="file" name="photo" class="btn btn-info">

                    </div>
                    <div class="content-input">
                        <label>Name Of Speciality : </label>
                        <input type="text" class="input-text" value="<?php echo $department->name_adj; ?>" name="adj"
                               placeholder="Enter Name Adjective"
                               required="">

                    </div>
                </div>
            </div>
            <input type="hidden" name="id" value="<?php echo $department->id; ?>">
            <div class="content-submit text-center">
                <button type="submit" name="update_department" class="btn btn-primary">Update</button>
            </div>
            <?php
                }

        ?>
        </div>
    </form>
    <!-- Footer -->

<?php include ('include/footer.php');