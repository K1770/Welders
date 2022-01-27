<!doctype html>
<html lang="en">

<head>
  <title>English for welders</title>
  <?php include('../../fragments/links-style-main.php') ?>

  <link href="../../css/blog.css" rel="stylesheet">
  <link href="../../css/style-main.css" rel="stylesheet">
  <link href="../../css/style-basic.css" rel="stylesheet">
  <link href="../../css/sidebars.css" rel="stylesheet">
  <link href="../../assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <script src="../../js/sidebars.js"></script>
  <script src="../../assets/dist/js/bootstrap.bundle.min.js"></script> <!-- top menu -->

  <style>
    tr {
      border: solid 1px black;
    }

    table {
      width: 100%;
      table-layout: fixed;
    }



    @media only screen and (max-width: 768px) {
      .img-basic {
        width: 100%;
      }
    }

    td {
      border: solid 1px black;
      padding: 0.5rem;
      word-break: break-all;
    }

    .content {
      margin-bottom: 1rem;
    }
  </style>

</head>

<body>

  <div class="container">
    <?php include('../../fragments/header.php'); ?>
  </div>

  <main class="container container2">
    <section class="home-section ">
      <div class="row">

        <div class="col-md-3">
          <?php topicsOnly(
            '../../fragments/nav-sidebar-handbook-one.php',
            array(
              'categoryLink1' => '../../handbook/welders-clothing',
              'categoryLink2' => '../../handbook/welders-workplace',
              'categoryLink3' => '../../handbook/health-and-safety-prevention',

              'categoryLink4' => '../../handbook/metalwork',
              'categoryLink5' => '../../handbook/symbols-in-welding',
              'categoryLink6' => '../../handbook/how-to-weld',

              'categoryLink7' => '../../handbook/glossary',
              'categoryLink8' => '../../handbook/welding-calculations',
              'categoryLink9' => 'https://docs.google.com/forms/d/1C0wKzaX9HkreBmB_JpKrSmpA_lDO_DH7ovqTBVw9oOo/edit'
            )
          ); ?>
        </div> <!-- col-md-3 -->

        <div class="col-md-9">
          <div class="content">

            <div class="py-1 text-center container ">
              <h2 class="fw-light">Symbols in welding</h2>
            </div>
            <div class="text-center mb-2">
              <img class="text-center img-basic" src="_img/img1.png">
            </div>

            <table border="1" cellspacing="0" cellpadding="0">
              <tbody>
                <tr>
                  <td valign="top">
                    <p>
                      <strong>Name</strong>
                    </p>
                    <p>
                      <strong></strong>
                    </p>
                  </td>
                  <td valign="top">
                    <p>
                      <strong>ISO</strong>
                    </p>
                  </td>
                  <td valign="top">
                    <p>
                      <strong>AWS</strong>
                    </p>
                  </td>
                  <td valign="top">
                    <p>
                      <strong>Characteristics</strong>
                    </p>
                  </td>
                  <td valign="top">
                    <p>
                      <strong>Applications</strong>
                    </p>
                  </td>
                </tr>
                <tr>
                  <td valign="top">
                    <p>
                      Carbon Arc Welding
                    </p>
                  </td>
                  <td valign="top">
                    <p>
                      181
                    </p>
                  </td>
                  <td valign="top">
                    <p>
                      CAW
                    </p>
                  </td>
                  <td valign="top">
                    <p>
                      Carbon electrode
                    </p>
                  </td>
                  <td valign="top">
                    <p>
                      Copper, repair (limited)
                    </p>
                  </td>
                </tr>
                <tr>
                  <td valign="top">
                    <p>
                      Flux Cored Arc Welding
                    </p>
                  </td>
                  <td valign="top">
                    <p>
                      136
                    </p>
                    <p>
                      137
                    </p>
                  </td>
                  <td valign="top">
                    <p>
                      FCAW
                    </p>
                    <p>
                      FCAW-S
                    </p>
                  </td>
                  <td valign="top">
                    <p>
                      Continuous consumable electrode filled with flux
                    </p>
                  </td>
                  <td valign="top">
                    <p>
                      Industry, construction
                    </p>
                  </td>
                </tr>
                <tr>
                  <td valign="top">
                    <p>
                      Gas Metal Arc Welding
                    </p>
                  </td>
                  <td valign="top">
                    <p>
                      131
                    </p>
                    <p>
                      135
                    </p>
                  </td>
                  <td valign="top">
                    <p>
                      GMAW
                    </p>
                  </td>
                  <td valign="top">
                    <p>
                      Continuous consumable electrode and shielding gas
                    </p>
                  </td>
                  <td valign="top">
                    <p>
                      Industry
                    </p>
                  </td>
                </tr>
                <tr>
                  <td valign="top">
                    <p>
                      Gas Tungsten Arc Welding
                    </p>
                  </td>
                  <td valign="top">
                    <p>
                      141
                    </p>
                  </td>
                  <td valign="top">
                    <p>
                      GTAW
                    </p>
                  </td>
                  <td valign="top">
                    <p>
                      Nonconsumable electrode, slow, high quality welds
                    </p>
                  </td>
                  <td valign="top">
                    <p>
                      Aerospace, Construction (piping)
                    </p>
                  </td>
                </tr>
                <tr>
                  <td valign="top">
                    <p>
                      Plasma Arc Welding
                    </p>
                  </td>
                  <td valign="top">
                    <p>
                      15
                    </p>
                  </td>
                  <td valign="top">
                    <p>
                      PAW
                    </p>
                  </td>
                  <td valign="top">
                    <p>
                      Nonconsumable electrode, constricted arc
                    </p>
                  </td>
                  <td valign="top">
                    <p>
                      Tubing, instrumentation
                    </p>
                  </td>
                </tr>
                <tr>
                  <td valign="top">
                    <p>
                      Shielded Metal Arc Welding
                    </p>
                  </td>
                  <td valign="top">
                    <p>
                      111
                    </p>
                  </td>
                  <td valign="top">
                    <p>
                      SMAW
                    </p>
                  </td>
                  <td valign="top">
                    <p>
                      Consumable electrode covered in flux, can weld any metal as
                      long as they have the right electrode
                    </p>
                  </td>
                  <td valign="top">
                    <p>
                      Construction, outdoors, maintenance
                    </p>
                  </td>
                </tr>
                <tr>
                  <td valign="top">
                    <p>
                      Submerged Arc Welding
                    </p>
                  </td>
                  <td valign="top">
                    <p>
                      121
                    </p>
                  </td>
                  <td valign="top">
                    <p>
                      SAW
                    </p>
                  </td>
                  <td valign="top">
                    <p>
                      Automatic, arc submerged in granular flux
                    </p>
                  </td>
                  <td valign="top">
                    <p>
                      Pipelines
                    </p>
                  </td>
                </tr>
                <tr>
                  <td valign="top">
                    <p>
                      Magnetically Impelled Arc Butt
                    </p>
                  </td>
                  <td valign="top">
                    <p>
                      85
                    </p>
                  </td>
                  <td valign="top">
                    <p>
                      MIAB
                    </p>
                  </td>
                  <td valign="top">
                    <p>
                      Both tube ends are electrodes; no protection gas; arc
                      rotates fast along edge by applied magnetic field
                    </p>
                  </td>
                  <td valign="top">
                    <p>
                      Pipelines and tubes
                    </p>
                  </td>
                </tr>
              </tbody>
            </table>

          </div>
        </div>
      </div> <!-- col-md-8 -->

    </section>

  </main>

  <?php include('../../fragments/footer.php') ?>
</body>

</html>