
 $(document).ready(function () {
    "use strict";

    $('.page-hdr').scrollToFixed({
        zIndex: 9
    });

    $('#logo').scrollToFixed({
        zIndex: 11,
        dontSetWidth : true
    });

    //********************************************
    //Data-Title Tool tip bootstrap **************
    //********************************************
    $('[data-toggle="tooltip"]').tooltip();

    var today, disabledDays, weekly_holiday;
    //National Holidays functions for Appointment Page
    function nationalDaysappointment(date) {
        var d = new Date(date),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear(),
        date_string, i;
        if (month.length < 2) {
            month = '0' + month;
        }
        if (day.length < 2) {
            day = '0' + day;
        }

        date_string = [year, month, day].join('-');
        for (i = 0; i < disabledDays.length; i++) {
            if (new Date(disabledDays[i]).toString() === new Date(date_string).toString()) {
                return [true, 'ui-state-highlight', ''];
            }
        }
        return [true];
    }
    //Weekly Holiday Function  for Appointment Page for Appointment Page
    function noWeekendsOrHolidaysAppointment(date) {
        var day = date.getDay(),
        noWeekend = [true];
        noWeekend = [(day != weekly_holiday['0'] && day != weekly_holiday['1'] && day != weekly_holiday['2'] && day != weekly_holiday['3'] && day != weekly_holiday['4'] && day != weekly_holiday['5'] && day != weekly_holiday['6'])];
        return noWeekend[0] ? nationalDaysappointment(date) : [true, 'ui-state-highlight', ''];
    }

    function getAppointmentSlot(date, doctor, department) {
        $('#appointment-slot>div').remove();
        var path = $('input[name=absolute-path]').val().concat('appointment/makeanappointment');
        $('.appointment-loading').show();
        $.ajax({
            type: 'post',
            url: path,
            data: {
                form_id: 1,
                date: date,
                department: department,
                doctor: doctor
            },
            error: function () {
                $('.appointment-loading').hide();
                $('#appointment-slot').append('<div class="appointment-no-slot">Error occured during connection.</div> ');
            },
            success: function (response) {
                if (response === 'No_Slot') {
                    $('#appointment-slot').append('<div class="appointment-no-slot">There are no slot available.</div> ');
                } else {
                    var i, status, count, time_slot = JSON.parse(response);
                    $('input[name=time]').removeAttr('name');
                    for (i = 0; i < time_slot.length; i += 1) {
                        if (time_slot[i].status > 0) {
                            status = 'appointment-red';
                            count = '<span>' + time_slot[i].status + '</span>';
                        } else {
                            status = '';
                            count = '';
                        }
                        $('#appointment-slot').append('<div>' +
                            '<input type="radio" name="time" id="appointment-time-' + i + '" value="' + time_slot[i].time + '" required>' +
                            '<label for="appointment-time-' + i + '" class="' + status + '">' + time_slot[i].time + '</label>' +
                            count +
                            '</div> ');
                    }
                }
            }
        });
    }
    //Create Datepicker 
    function createDate() {
        var date, doctor = $('.appointment-doctor').val();
        if (typeof $('.doctor-id-' + doctor).val() != "undefined") {
            disabledDays = JSON.parse(JSON.parse($('.doctor-id-' + doctor).val()).national).split(', ');
        }
        if (typeof $('.doctor-id-' + doctor).val() != "undefined") {
            weekly_holiday = JSON.parse(JSON.parse($('.doctor-id-' + doctor).val()).weekly);
        }

        $('#appointment-date').datepicker({
            dateFormat: 'yy-mm-dd',
            minDate: 0,
            maxDate: "+1M +10D",
            beforeShowDay: noWeekendsOrHolidaysAppointment,
            onSelect: function () {
                date = $.datepicker.formatDate("yy-mm-dd", $(this).datepicker('getDate'));
                getAppointmentSlot(date, $('.appointment-doctor').val(), $('#appointment-department').val());
            }
        });
    }

    function openSideNav() {
        $('body').addClass('sidenav-active');
        $('.sidenav').css('right', '0');
    }

    function closeSideNav() {
        $('.sidenav').css('right', '-60%');
        $('body').removeClass('sidenav-active');
    }

    //********************************************
    //Dashboard Calendar *************************
    //********************************************
    if ($('#calendar-appointment').val() == '1') {
        var appointment_events = JSON.parse($('#appointment-data').val());
        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'listDay,listWeek,month'
            },
            views: {
                listDay: {
                    buttonText: 'Today'
                },
                listWeek: {
                    buttonText: 'Week'
                }
            },
            defaultDate: moment().format("YYYY-MM-DD"),
            editable: true,
            droppable: false,
            eventLimit: true,
            events: appointment_events,
            eventClick: function (calEvent, jsEvent, view) {
                openSideNav();
                $('#apntinfo-id').val(calEvent.description.split(",")[0]);
                $('#apntinfo-name').val(calEvent.description.split(",")[1]);
                $('#apntinfo-email').val(calEvent.description.split(",")[2]);
                $('#apntinfo-mobile').val(calEvent.description.split(",")[3]);
                $('#appointment-date').val(calEvent.description.split(",")[4]);
                $('#apntinfo-time').val(calEvent.description.split(",")[5]);
                $('#apntinfo-doctor option[value=' + calEvent.description.split(",")[7] + ']').prop('selected', true);
                $('.appointment-department').val(calEvent.description.split(",")[8]);
                $('#apntinfo-status option[value=' + calEvent.description.split(",")[9] + ']').prop('selected', true);
                $(".apntinfo-edit").prop("href", "index.php?route=appointment/edit&id=" + calEvent.description.split(",")[0]);
                createDate();
            },
            eventDrop: function (calEvent, delta, revertFunc) {
                var drop_date = new moment(calEvent.start.format('YYYY-MM-DD')).format('YYYY-MM-DD'),
                today_date = new moment().format('YYYY-MM-DD');
                if (drop_date < today_date) {
                    alert('Error: Selected Date is less than today\'s date!');
                    revertFunc();
                    return false;
                }
                $('#apntinfo-id').val(calEvent.description.split(",")[0]);
                $('#apntinfo-name').val(calEvent.description.split(",")[1]);
                $('#apntinfo-email').val(calEvent.description.split(",")[2]);
                $('#apntinfo-mobile').val(calEvent.description.split(",")[3]);
                $('#appointment-date').val(calEvent.start.format('YYYY-MM-DD'));
                $('#apntinfo-time').val(calEvent.description.split(",")[5]);
                $('#apntinfo-doctor option[value=' + calEvent.description.split(",")[7] + ']').prop('selected', true);
                $('.appointment-department').val(calEvent.description.split(",")[8]);
                $('#apntinfo-status option[value=' + calEvent.description.split(",")[9] + ']').prop('selected', true);
                $(".apntinfo-edit").prop("href", "index.php?route=appointment/edit&id=" + calEvent.description.split(",")[0]);
                createDate();
                getAppointmentSlot(calEvent.start.format('YYYY-MM-DD'), calEvent.description.split(",")[7], calEvent.description.split(",")[8]);
                openSideNav();
            },
            dayClick: function (calDate, jsEvent, view) {
             var select_date = new moment(calDate.format('YYYY-MM-DD')).format('YYYY-MM-DD'),
             today_date = new moment().format('YYYY-MM-DD');
             if (select_date < today_date) {
                alert('Error: Selected Date is less than today\'s date!');
                return false;
            }
            openSideNav();
        }
    });
    }

    $('.sidenav-close, .sidenav-background').click(function () {
        closeSideNav();
        $('.apntinfo-block input').val('');
        $('#appointment-slot>div').remove();
        if ($('input[name=time]').length <= 0){
            $('.apntinfo-time').append('<input type="text" name="time" id="apntinfo-time" placeholder="Time" readonly required>')
        }
        $('.apntinfo-block select option:selected').removeAttr('selected');
        $('.apntinfo-edit').prop("href", "");
    });

    $('#create-apnt-user').click(function() {
        openSideNav();
    })

    //Appoint Doctor change on edit page
    $('#apntinfo-doctor').change(function () {
        var id = $(this).val();
        $('#appointment-date').datepicker('destroy');
        $('#appointment-slot>div, #apntinfo-time').remove();
        if (id == '') {
            return false;
        }
        if (typeof $('.doctor-id-' + id).val() != "undefined") {
            $('input[name=department]').val(JSON.parse(JSON.parse($('.doctor-id-' + id).val())['department_id']));
            createDate();
        } else {
            return false;
        }
    });

    //********************************************
    //Add Appointment ****************************
    //********************************************
    //Doctor change on appointment Add page
    $('#appointment-doctor').selectmenu({
        change: function (event, data) {
            var id = $(this).val();
            $('#appointment-date').datepicker('destroy');
            $('#appointment-slot>div').remove();
            if (id == '') {
                return false;
            }
            if (typeof $('.doctor-id-' + id).val() != "undefined") {
                $('input[name=department]').val(JSON.parse($('.doctor-id-' + id).val()).department_id);
                $('.appointment-department').val(JSON.parse($('.doctor-id-' + id).val()).department);
                createDate();
            } else {
                return false;
            }
        }
    });

    //********************************************
    //Delete Item From List **********************
    //********************************************
    $('.table-delete').click(function () {
        $('.delete-card-button input').val($(this).find('input').val());
        $("#delete-card").modal({
            keyboard: true
        });
    });

    //********************************************
    //Image  Uplaod ******************************
    //********************************************
    $('.image-upload').click(function () {
        $(this).parent().addClass('image-upload-progress');
        $("#media-upload").on('show.bs.modal', function () {
            var path = $('input[name=absolute-upload-path]').val();
            JSON.parse($('input[name=media_all]').val()).forEach(function (element) {
                $('#media-upload .media-all').append(
                    '<div class="media-all-block">' +
                    '<div>' +
                    '<a data-toggle="tooltip" data-placement="top" title="Remove">' +
                    '<i class="fa fa-trash-o"></i>' +
                    '</a>' +
                    '<img src="' + path.concat(element) + '" title="' + element + '">' +
                    '<input type="radio" name="media-select" id="media-' + element + '" value="' + element + '">' +
                    '<label for="media-' + element + '" title="' + element + '">' + element + '</label>' +
                    '</div></div>');
            });
        }).modal('show');
        $('input[name=media_all]').val('[]');
    });
    $("#media-upload").on('hidden.bs.modal', function () {
        $(this).parent().removeClass('image-upload-progress');
    });

    Dropzone.autoDiscover = false;
    $("#media-dropzone").dropzone({
        addRemoveLinks: true,
        acceptedFiles: 'image/*',
        dictDefaultMessage: 'Drop files here or click here to upload',
        success: function (file, response) {
            $('.media-all').prepend('<div class="media-all-block"><div>' +
                '<a class="data-title" data-title="Remove"><i class="fa fa-trash-o"></i></a>' +
                '<img src="../public/uploads/' + response + '" title="' + response + '">' +
                '<input type="radio" name="media-select" id="media-' + response + '" value="' + response + '">' +
                '<label for="media-' + response + '"><span></span> ' + response + '</label>' +
                '</div></div>');
            this.removeFile(file);
        }
    });

    $('.media-all').on('click', '.media-all-block div img', function () {
        $('.image-upload-progress .saved-picture').append('<img src="../public/uploads/' + $(this).attr('title') + '" alt="">');
        $('.image-upload-progress .saved-picture input[type=hidden]').val($(this).attr('title'));
        $('.image-upload-progress .saved-picture').show();
        $('.image-upload-progress .image-upload').hide();
        $('.image-upload-progress .saved-picture-delete').show();
        $('.content-input').removeClass('image-upload-progress');
        $('#media-upload').modal('hide');
    });

    //Image Delete 
    $('.media-all').on('click', '.media-all-block div a', function () {
        var ele = $(this),
        image_name = ele.siblings('input').val(),
        path = $('input[name=absolute-path]').val().concat('upload/delete');
        $.ajax({
            method: "POST",
            url: path,
            data: {
                page: 'media',
                name: image_name
            },
            error: function () {
                alert('Sorry Try Again!');
            },
            success: function (response) {
                if (response == '1') {
                    ele.parents('.media-all-block').remove();
                } else {
                    alert('Wanrning: File could not be deleted!');
                }
            }
        });
    });

    $('.saved-picture-delete').click(function () {
        $(this).siblings('.saved-picture').find('img').remove();
        $(this).siblings('.saved-picture').find('input').val('');
        $(this).siblings('.saved-picture').hide();
        $(this).siblings('.image-upload').show();
        $(this).hide();
    });

    //Gallery Image Uplaod 
    $("#gallery-dropzone").dropzone({
        acceptedFiles: 'image/*',
        dictDefaultMessage: 'Drop files here or click here to upload',
        success: function(file, response) {
            window.location.reload();
        }
    });
    //Gallery Image Delete 
    $('.gallery-picture a').click(function(){
        var image_name = $(this).prev('input').val(),
        path = $('input[name=absolute-path]').val().concat('upload/delete');
        $.ajax({
            method: "POST",
            url: path,
            data: { page: 'galler', name: image_name },
            error: function() {
                alert('Sorry Try Again!');
            },
            success: function(data) {
                window.location.reload();
            }
        });
    });

    function removeReport(id, name) {
        $.ajax({
            type: 'POST',
            url: 'index.php?route=report/removeReport',
            data: {id: id, name: name},
            error: function() {
                alert('Server Error - File could not be deleted.');
            },
            success: function(data) {
                alert('File Deleted Succefully.');
            }
        });
    }

    Dropzone.autoDiscover = false;
    $("#report-upload").dropzone({
        addRemoveLinks: true,
        acceptedFiles: "image/*,application/pdf",
        maxFilesize: 50000,
        dictDefaultMessage: 'Drop files here or click here to upload <br /><br /> Only Image or PDF',
        init: function() {
            this.on("sending", function(file, xhr, formData){
                formData.append("id", $('input[name=id]').val());
                formData.append("email", $('input[name=email]').val());
            }),
            this.on("success", function(file, xhr){
                $('.report-all').append('<input type="hidden" class="report-name" name="report[]" value="'+ file.xhr.response +'" id="'+ file.xhr.response.split('.')[0] +'">');
            })
        },
        renameFile: function (file) {
            return file.name.split('.')[0] + new Date().valueOf() + "." + file.name.split('.').pop();
        },
        removedfile: function(file) {
            var name = file.upload.filename,
            input_file = 'input#'+ file.upload.filename.split('.')[0];
            $(input_file).remove();
            var id = $('input[name=id]').val();
            removeReport(id, name);
            var _ref;
            return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
        }
    });

    $('body').on('click', '.report-delete', function () {
        var ele = $(this).parent('.report-image'),
        id = $('input[name=id]').val(),
        name = ele.find('input[name=report_name]').val();
        removeReport(id, name);
        ele.remove();
    });

    $('body').on('click', '.patient-report-delete', function () {
        var ele = $(this).parent('.report-image'),
        id = ele.find('.report-appointment').val(),
        name = ele.find('input[name=report_name]').val();
        removeReport(id, name);
        ele.remove();
    });

    $('#reports-modal').on('hide.bs.modal', function (e) {
        if ($('.dz-preview').length) {
            location.reload();
        }
    })

    //********************************************
    //Appointment Slot Calendar ******************
    //********************************************
    //Holiday List for Doctor Page
    var other_holiday;
    if ($('#other-holiday-list').val() != "" && typeof $('#other-holiday-list').val() != "undefined") {
        other_holiday = $('#other-holiday-list').val().split(', ');
    } else {
        other_holiday = ["2000-12-25"];
    }

    function noWeekendsOrHolidays(date) {
        var doctor_holiday;
        if (typeof $('#weekly-holiday').val() != "undefined" && $('#weekly-holiday').val() != "") {
            doctor_holiday = $('#weekly-holiday').val().split(',');
        } else {
            doctor_holiday = '';
        }
        var day = date.getDay(),
        noWeekend = [(day != doctor_holiday['0'] && day != doctor_holiday['1'] && day != doctor_holiday['2'] && day != doctor_holiday['3'] && day != doctor_holiday['4'] && day != doctor_holiday['5'] && day != doctor_holiday['6'])];
        return noWeekend;
    }

    $('#other-holiday').multiDatesPicker({
        minDate: 0,
        dateFormat: 'yy-mm-dd',
        addDates: other_holiday,
        numberOfMonths: [2, 3],
        defaultDate: today,
        altField: '#altField',
        beforeShowDay: noWeekendsOrHolidays
    });

    //********************************************
    //Admin Panel Left Side Menu *****************
    //********************************************
    //Left side Sub Menu 
    $('.menu-dropdown').click(function () {
        var ele = $(this);
        if (ele.siblings('.sub-menu').css('display') === 'none') {
            $('.sub-menu').slideUp();
            $('#menu-menu ul a').removeClass('menu-arrow-rotate');
            ele.addClass('menu-arrow-rotate');
            ele.siblings('.sub-menu').slideDown(200);
        } else {
            ele.removeClass('menu-arrow-rotate');
            $('.sub-menu').slideUp(200);
        }
    });


    //********************************************
    //Faq Page  **********************************
    //********************************************
    //Add More on FAQ
    $('.add-more a').click(function () {
        var count = $('.faq-container .content-input:nth-last-child(1) input').attr('name').split('[')[2];
        count = parseInt(count.split(']')[0]) + 1;
        $(this).parent('.add-more').prev('.content-block-main').append('<div class="content-input">' +
            '<label>Question</label>' +
            '<input type="text" name="page[faq][' + count + '][q]" placeholder="Enter Frequently asked question?">' +
            '<div class="content-input">' +
            '<label>Answer</label>' +
            '<textarea name="page[faq][' + count + '][a]" placeholder="Enter Frequently asked question answer"></textarea>' +
            '</div>' +
            '<div class="faq-remove">x</div>' +
            '</div>');
    });

    //Remove Faq
    $('body').on('click', '.faq-remove', function () {
        $(this).parent('.content-input').remove();
    });

    // Image Live Preview
    $('.adm-add-img p').click(function () {
        $('.adm-add-img img').remove();
        $('.adm-add-img').hide();
        $('#picture_container input[type=hidden]').val("");
        $('.picture').show();
    });


    //********************************************
    //Jaquery Ui Datepicker **********************
    //********************************************

    //User profile date picker
    $('#user-dob').datepicker({
        dateFormat: 'yy-mm-dd',
        changeMonth: true,
        changeYear: true,
        yearRange: "-100:+0"
    });

    //Filter date picker
    $('.filter-date').datepicker({
        dateFormat: 'dd M yy'
    });

    //Filter date picker
    $('.date').datepicker({
        dateFormat: 'dd-mm-yy'
    });


    //********************************************
    //Jquery Ui Select list *********************
    //********************************************
    $('.select-list').selectmenu();

    //********************************************
    //Listing Table ******************************
    //********************************************

    var datatable = $('.datatable-table').DataTable({
        "aLengthMenu": [[10, 25, 50, 75, -1], [10, 25, 50, 75, "All"]],
        "iDisplayLength": 25,
        "responsive": true
    });


    $('.request-table').DataTable({
        "ordering": false,
        "aLengthMenu": [[10, 25, 50, 75, -1], [10, 25, 50, 75, "All"]],
        "iDisplayLength": 25
    });


    //********************************************
    //Form Validation on Blur ********************
    //********************************************
    $('.input-text').blur(function () {
        if ($(this).val().trim().length < 3) {
            $(this).parents('.content-input').find('p').show();
            $(this).parents('.content-input').addClass('content-input-error');
        } else {
            $(this).parents('.content-input').find('p').hide();
            $(this).parents('.content-input').removeClass('content-input-error');
        }
    });

    $('.input-time').blur(function () {
        if ($(this).val().trim().length < 2) {
            $(this).parents('.content-input').find('p').show();
            $(this).parents('.content-input').addClass('content-input-error');
        } else {
            $(this).parents('.content-input').find('p').hide();
            $(this).parents('.content-input').removeClass('content-input-error');
        }
    });

    $('.input-number').blur(function () {
        if ($(this).val().trim().length < 1) {
            $(this).parents('.content-input').find('p').show();
            $(this).parents('.content-input').addClass('content-input-error');
        } else {
            $(this).parents('.content-input').find('p').hide();
            $(this).parents('.content-input').removeClass('content-input-error');
        }
    });

    $('.textarea-input').blur(function () {
        if ($(this).val().trim().length < 10) {
            $(this).parents('.content-input').find('p').show();
            $(this).parents('.content-input').addClass('content-input-error');
        } else {
            $(this).parents('.content-input').find('p').hide();
            $(this).parents('.content-input').removeClass('content-input-error');
        }
    });

    $('.input-email').blur(function () {
        var mail_filter = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
        if (!mail_filter.test($(this).val())) {
            $(this).parents('.content-input').find('p').show();
            $(this).parents('.content-input').addClass('content-input-error');
        } else {
            $(this).parents('.content-input').find('p').hide();
            $(this).parents('.content-input').removeClass('content-input-error');
        }
    });

    $('.input-mobile').blur(function () {
        var mob_filter = /^[0-9]*$/;
        if (!mob_filter.test($(this).val())) {
            $(this).parents('.content-input').find('p').show();
            $(this).parents('.content-input').addClass('content-input-error');
        } else if ($(this).val().trim().length < 5) {
            $(this).parents('.content-input').find('p').show();
            $(this).parents('.content-input').addClass('content-input-error');
        } else {
            $(this).parents('.content-input').find('p').hide();
            $(this).parents('.content-input').removeClass('content-input-error');
        }
    });

    $('.input-password').blur(function () {
        if ($(this).val().trim().length < 6) {
            $(this).parents('.content-input').find('p').show();
            $(this).parents('.content-input').addClass('content-input-error');
        } else {
            $(this).parents('.content-input').find('p').hide();
            $(this).parents('.content-input').removeClass('content-input-error');
        }
    });
});