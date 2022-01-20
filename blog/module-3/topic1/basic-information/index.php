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
  <style>
    tr {
      border: solid 1px black;
    }

    td {
      border: solid 1px black;
      padding: 0.5rem;
    }

    .content {
      margin-bottom: 1rem;
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
            <h2 class="fw-light">Symbols in Welding</h2>
          </div>

          <div class="mb-5">

            <table border="1" cellspacing="0" cellpadding="0">
              <tbody>
                <tr>
                  <td>
                    <p>
                      <strong>Name</strong>
                    </p>
                    <p>
                      <strong></strong>
                    </p>
                  </td>
                  <td>
                    <p>
                      <strong>ISO</strong>
                    </p>
                  </td>
                  <td>
                    <p>
                      <strong>AWS</strong>
                    </p>
                  </td>
                  <td>
                    <p>
                      <strong>Characteristics</strong>
                    </p>
                  </td>
                  <td>
                    <p>
                      <strong>Applications</strong>
                    </p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>
                      Carbon Arc Welding
                    </p>
                  </td>
                  <td>
                    <p>
                      181
                    </p>
                  </td>
                  <td>
                    <p>
                      CAW
                    </p>
                  </td>
                  <td>
                    <p>
                      Carbon electrode
                    </p>
                  </td>
                  <td>
                    <p>
                      Copper, repair (limited)
                    </p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>
                      Flux Cored Arc Welding
                    </p>
                  </td>
                  <td>
                    <p>
                      136
                    </p>
                    <p>
                      137
                    </p>
                  </td>
                  <td>
                    <p>
                      FCAW
                    </p>
                    <p>
                      FCAW-S
                    </p>
                  </td>
                  <td>
                    <p>
                      Continuous consumable electrode filled with flux
                    </p>
                  </td>
                  <td>
                    <p>
                      Industry, construction
                    </p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>
                      Gas Metal Arc Welding
                    </p>
                  </td>
                  <td>
                    <p>
                      131
                    </p>
                    <p>
                      135
                    </p>
                  </td>
                  <td>
                    <p>
                      GMAW
                    </p>
                  </td>
                  <td>
                    <p>
                      Continuous consumable electrode and shielding gas
                    </p>
                  </td>
                  <td>
                    <p>
                      Industry
                    </p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>
                      Gas Tungsten Arc Welding
                    </p>
                  </td>
                  <td>
                    <p>
                      141
                    </p>
                  </td>
                  <td>
                    <p>
                      GTAW
                    </p>
                  </td>
                  <td>
                    <p>
                      Nonconsumable electrode, slow, high quality welds
                    </p>
                  </td>
                  <td>
                    <p>
                      Aerospace, Construction (piping)
                    </p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>
                      Plasma Arc Welding
                    </p>
                  </td>
                  <td>
                    <p>
                      15
                    </p>
                  </td>
                  <td>
                    <p>
                      PAW
                    </p>
                  </td>
                  <td>
                    <p>
                      Nonconsumable electrode, constricted arc
                    </p>
                  </td>
                  <td>
                    <p>
                      Tubing, instrumentation
                    </p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>
                      Shielded Metal Arc Welding
                    </p>
                  </td>
                  <td>
                    <p>
                      111
                    </p>
                  </td>
                  <td>
                    <p>
                      SMAW
                    </p>
                  </td>
                  <td>
                    <p>
                      Consumable electrode covered in flux, can weld any metal as
                      long as they have the right electrode
                    </p>
                  </td>
                  <td>
                    <p>
                      Construction, outdoors, maintenance
                    </p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>
                      Submerged Arc Welding
                    </p>
                  </td>
                  <td>
                    <p>
                      121
                    </p>
                  </td>
                  <td>
                    <p>
                      SAW
                    </p>
                  </td>
                  <td>
                    <p>
                      Automatic, arc submerged in granular flux
                    </p>
                  </td>
                  <td>
                    <p>
                      Pipelines
                    </p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>
                      Magnetically Impelled Arc Butt
                    </p>
                  </td>
                  <td>
                    <p>
                      185
                    </p>
                  </td>
                  <td>
                    <p>
                      MIAB
                    </p>
                  </td>
                  <td>
                    <p>
                      Both tube ends are electrodes; no protection gas; arc
                      rotates fast along edge by applied magnetic field
                    </p>
                  </td>
                  <td>
                    <p>
                      Pipelines and tubes
                    </p>
                  </td>
                </tr>
              </tbody>
            </table>
            <p></p>

            <table border="1" cellspacing="0" cellpadding="0">
              <tbody>
                <tr>
                  <td>
                    <p>
                      <strong>Name </strong>
                    </p>
                    <p>
                      <strong></strong>
                    </p>
                  </td>
                  <td>
                    <p>
                      <strong>Russian translation</strong>
                    </p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>
                      Carbon Arc Welding
                    </p>
                  </td>
                  <td>
                    <p>
                      Сварка дуговая угольным электродом
                    </p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>
                      Flux Cored Arc Welding
                    </p>
                  </td>
                  <td>
                    <p>
                      Сварка дуговая порошковой проволковой с флюсовым
                      наполнителем в активном газе
                    </p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>
                      Gas Metal Arc Welding
                    </p>
                  </td>
                  <td>
                    <p>
                      Сварка дуговая сплошной проволкой в инертном газе
                    </p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>
                      Gas Tungsten Arc Welding
                    </p>
                  </td>
                  <td>
                    <p>
                      Сварка дуговая вольфрамовым электродом в инертном газе с
                      присадочным сплошном материалом (проволокой или стержнем)
                    </p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>
                      Plasma Arc Welding
                    </p>
                  </td>
                  <td>
                    <p>
                      Сварка дуговая плазменная
                    </p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>
                      Shielded Metal Arc Welding
                    </p>
                  </td>
                  <td>
                    <p>
                      Сварка ручная дуговая плавящимся электродом
                    </p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>
                      Submerged Arc Welding
                    </p>
                  </td>
                  <td>
                    <p>
                      Сварка дуговая под флюсом сплошной проволкой
                    </p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>
                      Magnetically Impelled Arc Butt
                    </p>
                  </td>
                  <td>
                    <p>
                      Сварка дугой, проводимой в движение магнитным полем
                    </p>
                  </td>
                </tr>
              </tbody>
            </table>
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