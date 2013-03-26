$("#date_start").datetimepicker(
    {
        dateFormat: "dd/mm/yy",
        timeFormat: "hh:mm:ss",
        showSecond: true,
        changeMonth: true,
        changeYear: true,
        showButtonPanel: true,
        onSelect: function(selectedDateTime, inst) {

            var theDate = $("#date_start").datetimepicker("getDate");
            /*
             * Alternative syntax
             * var theDate = $.datepicker.parseDateTime("dd/mm/yy", "hh:mm:ss", selectedDateTime);
             */

            if(theDate != null) {
                var str_old_datetime = $("#date_end").val();

                $("#date_end").datetimepicker("option", "minDate", theDate);
                $("#date_end").datetimepicker("option", "minDateTime", theDate);

                $("#date_end").val(str_old_datetime);
            }
        }
    },
    $.datepicker.regional[ "en" ],
    $.timepicker.regional[ "en" ]
);


$("#date_end").datetimepicker(
    {
        dateFormat: "dd/mm/yy",
        timeFormat: "hh:mm:ss",
        showSecond: true,
        changeMonth: true,
        changeYear: true,
        showButtonPanel: true,
        onSelect: function(selectedDateTime, inst) {

            var theDate = $("#date_end").datetimepicker("getDate");
            /*
             * Alternative syntax
             * var theDate = $.datepicker.parseDateTime("dd/mm/yy", "hh:mm:ss", selectedDateTime);
             */

            if(theDate != null) {
                var str_old_datetime = $("#date_start").val();

                $("#date_start").datetimepicker("option", "maxDate", theDate);
                $("#date_start").datetimepicker("option", "maxDateTime", theDate);

                $("#date_start").val(str_old_datetime);
            }
        }
    },
    $.datepicker.regional[ "en" ],
    $.timepicker.regional[ "en" ]
);