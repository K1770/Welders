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
    .the-main-information {
      background-image: url('_img/the-main-information.jpg');
    }

    .shadow-for-white-text {
      text-shadow: 2px 1px 2px black;
    }

    .fit-image-div {
      object-fit: cover;
    }
  </style>
</head>

<body>

  <div class="container">
    <?php include('fragments/header.php'); ?>

    <nav class="navbar navbar-expand-sm navbar-light " aria-label="Third navbar example" hidden>
      <div class="container-fluid">
        <a class="navbar-brand link-secondary" href="#">Expand at sm</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample03">
          <ul class="navbar-nav me-auto mb-2 mb-sm-0">
            <li class="nav-item">
              <a class="nav-link active link-secondary" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link-secondary" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle link-secondary" href="#" id="dropdown03" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
              <ul class="dropdown-menu" aria-labelledby="dropdown03">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  </div>

  <main class="container container2 mt-2">
    <div class="p-4 mb-4 text-white rounded bg-dark the-main-information">
      <div class="col-md-8 px-0">
        <h1 class="display-6 fst-italic shadow-for-white-text">The main information</h1>
        <p class="lead my-3 shadow-for-white-text">Personal site for the students of welding careers as a support in studying the English language as a professional component</p>
        <p class="lead mb-0"><a href="about.php" class="text-white fw-bold">Continue reading...</a></p>
      </div>
    </div>

    <div class="d-flex flex-row flex-nowrap overflow-auto scrollbar-div pb-1">
      <div class="card card-block mr-2 me-2" style="min-width: 45%;">
        <div class="row g-0 border rounded overflow-hidden flex-md-row shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">About</strong>
            <h3 class="mb-0">Module I</h3>
            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
            <a href="module-1/index.php" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block" style="background: red">
            <img class="bd-placeholder-img fit-image-div" width="200" height="250" src="_img/module1.jpg">
          </div>
        </div>
      </div>
      <div class="card card-block mr-2 me-2" style="min-width: 45%;">
        <div class="row g-0 border rounded overflow-hidden flex-md-row shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success">Mechanical</strong>
            <h3 class="mb-0">Module II</h3>
            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img class="bd-placeholder-img fit-image-div" width="200" height="250" src="_img/module2.jpg">
          </div>
        </div>
      </div>
      <div class="card card-block mr-2 me-2" style="min-width: 45%;">
        <div class="row g-0 border rounded overflow-hidden flex-md-row shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">About</strong>
            <h3 class="mb-0">Module III</h3>
            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img class="bd-placeholder-img fit-image-div" width="200" height="250" src="_img/module3.jpg">
          </div>
        </div>
      </div>
      <div class="card card-block mr-2" style="min-width: 45%;">
        <div class="row g-0 border rounded overflow-hidden flex-md-row shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">About</strong>
            <h3 class="mb-0">Module IV</h3>
            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img class="bd-placeholder-img fit-image-div" width="200" height="250" src="_img/module4.jpg">
          </div>
        </div>
      </div>
    </div>

  </main>
  <?php include('fragments/footer.php') ?>
</body>

</html>