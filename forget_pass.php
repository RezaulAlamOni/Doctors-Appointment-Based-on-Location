
<?php include('include/header.php');?>
<?php include('include/nav.php');?>

    <!-- Header End --><!-- Start Page Title Section -->
<div class="page-ttl" style="height: 150px">
	<div class="layer-stretch">
		<div class="page-ttl-container">
			<div class="page-ttl-name">
				<h1><i class="fa fa-key"> </i> Forgot Password</h1>
			</div>
		</div>
	</div>
</div><!-- End Page Title Section -->
<!-- Start Forgot Password Section -->
<div id="login-page">
	<div class="layer-stretch">
		<div class="layer-wrapper">
			<div class="layer-container">
				<form class="form-container" action="include/function.php" method="post" enctype="multipart/form-data">
                    <div class="login-condition">Enter the Email address associated with your account and we will mail you a Reset Link.</div>
					<input type="hidden" name="_token" value="15276e55e6cdfa6911f440f75f64501dc97cc6f4a19102dddb4c47f0c4dd1523ad639943996afef209d6a358056f3b3389a9bcb175b7413ef3547589673a2b7d">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
						<i class="fa fa-envelope-o"></i>
						<input class="mdl-textfield__input" type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="forgot-email">
						<label class="mdl-textfield__label" for="forgot-email">Email Address <em> *</em></label>
						<span class="mdl-textfield__error">Please Enter Valid Email Address!</span>
					</div>
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon form-bot-check">
					<i class="fa fa-question"></i>
						<input class="mdl-textfield__input" type="number" name="bot-check" id="forgot-bot">
						<label class="mdl-textfield__label" for="forgot-bot">What is 8 plus 4 = <em> *</em></label>
						<span class="mdl-textfield__error">Please Enter Correct Value!</span>
					</div>
					<div class="form-submit">
						<button type="submit" name="forgot" id="forgot-submit" class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect mdl-button--raised mdl-button--raised button button-primary button-pill">Send Reset Link</button>
					</div>s
					<div class="login-link">
						 <span class="paragraph-small">Already have an account?</span>
                        <a href="login.html?route=login">Login</a>
					</div>	
				</form>
			</div>
		</div>
	</div>
</div><!-- End Forgot Password Section -->
<?php include('include/footer.php');?>