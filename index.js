$('input:checkbox').change(
    function () {
        if ($(this).is(':checked')) {
            $(this).parent().removeClass("ici");
            $(this).parent().addClass("checked");

        } else {
            $(this).parent().removeClass("checked");
            $(this).parent().addClass("ici");

        }
    });

