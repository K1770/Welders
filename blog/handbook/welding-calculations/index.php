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

    <style>
        .bg-3 {
            padding: 16px;
            border-radius: 8px;
            background: rgb(238, 238, 238);
        }

        .flex-whi {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .gfield_top,
        .gfield_center,
        .gfield_bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            background: white;
            margin-bottom: 16px;
        }

        #V,
        #A,
        #S,
        #input {
            /* width: 100%; */
            height: 50px;
            padding: 16px
        }

        input {
            outline: none;
            border: none;
            width: 100%;
        }

        .label {
            white-space: nowrap;
            margin-left: 16px;
            color: rgb(90, 85, 85);
        }

        .input-end {
            display: flex;
            flex-wrap: nowrap;
            align-items: center;
            width: 100%;
        }

        .mr-5 {
            margin-right: 5px;
        }

        .result {
            background: rgb(255, 165, 0) !important;
        }

        .desc {
            color: rgb(33, 134, 188)
        }
    </style>

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


                    <div class="py-1 text-center container ">
                        <h2 class="fw-light">Weld Consumable Calculator – BUTT AND FILLET WELDS</h2>
                    </div>

                    <div class="mb-5">

                        <?php include('./weld-consumable-calculator/index.php') ?>
                    </div> <!-- col-md-8 -->
                    <div class="mb-5"></div>

                    <div class="py-1 text-center container ">
                        <h2 class="fw-light">Welding Heat Input</h2>
                    </div>

                    <div class="mb-5">
                        <div class="mb-5 bg-3 flex-whi">
                            <div class="gfield_top">
                                <label class="label">Arc Voltage (V)</label>
                                <div class="input-end">
                                    <input id="V">
                                    <div class="gfield_description mr-5">V
                                    </div>
                                </div>

                            </div>
                            <div class="gfield_center">
                                <label class="label">Welding Current</label>
                                <div class="input-end">
                                    <input id="A">
                                    <div class="gfield_description mr-5">A
                                    </div>
                                </div>

                            </div>
                            <div class="gfield_bottom">
                                <label class="label">Welding Speed </label>
                                <div class="input-end">
                                    <input id="S">
                                    <div class="gfield_description mr-5">mm/min
                                    </div>
                                </div>

                            </div>

                            <div class="gfield_bottom result">
                                <label class="label result">Heat Input </label>
                                <div class="input-end result">
                                    <input type="text" id="input" class="result" readonly value="0">
                                    <div class="desc mr-5 result">
                                    </div>
                                </div>

                            </div>


                        </div> <!-- col-md-8 -->
                    </div>

                </div>
                <!--? -->

            </div>
            <!--? -->

        </section>

    </main>

    <?php include('../../fragments/footer.php') ?>
    <script>
        V.oninput, A.oninput, S.oninput = function say_hi() {
            var V = document.getElementById('V').value;
            var A = document.getElementById('A').value;
            var S = document.getElementById('S').value;

            let heatInput = A * V * 0.06 / S

            var html = heatInput.toFixed(2);
            if (html != 'Infinity') {
                document.getElementById('input').innerHTML = html;
                input.value = html
            } else
                input.value = '0'


        }
    </script>

</body>

</html>