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
            <h2 class="fw-light">
              Welding materials and equipment
            </h2>
          </div>

          <div class="mb-5">

            <div class="text-center mb-2">
              <img class="text-center img-basic" style="height: 45vh; width:45vh" src="_img/img1.png">
            </div>

            <div class="p-main">
              <span class="p-first-words" />
              1. Welding current is conducted from the source of power to the arc by an insulated copper or aluminum cable. A very flexible cable is used between the electrode holder and the welding machine. This cable is designed for welding service.
              For grounding the welding circuit, a less flexible, but equally wear resistant cable is used. The size of the cables used in welding depends upon the type of the material to be welded and the distance of the source of power.
            </div>
            <div class="p-main">
              <span class="p-first-words" />
              2. The electrode is an important component of the electric circuit. We know electrodes to be divided into consumable and non-consumable electrodes. Tungsten and carbon electrodes are non-consumable. In the case of carbon and tungsten arc welding a filler metal may be fed from aside to supply an additional metal to the molten pool. As for the consumable electrodes, they are produced in the form of metal rod or wire, and for this reason provide a filler metal.
            </div>
            <div class="p-main">
              <span class="p-first-words" />
              3. All the consumable electrodes are divided into bare and coated electrodes. An important advantage of arc welding is in the protection that a special mineral flux composition provides for the molten deposit. It is know that metal electrodes for the covered with flux coatings produce stronger welded joints as compared with those made with bare electrodes.
            </div>
            <div class="p-main">
              <span class="p-first-words" />
              4. As it was mentioned, the electrodes are held in a special device-an electrode holder. The electrode holder is a clamping device for holding the electrode and is provided with an insulated handle for the operation’s hand. It should be mechanically strong, light in weight and hold the electrode firmly in position during welding.
            </div>
            <div class="p-main">
              <span class="p-first-words" />
              5. We know that the arc is very hot and therefore it throws off both light and heat. To protect the operator’s face and eyes from the direct rays of the arc it is necessary to use a face shield or helmet. These shield or helmets are produced of pressed insulating material black in colour. The shield should be light in weight and comfortable to the welder. Shields are provided with special welding coloured lens absorbing the infrared rays, special goggles are used by welder’s assistants, foremen, inspectors and others working near the welder.
            </div>
            <div class="p-main">
              <span class="p-first-words" />
              6. In addition to the equipment and materials described above, there should be available steel brushes for cleaning welds, tools for removing scale and slag from the surface of the weld and other shop equipment. Of course, in any welding shop you may find the equipment for welding inspection.
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