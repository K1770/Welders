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
            <h2 class="fw-light">Alternative Types of Welding</h2>
          </div>

          <div class="mb-5">

            <div>
              <div class="text-center mb-2">
                <img class="text-center img-basic" src="_img/img1.png">
              </div>

              <div>
                <div class="p-main">
                  <span class="p-first-words-bold">Cold welding.</span> Cold welding, the joining of materials without the use of heat, can be accomplished simply by pressing them together. Surfaces have to be well prepared, and pressure sufficient to produce 35 to 90 percent deformation at the joint is necessary, depending on the material. <strong>Lapped joints</strong> in sheets and <strong>cold-butt</strong> weldingof wires constitute the major applications of this technique. Pressure can be applied <strong>by punch presses</strong>, rolling stands, or <strong>pneumatic tooling</strong>. Pressures of 1,400,000 to 2,800,000 kilopascals (200,000 to 400,000 pounds per square inch) are needed to produce a joint in aluminum; almost all other metals need higher pressures.
                </div>
              </div>
            </div>



            <div>
              <div class="text-center mb-2">
                <img class="text-center img-basic" src="_img/img2.png">
              </div>

              <div>
                <div class="p-main">
                  <span class="p-first-words-bold">Friction welding.</span> In friction welding two work pieces are brought together under load with one part rapidly revolving. Frictional heat is developed at the interface until the material becomes plastic, at which time the rotation is stopped and the load is increased to consolidate the joint. A strong joint results with the plastic deformation, and in this sense the process may be considered a variation of pressure welding. The process is self-regulating, for, as the temperature at the joint rises, the friction coefficient is reduced and overheating cannot occur. The machines are almost like lathes in appearance. Speed, force, and time are the main variables. The process has been automated for the production of axle casings in the automotive industry.
                </div>
              </div>
            </div>


            <div>
              <div class="text-center mb-2">
                <img class="text-center img-basic" src="_img/img3.png">
              </div>

              <div>
                <div class="p-main">
                  <span class="p-first-words-bold">Laser welding.</span> Laser welding is accomplished when the light energy emitted from a laser source focused upon a work-piece to fuse materials together. The limited availability of lasers of sufficient power for most welding purposes has so far restricted its use in this area. Another difficulty is that the speed and the thickness that can be welded are controlled not so much by power but by the thermal conductivity of the metals and by the avoidance of metal vaporization at the surface. Particular applications of the process with very thin materials up to 0.5 mm (0.02 inch) have, however, been very successful. The process is useful in the joining of miniaturized electrical circuitry. Diffusion bonding This type of bonding relies on the effect of applied pressure at an elevated temperature for an appreciable period of time. Generally, the pressure applied must be less than that necessary to cause 5 percent deformation so that the process can be applied to finished machine parts. The process has been used most extensively in the aerospace industries for joining materials and shapes that otherwise could not be made for example, multiple-finned channels and honeycomb construction. Steel can be diffusion bonded at above 1,000 ° C (1,800 ° F) in a few minutes.
                </div>
              </div>
            </div>

            <div>
              <div class="text-center mb-2">
                <img class="text-center img-basic" src="_img/img4.png">
              </div>

              <div>
                <div class="p-main">
                  <span class="p-first-words-bold">Ultrasonic welding.</span> Ultrasonic joining is achieved by clamping the two pieces to be welded between an anvil and a vibrating probe or sonotrode. The vibration raises the temperature at the interface and produces the weld. The main variables are the clamping force, power input, and welding time. A weld can be made in 0.005 second on thin wires and up to 1 second with material 1.3 mm (0.05 inch) thick. Spot welds and continuous seam welds are made with good reliability. Applications include extensive use on lead bonding to integrated circuitry, transistor canning, and aluminum can bodies.
                </div>
              </div>
            </div>

            <div>
              <div class="text-center mb-2">
                <img class="text-center img-basic" src="_img/img5.png">
              </div>

              <div>
                <div class="p-main">
                  <span class="p-first-words-bold">Explosive welding.</span> Explosive welding takes place when two plates are impacted together under an explosive force at high velocity. The lower plate is laid on a firm surface, such as a heavier steel plate. The upper plate is placed carefully at an angle of approximately 5° to the lower plate with a sheet of explosive material on top. The charge is detonated from the hinge of the two plates, and a weld takes place in microseconds by very rapid plastic deformation of the material at the interface. A completed weld has the appearance of waves at the joint caused by a jetting action of metal between the plates.


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