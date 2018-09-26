
<?php include('include/db.php');?>
<?php include('include/header.php');?>
<?php
require ('class/departments.php');
require ('class/doctors.php');
$page_name = "<i class=\"fa fa-building-o\"> </i> Departments ";
?>
<?php include('include/nav.php');?>

<div class="layer-stretch animated-wrapper">
    <div class="layer-wrapper layer-bottom-0">
        <div class="row text-center">
            <div class="col-md-8">
                <div class="row">
                    <?php
                    $dpt = new departments();
                    $result = $dpt->all();
                    $departments = $result->fetchAll();

                    if ($result->rowCount()>0) {
                        foreach ($departments as $department) {

                            ?>

                            <div class="col-sm-6">
                                <div class="theme-block animated animated-up">
                                    <div class="theme-block-picture">
                                        <img src="public/uploads/<?php echo $department->photo;?>" alt="Cardiovascular centre">
                                    </div>
                                    <div class="theme-block-data service-block-data">
                                        <div class="service-icon">
                                            <i class="fa fa-stethoscope"></i>
                                        </div>
                                        <h4><a><?php echo $department->name;?></a></h4>
                                    </div>
                                    <div class="theme-block-hidden service-hidden-block">
                                        <i class="fa fa-stethoscope"></i>
                                        <h4>
                                            <a href=""><?php echo $department->name;?></a>
                                        </h4>
                                        <p class="service-description paragraph-small paragraph-black">
                                            <span>
                                                <?php echo $department->details;?>
                                            </span>
                                            <!--                                            <a href="">(Read More)</a>-->
                                        </p>
                                    </div>

                                </div>
                            </div>

                            <?php
                        }
                    }
                    ?>

                </div>
            </div>

            <div class="col-md-4">
                <div class="theme-material-card text-center">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input">
                        <input class="mdl-textfield__input" type="text" id="search-services">
                        <label class="mdl-textfield__label" for="search-services">Search department by Name</label>
                        <button class="fa fa-search search-button"></button>
                    </div>

                </div>
                <div class="theme-material-card">
                    <div class="sub-ttl">Doctors</div>
                    <div class="flexslider theme-flexslider">
                        <ul class="slides">
                            <?php
                            $doct = new doctors();
                            $result = $doct->all();
                            $doctors = $result->fetchAll();
                            if ($result->rowCount()>0 ) {
                                foreach ($doctors as $doctor) {
                                    ?>


                                    <li>
                                        <div class="theme-flexslider-container">
                                            <img src="public/uploads/<?php echo $doctor->photo;?>"/>
                                            <h4><?php echo $doctor->first_name." ".$doctor->last_name ?></h4>
                                            <p><?php
                                                $id = $doctor->department_id;
                                                $doct->doctor_dpt($id);
                                                ?>
                                            </p>
                                        </div>
                                    </li>
                                    <?php
                                }
                            }
                            ?>
                            <li>
                                <div class="theme-flexslider-container">
                                    <img src="public/uploads/doctor-2.jpg" />
                                    <h4>Melissa Bates</h4>
                                    <p>Gynocologist</p>
                                </div>
                            </li>

                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div><!-- End Service List Section -->


<!-- Start Make an Appointment Modal -->
<?php include('include/make_appointment.php');?>
<!-- End Make an Appointment Section -->
<?php include('include/footer.php');?>
<script>

    $('#department>a').addClass('active');
</script>


        <!---->
        <!--<div class="colored-background">-->
        <!--    <div class="layer-stretch">-->
        <!--        <div class="layer-wrapper layer-bottom-0 animated-wrapper">-->
        <!--            <div class="layer-ttl layer-ttl-white">-->
        <!--                <h3 class="animated animated-down">Our Department </h3>-->
        <!--            </div>-->
        <!--            <div class="layer-container">-->
        <!--                --><?php
        //                $dpt = new departments();
        //                $result = $dpt->all();
        //                $departments = $result->fetchAll();
        //
        //                if ($result->rowCount()>0){
        //                    foreach ($departments as $department) {
        //
        //                        ?>
        <!--                        <div class="department-block animated animated-up">-->
        <!--                            <div class="tbl-cell department-icon"><i class="fa fa-female"></i></div>-->
        <!--                            <div class="tbl-cell department-detail">-->
        <!--                                <a>--><?php //echo $department->name;?><!--</a>-->
        <!--                                <p class="paragraph-small paragraph-white">-->
        <!--                                    --><?php //echo $department->details;?>
        <!--                                </p>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!---->
        <!--                        --><?php
        //                    }
        //                }
        //                ?>
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div><!-- End Department List Section -->-->
