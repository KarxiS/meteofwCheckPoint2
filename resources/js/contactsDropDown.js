$(document).ready(function () {
    $(".statusContact").change(function () {
        var status = $(this).val();
        var id = $(this).data("id");
        var csrf = $('meta[name="csrf-token"]').attr("content");

        $.ajax({
            url: "/contacts/" + id + "/updateStatus",
            type: "POST",
            data: {
                status: status,
                _token: csrf,
            },
            success: function (response) {
                option.text(response.newStatus);
            },
            error: function (response) {
                alert("Error");
            },
        });
    });
});
