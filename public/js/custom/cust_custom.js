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
                
                $('#subscribe_form :input[name="email"]').addClass('error-border-red');
                toastr.error(error.responseJSON.message);
            }
        );
    });
$(document)
    .off("click", "#enquiry_btn")
    .on("click", "#enquiry_btn", function (e) {
        e.preventDefault();
        let subscribe_data = $("#enquiry_form :input").serializeArray();
        $.post("/enquiry", subscribe_data).then(
            function (resp) {
                toastr.success(resp);
            },
            function (error) {
                
                $('#subscribe_form :input[name="email"]').addClass('error-border-red');
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
                $err_data = responseJSON.errors;
                if (status === 422) {
                    $.each($err_data,(k , v)=>{

                        $("#appointment_form").find(`[name="${k}"]`).addClass('error_form');

                    })
                }
                toastr.error('Enter the correct data.');
            }
        );
    });
