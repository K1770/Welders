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
              'Symbols in Welding' => '../../topic1',
              'Alternative Types of Welding' => '../../topic2',
              'Arc and Gas Welding' => '../../topic3'
            )
          ); ?>
        </div> <!-- col-md-3 -->

        <div class="col-md-9">

          <div class="py-1 text-center container ">
            <h2 class="fw-light">Arc and Gas Welding</h2>
          </div>

          <div class="mb-5">

            <div>
              <div class="p-main">
                <span class="p-first-words-bold">Power Supplies.</span> To supply the electrical energy necessary for arc welding processes, a number of different power supplies can be used. The most common classification is constant current power supplies and constant voltage power supplies. In arc welding, the voltage is directly related to the length of the arc, and the current is related to the amount of heat input. Constant current power supplies are most often used for manual welding processes such as gas tungsten arc welding and shielded metal arc welding, because they maintain a relatively constant current even as the voltage varies. This is important because in manual welding, it can be difficult to hold the electrode perfectly steady, and as a result, the arc length and thus voltage tend to fluctuate. Constant voltage power supplies hold the voltage constant and vary the current, and as a result, are most often used for automated welding processes such as gas metal arc welding, flux cored arc welding, and submerged arc welding.
              </div>
              <div class="text-center mb-2">
                <img class="text-center img-basic" src="_img/img1.png">
              </div>
              <div class="p-main">
                <span class="p-first-words"> In these processes, arc length is kept constant, since any fluctuation in the distance between the wire and the base material is quickly rectified by a large change in current. For example, if the wire and the base material get too close, the current will rapidly increase, which in turn causes the heat to increase and the tip of the wire to melt, returning it to its original separation distance.</span>
              </div>
              <div class="p-main">
                <span class="p-first-words"> The type of current used in arc welding also plays an important role in welding. Consumable electrode processes such as shielded metal arc welding and gas metal arc welding generally use direct current, but the electrode can be charged either positively or negatively. In welding, the positively charged 53 anode will have a greater heat concentration, and as a result, changing the polarity of the electrode has an impact on weld properties. If the electrode is positively charged, it will melt more quickly, increasing weld penetration and welding speed. Alternatively, a negatively charged electrode results in more shallow welds. Non-consumable electrode processes, such as gas tungsten arc welding, can use either type of direct current, as well as alternating current. However, with direct current, because the electrode only creates the arc and does not provide filler material, a positively charged electrode causes shallow welds, while a negatively charged electrode makes deeper welds.</span>
              </div>
              <div class="p-main">
                <span class="p-first-words"> Alternating current rapidly moves between these two, resulting in medium-penetration welds. One disadvantage of AC, the fact that the arc must be re-ignited after every zero crossing, has been addressed with the invention of special power units that produce a square wave pattern instead of the normal sine wave, making rapid zero crossings possible and minimizing the effects of the problem.</span>
              </div>
            </div>

            <div>
              <div class="text-center mb-2">
                <img class="text-center img-basic" src="_img/img2.png">
              </div>
              <div class="p-main">
                <span class="p-first-words-bold">Consumable Electrode Methods.</span> One of the most common types of arc welding is shielded metal arc welding (SMAW), which is also known as manual metal arc welding (MMA) or stick welding. Electric current is used to strike an arc between the base material and consumable electrode rod, which is made of steel and is covered with a flux that protects the weld area from oxidation and contamination by producing CO2 gas during the welding process. The electrode core itself acts as filler material, making a separate filler unnecessary. The process is very versatile, requiring little operator training and inexpensive equipment. However, weld times are rather slow, since the consumable electrodes must be frequently replaced and because slag, the residue from the flux, must be chipped away after welding. Furthermore, the process is generally limited to welding ferrous materials, though special electrodes have made possible the welding of cast iron, nickel, aluminum, copper, and other metals. The versatility of the method makes it popular in a number of applications, including repair work and construction.
              </div>
              <div class="p-main">
                <span class="p-first-words"> Gas metal arc welding (GMAW), also known as metal inert gas (MIG) welding, is a semi-automatic or automatic welding process that uses a continuous wire feed as an electrode and an inert or semi-inert gas mixture to protect the weld from contamination. Since the electrode is continuous, welding speeds are greater for GMAW than for SMAW. However, because of the additional equipment, the process is less portable and versatile, but still useful for industrial applications. The process can be applied to a wide variety of metals, both ferrous and non-ferrous. A related process, flux-cored arc welding (FCAW), uses similar equipment but uses wire consisting of a steel electrode surrounding a powder fill material. This cored wire is more expensive than the standard solid wire and can generate fumes and/or slag, but it permits higher welding speed and greater metal penetration. </span>
              </div>
              <div class="p-main">
                <span class="p-first-words"> Submerged arc welding (SAW) is a high-productivity welding method in which the arc is struck beneath a covering layer of flux. This increases arc quality, since contaminants in the atmosphere are blocked by the flux. The slag that forms on the weld generally comes off by itself, and combined with the use of a continuous wire feed, the weld deposition rate is high. Working conditions are much improved over other arc welding processes, since the flux hides the arc and no smoke is produced. The process is commonly used in industry, especially for large products. </span>
              </div>
            </div>


            <div>
              <div class="p-main">
                <span class="p-first-words-bold">Non-Consumable Electrode Methods.</span> Gas tungsten arc welding (GTAW), o tungsten inert gas (TIG) welding, is a manual welding process that uses a non-consumable electrode made of tungsten, an inert or semi-inert gas mixture, and a separate filler material.
              </div>
              <div class="text-center mb-2">
                <img class="text-center img-basic" src="_img/img3.png">
              </div>
              <div class="p-main">
                <span class="p-first-words"> Especially useful for welding thin materials, this method is characterized by a stable arc and high quality welds, but it requires significant operator skill and can only be accomplished at relatively low speeds. It can be used on nearly all weldable metals, though it is most often applied to stainless steel and light metals. It is often used when quality welds are extremely important, such as in bicycle, aircraft and naval applications. A related process, plasma arc welding, also uses a tungsten electrode but uses plasma gas to make the arc. </span>
              </div>
              <div class="p-main">
                <span class="p-first-words"> The arc is more concentrated than the GTAW arc, making transverse control more critical and thus generally restricting the technique to a mechanized process. Because of its stable current, the method can be used on a wider range of material thicknesses than can the GTAW process, and furthermore, it is much faster. It can be applied to all of the same materials as GTAW except magnesium, and automated welding of stainless steel is one important application of the process. A variation of the process is plasma cutting, an efficient steel cutting process. Other arc welding processes include atomic hydrogen welding, carbon arc welding, electroslag welding, electrogas welding, and stud arc welding.</span>
              </div>
            </div>

            <div>
              <div class="p-main">
                <span class="p-first-words-bold">Safety Issues.</span> Welding, without the proper precautions, can be a dangerous and unhealthy practice. However, with the use of new technology and proper protection, the risks of injury and death associated with welding can be greatly reduced. Because many common welding procedures involve an open electric arc or flame, the risk of burns is significant. To prevent them, welders wear protective clothing in the form of heavy leather gloves and protective long sleeve jackets to avoid exposure to extreme heat and flames. Additionally, the brightness of the weld area leads to a condition called arc eye in which ultraviolet light causes the inflammation of the cornea and can burn the retinas of the eyes. Goggles and helmets with dark face plates are worn to prevent this exposure, and in recent years, new helmet models have been produced that feature a face plate that self-darkens upon exposure to high amounts of UV light. To protect bystanders, transparent welding curtains often surround the welding area. These curtains, made of a polyvinyl chloride plastic film, shield nearby workers from exposure to the UV light from the electric arc, but should not be used to replace the filter glass used in helmets.
              </div>
              <div class="p-main">
                <span class="p-first-words"> Welders are also often exposed to dangerous gases and particulate matter. Processes like flux-cored arc welding and shielded metal arc welding produce smoke containing particles of various types of oxides. The size of the particles in question tends to influence the toxicity of the fumes, with smaller particles presenting a greater danger. Additionally, many processes produce various gases, most commonly carbon dioxide and ozone, and fumes that can prove dangerous if ventilation is inadequate. Furthermore, because the use of compressed gases and flames in many welding processes pose an explosion and fire risk, some common precautions include limiting the amount of oxygen in the air and keeping combustible materials away from the workplace. </span>
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