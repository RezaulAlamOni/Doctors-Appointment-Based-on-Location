
<?php include('include/db.php');?>
<?php include('include/header.php');?>
<?php
require ('class/hospitals.php');
$hospitals = new  hospitals();


$page_name = "<i class=\"fa fa-hospital-o\"> </i> Hospitals ";
?>
<?php include('include/nav.php');?>

<?php
//$pdo = new PDO("mysql:host=localhost;dbname=doctors",'root','');
//$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

?>
<!-- Start Doctor List Section -->

<!-- Start Department div -->
<!--<div class="colored-background">-->
<!--    <div class="layer-stretch">-->
<!--        <div class="layer-wrapper layer-bottom-0 animated-wrapper">-->
<!--            <div class="layer-ttl layer-ttl-white">-->
<!--                <h3 class="animated animated-down">Hospitals </h3>-->
<!--            </div>-->
<!--            <div class="layer-container">-->
<!--                <h1 class="text-center">Coming Soon</h1>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div><!-- End Department List Section -->
<div class="layer-stretch animated-wrapper" style="opacity: 1;background-color: #d8ed84">
    <div class="layer-wrapper layer-bottom-0">
        <div class="row text-center">
            <div class="col-md-8">
                <div class="row text-success">

                    <?php
                    $result = $hospitals->all();
                    $hospitals = $result->fetchAll();
                    if ($result->rowCount()>0 ){
                        foreach ($hospitals as $hospital) {
                            ?>
                            <p >
                                <?php echo $hospital->id;?>
                                <?php echo $hospital->name;?>
                                <?php echo $hospital->address;?>
                            </p>

                            <?php
                        }
                    }
                    ?>

                </div>
            </div>
            <div class="col-md-4">
                <div class="theme-material-card text-center">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input ">
                        <input class="mdl-textfield__input" type="text" id="search-doctors">
                        <label class="mdl-textfield__label" for="search-doctors" style="font-size: 12px">Name,Department,Hospital,Location </label>
                        <button type="submit" class="fa fa-search search-button" name="search"></button>
                    </div>
                </div>

                <div class="theme-material-card"><p></p></div>
            </div>
        </div>
    </div>
</div>


<!-- Start Make an Appointment Modal -->
<?php include('include/make_appointment.php');?>
<!-- End Make an Appointment Section -->
<?php include('include/footer.php');?>
<script>

    $('#hospital>a').addClass('active');
</script>
