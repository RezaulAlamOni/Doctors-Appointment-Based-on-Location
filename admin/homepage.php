<?php include('include/header.php'); ?>
<?php include('include/navbar.php'); ?>

<div class="page-container"><script>
	$('#page').show();
	$('#page-li>a').addClass('active');
</script>
<!-- Home page start -->

<form action="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=page/action" method="post" enctype="multipart/form-data">
	<div class="page-hdr">
		<div class="row">
			<div class="col-4 page-name">
				<h1><i class="fa fa-home"></i>Home Page</h1>
			</div>
            <div class="page-name col-3 text-right">
                <h1 id="time">Time</h1>
            </div>
			<div class="col-5 page-menu">
				<button type="submit" name="submit" data-toggle="tooltip" data-placement="left" title="Save Page"><i class="fa fa-floppy-o"></i></button>
			</div>
		</div>
	</div>
		<div class="content">
		<div class="row">
			<div class="col-sm-8">
				<div class="content-block content-block-horizantal">
					<div class="content-block-ttl">Slider Section</div>
					<div class="content-block-main">
						<input type="hidden" name="_token" value="413ccea5ca6b8ce59e0da0d74a15110a305317f742542dcc5f09cc85ddf4f25288776a66377494dbf3154612b21c29b49cdcd6ee235b8ea2b77355d52eef0188">
												<div class="content-input">
							<label>Slide 1 Picture : </label>
							<div class="image-upload"  style="display: none"  >
								<a>Upload</a>
							</div>
							<div class="saved-picture"  >
																<img class="img-thumbnail" src="../public/uploads/slider-1.jpg" alt="">
																<input type="hidden" name="page[slider][0][img]" value="slider-1.jpg">
							</div>
							<div class="saved-picture-delete" data-toggle="tooltip" data-placement="right" title="Remove"  >
								<a class="fa fa-times"></a>
							</div>
							<div class="content-description">(Size: 1920px x 800px)</div>
						</div>
						<div class="content-input">
							<label>Slide 1 tag line : </label>
							<input type="text" name="page[slider][0][tag]" value="Appointment and Patient Data Management" placeholder="Slide Tag Line">
						</div>
						<div class="content-input">
							<label>Slide 1 content : </label>
							<input type="text" name="page[slider][0][content]" value="We have created 30+ Pages, 70+ Components or Shortcodes, Popup for this template and more in future. #twitterhash, @facebooktag" placeholder="Slide content">
						</div>
												<div class="content-input">
							<label>Slide 2 Picture : </label>
							<div class="image-upload"  style="display: none"  >
								<a>Upload</a>
							</div>
							<div class="saved-picture"  >
																<img class="img-thumbnail" src="../public/uploads/slider-2.jpg" alt="">
																<input type="hidden" name="page[slider][1][img]" value="slider-2.jpg">
							</div>
							<div class="saved-picture-delete" data-toggle="tooltip" data-placement="right" title="Remove"  >
								<a class="fa fa-times"></a>
							</div>
							<div class="content-description">(Size: 1920px x 800px)</div>
						</div>
						<div class="content-input">
							<label>Slide 2 tag line : </label>
							<input type="text" name="page[slider][1][tag]" value="A Complete Solution for Clinic Managment" placeholder="Slide Tag Line">
						</div>
						<div class="content-input">
							<label>Slide 2 content : </label>
							<input type="text" name="page[slider][1][content]" value="This is tag line ipsum dolor sit amet, consectetur Nihil cupiditate. mollitia maiores elit#twitterhash, @facebooktag" placeholder="Slide content">
						</div>
												<div class="content-input">
							<label>Slide 3 Picture : </label>
							<div class="image-upload"  style="display: none"  >
								<a>Upload</a>
							</div>
							<div class="saved-picture"  >
																<img class="img-thumbnail" src="../public/uploads/slider-3.jpg" alt="">
																<input type="hidden" name="page[slider][2][img]" value="slider-3.jpg">
							</div>
							<div class="saved-picture-delete" data-toggle="tooltip" data-placement="right" title="Remove"  >
								<a class="fa fa-times"></a>
							</div>
							<div class="content-description">(Size: 1920px x 800px)</div>
						</div>
						<div class="content-input">
							<label>Slide 3 tag line : </label>
							<input type="text" name="page[slider][2][tag]" value="24/7 Support Services " placeholder="Slide Tag Line">
						</div>
						<div class="content-input">
							<label>Slide 3 content : </label>
							<input type="text" name="page[slider][2][content]" value="Do not hesitate to contact us on our dedicated support forum. mollitia maiores temp fugit! consectetur adipisicing elit #twitterhash, @facebooktag" placeholder="Slide content">
						</div>
											</div>
				</div>
				<div class="content-block content-block-horizantal">
					<div class="content-block-ttl">Service Section (What We Do)</div>
					<div class="content-block-main">
						<div class="content-input">
							<label>Section Title : </label>
							<input type="text" name="page[service][title]" value="WHAT WE DO" placeholder="Service Section Name">
						</div>
						<div class="content-input">
							<label>Section Picture : </label>
							<div class="image-upload"  style="display: none"  >
								<a>Upload</a>
							</div>
							<div class="saved-picture"  >
																<img class="img-thumbnail" src="../public/uploads/hm-service.jpg" alt="">
																<input type="hidden" name="page[service][picture]" value="hm-service.jpg">
							</div>
							<div class="saved-picture-delete" data-toggle="tooltip" data-placement="right" title="Remove"  >
								<a class="fa fa-times"></a>
							</div>
							<div class="content-description">(Size: 620px x 680px)</div>
						</div>
						<div class="content-input">
							<label>Section Description : </label>
							<textarea name="page[service][description]" class="textarea-input" placeholder="Service Section About">Klinikal is a web application that our team has created for small and medium scale clinical enterprises. In this a clinic can post their data and host a website in an organised way.This application provides a customizing interface solution for appointment making according to clinic specific requirement and also handle patient visiting history and invoices</textarea>
						</div>
						<div class="content-input">
							<label>Services List : </label>
							<div class="content-extra">Maximum six services will be displayed according to priority.</div>
						</div>
					</div>
				</div>
				<div class="content-block content-block-horizantal">
					<div class="content-block-ttl">About Us Section (Who We Are)</div>
					<div class="content-block-main">
						<div class="content-input">
							<label>Section Title : </label>
							<input type="text" name="page[about][title]" value="Who We Are" placeholder="About Section Name">
						</div>
												<div class="content-input content-input-multi">
							<label>Block 1: </label>
							<div class="row">
								<div class="col-sm-4">
									<input type="text" name="page[about][block][0][icon]" value="user-md" placeholder="Icon Name (Ex: fa-user)">
								</div>
								<div class="col-sm-4">
									<input type="text" name="page[about][block][0][title]" value="Doctor(s)" placeholder="Title (Ex: Doctor)">
								</div>
								<div class="col-sm-4">
									<input type="text" name="page[about][block][0][count]" value="10" placeholder="Number or Count (Ex: 9)">
								</div>
							</div>
							
						</div>
												<div class="content-input content-input-multi">
							<label>Block 2: </label>
							<div class="row">
								<div class="col-sm-4">
									<input type="text" name="page[about][block][1][icon]" value="ambulance" placeholder="Icon Name (Ex: fa-user)">
								</div>
								<div class="col-sm-4">
									<input type="text" name="page[about][block][1][title]" value="Room(s)" placeholder="Title (Ex: Doctor)">
								</div>
								<div class="col-sm-4">
									<input type="text" name="page[about][block][1][count]" value="20" placeholder="Number or Count (Ex: 9)">
								</div>
							</div>
							
						</div>
												<div class="content-input content-input-multi">
							<label>Block 3: </label>
							<div class="row">
								<div class="col-sm-4">
									<input type="text" name="page[about][block][2][icon]" value="calendar" placeholder="Icon Name (Ex: fa-user)">
								</div>
								<div class="col-sm-4">
									<input type="text" name="page[about][block][2][title]" value="Year of Experience(s)" placeholder="Title (Ex: Doctor)">
								</div>
								<div class="col-sm-4">
									<input type="text" name="page[about][block][2][count]" value="23" placeholder="Number or Count (Ex: 9)">
								</div>
							</div>
							
						</div>
												<div class="content-input content-input-multi">
							<label>Block 4: </label>
							<div class="row">
								<div class="col-sm-4">
									<input type="text" name="page[about][block][3][icon]" value="clock-o" placeholder="Icon Name (Ex: fa-user)">
								</div>
								<div class="col-sm-4">
									<input type="text" name="page[about][block][3][title]" value="OPENING HOURS PER WEEK" placeholder="Title (Ex: Doctor)">
								</div>
								<div class="col-sm-4">
									<input type="text" name="page[about][block][3][count]" value="40" placeholder="Number or Count (Ex: 9)">
								</div>
							</div>
							
						</div>
												<div class="content-input">
							<label>Section Picture : </label>
							<div class="image-upload"  style="display: none"  >
								<a>Upload</a>
							</div>
							<div class="saved-picture"  >
																<img class="img-thumbnail" src="../public/uploads/hm-about.jpg" alt="">
																<input type="hidden" name="page[about][picture]" value="hm-about.jpg">
							</div>
							<div class="saved-picture-delete" data-toggle="tooltip" data-placement="right" title="Remove"  >
								<a class="fa fa-times"></a>
							</div>
							<div class="content-description">(Size: 660px x 750px)</div>
						</div>
						<div class="content-input">
							<label>Section Description : </label>
							<textarea name="page[about][description]" placeholder="About Section Moto">A hospital is an institution for healthcare typically providing specialized treatment for inpatient (or overnight) stays. Some hospitals primarily admit patients suffering from a specific disease or affection, or are reserved for the diagnosis and treatment of conditions affecting a specific age group. Others have a mandate that expands beyond offering dominantly curative and rehabilitative care services to include promotional, preventive and educational roles as part of a primary healthcare approach. Today, hospitals are usually funded by the state, health organizations (for profit or non-profit), by health insurances or by charities and by donations.</textarea>
						</div>
					</div>
				</div>
				<div class="content-block content-block-horizantal">
					<div class="content-block-ttl">Facility Section (Why Are We Best?)</div>
					<div class="content-block-main">
						<div class="content-input">
							<label>Section Title : </label>
							<input type="text" name="page[facility][title]" value="Why Choose Us" placeholder="Facility Section Name">
						</div>
						<div class="content-input">
							<label>Facility Lists : </label>
							<div class="content-extra">
								All enabled facilities will be displayed If you do not want to display then make them disabled.
							</div>
						</div>
					</div>
				</div>
				<div class="content-block content-block-horizantal">
					<div class="content-block-ttl">Doctor section</div>
					<div class="content-block-main">
						<div class="content-input">
							<label>Section Title : </label>
							<input type="text" name="page[doctor][title]" value="Our Team" placeholder="Doctor Section Title">
						</div>
						<div class="content-input">
							<label>Doctor Slider : </label>
							<div class="content-extra">Maximum six doctors will be displayed according to priority.</div>
						</div>
					</div>
				</div>
				<div class="content-block content-block-horizantal">
					<div class="content-block-ttl">Blog Section</div>
					<div class="content-block-main">
						<div class="content-input">
							<label>Section Title : </label>
							<input type="text" name="page[blog][title]" value="Latest Posts" placeholder="Blog Section Title">
						</div>
						<div class="content-input">
							<label>Blog Lists : </label>
							<div class="content-extra">
								Latest three blog will be displayed on home page.
							</div>
						</div>
					</div>
				</div>
				<div class="content-block content-block-horizantal">
					<div class="content-block-ttl">What People Say? Section (Testimonial Section)</div>
					<div class="content-block-main">
						<div class="content-input">
							<label>Section Title : </label>
							<input type="text" name="page[testimonial][title]" value="What People Say" placeholder="Testimonial Section Name">
						</div>
						<div class="content-input">
							<label>Testimonial Lists : </label>
							<div class="content-extra">
								All enabled Testimonial will be displayed If you do not want to display then make them disabled.
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
							<input type="text" class="input-text" name="meta[tag]" value="Klinikal health care - Appointment and patient management system - Home" placeholder="Meta Tag Title" required>
						</div>
						<div class="content-input">
							<label>Meta Description : </label>
							<textarea name="meta[description]" class="textarea-small" placeholder="Meta Tag Description">Appointment and patient management system created to simplify </textarea>
							<input type="hidden" name="page_name" value="home">
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