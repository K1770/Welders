<!doctype html>
<html lang="en">

<head>
    <title>English for welders</title>
    <?php include('../../../fragments/links-style-main.php') ?>

    <link href="../../../css/blog.css" rel="stylesheet">
    <link href="../../../css/style-main.css" rel="stylesheet">
    <link href="../../../css/style-basic.css" rel="stylesheet">
    <link href="../../../css/sidebars.css" rel="stylesheet">
    <link href="../../../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="../../../sidebars.js"></script>
    <script src="../../../assets/dist/js/bootstrap.bundle.min.js"></script> <!-- top menu -->
    <style>
        .pad-left {
            text-align: left;
        }
    </style>

</head>

<body>

    <div class="container">
        <?php include('../../../fragments/header.php'); ?>
    </div>

    <main class="container container2">
        <section class="home-section ">
            <div class="row">

                <div class="col-md-3">

                    <?php includeWithVariables(
                        '../../../fragments/nav-sidebar-handbook-two.php',
                        array(
                            'Basic Welding Terms' => '../basic-welding-terms',
                            'Welding Materials' => '../welding-materials',
                            'Welding Processes' => '../welding-processes',

                        ),
                        array(
                            'categoryLink1' => '../../welders-clothing',
                            'categoryLink2' => '../../welders-workplace',
                            'categoryLink3' => '../../health-and-safety-prevention',

                            'categoryLink4' => '../../metalwork',
                            'categoryLink5' => '../../symbols-in-welding',
                            'categoryLink6' => '../../how-to-weld',

                            'categoryLink7' => '../../glossary',
                            'categoryLink8' => '../../welding-calculations',
                            'categoryLink9' => 'https://docs.google.com/forms/d/1C0wKzaX9HkreBmB_JpKrSmpA_lDO_DH7ovqTBVw9oOo/edit'
                        )
                    ); ?>
                </div> <!-- col-md-3 -->

                <div class="col-md-9">
                    <div class="content">

                        <div class="py-1 text-center container ">
                            <h2 class="fw-light">Basic Welding Terms</h2>
                        </div>

                        <div>
                            <p>
                                <strong><em>Arc Voltage</em></strong>
                                – the voltage that runs along the welding arc.
                            </p>
                            <p>
                                <strong><em>Base Metal</em></strong>
                                – the metal material that will be welded or cut.
                            </p>
                            <p>
                                <strong><em>Bond</em></strong>
                                – the joining of welding metal and base metal.
                            </p>
                            <p>
                                <strong><em>Cutting Torch</em></strong>
                                – tool used in gas cutting to control the gases that are used for
                                preheating and cutting metal.
                            </p>
                            <p>
                                <strong><em>Goggles</em></strong>
                                – safety equipment worn to protect the welder’s eyes from harmful radiation
                                while welding and cutting.
                            </p>
                            <p>
                                <strong><em>Helmet</em></strong>
                                – protection equipment worn to protect the welder’s face and neck.
                            </p>
                            <p>
                                <strong><em>Liquidus</em></strong>
                                – the lowest temperature where metal becomes liquid
                            </p>
                            <p>
                                <strong><em>Melting Point</em></strong>
                                – the temperature that needs to be reached to allow metal to begin to
                                liquefy.
                            </p>
                            <p>
                                <strong><em>Melting Range</em></strong>
                                – the range of temperatures between solidus and liquidus.
                            </p>
                            <p>
                                <strong><em>Solidus</em></strong>
                                – the highest temperature where a metal remains completely solid.
                            </p>
                            <p>
                                <strong><em>Tempering</em></strong>
                                <strong> </strong>
                                – process of reheating hardened steel below the lowest critical temperature
                                and then allowing it to cool to make the steel stronger.
                            </p>
                            <p>
                                <strong><em>Weld</em></strong>
                                – a point where metals have been fused together by heating the materials to
                                a suitable temperature. Filler metals or pressure may be used to accomplish
                                the weld.
                            </p>
                            <p>
                                <strong><em>Welder Certification</em></strong>
                                – document certifying that the welder has made his welds according to the
                                standards prescribed.
                            </p>
                            <p>
                                <strong><em>Welding Tip</em></strong>
                                – The tip of a weld gun
                            </p>
                            <p>
                                <strong><em>Welding Torch</em></strong>
                                – tool used for gas welding to control the flow of gases used.
                            </p>
                        </div>


                    </div>
                </div>
            </div> <!-- col-md-8 -->

        </section>

    </main>

    <?php include('../../../fragments/footer.php') ?>
</body>

</html>