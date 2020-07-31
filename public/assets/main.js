(function () {

    $("a#delete-user").click(function () {
        var id = $(this).attr("user-id");
        $.ajax({
            type: 'DELETE',
            url: "/user/" + id,
            dataType: 'json',
            data: {
                _token: '{!! csrf_token() !!}',
            },
            success: function (result) {
                window.location.reload();
            }
        });

    });
})(jQuery);
