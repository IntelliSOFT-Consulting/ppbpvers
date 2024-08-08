$(document).ready(function() {
 
	var dates2 = $('.date-pick-from, .date-pick-to').datepicker({
        minDate:"-100Y", maxDate:"-0D", 
        dateFormat:'dd-mm-yy', 
        showButtonPanel:true, 
        changeMonth:true, 
        changeYear:true, 
        showAnim:'show'
      });

      $('.date-pick-field').datepicker({
          minDate:"-100Y", 
          dateFormat:'dd-mm-yy'
      });
      
	//If SADR disable Poor-Quality Health Products and Technologies and vice versa
	$('.pqmp').hide();
	$('.sadr').hide();
    $('input[name="report_sadr"]').click(function(){ 
        if ($(this).val() == 'Side Effects') {
            $('.pqmp').hide();
            $('.sadr').show("slow");
        } else {
            $('.pqmp').show("slow");
            $('.sadr').hide();
        }
    });
    if($('input[name="report_sadr"][value="Side Effects"]').is(':checked')) { 
    	$('.pqmp').hide(); $('.sadr').show("slow"); 
    } 
    if($('input[name="report_sadr"][value="Poor Quality Medicine"]').is(':checked')) {
    	$('.sadr').hide(); $('.pqmp').show("slow");
    }
    $('input[name="reaction_on"]').click(function() {
        if ($(this).val() == 'Yes') {
          $('input[name="outcome"]:first').attr('disabled', this.checked).attr('checked', !this.checked);
        } else {
          $('input[name="outcome"]').attr('disabled', false);
        }
      }); 
      
    if($('input[name="reaction_on"][value="Yes"]').is(':checked')) {  
        $('input[name="outcome"]:first').attr('disabled', this.checked).attr('checked', !this.checked);
    } 
});
