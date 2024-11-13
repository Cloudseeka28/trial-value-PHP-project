$('#reg-form').validate({
    errorElement: 'span',
errorPlacement: function (error, element) {
    error.addClass('invalid-feedback');
    element.closest('.is-valid').append(error);
},
highlight: function (element, errorClass, validClass) {
    $(element).addClass('is-invalid');
},
unhighlight: function (element, errorClass, validClass) {
    $(element).removeClass('is-invalid');
},

});

$("#reg-form").submit(function (e) {

    var fd = new FormData(this);
    var obj = $(this),
        action = obj.attr('name');

    e.preventDefault();

    $.ajax({
        type: e.target.method,
        url: e.target.action,
        data: fd,
        contentType: false,
        processData: false,
        cache: false,
        success: function (JSON) {
            if (JSON.error != '') {
              
                $('.txt_csrfname').val(JSON.csrf_hash);
                if(JSON.error =="Invalid Login Credentials"){
                    $('.error-text-login').html(JSON.error)
                }
               
                // $('.btn').attr('disabled', false);
            } else {
                toastr.success(JSON.result);
                setTimeout(function () {
                location.reload();
                }, 1000);

            }
        }
    });
});


$('#login-form').validate({
    errorElement: 'span',
errorPlacement: function (error, element) {
    error.addClass('invalid-feedback');
    element.closest('.is-valid').append(error);
},
highlight: function (element, errorClass, validClass) {
    $(element).addClass('is-invalid');
},
unhighlight: function (element, errorClass, validClass) {
    $(element).removeClass('is-invalid');
},

});

$("#login-form").submit(function (e) {

    var fd = new FormData(this);
    var obj = $(this),
        action = obj.attr('name');

    e.preventDefault();

    $.ajax({
        type: e.target.method,
        url: e.target.action,
        data: fd,
        contentType: false,
        processData: false,
        cache: false,
        success: function (JSON) {
            if (JSON.error != '') {
              
                $('.txt_csrfname').val(JSON.csrf_hash);
                if(JSON.error =="Invalid Login Credentials"){
                    $('.error-text-login').html(JSON.error)
                }
               
                // $('.btn').attr('disabled', false);
            } else {
                toastr.success(JSON.result);
                setTimeout(function () {
               location.reload();
                }, 1000);

            }
        }
    });
});


