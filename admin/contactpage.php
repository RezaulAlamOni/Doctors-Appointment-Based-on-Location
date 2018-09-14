<?php include('include/header.php'); ?>
<?php include('include/navbar.php'); ?>


<div class="page-container">
            <script>
                $('#page').show();
                $('#page-li>a').addClass('active');
            </script>

<!-- Contact page start -->
<form action="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=page/action" method="post" enctype="multipart/form-data">
	<div class="page-hdr">
		<div class="row">
			<div class="col-4 page-name">
				<h1><i class="fa fa-phone"></i>Contact Page</h1>
			</div>
            <div class="page-name col-3 text-right">
                <h1 id="time">Time</h1>
            </div>
			<div class="col-5 page-menu">
				<button type="submit" name="submit" data-toggle="tooltip" data-placement="left" title="Save Page">
					<i class="fa fa-floppy-o"></i>
				</button>
			</div>
		</div>
	</div>
		<div class="content">
		<div class="row">
			<div class="col-sm-8">
				<div class="content-block content-block-horizantal">
					<div class="content-block-ttl">Contact Section</div>
					<div class="content-block-main">
						<input type="hidden" name="_token" value="413ccea5ca6b8ce59e0da0d74a15110a305317f742542dcc5f09cc85ddf4f25288776a66377494dbf3154612b21c29b49cdcd6ee235b8ea2b77355d52eef0188">
						<div class="content-input">
							<label>Contact Page Title</label>
							<input type="text" name="page[contact][title]" value="Contact Us" placeholder="Blog page title">
						</div>
						<div class="content-input content-input-multi">
							<label>Appointment Block : </label>
							<input type="text" name="page[contact][block][0][icon]" value="plus-square-o" placeholder="Icon Name (Ex: fa-user)">
							<input type="text" name="page[contact][block][0][title]" value="APPOINTMENT" placeholder="Title (Ex: Doctor)">
							<input type="text" name="page[contact][block][0][data1]" value="+ 01 1122 333 333" placeholder="Appointment Mobile Number">
							<input type="text" name="page[contact][block][0][data2]" value="sales@pepdev.com" placeholder="Appointment Email Address">
						</div>
						<div class="content-input content-input-multi">
							<label>Call Us Block : </label>
							<input type="text" name="page[contact][block][1][icon]" value="phone" placeholder="Icon Name (Ex: fa-user)">
							<input type="text" name="page[contact][block][1][title]" value="Call Us" placeholder="Title (Ex: Doctor)">
							<input type="text" name="page[contact][block][1][data1]" value="+ 01 1122 333 333" placeholder="Mobile Number First">
							<input type="text" name="page[contact][block][1][data2]" value="+ 01 1122 333 333" placeholder="Mobile Number Second">
						</div>
						<div class="content-input content-input-multi">
							<label>Email Us Block : </label>
							<input type="text" name="page[contact][block][2][icon]" value="envelope" placeholder="Icon Name (Ex: fa-user)">
							<input type="text" name="page[contact][block][2][title]" value="Email Us" placeholder="Title (Ex: Doctor)">
							<input type="text" name="page[contact][block][2][data1]" value="sales@pepdev.com" placeholder="Email Address">
							<input type="text" name="page[contact][block][2][data2]" value="support@pepdev.com" placeholder="Email Address">
						</div>
						<div class="content-input content-input-multi">
							<label>Location Block : </label>
							<input type="text" name="page[contact][block][3][icon]" value="map-marker" placeholder="Icon Name (Ex: fa-user)">
							<input type="text" name="page[contact][block][3][title]" value="Location" placeholder="Title (Ex: EMAIL US)">
							<input type="text" name="page[contact][block][3][data1]" value="Street name, City, Country" placeholder="Your Clinic Address">
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="content-block content-block-horizantal">
					<div class="content-block-ttl">SEO Section</div>
					<div class="content-block-main">
						<div class="content-input">
							<label><text>*</text>Meta Tag : </label>
							<input type="text" class="input-text" name="meta[tag]" value="Klinikal health care - Appointment and patient management system - Contact" placeholder="Meta Tag Title" required>
						</div>
						<div class="content-input">
							<label>Meta Description : </label>
							<textarea name="meta[description]" class="textarea-small" placeholder="Meta Tag Description">Appointment and patient management system created to simplify  - Contact</textarea>
							<input type="hidden" name="page_name" value="contact">
						</div>
					</div>
				</div>

				<div class="content-block content-block-horizantal">
					<div class="content-block-ttl">Google Map</div>
					<div class="content-block-main">
						<div class="content-input">
							<label><text>*</text>Google Map API Key: </label>
							<input type="text" class="input-text" name="page[contact][google-apikey]" value="AIzaSyB46LtJIWXW_IX_GZVvrR9LCNixR7FvG8A" placeholder="Enter Google map API key">
						</div>
						<div class="content-input">
							<label><text>*</text>Lattitude : </label>
							<input type="text" class="input-text" name="page[contact][latitude]" value="18.938936" placeholder="Clinic lattitude" required>
						</div>
						<div class="content-input">
							<label><text>*</text>Longitude : </label>
							<input type="text" class="input-text" name="page[contact][longitude]" value="72.824116" placeholder="Clinic Longitude" required>
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
<!-- Footer -->
<?php include('include/footer.php');?>