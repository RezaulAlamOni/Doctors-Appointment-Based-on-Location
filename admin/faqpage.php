
<?php include('include/header.php'); ?>
<?php include('include/navbar.php'); ?>


<div class="page-container"><script>
	        $('#page').show();
	        $('#page-li>a').addClass('active');
        </script>
<!-- FAQ page start -->
<form action="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=page/action" method="post">
	<div class="page-hdr">
		<div class="row">
			<div class="col-4 page-name">
				<h1><i class="fa fa-question"></i>Faq Page</h1>
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
					<div class="content-block-ttl">FAQ</div>
					<div class="content-block-main faq-container">
						<input type="hidden" name="_token" value="413ccea5ca6b8ce59e0da0d74a15110a305317f742542dcc5f09cc85ddf4f25288776a66377494dbf3154612b21c29b49cdcd6ee235b8ea2b77355d52eef0188">
												<div class="content-input">
							<label>Question : </label>
							<input type="text" name="page[faq][0][q]" value="Lorem ipsum dolor sit amet, consectetur adipisicing elit?" placeholder="Enter Frequently asked question?">
							<div class="content-input">
								<label>Answer : </label>
								<textarea name="page[faq][0][a]" placeholder="Enter Frequently asked question's answer">1Lorem ipsum dolor sit amet, consectetur adipisicing elit?
1Lorem ipsum dolor sit amet, consectetur adipisicing elit?1Lorem ipsum dolor sit amet, consectetur adipisicing elit?</textarea>
							</div>
													</div>
												<div class="content-input">
							<label>Question : </label>
							<input type="text" name="page[faq][1][q]" value="Lorem ipsum dolor sit amet, consectetur adipisicing elit?" placeholder="Enter Frequently asked question?">
							<div class="content-input">
								<label>Answer : </label>
								<textarea name="page[faq][1][a]" placeholder="Enter Frequently asked question's answer">2Lorem ipsum dolor sit amet, consectetur adipisicing elit?2Lorem ipsum dolor sit amet, consectetur adipisicing elit?2Lorem ipsum dolor sit amet, consectetur adipisicing elit?2Lorem ipsum dolor sit amet, consectetur adipisicing elit?2Lorem ipsum dolor sit amet, consectetur adipisicing elit?</textarea>
							</div>
														<div class="faq-remove">x</div>
													</div>
												<div class="content-input">
							<label>Question : </label>
							<input type="text" name="page[faq][2][q]" value="Lorem ipsum dolor sit amet, consectetur adipisicing elit?" placeholder="Enter Frequently asked question?">
							<div class="content-input">
								<label>Answer : </label>
								<textarea name="page[faq][2][a]" placeholder="Enter Frequently asked question's answer">Lorem ipsum dolor sit amet, consectetur adipisicing elit?2Lorem ipsum dolor sit amet, consectetur adipisicing elit?2Lorem ipsum dolor sit amet, consectetur adipisicing elit?2Lorem ipsum dolor sit amet, consectetur adipisicing elit?2Lorem ipsum dolor sit amet, consectetur adipisicing elit?</textarea>
							</div>
														<div class="faq-remove">x</div>
													</div>
												<div class="content-input">
							<label>Question : </label>
							<input type="text" name="page[faq][4][q]" value="Lorem ipsum dolor sit amet, consectetur adipisicing elit?" placeholder="Enter Frequently asked question?">
							<div class="content-input">
								<label>Answer : </label>
								<textarea name="page[faq][4][a]" placeholder="Enter Frequently asked question's answer">Lorem ipsum dolor sit amet, consectetur adipisicing elit?2Lorem ipsum dolor sit amet, consectetur adipisicing elit?2Lorem ipsum dolor sit amet, consectetur adipisicing elit?2Lorem ipsum dolor sit amet, consectetur adipisicing elit?2Lorem ipsum dolor sit amet, consectetur adipisicing elit?Lorem ipsum dolor sit amet, consectetur adipisicing elit?2Lorem ipsum dolor sit amet, consectetur adipisicing elit?2Lorem ipsum dolor sit amet, consectetur adipisicing elit?2Lorem ipsum dolor sit amet, consectetur adipisicing elit?2Lorem ipsum dolor sit amet, consectetur adipisicing elit?</textarea>
							</div>
														<div class="faq-remove">x</div>
													</div>
												<div class="content-input">
							<label>Question : </label>
							<input type="text" name="page[faq][5][q]" value="Lorem ipsum dolor sit amet, consectetur adipisicing elit?" placeholder="Enter Frequently asked question?">
							<div class="content-input">
								<label>Answer : </label>
								<textarea name="page[faq][5][a]" placeholder="Enter Frequently asked question's answer">Lorem ipsum dolor sit amet, consectetur adipisicing elit?2Lorem ipsum dolor sit amet, consectetur adipisicing elit?2Lorem ipsum dolor sit amet, consectetur adipisicing elit?2Lorem ipsum dolor sit amet, consectetur adipisicing elit?2Lorem ipsum dolor sit amet, consectetur adipisicing elit?Lorem ipsum dolor sit amet, consectetur adipisicing elit?2Lorem ipsum dolor sit amet, consectetur adipisicing elit?2Lorem ipsum dolor sit amet, consectetur adipisicing elit?2Lorem ipsum dolor sit amet, consectetur adipisicing elit?2Lorem ipsum dolor sit amet, consectetur adipisicing elit?</textarea>
							</div>
														<div class="faq-remove">x</div>
													</div>
											</div>
					<div class="add-more">
						<a>Add More Faq's Question and Answer</a>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="content-block content-block-horizantal">
					<div class="content-block-ttl">SEO Section</div>
					<div class="content-block-main">
						<div class="content-input">
							<label><text>*</text>Meta Tag : </label>
							<input type="text" class="input-text" name="meta[tag]" value="Klinical health care - Appointment and patient management system - Faq Page" placeholder="Meta Tag Title" required>
						</div>
						<div class="content-input">
							<label>Meta Description : </label>
							<textarea name="meta[description]" class="textarea-small" placeholder="Meta Tag Description">Appointment and patient management system created to simplify  - Faq</textarea>
							<input type="hidden" name="page_name" value="faq">
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

<?php include('include/footer.php'); ?>