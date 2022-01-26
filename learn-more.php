<!doctype html>
<html lang="en">

<head>
  <title>English for welders</title>
  <?php include('fragments/links-style.php') ?>
  <link href="css/blog.css" rel="stylesheet">
  <link href="css/style-main.css" rel="stylesheet">
  <link href="css/sidebars.css" rel="stylesheet">
  <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <script src="js/sidebars.js"></script>
  <!-- <script src="assets/dist/js/bootstrap.bundle.min.js"></script> top menu -->
  <style>
    .content {
      margin-bottom: 1rem;
    }

    .btn-white {
      border: solid 1px gray;
    }

    .btn-white:hover {
      background-color: #e1e0e047;
    }
  </style>
</head>

<body>

  <div class="container">
    <?php include('fragments/header.php'); ?>
  </div>

  <main class="container container2 mt-2">

    <div class="row">
      <div class="col-md-4">
        <?php include('fragments/nav-sidebar-modules.php'); ?>
      </div>
      <div class="col-md-8">
        <div class="content">

          <div class="pt-1 text-center container">
            <h2 class="fw-light">Learn more</h2>
          </div>
          <a href="newsletter_01.pdf" target="_blank">

            <div class="d-grid gap-2 col-11 mx-auto">
              <a class="btn btn-white" type="button" target="_blank" href="/welders/learn-more-materials/Ageeva, English for welders.pdf">
                Ageeva, English for welders.pdf
              </a>
              <a class="btn btn-white" type="button" target="_blank" href="/welders/learn-more-materials/Grichin, English for welders.pdf">
                Grichin, English for welders.pdf
              </a>
              <a class="btn btn-white" type="button" target="_blank" href="/welders/learn-more-materials/Welding science and technology.pdf">
                Welding science and technology.pdf
              </a>
              <a class="btn btn-white" type="button" target="_blank" href="/welders/learn-more-materials/Welding techniques.pdf">
                Welding techniques.pdf
              </a>
            </div>
        </div>
      </div>
    </div>

  </main>
  <?php include('fragments/footer.php') ?>
</body>

</html>