$(function() {
    $(".select").chosen();
});

let request;

$("#second_form").submit(function(event) {
    event.preventDefault();

    if (request) {
        request.abort();
    }
    let $form = $(this);
    let serializedData = $form.serialize();


    request = $.ajax({
        url: "../%20functional/store.php",
        type: "post",
        data: serializedData,
        success: function() {
            $('#second_form')[0].reset();
        }
    });
});