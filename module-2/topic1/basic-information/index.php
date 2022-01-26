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

  <script src="../../../js/sidebars.js"></script>
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
            '../../../fragments/nav-sidebar.php',
            array(
              'categoryLink1' => '../basic-information',
              'categoryLink2' => '../video',
              'categoryLink3' => '../vocabulary'
            ),
            array(
              'Mechanical and chemical properties of carbon steel' => '../../topic1',
              'Mechanical and chemical properties of stainless steel' => '../../topic2',
              'Mechanical and chemical properties of aluminium' => '../../topic3',
              'Cast iron, copper and its alloys' => '../../topic4',
            )
          ); ?>
        </div> <!-- col-md-3 -->

        <div class="col-md-9">

          <div class="py-1 text-center container ">
            <h2 class="fw-light">Mechanical and chemical properties of carbon steel</h2>
          </div>

          <div class="mb-5">

            <div>

              <div>
                <div class="p-main">
                  <span class="p-first-words">Steel is an alloy. It is made from iron and carbon. Other chemical elements can be used as well. If the the main alloying element is carbon, the steel is called carbon steel or plain carbon steel.</span>
                </div>
                <div class="p-main">
                  <span class="p-first-words-bold">Low-carbon steel and mild steel</span>(низкоуглеристая и малоуглеристая сталь)
                </div>
              </div>

              <div class="text-center mb-2">
                <img class="text-center img-basic" src="_img/img1.png">
              </div>

              <div>
                <div class="p-main">
                  <span class="p-first-words">Low–carbon steel typically contains 0.05 to 0.15 per cent carbon. Mild steel contains 0.16 to 0.29 per cent. Such steels are not brittle, but not ductile (easily stretched) either. They are less hard but more malleable (easily deformed under compressive stress) than higher carbon steels. Their malleability and lower price make them useful in construction. Their machinability and weldability are good as well. The alloys are also used for wires and automobile body panels.</span>
                </div>
                <div class="p-main">
                  <span class="p-first-words-bold">Medium-carbon steels </span>(среднеуглеродистые стали)
                </div>

              </div>
            </div>

            <div class="text-center mb-2">
              <img class="text-center img-basic" src="_img/img2.png">
            </div>

            <div>
              <div class="p-main">
                <span class="p-first-words">Medium-carbon steels contain 0.30 to 0.59 per cent carbon. They can also contain 0.60 to 1.65 per cent manganese. Medium-carbon steels are more ductile than high-carbon steels, and harder and less malleable than low− carbon steels. Medium-carbon steels have good wear resistance, that is why they are often used for automobile parts and similar applications. The alloys are also used in forging.</span>
              </div>
              <div class="p-main">
                <span class="p-first-words-bold">High-carbon steels</span> (высокоуглеродистые стали)
              </div>
            </div>

            <div>
              <div class="text-center mb-2">
                <img class="text-center img-basic" src="_img/img3.png">
              </div>

              <div>
                <div class="p-main">
                  <span class="p-first-words">High-carbon steels contain around 0.6 to 0.99 per cent carbon. They may also contain up to 0.90 per cent manganese. They are very hard and strong, but less ductile and malleable than medium – and low-carbon steels. They become harder after heating. They have excellent wear resistance. The alloys are strong and resistant to deformation under compression, that’s why they are used to make springs and high –strength wires.</span>
                </div>
                <div class="p-main">
                  <span class="p-first-words-bold">Ultrahigh-carbon steels </span> (сверхвысокоуглеродистые стали)
                </div>
              </div>
            </div>

            <div class="text-center mb-2">
              <img class="text-center img-basic" src="_img/img4.png">
            </div>

            <div>
              <div class="p-main">
                <span class="p-first-words">They can contain between 1.25 and 2.0 per cent carbon. They can become extremely hard. They can be given a very sharp edge. It makes them good cutting tools. The alloys are used to make punches and axles. The addition of more than 10 per cent chronium produces stainless steel.</span>
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

  <?php include('../../../fragments/footer.php') ?>

</body>

</html>