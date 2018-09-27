
<?php include('include/db.php');?>
<?php include('include/header.php');?>
<?php
 $page_name = "<i class=\"fa fa-info-circle\"></i> About US";
?>
<?php include('include/nav.php');
  require ('class/doctors.php');
  require ('class/hospitals.php');
  require ('class/patients.php');
  require ('class/departments.php');


?>

<div class="layer-stretch animated-wrapper">
	<div class="layer-wrapper text-center">
		<div class="row">
			<div class="col-md-5 hm-service-left">
				<img class="animated animated-up" src="public/uploads/hm-service.jpg" alt="">
			</div>
			<div class="col-md-7 hm-service-right animated animated-up">
				<div class="paragraph-medium paragraph-black"><div style="text-align: justify;">A hospital is an institution for healthcare typically providing specialized treatment for inpatient (or overnight) stays. Some hospitals primarily admit patients suffering from a specific disease or affection, or are reserved for the diagnosis and treatment of conditions affecting a specific age group. Others have a mandate that expands beyond offering dominantly curative and rehabilitative care services to include promotional, preventive and educational roles as part of a primary healthcare approach. Today, hospitals are usually funded by the state, health organizations (for profit or non-profit), by health insurances or by charities and by donations. Historically, however, they were often founded and funded by religious orders or charitable individuals and leaders. Hospitals are nowadays staffed by professionally trained doctors, nurses, paramedical clinicians, etc., whereas historically, this work was usually done by the founding religious orders or by volunteers.<span style="background-color: rgb(255, 255, 255);"><br></span><div style="text-align: justify;"><span style="background-color: rgb(252, 252, 252); color: rgb(85, 85, 85); font-size: 14px; letter-spacing: 0.5px; text-align: left;"><br>&nbsp;</span><b>A walk-in clinic</b>&nbsp;describes a very broad category of medical facilities only loosely defined as those that accept patients on a walk-in basis and with no appointment required. A number of healthcare service providers fall under the walk-in clinic umbrella including urgent care centers, retail clinics and even many free clinics or community health clinics. Walk-in clinics offer the advantages of being accessible and often inexpensive.</div><div style="text-align: left;"><br></div></div><ul><li style="text-align: left;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, nostrum</li><li style="text-align: left;">Expedita autem, ea, inventore eligendi debitis nihil obcaecati consequatur quo</li><li style="text-align: left;">Dolores, voluptatem vel eligendi asperiores totam deserunt exercitationem</li><li style="text-align: left;">Pariatur iusto corporis facilis corrupti dolorem exercitationem ipsam quisquam<br></li></ul></div>
			</div>
		</div>
	</div>
</div><!-- End About Page  -->
<div class="colored-background">
	<div class="layer-stretch">
		<div class="layer-wrapper layer-bottom-0 animated-wrapper">
			<div class="layer-ttl layer-ttl-white">
				<h3 class=" animated animated-down">Who We Are?</h3>
			</div>
			<div class="row">
				<div class="col-md-7">

                    <div class="hm-about-block">
                        <a href="doctors.php">
                            <div class="tbl-cell hm-about-icon"><i class="fa fa-user-md"></i></div>
                            <div class="tbl-cell hm-about-number">
							<span>
                                <?php
                                $doctor = new doctors();
                                echo $doctor->count();
                                ?>
                            </span>
                                <p>Doctor(s)</p>
                            </div>
                        </a>
                    </div>
                    <div class="hm-about-block">
                        <a href="hospital.php">
                            <div class="tbl-cell hm-about-icon"><i class="fa fa-hospital-o"></i></div>
                            <div class="tbl-cell hm-about-number">
							<span>
                                <?php
                                $hos = new hospitals();
                                echo $hos->count();
                                ?>
                            </span>
                                <p>Hospital(s)</p>
                            </div>
                        </a>
                    </div>

                    <div class="hm-about-block">
                        <div class="tbl-cell hm-about-icon"><i class="fa fa-users"></i></div>
                        <div class="tbl-cell hm-about-number">
							<span>
                                <?php
                                $patient = new patients();
                                echo $patient->count();
                                ?>
                            </span>
                            <p>Patients</p>
                        </div>
                    </div>
                    <div class="hm-about-block">

                        <a href="department.php">
                            <div class="tbl-cell hm-about-icon"><i class="fa fa-building-o"></i></div>
                            <div class="tbl-cell hm-about-number">
                            <span>
                                <?php
                                $dpt = new departments();
                                echo $dpt->count();
                                ?>
                            </span>
                                <p>Department(s)</p>
                            </div>
                        </a>
                    </div>
                </div>
				<div class="col-md-5">
					<img class="img-thumbnail animated animated-up" src="public/uploads/hm-about-1.jpg" alt="">
				</div>
				<div class="row about-mission-vission text-center">
					<div class="col-md-6 about-mission animated animated-up ">
						<span>Our Mission</span>
						<p class="paragraph-medium paragraph-white text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enim, beatae velit reiciendis, inventore molestiae, neque sapiente temporibus architecto dicta, vero quaerat sequi quos. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
					</div>
					<div class="col-md-6 about-vission animated animated-up ">
						<span>Our Vission</span>
						<p class="paragraph-medium paragraph-white text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eligendi perferendis ducimus sed aliquid natus enim, beatae velit reiciendis, inventore molestiae, neque sapiente temporibus architecto dicta, vero quaerat sequi quos. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Start Doctor Section -->
<div class="layer-stretch animated-wrapper">
	<div class="layer-wrapper layer-bottom-0">
		<div class="layer-ttl">
			<h3 class="animated animated-down">Doctors</h3>
		</div>
		<div class="row">
            <?php
            $sql = "SELECT * FROM doctors LIMIT 8";
            $result = $pdo->prepare($sql);
            $result->execute();
            $doctors= $result->fetchAll();
            foreach ($doctors as $doct) {

                ?>
                <div class="col-sm-6 col-md-3">
                    <div class="theme-block theme-block-hover animated animated-up">
                        <div class="theme-block-picture">
                            <img src="public/uploads/<?php echo $doct->photo; ?>" alt="Daniel Barnes">
                        </div>
                        <div class="doctor-name">
                            <h4><a href="doctor_details.php" class="text-capitalize" >Dr.
                                    <?php echo $doct->first_name." ".$doct->last_name;?>
                                </a></h4>
                        </div>
                        <div class="doctor-details">
                            <div class="doctor-specility">
                                <p class="text-capitalize">
                                    <?php
                                    $id = $doct->department_id;
                                    $doctor->doctor_dpt($id);
                                    ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php

            }
            ?>

        </div>
	</div>
</div><!-- End About Page  -->
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

    $('#page>a').addClass('active');
</script>