<!doctype html>
<html lang="en">

<head>
  <title>English for welders</title>
  <?php include('../../fragments/links-style-main.php'); ?>

  <link href="/welders/css/blog.css" rel="stylesheet">
  <link href="/welders/css/style-main.css" rel="stylesheet">
  <link href="/welders/css/sidebars.css" rel="stylesheet">
  <link href="/welders/assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <script src="/welders/js/sidebars.js"></script>
  <script src="/welders/assets/dist/js/bootstrap.bundle.min.js"></script> <!-- top menu -->
</head>

<body>

  <div class="container">
    <?php
    include('../../fragments/header.php');
    ?>
  </div>

  <main class="container container2">

    <div class="py-1 text-center container ">
      <h2 class="fw-light">The history of weilding - Categories</h2>
    </div>

    <div class="album py-2 bg-white">
      <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3 justify-content-center ">

          <div class="col d-flex align-items-stretch justify-content-center">
            <div class="card shadow-sm">
              <img class="card-img-top card-img-cover pt-2 px-5" src="../../_img/basic-information.png">

              <div class="card-body text-center justify-content-center d-flex align-items-center">
                <p class="card-text fw-bold fs-5"><a href="basic-information" class="stretched-link nice-link">Basic Information</a></p>
              </div>
            </div>
          </div> <!-- col end-->

          <div class="col d-flex align-items-stretch justify-content-center">
            <div class="card shadow-sm">
              <img class="card-img-top card-img-cover pt-2 px-5" src="../../_img/video.png">

              <div class="card-body text-center justify-content-center d-flex align-items-center">
                <p class="card-text fw-bold fs-5"><a href="video" class="stretched-link nice-link">Video</a></p>
              </div>
            </div>
          </div> <!-- col end-->

          <div class="col d-flex align-items-stretch justify-content-center">
            <div class="card shadow-sm">
              <img class="card-img-top card-img-cover pt-2 px-5" src="../../_img/vocabulary.png">

              <div class="card-body text-center justify-content-center d-flex align-items-center">
                <p class="card-text fw-bold fs-5"><a href="vocabulary" class="stretched-link nice-link">Vocabulary</a></p>
              </div>
            </div>
          </div> <!-- col end-->

        </div>
      </div>
    </div>

  </main>

  <?php include('../../fragments/footer.php') ?>

</body>

</html>