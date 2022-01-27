<!doctype htmr>
<htmr lang="en">

    <head>
        <title>English for welders</title>
        <?php include('../../../fragments/links-style-main.php') ?>

        <link href="../../../css/blog.css" rel="stylesheet">
        <link href="../../../css/style-main.css" rel="stylesheet">
        <link href="../../../css/style-basic.css" rel="stylesheet">
        <link href="../../../css/sidebars.css" rel="stylesheet">
        <link href="../../../assets/dist/css/bootstrap.min.css" rel="stylesheet">

        <script src="../../../js/sidebars.js"></script>
        <script src="../../../assets/dist/js/bootstrap.bundle.min.js"></script> <!-- top menu -->
        <style>
            .pad-left {
                text-align: left;
            }

            .mr-2 {
                margin-right: 0.5rem;
            }

            img {
                cursor: pointer;
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

                            <form>
                                <p>
                                    <strong><em class="mr-2">Arc Voltage </em><img src="../_img/volume.png" onmouseover="this.src='../_img/volume_hover.png'" onmouseout="this.src='../_img/volume.png'" onclick="speak(this)" width="25px"></strong>
                                    – the voltage that runs along the welding arc.
                                </p>
                                <div>

                                </div>
                            </form>

                            <form>
                                <p>
                                    <strong><em class="mr-2">Base Metal</em><img src="../_img/volume.png" onmouseover="this.src='../_img/volume_hover.png'" onmouseout="this.src='../_img/volume.png'" onclick="speak(this)" width="25px"></strong>
                                    – the metal material that will be welded or cut.
                                </p>
                            </form>
                            <form>
                                <p>
                                    <strong><em class="mr-2">Bond</em><img src="../_img/volume.png" onmouseover="this.src='../_img/volume_hover.png'" onmouseout="this.src='../_img/volume.png'" onclick="speak(this)" width="25px"></strong>
                                    – the joining of welding metal and base metal.
                                </p>
                            </form>
                            <form>
                                <p>
                                    <strong><em class="mr-2">Cutting Torch</em><img src="../_img/volume.png" onmouseover="this.src='../_img/volume_hover.png'" onmouseout="this.src='../_img/volume.png'" onclick="speak(this)" width="25px"></strong>
                                    – tool used in gas cutting to control the gases that are used for
                                    preheating and cutting metal.
                                </p>
                            </form>
                            <form>
                                <p>
                                    <strong><em class="mr-2">Goggles</em><img src="../_img/volume.png" onmouseover="this.src='../_img/volume_hover.png'" onmouseout="this.src='../_img/volume.png'" onclick="speak(this)" width="25px"></strong>
                                    – safety equipment worn to protect the welder’s eyes from harmful radiation
                                    while welding and cutting.
                                </p>
                            </form>
                            <form>
                                <p>
                                    <strong><em class="mr-2">Helmet</em><img src="../_img/volume.png" onmouseover="this.src='../_img/volume_hover.png'" onmouseout="this.src='../_img/volume.png'" onclick="speak(this)" width="25px"></strong>
                                    – protection equipment worn to protect the welder’s face and neck.
                                </p>
                            </form>
                            <form>
                                <p>
                                    <strong><em class="mr-2">Liquidus</em><img src="../_img/volume.png" onmouseover="this.src='../_img/volume_hover.png'" onmouseout="this.src='../_img/volume.png'" onclick="speak(this)" width="25px"></strong>
                                    – the lowest temperature where metal becomes liquid
                                </p>
                            </form>
                            <form>
                                <p>
                                    <strong><em class="mr-2">Melting Point</em><img src="../_img/volume.png" onmouseover="this.src='../_img/volume_hover.png'" onmouseout="this.src='../_img/volume.png'" onclick="speak(this)" width="25px"></strong>
                                    – the temperature that needs to be reached to allow metal to begin to
                                    liquefy.
                                </p>
                            </form>
                            <form>
                                <p>
                                    <strong><em class="mr-2">Melting Range</em><img src="../_img/volume.png" onmouseover="this.src='../_img/volume_hover.png'" onmouseout="this.src='../_img/volume.png'" onclick="speak(this)" width="25px"></strong>
                                    – the range of temperatures between solidus and liquidus.
                                </p>
                            </form>
                            <form>
                                <p>
                                    <strong><em class="mr-2">Solidus</em><img src="../_img/volume.png" onmouseover="this.src='../_img/volume_hover.png'" onmouseout="this.src='../_img/volume.png'" onclick="speak(this)" width="25px"></strong>
                                    – the highest temperature where a metal remains completely solid.
                                </p>
                            </form>
                            <form>
                                <p>
                                    <strong><em class="mr-2">Tempering</em><img src="../_img/volume.png" onmouseover="this.src='../_img/volume_hover.png'" onmouseout="this.src='../_img/volume.png'" onclick="speak(this)" width="25px"></strong>
                                    <strong> </strong>
                                    – process of reheating hardened steel below the lowest critical temperature
                                    and then allowing it to cool to make the steel stronger.
                                </p>
                            </form>
                            <form>
                                <p>
                                    <strong><em class="mr-2">Weld</em><img src="../_img/volume.png" onmouseover="this.src='../_img/volume_hover.png'" onmouseout="this.src='../_img/volume.png'" onclick="speak(this)" width="25px"></strong>
                                    – a point where metals have been fused together by heating the materials to
                                    a suitable temperature. Filler metals or pressure may be used to accomplish
                                    the weld.
                                </p>
                            </form>
                            <form>
                                <p>
                                    <strong><em class="mr-2">Welder Certification</em><img src="../_img/volume.png" onmouseover="this.src='../_img/volume_hover.png'" onmouseout="this.src='../_img/volume.png'" onclick="speak(this)" width="25px"></strong>
                                    – document certifying that the welder has made his welds according to the
                                    standards prescribed.
                                </p>
                            </form>
                            <form>
                                <p>
                                    <strong><em class="mr-2">Welding Tip</em><img src="../_img/volume.png" onmouseover="this.src='../_img/volume_hover.png'" onmouseout="this.src='../_img/volume.png'" onclick="speak(this)" width="25px"></strong>
                                    – The tip of a weld gun
                                </p>
                            </form>
                            <form>
                                <p>
                                    <strong><em class="mr-2">Welding Torch</em><img src="../_img/volume.png" onmouseover="this.src='../_img/volume_hover.png'" onmouseout="this.src='../_img/volume.png'" onclick="speak(this)" width="25px"></strong>
                                    – tool used for gas welding to control the flow of gases used.
                                </p>
                            </form>


                        </div>
                    </div>
                </div> <!-- col-md-8 -->

            </section>

        </main>

        <script src='../../../js/speak.js'></script>
        <?php include('../../../fragments/footer.php') ?>
    </body>

</htmr>