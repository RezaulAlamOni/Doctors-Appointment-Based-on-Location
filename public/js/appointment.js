$('#date').hide();
$('#time_ap').hide();
$('#location').hide();
$('#ap_dpt').on('change', function () {
    $('.doctor_ap').remove();
    $('div#div-time').remove();
    $('#time_slot').hide();
    $('#location').hide();
    $('#date').hide();
    $('#ap').remove();
    var dpt_id = $('#ap_dpt').val();
    if ($.trim(dpt_id) != '') {
        // alert(dpt_id);
        $.post('include/appointment/doctorSelect.php',{dpt_id : dpt_id}, function (data) {
           $('#ap_doctor').after(data);

        });
    }
});
$('input[type="submit"]').attr('disabled','disabled');
$('#doctor_change').on('change', function () {
    $('#date').show();

});
$('#date').on('change', function () {
    $('div#div-time').remove();
    $('input#time_slot').remove();
    $('input#loc1').remove();
    $('#time_ap').show();
    $('#location').show();
    var doctor_id = $('#doctor_id').val();
    var date = $('input#date1').val();
    // alert(date);

    $.post('include/appointment/date.php',{doctor_id : doctor_id, date : date}, function (data) {
        // $('#ap_doctor').after(data);
        $('#ap_time').after(data);
    });
    $.post('include/appointment/loc.php',{doctor_id : doctor_id}, function (data) {
        // $('#ap_doctor').after(data);
        $('#doctor_loc').after(data);
    });

    if($('#time_slot').val != ''){
        $('input[type="submit"]').removeAttr('disabled');
    }

});
// add appointment
$('input#ap_sub').on('click', function () {

    var dpt_id      = $('#ap_dpt').val();
    var doctor_id   = $('#doctor_id').val();
    var date        = $('input#date1').val();
    var time        = $('input#time_slot').val();
    var address     = $('input#loc1').val();
    var patient_id  = $('input#id').val();

    // alert(address);
        $.post('include/appointment/addAppointment.php',
            {
                dpt_id      : dpt_id,
                doctor_id   : doctor_id,
                date        : date,
                time        : time,
                address     : address
            },function (data) {

            // $('h1#head').before(data);
            alert(data);


        });
});
