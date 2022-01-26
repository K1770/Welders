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

        @media (min-width: 1200px) {
            .card_img {
                width: 60%;
                margin-left: auto;
                margin-right: auto;
            }
        }

        @media (max-width: 1100px) {
            .w-100 {
                width: 100% !important;
            }

            #num-1,
            #num-2,
            #num-3,
            #num-4,
            #num-5,
            #num-6,
            #num-7,
            #num-8,
            #num-9,
            #num-10 {
                font-size: 1rem !important;
            }
        }

        .card_img {
            position: relative;
        }

        #num-1,
        #num-2,
        #num-3,
        #num-4,
        #num-5,
        #num-6,
        #num-7,
        #num-8,
        #num-9,
        #num-10 {
            position: absolute;
            color: orange;
            /* border: 1px solid #CD5C5C;
            border-radius: 40%;
            padding: 0.1rem; */
            font-size: 2rem;
        }

        #num-1 {
            left: 15%;
            top: 25%;
        }

        #num-2 {
            left: 25%;
            top: 65%;
        }

        #num-3 {
            left: 41%;
            top: 41%;
        }

        #num-4 {
            left: 46%;
            top: 42%;
        }

        #num-5 {
            left: 30%;
            top: 22%;
        }

        #num-6 {
            left: 50%;
            top: 10%;
        }

        #num-7 {
            left: 58%;
            top: 32%;
        }

        #num-8 {
            left: 75%;
            top: 52%;
        }

        #num-9 {
            left: 82%;
            top: 42%;
        }

        #num-10 {
            left: 68%;
            top: 0%;
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
                        <h2 class="fw-light">Welder’s workplace</h2>
                    </div>

                    <div class="row">
                        <article class="card_img  mb-4">
                            <div>
                                <img class="wrap_images" src="_img/workplace.png" alt="">
                            </div>
                            <div id="num-1">1</div>
                            <div id="num-2">2</div>
                            <div id="num-3">3</div>
                            <div id="num-4">4</div>
                            <div id="num-5">5</div>
                            <div id="num-6">6</div>
                            <div id="num-7">7</div>
                            <div id="num-8">8</div>
                            <div id="num-9">9</div>
                            <div id="num-10">10</div>
                        </article>
                    </div>

                    <!-- Button trigger modal -->
                    <div class="row mb-4 center">
                        <div class="col-2 d-flex justify-content-center">
                            <button type="button" onmouseover="hoverItem('num-1')" onmouseout="basicItem('num-1')" class="btn btn-primary btn-block w-100" name="myButton1" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="changeText(this)">
                                1
                            </button>
                        </div>
                        <div class="col-2 d-flex justify-content-center">
                            <button type="button" onmouseover="hoverItem('num-2')" onmouseout="basicItem('num-2')" class="btn btn-primary btn-block w-100" name="myButton2" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="changeText(this)">
                                2
                            </button>
                        </div>
                        <div class="col-2 d-flex justify-content-center">
                            <button type="button" onmouseover="hoverItem('num-3')" onmouseout="basicItem('num-3')" class="btn btn-primary btn-block w-100" name="myButton3" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="changeText(this)">
                                3
                            </button>
                        </div>
                        <div class="col-2 d-flex justify-content-center">
                            <button type="button" onmouseover="hoverItem('num-4')" onmouseout="basicItem('num-4')" class="btn btn-primary btn-block w-100" name="myButton4" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="changeText(this)">
                                4
                            </button>
                        </div>

                        <div class="col-2 d-flex justify-content-center">
                            <button type="button" onmouseover="hoverItem('num-5')" onmouseout="basicItem('num-5')" class="btn btn-primary btn-block w-100" name="myButton5" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="changeText(this)">
                                5
                            </button>
                        </div>
                    </div>

                    <!-- Button trigger modal -->
                    <div class="row mb-4 center">
                        <div class="col-2 d-flex justify-content-center">
                            <button type="button" onmouseover="hoverItem('num-6')" onmouseout="basicItem('num-6')" class="btn btn-primary btn-block w-100" name="myButton6" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="changeText(this)">
                                6
                            </button>
                        </div>
                        <div class="col-2 d-flex justify-content-center">
                            <button type="button" onmouseover="hoverItem('num-7')" onmouseout="basicItem('num-7')" class="btn btn-primary btn-block w-100" name="myButton7" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="changeText(this)">
                                7
                            </button>
                        </div>
                        <div class="col-2 d-flex justify-content-center">
                            <button type="button" onmouseover="hoverItem('num-8')" onmouseout="basicItem('num-8')" class="btn btn-primary btn-block w-100" name="myButton8" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="changeText(this)">
                                8
                            </button>
                        </div>
                        <div class="col-2 d-flex justify-content-center">
                            <button type="button" onmouseover="hoverItem('num-9')" onmouseout="basicItem('num-9')" class="btn btn-primary btn-block w-100" name="myButton9" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="changeText(this)">
                                9
                            </button>
                        </div>

                        <div class="col-2 d-flex justify-content-center">
                            <button type="button" onmouseover="hoverItem('num-10')" onmouseout="basicItem('num-10')" class="btn btn-primary btn-block w-100" name="myButton10" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="changeText(this)">
                                10
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
                    newLabel = "1 - Power on lever ";
                    newTextBody = "When power on lever is switched, current is applied to the power source.";
                    break;
                }
                case 'myButton2': {
                    newLabel = "2 - Power supply";
                    newTextBody = "When switching, current is applied to the power supply.";
                    break;
                }
                case 'myButton3': {
                    newLabel = "3 - Lead clamp";
                    newTextBody = "The lead clamp facilitates the supply of electrical energy to the welding site.";
                    break;
                }
                case 'myButton4': {
                    newLabel = "4 - Electrode holder";
                    newTextBody = "The electrode holder is intended for fixing the electrode and supplying the welding current to it.";
                    break;
                }
                case 'myButton5': {
                    newLabel = "5 - Shelf ";
                    newTextBody = "The shelf is designed to simplify the work with tools in the workplace. ";
                    break;
                }
                case 'myButton6': {
                    newLabel = "6 - Ventilating cowl";
                    newTextBody = "Ventilating cowl eliminates harmful substances, provides a microclimate in the room, eliminates chemical pollution and dust.";
                    break;
                }
                case 'myButton7': {
                    newLabel = "7 - Welder's table";
                    newTextBody = "The welder's table is a welding mechanical equipment designed for the installation of the workpiece to be welded during manual arc welding with covered electrodes and welding in shielding gases.";
                    break;
                }
                case 'myButton8': {
                    newLabel = "8 - Welder's chair";
                    newTextBody = "The welder's chair ensures the maintenance of a physiologically rational working posture of the welder during the work shift, creates conditions for changing the posture in order to reduce the static tension of the muscles of the neck-shoulder region and back, as well as to exclude disturbances in blood circulation in the lower extremities.";
                    break;
                }
                case 'myButton9': {
                    newLabel = "9- Fireproof box ";
                    newTextBody = "The fireproof box is designed for storing electrodes, regulatory documents, etc.";
                    break;
                }
                case 'myButton10': {
                    newLabel = "10 - Lamp";
                    newTextBody = "The lamp is designed to illuminate the welder's work.";
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