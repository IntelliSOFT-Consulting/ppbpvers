$(document).ready(function() {
	$('.date-pick-field').datepicker({
          minDate:"-100Y", maxDate:"0", 
          dateFormat:'dd-mm-yy'
    });

    //Person submitting
	$('.person-submit').on('change',function() {
        var pilih = $(this).val();
        if (pilih == 'Yes') {
        	$('.diff:input').prop('disabled',false);
        } else {
        	$('.diff:input').val('');
        	$('.diff:input').prop('disabled',true);
        }
    });
    if($("#TransfusionPersonSubmittingNo").is(':checked')){ $('.diff:input').prop('disabled',true); }
});