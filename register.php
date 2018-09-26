<?php include('include/header.php');?>
<?php
    $page_name = "<i class='fa fa-registered'></i> Registration";
?>
<?php include('include/nav.php');?>


    <!-- Header End -->
    <!-- Start Page Title Section -->
<div class="page-ttl">
    <div class="layer-stretch">
        <div class="page-ttl-container">
            <div class="page-ttl-name">
                <h1><i class="fa fa-user-plus color-white"></i> Registration</h1>
                <h2 class="text-center" style="font-family: SansSerif;color: #ffdc00">Select Your Role !!</h2>
            </div><br>
            <div class="row">
                <div class="col-md-6 text-justify">

                    <button type="button" class="btn btn-primary btn-lg btn-block">
                        <a href="patient_register.php">
                            <h2><b>Patient Registration</b></h2>
                        </a>
                    </button>
                    <p class="text-danger" style="font-size: 14px"><br>
                        "If you are register as a patient you can be able to search  doctor, hospital and book appointment
                        of any doctor according to your location. As a patient you can update your present disease condition
                        in you profile for doctor's follow up. You can book doctor appointment any where in Bangladesh. You
                        can get help doctor at any time of emergency."
                    </p>
                </div>
                <div class="col-md-6 text-justify" >
                    <button type="button" class="btn btn-success btn-lg btn-block">
                        <a href="doctor_register.php">
                            <h2><b>Doctor Registration</b></h2>
                        </a></button>
                    <p class="text-danger" style="font-size: 14px"><br>
                        'If you are register as a doctor in this system you can get more patient by the system.
                        "Appointment System Based on Patin Location" help the people to book doctor's appointment
                        according to patient location.'
                    </p>
                </div>

            </div>

        </div>
    </div>
</div>
<!-- End Register Section -->
	<!-- Start Make an Appointment Modal -->

<?php include('include/make_appointment.php');?>
<?php include('include/footer.php');?>