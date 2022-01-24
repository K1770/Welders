<!doctype html>
<html lang="en">

<head>
    <title>English for welders</title>
    <?php include('../../../fragments/links-style-main.php') ?>

    <link href="../../../css/blog.css" rel="stylesheet">
    <link href="../../../css/style-main.css" rel="stylesheet">
    <link href="../../../css/sidebars.css" rel="stylesheet">
    <link href="../../../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="../../../js/sidebars.js"></script>
    <script src="../../../assets/dist/js/bootstrap.bundle.min.js"></script> <!-- top menu -->
    <style>
        .p-mb-0 {
            margin-bottom: 0;
        }

        video,
        img {
            margin-bottom: 0.5rem;
        }

        @media (min-width: 1200px) {

            .p-img-center {
                width: 75%;
                display: block;
                margin-left: auto;
                margin-right: auto
            }
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
                            'Welding processes' => '..//welding-processes',
                            'Welding materials' => '../welding-materials',
                            'Welding equipment' => '../welding-equipment',
                            'Types of welding' => '../types-of-welding',
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
                </div> <!-- col-md-3-->

                <div class="col-md-9">

                    <div class="pt-1 text-center container">
                        <h2 class="fw-light">Types of welding </h2>
                    </div>

                    <div class="justify-content-centers m-4">
                        <p class="p-mb-0 p-img-center text-center">1. Arc Welding </p>
                        <video class="p-img-center" src="https://thumbs.gfycat.com/DefiantDefinitiveAustralianfreshwatercrocodile-mobile.mp4" width="100%" autoplay loop muted></video>

                        <p class="p-mb-0 p-img-center text-center">2. Atomic Hydrogen Arc Welding </p>
                        <video class="p-img-center" src="https://thumbs.gfycat.com/LankyAnimatedIbex-mobile.mp4" width="100%" autoplay loop muted></video>

                        <p class="p-mb-0 p-img-center text-center">3. Explosive Welding </p>
                        <video class="p-img-center" src="https://thumbs.gfycat.com/BogusLikableKodiakbear-mobile.mp4" width="100%" autoplay loop muted></video>

                        <p class="p-mb-0 p-img-center text-center">4. Friction Stir Welding </p>
                        <video class="p-img-center" src="https://thumbs.gfycat.com/ReflectingPowerfulCygnet-mobile.mp4" width="100%" autoplay loop muted></video>

                        <p class="p-mb-0 p-img-center text-center">5. Laser Welding </p>
                        <video class="p-img-center" src="https://thumbs.gfycat.com/AggravatingWhichAfricanwildcat-mobile.mp4" width="100%" autoplay loop muted></video>

                        <p class="p-mb-0 p-img-center text-center">6. Oxy-Acetylene Welding </p>
                        <video class="p-img-center" src="https://thumbs.gfycat.com/MediocreVioletEarthworm-mobile.mp4" width="100%" autoplay loop muted></video>

                        <p class="p-mb-0 p-img-center text-center">7. Robotised laser welding of textiles </p>
                        <video class="p-img-center" src="https://thumbs.gfycat.com/ScentedPrestigiousFieldspaniel-mobile.mp4" width="100%" autoplay loop muted></video>

                        <p class="p-mb-0 p-img-center text-center">8. Shielded Metal Arc Welding </p>
                        <img class="p-img-center" src="https://cdn.dribbble.com/users/2427581/screenshots/4915785/smaw.gif" width="100%"></img>

                        <p class="p-mb-0 p-img-center text-center">9. Submerged Arc Welding </p>
                        <video class="p-img-center" src="https://thumbs.gfycat.com/DismalThriftyChick-mobile.mp4" width="100%" autoplay loop muted></video>

                        <p class="p-mb-0 p-img-center text-center">10. TIG Welding </p>
                        <video class="p-img-center" src="https://thumbs.gfycat.com/ElaborateDeadGopher-mobile.mp4" width="100%" autoplay loop muted></video>

                        <p class="p-mb-0 p-img-center text-center">11. Ultrasonic welding </p>
                        <video class="p-img-center" src="https://thumbs.gfycat.com/InfatuatedFeminineFish-mobile.mp4" width="100%" autoplay loop muted></video>

                        <p class="p-mb-0 p-img-center text-center">12. Underwater Welding </p>
                        <video class="p-img-center" src="https://thumbs.gfycat.com/DamagedCoordinatedJabiru-mobile.mp4" width="100%" autoplay loop muted></video>


                    </div>
                </div> <!-- col-md-8 -->

            </div>

            </div>
        </section>

    </main>

    <?php include('../../../fragments/footer.php') ?>
</body>

</html>