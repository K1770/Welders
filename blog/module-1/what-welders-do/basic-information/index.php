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
              'The history of weilding' => '../../the-history-of-weilding',
              'What welders do' => '../../what-welders-do',
              'Welding equipment and materials' => '../../welding-equipment-and-materials'
            )
          ); ?>
        </div> <!-- col-md-3 -->

        <div class="col-md-9">

          <div class="py-1 text-center container ">
            <h2 class="fw-light">What is welding and what do welders do?</h2>
          </div>

          <div class="mb-5">

            <div class="p-main">
              <span class="p-first-words" />Welding is the most economical and efficient way to join metals permanently. It is the only way of joining two or more pieces of metal to make them act as a single piece. Welding is vital to our economy. It is often said that over 50% of the gross national product of the U.S.A. is related to welding in one way or another. Welding ranks high among industrial processes and involves more sciences and variables than those involved in any other industrial process.
            </div>

            <div class="text-center mb-2">
              <img class="text-center img-basic" src="_img/img1.png">
            </div>
            <div class="p-main">
              <span class="p-first-words" />There are many ways to make a weld and many different kinds of welds. Some processes cause sparks and others do not even require extra heat. Welding can be done anywhere… outdoors or indoors, underwater and in outer space.
            </div>

            <div class="p-main">
              <span class="p-first-words" />
              Nearly everything we use in our daily life is welded or made by equipment that is welded. Welders help build metal products from coffeepots to skyscrapers. They help build space vehicles and millions of other products ranging from oil drilling rigs to automobiles. In construction, welders are virtually rebuilding the world, extending subways, building bridges, and helping to improve the environment by building pollution control devices. The use of welding is practically unlimited.
            </div>


            <div class="text-center mb-2">
              <img class="text-center img-basic" src="_img/img2.png">
            </div>
            <div class="p-main">
              <span class="p-first-words" />
              There is no lack of variety of the type of work that is done.
              Welders are employed in many industry groups. Machinery manufacturers are responsible for agricultural, construction, and mining machinery. They are also involved in bulldozers, cranes, material handling equipment, food-processing machinery, papermaking and printing equipment, textiles, and office machinery.
              The fabricated metals products compiles another group including manufacturers of pressure vessels, heat exchangers, tanks, sheet metal, prefabricated metal buildings and architectural and ornamental work. Transportation is divided into two major groups: manufacturers of transportation equipment except motor vehicles; and motor vehicles and equipment. The first includes shipbuilding, aircraft, spacecraft, and railroads. The second includes automobiles, trucks, buses, trailers, and associated equipment.
            </div>

            <div class="text-center mb-2">
              <img class="text-center img-basic" src="_img/img3.png">
            </div>
            <div class="p-main">
              <span class="p-first-words" />A small group of welders belongs to the group of repair services. This in cludes maintenance and repair automobiles or refers to the welding performed on industrial and electrical machinery to repair worn parts. The mining, oil extraction, and gas extraction industries form yet another group. A large portion of the work involves drilling and extracting oil and gas or mining of ores, stone, sand and gravel.
            </div>

            <div class="p-main">
              <span class="p-first-words" />Welders are also employed in the primary metals industries to include steel mills, iron and steel foundries, smelting and refining plants. Much of this work is maintenance and repair of facilities and equipment. Another group is the electrical and electronic equipment companies. Welding done by this group runs from work on electric generators, battery chargers, to household appliances.
              Public administration employs welders to perform maintenance welding that is done on utilities, bridges, government armories and bases, etc. Yet another group involves wholesale and retail establishments. These would include auto and agricultural equipment dealerships, metal service centers, and scrap yards.
              Probably the smallest group of welders, but perhaps those with the biggest impact on the public are the artist and sculptors. The St. Louis Arch is possibly one of the best known. But there are many other fountains and sculptures in cities and neighborhoods around the world.
            </div>
          </div>


        </div>

      </div> <!-- col-md-8 -->

      </div>

      </div>
    </section>

  </main>

  <?php include('../../../fragments/footer.php') ?>

</body>

</html>