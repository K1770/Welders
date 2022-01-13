<!doctype html>
<html lang="en">

<head>
    <title>English for welders</title>
    <?php include('../../fragments/links-style.php') ?>

    <link href="../../css/blog.css" rel="stylesheet">
    <link href="../../css/style-main.css" rel="stylesheet">
    <!-- <link href="../../css/style-basic.css" rel="stylesheet"> -->
    <link href="../../css/sidebars.css" rel="stylesheet">
    <link href="../../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="../../js/sidebars.js"></script>
    <script src="../../assets/dist/js/bootstrap.bundle.min.js"></script> <!-- top menu -->

    <style>
        .modal-dialog-div {
            justify-content: center;
            align-items: center;
            display: flex;
            margin-left: auto;
            margin-right: auto;
        }

        .mdw {
            max-width: 12rem !important;
            top: 40%;
            bottom: 0;
            margin: auto;
            position: absolute;
            left: 0;
            right: 0;
        }

        .mda {
            max-width: 24rem !important;
            top: 35%;
            bottom: 0;
            margin: auto;
            position: absolute;
            left: 0;
            right: 0;
        }

        .wrap_images {
            width: 100%;
            height: auto;
        }

        .center {
            justify-content: center;
        }

        @media (max-width: 768px) {
            .w-50 {
                width: auto !important;
            }
        }


        .card_img {
            position: relative;
            margin-left: auto;
            margin-right: auto;
        }

        #num-1,
        #num-2,
        #num-3,
        #num-4 {
            position: absolute;
            color: orange;
            font-size: 2rem;
        }

        #num-1 {
            left: 54%;
            top: 10%;
        }

        #num-2 {
            left: 39%;
            top: 36%;
        }

        #num-3 {
            left: 35%;
            top: 53%;
        }

        #num-4 {
            left: 65%;
            top: 80%;
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
                        <h2 class="fw-light">Welder’s clothing</h2>
                    </div>

                    <div class="row">
                        <article class="card_img col-md-4">
                            <div>
                                <img class="wrap_images" src="_img/clothes.png" alt="">
                            </div>
                            <div id="num-1">1</div>
                            <div id="num-2">2</div>
                            <div id="num-3">3</div>
                            <div id="num-4">4</div>
                        </article>
                    </div>

                    <!-- Button trigger modal -->
                    <div class="row mb-4 center">
                        <div class="col-3 d-flex justify-content-center">
                            <button type="button" onmouseover="hoverItem('num-1')" onmouseout="basicItem('num-1')" class="btn btn-primary btn-block w-50" name="myButton1" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="changeText(this)">
                                1
                            </button>
                        </div>
                        <div class="col-3 d-flex justify-content-center">
                            <button type="button" onmouseover="hoverItem('num-2')" onmouseout="basicItem('num-2')" class="btn btn-primary btn-block w-50" name="myButton2" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="changeText(this)">
                                2
                            </button>
                        </div>
                        <div class="col-3 d-flex justify-content-center">
                            <button type="button" onmouseover="hoverItem('num-3')" onmouseout="basicItem('num-3')" class="btn btn-primary btn-block w-50" name="myButton3" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="changeText(this)">
                                3
                            </button>
                        </div>
                        <div class="col-3 d-flex justify-content-center">
                            <button type="button" onmouseover="hoverItem('num-4')" onmouseout="basicItem('num-4')" class="btn btn-primary btn-block w-50" name="myButton4" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="changeText(this)">
                                4
                            </button>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade w-100" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog-div">
                            <div class="modal-dialog mda">
                                <div class="modal-content">
                                    <div class="modal-header1 text-center py-1">
                                        <h5 class="modal-title " id="exampleModalLabel">Modal title</h5>
                                    </div>
                                    <div class="modal-body text-center">
                                        Название слова
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Non consectetur nihil quos earum quod consequuntur eius fugiat id nisi laudantium expedita eveniet ea soluta iste, sapiente facere tempora laborum quaerat?
                                    </div>
                                    <!-- <div class="modal-footer"> -->
                                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                    <!-- </div> -->
                                </div>
                            </div>
                        </div>

                    </div>

                </div> <!-- col-md-8 -->

            </div>
            <!--? -->

            </div>
            <!--? -->

        </section>

    </main>

    <script>
        function changeText(button) {
            let buttonName = button.name;
            let newLabel = "";
            let newTextBody = "";
            switch (buttonName) {
                case 'myButton1': {
                    newLabel = "1 - Welding helmet";
                    newTextBody = "Welding helmet is designed to protect the eyes and face of the welder during welding.";
                    break;
                }
                case 'myButton2': {
                    newLabel = "2 - Welding suit";
                    newTextBody = "Welding suit protects the body from metal scale, burns, etc.";
                    break;
                }
                case 'myButton3': {
                    newLabel = "3 - Welding gloves";
                    newTextBody = "Welding gloves protect the worker's hands from high temperature sparks, radiation, which are inherent in welding.";
                    break;
                }
                case 'myButton4': {
                    newLabel = "4 - Steel-toed boots";
                    newTextBody = "Steel-toed boots are used to protect against burns by splashes of molten metal, mechanical injuries, hypothermia when working outdoors in winter.";
                    break;
                }

            }
            $('#exampleModalLabel').text(newLabel);
            $('.modal-body:eq(0)').text(newTextBody);
        }

        function hoverItem(numId) {
            document.getElementById(numId).style.textShadow = '5px 0 5px #CD5C5C,  0 5px 5px #CD5C5C, -5px 0 5px #CD5C5C, 0 -5px 5px #CD5C5C';
            document.getElementById(numId).style.color = 'white';
            document.getElementById(numId).style.fontSize = '2.5rem';
        }

        function basicItem(numId) {
            document.getElementById(numId).style.textShadow = 'none';
            document.getElementById(numId).style.color = 'orange';
            document.getElementById(numId).style.fontSize = '2rem';
        }
    </script>

    <?php include('../../fragments/footer.php') ?>

</body>

</html>