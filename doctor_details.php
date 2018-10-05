
<?php include('include/db.php');?>
<?php include('include/header.php');?>
<?php
$page_name = "<i class=\"fa fa-info-circle\"></i> Department ";
?>
<?php
    include('include/nav.php');
    require ('class/doctors.php');
    //  require ('class/hospitals.php');
    require ('class/patients.php');
    require ('class/departments.php');
?>
<?php
    $doct = new doctors();
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        }
        $result = $doct->find($id);
        $doctors = $result->fetchAll();
        foreach ($doctors as $doctor) {


?>

    <div class="layer-stretch animated-wrapper">
        <div class="layer-wrapper text-capitalize">

            <div class="row">

                <div class="col-md-7 hm-service-right animated animated-up">
                    <div class="paragraph-medium paragraph-black">
                        <div style="text-align: justify;"><h1 class='text-blue'><?php echo $doctor->first_name." ".$doctor->last_name;?> </h1></div>
                    </div>
                    <br>
                    <br>

                    <br>
                    <div class="row">
                        <div class="col-6 paragraph-medium paragraph-black">
                            <div > Phone : <?php echo $doctor->phone; ?> </div>
                            <div >Email : <?php echo $doctor->email; ?> </div>
                            <div >Gender : <?php echo $doctor->gender; ?> </div>
                            <div >Age : <?php echo $doctor->age; ?> Year</div>
                            <div >Degree : <?php echo $doctor->degree; ?> </div>
                            <div >Position :<?php echo $doctor->position; ?> </div>
                        </div>
                        <div class="col-6 paragraph-medium paragraph-black">
                            <div > Department : <?php $doct->doctor_dpt($doctor->department_id); ?> </div>
                            <?php
                                $sql = "SELECT * FROM hospitals WHERE  id = $doctor->hospital_id";
                                $result = $pdo->prepare($sql);
                                $result->execute();
                                $hospital = $result->fetchAll();
                                foreach ($hospital as $name) {
                                    ?>
                                    <div> Address : <?php  echo $name->name;?></div>
                                    <div> Address : <?php  echo $name->address;?></div>
                                    <?php
                                }

                            ?>
                        </div>
                    </div>

                    <div class="paragraph-medium paragraph-black text-center">
                        <h3>Make Appointment </h3>
                        <form action="include/appointment/add_ap.php" method="post">
                            <label for="">SELECT DATE</label><br>
                            <input type="date" name="date">
                            <input type="hidden" name="dpt_id" value="<?php echo $doctor->department_id;?>">
                            <input type="hidden" name="doctor_id" value="<?php echo $_GET['id'];?>">
                            <input type="hidden" name="time" value="<?php echo $doctor->start_appointment;?>">
                            <input type="hidden" name="address" value="<?php foreach ($hospital as $name) { echo $name->name.", ".$name->address; } ?>">
                           <br>
                            <?php
                            if (isset($_SESSION['patient_id'])) {
                                ?>
                                <button type="submit" name="submit" class="btn btn-success btn-lg btn-pill">Make
                                    Appointment
                                </button>
                                <?php
                            }else
                                echo "Please Login For make appointment !!!";
                            ?>
                        </form>


                    </div>
                </div>

                <div class="col-md-5 hm-service-left">
                    <img class="animated animated-up" src="public/uploads/<?php echo $doctor->photo; ?>" alt="">
                </div>

            </div>
            <div class="row">
                <div class="col-md-7 hm-service-right animated animated-up">

                </div>
            </div>
        </div>
    </div>

<!-- Start Doctor Section -->
    <div class="layer-stretch animated-wrapper">

    </div>
<?php
}

?><!-- End About Page  -->
<!-- Start Testimonial Section -->
<div id="testimonial" class="colored-background">
    <div class="layer-stretch">

        <div class="layer-wrapper layer-bottom-0 animated-wrapper">
            <div class="layer-ttl layer-ttl-white">
                <h3 class="animated animated-down">What People Say?</h3>
            </div>
            <div id="testimonial-slider" class="owl-carousel owl-theme theme-owl-dot">
                <div class="testimonial-block animated animated-right">
                    <img class="img-responsive" src="public/uploads/testimonial-3.jpg" alt="">
                    <div class="paragraph-medium paragraph-white">
                        <i class="fa fa-quote-left"></i> Thank you for the remedy. I feel it has been working on a deeper subtle level. An inner seeing. I have had the feeling of a melting inside and great sense of peace and rightness. I experienced this before with your perception and treatment so thank you very much.					</div>
                    <a>Aditya Ghanekar</a>
                </div>
                <div class="testimonial-block animated animated-right">
                    <img class="img-responsive" src="public/uploads/testimonial-4.jpg" alt="">
                    <div class="paragraph-medium paragraph-white">
                        <i class="fa fa-quote-left"></i> This was my second visit here I loved it first visit but love it more on my second visit. I loved thier facility and online system.
                    </div>
                    <a>Amar Ghode</a>
                </div>
                <div class="testimonial-block animated animated-right">
                    <img class="img-responsive" src="public/uploads/testimonial-2.jpg" alt="">
                    <div class="paragraph-medium paragraph-white">
                        <i class="fa fa-quote-left"></i> Thank you for the remedy. I feel it has been working on a deeper subtle level. An inner seeing. I have had the feeling of a melting inside and great sense of peace and rightness. I experienced this before with your perception and treatment so thank you very much.					</div>
                    <a>Sonu Singh</a>
                </div>
                <div class="testimonial-block animated animated-right">
                    <img class="img-responsive" src="public/uploads/testimonial-1.jpg" alt="">
                    <div class="paragraph-medium paragraph-white">
                        <i class="fa fa-quote-left"></i> This was my second visit here I loved it first visit but love it more on my second visit. I loved thier facility and online system.
                    </div>
                    <a>Vaibhav Ramteke</a>
                </div>
                <div class="testimonial-block animated animated-right">
                    <img class="img-responsive" src="public/uploads/testimonial-5.jpg" alt="">
                    <div class="paragraph-medium paragraph-white">
                        <i class="fa fa-quote-left"></i> Thank you for the remedy. I feel it has been working on a deeper subtle level. An inner seeing. I have had the feeling of a melting inside and great sense of peace and rightness. I experienced this before with your perception and treatment so thank you very much.
                    </div>
                    <a>winceton logo</a>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Testimonial Section -->

<!-- Start Make an Appointment Modal -->

<?php include('include/make_appointment.php');?>
<?php include('include/footer.php');?>
<script>

    $('#doctor>a').addClass('active');
</script>