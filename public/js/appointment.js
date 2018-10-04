$('#date').hide();
$('#time_ap').hide();
$('#location').hide();
$('#ap_dpt').on('change', function () {
    $('.doctor_ap').remove();
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
    $('#time_slot').remove();
    $('#loc1').remove();
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
