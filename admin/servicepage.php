<?php include('include/header.php'); ?>
<?php include('include/navbar.php'); ?>

<div class="page-container">
    <script>
        $('#page').show();
        $('#page-li>a').addClass('active');
    </script>
<!-- Service page start -->
<form action="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=page/action" method="post" enctype="multipart/form-data">
	<div class="page-hdr">
		<div class="row">
			<div class="col-5 page-name">
				<h1><i class="fa fa-medkit"></i>Service Page</h1>
			</div>
            <div class="page-name col-3 text-right">
                <h1 id="time">Time</h1>
            </div>
			<div class="col-4 page-menu">
				<button type="submit" name="submit" data-toggle="tooltip" data-placement="left" title="Save Page"><i class="fa fa-floppy-o"></i></button>
			</div>
		</div>
	</div>
		<div class="content">
		<div class="row">
			<div class="col-sm-8">
				<div class="content-block content-block-horizantal">
					<div class="content-block-ttl">Service Section</div>
					<div class="content-block-main">
						<input type="hidden" name="_token" value="413ccea5ca6b8ce59e0da0d74a15110a305317f742542dcc5f09cc85ddf4f25288776a66377494dbf3154612b21c29b49cdcd6ee235b8ea2b77355d52eef0188">
						<div class="content-input">
							<label>Service Page Title : </label>
							<input type="text" name="page[service][title]" value="What We Do" placeholder="Service Section Name">
						</div>
						<div class="content-input">
							<label>Service List : </label>
							<div class="content-extra">
								All enabled services will be displayed If you do not want to display then make them disabled.
							</div>
						</div>
					</div>
				</div>
				<div class="content-block content-block-horizantal">
					<div class="content-block-ttl">Facility Section</div>
					<div class="content-block-main">
						<div class="content-input">
							<label>Section Title : </label>
							<input type="text" name="page[facility][title]" value="Why Choose Us" placeholder="Facility Section Name">
						</div>
						<div class="content-input">
							<label>Facility List : </label>
							<div class="content-extra">
								All enabled Facilities will be displayed If you do not want to display then make them disabled.
							</div>
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
							<input type="text" class="input-text" name="meta[tag]" value="Klinikal health care - Appointment and patient management system - Service page" placeholder="Meta Tag Title" required>
						</div>
						<div class="content-input">
							<label>Meta Description : </label>
							<textarea name="meta[description]" class="textarea-small" placeholder="Meta Tag Description">Appointment and patient management system created to simplify  - Service</textarea>
							<input type="hidden" name="page_name" value="service">
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
<?php include ('include/footer.php'); ?>