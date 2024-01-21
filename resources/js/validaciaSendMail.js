$(document).ready(function () {
    $(".emailSend").click(function () {
        var contactId = $(this).data("contact-id");
        var formContainer = $(
            ".emailFormContainer[data-contact-id='" + contactId + "']"
        );
        var textInput = $("#text1");

        if (!textInput.val()) {
            event.preventDefault();
            alert("Vyplnte text na odoslanie");
            return;
        }
    });
});
