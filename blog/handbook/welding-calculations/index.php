<!doctype html>
<html lang="en">

<head>
    <title>English for welders</title>
    <?php include('../../fragments/links-style-main.php') ?>

    <link href="../../css/blog.css" rel="stylesheet">
    <link href="../../css/style-main.css" rel="stylesheet">
    <link href="../../css/style-basic.css" rel="stylesheet">
    <link href="../../css/sidebars.css" rel="stylesheet">
    <link href="../../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="../../js/sidebars.js"></script>
    <script src="../../assets/dist/js/bootstrap.bundle.min.js"></script> <!-- top menu -->

</head>

<body>
    <div class="container">
        <?php include('../../fragments/header.php'); ?>
    </div>

    <main class="container container2 mt-2">

        <section class="home-section ">

            <div class="row">

                <div class="col-md-3">
                    <?php topicsOnly(
                        '../../fragments/nav-sidebar-handbook-one.php',
                        array(
                            'categoryLink1' => '../../handbook/welders-clothing',
                            'categoryLink2' => '../../handbook/welders-workplace',
                            'categoryLink3' => '../../handbook/health-and-safety-prevention',

                            'categoryLink4' => '../../handbook/metalwork',
                            'categoryLink5' => '../../handbook/symbols-in-welding',
                            'categoryLink6' => '../../handbook/how-to-weld',

                            'categoryLink7' => '../../handbook/glossary',
                            'categoryLink8' => '../../handbook/welding-calculations',
                            'categoryLink9' => 'https://docs.google.com/forms/d/1C0wKzaX9HkreBmB_JpKrSmpA_lDO_DH7ovqTBVw9oOo/edit'
                        )
                    ); ?>
                </div> <!-- col-md-3 -->

                <div class="col-md-9">

                    <div class="py-1 text-center container ">
                        <h2 class="fw-light">Weld Strength Calculation</h2>
                    </div>

                    <div class="mb-5">

                        <div class="omni-calculator" data-calculator="construction/welding" data-width="100%" data-config='{}' data-currency="BYR" data-show-row-controls="false" data-version="3" data-t="1642078898726">
                            <div class="omni-calculator-header"></div>
                            <div class="omni-calculator-footer">
                                <a href="https://www.omnicalculator.com/construction/welding" target="_blank"></a>
                            </div>
                        </div>
                        <script async src="./sdk.js"></script>

                    </div>

                </div> <!-- col-md-8 -->

            </div>
            <!--? -->

            </div>
            <!--? -->

        </section>

    </main>

    <?php include('../../fragments/footer.php') ?>

</body>

</html>