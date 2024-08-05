<!DOCTYPE html>
<html lang="en" class="h-100 theme-pink">

<head>

    <?php
    include ("inc/stylesheet.php");
    ?>
    <link rel="stylesheet" href="assets/css/parsley.css">
    <link rel="stylesheet" href="assets/css/toastr.min.css">

    <style>
    .parsley-errors-list {
        padding: 5px 0px 0px 5px;
    }

    .loader-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        min-height: 80vh;
        background-color: rgba(255, 255, 255, 0.8);
        /* Set the background color with transparency */
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 9999;
    }

    .loader {
        border: 8px solid #B400C496;
        border-radius: 50%;
        border-top: 8px solid #ffffff;
        width: 80px;
        height: 80px;
        -webkit-animation: spin 2s linear infinite;
        /* Safari */
        animation: spin 2s linear infinite;
    }

    @-webkit-keyframes spin {
        0% {
            -webkit-transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(360deg);
        }
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    .message {
        margin-top: 20px;
        color: #B400C496;
    }
    </style>
</head>

<body class="h-100">

    <div class="loader-container" id="loaderContainer" hidden>
        <div class="loader"></div>
        <h4 class="message">Please Wait...</h4>
    </div>

    <main class="danber--main h-100">
        <?php
        // include ("inc/outerheader.php");
        ?>
        <section class="auth-sec h-100 d-flex align-items-center p-0">
            <div class="container">
                <div class="row justify-content-center">
                    <!-- <div class="col-lg-5 col-xl-5 col-12">
                        <div>
                            <p class="font_700 text-pink text-center font_36">We missed you!</p>
                            <div class="login-vector">
                                <img src="assets/images/vector.svg" alt="image" />
                            </div>
                        </div>
                    </div> -->
                    <div class="col-lg-6 col-xl-4 col-12">
                        <div class="text-center">
                            <img class="mb-4 contact-logo" src="assets/images/logo.svg" alt="image">
                            <!-- <p class="mb-2">Your trusted companion for modern childcare solutions!</p> -->
                        </div>
                        <div class="auth-card contact-card p-4">
                            <p class="auth-title font_25 mb-3">Contact Form</p>
                            <p class="font_14 font_500 text-center mb-3">Complete the form to be added to our email list
                                for
                                updates and info!</p>
                            <form action="#" method="post" id="contact-form" data-parsley-validate>
                                <div class="mb-3">
                                    <!-- <label for="name" class="form-label">Name</label> -->
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Enter Name" required=""
                                        data-parsley-required-message="* Please enter your name."
                                        data-parsley-errors-container="#name-err" autocomplete="on">
                                    <span id="name-err" class="error-msg"></span>
                                </div>
                                <div class=" mb-3">
                                    <!-- <label for="email" class="form-label">Email address</label> -->
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Enter Email Address" required=""
                                        data-parsley-required-message="* Please enter your email address."
                                        data-parsley-type-message="* Enter a valid email address."
                                        data-parsley-errors-container="#email-err" autocomplete="on">
                                    <span id="email-err" class="error-msg"></span>
                                </div>
                                <div class="mb-3">
                                    <!-- <label for="mobile_number" class="form-label">Mobile Number</label> -->
                                    <input type="text" class="form-control" id="mobile_number" name="mobile_number"
                                        placeholder="Enter Mobile Number" data-parsley-pattern="^\d{8,15}$"
                                        data-parsley-pattern-message="* Enter a valid mobile number. The mobile number should contain 8 to 15 digits."
                                        data-parsley-errors-container="#mobile-err">
                                    <span id="mobile-err" class="error-msg"></span>
                                </div>


                                <div class="mb-3">
                                    <input type="text" class="form-control" id="zipcode" name="zipcode"
                                        placeholder="Enter Zip Code" data-parsley-pattern="^\d{3,10}$"
                                        data-parsley-pattern-message="* Enter a valid zip code. The zip code should contain 3 to 10 characters."
                                        data-parsley-errors-container="#zipcode-err">
                                    <span id="zipcode-err" class="error-msg"></span>
                                </div>

                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" value="1" id="checkbox"
                                        name="consent_checkbox" required=""
                                        data-parsley-required-message="* Please check the box to indicate your agreement.">
                                    <label class="form-check-label" for="checkbox">
                                        <p style="font-size: 12px;">
                                            By clicking submit, you consent to receive periodic updates, promotions, and
                                            offers from us via email and phone if a phone number was provided.
                                        </p>
                                    </label>
                                </div>
                                <div>
                                    <div>
                                        <button type="submit" class="submit-btn mt-2" id="sendForm">Submit</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
        // include ("inc/footer.php");
        ?>
    </main>
    <?php
    include ("inc/modal.php");
    ?>
    <?php
    include ("inc/script.php");
    ?>

    <script src="assets/js/parsley.js"></script>
    <script src="assets/js/toastr.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#contact-form').submit(function(e) {
            e.preventDefault();

            if ($(this).parsley().isValid()) {
                var formData = $(this).serialize();

                $.ajax({
                    url: 'submit_form.php',
                    type: 'POST',
                    data: formData,
                    beforeSend: function() {
                        $('#loaderContainer').attr('hidden', false);
                    },
                    success: function(response) {
                        var responseData = JSON.parse(response);
                        if (responseData.code == '1') {

                            $('#contact-form')[0].reset();

                            // toastr.success(responseData.msg, '', {
                            //     "progressBar": true,
                            //     "preventDuplicates": true,
                            //     "onclick": null,
                            //     "showDuration": "300",
                            //     "hideDuration": "1000",
                            //     "timeOut": "5000",
                            //     "showEasing": "swing",
                            //     "hideEasing": "linear",
                            //     "showMethod": "fadeIn",
                            //     "hideMethod": "fadeOut"
                            // });

                            // setTimeout(function() {
                            window.location.href =
                                'https://danberkidz.com/confirmation.php';
                            //     window.location.href = responseData.data;
                            // }, 5200);

                        } else {
                            toastr.error(responseData.msg, '', {
                                "progressBar": true,
                                "preventDuplicates": true,
                                "onclick": null,
                                "showDuration": "300",
                                "hideDuration": "1000",
                                "timeOut": "5000",
                                "showEasing": "swing",
                                "hideEasing": "linear",
                                "showMethod": "fadeIn",
                                "hideMethod": "fadeOut"
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error submitting form:', error);
                        $('#loaderContainer').attr('hidden', true);
                    },
                    complete: function() {
                        $('#loaderContainer').attr('hidden', true);
                    },
                });
            } else {
                console.log('Validation Error');
            }
        });
    });
    </script>
</body>

</html>