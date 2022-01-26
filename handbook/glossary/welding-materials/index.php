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
                            <h2 class="fw-light">Welding Materials</h2>
                        </div>

                        <form>
                            <p>
                                <strong><em class="mr-2">Acetone</em><img class="volume" src="../_img/volume.png" onmouseover="this.src='../_img/volume_hover.png'" onmouseout="this.src='../_img/volume.png'" onmouseover="this.src='../_img/volume_hover.png'" onmouseout="this.src='../_img/volume.png'" onclick="speak(this)" width="25px"></strong>
                                <em class="mr-2"> – </em>
                                flammable and unstable liquid that is used to dissolve and stabilize
                                acetylene.
                            </p>
                        </form>
                        <form>
                            <p>
                                <strong><em class="mr-2">Acetylene</em><img class="volume" src="../_img/volume.png" onmouseover="this.src='../_img/volume_hover.png'" onmouseout="this.src='../_img/volume.png'" onclick="speak(this)" width="25px"></strong>
                                <strong> </strong>
                                – a highly combustible gas that is made of carbon and hydrogen that is used
                                in gas welding.
                            </p>
                        </form>
                        <form>
                            <p>
                                <strong><em class="mr-2">Alloy</em><img class="volume" src="../_img/volume.png" onmouseover="this.src='../_img/volume_hover.png'" onmouseout="this.src='../_img/volume.png'" onclick="speak(this)" width="25px"></strong>
                                – a mixture of one or more elements with at least one being a metal.
                            </p>
                        </form>
                        <form>
                            <p>
                                <strong><em class="mr-2">Electrode</em><img class="volume" src="../_img/volume.png" onmouseover="this.src='../_img/volume_hover.png'" onmouseout="this.src='../_img/volume.png'" onclick="speak(this)" width="25px"></strong>
                                <em class="mr-2"> – </em>
                                various materials that are used to conduct the welding current between the
                                electrode holder and the welding arc.
                            </p>
                        </form>
                        <form>
                            <p>
                                <strong><em class="mr-2">Ferrite</em><img class="volume" src="../_img/volume.png" onmouseover="this.src='../_img/volume_hover.png'" onmouseout="this.src='../_img/volume.png'" onclick="speak(this)" width="25px"></strong>
                                <em class="mr-2"> – </em>
                                a pure form of iron that exists below the lowest critical temperature.
                            </p>
                        </form>
                        <form>
                            <p>
                                <strong><em class="mr-2">Flux</em><img class="volume" src="../_img/volume.png" onmouseover="this.src='../_img/volume_hover.png'" onmouseout="this.src='../_img/volume.png'" onclick="speak(this)" width="25px"></strong>
                                – cleaner used to clean metals to be welded, soldered or brazed. It also
                                dissolves rust and releases any trapped gases that may be in the metal.
                            </p>
                        </form>
                        <form>
                            <p>
                                <strong><em class="mr-2">Nonferrous </em><img class="volume" src="../_img/volume.png" onmouseover="this.src='../_img/volume_hover.png'" onmouseout="this.src='../_img/volume.png'" onclick="speak(this)" width="25px"></strong>
                                – metals that do not contain any iron. Examples of nonferrous metals
                                include aluminum, bronze, copper, lead and titanium.
                            </p>
                        </form>
                        <form>
                            <p>
                                <strong><em class="mr-2">Welding Rod</em><img class="volume" src="../_img/volume.png" onmouseover="this.src='../_img/volume_hover.png'" onmouseout="this.src='../_img/volume.png'" onclick="speak(this)" width="25px"></strong>
                                – filler metal that comes in a rod or wire form and is used in brazing and
                                gas welding or in arc welding where the electrode does not produce filler
                                metal.
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

</html>