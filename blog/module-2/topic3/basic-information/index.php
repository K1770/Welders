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
            <h2 class="fw-light">Mechanical and chemical properties of aluminium</h2>
          </div>

          <div class="mb-5">

            <div>
              <div class="p-main">
                <span class="p-first-words-bold">General information. </span>There are two variants of the name of this metal. The British variant is aluminium and the Ameriacan variant is aluminum.
              </div>
              <div class="p-main">
                <span class="p-first-words">After iron, aluminium is now the second most widely used metal in the world. Aluminium is a ‘clean’ material. It looks good without finishing. Aluminium is also very easy to recycle.</span>
              </div>
              <div class="p-main">
                <span class="p-first-words-bold">Chemical properties: </span>Aluminium has a chemical symbol Al, atomic number 13 and atomic weight 26.98. The isotope has mass number 27. It is a soft, light, silvery-white metal.
              </div>

              <div class="p-main">
                <span class="p-first-words-bold">Physical properties. </span>The properties of aluminium include low dencity and low weight, high strength, superior malleability, easy machining and excellent corrosion resistance. It has good thermal and electrical conductivity. Its melting point is 660 C and boiling point is 2400 C.
              </div>
              <div class="p-main">
                <span class="p-first-words-bold">Strength.</span> Aluminium does not become brittle at low temperatures. Instead, its strength increases. At high temperatures, aluminium’s strength decreases.
              </div>
              <div class="p-main">
                <span class="p-first-words-bold">Machining.</span> Machining methods, such as drilling, cutting, punching, and bending, work with aluminium easily. The energy input during the process is low.
              </div>
              <div class="p-main">
                <span class="p-first-words-bold">Formability.</span> Aluminium’s superior formability is important. This property is exploited in the rolling of foils, as well as in bending and forming operations.
              </div>
              <div class="p-main">
                <span class="p-first-words-bold">Conductivity. </span>Aluminium’s is an excellent conductor of heat and electricity.
              </div>
              <div class="p-main">
                <span class="p-first-words-bold">Joining. </span>Aluminium is easily welded. Aluminium is impossible to braze. It is a big disadvantage of the metal.
              </div>
              <div class="p-main">
                <span class="p-first-words-bold">Corrosion resistance. </span> Aluminium reacts with the oxygen in the air to form an extremely than layer of oxide. Though it is only one-thousandth of a millimetre thick, the layer is dense and provides excellent corrosion protection. The layer is self-repairing if it is damaged. Aluminium is extremely durable in neutral and slightly acid environments.
              </div>
              <div class="p-main">
                <span class="p-first-words-bold">Non-magnetic material. </span>Aluminium is non-magnetic material. To avoid interference of magnetic fields aluminium is often used in magnet X-ray devices.
              </div>
              <div class="p-main">
                <span class="p-first-words-bold">Uses of aluminium. </span>The principal uses of aluminium are for aircraft, machinery, electrical conductors and cooking utensils. Aluminium is used for making small containers. Aluminium cans are popular, especially for soft drinks. Aluminium foil has replaced tinfoil in the kitchen and in packaging products. It is much cheaper. It resists chemical attacks, and it is safe for food while it has a layer of oxide. Because of its corrosion resistance, aluminium is used for window framing. Radiators are made from aluminium, because its thermal conductivity.
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