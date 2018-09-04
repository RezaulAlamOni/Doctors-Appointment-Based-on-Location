
 (function ($) {
    "use strict";
    //Color Picker
    $('.color').scrollToFixed({
        marginTop: 200
    });

    // $('.color-handle').click(function () {
    //     if ($('.color-wrapper').css('left') === '0px') {
    //         $('.color-wrapper').css('left', '-160px');
    //     } else {
    //         $('.color-wrapper').css('left', '0');
    //     }
    // });

    //*************************************************
    //On DOM Load  ************************************
    //*************************************************
    $(window).load(function () {
        $('.slider-wrapper').flexslider({
            animation: "fade",
            animationLoop: true,
            pauseOnHover: true,
            keyboard: true,
            controlNav: false
        });
        $('.slider-height').removeClass();
    });

    $('.theme-flexslider').flexslider({
        animation: "slide",
        animationLoop: true,
        pauseOnHover: true
    });


    $(".theme-owlslider").owlCarousel({
        items: 1,
        dots: true
    });

    //*************************************************
    //Menu  *******************************************
    //*************************************************
    $('#hdr-wrapper').scrollToFixed();

     $('.hdr-center-menu, .header-transparent-menu, #header-1').scrollToFixed({
        preFixed: function () {
            $('#header-1, .hdr-center-menu, .header-transparent-menu').addClass('hdr-fixed');
        },
        postFixed: function () {
            $('#header-1, .hdr-center-menu, .header-transparent-menu').removeClass('hdr-fixed');
        }
    });

    $('#menu-bar').click(function () {
        $('body').css('overflow', 'hidden');
        $('.menu').css('left', '0');
        $('.menu').show();
    });

    $('.mobile-menu-close').click(function () {
        $('body').css('overflow', 'visible');
        $('.menu').css('left', '-100%');
        $('.menu').hide();
    });

    $(window).resize(function () {
        if ($(window).width() > 800) {
            $('body').css('overflow', 'visible');
            //$('.menu').css('left', '-100%');
            //$('.menu').hide();
        }
    });

    //*************************************************
    //Accordion ***************************************
    //*************************************************
    $('.theme-accordion:nth-child(1) .theme-accordion-bdy').slideDown();
    $('.theme-accordion:nth-child(1) .theme-accordion-control .fa').addClass('fa-minus');
    $('.theme-accordion-hdr').click(function() {
        $('.theme-accordion-bdy').slideUp();
        $('.theme-accordion-control .fa').removeClass('fa-minus');
        if ($(this).parents('.theme-accordion').find('.theme-accordion-bdy').css('display') == "none") {
            $(this).find('.theme-accordion-control .fa').addClass('fa-minus');
            $(this).parents('.theme-accordion').find('.theme-accordion-bdy').slideDown();
        } else {
            $(this).find('.theme-accordion-control .fa').removeClass('fa-minus');
            $(this).parents('.theme-accordion').find('.theme-accordion-bdy').slideUp();
        }
    });

    //*************************************************
    //Home Page ***************************************
    //************************************************* 

    //Home Doctor Slider
    $("#hm-doctor-slider").owlCarousel({
        center: true,
        autoplay: true,
        items: 3,
        margin: 10,
        loop: true,
        smartSpeed: 1000,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 2,
                nav: false
            },
            992: {
                items: 3,
                nav: false
            }
        }
    });

    //Testimonial Slider
    $("#testimonial-slider").owlCarousel({
        items: 1,
        dots: true
    });

    //Animation on scroll
    $('.animated-wrapper').css('opacity', 0).waypoint(function (direction) {
        $(this.element).find('.animated-up').addClass('fadeInUp');
        $(this.element).find('.animated-right').addClass('fadeInRight');
        $(this.element).find('.animated-down').addClass('fadeInDown');
        $(this.element).animate({
            opacity: 1
        });
    }, {
        offset: '50%'
    });

    //*************************************************
    //Appointment Pop Up ******************************
    //************************************************* 

    //Get Today Date and time
    var now = new Date(),
    month = (now.getMonth() + 1),
    day = now.getDate(),
    hour = now.getHours(),
    min = now.getMinutes(),
    date = '',
    today, disabledDays, weekly_holiday;
    if (month < 10) {
        month = "0" + month;
    }
    if (day < 10) {
        day = "0" + day;
    }
    today = now.getFullYear() + '-' + month + '-' + day;
    //Make Appointment
    $('#appointment-date').val(today);

    $('#slider-appointment-btn, #appointment-now, .myappointment-make-appointment a, .tt-block button').click(function () {
        $('#appointment').modal('show');
    });

    //I Know Doctor for Appointment
    function getDoctor() {
        var doctor = [];
        $('.appointment-invisible input[type=hidden]').each(function () {
            var dataExtract = [],
            data = JSON.parse($(this).val());
            dataExtract = {
                label: 'Dr. ' + data.name,
                value: data.id + ',' + data.department
            };
            doctor.push(dataExtract);
        });
        if (doctor.length !== 0) {
            return doctor;
        } else {
            return ['No result Found!'];
        }
    }

    //National Holidays functions
    function nationalDays(date) {
        var d = new Date(date),
        month = (d.getMonth() + 1).toString(),
        day = d.getDate().toString(),
        year = d.getFullYear(),
        date_string, i;
        if (month.length < 2) {
            month = '0' + month;
        }
        if (day.length < 2) {
            day = '0' + day;
        }
        date_string = [year, month, day].join('-');
        for (i = 0; i < disabledDays.length; i += 1) {
            if (new Date(disabledDays[i]).toString() === new Date(date_string).toString()) {
                return [false];
            }
        }
        return [true];
    }

    //Weekly Holiday Function
    function noWeekendsOrHolidays(date) {
        var day = date.getDay(),
        noWeekend = [(day.toString() !== weekly_holiday['0'] && day.toString() !== weekly_holiday['1'] && day.toString() !== weekly_holiday['2'] && day.toString() !== weekly_holiday['3'] && day.toString() !== weekly_holiday['4'] && day.toString() !== weekly_holiday['5'] && day.toString() !== weekly_holiday['6'])];
        return noWeekend[0] ? nationalDays(date) : noWeekend;
    }

    //create datepicker
    function makeDatepicker(value) {
        if (typeof $('.doctor-id-' + value[0]).val() !== "undefined") {
            disabledDays = JSON.parse(JSON.parse($('.doctor-id-' + value[0]).val()).national).split(', ');
        } else {
            disabledDays = [];
        }
        if (typeof $('.doctor-id-' + value[0]).val() !== "undefined") {
            weekly_holiday = JSON.parse(JSON.parse($('.doctor-id-' + value[0]).val()).weekly);
        } else {
            weekly_holiday = [];
        }
        $('#appointment-date').datepicker({
            dateFormat: 'yy-mm-dd',
            minDate: 0,
            maxDate: "+1M +10D",
            beforeShowDay: noWeekendsOrHolidays,
            onSelect: function () {
                if (typeof (date) !== "undefined" && date === $.datepicker.formatDate("yy-mm-dd", $(this).datepicker('getDate'))) {} else {
                    $('.appointment-slot>div').remove();
                    $('#appointment-continue').css('visibility', 'hidden');
                    date = $.datepicker.formatDate("yy-mm-dd", $(this).datepicker('getDate'));
                    var doctor = value[0],
                    department = value[1],
                    token = $('input[name=appointment_token]').val();
                    $('.appointment-part-1').hide();
                    $('.appointment-loading').show();
                    $.ajax({
                        type: 'post',
                        url: 'index.php?route=patient/makeanappointment',
                        data: {
                            form_id: 1,
                            date: date,
                            doctor: doctor,
                            token: token
                        },
                        error: function () {
                            $('.appointment-loading').hide();
                            $('.appointment-part-1').show();
                            $('.appointment-slot').append('<div id="appointment-no-slot">Error occured during connection.</div> ');
                        },
                        success: function (data) {
                            $('.appointment-loading').hide();
                            $('.appointment-part-1').show();
                            $('.appointment-slot>p').show();
                            var time_slot = [],
                            i, status = '';
                            if (data === 'No_Slot') {
                                $('.appointment-slot').append('<div id="appointment-no-slot">No slot available for Date - ' + date + '</div> ');
                            } else {
                                time_slot = JSON.parse(data);
                                for (i = 0; i < time_slot.length; i += 1) {
                                    if (time_slot[i].status === 1) {
                                        status = 'disabled';
                                    } else {
                                        status = '';
                                    }
                                    $('.appointment-slot').append(
                                        '<div><input type="radio" name="time-slot" id="appointment-time-' + i + '" value="' + time_slot[i].time + '" ' + status + ' >' +
                                        '<label for="appointment-time-' + i + '">' + time_slot[i].time + '</label></div> ');
                                }
                            }
                        }
                    });
                }
            }
        });
    }

    //Display Date According to Appointment Data 
    $('#appointment-department').change(function () {
        var id = $(this).val();
        date = '';
        $('#appointment-no-slot, .appointment-slot>div').remove();
        $('#appointment-continue').css('visibility', 'hidden');
        $('.appointment-slot>p, #appointment-doctor-wrapper, #appointment-date-wrapper, #search-doctor, .or-label').hide();
        $('#appointment-doctor').find('option').not(':first').remove();
        $("#appointment-date").datepicker('destroy');
        $('#appointment-search-doctor').val('');
        if (id === "") {
            $('#search-doctor, .or-label').fadeIn();
            $('.appointment-option-doctor').hide();
        } else {
            $('#search-doctor, .or-label').hide();
            $('#appointment-doctor-wrapper').show();
            $('.appointment-option-doctor').show();
            $('.department-id-' + id).each(function () {
                var data = JSON.parse($(this).val());
                $('#appointment-doctor').append('<option value="' + data.id + '">Dr. ' + data.name + '</option>');
            });
        }
    });

    $('#appointment-doctor').change(function () {
        var id = $(this).val(),
        department, value;
        date = '';
        $('#appointment-no-slot, .appointment-slot>div').remove();
        $('#appointment-date').val('');
        $('#appointment-continue').css('visibility', 'hidden');
        $('.appointment-slot>p, #appointment-date-wrapper').hide();
        $("#appointment-date").datepicker('destroy');
        if (id === "") {
            $('#appointment-date').val('');
        } else {
            $("#appointment-date-wrapper").show();
            department = $("#appointment-department").val();
            value = [id, department];
            makeDatepicker(value);
        }
    });

    $('.appointment-option-department').click(function () {
        $("#appointment-date").datepicker('destroy');
        $('.appointment-slot>div').remove();
        $('#appointment-date').val('');
        $('.or-label').slideDown(500);
        $('#appointment-continue').css('visibility', 'hidden');
        $(".appointment-slot>p, #appointment-date-wrapper").hide();
        $('.appointment-option-department').hide();
        $("#appointment-department").parent('.appointment-input').slideDown(500);
        $('#search-doctor input[type=hidden]').remove();
        date = '';
    });

    $('.appointment-option-doctor').click(function () {
        date = '';
        $('#appointment-no-slot, .appointment-slot>div').remove();
        $('#appointment-continue').css('visibility', 'hidden');
        $('.appointment-slot>p, #appointment-doctor-wrapper, #appointment-date-wrapper, #search-doctor, .or-label').hide();
        $('#appointment-doctor').find('option').not(':first').remove();
        $("#appointment-date").datepicker('destroy');
        $('#appointment-search-doctor').val('');
        $('#search-doctor, .or-label').fadeIn();
        $('.appointment-option-doctor').hide();
    });

    //I Know Doctor for Appointment
    $('input#appointment-search-doctor').keyup(function () {
        var doctor_name = $('input#appointment-search-doctor').val();
        if (doctor_name.length <= 7) {
            $('#appointment-date').val('');
            $("#appointment-date").datepicker('destroy');
            $('#appointment-continue').css('visibility', 'hidden');
            $('.appointment-slot>div').remove();
            $(".appointment-slot>p, #appointment-date-wrapper").hide();
            $('#search-doctor input[type=hidden]').remove();
            date = '';
        }
        if (doctor_name.length < 1) {
            $('#appointment-date').val('');
            $('.or-label').slideDown(500);
            $('#appointment-continue').css('visibility', 'hidden');
            $('.appointment-option-department').hide();
            $("#appointment-department").parent('.appointment-input').slideDown(500);
            $('#search-doctor input[type=hidden]').remove();
            date = '';
        }
    });

    $('#appointment-search-doctor').autocomplete({
        source: getDoctor(),
        select: function (event, ui) {
            event.preventDefault();
            var name = ui.item.label,
            value = ui.item.value.split(',');
            date = '';
            $('#appointment-department').parent('.appointment-input').slideUp(300);
            $('.or-label').slideUp(300);
            $('#appointment-search-doctor').val(name);
            if (name === "") {
                $('#appointment-date').datepicker('destroy');
                $('#appointment-date-wrapper').hide();
                $('.appointment-option-department').hide();
            } else {
                $('.appointment-option-department').show();
                $('#search-doctor').prepend('<input type="hidden" name="search-doctor" value="' + value['0'] + '">');
                $('#appointment-date-wrapper').show();
                makeDatepicker(value);
                return false;
            }
        },
        focus: function (event, ui) {
            return false;
        }
    });

    //Acitvate continue button on all data fill up 
    $('body').on('change', 'input[name=time-slot]:radio', function () {
        var time = $('input[name=time-slot]:checked').val();
        if (time) {
            $('#appointment-continue').css('visibility', 'visible');
            $('#appointment-continue').removeAttr('disabled');
        }
    });

    //Appointment Continue
    $('body').on('click', '#appointment-continue', function () {
        var department_id, doctor_id, doctor_name, department_name, doctor_object;
        if (typeof $('#appointment-doctor').val() !== 'undefined' && $('#appointment-doctor').val() !== "") {
            department_name = $('#appointment-department option:selected').text().trim();
            doctor_name = $('#appointment-doctor option:selected').text().trim();
            department_id = $('#appointment-department option:selected').val();
            doctor_id = $('#appointment-doctor option:selected').val();
        } else {
            doctor_id = $('#search-doctor input[name=search-doctor]').val();
            doctor_object = JSON.parse($('.doctor-id-' + doctor_id).val());
            doctor_name = doctor_object.name;
            department_id = doctor_object.department;
            department_name = $('#appointment-department option[value=' + department_id + ']').text().trim();
        }
        $('.appointment-enterd-value').append('<input type="hidden" name="doc-id-final" value="' + doctor_id + '">' +
            '<input type="hidden" name="dep-id-final" value="' + department_id + '">');
        $('.appointment-enterd-value').append('<div class="appointment-enterd-value-department"><i class="fa fa-hospital-o"></i><p>' + department_name + '</p></div>' +
            '<div class="appointment-enterd-value-doctor"><i class="fa fa-calendar-plus-o"></i><p>' + $("#appointment-date").val().trim() + '</p></div>' +
            '<div class="appointment-enterd-value-date"><i class="fa fa-user-md"></i><p>' + doctor_name + '</p></div>' +
            '<div class="appointment-enterd-value-slot"><i class="fa fa-hourglass-o"></i><p>' + $('input[name=time-slot]:checked').val().trim() + '</p></div>');
        $('.appointment-part-1').hide();
        $('.appointment-hdr-back').show();
        $('.appointment-part-2').show();
    });

    //Appointment Back
    $('.appointment-hdr-back').click(function () {
        $('.appointment-enterd-value>div, .appointment-enterd-value input').remove();
        $('.appointment-part-2').hide();
        $('.appointment-part-1').show();
        $('.appointment-hdr-back').hide();
    });

    //Appointment Finish
    $('#appointment-submit').click(function () {
        var clck_invld = 0,
        mail_filter = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/,
        mob_filter = /^[0-9]*$/,
        date_filter = /^(0?[1-9]|1[012])[\/\-](0?[1-9]|[12][0-9]|3[01])[\/\-]\d{4}$/;
        if ($('#appointment-mobile').val().trim().length < 5) {
            $('#appointment-mobile').parent('.appointment-input').addClass('is-invalid');
            $('#appointment-mobile').parent('.appointment-input').addClass('is-dirty');
            clck_invld = 1;
            $('#appointment-mobile').focus();
        }
        if (!mail_filter.test($('#appointment-email').val())) {
            $('#appointment-email').parent('.appointment-input').addClass('is-invalid');
            $('#appointment-email').parent('.appointment-input').addClass('is-dirty');
            clck_invld = 1;
            $('#appointment-email').focus();
        }
        if ($('#appointment-name').val().trim().length < 2) {
            $('#appointment-name').parent('.appointment-input').addClass('is-invalid');
            $('#appointment-name').parent('.appointment-input').addClass('is-dirty');
            clck_invld = 1;
            $('#appointment-name').focus();
        }
        if (clck_invld === 1) {
            return false;
        } else {
            $('.appointment-enterd-value>div').remove();
            $('.appointment-part-1').hide();
            $('.appointment-part-2').hide();
            $('.appointment-hdr-back').hide();
            $('.appointment-loading').show();
            var name = $('#appointment-name').val(),
            email = $('#appointment-email').val(),
            mobile = $('#appointment-mobile').val(),
            date = $('#appointment-date').val(),
            department = $('.appointment-enterd-value input[name=dep-id-final]').val(),
            doctor = $('.appointment-enterd-value input[name=doc-id-final]').val(),
            time = $('input[name=time-slot]:checked').val(),
            token = $('input[name=appointment_token]').val();
            $.ajax({
                type: 'post',
                url: 'index.php?route=patient/appoitmentsubmit',
                data: {
                    form_id: 2,
                    name: name,
                    email: email,
                    mobile: mobile,
                    date: date,
                    department: department,
                    doctor: doctor,
                    time: time,
                    token: token
                },
                error: function () {
                    $('.appointment-part-2').prepend('<div id="appointment-no-slot" class="paragraph-medium paragraph-black">Error occurred during connection!</div> ');
                    $('.appointment-part-2 .appointment-input, .appointment-part-2 .appointment-button').hide();
                    $('.appointment-loading').hide();
                    $('.appointment-part-2').show();
                },
                success: function (response) {
                    if (response === "1") {
                        $('#appointment-success-name').text(name);
                        $('#appointment-success-date').text(date);
                        $('#appointment-success-time').text(time);
                        $('.appointment-loading').hide();
                        $('.appointment-success').show();
                    } else if (response == 'No_Slot') {
                        $('.appointment-slot>div').remove();
                        $('#appointment-no-slot').remove();
                        $('.appointment-part-1').prepend('<div id="appointment-no-slot" class="paragraph-medium paragraph-black">Sorry! Your time slot has been booked by someone else. Please select another time slot!</div> ');
                        $('.appointment-part-2').hide();
                        $('.appointment-loading').hide();
                        $('.appointment-part-1').show();
                    } else {
                        $('.appointment-slot>div').remove();
                        $('.appointment-part-1').prepend('<div id="appointment-no-slot" class="paragraph-medium paragraph-black">Sorry! Your time slot has been booked by someone else. Please select another time slot!</div> ');
                        $('.appointment-part-2').hide();
                        $('.appointment-loading').hide();
                        $('.appointment-part-1').show();
                        var time_slot = [],
                        i, status = '';
                        if (response === 'No_Slot') {
                            $('.appointment-slot').append('<div id="appointment-no-slot">No slot available for Date - ' + date + '</div> ');
                        } else {
                            time_slot = JSON.parse(response);
                            for (i = 0; i < time_slot.length; i += 1) {
                                if (time_slot[i].status === 1) {
                                    status = 'disabled';
                                } else {
                                    status = '';
                                }
                                $('.appointment-slot').append(
                                    '<div><input type="radio" name="time-slot" id="appointment-time-' + i + '" value="' + time_slot[i].time + '" ' + status + ' >' +
                                    '<label for="appointment-time-' + i + '">' + time_slot[i].time + '</label></div> ');
                            }
                        }
                    }
                }
            });
        }
    });

    //*************************************************
    //My search / Filter ******************************
    //*************************************************
    //Services Search
    $('input#search-services').keyup(function () {
        var filter = $('#search-services').val().toUpperCase();
        $('.theme-block .theme-block-data').each(function (index) {
            var ele = $(this), a = ele.find('h4 a').text().trim().toUpperCase();
            if (a.indexOf(filter) > -1) {
                ele.parents('.theme-block').parent('div').show();
            } else {
                ele.parents('.theme-block').parent('div').hide();
            }
        });
    });

    //Doctor Search
    $('input#search-doctors').keyup(function () {
        var filter = $('#search-doctors').val().toUpperCase();
        $('.theme-block .doctor-name').each(function (index) {
            var ele = $(this), a = ele.find('h4 a').text().trim().toUpperCase();
            if (a.indexOf(filter) > -1) {
                ele.parents('.theme-block').parent('div').show();
            } else {
                ele.parents('.theme-block').parent('div').hide();
            }
        });
    });

    //blog-1 Search 
    $('input#search-blog').keyup(function () {
        var filter = $('#search-blog').val().toUpperCase();
        $('.hm-blog-block .hm-blog-ttl').each(function (index) {
            var a = $(this).find('h4 a').text().trim().toUpperCase();
            if (a.indexOf(filter) > -1) {
                $(this).parents('.hm-blog-block').parent('div').show();
            } else {
                $(this).parents('.hm-blog-block').parent('div').hide();
            }
        });
    });

    //blog-2 Search
    $('input#search-blog').keyup(function () {
        var filter = $('#search-blog').val().toUpperCase();
        $('.theme-block .blog-card-ttl').each(function (index) {
            var ele = $(this), a = ele.find('h3 a').text().trim().toUpperCase();
            if (a.indexOf(filter) > -1) {
                ele.parents('.theme-block').parent('div').show();
            } else {
                ele.parents('.theme-block').parent('div').hide();
            }
        });
    });


    //*************************************************
    //My Profile Page popup ***************************
    //*************************************************
    $('#profile-dob').datepicker({
        dateFormat: 'yy-mm-dd',
        changeMonth: true,
        changeYear: true,
        yearRange: "-100:+0"
    });


    //*************************************************
    //Data Table **************************************
    //*************************************************
    var datatable = $('.datatable-table').DataTable({
        "aLengthMenu": [[10, 25, 50, 75, -1], [10, 25, 50, 75, "All"]],
        "iDisplayLength": 20,
        "order": [],
        responsive: true
    });


    //*************************************************
    //My Appointment Page popup ***********************
    //************************************************* 
    $('.myappointment-view p').click(function () {
        var ele = $(this); 
        $('#myappointment-popup').on('show.bs.modal', function (e) {
            $('.myappointment-popup-ttl').text(ele.parents('.myappointment-block').find('.myappointment-id span').text().trim());
            $('.myappointment-popup-doctor').text(ele.parents('.myappointment-block').find('.myappointment-doctor span').text().trim());
            $('.myappointment-popup-name').text(ele.parents('.myappointment-block').find('.myappointment-name span').text().trim());
            $('.myappointment-popup-date').text(ele.parents('.myappointment-block').find('.myappointment-date span').text().trim());
            $('.myappointment-popup-time').text(ele.parents('.myappointment-block').find('.myappointment-time span').text().trim());
            $('.myappointment-popup-status').text(ele.parents('.myappointment-block').find('.myappointment-status span').text().trim());
            $('.myappointment-popup-department').text(ele.parents('.myappointment-block').find('.myappointment-department').val().trim());
            $('.myappointment-popup-note').text(ele.parents('.myappointment-block').find('.myappointment-note').val().trim());
            $('.myappointment-popup-status').addClass(ele.parents('.myappointment-block').find('.myappointment-status span').attr('class').split(' ')['2']);
        }).modal('show');
    });


    //*************************************************
    //My Feedback Page popup **************************
    //************************************************* 
    $('.myfeedback-view p').click(function () {
        var ele = $(this); 
        $('#myfeedback-popup').on('show.bs.modal', function (e) {
            $('.myfeedback-popup-ttl').text(ele.parents('.myfeedback-block').find('.myfeedback-name span').text());
            $('.myfeedback-popup-date').text(ele.parents('.myfeedback-block').find('.myfeedback-date span').text());
            $('.myfeedback-popup-subject').text(ele.parents('.myfeedback-block').find('.myfeedback-subject span').text());
            $('.myfeedback-popup-message').text(ele.parents('.myfeedback-block').find('.myfeedback-message').val());
            $('.myfeedback-popup-remark').text(ele.parents('.myfeedback-block').find('.myfeedback-remark').val());        
        }).modal('show');
    });

    //*************************************************
    //Blog Page  **************************************
    //*************************************************

    //Blog Read More Tag
    $(".blog-list-post p span").text(function (index, currentText) {
        return currentText.substr(0, 300);
    });

    //*************************************************
    //Service List Page  ******************************
    //*************************************************

    //Service Read More Tag
    $(".service-description span, .service-description span").text(function (index, currentText) {
        return currentText.substr(0, 330);
    });

    //*************************************************
    //Gallery List Page  ******************************
    //*************************************************
    $('.gallery-block').magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery: {
            enabled: true
        }
    });

    //*************************************************
    //Input Form Validation ***************************
    //************************************************* 
    //Contact Form Validation
    $('#contact-submit').click(function () {
        var clck_invld = 0,
        mail_filter = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/,
        mob_filter = /^[0-9]*$/;
        if ($('#contact-subject').val().trim().length < 3) {
            $('#contact-subject').parent('.contact-input').addClass('is-invalid');
            $('#contact-subject').parent('.contact-input').addClass('is-dirty');
            clck_invld = 1;
            $('#contact-subject').focus();
        }
        if ($('#contact-mobile').val().trim().length < 4) {
            $('#contact-mobile').parent('.contact-input').addClass('is-invalid');
            $('#contact-mobile').parent('.contact-input').addClass('is-dirty');
            clck_invld = 1;
            $('#contact-mobile').focus();
        }
        if (!mail_filter.test($('#contact-email').val())) {
            $('#contact-email').parent('.contact-input').addClass('is-invalid');
            $('#contact-email').parent('.contact-input').addClass('is-dirty');
            clck_invld = 1;
            $('#contact-email').focus();
        }
        if ($('#contact-name').val().trim().length < 3) {
            $('#contact-name').parent('.contact-input').addClass('is-invalid');
            $('#contact-name').parent('.contact-input').addClass('is-dirty');
            clck_invld = 1;
            $('#contact-name').focus();
        }
        if (clck_invld === 1) {
            return false;
        }
    });

    //Login Form Validation
    $('#login-submit').click(function () {
        var clck_invld = 0,
        mail_filter = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/,
        bot_number, bot_number_array, total;
        if ($('#login-bot').val().trim().length < 1) {
            $('#login-bot').parent('.form-input').addClass('is-invalid');
            $('#login-bot').parent('.form-input').addClass('is-dirty');
            clck_invld = 1;
            $('#login-bot').focus();
        } else if ($('#login-bot').val().trim().length > 0) {
            bot_number = $('#login-bot+label').text();
            bot_number_array = bot_number.match(/[\d\.]+/g);
            total = 0;
            if (bot_number_array.length > 0) {
                $.each(bot_number_array, function (key, element) {
                    total += +element;
                });
                if ($('#login-bot').val().trim() !== total.toString()) {
                    $('#login-bot').parent('.form-input').addClass('is-invalid');
                    $('#login-bot').parent('.form-input').addClass('is-dirty');
                    clck_invld = 1;
                    $('#login-bot').focus();
                }
            } else {
                $('#login-bot').parent('.form-input').addClass('is-invalid');
                $('#login-bot').parent('.form-input').addClass('is-dirty');
                clck_invld = 1;
                $('#login-bot').focus();
            }
        }

        if ($('#login-password').val().trim().length < 4) {
            $('#login-password').parent('.form-input').addClass('is-invalid');
            $('#login-password').parent('.form-input').addClass('is-dirty');
            clck_invld = 1;
            $('#login-password').focus();
        }
        if (!mail_filter.test($('#login-email').val())) {
            $('#login-email').parent('.form-input').addClass('is-invalid');
            $('#login-email').parent('.form-input').addClass('is-dirty');
            clck_invld = 1;
            $('#login-email').focus();
        }
        if (clck_invld === 1) {
            return false;
        }
    });

    //Register Form Validation
    $('#register-submit').click(function () {
        var clck_invld = 0,
        mail_filter = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/,
        mob_filter = /^[0-9]*$/,
        bot_number, bot_number_array, total;
        if ($('#register-bot').val().trim().length < 1) {
            $('#register-bot').parent('.form-input').addClass('is-invalid');
            $('#register-bot').parent('.form-input').addClass('is-dirty');
            clck_invld = 1;
            $('#register-bot').focus();
        } else if ($('#register-bot').val().trim().length > 0) {
            bot_number = $('#register-bot+label').text();
            bot_number_array = bot_number.match(/[\d\.]+/g);
            total = 0;
            if (bot_number_array.length > 0) {
                $.each(bot_number_array, function (key, element) {
                    total += +element;
                });
                if ($('#register-bot').val().trim() !== total.toString()) {
                    $('#register-bot').parent('.form-input').addClass('is-invalid');
                    $('#register-bot').parent('.form-input').addClass('is-dirty');
                    clck_invld = 1;
                    $('#register-bot').focus();
                }
            } else {
                $('#register-bot').parent('.form-input').addClass('is-invalid');
                $('#register-bot').parent('.form-input').addClass('is-dirty');
                clck_invld = 1;
                $('#register-bot').focus();
            }
        }

        if (!($('#register-confirm-password').val().trim() == $('#register-password').val().trim())) {
            $('#register-confirm-password').parent('.form-input').addClass('is-invalid');
            $('#register-confirm-password').parent('.form-input').addClass('is-dirty');
            clck_invld = 1;
            $('#register-confirm-password').focus();
        }
        if ($('#register-confirm-password').val().trim().length < 6) {
            $('#register-confirm-password').parent('.form-input').addClass('is-invalid');
            $('#register-confirm-password').parent('.form-input').addClass('is-dirty');
            clck_invld = 1;
            $('#register-confirm-password').focus();
        }
        if ($('#register-password').val().trim().length < 6) {
            $('#register-password').parent('.form-input').addClass('is-invalid');
            $('#register-password').parent('.form-input').addClass('is-dirty');
            clck_invld = 1;
            $('#register-password').focus();
        }
        if (!mob_filter.test($('#register-mobile').val())) {
            $('#register-mobile').parent('.form-input').addClass('is-invalid');
            $('#register-mobile').parent('.form-input').addClass('is-dirty');
            clck_invld = 1;
            $('#register-mobile').focus();
        }
        if ($('#register-mobile').val().trim().length < 4) {
            $('#register-mobile').parent('.form-input').addClass('is-invalid');
            $('#register-mobile').parent('.form-input').addClass('is-dirty');
            clck_invld = 1;
            $('#register-mobile').focus();
        }
        if (!mail_filter.test($('#register-email').val())) {
            $('#register-email').parent('.form-input').addClass('is-invalid');
            $('#register-email').parent('.form-input').addClass('is-dirty');
            clck_invld = 1;
            $('#register-email').focus();
        }
        if ($('#register-last-name').val().trim().length < 2) {
            $('#register-last-name').parent('.form-input').addClass('is-invalid');
            $('#register-last-name').parent('.form-input').addClass('is-dirty');
            clck_invld = 1;
            $('#register-last-name').focus();
        }
        if ($('#register-first-name').val().trim().length < 2) {
            $('#register-first-name').parent('.form-input').addClass('is-invalid');
            $('#register-first-name').parent('.form-input').addClass('is-dirty');
            clck_invld = 1;
            $('#register-first-name').focus();
        }
        if (clck_invld === 1) {
            return false;
        }
    });

    //Forgot Password Form Validation
    $('#forgot-submit').click(function () {
        var clck_invld = 0,
        mail_filter = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/,
        bot_number, bot_number_array, total;
        if ($('#forgot-bot').val().trim().length < 1) {
            $('#forgot-bot').parent('.form-input').addClass('is-invalid');
            $('#forgot-bot').parent('.form-input').addClass('is-dirty');
            clck_invld = 1;
            $('#forgot-bot').focus();
        } else if ($('#forgot-bot').val().trim().length > 0) {
            bot_number = $('#forgot-bot+label').text();
            bot_number_array = bot_number.match(/[\d\.]+/g);
            total = 0;
            if (bot_number_array.length > 0) {
                $.each(bot_number_array, function (key, element) {
                    total += +element;
                });
                if ($('#forgot-bot').val().trim() !== total.toString()) {
                    $('#forgot-bot').parent('.form-input').addClass('is-invalid');
                    $('#forgot-bot').parent('.form-input').addClass('is-dirty');
                    clck_invld = 1;
                    $('#forgot-bot').focus();
                }
            } else {
                $('#forgot-bot').parent('.form-input').addClass('is-invalid');
                $('#forgot-bot').parent('.form-input').addClass('is-dirty');
                clck_invld = 1;
                $('#forgot-bot').focus();
            }
        }

        if (!mail_filter.test($('#forgot-email').val())) {
            $('#forgot-email').parent('.form-input').addClass('is-invalid');
            $('#forgot-email').parent('.form-input').addClass('is-dirty');
            clck_invld = 1;
            $('#forgot-email').focus();
        }
        if (clck_invld === 1) {
            return false;
        }
    });

    //Profile Change Password Form Validation
    $('#change-password-submit').click(function () {
        var clck_invld = 0;
        if (!($('#change-password-confirm').val().trim() == $('#change-password-new').val().trim())) {
            $('#change-password-confirm').parent('.form-input').addClass('is-invalid');
            $('#change-password-confirm').parent('.form-input').addClass('is-dirty');
            clck_invld = 1;
            $('#change-password-confirm').focus();
        }
        if ($('#change-password-confirm').val().trim().length < 6) {
            $('#change-password-confirm').parent('.form-input').addClass('is-invalid');
            $('#change-password-confirm').parent('.form-input').addClass('is-dirty');
            clck_invld = 1;
            $('#register-confirm-password').focus();
        }
        if ($('#change-password-new').val().trim().length < 6) {
            $('#change-password-new').parent('.form-input').addClass('is-invalid');
            $('#change-password-new').parent('.form-input').addClass('is-dirty');
            clck_invld = 1;
            $('#change-password-new').focus();
        }
        if ($('#change-password-old').val().trim().length < 4) {
            $('#change-password-old').parent('.form-input').addClass('is-invalid');
            $('#change-password-old').parent('.form-input').addClass('is-dirty');
            clck_invld = 1;
            $('#change-password-old').focus();
        }
        if (clck_invld === 1) {
            return false;
        }
    });

    //Change Password Form Validation
    $('#changepassword-submit').click(function () {
        var clck_invld = 0;
        if ($('#login-bot').val().trim().length < 1) {
            $('#login-bot').parent('.form-input').addClass('is-invalid');
            $('#login-bot').parent('.form-input').addClass('is-dirty');
            clck_invld = 1;
            $('#login-bot').focus();
        } else if ($('#login-bot').val().trim().length > 0) {
            var bot_number = $('#login-bot+label').text(),
            bot_number_array = bot_number.match(/[\d\.]+/g),
            total = 0;
            if (bot_number_array.length > 0) {
                $.each(bot_number_array, function (key, element) {
                    total += +element;
                });
                if ($('#login-bot').val().trim() !== total.toString()) {
                    $('#login-bot').parent('.form-input').addClass('is-invalid');
                    $('#login-bot').parent('.form-input').addClass('is-dirty');
                    clck_invld = 1;
                    $('#login-bot').focus();
                }
            } else {
                $('#login-bot').parent('.form-input').addClass('is-invalid');
                $('#login-bot').parent('.form-input').addClass('is-dirty');
                clck_invld = 1;
                $('#login-bot').focus();
            }
        }
        if (!($('#changepassword-confirm').val().trim() == $('#changepassword').val().trim())) {
            $('#changepassword-confirm').parent('.form-input').addClass('is-invalid');
            $('#changepassword-confirm').parent('.form-input').addClass('is-dirty');
            clck_invld = 1;
            $('#changepassword-confirm').focus();
        }
        if ($('#changepassword-confirm').val().trim().length < 6) {
            $('#changepassword-confirm').parent('.form-input').addClass('is-invalid');
            $('#changepassword-confirm').parent('.form-input').addClass('is-dirty');
            clck_invld = 1;
            $('#changepassword-confirm').focus();
        }
        if ($('#changepassword').val().trim().length < 6) {
            $('#changepassword').parent('.form-input').addClass('is-invalid');
            $('#changepassword').parent('.form-input').addClass('is-dirty');
            clck_invld = 1;
            $('#changepassword-new').focus();
        }
        if (clck_invld === 1) {
            return false;
        }
    });

    //Edit Profile Submit Validation 
    $('#edit-profile-submit').click(function () {
        var clck_invld = 0,
        mail_filter = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/,
        mob_filter = /^[0-9]*$/;
        if (!mob_filter.test($('#profile-mobile').val())) {
            $('#profile-mobile').parent('.form-input').addClass('is-invalid');
            $('#profile-mobile').parent('.form-input').addClass('is-dirty');
            clck_invld = 1;
            $('#profile-mobile').focus();
        }
        if ($('#profile-mobile').val().trim().length < 4) {
            $('#profile-mobile').parent('.form-input').addClass('is-invalid');
            $('#profile-mobile').parent('.form-input').addClass('is-dirty');
            clck_invld = 1;
            $('#profile-mobile').focus();
        }
        if (!mail_filter.test($('#profile-email').val())) {
            $('#profile-email').parent('.form-input').addClass('is-invalid');
            $('#profile-email').parent('.form-input').addClass('is-dirty');
            clck_invld = 1;
            $('#profile-email').focus();
        }
        if ($('#profile-last-name').val().trim().length < 2) {
            $('#profile-last-name').parent('.form-input').addClass('is-invalid');
            $('#profile-last-name').parent('.form-input').addClass('is-dirty');
            clck_invld = 1;
            $('#profile-last-name').focus();
        }
        if ($('#profile-first-name').val().trim().length < 2) {
            $('#profile-first-name').parent('.form-input').addClass('is-invalid');
            $('#profile-first-name').parent('.form-input').addClass('is-dirty');
            clck_invld = 1;
            $('#profile-first-name').focus();
        }
        if (clck_invld === 1) {
            return false;
        }
    });

    //Subscribe Form Validation
    $('#subscribe-submit').click(function () {
        var clck_invld = 0,
        mail_filter = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
        if (!mail_filter.test($('#subscribe-email').val())) {
            $('#subscribe-email').parent('.form-input').addClass('is-invalid');
            $('#subscribe-email').parent('.form-input').addClass('is-dirty');
            clck_invld = 1;
            $('#subscribe-email').focus();
        }
        if (clck_invld === 1) {
            return false;
        }
    });
})(jQuery);