$(function () {
    
    $('#start-date').datepicker({
        minDate: "-100Y",
        maxDate: "-0D",
        dateFormat: 'yy-mm-dd',
        showButtonPanel: true,
        changeMonth: true,
        changeYear: true,
        showAnim: 'show',
        onSelect: function (selectedDate) {
            // Set the minDate of the end date picker based on the selected start date
            $('#end-date').datepicker("option", "minDate", selectedDate);
        }
    });

    // Initialize end date picker
    $('#end-date').datepicker({
        minDate: "-100Y", // This will be dynamically updated
        maxDate: "-0D",
        dateFormat: 'yy-mm-dd',
        showButtonPanel: true,
        changeMonth: true,
        changeYear: true,
        showAnim: 'show'
    });

});