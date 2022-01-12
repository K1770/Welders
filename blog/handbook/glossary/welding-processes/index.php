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
                            <h2 class="fw-light">Welding Processes</h2>
                        </div>

                        <div>
                            <p>
                                <strong><em>Arc Cutting</em></strong>
                                – cutting processes where materials are cut by melting that is caused by
                                the heat of the arc between the electrode and the metal.
                            </p>
                            <p>
                                <strong><em>Arc Welding</em></strong>
                                – welding methods where fusion is achieved by heating the materials to be
                                joined using an electric arc(s). This may be done with or without filler
                                material.
                            </p>
                            <p>
                                <strong><em>Bare Metal-Arc Welding</em></strong>
                                – an arc welding method where fusion is accomplished by using an unshielded
                                arc to produce heat between a bare or lightly coated electrode and the
                                material to be welded. The filler metal comes from the electrode and
                                pressure is not used.
                            </p>
                            <p>
                                <strong><em>Brazing</em></strong>
                                <strong> </strong>
                                – a welding method using a filler metal that is liquefied at a temperature
                                above 800 F is distributed within a groove, flange or other type of joint
                                and distributed through the joint via capillary action.
                            </p>
                            <p>
                                <strong><em></em></strong>
                            </p>
                            <p>
                                <strong><em></em></strong>
                            </p>
                            <p>
                                <strong><em>Braze Welding</em></strong>
                                – a welding process where the filler metal is liquefied above 842 F and
                                beneath the base metals’ solid state.
                            </p>
                            <p>
                                <strong><em>Carbon-Arc Welding</em></strong>
                                – a welding method where fusion is created by an arc between a carbon
                                electrode and the material to be welded.
                            </p>
                            <p>
                                <strong><em>Gas Welding</em></strong>
                                – a welding process where a gas flame creates the welding heat.
                            </p>
                            <p>
                                <strong><em>Machine Welding</em></strong>
                                – Welds that are performed by a machine/robot.
                            </p>
                            <p>
                                <strong><em>Manual Welding</em></strong>
                                – Welds that are performed by a person.
                            </p>
                            <p>
                                <strong><em>Metal-Arc Welding</em></strong>
                                – a welding process where the heat produced from an arc forms a weld by
                                fusing a metal electrode and material to be welded together.
                            </p>
                            <p>
                                <strong><em>Pressure Welding</em></strong>
                                – a welding process where pressure is used to make a weld.
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