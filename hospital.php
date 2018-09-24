
<?php include('include/db.php');?>
<?php include('include/header.php');?>
<?php
$page_name = "<i class=\"fa fa-hospital-o\"> </i> hospitals ";
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
                <h3 class="animated animated-down">Hospitals </h3>
            </div>
            <div class="layer-container">
                <h1 class="text-center">Coming Soon</h1>
            </div>
        </div>
    </div>
</div><!-- End Department List Section -->

<!-- Start Make an Appointment Modal -->
<?php include('include/make_appointment.php');?>
<!-- End Make an Appointment Section -->
<?php include('include/footer.php');?>
<script>

    $('#hospital>a').addClass('active');
</script>
