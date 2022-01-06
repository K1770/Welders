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
  <!-- top menu -->
  <!-- <script src="assets/dist/js/bootstrap.bundle.min.js"></script>  -->

</head>

<body>
  <div class="container">
    <?php include('fragments/header.php'); ?>
  </div>

  <main class="container container2">

    <section class="home-section ">

      <div class="row">
        <div class="col-md-4">

          <?php include('fragments/nav-sidebar-modules.php'); ?>
        </div> <!-- col-md-3 -->

        <div class="col-md-8">

          <div class="py-1 text-center container ">
            <h2 class="fw-light">Podcasts</h2>
          </div>

          <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
          Dashboard
        </button>
        <div class="collapse" id="dashboard-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-dark rounded">Overview</a></li>
            <li><a href="#" class="link-dark rounded">Weekly</a></li>
            <li><a href="#" class="link-dark rounded">Monthly</a></li>
            <li><a href="#" class="link-dark rounded">Annually</a></li>
          </ul>
        </div>

          

        </div>

      </div> <!-- col-md-8 -->

      </div>

      </div>
    </section>

  </main>

  <?php include('fragments/footer.php') ?>

</body>

</html>