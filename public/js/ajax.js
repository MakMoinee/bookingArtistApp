$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    $("#btnAddService").on("click", function (e) {
        var formData = new FormData();
        formData.append(
            "servicename",
            document.getElementById("servicename").value
        );
        formData.append("details", document.getElementById("details").value);
        formData.append("price", document.getElementById("price").value);
        let rBody = {};
        for (let [k, v] of formData.entries()) {
            rBody[k] = v;
        }
        let proto = $(location).attr("protocol");
        let host = $(location).attr("host");
        let mUrl = proto + "//" + host;
        $.ajax({
            url: mUrl + "/addservices",
            type: "POST",
            data: rBody,
            error: function (xhr, status, error) {
                if (xhr.responseJSON) {
                    Swal.fire({
                        position: "center",
                        icon: "warning",
                        title:
                            xhr.responseJSON.Error +
                            ", Please Try New Service Name",
                        showConfirmButton: false,
                        timer: 800,
                    });
                } else {
                }
            },
        }).done(function (data) {
            window.location = "/paymentmethod?as=BAND&step=3";
        });
    });
    // let proto = $(location).attr('protocol');
    // let host = $(location).attr('host');
    // let mUrl = proto + "//" + host;

    // $.ajax({
    //     url: mUrl + "/addservices",
    //     type: 'POST',
    //     data: {}
    // }).done(function (data) {

    //         // Swal.fire({
    //         //     position: 'center',
    //         //     icon: 'warning',
    //         //     title: "There is new incident report please reload page",
    //         //     showConfirmButton: false,
    //         //     timer: 1500
    //         // });

    // });
});
