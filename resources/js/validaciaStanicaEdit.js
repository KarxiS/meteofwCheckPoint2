$(document).ready(function () {
    var form = $("#myForm");
    var nameInput = $("#name");
    var descriptionInput = $("#description");
    var apiLinkInput = $("#api_link");
    var formSent = false;

    form.submit(function (event) {
        var name = nameInput.val();
        var description = descriptionInput.val();
        var apiLink = apiLinkInput.val();

        // Client-side validacia
        if (!name || !description || !apiLink) {
            alert("Vyplnte vsetky polia");
            event.preventDefault();
            return false;
        }

        if (formSent) {
            return;
        }
    });
});
