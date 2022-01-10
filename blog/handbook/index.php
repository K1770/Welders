<!doctype html>
<html lang="en">

<head>
  <title>English for welders</title>
  <?php include('../fragments/links-style.php') ?>
  <link href="../css/blog.css" rel="stylesheet">
  <link href="../css/style-main.css" rel="stylesheet">
  <link href="../css/sidebars.css" rel="stylesheet">
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <script src="../js/sidebars.js"></script>
  <style>
    .shadow-for-white-text {
      text-shadow: 2px 1px 2px black;
    }

    .link-card {
      text-decoration: none;
      color: white;

      line-height: 1.35;
    }

    .link-card>span {
      display: inline;
      background-color: rgba(0, 0, 0, 0.4);
      box-shadow: -10px 0 0 rgba(0, 0, 0, 0.4), 10px 0 0 rgba(0, 0, 0, 0.4);
    }

    .link-card:hover {
      color: white;
    }
  </style>
</head>

<body>

  <div class="container">
    <?php include('../fragments/header.php'); ?>
  </div>

  <main class="container container2">

    <div class="py-1 text-center container ">
      <h2 class="fw-light">Topics</h2>
    </div>

    <div class="album py-2 bg-white">
      <div class="container">

        <div class="row row-cols-2 row-cols-sm-2 row-cols-md-5 g-3 mb-3 justify-content-center">

          <div class="col text-white align-items-stretch justify-content-center card-module text-center">
            <div class="card shadow-sm">
              <img class="card-img-top" src="_img/welders-clothing.png">
              <div class="card-img-overlay d-flex justify-content-center align-items-center shadow-for-white-text">
                <h4 class="display-6 fst-italic card-title">
                  <a href="basic-information" class="stretched-link link-card"><span>Welder’s clothing</span></a>
                </h4>
              </div>
            </div>
          </div> <!-- col end-->

          <div class="col text-white align-items-stretch justify-content-center card-module text-center">
            <div class="card shadow-sm">
              <img class="card-img-top" src="_img/welders-workplace.png">
              <div class="card-img-overlay d-flex justify-content-center align-items-center shadow-for-white-text">
                <h4 class="display-6 fst-italic card-title">
                  <a href="basic-information" class="stretched-link link-card"><span>Welder’s workplace</span></a>
                </h4>
              </div>
            </div>
          </div> <!-- col end-->

          <div class="col text-white align-items-stretch justify-content-center card-module text-center">
            <div class="card shadow-sm">
              <img class="card-img-top" src="_img/health-and-safety-prevention.png">
              <div class="card-img-overlay d-flex justify-content-center align-items-center shadow-for-white-text">
                <h4 class="display-6 fst-italic card-title">
                  <a href="basic-information" class="stretched-link link-card"><span>Health and safety prevention</span></a>
                </h4>
              </div>
            </div>
          </div> <!-- col end-->

          <div class="col text-white align-items-stretch justify-content-center card-module text-center">
            <div class="card shadow-sm">
              <img class="card-img-top" src="_img/metal-work.png">
              <div class="card-img-overlay d-flex justify-content-center align-items-center shadow-for-white-text">
                <h4 class="display-6 fst-italic card-title">
                  <a href="basic-information" class="stretched-link link-card"><span>Metalwork</span></a>
                </h4>
              </div>
            </div>
          </div> <!-- col end-->

          <div class="col text-white align-items-stretch justify-content-center card-module text-center">
            <div class="card shadow-sm">
              <img class="card-img-top" src="_img/symbols.png">
              <div class="card-img-overlay d-flex justify-content-center align-items-center shadow-for-white-text">
                <h4 class="display-6 fst-italic card-title">
                  <a href="basic-information" class="stretched-link link-card"><span>Symbols in welding</span></a>
                </h4>
              </div>
            </div>
          </div>
          <!--col end-->
        </div> <!-- row -->

        <div class="row row-cols-2 row-cols-sm-2 row-cols-md-5 g-3 mb-3 justify-content-center">

          <div class="col text-white align-items-stretch justify-content-center card-module text-center">
            <div class="card shadow-sm">
              <img class="card-img-top" src="_img/glossary2.png">
              <div class="card-img-overlay d-flex justify-content-center align-items-center shadow-for-white-text">
                <h4 class="display-6 fst-italic card-title">
                  <a href="basic-information" class="stretched-link link-card"><span>Glossary</span></a>
                </h4>
              </div>
            </div>
          </div>
          <!--col end-->

          <div class="col text-white align-items-stretch justify-content-center card-module text-center">
            <div class="card shadow-sm">
              <img class="card-img-top" src="_img/test.png">
              <div class="card-img-overlay d-flex justify-content-center align-items-center shadow-for-white-text">
                <h4 class="display-6 fst-italic card-title">
                  <a href="https://docs.google.com/forms/d/1C0wKzaX9HkreBmB_JpKrSmpA_lDO_DH7ovqTBVw9oOo/edit" class="stretched-link link-card"><span>Test</span></a>
                </h4>
              </div>
            </div>
          </div>
          <!--col end-->

        </div> <!-- row -->
      </div>
    </div>

  </main>

  <?php include('../fragments/footer.php') ?>
</body>

</html>