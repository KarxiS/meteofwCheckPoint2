$(document).ready(function () {
    var url = $("#contactform").data("url");
    var formSent = false;
    $("#theme-btn-spojme").click(function (e) {
        e.preventDefault();
        var name = $("#nameSpoj").val();
        var phone = $("#phoneSpoj").val();
        var email = $("#emailSpoj").val();
        var mess = $("#messSpoj").val();
        const btn = document.getElementById("theme-btn-spojme");

        // validacia na strane klienta
        if (!name || !email || !phone || !mess) {
            alert("Vyplnte vsetky polia.");
            return false;
        }
        btn.removeAttribute("href");
        btn.disabled = true;

        if (formSent) {
            return;
        }
        var result = $("#resultAjax");
        formSent = true;
        $.ajax({
            url: url,
            type: "POST",
            data: {
                name: name,
                phonenumber: phone,
                email: email,
                message: mess,
                _token: $('meta[name="csrf-token"]').attr("content"),
            },
            success: function (response) {
                btn.textContent = "Odoslané";
                result.textContent = "Odoslane!!!";
            },

            error: function (data) {
                btn.textContent = "NeOdoslané";
                result.textContent = "NeOdoslane!!!";
            },
        });
    });
});
