<?php include('include/header.php');?>
<?php $page_name = "<i class='fa fa-phone'> </i> Contact"; ?>
<?php include('include/nav.php');?>

    <!-- Header End --><!-- Start Page Title Section -->
<div class="page-ttl" style="height: 120px">
    <div class="layer-stretch">
        <div class="page-ttl-container">
            <div class="page-ttl-name">
                <h1><i class="fa fa-phone" style="color: #890054"></i> Contact Us</h1>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title Section -->

<!-- Start Contact Detail Section -->
<div class="layer-stretch animated-wrapper">
    <div class="layer-wrapper">

        <div class="row text-center">
             <div class="col-md-3 contact-info-block animated animated-up">
                <div class="contact-info-inner">
                    <i class="fa fa-plus-square-o"></i>
                    <span>APPOINTMENT</span>
                    <p class="paragraph-medium paragraph-black">+ 01 1122 333 333</p>
                    <p>sales@pepdev.com </p>
                </div>
            </div>
             <div class="col-md-3 contact-info-block animated animated-up">
                <div class="contact-info-inner">
                    <i class="fa fa-phone"></i>
                    <span>Call Us</span>
                    <p class="paragraph-medium paragraph-black">+ 01 1122 333 333</p>
                    <p>+ 01 1122 333 333 </p>
                </div>
            </div>
            <div class="col-md-3 contact-info-block animated animated-up">
                <div class="contact-info-inner">
                    <i class="fa fa-envelope"></i>
                    <span>Email Us</span>
                    <p class="paragraph-medium paragraph-black">sales@pepdev.com</p>
                    <p>support@pepdev.com </p>
                </div>
            </div>
            <div class="col-md-3 contact-info-block animated animated-up">
                <div class="contact-info-inner">
                    <i class="fa fa-map-marker"></i>
                    <span>Location</span>
                    <p class="paragraph-medium paragraph-black">Street name, City, Country</p>
                    <p> </p>
                </div>
            </div>
                </div>
    </div>
</div>
<!-- End Contact Detail Section -->
<!-- Start Request Section -->
<div id="contact-form">
    <div class="layer-stretch">
        <div class="layer-wrapper">
            <div class="layer-ttl">
                <h3>Make a Request</h3>
            </div>
            <div class="layer-container">
                <form class="contact-form row" action="http://pepdev.com/theme-preview/klinikal/index.php?route=contact" method="post">
                    <input type="hidden" name="_token" value="15276e55e6cdfa6911f440f75f64501dc97cc6f4a19102dddb4c47f0c4dd1523ad639943996afef209d6a358056f3b3389a9bcb175b7413ef3547589673a2b7d">
                    <div class="col-md-4">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                            <i class="fa fa-user"></i>
                            <input id="contact-name" class="mdl-textfield__input" type="text" name="name" pattern="[A-Z,a-z, ]*" value="">
                            <label class="mdl-textfield__label" for="contact-name">Name</label>
                            <span class="mdl-textfield__error">Please Enter Valid Name!</span>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                            <i class="fa fa-envelope-o"></i>
                            <input class="mdl-textfield__input" type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="contact-email">
                            <label class="mdl-textfield__label" for="contact-email">Email Address</label>
                            <span class="mdl-textfield__error">Please Enter Valid Email Address!</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                            <i class="fa fa-phone"></i>
                            <input class="mdl-textfield__input" type="text" name="mobile" pattern="[0-9]*" id="contact-mobile">
                            <label class="mdl-textfield__label" for="contact-mobile">Mobile Number</label>
                            <span class="mdl-textfield__error">Please Enter Valid Mobile Number!</span>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                            <i class="fa fa-rocket"></i>
                            <input class="mdl-textfield__input" type="text" name="subject" id="contact-subject">
                            <label class="mdl-textfield__label" for="contact-subject">Subject</label>
                            <span class="mdl-textfield__error">Please Enter Subject Related to Your Query!</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                            <i class="fa fa-paper-plane"></i>
                            <textarea class="mdl-textfield__input" type="text" name="message" id="contact-message"></textarea>
                            <label class="mdl-textfield__label" for="contact-message">Message</label>
                            <span class="mdl-textfield__error">Please Enter Your Query!</span>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <button id="contact-submit" class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect mdl-button--raised mdl-button--raised button button-primary button-pill" name="make-request">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Request Section -->

<!-- Start Google Map Section -->
<div id="map" class="animated-wrapper">
    <div class="map-wrapper">
        <div id="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.2959607076423!2d90.35950081457226!3d23.80807258456102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0d8dc805301%3A0x62a9945413e7a60d!2sWanderlust+Cafe!5e0!3m2!1sen!2sbd!4v1537553692334" width="1350" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
    <div class="map-address animated animated-up">
        <div class="map-icon">
            <i class="fa fa-map-marker"></i>
        </div>
        <div class="map-address-ttl">Our Location</div>
        <div class="paragraph-medium paragraph-black">Mirpur-2, Dhaka, Bangladesh</div>
    </div>
</div>
<!-- End Google Map Section -->
<!-- Map Block Script -->
<!--<script>-->
<!--    var map;-->
<!---->
<!--    function initMap() {-->
<!--        var loc = {-->
<!--           lat: 18.938936,-->
<!--           lng: 72.824116       };-->
<!--       var isDraggable = !('ontouchstart' in document.documentElement);-->
<!---->
<!--       map = new google.maps.Map(document.getElementById('map-container'), {-->
<!--        center: loc,-->
<!--                zoom: 14, // Map Zoom-->
<!--                draggable: isDraggable,-->
<!--                scrollwheel: false-->
<!--            });-->
<!---->
<!--       var marker = new google.maps.Marker({-->
<!--        position: loc,-->
<!--        map: map-->
<!--    });-->
<!--   }-->
<!--</script>-->
<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB46LtJIWXW_IX_GZVvrR9LCNixR7FvG8A&amp;callback=initMap"></script>-->


<!-- Start Make an Appointment Modal -->
<?php include('include/make_appointment.php');?>
<!-- End Make an Appointment Section -->
    <?php include('include/footer.php');?>
<script>

    $('#page>a').addClass('active');
</script>