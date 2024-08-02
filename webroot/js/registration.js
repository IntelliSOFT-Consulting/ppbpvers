$(function () {
    //If not serious disable criteria
    
    
    $(".user_user_type").click(function () {
        $(".ribidi").toggle();
    });
    if (!$(".user_user_type").is(":checked")) {
        $(".ribidi").hide();
    }

    var cache2 = {},
        lastXhr;
    $(".user_institution_code").autocomplete({
        source: function (request, response) {
            var term = request.term;
            if (term in cache2) {
                response(cache2[term]);
                return;
            }

            lastXhr = $.getJSON(
                "/api/facilityCodes/autocomplete.json",
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
            $(".user_name_of_institution").val(ui.item.label);
            $(".user_institution_code").val(ui.item.value);
            $(".user_institution_address").val(ui.item.addr);
            $(".user_institution_contact").val(ui.item.phone);
            return false;
        },
        minLength: 2  
    });

    var cache3 = {},
        lastXhr;
    $(".user_name_of_institution").autocomplete({
        source: function (request, response) {
            var term = request.term;
            if (term in cache3) {
                response(cache3[term]);
                return;
            }

            lastXhr = $.getJSON(
                "/api/facilityCodes/autocomplete.json",
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
            $(".user_name_of_institution").val(ui.item.label);
            $(".user_institution_code").val(ui.item.value);
            $(".user_institution_address").val(ui.item.addr);
            $(".user_institution_contact").val(ui.item.phone);
            return false;
        },
        minLength: 2  
    });

    var cache4 = {},
        lastXhr;
    $("#UserSponsorEmail").autocomplete({
        source: function (request, response) {
            var term = request.term;
            if (term in cache4) {
                response(cache4[term]);
                return;
            }

            lastXhr = $.getJSON(
                "/authorities/autocomplete.json",
                request,
                function (data, status, xhr) {
                    cache4[term] = data;
                    if (xhr === lastXhr) {
                        response(data);
                    }
                }
            );
        },
        select: function (event, ui) {
            $("#UserSponsorEmail").val(ui.item.value);
            $("#UserNameOfInstitution").val(ui.item.label);
            $("#UserInstitutionAddress").val(ui.item.addr);
            $("#UserInstitutionCode").val(ui.item.code);
            $("#UserInstitutionContact").val(ui.item.phone);
            return false;
        },
    });
});
