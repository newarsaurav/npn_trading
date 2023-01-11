$(document)
    .off("click", "#subscribe_btn")
    .on("click", "#subscribe_btn", function (e) {
        e.preventDefault();
        let subscribe_data = $("#subscribe_form :input").serializeArray();
        $.post("/subscribe", subscribe_data).then(
            function (resp) {
                toastr.success(resp);
            },
            function (error) {
                console.log(error.responseJSON.message);
                toastr.error(error.responseJSON.message);
            }
        );
    });
$(document)
    .off("click", "#appointment_btn")
    .on("click", "#appointment_btn", function (e) {
        e.preventDefault();
        let appointment_data = $("#appointment_form :input").serializeArray();

        $.post("/appointment", appointment_data).then(
            function (resp) {
                toastr.success(resp);
            },
            function ({ responseJSON, status }) {
                console.log(responseJSON.errors);
                if (status === 422) {
                    
                }
                toastr.error();
            }
        );
    });
