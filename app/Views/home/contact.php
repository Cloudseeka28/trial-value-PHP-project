<?php $session = session(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>

    <nav class="navbar" style="background-color: #1b75ba;">
        <div class="container-fluid px-md-5">
            <a class="navbar-brand py-0" href="<?= site_url('/') ?>"><img src="https://images.squarespace-cdn.com/content/v1/57361a632b8ddea9122d41df/1549988293885-DQESSSJFLWMF50WK7KHP/logo%2Bicon.png?format=1500w" height="60"></a>
            <div class="text-white fw-bold" style="font-family: 'Times New Roman';">
                <h2> Clinical Trial Participant Financial Burden Calculator</h2>
            </div>

            <div class="d-flex align-items-center" style="font-family: 'Times New Roman';">

                <a href="<?= site_url('contact') ?>">
                    <p class="text-white m-0 fs-5">Contact</p>
                </a>


                <?php if ($session->has('user_id')) { ?>

                    &nbsp;&nbsp;&nbsp;&nbsp;<h4 class="text-white"> <?= $session->get('user_data.name') ?></h4>

                <?php } else { ?>
                    <p class="btn text-white mb-2 btn-info ms-3 fs-5" data-bs-toggle="modal" data-bs-target="#signupModal">
                        Sign-Up
                    </p>
                <?php } ?>

            </div>

        </div>
    </nav>


    <div class="d-grid gap-2 col-md-6 mx-auto py-2 mt-4">

        <h1 class="text-center" style="color:#34669b;">Contact Us</h1>

        <?php if($session->getFlashdata('success')) { ?>
        <span class="text-center text-success"><?=$session->getFlashdata('success')?></span>


        <?php   }?>
        <form class="form-horizontal" action="<?=site_url('contact-save')?>" method="POST" id="contact-form"
            name="contact-form">
            <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
            <div class="my-4 is-valid">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" required>
            </div>
            <div class="my-4">
                <label for="organization" class="form-label">Organization:</label>
                <input type="text" class="form-control" id="organization" placeholder="Enter your organization"
                    name="organization" required>
            </div>
            <div class="my-4">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email"
                    required>
            </div>
            <div class="my-4">
                <label for="question" class="form-label">Question/Message:</label>
                <textarea class="form-control" id="question" rows="5" placeholder="Enter your question or message"
                    name="question" ></textarea>
            </div>
            <div class="d-flex mt-5"> 

            <button type="submit" class="btn btn-primary mx-md-auto col-md-4">Submit</button>

            </div>
        </form>

    </div>
    <?php echo view('home/login-modal');?>
    <script src="https://code.jquery.com/jquery-3.7.0.js"
        integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"
        crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="<?=site_url()?>public/coustom.js"></script>

    <script>
    $('#contact-form').validate({
        errorElement: 'span',
        errorPlacement: function(error, element) {
            error.addClass('invalid-feedback');
            element.closest('.is-valid').append(error);
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        },

    });

    $("#contact-form").submit(function(e) {

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
            success: function(JSON) {
                if (JSON.error != '') {

                    $('.txt_csrfname').val(JSON.csrf_hash);
                    // $('.btn').attr('disabled', false);
                } else {

                    setTimeout(function() {
                        location.reload();
                    }, 1000);

                }
            }
        });
    });

    // $('#contact-form').submit()
    </script>
</body>

</html>