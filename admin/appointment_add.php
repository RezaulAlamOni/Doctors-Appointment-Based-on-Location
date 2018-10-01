<?php include('include/header.php'); ?>
<?php include('include/navbar.php'); ?>

<div class="page-container">
            <script>$('#appointment').show();</script>

            <script>$('#appointment-li>a').addClass('active');</script>
<div class="main">
	<form action="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=appointment/action" method="post">
		<div class="page-hdr">
			<div class="row">
				<div class="col-4 page-name">
					<h1><i class="fa fa-envelope"></i>Add Appointment</h1>
				</div>
                <div class="page-name col-3 text-right">
                    <h1 id="time">Time</h1>
                </div>
				<div class="col-5 page-menu">
					<a id="cancel" href="appointment.php" data-toggle="tooltip" data-placement="left" title="Back to List"><i class="fa fa-reply"></i></a>
					<button type="submit" name="submit" data-toggle="tooltip" data-placement="left" title="Save Appointment"><i class="fa fa-floppy-o"></i></button>
				</div>
			</div>
		</div>
				<div class="content">
			<div class="content-invisible">
                <input type="hidden" value="{&quot;id&quot;:3,&quot;name&quot;:&quot;Melissa Bates&quot;,&quot;department_id&quot;:1,&quot;weekly&quot;:&quot;[\&quot;1\&quot;,\&quot;2\&quot;,\&quot;6\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25, 2017-04-13, 2017-04-14, 2017-04-20, 2017-07-07, 2017-07-08, 2017-07-14\&quot;&quot;,&quot;department&quot;:&quot;Gynaecology&quot;}" class="doctor-id-3 department-id-Gynaecology" >
                <input type="hidden" value="{&quot;id&quot;:8,&quot;name&quot;:&quot;Linda Adams&quot;,&quot;department_id&quot;:1,&quot;weekly&quot;:&quot;[\&quot;0\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25, 2017-06-16, 2017-06-21, 2017-06-26, 2017-07-11, 2017-07-14, 2017-07-20, 2017-07-31\&quot;&quot;,&quot;department&quot;:&quot;Gynaecology&quot;}" class="doctor-id-8 department-id-Gynaecology" >
                <input type="hidden" value="{&quot;id&quot;:1,&quot;name&quot;:&quot;Daniel Barnes&quot;,&quot;department_id&quot;:2,&quot;weekly&quot;:&quot;[\&quot;3\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25, 2017-01-18, 2017-01-21, 2017-01-30, 2017-03-27, 2017-03-31\&quot;&quot;,&quot;department&quot;:&quot;Orthology&quot;}" class="doctor-id-1 department-id-Orthology" >
                <input type="hidden" value="{&quot;id&quot;:5,&quot;name&quot;:&quot;Steve Soeren&quot;,&quot;department_id&quot;:2,&quot;weekly&quot;:&quot;[\&quot;0\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25, 2017-02-16, 2017-03-14, 2017-03-17, 2017-03-23, 2017-03-31\&quot;&quot;,&quot;department&quot;:&quot;Orthology&quot;}" class="doctor-id-5 department-id-Orthology" >
                <input type="hidden" value="{&quot;id&quot;:7,&quot;name&quot;:&quot;Barbara Baker&quot;,&quot;department_id&quot;:2,&quot;weekly&quot;:&quot;[\&quot;1\&quot;,\&quot;5\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25, 2017-06-08, 2017-06-20, 2017-06-28, 2017-06-29\&quot;&quot;,&quot;department&quot;:&quot;Orthology&quot;}" class="doctor-id-7 department-id-Orthology" >
                <input type="hidden" value="{&quot;id&quot;:4,&quot;name&quot;:&quot;Cheri Aria&quot;,&quot;department_id&quot;:3,&quot;weekly&quot;:&quot;[\&quot;5\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25, 2017-03-07, 2017-03-14, 2017-03-20, 2017-03-26\&quot;&quot;,&quot;department&quot;:&quot;Dermatologist&quot;}" class="doctor-id-4 department-id-Dermatologist" >
                <input type="hidden" value="{&quot;id&quot;:6,&quot;name&quot;:&quot;Theodore Bennett&quot;,&quot;department_id&quot;:4,&quot;weekly&quot;:&quot;[\&quot;0\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25, 2017-02-15, 2017-02-16, 2017-03-07, 2017-03-15, 2017-03-23, 2017-03-31\&quot;&quot;,&quot;department&quot;:&quot;Anaesthesia&quot;}" class="doctor-id-6 department-id-Anaesthesia" >
                <input type="hidden" value="{&quot;id&quot;:10,&quot;name&quot;:&quot;Vedhraj Jain&quot;,&quot;department_id&quot;:5,&quot;weekly&quot;:&quot;[\&quot;6\&quot;,\&quot;0\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25\&quot;&quot;,&quot;department&quot;:&quot;Ayurvedic&quot;}" class="doctor-id-10 department-id-Ayurvedic" >
            </div>
			<div class="row">
				<div class="col-md-7">
					<div class="content-block content-block-horizantal">
						<div class="content-block-ttl">Appointment Info</div>
						<div class="content-block-main">
							<input type="hidden" name="_token" value="413ccea5ca6b8ce59e0da0d74a15110a305317f742542dcc5f09cc85ddf4f25288776a66377494dbf3154612b21c29b49cdcd6ee235b8ea2b77355d52eef0188">
							<div class="content-input" style="display: none">
								<label>Department : </label>
								<input type="text" class="appointment-department" value="" readonly>
								<input type="hidden" name="department" id="appointment-department" value="">
							</div>
							<div class="content-input">
								<label>Choose Doctor</label>
								<select name="doctor" id="appointment-doctor" class="select-list appointment-doctor">
									<option value="">Select Doctor</option>
																		<option value="3">Dr. Melissa Bates(Gynaecology)</option>
																		<option value="8">Dr. Linda Adams(Gynaecology)</option>
																		<option value="1">Dr. Daniel Barnes(Orthology)</option>
																		<option value="5">Dr. Steve Soeren(Orthology)</option>
																		<option value="7">Dr. Barbara Baker(Orthology)</option>
																		<option value="4">Dr. Cheri Aria(Dermatologist)</option>
																		<option value="6">Dr. Theodore Bennett(Anaesthesia)</option>
																		<option value="10">Dr. Vedhraj Jain(Ayurvedic)</option>
																	</select>
							</div>
							<div class="content-input">
								<label>Appointment Date : </label>
								<input type="text" name="date" id="appointment-date" value="" placeholder="Date" readonly required>
								<p class="content-input-error-name">Please Select Date!</p>
								<div class="content-description">Select Date to select time slot.</div>
							</div>
							<div class="content-input" id="add-appointment-slot">
								<label>Appointment Time : </label>
								<div id="appointment-slot">

								</div>
							</div>
							<div class="content-input">
								<label>Status : </label>
								<select name="status" id="" class="select-list" required>
									<option value="2">In Process</option>
									<option value="3">Confirmed</option>
									<option value="4">Completed</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="content-block content-block-horizantal">
						<div class="content-block-ttl">Patient Info</div>
						<div class="content-block-main">
							<div class="content-input">
								<label>Name : </label>
								<input type="text" class="input-text" name="name" value="" placeholder="Name" required>
								<p class="content-input-error-name">Please enter Name!</p>
							</div>
							<div class="content-input">
								<label>Email : </label>
								<input type="email" class="input-email" name="email" value="" placeholder="Email" required>
								<p class="content-input-error-name">Please enter valid Email!</p>
							</div>
							<div class="content-input">
								<label>Mobile : </label>
								<input type="number" class="input-number" name="mobile" value="" placeholder="Mobile" required>
								<p class="content-input-error-name">Please enter valid Phone number!</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
			<div class="content-submit text-center">
				<button type="submit" name="submit" class="btn btn-primary">Save</button>
			</div>
		</div>
	</form>
</div>
<!-- Footer -->
<?php include('include/footer.php');?>