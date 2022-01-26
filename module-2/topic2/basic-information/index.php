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
            <h2 class="fw-light">Mechanical and chemical properties of stainless steel</h2>
          </div>

          <div class="mb-5">

            <div>
              <div class="text-center mb-2">
                <img class="text-center img-basic" src="_img/img1.png">
              </div>

              <div>
                <div class="p-main">
                  <span class="p-first-words"> Stainless steel is an alloy of iron and chromium. Chromium makes it stainless. In metallurgy, stainless steel is known as SS in the engineering parlance. This is a steel alloy with a minimum of 10.5% chromium content by mass. It is highly resistant to corrosion, rusting and staining, that’s why the name of it is “stainless” steel.</span>
                </div>
              </div>
            </div>



            <div>
              <div class="text-center mb-2">
                <img class="text-center img-basic" src="_img/img2.png">
              </div>

              <div>
                <div class="p-main">
                  <span class="p-first-words"> Pure iron (Fe) mixed with carbon is the main element of stainless steel. Chromium, added to steel, makes it resistant to rust. Chromium forms a layer of chromium oxide. It prevents mechanical and chemical damages. The other contents of steel are nickel, nitrogen, silicone, molybdenum and aluminium. Small contents of steel increase the corrosion resistance.</span>
                </div>
                <div class="p-main">
                  <span class="p-first-words">There are five major types of stainless steel such as ferritic, martensitic, precipitation hardening, austenitic and duplex (ferrite-austenitic). Ferritic stainless stell contains about 30 % of chromium. It has good formability and ductility. Martensitic stainless steel is a mixture of about 18% of chromium and about 1% of carbon. It can be hardened by heating. It is less corrosion resistant. Precipitation hardened SS is extremely strong after heat treatment. It has a composition of 17% chromium, 4% nickel and 4% copper. Austenitic steel possesses a minimum of 16% chromium and 6% nickel. It becomes brittle at low temperatures. Duplex steel is characterized by high chromium (19-32%) and molybdenum (up to 5%) content. It is extremely corrosion resistant and has good weldability.</span>
                </div>
              </div>
            </div>


            <div>
              <div class="text-center mb-2">
                <img class="text-center img-basic" src="_img/img3.png">
              </div>

              <div>
                <div class="p-main">
                  <span class="p-first-words"> Stainless steel is a widely used material in industrial and non-industrial application. Ferritic stainless steel is excellent for making cooking utensils and is used in transport. Martensitic stainless steel is used for surgical instruments, scalples, razor blades and knives. Precipitation hardened SS is applied in the oil and gas, nuclear and aerospace, in shipbuilding. Austenitic steel is applied for producing household hardware, coils, doors and windows. Decoration made of stainless steel are very popular.</span>
                </div>
                <div class="p-main">
                  <span class="p-first-words">This material was invented in 1912 by Hurry Brearley in Sheffield, England. He was a metallurgist. Brearley was experimementing with different types of steel for weapons and noticed that 13% chromium steel had not corroded after several months. The material that Brearley invented was a martensitic steel alloy. It was industrialized later. The first non-industrial application of this material was in cutlery, for which Sheffield became famous all over the world.</span>
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

  <?php include('../../../fragments/footer.php') ?>

</body>

</html>