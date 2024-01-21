$(document).ready(function () {
    $(".emailSend").on("click", function () {
        var contactId = $(this).data("contact-id");
        var emailFormContainer = $(
            '.emailFormContainer[data-contact-id="' + contactId + '"]'
        );
        emailFormContainer.show();
        $(this).hide();
    });

    $(".sendEmailButton").on("click", function () {
        var contactId = $(this).attr("data-contact-id");
        var dataStatus = $(this).attr("data-status");
        var inputField = $('input[data-contact-id="' + contactId + '"]');
        if (!inputField.val()) {
            alert("Vyplnte text na odoslanie");
            event.preventDefault();
            return;
        }
        sendEmail(contactId, inputField, dataStatus);
        inputField.val("");

        $(this)
            .text("Odoslane")
            .removeClass("btn-primary")
            .addClass("btn-success");
    });

    function sendEmail(contactId, text1, dataStatus) {
        var csrf = $('meta[name="csrf-token"]').attr("content");
        var nadpis = "Vasa ziadost cislo " + contactId;
        var text1 = text1.val();
        var text2 = dataStatus === "0" ? "Stav: Neriesene" : "Stav: Riesene";
        var text3 = "S pozdravom";
        var contactId = contactId;
        $.ajax({
            url: "/send-email",
            method: "POST",
            data: {
                nadpis: nadpis,
                text1: text1,
                text2: text2,
                text3: text3,
                contactId: contactId,
                _token: csrf,
            },
            success: function (response) {
                console.log("Email poslany");
            },
            error: function (response) {
                console.error(response);
                console.error("Error");
            },
        });
    }
});
