<!DOCTYPE html>
<html lang="en" class="theme-pink">

<head>

    <?php
    include ("inc/stylesheet.php");
    ?>

</head>


<body>
    <main class="danber--main">
        <?php
        include ("inc/header.php");
        ?>
        <section class="inner-banner-sec bg-black">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8 col-12">
                        <div class="inner-banner">
                            <!-- <p class="title">DanberKidz <span class="text-orange">Professionals</span> </p>
                            <p class="text">Empower Young Minds, Shape Futures</p>
                            <p class="text font_500 font_18">At DanberKidz, we recognize the profound impact
                                professionals have on the development of children. Whether you're a coach, tutor,
                                counselor, or another childcare professional, our platform provides a space for you to
                                connect with families seeking your expertise.
                            </p> -->
                            <div class="mb-4">
                                <img class="danber-community" src="assets/images/logo.svg" alt="logo">
                            </div>
                            <p class="title mb-0">DanberKidz <span class="">Sitemap</span> </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="sitmap-sec">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="sitemap-link">
                            <a href="https://danberkidz.com/" class="stretched-link">Home</a>
                            <div class="arrow-right">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </div>
                        <div class="sitemap-link">
                            <a href="https://danberkidz.com/customers.php" class="stretched-link">Customers</a>
                            <div class="arrow-right">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </div>

                        <div class="sitemap-link">
                            <a href="https://danberkidz.com/caregivers.php" class="stretched-link">Caregivers</a>
                            <div class="arrow-right">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </div>
                        <!-- <div class="sitemap-link">
                            <a href="https://danberkidz.com/daycare.php" class="stretched-link">Daycares</a>
                            <div class="arrow-right">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </div>
                        <div class="sitemap-link">
                            <a href="https://danberkidz.com/professionals.php" class="stretched-link">Professionals</a>
                            <div class="arrow-right">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </div>
                        <div class="sitemap-link">
                            <a href="https://danberkidz.com/agencies.php" class="stretched-link">Agencies</a>
                            <div class="arrow-right">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </div> -->
                        <div class="sitemap-link">
                            <a href="https://danberkidz.com/terms-use.php" class="stretched-link">Terms of Use</a>
                            <div class="arrow-right">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </div>
                        <div class="sitemap-link">
                            <a href="https://danberkidz.com/privacy-policy.php" class="stretched-link">Privacy
                                Notice</a>
                            <div class="arrow-right">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </div>
                        <div class="sitemap-link">
                            <a href="https://danberkidz.com/acceptable-use-policy.php" class="stretched-link">Acceptable
                                Use
                                Policy</a>
                            <div class="arrow-right">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </div>
                        <div class="sitemap-link">
                            <a href="https://danberkidz.com/disclaimer.php" class="stretched-link">Disclaimer</a>
                            <div class="arrow-right">
                                <i class="fa-solid fa-chevron-right"></i>
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
    <script>
    $(function() {
        /*var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
        */

        $('[data-toggle="tooltip"]').tooltip();

    })
    </script>
    <script type="text/javascript" id="zsiqchat">
    var $zoho = $zoho || {};
    $zoho.salesiq = $zoho.salesiq || {
        widgetcode: "siqd916a5cc37ed9538a595abfc21845b78c0b17628f2460808d6f4020bd7a2077b",
        values: {},
        ready: function() {}
    };
    var d = document;
    s = d.createElement("script");
    s.type = "text/javascript";
    s.id = "zsiqscript";
    s.defer = true;
    s.src = "https://salesiq.zohopublic.com/widget";
    t = d.getElementsByTagName("script")[0];
    t.parentNode.insertBefore(s, t);
    </script>
</body>

</html>