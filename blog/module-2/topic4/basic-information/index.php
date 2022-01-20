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
            <h2 class="fw-light">Cast iron, copper and its alloys</h2>
          </div>

          <div class="mb-5">

            <div>


              <div>
                <div class="p-main">
                  <span class="p-first-words"> Each metal possesses certain distinct combinations of properties, that may be varied for specific engineering applications by alloying it with relatively, small amounts of other materials. The term <strong>“alloy”</strong> is used to determine a material containing more than one chemical element. The properties of the alloy being determined by the properties of the elements it consists of. The main alloying element in ferrous metals is <strong>carbon</strong> (C). Depending on the amount of carbon, alloys have different properties. The carbon content may be either less or higher than 2,14 %. Below this amount of carbon material undergoes hard cast eutectoid* transformation, while above that limit ferrous materials undergo easy cast eutectic** transformation. The ferrous alloys with less than 2,14 % C are termed as steels, and the ferrous alloys with higher than 2,14 % C are termed as <strong>cast irons</strong>.</span>
                </div>
                <div class="p-main">
                  <span class="p-first-words">Steels are alloys of iron and carbon with other alloying elements. Steels can be low, medium and high carbon. Cast irons may contain 3.0–4.5 % C along with some other alloying additions and melt at lower temperatures than steels. Cast irons are specified as gray, white, nodular and malleable cast irons.</span>
                </div>
                <div class="text-center mb-2">
                  <img class="text-center img-basic" src="_img/img1.png">
                </div>
                <div class="p-main">
                  <span class="p-first-words-bold">Gray cast iron</span> consists of carbon in the form of graphite flakes, which are surrounded by either ferrite or pearlite. Although gray cast irons are weak and brittle they possess good damping properties and are applied in base structures, beds for heavy machines as they have high resistance to wear.
                </div>
                <div class="p-main">
                  <span class="p-first-words-bold">White cast irons </span> are very brittle. Hence their use is limited to wear resistant applications, such as rollers in rolling mills. Usually white cast iron is heat treated to produce malleable iron.
                </div>
                <div class="text-center mb-2">
                  <img class="text-center img-basic" src="_img/img2.png">
                </div>
                <div class="p-main">
                  <span class="p-first-words-bold">Malleable cast irons </span> are stronger and possess high amount of ductility. Their typical application include railroad, connecting rods, marine and other heavy-duty services.
                </div>
                <div class="text-center mb-2">
                  <img class="text-center img-basic" src="_img/img3.png">
                </div>
                <div class="p-main">
                  <span class="p-first-words-bold">Nodular (or ductile) cast irons </span> are stronger and more ductile than gray cast irons. Their applications are pump bodies, crank shafts, automotive components, etc.
                </div>
                <div class="p-main">
                  <span class="p-first-words-bold">Non-ferrous alloys </span> are also widely used in engineering.
                </div>
                <div class="p-main">
                  <span class="p-first-words-bold">Aluminium alloys </span>are characterized by low density, high thermal and electrical conductivities, good corrosion resistant characteristics. But the great limitation of these alloys is their low melting point (660 єC). Aluminium alloys with Lithium (Li), Magnesium (Mg) and Titanium (Ti) are paid much attention when vehicle weight reduction is concerned. They are very useful in aircraft and aerospace industries. Common applications of Al alloys include: beverage cans, automotive parts, bus bodies.
                </div>
                <div class="p-main">
                  <span class="p-first-words"> It is worth mentioning that aluminium alloys are used where light weight is needed. They are also used because of their resistance to corrosion. Aluminium alloys also possess desirable property of thermal and electrical conductivity.</span>
                </div>
                <div class="p-main">
                  <span class="p-first-words"> Beside aluminium alloys there are some other non-ferrous ones: copper, lead, tin, zinc, nickel alloys. It is necessary to point out that both ferrous and non-ferrous metals possess many characteristic features: elasticity, ductility, malleability, toughness, brittleness, hardness, wear resistance and corrosion resistance. Copper alloys form such metals, as brass and bronze. The aluminium alloys with copper, manganese, silicon and nickel are widely used where corrosion resistance, high electrical conductivity, ductility and high strength are needed. Zinc alloys have some advantages over others in foundry: excellent casting properties, machinability and lower density than bronze.</span>
                </div>
                <div class="p-main">
                  <span class="p-first-words-bold">Copper </span>is an excellent electrical conductor of heat and electricity, extremely malleable and can be polished, oxidises to a green colour. Its application is plumbing fittings and electrical wires, professional chef's saucepans.
                </div>
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