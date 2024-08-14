$(document).ready(function () {
    if ($('input[name="gender"]:checked').val() === "Male") {
        $(".pregnancy_status").attr("disabled", "disabled");
        $(".pregnancy_status").prop("checked", false);
    }

    $(".gender").on("click", function () {
        var selectedValue = $('input[name="gender"]:checked').val();
        // Disable all elements with the class 'pregnancy_status'
        $(".pregnancy_status").attr("disabled", "disabled");
        $(".pregnancy_status").prop("checked", false);

        // Conditionally enable based on selected value
        if (selectedValue === "Female" || selectedValue === "Unknown") {
            $(".pregnancy_status").removeAttr("disabled");
        }
    });

    $('.county').on('change', function() {
        var selectedCounty = $(this).val();
        console.log('selected county **** '+selectedCounty);
        var subCountySelect = $('.sub_county');
                
        $.ajax({
            url: '/api/subCounties/autocomplete.json', // Replace with your API endpoint
            type: 'GET',
            data: { county: selectedCounty },
            success: function(response) {
                console.log(response);
                // Assuming the response is an array of sub-counties 
                if (Array.isArray(response.codes)) {
                    $.each(response.codes, function(index, subCounty) {
                        console.log(subCounty);
                        subCountySelect.append(
                            $('<option></option>').val(subCounty.id).text(subCounty.name)
                        );
                    });
                }
            },
            error: function(xhr, status, error) {
                console.error('Error fetching sub-counties:', error);
                subCountySelect.append('<option value="">Error loading sub-counties</option>');
            }
        });

    });
 

    $("#SadrCountyId").combobox();

    if ($("#SadrReportType").val() == "Followup") {
        $("#SadrReporterEditForm :input").attr("readonly", "readonly");
        $(".editable :input").prop("disabled", false).attr("readonly", false);
        if ($("#SadrSeriousYes").is(":checked")) {
            console.log("Yes was selected initially");
            $("#SadrSeriousNo").prop("disabled", true); // disable the "No" option
            $("#clearButton").prop("disabled", true);
        }

        // Handle the scale for severity
        if ($("#SadrSeverityMild").is(":checked")) {
            $("#SadrSeverityMild").prop("disabled", false);
            $("#SadrSeverityModerate").prop("disabled", false);
            $("#SadrSeveritySevere").prop("disabled", false);
            $("#SadrSeverityFatal").prop("disabled", false);
            $("#SadrSeverityUnknown").prop("disabled", true);
        }
        if ($("#SadrSeverityModerate").is(":checked")) {
            $("#SadrSeverityMild").prop("disabled", true);
            $("#SadrSeverityModerate").prop("disabled", false);
            $("#SadrSeveritySevere").prop("disabled", false);
            $("#SadrSeverityFatal").prop("disabled", false);
            $("#SadrSeverityUnknown").prop("disabled", true);
        }
        if ($("#SadrSeveritySevere").is(":checked")) {
            $("#SadrSeverityMild").prop("disabled", true);
            $("#SadrSeverityModerate").prop("disabled", true);
            $("#SadrSeveritySevere").prop("disabled", false);
            $("#SadrSeverityFatal").prop("disabled", false);
            $("#SadrSeverityUnknown").prop("disabled", true);
        }
        if ($("#SadrSeverityFatal").is(":checked")) {
            $("#SadrSeverityMild").prop("disabled", true);
            $("#SadrSeverityModerate").prop("disabled", true);
            $("#SadrSeveritySevere").prop("disabled", true);
            $("#SadrSeverityFatal").prop("disabled", false);
            $("#SadrSeverityUnknown").prop("disabled", true);
        }
        if ($("#SadrSeverityUnknown").is(":checked")) {
            $("#SadrSeverityMild").prop("disabled", false);
            $("#SadrSeverityModerate").prop("disabled", false);
            $("#SadrSeveritySevere").prop("disabled", false);
            $("#SadrSeverityFatal").prop("disabled", false);
            $("#SadrSeverityUnknown").prop("disabled", false);
        }
    }

    //Person submitting
    $(".person-submit").on("change", function () {
        var pilih = $(this).val();
        if (pilih == "Yes") {
            $(".diff:input").prop("disabled", false);
        } else {
            $(".diff:input").val("");
            $(".diff:input").prop("disabled", true);
        }
    });
    if ($("#PersonSubmittingNo").is(":checked")) {
        $(".diff:input").prop("disabled", true);
    }

    $('.date-pick-field').datepicker({
        dateFormat: 'yy-mm-dd', // Adjust the format as per your requirement
        changeMonth: true,
        changeYear: true,
    });

    //If Male disable

    // $('input[name="data[Sadr][gender]"]').click(function () {
    //     if ($(this).val() == 'Male') {
    //         $('input[name="data[Sadr][pregnancy_status]"]').attr('disabled', this.checked).attr('checked', !this.checked);
    //     } else {
    //         $('input[name="data[Sadr][pregnancy_status]"]').attr('disabled', false);
    //     }
    // });
    // if ($('input[name="data[Sadr][gender]"][value="Male"]').is(':checked')) { $('input[name="data[Sadr][pregnancy_status]"]').attr('disabled', true).attr('checked', false); }

    //If not serious disable criteria
    // $('input[name="data[Sadr][serious]"]').click(function () {
    //     if ($(this).val() == 'No') {
    //         $('input[name="data[Sadr][serious_reason]"]').attr('disabled', this.checked).attr('checked', !this.checked);
    //         $('#serious_reason_clear').hide();
    //     } else {
    //         $('input[name="data[Sadr][serious_reason]"]').attr('disabled', false);
    //         $('#serious_reason_clear').show();
    //     }
    // });
    // if ($('input[name="data[Sadr][serious]"][value="No"]').is(':checked')) { $('input[name="data[Sadr][serious_reason]"]').attr('disabled', true).attr('checked', false); }

    $("#SadrReaction").autocomplete({
        source: "/meddras/autocomplete.json",
    });
    $("#SadrReportTitle").autocomplete({
        source: "/meddras/autocomplete.json",
    });
    var cache2 = {},
        lastXhr;
    $("#SadrInstitutionCode").autocomplete({
        source: function (request, response) {
            var term = request.term;
            if (term in cache2) {
                response(cache2[term]);
                return;
            }

            lastXhr = $.getJSON(
                "/facility_codes/autocomplete.json",
                request,
                function (data, status, xhr) {
                    cache2[term] = data;
                    if (xhr === lastXhr) {
                        response(data);
                    }
                }
            );
        },
        select: function (event, ui) {
            $("#SadrNameOfInstitution").val(ui.item.label);
            $("#SadrInstitutionCode").val(ui.item.value);
            $("#SadrAddress").val(ui.item.addr);
            $("#SadrInstitutionContact").val(ui.item.phone);
            return false;
        },
    });

    var cache3 = {},
        lastXhr;
    $("#SadrNameOfInstitution").autocomplete({
        source: function (request, response) {
            var term = request.term;
            if (term in cache3) {
                response(cache3[term]);
                return;
            }

            lastXhr = $.getJSON(
                "/facility_codes/autocomplete.json",
                request,
                function (data, status, xhr) {
                    cache3[term] = data;
                    if (xhr === lastXhr) {
                        response(data);
                    }
                }
            );
        },
        select: function (event, ui) {
            $("#SadrNameOfInstitution").val(ui.item.label);
            $("#SadrInstitutionCode").val(ui.item.value);
            $("#SadrAddress").val(ui.item.addr);
            $("#SadrInstitutionContact").val(ui.item.phone);
            return false;
        },
    });
    // get the id of Sadr_medicinal_product_
    $("#SadrMedicinalProduct").change(function () {
        $("#SadrHerbalProduct").attr("checked", false);
        $("#SadrCosmeceuticals").attr("checked", false);
        $("#SadrProductOther").attr("checked", false);
    });
    // get the Sadr_herbal_product_
    $("#SadrHerbalProduct").change(function () {
        $("#SadrMedicinalProduct").attr("checked", false);
        $("#SadrCosmeceuticals").attr("checked", false);
        $("#SadrProductOther").attr("checked", false);
    });
    // Sadr_cosmeceuticals_
    $("#SadrCosmeceuticals").change(function () {
        $("#SadrHerbalProduct").attr("checked", false);
        $("#SadrMedicinalProduct").attr("checked", false);
        $("#SadrProductOther").attr("checked", false);
    });
    // Sadr_product_other_
    $("#SadrProductOther").change(function () {
        $("#SadrHerbalProduct").attr("checked", false);
        $("#SadrCosmeceuticals").attr("checked", false);
        $("#SadrMedicinalProduct").attr("checked", false);
    });

    $("#SadrReactionReaction").autocomplete({
        source: "/meddras/autocomplete.json",
    });
});
