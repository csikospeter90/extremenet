$(function () {
    $('.js-logout').on('click', function () {
        $("#logout-form").submit();
    });

    $('.js-delete-vaccine').on('click', function () {
        var id = $(this).data('target');
        if (confirm('biztosan törlöd a vakcinát?')) {
            $("#delete_vaccine_" + id).submit();
        }
    });

    $('.js-delete-shipment').on('click', function () {
        var id = $(this).data('target');
        if (confirm('biztosan törlöd a vakcinát?')) {
            $("#delete_shipment_" + id).submit();
        }
    });
});
