
<?php include('include/db.php');?>
<?php include('include/header.php');?>
<?php
require ('class/doctors.php');
require ('class/departments.php');
$doct = new doctors();

$page_name = "<i class=\"fa fa-user-md\"> </i> Doctors Details";
?>
<?php include('include/nav.php');?>

<?php
//$pdo = new PDO("mysql:host=localhost;dbname=doctors",'root','');
//$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

?>
<!-- Start Doctor List Section -->
<div class="layer-stretch animated-wrapper" style="opacity: 1;background-color: #d8ed84">
    <div class="layer-wrapper layer-bottom-0">
        <div class="row text-center">
            <div class="col-md-8">
                <div class="row">
                    <h1> Coming Soon !!!!!! </h1>

                </div>
            </div>
            <div class="col-md-4">
                <div class="theme-material-card text-center">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input ">
                        <input class="mdl-textfield__input" type="text" id="search-doctors">
                        <label class="mdl-textfield__label" for="search-doctors" style="font-size: 12px">Name, Department, Hospital, Location </label>
                        <button type="submit" class="fa fa-search search-button" name="search"></button>
                    </div>
                </div>

                <div class="theme-material-card">
                    <div class="sub-ttl">Our Services</div>
                    <div class="flexslider theme-flexslider">

                        <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 1600%; transition-duration: 0s; transform: translate3d(-391px, 0px, 0px);"><li class="clone" aria-hidden="true" style="width: 391px; margin-right: 0px; float: left; display: block;">
                                    <div class="theme-flexslider-container">
                                        <img src="public/uploads/service-6.jpg" draggable="false">
                                        <h4>Mammography</h4>
                                        <a href="  " class="anchor-icon pull-right">Read More <i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </li>
                                <li style="width: 391px; margin-right: 0px; float: left; display: block;" class="flex-active-slide" data-thumb-alt="">
                                    <div class="theme-flexslider-container">
                                        <img src="public/uploads/service-1.jpg" draggable="false">
                                        <h4>Cardiovascular centre</h4>
                                        <a href=" " class="anchor-icon pull-right">Read More <i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </li>
                                <li data-thumb-alt="" style="width: 391px; margin-right: 0px; float: left; display: block;">
                                    <div class="theme-flexslider-container">
                                        <img src="public/uploads/service-2.jpg" draggable="false">
                                        <h4>Childbirth Center</h4>
                                        <a href=" " class="anchor-icon pull-right">Read More <i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </li>
                                <li data-thumb-alt="" style="width: 391px; margin-right: 0px; float: left; display: block;">
                                    <div class="theme-flexslider-container">
                                        <img src="public/uploads/service-3.jpg" draggable="false">
                                        <h4>Cardiology</h4>
                                        <a href=" y" class="anchor-icon pull-right">Read More <i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </li>
                                <li data-thumb-alt="" style="width: 391px; margin-right: 0px; float: left; display: block;">
                                    <div class="theme-flexslider-container">
                                        <img src="public/uploads/service-4.jpg" draggable="false">
                                        <h4>Skin Care</h4>
                                        <a href=" e" class="anchor-icon pull-right">Read More <i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </li>
                                <li data-thumb-alt="" style="width: 391px; margin-right: 0px; float: left; display: block;">
                                    <div class="theme-flexslider-container">
                                        <img src="public/uploads/service-5.jpg" draggable="false">
                                        <h4>Laboratory Services</h4>
                                        <a href=" s" class="anchor-icon pull-right">Read More <i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </li>
                                <li data-thumb-alt="" style="width: 391px; margin-right: 0px; float: left; display: block;">
                                    <div class="theme-flexslider-container">
                                        <img src="public/uploads/service-6.jpg" draggable="false">
                                        <h4>Mammography</h4>
                                        <a href="h y" class="anchor-icon pull-right">Read More <i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </li>
                                <li style="width: 391px; margin-right: 0px; float: left; display: block;" class="clone" aria-hidden="true">
                                    <div class="theme-flexslider-container">
                                        <img src="public/uploads/service-1.jpg" draggable="false">
                                        <h4>Cardiovascular centre</h4>
                                        <a href="h e" class="anchor-icon pull-right">Read More <i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </li></ul></div><ol class="flex-control-nav flex-control-paging"><li><a href="#" class="flex-active">1</a></li><li><a href="#">2</a></li><li><a href="#">3</a></li><li><a href="#">4</a></li><li><a href="#">5</a></li><li><a href="#">6</a></li></ol><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev" href="#">Previous</a></li><li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li></ul></div>
                </div>
                <div class="theme-material-card"><p>Nice Job</p></div>
            </div>
        </div>
    </div>
</div>
<!-- End Doctor List Section -->

<!-- Start Department div -->
<div class="colored-background">
    <div class="layer-stretch">
        <div class="layer-wrapper layer-bottom-0 animated-wrapper">
            <div class="layer-ttl layer-ttl-white">
                <h3 class="animated animated-down">Department </h3>
            </div>
            <div class="layer-container">
                <?php
                $dpt = new departments();
                $result = $dpt->all();
                $departments = $result->fetchAll();

                if ($result->rowCount()>0){
                    foreach ($departments as $department) {

                        ?>
                        <div class="department-block animated animated-up">
                            <div class="tbl-cell department-icon"><i class="fa fa-female"></i></div>
                            <div class="tbl-cell department-detail">
                                <a><?php echo $department->name;?></a>
                                <p class="paragraph-small paragraph-white">
                                    <?php echo $department->details;?>
                                </p>
                            </div>
                        </div>

                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div><!-- End Department List Section -->

<!-- Start Make an Appointment Modal -->
<?php include('include/make_appointment.php');?>
<!-- End Make an Appointment Section -->
<?php include('include/footer.php');?>
<script>

    $('#doctor>a').addClass('active');
</script>
