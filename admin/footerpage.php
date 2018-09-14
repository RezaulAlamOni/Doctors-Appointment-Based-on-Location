<?php include('include/header.php'); ?>
<?php include('include/navbar.php'); ?>

<div class="page-container"><script>

	$('#page').show();
	$('#page-li>a').addClass('active');
</script>
<!-- Home page start -->
<form action="=page/action" method="post" enctype="multipart/form-data">
	<div class="page-hdr">
		<div class="row">
			<div class="col-4 page-name">
				<h1><i class="fa fa-copyright"></i>Footer</h1>
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
					<div class="content-block-ttl">Time Table Section</div>
					<div class="content-block-main">
						<input type="hidden" name="_token" value="413ccea5ca6b8ce59e0da0d74a15110a305317f742542dcc5f09cc85ddf4f25288776a66377494dbf3154612b21c29b49cdcd6ee235b8ea2b77355d52eef0188">
						<div class="content-input">
							<label>Section Title : </label>
							<input type="text" name="page[footer][tt][ttl]" value="Our Time Table" placeholder="Time Table Section Title">
						</div>
						<div class="content-input">
							<label>Clinic Time Table : </label>
							<div class="content-extra">
								Please enter clinic time table in clinic info or <a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=info">click here</a> 
							</div>
						</div>
					</div>
				</div>
				<div class="content-block content-block-horizantal">
					<div class="content-block-ttl">Emergency Section</div>
					<div class="content-block-main">
						<div class="content-input">
							<label>Section Title : </label>
							<input type="text" name="page[footer][emergency][ttl]" value="On Emergency" placeholder="Emergency Section Title">
						</div>
						<div class="content-input">
							<label>Section Description : </label>
							<textarea name="page[footer][emergency][description]" placeholder="Emergency Section Description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique suntasdadsada </textarea>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="content-block content-block-horizantal">
					<div class="content-block-ttl">Footer Menu Section</div>
					<div class="content-block-main">
						<div class="content-input">
							<label>Select Footer menu : </label>
							<div class="content-checkbox">
																<div>
									<input type="checkbox" name="page[footer][menu][]" value="home" id="footer-menu-home"  >
									<label for="footer-menu-home">Home</label>
								</div>
								<div>
									<input type="checkbox" name="page[footer][menu][]" value="services" id="footer-menu-service"  >
									<label for="footer-menu-service">Services</label>
								</div>
								<div>
									<input type="checkbox" name="page[footer][menu][]" value="doctors" id="footer-menu-doctor"  >
									<label for="footer-menu-doctor">Doctors</label>
								</div>
								<div>
									<input type="checkbox" name="page[footer][menu][]" value="blog" id="footer-menu-blog"  >
									<label for="footer-menu-blog">Blog</label>
								</div>
								<div>
									<input type="checkbox" name="page[footer][menu][]" value="about" id="footer-menu-about"  >
									<label for="footer-menu-about">About</label>
								</div>
								<div>
									<input type="checkbox" name="page[footer][menu][]" value="contact" id="footer-menu-contact" checked >
									<label for="footer-menu-contact">Contact</label>
								</div>
								<div>
									<input type="checkbox" name="page[footer][menu][]" value="gallery" id="footer-menu-gallery" checked >
									<label for="footer-menu-gallery">Gallery</label>
								</div>
								<div>
									<input type="checkbox" name="page[footer][menu][]" value="privacy-policy" id="footer-menu-pp" checked >
									<label for="footer-menu-pp">Privacy Policy</label>
								</div>
								<div>
									<input type="checkbox" name="page[footer][menu][]" value="terms-condition" id="footer-menu-tc" checked >
									<label for="footer-menu-tc">T & C</label>
								</div>
								<div>
									<input type="checkbox" name="page[footer][menu][]" value="faq" id="footer-menu-faq" checked >
									<label for="footer-menu-faq">FAQ</label>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="content-block content-block-horizantal">
					<div class="content-block-ttl">Footer Copyright Section</div>
					<div class="content-block-main">
						<div class="content-input">
							<label>Copyright Line : </label>
							<input name="page[footer][copyright]" value="2018 © Pepdev ALL RIGHTS RESERVED." placeholder="Footer Bottom line(Ex: 2017 © Taapli, ALL RIGHTS RESERVED.)">
							<input type="hidden" name="page_name" value="footer">
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