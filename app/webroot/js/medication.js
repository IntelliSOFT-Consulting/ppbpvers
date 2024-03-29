$(document).ready(function() {
	count = 0;
	
	$('.date-pick-expire').datepicker({
        minDate:"-100Y", maxDate:"+7Y", 
        dateFormat:'dd-mm-yy', 
        showButtonPanel:true, 
        changeMonth:true, 
        changeYear:true, 
        showAnim:'show'
  	});
	$( "#MedicationCountyId" ).combobox();

    $('.date-pick-field').datepicker({
        minDate:"-100Y", maxDate:"0", 
        dateFormat:'dd-mm-yy', 
        showButtonPanel:true, 
        changeMonth:true, 
        changeYear:true, 
        yearRange:'-100:+0',
        showAnim:'show'
    });

 	$( "#MedicationCountyId" ).combobox();

 	//If Male disable
    $('input[name="data[Medication][gender]"]').click(function(){ 
        if ($(this).val() == 'Male') {
            $('input[name="data[Medication][pregnancy_status]"]').attr('disabled', this.checked).attr('checked', !this.checked);
        } else {
            $('input[name="data[Medication][pregnancy_status]"]').attr('disabled', false);
        }
    });
    if($('input[name="data[Medication][gender]"][value="Male"]').is(':checked')){ $('input[name="data[Medication][pregnancy_status]"]').attr('disabled', true).attr('checked', false); }
    
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
    if($("#MedicationPersonSubmittingNo").is(':checked')){ $('.diff:input').prop('disabled',true); }

	var cache2 = {},	lastXhr;
	$( "#MedicationInstitutionCode" ).autocomplete({
		source: function( request, response ) {
			var term = request.term;
			if ( term in cache2 ) {
				response( cache2[ term ] );
				return;
			}

			lastXhr = $.getJSON( "/facility_codes/autocomplete.json", request, function( data, status, xhr ) {
				cache2[ term ] = data;
				if ( xhr === lastXhr ) {
					response( data );
				}
			});
		},
		select: function( event, ui ) {
			$( "#MedicationNameOfInstitution" ).val( ui.item.label );
			$( "#MedicationInstitutionCode" ).val( ui.item.value );
      		$( "#MedicationInstitutionContact" ).val( ui.item.phone );
			return false;
		}
	});

	var cache3 = {},	lastXhr;
	$( "#MedicationNameOfInstitution" ).autocomplete({
		source: function( request, response ) {
			var term = request.term;
			if ( term in cache3 ) {
				response( cache3[ term ] );
				return;
			}

			lastXhr = $.getJSON( "/facility_codes/autocomplete.json", request, function( data, status, xhr ) {
				cache3[ term ] = data;
				if ( xhr === lastXhr ) {
					response( data );
				}
			});
		},
		select: function( event, ui ) {
			$( "#MedicationNameOfInstitution" ).val( ui.item.label );
			$( "#MedicationInstitutionCode" ).val( ui.item.value );
			$( "#MedicationInstitutionContact" ).val( ui.item.phone );
			return false;
		}
	})
});
