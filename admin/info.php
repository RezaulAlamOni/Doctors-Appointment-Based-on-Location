<?php include('include/header.php'); ?>
<?php include('include/navbar.php'); ?>

<div class="page-container">
    <script>
	    $('#themeoption').show();
	    $('#themeoption-li>a').addClass('active');
    </script>
<form action="ss" method="post" enctype="multipart/form-data">
	<div class="page-hdr">
		<div class="row">	
			<div class="col-4 page-name">
				<h1><i class="fa fa-info-circle"></i>Clinic Info</h1>
			</div>
            <div class="page-name col-3 text-right">
                <h1 id="time">Time</h1>
            </div>
			<div class="col-5 pull-right page-menu">
				<button type="submit" name="submit" data-toggle="tooltip" data-placement="left" title="Save Page"><i class="fa fa-floppy-o"></i></button>
			</div>
		</div>
	</div>
		<div class="content">
		<input type="hidden" name="_token" value="413ccea5ca6b8ce59e0da0d74a15110a305317f742542dcc5f09cc85ddf4f25288776a66377494dbf3154612b21c29b49cdcd6ee235b8ea2b77355d52eef0188">
		<div class="row">
			<div class="col-sm-6">
				<div class="content-block content-block-horizantal">
					<div class="content-block-ttl">Theme details</div>
					<div class="content-block-main">
						<div class="row content-input">
							<div class="col-sm-6">
								<label><text>*</text>Site Url : </label>
								<input type="url" class="input-text" name="url" value="http://www.pepdev.com/theme-preview/klinikal" placeholder="Your website URL" required>
								<p class="content-input-error-name">Please enter Url!</p>
							</div>
							<div class="col-sm-6">
								<label><text>*</text>Site Mode : </label>
								<select name="mode" id="" class="select-list">
									<option value="1" selected >Live</option>
									<option value="2" >Comming Soon</option>
									<option value="3" >Maintenance mode</option>
								</select>
							</div>
						</div>
						<div class="content-input">
							<label>Theme Color</label>
							<div class="theme-color">
								<div>
									<input type="radio" name="theme-color" value="blue" id="blue" checked>
									<label for="blue"><i class="fa fa-check-square-o"></i></label>
								</div>
								<div>
									<input type="radio" name="theme-color" value="green" id="green" >
									<label for="green"><i class="fa fa-check-square-o"></i></label>
								</div>
								<div>
									<input type="radio" name="theme-color" value="orange" id="orange" >
									<label for="orange"><i class="fa fa-check-square-o"></i></label>
								</div>
								<div>
									<input type="radio" name="theme-color" value="purple" id="purple" >
									<label for="purple"><i class="fa fa-check-square-o"></i></label>
								</div>
							</div>
						</div>
						<div class="row content-input">
							<div class="col-sm-6">
								<label><text>*</text>Clinic Logo : </label>
								<div class="image-upload"  style="display: none"  >
									<a>Upload</a>
								</div>
								<div class="saved-picture"  >
																		<img class="img-thumbnail" src="../public/uploads/logo-blue.png" alt="">
																		<input type="hidden" name="logo" value="logo-blue.png">
								</div>
								<div class="saved-picture-delete" data-toggle="tooltip" data-placement="right" title="Remove"  >
									<a class="fa fa-times"></a>
								</div>
							</div>
							<div class="col-sm-6">
								<label><text>*</text>Clinic favicon : </label>
								<div class="image-upload"  style="display: none"  >
									<a>Upload</a>
								</div>
								<div class="saved-picture"  >
																		<img class="img-thumbnail" src="../public/uploads/favicon-blue-32x32.png" alt="">
																		<input type="hidden" name="favicon" value="favicon-blue-32x32.png">
								</div>
								<div class="saved-picture-delete" data-toggle="tooltip" data-placement="right" title="Remove"  >
									<a class="fa fa-times"></a>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="content-block content-block-horizantal">
					<div class="content-block-ttl">Basic details</div>
					<div class="content-block-main">
						<div class="row content-input">
							<div class="col-sm-6">
								<label><text>*</text>Clinic Name : </label>
								<input type="text" class="input-text" name="name" value="Klinikal Health care" placeholder="Clinic Name" required>
								<p class="content-input-error-name">Please enter clinic name!</p>
							</div>
							<div class="col-sm-6">
								<label><text>*</text>Clinic Email : </label>
								<input type="email" class="input-email" name="email" value="support@pepdev.com" placeholder="Clinic Email Address" required>
								<p class="content-input-error-name">Please enter email address!</p>
							</div>
						</div>
						<div class="row content-input">
							<div class="col-sm-6 ">
								<label><text>*</text>Phone Number : </label>
								<input type="text" class="input-text" name="mobile" value="11122333333" placeholder="Clinic Phone Number" required>
								<p class="content-input-error-name">Please enter clinic phone number!</p>
							</div>
							<div class="col-sm-6">
								<label><text>*</text>Emergency Number : </label>
								<input type="text" class="input-text" name="emergency" value="1800000000" placeholder="Emergency Number" required>
								<p class="content-input-error-name">Please enter clinic emergency phone number!</p>
							</div>
						</div>
						<div class="row content-input">
							<div class="col-sm-6">
								<label><text>*</text>Address : </label>
								<textarea name="address" class="textarea-input" placeholder="Clinic Address" required>Your office, Building Name
Street name, Area
City, Country Pin Code</textarea>
								<p class="content-input-error-name">Please enter clinic address!</p>
							</div>
							<div class="col-sm-6">
								<label><text>*</text>Currency Code : </label>
								<input type="text" class="input-text" name="currency" value="USD" placeholder="Currency Code" required>
								<p class="content-input-error-name">Please enter currency code</p>
								<div class="content-description">Like USD for USA. You can find a full list of ISO currency codes and settings <a href="http://www.xe.com/iso4217.php" target="_blank">here</a></div>
							</div>
						</div>
						<div class="row content-input">
							<div class="col-sm-12">
							<label>Language : </label>
								<select name="language" class="select-list">
									<option value="eng" >English</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clear clearfix"></div>
			<div class="col-sm-6">
				<div class="content-block content-block-horizantal">
					<div class="content-block-ttl">Social Link</div>
					<div class="content-block-main">
						<div class="content-input content-link">
							<label>Facebook <i class="fa fa-facebook"></i> : </label>
							<input type="url" name="facebook" value="https://www.facebook.com/pepdevofficial" placeholder="Facebook Link">
						</div>
						<div class="content-input content-link">
							<label>Twitter <i class="fa fa-twitter"></i> : </label>
							<input type="url" name="twitter" value="https://twitter.com/pepdevofficial" placeholder="Twitter Link">
						</div>
						<div class="content-input content-link">
							<label>Google + <i class="fa fa-google"></i> : </label>
							<input type="url" name="google" value="https://plus.google.com/110823961031348424693" placeholder="Google plus Link">
						</div>
						<div class="content-input content-link">
							<label>Instagram <i class="fa fa-instagram"></i> : </label>
							<input type="url" name="instagram" value="https://www.instagram.com/pepdevofficial/" placeholder="Instagram Link">
						</div>
						<div class="content-input content-link">
							<label>Youtube <i class="fa fa-youtube"></i> : </label>
							<input type="url" name="youtube" value="https://www.youtube.com/channel/UCRuPHwjNznZilEvlGIr1Y1Q" placeholder="Youtube Link">
						</div>
						<div class="content-input content-link">
							<label>Linkedin <i class="fa fa-linkedin"></i> : </label>
							<input type="url" name="linkedin" value="https://www.linkedin.com/" placeholder="Linkedin Link">
						</div>
						<div class="content-input content-link">
							<label>Flickr <i class="fa fa-flickr"></i> : </label>
							<input type="url" name="flickr" value="https://www.flickr.com/" placeholder="Flickr Link">
						</div>
						<div class="content-input content-link">
							<label>Rss <i class="fa fa-rss"></i> : </label>
							<input type="url" name="rss" value="https://www.rss.com/" placeholder="Feed Rss Link">
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="content-block content-block-horizantal">
					<div class="content-block-ttl">Time Table</div>
					<div class="content-block-main">
						<div class="content-input">
							<label>Sunday Time : </label>
							<input type="text" class="input-text" name="sun" value="09:00 AM - 01:00 PM" placeholder="Sunday Timing" required>
							<p class="content-input-error-name">Please enter sunday time table!</p>
						</div>
						<div class="content-input">
							<label>Monday Time : </label>
							<input type="text" class="input-text" name="mon" value="09:00 AM - 05:00 PM" placeholder="Monday Timing" required>
							<p class="content-input-error-name">Please enter monday time table!</p>
						</div>
						<div class="content-input">
							<label>Tuesday Time : </label>
							<input type="text" class="input-text" name="tue" value="09:00 AM - 05:00 PM" placeholder="Tuesday Timing" required>
							<p class="content-input-error-name">Please enter tuesday time table!</p>
						</div>
						<div class="content-input">
							<label>Wednesday Time : </label>
							<input type="text" class="input-text" name="wed" value="09:00 AM - 05:00 PM" placeholder="Wednesday Timing" required>
							<p class="content-input-error-name">Please enter wednesday time table!</p>
						</div>
						<div class="content-input">
							<label>Thursday Time : </label>
							<input type="text" class="input-text" name="thu" value="09:00 AM - 05:00 PM" placeholder="Thursday Timing" required>
							<p class="content-input-error-name">Please enter thursday time table!</p>
						</div>
						<div class="content-input">
							<label>Friday Time : </label>
							<input type="text" class="input-text" name="fri" value="09:00 AM - 05:00 PM" placeholder="Friday Timing" required>
							<p class="content-input-error-name">Please enter friday time table!</p>
						</div>
						<div class="content-input">
							<label>Saturday Time : </label>
							<input type="text" class="input-text" name="sat" value="09:00 AM - 05:00 PM" placeholder="Saturday Timing" required>
							<p class="content-input-error-name">Please enter saturday time table!</p>
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
<?php include ('include/footer.php');?>