$(function () {
    //If not serious disable criteria


    $("#user-type").click(function () {
        $(".ribidi").toggle();
    });
    if (!$("#user-type").is(":checked")) {
        $(".ribidi").hide();
    }
 

    $('#institution-code').autocomplete({
        source: function (request, response) {
            $.ajax({
                url: '/api/facilityCodes/autocomplete.json', // Replace with your API endpoint
                data: {
                    term: request.term // Pass the input value to the API
                },
                success: function (data) {
                    response($.map(data.codes, function (item) {

                        return {
                            label: item.label, // Display name in the dropdown
                            value: item.value, // Use code as the input value
                            addr: item.addr,
                            phone: item.phone
                        };
                    }));
                }
            });
        },
        minLength: 2, // Start searching after 2 characters
        select: function (event, ui) {
            console.log(ui.item);
            $("#name-of-institution").val(ui.item.label);
            $("#institution-code").val(ui.item.value);
            $("#institution-address").val(ui.item.addr);
            $("#institution-contact").val(ui.item.phone);
        }
    });
    var cache3 = {},
        lastXhr;
    $("#name-of-institution").autocomplete({
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
                        response(data.codes);
                    }
                }
            );
        },
        select: function (event, ui) {
            $("#name-of-institution").val(ui.item.label);
            $("#institution-code").val(ui.item.value);
            $("#institution-address").val(ui.item.addr);
            $("#institution-contact").val(ui.item.phone);
            return false;
        },
        minLength: 2
    });

    var cache4 = {},
        lastXhr;
    $("#sponsor-email").autocomplete({
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
                    cache4[term] = data.codes;
                    if (xhr === lastXhr) {
                        response(data.codes);
                    }
                }
            );
        },
        select: function (event, ui) {
            $("#sponsor-email").val(ui.item.value);
            $("#name-of-institution").val(ui.item.label);
            $("#institution-address").val(ui.item.addr);
            $("#institution-code").val(ui.item.code);
            $("#institution-contact").val(ui.item.phone);
            return false;
        },
    });
});
