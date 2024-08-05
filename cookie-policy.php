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
        <section class="mb-4">
            <div class="container">
                <div name="termly-embed" data-id="f9154764-3ffb-4e81-85ed-e54f7ae281ba"></div>
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
    <script type="text/javascript">
    (function(d, s, id) {
        var js, tjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "https://app.termly.io/embed-policy.min.js";
        tjs.parentNode.insertBefore(js, tjs);
    }(document, 'script', 'termly-jssdk'));
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