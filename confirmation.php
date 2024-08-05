<!DOCTYPE html>
<html lang="en" class="h-100 theme-pink">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11412109544"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'AW-11412109544');
    </script>
    <!-- End Google Tag Manager -->
    <!-- Google Tag Manager (noscript) -->

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
                        <!-- <div class="text-center">
                          
                            <p class="mb-2">Your trusted companion for modern childcare solutions!</p>
                        </div> -->
                        <div class="auth-card contact-card text-center">
                            <img class="mb-2 contact-logo mb-4" src="assets/images/logo.svg" alt="image">
                            <p class="auth-title font_25 ">Thank you!</p>
                            <p class="font_14 font_500 text-center mb-3">We've submitted your contact form.</p>
                            <a href="index.php" class="submit-btn back-btn mt-2">Back home</a>
                            <!-- <form action="#" method="post" id="contact-form" data-parsley-validate>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Enter Name" required=""
                                        data-parsley-required-message="Please enter your name."
                                        data-parsley-errors-container="#name-err" autocomplete="on">
                                    <span id="name-err" class="error-msg"></span>
                                </div>
                                <div class=" mb-3">
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Enter Email Address" required=""
                                        data-parsley-required-message="Please enter your email address."
                                        data-parsley-type-message="Enter a valid email address."
                                        data-parsley-errors-container="#email-err" autocomplete="on">
                                    <span id="email-err" class="error-msg"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="mobile_number" class="form-label">Mobile Number</label>
                                    <input type="text" class="form-control" id="mobile_number" name="mobile_number"
                                        placeholder="Enter Mobile Number" data-parsley-pattern="^\d{8,15}$"
                                        data-parsley-pattern-message="Enter a valid mobile number. The mobile number should contain 8 to 15 digits."
                                        data-parsley-errors-container="#mobile-err">
                                    <span id="mobile-err" class="error-msg"></span>
                                </div>

                                <div class="mb-3">
                                    <label for="zipcode" class="form-label">Zip Code</label>
                                    <input type="text" class="form-control" id="zipcode" name="zipcode"
                                        placeholder="Enter Zip Code" data-parsley-pattern="^\d{3,10}$"
                                        data-parsley-pattern-message="Enter a valid zip code. The zip code should contain 3 to 10 characters."
                                        data-parsley-errors-container="#zipcode-err">
                                    <span id="zipcode-err" class="error-msg"></span>
                                </div>

                                <div>
                                   
                                </div>
                            </form> -->
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
    window.addEventListener('load', function() {
        if (document.location.pathname.includes('/confirmation.php')) {
            gtag('event', 'conversion', {
                'send_to': 'AW-11412109544/84doCN6CmqoZEOjx28Eq'
            });
        }
    });
    </script>

</body>

</html>