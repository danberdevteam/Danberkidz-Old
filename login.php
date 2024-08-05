<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    include ("inc/stylesheet.php");
    ?>
</head>

<body>
    <main class="danber--main">
        <?php
        include ("inc/outerheader.php");
        ?>
        <section class="auth-sec">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-5 col-xl-5 col-12">
                        <div>
                            <p class="font_700 text-pink text-center font_36">We missed you!</p>
                            <div class="login-vector">
                                <img src="assets/images/vector.svg" alt="image" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-xl-5 col-12">
                        <div class="auth-card">
                            <p class="auth-title">Welcome Back!</p>
                            <p class="font_14 font_500 text-center">New to DanberKidz? <a class="text-pink"
                                    href="javascript:void(0)">Sign Up</a></p>
                            <div>


                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                <div class="input-group mb-3">

                                    <span class="input-group-text" id="basic-addon1">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>1</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                                        aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
        include ("inc/footer.php");
        ?>
    </main>
    <?php
    include ("inc/modal.php");
    ?>
    <?php
    include ("inc/script.php");
    ?>

</body>

</html>