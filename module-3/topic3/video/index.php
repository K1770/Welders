<!doctype html>
<html lang="en">

<head>
  <title>English for welders</title>
  <?php include('../../../fragments/links-style-main.php') ?>

  <link href="../../../css/blog.css" rel="stylesheet">
  <link href="../../../css/style-main.css" rel="stylesheet">
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
        </div> <!-- col-md-3-->

        <div class="col-md-9">

          <div class="pt-1 text-center container">
            <h2 class="fw-light">Video - Arc and Gas Welding</h2>
          </div>

          <div class="justify-content-centers m-4">
            <div class="bd-example mb-1" bis_skin_checked="1">
              <div class="embed-responsive embed-responsive-16by9 thumb-wrap" bis_skin_checked="1">
                <iframe class="embed-responsive-item" width=" " height=" " src="https://www.youtube.com/embed/oTAJBVasB7M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
            <div class="bd-example mb-1" bis_skin_checked="1">
              <div class="embed-responsive embed-responsive-16by9 thumb-wrap" bis_skin_checked="1">
                <iframe class="embed-responsive-item" width=" " height=" " src="https://www.youtube.com/embed/LOu-2g6Ha1k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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