function checkFormInputs() {
    if ($("#location").val() == "" ||
        $("#day").val() == "" ||
        $("#run-count").val() == "") {
            event.preventDefault();
            swal({
                title: "Invalid Inputs",
                text: "Please provide valid inputs",
                button: "Okay"
            });
        };
}