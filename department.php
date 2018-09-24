
<?php include('include/db.php');?>
<?php include('include/header.php');?>
<?php
require ('class/departments.php');
$page_name = "<i class=\"fa fa-building-o\"> </i> Departments ";
?>
<?php include('include/nav.php');?>

<?php
//$pdo = new PDO("mysql:host=localhost;dbname=doctors",'root','');
//$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

?>
<!-- Start Doctor List Section -->

<!-- Start Department div -->
<div class="colored-background">
    <div class="layer-stretch">
        <div class="layer-wrapper layer-bottom-0 animated-wrapper">
            <div class="layer-ttl layer-ttl-white">
                <h3 class="animated animated-down">Our Department </h3>
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

    $('#department>a').addClass('active');
</script>
